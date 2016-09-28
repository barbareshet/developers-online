<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract{
    use Authenticatable;
    /**
     * The DB table used by this model
     * 
     * @var string
     */
    protected $table = 'users';
    
    /**
     * The Attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'first_name',
        'last_name',
        'location',
        ];
    
    /**
     * The attributes that are excluded from this Model's JSON form
     * 
     * @var array
     */
    protected $hidden = [
           'password',
           'remember_token',
        ];
}
