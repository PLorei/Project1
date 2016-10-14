<?php 
  function getNavLinks() {
  	$navLinks = array("Home", "About", "Contact");
    foreach($navLinks as $value):
  	  echo "<li><a href='#' onclick='show";
  	  echo $value;
  	  echo "()'>";
  	  echo $value;
  	  echo "</a></li>";
    endforeach;
  }

  function getStyles() {
  	$styles = array("https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css", "css/style.css", "http://fonts.googleapis.com/icon?family=Material+Icons");
    foreach($styles as $cur):
      echo "<link rel='stylesheet' href='";
      echo $cur;
      echo "'/>";
    endforeach;
  }

  function getScripts() {
  	$scripts = array("https://code.jquery.com/jquery-2.1.1.min.js", "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js", "js/page.js");
    foreach($scripts as $cur):
      echo "<script type='text/javascript' src='";
      echo $cur;
      echo "'></script>";
    endforeach;
  }

  function buildLinkBlock($link, $text) {
  	echo "<a href='";
    echo $link;
    echo "' target='_blank'><div class='card hoverable'><span class='center'>";
    echo $text;
    echo "</span></div></a>";
  }
?>