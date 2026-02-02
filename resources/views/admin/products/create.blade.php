<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                                        <a class="text-blue-600 hover:text-blue-800" href="{{ route('admin.products.index') }}"> Back to products</a>

                    <form class="max-w-sm mx-auto" method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Name</label>
                            <input type="text" id="name" name="nom"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Name of product" required />
                        </div>
                        <div class="mb-5">
                            <label for="reference"
                                class="block mb-2.5 text-sm font-medium text-heading">Reference</label>
                            <input type="text" id="reference" name="reference"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="REF-" required />
                        </div>
                        <div class="mb-5">
                            <label for="description"
                                class="block mb-2.5 text-sm font-medium text-heading">Description</label>
                            <textarea name="description" class="block w-full mb-2.5 text-sm font-medium text-heading"
                                id="description">
                        </textarea>
                        </div>
                        <div class="mb-5">
                            <label for="prix" class="block mb-2.5 text-sm font-medium text-heading">Prix</label>
                            <input type="number" id="prix" name="prix"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="20" required />
                        </div>
                        <div class="mb-5">
                            <label for="stock" class="block mb-2.5 text-sm font-medium text-heading">Stock</label>
                            <input type="number" id="stock" name="stock"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="100" required />
                        </div>
                        <div class="mb-5">
                            <label for="image" class="block mb-2.5 text-sm font-medium text-heading">Image</label>
                            <input type="file" id="image" name="image"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="100" />
                        </div>
                        <div class="mb-5">
                            <label for="category" class="block mb-2.5 text-sm font-medium text-heading">category</label>
                            <select
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                name="category" id="category">
                                <option value="1">electroe</option>
                            </select>
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