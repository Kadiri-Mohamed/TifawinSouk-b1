<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('category details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="text-blue-600 hover:text-blue-800" href="{{ route('categories.index') }}"> Back to categorys</a>
                    <h1 class=" text-xl font-bold">{{ $category->name }}</h1>
                    <p class="mt-4">Slug: <strong>{{ $category->slug }} </strong></p>
                    <p class="mt-4">{{ $category->description }}</p>
                    <p class="mt-4">Created at: {{ $category->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>