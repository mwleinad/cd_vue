<?php

namespace Modules\Company\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 * @package Modules\Company\Models
 */
class Company extends Model {
    use SoftDeletes, UuidTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $hidden = ['id'];

    public function user() {
        return $this->belongsTo('Modules\User\Models\User');
    }
}
