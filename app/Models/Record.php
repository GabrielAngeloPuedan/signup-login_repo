<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'gender',
        'age',
        'phone_number',
        'month_bdate',
        'day_bdate',
        'year_bdate',
        'street_address',
        'street_address_line_2',
        'city',
        'state_province',
        'postal_zipcode',
        'country',
        'weight',
        'height',
        'contact_first_name',
        'contact_last_name',
        'contact_street_address',
        'contact_street_address_line_2',
        'contact_city',
        'contact_state_province',
        'contact_postal_zipcode',
        'contact_country',
        'contact_phone_number',
        'hepa',
        'chicken_pox',
        // 'medical_history',
        // 'allergies',
        // 'list_reg_med',

    ];


    public function scopeFilter($query, array $filters) {
        if ($filters['id'] ??false) {
            $query->where('id', 'like', '%' . request('id') . '%');
           }
        if ($filters['search'] ??false) {
            $query->where('first_name' , 'like', '%' . request('search') . '%')
            ->orWhere('last_name' , 'like', '%' . request('search') . '%')
            ->orWhere('gender' , 'like', '%' . request('search') . '%')
            ->orWhere('city' , 'like', '%' . request('search') . '%')
            ->orWhere('age' , 'like', '%' . request('search') . '%')
            ->orWhere('id' , 'like', '%' . request('search') . '%');
           }
  
        
     
     }
}
