<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a class="text-blue-600 hover:text-blue-800" href="{{ route('categories.index') }}"> Back to
                        categories</a>

                    <form class="max-w-sm mx-auto" method="post" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="mb-5">
                            <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Name</label>
                            <input type="text" id="name" name="name"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Name of product" required />
                        </div>
                        <div class="mb-5">
                            <label for="description"
                                class="block mb-2.5 text-sm font-medium text-heading">Description</label>
                            <textarea name="description" class="block w-full mb-2.5 text-sm font-medium text-heading"
                                id="description">
                        </textarea>
                        </div>
                        <button type="submit"
                            class="text-black bg-orange-600 box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                            Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>