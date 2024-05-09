@extends("layouts.adminLayoutPage")
@section('content')
    <div class="container-fluid">

        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Thêm mới danh mục</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <form action="{{route('admin.category.edit', $item ->id)}}" method="POST">
                    @csrf
                    <div class="form-group mb-0">
                        <label for="categoryName" class="pb-0">Tên danh mục</label>
                        <input type="email" class="form-control form-control-lg" name="category_Name" id="categoryName"
                               placeholder="" value="{{$item->category_name}}">
                    </div>
                    <div class="form-group mb-0">
                        <label for="categorySlug" class="pb-0">Slug</label>
                        <input type="email" class="form-control form-control-lg" id="categorySlug" name="category_slug"
                               placeholder="" value="{{$item->category_slug}}">
                    </div>
                    <div class="form-group">
                        <label for="categoryParentId">Danh mục cha</label>
                        <select class="form-control form-control-lg" id="categoryParentId" name="category_parent_id"
                                fdprocessedid="vta9ui">
                            <option selected="">Không có thư mục cha</option>
                            @include("admin.content.category.category_selected_option", ["categories"=>$categories, "level"=>0, "item"=>$item])
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" fdprocessedid="0fk6s">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
