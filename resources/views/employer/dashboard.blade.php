


<x-app-layout>
   <x-slot name="header">
    <div class="bg-blue-600 p-4 rounded-t-lg">
        <h2 class="font-bold text-2xl text-white">لوحة تحكم الشركة</h2>
    </div>
</x-slot>


    <div class="mt-6 p-6 bg-white rounded-lg shadow-md">
        <p class="text-gray-700 text-lg mb-4">
            مرحبًا <span class="font-semibold">{{ Auth::user()->name }}</span>! 
            يمكنك إضافة وظائف جديدة وعرض طلبات التقديم.
        </p>
        <a href="{{ route('employer.createJob') }}" 
           class="inline-block px-4 py-2 bg-blue-600 text-white font-medium rounded hover:bg-blue-700 transition-colors ">
           إضافة وظيفة جديدة
        </a>
    </div>
</x-app-layout>




<!-- 
<x-app-layout> <x-slot name="header"> <h2 class="font-semibold text-xl">لوحة تحكم الشركة</h2> </x-slot> <p>مرحبًا {{ Auth::user()->name }}! يمكنك إضافة وظائف جديدة وعرض طلبات التقديم. 
<br><br>
</p> <a href="{{ route('employer.createJob') }}"

       class="inline-block px-6 py-2 bg-primary text-white font-semibold rounded shadow hover:bg-secondary transition-colors mt-4">
            إضافة وظيفة جديدة
        </a> </x-app-layout> -->