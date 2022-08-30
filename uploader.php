<?php
    $destination = "C:/xampp/htdocs/3rd-year/lab2-fileuploader/uploads/" . $_FILES['userfile']['name'];

    $tmp = $_FILES['userfile']['tmp_name'];
    
    if(is_uploaded_file($tmp)){
        if (move_uploaded_file($tmp, $destination)){
            echo "File successfully uploaded!" . "<br />";
            echo "Name: " . $_FILES["userfile"]["name"] . "<br />";
            echo "Type: " . $_FILES["userfile"]["type"] . "<br />";
            echo "Size: " . ($_FILES["userfile"]["size"] / 1024) . " KB<br />";
            echo "Location: " . $destination;
            exit();
        } 
    }
    echo 'Unable to upload file';    
?>
