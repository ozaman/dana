<?php
include("../config.php");
//$name = $_POST[imagename].'.png';
if(isset($_FILES['file'])){
    //The error validation could be done on the javascript client side.
    $errors= array(); 
    // $path   =   "../files/upload/gallery/"; 
    $path   =   "../../data/files/upload/transfer/gallery/";      
    $file_name = $_FILES['file']['name'];
    $file_size =$_FILES['file']['size'];
    $file_tmp =$_FILES['file']['tmp_name'];
    $file_type=$_FILES['file']['type']; 
//echo $file_tmp.$path.$file_name;
    //move_uploaded_file($file_tmp,$path.$file_name);
echo $file_name;
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions = array("jpeg","jpg","png");        
    if(in_array($file_ext,$extensions )=== false){
     $errors[]="image extension not allowed, please choose a JPEG or PNG file.";
    }
    if($file_size > 2097152){
    $errors[]='File size cannot exceed 2 MB';
    }               
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,$path.$file_name);
       
            $sql = "INSERT INTO dn_gallery_transfer(tour_id,gallery)  VALUES( '".$_POST[id]."', '".$file_name."')";
            $Objquery = mysql_query($sql,$conndb);
            //echo $Objquery;
            //$row = mysql_num_rows($Objquery); // นับจำนวนแถว
                $rows = array();
            if($Objquery){
                
               echo "1 results";
              
            }
            else{
                echo "0 results";;
                
            }
    }else{
        print_r($errors);
    }
}
?>