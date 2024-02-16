<?php

namespace App\Imports\Master;

use App\Concerns\ItemImport;
use App\Models\Master\Testimony;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TestimonyImport implements ToCollection, WithHeadingRow
{
  use ItemImport;

  protected $limit = 10;

  public function collection(Collection $rows)
  {
    if (count($rows) > $this->limit) {
      throw ValidationException::withMessages(['message' => trans('general.errors.max_import_limit_crossed', ['attribute' => $this->limit])]);
    }

    $logFile = $this->getLogFile('testimony');

    $errors = $this->validate($rows);

    $this->checkForErrors('testimony', $errors);

    if (!request()->boolean('validate') && !Storage::exists($logFile)) {
      $this->import($rows);
    }
  }

  private function import(Collection $rows)
  {
    activity()->disableLogging();

    foreach ($rows as $row) {
      $testimony = Testimony::forceCreate([
        'name' => Arr::get($row, 'name'),
        'description' => Arr::get($row, 'description'),
      ]);
    }

    activity()->enableLogging();
  }

  private function validate(Collection $rows)
  {
    $errors = [];
    foreach ($rows as $index => $row) {
      $rowNo = $index + 2;

      $title = Arr::get($row, 'name');
      $description = Arr::get($row, 'description');

      if (!$title) {
        $errors[] = $this->setError($rowNo, trans('master.testimony.props.name'), 'required');
      } elseif (strlen($title) < 2 || strlen($title) > 500) {
        $errors[] = $this->setError($rowNo, trans('master.testimony.props.name'), 'min_max', ['min' => 2, 'max' => 500]);
      }
    }

    return $errors;
  }
}
