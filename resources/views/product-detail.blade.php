<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="frontend/images/favicon.png" type="image/x-icon">

    <title>
        Giftos - {{ $product->product_name }}
    </title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="frontend/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="frontend/css/responsive.css" rel="stylesheet" />

    <!-- Product Detail Inline Styles - Matching index.blade.php theme -->
    <style>
        /* Navbar Styles - Ensuring proper display */
        .hero_area {
            padding: 0 45px;
        }

        .hero_area.sub_pages {
            height: auto;
        }

        #navbarSupportedContent {
            width: 100%;
            background-color: skyblue;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            padding: 10px 0;
            border-radius: 15px 15px 0 0;
        }

        #navbarSupportedContent.innerpage_navbar {
            background-color: white;
            border-radius: 10px;
            -webkit-box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.25);
            box-shadow: 0 0 3px 0 rgba(0, 0, 0, 0.25);
        }

        #navbarSupportedContent .navbar-nav .nav-link {
            padding: 5px 25px;
            color: #514f4f;
            text-align: center;
            text-transform: uppercase;
            border-radius: 5px;
        }

        #navbarSupportedContent .nav-item.active .nav-link {
            background-color: #ffffff;
        }

        #navbarSupportedContent .nav-item .nav-link:hover {
            background-color: #f4f5f6;
        }

        .navbar-brand {
            font-size: 2rem;
            font-weight: bold;
            color: #101010;
            text-decoration: none;
        }

        .navbar-brand:hover {
            color: #101010;
        }

        .user_option {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 15px;
        }

        .user_option a {
            color: #101010;
            text-decoration: none;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 5px;
        }

        .user_option a:hover {
            color: #db4566;
        }

        .user_option a i {
            font-size: 1.2rem;
        }

        .user_option a span {
            font-size: 14px;
            text-transform: uppercase;
        }

        .nav_search-btn {
            background: none;
            border: none;
            color: #101010;
            font-size: 1.2rem;
            padding: 5px 10px;
        }

        .nav_search-btn:hover {
            color: #db4566;
        }

        /* Product Detail Page Styles - Matching index.blade.php design */

        .product-detail-section {
            padding-top: 90px;
            padding-bottom: 90px;
        }

        .product-detail-section .heading_container {
            margin-bottom: 20px;
        }

        .product-detail-section .heading_container h2 {
            text-transform: uppercase;
            font-weight: bold;
            color: #101010;
        }

        /* Product Box - matching shop_section .box */
        .product-detail-section .box {
            background-color: #eeeeee;
            position: relative;
            padding: 10px;
            margin-top: 25px;
            border-radius: 5px;
        }

        .product-detail-section .box .img-box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 15px 30px;
            background-color: #ffffff;
            border-radius: 5px;
        }

        .product-detail-section .box .img-box img {
            max-width: 100%;
            max-height: 400px;
            width: auto;
        }

        .product-detail-section .box .detail-box {
            padding: 20px;
            background-color: #ffffff;
            margin-top: 10px;
            border-radius: 5px;
        }

        .product-detail-section .box .detail-box h6 {
            color: #000000;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-detail-section .box .detail-box h6 span {
            color: #db4f66;
            font-size: 1.5rem;
        }

        .product-detail-section .box .detail-box p {
            color: #101010;
            margin-bottom: 15px;
        }

        .product-detail-section .box .detail-box h4 {
            color: #101010;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        /* Button Box - matching shop_section .btn-box */
        .product-detail-section .btn-box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 45px;
            gap: 15px;
            flex-wrap: wrap;
        }

        .product-detail-section .btn-box a,
        .product-detail-section .btn-box button {
            display: inline-block;
            padding: 10px 40px;
            background-color: #f16179;
            color: #ffffff;
            border: 1px solid #f16179;
            border-radius: 5px;
            -webkit-transition: all .3s;
            transition: all .3s;
            text-decoration: none;
            cursor: pointer;
            font-family: "poppins", sans-serif;
            font-size: 14px;
            text-transform: uppercase;
        }

        .product-detail-section .btn-box a:hover,
        .product-detail-section .btn-box button:hover {
            background-color: transparent;
            color: #f16179;
        }

        /* Secondary button style */
        .product-detail-section .btn-box .btn2 {
            background-color: #db4566;
            border-color: #db4566;
        }

        .product-detail-section .btn-box .btn2:hover {
            background-color: transparent;
            color: #db4566;
        }

        /* Back to shop button */
        .product-detail-section .btn-box .btn-secondary {
            background-color: #514f4f;
            border-color: #514f4f;
        }

        .product-detail-section .btn-box .btn-secondary:hover {
            background-color: transparent;
            color: #514f4f;
        }

        /* Quantity selector */
        .quantity-selector {
            margin-bottom: 20px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            gap: 10px;
        }

        .quantity-selector label {
            color: #101010;
            font-weight: bold;
            margin: 0;
        }

        .quantity-selector select {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 14px;
            color: #101010;
            background-color: #ffffff;
        }

        .quantity-selector select:focus {
            border-color: #db4566;
            outline: none;
        }

        /* Product description styling */
        .product-description {
            background-color: #f9f8f7;
            padding: 25px;
            border-radius: 5px;
            margin: 25px 0;
        }

        .product-description h4 {
            color: #101010;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .product-description p {
            color: #101010;
            line-height: 1.6;
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-detail-section .btn-box {
                flex-direction: column;
                align-items: center;
            }

            .product-detail-section .btn-box a,
            .product-detail-section .btn-box button {
                width: 200px;
                margin-bottom: 10px;
            }

            .product-detail-section .box .img-box img {
                max-height: 300px;
            }
        }

        @media (max-width: 576px) {
            .product-detail-section {
                padding-top: 45px;
                padding-bottom: 45px;
            }

            .product-detail-section .box .img-box {
                padding: 10px 15px;
            }

            .product-detail-section .box .detail-box {
                padding: 15px;
            }
        }

    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <span>
                        Giftos
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">
                                Shop
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="why.html">
                                Why Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="testimonial.html">
                                Testimonial
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        @if(Auth::check())
                        <a href="{{route('dashboard')}}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                Dashboard
                            </span>
                        </a>
                        @else
                        <a href="{{route('login')}}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                Login
                            </span>
                        </a>
                        <a href="{{route('register')}}">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span>
                                signup
                            </span>
                        </a>
                        @endif
                        <a href="">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        </a>
                        <form class="form-inline ">
                            <button class="btn nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <!-- end header section -->
    </div>
    <!-- end hero area -->

    <!-- product detail section -->
    <section class="product-detail-section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Product Details
                </h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('product_images/' . $product->product_image) }}" alt="{{ $product->product_name }}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="detail-box">
                            <h6>
                                {{ $product->product_name }}
                            </h6>
                            <h6>
                                Price
                                <span>
                                    ${{ $product->product_price }}
                                </span>
                            </h6>
                            <p><strong>Category:</strong> {{ $product->product_category }}</p>
                            <p><strong>Available:</strong> {{ $product->product_quantity }} items</p>

                            @if($product->product_description)
                            <div class="product-description">
                                <h4>Description</h4>
                                <p>{{ $product->product_description }}</p>
                            </div>
                            @endif

                            <div class="quantity-selector">
                                <label for="quantity">Quantity:</label>
                                <select id="quantity" class="form-control">
                                    @for($i = 1; $i <= min(10, $product->product_quantity); $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
                @endif
                <a href={{route('add_to_cart', $product->id)}} class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i> Add to Cart
                </a>
                <button class="btn btn2">
                    Buy Now
                </button>
                <a href="{{ route('index') }}" class="btn btn-secondary">
                    <i class="fa fa-arrow-left"></i> Back to Shop
                </a>
            </div>
        </div>
    </section>
    <!-- end product detail section -->

    <!-- info section -->
    <section class="info_section layout_padding2-top">
        <div class="social_container">
            <div class="social_box">
                <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="">
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                </a>
            </div>
        </div>

        <!-- footer section -->

    </section>

    <!-- end info section -->

    <script src="frontend/js/jquery-3.4.1.min.js"></script>
    <script src="frontend/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="frontend/js/custom.js"></script>

</body>

</html>
