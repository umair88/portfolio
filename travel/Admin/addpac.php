<?php

include("connection.php");

$id = "";
$packagename="";
$packagedetails ='';
$makkahhotel ='';
$medinahotel ='';
$makkahstars ='';
$medinastars ='';
$transport ='';
$price ='';
$durationinmakkah ='';
$durationinmedina ='';
$breakfast ='';


function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['packagename'];
    $posts[2] = $_POST['packagedetails'];
    $posts[3] = $_POST['makkahhotel'];
    $posts[4] = $_POST['medinahotel'];
    $posts[5] = $_POST['makkahstars'];
    $posts[6] = $_POST['medinastars'];
    $posts[7] = $_POST['transport'];
    $posts[8] = $_POST['price'];
    $posts[9] = $_POST['durationinmakkah'];
    $posts[10] = $_POST['durationinmedina'];
    $posts[11] = $_POST['breakfast'];
    return $posts;
}

//Insert

if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `packages`(`packagename`, `packagedetails`, `makkahhotel`, `medinahotel`, `makkahstars`, `medinastars`, `transport`, `price`, `durationinmakkah`, `durationinmedina`, `breakfast`) VALUES ('$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]', '$data[11]')";

    try{
    $insert_Result = mysqli_query($conn, $insert_Query);
    
    if($insert_Result)
    {
        if(mysqli_affected_rows($conn) > 0)
        {
            echo 'Data Inserted';
        } else {
            echo 'Data Not Inserted';
        }
    }
    } catch (Exception $ex) {
     
        echo 'Error Update '.$ex->getMessage();
    }
}


?>
    <html>

    <head>
        <title>Add Packages</title>
        <!--    <link rel="stylesheet" type="text/css" href="css/styleadmin.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styleadmin.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> </head>

    <body>
        <div class="container">
            <h1>Add Packages</h1>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="addpac.php" role="tab">Add Packages</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="editpac.php" role="tab">Edit Packages</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="admin.php" role="tab">Admin Page</a> </li>
            </ul>
            <br>
            <br>
            <div class="container-fluid">
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="addpac.php" autocomplete="off">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Package Name </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="packagename" id="name" placeholder="" /> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Package Details</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="packagedetails" id="name" placeholder="" /> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Makkah Hotel</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="makkahhotel" id="name" placeholder="" /> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Medina Hotel</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="medinahotel" id="name" placeholder="" /> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Medina Hotel Stars</label>
                            </div>
                            <div class="col-md-2">
                                <select name="medinastars">
                                    <option value="default">Select Ratings</option>
                                    <option value="img/1star.png">1 Star</option>
                                    <option value="img/2star.png">2 Stars</option>
                                    <option value="img/3star.png">3 Stars</option>
                                    <option value="4img/4star.png">4 Stars</option>
                                    <option value="img/5star.png">5 Stars</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Makkah Hotel Stars</label>
                            </div>
                            <div class="col-md-2">
                                <select name="makkahstars">
                                    <option value="default">Select Ratings</option>
                                    <option value="img/1star.png">1 Star</option>
                                    <option value="img/2star.png">2 Stars</option>
                                    <option value="img/3star.png">3 Stars</option>
                                    <option value="4img/4star.png">4 Stars</option>
                                    <option value="img/5star.png">5 Stars</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Transport Details</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="transport" id="name" placeholder="" /> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Hotel Price</label>
                            </div>
                            <div class="col-md-2">
                                <select name="price">
                                    <option value="default">Select Price</option>
                                    <option value="Single Price">Single Price</option>
                                    <option value="Double Price">Double Price</option>
                                    <option value="Triple Price">Triple Price</option>
                                    <option value="Quad Price">Quad Price</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Duration in Makkah</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="durationinmakkah" id="name" placeholder="" /> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Duration in Medina</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="durationinmedina" id="name" placeholder="" /> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Breakfast</label>
                            </div>
                            <div class="col-md-2">
                                <select name="breakfast">
                                    <option value="default">Select Breakfast</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3 col-md-offset-2">
                                <input class="btn btn-primary" type="submit" name="insert" value="Submit" /> </div>
                        </div>
                        <br>
                        <!--
                        
                    <div class="row"><div class="submit col-md-6">
                        <input type="submit" name="insert" value="Submit" /></div></div>
-->
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>