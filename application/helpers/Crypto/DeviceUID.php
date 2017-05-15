<?php
/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/15/2017
 * Time: 1:36 PM
 */

namespace Crypto;

// TODO : INCOMPLETE
// TODO : CONNECT TO DAO
// TODO : DOCUMENTATION
class DeviceUID
{
    public function generateDeviceUID (): int
    {
        return rand(0, 10000);
    }
}