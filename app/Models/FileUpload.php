<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed id
 * @property mixed post_cruds_id
 * @property mixed file
 * @property mixed created_at
 * @property mixed updated_at
 */
class FileUpload extends Model
{
    use HasFactory;

    public function postCrud(): BelongsTo
    {
        return $this->belongsTo(PostCrud::class);
    }
}
