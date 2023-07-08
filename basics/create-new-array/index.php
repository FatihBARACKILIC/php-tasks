<pre>
<?php

$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function createNewArray($array, $itemCount): array
{
    $newArray = [];
    $array = array_filter($array, function ($value) {
        return $value !== Null && $value !== "";
    });
    $arrayKey = array_rand($array, $itemCount);
    foreach ($arrayKey as $key) {
        $newArray[] = $array[$key];
    }
    return $newArray;
}

print_r(createNewArray($planets, 2));
print_r(createNewArray($planets, 3));
print_r(createNewArray($planets, 4));
print_r(createNewArray($planets, 5));
?>
</pre>
