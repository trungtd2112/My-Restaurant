<main>
    <article>
        <!-- Block_6 -->
        
        <!-- Section 2 -->
        <section id="block_7" class="_1row wow fadeInUp">
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
                <li><span class='active'>All</span></li>
                <li><span>Break Fast</span></li>
                <li><span>Lunch</span></li>
                <li><span>Dinner</span></li>
            </ul>
            <div class="overlay-detail-info"></div>
            <div class="container">
                <ul>
                    <li>
                        <div class="_1tab show row">
                            <div class="col-sm-6 col-12">
                                <?php $count = -1; ?>
                                <?php foreach ($menu as $key => $value) {
                                    $count++;
                                    if ($count == $number_of_dishes / 2) break;  ?>
                                    <div class="_1dish">
                                        <div class="_1dish-inner">
                                            <div class="image-box">
                                                <a href=""><img src="<?php echo $value['dish_image'] ?>" alt=""></a>
                                            </div>
                                            <?php if ($value['dish_status'] == 1) { ?>
                                                <span class="new">New</span>
                                            <?php } ?>
                                            <ul class='info'>
                                                <li class="clearfix">
                                                    <span class="name"><a href=""><?php echo $value['dish_name'] ?></a></span>
                                                    <span class="dotted">.......................................................</span>
                                                    <span class="price">$<?php echo $value['dish_price'] ?></span>
                                                    <span class="desc"><?php echo $value['dish_summary'] ?></span>
                                                </li>
                                            </ul>
                                            <div class="detail-info">
                                                <div class="img-thumbnail-dish">
                                                    <img src='<?php echo $value['dish_image'] ?>' alt="">
                                                </div>
                                                <div class="info-block">
                                                    <p class="name">
                                                        <?php echo $value['dish_name'] ?>
                                                    </p>
                                                    <p class="describe">
                                                        <?php echo $value['dish_details'] ?>
                                                    </p>
                                                    <p class="cost">Cost: $<?php echo $value['dish_price'] ?></p>
                                                    <a href="<?php echo base_url() ?>Cart/addCart/<?php echo $value['dish_id'] ?>" class="btn btn-warning">Add to cart</a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end left -->
                            <div class="col-sm-6 col-12">
                                <?php for ($i = $count; $i < $number_of_dishes; $i++) {  ?>
                                    <div class="_1dish">
                                        <div class="_1dish-inner">
                                            <div class="image-box">
                                                <a href=""><img src="<?php echo $menu[$i]['dish_image'] ?>" alt=""></a>
                                            </div>
                                            <ul class='info'>
                                                <li class="clearfix">
                                                    <span class="name"><a href=""><?php echo $menu[$i]['dish_name'] ?></a></span>
                                                    <span class="dotted">.......................................................</span>
                                                    <span class="price">$<?php echo $menu[$i]['dish_price'] ?></span>
                                                    <span class="desc"><?php echo $menu[$i]['dish_summary'] ?></span>
                                                </li>
                                            </ul>
                                            <div class="detail-info">
                                                <div class="img-thumbnail-dish">
                                                    <img src='<?php echo $menu[$i]['dish_image'] ?>' alt="">
                                                </div>
                                                <div class="info-block">
                                                    <p class="name">
                                                        <?php echo $menu[$i]['dish_name'] ?>
                                                    </p>
                                                    <p class="describe">
                                                        <?php echo $menu[$i]['dish_details'] ?>
                                                    </p>
                                                    <p class="cost">Cost: $<?php echo $menu[$i]['dish_price'] ?></p>
                                                    <a href="<?php echo base_url() ?>Cart/addCart/<?php echo $menu[$i]['dish_id'] ?>" class="btn btn-warning">Add to cart</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end right -->
                        </div>
                        <!-- end 1 tab-content -->
                    </li>
                    <li>
                        <div class="_1tab row">
                            <div class="col-sm-6 col-12">
                                <?php $count = -1; ?>
                                <?php foreach ($menu_breakfast as $key => $value) {
                                    $count++;
                                    if ($count == ceil($number_of_dishes_1 / 2)) break;  ?>
                                    <div class="_1dish">
                                        <div class="_1dish-inner">
                                            <div class="image-box">
                                                <a href=""><img src="<?php echo $value['dish_image'] ?>" alt=""></a>
                                            </div>
                                            <?php if ($value['dish_status'] == 1) { ?>
                                                <span class="new">New</span>
                                            <?php } ?>
                                            <ul class='info'>
                                                <li class="clearfix">
                                                    <span class="name"><a href=""><?php echo $value['dish_name'] ?></a></span>
                                                    <span class="dotted">.......................................................</span>
                                                    <span class="price">$<?php echo $value['dish_price'] ?></span>
                                                    <span class="desc"><?php echo $value['dish_summary'] ?></span>
                                                </li>
                                            </ul>
                                            <div class="detail-info">
                                                <div class="img-thumbnail-dish">
                                                    <img src='<?php echo $value['dish_image'] ?>' alt="">
                                                </div>
                                                <div class="info-block">
                                                    <p class="name">
                                                        <?php echo $value['dish_name'] ?>
                                                    </p>
                                                    <p class="describe">
                                                        <?php echo $value['dish_details'] ?>
                                                    </p>
                                                    <p class="cost">Cost: $<?php echo $value['dish_price'] ?></p>
                                                    <a href="<?php echo base_url() ?>Cart/addCart/<?php echo $value['dish_id'] ?>" class="btn btn-warning">Add to cart</a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end left -->
                            <div class="col-sm-6 col-12">
                                <?php for ($i = $count; $i < $number_of_dishes_1; $i++) {?>
                                    <div class="_1dish">
                                        <div class="_1dish-inner">
                                            <div class="image-box">
                                                <a href=""><img src="<?php echo $menu_breakfast[$i]['dish_image'] ?>" alt=""></a>
                                            </div>
                                            <ul class='info'>
                                                <li class="clearfix">
                                                    <span class="name"><a href=""><?php echo $menu_breakfast[$i]['dish_name'] ?></a></span>
                                                    <span class="dotted">.......................................................</span>
                                                    <span class="price">$<?php echo $menu_breakfast[$i]['dish_price'] ?></span>
                                                    <span class="desc"><?php echo $menu_breakfast[$i]['dish_summary'] ?></span>
                                                </li>
                                            </ul>
                                            <div class="detail-info">
                                                <div class="img-thumbnail-dish">
                                                    <img src='<?php echo $menu_breakfast[$i]['dish_image'] ?>' alt="">
                                                </div>
                                                <div class="info-block">
                                                    <p class="name">
                                                        <?php echo $menu_breakfast[$i]['dish_name'] ?>
                                                    </p>
                                                    <p class="describe">
                                                        <?php echo $menu_breakfast[$i]['dish_details'] ?>
                                                    </p>
                                                    <p class="cost">Cost: $<?php echo $menu_breakfast[$i]['dish_price'] ?></p>
                                                    <a href="<?php echo base_url() ?>Cart/addCart/<?php echo $menu_breakfast[$i]['dish_id'] ?>" class="btn btn-warning">Add to cart</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end right -->
                        </div>
                        <!-- end 1 tab-content -->
                    </li>
                    <li>
                        <div class="_1tab row">
                            <div class="col-sm-6 col-12">
                                <?php $count = -1; ?>
                                <?php foreach ($menu_lunch as $key => $value) {
                                    $count++;
                                    if ($count == ceil($number_of_dishes_2 / 2)) break;  ?>
                                    <div class="_1dish">
                                        <div class="_1dish-inner">
                                            <div class="image-box">
                                                <a href=""><img src="<?php echo $value['dish_image'] ?>" alt=""></a>
                                            </div>
                                            <?php if ($value['dish_status'] == 1) { ?>
                                                <span class="new">New</span>
                                            <?php } ?>
                                            <ul class='info'>
                                                <li class="clearfix">
                                                    <span class="name"><a href=""><?php echo $value['dish_name'] ?></a></span>
                                                    <span class="dotted">.......................................................</span>
                                                    <span class="price">$<?php echo $value['dish_price'] ?></span>
                                                    <span class="desc"><?php echo $value['dish_summary'] ?></span>
                                                </li>
                                            </ul>
                                            <div class="detail-info">
                                                <div class="img-thumbnail-dish">
                                                    <img src='<?php echo $value['dish_image'] ?>' alt="">
                                                </div>
                                                <div class="info-block">
                                                    <p class="name">
                                                        <?php echo $value['dish_name'] ?>
                                                    </p>
                                                    <p class="describe">
                                                        <?php echo $value['dish_details'] ?>
                                                    </p>
                                                    <p class="cost">Cost: $<?php echo $value['dish_price'] ?></p>
                                                    <a href="<?php echo base_url() ?>Cart/addCart/<?php echo $value['dish_id'] ?>" class="btn btn-warning">Add to cart</a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end left -->
                            <div class="col-sm-6 col-12">
                                <?php for ($i = $count; $i < $number_of_dishes_2; $i++) {?>
                                    <div class="_1dish">
                                        <div class="_1dish-inner">
                                            <div class="image-box">
                                                <a href=""><img src="<?php echo $menu_lunch[$i]['dish_image'] ?>" alt=""></a>
                                            </div>
                                            <ul class='info'>
                                                <li class="clearfix">
                                                    <span class="name"><a href=""><?php echo $menu_lunch[$i]['dish_name'] ?></a></span>
                                                    <span class="dotted">.......................................................</span>
                                                    <span class="price">$<?php echo $menu_lunch[$i]['dish_price'] ?></span>
                                                    <span class="desc"><?php echo $menu_lunch[$i]['dish_summary'] ?></span>
                                                </li>
                                            </ul>
                                            <div class="detail-info">
                                                <div class="img-thumbnail-dish">
                                                    <img src='<?php echo $menu_lunch[$i]['dish_image'] ?>' alt="">
                                                </div>
                                                <div class="info-block">
                                                    <p class="name">
                                                        <?php echo $menu_lunch[$i]['dish_name'] ?>
                                                    </p>
                                                    <p class="describe">
                                                        <?php echo $menu_lunch[$i]['dish_details'] ?>
                                                    </p>
                                                    <p class="cost">Cost: $<?php echo $menu_lunch[$i]['dish_price'] ?></p>
                                                    <a href="<?php echo base_url() ?>Cart/addCart/<?php echo $menu_lunch[$i]['dish_id'] ?>" class="btn btn-warning">Add to cart</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end right -->
                        </div>
                        <!-- end 1 tab-content -->
                    </li>
                    <li>
                        <div class="_1tab row">
                            <div class="col-sm-6 col-12">
                                <?php $count = -1; ?>
                                <?php foreach ($menu_dinner as $key => $value) {
                                    $count++;
                                    if ($count == ceil($number_of_dishes_3 / 2)) break;  ?>
                                    <div class="_1dish">
                                        <div class="_1dish-inner">
                                            <div class="image-box">
                                                <a href=""><img src="<?php echo $value['dish_image'] ?>" alt=""></a>
                                            </div>
                                            <?php if ($value['dish_status'] == 1) { ?>
                                                <span class="new">New</span>
                                            <?php } ?>
                                            <ul class='info'>
                                                <li class="clearfix">
                                                    <span class="name"><a href=""><?php echo $value['dish_name'] ?></a></span>
                                                    <span class="dotted">.......................................................</span>
                                                    <span class="price">$<?php echo $value['dish_price'] ?></span>
                                                    <span class="desc"><?php echo $value['dish_summary'] ?></span>
                                                </li>
                                            </ul>
                                            <div class="detail-info">
                                                <div class="img-thumbnail-dish">
                                                    <img src='<?php echo $value['dish_image'] ?>' alt="">
                                                </div>
                                                <div class="info-block">
                                                    <p class="name">
                                                        <?php echo $value['dish_name'] ?>
                                                    </p>
                                                    <p class="describe">
                                                        <?php echo $value['dish_details'] ?>
                                                    </p>
                                                    <p class="cost">Cost: $<?php echo $value['dish_price'] ?></p>
                                                    <a href="<?php echo base_url() ?>Cart/addCart/<?php echo $value['dish_id'] ?>" class="btn btn-warning">Add to cart</a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end left -->
                            <div class="col-sm-6 col-12">
                                <?php for ($i = $count; $i < $number_of_dishes_3; $i++) {?>
                                    <div class="_1dish">
                                        <div class="_1dish-inner">
                                            <div class="image-box">
                                                <a href=""><img src="<?php echo $menu_dinner[$i]['dish_image'] ?>" alt=""></a>
                                            </div>
                                            <ul class='info'>
                                                <li class="clearfix">
                                                    <span class="name"><a href=""><?php echo $menu_dinner[$i]['dish_name'] ?></a></span>
                                                    <span class="dotted">.......................................................</span>
                                                    <span class="price">$<?php echo $menu_dinner[$i]['dish_price'] ?></span>
                                                    <span class="desc"><?php echo $menu_dinner[$i]['dish_summary'] ?></span>
                                                </li>
                                            </ul>
                                            <div class="detail-info">
                                                <div class="img-thumbnail-dish">
                                                    <img src='<?php echo $menu_dinner[$i]['dish_image'] ?>' alt="">
                                                </div>
                                                <div class="info-block">
                                                    <p class="name">
                                                        <?php echo $menu_dinner[$i]['dish_name'] ?>
                                                    </p>
                                                    <p class="describe">
                                                        <?php echo $menu_dinner[$i]['dish_details'] ?>
                                                    </p>
                                                    <p class="cost">Cost: $<?php echo $menu_dinner[$i]['dish_price'] ?></p>
                                                    <a href="<?php echo base_url() ?>Cart/addCart/<?php echo $menu_dinner[$i]['dish_id'] ?>" class="btn btn-warning">Add to cart</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- end right -->
                        </div>
                        <!-- end 1 tab-content -->
                    </li>
                    
                </ul>
            </div>
        </section>

        <section id="block_6" class='_1row wow fadeInUp'>
            <div class="block_1-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12 mx-auto text-center title">
                            <h5>Our Delicious Menu Items Combo</h5>
                            <h4>Fresh And Healthy Food Available</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Special Dishes -->
        <section id="special" class='_1row wow fadeInUp'>
            <div class="container">
                <div class="row">
                    <?php foreach ($featured_dish as $key => $value) { ?>
                        <div class="col-sm-4 col-12 _1-dish">
                            <div class="thumbnail">
                                <img style="height: 410px" src="<?php echo $value['dish_image'] ?>" alt="">
                                <span>New</span>
                            </div>
                            <div class="information">
                                <a href=""><?php echo $value['dish_name']?></a>
                                <span class='price'>$<?php echo $value['dish_price'] ?></span>
                            </div>
                            <p class="desc"><?php echo $value['dish_summary']?></p>
                        </div>
                    <?php } ?>
                    <!-- end _1-dish -->
                </div>
            </div>
        </section>
    </article>
</main>