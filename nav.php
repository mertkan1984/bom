<nav class="navbar navbar-expand-lg">
   <div class="container-xl">
      <div class="collapse navbar-collapse justify-content-center centered-nav">
        
         <ul class="navbar-nav mr-auto">
			<?php 
			foreach(wp_get_nav_menu_items('primary') as $menu):
			?>
			<li class="nav-item">
		       <a class="nav-link" href="<?php echo $menu->url; ?>"><?php echo $menu->title ?></a>
		    </li>
			<?php 
			endforeach;
			?>
   		</ul>
      </div>
   </div>
</nav> 