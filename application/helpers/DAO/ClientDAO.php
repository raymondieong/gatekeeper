<?php
/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 3/7/2017
 * Time: 5:48 PM
 */

namespace application\helpers\DAO;


interface ClientDAO
{
  // TODO: get client by id
  function getClientById($id);
  // TODO: get client by uid
  function getClientByUID($uid);
  // TODO: get clients by name, date created, date modified
}