<?php
/**
 * Write something about the purpose of this file
 *
 * @author Shaharia Azam <shaharia@previewtechs.com>
 * @url https://www.previewtechs.com
 */

namespace Previewtechs\GooglePubSubUtility\WebHookReceiver;


class WebHook
{
    /**
     * @var Message
     */
    public $message;

    public function getMessage()
    {
        return $this->message;
    }
}