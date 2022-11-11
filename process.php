<?php

include 'database.php';

if(empty($_POST['submit'])) {
    die("No data received.");
} else {
    if(!empty($_POST['artist']) && !empty($_POST['title'])) {
        $artist = mysqli_real_escape_string($link, $_POST['artist']);
        $title = mysqli_real_escape_string($link, $_POST['title']);

        date_default_timezone_set("Europe/London");
        $added_on = date('Y-m-d H:i:s');

        $query = "INSERT INTO song_tracker (artist, title, added_on)
                  VALUES ('$artist', '$title', '$added_on')";
        if(!mysqli_query($link, $query)) {
            die("MySQL Error: " . mysqli_error($link));
        } else {
            header("Location: index.php");
        }
    } else {
        $error = "Please complete both fields.";
        header("Location: index.php?error=" . urlencode($error));
    }
}