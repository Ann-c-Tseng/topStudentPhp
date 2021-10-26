<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz4 | Top Student</title>
  </head>

  <body>
    <script>
        function checkValidity() {
            const form = document.forms["topstudentform"];
            const array1 = form["arr1"].value;
            const array2 = form["arr2"].value;
            console.log(array1);
            console.log(array2);
            alert("Please fill in all input fields");
            return false;
        }
    </script>
    <form name="topstudentform" action="topStudent.php" method="POST" onsubmit="return checkValidity();">
        <label>Input two arrays, a "GPA" and a "Class" array:</label><br>
        <label> GPA: </label>
        <input type="text" id="arr1" name="arr1"/><br>
        <label> Class: </label>
        <input type="text" id="arr2" name="arr2"/><br>
        <button type="submit"> Submit </button>
    </form>
  </body>
</html>