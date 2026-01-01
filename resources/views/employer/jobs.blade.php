<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">وظائف الشركة</h2>
    </x-slot>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    @foreach($jobs as $job)
        <div class="border p-4 mb-4">
            <h3 class="font-bold">{{ $job->title }}</h3>
            <p>{{ $job->description }}</p>
            <p><strong>المهارات المطلوبة:</strong> {{ $job->skills }}</p>
        </div>
    @endforeach

    <a href="{{ route('employer.createJob') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded">إضافة وظيفة جديدة</a>
</x-app-layout> -->



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-3xl text-blue-900">وظائف الشركة</h2>
    </x-slot>

    <div class="mt-6 max-w-3xl mx-auto space-y-4">
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-4 rounded-xl shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        @foreach($jobs as $job)
            <div class="bg-blue-50 p-6 rounded-2xl shadow-md border border-blue-100">
                <h3 class="font-bold text-blue-900 text-xl mb-2">{{ $job->title }}</h3>
                <p class="text-gray-700 mb-2">{{ $job->description }}</p>
                <p class="text-gray-700"><strong>المهارات المطلوبة:</strong> {{ $job->skills }}</p>
            </div>
        @endforeach

        <a href="{{ route('employer.createJob') }}"
           class="mt-6 inline-block w-full text-center bg-blue-600 text-white px-6 py-3 rounded-2xl font-semibold shadow-lg hover:bg-blue-700 transition-colors">
            إضافة وظيفة جديدة
        </a>
    </div>
</x-app-layout>
