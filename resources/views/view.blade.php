<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('asserts/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asserts/css/view.css') }}">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <title>Home page</title>
</head>

<body>
    <div class="container" style="max-width: 100%;">
        <div class="row justify-content-between nav">
            <div class="col-2">
                <img src="https://vn-test-11.slatic.net/p/mdc/03b895db9c7b85ae98973b0941d66696.jpg" alt="" width="100px" height="100px">
            </div>
            <div class="col-7 d-flex justify-content-center nav nav-underline navbar">
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Winter</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                </ul>
            </div>
            <div class="col-3 navbar nav">
                <div class="p-1 bg-light rounded rounded-pill shadow-sm" style="max-width:70%">
                    <div class="input-group">
                        <input type="search" placeholder="Nhập từ bạn cần tìm?" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <!-- <img src="{{asset('asserts/photos/Graphicloads-100-Flat-Cart-add.256.png')}}" alt="" width="50px" height="50px"> -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-5"></div>
        <div class="row">
            <div class="col-6">
                <div class="pt-5"></div>
                <h5>Trendy Fashion collections</h5>
                <div class="d-flex align-items-center">
                    <h1>Fashion create good lifestyle</h1>
                    <div class="">
                        <img src="{{asset('asserts/photos/Microsoft-Fluentui-Emoji-3d-Party-Popper-3d.512.png')}}" alt="" width="50px" height="60px">
                    </div>
                </div>
                <p>A world-class trandy fashion collections. An Amerrican designer well known for her sun-inspired designs Meens and women optial styles</p>
                <button class='btn1'> Shop Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
            </div>
            <div class="col-1"></div>
            <div class="col-5">
                <img src="{{asset('asserts/photos/Mask group.png')}}" alt="ảnh" width="500px" height="600px">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="p-5"></div>
        <div class="row background">
            <div class="d-flex nav -mb-2 justify-content-center">
                <h2>Trending Fashion</h2>
                <img src="{{asset('asserts/photos/fire.png')}}" alt="ảnh" width="50px" height="50px" style="margin-top: 25px;">
            </div>
            <div class="col-1"></div>
            <div class="col-10">
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="width:18rem;">
                                <img src="{{asset('asserts/photos/Group 47.png')}}" alt="" height="300px">
                                <div class="card-body pl-2">
                                    <h5>women fashion</h5>
                                    <h4 class="card-text">woman black dress</h4>
                                    <div class='d-flex'>
                                        <div class="d-flex">
                                            <p style="color:#267144;font-weight:bold;margin-right:10px">$250</p>
                                            <p class="p">$350</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width:18rem;">
                                <img src="{{asset('asserts/photos/Group 49.png')}}" alt="" height="300px">
                                <div class="card-body pl-2">
                                    <h5>women fashion</h5>
                                    <h4 class="card-text">woman black dress</h4>
                                    <div class='d-flex'>
                                        <div class="d-flex">
                                            <p style="color:#267144;font-weight:bold;margin-right:10px">$250</p>
                                            <p class="p">$350</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="width:18rem;">
                                <img src="{{asset('asserts/photos/Group 48.png')}}" alt="" height="300px">
                                <div class="card-body pl-2">
                                    <h5>women fashion</h5>
                                    <h4 class="card-text">woman black dress</h4>
                                    <div class='d-flex'>
                                        <div class="d-flex">
                                            <p style="color:#267144;font-weight:bold;margin-right:10px">$250</p>
                                            <p class="p">$350</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="p-5"></div>
        </div>
    </div>
    <div class="container">
        <div class="p-5"></div>
        <div class="row">
            <div class="col-6 ">
                <div class="row background1 justify-content-evenly">
                    <div class="col-1"></div>
                    <div class="col-5 content">
                        <p>Winter Collections</p>
                        <h5>UP TO 50% OFF</h5>
                        <button class="btn btn-primary">Shop now</button>
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5">
                        <img src="{{asset('asserts/photos/hinh.png')}}" alt="" width="250px">
                    </div>
                </div>
                <div class="mt-4"></div>
                <div class="row">
                    <div class="col-6 background1 justify-content-center">
                        <img src="{{asset('asserts/photos/3794066-removebg-preview.png')}}" alt="" width="200px">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-5 background1 justify-content-center">
                        <img src="{{asset('asserts/photos/3aee1d97-6dce-4306-9fb3-bb374de7fa6a-removebg-preview.png')}}" alt="" width="200px">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row background2">
                    <div class="col-1"></div>
                    <div class="col-5 content">
                        <p>Winter Collections</p>
                        <h5>UP TO 50% OFF</h5>
                        <button class="btn btn-primary">Shop now</button>
                    </div>
                    <div class="col-5">
                        <img src="{{asset('asserts/photos/girl-holds-fashion-shopping-bag-holds-smart-card-yellow-background-removebg-preview.png')}}" alt="" width="360px" style="align-self: flex-start;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container background3">
        <div class="p-5"></div>
        <div class="row">
            <h2>Our Product</h2>
            <div class="d-flex justify-content-center">
                <button class="button-30" role="button" style="margin-left:20px">Featured</button>
                <button class="button-30" role="button">Best Sellers</button>
                <button class="button-30" role="button">New Arrivals</button>
            </div>
            <div class="p-2"></div>
            <div class="col-3">
                <div class="card" style="width:18rem;">
                    <img src="{{asset('asserts/photos/Group 48.png')}}" alt="" height="300px">
                    <div class="card-body pl-2">
                        <h5>women fashion</h5>
                        <h4 class="card-text">woman black dress</h4>
                        <div class='d-flex'>
                            <div class="d-flex">
                                <p style="color:#267144;font-weight:bold;margin-right:10px">$250</p>
                                <p class="p">$350</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width:18rem;">
                    <img src="{{asset('asserts/photos/Group 48.png')}}" alt="" height="300px">
                    <div class="card-body pl-2">
                        <h5>women fashion</h5>
                        <h4 class="card-text">woman black dress</h4>
                        <div class='d-flex'>
                            <div class="d-flex">
                                <p style="color:#267144;font-weight:bold;margin-right:10px">$250</p>
                                <p class="p">$350</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width:18rem;">
                    <img src="{{asset('asserts/photos/Group 48.png')}}" alt="" height="300px">
                    <div class="card-body pl-2">
                        <h5>women fashion</h5>
                        <h4 class="card-text">woman black dress</h4>
                        <div class='d-flex'>
                            <div class="d-flex">
                                <p style="color:#267144;font-weight:bold;margin-right:10px">$250</p>
                                <p class="p">$350</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" style="width:18rem;">
                    <img src="{{asset('asserts/photos/Group 48.png')}}" alt="" height="300px">
                    <div class="card-body pl-2">
                        <h5>women fashion</h5>
                        <h4 class="card-text">woman black dress</h4>
                        <div class='d-flex'>
                            <div class="d-flex">
                                <p style="color:#267144;font-weight:bold;margin-right:10px">$250</p>
                                <p class="p" style="margin-right: 10px;">$350</p>
                                <!-- <img src="{{asset('asserts/photos/add-to-cart.png')}}" alt="" width="50px" height="50px" style="margin-left: auto;"> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5"></div>
    <div class="container background8">
        <div class="p-3"></div>
        <div class="row justify-content-center">
            <div class="col-2 text-center">
                <img src="{{asset('asserts/photos/delivery-car.png')}}" alt="" width="100px">
                <h6>Free Shipping</h6>
                <p>Orders over $100</p>
            </div>
            <div class="col-1"></div>
            <div class="col-1 text-center">
                <img src="{{asset('asserts/photos/save-money.png')}}" alt="" width="100px">
                <h6>Free Returns</h6>
                <p>7 days free</p>
            </div>
            <div class="col-1"></div>
            <div class="col-2 text-center">
                <img src="{{asset('asserts/photos/headphone.png')}}" alt="" width="100px">
                <h6>Supports 24/7</h6>
                <p>7 days free</p>
            </div>
            <div class="col-1"></div>
            <div class="col-2 text-center">
                <img src="{{asset('asserts/photos/credit-card.png')}}" alt="" width="100px">
                <h6>Quick Payment</h6>
                <p>Orders over $100</p>
            </div>
        </div>
    </div>
    <div class="p-5"></div>
    <div class="container-fluid background5">
        <div class="row">
            <div class="col-5"></div>
            <div class="col-5 ">
                <h2>What Our Customer Says</h2>
                <div class="backgroundcontent p-3">
                    <div style="display: flex; align-items: center;">
                        <img src="{{asset('asserts/photos/Group 48.png')}}" alt="" width="50px" style="margin-right: 10px;">
                        <div>
                            <h6 style="margin-bottom: 0;">Urimila Jeli</h6>
                            <p style="margin-bottom: 0;">UI/UX Designer</p>
                        </div>
                    </div>

                    <div class="p-2"></div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed nesciunt ab sunt. Hic aliquid a asperiores tenetur et, debitis commodi ad esse in. Accusamus distinctio minus inventore atque nisi fuga.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3"></div>
    <div class="container">
        <div class="row">
            <div class="slider">
                <div class="slide-track">
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png" alt="">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/nfl-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/nfl-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/images/large/2x/starbucks-logo-black-and-white.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/general-electric-black-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/nfl-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/mercedes-benz-6-logo-png-transparent.png" alt="" width="100px">
                    </div>
                    <div class="slide img">
                        <img src="https://cdn.freebiesupply.com/logos/large/2x/hogwarts-logo-png-transparent.png" alt="" width="100px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3"></div>
    <div class="container background6">
        <h2 class="h2">Latest News & Blog</h2>
        <div class="p-2"></div>
        <div class="row">
            <div class="col-4">
                <div class="card1">
                    <img src="https://cdn.pixabay.com/photo/2017/09/01/21/53/sunglasses-2705642_1280.jpg" class="card-media" />
                    <div class="card-details">
                        <h2 class="card-head">Kangaroo Valley Safari</h2>
                        <p>Located two hours south of Sydney in the Southern Highlands of New South Wales, ...</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card1">
                    <img src="https://cdn.pixabay.com/photo/2017/06/20/22/14/man-2425121_640.jpg" class="card-media" />
                    <div class="card-details">
                        <h2 class="card-head">Kangaroo Valley Safari</h2>
                        <p>Located two hours south of Sydney in the Southern Highlands of New South Wales, ...</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card1">
                    <img src="https://cdn.pixabay.com/photo/2016/11/29/03/36/woman-1867093_640.jpg" class="card-media" />
                    <div class="card-details">
                        <h2 class="card-head">Kangaroo Valley Safari</h2>
                        <p>Located two hours south of Sydney in the Southern Highlands of New South Wales, ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid background7">
        <h2>Our Newsletter</h2>
        <p>Our discounts products are only avaliable for a limited time!</p>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form class="box">
                    <input type="email" placeholder="Enter email address"></input>
                    <input type="submit" value="subscribe"></input>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <div class="p-5"></div>
    <div class="container-fluid background10">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5">
                <img src="https://vn-test-11.slatic.net/p/mdc/03b895db9c7b85ae98973b0941d66696.jpg" alt="" width="100px" height="100px">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, esse laborum! Numquam repudiandae atque, beatae nemo ut magni perspiciatis suscipit animi, voluptatem, molestiae similique quia labore incidunt. Facere, ipsum vel!</p>
                <div class="d-flex pr-lg-2" style="gap: 10px;">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-2">
                <h6>Help</h6>
                <p>Privacy Policy</p>
                <p>Shipping & Delivery</p>
                <p>Refund Policy</p>
                <p>Track Your Order</p>
            </div>
            <div class="col-2">
                <h6>Store</h6>
                <p>Winter Collections</p>
                <p>Women Fashion</p>
                <p>Product</p>
                <p>Other</p>
            </div>
            <div class="col-2">
                <h6>Supports</h6>
                <p>Feedback</p>
                <p>Contact us</p>
                <p>News</p>
                <p>Terms conditions</p>
            </div>
        </div>
        <div class="p-3"></div>
        <hr>
        <div class="d-flex justify-content-end" style="gap: 10px;">
            <p>Private</p>
            <p>Security</p>
            <p>Terms</p>
        </div>

    </div>
    <script src="{{ asset('asserts/css/bootstrap.min.js') }}"></script>
</body>

</html>