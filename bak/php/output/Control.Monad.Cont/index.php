<?php

namespace Control\Monad\Cont;

require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
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


// Control_Monad_Cont_compose
$Control_Monad_Cont_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Cont_unwrap
$Control_Monad_Cont_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Control_Monad_Cont_withCont
$Control_Monad_Cont_withCont = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Cont_Trans_withContT'])(($GLOBALS['Control_Monad_Cont_compose'])(($GLOBALS['Control_Monad_Cont_compose'])($GLOBALS['Data_Identity_Identity']), ($GLOBALS['Control_Monad_Cont_compose'])($f, ($GLOBALS['Control_Monad_Cont_compose'])($GLOBALS['Control_Monad_Cont_unwrap']))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Cont_runCont
$Control_Monad_Cont_runCont = (function() {
  $__fn = function($cc, $k = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_Cont_unwrap'])(($GLOBALS['Control_Monad_Cont_Trans_runContT'])($cc, ($GLOBALS['Control_Monad_Cont_compose'])($GLOBALS['Data_Identity_Identity'], $k)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Cont_mapCont
$Control_Monad_Cont_mapCont = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Cont_Trans_mapContT'])(($GLOBALS['Control_Monad_Cont_compose'])($GLOBALS['Data_Identity_Identity'], ($GLOBALS['Control_Monad_Cont_compose'])($f, $GLOBALS['Control_Monad_Cont_unwrap'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Cont_cont
$Control_Monad_Cont_cont = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Cont_Trans_ContT'])((function() use ($f) {
  $__fn = function($c) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Identity_Identity'])(($f)(($GLOBALS['Control_Monad_Cont_compose'])($GLOBALS['Control_Monad_Cont_unwrap'], $c)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

