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
    <meta charset="utf-8">
    <title>GateKeeper</title>
</head>
<body>

<div id="container">
    <h1>This is GateKeeper!</h1>

    <div id="body">
        <p>GateKeeper is in production...</p>
    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>