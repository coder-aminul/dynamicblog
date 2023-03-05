<?php while ($users = mysqli_fetch_assoc($get_profile)) { ?>
    <tr>
        <th scope="row">
            <?php echo $users['id'] ?>
        </th>
        <td>
            <?php echo $users['admin_name'] ?>
        </td>
        <td>
            <?php echo $users['admin_email'] ?>
        </td>
        <td>
            <img width="60" src="./assets/images/upload/<?php echo $users['admin_photo'] ?>"
                alt="<?php echo $users['admin_name'] ?>" />
        </td>
        <td>
            <a href="profile.php?status=view&&id=<?php echo $users['id'] ?>" class="mr-1 actionbtn text-dark"><i
                    class="far fa-eye" data-toggle="tooltip" data-placement="top" title="View"></i></a>
            <a href="edit_profile.php?status=edit&&id=<?php echo $users['id'] ?>" class="mr-1 actionbtn text-dark"><i
                    class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a>
            <a href="?status=delete&&id=<?php echo $category['id'] ?>" class="actionbtn"><i
                    class="far fa-trash-alt text-dark" data-toggle="tooltip" data-placement="top" title="Delete"></i></a>
        </td>
    </tr>
<?php } ?>