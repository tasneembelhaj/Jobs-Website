<!-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">إضافة وظيفة جديدة</h2>
    </x-slot>

    <form method="POST" action="{{ route('employer.storeJob') }}" class="space-y-4 mt-4">
        @csrf

        <div>
            <label class="block">المسمى الوظيفي</label>
            <input type="text" name="title" class="border p-2 w-full" required>
        </div>

        <div>
            <label class="block">الوصف</label>
            <textarea name="description" class="border p-2 w-full" rows="4" required></textarea>
        </div>

        <div>
            <label class="block">المهارات المطلوبة</label>
            <input type="text" name="skills" class="border p-2 w-full" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">إضافة الوظيفة</button>
    </form>
</x-app-layout> -->



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-3xl text-blue-900">إضافة وظيفة جديدة</h2>
    </x-slot>

    <div class="mt-8 p-8 bg-blue-100 rounded-2xl shadow-lg max-w-2xl mx-auto">
        <form method="POST" action="{{ route('employer.storeJob') }}" class="space-y-6">
            @csrf

            <div>
                <label class="block text-blue-900 font-semibold mb-2 text-lg">المسمى الوظيفي</label>
                <input type="text" name="title"
                       class="border border-gray-300 p-4 w-full rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                       placeholder="مثال: مطور ويب" required>
            </div>

            <div>
                <label class="block text-blue-900 font-semibold mb-2 text-lg">الوصف</label>
                <textarea name="description"
                          class="border border-gray-300 p-4 w-full rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                          rows="5" placeholder="وصف الوظيفة" required></textarea>
            </div>

            <div>
                <label class="block text-blue-900 font-semibold mb-2 text-lg">المهارات المطلوبة</label>
                <input type="text" name="skills"
                       class="border border-gray-300 p-4 w-full rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                       placeholder="مثال: HTML, CSS, JavaScript" required>
            </div>

            <button type="submit"
                    class="w-full bg-green-600 text-white px-6 py-4 rounded-2xl font-bold shadow-lg hover:bg-green-700 transition-colors text-lg">
                إضافة الوظيفة
            </button>
        </form>
    </div>
</x-app-layout>
