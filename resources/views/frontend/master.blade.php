<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Anjuman's Blog</title>
    @include('frontend.includes.style')
</head>

<body>
    <!-- Navigation-->
    @include('frontend.includes.navbar')

    <!-- Page Header-->

    @yield('content')
    
    
    <!-- Footer-->
    @include('frontend.includes.footer')
    {{-- end footer  --}}

    @include('frontend.includes.script')
</body>

</html>
