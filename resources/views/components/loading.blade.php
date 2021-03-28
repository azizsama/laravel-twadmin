@props(['text' => 'Loading ...'])

<div class="flex flex-col w-full h-full justify-center items-center">
    <x-twadmin::spinner class="h-8 w-8 text-primary-700" />
    <span class="text-primary-800 uppercase font-bold text-lg tracking-widest mt-2">{{$text}}</span>
</div>