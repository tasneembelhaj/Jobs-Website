<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use App\Models\Employer;

class EmployerController extends Controller
{
    // Dashboard
    public function dashboard()
    {
        return view('employer.dashboard');
    }

    // قائمة الوظائف المنشورة
public function jobs()
{
    $employer = auth()->user()->employer;

    $jobs = $employer->jobPosts; // ✅ فقط وظائف هذه الشركة

    return view('employer.jobs', compact('jobs'));
}

    // نموذج إضافة وظيفة
    public function createJob()
    {
        return view('employer.createJob');
    }

    // حفظ الوظيفة الجديدة
    public function storeJob(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'skills' => 'required|string',
        ]);

$employer = auth()->user()->employer;

JobPost::create([
    'title' => $request->title,
    'description' => $request->description,
    'skills' => $request->skills,
    'employer_id' => $employer->id, // ✅ الصحيح
]);


        return redirect()->route('employer.jobs')->with('success', 'تم إضافة الوظيفة بنجاح!');
    }

    // عرض طلبات التقديم
public function applications()
{
    // الشركة المرتبطة بالمستخدم الحالي
    $employer = Employer::where('user_id', auth()->id())->first();

    if (!$employer) {
        return view('employer.applications', [
            'applications' => collect()
        ]);
    }

    // جلب طلبات التقديم المرتبطة بوظائف هذه الشركة
    $applications = Application::whereHas('job', function ($query) use ($employer) {
        $query->where('employer_id', $employer->id);
    })->with(['applicant', 'job'])->get();

    return view('employer.applications', compact('applications'));
}
}
