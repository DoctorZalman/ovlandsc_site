<?php
/**
 * Header template part
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?> ">
  <title><?php bloginfo('name'); ?><?php wp_title(''); ?></title>
  <!--Favicon-->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head() ?>
</head>
