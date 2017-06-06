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

//Search

if(isset($_POST['search']))
{
    $data = getPosts();
    $search_Query = "SELECT * FROM packages WHERE id = $data[0]";
    $search_Result = mysqli_query($conn, $search_Query);
    
    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $id = $row['id'];
                $packagename = $row['packagename'];
                $packagedetails = $row['packagedetails'];
                $makkahhotel = $row['makkahhotel'];
                $medinahotel = $row['medinahotel'];
                $makkahstars = $row['makkahstars'];
                $medinastars = $row['medinastars'];
                $transport = $row['transport'];
                $price = $row['price'];
                $durationinmakkah = $row['durationinmakkah'];
                $durationinmedina = $row['durationinmedina'];
                $breakfast = $row['breakfast'];
            }
        } else {
            echo 'No Data';
        }
    }else {
        echo 'Result Error';
    }
}


//Update

if(isset($_POST['update']))
{
    $data = getPosts();
    $update_Query = "UPDATE `packages` SET `packagename`='$data[1]',`packagedetails`='$data[2]',`makkahhotel`='$data[3]',`medinahotel`='$data[4]',`makkahstars`='$data[5]',`medinastars`='$data[6]',`transport`='$data[7]',`price`='$data[8]',`durationinmakkah`='$data[9]',`durationinmedina`='$data[10]',`breakfast`='$data[11]' WHERE `id` ='$data[0]'";
    try{
    $update_Result = mysqli_query($conn, $update_Query);
    
    if($update_Result)
    {
        if(mysqli_affected_rows($conn) > 0)
        {
            echo 'Data Updated';
        } else {
            echo 'Data Not Updated';
        }
    }
    } catch (Exception $ex) {
     
        echo 'Error Update '.$ex->getMessage();
    }
}


//Delete

if(isset($_POST['delete']))
{
    $data = getPosts();
    $delete_Query = "DELETE FROM `packages` WHERE `id` ='$data[0]'";
    try{
    $delete_Result = mysqli_query($conn, $delete_Query);
    
    if($delete_Result)
    {
        if(mysqli_affected_rows($conn) > 0)
        {
            echo 'Data Deleted';
        } else {
            echo 'Data Not Deleted';
        }
    }
    } catch (Exception $ex) {
     
        echo 'Error Update '.$ex->getMessage();
    }
}




?>
    <html>

    <head>
        <title>Edit Page</title>
        <!--    <link rel="stylesheet" type="text/css" href="css/styleadmin.css">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/styleadmin.css"> 
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"></head>

    <body>
        <div class="container">
            <h1>Edit Packages</h1>
            <ul class="nav nav-tabs tabs-3 red" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="addpac.php" role="tab">Add Packages</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="editpac.php" role="tab">Edit Packages</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="admin.php" role="tab">Admin Page</a> </li>
            </ul>
            <br>
            <br>
            <div class="container-fluid">
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="editpac.php">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Package ID </label>
                            </div>
                            <div class="col-md-2">
                                <input type="number" name="id" placeholder="" value="<?php echo $id;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Package Name </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="packagename" placeholder="" value="<?php echo $packagename;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Package Details </label>
                            </div>
                            <div class="col-md-2">
                            <input type="text" name="packagedetails" placeholder="" value="<?php echo $packagedetails;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Hotels In Makkah </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="makkahhotel" placeholder="" value="<?php echo $makkahhotel;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Hotels In Medina</label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="medinahotel" placeholder="" value="<?php echo $medinahotel;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Makkah Stars </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="makkahstars" placeholder="" value="<?php echo $makkahstars;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Medina Stars </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="medinastars" placeholder="" value="<?php echo $medinastars;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Transport </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="transport" placeholder="" value="<?php echo 
$transport;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Price </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="price" placeholder="" value="<?php echo $price;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Duration In Makkah </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="durationinmakkah" placeholder="" value="<?php echo $durationinmakkah;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Duration In Medina </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="durationinmedina" placeholder="" value="<?php echo $durationinmedina;?>"> </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Breakfast </label>
                            </div>
                            <div class="col-md-2">
                                <input type="text" name="breakfast" placeholder="" value="<?php echo $breakfast;?>"> </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-3">
                                    <input class="btn btn-primary" type="submit" name="update" value="Update">
                                </div>
                            
                            
                                    <div class="col-md-3 col-md-offset-2">
                                        <input class="btn btn-primary" type="submit" name="delete" value="Delete"> </div>
                                
                                
                                        <div class="col-md-2 col-md-offset-2">
                                            <input class="btn btn-primary" type="submit" name="search" value="Find"> </div>
                                    </div>
                                    <br><br>
                                </div>
                            
                    </form>
                    </div>
                </div>
            </div>
    </body>

    </html>