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
</head>

<!-- As a general rule, always declare variables with const. If you think the variable
can change, use let. You can declare multiple variables in one statement.

let person = "Joe", car = "Volvo", price = 200; 

variable defined with let cannot be redeclared.You can with var.-->
<body>

<header>

    <div class="heading">

    <h1>Javascript Practice</h1>

    <button id="alert" onclick="alertmsg()">Click me please.</button>

    </div>

    <div id="datetime">
        <h1 id="time"></h1>
        <p id="date"></p>
    </div>

</header>

<main>

<div class="content">

<button onclick="window.print()">Print page.</button>

<br><br>

 <p id="text-change">Click the button below to change this text.</p>

    <button id="change-text" onclick="change()">Click to change text</button>
    <button id="change-size" onclick="changeS()">click to change size</button>
    <button id="hide-text" onclick="hidetxt()">click to hide text</button>
    <button id="show-text" onclick="showtxt()">click to show text</button>

    <br><br>

    <h3>Left/Right hand of the divine.</h3>

    <button id="leftH" onclick="changeImg()">Left</button>

    <img src="images/Inq.jpg" alt="left-hand" id="left-hand" class="change-img">

    <button id="rightH" onclick="changeImg2()">Right</button>

    <br><br>

    <p id="fav-list"></p>

</div>

</main>

<script>
    dateTime();
    theloop();
</script>

</body>

</html>