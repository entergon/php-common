<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class VersionHelperTest extends TestCase
{
  public function testHelperReturnsVersion(): void
  {
    $version = VersionHelper::get();

    $this->assertIsString($version);
  }
}
