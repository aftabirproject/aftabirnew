@extends('app.layouts.app')
@section('content')
    <div class="container-fluid ">
        <!--*****************************desktop view*************************-->
        <section id="demos" class="p-0 media-content">
            <div class="row">
                <div class="columns">
                    <div class="owl-carousel owl-theme">
                        @for ($c = 0; $c < 2; $c++)
                            <div class="item">
                                @for ($j = 0; $j < 2; $j++)
                                    <div class="d-flex col-12">
                                        @for ($t = 0; $t < 2; $t++)
                                            <div class="card col-6 box-shadow bg-light @if($j==0) mt-4 @else mt-1 @endif mr-1">

                                                @for ($i = 0; $i < 4; $i++)

                                                    <a href='{{ route('category') }}' class='text-dark'
                                                       style="text-decoration: none">
                                                        <div class="media container-overly ml-3 mt-1 ">

                                                            <img src="https://images.unsplash.com/photo-1523995462485-3d171b5c8fa9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                                                 class="mr-3 " alt="news" width='50px' height='50px'>

                                                            <div class="overlay2"></div>
                                                            <div class="media-body">
                                                                <h5 class="mt-0">Irna News</h5>
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                    elit.</p>
                                                            </div>

                                                        </div>
                                                    </a>
                                                @endfor

                                            </div>
                                        @endfor

                                    </div>
                                @endfor
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        <!--************************************mobile view******************************-->
        <section id="demos" class="p-0 d-lg-none ">
            <div class="row">
                <div class=" columns">
                    <div class="owl-carousel owl-theme">
                        @for ($j = 0; $j < 2; $j++)
                            <div class="item">
                                <div class="card bg-light box-shadow mt-3 mb-2 ml-2 mr-2"
                                     style="overflow-y: scroll; height: 80vh">
                                    <div class="media container-overly ml-3 pt-3 pr-0 mr-3">
                                        @for ($i = 0; $i < 4; $i++)
                                            <a href="{{ route('category') }}"
                                               class="text-dark">
                                                <img src="https://images.unsplash.com/photo-1523995462485-3d171b5c8fa9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                                     class="mr-3 image" alt="news" width="50px" height="50px">

                                                <div class="overlay2"></div>
                                                <div class="media-body">
                                                    <h5 class="mt-0">Irna News</h5>
                                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                                </div>
                                            </a>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection