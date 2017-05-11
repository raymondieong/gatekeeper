<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 5/4/2017
 * Time: 11:31 PM
 */
require_once APPPATH.'helpers/DAO/ClientDAOImpl.php';
require_once APPPATH.'libraries/REST_Controller.php';
use application\helpers\DAO\ClientDAOImpl;
use models\Client;
use Restserver\Libraries\REST_Controller;

class ClientController extends REST_Controller
{
    private $dao;

    function __construct ()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->dao = new ClientDAOImpl();
    }

    public function index ()
    {
        echo "Inside index().";
    }

    public function index_post($name)
    {
        return $this->post($name);
    }
	
	public function index_get($id) 
    {
        return $this->get($id);
    }
	
    public function get($key=NULL, $xss_clean=NULL)
    {
        $id = ( int ) $key;
        $client = $this->dao->get($id);

        if ($client == NULL) return NULL;
        echo "<br/><br/>";
        echo $client->getJSON();

        // TODO : RETURN PROPER STATUS CODE IF NOT FOUND
        if ($client == NULL) return -1;
        else return $client;
    }
	
    public function post($key=NULL, $xss_clean=NULL)
    {
        $client = new Client(( string ) $key);
        if($this->dao->save($client)) return true;
        else return false;
    }
}