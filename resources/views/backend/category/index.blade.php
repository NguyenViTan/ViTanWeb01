@extends('layouts.admin')
@section('title', 'Category')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="d-inline">Tất cả danh mục</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="card">
               
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                        <form action="{{route('admin.category.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label>Tên danh mục (*)</label>
                                <input type="text"  value="{{old("name")}}" name="name" id="name" placeholder="Nhập tên danh mục"
                                    class="form-control" ">
                                    @error('name')
                                         {{$message}}
                                    @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description">Mô tả</label>
                                <input type="text" name="description" id="description"  placeholder="Nhập slug"
                                    class="form-control">
                                    {{old("description")}}
                                </input>
                            </div>
                            <div class="mb-3">
                                <label>Danh mục cha (*)</label>
                                <select name="parent_id" id="parent_id" class="form-control">
                                    <option value="0">Cấp cha</option>
                         
                                
                                </select>
                            </div>
                            <div class="mb-3">
                                <label>Hình đại diện</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="mb-3">
                             <label for="sort_order">Sắp xếp</label>
                                <select name="sort_order" id="sort_order" class="form-control">
                                   <option value="1"> 1</option>
                                    <option value="2"> 2</option>
                                     <option value="3">3</option>
    </select>
</div>

                            <div class="mb-3">
                                <label>Trạng thái</label>
                                <select name="status" id="status "class="form-control">
                                    <option value="1">Xuất bản</option>
                                    <option value="2">Chưa xuất bản</option>
                                </select>
                            </div>
                            <div class="md-3">
                                <button type="submit" class="btn btn-success">Thêm danh mục</button>
                            </div>
                        </form>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                        <th class="text-center" style="width:130px;">Hình ảnh</th>
                                        <th>Tên danh mục</th>
                                        <th>Tên slug</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($list as $category)
                                    <tr class="datarow">
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                        <td>
                                            <img src="../public/images/category.jpg" alt="category.jpg">
                                        </td>
                                        <td>
                                            <div class="name">
                                            {{$category->name}}
                                            </div>
                                            <div class="function_style">
                                                <a href="#">Hiện</a> |
                                                <a href="#">Chỉnh sửa</a> |
                                                <a href="../backend/category_show.html">Chi tiết</a> |
                                                <a href="#">Xoá</a>
                                            </div>
                                        </td>
                                        <td>  {{$category->slug}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
