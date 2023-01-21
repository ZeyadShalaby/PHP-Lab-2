<?php 

echo '<h1> Task 1 </h1>';

#use nl2br \r\n with double quotes for it to work
echo nl2br("This is an example of \r\n a line break \r\n while the code is \r\n in the same line");

#**********************************************************#
echo '<br>';

echo '<h1> Task 3 </h1>';

$numbers = [12, 45, 10, 25];

echo 'The sum of the array is '.array_sum($numbers);
echo '<br>';
echo 'The average of the array is '.$average = array_sum($numbers) / count($numbers);
echo '<br>';

rsort ($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}


#**************************************************************************#

echo '<br>';

echo '<h1> Task 4 </h1>';

$names = array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40);


echo 'Ascending order, according to the value: <br>';

asort($names);

foreach($names as $x => $value) {
    echo "Key=" . $x . ", Value=" . $value;
    echo "<br>";
  }
echo'<br>';

echo 'Descending order, according to the value: <br>';

  arsort($names);

  foreach($names as $x => $value) {
    echo "Key=" . $x . ", Value=" . $value;
    echo "<br>";
  }

 echo '<br>';
 
 echo 'Descending order, according to the key: <br>';

 krsort($names);

 foreach($names as $x => $value) {
    echo "Key=" . $x . ", Value=" . $value;
    echo "<br>";
  }

 echo '<br>';

 
echo 'Ascending order, according to the key: <br>';

ksort($names);

foreach($names as $x => $value) {
    echo "Key=" . $x . ", Value=" . $value;
    echo "<br>";
  }
echo'<br>';

#*********************************************************************#


echo '<br>';

echo '<h1> Task 5 </h1>';

$students = [
    ['name' => 'Alaa', 'email' => 'alaa@test.com', 'status' => 'PHP'],
    ['name' => 'Shamy', 'email' => 'shamy@test.com', 'status' => '.Net'],
    ['name' => 'Youssef', 'email' => 'youssef@test.com', 'status' => 'Testing'],
    ['name' => 'Waleid', 'email' => 'waleid@test.com', 'status' => 'PHP'],
    ['name' => 'Rahma', 'email' => 'rahma@test.com', 'status' => 'Front End'],
];

echo "<table style='border:5px solid black'> <tr><td> Name </td> <td> Email </td>
<td> Status </td></tr>";

foreach ($students as $value){
    if($value['status'] == 'PHP'){
        echo "<tr style ='color:red'> <td>".$value['name']."</td><td>".$value['email']. "</td><td>".$value['status']."</td> </tr>";
    }else{
            echo  "<tr> <td>".$value['name']."</td><td>".$value['email']. "</td><td>".$value['status']."</td> </tr>";
        }
    }


echo "</table>"






?>