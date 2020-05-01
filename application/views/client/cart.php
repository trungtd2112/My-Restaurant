<main>
    <article>
        <!-- Block 9 -->
        <section id="block_9" class='_1row wow fadeInUp'>
            <div class="block_1-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12 mx-auto text-center title">
                            <h5>Keep in touch</h5>
                            <h4>Contact Us</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Message -->
        <section id="message" class="_1row wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 col-sm-4 contact-image-box">
                        <img src="<?php echo base_url() ?>images/master-chef.png" alt="">
                        <hr><img src="<?php echo base_url() ?>images/chef.jpg" alt="">
                    </div>
                    <div style="background-color: #ddd" class="col-12 col-lg-8 col-sm-8 ">
                        <!--	Cart	-->
                        <div id="my-cart">
                            <div class="row">
                                <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">
                                    <h5>Thông tin sản phẩm</h5>
                                </div>
                                <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">
                                    <h5>Tùy chọn</h5>
                                </div>
                                <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">
                                    <h5>Giá</h5>
                                </div>
                            </div>
                            <form method="post" action="<?php echo base_url() ?>Cart/update">
                                <?php
                                $total_cost = 0;
                                if (isset($_SESSION['cart']) && array_sum($_SESSION['cart']) > 0) {
                                    foreach ($_SESSION['cart'] as $key_cart => $value_cart) {
                                        foreach ($dish_info as $key_dish => $value_dish) {
                                            if ($key_cart == $value_dish['dish_id']) {
                                                $total_cost += $value_cart * $value_dish['dish_price'];
                                ?> <div class="cart-item row">
                                                    <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                                        <img src="<?php echo $value_dish['dish_image'] ?>">
                                                        <h4><?php echo $value_dish['dish_name'] ?></h4>
                                                    </div>
                                                    <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                                        <input name="quantity[<?php echo ($key_cart); ?>]" type="number" id="quantity" class="form-control form-blue quantity" value="<?php echo $value_cart; ?>" min="1">

                                                    </div>
                                                    <div class="cart-price col-lg-3 col-md-3 col-sm-12" r>
                                                        <b>$ <?php echo $value_dish['dish_price'] ?></b>
                                                        <a href="<?php echo base_url() ?>Cart/delete/<?php echo $key_cart ?>">Xóa</a>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                                <div class="row">
                                    <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                        <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật giỏ hàng</button>
                                    </div>
                                    <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
                                    <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>$ <?php echo $total_cost; ?></b></div>
                                </div>
                            </form>

                        </div>
                        <!--	End Cart	-->

                        <!--	Customer Info	-->
                        <div id="customer">
                            <form method="post" id="frm" action="<?php echo base_url() ?>Cart/handle_order">
                                <div class="row">

                                    <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                        <input placeholder="Họ và tên (bắt buộc)" type="text" name="customer_name" class="form-control" required>
                                    </div>
                                    <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                        <input placeholder="Số điện thoại (bắt buộc)" type="text" name="customer_phone" class="form-control" required>
                                    </div>
                                    <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                        <input placeholder="Email (bắt buộc)" type="text" name="customer_email" class="form-control" required>
                                    </div>
                                    <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                        <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="customer_address" class="form-control" required>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                        <a onclick="buyNow()">
                                            <b>Mua ngay</b>
                                            <span>Giao hàng tận nơi siêu tốc</span>
                                        </a>
                                    </div>
                                    <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                        <a href="#">
                                            <b>Trả góp Online</b>
                                            <span>Vui lòng call (+84) 866699660</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--	End Customer Info	-->
                    </div>
                </div>
            </div>
        </section>
        <!-- Block_10 -->
        <section id="block_10" class='_1row wow fadeInUp'>
            <div class="block_1-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12 mx-auto text-center title">
                            <h5>Thanks For Visit Us</h5>
                            <h4>We Make Stay Fresh Food & Wounderful View</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Branch Location -->
        <section id="branch" class='_1row wow fadeInUp'>
            <div class="title mx-auto text-center">
                <h5>Get In Touch</h5>
                <h4>Our Branch Locations</h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-4 _1-branch">
                        <div class="location-image-box"><img src="images/branch-1.jpg" alt=""></div>
                        <ul class="location">
                            <li><img src="images/plane.png" alt="">A: 44 First Floor New Design Street, Melbourne 005</li>
                            <li><img src="images/phone.png" alt="">P: + (01) 800 433 633 (or) + (01) 800 433 589</li>
                            <li><img src="images/envelop.png" alt="">E: Arctica@Example.com (or) info@arctica.com</li>
                        </ul>
                    </div>
                    <!-- end 1 location -->
                    <div class="col-12 col-sm-4 _1-branch">
                        <div class="location-image-box"><img src="images/branch-2.jpg" alt=""></div>
                        <ul class="location">
                            <li><img src="images/plane.png" alt="">A: 44 First Floor New Design Street, Melbourne 005</li>
                            <li><img src="images/phone.png" alt="">P: + (01) 800 433 633 (or) + (01) 800 433 589</li>
                            <li><img src="images/envelop.png" alt="">E: Arctica@Example.com (or) info@arctica.com</li>
                        </ul>
                    </div>
                    <!-- end 1 location -->
                    <div class="col-12 col-sm-4 _1-branch">
                        <div class="location-image-box"><img src="images/branch-3.jpg" alt=""></div>
                        <ul class="location">
                            <li><img src="images/plane.png" alt="">A: 44 First Floor New Design Street, Melbourne 005</li>
                            <li><img src="images/phone.png" alt="">P: + (01) 800 433 633 (or) + (01) 800 433 589</li>
                            <li><img src="images/envelop.png" alt="">E: Arctica@Example.com (or) info@arctica.com</li>
                        </ul>
                    </div>
                    <!-- end 1 location -->
                </div>
            </div>
        </section>
    </article>
</main>
<!-- script -->
<script>
    function buyNow() {
        document.getElementById('frm').submit();
    }
</script>