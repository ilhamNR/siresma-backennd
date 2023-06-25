<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $trash_bank_id
 * @property string $username
 * @property string $full_name
 * @property string $email
 * @property integer $phone
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property TrashStoreLog[] $trashStoreLogs
 * @property TrashBank $trashBank
 * @property SavingsBalance[] $savingsBalances
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['trash_bank_id', 'username', 'full_name', 'email', 'phone', 'password', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trashStoreLogs()
    {
        return $this->hasMany('App\Models\TrashStoreLog');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trashBank()
    {
        return $this->belongsTo('App\Models\TrashBank');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function savingsBalances()
    {
        return $this->hasMany('App\Models\SavingsBalanceData');
    }
}
