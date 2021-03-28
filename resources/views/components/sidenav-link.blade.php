@props(['menu'])
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
<div class="w-full block">
    <a href="{{$target}}" {{$additional}} class="transition-all duration-200 {{$class}}">
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
</div>