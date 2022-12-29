<?php

namespace App\Models;
use CodeIgniter\Model;

class BannerModel extends Model {
    protected $table = 'banner';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'image', 'text1', 'text2', 'text_button', 'button_link'];
}