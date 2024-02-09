@extends('layouts.main')
@section('content')
    <main>
        <div class="container-fluid site-width">
            <!-- START: Breadcrumbs-->
            <div class="row ">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto">
                            <h4 class="mb-0">WEB CMS</h4>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">System</li>
                            <li class="breadcrumb-item active"><a href="#">Configuration</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->
            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Banners</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="{{ route('cms.generator') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            {{-- home section start --}}
                                            <div class="row mb-3">
                                                <div class="col-md-12 mb-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <h5 class="cms-heading">Home</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label
                                                                class="col-md-12 col-sm-12 col-form-label">{{ getCMS('home_banner_image', 'name') }}</label>
                                                        </div>
                                                        <img class="banner-image"
                                                            src="{{ asset(getCMS('home_banner_image', 'value')) }}">
                                                        <input style="display:none;" type="file"
                                                            name="{{ getCMS('home_banner_image', 'slug') }}">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <label for="validationCustomUsername"></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span
                                                                class="input-group-text">{{ getCMS('home_banner_title', 'name') }}</span>
                                                        </div>
                                                        <input required class="form-control input-cms" type="text"
                                                            name="{{ getCMS('home_banner_title', 'slug') }}"
                                                            value="{{ getCMS('home_banner_title', 'value') }}">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <label for="validationCustomUsername"></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span
                                                                class="input-group-text">{{ getCMS('home_banner_heading', 'name') }}</span>
                                                        </div>
                                                        <input required class="form-control input-cms" type="text"
                                                            name="{{ getCMS('home_banner_heading', 'slug') }}"
                                                            value="{{ getCMS('home_banner_heading', 'value') }}">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <label for="validationCustomUsername"></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span
                                                                class="input-group-text">{{ getCMS('home_banner_description', 'name') }}</span>
                                                        </div>
                                                        <textarea required rows="5" class="form-control input-cms" id="description"
                                                            name="{{ getCMS('home_banner_description', 'slug') }}">{{ getCMS('home_banner_description', 'value') }}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>
                                            {{-- home section end --}}



                                            {{-- Politics section start --}}

                                            <div class="row mb-3">
                                                <div class="col-md-12 mb-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <h5 class="cms-heading">Politics</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label
                                                                class="col-md-12 col-sm-12 col-form-label">{{ getCMS('poltics_banner_image', 'name') }}</label>
                                                        </div>
                                                        <img class="banner-image"
                                                            src="{{ asset(getCMS('poltics_banner_image', 'value')) }}">
                                                        <input style="display:none;" type="file"
                                                            name="{{ getCMS('poltics_banner_image', 'slug') }}">
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <label for="validationCustomUsername"></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span
                                                                class="input-group-text">{{ getCMS('politics_banner_title', 'name') }}</span>
                                                        </div>
                                                        <input required class="form-control input-cms" type="text"
                                                            name="{{ getCMS('politics_banner_title', 'slug') }}"
                                                            value="{{ getCMS('politics_banner_title', 'value') }}">
                                                    </div>
                                                </div>


                                            </div>
                                            <hr>
                                            {{-- Politics section end --}}


                                            {{-- news section start --}}


                                            <div class="row mb-3">
                                                <div class="col-md-12 mb-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <h5 class="cms-heading">News</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label
                                                                class="col-md-12 col-sm-12 col-form-label">{{ getCMS('news_banner', 'name') }}</label>
                                                        </div>
                                                        <img class="banner-image"
                                                            src="{{ asset(getCMS('news_banner', 'value')) }}">
                                                        <input style="display:none;" type="file"
                                                            name="{{ getCMS('news_banner', 'slug') }}">
                                                    </div>
                                                </div>


                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <label for="validationCustomUsername"></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span
                                                                class="input-group-text">{{ getCMS('news_banner_title', 'name') }}</span>
                                                        </div>
                                                        <input required class="form-control input-cms" type="text"
                                                            name="{{ getCMS('news_banner_title', 'slug') }}"
                                                            value="{{ getCMS('news_banner_title', 'value') }}">
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>
                                            {{-- news section end --}}


                                            {{-- Watch List start --}}
                                            <div class="row mb-3">
                                                <div class="col-md-12 mb-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <h5 class="cms-heading">Watch List</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label
                                                                class="col-md-12 col-sm-12 col-form-label">{{ getCMS('watchlist_banner', 'name') }}</label>
                                                        </div>
                                                        <img class="banner-image"
                                                            src="{{ asset(getCMS('watchlist_banner', 'value')) }}">
                                                        <input style="display:none;" type="file"
                                                            name="{{ getCMS('watchlist_banner', 'slug') }}">
                                                    </div>
                                                </div>


                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <label for="validationCustomUsername"></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span
                                                                class="input-group-text">{{ getCMS('watchlist_banner_title', 'name') }}</span>
                                                        </div>
                                                        <input required class="form-control input-cms" type="text"
                                                            name="{{ getCMS('watchlist_banner_title', 'slug') }}"
                                                            value="{{ getCMS('watchlist_banner_title', 'value') }}">
                                                    </div>
                                                </div>




                                            </div>
                                            <hr>
                                            {{-- Watch List end --}}



                                            {{-- Political Points start --}}

                                            <div class="row mb-3">
                                                <div class="col-md-12 mb-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <h5 class="cms-heading">Political Points</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label
                                                                class="col-md-12 col-sm-12 col-form-label">{{ getCMS('poltics_points_banner', 'name') }}</label>
                                                        </div>
                                                        <img class="banner-image"
                                                            src="{{ asset(getCMS('poltics_points_banner', 'value')) }}">
                                                        <input style="display:none;" type="file"
                                                            name="{{ getCMS('poltics_points_banner', 'slug') }}">
                                                    </div>
                                                </div>



                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <label for="validationCustomUsername"></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span
                                                                class="input-group-text">{{ getCMS('politics_point_title', 'name') }}</span>
                                                        </div>
                                                        <input required class="form-control input-cms" type="text"
                                                            name="{{ getCMS('politics_point_title', 'slug') }}"
                                                            value="{{ getCMS('politics_point_title', 'value') }}">
                                                    </div>
                                                </div>
                                            </div>




                                            <hr>
                                            {{-- Political Points end --}}


                                            {{-- Contact us start --}}

                                            <div class="row mb-3">
                                                <div class="col-md-12 mb-12">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <h5 class="cms-heading">Contact us</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <label
                                                                class="col-md-12 col-sm-12 col-form-label">{{ getCMS('contact_us_banner', 'name') }}</label>
                                                        </div>
                                                        <img class="banner-image"
                                                            src="{{ asset(getCMS('contact_us_banner', 'value')) }}">
                                                        <input style="display:none;" type="file"
                                                            name="{{ getCMS('contact_us_banner', 'slug') }}">
                                                    </div>
                                                </div>



                                                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-6">
                                                    <label for="validationCustomUsername"></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span
                                                                class="input-group-text">{{ getCMS('contact_us_title', 'name') }}</span>
                                                        </div>
                                                        <input required class="form-control input-cms" type="text"
                                                            name="{{ getCMS('contact_us_title', 'slug') }}"
                                                            value="{{ getCMS('contact_us_title', 'value') }}">
                                                    </div>
                                                </div>

                                            </div>
                                            <hr>
                                            {{-- Contact us end --}}

                                            {{--  submit button --}}
                                            <button class="btn btn-primary submit-button-cms" type="submit">Submit
                                                form</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END: Card DATA-->
        </div>
    </main>
@endsection
@section('css')
    <style>
        .banner-image {
            padding: 10px;
            width: 400px;
            height: 200px;
        }

        .max-size-banner-images {
            width: 100%;
        }
    </style>
@endsection
@section('js')
    <script>
        $(document).on("click", ".banner-image", function() {
            $(this).closest(".input-group").find("input").trigger("click");
        });
    </script>
@endsection
