<div id="sideBar"
     class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64
      md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
            <i class="fad fa-times-circle"></i>
        </button>
    </div>
    <a href="{{route('log-out')}}"
       class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
        <i class="fad fa-sign-out text-xs mr-2" aria-hidden="true"></i>
        Log Out
    </a>
</div>


