<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use Philo\Blade\Blade;

class MY_Controller extends CI_Controller {

    protected $em;

    protected $blade;
    protected $views = APPPATH . '/views';
    protected $cache = APPPATH . '/cache';

    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->getEntityManager();


	      $this->blade = new Blade($this->views, $this->cache);
        $this->blade->view()->composer("*", function($view)
        {
            $view->with("session", $this->session);
            $view->with("uri", $this->uri);
        });

    }

}
