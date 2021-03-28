@props(['title' => null,])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'TWAdmin - Administration') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @foreach(config('twadmin.assets.css') as $css)
            <link rel="stylesheet" href="{{$css}}">
        @endforeach
        <style>
            .max-h-75vh {
                max-height: 75vh;
            }
        </style>

        @if(config('twadmin.livewire'))
            @livewireStyles
        @endif

        <!-- Scripts -->
        @foreach(config('twadmin.assets.js') as $js)
            <script src="{{ $js['url'] }}" {{$js['defer'] ? 'defer' : ''}}></script>
        @endforeach
    </head>
    <body class="font-sans antialiased" x-data="{ sidebarOpen: true, modal: null }" @keydown.escape="modal = null">
        <div class="flex overflow-x-hidden h-screen bg-gray-200" :class="{'max-h-screen overflow-hidden': modal != null}">
            @include('twadmin::sidenav')
            <div class="flex-1">
                @include('twadmin::navigation')
                <main class="p-4">
                    {{$body}}
                </main>
            </div>
        </div>
        {{$root ?? ''}}
        @if(config('twadmin.livewire'))
            @livewireScripts
        @endif
        @if(session()->has('success'))
            <x-twadmin::toast :text="session('success')" />
        @endif
    </body>
</html>
