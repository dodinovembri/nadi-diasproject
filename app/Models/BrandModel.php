<?php

namespace App\Models;
use CodeIgniter\Model;

class BrandModel extends Model {
    protected $table = 'brand';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'name', 'image'];
}