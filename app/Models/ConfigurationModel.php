<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigurationModel extends Model
{
    protected $table = 'configuration';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'title', 'keyword', 'author', 'text1_status', 'text1_text', 'text2_status', 'text2_text', 'header_top_status', 'frontend_logo_name', 'extranet_logo_name', 'phone', 'header_middle_status', 'guarantee_status', 'promotion_status', 'product_new_arrival_status', 'support_status', 'blog_status', 'brand_status', 'address', 'email', 'working_day', 'description', 'copyright'];
}
