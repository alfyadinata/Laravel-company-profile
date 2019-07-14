<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = ['company_name','about','why_choose_us','slogan','slogan_description', 'meta_keyword', 'meta_author', 'meta_description', 'logo', 'address', 'banner_1', 'banner_2', 'fb', 'ig', 'tweet', 'fax', 'phone', 'email', 'maps', 'captcha'];
}
