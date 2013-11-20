<nav role="navigation">
  <ul>
          <li><a href="/" <?php if ( $page->get("name") == "home") echo "class='current'";?>>Home</a></li><!--
    --><li><a href="/work" <?php if ( $page->get("name") == "work") echo "class='current'";?>>Work</a></li><!--
    --><li><a href="/blog" <?php if ( $page->get("name") == "blog") echo "class='current'";?>>Blog</a></li><!--
    --><li><a href="/about" <?php if( $page->get("name") == "about") echo "class='current'"; ?>>About</a></li>
  </ul>
</nav>
