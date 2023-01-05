<?php

namespace App\Models;
use CodeIgniter\Model;

class BillModel extends Model {
    protected $table = 'bill';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'due_date', 'total', 'to_account_number', 'description']; 
}