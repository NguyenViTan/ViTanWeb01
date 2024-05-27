


@extends('layouts.site')
@section('title', 'Liên hệ')
@section('header')
@endsection
 
@section('content')


<div class="container mt-5 ">
  <h3>Liên Hệ</h3>
  <form>
    <div class="form-group">
      <label for="name">Họ và tên:</label>
      <input type="text" class="form-control" id="name" placeholder="Nhập họ và tên" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
    </div>
    <div class="form-group">
      <label for="message">Nội dung:</label>
      <textarea class="form-control" rows="5" id="message" placeholder="Nhập nội dung" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary ">Gửi</button>
  </form>
</div>

@endsection


