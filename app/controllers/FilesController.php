<?php

use Phalcon\Mvc\Controller;

class FilesController extends Controller
{

	public function indexAction()
	{
		$this->view->disable();
		$this->response->setContentType('application/json', 'UTF-8');
		$this->response->setContent(json_encode(ScanDir::GetDir()));

	}
}
