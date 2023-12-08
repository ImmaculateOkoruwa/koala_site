<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact form response</title>
<style type="text/css">
/* This is styling for the Koala Site */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

@font-face {
  font-family: 'balooregular';
  src: url('../fonts/Baloo-Regular-webfont.woff') format('woff');
}

body {
  font-family: 'Young Serif', serif;
  background-image: linear-gradient(-60deg, #16a085 0%, #f4d03f 100%);
}

#container {
  display: flex;
  flex-direction: column;
  background-color: #ececd5;
  width: 100%;
  max-width: 1000px; /* Change the width to be responsive */
  border: 2px solid rgb(209, 199, 199);
  box-shadow: 5px 4px 8px 5px rgba(0, 0, 0, 0.5);
  margin: 0 auto;
  padding: 20px;
}

main {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 15px;
}

.column {
  display: flex;
  flex-direction: column;
}

nav ul {
  background-color: #017501;
  text-align: center;
  padding: 5px 0;
  margin: 10px 0;
}

nav ul li {
  display: inline;
  list-style: square;
  color: rgba(255, 255, 255, 0.895);
  padding: 10px;
}

nav ul li a:link,
nav ul li a:visited {
  color: #fef4f4;
  font-size: 18px;
  text-decoration: none;
}

nav ul li a:hover {
  color: #ee0e0e;
}

p, ol {
  color: #004702;
  font-size: 18px;
  line-height: 1.8;
  font-family: 'Poppins', sans-serif;
  margin: 10px;
}

ol {
  font-size: 15px;
}

h1,
h3 {
  font-family: 'balooregular';
  color: #e5ffef;
  background-color: hsl(142, 100%, 6%, 0.92);
  text-align: center;
  font-variant: small-caps;
  font-size: 40px;
  margin: 5px 0;
}

h3 {
  font-size: 30px;
  margin: 12px 0;
  padding: 10px;
  border-top: rgb(209, 199, 199);
}

.table-container {
  margin-top: 20px;
  margin-left: 50px;
  width: 85%;
}

table {
  width: 100%;
  background-color: #ececd5;
  border-collapse: collapse;
}

th {
  background-color: #f2f2f2;
  padding: 10px;
  text-align: left;
}

td {
  padding: 10px;
  border: 1px solid #ccc;
}
</style>
</head>

<body>
<div id="container">
<h1>WDV101 Intro HTML and CSS</h1>
<h3>Form Response Processor</h3>

<p>This process will process the 'name = value' pairs for all the elements of your contact form. It will format and respond by sending an HTML page containing a table with the information you entered in the form.</p>

<p>Instructions:</p>
<ol>
  <li>To call this page, use <strong>form_response_basic.php</strong> in the action attribute of your form.</li>
  <li>Make sure you choose method=&quot;post&quot;.</li>
  <li>Ensure a link to this form from your homework page.</li>
  <li>Upload the updated homework page, the form.html page, and the PHP processor file to your host server. NOTE: the HTML form page and the processor PHP page must be in the same location!</li>
</ol>

</div><!--close div container-->

<p>RESULT WILL DISPLAY BELOW THIS LINE</p>
<hr>
<p>&nbsp;</p>

<?php
echo "<p class='colorRed'>This page was created by PHP on the server and sent back to your browser.</p>";

// It will create a table and display one set of name value pairs per row
echo "<div class='table-container'>";
echo "<table>";
echo "<tr><th>Field Name</th><th>Value of Field</th></tr>";

foreach ($_POST as $key => $value) {
    $capitalizedFieldName = ucwords($key);
    echo "<tr>";
    echo "<td>$capitalizedFieldName</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}

echo "</table>";
echo "</div>";
?>

</body>
</html>
