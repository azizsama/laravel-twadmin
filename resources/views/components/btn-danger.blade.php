@php
    $classes = 'inline-flex items-center justify-center text-xs uppercase px-3 py-2 bg-red-600 hover:bg-red-700 border border-transparent rounded-md hover:rounded-lg font-semibold text-white tracking-widest focus:outline-none focus:border-red-700 focus:bg-red-700 focus:ring focus:ring-red-500 disabled:opacity-25 transition ease-in-out duration-200';
@endphp

<button {{$attributes->merge(['type' => 'submit', 'class' => $classes])}}>{{$slot}}</button>