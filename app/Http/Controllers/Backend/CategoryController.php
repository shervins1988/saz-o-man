<?php

namespace App\Http\Controllers\Backend;

use App\AttributGroup;
use App\Category;
use App\Http\Requests\CategoryMenuRequest;
use App\Http\Requests\CategoryMenuRequestEdit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function make_slug;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $category_menus = Category::with('childrenRecursive')
            ->where('parent_id', null)
            ->paginate(10);
        return view('backend.categories-menu.index', compact(['category_menus']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $category_menus = Category::with('childrenRecursive')
            ->where('parent_id', null)
            ->paginate(10);
        return view('backend.categories-menu.create', compact(['category_menus']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryMenuRequest $request
     * @return Response
     */
    public function store(CategoryMenuRequest $request)
    {
        $category = new Category();
        $category->title = $request->input('title');
        if ($request->input('slug')) {
            $category->slug = make_slug($request->input('slug'));
        } else {
            $category->slug = make_slug($request->input('title'));
        }
        $category->meta_desc = $request->input('meta_desc');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->status = $request->input('status');
        /*        $category->user_id = Auth::id();*/
        $category->parent_id = $request->input('category_parent');
        $category->save();
        $add_category = array(
            'message' => 'دسته بندی جدید با موفقیت اضافه گردید',
            'alert-type' => 'success'
        );
        return redirect('/backend/categories-menu')->with($add_category);

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
        $category_menus = Category::with('childrenRecursive')
            ->where('parent_id', null)
            ->paginate(10);
        $category = Category::findOrFail($id);
        return view('backend.categories-menu.edit', compact(['category_menus', 'category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(CategoryMenuRequestEdit $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->input('title');

        if ($request->input('slug')) {
            $category->slug = make_slug($request->input('slug'));
        } else {
            $category->slug = make_slug($request->input('title'));
        }

        $category->meta_desc = $request->input('meta_desc');
        $category->meta_keywords = $request->input('meta_keywords');
        $category->status = $request->input('status');
        $category->parent_id = $request->input('category_parent');
        /*        $category->user_id = Auth::id();
                $category->children()->create($request->all());*/
        $category->save();

        $edit_category = array(
            'message' => 'دسته بندی با موفقیت ویرایش گردید',
            'alert-type' => 'success'
        );

        return redirect('/backend/categories-menu')->with($edit_category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Category::with('childrenRecursive')->where('id', $id)->first();

        if (count($category->childrenRecursive) == 0) {
            $category->delete();
            $finish = true;
        } else {
            $finish = false;
        }

        return json_encode(
            [
                'finish' => $finish,
            ]
        );


        $delete_category = array(
            'message' => 'دسته بندی با موفقیت حذف گردید',
            'alert-type' => 'warning'
        );
        return redirect('/backend/categories-menu')->with($delete_category);
    }


    public function indexSetting($id)
    {
        $category = Category::findOrFail($id);
        $attributeGroups = AttributGroup::all();
        return view('backend.categories-menu.index-setting', compact('category','attributeGroups'));
    }


    public function saveSetting(Request $request , $id)
    {
        $category = Category::findOrFail($id);
        $category->attributeGroups()->sync($request->attributeGroups);

        $update_atrribute_category = array(
            'message' => 'ویژگی دسته بندی '.$category->title.' با موفقیت ثبت گردید',
            'alert-type' => 'info'
        );
        $category->save();
        return redirect('/backend/categories-menu')->with($update_atrribute_category);
    }

    public function apiIndex()
    {
        $categories = Category::with('childrenRecursive')->where('parent_id',null)->get();
        $response = [
            'categories' => $categories,
        ];
        return response()->json($response, 200);
    }


    public function apiIndexAttribute(Request $request)
    {
        $categories = $request->all();
        $attributeGroup = AttributGroup::with('attributesValue','categories')
            ->whereHas('categories', function ($q) use ($categories){
                $q->whereIn('categories.id',$categories);
            })->get();
        $response = [
            'attributes' => $attributeGroup,
        ];
        return response()->json($response, 200);
    }
}
