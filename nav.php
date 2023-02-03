<nav>

<ul>


<?php 

$links = [
    "/" => "Home",
    "page2.php" => "Page 2",
    "page3.php" => "Page 3"
];

foreach ($links as $key => $link) {
    echo '<li><a href="' . $key . '">' . $link . '</a></li>';
}

?>

</ul>

</nav>