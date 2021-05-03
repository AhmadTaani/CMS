<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'status',
        'submitted_by',
        'complaint_category',
        'user_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'complaint_category');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'complaint_category');
    }
}
