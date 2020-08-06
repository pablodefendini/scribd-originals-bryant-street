<div class="bookshelf">
  <ul>
    <li class="book">
      <figure>
        <a href="<?php block_field( 'link' ); ?>"><img src="<?php block_field( 'cover' ); ?>"/></a>
      </figure>
      <h1><a href="<?php block_field( 'link' ); ?>"><?php block_field( 'title' ); ?></a></h1>
      <p><?php block_field( 'byline' ); ?></p>
      <p><?php block_field( 'description' ); ?></p>
      <div class="bookshelf-links">
        <a href="<?php block_field( 'read-link' ); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/scribd-originals-bryant-street/library/images/icon-book.svg" id=icon-book alt="Read Now" ></a>
        <a href="<?php block_field( 'audio-link' ); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/scribd-originals-bryant-street/library/images/icon-audio.svg" id=icon-audio alt="Listen Now" ></a>
      </div>
    </li>
  </ul>
</div>
