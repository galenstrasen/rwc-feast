<?php
/*
Template Name: Feast Page 2018
*/
?>



<!-- Kill Grid/Container/etc. -->
</div>
</div>
<!-- End Kill -->


<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->


<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/css/feast_2018.css" media="all">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_url')?>/assets/js/main.js"></script>
<script src="<?php bloginfo('template_url')?>/assets/js/jquery.bxslider/jquery.bxslider.min.js"></script>
<link href="<?php bloginfo('template_url')?>/assets/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />


<script type="text/javascript">
    $(document).ready(function(){ var j = jQuery.noConflict();

        $('.testimonial_slider').bxSlider({
            auto:true,
            speed: 2000,
            pause:6000,
            mode:'fade'
        });

        $('.testimonial_slider_new').bxSlider({
            auto:true,
            speed: 500,
            pause:6000,
            mode:'fade',
            pager:true

        });

    });
</script>
<div class="header2">
    <div class="holder clearfix">
        <div class="logo">
            <a class="sol return-link" href="http://rachelwcole.com"><img src="<?php bloginfo('template_url')?>/assets/img/icon_arrow.png" alt=""> Return to rachelwcole.com</a>
        </div>

    </div>
</div>
<div class="main">
    <section class="section-wc">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="return-btn">

                    </div>
                </div>
                <div class="col-sm-8">
                    <!--  Hold Grid -->
                </div>
            </div>
        </div>
        <div class="welcome">
            <img class="img-responsive-wc" src="<?php bloginfo('template_url')?>/assets/img/image_feast.png" alt="">
            <h2>Your <i>Self-Guided</i> Journey to <br>Becoming a Well-fed Woman</h2>
            <p>from Rachel W. Cole</p>
        </div>
    </section>
    <!--  Add navbar-fixed-top on scroll to make nav sticky-->
    <nav class="hide navbar navbar-default navbar-color" id="menu" data-spy="affix" data-offset-top="600" data-offset-bottom="65">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#center-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url')?>/assets/img/image_logo-sm.png" style="height:30px;" alt=""></a>
            </div>

            <div class="collapse navbar-collapse" id="center-nav">
                <ul class="nav navbar-nav">
                    <li><a href="#theprogram">THE PROGRAM</a></li>
                    <li><a href="#about">ABOUT RACHEL</a></li>
                    <li><a href="#Schedule">SCHEDULE</a></li>
                    <li><a href="#incl">WHAT'S INCLUDED</a></li>

                    <li><a href="#invest">INVESTMENT</a></li>
                    <li class="hide"><a href="#praise">PRAISE</a></li>
                    <li><a href="#faqsection">FAQs</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right nav-apply">
                    <li><a class="nav-btn btn-colored fancybox-inline" href="#signup-box-popup" >Get Notified</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div id="signup-box-popup-holder">
        <div id="signup-box-popup">
            <div id="newsletter_signup">
                <?php gravity_form( 1, false, true, false, '', true );?>
            </div>
        </div>
    </div>


    <section class="section1">
        <div class="container-fluid container-sm">
            <div class="row">
                <div class="col-md-12">
                    <div class="pinkbox">
                        <h2><?php the_field('feast_2018_header_text')?></h2>
                        <h4><?php the_field('feast_2018_header_sub_text')?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section2">
        <div class="container-fluid container-sm">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('feast_2018_header_text_section2')?></h2>
                    <h4><i><?php the_field('feast_2018_single_text_section2')?></i></h4>
                    <h4><?php the_field('feast_2018_sub_text_section2')?></h4>
                </div>
            </div>
        </div>
    </section>


    <section class="section3">
        <div class="container-fluid container-sm">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="col-lg-6" style="visibility: hidden; border: 1px solid #545353;">

                            </th>
                            <th class="col-lg-3" style=" padding: 15px; text-align: center; background-color: rgb(246,111,93); border: 1px solid #545353; font-family: 'proxima-nova', sans-serif; font-size: 12px">
                                GROUP INTENSIVE
                            </th>
                            <th class="col-lg-3" style=" padding: 15px; text-align: center; background-color: rgb(172,192,223); border: 1px solid #545353; font-family: 'proxima-nova', sans-serif; font-size: 12px">
                                SELF-STUDY
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                10 weeks of guided meditations, powerful written and audio digital lessons, and worksheets.
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(252,232,228); ">
                                x
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(228,235,245);">
                                x
                            </td>
                        </tr>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                Resource library of expert interviews
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(252,232,228); ">
                                x
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(228,235,245);">
                                x
                            </td>
                        </tr>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                Printed Feast workbook
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(252,232,228); ">
                                x
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(228,235,245);">
                                x
                            </td>
                        </tr>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                Limited edition Feast necklace
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(252,232,228); ">
                                x
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(228,235,245);">
                                
                            </td>
                        </tr>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                Access to Intuitive Eating nutritionist Tracy Brown
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(252,232,228); ">
                                x
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(228,235,245);">
                                
                            </td>
                        </tr>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                Optional buddy pairing
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(252,232,228); ">
                                x
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(228,235,245);">
                                
                            </td>
                        </tr>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                Weekly live calls with Rachel
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(252,232,228); ">
                                x
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(228,235,245);">
                                
                            </td>
                        </tr>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                Active private Facebook group for daily support
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(252,232,228); ">
                                x
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(228,235,245);">
                                
                            </td>
                        </tr>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                Access to the Feast alumni group at the end of the program and ongoing monthly support calls
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(252,232,228); ">
                                x
                            </td>
                            <td style=" text-align:center; vertical-align:middle; background-color: rgb(228,235,245);">
                                
                            </td>
                        </tr>
                        <tr style="text-align: center">
                            <td class="tableCol1">
                                Cost
                            </td>
                            <td class="tableCol1" style="padding: 16px; text-align: center">
                                $1500-$2000
                            </td>
                            <td class="tableCol1" style="padding: 16px;  text-align: center">
                                $399
                            </td>
                        </tr>
                        </tbody>
                    </table>                </div>
            </div>
        </div>
    </section>




    <section class="section4">
        <div class="container-fluid container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php the_field('feast_2018_text_section4')?></h2>
                </div>

                <div class="col-lg-2">
                </div>
                <div class="col-lg-4">

                    <div style="  margin: 0 auto; text-align: center; margin-bottom: 25px ">
                        <br>
                        <h4>PAY IN FULL <br>($399)</h4><br>
                        <a class="nav-btn btn-colored" href="<?php the_field('feast_2018_button_link_section4')?>" ><?php the_field('feast_2018_button_text_section4')?></a>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div style="  margin: 0 auto; text-align: center; ">
                        <br>
                        <h4>PAY IN 4 INSTALLMENTS <br>OF $110</h4><br>
                        <a class="nav-btn btn-colored" href="<?php the_field('feast_2018_button_text_section4_installment_URL')?>" ><?php the_field('feast_2018_button_text_section4')?></a>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>

        </div>
    </section>


    <section class="section5" id="faq">
        <div class="container-fluid">
            <div class="sec14-h-wrap">
                <h3 class="sec14-h"><?php the_field('section_5_header_feast_2018')?></h3>
            </div>
            <div class="row">

                <?php $counter1 = 0 ?>
                <ul id="faqlist">
                    <?php while(have_rows('section_5_faqs_feast_2018')):the_row();?>
                        <li class="faq">
                            <h3 class="subtitle collapsed" data-toggle="collapse" data-target="#<?php echo $counter1?>" aria-expanded="false" >
                                <span class="plus"></span> <?php the_sub_field('question')?>
                            </h3>
                            <div class="collapse" id="<?php echo $counter1?>">
                                <?php the_sub_field('answer')?>
                            </div>
                        </li>
                        <?php $counter1++ ?>
                    <?php endwhile;?>
                </ul>
            </div>
        </div>
    </section>


    <section class="section6">
        <div class="container-fluid container-sm">
            <div class="row">
                <div class="col-lg-12">
                    <h4>To be notified when the next <i>Feast</i> group intensive<br> opens for new applicants sign up here.</h4>
                </div>


                <div style="width:12%; margin: 0 auto; text-align: center">

                    <ul class="nav navbar-nav navbar-right nav-apply">
                        <li><a class="nav-btn btn-colored fancybox-inline" href="#signup-box-popup" >Sign Up</a></li>
                    </ul>

                </div>

                <div class="col-md-12">

                    <h3>I LOOK FORWARD TO FEASTING WITH YOU.</h3>

                </div>


                <img class="signature" src="<?php bloginfo('template_url')?>/assets/img/image_signature.png" alt="Rachel's Signature" />
            </div>

        </div>
    </section>

    <section class="section15 section agp">
        <div class="container-fluid container-sm ta-center">
            <?php the_field('section_16')?>
        </div>
        <div class="container">
            <hr>
        </div>
        <footer>
            <div class="container">
                <div class="row" style="margin-bottom: 20px;border-top: 1px solid #cdc6c2;">
                    <div class="col-md-4">
                        <div class="vertical">
                            <a class="sol return-link" href="http://rachelwcole.com"><img src="<?php bloginfo('template_url')?>/assets/img/icon_arrow.png" alt=""> Return to rachelwcole.com</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="vertical footer-halign">
                            <img src="<?php bloginfo('template_url')?>/assets/img/image_feast-footer.png" alt="Feast Footer Logo">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="vertical footer-halign">
                            <ul class="footer-social">
                                <li><a href="https://www.facebook.com/feedyourlife" target="_blank"><img src="<?php bloginfo('template_url')?>/assets/img/icon_social-facebook.png" alt=""></a></li>
                                <li><a href="https://twitter.com/rachelwcole" target="_blank"><img src="<?php bloginfo('template_url')?>/assets/img/icon_social-twitter.png" alt=""></a></li>
                                <li><a href="http://pinterest.com/rachelwcole/" target="_blank"><img src="<?php bloginfo('template_url')?>/assets/img/icon_social-pinterest.png" alt=""></a></li>
                                <li><a href="http://instagram.com/rachelwcole" target="_blank"><img src="<?php bloginfo('template_url')?>/assets/img/icon_social-instagram.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>



</div>

</body>
</html>