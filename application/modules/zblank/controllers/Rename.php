<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rename extends MX_Controller
{
    //variabel url
    protected $slug = 'RENAME';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('statistik-pendidikan/Statistic_educations_model', 'mStatPendidikan');
    }

    public function index()
    {
        $this->load->view('zblank/index');
    }
}
