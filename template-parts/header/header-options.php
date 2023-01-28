<?php
/**
 * writerPro logo
 */
function writerPro_logo() {

        global $writerop;
        if($writerop['writer-header-logo-light']['url']!='') { ?>
            <a href="<?php echo get_site_url();?>">
                <img src="<?php echo $writerop['writer-header-logo-light']['url']; ?>"/>
            </a>
        <?php }
        else { ?>
             <a href="<?php echo get_site_url();?>">writerPro</a>
          <?php
        }
   }


/**
 * writerPro menu
 */

function writerPro_nav_menu() {
 ?>
    <div class="writerPro__toprnav">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'menu-1',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => 'acme_default_menu',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav m-auto %2$s">%3$s</ul>',
          'depth'           => 2,
          // 'walker'          => new b4st_walker_nav_menu()
        ) );
      ?>

    </div>
  <?php
}

/**
 * writerPro search option
 */
function writerPro_search_option(){

    global $writerop;

    if ( $writerop['writer_header_op']['1'] == '1'){  ?>
        <div class="header__search">
            <?php get_template_part('template-parts/search-form'); ?>
        </div> <?php
    }
}






/**
 * writerPro search option
 */

function writerPro_user_option(){
    global $writerop;
    if ( $writerop['writer_header_op']['2'] == '1'){ ?>
        <div class="header__profile ml-3">
            <a href="<?php echo wp_registration_url(); ?>">
             <span class="pri-link">
              <i class="far fa-user"></i>
             </span>
            </a>
        </div>
        <?php
    }
}















/**
 * header full width
 */

global $writerop;
echo $writerop['header-fluid-top'];





















