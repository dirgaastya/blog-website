<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <x-partials.head />
    </head>

    <body>
        <x-partials.nav />
        <x-ui.alerts />
        <div class="font-sans antialiased text-gray-900">
            {{ $slot }}
        </div>
        
        <footer>
            <x-partials.footer />
        </footer>
        
        @livewireScripts
    </body>
</html>
