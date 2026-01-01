<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            تقديم طلب على الوظيفة: {{ $job->title }}
        </h2>
    </x-slot>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="border p-4 mb-4">
        <h3 class="font-bold text-lg">{{ $job->title }}</h3>
        <p class="mt-2">{{ $job->description }}</p>
        <p class="mt-2">
            <strong>المهارات المطلوبة:</strong> {{ $job->skills }}
        </p>
    </div>

    <form method="POST"
          action="{{ route('applications.store', $job->id) }}"
          enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block font-semibold mb-1">
                السيرة الذاتية (PDF أو Word)
            </label>
            <input type="file" name="cv" required class="border p-2 w-full">
        </div>

        <div class="mb-4">
            <label class="block font-semibold mb-1">
                رسالة التقديم (اختياري)
            </label>
            <textarea name="cover_letter"
                      class="w-full border p-2"
                      rows="4"></textarea>
        </div>

        <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            تقديم الطلب
        </button>
    </form>
</x-app-layout> -->





<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-darkText">
            تقديم طلب على الوظيفة: {{ $job->title }}
        </h2>
    </x-slot>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-3 mb-4 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <!-- كارد عرض تفاصيل الوظيفة -->
    <div class="bg-white shadow rounded-2xl border p-6 mb-6">
        <h3 class="font-bold text-lg text-darkText">{{ $job->title }}</h3>
        <p class="mt-2 text-gray-700">{{ $job->description }}</p>

        <p class="mt-3 text-gray-800">
            <strong>المهارات المطلوبة:</strong> {{ $job->skills }}
        </p>
    </div>

    <!-- الفورم -->
    <div class="bg-white shadow rounded-2xl border p-6">
        <form method="POST"
              action="{{ route('applications.store', $job->id) }}"
              enctype="multipart/form-data"
              class="space-y-6">

            @csrf

            <div>
                <label class="block font-semibold mb-1 text-darkText">
                    السيرة الذاتية (PDF أو Word)
                </label>
                <input type="file"
                       name="cv"
                       required
                       class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-primary focus:border-primary">
            </div>

            <div>
                <label class="block font-semibold mb-1 text-darkText">
                    رسالة التقديم (اختياري)
                </label>
                <textarea name="cover_letter"
                          rows="4"
                          class="w-full border rounded-lg p-3 focus:ring-2 focus:ring-primary focus:border-primary"></textarea>
            </div>

            <button type="submit"
                    class="bg-primary hover:bg-secondary transition text-white px-6 py-2 rounded-lg">
                تقديم الطلب
            </button>
        </form>
    </div>
</x-app-layout>
