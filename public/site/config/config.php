<?php

c::set([
  'license'         => 'put your license key here',
  'languages'       => [
    [
      'code'    => 'en',
      'name'    => 'English',
      'default' => true,
      'locale'  => 'en_US',
      'url'     => '/en',
    ],
    [
      'code'    => 'de',
      'name'    => 'Deutsch',
      'locale'  => 'de_DE',
      'url'     => '/de',
    ],
  ],
  'language.detect' => true,
  'thumbs.driver'   => 'im'
]);
