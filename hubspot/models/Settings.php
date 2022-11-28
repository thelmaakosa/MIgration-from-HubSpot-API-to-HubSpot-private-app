<?php namespace Bs\Hubspot\Models;

use Model;

/**
 * Settings Model
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'bs_hubspot_settings';
    public $settingsFields = 'fields.yaml';

    public function initSettingsData() {}

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