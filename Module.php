<?php 

namespace Zf2Socket

class Module {

  public function getServiceConfig() {
    return [
      'SocketServer' => 'Zf2Socket\Service\Server'
    ];
  }

}
