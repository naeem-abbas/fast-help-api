<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $fillable = [
        'fullName',
        'emailAddress',
        'password',
        'role'
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
?>
