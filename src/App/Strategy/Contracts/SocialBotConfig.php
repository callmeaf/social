<?php

namespace Callmeaf\Social\App\Strategy\Contracts;

interface SocialBotConfig
{
    public function getApiUrl(): string;
    public function getToken(): string;
    public function getChatId(): string;
}
