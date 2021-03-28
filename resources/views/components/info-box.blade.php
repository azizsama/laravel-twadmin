@props(['text', 'desc', 'theme' => 'primary'])

@php
    switch ($theme) {
        case 'primary':
            $themeColor = "border-primary-600";
            break;
        
        case 'blue':
            $themeColor = "border-blue-600";
            break;
        
        case 'yellow':
            $themeColor = "border-yellow-600";
            break;
        
        case 'red':
            $themeColor = "border-red-600";
            break;
        
        case 'green':
            $themeColor = "border-green-600";
            break;
        
        case 'indigo':
            $themeColor = "border-indigo-600";
            break;
        
        case 'gray':
            $themeColor = "border-gray-800";
            break;
        
        case 'pink':
            $themeColor = "border-pink-600";
            break;
        
        default:
            # code...
            break;
    }
    $classes = [
        'icon' => "",
        'main' => "",
    ];
@endphp

<div class="bg-white rounded-r-md border-l-4 shadow-md {{$themeColor}} px-2 py-2 block w-full">
    <div class="flex items-center">
        @isset($icon)
            <span class="h-10 w-10 inline-flex items-center justify-center mr-2">
                {{$icon}}
            </span>
        @endisset
        <div class="block w-full">
            <p class="font-bold text-base text-gray-900">{{$text}}</p>
            <p class="font-semibold text-sm text-gray-800">{{$desc}}</p>
        </div>
    </div>
</div>