<?php

if(isset($_POST['add-teacher-btn'])){

    $fullName = $_POST['fullName'];
    $tc = $_POST['tc'];
    $email =  $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $university_no = $_POST['teacher_number'];
    $password = $_POST['password'];
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];
    $role = "ogretmen";
  
    include '../Backend/Teacher/add_new_teacher.php';
    include '../Backend/Teacher/add_new_teacher_contr.php';
  
    $add_teacher = new AddNewTeacherContr($fullName, $tc, $email, $phone_number, $university_no, $password, $faculty, $department, $role);
    $add_teacher->addTeacher();
  
    header('location: ../View/viewTeacher.php?add-teacher=success');
}