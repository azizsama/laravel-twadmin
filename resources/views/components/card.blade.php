@props(['classes_header' => '', 'classes_body' => '', 'classes_footer' => ''])
@php
    $class = [
        'main' => 'bg-white rounded-md overflow-hidden',
        'header' => 'text-base font-bold text-gray-900 px-2 py-2 border-b border-gray-300',
        'body' => 'px-2 py-2',
        'footer' => 'text-gray-900 px-2 py-2 border-t border-gray-300'
    ];
@endphp
<div {{$attributes->merge(['class' => $class['main']])}}>
    @isset($header)
        <div class="{{$class['header']}} {{$classes_header}}">
            {{$header}}
        </div>
    @endisset
    @isset($body)
        <div class="{{$class['body']}} {{$classes_body}}">
            {{$body}}
        </div>
    @endisset
    @isset($footer)
        <div class="{{$class['footer']}} {{$classes_footer}}">
            {{$footer}}
        </div>
    @endisset
</div>