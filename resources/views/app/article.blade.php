@extends('app.layouts.app')
@section('content')
    <div></div>
    <div class="container mb-5 " style="margin-top: 5rem">
        <div class="row">
            <div col-12>
                <div class="" style="display: flex; flex-wrap: wrap">

                    <h2>Irna</h2>
                    <p class="text-right">
                        <img src="https://images.unsplash.com/photo-1508612761958-e931d843bdd5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                             width="300px" height="300px" alt="" class="float-left mr-2">
                        @for($i=0;$i<20;$i++)
                        Lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur at atque consequatur
                        delectus deserunt doloremque earum eligendi error ex
                        , impedit ipsa, laboriosam numquam perspiciatis possielit.mus similique! Aut exercitationem
                        obcaecati possimus!
                        ipsum dolor sit amet, consectetur adipisicing
                            @endfor
                    </p>

                </div>
            </div>
            <form class="col-12 mt-4 rounded border px box-shadow" style=" background-image: linear-gradient(266deg,#007bff,#913baf 35%,#d52d88 68%,#f26d4f);">
                <div class="form-group ">
                    <div>
                    </div>
                    <label class="text-white mt-2" for="exampleInputEmail1" style="font-size: 15px">comment</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp" placeholder="Enter comment">

                </div>
                <button class="btn text-white mb-2" style="background-color: #0063cc">enter</button>
            </form>
        </div>

    </div>
@endsection