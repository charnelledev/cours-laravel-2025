<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        
           @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        @endif

    </head>
   
       <div class="text-center text-green-600 dark:text-green-400 mb-6">
            <h1 class="text-5xl font-bold">Laravel 12 CRUD Create, Read, Update and Delete with Tailwind CSS V4</h1>
      </div>

       
@yield('content')
</html>
