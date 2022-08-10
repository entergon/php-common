<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

use Entergon\Common\Response;
use Entergon\Common\StatusCode;
use Entergon\Common\Status;

final class ResponseTest extends TestCase
{
  public function testIsArrayResponse(): void
  {
    $this->assertIsArray(Response::success(''));
  }

  public function testSuccessHasCode(): void
  {
    $response = Response::success('');
    $this->assertEquals(200, $response[1]);
  }

  public function testValidResponse(): void
  {
    $response = Response::success('');
    $this->assertEquals([
      'status' => Status::OK,
      'code' => StatusCode::OK,
      'message' => '',
      'data' => null,
    ], $response[0]);
  }
}
