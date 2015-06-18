<?php 

namespace Zf2Socket\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocator;

class Server implements FactoryInterface {

  public function createService(ServiceLocator $serviceLocator) {
    return $this;
  }
  
  public function init() {
  
  }
  
}
