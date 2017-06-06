<?php include('header.php'); ?>
    <?php include('admin/connection.php'); ?>

        <body class="archive tax-destinations term-alabama term-33 wpb-js-composer js-comp-ver-4.6.2 vc_responsive">
            <?php include('subheader.php'); ?>
                <!-- START #wrapper -->
                <!-- START #page-header -->
                <div class="header-banner" style="background-image:url(/wp-content/uploads/2015/08/slider1-min.jpg);">
                    <div class="banner-overlay">
                        <div class="container">
                            <div class="row" id="pacbanner">
                                <div class="col-sm-6">
                                    <h1 class="text-upper" style="color:white !important">Ummrah: All Packages</h1> </div>
                                <!-- breadcrumbs -->
                                <div class="col-sm-6">
                                    <ol class="breadcrumb">
                                        <li class="home"><a href="" style="color:white !important">Home</a></li>
                                        <li class="home"><a href="" style="color:white !important">Ummrah</a></li>
                                        <li class="home"><a href="" style="color:white !important">All Packages</a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END #page-header -->
                <style>
                    .img-responsive {
                        height: 100%;
                        width: 100%;
                    }
                    
                    header {
                        border-bottom: none;
                    }
                </style>
                <!-- main content -->
                <main id="main" class="main-contents">
                    <div class="container">
                        <div class="row">
                            <!-- Left Sidebar -->
                            <div class="col-md-12 main-content">
                                <div class=" exc-media-list">
                                    <?php 

$result=mysqli_query($conn, "select * from packages");
while($row=mysqli_fetch_array($result))
{
?>
                                        <div class="col-md-3 mason-item pkgBox">
                                            <div class="ft-item">
                                                <div class="ft-data">
                                                    <a class="text-upper" href="#">
                                                        <?php echo $row["packagename"]; ?>
                                                    </a>
                                                </div> <span class="ft-image">

                                  <a href="">
                                      <img src="wp-content/uploads/2015/08/3-min-650x350.jpg" alt="Morbi interdum elit sed nunc interdum feugiat" class="img-responsive">
                                  </a>
                                                          </span>
                                                <div class="ft-data">
                                                    <a class="text-upper" href="#" style="    font-size: 15px;">
                                                        <?php echo $row["price"]; ?>
                                                    </a>
                                                </div>
                                                <div class="ft-foot" style="width: 100%">
                                                    <h4 class="ft-title text-center rating" style="width: 100%"><a href="#">
                                                          
                                                         <img src="<?php echo $row["makkahstars"]; ?>">
                                                              </a></h4> </div>
                                                <div class="ft-foot">
                                                    <h4 class="ft-title text-upper"><a href="#">Madina Nights</a></h4> <span class="ft-offer text-upper">1</span> </div>
                                                <div class="ft-foot">
                                                    <h4 class="ft-title text-upper"><a href="#">Total Days</a></h4> <span class="ft-offer text-upper">3 Days/2 Nights</span> </div>
                                                <div class="ft-foot btnfix" style="border:none;">
                                                    <input type="button" name="" class="btnPack" value="Book Package" onclick="location.href = 'order/order_1.html';">
                                                    </div>
<!--                                                <div class="ft-foot text-center" style="color: #9e9e9e;border:none; font-size: 13px"> Call us <a href="tel:090078601"> +1 125 496 0999 </a></div>-->
                                            </div>
                                        </div>
                                        <?php

}
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php include('footer.php')?>