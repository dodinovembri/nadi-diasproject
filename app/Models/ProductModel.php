<?php

namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'product_category_id', 'sku', 'name', 'rating', 'short_description', 'description', 'price', 'qty', 'discount', 'tag', 'image1', 'image2', 'image3', 'is_featured', 'is_new_arrival'];
}