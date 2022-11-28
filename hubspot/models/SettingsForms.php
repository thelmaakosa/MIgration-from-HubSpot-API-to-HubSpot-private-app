<?php namespace Bs\Hubspot\Models;

use Illuminate\Support\Facades\Log;
use Model;
use SevenShores\Hubspot\Exceptions\BadRequest;

/**
 * Settings Model
 */
class SettingsForms extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'bs_hubspot_settings_forms';
    public $settingsFields = 'fields.yaml';

    public static function byType ($type)
    {
        if (in_array($type, array_keys(SettingsForms::instance()->value)))
            return self::instance()->{$type};
        return null;
    }

    public static function allForms ()
    {
        return array_values(get_object_vars(self::instance()));
    }

    public function initSettingsData ()
    {
    }

    public function getContactUsFormOptions ()
    {
        return $this->prepareHubFormsForSelect();
    }

    public function getHousePageFormOptions ()
    {
        return $this->prepareHubFormsForSelect();
    }

    public function getServiceRequestFormOptions ()
    {
        return $this->prepareHubFormsForSelect();
    }

    private function prepareHubFormsForSelect ()
    {
        $hubspot = new \SevenShores\Hubspot\Factory([
            'key' => Settings::instance()->hub_api_token
        ]);
        try {
            return array_reduce($hubspot->forms()->all()->toArray(), function ($acc, $item) {
                if ($item['deletable'])
                    $acc[$item['guid']] = $item['name'];
                return $acc;
            }, []);
        } catch (BadRequest $e) {
            Log::error($e->getMessage());
            return ['Check HubSpot Api key'];
        }
    }

    public function getDropdownOptions ($fieldName, $value, $formData)
    {
//        dump($formData);
        $hubspot = new \SevenShores\Hubspot\Factory([
            'key' => Settings::instance()->hub_api_token
        ]);
//        house_page_form
//contact_us_form
//service_request_form
//        dump($fieldName);die;
        if ($fieldName == 'dropdown_fields') {
            $formId = $this->contact_us_form;
        } elseif ($fieldName == 'dropdown_fields2') {
            $formId = $this->house_page_form;
        } elseif ($fieldName == 'dropdown_fields3') {
            $formId = $this->service_request_form;
        }
        try {
            $fields = $hubspot->forms()->getFields($formId)->toArray();
        } catch (BadRequest $exception) {
            $fields = [];
        }

        return array_reduce($fields, function ($acc, $e) {
            if (in_array($e['fieldType'], ['checkbox', 'select']))
                $acc[$e['name']] = $e['label'];
            return $acc;
        }, []);

    }


//$hubspot = new SevenShores\Hubspot\Factory([
//'key'      => env('HUBSPOT_API_KEY', '1517acd0-15a6-481c-9941-8698c7a3f721' /*'demo'*/),
//'oauth'    => false, // default
//'base_url' => 'https://api.hubapi.com' // default
//]);
//$form = $hubspot->forms()->getById('14cc98a6-d556-491d-b1f1-63d57b927e40');
//
//$resp = $hubspot->forms()->submit(4891226,$form->guid,[
//'email'=>'test@test.com',
//'firstname'=>'Mykola',
//'lastname'=>'Nevmerzhytskyi',
//'mobilephone'=>'+380674586190',
//'zip_code'=>'444444',
//'lead_source'=>'ads',
//]);
//dump($resp);die;

}