<!doctype html>
<html lang="en">

<head>
    <title>TrungOishii - Eat your way</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/cart.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700&amp;subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/owl.theme.default.min.css">
</head>

<body>
    <?php
    $cart_size = 0;
    if (isset($_SESSION['cart'])) {
        $cart_size = array_sum($_SESSION['cart']);
    }
    // foreach ($_SESSION['cart'] as $dish_id => $quantity) {
    //     unset($_SESSION['cart'][$dish_id]);
    // }
    // unset($_SESSION['cart']['images']);
    $data['cart_size'] = $cart_size; ?>
    <header>
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <?php foreach ($header_data as $key => $value) {
                        if ($key == "social_network") {
                    ?>
                            <div class="col-sm-2 social">
                                <ul style='display:flex; list-style:none;'>
                                    <li><a href="<?php echo $value['facebook'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo $value['twitter'] ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo $value['tumblr'] ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                                    <li><a href="<?php echo $value['instagram'] ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div> <?php continue;
                                } ?>
                        <!-- end social --><?php if ($key == "hotline") { ?>
                            <div class="col-sm-4 phone">
                                <p>Call for reservation: <?php echo $value ?></p>
                            </div><?php continue;
                                            } ?>
                        <!-- end left-header -->
                        <?php if ($key == "business_hours") { ?>
                            <div class="col-sm-6 col-12 opening-hours ml-auto">
                                <p>
                                    <a href="<?php echo base_url() ?>Cart"><i style="color: #dddddd" class="fa fa-shopping-cart new" aria-hidden="true"> (<?php echo $cart_size ?>)</i></a>
                                </p>
                                <p>Opening Hours : <?php echo $value['open_time'] ?> - <?php echo $value['close_time'] ?></p>
                            </div>
                        <?php } ?>
                </div>
            <?php } ?>
            </div>
        </div>
        <!-- end header-top -->
        <!-- Navigation-hidden-mobile -->
        <section id="hidden-nav">
            <div class="hidden-nav-inner">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><img src='<?php echo base_url() ?>images/logo.png' alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.html">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="reservation.html" class="reservation">Reservation</a>
                    </li>
                </ul>
            </div>
        </section>
        <div class="overlay-all"></div>
        <!-- Navigation -->
        <nav id="Nav" class="navbar navbar-expand-sm navbar-light">
            <div class="container">
                <a class="navbar-brand logo" href="index.html"><img src="<?php echo base_url() ?>images/logo1.png" alt="TrungOishii"></a>
                <button class="btn btn-secondary open-button"><i class="fa fa-bars" aria-hidden="true"></i></button>
                <div class="collapse navbar-collapse" id="Navigation">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($subview == "client/home") echo "active"; ?>" href="<?php echo base_url() ?>Home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($subview == "client/about") echo "active"; ?>" href="<?php echo base_url() ?>About">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($subview == "client/menu") echo "active"; ?>" href="<?php echo base_url() ?>Menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($subview == "client/gallery") echo "active"; ?>" href="<?php echo base_url() ?>Gallery">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($subview == "client/blog") echo "active"; ?>" href="<?php echo base_url() ?>Blog/page/1">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($subview == "client/contact") echo "active"; ?>" href="<?php echo base_url() ?>Contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url() ?>Reservation" class="reservation">Reservation</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <?php $this->load->view($subview); ?>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-12 _1">
                    <a href="#" class="logo"><img src="<?php echo base_url() ?>images/logo1.png" alt=""></a>
                    <p class='_1'>Marsh mallow muffin soufflé jelly-o tart cake Marshmallow macaroon jelly jubes dont tiramisu croissant cake.</p>
                    <ul class="contact-info">
                        <li><span><i class="fa fa-phone" aria-hidden="true"></i></span>Phone: (01) 800 433 633</li>
                        <li><span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>Email: info@Example.com</li>
                    </ul>
                </div>
                <div class="col-sm-2 col-12 _2">
                    <div class="main-title">Useful Link</div>
                    <ul class="list-link">
                        <li><a href="#">About Company</a></li>
                        <li><a href="#">Reservation</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Our Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 col-12 _3">
                    <div class="main-title">Lastest Blog Post</div>
                    <div class="posts">
                        <div class="_1-post">
                            <div class="image-box">
                                <img src="<?php echo base_url() ?>images/dish-1-86x86.jpg" alt="">
                                <div class="overlay">

                                </div>
                            </div>
                            <div class="content">
                                <a href="#" class="title-blog">Chicken Caesar</a>
                                <div class="time">20th January 2017</div>
                            </div>
                        </div>
                        <!-- end 1-post -->
                        <div class="_1-post">
                            <div class="image-box">
                                <img src="<?php echo base_url() ?>images/dish-2-86x86.jpg" alt="">
                                <div class="overlay">

                                </div>
                            </div>
                            <div class="content">
                                <a href="#" class="title-blog">Chicken Caesar</a>
                                <div class="time">20th January 2017</div>
                            </div>
                        </div>
                        <!-- end 1-post -->
                        <div class="_1-post">
                            <div class="image-box">
                                <img src="<?php echo base_url() ?>images/dish-3-86x86.jpg" alt="">
                                <div class="overlay">

                                </div>
                            </div>
                            <div class="content">
                                <a href="#" class="title-blog">Chicken Caesar</a>
                                <div class="time">20th January 2017</div>
                            </div>
                        </div>
                        <!-- end 1-post -->
                    </div>
                </div>
                <div class="col-sm-3 col-12 _4">
                    <div class="main-title">Opening Hours</div>
                    <ul class="time">
                        <li><span class="days">Mon-Fri</span><span class="hours">9:00 am - 23:00 pm</span></li>
                        <li><span class="days">Saturday</span><span class="hours">10:00 am - 22:00 pm</span></li>
                        <li><span class="days">Sunday</span><span class="hours">10:00 am - 21:00 pm</span></li>
                        <li>
                            <p>Note: Arctica Restaurant is closed on holidays.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="col-sm-12 col-12 copyright mx-auto text-center">
        Copyrights © 2017 All Rights Reserved.
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ea6980735bcbb0c9ab4fd2e/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="<?php echo base_url() ?>js/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.js"></script>
    <script src="<?php echo base_url() ?>js/wow.min.js"></script>
    <script src="<?php echo base_url() ?>js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>