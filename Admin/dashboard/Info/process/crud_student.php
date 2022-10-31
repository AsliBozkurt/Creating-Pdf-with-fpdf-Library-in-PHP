<?php

if(isset($_POST['update_student_info'])){

    $student_id = $_POST['update_student_info'];
    $fullName = $_POST['fullName'];
    $tc = $_POST['tc'];
    $nationality = $_POST['nationality'];
    $tel = $_POST['tel'];
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $university = $_POST['university'];
    $faculty = $_POST['faculty'];
    $department = $_POST['department'];
    $grade = $_POST['grade'];
    $university_no = $_POST['university_no'];
    $address = $_POST['address'];
  
    require '../../Backend/Student/update_student.php';
    $update_student_info = new UpdateStudent($fullName, $tc, $nationality, $tel, $email, $password, $university, $faculty, $department, $grade, $university_no, $address, $student_id);
    header('Location: ../../View/viewStudent.php?update=success');
    exit();
}

if(isset($_POST['remove_student'])){

    $student_id = $_POST['remove_student'];
    require '../../Backend/Student/remove_student.php';
    $remove_student = new RemoveStudent($student_id);
    header('Location: ../../View/viewStudent.php?student-remove=success');
    exit();

}