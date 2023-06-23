<?php

$id=$_POST['id'];
$pwd=$_POST['psw'];
$role=$_POST['role'];

if($id=="admin" && $pwd=="adimn"){
   //go to admin page
   header('Location: admin.php?r='.$role);
}elseif($id=="student" && $pwd=="student"){
   header('Location: student.php?r='.$role);
}elseif($id=="teacher" && $pwd=="teacher"){
   eader('Location: student.php?r='.$role);
}else{
   echo "invalid login";
}

?>