<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Edit Product</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('products.update', $product) }}">
            @csrf @method('PUT')
            <input type="text" name="name" value="{{ $product->name }}" class="border px-3 py-2 w-full mb-4" required>
            <input type="number" name="price" step="0.01" value="{{ $product->price }}" class="border px-3 py-2 w-full mb-4" required>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
