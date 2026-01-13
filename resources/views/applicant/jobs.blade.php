<!-- 

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            الوظائف المتاحة
        </h2>
    </x-slot>

    @forelse($jobs as $job)
        <div class="bg-white shadow rounded-lg p-5 mb-4 border p-6">
            <h3 class="font-bold text-lg mb-2">
                {{ $job->title }}
            </h3>

            <p class="text-gray-700 mb-3">
                {{ Str::limit($job->description, 120) }}
            </p>

            <a href="{{ route('applicant.jobDetails', $job->id) }}"
               class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                عرض التفاصيل
            </a>
        </div>
    @empty
        <div class="bg-yellow-100 text-yellow-800 p-4 rounded">
            لا توجد وظائف متاحة حاليًا
        </div>
    @endforelse
</x-app-layout> -->



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            الوظائف المتاحة
        </h2>
    </x-slot>

    @forelse($jobs as $job)
        <div class="bg-white shadow rounded-lg p-5 mb-4 border p-6">
            <h3 class="font-bold text-lg mb-2">
                {{ $job->title }}
            </h3>

            {{-- اسم الشركة --}}
            <p class="text-gray-800 mt-1 font-semibold">
            {{ $job->employer->name ?? $job->company->company_name ?? 'غير محددة' }}
           </p>

            {{-- تاريخ النشر --}}
            <p class="text-gray-600 mb-2 text-sm">
                <!-- <strong>تاريخ النشر:</strong>  -->
                {{ $job->created_at->format('d M Y') }}
            </p>

            <p class="text-gray-700 mb-3">
                {{ Str::limit($job->description, 120) }}
            </p>

            <a href="{{ route('applicant.jobDetails', $job->id) }}"
               class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                عرض التفاصيل
            </a>
        </div>
    @empty
        <div class="bg-yellow-100 text-yellow-800 p-4 rounded">
            لا توجد وظائف متاحة حاليًا
        </div>
    @endforelse
</x-app-layout>
