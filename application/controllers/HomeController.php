<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Mohammad Yazdani
 * Date: 1/27/2017
 * Time: 3:21 PM
 */
class HomeController extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct ()
    {
        // TODO : TEST

        parent::__construct();
        $this->load->helper('url');
    }

    public function index ()
    {
        $this->load->view('home');
    }

    public function inProgress ()
    {
        $this->load->view('inProgress');
    }

    public function Introduction ()
    {

    }

    public function Documentation ()
    {

    }

    public function GitHub ()
    {
        redirect('https://github.com/mohammad-yazdani/gatekeeper', 'refresh');
    }

    public function Registration ()
    {

    }
}