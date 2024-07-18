<?php 

       include "include/db.php";

       if (isset($_POST['enable'])) {

         $email = $_POST['email'];

         $check = "SELECT * FROM users WHERE email='{$email}' AND isAdmin = 'true'";

         $res = mysqli_query($conn, $check);

         if (mysqli_num_rows($res) == 0) {
          $sql = "UPDATE users SET isAdmin = 'true' WHERE email = '{$email}'";

          $result = mysqli_query($conn, $sql);

          if ($result) {

            echo "<div class='message'>
            <center><h1>Admin Privileges Enabled!</h1></center>
</div><br>";

            echo "<a style='color: white !important;' href='users.php'><button class='btn btn-success btn-lg'>Add More Admins</button></a>";
            exit;


         }
         } 
         else {

          echo "<div class='message'>
          <center>
          <h1>User is already an Admin</h1>
</center>
</div><br>";

          echo "<a href='javascript:window. history. back();'><button class='btn btn-secondary btn-lg'>Go Back</button></a>";
          exit;

             }
       }

       if (isset($_POST['disable'])) {

        $email = $_POST['email'];

        $check = "SELECT * FROM users WHERE email='{$email}' AND isAdmin = 'false'";

        $res = mysqli_query($conn, $check);

        if (mysqli_num_rows($res) == 0) {
         $sql = "UPDATE users SET isAdmin = 'false' WHERE email = '{$email}'";

         $result = mysqli_query($conn, $sql);

         if ($result) {

           echo "<div class='message'>
           <center><h1>Admin Privileges Disabled!</h1></center>
</div><br>";

           echo "<a style='color: white !important;' href='users.php'><button class='btn btn-success btn-lg'>Add More Admins</button></a>";
           exit;


        }
        } 
        else {

         echo "<div class='message'>
         <center>
         <h1>User is not an Admin</h1>
</center>
</div><br>";

         echo "<a href='javascript:window. history. back();'><button class='btn btn-secondary btn-lg'>Go Back</button></a>";
         exit;

            }
      }

      else {}


    ?>