<?php namespace Bs\Hubspot;

use System\Classes\PluginBase;

/**
 * HubspotTrackingCode Plugin Information File
 */
class Plugin extends PluginBase
{

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
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'bs.hubspot::lang.plugin.name',
            'description' => 'bs.hubspot::lang.plugin.desc',
            'author' => 'Bs',
            'icon' => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Bs\Hubspot\Components\TrackingCode' => 'hubspotTrackingCode',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'bs.hubspot.manage_forms' => [
                'tab' => 'Hubspot',
                'label' => 'Manage hubspot forms'
            ],
            'bs.hubspot.access_settings' => [
                'tab' => 'Hubspot',
                'label' => 'Manage hubspot settings'
            ],
        ];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'bs.hubspot::lang.settings.menu_label',
                'description' => 'bs.hubspot::lang.settings.menu_description',
                'category' => 'bs.hubspot::lang.settings.category',
                'icon' => 'icon-cog',
                'class' => 'Bs\Hubspot\Models\Settings',
                'order' => 100,
                'permissions' => ['bs.hubspot.access_settings',],
            ],
            'forms' => [
                'label' => 'bs.hubspot::lang.forms.menu_label',
                'description' => 'bs.hubspot::lang.forms.menu_description',
                'category' => 'bs.hubspot::lang.settings.category',
                'icon' => 'icon-cog',
                'class' => 'Bs\Hubspot\Models\SettingsForms',
                'order' => 101,
                'permissions' => ['bs.hubspot.manage_forms'],
            ],

        ];
    }
}
