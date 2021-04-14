
<?php
$absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
$wp_load = $absolute_path[0] . 'wp-load.php';
require_once($wp_load);
header("Content-type: text/css; charset=UTF-8");
header('Cache-Control: max-age=31536000, must-revalidate');
?>

html {
  scroll-behavior: smooth;
}
a#cRetour{
  display: flex;
  align-items: center;
  justify-content: center;  
  border-radius: 15%;
  font-size:25px;
  color:#fff;
  box-shadow: 1px 1px 4px 1px rgba(255, 255, 255, 0.2);
  position:fixed;
  right:20px;
  opacity:1;
  z-index:99999;
  transition:all ease-in 0.2s;
  text-decoration: none;
  height: 50px;
  width: 50px;
}
a#cRetour:before{ 
  content: "\25b2"; 
} 
a#cRetour:hover{
  background:rgba(0, 0, 0, 1);
  transition:all ease-in 0.2s;
}
a#cRetour.cInvisible{
  bottom:-35px;
  opacity:0; 
  transition:all ease-in 0.5s;
}
a#cRetour.cVisible {
  bottom: 20px;
  opacity:1;
}
