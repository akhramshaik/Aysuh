<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stores extends Model
{


    protected $table = 'stores'; 
    protected $fillable = ['account_id','store_name','products_selling','base_cost','location','account_status','point_of_contact','phone_number'];







}
