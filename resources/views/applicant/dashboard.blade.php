<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">لوحة تحكم الباحث عن عمل</h2>
    </x-slot>

    <p>مرحبًا {{ Auth::user()->name }}! يمكنك تصفح الوظائف والتقديم عليها.</p>
    <a href="{{ route('applicant.jobs') }}" class="underline text-blue-600">عرض جميع الوظائف</a>
</x-app-layout> -->



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            لوحة تحكم الباحث عن عمل
        </h2>
    </x-slot>

    <div class="p-6 bg-white shadow rounded-lg">
        <p class="text-gray-700 mb-4">
            مرحبًا {{ Auth::user()->name }}! 👋 يمكنك تصفح الوظائف والتقديم عليها بسهولة من هنا.
        </p>

        <a href="{{ route('applicant.jobs') }}" 
           class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            عرض جميع الوظائف
        </a>
    </div>
</x-app-layout>
