<?php
require "vendor/autoload.php";
$dbname = 'dct';
try {
    $filter = ['id' => 2];
 $m = new 
//  MongoDB\Driver\Manager("mongodb://localhost:27017");
MongoDB\Client('mongodb+srv://Dung060103:Dung060103@cluster0.bd7lfjg.mongodb.net/?retryWrites=true&w=majority');
// MongoDB\Client('mongodb+srv://tungtruong2318:soaika1810@cluster0.swupiyi.mongodb.net/?retryWrites=true&w=majority');
// $db = $m->$dbname;


//         //    
//         $student = $db->student;

//         $datastudent = $student->find();
//         foreach($datastudent as $data) 
//         {
//             echo "<div> scode: ".$data['scode'].",  sname: ".$data['snam'].",  class: ".$data['class'].", age: ".$data['age']." </div>";
//         }
// $supports = $db->supports;
// $result = $supports->find();
// echo $result->Email;
// print_r($result->toArray());
// $query = new MongoDB\Driver\Query($filter,[]);
// $rows = $m->executeQuery('dct.student', $query);
//  echo $rows;
$db = $m->dct;


//         //    
        $student = $db->student;

$datastudent = $student->find();
// foreach($datastudent as $data) 
// {
//     echo "<div> scode: ".$data['scode'].",  sname: ".$data['snam'].",  class: ".$data['class'].", age: ".$data['age']." </div>";
// }
echo "<p>Connected!<p>";
 echo "thanh cong";
}
catch(Exception $ex) {
 print $ex;
//  header("location:../error.html");
}
?>