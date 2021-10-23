<?php
/* Establish connection to db using mysql */
$con = mysqli_connect('localhost', 'root', '','new_db');
$errorMSG = '';


/* NAME */

if (empty($_POST['name'])) {

    $errorMSG = '<li>Name is required</<li>';

} else {

    $name = $_POST['name'];

}


/* EMAIL */

if (empty($_POST['email'])) {

    $errorMSG .= '<li>Email is required</li>';

} else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    $errorMSG .= '<li>Invalid email format</li>';

}else {

    $email = $_POST['email'];

}


/* PHONE NUMBER */

if (empty($_POST['phone'])) {

    $errorMSG .= '<li>Phone Number is required</li>';

} else {

    $phone = $_POST['phone'];

}


/* INDUSTRY */

if (empty($_POST['industry'])) {

    $errorMSG .= '<li>Industry is required</li>';

} else {

    $industry = $_POST['industry'];

}

/* No invalid or empty input */
if(empty($errorMSG)){

	$sql = "INSERT INTO `contacts` (`id`, `name`, `email`, `phoneNo`, `industry`) VALUES ('0', '$name', '$email', '$phone', '$industry')";
    $rs = mysqli_query($con, $sql);
    /* Query failed */
    if(!$rs){
        echo json_encode(['code'=>404, 'msg'=>"An error occured, please try again"]);
        exit;
    }
    /* Query successful */
	echo json_encode(['code'=>200, 'msg'=>$errorMSG]);
	exit;
}

/* Invalid or empty input */
echo json_encode(['code'=>404, 'msg'=>$errorMSG]);
exit;
?>