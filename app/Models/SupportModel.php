<?php

namespace App\Models;
use CodeIgniter\Model;

class SupportModel extends Model {
    protected $table = 'support';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'icon', 'name', 'text1', 'text2', 'text3'];
}