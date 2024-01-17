<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TodoTracker</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-md text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-md text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-md text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center gap-8">
                <div style="width:180px">
                    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100.000000 100.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,100.000000) scale(0.100000,-0.100000)" fill="#5C7CFA"
                            stroke="none">
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
                <div class="font-bold" style="font-size: 30px">TodoTracker</div>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <a href="{{ route('createDocs') }}" class="p-6 hover:bg-[#5c7cfa10] transition-all duration-500">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h2 class="m-0 underline text-gray-900 dark:text-white">Create Task</h2>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Add new tasks to your to-do list. Include a title, description, and due date to stay
                                organized.
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('viewDocs') }}"
                        class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l hover:bg-[#5c7cfa10] transition-all duration-500">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round"
                                    d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h2 class="m-0 underline text-gray-900 dark:text-white">View Tasks</h2>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Browse and manage your existing tasks. Keep track of due dates, descriptions, and
                                completion status.
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('updateDocs') }}" class="p-6 border-t border-gray-200 dark:border-gray-700 hover:bg-[#5c7cfa10] transition-all duration-500">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h2 class="m-0 underline text-gray-900 dark:text-white">Update Task</h2>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Modify existing tasks. Edit the title, description, or due date to keep your to-do list
                                up to date.
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('deleteDocs') }}" class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l hover:bg-[#5c7cfa10] transition-all duration-500""
                        class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <h2 class="m-0 underline text-gray-900 dark:text-white">Delete Task</h2>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Remove tasks from your to-do list. Be cautious, as this action is irreversible.
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
