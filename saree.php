<?php
    $folder = "S JPEG";
    $contents = scandir($folder);
    // print_r($contents);
    foreach ($contents as $value){ 
        if($value != "." && $value != "..")
        {
            echo $value . "---";
            $name_arr = explode(" ", $value);
            // print_r($name_arr);
            // echo $name_arr[1] . "---";
            $name_arr[1] = str_replace("(","", $name_arr[1]);
            $name_arr[1] = str_replace(")","", $name_arr[1]);
            $ext = explode(".", $name_arr[1]);
            
            // echo $name_arr[1]."<br />";
            if($ext[0] <=5)
            {
                $new_file = implode('_',$name_arr);
                rename ($folder."/".$value, $folder."/".$new_file);
                // echo "done --- rename --- ".$folder."/".$value " --- " .$folder."/".$new_file;
            }
            else
            {
                unlink($folder."/".$value);
                // echo "done --- delete --- ".$folder."/".$value;

            }
            // echo implode($name_arr);
            // echo  $folder."/".$value."<br />";
        }
        
      }
?>