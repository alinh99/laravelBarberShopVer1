<div style="background-color: #ededed;">
    <div class="container">
        <ul class="nav nav-tabs flex-grow-1 justify-content-between" style="color: rgb(2, 13, 24);">
            <li class="nav-item">
                <a class="nav-link active" href="tel:0935232661" style="background-color: rgb(237, 237, 237); font-size: 11px;"><i
                        class="fa fa-phone"></i>0935.232.661</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-capitalize" href="https://www.facebook.com/Fucking-Store-102721974857108/?modal=admin_todo_tour" style="
            color: rgb(73, 80, 87);
            background-color: rgb(237, 237, 237);
            font-size: 11px;
          "><i class="fa fa-facebook"></i>Fucking&nbsp;Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-capitalize" href="{{route('lienhe')}}" style="
            color: rgb(73, 80, 87);
            background-color: #ededed;
            font-size: 11px;
          ">Liên hệ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-capitalize" href="/sign-in.html" style="
            color: rgb(73, 80, 87);
            background-color: #ededed;
            font-size: 11px;
          ">Đăng nhập</a>

            </li>
            <li class="nav-item">
                <a class="nav-link text-capitalize" href="/sign-up.html" style="
            color: rgb(73, 80, 87);
            background-color: #ededed;
            font-size: 11px;
          ">Đăng kí</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-capitalize search-icon" href="#" style="
            color: rgb(73, 80, 87);
            background-color: #ededed;

            font-size: 11px;
          "><i class="fa fa-search"></i></a>
            </li>
            <li class="cart-btn">
                <span>
                    <i class="fas fa-cart-plus"></i>
                </span>
                <span class="cart-items">{{session()->has('cart') ? session()->get('cart')->totalQty : '0'}}</span>
            </li>

        </ul>
    </div>
</div>
<!-- End: Article Header 1 -->
<div class="container">
    <nav class="navbar navbar-light navbar-expand-md shadow-none" style="background-color: #fbf4f4;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('trang-chu')}}"><img src="/assets/img/Webp.net-resizeimage%20(1).png?h=c9bf3f53770946cdb15891685a260b15" /></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navcol-1">
                <ul class="nav navbar-nav"></ul>
            </div>
            <div class="dropdown">
                <a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle text-uppercase" href="/tao-kieu-toc.html" style="color: rgb(4, 4, 4); font-size: 12px;">Tạo kiểu tóc&nbsp;</a>
                <div role="menu" class="dropdown-menu">
                    <a role="presentation" class="dropdown-item" href="#">Sáp</a><a role="presentation" class="dropdown-item" href="#">Gôm</a><a role="presentation" class="dropdown-item" href="#">Xịt tạo phòng</a><a role="presentation" class="dropdown-item"
                        href="#">Máy sấy</a>
                    <a role="presentation" class="dropdown-item" href="#">Sịt màu tóc</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(24, 23, 23); font-size: 12px;">Quần lót và vớ&nbsp;</a>
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" role="presentation" href="#">Quần lót nam</a><a class="dropdown-item" role="presentation" href="#">Tất</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(7, 7, 7); font-size: 12px;">Chăm sóc tóc&nbsp;</a>
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" role="presentation" href="#">Dầu gội</a><a class="dropdown-item" role="presentation" href="#">Dầu xả</a><a class="dropdown-item" role="presentation" href="#">Dưỡng tóc</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(4, 4, 4); font-size: 12px;">Chăm sóc da&nbsp;</a>
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" role="presentation" href="#">Sữa rửa mặt</a><a class="dropdown-item" role="presentation" href="#">Sữa dưỡng da</a><a class="dropdown-item" role="presentation" href="#">Trị mụn</a><a class="dropdown-item"
                        role="presentation" href="#">Tẩy tế bào
                        chết</a><a class="dropdown-item" role="presentation" href="#">Kem chống nắng</a>
                    <a class="dropdown-item" role="presentation" href="#">Mặt nạ</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(6, 5, 5); font-size: 12px;">Chăm sóc cơ thể&nbsp;</a>
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" role="presentation" href="#">Khử mùi</a><a class="dropdown-item" role="presentation" href="#">Nước hoa</a><a class="dropdown-item" role="presentation" href="#">Chăm sóc răng - miệng</a><a class="dropdown-item"
                        role="presentation" href="#">Sữa
                        tắm</a>
                </div>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(8, 8, 8); font-size: 12px;">Chăm sóc râu</a>
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" role="presentation" href="#">Kem cạo râu</a><a class="dropdown-item" role="presentation" href="#">Máy cạo râu</a><a class="dropdown-item" role="presentation" href="#">Dao cạo</a><a class="dropdown-item"
                        role="presentation" href="#">Máy tỉa lông
                        mũi</a>
                </div>
            </div>
        </div>
    </nav>
</div>
