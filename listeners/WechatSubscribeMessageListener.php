<?php

namespace App\Listeners;


use Illuminate\Support\Facades\Log;
use MobileNowGroup\SubscribeMessage\WechatSubscribeMessageSent;

class WechatSubscribeMessageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param \MobileNowGroup\SubscribeMessage\WechatSubscribeMessageSent $event
     * @return void
     */
    public function handle(WechatSubscribeMessageSent $event)
    {
        $result = $event->result;

        logger()->info('send notify result:', $result);
    }
}