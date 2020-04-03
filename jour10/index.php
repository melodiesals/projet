<?php

require_once 'coder/php/model/glossaire.php';

//print_r($glossaire);

function displayRandomTerm($array)
{
    $length = count($array);

    $index= mt_rand(0, $length - 1);

    var_dump($index);


//echo '<h1>';
//print_r($array['title']);
//echo'<br>';
//echo '</h1>';
//echo '</p>';
//print_r($array[description]);
//echo '</p>';
//}


$title=$array[$index]['title'];
$description=$array[$index]['description']; 

$html=

<<<OUTPUT

<div>
<h1> bla bla : {$title}</h1>
<p> la description : {$description}</p>
</div>
OUTPUT;

echo $html;

}
displayRandomTerm($glossaire);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
