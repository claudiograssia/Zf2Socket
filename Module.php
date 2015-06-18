<?php 

namespace Zf2Socket

class Module {

  public function getServiceConfig() {
        return [
          'SocketServer' => 'Zf2Socket\Service\Server'
        ];
  }
  
  public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
  }

}
