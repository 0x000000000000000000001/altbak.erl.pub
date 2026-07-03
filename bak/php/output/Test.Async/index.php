<?php

namespace Test\Async;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';

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


// Test_Async_bind
$Test_Async_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Effect_Aff_bindAff']);

// Test_Async_discard
$Test_Async_discard = ($GLOBALS['Control_Bind_discard'])($GLOBALS['Control_Bind_discardUnit'], $GLOBALS['Effect_Aff_bindAff']);

// Test_Async_liftEffect
$Test_Async_liftEffect = ($GLOBALS['Effect_Class_liftEffect'])($GLOBALS['Effect_Aff_monadEffectAff']);

// Test_Async_pure
$Test_Async_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Effect_Aff_applicativeAff']);

// Test_Async_describe
$Test_Async_describe = ($GLOBALS['Effect_Console_log'])("Asynchronous Concurrency (Aff):");

// Test_Async_act
$Test_Async_act = ($GLOBALS['Effect_Aff_launchAff_'])(($GLOBALS['Test_Async_bind'])(($GLOBALS['Effect_Aff_forkAff'])(($GLOBALS['Test_Async_discard'])(($GLOBALS['Effect_Aff_delay'])(($GLOBALS['Data_Time_Duration_Milliseconds'])(10.0)), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Async_bind'])(($GLOBALS['Test_Async_liftEffect'])(($GLOBALS['Effect_Console_log'])("Fiber 1 finished")), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Async_pure'])($GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Async_bind'])(($GLOBALS['Effect_Aff_forkAff'])(($GLOBALS['Test_Async_discard'])(($GLOBALS['Effect_Aff_delay'])(($GLOBALS['Data_Time_Duration_Milliseconds'])(20.0)), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Async_bind'])(($GLOBALS['Test_Async_liftEffect'])(($GLOBALS['Effect_Console_log'])("Fiber 2 finished")), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Async_pure'])($GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Async_discard'])(($GLOBALS['Effect_Aff_delay'])(($GLOBALS['Data_Time_Duration_Milliseconds'])(30.0)), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Async_bind'])(($GLOBALS['Test_Async_liftEffect'])(($GLOBALS['Effect_Console_log'])("Main fiber finished")), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Async_pure'])($GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));

