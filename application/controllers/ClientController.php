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


// TODO : Handle existing stuff like existing username and email.

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

    public function index_post($username, $email)
    {
        return $this->post($username, $email);
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

        if ($client == NULL) return -1;
        else return $client;
    }
	
    public function post($key1 = null, $key2=null, $xss_clean=NULL)
    {
        $client = new Client(( string ) $key1, ( string ) $key2);
        if($this->dao->save($client)) return true;
        else return false;
    }
}