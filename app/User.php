<?php

namespace Basicapp;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Daylight\Auth\Accounts\CanConfirmAccount;
use Daylight\Auth\SocialNetworks\CanLoginWithFacebook;
use Daylight\Auth\SocialNetworks\CanLoginWithGoogle;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Daylight\Contracts\Auth\CanConfirmAccount as CanConfirmAccountContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract, CanConfirmAccountContract
{
    use Authenticatable, CanResetPassword, CanConfirmAccount, CanLoginWithFacebook, CanLoginWithGoogle;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'avatar', 'verified', 'remember_token'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
