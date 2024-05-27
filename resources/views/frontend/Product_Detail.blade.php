
@extends('layouts.site')
@section('title', 'Trang chủ')
@section('header')
@endsection
@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
    <img src="{{ asset('assets/img/banner/banner3.jpg') }}"class="img-fluid" alt="Chi Tiết Sản Phẩm">
    </div>
    <div class="col-md-6">
      <h3>Tên Sản Phẩm</h3>
      <p>Giá: $99.99</p>
      <p>Mô tả: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
      <button type="button" class="btn btn-primary">Thêm vào giỏ hàng</button>
    </div>
  </div>
</div>
@endsection