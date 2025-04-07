<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Add Product</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('products.store') }}">
            @csrf
            <input type="text" name="name" placeholder="Product Name" class="border px-3 py-2 w-full mb-4" required>
            <input type="number" name="price" step="0.01" placeholder="Price" class="border px-3 py-2 w-full mb-4" required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Add</button>
        </form>
    </div>
</x-app-layout>
