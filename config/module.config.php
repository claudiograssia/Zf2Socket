<?php 
return [
  'console' => [
    'router' => [
      'routes' => [
        'indexer' => [
          'options' => [
            'route' => 'socket test',
            'defaults' => [
              'controller' => 'Zf2SocketTestController',
              'action' => 'index'
            ]
          ]
        ]
      ],
    ],
  ],
  'controllers' => [
    'invokables' => [
      'Zf2SocketTestController' => 'Zf2Socket\Controller\TestController'
    ]  
  ]
];
