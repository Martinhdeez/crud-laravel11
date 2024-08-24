<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form action="{{ route('students.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="flex flex-col items-start">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full max-w-md px-4 py-2 bg-white dark:bg-gray-900 text-white border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400">
                    </div>

                    <div class="flex flex-col items-start">
                        <label for="age" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Age</label>
                        <input type="number" name="age" id="age" class="mt-1 block w-full max-w-md px-4 py-2 bg-white dark:bg-gray-900 text-white border border-gray-300 dark:border-gray-700 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-400 dark:focus:border-blue-400">
                    </div>

                    <div class="flex space-x-4">
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white font-semibold rounded-md shadow-md hover:bg-blue-600 dark:bg-blue-700 dark:hover:bg-blue-800">
                            Save
                        </button>
                        <a href="{{ route('students.index') }}" class="px-4 py-2 bg-gray-500 text-white font-semibold rounded-md shadow-md hover:bg-gray-600 dark:bg-gray-700 dark:hover:bg-gray-800">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
