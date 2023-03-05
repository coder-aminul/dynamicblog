<div class="col-lg-12">
    <div class="sidebar-item categories">
        <div class="sidebar-heading">
            <h2>Categories</h2>
        </div>
        <div class="content">
            <ul>
                <?php while ($categoryside = mysqli_fetch_assoc($get_categorysidebar)) { ?>
                    <li><a href="#">-
                            <?php echo $categoryside['cat_name'] ?>
                        </a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>