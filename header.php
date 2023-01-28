

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WriterPro
 */

global $writerop;
get_template_part("/template-parts/header/header-options");
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'writerpro' ); ?></a>

<header id="masthead" class="site-header">

    <div class="writerPro_header h-type-normal">
          <div class="container">
              <div class="row">
                  <div class="col-md-3">
                      <div class="site-branding">
                          <?php writerPro_logo();
                          ?>
                      </div>
                  </div>
                  <div class="col-md-6 align-items-center text-center m-auto">
                      <?php writerPro_nav_menu(); ?>
                  </div>
                  <div class="col-md-3 m-auto">
                      <div class="header-assets d-flex justify-content-end align-items-center">
                       <?php writerPro_search_option();
                        writerPro_user_option();
                      ?>
                      </div>
                  </div>
              </div>
         </div>
    </div>
    <!-- header-type-normal-->

    <div class="writerPro_header h-type-logo-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mb-3">
                        <div class="site-branding">
                                <?php writerPro_logo(); ?>
                        </div>
                    </div>
                    <div class="col-md-6 text-left">
                        <?php writerPro_nav_menu(); ?>
                    </div>
                    <div class="col-md-6 header-assets d-flex justify-content-end text-right">
                            <?php writerPro_search_option();
                                  writerPro_user_option();
                            ?>
                    </div>
                </div>
            </div>
    </div>
    <!-- header-type-normal-->

    <!-- mobile header -->
    <div class="writerPro_header-mobile">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <div class="site-branding">
                        <?php writerPro_logo(); ?>
                </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#writer_mobile_collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="writer_mobile_collapse">

                    <?php writerPro_nav_menu(); ?>
                    <form class="d-flex">

                        <?php writerPro_search_option();
                        writerPro_user_option();
                        ?>
                    </form>
                </div>
            </div>
        </nav>



    </div>

    <!--  mobile header -->


    <?php

    if ($writerop['header-layout-option-1'] == "1" ){
        echo '<style>.h-type-normal{display: block;}</style>';
    }
    elseif ($writerop['header-layout-option-1'] == "2"){
        echo '<style>.h-type-logo-center{display: block;}</style>';
    }
//    elseif ($writerop['header-layout-option-1'] == "3"){
//        echo "3";
//    }
//    elseif ($writerop['header-layout-option-1'] == "4"){
//        echo "4";
//    }
    else{
        echo "defult!";
    }

//    header width
    if ( $writerop['header-fluid-top'] == "1" ){ ?>
    <script>
        // var siteHeader = document.querySelector('#masthead .container');
        // siteHeader.classList.add('newClass');
        var siteHeader, i;
        siteHeader = document.querySelectorAll(".writerPro_header .container");
        for (i = 0; i < siteHeader.length; i++) {
            siteHeader[i].classList.replace('container','container-fluid');
        }
    </script>
<?php
}
?>



</header><!-- #masthead -->


<?php







































    function console_log($output, $with_script_tags = true) {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
            ');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    } ?>




    <?= console_log($writerop); ?>





















    <style>
        body{
            font-size: <?php  echo $writerop['writer__body_typo']['font-size'] ?>;
            line-height: <?php  echo $writerop['writer__body_typo']['line-height'] ?>;
            font-weight: <?php  echo $writerop['writer__body_typo']['font-weight'] ?>;
            font-family: "<?php  echo $writerop['writer__body_typo']['font-family'] ?>", sans-serif;
            color: <?php  echo $writerop['writer__body_typo']['color'] ?>;
        }
    </style>
