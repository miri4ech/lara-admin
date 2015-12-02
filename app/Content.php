<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {

	protected $table = 'content';

	protected $fillable = ['title', 'description', 'path', 'content_category_id'];
}
