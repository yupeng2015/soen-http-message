<?php


namespace Soen\Http\Message;


class HttpRequest
{
    public $serverRequest;
    function __construct($request)
    {
        $this->serverRequest = $serverRequest;
    }

    public function get(){
        return $this->serverRequest->getQueryParams();
    }

    public function post(){
        return $this->serverRequest->getParsedBody();
    }

}