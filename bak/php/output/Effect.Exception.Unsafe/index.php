<?php

namespace Effect\Exception\Unsafe;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Exception.Unsafe/index.php';
require_once __DIR__ . '/../Effect.Unsafe/index.php';

if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Effect_Exception_Unsafe_compose
$Effect_Exception_Unsafe_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Effect_Exception_Unsafe_unsafeThrowException
$Effect_Exception_Unsafe_unsafeThrowException = ($GLOBALS['Effect_Exception_Unsafe_compose'])($GLOBALS['Effect_Unsafe_unsafePerformEffect'], $GLOBALS['Effect_Exception_throwException']);

// Effect_Exception_Unsafe_unsafeThrow
$Effect_Exception_Unsafe_unsafeThrow = ($GLOBALS['Effect_Exception_Unsafe_compose'])($GLOBALS['Effect_Exception_Unsafe_unsafeThrowException'], $GLOBALS['Effect_Exception_error']);

