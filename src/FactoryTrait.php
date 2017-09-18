<?php
namespace KS\JsonApi;

trait FactoryTrait {
    public function newJsonApiServerRequest($method, $uri, array $headers=[], $body=null, $version='1.1', array $serverParams=[]) { return new ServerRequest($method, $uri, $headers, $body, $version, $serverParams); }
    public function jsonApiServerRequestFromGlobals() { return ServerRequest::fromGlobals(); }
    public function newJsonApiResponse($status=200, array $headers=[], $body=null, $version='1.1', $reason=null) { return new Response($status, $headers, $body, $version, $reason); }
}

