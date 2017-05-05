<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 5/4/2017
 * Time: 11:31 PM
 */
require_once APPPATH.'helpers/DAO/ClientDAOImpl.php';
use Restserver\Libraries\REST_Controller;
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
  
		public function index () {}
	
    public function get($id)
    {
				$id = ( int ) $id;
				return $this->dao->get($id);
    }
    public function post($name)
    {
        $client = new Client(( string ) $name);
        if($this->dao->save($client)) return true;
        else return false;
    }
}