@extends('admin.master')
@section('title')
    {{__('Admin Dashboard')}}
@endsection
@section('css')
    <style>
        .tree, .tree ul {
            margin: 0;
            padding: 0;
            list-style: none
        }

        .tree ul {
            margin-left: 1em;
            position: relative
        }

        .tree ul ul {
            margin-left: .5em
        }

        .tree ul:before {
            content: "";
            display: block;
            width: 0;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            border-left: 1px solid
        }

        .tree li {
            margin: 0;
            padding: 0 1em;
            line-height: 2em;
            color: #369;
            font-weight: 700;
            position: relative
        }

        .tree ul li:before {
            content: "";
            display: block;
            width: 10px;
            height: 0;
            border-top: 1px solid;
            margin-top: -1px;
            position: absolute;
            top: 1em;
            left: 0
        }

        .tree ul li:last-child:before {
            background: #fff;
            height: auto;
            top: 1em;
            bottom: 0
        }

        .indicator {
            margin-right: 5px;
        }

        .tree li a {
            text-decoration: none;
            color: #369;
        }

        .tree li button, .tree li button:active, .tree li button:focus {
            text-decoration: none;
            color: #369;
            border: none;
            background: transparent;
            margin: 0px 0px 0px 0px;
            padding: 0px 0px 0px 0px;
            outline: 0;
        }

        .tree li {
            display: block;
            position: relative;
            padding-left: calc(2 * var(--spacing) - var(--radius) - 2px);
        }

        .tree ul {
            margin-left: calc(var(--radius) - var(--spacing));
            padding-left: 0;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Categories</h1>
            <a class="badge bg-dark text-white ms-2" href="javascript:void(0)">
                {{__('Categories list')}}
            </a>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Categories</h5>
                    </div>
                    <div class="card-body">
                        <ul id="tree1">
                            @foreach($categories as $category)
                                <li>
                                    {{ $category->name }}
                                    <a href="javascript:void(0)" class="btn btn-primary editCat"
                                       data-id="{{@$category->id}}"
                                       data-name="{{@$category->name}}" data-cat="{{@$category->parent_id}}">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger permanent_delete"
                                       data-route="{{route('admin.category.destroy',@$category->id)}}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    @if(count(@$category->subCategory))
                                        @include('admin.pages.manageChild',['subCategory' => @$category->subCategory])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Category Add/Edit</h5>
                    </div>
                    <div class="card-body">
                        <form id="categoryAddEdit" name="categoryAddEdit" action="{{route('admin.category.store')}}">
                            @csrf
                            <input type="hidden" name="id" value="" id="catId">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                                       value="">
                            </div>
                            <label id="name-error" class="error" for="name" style="display: none;"></label>
                            <br>
                            <div class="form-group">
                                <label for="parent_id">Category</label>
                                <select class="form-control" id="parent_id" name="parent_id">
                                    <option value="">Select Category</option>
                                    @foreach(@$all_categories as $cat)
                                        <option value="{{@$cat->id}}">{{@$cat->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $.fn.extend({
            treed: function (o) {

                var openedClass = 'glyphicon-minus-sign';
                var closedClass = 'glyphicon-plus-sign';

                if (typeof o != 'undefined') {
                    if (typeof o.openedClass != 'undefined') {
                        openedClass = o.openedClass;
                    }
                    if (typeof o.closedClass != 'undefined') {
                        closedClass = o.closedClass;
                    }
                }
                ;

                /* initialize each of the top levels */
                var tree = $(this);
                tree.addClass("tree");
                tree.find('li').has("ul").each(function () {
                    var branch = $(this);
                    branch.prepend("");
                    branch.addClass('branch');
                    branch.on('click', function (e) {
                        if (this == e.target) {
                            var icon = $(this).children('i:first');
                            icon.toggleClass(openedClass + " " + closedClass);
                            $(this).children().children().toggle();
                        }
                    })
                    branch.children().children().toggle();
                });
                /* fire event from the dynamically added icon */
                tree.find('.branch .indicator').each(function () {
                    $(this).on('click', function () {
                        $(this).closest('li').click();
                    });
                });
                /* fire event to open branch if the li contains an anchor instead of text */
                tree.find('.branch>a').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
                /* fire event to open branch if the li contains a button instead of text */
                tree.find('.branch>button').each(function () {
                    $(this).on('click', function (e) {
                        $(this).closest('li').click();
                        e.preventDefault();
                    });
                });
            }
        });
        /* Initialization of treeviews */
        $('#tree1').treed();
    </script>
    <script>
        $(document).on("click", ".editCat", function () {
            let id = $(this).attr('data-id');
            let name = $(this).attr('data-name');
            let cat = $(this).attr('data-cat');
            $("#catId").val(id);
            $("#name").val(name);
            $("#parent_id").val(cat);
        });
    </script>
@endsection
