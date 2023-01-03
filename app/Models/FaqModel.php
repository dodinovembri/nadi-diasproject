<?php

namespace App\Models;
use CodeIgniter\Model;

class FaqModel extends Model {
    protected $table = 'faq';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'question', 'answer'];
}