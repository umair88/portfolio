<?php

include("../admin/connection.php");

$id = "";
$fname="";
$lname ="";
$emailid ="";
$home_add ="";
$post ="";
$method ="";
$country ="";
$city ="";
$state ="";
$homephone ="";
$mobilephone ="";
$message ="";
$member ="";
$othermember ="";
$doubleroom ="";
$tripleroom ="";
$quadroom ="";
$insurance ="";
$passenger ="";
$pfirst ="";
$plast ="";
$dob ="";
$gender ="";


function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['lname'];
    $posts[3] = $_POST['emailid'];
    $posts[4] = $_POST['home_add'];
    $posts[5] = $_POST['post'];
    $posts[6] = $_POST['method'];
    $posts[7] = $_POST['country'];
    $posts[8] = $_POST['city'];
    $posts[9] = $_POST['state'];
    $posts[10] = $_POST['homephone'];
    $posts[11] = $_POST['mobilephone'];
    $posts[12] = $_POST['message'];
    $posts[13] = $_POST['member'];
    $posts[14] = $_POST['othermember'];
    $posts[15] = $_POST['doubleroom'];
    $posts[16] = $_POST['tripleroom'];
    $posts[17] = $_POST['quadroom'];
    $posts[18] = $_POST['insurance'];
    $posts[19] = $_POST['passenger'];
    for($i=1; $i <= $posts[19]; $i++ ){
    $posts[20] .= $_POST['pfirst'.$i].",";
    $posts[21] .= $_POST['plast'.$i].",";
    $posts[22] .= $_POST['dob'.$i].",";
    $posts[23] .= $_POST['gender'.$i].",";
    }
   


        return $posts;


}

//Insert

if(isset($_POST['insert']))
{
    $data = getPosts();
//    print_r($data);die();
    $insert_Query = "INSERT INTO `order_packages`(`fname`, `lname`, `emailid`, `home_add`, `post`, `method`, `country`, `city`, `state`, `homephone`, `mobilephone`, `message`, `member`, `othermember`, `doubleroom`, `tripleroom`, `quadroom`, `insurance`, `passenger`, `pfirst`, `plast`, `dob`, `gender`) VALUES ('$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]', '$data[11]', '$data[12]', '$data[13]', '$data[14]', '$data[15]', '$data[16]', '$data[17]', '$data[18]', '$data[19]', '$data[20]', '$data[21]', '$data[22]', '$data[23]')";

    try{
    $insert_Result = mysqli_query($conn, $insert_Query);
    
    if($insert_Result)
    {
        if(mysqli_affected_rows($conn) > 0)
        {
            echo '';
        } else {
            echo 'Data Not Inserted';
        }
    }
    } catch (Exception $ex) {
     
        echo 'Error Update '.$ex->getMessage();
    }
}


?>
    <?php include('header.php'); ?>
        <?php include('subheader.php'); ?>
            <html lang="en">

            <body>
                   <div class="container-fluid" style="padding-top:8%" width="80%">
           <form>
        <div class="contentform">
                <div class="form-group">
                    <p style="font-size: 26px">Thank you for submitting the order request. One of our team member will be in touch soon..
                    </p>
                    <p>Submit another request -> <a href="http://travel/order/index.php">Click Here...</a></p>
                    <p>Go back to home page -> <a href="http://travel/index.php">Click Here...</a></p>

                </div></div></form></div>
            </body>

            </html>