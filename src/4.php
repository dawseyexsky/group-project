<?php
// Define an array of colors
$colors = ["red", "green", "blue"];

// Choose a random color from the array
$random_color = $colors[array_rand($colors)];

// Use the random color to set the background color of a div
echo '<div style="background-color: ' . $random_color . '">Random Color</div>';
?>