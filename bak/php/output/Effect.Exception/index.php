<?php

namespace Effect\Exception;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
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
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}



$Effect_Exception_error = function($msg) { return new \Exception($msg); };
$Effect_Exception_message = function($e) { return $e->getMessage(); };
$Effect_Exception_name = function($e) { return get_class($e); };
$Effect_Exception_stackImpl = function($just) { return function($nothing) { return function($e) use(&$just, &$nothing) { return $just($e->getTraceAsString()); }; }; };
$Effect_Exception_throwException = function($e) { return function() use(&$e) { throw $e; }; };
$Effect_Exception_catchException = phpurs_uncurry2(function($c) { return function($t) use(&$c) { return function() use(&$c, &$t) { try { return $t(); } catch (\Throwable $e) { return $c($e)(); } }; }; });
$Effect_Exception_showErrorImpl = function($e) { return (string)$e; };

// Effect_Exception_compose
$Effect_Exception_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Effect_Exception_pure
$Effect_Exception_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Effect_applicativeEffect']);

// Effect_Exception_map
$Effect_Exception_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Effect_functorEffect']);

// Effect_Exception_try
$Effect_Exception_try = (function() {
  $__fn = function($action) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Exception_catchException'])(($GLOBALS['Effect_Exception_compose'])($GLOBALS['Effect_Exception_pure'], $GLOBALS['Data_Either_Left']), ($GLOBALS['Effect_Exception_map'])($GLOBALS['Data_Either_Right'], $action));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Exception_throw
$Effect_Exception_throw = ($GLOBALS['Effect_Exception_compose'])($GLOBALS['Effect_Exception_throwException'], $GLOBALS['Effect_Exception_error']);

// Effect_Exception_stack
$Effect_Exception_stack = ($GLOBALS['Effect_Exception_stackImpl'])($GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Effect_Exception_showError
$Effect_Exception_showError = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => $GLOBALS['Effect_Exception_showErrorImpl']]);

