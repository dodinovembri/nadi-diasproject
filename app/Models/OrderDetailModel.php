<?php

namespace App\Models;
use CodeIgniter\Model;

class OrderDetailModel extends Model {
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'order_id', 'product_id', 'qty', 'price', 'discount', 'total_price', 'total_discount'];
}