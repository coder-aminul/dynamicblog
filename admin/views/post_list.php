<?php while ($post = mysqli_fetch_assoc($get_posts)) { ?>
    <tr>
        <th scope="row">
            <?php echo $post['post_id'] ?>
        </th>
        <td>
            <?php echo $post['post_title'] ?>
        </td>
        <td>
            <?php echo $post['cat_name'] ?>
        </td>
        <td>
            <?php
            $status = $post['post_status'];
            if ($status === "0") {
                echo "Published";
            } else {
                echo "Unpublished";
            }

            ?>
        </td>
        <td>
            <?php echo $post['post_date'] ?>
        </td>
        <td>
            <img width="60" src="./assets/images/upload/<?php echo $post['post_img'] ?>"
                alt="<?php echo $post['post_img'] ?>" />
        </td>
        <td>
            <a href="profile.php?status=view&&id=<?php echo $post['post_id'] ?>" class="mr-1 actionbtn text-dark"><i
                    class="far fa-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a>
            <a href="edit_profile.php?status=edit&&id=<?php echo $post['post_id'] ?>" class="mr-1 actionbtn text-dark"><i
                    class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
            <a href="?status=delete&&id=<?php echo $post['post_id'] ?>" class="actionbtn"><i
                    class="far fa-trash-alt text-dark" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
        </td>
    </tr>
<?php } ?>