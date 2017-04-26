<?php
/**
 * Write something about the purpose of this file
 *
 * @author Shaharia Azam <shaharia@previewtechs.com>
 * @url https://www.previewtechs.com
 */

namespace Previewtechs\GooglePubSubUtility\WebHookReceiver;


class Message
{
    public $data;
    public $attributes = [];
    public $messageId;
    public $publishTime;

    /**
     * @return Data
     */
    public function getData()
    {
        $data = new Data();
        $data->data = $this->data;

        return $data;
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return mixed
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @return mixed
     */
    public function getPublishTime()
    {
        return $this->publishTime;
    }
}