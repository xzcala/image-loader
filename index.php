<!DOCTYPE html>
<!--
name: Janry Basa
pawprint: jcbrzf
date: 3/25/2018
-->
<html>
<head>
    <title>Challenge8</title>
</head>
<body>
    <?php
        $dir = 'images/';
        if (is_dir($dir)) { //check if directory exist
            if ($dh = opendir($dir)){   //check if directory is open-able
                while (($file = readdir($dh)) !== false){   //loop until there are no more files
                    $file_parts = pathinfo($file);

                    switch($file_parts['extension']){   //switch to check the file's extension
                        case "jpg": 
                        case "jpeg": 
                        case "png": 
                        case "gif": echo '<div><img src="'.$dir.$file.'" alt="'.$file.'" width="800" height="500"></div>';
                                    break;

                        case "": 
                        case NULL: break;
                        }
                }
                closedir($dh);
            } else {
                echo "Not able to open directory $dir due to permission restrictions or filesystem errors";
            }
        } else {
            echo "The given filename: $dir is not a directory";
        }
    ?>
</body>
</html>
