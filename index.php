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
        <table id="song-list">
            <thead>
                <tr>
                    <th>Artist</th>
                    <th>Title</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Connie Francis</td>
                    <td>Tennessee Waltz</td>
                </tr>
            </tbody>

            <tfoot>
                <form action="process.php" method="post">
                    <tr>
                        <td><input type="text"></td>
                        <td><input type="text"></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><input type="submit"></td>
                    </tr>
                </form>
            </tfoot>
        </table>
    </div>
</body>

</html>