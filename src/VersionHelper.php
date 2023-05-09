<?php

declare(strict_types=1);

namespace Entergon\Common;

/**
 * Helper for versions.
 */
class VersionHelper
{
  /**
   * Get the version from the composer.json file.
   */
  public static function get(): string
  {
    if (!isset($_SESSION['APP_VERSION'])) {
      $composerJson = json_decode(file_get_contents(base_path('composer.json')));
      $_SESSION['APP_VERSION'] = $composerJson->version;
    }

    return $_SESSION['APP_VERSION'];
  }
}
