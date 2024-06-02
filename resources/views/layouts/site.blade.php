<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
<header>
<nav class="navbar  bg-danger">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Danh mục</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Trang chủ</a></li>
        <li><a href="#">Tin tức</a></li>
        <li><a href="/san-pham">Sản Phẩm</a></li>
        <li><a href="#">Liên hệ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>
    <main>
        @yield('content')
    </main>
    <footer class="container-fluid bg-danger">
<div >
  <h2 class=" text-center">Phụ Kiện Thú Cưng</h2>
  <p class=" text-center">The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table  ">
    <thead >
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
      
      
    </tbody>
  </table>
</div>

</footer>

</body>
</html>