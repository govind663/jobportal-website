<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function createForm()
    {
        return view('Frontend.job-application');
    }

    public function fileUpload(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'position_applying' => 'required',
            'resume' => 'required|mimes:csv,txt,xlx,xls,pdf|max:800048',
        ]);

        $path = $request->file('resume')->store('public/jobapplication');

        $post = new File;

        if($request->Yes == 'checked'){

            $post->Yes = 1;
            $post->No = 0;
            $post->Not_sure = 0;
        }
        elseif ($request->No == 'checked')   {

            $post->No = 1;
            $post->Yes = 0;
            $post->Not_sure = 0;
        }
        elseif ($request->Not_sure == 'checked')   {

            $post->Not_sure = 1;
            $post->Yes = 0;
            $post->No = 0;
        }

        $post->fname = $request->fname;
        $post->mname = $request->mname;
        $post->lname = $request->lname;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->radio = $request->radio;
        $post->position_applying = $request->position_applying;
        $post->portfolio_website = $request->portfolio_website;
        $post->Salary_requirements = $request->Salary_requirements;
        $post->job_starting_date = $request->job_starting_date;
        $post->last_company_worked = $request->last_company_worked;
        $post->message = $request->message;
        $post->resume = $path;

        $post->save();
        return back()->with('success','Post has been created successfully.');

    }
}
