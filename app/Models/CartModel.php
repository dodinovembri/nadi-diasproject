<?php

namespace App\Models;
use CodeIgniter\Model;

class CartModel extends Model {
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'user_id', 'product_id', 'qty'];
}