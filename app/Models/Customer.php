<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $fillable = ['code', 'name', 'address', 'status'];

    // public static function generateCode()
    // {
    //     $code = 'customer' . strtoupper(Str::random(6)); // Generate a random code with a prefix
    //     while (self::where('code', $code)->exists()) {
    //         $code = 'customer' . strtoupper(Str::random(6)); // Regenerate the code if it already exists
    //     }
    //     return $code;
    // }

    public function getStatusAttribute()
    {
        return ($this->attributes['status'] == 1) ? 'Active' : 'In-Active';
    }
}
