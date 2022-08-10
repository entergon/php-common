<?php

declare(strict_types=1);

namespace Entergon\Common;

enum Status: string
{
  case OK = 'ok';
  case IDLE = 'idle';
  case PENDING = 'pending';
  case ERROR = 'error';
}
