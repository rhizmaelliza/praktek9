<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cetak Login</title>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $sql = "SELECT * FROM login";
            $query = mysqli_query($conn, $sql);

            while ($login = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $login['email'] . "</td>";
                echo "<td>" . $login['password_akun'] . "</td>";
            }
            ?>
        </tbody>

    </table>
    <br>
    <a href="index.php">Log Out</a>
</body>
</html>