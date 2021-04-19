<html> 
<body> /* If an HTML file already exists
          with the necessary tables and entities,
          then we can use either the POST or GET method 
          to access them. In the HTML file we will have to set 
          action = "form_handling.php" */

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>