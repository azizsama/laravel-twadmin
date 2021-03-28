<aside class="flex-shrink-0 w-72 flex flex-col transition-all duration-300 sticky top-0 bg-gray-900"
    :class="{ '-ml-72': !sidebarOpen }">
    <div class="h-16 bg-primary-700 flex items-center justify-center">
        <h5 class="font-bold text-xl text-white">{{config('app.name')}}</h5>
    </div>
    @if(config('twadmin.show_profile'))
        <div class="w-full h-16 flex my-3 items-center shadow-lg px-2">
            <img src="{{auth()->user()->avatar_url}}" alt="" class="h-12 w-12 object-cover rounded-full ">
            <div>
                <span class="text-base font-semibold text-white ml-2">{{auth()->user()->name}}</span>
                <span class="text-base text-gray-200 ml-2">{{auth()->user()->email}}</span>
            </div>
        </div>
    @endif
    <nav x-data="{accordion: 0}" class="flex-1 flex flex-col max-h-screen overflow-y-auto scrollbar-custom transform" x-cloak>
        @foreach(config('twadmin.menu.side') as $smenu)
            @if(isset($smenu['url']) || isset($smenu['route']) || isset($smenu['submenu']))
                @if(isset($smenu['submenu']))
                    <x-twadmin::sidenav-multi :menu="$smenu" :accordion="$loop->iteration" />
                @else
                    <x-twadmin::sidenav-link :menu="$smenu" />
                @endif
            @endif
        @endforeach
    </nav>
</aside>