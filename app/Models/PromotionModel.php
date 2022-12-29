<?php

namespace App\Models;
use CodeIgniter\Model;

class PromotionModel extends Model {
    protected $table = 'promotion';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'name', 'image', 'text1', 'text2', 'text_button', 'button_link'];
}