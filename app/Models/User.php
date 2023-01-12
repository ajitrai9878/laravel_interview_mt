<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function storeData($request)
    {
        $data = $request->all();
        unset($data['_token']);
        if ($request->id) {
            return self::where(['id' => $request->id])
                ->update($data);
        }
        $data['password'] = Hash::make($request->password);
        return self::create($data);
    }

    public function changeStatus($id, $request)
    {
        if ($request->status === '0') {
            return self::where(['id' => $id])
                ->update(['status' => '1']);
        }
        if ($request->status === '1') {
            return self::where(['id' => $id])
                ->update(['status' => '0']);
        }
        return false;
    }

    public function changePassword($request)
    {
        return self::where(['id' => $request->id])
            ->update(['password' => Hash::make($request->password)]);
    }

    public function deleteDataPermanent($id)
    {
        return self::where(['id' => $id])->delete();
    }
}

