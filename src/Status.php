<?php

declare(strict_types=1);

namespace Entergon\Common;

/**
 * Status to return to anyone as a response of action.
 */
enum Status: string
{
  case OK = 'OK';
  /** @deprecated use ERROR instead */
  case NOK = 'NOK';
  case IDLE = 'IDLE';
  case PENDING = 'PENDING';
  case ERROR = 'ERROR';
}
