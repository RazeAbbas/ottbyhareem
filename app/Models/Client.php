<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
        protected $fillable = ['client_name', 'client_img', 'office_id', 'company_id', 'created_user'];
    
}
