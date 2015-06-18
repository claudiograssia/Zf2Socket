# Zf2Socket

## Installation
with [Composer](http://getcompoer.org) and install dependecies hoa\socket.

```json
{
    "require": {
        "claudiograssia/zf2socket": "dev-master"
    }
}
```

The first step after installation, write into **config/application.config.php**
```php
return array(
    'modules' => array(
        "Zf2Socket",
        "Application",
        "etc"
    )
)
```

## Example Use
will be use with zendframework 2

```php
class IndexController extends AbstractActionController {
    
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
    
    /**
     * @return \Zf2Socket\Service\Server
     */
    protected function getServerService() {
        return $this->getServiceLocator()->get('SocketServer');
    }
}
```


