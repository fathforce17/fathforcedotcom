<?php

namespace App\Services\Customize;

use App\Contracts\ListGenerator;
use App\Http\Resources\Customize\ServicetextResource;
use App\Models\Customize\Servicetext;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ServicetextListService extends ListGenerator
{
    protected $allowedSorts = ['created_at', 'name'];

    protected $defaultSort = 'name';

    public function getHeaders(): array
    {
        $headers = [
            [
                'key' => 'name',
                'label' => trans('customize.servicetext.props.name'),
                'sortable' => true,
                'visibility' => true,
            ],
        ];

        if (request()->ajax()) {
            $headers[] = $this->actionHeader;
        }

        return $headers;
    }

    public function filter(Request $request): Builder
    {
        return Servicetext::query()
            ->filter([
                'App\QueryFilters\LikeMatch:search,name',
            ]);
    }

    public function paginate(Request $request): AnonymousResourceCollection
    {
        $sort = $this->getSort($this->allowedSorts, $this->defaultSort);
        $order = $this->getOrder($this->defaultOrder);
        $perPage = $this->getPageLength();
        $currentPage = $this->getCurrentPage();

        return ServicetextResource::collection($this->filter($request)
            ->orderBy($sort, $order)
            ->paginate((int) $perPage, ['*'], 'current_page'))
            ->additional([
                'headers' => $this->getHeaders(),
                'meta' => [
                    'allowed_sorts' => $this->allowedSorts,
                    'default_sort' => $this->defaultSort,
                    'default_order' => $this->defaultOrder,
                ],
            ]);
    }

    public function list(Request $request): AnonymousResourceCollection
    {
        return $this->paginate($request);
    }
}
