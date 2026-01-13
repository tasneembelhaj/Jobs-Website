
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
            <div class="bg-blue-50 p-6 rounded-2xl shadow-md border border-blue-100 space-y-2 text-right">
                <p class="text-blue-900 font-semibold text-right"><strong>المتقدم:</strong> {{ $app->applicant->name }}</p>


                <p class="text-gray-700 text-right"><strong>البريد الإلكتروني:</strong><span dir="ltr">{{ $app->applicant->email }}</span></p>


                <p class="text-gray-700 text-right"><strong>الوظيفة:</strong> {{ $app->job->title }}</p>


                <p class="text-gray-700 text-right"><strong>المهارات المطلوبة:</strong> {{ $app->job->skills }}</p>

                
                <p class="text-gray-500 text-sm text-right"><strong>  تم التقديم بتاريخ:</strong> {{ $app->created_at->format('d M Y') }}</p>



                <p class="flex justify-start">
            <span 
            @class([
            'px-4 py-2 rounded-lg text-white text-base font-semibold',
                'bg-blue-500' => $app->status === 'جديد',
                'bg-green-500' => $app->status === 'مقبول',
                'bg-red-500' => $app->status === 'مرفوض',
              ])
            >
            {{ $app->status }}
            </span>
                </p>



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
















