<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 5/4/2017
 * Time: 11:31 PM
 */

require_once '../helpers/DAO] ';
require_once 'helpers\DAO\ClientDAOImpl';

use application\helpers\DAO\ClientDAOImpl;
use models\Client;

class ClientController extends CI_Controller
{
    private $dao;

    function __construct ()
    {
        // TODO : TEST
        parent::__construct();
        $this->load->helper('url');
        $this->dao = new ClientDAOImpl();
    }

    public function index ()
    {
        echo "IN INDEX FUNCTION";
    }

    public function GetClient(int $id) : Client
    {
        return $this->dao->get($id);
    }

    public function NewClient(string $name) : bool
    {
        $client = new Client($name);
        if($this->dao->save($client)) return true;
        else return false;
    }
}