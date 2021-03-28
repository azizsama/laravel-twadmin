@php
    $classes = 'inline-flex items-center justify-center text-xs uppercase px-1 py-1 sm:px-2 sm:py-2 bg-primary-700 hover:bg-primary-800 border border-transparent rounded-full font-semibold text-white tracking-widest focus:outline-none focus:border-primary-800 focus:bg-primary-800 focus:ring focus:ring-primary-500 disabled:opacity-25 transition ease-in-out duration-200';    
@endphp

<button {{$attributes->merge(['type' => 'submit', 'class' => $classes])}}>{{$slot}}</button>