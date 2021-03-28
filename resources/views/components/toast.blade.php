@props([
    'type' => 'success',
    'title' => 'Success!',
    'text' => null,
])

@php
    switch ($type) {
        case 'success':
            $class = [
                'body' => 'bg-green-500 bg-opacity-70 flex items-center px-2 py-1 rounded-lg',
                'title' => 'text-green-800 font-semibold tracking-widest',
                'text' => 'text-green-700'
            ];
            break;

        case 'error':
            $class = [
                'body' => 'bg-red-500 bg-opacity-70 flex items-center px-2 py-1 rounded-lg',
                'title' => 'text-red-800 font-semibold tracking-widest',
                'text' => 'text-red-700'
            ];
            break;

        case 'warning':
            $class = [
                'body' => 'bg-yellow-500 bg-opacity-70 flex items-center px-2 py-1 rounded-lg',
                'title' => 'text-yellow-800 font-semibold tracking-widest',
                'text' => 'text-yellow-700'
            ];
            break;
        
        default:
            # code...
            break;
    }
@endphp

<div
    style="display: hidden;"
    {{$attributes->merge(['class' => $class[$type]])}}
>
    <div class="mr-2">
        @switch($type)
            @case('success')
                <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                </svg>
                @break
            @case('error')
                <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                @break
            @case('warning')
                <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                @break
            @default
                
        @endswitch
    </div>
    <div>
        <span class="{{$class['title']}}">{{$title}}</span>
        <span class="{{$class['text']}}">{{$text}}</span>
    </div>
</div>