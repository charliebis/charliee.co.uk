<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
        Request::HEADER_X_FORWARDED_AWS_ELB;

    public function handle(Request $request, Closure $next): mixed
    {
        $proxies = (array) config('network.trusted_proxies'); // (array) cast prevents "must implement Countable" warning

        if (empty($proxies[0])) {
            $proxies = null;
        } elseif (count($proxies) === 1) {
            $proxies = $proxies[0];
        }

        $this->proxies = $proxies;

        return parent::handle($request, $next);
    }
}
