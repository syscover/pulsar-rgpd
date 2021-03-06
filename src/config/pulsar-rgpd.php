<?php

return [
    //******************************************************************************************************************
    //***   Trademark
    //******************************************************************************************************************
    'trademark' => env('RGPD_TRADEMARK', 'CocaCola'),

    //******************************************************************************************************************
    //***   Company data
    //******************************************************************************************************************
    'company' => env('RGPD_COMPANY', 'The CocaCola Company Inc.'),
    'address' => env('RGPD_ADDRESS', 'Central street'),
    'zip' => env('RGPD_ZIP', '00000'),
    'locality' => env('RGPD_LOCALITY', 'Atlanta'),
    'state' => env('RGPD_STATE', 'Atlanta'),
    'tin' => env('RGPD_TIN', 'B000000'),
    'commercial_registry' => env('RGPD_COMMERCIAL_REGISTRY', 'Registro Mercantil de Madrid'),
    'registry_data' => env('RGPD_REGISTRY_DATA', 'Tomo: 00000 Folio: 00 Hoja: M 000000'),

    //******************************************************************************************************************
    //***   update date
    //******************************************************************************************************************
    'update_date' => env('RGPD_UPDATE_DATE', '01.01.2019'),

    //******************************************************************************************************************
    //***   website url
    //******************************************************************************************************************
    'website_url' => env('RGPD_WEBSITE_URL', '<a href="http://cocacola.com">www.cocacola.com</a>'),
];