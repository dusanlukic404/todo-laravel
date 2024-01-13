<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Todos</title>

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
        <div class="flex items-center justify-between mb-[50px] mt-[30px]">
            <h1 class="font-bold text-4xl text-center">
                @if (request()->filled('search'))
                    Todos that include "{{ request()->input('search') }}"
                @else
                    All Todos
                @endif
            </h1>
            <form method="get" action="{{ route('todo.index') }}" class="mb-4">
                <div class="flex">
                    <input type="text" name="search" placeholder="Search todos"
                        class="p-2 border-slate-300 rounded-l w-[300px]">
                    <button type="submit" class="bg-[#5c7cfa] text-white p-2 rounded-r">Search</button>
                </div>
            </form>
        </div>
        @if (session()->has('success'))
            <div class="fixed bottom-[20px] left-[20px] border-slate-300 border rounded-sm p-[10px] text-green-500">
                {{ session('success') }}
            </div>
        @endif
        <div>
            @if (count($todos) > 0)
                <ul class="grid grid-cols-[repeat(auto-fill,minmax(350px,1fr))] gap-[10px]">
                    @foreach ($todos as $todo)
                        <li class="inline-block border-slate-300 border rounded-[15px] px-[20px] py-[15px] w-[400px]">
                            <div class="flex items-end justify-between">
                                <h2 class="font-medium text-[20px]">{{ $todo->name }}</h2>
                                <p>{{ $todo->date }}</p>
                            </div>
                            <div class="mt-[20px]">
                                <p class="text-slate-500">{{ $todo->description }}</p>
                            </div>
                            <div class="flex items-center gap-2 mt-[20px]">
                                <div>
                                    <a class="inline-block" href="{{ route('todo.edit', ['todo' => $todo]) }}">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_3077_6807)">
                                                <path
                                                    d="M20.0002 12C19.4502 12 19.0002 12.45 19.0002 13V17.2C19.0002 18.67 19.0002 19.48 18.7802 19.91C18.5902 20.29 18.2902 20.59 17.9102 20.78C17.4802 21 16.6702 21 15.2002 21H6.80023C5.33023 21 4.52023 21 4.09023 20.78C3.71023 20.59 3.41023 20.28 3.22023 19.91C3.00023 19.48 3.00023 18.67 3.00023 17.2V8.8C3.00023 7.33 3.00023 6.52 3.22023 6.09C3.41023 5.71 3.71023 5.41 4.09023 5.22C4.52023 5 5.33023 5 6.80023 5H11.0002C11.5502 5 12.0002 4.55 12.0002 4C12.0002 3.45 11.5502 3 11.0002 3H6.80023C5.02024 3 4.04023 3 3.18023 3.44C2.42023 3.83 1.82023 4.43 1.43023 5.19C0.990234 6.05 0.990234 6.97 0.990234 8.81V17.21C0.990234 19.05 0.990234 19.97 1.43023 20.83C1.82023 21.59 2.42023 22.19 3.18023 22.58C4.04023 23.02 4.96023 23.02 6.80023 23.02H15.2002C17.0402 23.02 17.9602 23.02 18.8202 22.58C19.5802 22.19 20.1802 21.59 20.5702 20.83C21.0102 19.97 21.0102 19.05 21.0102 17.21V13.01C21.0102 12.46 20.5602 12.01 20.0102 12.01L20.0002 12Z"
                                                    fill="black" />
                                                <path
                                                    d="M22.21 1.79C20.99 0.57 19.01 0.57 17.8 1.79L8.22 11.36C7.85 11.73 7.62 11.96 7.44 12.26C7.27 12.53 7.15 12.82 7.08 13.13C7 13.48 7 13.8 7 14.33V16C7 16.55 7.45 17 8 17H9.67C10.2 17 10.52 17 10.87 16.92C11.18 16.85 11.47 16.73 11.74 16.56C12.04 16.37 12.27 16.15 12.64 15.77L22.21 6.21C23.43 4.99 23.43 3.01 22.21 1.8V1.79ZM20.8 4.79L11.23 14.36C10.96 14.63 10.8 14.8 10.69 14.86C10.6 14.91 10.5 14.95 10.4 14.98C10.28 15.01 10.05 15.01 9.67 15.01H9V14.34C9 13.96 9 13.73 9.03 13.61C9.05 13.51 9.09 13.41 9.15 13.32C9.21 13.22 9.37 13.06 9.65 12.79L19.21 3.21C19.65 2.77 20.36 2.77 20.8 3.21C21.24 3.65 21.24 4.36 20.8 4.8V4.79Z"
                                                    fill="black" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_3077_6807">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                <div>
                                    <form method="post" action="{{ route('todo.delete', ['todo' => $todo]) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21 5H17C17 3.9 16.98 3.24 16.67 2.64C16.38 2.07 15.93 1.62 15.36 1.33C14.72 1 14.04 1 12.8 1H11.2C9.96 1 9.28 1 8.64 1.33C8.07 1.62 7.62 2.07 7.33 2.64C7.02 3.24 7.01 3.9 7.01 5H3C2.45 5 2 5.45 2 6C2 6.55 2.45 7 3 7H4V17.2C4 19.04 4 19.96 4.44 20.82C4.83 21.58 5.43 22.18 6.19 22.57C7.05 23.01 8.03 23.01 9.81 23.01H14.21C16.05 23.01 16.97 23.01 17.83 22.57C18.59 22.18 19.19 21.58 19.58 20.82C20.02 19.96 20.02 19.04 20.02 17.2V7H21.02C21.57 7 22.02 6.55 22.02 6C22.02 5.45 21.57 5 21.02 5H21ZM9.11 3.55C9.21 3.36 9.36 3.21 9.55 3.11C9.76 3 10.34 3 11.2 3H12.8C13.67 3 14.24 3 14.45 3.11C14.64 3.21 14.79 3.36 14.89 3.55C14.99 3.75 15 4.26 15 5H9C9 4.25 9 3.74 9.11 3.55ZM18 17.2C18 18.67 18 19.48 17.78 19.91C17.59 20.29 17.29 20.59 16.91 20.78C16.48 21 15.67 21 14.2 21H9.8C8.33 21 7.52 21 7.09 20.78C6.71 20.59 6.41 20.29 6.22 19.91C6 19.48 6 18.67 6 17.2V7H18V17.2Z"
                                                    fill="black" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            @else
                <p class="text-center">You have no tasks. Well done!</p>
            @endif
            <div class="flex justify-center mt-[30px]">
                <a href="{{ route('todo.create') }}"
                    class="flex justify-center items-center fixed bottom-[80px] right-[80px] text-center leading-none bg-[#5c7cfa] text-white px-[15px] py-[10px] rounded-[50%] aspect-[1] w-[70px] shadow-md hover:bg-[#5c7cfa20] transition-all duration-500">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5V19M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
