<?php
class controller {

    public $load;
    public $model;

    function __construct() {

        $this->load = new load();
        $this->user = new user();

        $this->home();

    }

    function home() {

        $this->user->userID = 'jamecoop';
        $this->user->firstname = 'James';
        $this->user->lastname = 'Cooper';
        $this->user->email = 'jamecoop@iupui.edu';
        $this->user->role = 'admin';

        $data = $this->user->getName();

        $this->load->view('view.php',$data);



    }

}