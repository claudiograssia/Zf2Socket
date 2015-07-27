<?php 

namespace Zf2Socket\Controller;

use Zend\Mvc\AbstractActionController;

class TestController extends AbstractActionController {
  
    public function indexAction() {
          $server = $this->getServerService();
          $server->init('tcp://127.0.0.1:4242', function($server) {
              $line = $server->readLine();
  
              if (empty($line)) {
                  $server->disconnect();
                  continue;
              }
  
              echo '< ', $line, "\n";
              $server->writeLine(strtoupper($line));
          });
    }

}
