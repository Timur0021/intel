<?php namespace Intertech\Blog\Models;

use Model;

/**
 * Category Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'intertech_blog_categories';

    protected $fillable = ['name'];

    public $hasOne = [
        'post' => [Post::class]
    ];

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
