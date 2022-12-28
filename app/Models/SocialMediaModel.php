<?php

namespace App\Models;
use CodeIgniter\Model;

class SocialMediaModel extends Model {
    protected $table = 'social_media';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'name', 'icon', 'link'];
}