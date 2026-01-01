<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\JobPost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    // عرض نموذج تقديم الطلب
    public function create(JobPost $job)
    {
        return view('applicant.job_details', compact('job'));
    }

    // تخزين الطلب
    public function store(Request $request, JobPost $job)
    {
        $request->validate([
            'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'nullable|string',
        ]);

        // رفع السي في
        $cvPath = $request->file('cv')->store('cvs', 'public');

        // إنشاء الطلب
        Application::create([
            'job_id' => $job->id,
            'applicant_id' => Auth::user()->applicant->id,
            'cv' => $cvPath,
            'cover_letter' => $request->cover_letter,
        ]);

        return redirect()->back()->with('success', 'تم تقديم الطلب بنجاح!');
    }
}

