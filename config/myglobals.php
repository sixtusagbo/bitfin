<?php

return [
  // TODO: Create Setting model and fetch these from db

  'app_name' => 'Bitcoin Financial Company',

  /*
    |--------------------------------------------------------------------------
    | Social Media Links
    |--------------------------------------------------------------------------
    |
    | This option controls the social media links available across the app
    |
    */
  'socials' => [
    // 'facebook' => 'https://facebook.com/',
    // 'twitter' => 'https://twitter.com/',
    // 'instagram' => 'https://instagram.com/',
    // 'whatsapp' => '+1 345 676 679',
    'email' => 'support@bitfin.co',
    'youtube' => 'https://www.youtube.com/embed/WrgwWDszPMs?autoplay=1',
  ],

  /*
    |--------------------------------------------------------------------------
    | Finance
    |--------------------------------------------------------------------------
    |
    | This option controls the financial settings of the app
    |
    */
  'currency' => '$',
  'ref_worth' => 50,
  'withdrawal_charge' => 0.00, // In percent
  'min_investment' => 100,
  'min_withdrawal' => 20,
];
