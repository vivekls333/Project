<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Products</h2>
    </x-slot>

    <div class="p-6">
        <div class="flex justify-end mb-4">
            <a href="{{ route('products.create') }}"
               class="bg-green-600 hover:bg-green-700 text-blue font-semibold px-5 py-2 rounded shadow transition">
                + Add Product
            </a>
        </div>
        
        

        @if(session('success'))
            <div class="text-green-600 mt-2">{{ session('success') }}</div>
        @endif

        <table class="w-full mt-4 border">
            <thead>
                <tr>
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Price</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{ $product->id }}</td>
                        <td class="border px-4 py-2">{{ $product->name }}</td>
                        <td class="border px-4 py-2">₹{{ $product->price }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('products.edit', $product) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2" onclick="return confirm('Delete this product?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
