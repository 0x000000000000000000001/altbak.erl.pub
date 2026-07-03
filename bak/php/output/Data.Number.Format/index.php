<?php

namespace Data\Number\Format;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Number.Format/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
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


// Data_Number_Format_compose
$Data_Number_Format_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Number_Format_clamp
$Data_Number_Format_clamp = ($GLOBALS['Data_Ord_clamp'])($GLOBALS['Data_Ord_ordInt']);

// Data_Number_Format_Precision
$Data_Number_Format_Precision = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "Precision", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Format_Fixed
$Data_Number_Format_Fixed = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "Fixed", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Format_Exponential
$Data_Number_Format_Exponential = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "Exponential", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Format_toStringWith
$Data_Number_Format_toStringWith = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Precision")) {
$p = ($__case_0)->values[0];
return ($GLOBALS['Data_Number_Format_toPrecisionNative'])($p);
} else {
if ((($__case_0)->tag === "Fixed")) {
$p = ($__case_0)->values[0];
return ($GLOBALS['Data_Number_Format_toFixedNative'])($p);
} else {
if ((($__case_0)->tag === "Exponential")) {
$p = ($__case_0)->values[0];
return ($GLOBALS['Data_Number_Format_toExponentialNative'])($p);
} else {
throw new \Exception("Pattern match failure");
};
};
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

// Data_Number_Format_precision
$Data_Number_Format_precision = ($GLOBALS['Data_Number_Format_compose'])($GLOBALS['Data_Number_Format_Precision'], ($GLOBALS['Data_Number_Format_clamp'])(1, 21));

// Data_Number_Format_fixed
$Data_Number_Format_fixed = ($GLOBALS['Data_Number_Format_compose'])($GLOBALS['Data_Number_Format_Fixed'], ($GLOBALS['Data_Number_Format_clamp'])(0, 20));

// Data_Number_Format_exponential
$Data_Number_Format_exponential = ($GLOBALS['Data_Number_Format_compose'])($GLOBALS['Data_Number_Format_Exponential'], ($GLOBALS['Data_Number_Format_clamp'])(0, 20));

