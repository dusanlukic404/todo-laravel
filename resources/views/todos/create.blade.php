<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Todo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen">
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <div style="width:50px">
                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 100.000000 100.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)"
                                        fill="#5C7CFA" stroke="none">
                                        <path d="M505 846 c-47 -20 -90 -61 -109 -104 -17 -38 -20 -40 -55 -35 -24 3
                -49 -1 -68 -11 -36 -18 -75 -64 -67 -77 3 -5 -1 -9 -8 -9 -9 0 -9 -3 2 -10 13
                -8 12 -10 -5 -11 -11 -1 0 -5 25 -9 43 -7 42 -7 -25 -10 l-70 -4 70 -6 70 -6
                -77 -2 -76 -2 -12 -35 c-22 -68 30 -145 98 -145 12 0 22 -6 22 -14 0 -8 3 -21
                6 -30 4 -11 -2 -19 -19 -25 -27 -10 -45 -31 -28 -31 6 0 11 5 11 10 0 6 8 10
                18 10 9 0 23 9 30 20 13 22 58 27 65 8 2 -7 16 -13 32 -13 17 0 32 -7 39 -20
                6 -11 18 -25 26 -32 19 -15 3 -46 -26 -51 -10 -2 -26 -6 -34 -9 -25 -9 18 -22
                76 -22 43 -1 61 5 101 32 l49 33 29 -19 c40 -24 98 -17 134 17 21 20 38 26 70
                26 34 0 49 6 72 29 16 16 29 39 29 50 0 19 -6 21 -62 23 l-63 1 65 7 65 7 -75
                3 -75 4 75 6 c45 4 61 8 40 9 l-35 3 30 7 c20 4 26 9 18 14 -9 6 -11 25 -7 66
                4 37 2 66 -6 80 -10 20 -9 26 9 42 12 11 21 25 21 32 0 6 -7 1 -16 -11 -13
                -19 -24 -22 -85 -22 -38 0 -69 4 -69 9 0 28 -34 41 -107 41 -41 0 -73 3 -71 8
                2 4 14 24 27 45 20 33 28 38 55 36 22 -2 39 4 54 19 12 12 28 22 34 22 19 0
                -52 45 -91 58 -44 15 -88 15 -126 -2z m199 -212 c23 -23 23 -315 0 -338 -13
                -13 -42 -16 -162 -16 -137 0 -149 1 -166 21 -11 14 -25 19 -38 15 -39 -10 -47
                18 -48 166 0 111 3 139 16 152 23 24 375 24 398 0z m-531 -101 c-7 -2 -19 -2
                -25 0 -7 3 -2 5 12 5 14 0 19 -2 13 -5z m700 -190 c-7 -2 -19 -2 -25 0 -7 3
                -2 5 12 5 14 0 19 -2 13 -5z" />
                                        <path d="M380 549 c-10 -17 -14 -18 -28 -7 -15 12 -16 11 -3 -4 7 -10 17 -15
                22 -12 11 6 32 44 25 44 -3 0 -10 -9 -16 -21z" />
                                        <path d="M468 533 c23 -2 59 -2 80 0 20 2 1 4 -43 4 -44 0 -61 -2 -37 -4z" />
                                        <path d="M628 533 c12 -2 30 -2 40 0 9 3 -1 5 -23 4 -22 0 -30 -2 -17 -4z" />
                                        <path d="M380 459 c-10 -17 -14 -18 -28 -7 -15 12 -16 11 -3 -4 7 -10 17 -15
                22 -12 11 6 32 44 25 44 -3 0 -10 -9 -16 -21z" />
                                        <path d="M443 443 c9 -2 25 -2 35 0 9 3 1 5 -18 5 -19 0 -27 -2 -17 -5z" />
                                        <path d="M553 443 c26 -2 67 -2 90 0 23 2 2 3 -48 3 -49 0 -68 -1 -42 -3z" />
                                        <path d="M380 379 c-10 -17 -14 -18 -28 -7 -15 12 -16 11 -3 -4 7 -10 17 -15
                22 -12 11 6 32 44 25 44 -3 0 -10 -9 -16 -21z" />
                                        <path d="M483 363 c32 -2 81 -2 110 0 29 2 3 3 -58 3 -60 0 -84 -1 -52 -3z" />
                                        <path d="M758 772 c9 -10 19 -17 21 -16 6 5 -20 34 -30 34 -5 0 -1 -8 9 -18z" />
                                        <path d="M780 731 c0 -5 8 -7 18 -4 10 2 24 -3 31 -11 8 -9 19 -16 27 -16 7 0
                20 -10 28 -22 9 -12 16 -18 16 -12 0 13 -33 44 -47 44 -6 0 -16 7 -23 15 -14
                16 -50 21 -50 6z" />
                                        <path d="M135 251 c-14 -45 19 -66 91 -58 35 3 34 4 -12 5 -61 2 -85 22 -66
                53 7 10 8 19 3 19 -5 0 -12 -8 -16 -19z" />
                                    </g>
                                </svg>
                            </div>
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('todo.index')" :active="request()->routeIs('todo.index')">
                            {{ __('My Todos') }}
                        </x-nav-link>
                    </div>
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('todo.create')" :active="request()->routeIs('todo.create')">
                            {{ __('Create Todo') }}
                        </x-nav-link>
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="min-h-[500px] max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-[50px] mt-[30px]">
            <h1 class="font-bold text-4xl">Create new</h1>
        </div>
        @if (session()->has('success'))
            <div class="fixed bottom-[20px] left-[20px] border-slate-300 border rounded-sm p-[10px] text-green-500">
                {{ session('success') }}
            </div>
        @endif
        <div class="flex gap-8">
            <form method="post" action="{{ route('todo.store') }}" class="flex flex-col gap-6 w-1/2">
                @csrf
                @method('post')
                <div class="flex flex-col relative">
                    <label for="name">Title</label>
                    <input type="text" name="name" placeholder="Enter title"
                        class="@error('name') outline outline-1 outline-red-600 @enderror" />
                    @error('name')
                        <div class="text-[14px] text-red-600 absolute -bottom-5">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col relative">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="5" style="resize: none"
                        placeholder="Enter description" class="@error('description') outline outline-1 outline-red-600 @enderror"></textarea>
                    @error('description')
                        <div class="text-[14px] text-red-600 absolute -bottom-5">{{ $message }}</div>
                    @enderror
                </div>
                <div class="flex flex-col relative">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date"
                        class="@error('date') outline outline-1 outline-red-600 @enderror" />
                    @error('date')
                        <div class="text-[14px] text-red-600 absolute -bottom-5">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit"
                    class="text-center uppercase leading-none bg-[#5c7cfa] text-white px-[15px] py-[10px] shadow-md hover:bg-[#5c7cfa20] transition-all duration-500">Create</button>
            </form>
        </div>
    </div>
</body>

</html>
