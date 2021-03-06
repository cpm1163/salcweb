﻿<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SalcWeb') }} Usuário</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>

        <div class="min-h-screen bg-gray-100">
            <!-- Componente navigation do livewire -->
            @livewire('navigation')

            <!-- Page Content -->
            <div class="container mx-auto">
                <h1 class="text-3xl text-center my-10">Usuários</h1>
                <livewire:users-table>
            </div>

        </div>


        @livewireScripts
    </body>
</html>
