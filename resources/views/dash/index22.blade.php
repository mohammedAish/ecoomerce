
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Smile | Responsive Bootstrap Ecommerce Template</title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.ico">

        <!-- Google Webfont -->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <!-- CSS -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/vendors/isotope/isotope.css">
        <link rel="stylesheet" href="js/vendors/slick/slick.css">
        <link rel="stylesheet" href="js/vendors/rs-plugin/css/settings.css">
        <link rel="stylesheet" href="js/vendors/select/jquery.selectBoxIt.css">
        <link rel="stylesheet" href="css/subscribe-better.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-lightness/jquery-ui.css">     
        <link rel="stylesheet" href="plugin/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="plugin/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->

    </head>
    <body>

        <!-- PRELOADER -->
        <div id="loader"></div>

        <div class="body">
            <!-- TOPBAR -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="tb_left pull-left">
                                    <p>Welcome to our online store !</p>
                                </div>
                                <div class="tb_center pull-left">
                                    <ul>
                                        <li><i class="fa fa-phone"></i> Hotline: <a href="#">(+800) 2307 2509 8988</a></li>
                                        <li><i class="fa fa-envelope-o"></i> <a href="#">online support@smile.com</a></li>
                                    </ul>
                                </div>
                                <div class="tb_right pull-right">
                                    <ul>
                                        <li>
                                            <div class="tbr-info">
                                                <span>Account :<i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="my-account.html">My Account</a>
                                                    <a href="#">My Wishlist</a>
                                                    <a href="#">Checkout</a>
                                                    <a href="login-page.html">Login</a>
                                                    <a href="{{url('logout')}}">Logout</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tbr-info">
                                                <span><img src="images/basic/flag1.png" alt=""/>&nbsp;English <i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="#"><img src="images/basic/flag1.png" alt=""/>English</a>
                                                    <a href="#"><img src="images/basic/flag2.png" alt=""/>French</a>
                                                    <a href="#"><img src="images/basic/flag3.png" alt=""/>German</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tbr-info">
                                                <span>US Dollar <i class="fa fa-caret-down"></i></span>
                                                <div class="tbr-inner">
                                                    <a href="#">&euro; Euro</a>
                                                    <a href="#">&pound; Pound</a>
                                                    <a href="#">&yen; Yen</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  <header>
                <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="row">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Logo -->
                                <a class="navbar-brand" href="./index.html"><img src="images/basic/logo.png" class="img-responsive" alt=""/></a>
                            </div>
                            <!-- Cart & Search -->
                            <div class="header-xtra pull-right">
                                <div class="topcart">
                                    <a href="{{url('showCart')}}"><i class="fa fa-shopping-cart"></i></a>({{ session()->has('cart') ? session()->get('cart')->totalQty : '0' }})</span>
                                   
                                </div>
                                <div class="topsearch">
                                    <span>
                                        <i class="fa fa-search"></i>
                                    </span>
                                    <form class="searchtop">
                                        <input type="text" placeholder="Search entire store here.">
                                    </form>
                                </div>
                            </div>
                            <!-- Navmenu -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="./index.html" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-expanded="false">Home</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="./index.html">Home - Style 1</a>
                                            <li><a href="./index2.html">Home - Style 2</a>
                                            <li><a href="./index3.html">Home - Style 3</a>
                                            <li><a href="./index4.html">Home - Style 4</a>
                                            <li><a href="./index5.html">Home - Style 5</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown mmenu">
                                        <a href="./categories-grid.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Women</a>
                                        <ul class="mega-menu dropdown-menu" role="menu">
                                            <li>
                                                <div>
                                                    <h5>Sample Title</h5>
                                                    <a href="#">Nam ipsum est</a>
                                                    <a href="#">Volutpat</a>
                                                    <a href="#">In efficitur in</a>
                                                    <a href="#">Accumsan eget <span class="mm-badge-sale">Sale</span></a>
                                                    <a href="#">Odio</a>
                                                    <a href="#">Curabitur</a>
                                                    <a href="#">Phasellus <span class="mm-badge-new">New</span></a>
                                                    <a href="#">Dapibus elit</a>
                                                    <a href="#">Nurna ullamcorper</a>
                                                    <a href="#">Lobortis</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h5>Sample Title</h5>
                                                    <a href="#">Nam ipsum est</a>
                                                    <a href="#">Volutpat</a>
                                                    <a href="#">In efficitur in</a>
                                                    <a href="#">Accumsan eget</a>
                                                    <a href="#">Odio</a>
                                                    <a href="#">Curabitur</a>
                                                    <a href="#">Phasellus</a>
                                                    <a href="#">Dapibus elit</a>
                                                    <a href="#">Nurna ullamcorper</a>
                                                    <a href="#">Lobortis</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h5>Sample Title</h5>
                                                    <a href="#">Nam ipsum est</a>
                                                    <a href="#">Volutpat</a>
                                                    <a href="#">In efficitur in</a>
                                                    <a href="#">Accumsan eget</a>
                                                    <a href="#">Odio</a>
                                                    <a href="#">Curabitur</a>
                                                    <a href="#">Phasellus</a>
                                                    <a href="#">Dapibus elit</a>
                                                    <a href="#">Nurna ullamcorper</a>
                                                    <a href="#">Lobortis</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="./categories-grid.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Shop</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="./categories-grid.html">Shop - Grid 1</a>
                                            <li><a href="./categories-list.html">Shop - Grid 2</a>
                                            <li><a href="./single-product.html">Shop - Single</a></li>
                                            <li><a href="./shoppingcart.html">Shopping Cart</a></li>
                                            <li><a href="./checkout.html">Checkout 1</a></li>
                                            <li><a href="./checkout-2.html">Checkout 2</a></li>
                                            <li><a href="./checkout-2-leftside.html">Checkout Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Blog</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="./blog.html">Blog Posts</a>
                                            <li><a href="./blog-single.html">Blog Single</a>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Get inspired</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="#">Nam ipsum est</a>
                                            <li><a href="#">Volutpat</a>
                                            <li><a href="#">In efficitur in</a></li>
                                            <li><a href="#">Accumsan eget</a></li>
                                            <li><a href="#">Odio</a></li>
                                            <li><a href="#">Curabitur</a></li>
                                            <li><a href="#">Phasellus</a></li>
                                            <li><a href="#">Dapibus elit</a></li>
                                            <li><a href="#">Nurna ullamcorper</a></li>
                                            <li><a href="#">Lobortis</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Technology</a>
                                        <ul class="dropdown-menu submenu" role="menu">
                                            <li><a href="#">Nam ipsum est</a>
                                            <li><a href="#">Volutpat</a>
                                            <li><a href="#">In efficitur in</a></li>
                                            <li><a href="#">Accumsan eget</a></li>
                                            <li><a href="#">Odio</a></li>
                                            <li><a href="#">Curabitur</a></li>
                                            <li><a href="#">Phasellus</a></li>
                                            <li><a href="#">Dapibus elit</a></li>
                                            <li><a href="#">Nurna ullamcorper</a></li>
                                            <li><a href="#">Lobortis</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu submenu" role="menu">                                         
                                            <li><a href="contact-1.html">Contact Style 1</a></li>
                                            <li><a href="contact-2.html">Contact Style 2</a></li>
                                            <li><a href="account-information.html"> Account Information </a></li>
                                            <li><a href="my-account.html">My Account</a></li>                                        
                                            <li><a href="cng-pw.html">Change Password</a></li>
                                            <li><a href="address-book.html">Address Books</a></li>
                                            <li><a href="order-history.html">Order History</a></li>
                                            <li><a href="review-rating.html">Reviews and Ratings</a></li>
                                            <li><a href="return.html">Returns Requests</a></li>
                                            <li><a href="newsletter.html">Newsletter</a></li>
                                            <li><a href="myaccount-leftsidebar.html">Left Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <!-- SLIDER -->
      

            <!-- BLOCKS WRAP -->
          

            <div class="clearfix"></div>

            <!-- FEATURED PRODUCTS -->
            <div class="featured-products">
                <div class="container">
                    <div class="row">
                        <h5 class="heading"><span>Featured Products</span></h5>
                        <ul class="filter" data-option-key="filter">
                            <li><a class="selected" href="#filter" data-option-value="*">All</a></li>
                            <li><a href="#" data-option-value=".accessories">Accesories</a></li>
                            <li><a href="#" data-option-value=".clothing">Clothing</a></li>
                            <li><a href="#" data-option-value=".handbags">Handbags</a></li>
                            <li><a href="#" data-option-value=".shoes">Shoes</a></li>
                        </ul>
                        <div id="isotope" class="isotope">
                         @foreach($data as $row)
                            <div class="isotope-item clothing">
                                <div class="product-item">
                                    <div class="item-thumb">
                                        <div class="badge offer">-50%</div>
                                        <img src="{{ URL::to('/') }}/images/{{ $row->mainImage }}" class="img-thumbnail" alt="...">
                                        <div class="overlay-rmore fa fa-search quickview" data-toggle="modal" data-target="#myModal" onclick="show('{{$row->id}}')"></div>
                                        <div class="product-overlay">
                                            <a href="#" class="addcart fa fa-shopping-cart"></a>
                                            <a href="#" class="compare fa fa-signal"></a>
                                           
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h4 class="product-title"><a href="./single-product.html">{{ $row->name }}</a></h4>
                                        <span class="product-price"><small class="cutprice">${{ $row->price }}</small> ${{ $row->priceOffer }} <em>- Pre order</em></span>
                                        <div class="item-colors">
                                            <a href="#" class="black"></a>
                                            <a href="#" class="brown"></a>
                                            <a href="#" class="white"></a>
                                        </div>
                                    </div>
                                </div>
                            </div> @endforeach
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- POLICY -->
          

            <!-- BLOG -->
           

            <!-- NEW ARRIVALS -->
     


            <!-- TESTIMONIAL -->
            

            <!-- LATEST PRODUCTS -->
           
            <div class="space10 clearfix"></div>

            <!-- CLIENTS -->
            
            <!-- FOOTER WIDGETS -->
            

            <!-- FOOTER -->
          

            <!-- FOOTER COPYRIGHT -->
         

        </div>

        <!-- Newsletter -->
        
        <!-- Modal -->
       

         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            
        </div>

        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>


<script type="text/javascript">
    function show(id){
         $.ajax({
   url :"{{URL::to('showDetails')}}"+"/"+id,
   dataType:"json",
   success:function(data)
   {
    console.log(data);
    $('#myModal').html(' ');
    $('#myModal').html(data.page);
   }
  });
 
    }
</script>

        <!-- Javascript -->
        <script src="js/jquery.js"></script>

        <!-- ADDTHIS -->
        <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
        <script type="text/javascript">
                                            // Call this function once the rest of the document is loaded
                                            function loadAddThis() {
                                                addthis.init()
                                            }
        </script>

        <!-- ADDTHIS -->
        <script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-557a95e76b3e51d9" async="async"></script>
        <script type="text/javascript">
                                            // Call this function once the rest of the document is loaded
                                            function loadAddThis() {
                                                addthis.init()
                                            }
        </script>

        <script src="js/bootstrap.min.js"></script>        
        <script src="plugin/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/bs-navbar.js"></script>
        <script src="js/vendors/isotope/isotope.pkgd.js"></script>
        <script src="js/vendors/slick/slick.min.js"></script>
        <script src="js/vendors/tweets/tweecool.min.js"></script>
        <script src="js/vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.subscribe-better.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="js/vendors/select/jquery.selectBoxIt.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>