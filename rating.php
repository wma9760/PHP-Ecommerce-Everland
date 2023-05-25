<?php
include 'config.php';
if (!empty($_POST['rating']) && !empty($_POST['product_id'])) {
    $userID = 10001;
    $insertRating = "INSERT INTO review_comment(product_id, comment, rating, user_id)
		VALUES ('" . $_POST['product_id'] . "','" . $_POST["comment"] . "','" . $_POST['rating'] . "',$userID)";
    mysqli_query($con, $insertRating);
    // or die("database error: " . mysqli_error($con));
    echo "rating saved!";
}