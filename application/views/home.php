<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 1/27/2017
 * Time: 3:20 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <!-- TODO : INCLUDE BOOTSTRAP AND JQUERY JS, AND BOOTSTRAP CSS -->
    <script src="assets/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="assets/components/jquery/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>GateKeeper</title>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand the navbar -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">GateKeeper</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo site_url('HomeController/inProgress'); ?>">Introduction</a></li>
                    <li><a href="<?php echo site_url('HomeController/inProgress'); ?>">Documentation</a></li>
                    <li><a href="<?php echo site_url('HomeController/GitHub'); ?>">GitHub</a></li>
                    <li><a href="<?php echo site_url('HomeController/inProgress'); ?>">Registration</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">
        <div class="page-header">
            <h1>Welcome to <span>GateKeeper</span><br/><small>A user management and authentication API for multi-user systems, with numerous features.</small></h1>
        </div>
        <h3>Tools and frameworks used:</h3>
        <dl>
            <dt>CodeIgniter:</dt>
            <dd>GateKeeper is built with CodeIgniter framework. CodeIgniter is chosen to keep GateKeeper light weight, to boost speed and to pack GateKeeper with top notch security toolkits.</dd>
            <dt>Composer</dt>
            <dd>For dependency management</dd>
            <dt>Proper</dt>
            <dd>For ORM and database query</dd>
        </dl>
        <p>
        </p>
    </div>
</body>
</html>