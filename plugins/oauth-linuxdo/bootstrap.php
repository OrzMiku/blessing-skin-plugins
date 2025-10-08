<?php

use Blessing\Filter;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\Collection;

return function (Dispatcher $events, Filter $filter) {
    $events->listen(
        'SocialiteProviders\Manager\SocialiteWasCalled',
        'Blessing\OAuth\LinuxDo\LinuxDoExtendSocialite@handle'
    );

    config(['services.linuxdo' => [
        'client_id' => env('LINUXDO_CLIENT_ID'),
        'client_secret' => env('LINUXDO_CLIENT_SECRET'),
        'redirect' => env('LINUXDO_CALLBACK_URL'),
    ]]);

    $filter->add('oauth_providers', function (Collection $providers) {
        $providers->put('linuxdo', [
            'icon' => 'linux',
            'displayName' => 'Linux.do',
        ]);

        return $providers;
    });
};
