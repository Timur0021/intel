<?php namespace Intertech\Blog;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Blog',
            'description' => 'No description provided yet...',
            'author' => 'Intertech',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

//        return [
//            'Intertech\Blog\Components\MyComponent' => 'myComponent',
//        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

//        return [
//            'intertech.blog.some_permission' => [
//                'tab' => 'Blog',
//                'label' => 'Some permission'
//            ],
//        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'blog' => [
                'label' => 'Blog',
                'url' => Backend::url('intertech/blog/posts'),
                'icon' => 'icon-leaf',
                'permissions' => ['intel.blog.*'],
                'order' => 500,
                'sideMenu' => []
            ]
        ]; // Remove this line to activate

 //       return [
//            'blog' => [
//                'label' => 'Blog',
//                'url' => Backend::url('intertech/blog/mycontroller'),
//                'icon' => 'icon-leaf',
//                'permissions' => ['intertech.blog.*'],
//                'order' => 500,
//            ],
//        ];
    }
}
