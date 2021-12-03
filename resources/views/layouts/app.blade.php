<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @include('includes.style')

</head>

<body>
    @include('includes.navbar')
    @include('includes.search')
    <div class="container-fluid col-10 mt-4 d-flex">
        <div class="align-self-stretch col-9 ml-5">
          @yield('content')
        </div>
        <div class="col-md-3">
          @include('includes.category-samping')
        </div>
    </div>
    @include('includes.footer')

    @include('includes.script')
</body>

</html>
