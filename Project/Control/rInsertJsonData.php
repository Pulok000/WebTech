


<?php
 if($flag1 && $flag2 && $flag3 && $flag4 && $flag5 && $flag6 && $flag7)
 {



            if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $name,  
                     'email'          =>     $email,  
                     'userName'     =>     $uname,
                     'password'     =>     $pass,
                     'gender'     =>     $result,
                     'dob'     =>     $dob
                 
                );
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "File Appended Success fully";  
                }  
                else  
                {  
                $error = 'JSON File not exits';  
                }
              }



 }


      

?>
