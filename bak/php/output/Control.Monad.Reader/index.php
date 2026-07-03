<?php

namespace Control\Monad\Reader;

require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
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


// Control_Monad_Reader_compose
$Control_Monad_Reader_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Reader_unwrap
$Control_Monad_Reader_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Control_Monad_Reader_withReader
$Control_Monad_Reader_withReader = $GLOBALS['Control_Monad_Reader_Trans_withReaderT'];

// Control_Monad_Reader_runReader
$Control_Monad_Reader_runReader = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$m = $__case_0;
return ($GLOBALS['Control_Monad_Reader_compose'])($GLOBALS['Control_Monad_Reader_unwrap'], $m);
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

// Control_Monad_Reader_mapReader
$Control_Monad_Reader_mapReader = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'])(($GLOBALS['Control_Monad_Reader_compose'])($GLOBALS['Data_Identity_Identity'], ($GLOBALS['Control_Monad_Reader_compose'])($f, $GLOBALS['Control_Monad_Reader_unwrap'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

