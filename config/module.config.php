<?php 
return [
  'console' => array(
        'router' => array(
            'routes' => array(
                'indexer' => array(
                    'options' => array(
                        'route' => 'socket test',
                        'defaults' => array(
                            'controller' => 'Zf2SocketTestController',
                            'action' => 'index'
                        )
                    )
                )
            ),
        ),
  )
  'controllers' => [
    'invokables' => [
      'Zf2SocketTestController' => 'Zf2Socket\Controller\TestController'
    ]  
  ]
];
