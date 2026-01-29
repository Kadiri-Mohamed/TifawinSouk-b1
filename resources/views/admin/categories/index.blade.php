<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('categories list') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @isset($success)
                        {{ $success }}
                    @endisset
                    <a href="{{ route('categories.create') }}"> Add category</a>
                    <div
                        class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
                        <table class="w-full text-sm text-left rtl:text-right text-body">
                            <thead
                                class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                                <tr>
                    
                                    <th scope="col" class="px-6 py-3 font-medium">
                                         name
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        description
                                    </th>
                                    <th scope="col" class="px-6 py-3 font-medium">
                                        slug
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="px-6 py-4">
                                            {{ $category->name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $category->description }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $category->slug }}
                                        </td>
                                        <td class="px-6 py-4 flex">
                                           @if ($category->deleted_at)
                                            <form action="{{ route('categories.restore', $category->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="text-green-500 hover:text-green-700">Restore</button>
                                            </form>
                                            @else
                                            <a href="{{ route('categories.show', $category->id) }}" class="text-blue-500 hover:text-blue-700">Show |</a>
                                           <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500 hover:text-blue-700">| Edit |</a>
                                           <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700">| Delete</button>
                                           </form>
                                           @endif
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