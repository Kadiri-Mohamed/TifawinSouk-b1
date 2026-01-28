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
                    @isset($success)
                        {{ $success }}
                    @endisset
                    <a href="{{ route('admin.products.create') }}"> Add Product</a>
                    <div
                        class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                        <table class="w-full text-sm text-left rtl:text-right text-body">
                            <thead
                                class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                                <tr>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        REF
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Product name
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Stock
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        Actions
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="px-6 py-4">
                                            {{ $product->reference }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $product->nom }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $product->category->name ?? "unassigned categorie" }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $product->prix . " MAD"}}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $product->stock }}
                                        </td>
                                        <td class="px-6 py-4">
                                           <a href="{{ route('admin.products.show', $product->id) }}" class="text-blue-500 hover:text-blue-700">Show</a>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>