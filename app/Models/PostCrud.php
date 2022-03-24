<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property mixed id
 * @property mixed title
 * @property mixed description
 * @property mixed created_at
 * @property mixed updated_at
 * @property mixed deleted_at
 */
class PostCrud extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'description'];

    public function fileUpload(): HasOne{
        return $this->hasOne(FileUpload::class);
    }
}
