<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php print $content; ?>
  </div>
</div>
<!--[if lte IE 7]>
  <script type="text/javascript">
  $(function() {
    var zIndexNumber = 1000;
    $('div').each(function() {
      $(this).css('zIndex', zIndexNumber);
      zIndexNumber -= 10;
    });
  });
  </script>    
<![endif]-->
