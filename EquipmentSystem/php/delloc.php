<?php

$link = mysqli_connect("localhost", "hometogo0625", "sessy5295!!", "hometogo0625");
if (mysqli_connect_errno()) {
    echo "2";
} else {
    $name = $_POST['name'];

    $sql = "DELETE FROM `loc` WHERE `name` = ?";
    $stmt = mysqli_prepare($link, $sql);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result) {
        echo "1";
    } else {
        echo "0";
    }
    mysqli_query($link, $sql);
    mysqli_close($link);
}
?>