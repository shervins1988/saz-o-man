@if(Session::has('$delete_category'))
    <div class="m-alert__text" >
        {{Session('$delete_category')}}
    </div>
@endif
@foreach($category_menus as $sub_category)

    <tr role="row" class="odd" id="cat_{{$sub_category->id}}">
        <td class="sorting_1" tabindex="0">{{$sub_category->id}}</td>
        <td> {{str_repeat('--',$level)}}{{$sub_category->title}}</td>
        <td> {{$sub_category->parent_id}}</td>
        <td>
            @if($sub_category->status == 0)

                <span class="m-badge m-badge--success m-badge--dot"></span>&nbsp;<span
                    class="m--font-bold m--font-success">
                                                        فعال
                                                </span>


            @else
                <span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span
                    class="m--font-bold m--font-danger">
                                                        غیر فعال
                                                </span>
            @endif

        </td>

        <td nowrap="">

            <a href="{{route('categories-menu.edit',$sub_category->id)}}"
               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
               title="ویرایش">
                <i class="la la-edit"></i>
            </a>

            <a href="{{route('categories-menu.indexSetting',$sub_category->id)}}"
               class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="تعیین ویژگی">
                <i class="la la-key"></i>
            </a>

            {!! Form::open(['method'=>'DELETE','action'=>['Backend\CategoryController@destroy',$sub_category->id],'style'=>'display:inline-block']) !!}

            <button
                class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill"
                title="حذف" onclick="deleteRow({{$sub_category->id}})">
                <i class="la la-trash"></i>
            </button>
            {!! Form::close() !!}
        </td>
    </tr>

    @if(count($sub_category->childrenRecursive) > 0)
        @include('backend.partials.category_list',['category_menus' => $sub_category->childrenRecursive , 'level' => $level+1 ])
        @endif
        @endforeach


<script>
    function deleteRow(id) {
        var answer = window.confirm("آیا برای حذف این دسته بندی اطمینان دارید؟");
        if(answer){
            $.ajax({
                type: "post",
                url: "{{'Backend\CategoryController@destroy'}}",
                data: {
                    "_method": "delete",
                    "_token": "{{ csrf_token() }}",
                    "id": id
                },
                dataType:'json',
                success: function(responce){
                    if(responce.finish){
                        $("#cat_"+id).fadeOut();
                    } else {
                        alert('این دسته ی والد دارای زیرمنو می باشد');
                    }
                }
            });
        }
    }
</script>
