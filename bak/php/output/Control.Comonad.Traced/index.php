<?php

namespace Control\Comonad\Traced;

require_once __DIR__ . '/../Control.Comonad.Traced.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
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


// Control_Comonad_Traced_unwrap
$Control_Comonad_Traced_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Control_Comonad_Traced_traced
$Control_Comonad_Traced_traced = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn'], $GLOBALS['Data_Identity_Identity'], $GLOBALS['Control_Comonad_Traced_Trans_TracedT']);

// Control_Comonad_Traced_runTraced
$Control_Comonad_Traced_runTraced = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$t = $__case_0;
return ($GLOBALS['Control_Comonad_Traced_unwrap'])($t);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

