<?php

namespace Control\Monad\RWS;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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


// Control_Monad_RWS_pure
$Control_Monad_RWS_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_Identity_applicativeIdentity']);

// Control_Monad_RWS_composeFlipped
$Control_Monad_RWS_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_RWS_unwrap
$Control_Monad_RWS_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Control_Monad_RWS_execRWST
$Control_Monad_RWS_execRWST = ($GLOBALS['Control_Monad_RWS_Trans_execRWST'])($GLOBALS['Data_Identity_monadIdentity']);

// Control_Monad_RWS_evalRWST
$Control_Monad_RWS_evalRWST = ($GLOBALS['Control_Monad_RWS_Trans_evalRWST'])($GLOBALS['Data_Identity_monadIdentity']);

// Control_Monad_RWS_withRWS
$Control_Monad_RWS_withRWS = $GLOBALS['Control_Monad_RWS_Trans_withRWST'];

// Control_Monad_RWS_rws
$Control_Monad_RWS_rws = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($f) {
  $__fn = function($r, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_RWS_pure'])(($f)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_runRWS
$Control_Monad_RWS_runRWS = (function() {
  $__body = function($m, $r, $s) {
    $__case_0 = $m;
    if (true) {
$f = $__case_0;
$v = ($f)($r, $s);
$__case_0 = $v;
if (true) {
$x = $__case_0;
return $x;
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($m, $r = null, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($m, $r, $s);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_mapRWS
$Control_Monad_RWS_mapRWS = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_mapRWST'])(($GLOBALS['Control_Monad_RWS_composeFlipped'])($GLOBALS['Control_Monad_RWS_unwrap'], ($GLOBALS['Control_Monad_RWS_composeFlipped'])($f, $GLOBALS['Data_Identity_Identity'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_execRWS
$Control_Monad_RWS_execRWS = (function() {
  $__fn = function($m, $r = null, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Control_Monad_RWS_unwrap'])(($GLOBALS['Control_Monad_RWS_execRWST'])($m, $r, $s));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_evalRWS
$Control_Monad_RWS_evalRWS = (function() {
  $__fn = function($m, $r = null, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Control_Monad_RWS_unwrap'])(($GLOBALS['Control_Monad_RWS_evalRWST'])($m, $r, $s));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

