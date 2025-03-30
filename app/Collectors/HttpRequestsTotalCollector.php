<?php

namespace App\Collectors;

use Spatie\Prometheus\Collectors\Collector;
use Spatie\Prometheus\Facades\Prometheus;

class HttpRequestTotalCollector implements Collector
{
    public function register(): void
    {
        Prometheus::addCounter('Total number of HTTP requests')
            ->name('http_requests_total')
            ->helpText('The total number of HTTP requests')
            ->value(100);
    }
}
