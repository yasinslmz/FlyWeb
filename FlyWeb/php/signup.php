<?php session_start(); ?>
<?php include "db.php"; ?>
<?php


$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);


/*$birth = mysqli_real_escape_string($conn, $_POST['date']);
*/

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        $sql="SELECT email from users WHERE email='{$email}' ";
        $query=mysqli_query($conn,$sql);
            if(mysqli_num_rows($query)>0){ //if email already exists

                echo "Email already exist";
            }else{
                if (!empty($_FILES['image'])) {


                    $img_name=$_FILES['image']['name'];
                    $img_type=$_FILES['image']['type'];
                    $tmp_name=$_FILES['image']['tmp_name'];

                    $img_explode=explode('.',$img_name);
                    $img_ext=end($img_explode);

                    $extensions=['png','jpg','jpeg'];
                    if (in_array($img_ext,$extensions)===true) {
                       $types = ["image/jpeg", "image/jpg", "image/png"];

                       if(in_array($img_type, $types) === true) {
                           $time=time();
                           $new_img_name=$time.$img_name;
                           if (move_uploaded_file($tmp_name, "../images/".$new_img_name)) {
                               $status="Active now";
                               $random_id=rand(time(), 100000000);
                               $date=$_POST['date'];

                               $sql2="INSERT INTO users (unique_id,fname,lname,email,password,img,birth,status)
                               VALUES ({$random_id},'{$fname}','{$lname}','{$email}','{$password}',
                               '{$new_img_name}','{$date}','{$status}') ";

                               $query2=mysqli_query($conn,$sql2);

                              if ($query2) { // if data inserted
                                  $sql3="SELECT * from users WHERE email='{$email}'";
                                  $query3=mysqli_query($conn,$sql3);
                                  if (mysqli_num_rows($query3)>0) {

                                    $row=mysqli_fetch_assoc($query3);
                                    $_SESSION['unique_id']=$row['unique_id'];
                                    echo "success";                                      
                                }

                            }else{
                                $error=mysqli_error($conn);
                                echo "$error";
                            }

                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }








                }else{
                    echo "please enter a valid type image-jpeg -png- jpg ";
                }




            }else{
                echo "please select an image";

            }

        }

    }
    else{
       echo "this is not a valid email.";
   }


}
else{
	echo "All inputs are required";
}