<?php namespace Intertech\Blog\Models;

use Model;

/**
 * Post Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'intertech_blog_posts';

    public $belongsTo = [
        'category' => [Category::class, 'key' => 'category_id'],
    ];

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
