<?php

namespace Control\Monad\Writer;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Monad.Writer/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
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


// Control_Monad_Writer_compose
$Control_Monad_Writer_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Writer_unwrap
$Control_Monad_Writer_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Control_Monad_Writer_writer
$Control_Monad_Writer_writer = ($GLOBALS['Control_Monad_Writer_compose'])($GLOBALS['Control_Monad_Writer_Trans_WriterT'], ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_Identity_applicativeIdentity']));

// Control_Monad_Writer_runWriter
$Control_Monad_Writer_runWriter = ($GLOBALS['Control_Monad_Writer_compose'])($GLOBALS['Control_Monad_Writer_unwrap'], $GLOBALS['Control_Monad_Writer_Trans_runWriterT']);

// Control_Monad_Writer_mapWriter
$Control_Monad_Writer_mapWriter = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Writer_Trans_mapWriterT'])(($GLOBALS['Control_Monad_Writer_compose'])($GLOBALS['Data_Identity_Identity'], ($GLOBALS['Control_Monad_Writer_compose'])($f, $GLOBALS['Control_Monad_Writer_unwrap'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Writer_execWriter
$Control_Monad_Writer_execWriter = (function() {
  $__fn = function($m) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_snd'])(($GLOBALS['Control_Monad_Writer_runWriter'])($m));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

