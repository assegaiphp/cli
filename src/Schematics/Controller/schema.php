<?php

return [
  'properties' => [
    'name' => [
      'description' => 'The name of the new controller.',
      'type' => 'string',
      'pattern' => "^(?:@[a-zA-Z0-9-*~][a-zA-Z0-9-*._~]*/)?[a-zA-Z0-9-~][a-zA-Z0-9-._~]*$",
      'default' => [
        'source' => 'argv',
        'index' => 0,
      ],
      'x-prompt' => "What name would you like to use for the controller?",
    ],
    'path' => [
      'description' => 'The path where the schema files will be generated.',
      'type' => 'string',
      'pattern' => "/^(\/?\w+\/?)+$/",
      'default' => [
        'source' => 'argv',
        'index' => 1,
      ]
    ],
    'updateModule' => [
      'path' => '__name@pascalize__/__name@pascalize__Module.php',
      'controllers' => ['__name@pascalize__Controller::class'],
    ]
  ]
];
