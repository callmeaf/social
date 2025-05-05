<?php

namespace Callmeaf\Social\App\Strategy\Contracts;

use Illuminate\Http\Client\Response;

interface SocialStrategyInterface
{
    public function sendTextMessage(string $message): Response;
}
