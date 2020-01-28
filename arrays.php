<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ["Rajma", "chole", "Paneer", "Kadoo"];


/*


Print every array element in a new line.
*/

echo $food[0] . "<br>";
echo $food[1] . "<br>";
echo $food[2] . "<br>";
echo $food[3] . "<br>";

// task separator
echo "<hr style=\"margin 1rem 0\">";




/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul> == $0
  <li>Rajma</li>
  <li>Chole</li>
  <li>Paneer</li>
  <li>Kadoo</li>
</ul>
*/
echo "<ul>";
echo "<li>Rajma</li>";
echo "<li>Chole</li>";
echo "<li>Paneer</li>";
echo "<li>Kadoo</li>";
echo "</ul>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

$food_assoc = [
  "Rajma" => "Main course",
  "Chole" => "Italian_food",
  "Paneer" => "Italian meal",
  "Kadoo" => "Healthy food"



];



/*
Print every food and type in the separate lines so it renders like this:
Chole | main counrse 
cheesesake | desert 
*/
echo $food[0] . " | " . $food_assoc["Rajma"] . "<br>" 
 . $food[1] . " | " . $food_assoc["Chole"] . "<br>"
 . $food[2] . " | " . $food_assoc["Paneer"] . "<br>"
 . $food[3] . " | " . $food_assoc["Kadoo"] . "<br>";




// task separator
echo "<hr style=\"margin 1rem 0\">";



/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  Chole:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (Chole, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [
  "Rajma"=> [
    "type" => "Main Course",
    "origin" => "India"
  ],
  "Chole"=> [
    "type" => "Italian food", 
    "origin" => "Italy"
  ],
  "Paneer"=>[
    "type" => "Italian Meal", 
    "origin" => "Italy"
  ],
  "Kadoo"=>[
    "type" => "Healthy food", 
    "origin" => "India"
  ]
];
/*
Print every food, type and origin in the separate lines so it renders like this:
Chole | main counrse | Italy
cheesesake | desert | Greece
*/
echo $food[0]
. " | "
 . $food_assoc["Rajma"]["type"]
 . " | "
 . $food_assoc["Rajma"]["origin"]
 . "<br>" . $food[1]
 . " | "
 . $food_assoc["Chole"]["type"]
 . " | "
 . $food_assoc["Chole"]["origin"]
 . "<br>" . $food[2]
 . " | "
 . $food_assoc["Paneer"]["type"]
 . " | "
 . $food_assoc["Paneer"]["origin"]
 . "<br>" . $food[3]
 . " | "
 . $food_assoc["Kadoo"]["type"]
 . " | "
 . $food_assoc["Kadoo"]["origin"]
;


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>Chole</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo
"<table>
  <tr>
    <th>".$food[0]."</th>
    <th>".$food_assoc["Rajma"]["type"]."</th>
    <th>".$food_assoc["Rajma"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[1]."</th>
    <th>".$food_assoc["Chole"]["type"]."</th>
    <th>".$food_assoc["Chole"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[2]."</th>
    <th>".$food_assoc["Paneer"]["type"]."</th>
    <th>".$food_assoc["Paneer"]["origin"]."</th>
  </tr>
  <tr>
    <th>".$food[3]."</th>
    <th>".$food_assoc["Kadoo"]["type"]."</th>
    <th>".$food_assoc["Kadoo"]["origin"]."</th>
  </tr>
</table>";

?>
