@props(['href'])

@php
    $classes = 'inline-flex items-center justify-center text-xs uppercase px-3 py-2 bg-gray-800 hover:bg-gray-900 border border-transparent rounded-md hover:rounded-lg font-semibold text-white tracking-widest focus:outline-none focus:border-gray-900 focus:bg-gray-900 focus:ring focus:ring-gray-500 disabled:opacity-25 transition ease-in-out duration-200';
@endphp

<a href="{{$href}}" {{$attributes->merge(['class' => $classes])}}>{{$slot}}</a>