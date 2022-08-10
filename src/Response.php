<?php

declare(strict_types=1);

namespace Entergon\Common;

final class Response
{
  public static function success(
    string $message = '',
    $data = null
  ) {
    return [
      [
        'status' => Status::OK,
        'code' => StatusCode::OK,
        'message' => $message,
        'data' => $data,
      ],
      200
    ];
  }

  public static function error(
    string $message = '',
    $errors = [],
    StatusCode $code = StatusCode::OK,
    HttpStatusCode $status = HttpStatusCode::NOT_FOUND
  ) {
    return [
      [
        'status' => Status::ERROR,
        'code' => $code->value,
        'message' => $message,
        'error' => $errors,
      ],
      $status->value
    ];
  }
}
