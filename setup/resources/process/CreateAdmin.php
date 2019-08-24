<?php
/*

      _____  _       _          ____  _ _ _ _
     |  __ \| |     | |        |  _ \(_) | (_)
     | |__) | |_   _| |_ ___   | |_) |_| | |_ _ __   __ _
     |  ___/| | | | | __/ _ \  |  _ <| | | | | '_ \ / _` |
     | |    | | |_| | || (_) | | |_) | | | | | | | | (_| |
     |_|    |_|\__,_|\__\___/  |____/|_|_|_|_|_| |_|\__, |
                                                     __/ |
                                                    |___/

    Copyright (c) 2019 CrypticNode LLC <pluto@crypticnode.host>

    Permission is hereby granted, free of charge, to any person obtaining a
    copy of this software and associated documentation files (the "Software"),
    to deal in the Software without restriction, including without limitation
    the rights to use, copy, modify, merge, publish, distribute, sublicense,
    and/or sell copies of the Software, and to permit persons to whom the
    Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included
    in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
    EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
    OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
    NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
    HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
    WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
    OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
    IN THE SOFTWARE.

*/

if (isset($_POST['submit'])) {

  $admin_firstname = $_POST['admin-firstname'];
  $admin_lastname  = $_POST['admin-lastname'];
  $admin_idn       = $_POST['admin-idn'];
  $admin_email     = $_POST['admin-email'];
  $admin_password  = $_POST['admin-password'];
  $admin_confirm   = $_POST['admin-confirm'];

  if (empty($_POST['admin-firstname']) || empty($_POST['admin-lastname']) || empty($_POST['admin-idn']) || empty($_POST['admin-email']) || empty($_POST['admin-password']) || empty($_POST['admin-confirm'])) {
    header('Location: ../../create-admin.php?emptyfields');
  }

  else {

    if ($admin_password !== $admin_confirm) {
      header('Location: ../../create-admin.php?notmatching');
    }

    else {
      require '../../../configuration.php';
      $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

      $admin_hashed = password_hash($admin_password, PASSWORD_DEFAULT);

      $sql = "INSERT INTO `pluto-admins` (`admin-firstname`, `admin-lastname`, `admin-idn`, `admin-email`, `admin-password`) VALUES ('$admin_firstname', '$admin_lastname', '$admin_idn', '$admin_email', '$admin_hashed');";
      $connection->query($sql);

      header('Location: ../../setup-complete.php');
      session_start();
      session_unset();
      session_destroy();
    }

  }

}

else {
  header('Location: ../../index.php');
}
