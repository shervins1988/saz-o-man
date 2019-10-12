<?php

namespace App\Http\Controllers\Backend;

use App\Brand;
use App\Http\Requests\BrandEditRequest;
use App\Http\Requests\BrandRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::paginate(10);
        return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {

            $brand = new Brand();
            $brand->title = $request->input('title');

            if ($request->input('slug')) {
                $brand->slug = make_slug($request->input('slug'));
            } else {
                $brand->slug = make_slug($request->input('title'));
            }

            $brand->body = $request->input('body');
            $brand->meta_desc = $request->input('meta_desc');
            $brand->meta_keywords = $request->input('meta_keywords');
            $brand->photo_id = $request->input('photo_id');
            $brand->save();

            $add_brand = array(
                'message' => ' برند ' .$brand->title.  '  با موفقیت اضافه شد',
                'alert-type' => 'success'
            );

            return redirect('/backend/brands')->with($add_brand);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::with('photo')->whereId($id)->first();
        return view('backend.brands.edit', compact(['brands']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandEditRequest $request, $id)
    {
        $brand = Brand::findOrFail($id);
        $brand->title = $request->input('title');

        if ($request->input('slug')) {
            $brand->slug = make_slug($request->input('slug'));
        }else {
            $brand->slug = make_slug($request->input('title'));
        }

        $brand->meta_desc = $request->input('meta_desc');
        $brand->meta_keywords = $request->input('meta_keywords');
        $brand->photo_id = $request->input('photo_id');
        $brand->body = $request->input('body');
        $brand->save();

        $update_brand = array(
            'message' => ' برند ' .$brand->title.  '  با موفقیت ویرایش شد',
            'alert-type' => 'info'
        );
        return redirect('/backend/brands')->with($update_brand);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barand = Brand::findOrFail($id);
        $barand->delete();
        $delete_brand = array(
            'message' => ' برند ' .$brand->title.  '  با موفقیت حذف شد',
            'alert-type' => 'warning'
        );
        return redirect('/backend/brands')->with($delete_brand);
    }
}
