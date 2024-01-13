<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Documentation') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-12 flex gap-[20px]">
        <a href="{{ route('todo.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full hover:bg-[#5c7cfa10] transition-all duration-500">
            <div class="p-6 text-gray-900">
                <h2 class="no-underline text-[#5c7cfa] font-bold text-[20px]">See all Todos</h2>
                <p>See all Todos that you have entered as a task. Each one of them you can edit and delete if they are finished.</p>
            </div>
        </a>
        <a href="{{ route('todo.create') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg w-full hover:bg-[#5c7cfa10] transition-all duration-500">
            <div class="p-6 text-gray-900">
                <h2 class="no-underline text-[#5c7cfa] font-bold text-[20px]">Create Todo</h2>
                <p>Go directly on page where you can create your todo. All you need to fill are form with values such as title, description and date. Good luck!</p>
            </div>
        </a>
    </div>
</x-app-layout>
