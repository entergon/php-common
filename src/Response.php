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
      'status' => Status::OK,
      'code' => StatusCode::OK,
      'message' => $message,
      'data' => $data,
    ];
  }

  public static function error(
    string $message = '',
    $errors = [],
    StatusCode $code = StatusCode::OK,
  ) {
    return [
      'status' => Status::ERROR,
      'code' => $code->value,
      'message' => $message,
      'error' => $errors,
    ];
  }
}
