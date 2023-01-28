     <span class="pri-link" title="search" data-toggle="modal" data-target="#searchModel">
         <i class="fas fa-search"></i>
     </span> 


     <!-- Modal -->
     <div class="modal fade bg-light" id="searchModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">


        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>


  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">  

          <form class="search-from" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>"> 

               <input type="search" class="search-field form-control p-3" 
                      placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'iBlogger'); ?>" 
                      value="<?php echo esc_attr( get_search_query() ); ?>"
                      name="s" title="<?php _ex( 'Search for:', 'label', 'iBlogger'); ?>">

                <input type="submit" class="search-submit btn btn-default"
               value="<?php echo esc_attr_x( 'Search', 'submit button', 'iBlogger'); ?>">  
      </form> 


            </div>
         </div>
     </div>
