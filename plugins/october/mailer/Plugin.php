<?php namespace October\Mailer;

use Backend;
use System\Classes\PluginBase;

/**
 * mailer Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'mailer',
            'description' => 'Plugin for sending emails',
            'author'      => 'october',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return ['\October\Mailer\Components\ContactForm' => 'contactform']; // Remove this line to activate

        return [
            'October\Mailer\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'october.mailer.some_permission' => [
                'tab' => 'mailer',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'mailer' => [
                'label'       => 'mailer',
                'url'         => Backend::url('october/mailer/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['october.mailer.*'],
                'order'       => 500,
            ],
        ];
    }
}
