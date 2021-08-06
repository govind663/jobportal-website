<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
        $petani = DB::table('products')->get();

        return view('Frontend.manage-resumes',compact('products'), ['petani' => $petani])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Frontend.add-resume');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // =============== Employe Basic Details =============================
            'fname' =>'required',
            'lname' =>'required',
            'age' =>'required',
            'gender' =>'required',
            'city' =>'required',
            'state' =>'required',
            'zip' =>'required',
            'phone' =>'required',
            'email' =>'required',
            'web' =>'required',
            'address' =>'required',
            'about' =>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000000000',

            // =============== Employe Work Experience ====================
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000000000',

        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        if ($image = $request->file('image1')) {
            $destinationPath = 'image1/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image1'] = "$profileImage";
        }

        Product::create($input);

        return redirect()->route('/add-resume')
                        ->with('success','Your Resume Created  Successfully...!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('Frontend.resume', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('Frontend.edit-resume',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
             // =============== Employe Basic Details =============================
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000000000',

             // =============== Employe Work Experience ====================
             'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:200000000000',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        if ($image = $request->file('image1')) {
            $destinationPath = 'image1/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image1'] = "$profileImage";
        }

        $product->update($input);

        return redirect()->route('/edit-resume')
                        ->with('success','Your Resume Updated  Successfully...!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','Your Resume Deleted  Successfully...!!');
    }
}
