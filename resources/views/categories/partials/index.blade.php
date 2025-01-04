<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Category List</h3>

                @if($categories->isEmpty())
                    <p class="text-gray-600">No categories found.</p>
                @else
                    <div class="mb-4 text-right">
                        <a href="{{ route('categories.create') }}" style="    background-color: #000;" class="btn btn-primary px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                            Add Category
                        </a>
                    </div>

                    <table class="min-w-full table-auto" style="    width: 100%;">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-2 px-4 text-left">Name</th>
                                <th class="py-2 px-4 text-left">Description</th>
                                <th class="py-2 px-4 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr class="border-b">
                                    <td class="py-2 px-4">{{ $category->name }}</td>
                                    <td class="py-2 px-4">{{ $category->description }}</td>
                                    <td class="py-2 px-4 text-center">
                                        <a href="{{ route('categories.edit', $category) }}" class="text-black hover:text-black mx-2" >
                                            Edit
                                        </a>
                                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
