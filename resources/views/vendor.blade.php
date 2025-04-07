<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seller Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow rounded-lg p-6">
                <div class="text-gray-900 text-lg font-medium mb-4">
                    {{ __("You're logged in as Seller!") }}
                </div>

                <div class="mt-6">
                    <a href="{{ route('products.index') }}"
                       class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2 rounded shadow transition">
                        Go to Product CRUD
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
