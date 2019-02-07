<header class="fixed-top box-shadow2">
    <div class="container-fluid bg-primary">
        <div class="row">
            <header class="container">
                <!--**************************************berger menu**********************-->
                <div class="d-flex justify-content-between">
                    <!--**************************************logo**********************-->
                    <div class="py-3">
                        <div class="d-flex justify-content-md-between align-items-center">
                            <h2 class="m-0 d-block" style="font-size: 20px"><a href="{{ route('home') }}" class="p-0 text-white nav-link">Aftab News</a></h2>
                        </div>
                    </div>
                    <div>
                        <div class="d-lg-none">
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="#">News</a>
                                <a href="#">about us</a>
                                <a href="#">contact us</a>
                                <a href="#">category</a>
                                <form class="m-2" >
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="input-group-text" id="basic-addon1">Search</button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </form>
                            </div>
                            <span class="mr-2 text-right text-white" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                        </div>
                        <!--**************************************Navbar Menu**********************-->
                        <ul style="font-size: 17px" class="m-0 pt-2 nav nav-pills d-none d-lg-flex justify-content-between">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="Home.php">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button">News</a>
                                <div class="dropdown-menu bg-primary text-white">
                                    <a class="dropdown-item text-white  bg-hover" href="#">news1</a>
                                    <a class="dropdown-item text-white  bg-hover" href="#">news1</a>
                                    <a class="dropdown-item text-white  bg-hover" href="#">news1</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item  text-white  bg-hover" href="#">news1</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">cuntact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">about us</a>
                            </li>
                        </ul>
                    </div>

                    <form class="mt-1 d-none d-lg-block pt-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="input-group-text" style="background-color: #cce5ff" id="basic-addon1">Search</button>
                            </div>
                            <input type="text" class="form-control" style="background-color:#cce5ff" placeholder=" Search..." aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </div>

        </div>
    </div>
</header>