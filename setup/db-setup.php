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
?>

<html>
  <head>
    <title>Pluto Billing - Software Setup</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/notyf.min.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
  </head>
  <body>
    <div uk-sticky="media: 960" class="uk-navbar-container tm-navbar-container uk-sticky uk-active" style="position: fixed; top: 0px; width: 1903px;">
      <div class="uk-container uk-container-expand">
        <nav uk-navbar>
          <div class="uk-navbar-left">
            <a href="" class="uk-navbar-item uk-logo">
            Pluto Billing - Software Setup
            </a>
          </div>
        </nav>
      </div>
    </div>
    <div class="content-background">
      <div class="uk-section-large">
        <div class="uk-container uk-container-large">
          <div uk-grid class="uk-child-width-1-1@s uk-child-width-2-3@l">
            <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
            <div class="uk-width-1-1@s uk-width-3-5@l uk-width-1-3@xl">
              <div class="uk-card uk-card-default">
                <?php
                  if (isset($_GET['sqlerror'])) {
                ?>
                <div class="uk-alert-danger" uk-alert>
                  <a class="uk-alert-close" uk-close></a>
                  <p><?php echo $_GET['sqlerror'] ?></p>
                </div>
                <?php
                  }
                ?>
                <?php
                  if (isset($_GET['notclean'])) {
                ?>
                <div class="uk-alert-danger" uk-alert>
                  <a class="uk-alert-close" uk-close></a>
                  <p>The provided database is not empty.</p>
                </div>
                <?php
                  }
                ?>
                <?php
                  if (isset($_GET['configexists'])) {
                ?>
                <div class="uk-alert-danger" uk-alert>
                  <a class="uk-alert-close" uk-close></a>
                  <p>Configuration file already exists. Remove it and retry.</p>
                </div>
                <?php
                  }
                ?>
                <div class="uk-card-header">
                  <span class="uk-text-bold">Step Two:</span> Database Setup
                </div>
                <div class="uk-card-body">
                  <center>
                    <p>Enter the information for the created database below. <span class="uk-text-bold">Important note: database must be empty.</span></p>
                    <form action="resources/process/DbValConn.php" method="POST">
                      <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                          <div class="uk-position-relative">
                            <input name="db-host" class="uk-input" type="text" placeholder="Database Hostname" value="localhost" required>
                          </div>
                        </div>
                        <div class="uk-margin">
                          <div class="uk-position-relative">
                            <input name="db-user" class="uk-input" type="text" placeholder="User Name" required>
                          </div>
                        </div>
                        <div class="uk-margin">
                          <div class="uk-position-relative">
                            <input name="db-pass" class="uk-input" type="password" placeholder="User Password">
                          </div>
                        </div>
                        <div class="uk-margin">
                          <div class="uk-position-relative">
                            <input name="db-name" class="uk-input" type="text" placeholder="Database Name" required>
                          </div>
                        </div>
                        <div class="uk-margin">
                          <a href="index.php" class="uk-button uk-button-secondary">
                          <span class="ion-reply"></span>&nbsp; Back
                          </a>
                          <button name="submit" type="submit" class="uk-button uk-button-primary">
                          <span class="ion-forward"></span>&nbsp; Continue
                          </button>
                        </div>
                      </fieldset>
                    </form>
                  </center>
                </div>
              </div>
            </div>
            <div class="uk-width-1-1@s uk-width-1-5@l uk-width-1-3@xl"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
