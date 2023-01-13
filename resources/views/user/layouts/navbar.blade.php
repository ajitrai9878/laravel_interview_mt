<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap
 items-center bg-white p-6 border-b border-gray-300">
    <div class="flex-none w-56 flex flex-row items-center">
        <img src="{{asset('assets/admin/img/logo.png')}}" class="w-10 flex-none" alt="">
        <strong class="capitalize ml-1 flex-1">{{env('APP_NAME')}}</strong>

        <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
            <i class="fad fa-list-ul"></i>
        </button>
    </div>
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
        <i class="fad fa-chevron-double-down"></i>
    </button>
</div>
