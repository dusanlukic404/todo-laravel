<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Functionalities & Docs') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-12 grid grid-cols-2 gap-[20px]">
        <a href="{{ route('todo.index') }}"
            class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full hover:bg-[#5c7cfa10] transition-all duration-500">
            <div class="p-6 text-gray-900">
                <h2 class="no-underline text-[#5c7cfa] font-bold text-[20px]">See all Todos</h2>
                <p>See all Todos that you have entered as a task. Each one of them you can edit and delete if they are
                    finished.</p>
            </div>
        </a>
        <a href="{{ route('todo.create') }}"
            class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full hover:bg-[#5c7cfa10] transition-all duration-500">
            <div class="p-6 text-gray-900">
                <h2 class="no-underline text-[#5c7cfa] font-bold text-[20px]">Todo CRUD</h2>
                <p>Go directly on page where you can create your todo. All you need to fill are form with values such as
                    title, description and date. Good luck!</p>
            </div>
        </a>

        <div class="col-span-2 mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <a href="{{ route('createDocs') }}" class="p-6  hover:bg-[#5c7cfa10] transition-all duration-500">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <h2 class="m-0 underline dark:text-white text-[#5c7cfa]">Create Task</h2>
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
                    class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l  hover:bg-[#5c7cfa10] transition-all duration-500">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round"
                                d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <h2 class="m-0 underline text-[#5c7cfa] dark:text-white">View Tasks</h2>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Browse and manage your existing tasks. Keep track of due dates, descriptions, and completion
                            status.
                        </div>
                    </div>
                </a>

                <a href="{{ route('updateDocs') }}"
                    class="p-6 border-t border-gray-200 dark:border-gray-700 hover:bg-[#5c7cfa10] transition-all duration-500">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <h2 class="m-0 underline text-[#5c7cfa] dark:text-white">Update Task</h2>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Modify existing tasks. Edit the title, description, or due date to keep your to-do list up
                            to date.
                        </div>
                    </div>
                </a>

                <a href="{{ route('deleteDocs') }}"
                    class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l hover:bg-[#5c7cfa10] transition-all duration-500">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <h2 class="m-0 underline text-[#5c7cfa] dark:text-white">Delete Task</h2>
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
</x-app-layout>
