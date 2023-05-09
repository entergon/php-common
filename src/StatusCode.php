<?php

declare(strict_types=1);

namespace Entergon\Common;

/**
 * Status codes.
 *
 * @see https://doc.entergon.de/share/78373611-8376-4fdc-be05-0671a04a76a6
 */
enum StatusCode: string
{
  case OK = '0x42';
  case UNKNOWN = '0x0';
  case ILLEGAL = '0x1';
  case TOKEN_INVALID = '0x2';
  case DB_ERROR = '0x3';
  case LOGIN_INCORRECT = '0x4';
  case TRANSLATION_NOT_FOUND = '0x5';
  case MULTIPLE_ERRORS = '0x9';
  case NO_ACCESS = '0x13';
  case ACCESS_VIOLATION = '0x14';
  case TYPE_ERROR = '0x15';
  case DEPRECATED = '0x0815';
  case NOT_IMPLEMENTED = '0x1337';
  case MISSING_DATA = '0x4711';
  case FATAL = '0x9999';
}

/**
 * Global.
 *
 * @category 0x000
 */
enum StatusCodeGlobal: string
{
  case UnknownError = '0x0';
  /* Tritt auf, wenn in einer User-Aktion Sachen nicht mit rechten Dingen zugehen und der aktuelle Zustand eigentlich nie erreicht werden sollte. Könnte von einer User manipulation oder einem Systemfehler kommen */
  case IllegalStatement = '0x1';
}
