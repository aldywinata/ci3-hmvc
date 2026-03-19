<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rename extends MX_Controller
{
    //variabel url
    protected $slug = 'RENAME';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('folder_name/model_name', 'alias_model');
    }

    public function index()
    {
        $this->load->view('zblank/index');
    }
}
