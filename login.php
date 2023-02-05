<?php
  if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    <?php

    function login($username, $password) {
      // Connect to the database
      $conn = mysqli_connect("host", "username", "password", "database");

      // Check the connection
      if (!$conn) {
       // die("Connection failed: " . mysqli_connect_error());
       header("Location: index.html");
       exit;
      }

      // Prepare and execute the query
      $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $sql);

      // Check if there is a match
      if (mysqli_num_rows($result) > 0) {
        // Log the user in
        // Add code here to start a session and save the user information in the session
        return true;
      } else {
        // Return false if there is no match
        return false;
      }

      // Close the connection
      mysqli_close($conn);
    }

?>

  }
?>
