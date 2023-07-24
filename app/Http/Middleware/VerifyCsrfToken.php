<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/csrf_token',
        '/data_endpoint',
        '/scan_kartu',
        '/data_temp',
        '/scanning',
        '/data_scanning',
        '/get_kode_ruangan',
        '/status_device',
        '/status_pintu',
        '/status_sensorPir',
    ];
}
