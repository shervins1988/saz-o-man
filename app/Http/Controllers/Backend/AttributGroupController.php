<?php

namespace App\Http\Controllers\Backend;

use App\AttributGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributesGroup = AttributGroup::paginate(10);
        return view('backend.attributes.index', ['attributesGroup'=> $attributesGroup]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributeGroup = new AttributGroup();
        $attributeGroup->title = $request->input('title');
        $attributeGroup->type = $request->input('type');
        $attributeGroup->desc_notif = $request->input('desc_notif');
        $attributeGroup->save();
        $add_attributesGroup = array(
            'message' =>  ' ویژگی ' .$attributeGroup->title.  '  با موفقیت اضافه شد',
            'alert-type' => 'success'
        );
        return redirect('/backend/attributes-group')->with($add_attributesGroup);
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
        $attributeGroup = AttributGroup::findOrFail($id);

        return view('backend.attributes.edit', ['attributeGroup'=>$attributeGroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributeGroup = AttributGroup::findOrFail($id);
        $attributeGroup->title = $request->input('title');
        $attributeGroup->type = $request->input('type');
        $attributeGroup->desc_notif = $request->input('desc_notif');
        $attributeGroup->save();
        $update_attributesGroup = array(
            'message' =>  ' ویژگی ' .$attributeGroup->title.  '  با موفقیت ویرایش شد',
            'alert-type' => 'info'
        );
        return redirect('/backend/attributes-group')->with($update_attributesGroup);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attributeGroup = AttributGroup::findOrFail($id);
        $attributeGroup->delete();
        $delete_attributesGroup = array(
            'message' =>  ' ویژگی ' .$attributeGroup->title.  '  با موفقیت حذف شد',
            'alert-type' => 'warning'
        );
        return redirect('/backend/attributes-group')->with($delete_attributesGroup);
    }
}
