<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title> My Shoutbox Project </title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="container">
      <header>
          <h1>My Bank</h1>
      </header>
      <div id="nuggets">
          <ul>
              <li>foobar</li>
          </ul>
      </div>
      <footer>
          <form id="adviceForm">
              <label for="advice">Advice </label>
              <input type="text" id="advice" name="advice" maxlength="20" required>
              <label for="source">Source </label>
              <input type="text" id="source" name="source" maxlength="140" required>
              <label for="why">why </label>
              <input type="text" id="why" name="why" maxlength="140" required>
              <input type="submit" id="submit" value="SHOUT!">
          </form>
      </footer>



    </div> <!-- close container -->

<script src="js/bank.js"></script>

</body>
</html>
