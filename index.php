<!doctype html>
<html charset="utf8">
<title>PHP to JS Wormhole</title>

<article>
<div id="php">
<?php echo "PHP Associative Array: <br>";
$PHP_to_JS = ["Name"=>"Pete", "Pos"=>"Web developer", "Skills"=>["JS", "PHP", "WP" ] ];
print_r($PHP_to_JS);
?>
</div>
<br>
After JSON enoding:<br>
<div id="wormhole">
<?php echo json_encode($PHP_to_JS); ?> 
</div>
<br>
Retrieved with JS:  
<div id="PHPout">

</div>
<script>
let P2J = document.getElementById("wormhole").innerText;
document.getElementById("PHPout").innerHTML = P2J;
</script>

 <h1><?php the_title(); ?></h1>
 <div><?php the_post_thumbnail("medium"); ?></div>
 <p><?php echo get_the_content(); ?></p>
 
	<?php endwhile; endif; ?>
 </article>
 
 
 </html>