<?php

namespace Blessing\OAuth\LinuxDo;

use SocialiteProviders\Manager\SocialiteWasCalled;

class LinuxDoExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('linuxdo', Provider::class);
    }
}
