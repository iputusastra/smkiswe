<html>
    <head>
        <title>Uploads</title>
    </head>
    <body>
        <input type="file" name="file_array[]"/>
        <input type="file" name="file_array[]"/>
        <input type="file" name="file_array[]"/>
        <input type="submit" name="submit"/>
    </body>
</html>

<?php
    if(isset($_FILES['file_array']))
    {
        $name_array = $_FILES['file_array']['name'];
        $tmp_name_array = $_FILES['file_array']['tmp_name'];
        $type_array = $_FILES['file_array']['type'];
      $size_array = $_FILES['file_array']['size'];
        $error_array = $_FILES['file_array']['error'];
        $dir = "slideshow";

        for($i = 0; $i<count($tmp_name_array); $i++)
        {
            if(move_uploaded_file($tmp_name_array,"slideshow/".$name_array))
            {
                echo $name_array[$i]."Upload is complete<br>";

            }  else {
                echo"Move_uploaded_file function failed for".$name_array[$i]."<br>";
            }
        }
    }
?>