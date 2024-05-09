@extends("layouts.adminLayoutPage")
@section('content')

    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Thêm mới danh mục</h4>
            </div>
        </div>
        <div class="iq-card-body">
            <form action="{{route("admin.category.store")}}" method="POST">
                <div class="form-group mb-0">
                    <label for="categoryName" class="pb-0">Tên danh mục</label>
                    <input type="email" class="form-control form-control-lg" name="category_Name" id="categoryName"
                           placeholder="">
                </div>
                <div class="form-group mb-0">
                    <label for="categorySlug" class="pb-0">Slug</label>
                    <input type="email" class="form-control form-control-lg" id="categorySlug" name="category_slug"
                           placeholder="">
                </div>
                <div class="form-group">
                    <label for="categoryParentId">Danh mục cha</label>
                    <select class="form-control form-control-lg" id="categoryParentId" name="category_parent_id">
                        <option selected="">Không có thư mục cha</option>
                        @include('admin.content.category.category_option', ["categories" =>$categories, 'level' => 0])
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    {{--    <div class="forms">--}}
    {{--        <div class="form-grids row widget-shadow" data-example-id="basic-forms">--}}
    {{--            <div class="form-title">--}}
    {{--                <h4>Thêm mới danh mục</h4>--}}
    {{--            </div>--}}
    {{--            <div class="form-body">--}}
    {{--                <form action="{{route("admin.category.store")}}" method="POST">--}}
    {{--                    @csrf--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="categoryName">Tên danh mục</label>--}}
    {{--                        <input type="text" class="form-control" id="categoryName" name="category_name" placeholder="Nhập tên danh mục...">--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="categorySlug">Slug</label>--}}
    {{--                        <input type="text" class="form-control" id="categorySlug" name="category_slug" placeholder="Nhập slug của danh mục...">--}}
    {{--                    </div>--}}
    {{--                    <div class="form-group">--}}
    {{--                        <label for="categoryParentId">Danh mục cha</label>--}}
    {{--                        <select class="form-control" id="categoryParentId" name="category_parent_id">--}}
    {{--                            <option value="0">Không có danh mục cha</option>--}}
    {{--                            @include('admin.content.category.category_option', ["categories" =>$categories, 'level' => 0])--}}
    {{--                        </select>--}}
    {{--                    </div>--}}








    {{--                    Expand Down--}}



    {{--                    <button type="submit" class="btn btn-default">Submit</button>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
