<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Best Advice Bank</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div id="container">
<h1>Drop a nugget of advice</h1>
<p class="middle"><a href="inventory_update.php">See all nuggets</a></p>
<div id="advice">
<!-- this form is handled by the JavaScript file linked at bottom -->
<form id="adviceform" method="post" action="" autocomplete="off">
  <label for="advice">What is the advice? </label>
	<input type="text" name="advice" id="advice" maxlength="280" required>
  <label for="source">Who/What told gave you this advice?</label>
	<input type="text" name="source" id="source" maxlength="140" required>
  <label for="why">Why is it significant to you?</label>
	<input type="text" name="why" id="why" max="999" required>

    <!-- step="0.01" (above) allows decimal to be entered -->
	<input type="submit" id="submit" value="Submit">
</form>
<!-- close the form -->
</div> <!-- close #socks -->
<!-- empty div -->
<div id="response"></div>
</div> <!-- close container -->
<script src="js/enter.js"></script>
</body>
</html>
