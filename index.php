<!doctype html>
<html charset="utf8">
<title>PHP to JS Wormhole</title>

<article>

<h2>PHP to JS Wormhole</h2>
<p>This file takes a PHP associative array and converts it to a JavaScript object literal
by through JSON encoding.</p> 
<div id="php">
<?php echo "<h3>PHP Associative Array: </h3>";
$PHP_to_JS = ["Name"=>"Pete", "Pos"=>"Web developer", "Skills"=>["JS", "PHP", "WP" ] ];
print_r($PHP_to_JS);
?>
</div>
<h3>After JSON encoding:</h3>
<div id="wormhole">
<?php echo json_encode($PHP_to_JS); ?> 
</div>
<h3>
Retrieved with JS:  </h3>
<div id="PHPout">

</div>
<script>
let P2J = document.getElementById("wormhole").innerText;
document.getElementById("PHPout").innerHTML = P2J;
</script>


 </article>
 
 
 </html>