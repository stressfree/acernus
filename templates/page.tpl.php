<div id="body-container">

<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <div id="header">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan">

        <?php if ($site_name): ?>
            <div id="site-name">
              <div class="imagereplacement"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Logo</a></div>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </div>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>

      </div>
    <?php endif; ?>

    <?php if ($page['header']): ?>
      <div id="header-region">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>

  </div>

  <div id="main">

    <div id="content">
      <div id="content-inner">

        <?php if ($title|| $tabs || $action_links): ?>
          <div id="content-header">

		   <?php if ($page['highlight']): ?><div id="highlight"><?php print render($page['highlight']); ?></div><?php endif; ?>

            <?php print render($title_prefix); ?>
            <div class="imagereplacement"><!-- --></div>
            <?php if ($title): ?>
               <h1 class="title" id="page-title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            <?php if ($tabs): ?>
               <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
               <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>

          </div> <!-- /#content-header -->
        <?php endif; ?>

        <div id="main-content">
          <?php print render($page['content']) ?>
        </div>

		<div class="clear"><!-- --></div>
		
		<div class="main-content-footer">
	        <?php print $feed_icons; ?>
		</div>
		
      </div>
    </div>

    <?php if ($main_menu || $secondary_menu): ?>
      <div id="navigation" class="menu <?php if (!empty($main_menu)) {print "with-primary";} if (!empty($secondary_menu)) {print " with-secondary";} ?>">
        
        <?php if ($main_menu): ?>
      <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <div id="secondary-menu" class="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'id' => 'secondary-menu-links',
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Secondary menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div>
    <?php endif; ?>
    
      </div>
    <?php endif; ?>

  </div>

  <div id="footer">
    <?php if ($page['footer_top']): ?>
      <?php print render($page['footer_top']); ?>
    <?php endif; ?>
    <?php if ($page['footer_bottom']): ?>
      <?php print render($page['footer_bottom']); ?>
    <?php endif; ?>
  </div>

</div>

</div>