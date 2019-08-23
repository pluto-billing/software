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

  $db_host = $_POST['db-host'];
  $db_user = $_POST['db-user'];
  $db_pass = $_POST['db-pass'];
  $db_name = $_POST['db-name'];


  if (empty($_POST['db-host']) || empty($_POST['db-user']) || empty($_POST['db-name'])) {
    header('Location: ../../db-setup.php?blankfields');
  }

  else {
    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    $error = mysqli_connect_error();

    if (!$connection) {
      header("Location: ../../db-setup.php?sqlerror=''$error'");
    }

    else {
      $sql = 'CREATE TABLE IF NOT EXISTS `test` (`name` varchar(255) not null);';
      $connection->query($sql) or die();
      header('Location: ../../db-setup.php?success');
    }
  }

}

else {
  header('Location: ../../index.php');
}
