<?php

namespace App\Models;
use CodeIgniter\Model;

class GuaranteeModel extends Model {
    protected $table = 'guarantee';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'icon', 'name', 'description'];
}