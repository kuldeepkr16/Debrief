<?php
  function valid($name, $pass, $conn){
    if($name=="" || $pass==""){
      return false;
    }
    $sql="select username,password from login where username='$name' and password='$pass'";
    $show= $conn->query($sql);
    $search = mysqli_fetch_assoc($show);
    if(!empty($search['username'])){
      return true;
  }}

 ?>
