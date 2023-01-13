<ul>
    @foreach($subCategory as $index=>$child)
        <li>
            {{ @$child->name }}
            <a href="javascript:void(0)" class="text-blue editCat"
               data-id="{{@$child->id}}"
               data-name="{{@$child->name}}" data-cat="{{@$child->parent_id}}">
                <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
            <a href="javascript:void(0)" class="text-danger permanent_delete"
               data-route="{{route('admin.category.destroy',@$child->id )}}">
                <i class="fa fa-trash" aria-hidden="true"></i></a>
            @if(count(@$child->subCategory))
                @include('admin.pages.manageChild',['subCategory' => @$child->subCategory])
            @endif
        </li>
    @endforeach
</ul>
