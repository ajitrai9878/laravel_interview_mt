<!DOCTYPE html>
<html lang="en">
@include('user.layouts.head')
<body class="bg-gray-100">
@include('user.layouts.navbar')
<div class="h-screen flex flex-row flex-wrap">
        @include('user.layouts.sidebar')
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        @yield('content')
    </div>
</div>
@include('user.layouts.footer')
@include('user.layouts.scripts')
@include('common.js.alert-js')
@yield('js')
</body>
</html>
