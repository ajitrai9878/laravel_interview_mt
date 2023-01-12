<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.head')
<body class="bg-gray-100">
@include('admin.layouts.navbar')
<div class="h-screen flex flex-row flex-wrap">
        @include('admin.layouts.sidebar')
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        @yield('content')
    </div>
</div>
@include('admin.layouts.footer')
@include('admin.layouts.scripts')
@include('common.js.alert-js')
@yield('js')
</body>
</html>
