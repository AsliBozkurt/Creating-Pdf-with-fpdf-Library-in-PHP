<?php

if(isset($_POST['add-admin-btn'])){

    $fullName = $_POST['fullName'];
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $type = 'normal_admin';
  
    include '../Backend/Admin/add_new_admin.php';
    include '../Backend/Admin/add_new_admin_contr.php';
  
    $addAdmin = new AddNewAdminContr($fullName, $email, $password, $type);
    $addAdmin->addNewAdmin();
  
    header('location: ../View/viewAdmin.php?add-admin=success');
}