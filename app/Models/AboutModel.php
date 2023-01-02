<?php

namespace App\Models;
use CodeIgniter\Model;

class AboutModel extends Model {
    protected $table = 'about_us';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'image', 'text1', 'text2', 'text3', 'description'];
}