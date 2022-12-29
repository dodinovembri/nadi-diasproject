<?php

namespace App\Models;
use CodeIgniter\Model;

class ExclusiveModel extends Model {
    protected $table = 'exclusive';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'name', 'image', 'text1', 'text2', 'text_button', 'button_link', 'text3', 'text4', 'text5', 'text6'];
}