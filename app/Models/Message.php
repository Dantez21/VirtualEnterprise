<?php
namespace App\Models;

use CodeIgniter\Model;

class Message extends Model
{
	
	protected $table      = 'messages';
	protected $primaryKey = 'messageID';
	protected $returnType = 'object';

	protected $allowedFields = ['name', 'email', 'phone','message'];

	protected $useTimestamps = true;
	protected $dateFormat = 'int';
    protected $useSoftDeletes = false;

	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

}