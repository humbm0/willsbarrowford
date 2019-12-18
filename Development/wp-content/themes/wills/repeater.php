<div class="conatiner-fluid spacing-xl white-bckgd" id="menu">
  <div class="container">
    <div class="row">
      <div class="col-md-12 spacing-s">
        <h5>Our menu</h5>
        <h2>Grab a bite</h2>
      </div>
      <?php
      // check for rows (parent repeater)
      if( have_rows('menu') ): ?>
      	<div>
      	<?php

      	// loop through rows (parent repeater)
      	while( have_rows('menu') ): the_row(); ?>
      		<div class="col-md-4 menu-col">
      			<h4><?php the_sub_field('group_heading'); ?></h4>
      			<?php

      			// check for rows (sub repeater)
      			if( have_rows('menu_group') ): ?>
      				<ul>
      				<?php

      				// loop through rows (sub repeater)
      				while( have_rows('menu_group') ): the_row();

      					// display each item as a list - with a class of completed ( if completed )
      					?>
      					<li <?php if( get_sub_field('menu_item') ){ echo 'class="completed"'; } ?>><?php the_sub_field('menu_item'); ?></li>
      				<?php endwhile; ?>
      				</ul>
      			<?php endif; //if( get_sub_field('items') ): ?>
      		</div>

      	<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
      	</div>
      <?php endif; // if( get_field('to-do_lists') ): ?>
    </div>
  </div>
</div>
