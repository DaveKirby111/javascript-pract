<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Javascript Practice</title>

    <link rel="stylesheet" href="style.css">

    <script src="js/datetime.js"></script>
    <script src="js/ifelse.js"></script>
    <script src="js/switch.js"></script>
    <script src="js/classes.js"></script>
    <script src="js/apply.js"></script>
    <script src="js/array.js"></script>



</head>

<?php

$page = "Page 2";

?>

<body>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<main>

<h1 id="day"></h1>
<p id="wkend"></p>

<div class="content">

<p id="classes1"></p>
<p id="demo"></p>
<p id="person"></p>
<p id="person2"></p>
<p id="num"></p>

<div id="dis-likes">

<div class="like">
    <h3>Likes:</h3>
    <ul id="likes"></ul>
</div>

<div class="dislike">
    <h3>Dislikes:</h3>
    <ul id="dislikes"></ul>
</div>

</div>



</div>

</main>

<script>
    dateTime();
    swtch();
    weekend();
    showgame();
    myCar();
    person1();
    person2();
    myFunction();
    Like();
    disLike();
</script>

</body>

</html>