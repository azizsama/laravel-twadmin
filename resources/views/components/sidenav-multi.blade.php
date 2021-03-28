@props(['menu', 'accordion'])
@php
    $target = isset($menu['route']) ? route($menu['route']) : url($menu['url']);
    $active = url()->current() === $target;
    $class = ($active)
             ? 'border-l-2 border-gray-100 inline-flex items-center pl-4 px-2 py-2 w-full bg-gray-800 hover:bg-gray-700' 
             : 'inline-flex items-center pl-4 px-2 py-2 w-full hover:bg-gray-800'
             ;
    $additional = "";
    if (isset($menu['additional'])) {
        foreach($menu['additional'] as $attr => $val) {
            if(is_bool($val)) {
                $additional .= "$attr ";
            } else {
                $additional .= "$attr=$val ";
            }
        }
    }
@endphp
<div class="w-full block max-h-full">
    <a href="javascript:void(0);" class="transition-all duration-200 {{$class}}"
        @click="accordion === {{$accordion}} ? accordion = 0 : accordion = {{$accordion}}"
    >
        <span class="mr-1 text-gray-100">
            @isset($menu['icon'])
                    {!! $menu['icon'] !!}
            @else
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <circle cx="10" cy="10" r="8" stroke-width="2" />
                </svg>
            @endisset
        </span>
        <span class="text-base text-gray-100 font-semibold">
            {{$menu['text']}}
        </span>
    </a>
    <div class="transform overflow-hidden duration-200"
        x-show="accordion === {{$accordion}}"
        x-transition:enter="transition ease-out duration-300" 
        x-transition:enter-start="opacity-0 scale-90" 
        x-transition:enter-end="opacity-100 scale-100" 
        x-transition:leave="transition ease-in duration-300" 
        x-transition:leave-start="opacity-100 scale-100" 
        x-transition:leave-end="opacity-0 scale-90"
    >
        @foreach($menu['submenu'] as $subm)
            @if(isset($subm['url']) || isset($subm['route']))
                @php
                    $starget = isset($subm['route']) ? route($subm['route']) : url($subm['url']);
                    $sactive = url()->current() === $starget;
                    $sclass = ($sactive)
                        ? 'transition-all duration-200 inline-flex items-center py-2 w-full hover:bg-gray-700 bg-gray-800 pl-10'
                        : 'transition-all duration-200 inline-flex items-center py-2 w-full hover:bg-gray-800 pl-10';
                    $additional = "";
                    if (isset($subm['additional'])) {
                        foreach($subm['additional'] as $attr => $val) {
                            if(is_bool($val)) {
                                $additional .= "$attr ";
                            } else {
                                $additional .= "$attr=$val ";
                            }
                        }
                    }
                @endphp
                <a href="{{$starget}}" {{$additional}} class="{{$sclass}}"
                    @if($sactive)
                        x-init="{accordion: {{$accordion}}}"
                    @endif
                >
                    <span class="mr-1 text-gray-100">
                        @isset($subm['icon'])
                        {!! $subm['icon'] !!}
                        @else
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <circle cx="10" cy="10" r="8" stroke-width="2" />
                        </svg>
                        @endisset
                    </span>
                    <span class="text-base text-gray-100 font-semibold">
                        {{$subm['text']}}
                    </span>
                </a>
            @endif
        @endforeach
    </div>
</div>