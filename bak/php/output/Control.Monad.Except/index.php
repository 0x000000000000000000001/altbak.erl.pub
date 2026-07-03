<?php

namespace Control\Monad\Except;

require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
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


// Control_Monad_Except_compose
$Control_Monad_Except_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Except_unwrap
$Control_Monad_Except_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Control_Monad_Except_withExcept
$Control_Monad_Except_withExcept = ($GLOBALS['Control_Monad_Except_Trans_withExceptT'])($GLOBALS['Data_Identity_functorIdentity']);

// Control_Monad_Except_runExcept
$Control_Monad_Except_runExcept = ($GLOBALS['Control_Monad_Except_compose'])($GLOBALS['Control_Monad_Except_unwrap'], $GLOBALS['Control_Monad_Except_Trans_runExceptT']);

// Control_Monad_Except_mapExcept
$Control_Monad_Except_mapExcept = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'])(($GLOBALS['Control_Monad_Except_compose'])($GLOBALS['Data_Identity_Identity'], ($GLOBALS['Control_Monad_Except_compose'])($f, $GLOBALS['Control_Monad_Except_unwrap'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

