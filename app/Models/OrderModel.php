<?php

namespace App\Models;
use CodeIgniter\Model;

class OrderModel extends Model {
    protected $table = 'order';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'user_id', 'order_number', 'total', 'total_discount', 'shipping_fee', 'voucher'];
}