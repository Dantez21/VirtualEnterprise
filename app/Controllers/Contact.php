<?php

namespace App\Controllers;

use App\Models\Message;

use CodeIgniter\Config\Services;

class Contact extends BaseController
{

	protected $_session, $_messageModel;

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);

		$this->_session = Services::session(); 

		$this->_messageModel = new Message();

	}

	public function index()
		{
			echo view('contact');
		}

    function send( $messageID = -1){
        
        $messageData = array(
				'name' => $this->request->getPost('name'),
				'email' => $this->request->getPost('email'),
				'phone' => $this->request->getPost('phone'),
				'message' => $this->request->getPost('message'),
        );
        // var_dump($messageData);

        if($this->_messageModel->save($messageData)){
            echo "message send successfully";

			// $this->session->set_flashdata('send', 'Success');
			// redirect('contact');
        
        }

    }      
}

