<?php

namespace Data\Date\Component\Gen;

require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Enum.Gen/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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


// Data_Date_Component_Gen_compose
$Data_Date_Component_Gen_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Date_Component_Gen_fromJust
$Data_Date_Component_Gen_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Date_Component_Gen_toEnum
$Data_Date_Component_Gen_toEnum = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Date_Component_boundedEnumYear']);

// Data_Date_Component_Gen_genYear
$Data_Date_Component_Gen_genYear = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_map'])((((((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']), ($GLOBALS['Data_Date_Component_Gen_compose'])(($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Date_Component_Gen_fromJust'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $GLOBALS['Data_Date_Component_Gen_toEnum']), ($GLOBALS['Control_Monad_Gen_Class_chooseInt'])($dictMonadGen, 1900, 2100));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Date_Component_Gen_genWeekday
$Data_Date_Component_Gen_genWeekday = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_Gen_genBoundedEnum'])($dictMonadGen, $GLOBALS['Data_Date_Component_boundedEnumWeekday']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Date_Component_Gen_genMonth
$Data_Date_Component_Gen_genMonth = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_Gen_genBoundedEnum'])($dictMonadGen, $GLOBALS['Data_Date_Component_boundedEnumMonth']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Date_Component_Gen_genDay
$Data_Date_Component_Gen_genDay = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_Gen_genBoundedEnum'])($dictMonadGen, $GLOBALS['Data_Date_Component_boundedEnumDay']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

