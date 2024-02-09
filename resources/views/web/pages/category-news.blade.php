@extends('web.layout.master')
@section('content')
    <main>
        <section class="sec-inner-banner" data-bg-image="{{ asset(getCMS('news_banner', 'value')) }}">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="desc">
                            <h4>{{ getCMS('news_banner_title','value') }}</h4>
                            <ul>
                                <li><a href="{{ route('index') }}">home</a></li>
                                <li>News</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sec-news">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="head">
                            <h6>NEWS</h6>
                            <h4>Latest News</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 getnews">
                        @foreach ($news as $key => $item)
                            <div class="card blog-detail">
                                <div class="img">
                                    <img src="{{ asset($item->image) }}" class="img-fluid thumb" alt="">
                                </div>

                                <div class="desc">
                                    <h6>{{ $item->title }}</h6>

                                    <p>{{ $item->description }}</p>

                                    <ul>
                                        <li class="usr-icn">
                                            By Admin
                                        </li>
                                        <li class="cln-icn">
                                            {{ date('d M, Y', strtotime($item->created_at)) }}
                                        </li>

                                        <li class="vws-icn">
                                            100 Views
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="side-bar-main">
                            <div class="search-bar">
                                <form id="search-form">
                                    <div class="input-field">
                                        <input class="form-control search-control" id="query" name="query"
                                            type="search" placeholder="what are you interested in ?">
                                        <button class="btn search-btn" type="search">
                                            <i class="fal fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="category">
                                <h5>category</h5>
                                <ul>
                                    @foreach ($category as $item)
                                        <li>
                                            <a href="{{ route('category.news', $item->id) }}"
                                                data-text="{{ $item->getNews->count() }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="news">
                                <h5>popular feeds</h5>
                                @foreach ($popular_news as $item)
                                    <div class="card news-card">
                                        <div class="img">
                                            <img src="{{ asset($item->image) }}" class="img-fluid thumb" alt="">
                                        </div>
                                        <div class="desc">
                                            <a href="void:;">{{ $item->title }}</a>
                                            <ul>
                                                <li>{{ date('d M', strtotime($item->created_at)) }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- <div class="tags">
                                <h5>popular Tags</h5>
                                <ul>
                                    <li><a href="void:;">Absolute monarchy</a></li>
                                    <li><a href="void:;">Tyranny</a></li>
                                    <li><a href="void:;">Technocracy</a></li>
                                    <li><a href="void:;">Plutocracy</a></li>
                                    <li><a href="void:;">Panarchy</a></li>
                                    <li><a href="void:;">Monarchy</a></li>
                                    <li><a href="void:;">Dictatorship</a></li>
                                    <li><a href="void:;">Despotism</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="pagination-main">
                            <ul class="page-ul">
                                {!! $news->links('pagination::bootstrap-4') !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#search-form').on('submit', function(e) {
                e.preventDefault();
                var query = $('#query').val();
                $.ajax({
                    type: 'get',
                    dataType: 'json',
                    url: "{{ route('search.news') }}",
                    data: {
                        query: query
                    },
                    success: function(response) {
                        $(".getnews").html(response.body);
                    }
                });
            });
        });
    </script>
@endsection
