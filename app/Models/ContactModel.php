<?php

namespace App\Models;
use CodeIgniter\Model;

class ContactModel extends Model {
    protected $table = 'contact_us';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status'. 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'iframe_maps_link', 'text1', 'description'];
}