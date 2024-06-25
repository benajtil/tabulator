<?php 
include ('../float/include/navigation.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival Judging Form</title>
    <link rel="stylesheet" href="../float/css/judgeTable.css">
</head>

<body>
    <div class="container">
        <h1>CIVIC PARADE: FLOAT COMPETITION</h1>

        <form action="#" method="post">
            <div class="form-group">
                <label for="appearance">Overall Appearance and Impact:</label>
                <input id="appearance" name="appearance" type="number" min="1" max="30" required>
            </div>
            <div class="form-group">
                <label for="artistry">Artistry/Design:</label>
                <input id="artistry" name="artistry" type="number" min="1" max="20" required>
            </div>
            <div class="form-group">
                <label for="craftsmanship">Craftsmanship:</label>
                <input id="craftsmanship" name="craftsmanship" type="number" min="1" max="30" required>
            </div>
            <div class="form-group">
                <label for="relevance">Relevance to Festival Theme:</label>
                <input id="relevance" name="relevance" type="number" min="1" max="20" required>
            </div>
            <div class="buttons">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
<script src="../float/js/judgeTable.js"></script>

</html>