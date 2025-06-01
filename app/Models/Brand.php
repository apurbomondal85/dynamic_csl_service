<?php

namespace App\Models;

use App\Library\Enum;
use Illuminate\Support\Facades\Vite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'avatar',
        'designation',
        'url',
        'company',
        'message',
        'is_featured',
        'is_active',
        'operator_id',
    ];

    public function operator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'operator_id');
    }


    public function getAvatar(): string
    {
        $path = public_path($this->avatar);

        if ($this->avatar && is_file($path) && file_exists($path)) {
            return asset($this->avatar);
        }

        return Vite::asset(Enum::NO_IMAGE_PATH);
    }
}
