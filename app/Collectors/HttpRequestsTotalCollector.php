<?php

namespace App\Collectors;

use Spatie\Prometheus\Collectors\Collector;
use Spatie\Prometheus\Facades\Prometheus;

class HttpRequestsTotalCollector implements Collector
{
    public function register(): void
    {
        Prometheus::addCounter(
            label: 'count',
            name: 'http_requests_total',
            helpText: 'Total number of HTTP requests',
            initialValue: function () {
                return 100;
            }
        );
    }
}
