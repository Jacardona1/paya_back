<?php

namespace App\Libs;

class ApiResponse
{
    private $response_ok = 200;
    private $response_created = 201;
    private $response_accepted = 202;
    private $response_bad_request = 400;
    private $response_forbidden = 403;
    private $response_not_found = 404;
    private $response_internal_server_error = 500;

    public function getResponseOk() {
        return $this->response_ok;
    }

    public function getResponseCreated() {
        return $this->response_created;
    }

    public function getResponseAccepted() {
        return $this->response_accepted;
    }

    public function getResponseBadRequest() {
        return $this->response_bad_request;
    }

    public function getResponseForbidden() {
        return $this->response_forbidden;
    }

    public function getResponseNotFound() {
        return $this->response_not_found;
    }

    public function getResponseInternalServerError() {
        return $this->response_internal_server_error;
    }
}