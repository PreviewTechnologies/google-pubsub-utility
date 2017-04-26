<?php
/**
 * Write something about the purpose of this file
 *
 * @author Shaharia Azam <shaharia@previewtechs.com>
 * @url https://www.previewtechs.com
 */

namespace Previewtechs\GooglePubSubUtility\WebHookReceiver;


class Data
{
    public $data;

    public function getDecoded()
    {
        return base64_decode($this->data);
    }
}