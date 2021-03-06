<?php
    include "../DB/database.php";
    $query = "select * from product where status = 1";
    $sql = "select * from category";
    $sql1 = "select * from slide";
    $products = $connection->query($query);
    $query = "SELECT * FROM brand";
    $brands = $connection->query($query);
    $slide = $connection->query($sql1);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bán Laptop</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="./fonts/fontawesome-free-5.15.4-web/css/all.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  
   <!-- Header area -->
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> Tài Khoản Của Tôi</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Danh Sách Mong Muốn</a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i> Giỏ Hàng</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#"><i class="fa fa-user"></i> Đăng Nhập</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Đăng Ký</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <!-- site branding area -->
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="primary-header">
                    <div class="header-img-logo">
                        <div class="logo">
                            <h1><a href="./"><img src="./img/20ec5516886f959dbd7091edbc61f96b.jpg"></a></h1>
                        </div>
                    </div>
    
                    <div class="header-input">
                        <form action="" class="navbar-search">
                            <input type="text" class="navbar-search__input" placeholder="Tìm Kiếm">
                            <button class="navbar-search__button"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    
                    <div class="header-cart">
                        <div class="shopping-item">
                            <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <!-- mainmenu -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="shop.html">TẤT CẢ SẢN PHẨM</a></li>
                        <li><a href="single-product.html">DANH MỤC SẢN PHẨM</a></li>
                        <li><a href="cart.html">HÃNG SẢN XUẤT</a></li>
                        <li><a href="checkout.html">TIN TỨC</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="slider-first">
                <i class="fas fa-angle-right slider-next"></i>
                <ul class="slider-dots">
                    <li class="slider-dot-item active" data-index="0"></li>
                    <li class="slider-dot-item" data-index="1"></li>
                    <li class="slider-dot-item" data-index="2"></li>
                    <li class="slider-dot-item" data-index="3"></li>
                </ul>
                <div class="slider-wrapper">
                    <div class="slider-main">
                    <?php foreach ($slide as $item):?>
                        <div class="slider-item">
                            <img src="./slide/<?$item['img']?>" alt="Slide">
                            <!-- <div class="caption-group">
                                <h2 class="caption title">
                                    iPhone <span class="primary">6 <strong>Plus</strong></span>
                                </h2>
                                <h4 class="caption subtitle">Dual SIM</h4>
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                            </div> -->
                        </div>
                        <div class="slider-item">
                            <img src="./slide/<?$item['img']?>" alt="Slide">
                            <!-- <div class="caption-group">
                                <h2 class="caption title">
                                    iPhone <span class="primary">6 <strong>Plus</strong></span>
                                </h2>
                                <h4 class="caption subtitle">Dual SIM</h4>
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                            </div> -->
                        </div>
                        <div class="slider-item">
                            <img src="./slide/<?$item['img']?>" alt="Slide">
                            <!-- <div class="caption-group">
                                <h2 class="caption title">
                                    iPhone <span class="primary">6 <strong>Plus</strong></span>
                                </h2>
                                <h4 class="caption subtitle">Dual SIM</h4>
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                            </div> -->
                        </div>

                        <div class="slider-item">
                            <img src="./img/<?$item['img']?>" alt="Slide">
                            <!-- <div class="caption-group">
                                <h2 class="caption title">
                                    iPhone <span class="primary">6 <strong>Plus</strong></span>
                                </h2>
                                <h4 class="caption subtitle">Dual SIM</h4>
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                            </div> -->
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <i class="fas fa-angle-left slider-prev"></i>
            </div>

            <div class="sub-slider">
                <div class="sub-slider">
                    <img class="sub-slider-image" src="./img/laptop-gia-re-sinh-vien.png" alt="Slide">
                    <!-- <div class="caption-group">
                        <h2 class="caption title">
                            by one, get one <span class="primary">50% <strong>off</strong></span>
                        </h2>
                        <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div> -->
                </div>
                
                <div class="sub-slider">
                    <img class="sub-slider-image"  src="./img/a2ea05e21fecb9ca8202b9776016164748794459.png" alt="Slide">
                    <!-- <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Select Item</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div> -->
                </div>
            </div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <!-- promo area -->
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Hoàn Trả Trong 30 Ngày</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Giao Hàng Miễn Phí</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Bảo Mật Thanh Toán</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Nhiều Sản Phẩm Mới</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <!-- brands area -->
    <div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list ">
                        <?php foreach ($brands as $item):?>
                            <a href="http://localhost/laptopcu/search.php?search_key=<?php echo $item['name'] ?>">
                                <img src="./brand/<?=$item['img']?>" alt=" <?php echo $item['name'] ?>"></a>

                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <!-- main content products -->
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sản Phẩm Mới Nhất</h2>
                        <div class="product-content">
                            <div class="product-carousel">
                            <?php foreach($products as $item):?>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="./img/<?=$item['img']?>" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html"><?=$item['name']?></a></h2>
                                    
                                        <div class="product-carousel-price">
                                            <ins><?php $sellprice = $item['price'] * (100 - $item['discount']) / 100;
                                                echo number_format($sellprice) . " VNĐ" ?></ins>
                                            <del><?php if ($sellprice != $item['price']) echo number_format($item['price']) . " VNĐ"?></del>
                                        </div> 
                                    </div>
                                </div>
                                <?php endforeach;?>
                                <!-- <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    

                                    <div class="detail-products">
                                        <h2>LG Leon 2015</h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins> <del>$425.00</del>
                                        </div>  
                                    </div>                               
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Sony microsoft</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$200.00</ins> <del>$225.00</del>
                                        </div>  
                                    </div>                           
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="">iPhone 6</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$1200.00</ins> <del>$1355.00</del>
                                        </div>  
                                    </div>
                                
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins>
                                        </div>  
                                    </div>                            
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Laptop Gaming</h2>
                        <div class="product-content">
                            <div class="product-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Samsung Galaxy s5- 2015</a></h2>
                                    
                                        <div class="product-carousel-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div> 
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2>Nokia Lumia 1320</h2>
                                        <div class="product-carousel-price">
                                            <ins>$899.00</ins> <del>$999.00</del>
                                        </div> 
                                    </div>

                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    

                                    <div class="detail-products">
                                        <h2>LG Leon 2015</h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins> <del>$425.00</del>
                                        </div>  
                                    </div>                               
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Sony microsoft</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$200.00</ins> <del>$225.00</del>
                                        </div>  
                                    </div>                           
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="">iPhone 6</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$1200.00</ins> <del>$1355.00</del>
                                        </div>  
                                    </div>
                                
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins>
                                        </div>  
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Giá Rẻ</h2>
                        <div class="product-content">
                            <div class="product-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Samsung Galaxy s5- 2015</a></h2>
                                    
                                        <div class="product-carousel-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div> 
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2>Nokia Lumia 1320</h2>
                                        <div class="product-carousel-price">
                                            <ins>$899.00</ins> <del>$999.00</del>
                                        </div> 
                                    </div>

                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    

                                    <div class="detail-products">
                                        <h2>LG Leon 2015</h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins> <del>$425.00</del>
                                        </div>  
                                    </div>                               
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Sony microsoft</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$200.00</ins> <del>$225.00</del>
                                        </div>  
                                    </div>                           
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="">iPhone 6</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$1200.00</ins> <del>$1355.00</del>
                                        </div>  
                                    </div>
                                
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins>
                                        </div>  
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">LAPTOP CŨ</h2>
                        <div class="product-content">
                            <div class="product-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Samsung Galaxy s5- 2015</a></h2>
                                    
                                        <div class="product-carousel-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div> 
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2>Nokia Lumia 1320</h2>
                                        <div class="product-carousel-price">
                                            <ins>$899.00</ins> <del>$999.00</del>
                                        </div> 
                                    </div>

                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    

                                    <div class="detail-products">
                                        <h2>LG Leon 2015</h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins> <del>$425.00</del>
                                        </div>  
                                    </div>                               
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Sony microsoft</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$200.00</ins> <del>$225.00</del>
                                        </div>  
                                    </div>                           
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="">iPhone 6</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$1200.00</ins> <del>$1355.00</del>
                                        </div>  
                                    </div>
                                
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                       <img src="./img/LapMSI.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                    </div>
                                    
                                    <div class="detail-products">
                                        <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
    
                                        <div class="product-carousel-price">
                                            <ins>$400.00</ins>
                                        </div>  
                                    </div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div> 
    <!-- main content products -->
    
    <!-- product widget area -->
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <!-- Top seller -->
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Apple new mac book 2015</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- end TopSeller -->

                <!-- Recently Viewed -->
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Sony Smart Air Condtion</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>

                 <!-- End Recently Viewed -->
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Apple new i phone 6</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img src="img/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-contact">
                        <h4>Liên Hệ</h4>
                        <p>Email : shoplaptopuytin@gmail.com</p>
                        <p>Thắc mắc, liên hệ : 0865766032  </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-store">
                        <h4>Hệ Thống Cửa Hàng</h4>
                        <p>Cơ sở 1: 22 - 24 Minh Khai, Hai Bà Trưng, Hà Nội | 0886.325.522</p>
                        <p>Cơ sở 2: 234 Trích Sài, Tây Hồ, Hà Nội | 0988.636.802</p>
                        <p>Cơ sở 3: 341 Trường Trinh, Hai Bà Trưng, Hà Nội | 0988.636.802</p>
                        <p>Cơ sở 4: 422 Nguyễn Chí Thanh, Ba Đình, Hà Nội | 0988.636.802</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="footer-social">
                        <h2>Liên Hệ Với Chúng Tôi</h2>
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="./js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
    <script type="text/javascript" src="./js/slider.js"></script>
  </body>
</html>