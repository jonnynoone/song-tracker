<?php
include 'database.php';

$query = "SELECT * FROM song_tracker";
$result = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">

    <title>Song Tracker 0.1</title>
</head>

<body>
    <div class="container">
        <?php if(isset($_GET['error'])) { ?>
            <div class="error"><?=$_GET['error']?></div>
        <?php } ?>

        <table id="song-list">
            <thead>
                <tr>
                    <th>Artist</th>
                    <th>Title</th>
                </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?=$row['artist']?></td>
                        <td><?=$row['title']?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>

            <tfoot>
                <form action="process.php" method="post">
                    <tr>
                        <td><input type="text" name="artist"></td>
                        <td><input type="text" name="title"></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="submit" name="submit"></td>
                    </tr>
                </form>
            </tfoot>
        </table>
    </div>
</body>

</html>