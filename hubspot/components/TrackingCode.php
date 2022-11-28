<?php namespace Bs\Hubspot\Components;

use Cms\Classes\ComponentBase;
use Bs\Hubspot\Models\Settings;

class TrackingCode extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'bs.hubspot::lang.components.tracking_code.name',
            'description' => 'bs.hubspot::lang.components.tracking_code.desc',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['hub_id'] = Settings::get('hub_id');
    }
}