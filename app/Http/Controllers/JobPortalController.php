<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class JobPortalController extends Controller
{
    /***
     *  Here code for About.blade.php
     */
    public function About(){
        return view('Frontend.about');
    }

    /***
     *  Here code for add-resume.blade.php
     */
    public function Add_Resume(){
        return view('Frontend.add-resume');
    }

    /***
     *  Here code for add-resume.blade.php
     */
    public function Edit_Resume(){
        $petani = DB::table('products')->get();
        return view('Frontend.edit-resume', ['petani' => $petani]);
    }



    /***
     *  Here code for bookmarked.blade.php
     */
    public function Bookmarked(){
        return view('Frontend.bookmarked');
    }

    /***
     *  Here code for browse-categories.blade.php
     */
    public function Browse_Categories(){
        return view('Frontend.browse-categories');
    }

    /***
     *  Here code for browse-jobs.blade.php
     */
    public function Browse_Jobs(){
        return view('Frontend.browse-jobs');
    }

    /***
     *  Here code for browse-resumes.blade.php
     */
    public function Browse_Resumes(){
        return view('Frontend.browse-resumes');
    }

    /***
     *  Here code for change-password.blade.php
     */
    public function Change_Password(){
        return view('Frontend.change-password');
    }


    /***
     *  Here code for faq.blade.php
     */
    public function FAQ(){
        return view('Frontend.faq');
    }

    /***
     *  Here code for index.blade.php
     */
    public function Home(){
        return view('Frontend.index');
    }

    /***
     *  Here code for job-alerts.blade.php
     */
    public function Job_Alerts(){

        $petani = DB::table('posts')->get();
        $employees = Post::orderBy('id','desc')->paginate(4);

        return view('Frontend.job-alerts', ['petani' => $petani], compact('employees'))
                    ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /***
     *  Here code for job-details.blade.php
     */
    public function Job_Details(){
        return view('Frontend.job-details');
    }

    /***
     *  Here code for job-page.blade.php
     */
    public function Job_Page(){
        return view('Frontend.job-page');
    }

    /***
     *  Here code for manage-applications.blade.php
     */
    public function Manage_Applications(){
        return view('Frontend.manage-applications');
    }

    /***
     *  Here code for manage-jobs.blade.php
     */
    public function Manage_Jobs(){
        return view('Frontend.manage-jobs');
    }

    /***
     *  Here code for manage-resumes.blade.php
     */
    public function Manage_Resumes(){
        $petani = DB::table('products')->get();

        $products = Product::latest()->paginate(5);
        return view('Frontend.manage-resumes', ['petani' => $petani], compact('products'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /***
     *  Here code for my-account.blade.php
     */
    public function My_Account(){
        return view('Frontend.my-account');
    }

    /***
     *  Here code for notifications.blade.php
     */
    public function Notifications(){
        return view('Frontend.notifications');
    }

    /***
     *  Here code for post-jobs.blade.php
     */
    public function Post_Jobs(){
        return view('Frontend.post-job');
    }

    /***
     *  Here code for pricing.blade.php
     */
    public function Pricing(){
        return view('Frontend.pricing');
    }

    /***
     *  Here code for privacy-policy.blade.php
     */
    public function Privacy_Policy(){
        return view('Frontend.privacy-policy');
    }

    /***
     *  Here code for resume.blade.php
     */
    public function Resume(){

        $petani = DB::table('products')->get();
        return view('Frontend.resume', ['petani' => $petani]);
    }



    /***
     *  Here code for traing.blade.php
     */
    public function Training(){
        return view('Frontend.training');
    }

    /***
     *  Here code for consultancy.blade.php
     */
    public function Consultancy(){
        return view('Frontend.consultancy');
    }

    /***
     *  Here code for job-fair.blade.php
     */
    public function Job_Fair(){
        return view('Frontend.job-fair');
    }

    /***
     *  Here code for job-seeker.blade.php
     */
    public function Job_Seeker(){
        return view('Frontend.job-seeker');
    }

    /***
     *  Here code for institute.blade.php
     */
    public function Institute(){
        return view('Frontend.institute');
    }

    /***
     *  Here code for Companies.blade.php
     */
    public function Companies(){
        return view('Frontend.companies');
    }



}
