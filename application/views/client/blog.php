<main>
    <article>
        <!-- Block 9 -->
        <section id="block_9" class='_1row wow fadeInUp'>
            <div class="block_1-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-12 mx-auto text-center title">
                            <h5>Tips For New Dishes</h5>
                            <h4>Latest News</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Blog -->
        <div class="container">
            <div class="row">
                <section id='main-blog' class="col-12 col-sm-12 col-md-8 _1row wow fadeInLeft">
                    <?php foreach ($news_info as $key => $value) { ?>
                        <div class="_1-blog">
                            <div class="blog-image-box"><img src="<?php echo $value['blog_thumbnail'] ?>" alt=""></div>
                            <div class="title-and-author">
                                <div class="blog-title"><a href="<?php echo base_url() ?>Blog/detail/<?php echo $value['blog_id'] ?>"><?php echo $value['blog_title'] ?></a></div>
                                <div class="author"><span class="time"><?php echo date('d/m/Y H:i:s',$value['date_created']); ?></span><a class='author' href="#">In <?php echo $value['category_name']?></a></div>
                            </div>
                            <div class="content">
                                <p><?php echo $value['blog_summary'] ?></p>
                            </div>
                            <div class="read-more-and-comment">
                                <a href="#" class="readMore">Read more</a>
                                <a href="#" class="comment">0 Comment</a>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end 1 blog     -->
                    <div class="pagination text-center">
                        <ul class="page-number mx-auto">
                            <?php if ($page_th > 1) { ?>
                                <li><a class='previous-page ' href="<?php echo base_url() ?>Blog/page/<?php echo $page_th - 1 ?>"><i class="fa fa-caret-left" aria-hidden="true"></i></a></li>
                            <?php } ?>
                            <?php for ($i = 1; $i <= $number_of_pages; $i++) {
                                if ((int) $page_th == $i) { ?>
                                    <li><span class="current-page"><?php echo $page_th ?></span></li><?php } else { ?>
                                    <li><a href="<?php echo base_url() ?>Blog/page/<?php echo $i ?>"><?php echo $i ?></a></li>
                                <?php } ?>
                            <?php } ?>
                            <!-- <li><span class="current-page">1</span></li> -->
                            <?php if ($page_th < $number_of_pages) { ?>
                                <li><a class='next-page <?php if ($page_th == $number_of_pages) echo "hidden" ?>' href="<?php echo base_url() ?>Blog/page/<?php echo $page_th + 1 ?>"><i class="fa fa-caret-right" aria-hidden="true"></i></a></li>
                            <?php } ?>
                        </ul>
                    </div>
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
                            <?php foreach ($category_data as $key => $value) {?>
                            <li><a href="<?php echo base_url()?>Blog/category/<?php echo $value['id']?>/1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><?php echo $value['category_name']?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </article>
</main>