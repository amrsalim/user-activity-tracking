<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm rounded-lg p-6">
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">Category Details</h3>

                <div class="space-y-4">
                    <p><strong class="text-gray-700">Name:</strong> <span class="text-gray-900">{{ $category->name }}</span></p>
                    <p><strong class="text-gray-700">Description:</strong> <span class="text-gray-900">{{ $category->description }}</span></p>
                </div>

                <div class="mt-6">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary py-2 px-4 rounded-md text-white bg-gray-300 hover:bg-gray-400 focus:ring-2 focus:ring-gray-300">
                        Back
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
