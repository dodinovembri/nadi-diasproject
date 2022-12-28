<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigurationModel extends Model
{
    protected $table = 'configuration';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'title', 'keyword', 'author', 'text1_status', 'text1_text', 'text2_status', 'text2_text', 'frontend_logo_name', 'extranet_logo_name', 'phone', 'address', 'email', 'working_day', 'description', 'copyright'];
}
