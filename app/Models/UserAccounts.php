<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// added
use Illuminate\Contracts\Auth\Authenticatable;

class UserAccounts extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'user_accounts';

    protected $fillable = [
        'Lastname',
        'Firstname',
        'Middlename',
        'CompleteName',
        'Email',
        'UserType',
        'ContactNumber',
        'Password',
    ];

    protected $hidden = [
        'Password',
        'remember_token',
    ];

    protected $casts = [
        'Password' => 'hashed',
    ];

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->Password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
