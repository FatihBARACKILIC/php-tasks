<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Array</title>
</head>

<body>
    <pre>
        <?php
        $planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

        function createNewArray($array, $itemCount): array
        {
            $newArray = [];
            $array = array_filter($array, function ($value) {
                return $value !== Null && $value !== "";
            });
            if ($itemCount >= count($array))
                return [
                    "Error" => "\$itemCount($itemCount) cannot be bigger than array length!"
                ];
            $arrayKey = array_rand($array, $itemCount);
            foreach ($arrayKey as $key) {
                $newArray[] = $array[$key];
            }
            return $newArray;
        }

        print_r(createNewArray($planets, 2));
        print_r(createNewArray($planets, 3));
        print_r(createNewArray($planets, 4));
        print_r(createNewArray($planets, 7));
        print_r(createNewArray($planets, 17));
        ?>
    </pre>

</body>

</html>