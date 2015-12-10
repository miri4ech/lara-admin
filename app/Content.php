<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model {

	/**
	 * defining table name
	 * @var string
	 */
	protected $table = 'content';

	/**
	 * defining primary key
	 * @var string
	 */
	protected $primaryKey = 'content_id';

	/**
	 * fillables for content table
	 * @var array
	 */
	protected $fillable = ['title', 'description', 'path', 'content_category_id'];

	/**
	 * content belongs to a category
	 * @return builder
	 */
	public function category() {
		return $this->belongsTo('App\ContentCategory', 'content_category_id', 'content_category_id');
	}
}
