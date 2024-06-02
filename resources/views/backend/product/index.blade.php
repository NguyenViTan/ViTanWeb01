@extends('layouts.admin')
@section('title', 'Product')
@section('content')
<body class="hold-transition sidebar-mini">
   <div class="wrapper">
      <!-- CONTENT -->
      <form action="" method="post">
         <div class="content-wrapper">
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-12">
                        <h1 class="d-inline">Tất cả sản phẩm</h1>
                        <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary">Thêm sản phẩm</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="card">
                  <div class="card-header">
                     <select name="" id="" class="form-control d-inline" style="width:100px;">
                        <option value="">Xoá</option>
                     </select>
                     <button class="btn btn-sm btn-success">Áp dụng</button>
                  </div>
                  <div class="card-body">
                     <table class="table table-bordered" id="mytable">
                        <thead>
                           <tr>
                              <th class="text-center" style="width:30px;">
                                 <input type="checkbox">
                              </th>
                              <th class="text-center" style="width:130px;">Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                              <th>Tên danh mục</th>
                              <th>Tên thương hiệu</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $product)
                           <tr class="datarow">
                              <td>
                                 <input type="checkbox">
                              </td>
                              <td>
                                 <img src="../public/images/product.jpg" alt="product.jpg">
                              </td>
                              <td>
                                 <div class="name">
                                   {{$product->name}}
                                 </div>
                                 <div class="function_style">
                                    <a href="#">Hiện</a> |
                                    <a href="#">Chỉnh sửa</a> |
                                    <a href="product_show.html">Chi tiết</a> |
                                    <a href="#">Xoá</a>
                                 </div>
                              </td>
                              <td>{{$product->categoryname}}</td>
                              <td>{{$product->brandname}}</td>
                           </tr>
                            
                           @endforeach
                        </tbody>
                     </table>
                  </div>
               </div>
            </section>
         </div>
      </form>
      <!-- END CONTENT-->
      
   </div>
   <script src="../public/jquery/jquery-3.7.0.min.js"></script>
   <script src="../public/datatables/js/dataTables.min.js"></script>
   <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../public/dist/js/adminlte.min.js"></script>
   <script>
      $(document).ready(function () {
         $('#mytable').DataTable();
      });
   </script>
</body>

@endsection
