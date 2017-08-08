<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

class PagesController extends AppController
{
	public function test(){
		$this->viewBuilder()->setLayout('admin');
    }
}