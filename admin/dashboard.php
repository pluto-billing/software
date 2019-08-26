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

$page_title = 'Home';
require 'resources/includes/Header.php';
?>

<body>
  <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
    <div class="uk-container uk-container-expand">
        <nav uk-navbar>
            <div class="uk-navbar-left">
                <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon ></a>
                <a href="#" class="uk-navbar-item uk-logo">
                    Pluto Admin
                </a>
            </div>
            <div class="uk-navbar-right uk-light">
                <ul class="uk-navbar-nav">
                    <li class="uk-active">
                        <a href="#">Gabe Oliver &nbsp;<span class="ion-ios-arrow-down"></span></a>
                        <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                           <ul class="uk-nav uk-navbar-dropdown-nav">
                               <li class="uk-nav-header">Options</li>
                               <li><a href="#">Edit Profile</a></li>
                               <li class="uk-nav-header">Actions</li>
                               <li><a href="#">Client Area</a></li>
                               <li><a href="#">Logout</a></li>
                           </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div id="sidebar" class="tm-sidebar-left uk-background-default">
    <center>
        <div class="user">
            <img id="avatar" width="100" class="uk-border-circle" src="images/avatar.jpg" />
            <div class="uk-margin-top"></div>
            <div id="name" class="uk-text-truncate">Èrik Campobadal</div>
            <div id="email" class="uk-text-truncate">ConsoleTVs@gmail.com</div>
            <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success"></span>
        </div>
        <br />
    </center>
    <ul class="uk-nav uk-nav-default">

        <li class="uk-nav-header">
            UI Elements
        </li>
        <li><a href="buttons.html">Buttons</a></li>
        <li><a href="components.html">Components</a></li>
        <li><a href="tables.html">Tables</a></li>

        <li class="uk-nav-header">
            Pages
        </li>
        <li><a href="login.html">Login</a></li>
        <li><a href="register.html">Register</a></li>
        <li><a href="article.html">Article</a></li>
  <li><a href="404.html">404</a></li>
    </ul>
</div>
<div class="content-padder content-background">
    <div class="uk-section-small uk-section-default header">
        <div class="uk-container uk-container-large">
            <h1 class="uk-text-large"></span> CrypticNode - Dashboard</h1>
            <p>
                <span class="uk-text-bold">Quote of the day: </span>"Success usually comes to those who are too busy to be looking for it."
            </p>
            <ul class="uk-breadcrumb">
                <li><a href="">Admin</a></li>
                <li><span href="">Dashboard</span></li>
            </ul>
        </div>
    </div>
    <div class="uk-section-small">
        <div class="uk-container uk-container-large">
            <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@m uk-child-width-1-4@xl">
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <span class="statistics-text">New Registrations</span><br />
                        <span class="statistics-number">
                            14.164
                            <span class="uk-label uk-label-success">
                                8% <span class="ion-arrow-up-c"></span>
                            </span>
                        </span>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <span class="statistics-text">Website Traffic</span><br />
                        <span class="statistics-number">
                            123.238
                            <span class="uk-label uk-label-danger">
                                13% <span class="ion-arrow-down-c"></span>
                            </span>
                        </span>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <span class="statistics-text">Total Invoices</span><br />
                        <span class="statistics-number">
                            2.316
                            <span class="uk-label uk-label-success">
                                37% <span class="ion-arrow-up-c"></span>
                            </span>
                        </span>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <span class="statistics-text">Total Income</span><br />
                        <span class="statistics-number">
                            6.384€
                            <span class="uk-label uk-label-success">
                                26% <span class="ion-arrow-up-c"></span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div uk-grid class="uk-child-width-1-1@s uk-child-width-1-2@l">
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            Website Traffic
                        </div>
                        <div class="uk-card-body">
                            <canvas id="chart1"></canvas>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-header">
                            Website Traffic
                        </div>
                        <div class="uk-card-body">
                            <canvas id="chart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php
require 'resources/includes/Footer.php';
?>
