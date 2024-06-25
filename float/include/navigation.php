<?php
require('../float/db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>
    <link rel="stylesheet" href="css/navigation.css">
</head>

<body>
    <div class="sidebyside">
        <div class="sidebar">
            <div class="panel">
                <img src="../images/Eulap.png" alt="Eulap image">
            </div>

            <?php

            $sql = "SELECT contestant_num FROM contestant";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<a href="#" class="panel"><strong>Contestant ' . htmlspecialchars($row["contestant_num"]) . '</strong></a>';
                }
            } else {
                echo '<p>No contestants found</p>';
            }


            $conn->close();
            ?>

            <div class="logout-button">
                <a href="">
                    <button><strong>LOGOUT</strong></button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
