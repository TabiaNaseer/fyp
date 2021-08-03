<?php
require('db.php');

if(isset($_POST['add-research'])){
    
$title = $_POST['title'];
$date = $_POST['date'];
$author = $_POST['author'];
$desc = $_POST['desc'];
$imagename = time().$_FILES['profile']['name'];
$imgtemp = $_FILES['profile']['tmp_name'];
if($imgtemp==''){
        $q = "SELECT * FROM research WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['res_pic'];
    }
    move_uploaded_file($imgtemp,"../images/$imagename");
$query = "INSERT INTO research (res_title,res_date,res_name,res_desc,res_pic) VALUES('$title','$date','$author','$desc','$imagename') ";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/admin.php?researchsetting=true';</script>";                    

    }

}
if(isset($_POST['add-faculty'])){
    
$title = $_POST['title'];
$author = $_POST['author'];
$imagename = time().$_FILES['profile']['name'];
$imgtemp = $_FILES['profile']['tmp_name'];
if($imgtemp==''){
        $q = "SELECT * FROM faculty WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['my_prof_pic'];
    }
    
$query = "INSERT INTO faculty (my_name,my_designation,my_prof_pic) VALUES('$title','$author','$imagename') ";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/admin.php?facultysetting=true';</script>";                    

    }

}
if(isset($_POST['add-student'])){
    
$name = $_POST['name'];
$lname = $_POST['lname'];
$sdate = $_POST['sdate'];
$sid = $_POST['sid'];

    
$query = "INSERT INTO student (firstname,lastname,startdate,studentid) VALUES('$name','$lname','$sdate','$sid') ";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/admin.php?studentsetting=true';</script>";                    

    }

}
if(isset($_POST['add-event'])){
    
$title = $_POST['title'];
$date = $_POST['date'];
$mon = $_POST['mon'];
$time = $_POST['time'];
$date2 = $_POST['date2'];
$imagename = time().$_FILES['profile']['name'];

if($imgtemp==''){
        $q = "SELECT * FROM event WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['event_pic'];
    }
    
$query = "INSERT INTO event (event_date,event_title,event_time,event_date2,event_month,event_pic) VALUES('$date','$title','$time','$date2','$mon','$imagename') ";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/admin.php?eventsetting=true';</script>";                    

    }

}

if(isset($_POST['update-about'])){
    //print_r($_FILES);
    //print_r($_POST);
    $desc = mysqli_real_escape_string($db,$_POST['desc']);
    $desc2 = mysqli_real_escape_string($db,$_POST['desc2']);
    $imagename = time().$_FILES['profile']['name'];
    $imgtemp = $_FILES['profile']['tmp_name'];

    if($imgtemp==''){
        $q = "SELECT * FROM aboutme WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['profile-pic'];
    }


    

    $query = "UPDATE about1 SET ";
    
    $query.="profile-pic='$imagename',";

    $query.="desc='$desc' WHERE id=1";
    $query.="desc2='$desc2' WHERE id=1";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?profilesetting=true';</script>";                    

    }






}
if(isset($_POST['update-about'])){
    
    $desc = $_POST['desc'];
    $desc2 = $_POST['desc2'];
        $query = "INSERT INTO about1 (desc,desc2) VALUES('$desc','$desc2') ";
        
        $run = mysqli_query($db,$query);
        if($run){
      echo "<script>window.location.href='../admin/index.php?profilesetting=true';</script>";                    
    
        }
    
    }
if(isset($_POST['update-account'])){
    // print_r($_FILES);
   
 
    $imagename = time().$_FILES['profilepic']['name'];
    $imgtemp = $_FILES['profilepic']['tmp_name'];
    

    

    if($imgtemp==''){

        $q = "SELECT * FROM aboutme WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['profile-pic'];
    }


    move_uploaded_file($imgtemp,"../assets/images/profile/$imagename");

    
    $query.="profile-pic='$imagename' WHERE id=1";

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?accountsetting=true';</script>";                    

    }






}








if(isset($_POST['update_about'])){
    
    $title = mysqli_real_escape_string($db,$_POST['title']);
    $subtitle = mysqli_real_escape_string($db,$_POST['subtitle']);
    
    $imagename = time().$_FILES['profile']['name'];
    
    if($imgtemp==''){
        $q = "SELECT * FROM aboutme WHERE 1";
        $r = mysqli_query($db,$q);
        $d = mysqli_fetch_array($r);
        $imagename = $d['profile-pic'];
    }


   

    $query = "UPDATE aboutme SET ";
    $query.="name='$title',";
    $query.="mydesc='$subtitle',";
    $query.="profile-pic='$imagename',";

    

    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?profilesetting=true';</script>";                    

    }






}
if(isset($_POST['add-pi'])){
    
    $type = $_POST['type'];
    $value = $_POST['value'];
        $query = "INSERT INTO personal_info (type,value) VALUES('$type','$value') ";
        
        $run = mysqli_query($db,$query);
        if($run){
      echo "<script>window.location.href='../admin/index.php?profilesetting=true';</script>";                    
    
        }
    
    }

if(isset($_POST['add-resume'])){
    
$type = $_POST['type'];
$title = $_POST['title'];
$date = $_POST['date'];
$desc = $_POST['desc'];
    $query = "INSERT INTO resume (type,title,date,description) VALUES('$type','$title','$date','$desc') ";
    
    $run = mysqli_query($db,$query);
    if($run){
  echo "<script>window.location.href='../admin/index.php?resumesetting=true';</script>";                    

    }

}



?>
