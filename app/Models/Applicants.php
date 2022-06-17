<?php
namespace App\Models;

use CodeIgniter\Model;

class Applicants extends Model
{
	
	protected $table      = 'applicants';
	protected $primaryKey = 'applicantID';
	protected $returnType = 'object';

	protected $allowedFields = ['firstName', 'lastName', 'phoneNumber','email','jobTitle','cvUrl'];

	protected $useTimestamps = true;
	protected $dateFormat = 'int';
    protected $useSoftDeletes = false;

	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

}