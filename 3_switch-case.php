<?php

$http_status = 401;

switch ($http_status) {
    case 200:
        $result = "OK";
        break;
    case 301:
        $result = "Moved Permanently";
        break;
    case 400:
        $result = "Bad Request";
        break;
    case 401:
        $result = "Unauthorized";
        break;
    case 403:
        $result = "Forbidden";
        break;
    case 404:
        $result = "Not Found";
        break;
    case 500:
        $result = "Internal Server Error";
        break;
    case 502:
        $result = "Bad Gateway";
        break;
    case 503:
        $result = "Service Unavailable";
        break;
    default:
        $result = "Unknown Status Code";
        break;
}

echo $result;


$matchResult = match ($http_status) {
    200 => "OK",
    301 => "Moved Permanently",
    400 => "Bad Request",
    401 => "Unauthorized",
    403 => "Forbidden",
    404 => "Not Found",
    500 => "Internal Server Error",
    502 => "Bad Gateway",
    503 => "Service Unavailable",
    default => "Unknown Status Code",
};

echo "\n" . $matchResult;

