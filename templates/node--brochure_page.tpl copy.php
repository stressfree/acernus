<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div id="main-text" class="content"<?php print $content_attributes; ?>>
  	<div id="main-text-body">
  		<div class="wrapper">
    	<?php
      		hide($content['comments']);
      		hide($content['links']);
      		print render($content);
    	?>
    	</div>
    </div>
    <div id="main-text-footer"><!-- --></div>
  </div>
  <div id="main-images">
  <?php
  $counter = 0;
  foreach ($field_images as $entry) {    	
      foreach ($entry as $image) { ?>
  <div class="image">
      <div class="frame">
	      <a href="<?php print image_style_url('lightbox', $image['uri']) ?>" class="lightbox">
	      <?php if ($counter == 0) { ?>
	      <img class="large" src="<?php print image_style_url('brochure-large', $image['uri']) ?>" alt="Acernus Air" />
	      <?php } else { ?>
	      <img class="thumbnail" src="<?php print image_style_url('brochure-thumbnail', $image['uri']) ?>" alt="Acernus Air" />
	      <?php } ?>
	      </a>
	  </div>
  </div><?php
  	  $counter++;
      } 
  } ?>
  <script type="text/javascript" language="javascript">
	//<![CDATA[
  <?php
  $counter = 0;
  foreach ($field_images as $entry) {    	
      foreach ($entry as $image) { ?>
  brochureLarge[<?php print($counter) ?>] = "<?php print image_style_url('brochure-large', $image['uri']) ?>";
  brochureThumbnails[<?php print($counter) ?>] = "<?php print image_style_url('brochure-thumbnail', $image['uri']) ?>";
  brochureLink[<?php print($counter) ?>] = "<?php print image_style_url('lightbox', $image['uri']) ?>";
  <?php  $counter++;
  	  }
  } ?>
  //]]>
  </script>
  </div>

</div>