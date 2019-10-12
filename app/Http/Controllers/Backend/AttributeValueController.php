<?php

namespace App\Http\Controllers\Backend;

use App\AttributeValue;
use App\AttributGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributesValue = AttributeValue::with('attributeGroup')->paginate(10);
        return view('backend.attributes-value.index', ['attributesValue'=> $attributesValue]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributesGroup = AttributGroup::all();
        return view('backend.attributes-value.create', ['attributesGroup'=> $attributesGroup]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newValue = new AttributeValue();
        $newValue->title = $request->input('title');
        $newValue->attributeGroup_id = $request->input('attribute_group');
        $newValue->desc_notif = $request->input('desc_notif');
        $newValue->save();
        $add_attributesValue = array(
            'message' =>  ' مقدار ویژگی ' .$newValue->title.  '  با موفقیت اضافه شد',
            'alert-type' => 'success'
        );
        return redirect('/backend/attributes-value')->with($add_attributesValue);
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
        $attributeValue = AttributeValue::with('attributeGroup')->whereId($id)->first();
        $attributesGroup = AttributGroup::all();
        return view('backend.attributes-value.edit', ['attributeValue'=>$attributeValue, 'attributesGroup'=>$attributesGroup]);
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
        $updatedValue = AttributeValue::findOrFail($id);
        $updatedValue->title = $request->input('title');
        $updatedValue->attributeGroup_id = $request->input('attribute_group');
        $newValue->desc_notif = $request->input('desc_notif');
        $updatedValue->save();
        $upd_attributesValue = array(
            'message' =>  ' مقدار ویژگی ' .$updatedValue->title.  '  با موفقیت بروزرسانی شد',
            'alert-type' => 'success'
        );
        return redirect('/backend/attributes-value')->with($upd_attributesValue);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attributeValue = AttributeValue::findOrFail($id);
        $attributeValue->delete();
        $del_attributesValue = array(
            'message' =>  ' مقدار ویژگی ' .$attributeValue->title.  '  با موفقیت حذف شد',
            'alert-type' => 'warning'
        );
        return redirect('/backend/attributes-value')->with($del_attributesValue);
    }
}
