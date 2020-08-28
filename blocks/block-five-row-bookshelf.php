<div class="bookshelf">
  <ul>
    <li class="book">
      <figure>
        <a href="<?php block_field( 'book-1-link' ); ?>"><img src="<?php block_field( 'book-1-cover' ); ?>"/></a>
      </figure>
      <h1><a href="<?php block_field( 'book-1-link' ); ?>"><?php block_field( 'book-1-title' ); ?></a></h1>
      <p><?php block_field( 'book-1-byline' ); ?></p>
      <p><?php block_field( 'book-1-description' ); ?></p>
      <div class="bookshelf-links">
        <?php $book1readlink = block_field( 'book-1-read-link', false ); ?>
        <?php  if ( empty( $book1readlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-1-read-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 90 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-5,-10)"><g><path d="M92.5,10L60,10C55.916,10 52.282,11.969 50,15.008C47.718,11.969 44.084,10 40,10L7.5,10C6.119,10 5,11.119 5,12.5L5,77.5C5,78.881 6.119,80 7.5,80L40,80C44.136,80 47.5,83.364 47.5,87.5C47.5,88.881 48.619,90 50,90C51.381,90 52.5,88.881 52.5,87.5C52.5,83.364 55.864,80 60,80L92.5,80C93.881,80 95,78.881 95,77.5L95,12.5C95,11.119 93.881,10 92.5,10ZM47.5,77.531C45.407,75.952 42.817,75 40,75L10,75L10,15L40,15C44.136,15 47.5,18.364 47.5,22.5L47.5,77.531ZM90,75L60,75C57.183,75 54.593,75.952 52.5,77.531L52.5,22.5C52.5,18.364 55.864,15 60,15L90,15L90,75Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,32.5L17.5,32.5C16.119,32.5 15,33.619 15,35C15,36.381 16.119,37.5 17.5,37.5L40,37.5C41.381,37.5 42.5,36.381 42.5,35C42.5,33.619 41.381,32.5 40,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,42.5L17.5,42.5C16.119,42.5 15,43.619 15,45C15,46.381 16.119,47.5 17.5,47.5L40,47.5C41.381,47.5 42.5,46.381 42.5,45C42.5,43.619 41.381,42.5 40,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,52.5L17.5,52.5C16.119,52.5 15,53.619 15,55C15,56.381 16.119,57.5 17.5,57.5L40,57.5C41.381,57.5 42.5,56.381 42.5,55C42.5,53.619 41.381,52.5 40,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,62.5L17.5,62.5C16.119,62.5 15,63.619 15,65C15,66.381 16.119,67.5 17.5,67.5L40,67.5C41.381,67.5 42.5,66.381 42.5,65C42.5,63.619 41.381,62.5 40,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,32.5L60,32.5C58.619,32.5 57.5,33.619 57.5,35C57.5,36.381 58.619,37.5 60,37.5L82.5,37.5C83.881,37.5 85,36.381 85,35C85,33.619 83.881,32.5 82.5,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,42.5L60,42.5C58.619,42.5 57.5,43.619 57.5,45C57.5,46.381 58.619,47.5 60,47.5L82.5,47.5C83.881,47.5 85,46.381 85,45C85,43.619 83.881,42.5 82.5,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,52.5L60,52.5C58.619,52.5 57.5,53.619 57.5,55C57.5,56.381 58.619,57.5 60,57.5L82.5,57.5C83.881,57.5 85,56.381 85,55C85,53.619 83.881,52.5 82.5,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,62.5L60,62.5C58.619,62.5 57.5,63.619 57.5,65C57.5,66.381 58.619,67.5 60,67.5L82.5,67.5C83.881,67.5 85,66.381 85,65C85,63.619 83.881,62.5 82.5,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,22.5L17.5,22.5C16.119,22.5 15,23.619 15,25C15,26.381 16.119,27.5 17.5,27.5L40,27.5C41.381,27.5 42.5,26.381 42.5,25C42.5,23.619 41.381,22.5 40,22.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M57.5,25C57.5,26.381 58.619,27.5 60,27.5L82.5,27.5C83.881,27.5 85,26.381 85,25C85,23.619 83.881,22.5 82.5,22.5L60,22.5C58.619,22.5 57.5,23.619 57.5,25Z" style="fill:white;fill-rule:nonzero;"/><g></g></svg></a>
        <?php  } ?>
        <?php $book1listenlink = block_field( 'book-1-listen-link', false ); ?>
        <?php  if ( empty( $book1listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-1-listen-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 30 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-1,-2)"><g><path d="M31,17C31,8.771 24.229,2 16,2C7.771,2 1,8.771 1,17L1,29C1,29.549 1.451,30 2,30L7,30C7.549,30 8,29.549 8,29L8,19C8,18.451 7.549,18 7,18L3,18L3,17C3,9.868 8.868,4 16,4C23.132,4 29,9.868 29,17L29,18L25,18C24.451,18 24,18.451 24,19L24,29C24,29.549 24.451,30 25,30L30,30C30.549,30 31,29.549 31,29L31,17ZM6,20L6,28L3,28L3,20L6,20ZM26,28L26,20L29,20L29,28L26,28Z" style="fill:white;fill-rule:nonzero;"/></g></g></svg></a>
        <?php  } ?>
      </div>
    </li>
    <li class="book">
      <figure>
        <a href="<?php block_field( 'book-2-link' ); ?>"><img src="<?php block_field( 'book-2-cover' ); ?>"/></a>
      </figure>
      <h1><a href="<?php block_field( 'book-2-link' ); ?>"><?php block_field( 'book-2-title' ); ?></a></h1>
      <p><?php block_field( 'book-2-byline' ); ?></p>
      <p><?php block_field( 'book-2-description' ); ?></p>
      <div class="bookshelf-links">
        <?php $book2readlink = block_field( 'book-2-read-link', false ); ?>
        <?php  if ( empty( $book2readlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-2-read-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 90 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-5,-10)"><g><path d="M92.5,10L60,10C55.916,10 52.282,11.969 50,15.008C47.718,11.969 44.084,10 40,10L7.5,10C6.119,10 5,11.119 5,12.5L5,77.5C5,78.881 6.119,80 7.5,80L40,80C44.136,80 47.5,83.364 47.5,87.5C47.5,88.881 48.619,90 50,90C51.381,90 52.5,88.881 52.5,87.5C52.5,83.364 55.864,80 60,80L92.5,80C93.881,80 95,78.881 95,77.5L95,12.5C95,11.119 93.881,10 92.5,10ZM47.5,77.531C45.407,75.952 42.817,75 40,75L10,75L10,15L40,15C44.136,15 47.5,18.364 47.5,22.5L47.5,77.531ZM90,75L60,75C57.183,75 54.593,75.952 52.5,77.531L52.5,22.5C52.5,18.364 55.864,15 60,15L90,15L90,75Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,32.5L17.5,32.5C16.119,32.5 15,33.619 15,35C15,36.381 16.119,37.5 17.5,37.5L40,37.5C41.381,37.5 42.5,36.381 42.5,35C42.5,33.619 41.381,32.5 40,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,42.5L17.5,42.5C16.119,42.5 15,43.619 15,45C15,46.381 16.119,47.5 17.5,47.5L40,47.5C41.381,47.5 42.5,46.381 42.5,45C42.5,43.619 41.381,42.5 40,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,52.5L17.5,52.5C16.119,52.5 15,53.619 15,55C15,56.381 16.119,57.5 17.5,57.5L40,57.5C41.381,57.5 42.5,56.381 42.5,55C42.5,53.619 41.381,52.5 40,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,62.5L17.5,62.5C16.119,62.5 15,63.619 15,65C15,66.381 16.119,67.5 17.5,67.5L40,67.5C41.381,67.5 42.5,66.381 42.5,65C42.5,63.619 41.381,62.5 40,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,32.5L60,32.5C58.619,32.5 57.5,33.619 57.5,35C57.5,36.381 58.619,37.5 60,37.5L82.5,37.5C83.881,37.5 85,36.381 85,35C85,33.619 83.881,32.5 82.5,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,42.5L60,42.5C58.619,42.5 57.5,43.619 57.5,45C57.5,46.381 58.619,47.5 60,47.5L82.5,47.5C83.881,47.5 85,46.381 85,45C85,43.619 83.881,42.5 82.5,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,52.5L60,52.5C58.619,52.5 57.5,53.619 57.5,55C57.5,56.381 58.619,57.5 60,57.5L82.5,57.5C83.881,57.5 85,56.381 85,55C85,53.619 83.881,52.5 82.5,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,62.5L60,62.5C58.619,62.5 57.5,63.619 57.5,65C57.5,66.381 58.619,67.5 60,67.5L82.5,67.5C83.881,67.5 85,66.381 85,65C85,63.619 83.881,62.5 82.5,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,22.5L17.5,22.5C16.119,22.5 15,23.619 15,25C15,26.381 16.119,27.5 17.5,27.5L40,27.5C41.381,27.5 42.5,26.381 42.5,25C42.5,23.619 41.381,22.5 40,22.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M57.5,25C57.5,26.381 58.619,27.5 60,27.5L82.5,27.5C83.881,27.5 85,26.381 85,25C85,23.619 83.881,22.5 82.5,22.5L60,22.5C58.619,22.5 57.5,23.619 57.5,25Z" style="fill:white;fill-rule:nonzero;"/><g></g></svg></a>
        <?php  } ?>
        <?php $book2listenlink = block_field( 'book-2-listen-link', false ); ?>
        <?php  if ( empty( $book2listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-2-listen-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 30 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-1,-2)"><g><path d="M31,17C31,8.771 24.229,2 16,2C7.771,2 1,8.771 1,17L1,29C1,29.549 1.451,30 2,30L7,30C7.549,30 8,29.549 8,29L8,19C8,18.451 7.549,18 7,18L3,18L3,17C3,9.868 8.868,4 16,4C23.132,4 29,9.868 29,17L29,18L25,18C24.451,18 24,18.451 24,19L24,29C24,29.549 24.451,30 25,30L30,30C30.549,30 31,29.549 31,29L31,17ZM6,20L6,28L3,28L3,20L6,20ZM26,28L26,20L29,20L29,28L26,28Z" style="fill:white;fill-rule:nonzero;"/></g></g></svg></a>
        <?php  } ?>
      </div>
    </li>
    <li class="book">
      <figure>
        <a href="<?php block_field( 'book-3-link' ); ?>"><img src="<?php block_field( 'book-3-cover' ); ?>"/></a>
      </figure>
      <h1><a href="<?php block_field( 'book-3-link' ); ?>"><?php block_field( 'book-3-title' ); ?></a></h1>
      <p><?php block_field( 'book-3-byline' ); ?></p>
      <p><?php block_field( 'book-3-description' ); ?></p>
      <div class="bookshelf-links">
        <?php $book3readlink = block_field( 'book-3-read-link', false ); ?>
        <?php  if ( empty( $book3readlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-3-read-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 90 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-5,-10)"><g><path d="M92.5,10L60,10C55.916,10 52.282,11.969 50,15.008C47.718,11.969 44.084,10 40,10L7.5,10C6.119,10 5,11.119 5,12.5L5,77.5C5,78.881 6.119,80 7.5,80L40,80C44.136,80 47.5,83.364 47.5,87.5C47.5,88.881 48.619,90 50,90C51.381,90 52.5,88.881 52.5,87.5C52.5,83.364 55.864,80 60,80L92.5,80C93.881,80 95,78.881 95,77.5L95,12.5C95,11.119 93.881,10 92.5,10ZM47.5,77.531C45.407,75.952 42.817,75 40,75L10,75L10,15L40,15C44.136,15 47.5,18.364 47.5,22.5L47.5,77.531ZM90,75L60,75C57.183,75 54.593,75.952 52.5,77.531L52.5,22.5C52.5,18.364 55.864,15 60,15L90,15L90,75Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,32.5L17.5,32.5C16.119,32.5 15,33.619 15,35C15,36.381 16.119,37.5 17.5,37.5L40,37.5C41.381,37.5 42.5,36.381 42.5,35C42.5,33.619 41.381,32.5 40,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,42.5L17.5,42.5C16.119,42.5 15,43.619 15,45C15,46.381 16.119,47.5 17.5,47.5L40,47.5C41.381,47.5 42.5,46.381 42.5,45C42.5,43.619 41.381,42.5 40,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,52.5L17.5,52.5C16.119,52.5 15,53.619 15,55C15,56.381 16.119,57.5 17.5,57.5L40,57.5C41.381,57.5 42.5,56.381 42.5,55C42.5,53.619 41.381,52.5 40,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,62.5L17.5,62.5C16.119,62.5 15,63.619 15,65C15,66.381 16.119,67.5 17.5,67.5L40,67.5C41.381,67.5 42.5,66.381 42.5,65C42.5,63.619 41.381,62.5 40,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,32.5L60,32.5C58.619,32.5 57.5,33.619 57.5,35C57.5,36.381 58.619,37.5 60,37.5L82.5,37.5C83.881,37.5 85,36.381 85,35C85,33.619 83.881,32.5 82.5,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,42.5L60,42.5C58.619,42.5 57.5,43.619 57.5,45C57.5,46.381 58.619,47.5 60,47.5L82.5,47.5C83.881,47.5 85,46.381 85,45C85,43.619 83.881,42.5 82.5,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,52.5L60,52.5C58.619,52.5 57.5,53.619 57.5,55C57.5,56.381 58.619,57.5 60,57.5L82.5,57.5C83.881,57.5 85,56.381 85,55C85,53.619 83.881,52.5 82.5,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,62.5L60,62.5C58.619,62.5 57.5,63.619 57.5,65C57.5,66.381 58.619,67.5 60,67.5L82.5,67.5C83.881,67.5 85,66.381 85,65C85,63.619 83.881,62.5 82.5,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,22.5L17.5,22.5C16.119,22.5 15,23.619 15,25C15,26.381 16.119,27.5 17.5,27.5L40,27.5C41.381,27.5 42.5,26.381 42.5,25C42.5,23.619 41.381,22.5 40,22.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M57.5,25C57.5,26.381 58.619,27.5 60,27.5L82.5,27.5C83.881,27.5 85,26.381 85,25C85,23.619 83.881,22.5 82.5,22.5L60,22.5C58.619,22.5 57.5,23.619 57.5,25Z" style="fill:white;fill-rule:nonzero;"/><g></g></svg></a>
        <?php  } ?>
        <?php $book3listenlink = block_field( 'book-3-listen-link', false ); ?>
        <?php  if ( empty( $book3listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-3-listen-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 30 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-1,-2)"><g><path d="M31,17C31,8.771 24.229,2 16,2C7.771,2 1,8.771 1,17L1,29C1,29.549 1.451,30 2,30L7,30C7.549,30 8,29.549 8,29L8,19C8,18.451 7.549,18 7,18L3,18L3,17C3,9.868 8.868,4 16,4C23.132,4 29,9.868 29,17L29,18L25,18C24.451,18 24,18.451 24,19L24,29C24,29.549 24.451,30 25,30L30,30C30.549,30 31,29.549 31,29L31,17ZM6,20L6,28L3,28L3,20L6,20ZM26,28L26,20L29,20L29,28L26,28Z" style="fill:white;fill-rule:nonzero;"/></g></g></svg></a>
        <?php  } ?>
      </div>
    </li>
    <li class="book">
      <figure>
        <a href="<?php block_field( 'book-4-link' ); ?>"><img src="<?php block_field( 'book-4-cover' ); ?>"/></a>
      </figure>
      <h1><a href="<?php block_field( 'book-4-link' ); ?>"><?php block_field( 'book-4-title' ); ?></a></h1>
      <p><?php block_field( 'book-4-byline' ); ?></p>
      <p><?php block_field( 'book-4-description' ); ?></p>
      <div class="bookshelf-links">
        <?php $book4readlink = block_field( 'book-4-read-link', false ); ?>
        <?php  if ( empty( $book4readlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-4-read-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 90 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-5,-10)"><g><path d="M92.5,10L60,10C55.916,10 52.282,11.969 50,15.008C47.718,11.969 44.084,10 40,10L7.5,10C6.119,10 5,11.119 5,12.5L5,77.5C5,78.881 6.119,80 7.5,80L40,80C44.136,80 47.5,83.364 47.5,87.5C47.5,88.881 48.619,90 50,90C51.381,90 52.5,88.881 52.5,87.5C52.5,83.364 55.864,80 60,80L92.5,80C93.881,80 95,78.881 95,77.5L95,12.5C95,11.119 93.881,10 92.5,10ZM47.5,77.531C45.407,75.952 42.817,75 40,75L10,75L10,15L40,15C44.136,15 47.5,18.364 47.5,22.5L47.5,77.531ZM90,75L60,75C57.183,75 54.593,75.952 52.5,77.531L52.5,22.5C52.5,18.364 55.864,15 60,15L90,15L90,75Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,32.5L17.5,32.5C16.119,32.5 15,33.619 15,35C15,36.381 16.119,37.5 17.5,37.5L40,37.5C41.381,37.5 42.5,36.381 42.5,35C42.5,33.619 41.381,32.5 40,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,42.5L17.5,42.5C16.119,42.5 15,43.619 15,45C15,46.381 16.119,47.5 17.5,47.5L40,47.5C41.381,47.5 42.5,46.381 42.5,45C42.5,43.619 41.381,42.5 40,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,52.5L17.5,52.5C16.119,52.5 15,53.619 15,55C15,56.381 16.119,57.5 17.5,57.5L40,57.5C41.381,57.5 42.5,56.381 42.5,55C42.5,53.619 41.381,52.5 40,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,62.5L17.5,62.5C16.119,62.5 15,63.619 15,65C15,66.381 16.119,67.5 17.5,67.5L40,67.5C41.381,67.5 42.5,66.381 42.5,65C42.5,63.619 41.381,62.5 40,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,32.5L60,32.5C58.619,32.5 57.5,33.619 57.5,35C57.5,36.381 58.619,37.5 60,37.5L82.5,37.5C83.881,37.5 85,36.381 85,35C85,33.619 83.881,32.5 82.5,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,42.5L60,42.5C58.619,42.5 57.5,43.619 57.5,45C57.5,46.381 58.619,47.5 60,47.5L82.5,47.5C83.881,47.5 85,46.381 85,45C85,43.619 83.881,42.5 82.5,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,52.5L60,52.5C58.619,52.5 57.5,53.619 57.5,55C57.5,56.381 58.619,57.5 60,57.5L82.5,57.5C83.881,57.5 85,56.381 85,55C85,53.619 83.881,52.5 82.5,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,62.5L60,62.5C58.619,62.5 57.5,63.619 57.5,65C57.5,66.381 58.619,67.5 60,67.5L82.5,67.5C83.881,67.5 85,66.381 85,65C85,63.619 83.881,62.5 82.5,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,22.5L17.5,22.5C16.119,22.5 15,23.619 15,25C15,26.381 16.119,27.5 17.5,27.5L40,27.5C41.381,27.5 42.5,26.381 42.5,25C42.5,23.619 41.381,22.5 40,22.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M57.5,25C57.5,26.381 58.619,27.5 60,27.5L82.5,27.5C83.881,27.5 85,26.381 85,25C85,23.619 83.881,22.5 82.5,22.5L60,22.5C58.619,22.5 57.5,23.619 57.5,25Z" style="fill:white;fill-rule:nonzero;"/><g></g></svg></a>
        <?php  } ?>
        <?php $book4listenlink = block_field( 'book-4-listen-link', false ); ?>
        <?php  if ( empty( $book4listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-4-listen-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 30 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-1,-2)"><g><path d="M31,17C31,8.771 24.229,2 16,2C7.771,2 1,8.771 1,17L1,29C1,29.549 1.451,30 2,30L7,30C7.549,30 8,29.549 8,29L8,19C8,18.451 7.549,18 7,18L3,18L3,17C3,9.868 8.868,4 16,4C23.132,4 29,9.868 29,17L29,18L25,18C24.451,18 24,18.451 24,19L24,29C24,29.549 24.451,30 25,30L30,30C30.549,30 31,29.549 31,29L31,17ZM6,20L6,28L3,28L3,20L6,20ZM26,28L26,20L29,20L29,28L26,28Z" style="fill:white;fill-rule:nonzero;"/></g></g></svg></a>
        <?php  } ?>
      </div>
    </li>
    <li class="book">
      <figure>
        <a href="<?php block_field( 'book-5-link' ); ?>"><img src="<?php block_field( 'book-5-cover' ); ?>"/></a>
      </figure>
      <h1><a href="<?php block_field( 'book-5-link' ); ?>"><?php block_field( 'book-5-title' ); ?></a></h1>
      <p><?php block_field( 'book-5-byline' ); ?></p>
      <p><?php block_field( 'book-5-description' ); ?></p>
      <div class="bookshelf-links">
        <?php $book5readlink = block_field( 'book-5-read-link', false ); ?>
        <?php  if ( empty( $book5readlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-5-read-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 90 80" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-5,-10)"><g><path d="M92.5,10L60,10C55.916,10 52.282,11.969 50,15.008C47.718,11.969 44.084,10 40,10L7.5,10C6.119,10 5,11.119 5,12.5L5,77.5C5,78.881 6.119,80 7.5,80L40,80C44.136,80 47.5,83.364 47.5,87.5C47.5,88.881 48.619,90 50,90C51.381,90 52.5,88.881 52.5,87.5C52.5,83.364 55.864,80 60,80L92.5,80C93.881,80 95,78.881 95,77.5L95,12.5C95,11.119 93.881,10 92.5,10ZM47.5,77.531C45.407,75.952 42.817,75 40,75L10,75L10,15L40,15C44.136,15 47.5,18.364 47.5,22.5L47.5,77.531ZM90,75L60,75C57.183,75 54.593,75.952 52.5,77.531L52.5,22.5C52.5,18.364 55.864,15 60,15L90,15L90,75Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,32.5L17.5,32.5C16.119,32.5 15,33.619 15,35C15,36.381 16.119,37.5 17.5,37.5L40,37.5C41.381,37.5 42.5,36.381 42.5,35C42.5,33.619 41.381,32.5 40,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,42.5L17.5,42.5C16.119,42.5 15,43.619 15,45C15,46.381 16.119,47.5 17.5,47.5L40,47.5C41.381,47.5 42.5,46.381 42.5,45C42.5,43.619 41.381,42.5 40,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,52.5L17.5,52.5C16.119,52.5 15,53.619 15,55C15,56.381 16.119,57.5 17.5,57.5L40,57.5C41.381,57.5 42.5,56.381 42.5,55C42.5,53.619 41.381,52.5 40,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,62.5L17.5,62.5C16.119,62.5 15,63.619 15,65C15,66.381 16.119,67.5 17.5,67.5L40,67.5C41.381,67.5 42.5,66.381 42.5,65C42.5,63.619 41.381,62.5 40,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,32.5L60,32.5C58.619,32.5 57.5,33.619 57.5,35C57.5,36.381 58.619,37.5 60,37.5L82.5,37.5C83.881,37.5 85,36.381 85,35C85,33.619 83.881,32.5 82.5,32.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,42.5L60,42.5C58.619,42.5 57.5,43.619 57.5,45C57.5,46.381 58.619,47.5 60,47.5L82.5,47.5C83.881,47.5 85,46.381 85,45C85,43.619 83.881,42.5 82.5,42.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,52.5L60,52.5C58.619,52.5 57.5,53.619 57.5,55C57.5,56.381 58.619,57.5 60,57.5L82.5,57.5C83.881,57.5 85,56.381 85,55C85,53.619 83.881,52.5 82.5,52.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M82.5,62.5L60,62.5C58.619,62.5 57.5,63.619 57.5,65C57.5,66.381 58.619,67.5 60,67.5L82.5,67.5C83.881,67.5 85,66.381 85,65C85,63.619 83.881,62.5 82.5,62.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M40,22.5L17.5,22.5C16.119,22.5 15,23.619 15,25C15,26.381 16.119,27.5 17.5,27.5L40,27.5C41.381,27.5 42.5,26.381 42.5,25C42.5,23.619 41.381,22.5 40,22.5Z" style="fill:white;fill-rule:nonzero;"/><path d="M57.5,25C57.5,26.381 58.619,27.5 60,27.5L82.5,27.5C83.881,27.5 85,26.381 85,25C85,23.619 83.881,22.5 82.5,22.5L60,22.5C58.619,22.5 57.5,23.619 57.5,25Z" style="fill:white;fill-rule:nonzero;"/><g></g></svg></a>
        <?php  } ?>
        <?php $book5listenlink = block_field( 'book-5-listen-link', false ); ?>
        <?php  if ( empty( $book5listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-5-listen-link' ); ?>"><svg width="100%" height="100%" viewBox="0 0 30 28" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"><g transform="matrix(1,0,0,1,-1,-2)"><g><path d="M31,17C31,8.771 24.229,2 16,2C7.771,2 1,8.771 1,17L1,29C1,29.549 1.451,30 2,30L7,30C7.549,30 8,29.549 8,29L8,19C8,18.451 7.549,18 7,18L3,18L3,17C3,9.868 8.868,4 16,4C23.132,4 29,9.868 29,17L29,18L25,18C24.451,18 24,18.451 24,19L24,29C24,29.549 24.451,30 25,30L30,30C30.549,30 31,29.549 31,29L31,17ZM6,20L6,28L3,28L3,20L6,20ZM26,28L26,20L29,20L29,28L26,28Z" style="fill:white;fill-rule:nonzero;"/></g></g></svg></a>
        <?php  } ?>
      </div>
    </li>
  </ul>
</div>
