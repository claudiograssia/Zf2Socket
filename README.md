# Zf2Socket

## Installation
with [Composer](http://getcompoer.org) and install dependecies hoa\socket.

```json
{
    "require": {
        "claudiograssia/zf2socket": "0.0.1-dev"
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

start test socket into terminal with this command
## `myprojectzf2/public php index.php socket test`

or use

## Example Use
will be use with zendframework 2.

And it is be start with console router.
Create a console become this example
```php
return array(
    'console' => array(
        'router' => array(
            'routes' => array(
                'indexer' => array(
                    'options' => array(
                        'route' => 'socket',
                        'defaults' => array(
                            'controller' => 'Application\Controller\Index',
                            'action' => 'index'
                        )
                    )
                )
            ),
        ),
    )
)
````

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
Start socket with command into terminal
## `myprojectzf2/public php index.php socket`

and it will can be use with terminal 
```sh
$ telnet 127.0.0.1
Trying 127.0.0.1...
Connected to localhost.
Escape character is '^]'.
test
test
```

or it will can be use with python
```py
import socket
import sys

# Create a TCP/IP socket
sock = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

# Connect the socket to the port where the server is listening
server_address = ('127.0.0.1', 4242)
print >>sys.stderr, 'connecting to %s port %s' % server_address
sock.connect(server_address)
```
## License
This library is a free project and it can be use for any project.

Attention read also license dependencies this library.

### THANX FOR HAVE READ THIS DOCUMENT
