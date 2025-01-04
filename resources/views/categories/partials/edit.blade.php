<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Edit Category</h3>

                <form action="{{ route('categories.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-4">
                        <label for="name" class="block text-gray-700 font-medium">Name</label>
                        <input type="text" name="name" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" value="{{ $category->name }}" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="description" class="block text-gray-700 font-medium">Description</label>
                        <textarea name="description" class="form-control mt-1 block w-full border-gray-300 rounded-md shadow-sm" rows="3">{{ $category->description }}</textarea>
                    </div>

                    <div class="flex justify-between items-center">
                        <button type="submit" style="    background-color: #000;" class="btn btn-primary py-2 px-4 rounded-md shadow-sm text-white bg-green-600 hover:bg-green-700 focus:ring-2 focus:ring-green-300">
                            Update
                        </button>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary py-2 px-4 rounded-md shadow-sm text-gray-700 bg-gray-300 hover:bg-gray-400 focus:ring-2 focus:ring-gray-300">
                            Back
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
