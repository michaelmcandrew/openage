<article id="article-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="article-inner">
    <?php print $unpublished; ?>

    <?php if ($title && !$page): ?>
      <header>
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1<?php print $title_attributes; ?>>
            <a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a>
          </h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
      </header>
    <?php endif; ?>

    <div<?php print $content_attributes; ?>>
    <?php
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    </div>

    <?php if ($display_submitted): ?>
      <footer class="submitted clearfix<?php $user_picture ? print ' with-user-picture' : ''; ?>">
        <?php print $user_picture; ?>
        <p class="author-datetime"><?php print $submitted; ?></p>
      </footer>
    <?php endif; ?>

  </div> <!-- inner -->

  <?php if ($links = render($content['links'])): ?>
    <div class="article-footer"><div class="article-inner">
      <nav class="clearfix"><?php print $links; ?></nav>
    </div></div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article>
