@if(isset($selected_category))

    @foreach($category_menus as $sub_category)
        <option value="{{$sub_category->id}}" @if($selected_category->parent_id == $sub_category->id) selected @endif>
            {{str_repeat('--',$level)}} {{$sub_category->title}}</option>
        @if(count($sub_category->childrenRecursive) > 0)
            @include('backend.partials.category',['category_menus' => $sub_category->childrenRecursive , 'level' => $level+1,'selected_category'=>$selected_category])
        @endif
            @endforeach

        @else

            @foreach($category_menus as $sub_category)
                <option value="{{$sub_category->id}}">{{str_repeat('--',$level)}} {{$sub_category->title}}</option>
                @if(count($sub_category->childrenRecursive) > 0)
                    @include('backend.partials.category',['category_menus' => $sub_category->childrenRecursive , 'level' => $level+1 ])
                @endif
                    @endforeach
    @endif

