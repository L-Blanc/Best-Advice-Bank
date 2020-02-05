<?php
	include 'database.php';
	$query = "SELECT * FROM nuggets ORDER BY advice DESC LIMIT 10";
	$advice = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> Advice Bank </title>
	  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Alfa+Slab+One|Calistoga|Caveat|Handlee|Oleo+Script|Passion+One|Unica+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/inventory.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="container">






<!--
     the form below is handled by the PHP file named in the action= attribute
-->
<form class="smallform" method="post" action="socks_edit.php" autocomplete="off">

<div id="wrapper">
    <div id="container">

        <section class="open-book">
            <header>

                <h6>Lokela Blanc</h6>
            </header>
            <article>
                <h2 class="chapter-title">Golden Nuggets</h2>

								<table>
									<!-- table column headings -->
								  <div class="tbl-header">
									<tr>
									  <th>Advice</th>
									  <th>Source</th>
									  <th>Why</th>
									</tr>
								</div>
            </article>
        </section>

    </div>
</div>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
     Each time it loops, it writes ONE ROW.
	 This code depends on the first 5 lines at the start of this file.
	 $socks comes from that code.
	 NOTE all form controls must have a name= attribute.
     -->
<?php while ($row = mysqli_fetch_assoc($advice)) :  ?>

<tr>
  <!-- notice how, above, the database record id becomes
       the id and value of the radio button -->
  <td><?php echo stripslashes($row['advice']); ?></td>
  <td><?php echo $row['source']; ?></td>
  <td><?php echo $row['why']; ?></td>
</tr><!-- end of HTML table row -->

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>
<p class="middle"><a href="index.html">Add a new entry</a></p>


<!-- close the form -->
</form>
<div id="response"></div>


</div> <!-- close container -->

</body>
</html>
