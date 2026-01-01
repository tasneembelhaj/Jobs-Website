<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">طلبات التقديم</h2>
    </x-slot>

    @if($applications->isEmpty())
        <p class="p-4">لا توجد طلبات تقديم حتى الآن.</p>
    @endif

    @foreach($applications as $app)
        <div class="border p-4 mb-4">
            <p><strong>المتقدم:</strong> {{ $app->applicant->name }}</p>
            <p><strong>البريد الإلكتروني:</strong> {{ $app->applicant->email }}</p>
            <p><strong>الوظيفة:</strong> {{ $app->job->title }}</p>
            <p><strong>المهارات المطلوبة:</strong> {{ $app->job->skills }}</p>

            @if($app->cv)
                <p>
                    <strong>السيرة الذاتية:</strong>
                    <a href="{{ asset('storage/' . $app->cv) }}" target="_blank" class="text-blue-600 underline">
                        تحميل
                    </a>
                </p>
            @endif
        </div>
    @endforeach
</x-app-layout> -->






<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-3xl text-blue-900">طلبات التقديم</h2>
    </x-slot>

    <div class="mt-6 max-w-3xl mx-auto space-y-4">

        @if($applications->isEmpty())
            <p class="p-6 bg-blue-50 text-gray-700 rounded-2xl shadow-sm text-center">
                لا توجد طلبات تقديم حتى الآن.
            </p>
        @endif

        @foreach($applications as $app)
            <div class="bg-blue-50 p-6 rounded-2xl shadow-md border border-blue-100 space-y-2">
                <p class="text-blue-900 font-semibold"><strong>المتقدم:</strong> {{ $app->applicant->name }}</p>
                <p class="text-gray-700"><strong>البريد الإلكتروني:</strong> {{ $app->applicant->email }}</p>
                <p class="text-gray-700"><strong>الوظيفة:</strong> {{ $app->job->title }}</p>
                <p class="text-gray-700"><strong>المهارات المطلوبة:</strong> {{ $app->job->skills }}</p>

                @if($app->cv)
                    <p class="text-gray-700">
                        <strong>السيرة الذاتية:</strong>
                        <a href="{{ asset('storage/' . $app->cv) }}" target="_blank" 
                           class="text-blue-600 underline hover:text-blue-800 transition-colors">
                            تحميل
                        </a>
                    </p>
                @endif
            </div>
        @endforeach

    </div>
</x-app-layout>
