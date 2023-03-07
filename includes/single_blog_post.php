<?php
$posts = $adminObj->display_public_post();

?>
<div class="col-lg-12">
    <?php while ($post = mysqli_fetch_assoc($posts)) { ?>
        <div class="blog-post">
            <div class="blog-thumb">
                <img src="admin/assets/images/upload/<?php echo $post['post_img'] ?>" alt="">
            </div>
            <div class="down-content">
                <span>
                    <?php echo $post['cat_name'] ?>
                </span>
                <a href="post-details.html">
                    <h4>
                        <?php echo $post['post_title'] ?>
                    </h4>
                </a>
                <ul class="post-info">
                    <li><a href="#">
                            <?php echo $post['post_author'] ?>
                        </a></li>
                    <li><a href="#">
                            <?php
                            $date = $post['post_date'];
                            $new_date = date("d-m-Y", strtotime($date));
                            echo $new_date;
                            ?>
                        </a></li>
                    <li><a href="#">
                            <?php echo $post['post_comment_count'] ?> Comments
                        </a></li>
                </ul>
                <div class="homepage-border">
                    <?php
                    $content = $post['post_content'];

                    echo substr($content, 0, 200) ?>
                </div>

                <div class="post-options">
                    <div class="row">
                        <div class="col-6">
                            <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <?php
                                $tags = $post['post_tag'];
                                $tag_arry = explode(",", $tags);
                                foreach ($tag_arry as $tag) {
                                    ?>
                                    <li><a href="#">
                                            <?php echo $tag ?>,
                                        </a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="post-share">
                                <li><i class="fa fa-share-alt"></i></li>
                                <li><a href="#">Facebook</a>,</li>
                                <li><a href="#"> Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>