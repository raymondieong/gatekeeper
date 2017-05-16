<?php

/**
 * Created by PhpStorm.
 * User: myazdani
 * Date: 5/12/2017
 * Time: 1:19 PM
 */

use \models\User;

class UserController extends Controller
{

    private $dao;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $the_dao = new \DAO\UserDAOImpl();
        parent::__construct($the_dao);
        $this->load->helper('url');
    }


    /**
     * Retrieve a value from a GET request
     *
     * @access public
     * @param NULL $key Key to retrieve from the GET request
     * If NULL an array of arguments is returned
     * @param NULL $xss_clean Whether to apply XSS filtering
     * @return array|string|NULL Value from the GET request; otherwise, NULL
     */
    public function get($key = NULL, $xss_clean = NULL)
    {
        $id = (int) $key;
        $user = $this->dao->get($id);
        // TODO : TEST
        if ($user == NULL) return NULL;
        echo "<br/><br/>";
        echo $user->getJSON();

        if ($user == NULL) return null;
        else return $user;
    }

    /**
     * Retrieve a value from a POST request
     *
     * @access public
     * @param NULL $key Key to retrieve from the POST request
     * If NULL an array of arguments is returned
     * @param NULL $xss_clean Whether to apply XSS filtering
     * @return array|string|NULL Value from the POST request; otherwise, NULL
     */
    public function post($key = NULL, $xss_clean = NULL)
    {
        $json = json_decode($key);
        $user = new User($json->data);
        if($this->dao->save($user)) return $user->getId();
        else return false;
    }

    /**
     * Retrieve a value from a PUT request
     *
     * @access public
     * @param NULL $key Key to retrieve from the PUT request
     * If NULL an array of arguments is returned
     * @param NULL $xss_clean Whether to apply XSS filtering
     * @return array|string|NULL Value from the PUT request; otherwise, NULL
     */
    public function put($key = NULL, $xss_clean = NULL)
    {
        // TODO : WARNING -> TEMPORARY
        $this->post($key);
    }

    /**
     * Retrieve a value from a DELETE request
     *
     * @access public
     * @param NULL $key Key to retrieve from the DELETE request
     * If NULL an array of arguments is returned
     * @param NULL $xss_clean Whether to apply XSS filtering
     * @return array|string|NULL Value from the DELETE request; otherwise, NULL
     */
    public function delete($key = NULL, $xss_clean = NULL)
    {
        $json = json_decode($key);
        $user = $this->dao->get($json->id);
        if ($user) {
            if($this->dao->delete($user)) return true;
            else return false;
        } else return false;
    }


    public function REST_GET($id)
    {
        $id = ( int ) $id;
        $this->get($id);
    }

    public function REST_POST(string $json)
    {
        $this->post($json);
    }

    public function REST_PUT(string $json)
    {
        $this->put($json);
    }

    public function REST_DELETE(string $json)
    {
        $this->delete($json);
    }
}