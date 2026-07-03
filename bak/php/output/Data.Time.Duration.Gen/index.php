<?php

namespace Data\Time\Duration\Gen;

require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
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


// Data_Time_Duration_Gen_genSeconds
$Data_Time_Duration_Gen_genSeconds = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_map'])((((((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']), $GLOBALS['Data_Time_Duration_Seconds'], ($GLOBALS['Control_Monad_Gen_Class_chooseFloat'])($dictMonadGen, 0.0, 600.0));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Gen_genMinutes
$Data_Time_Duration_Gen_genMinutes = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_map'])((((((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']), $GLOBALS['Data_Time_Duration_Minutes'], ($GLOBALS['Control_Monad_Gen_Class_chooseFloat'])($dictMonadGen, 0.0, 600.0));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Gen_genMilliseconds
$Data_Time_Duration_Gen_genMilliseconds = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_map'])((((((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']), $GLOBALS['Data_Time_Duration_Milliseconds'], ($GLOBALS['Control_Monad_Gen_Class_chooseFloat'])($dictMonadGen, 0.0, 600000.0));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Gen_genHours
$Data_Time_Duration_Gen_genHours = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_map'])((((((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']), $GLOBALS['Data_Time_Duration_Hours'], ($GLOBALS['Control_Monad_Gen_Class_chooseFloat'])($dictMonadGen, 0.0, 240.0));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Gen_genDays
$Data_Time_Duration_Gen_genDays = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_map'])((((((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']), $GLOBALS['Data_Time_Duration_Days'], ($GLOBALS['Control_Monad_Gen_Class_chooseFloat'])($dictMonadGen, 0.0, 42.0));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

