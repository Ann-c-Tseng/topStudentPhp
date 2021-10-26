<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 4 | Top Student</title>
  </head>
  <body>
    <p> The top student is: </p>
    <?php
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            echo topStudentFunction($_REQUEST["arr1"], $_REQUEST["arr2"]);     
        }
        function topStudentFunction($arr1, $arr2) {
            //GPA
            $array1 = explode(",", substr($arr1, 1, -1));
            //Name
            $array2 = explode(",", substr($arr2, 1, -1));
            $GPAs = array();
            $Names = array();
            foreach($array1 as $x) {
                $temp = explode(":", $x);
                $letter = trim($temp[0], "'");
                $GPAs[$letter] = floatval($temp[1]);
            }
            foreach($array2 as $y) {
                $temp = explode(":", $y);
                $name = trim($temp[0], "'");
                $letter = trim($temp[1], "'");   
                $Names[$name] = $letter;
            }
            // echo var_dump($GPAs)  . "<br>";
            // echo var_dump($Names)  . "<br>";
            $maxgrade = -1;
            $maxname = "";
            foreach($Names as $name => $grade) {
                $gpa = $GPAs[$grade];
                if($gpa > $maxgrade) {
                    $maxgrade = $gpa;
                    $maxname = $name;
                }
            }
            return $maxname;
        }
    ?>
    <br>
    <a href="./usingTopStudent.php"> <button> Go Home </button> </a>
  </body>
</html>