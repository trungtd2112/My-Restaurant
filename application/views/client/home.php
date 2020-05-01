<main>
    <article>
        <!-- Slider -->
        <section id="slider" class='_1row'>
            <div id="slide" class="carousel slide carousel-fade" data-interval="false" data-ride="carousel">
                
                <ol class="carousel-indicators indicators">
                    <?php for ($i=0; $i < count($slide_data) ; $i++) { ?>
                        <li data-target="#slide" data-slide-to="<?php echo $i?>" class="<?php if($i == 0) echo 'active';?>"></li>
                    <?php }?>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php $active = 1; ?>
                    <?php foreach ($slide_data as $key => $value) {?>
                    <div class="carousel-item _1slide <?php if($active == 1) {echo "active"; $active = 0;}?>">
                        <img class="img-responsive" src="<?php echo $value['slide_image']?>" alt="">
                        <div class="overlay"></div>
                        <div class="container carousel-caption slide-caption ">
                            <div class="row">
                                <div class="col-sm-9 col-12 text-center mx-auto">
                                    <h2 class="title-caption wow fadeInLeft" data-wow-duration='2s'><?php echo $value['slide_title']?></h2>
                                    <p class="more wow fadeInRight" data-wow-duration='2s'><?php echo $value['slide_description']?></p>
                                    <a href="<?php echo $value['button_link']?>" class="read wow fadeInRight" data-wow-duration="2s">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- end 1slide -->
                </div>
                <a class="carousel-control-prev left" href="#slide" role="button" data-slide="prev">
                    <span><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                </a>
                <a class="carousel-control-next right" href="#slide" role="button" data-slide="next">
                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                </a>
            </div>
        </section>
        <!-- Introduce -->
        <section id="introduce" class='_1row'>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-12 wow fadeInLeft"><img src="images/dishes.png" alt=""></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-6 col-12 intro wow fadeInRight">
                        <h5>Great New Dishes</h5>
                        <h4>Discover Our Restaurant</h4>
                        <p>A cappuccino is an Italian coffee drink which is traditionally prepared with espresso, hot milk and steamed milk foam. Coffee makes up a very important part of the Italian gastronomic culture. Cream may be used instead of milk and is often topped with cinnamon.
                            <br><br>
                            It is typically smaller in volume than a caffe latte, with a thicker layer of micro foam.
                            in this context referring to the color of the beverage when milk</p>
                        <a href="" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section 1 -->
        <section id="block_1" class='_1row wow fadeInUp'>
            <div class="block_1-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12 mx-auto text-center title">
                            <h5>Healthy Fresh And Hot Dishes</h5>
                            <h4>Best offers from the house chef</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Special Dishes -->
        <section id="special" class='_1row wow fadeInUp'>
            <div class="title mx-auto text-center">
                <h5>Our Special Dishes.</h5>
                <h4>We Create Delicous Memory</h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-12 _1-dish">
                        <div class="thumbnail">
                            <img src="images/dish-1.jpg" alt="">
                            <span>New</span>
                        </div>
                        <div class="information">
                            <a href="">Trio Sausages</a>
                            <span class='price'>$100</span>
                        </div>
                        <p class="desc">Mussel with tomato sauce, wine</p>
                    </div>
                    <!-- end _1-dish -->
                    <div class="col-sm-4 col-12 _1-dish">
                        <div class="thumbnail">
                            <img src="images/dish-2.jpg" alt="">
                            <span>New</span>
                        </div>
                        <div class="information">
                            <a href="">Cabernet Sauvignon</a>
                            <span class='price'>$100</span>
                        </div>
                        <p class="desc">Mussel with tomato sauce, wine</p>
                    </div>
                    <!-- end _1-dish -->
                    <div class="col-sm-4 col-12 _1-dish">
                        <div class="thumbnail">
                            <img src="images/dish-3.jpg" alt="">
                            <span>New</span>
                        </div>
                        <div class="information">
                            <a href="">Delirium Tremens </a>
                            <span class='price'>$100</span>
                        </div>
                        <p class="desc">Mussel with tomato sauce, wine</p>
                    </div>
                    <!-- end _1-dish -->
                </div>
            </div>
        </section>
        <!-- Section 2 -->
        <section id="block_2" class="_1row wow fadeInUp">
            <div class="block_1-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12 mx-auto text-center title">
                            <h5>Our Delicious Menu Items</h5>
                            <h4>Fresh And Healthy Food Available</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tab -->
        <section id="menu-tab" class="_1row wow fadeInUp">
            <ul class="list-tab mx-auto text-center">
                <li><span class='active'>Break Fast</span></li>
                <li><span>Lunch</span></li>
                <li><span>Dinner</span></li>
            </ul>
            <div class="overlay-detail-info"></div>
            <div class="container">
                <ul>
                    <li>
                        <div class="_1tab show row">
                            <div class="col-sm-6 col-12">
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-10-86x86.jpg" alt=""></a>
                                        </div>
                                        <span class="new">New</span>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Gosh Egg-White Omelet</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                        <div class="detail-info ">
                                            <div class="img-thumbnail-dish">
                                                <img src='images/dish-1.jpg' alt="">
                                            </div>
                                            <div class="info-block">
                                                <p class="name">
                                                    Gosh Egg-White Omelet
                                                </p>
                                                <p class="describe">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore temporibus adipisci sint tenetur illum possimus officiis ullam soluta repudiandae blanditiis, illo a magnam alias omnis atque cupiditate dicta incidunt vero!
                                                </p>
                                                <p class="cost">Cost: $25.40</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-11-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Powered Turkey Meatballs</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                        <div class="detail-info">
                                            <div class="img-thumbnail-dish">
                                                <img src='images/dish-1.jpg' alt="">
                                            </div>
                                            <div class="info-block">
                                                <p class="name">
                                                    Powered Turkey Meatballs
                                                </p>
                                                <p class="describe">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore temporibus adipisci sint tenetur illum possimus officiis ullam soluta repudiandae blanditiis, illo a magnam alias omnis atque cupiditate dicta incidunt vero!
                                                </p>
                                                <p class="cost">Cost: $25.40</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-9-86x86.jpg" alt=""></a>
                                        </div>
                                        <span class="new">New</span>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Delirium Tremens</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-2-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Cabernet Sauvignon</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-1-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Roasted Red Pepper Hummus</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                            </div>
                            <!-- end left -->
                            <div class="col-sm-6 col-12">
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-10-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Gosh Egg-White Omelet</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-10.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Powered Turkey Meatballs</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-3.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Delirium Tremens</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-4.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Cabernet Sauvignon</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-9.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Roasted Red Pepper Hummus</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                            </div>
                            <!-- end right -->
                        </div>
                        <!-- end 1 tab-content -->
                    </li>
                    <li>
                        <div class="_1tab row">
                            <div class="col-sm-6 col-12">
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-10-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Gosh Egg-White Omelet</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-11-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Powered Turkey Meatballs</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-9-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Delirium Tremens</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-2-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Cabernet Sauvignon</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-1-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Roasted Red Pepper Hummus</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                            </div>
                            <!-- end left -->
                            <div class="col-sm-6 col-12">
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-10-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Gosh Egg-White Omelet</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-10.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Powered Turkey Meatballs</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-3.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Delirium Tremens</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-4.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Cabernet Sauvignon</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-9.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Roasted Red Pepper Hummus</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                            </div>
                            <!-- end right -->
                        </div>
                        <!-- end 1 tab-content -->
                    </li>
                    <li>
                        <div class="_1tab row">
                            <div class="col-sm-6 col-12">
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-10-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Gosh Egg-White Omelet</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-11-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Powered Turkey Meatballs</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-9-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Delirium Tremens</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-2-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Cabernet Sauvignon</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-1-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Roasted Red Pepper Hummus</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                            </div>
                            <!-- end left -->
                            <div class="col-sm-6 col-12">
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dish-10-86x86.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Gosh Egg-White Omelet</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-10.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Powered Turkey Meatballs</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-3.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Delirium Tremens</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-4.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Cabernet Sauvignon</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                                <div class="_1dish">
                                    <div class="_1dish-inner">
                                        <div class="image-box">
                                            <a href=""><img src="images/dining-item-9.jpg" alt=""></a>
                                        </div>
                                        <ul class='info'>
                                            <li class="clearfix">
                                                <span class="name"><a href="">Roasted Red Pepper Hummus</a></span>
                                                <span class="dotted">.........................</span>
                                                <span class="price">$25.40</span>
                                                <span class="desc">Mussel with tomato sauce, wine</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end _1dish -->
                            </div>
                            <!-- end right -->
                        </div>
                        <!-- end 1 tab-content -->
                    </li>
                </ul>
            </div>
        </section>
        <!-- Feedback -->
        <section id="feedback" class='_1row wow fadeInUp'>
            <div class="container">
                <div class="row">
                    <div class="fb-slide owl-carousel">
                        <div class="_1-fb-slide col-sm-8 col-12 mx-auto text-center">
                            <p class="quote-sign"><i class="fa fa-quote-right" aria-hidden="true"></i></p>
                            <p class="content">
                                “ We enjoy sharing the projects and posts we make just as much as we enjoy creating them.consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.”
                            </p>
                            <p class="people">
                                Stevan Smith
                            </p>
                        </div>
                        <!-- end 1 slide feedback -->
                        <div class="_1-fb-slide col-sm-8 col-12 mx-auto text-center">
                            <p class="quote-sign"><i class="fa fa-quote-right" aria-hidden="true"></i></p>
                            <p class="content">
                                “ We enjoy sharing the projects and posts we make just as much as we enjoy creating them.consectetur adipiscing elit, sed do eiusmod tempor incididunt Sit back & take a moment to browse through some of our recent completed work.”
                            </p>
                            <p class="people">
                                Stevan Smith
                            </p>
                        </div>
                        <!-- end 1 slide feedback -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Chefs -->
        <section id="chefs" class='_1row wow fadeInUp'>
            <div class="title mx-auto text-center">
                <h5>Our Delicious</h5>
                <h4>Meet Our Passionate Chefs</h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="slide-chef-avatar owl-carousel">
                        <div class="_1-chef item ">
                            <div class="_1-chef-inner">
                                <div class="image-box">
                                    <img src="images/chef-1.jpg" alt="">
                                    <div class="overlay">
                                        <ul>
                                            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="name-and-job text-center">
                                    <p class="name">Rick Grimes</p>
                                    <p class="job">Chef Cook</p>
                                </div>
                            </div>
                        </div>
                        <!-- end 1 chef avatar -->
                        <div class="_1-chef item">
                            <div class="_1-chef-inner">
                                <div class="image-box">
                                    <img src="images/chef-2.jpg" alt="">
                                    <div class="overlay">
                                        <ul>
                                            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="name-and-job text-center">
                                    <p class="name">Rick Grimes</p>
                                    <p class="job">Chef Cook</p>
                                </div>
                            </div>
                        </div>
                        <!-- end 1 chef avatar -->
                        <div class="_1-chef item">
                            <div class="_1-chef-inner">
                                <div class="image-box">
                                    <img src="images/chef-3.jpg" alt="">
                                    <div class="overlay">
                                        <ul>
                                            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="name-and-job text-center">
                                    <p class="name">Rick Grimes</p>
                                    <p class="job">Chef Cook</p>
                                </div>
                            </div>
                        </div>
                        <!-- end 1 chef avatar -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Reservation -->
        <section id="reservation" class='_1row wow fadeInUp'>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-12 title mx-auto text-center">
                        <h5>Relaxing Atmosphere</h5>
                        <h4>Book Your Table</h4>
                    </div>
                    <form action="<?php echo base_url()?>Home/booking" method="post">
                        <p class="col-sm-4 col-12 valid-form" id="field-1">
                            <input type="text" name="customer_name" placeholder="Your Name *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-2">
                            <input type="email" name="customer_email" placeholder="Your Email *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-3">
                            <input type="number" name="customer_phone" placeholder="Your Number *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-4">
                            <input type="date" name="reservation_date" placeholder="Date *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-5">
                            <input type="time" name="reservation_time" placeholder="Time *" required>
                        </p>
                        <p class="col-sm-4 col-12 valid-form" id="field-6">
                            <input type="number" name="number_customer" placeholder="No. of Persons *" required>
                        </p>
                        <p class="col-sm-2 col-12 mx-auto">
                            <button id='send' class="mx-auto text-center btn btn-success book" type='submit'>Book Now</button>
                        </p>
                    </form>
                </div>
            </div>
        </section>
        <!-- Meeting -->
        <section id="meeting" class='_1row wow fadeInUp'>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-12 content wow fadeInLeft">
                        <div class="title">
                            <h5>Gorgeous Halls</h5>
                            <h4>Find Perfect Place For Any Meeting</h4>
                        </div>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <h6>Seat Up 155 Company Meatings</h6>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <h6>Traditional Home hall</h6>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <a href="" class="read-more">Book Now</a>
                    </div>
                    <div class="col-sm-3 col-6 picture-1 wow fadeInRight">
                        <img src="images/meeting-1.jpg" alt="">
                    </div>
                    <div class="col-sm-3 col-6 picture-2 wow fadeInRight">
                        <img src="images/meeting-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>