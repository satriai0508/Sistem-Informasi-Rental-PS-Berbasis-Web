<?php

namespace App\Models;

use App\Models\User;
use App\Models\Device;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['price','waktu_sewa','device_id','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
