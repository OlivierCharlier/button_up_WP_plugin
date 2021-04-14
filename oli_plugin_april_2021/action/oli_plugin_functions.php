<?php
add_action( 'wp_footer', 'oli_plugin_script' );
function oli_plugin_script(){
  include("oli_script.php");
};

/*_- *****************************************************-_ */

add_action('wp_head', 'oli_plugin_style');
function oli_plugin_style(){
  echo('<!-- ----- CSS -  Oli Plugin Style ------ -->');
  ?>
  <link rel="stylesheet" href="<?php bloginfo('url'); ?>/wp-content/plugins/oli_plugin_april_2021/css/oli_plugin_style.php?v='.time()" type="text/css" media="screen">
  <?php
};

add_action('wp_head', 'oli_plugin_bg_style');
function oli_plugin_bg_style(){
  echo('<!-- ----- CSS -  Oli Plugin Background Style AutoUpdate ------ -->'); 
  $colorResult = get_option('color_buttonUP_OliPlugin', '#292929');
  ?>
  <style type="text/css" media="screen">a#cRetour{ background: <?= $colorResult ?>;}</style>
  <?php
};

/*_- *****************************************************-_ */

add_action( 'send_headers', 'oli_plugin_button' );
function oli_plugin_button(){
  echo('<!-- ----- #haut -  Oli Plugin ------ -->');
  ?>
  <div id="haut"><a id="cRetour" class="cInvisible" href="#haut"></a></div>
  <?php
};