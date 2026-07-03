<?php

namespace Data\Date\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Date.Component.Gen/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
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


// Data_Date_Gen_compose
$Data_Date_Gen_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Date_Gen_fromJust
$Data_Date_Gen_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Date_Gen_bind
$Data_Date_Gen_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_Maybe_bindMaybe']);

// Data_Date_Gen_bottom
$Data_Date_Gen_bottom = ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Date_Component_boundedMonth']);

// Data_Date_Gen_bottom1
$Data_Date_Gen_bottom1 = ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Date_Component_boundedDay']);

// Data_Date_Gen_genDate
$Data_Date_Gen_genDate = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']);
$Bind1 = (($Monad0)->Bind1)($GLOBALS['Prim_undefined']);
$bind1 = ($GLOBALS['Control_Bind_bind'])($Bind1);
$map = ($GLOBALS['Data_Functor_map'])((((($Bind1)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$chooseInt = ($GLOBALS['Control_Monad_Gen_Class_chooseInt'])($dictMonadGen);
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = ($bind1)(($GLOBALS['Data_Date_Component_Gen_genYear'])($dictMonadGen), (function() use ($bind1, $map, $chooseInt, $pure) {
  $__fn = function($year) use ($bind1, $map, $chooseInt, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$__case_0 = ($GLOBALS['Data_Date_isLeapYear'])($year);
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = 365;
} else {
if (true) {
$__case_res_0 = 364;
} else {
throw new \Exception("Pattern match failure");
};
};
$maxDays = $__case_res_0;
    $__res = ($bind1)(($map)(($GLOBALS['Data_Date_Gen_compose'])($GLOBALS['Data_Time_Duration_Days'], $GLOBALS['Data_Int_toNumber']), ($chooseInt)(0, $maxDays)), (function() use ($pure, $year) {
  $__fn = function($days) use ($pure, $year, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure)(($GLOBALS['Partial_Unsafe_unsafePartial'])((function() use ($year, $days) {
  $__fn = function($__dollar____unused) use ($year, $days, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Date_Gen_fromJust'])(($GLOBALS['Data_Date_Gen_bind'])(($GLOBALS['Data_Date_exactDate'])($year, $GLOBALS['Data_Date_Gen_bottom'], $GLOBALS['Data_Date_Gen_bottom1']), (function() use ($days) {
  $__fn = function($janFirst) use ($days, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Date_adjust'])($days, $janFirst);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
})();

