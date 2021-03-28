@props(['sticky-header' => false, 'bordered' => false])
@php
    $class = 'w-full table-auto';
@endphp

<div class="max-w-full w-full overflow-x-auto block">
    <table {{$attributes->merge(['class' => $class])}} >
        @isset($thead)
            <thead class="border-b-2 border-gray-900 font-semibold text-base">
                {{$thead}}
            </thead>
        @endisset
        @isset($tbody)
            <tbody>
                {{$tbody}}
            </tbody>
        @endisset
        @isset($tfoot)
            <tfoot class="border-0 bg-gray-200">
                {{$tfoot}}
            </tfoot>
        @endisset
    </table>
</div>