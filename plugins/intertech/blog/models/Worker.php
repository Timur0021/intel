<?php namespace Intertech\Blog\Models;

use Model;

/**
 * Worker Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Worker extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'intertech_blog_workers';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
