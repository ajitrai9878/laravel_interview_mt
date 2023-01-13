<ul>
    @foreach($subCategory as $child)
        <li>
            {{ $child->name }}
            @if(count($child->subCategory))
                @include('admin.pages.manageChild',['subCategory' => $child->subCategory])
            @endif
        </li>
    @endforeach
</ul>
