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
          <a href="<?php block_field( 'book-1-read-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M21 3.00004H16.5005C14.8524 2.90292 13.2333 3.46512 12 4.56274C10.7667 3.46512 9.14762 2.90292 7.4995 3.00004H3C1.89543 3.00004 1 3.89547 1 5.00004V19C1 20.1046 1.89543 21 3 21H21C22.1046 21 23 20.1046 23 19V5.00004C23 3.89547 22.1046 3.00004 21 3.00004ZM11 19H3V5.00004H7.4995C9.8041 5.00004 10.7022 5.98504 11 6.45654V19ZM13 19H21V5.00004H16.5005C14.196 5.00004 13.2979 5.98504 13 6.45654V19Z" fill="#00293F"/>
            </svg>
          </a>
        <?php  } ?>
        <?php $book1listenlink = block_field( 'book-1-listen-link', false ); ?>
        <?php  if ( empty( $book1listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-1-listen-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 11C18.4 11 18 10.6 18 9.99996L17.9 9.69996C17.8 6.59996 15.3 4.09996 12.2 3.99996C8.89999 3.89996 6.09999 6.39996 5.99999 9.79996V9.99996C5.99999 10.6 5.59999 11 4.99999 11C4.39999 11 3.99999 10.6 3.99999 9.99996V9.79996C4.09999 5.49996 7.49999 2.09996 11.8 2.09996C16.2 1.89996 19.9 5.39996 20 9.79996V9.99996C20 10.6 19.6 11 19 11ZM21 12.8C20.2 12.3 19.4 12.1 18.5 12H18C17.4 12 17 12.4 17 13V20C17 20.6 17.4 21 18 21H18.5C21 21 23 19 23 16.5C23 15 22.2 13.6 21 12.8ZM21 17C20.8 18 20 18.8 19 19V14C20.4 14.3 21.2 15.6 21 17ZM5.99999 12H5.49999C5.09999 12 4.7 12.1 4.3 12.2L4.29999 12.2C1.89999 12.9 0.49999 15.3 1.19999 17.7C1.69999 19.7 3.49999 21 5.49999 21H5.99999C6.59999 21 6.99999 20.6 6.99999 20V13C6.99999 12.4 6.59999 12 5.99999 12ZM2.99999 16.1C2.79999 17.4 3.59999 18.7 4.99999 19V14.1C3.99999 14.3 3.19999 15.1 2.99999 16.1Z" />
            </svg>
          </a>
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
          <a href="<?php block_field( 'book-2-read-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M21 3.00004H16.5005C14.8524 2.90292 13.2333 3.46512 12 4.56274C10.7667 3.46512 9.14762 2.90292 7.4995 3.00004H3C1.89543 3.00004 1 3.89547 1 5.00004V19C1 20.1046 1.89543 21 3 21H21C22.1046 21 23 20.1046 23 19V5.00004C23 3.89547 22.1046 3.00004 21 3.00004ZM11 19H3V5.00004H7.4995C9.8041 5.00004 10.7022 5.98504 11 6.45654V19ZM13 19H21V5.00004H16.5005C14.196 5.00004 13.2979 5.98504 13 6.45654V19Z" fill="#00293F"/>
            </svg>
          </a>
        <?php  } ?>
        <?php $book2listenlink = block_field( 'book-2-listen-link', false ); ?>
        <?php  if ( empty( $book2listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-2-listen-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 11C18.4 11 18 10.6 18 9.99996L17.9 9.69996C17.8 6.59996 15.3 4.09996 12.2 3.99996C8.89999 3.89996 6.09999 6.39996 5.99999 9.79996V9.99996C5.99999 10.6 5.59999 11 4.99999 11C4.39999 11 3.99999 10.6 3.99999 9.99996V9.79996C4.09999 5.49996 7.49999 2.09996 11.8 2.09996C16.2 1.89996 19.9 5.39996 20 9.79996V9.99996C20 10.6 19.6 11 19 11ZM21 12.8C20.2 12.3 19.4 12.1 18.5 12H18C17.4 12 17 12.4 17 13V20C17 20.6 17.4 21 18 21H18.5C21 21 23 19 23 16.5C23 15 22.2 13.6 21 12.8ZM21 17C20.8 18 20 18.8 19 19V14C20.4 14.3 21.2 15.6 21 17ZM5.99999 12H5.49999C5.09999 12 4.7 12.1 4.3 12.2L4.29999 12.2C1.89999 12.9 0.49999 15.3 1.19999 17.7C1.69999 19.7 3.49999 21 5.49999 21H5.99999C6.59999 21 6.99999 20.6 6.99999 20V13C6.99999 12.4 6.59999 12 5.99999 12ZM2.99999 16.1C2.79999 17.4 3.59999 18.7 4.99999 19V14.1C3.99999 14.3 3.19999 15.1 2.99999 16.1Z" />
            </svg>
          </a>
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
          <a href="<?php block_field( 'book-3-read-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M21 3.00004H16.5005C14.8524 2.90292 13.2333 3.46512 12 4.56274C10.7667 3.46512 9.14762 2.90292 7.4995 3.00004H3C1.89543 3.00004 1 3.89547 1 5.00004V19C1 20.1046 1.89543 21 3 21H21C22.1046 21 23 20.1046 23 19V5.00004C23 3.89547 22.1046 3.00004 21 3.00004ZM11 19H3V5.00004H7.4995C9.8041 5.00004 10.7022 5.98504 11 6.45654V19ZM13 19H21V5.00004H16.5005C14.196 5.00004 13.2979 5.98504 13 6.45654V19Z" fill="#00293F"/>
            </svg>
          </a>
        <?php  } ?>
        <?php $book3listenlink = block_field( 'book-3-listen-link', false ); ?>
        <?php  if ( empty( $book3listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-3-listen-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 11C18.4 11 18 10.6 18 9.99996L17.9 9.69996C17.8 6.59996 15.3 4.09996 12.2 3.99996C8.89999 3.89996 6.09999 6.39996 5.99999 9.79996V9.99996C5.99999 10.6 5.59999 11 4.99999 11C4.39999 11 3.99999 10.6 3.99999 9.99996V9.79996C4.09999 5.49996 7.49999 2.09996 11.8 2.09996C16.2 1.89996 19.9 5.39996 20 9.79996V9.99996C20 10.6 19.6 11 19 11ZM21 12.8C20.2 12.3 19.4 12.1 18.5 12H18C17.4 12 17 12.4 17 13V20C17 20.6 17.4 21 18 21H18.5C21 21 23 19 23 16.5C23 15 22.2 13.6 21 12.8ZM21 17C20.8 18 20 18.8 19 19V14C20.4 14.3 21.2 15.6 21 17ZM5.99999 12H5.49999C5.09999 12 4.7 12.1 4.3 12.2L4.29999 12.2C1.89999 12.9 0.49999 15.3 1.19999 17.7C1.69999 19.7 3.49999 21 5.49999 21H5.99999C6.59999 21 6.99999 20.6 6.99999 20V13C6.99999 12.4 6.59999 12 5.99999 12ZM2.99999 16.1C2.79999 17.4 3.59999 18.7 4.99999 19V14.1C3.99999 14.3 3.19999 15.1 2.99999 16.1Z" />
            </svg>
          </a>
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
          <a href="<?php block_field( 'book-4-read-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M21 3.00004H16.5005C14.8524 2.90292 13.2333 3.46512 12 4.56274C10.7667 3.46512 9.14762 2.90292 7.4995 3.00004H3C1.89543 3.00004 1 3.89547 1 5.00004V19C1 20.1046 1.89543 21 3 21H21C22.1046 21 23 20.1046 23 19V5.00004C23 3.89547 22.1046 3.00004 21 3.00004ZM11 19H3V5.00004H7.4995C9.8041 5.00004 10.7022 5.98504 11 6.45654V19ZM13 19H21V5.00004H16.5005C14.196 5.00004 13.2979 5.98504 13 6.45654V19Z" fill="#00293F"/>
            </svg>
          </a>
        <?php  } ?>
        <?php $book4listenlink = block_field( 'book-4-listen-link', false ); ?>
        <?php  if ( empty( $book4listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-4-listen-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 11C18.4 11 18 10.6 18 9.99996L17.9 9.69996C17.8 6.59996 15.3 4.09996 12.2 3.99996C8.89999 3.89996 6.09999 6.39996 5.99999 9.79996V9.99996C5.99999 10.6 5.59999 11 4.99999 11C4.39999 11 3.99999 10.6 3.99999 9.99996V9.79996C4.09999 5.49996 7.49999 2.09996 11.8 2.09996C16.2 1.89996 19.9 5.39996 20 9.79996V9.99996C20 10.6 19.6 11 19 11ZM21 12.8C20.2 12.3 19.4 12.1 18.5 12H18C17.4 12 17 12.4 17 13V20C17 20.6 17.4 21 18 21H18.5C21 21 23 19 23 16.5C23 15 22.2 13.6 21 12.8ZM21 17C20.8 18 20 18.8 19 19V14C20.4 14.3 21.2 15.6 21 17ZM5.99999 12H5.49999C5.09999 12 4.7 12.1 4.3 12.2L4.29999 12.2C1.89999 12.9 0.49999 15.3 1.19999 17.7C1.69999 19.7 3.49999 21 5.49999 21H5.99999C6.59999 21 6.99999 20.6 6.99999 20V13C6.99999 12.4 6.59999 12 5.99999 12ZM2.99999 16.1C2.79999 17.4 3.59999 18.7 4.99999 19V14.1C3.99999 14.3 3.19999 15.1 2.99999 16.1Z" />
            </svg>
          </a>
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
          <a href="<?php block_field( 'book-5-read-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M21 3.00004H16.5005C14.8524 2.90292 13.2333 3.46512 12 4.56274C10.7667 3.46512 9.14762 2.90292 7.4995 3.00004H3C1.89543 3.00004 1 3.89547 1 5.00004V19C1 20.1046 1.89543 21 3 21H21C22.1046 21 23 20.1046 23 19V5.00004C23 3.89547 22.1046 3.00004 21 3.00004ZM11 19H3V5.00004H7.4995C9.8041 5.00004 10.7022 5.98504 11 6.45654V19ZM13 19H21V5.00004H16.5005C14.196 5.00004 13.2979 5.98504 13 6.45654V19Z" fill="#00293F"/>
            </svg>
          </a>
        <?php  } ?>
        <?php $book5listenlink = block_field( 'book-5-listen-link', false ); ?>
        <?php  if ( empty( $book5listenlink ) ) { ?>
          <div></div>
        <?php  } else { ?>
          <a href="<?php block_field( 'book-5-listen-link' ); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19 11C18.4 11 18 10.6 18 9.99996L17.9 9.69996C17.8 6.59996 15.3 4.09996 12.2 3.99996C8.89999 3.89996 6.09999 6.39996 5.99999 9.79996V9.99996C5.99999 10.6 5.59999 11 4.99999 11C4.39999 11 3.99999 10.6 3.99999 9.99996V9.79996C4.09999 5.49996 7.49999 2.09996 11.8 2.09996C16.2 1.89996 19.9 5.39996 20 9.79996V9.99996C20 10.6 19.6 11 19 11ZM21 12.8C20.2 12.3 19.4 12.1 18.5 12H18C17.4 12 17 12.4 17 13V20C17 20.6 17.4 21 18 21H18.5C21 21 23 19 23 16.5C23 15 22.2 13.6 21 12.8ZM21 17C20.8 18 20 18.8 19 19V14C20.4 14.3 21.2 15.6 21 17ZM5.99999 12H5.49999C5.09999 12 4.7 12.1 4.3 12.2L4.29999 12.2C1.89999 12.9 0.49999 15.3 1.19999 17.7C1.69999 19.7 3.49999 21 5.49999 21H5.99999C6.59999 21 6.99999 20.6 6.99999 20V13C6.99999 12.4 6.59999 12 5.99999 12ZM2.99999 16.1C2.79999 17.4 3.59999 18.7 4.99999 19V14.1C3.99999 14.3 3.19999 15.1 2.99999 16.1Z" />
            </svg>
          </a>
        <?php  } ?>
      </div>
    </li>
  </ul>
</div>
