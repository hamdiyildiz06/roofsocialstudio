<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends HY_Controller {

    public $viewFolder = "";
//    public $user;

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "dashboard_v";
//        $this->user = get_active_user();

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index()
	{
	    $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";

        $this->load->model("product_model");
        $this->load->model("brand_model");
        $this->load->model("user_model");
        $this->load->model("testimonial_model");


        $viewData->productCount = count($this->product_model->get_all(["isActive" =>  1]));
        $viewData->brandCount = count($this->brand_model->get_all(["isActive" =>  1]));
        $viewData->userCount = count($this->user_model->get_all(["isActive" =>  1]));
        $viewData->userCount = count($this->user_model->get_all(["isActive" =>  1]));
        $viewData->testimonialCount = count($this->testimonial_model->get_all(["isActive" =>  1]));


		$this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
	}
}
