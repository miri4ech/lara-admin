<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model {

	protected $table = 'content_category';

	protected $fillable = ['category_name'];
}
