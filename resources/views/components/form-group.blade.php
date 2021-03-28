@props([
    'type' => 'text',
    'label',
    'id',
    'alert' => null
])

@php
    $classes = 'block w-full px-3 py-1 border border-gray-300 focus:outline-none focus:border-2 focus:ring focus:ring-primary-200 disabled:bg-gray-300 disabled:border-primary-300 disabled:cursor-not-allowed rounded-lg transition-all ease-in-out duration-200 outline-none shadow-sm';
    if($errors->has($attributes['name'])) {
        $classes = 'block w-full px-3 py-1 border border-red-500 focus:outline-none focus:border-2 focus:ring focus:ring-red-300 disabled:bg-gray-500 disabled:border-red-500 disabled:cursor-not-allowed rounded-lg transition-all ease-in-out duration-200 outline-none shadow-sm';
    }
@endphp

<div class="mb-3">
    @if(isset($label))
        <label for="{{$id ?? ''}}" class="font-semibold text-md">{{$label}}</label>
    @endif
    @if($type === 'textarea')
        <textarea id="{{$id ?? ''}}" {{$attributes->merge(['class' => $classes])}} >{{$attributes['value'] ?? ''}}</textarea>
    @else
        <input type="{{$type}}" {{$attributes->merge(['class' => $classes])}} id="{{$id ?? ''}}" />
    @endif
    @error($attributes['name'])
        <span class="text-xs text-red-600 block">
            {{$message}}
        </span>
    @enderror
    @if($alert !== null)
        <span class="text-xs text-gray-800 block">{{$alert}}</span>
    @endif
</div>