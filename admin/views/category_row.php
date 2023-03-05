<?php while ($category = mysqli_fetch_assoc($categories)) { ?>
    <tr>
        <th scope="row">
            <?php echo $category['cat_id'] ?>
        </th>
        <td>
            <?php echo $category['cat_name'] ?>
        </td>
        <td>
            <?php echo $category['cat_desc'] ?>
        </td>
        <td>
            <a href="edit_category.php?status=edit&&id=<?php echo $category['cat_id'] ?>"
                class="mr-1 actionbtn text-dark"><i class="fas fa-edit" data-toggle="tooltip" data-placement="top"
                    title="Edit"></i></a>
            <a href="?status=delete&&id=<?php echo $category['cat_id'] ?>" class="actionbtn"><i
                    class="far fa-trash-alt text-dark" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
        </td>
    </tr>
<?php } ?>