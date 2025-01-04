<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $header ?? __('Categories') }} <!-- تعيين العنوان بشكل ديناميكي -->
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <!-- تضمين المحتوى المتغير في الصفحة -->
            {{ $slot }}
        </div>
    </div>
</x-app-layout>
