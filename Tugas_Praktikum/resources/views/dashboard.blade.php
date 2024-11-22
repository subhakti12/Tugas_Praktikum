<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">

            @if (session('success'))
                <div class="mb-4 rounded-lg bg-white dark:bg-gray-800 p-4 text-gray-900 dark:text-gray-100 shadow-sm">
                    {{ session('success') }}
                </div>
            @elseif (session('error'))
                <div class="mb-4 rounded-lg bg-white dark:bg-gray-800 p-4 text-gray-900 dark:text-gray-100 shadow-sm">
                    {{ session('error') }}
                </div>
            @endif

            <a href="{{ route('product-create') }}">
            </a>

            <table class="min-w-full border-collapse border border-gray-200">
            </table>
        </div>
    </div>

</x-app-layout>
