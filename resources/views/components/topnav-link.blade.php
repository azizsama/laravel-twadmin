@props(['menu'])
@php
    $target = isset($menu['route']) ? route($menu['route']) : url($menu['url']);
@endphp
<div>
    <a href="{{$target}}" class="text-gray-200 hover:text-white focus:text-white transition-all duration-200">{{$menu['text']}}</a>
</div>