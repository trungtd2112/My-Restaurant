<main>
    <article>
        <!-- Block 9 -->
        <section id="block_9" class='_1row wow fadeInUp'>
            <div class="block_1-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12 mx-auto text-center title">
                            <h5>Tips For New Dishes</h5>
                            <h4>Blog</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Blog -->
        <div class="container">
            <div class="row">
                <section id='main-blog' class="col-12 col-sm-12 col-md-8 _1row wow fadeInLeft">
                    <div class="_1-blog">
                        <?php foreach ($blog_detail as $key => $value) { ?>
                            <div class="blog-image-box"><img src="<?php echo $value['blog_thumbnail'] ?>" alt=""></div>
                            <div class="title-and-author">

                                <div class="blog-title"><span><?php echo $value['blog_title'] ?></span></div>
                                <div class="author"><span class="time">12 June 2018</span><a class='author' href="#">In <?php echo $value['category_name'] ?></a></div>
                            </div>
                            <div class="content">
                                <?php echo $value['blog_content'] ?>
                            </div>
                        <?php } ?>
                        <div class="read-more-and-comment">
                            <div class="tags"><span>Tags:</span> <a href="#">Food</a>,<a href="#">Healthy</a></div>
                            <a href="#" class="comment">0 Comment</a>
                        </div>
                    </div>
                    <!-- end 1-blog -->
                    <!-- Tin liên quan -->
                    <div class="row">
                        <div class="card-deck">
                            <?php foreach ($related_news as $key => $value) { ?>
                                    <div class="card">
                                        <img class="card-img-top img-fluid img-thumbnail" style="height:145px" src="<?php echo $value['blog_thumbnail'] ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-title"><?php echo $value['blog_title'] ?></p>
                                        </div>
                                        <div class="card-footer">
                                            <small class="text-muted"><?php echo date('d/m/Y H:i:s', $value['date_created']); ?></small>
                                        </div>
                                    </div>
                               
                            <?php } ?>
                        </div>
                    </div>
                    <!-- End Tin liên quan -->


                </section>
                <aside class='col-sm-1'></aside>
                <aside id='aside' class='col-12 col-sm-12 col-md-3 _1row wow fadeInRight'>
                    <form action="search.php">
                        <input type="text" placeholder="Search" required>
                        <button type='submit'><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                    <div class="categories">
                        <p>Categories</p>
                        <ul>
                            <?php foreach ($category_data as $key => $value) { ?>
                                <li><a href="<?php echo base_url() ?>Blog/category/<?php echo $value['id'] ?>/1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo $value['category_name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </article>
</main>