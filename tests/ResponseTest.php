<?php

declare(strict_types=1);

use Entergon\Common\Response;
use Entergon\Common\Status;
use Entergon\Common\StatusCode;
use PHPUnit\Framework\TestCase;

final class ResponseTest extends TestCase
{
  public function testIsArrayResponse(): void
  {
    $this->assertIsArray(Response::success(''));
  }

  public function testValidResponse(): void
  {
    $response = Response::success('');
    $this->assertEquals([
      'status' => Status::OK,
      'code' => StatusCode::OK,
      'message' => '',
      'data' => null,
    ], $response);
  }
}
