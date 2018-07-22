<!doctype html>
<html lang="en">
<?php
//include header and navbar
include "head.html";
include "navbar.html"?>

<div class="container">
<div class="row">
<?php
//Url of RSS
$url = 'https://flipboard.com/@raimoseero/feed-nii8kd0sz?rss';
//let's turn XML-file  to object
$rss = simplexml_load_file($url);
//place to store strings from rss
function RssString($XMLstr)
{
  return ($XMLstr);
}
//loop  all items in RSS feed
foreach ($rss->channel->item as $item) {
echo '<div class = "col-sm-4 bordered">';
echo "<p  class = 'time underscored'>".$item->pubDate."</p>";
//store link to resourse in data-link attribute
echo "<a href='requests/mercury.php' data-link = ".$item->link." target='_blank' onClick = 'passDataLink()'>";
//funky syntax, but retrieves the image from XML
echo '<img class="card-img-top" src="'.$item[1]->children('media', True)->content->attributes().'" alt="Sorry, there is no picture">';
echo '<h6 class="card-title">'.$item->title.'</h6>'.'</a>';
echo '<p class = "description">'.$item->description.'</p>';
//check is there author name in XML
if ($item->author == true) {
        echo "<p class = author>"."Author:  ".$item->author."</p>";
      }
    else {
      echo "<p class = 'author'>Author: Unknown</p>";
    };
echo '</div>';
}?>
<script>
$('a').click(function() {
    alert($(this).data('link'));
  });
</script>
</div>
</div>
</body>
</html>
