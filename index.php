<?php get_header();?>
<body>
 <div class="head">
         <!-- START header PHP variables -->
         <?php $logo_image = get_theme_mod('logo_image'); ?>
            <!-- END header PHP variables -->
            <div id="logo-container">
                <img id="logo" src="<?php echo $logo_image; ?>">
            </div>
            <div id="about-us-2">
            <p>OUR JOURNEY</p>
            </div>
            <div id="about-us-1">
            <p>ABOUT</p>
            </div>
</div>



  <div  id="contant">

        <div class="section-1">
            <!-- START Section 1 PHP variables -->
            <?php $section_1_image = get_theme_mod('section_1_image'); ?>
            <?php $section_1_heading = get_theme_mod('section_1_heading'); ?>
            <?php $section_1_description = get_theme_mod('section_1_description'); ?>
            <?php $appstore_download_link = get_theme_mod('appstore_download_link');?>
            <?php $googleplay_download_link = get_theme_mod('googleplay_download_link');?>
            <!-- END Section 1 PHP variables -->
            <div id="text-container-1-mobile">
                <div class="title-1">
                    <h1><?php echo $section_1_heading; ?></h1>
                    <hr class="title-rule">
                </div>
                <div class="paragraph-container">
                    <h2><?php echo $section_1_description; ?></h2>
                </div>
                <div class="download-links-container">
                    <div class="app-store-link">
                        <a href="<?php echo $appstore_download_link; ?>">
                            <img src="img/AppStore.png" alt=""/>
                        </a>
                    </div>
                    <div class="google-play-link">
                        <a href="<?php echo $googleplay_download_link; ?>">
                             <img src="img/googleapp.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="phone-img-container">
                    <img src="<?php echo $section_1_image; ?>" class="phone-img"/>
                </div>

             <div id="text-container-1-desktop">
                <div class="title-1">
                    <h1><?php echo $section_1_heading; ?></h1>
                    <hr class="title-rule">
                </div>
                <div class="paragraph-container">
                    <h2><?php echo $section_1_description; ?></h2>
                </div>
                <div class="download-links-container">
                    <div class="app-store-link">
                        <a href="<?php echo $appstore_download_link; ?>">
                            <img src="img/AppStore.png" alt=""/>
                        </a>
                    </div>
                    <div class="google-play-link">
                        <a href="<?php echo $googleplay_download_link; ?>">
                             <img src="img/googleapp.png" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="section-2">

            <!-- START Section 2 PHP variables -->
            <?php $section_2_image = get_theme_mod('section_2_image');?>
            <?php $section_2_heading = get_theme_mod('section_2_heading');?>
            <?php $section_2_description = get_theme_mod('section_2_description');?>

            <!-- END Section 2 PHP variables -->
            <div class="text-container-2">
                <div id="title-2">
                    <h1><?php echo $section_2_heading; ?></h1>
                    <hr class="title-rule">
                </div>
                <div class="paragraph-container">
                    <h2><?php echo $section_2_description; ?>
                    <h2>
                </div>
            </div>
            <div class="phone-img-container-2">
                    <img src="<?php echo $section_2_image; ?>" class="phone-img">
                </div>
        </div>

        <div class="section-3">
            <!-- START Section 3 PHP variables -->
            <?php $section_3_heading = get_theme_mod('section_3_heading');?>
            <?php $section_3_description = get_theme_mod('section_3_description');?>
            <?php $section_3_block_1_title=get_theme_mod('section_3_block_1_title');?>
            <?php $section_3_block_1_description=get_theme_mod('section_3_block_1_description');?>

            <!-- END Section 3 PHP variables -->
            <div id="text-container-3">
                <div id="title-3">
                    <h1><?php echo $section_3_heading; ?></h1>
                    <hr class="title-rule">
                </div>
                <div class="paragraph-container">
                    <h2>
                    <?php echo $section_3_description; ?>
                    </h2>
                </div>

            </div>
            <div id="improve-ways">
                <div class="ways-block">
                    <div class="block-number">
                        <h3>1</h3>
                    </div>
                    <hr class="block-title-rule" style="background-color:orangered">
                    <div class="block-title">
                        <h4><?php echo $section_3_block_1_title; ?></h4>
                     </div>
                     <div class="block-discription">
                         <h5>
                             <?php echo $section_3_block_1_description; ?>
                         </h5>
                     </div>
                 </div>             
            </div>

        </div>

        <div class="section-4">
            <!-- START Section 4 PHP variables -->
            <?php $section_4_heading = get_theme_mod('section_4_heading');?>
            <?php $section_4_description = get_theme_mod('section_4_description');?>
            <!-- END Section 4 PHP variables -->
            <div id="text-container-4">
                <div id="title-4">
                    <h1>
                        <?php echo $section_4_heading; ?>
                    </h1>
                    <hr class="title-rule">
                </div>
                <div class="paragraph-container">
                    <h2>
                    <?php echo $section_4_description; ?>
                    </h2>
                </div>
            </div>
            <div id="video-container">
                <div id="video">

                </div>
            </div>
        </div>

        <div class="section-5">

            <!-- START Section 5 PHP variables -->
             <?php $section_5_heading = get_theme_mod('section_5_heading');?>
            <?php $section_5_description = get_theme_mod('section_5_description');?>
            <!-- END Section 5 PHP variables -->

            <div id="title-5-desktop">
                <h1><?php echo $section_5_heading; ?></h1>
                <hr class="title-rule-center">
            </div>
            <div id="paragraph-container-5-desktop">
                <h2>
                <?php echo $section_5_description; ?>
                </h2>
            </div>
            <div class="download-links-container" style="margin:0 auto;">
                    <div class="app-store-link">
                        <a href="<?php echo $appstore_download_link; ?>">
                            <img src="img/AppStore.png" alt=""/>
                        </a>
                    </div>
                    <div class="google-play-link">
                        <a href="<?php echo $googleplay_download_link; ?>">
                             <img src="img/googleapp.png" alt=""/>
                        </a>
                    </div>
                </div>
        </div>

        <div class="contact">

        <!-- START contact PHP variables -->
        <?php $contact_heading = get_theme_mod('contact_heading');?>
        <?php $contact_description = get_theme_mod('contact_description');?>
        <?php $contact_option_1 = get_theme_mod('contact_option_1');?>
        <?php $contact_option_2 = get_theme_mod('contact_option_2');?>
        <?php $contact_option_3 = get_theme_mod('contact_option_3');?>

        <!-- END contact PHP variables -->
            <div id="title-contact">
                <h1>
                    <?php echo $contact_heading; ?>
                </h1>
                <hr class="title-rule">
            </div>
            <div class="paragraph-container">
                <h2>
                  <?php echo $contact_description; ?>
                </h2>
            </div>

            <form name="contact-form" method="get">
                <h6><?php echo $contact_option_1; ?></h6>
                <input type="text" name="name" class="input-box">
                <h6><?php echo $contact_option_2; ?></h6>
                <input type="text" name="organization" class="input-box">
                <h6><?php echo $contact_option_3; ?></h6>
                <input type="email" name="email" class="input-box">
                <input type="submit" name="submit" class="submit-button" value="Send">

            </form>

        </div>
    </div>
     <div class="footer">
                <div id="footer-left">
                        <h3 id="footer-left-title">Made by</h3>
                        <div id="footer-left-text">
                            <h1 id="footer-left-acorn">ACORN</h1>
                            <h3 id="footer-left-slogan">Redefining the future of healthcare</h3>
                        </div>
                        <img id="acron-logo" src="img/acorn-logo.jpg">
                    </div>
                    <div id="footer-right">
                        <h6>Terms & conditions &nbsp;@&nbsp;2017</h6>
                    </div>
</div>

    </body>
</html>