<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="text-blue-600 hover:text-blue-800" href="{{ route('admin.products.index') }}"> Back to products</a>
                    <h1 class=" text-xl font-bold">{{ $product->nom }}</h1>
                    <p class="mt-4">{{ $product->description }}</p>
                    <p class="mt-4">Price: {{ $product->prix }} MAD</p>
                    <p class="mt-4">Stock: {{ $product->stock }}</p>
                    <p class="mt-4">Category: {{ $product->category->slug ?? "unassigned categorie" }}</p>
                    <p class="mt-4">Created at: {{ $product->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>