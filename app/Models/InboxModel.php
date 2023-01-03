<?php

namespace App\Models;
use CodeIgniter\Model;

class InboxModel extends Model {
    protected $table = 'inbox';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'name', 'email', 'message'];
}