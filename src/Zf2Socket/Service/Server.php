<?php 

namespace Zf2Socket\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocator;

use Hoa\Socket\Server as ServerSocket;

class Server implements FactoryInterface {

  public function createService(ServiceLocator $serviceLocator) {
    return $this;
  }
  
  public function init(
      $socket,
      Closure $closure
  ) {
     $server = new ServerSocket($socket);
     $server->connectAndWait();
     
     while(true) {
          foreach ($server->select() as $node) {
              $closure->__invoke($server); 
          }
     }
  }
}
