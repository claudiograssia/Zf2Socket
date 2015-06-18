# Zf2Socket

## Installation
with [Composer](http://getcompoer.org)

```json
{
    "require": {
        "claudiograssia/zf2socket": "dev-master"
    }
}
```

## Use
will be use with zendframework 2

```php
class IndexController extends AbstractActionController {
    
    public function indexAction() {
        
        $server = $this->getServerService();
        
        
        
    }
    
    /**
     * @return \Zf2Socket\Service\Server
     */
    protected function getServerService() {
        return $this->getServiceLocator()->get('SocketServer');
    }
}
```


