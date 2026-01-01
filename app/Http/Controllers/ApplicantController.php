<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ApplicantController extends Controller
{
    public function dashboard()
    {
        return view('applicant.dashboard');
    }

public function jobs()
{
    $jobs = JobPost::all();
    return view('applicant.jobs', compact('jobs'));
}

public function jobDetails($id)
{
    $job = JobPost::findOrFail($id);
    return view('applicant.jobDetails', compact('job'));
}


public function applyJob(Request $request, $id)
{
    $request->validate([
        'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        'cover_letter' => 'nullable|string',
    ]);

    $cvPath = $request->file('cv')->store('cvs', 'public');

    Application::create([
        'job_id'        => $id,          // ✅ نفس الاسم الموجود في Application
        'applicant_id' => Auth::id(),
        'cv'            => $cvPath,
        'cover_letter' => $request->cover_letter,
    ]);

    return back()->with('success', 'تم إرسال طلبك بنجاح ✅');
}
}