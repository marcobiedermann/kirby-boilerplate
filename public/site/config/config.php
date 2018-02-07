<?php

c::set('license', 'put your license key here');

c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'English',
    'default' => true,
    'locale'  => 'en_US',
    'url'     => '/',
  ),
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
    'locale'  => 'de_DE',
    'url'     => '/de',
  ),
));
c::set('language.detect', true);

c::set('routes', array(
  array(
    'pattern' => 'sitemap.xml',
    'action'  => function() {
      return site()->visit('sitemap');
    }
  ),
  array(
    'pattern' => 'sitemap',
    'action'  => function() {
      return go('sitemap.xml');
    }
  )
));