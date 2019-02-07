@extends('app.layouts.app')
@section('content')
    <div class="container mb-5 " style="margin-top: 5rem">
        <div class="row">
            <div class="col-12 row">
                <div class="col-lg-8 p-0 ">
                    <div class="ml-4">
                        <div><h2>News</h2></div>
                        <div class="border text-center text-lg-left box-shadow">
                            @for ($i = 0; $i < 10; $i++)
                                <div class="media container-overly ml-3 my-3 mr-3">
                                    <a href='{{ route('article') }}' class='text-dark'>
                                        <img src="https://images.unsplash.com/photo-1523995462485-3d171b5c8fa9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                                             class="mr-3 image" alt="news">
                                    </a>
                                    <div class="overlay"></div>
                                    <div class="media-body">
                                        <h5 class="mt-0">Irna News</h5>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

            <aside class="col-lg-4 p-0">
                <div class="px-0  ml-4  ml-lg-2">
                    <h2>Categoris</h2>
                    <ul class="px-0 box-shadow">
                        <li class="list-unstyled text-center"><a href="article.blade.php"
                                                                 class=" page-link border-bottom-0 text-dark">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. </a></li>
                        <li class="list-unstyled text-center"><a href="article.blade.php"
                                                                 class=" page-link border-bottom-0 text-dark">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. </a></li>
                        <li class="list-unstyled text-center"><a href="article.blade.php"
                                                                 class=" page-link border-bottom-0 text-dark">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit.</a></li>
                        <li class="list-unstyled text-center"><a href="article.blade.php"
                                                                 class=" page-link border-bottom-0 text-dark">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. </a></li>
                        <li class="list-unstyled text-center"><a href="article.blade.php"
                                                                 class=" page-link border-bottom-0 text-dark">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. </a></li>
                        <li class="list-unstyled text-center"><a href="article.blade.php"
                                                                 class=" page-link border-bottom-0 text-dark">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. </a></li>
                        <li class="list-unstyled text-center"><a href="article.blade.php"
                                                                 class=" page-link border-bottom-0 text-dark">Lorem
                                ipsum dolor sit amet, consectetur adipisicing elit. </a></li>
                        <li class="list-unstyled text-center"><a href="article.blade.php"
                                                                 class=" page-link  text-dark">Lorem ipsum dolor
                                sit amet, consectetur adipisicing elit. </a></li>
                    </ul>
                </div>
            </aside>

        </div>

    </div>
    </div>
@endsection