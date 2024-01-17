<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TodoTracker - Create Documentation</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 flex items-top justify-center">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-12">
        <h1 class="text-4xl font-bold mb-12">Update Todo - Documentation</h1>

        <section class="bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-2">Step 1: Go to MyTodos page 🚗</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed et ligula eu
                arcu vestibulum viverra sed at felis. Donec lacinia, justo vel tristique ultrices, arcu elit
                fermentum turpis, vel sagittis justo tellus in mauris.</p>
        </section>

        <section class="mt-4 bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl font-bold mb-2">Step 2: You can see all Todos 👁️</h2>
            <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Sed et ligula eu
                arcu vestibulum viverra sed at felis. Donec lacinia, justo vel tristique ultrices, arcu elit
                fermentum turpis, vel sagittis justo tellus in mauris.</p>
        </section>

        <section class="mt-4">
            <a href="{{ route('todo.index') }}" class="inline-block px-[15px] py-[10px] shadow-md hover:bg-[#5c7cfa80] transition-all duration-500 bg-[#5c7cfa] text-white rounded-md">See Todos</a>
        </section>

    </div>
</body>

</html>
