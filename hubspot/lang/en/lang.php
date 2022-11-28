<?php

return [
    'common' => [
    ],
    'plugin' => [
        'name' => 'Hubspot',
        'desc' => "Allows HubSpot users to install the HubSpot tracking code",
    ],
    'settings' => [
        'menu_label' => 'HubSpot',
        'menu_description' => 'HubSpot settings',
        'category' => 'Marketing',
        'fields' => [
            'hub_id' => 'Hub portal ID',
            'hub_api_token' => 'Hub API token',
        ]
    ],
    'forms' => [
        'menu_label' => 'HubSpot',
        'menu_description' => 'HubSpot forms',
        'fields' => [
            'house_form' => 'House page form',
            'footer_form' => 'Footer signup form',
            'has_dropdown_homes' => 'Has dropdown homes',
            'dropdown_fields' => 'Select field',
        ]
    ],
    'components' => [
        'tracking_code' => [
            'name' => 'HubSpot Tracking Code',
            'desc' => 'Adds HubSpot Tracking Code on Layout or Page',
        ],
    ]
];