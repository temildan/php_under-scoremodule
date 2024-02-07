<?php
$students=[
    ["name"=>"john","value"=>70],
    ["name"=>"temil","value"=>20]
  
];
$cities=[
    ["name"=>"paris","value"=>70],
    ["name"=>"colombo","value"=>20]
];
  
function getMax(array $list)
{
    $max = $list[0];
    
    foreach ($list as $item) {
        if ($item['value'] > $max['value']) {
            $max = $item; 
        }
    }

    return $max;
}

$maxStudent = getMax($students);
$maxCity = getMax($cities);
echo "Max student: " . $maxStudent['name'] . " value " . $maxStudent['value'] . "<br>";
echo "Max city: " . $maxCity['name'] . " value " . $maxCity['value'] . "<br>";
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