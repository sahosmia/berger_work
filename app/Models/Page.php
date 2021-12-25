<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'portfolio_title',
        'portfolio_content',
        'diarie_title',
        'diarie_content',
        'contact_bg',
        'contact_head_logo',
        'copywrite',
        'contact_details',
        'contact_map',
        'contact_banner',
        'contact_logo',
        'massenger',
        'md_speech',
        'md_speech_img',
        'chairman_speech',
        'chairman_speech_img',
        'service_banner',
    ];
}
