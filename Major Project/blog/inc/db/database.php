<?php

function get_all_articles() {
    $query = "SELECT * FROM articles";
    $result = mysqli_query($link, $query);

    return  $result;
}

?>