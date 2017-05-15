<?php
/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/12/2017
 * Time: 4:18 PM
 */

namespace DAO;


use models\Auth;

interface AuthDAO
{
    public function save(Auth $auth);

    public function get($id);

    public function delete(Auth $auth);
}