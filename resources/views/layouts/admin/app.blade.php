<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="app">
    <div class="flex flex-col h-screen overflow-hidden divide-y">
        <livewire:pages.layouts.admin.topbar />

        <div class="flex-1 flex flex-row divide-x" style="height: calc(100vh - 32px);">
            <livewire:pages.layouts.admin.sidebar />
            
            <div class="flex-1 h-full">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('app', () => ({
                sidebar: true,
     
                toggleSidebar() {
                    this.sidebar = ! this.sidebar
                },
            }))
        })
    </script>
</body>

</html>