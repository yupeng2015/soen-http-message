<?php


namespace Soen\Http\Message;


class HttpRequest
{
    /**
     * @var ServerRequest
     */
    public $serverRequest;
    function __construct(ServerRequest $serverRequest)
    {
        $this->serverRequest = $serverRequest;
    }
    
//    public function instantiate(ServerRequest $serverRequest){
//        $this->serverRequest = $serverRequest;
//    }
    /**
     * @param string $key
     * @return array
     */
    public function get($key = ''){
        $queryParams = $this->serverRequest->getQueryParams();
        if ($key) {
            return $queryParams[$key];
        }
        return $queryParams;
    }

    /**
     * @param string $key
     * @return array|object|null
     */
    public function post($key = ''){
        $parsedBody = $this->serverRequest->getParsedBody();
        if ($key) {
            return $parsedBody[$key];
        }
        return $parsedBody;
    }

}