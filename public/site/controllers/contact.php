<?php

return function($site, $pages, $page) {
  $alert = null;

  if (get('submit')) {
    $data = [
      'name'  => get('name'),
      'email' => get('email'),
      'text'  => get('text'),
    ];
    $rules = [
      'name' => [
        'required',
      ],
      'email'=> [
        'required',
        'email',
      ],
      'text' => [
        'required',
        'min' => 3,
        'max' => 3000,
      ],
    ];
    $messages = [
      'name'  => 'Please enter a valid name',
      'email' => 'Please enter a valid email address',
      'text'  => 'Please enter a text between 3 and 3000 characters',
    ];

    if ($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    } else {
      $body  = snippet('contact', $data, true);
      $email = email([
        'to'      => $page->contact_to(),
        'from'    => $page->contact_from(),
        'subject' => $page->contact_subject(),
        'replyTo' => $data['email'],
        'body'    => $body,
      ]);

      if ($email->send()) {
        go($page->contact_redirect());
      } else {
        $alert = [
          $email->error(),
        ];
      }
    }
  }

  return compact('alert');
};