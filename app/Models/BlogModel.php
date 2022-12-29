<?php

namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model {
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'title', 'image', 'blog_category_id', 'date', 'author', 'short_description', 'description', 'tag'];
}