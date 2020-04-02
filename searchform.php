
  <div class="top-right">
       <ul>
          <li><a id="search" href="#"><i class="fa fa-search"></i></a></li>
       </ul>
  </div>
  
 <div class="search-box">
   <span><i class="icon_close"></i></span>
   <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
     <label>
        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'iBlogger'); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'iBlogger'); ?>">
        <input type="submit" class="search-submit btn btn-default" value="<?php echo esc_attr_x( 'Search', 'submit button', 'iBlogger'); ?>">
     </label> 
   </form> 
</div>