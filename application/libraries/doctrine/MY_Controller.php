<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    
    protected $em;
    
    public function __construct() {
        parent::__construct();
        $this->em = $this->doctrine->getEntityManager();
    }
    
}
