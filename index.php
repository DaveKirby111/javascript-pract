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
</head>
<body>

    <h1>Javascript Practice</h1>


    <p id="text-change">Click the button below to change this text.</p>

    <button id="change-text" onclick="change()">Click</button>
    <button id="change-size" onclick="changeS()">click to change size</button>

    <br><br>

    <h3>Left/Right hand of the divine.</h3>

    <button id="leftH" onclick="changeImg()">Left</button>

    <img src="images/leliana.jpg" alt="left-hand" id="left-hand" class="change-img">

    <button id="rightH" onclick="changeImg2()">Right</button>
</body>
</html>