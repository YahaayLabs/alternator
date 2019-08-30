# alternator
Alternator 


## Usage

A quick details regarding the usage of this libary.

```php
use \YahaayLabs\Alternator;

$strMessage = "Hello ";

$service = new Alternator\Service($strMessage);
echo $service->getMessage();
// Hello from Service

$service = new Alternator\Alternator($strMessage);
echo $service->getMessage();
// Hello from Alternator
```