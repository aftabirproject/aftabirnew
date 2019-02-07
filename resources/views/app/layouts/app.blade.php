<!DOCTYPE html>
<html lang="en">
@include('app.layouts.head-tag')
<body>
@include('app.layouts.header')

<!--************************************MAIN*****************************************-->
<main class="mt-5" style="overflow-y: hidden; overflow-x: hidden">
    @yield('content')
</main>


@include('app.layouts.footer')
@include('app.layouts.script')
</body>
</html>