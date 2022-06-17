<?php

namespace App\Controllers;

use App\Models\Applicants;

use CodeIgniter\Config\Services;

class Hire extends BaseController
{

	protected $_session, $_applicantsModel;

	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);

		$this->_session = Services::session(); 

        // $this->_applicantID = $this->_session->get('applicantID');

        // $data['applicantData'] = $this->session->applicantData();

		$this->_applicantsModel = new Applicants();

	}

	public function index()
		{
			echo view('hire');
		}

    function submit( $applicantID = -1){
        
        $applicantData = array(
				'firstName' => $this->request->getPost('fname'),
				'lastName' => $this->request->getPost('lname'),
				'email' => $this->request->getPost('email'),
				'phoneNumber' => $this->request->getPost('phone-no'),
				'email' => $this->request->getPost('email'),
				'jobTitle' => $this->request->getPost('job-title'),
				// 'cvUrl' => $sourceUrl."".$target_file,
				'cvUrl' => $this->request->getPost('cvUrl'),
				// 'password' => md5($this->request->getPost('password')),
        );
        // var_dump($applicantData);

        if($this->_applicantsModel->save($applicantData)){
            // $this->session->set_flashdata('success', 'Success');
            // redirect('hire');
            echo "cv uploaded successfully";
        
            // if (file_exists($target_file)) 
            //     {
            //         echo "Sorry, file already exists.";
            //         $uploadOk = 0;
            //     }
            // if ($_FILES["cvkUrl"]["size"] > 500000)
            //     {
            //         echo "Sorry, your file is too large.";
            //         $uploadOk = 0;
            //     }
            // if($imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "pdf" ) 
            //     {
            //         echo "Sorry, only doc, docx, pdf";
            //         $uploadOk = 0;
            //     }
            // if ($uploadOk == 0) 
            //     {
            //         echo "Sorry, your file was not uploaded.";
            //     } 
            // else 
            //     {
            //         if (move_uploaded_file($_FILES["cvUrl"]["tmp_name"], $target_file)) 
            //             {
            //                 echo "The file ". basename( $_FILES["cvUrl"]["name"]). " has been uploaded.";
            //             } 
            //         else 
            //             {
            //                 echo "Sorry, there was an error uploading your file.";
            //             }
            //     }
    
        }

    }      
}

