<header class="flex items-center py-2 px-3 sm:px-6 h-16 text-semibold text-gray-100 bg-primary-700 sticky top-0 z-20">
    <button class="p-1 mr-4 outline-none text-gray-100 transition-all duration-200 hover:text-white focus:outline-none" @click="sidebarOpen = !sidebarOpen">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
    </button>
    <div class="mr-auto sm:block hidden">
        {{-- Top Menu Left --}}
        @foreach(config('twadmin.menu.top.left') as $mentl)
            @if(isset($mentl['url']) || isset($mentl['route']))
                <x-twadmin::topnav-link :menu="$mentl" />
            @endif
        @endforeach
    </div>
    
    <div class="ml-auto">
        <div class="sm:block hidden">
            {{-- Top Menu Right --}}
            @foreach(config('twadmin.menu.top.right') as $mentr)
                @if(isset($mentr['url']) || isset($mentr['route']))
                    <x-twadmin::topnav-link :menu="$mentr" />
                @endif
            @endforeach
        </div>
        <div class="flex items-center space-x-1">
            <img src="{{auth()->user()->avatar_url}}" alt="Avatar" class="w-10 h-10 object-cover rounded-full shadow-lg">
            <span class="text-white hidden sm:block font-semibold text-base">{{auth()->user()->name}}</span>
        </div>
    </div>
</header>