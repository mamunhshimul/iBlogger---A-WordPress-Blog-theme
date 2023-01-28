<?php
global $writerop;

if ($writerop['writer_preloader']  == '1') { ?>
    <div class="writer-preloader active">
        <?php
        if ($writerop['writer_custom_preloader']['url']  != '') { ?>

            <div class="custom-preloader">
                <img src="<?php echo $writerop['writer_custom_preloader']['url']; ?>" />
            </div>
            
        <?php
        } else { ?>
            <div class="writer-loadingMsg"> Please wait... </div>
            <div class="writer-loading">
                <div class="writer-loading-in"></div>
            </div> <?php

                } ?>

    </div>
<?php }
