@extends('web.layout.master')
@section('content')

<main>
    <section class="sec-inner-banner" data-bg-image="web/images/news-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                    <div class="desc">
                        <h4>News</h4>
                        <ul>
                            <li><a href="{{route('index')}}">home</a></li>
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
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="card blog-detail">
                        <div class="img">
                            <img src="{{asset('web/images/ne1.jpg')}}" class="img-fluid thumb" alt="">
                        </div>

                        <div class="desc">
                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h6>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla delectus voluptate quod,
                                vero ullam quisquam id aliquid, ea quis atque ipsa et soluta! Ducimus repellat vero
                                voluptatem eum, voluptates nihil. Beatae iure cupiditate quidem numquam aliquam
                                reiciendis quis fuga dicta dolores quos laboriosam, minus assumenda ipsa eligendi
                                minima, ab itaque vitae odit! Aperiam natus hic sint harum explicabo non cum perferendis
                                minus maxime, laborum, voluptatem mollitia inventore aspernatur dolores quae, obcaecati
                                ex porro consequatur fugiat. Rerum in rem praesentium maiores expedita similique sint
                                dolor illum quibusdam ipsa saepe perspiciatis quasi asperiores et eum aliquid velit quis
                                consequuntur temporibus, architecto porro?</p>

                            <ul>
                                <li class="usr-icn">
                                    By Admin
                                </li>
                                <li class="cln-icn">
                                    28 January, 2020
                                </li>

                                <li class="vws-icn">
                                    100 Views
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card blog-detail">
                        <div class="img">
                            <img src="{{asset('web/images/ne2.jpg')}}" class="img-fluid thumb" alt="">
                        </div>

                        <div class="desc">
                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h6>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla delectus voluptate quod,
                                vero ullam quisquam id aliquid, ea quis atque ipsa et soluta! Ducimus repellat vero
                                voluptatem eum, voluptates nihil. Beatae iure cupiditate quidem numquam aliquam
                                reiciendis quis fuga dicta dolores quos laboriosam, minus assumenda ipsa eligendi
                                minima, ab itaque vitae odit! Aperiam natus hic sint harum explicabo non cum perferendis
                                minus maxime, laborum, voluptatem mollitia inventore aspernatur dolores quae, obcaecati
                                ex porro consequatur fugiat. Rerum in rem praesentium maiores expedita similique sint
                                dolor illum quibusdam ipsa saepe perspiciatis quasi asperiores et eum aliquid velit quis
                                consequuntur temporibus, architecto porro?</p>

                            <ul>
                                <li class="usr-icn">
                                    By Admin
                                </li>
                                <li class="cln-icn">
                                    28 January, 2020
                                </li>

                                <li class="vws-icn">
                                    100 Views
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card blog-detail">
                        <div class="img">
                            <img src="{{asset('web/images/ne3.jpg')}}" class="img-fluid thumb" alt="">
                        </div>

                        <div class="desc">
                            <h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h6>

                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla delectus voluptate quod,
                                vero ullam quisquam id aliquid, ea quis atque ipsa et soluta! Ducimus repellat vero
                                voluptatem eum, voluptates nihil. Beatae iure cupiditate quidem numquam aliquam
                                reiciendis quis fuga dicta dolores quos laboriosam, minus assumenda ipsa eligendi
                                minima, ab itaque vitae odit! Aperiam natus hic sint harum explicabo non cum perferendis
                                minus maxime, laborum, voluptatem mollitia inventore aspernatur dolores quae, obcaecati
                                ex porro consequatur fugiat. Rerum in rem praesentium maiores expedita similique sint
                                dolor illum quibusdam ipsa saepe perspiciatis quasi asperiores et eum aliquid velit quis
                                consequuntur temporibus, architecto porro?</p>

                            <ul>
                                <li class="usr-icn">
                                    By Admin
                                </li>
                                <li class="cln-icn">
                                    28 January, 2020
                                </li>

                                <li class="vws-icn">
                                    100 Views
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="side-bar-main">
                        <div class="search-bar">
                            <form action="">
                                <div class="input-field">
                                    <input class="form-control search-control" type="search"
                                        placeholder="what are you interested in ?">
                                    <button class="btn search-btn" type="search">
                                        <i class="fal fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="category">
                            <h5>category</h5>
                            <ul>
                                <li>
                                    <a href="javascript:;" data-text="10">Political theory</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-text="20">Sovereignty</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-text="55">Consent of the governed</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-text="67">Theories of Political Behavior</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-text="5">Political game</a>
                                </li>
                            </ul>
                        </div>

                        <div class="news">
                            <h5>popular feeds</h5>
                            <div class="card news-card">
                                <div class="img">
                                    <img src="{{asset('web/images/ne1.jpg')}}" class="img-fluid thumb" alt="">
                                </div>
                                <div class="desc">
                                    <a href="void:;">Lorem ipsum dolor sit amet.</a>
                                    <ul>
                                        <li>15 October</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card news-card">
                                <div class="img">
                                    <img src="{{asset('web/images/ne2.jpg')}}" class="img-fluid thumb" alt="">
                                </div>
                                <div class="desc">
                                    <a href="void:;">Lorem ipsum dolor sit amet.</a>
                                    <ul>
                                        <li>15 October</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card news-card">
                                <div class="img">
                                    <img src="{{asset('web/images/ne3.jpg')}}" class="img-fluid thumb" alt="">
                                </div>
                                <div class="desc">
                                    <a href="void:;">Lorem ipsum dolor sit amet.</a>
                                    <ul>
                                        <li>15 October</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tags">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="pagination-main">
                        <ul class="page-ul">
                            <li class="page-li"><a href="javascript:" class="page-a">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </a></li>
                            <li class="page-li"><a href="javascript:" class="page-a">1</a></li>
                            <li class="page-li"><a href="javascript:" class="page-a">2</a></li>
                            <li class="page-li"><a href="javascript:" class="page-a">3</a></li>
                            <li class="page-li"><a href="javascript:" class="page-a">4</a></li>
                            <li class="page-li"><a href="javascript:" class="page-a">5</a></li>
                            <li class="page-li"><a href="javascript:" class="page-a">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection
