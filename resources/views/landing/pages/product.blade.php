@extends('landing.app')
@section('content')
@include('landing.partials.header')
    <div class="content-wrapper">
        <section class="wrapper bg-light">
            <div class="container pt-10 pt-md-14">
                <div class="row">
                    <div class="col-lg-10 col-xxl-8">
                        <h1 class="display-1 mb-0">Our Product.</h1>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="grid grid-view projects-masonry">
                    <div class="isotope-filter filter mb-10">
                        <p style="font-weight:600; color:black">Filter :</p>
                        <ul>
                            <li><a class="filter-item" data-filter="*">All</a></li>
                            @foreach ($productcategories as $category)
                                <li><a class="filter-item" data-filter=".{{ $category->title }}">{{ $category->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="row gx-md-10 gy-10 gy-md-13">
                        @foreach ($products as $item)
                            <div class="col-md-6 mb-4 product-item {{ $item->productcategory->title }}">
                                <div class="project item product">
                                    <figure class="lift rounded mb-6">
                                        <!-- Tambahkan tautan ke halaman detail -->
                                        <a href="{{ url('products/detail/' . $item->uuid) }}">
                                            <img src="{{ App\Models\Media::getimageweb($item->meta['media_token']) }}"
                                                alt="{{ $item->name }}" />
                                        </a>
                                    </figure>
                                    <div class="project-details d-flex justify-content-center flex-column">
                                        <div class="product-header">
                                            <div class="product-category text-line mb-2 text-purple">
                                                {{ $item->productcategory['title'] }}
                                            </div>
                                            <!-- Tambahkan tautan ke halaman detail -->
                                            <h3 class="product-title">
                                                <a href="{{ url('products/detail/' . $item->uuid) }}">
                                                    {{ $item->name }}
                                                </a>
                                            </h3>
                                        </div>
                                        <!-- /.product-header -->
                                    </div>
                                    <!-- /.project-details -->
                                </div>
                                <!-- /.project -->
                            </div>
                        @endforeach
                    </div>
                    <nav class="d-flex" aria-label="pagination">
                        <ul class="pagination">
                            <li class="page-item {{ $products->previousPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link " href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>
                                </a>
                            </li>
                            @for ($i = 1; $i <= $products->lastPage(); $i++)
                                <li class="page-item {{ $i == $products->currentPage() ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="page-item {{ $products->nextPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $products->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                        <!-- /.pagination -->
                    </nav>
                    <!-- /.row -->
                </div>
                <!-- /.grid -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.filter-item').on('click', function() {
                var filterValue = $(this).data('filter');
                $('.product-item').hide();
                $(filterValue).show();
            });
        });
    </script>
@endsection
