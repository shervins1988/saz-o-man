<?php

namespace App\Http\Controllers\Backend;

use App\Brand;
use App\Category;
use App\Http\Requests\ProductCreateRequest;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $category_menus = Category::with('childrenRecursive')->where('parent_id', null)->get();
        $brands = Brand::all();
        return view('backend.products.create', compact(['brands']));
    }


    public function generateSMP()
    {
        $number = mt_rand(1000, 99999);
        if ($this->checkSMP($number)) {
            return $this->generateSMP();
        }
        return (string)$number;
    }

    public function checkSMP($number)
    {
        return Product::where('smp', $number)->exists();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(ProductCreateRequest $request)
    {
//        return $request->all();
        $newProduct = new Product();
        $newProduct->title = $request->input('title');

        if ($request->input('slug')) {
            $newProduct->slug = make_slug($request->input('slug'));
        }else {
            $newProduct->slug = make_slug($request->input('title'));
        }
        $newProduct->title_en = $request->input('title_en');
        $newProduct->smp = $this->generateSMP();
        $newProduct->status = $request->input('status');
        $newProduct->price = $request->input('price');
        $newProduct->discount_price = $request->input('discount_price');
        $newProduct->description = $request->input('description');
        $newProduct->meta_desc = $request->input('meta_desc');
        $newProduct->meta_keywords = $request->input('meta_keywords');
        $newProduct->weight = $request->input('weight');
        $newProduct->length = $request->input('length');
        $newProduct->width = $request->input('width');
        $newProduct->height = $request->input('height');
        $newProduct->brand_id = $request->input('brand');
        $newProduct->user_id = 1;
        $newProduct->save();

        $attributes = explode(',', $request->input('attributes')[0]);
        $photos = explode(',', $request->input('photo_id')[0]);

        $newProduct->categories()->sync($request->categories);
        $newProduct->attributeValues()->sync($attributes);
        $newProduct->photos()->sync($photos);
        $add_newProduct = array(
            'message' => 'محصول جدید با موفقیت اضافه گردید',
            'alert-type' => 'success'
        );
        return redirect('/backend/products')->with($add_newProduct);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
