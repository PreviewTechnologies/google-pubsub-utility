####Google Pub/Sub Web Hook Receiver


#### Usage
```php
<?php
require "vendor/autoload.php";

$mapper = new JsonMapper();

/**
 * @var $messageObject \Previewtechs\GooglePubSubUtility\WebHookReceiver\WebHook
 */
$messageObject = $mapper->map(json_decode($_POST), new \Previewtechs\GooglePubSubUtility\WebHookReceiver\WebHook());

var_dump($messageObject->getMessage()->getData()->getDecoded());
```