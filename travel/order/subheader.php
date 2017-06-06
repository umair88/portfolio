    <!-- START #wrapper -->
    <div class="wrapper" id="wrapper">
        <header>
            <!-- START #main-header -->
            <div id="main-header">
                <style type="text/css">
                    navz li ul {
                        display: none;
                    }
                    
                    navz ul li ul li::before {
                        content: '-';
                        padding-right: 15px;
                        padding-left: 15px;
                    }
                    
                    .hasSubmenu {
                        content: "+";
                        position: absolute;
                        right: 8%;
                        color: #515151;
                    }
                    /* .active{ content: '-'!important; }*/
                </style>

                <script>
                    jQuery('navz ul li').click(function () {
                        jQuery(this).find('ul').toggle();
                        if (jQuery(this).find('span').hasClass('active')) {
                            jQuery(this).find('span').html('');
                            jQuery(this).find('span').removeClass('active');
                            jQuery(this).find('span').html('+');
                        }
                        else {
                            jQuery(this).find('span').html('');
                            jQuery(this).find('span').addClass('active');
                            jQuery(this).find('span').html('-');
                        }
                    });
                    jQuery()
                </script>

                <div style="position: absolute;z-index: 99999999999999999; float: left; width: 100%;background: white;">
                    <div class="container">
                        <div class="row navmobileFix">
                            <div class="col-md-3 ">
                                <style>

                                </style>
                                <!-- Logo -->
<!--                                <button class="js-menz menz" type="button"> <span class="bae"></span> </button>-->
                                <a href="index.html" class="logo"> <img src="wp-content/themes/travelhub/images/logo.png" alt="Travelhub Wordpress Theme"> </a>
                            </div>
                            <br>
  

                        </div>
                        <div class="col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm">
                            <div>
                                <div> <span class="contact-email small">
                            <a href ="mailto:info@travelhub.com">
                            info@travelhub.com
                            </a></span> </div>
                                <div style="text-align: left;"> <span class="contact-phone small">
                            <a href="tel:+1125496 0999">+1 125 496 0999</a>
                            </span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
</div>