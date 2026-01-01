



 <nav class="bg-blue-100 text-blue-700 p-4 flex justify-between items-center border-b border-blue-200 shadow-sm">

    <div class="flex items-center space-x-0 space-x-reverse space-y-0 gap-6">
        <a href="{{ route('dashboard') }}" 
           class="font-medium hover:text-blue-900 transition">
            الرئيسية
        </a>

        @if(Auth::user()->role === 'applicant')
            <a href="{{ route('applicant.jobs') }}" 
               class="font-medium hover:text-blue-900 transition">
                عرض الوظائف
            </a>

        @elseif(Auth::user()->role === 'employer')
            <a href="{{ route('employer.jobs') }}" 
               class="font-medium hover:text-blue-900 transition">
                وظائف الشركة
            </a>

            <a href="{{ route('employer.createJob') }}" 
               class="font-medium hover:text-blue-900 transition">
                إضافة وظيفة
            </a>

            <a href="{{ route('employer.applications') }}" 
               class="font-medium hover:text-blue-900 transition">
                طلبات التقديم
            </a>
        @endif
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" 
                class="px-4 py-1 rounded-lg bg-blue-500 text-white hover:bg-blue-600 transition shadow">
            تسجيل الخروج
        </button>
    </form>
</nav>

