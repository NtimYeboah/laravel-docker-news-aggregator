<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class IncomingRequest extends Model
{
    public static function saveOne(Request $request)
    {
        $incomingRequest = new self;

        $incomingRequest->host = $request->host();
        $incomingRequest->http_host = $request->httpHost();
        $incomingRequest->scheme_and_http_host = $request->schemeAndHttpHost();
        $incomingRequest->ip_address = $request->ip();
        $incomingRequest->proxied_ips = json_encode($request->ips());
        $incomingRequest->method = $request->method();
        $incomingRequest->path = $request->path();
        $incomingRequest->url = $request->url();
        $incomingRequest->full_url = $request->fullUrl();
        $incomingRequest->content_type = json_encode($request->getAcceptableContentTypes());
        $incomingRequest->input_data = json_encode($request->collect()->all());
        $incomingRequest->query_strings = json_encode($request->query());

        $incomingRequest->save();

        return $incomingRequest;
    }
}
