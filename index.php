<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Javascript Practice</title>

    <link rel="stylesheet" href="style.css">

    <script src="js/change-txt.js"></script>
    <script src="js/change-img.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/datetime.js"></script>
    <script src="js/loop.js"></script>
    <script src="js/ifelse.js"></script>
    <script src="js/json.js"></script>
    <script src="js/message.js"></script>
    <script src="js/timeout.js"></script>
    <script src="js/showList.js"></script>
    <script src="js/classes.js"></script>

    <script>
        // edit a collection of elements within a document.
        function editP() {
            const collection = document.getElementsByTagName("p");
            for (let i = 0; i < collection.length; i++) {
                collection[i].style.color = "red";
                collection[i].style.fontSize = "25px";
            }
        }

    </script>

    <script type="module">
        import message from "./js/message.js"

        document.getElementById("module").innerHTML = message();
    </script>

</head>

<body>

<?php require "banner.php"; ?>

<?php require "nav.php"; ?>

<main>

<div class="content">

<button onclick="window.print()">Print page.</button>
<button id="alert" onclick="alertmsg()">Click me please.</button>


<br><br>

<button onclick="editP()">Edit Ps</button>

 <p id="text-change">Click the button below to change this text.</p>

    <button id="change-text" onclick="change()">Click to change text</button>
    <button id="change-size" onclick="changeS()">click to change size</button>
    <button id="hide-text" onclick="hidetxt()">click to hide text</button>
    <button id="show-text" onclick="showtxt()">click to show text</button>

    <br><br>

<section class="row">

    <div class="divine">

        <h3>Left/Right hand of the divine.</h3>

        <div class="handPic">

        <button id="leftH" onclick="changeImg()">Left</button>

        <img src="images/Inq.jpg" alt="left-hand" id="left-hand" class="change-img">
        

        <button id="rightH" onclick="changeImg2()">Right</button>

        </div>

        <p id="hand">Left/Right Hand</p>

    </div>

    <div class="fav-list">

        <div class="the-list">

            <h3>My Favorite Stuff:</h3>

            <button id="show-list" onclick="showlist()">Show list</button>

            <ol id="favList">
                <li>Mass Effect</li>
                <li>Final Fantasy</li>
                <li>Dragon Age</li>
                <li>Resident Evil</li>
                <li>Witcher</li>
                <li>Spider-Man</li>
            </ol>

        </div>

    </div>

</section>

    <br><br>

    <!-- <p id="ifElse"></p> -->

    <h3>Module:</h3>

    <p id="module"></p>

    <p id="classes1"></p>


</div>

</main>

<script>
    dateTime();
    theloop();
    ifelse();
    string();
    showgame();
</script>

</body>

</html>