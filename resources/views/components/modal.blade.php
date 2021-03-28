@props(['id', 'dismissable' => true, 'title' => null])
{{-- Overlay --}}
<div wire:ignore.self style="display: none;" id="{{$id}}" class="absolute inset-0 flex items-center justify-center transition-all bg-black bg-opacity-80 h-screen overflow-hidden z-50" x-show="modal == '{{$id}}'"
    x-transition:enter="ease-out duration-300"
    x-transition:enter-start="opacity-0 pb-52"
    x-transition:enter-end="opacity-100 pb-0"
    x-transition:leave="ease-out duration-300"
    x-transition:leave-start="opacity-100 pb-0"
    x-transition:leave-end="opacity-0 pb-52"
>
    <div class="bg-white rounded-xl transform overflow-hidden w-11/12 sm:w-4/12 md:w-6/12" @if($dismissable) @click.away="modal = null" @endif
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="transform opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="transform translate-y-0 sm:scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="transform opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="transform opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        @if($title != null)
            <div class="flex items-center justify-between px-3 py-2">
                <h5 class="text-xl font-bold">{{$title}}</h5>
                <span @click="modal = null" class="cursor-pointer inline-flex items-center justify-center rounded-full w-8 h-8 p-0">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </span>
            </div>
        @endif

        <div class="px-3 py-2 max-h-75vh scrollbar-custom overflow-y-auto">
            {{$slot}}
        </div>
        
    </div>
</div>