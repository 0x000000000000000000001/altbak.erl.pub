<?php

namespace Data\Number\Approximate;

require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Number.Approximate/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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


// Data_Number_Approximate_lessThanOrEq
$Data_Number_Approximate_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordNumber']);

// Data_Number_Approximate_sub
$Data_Number_Approximate_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringNumber']);

// Data_Number_Approximate_div
$Data_Number_Approximate_div = ($GLOBALS['Data_EuclideanRing_div'])($GLOBALS['Data_EuclideanRing_euclideanRingNumber']);

// Data_Number_Approximate_mul
$Data_Number_Approximate_mul = ($GLOBALS['Data_Semiring_mul'])($GLOBALS['Data_Semiring_semiringNumber']);

// Data_Number_Approximate_add
$Data_Number_Approximate_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringNumber']);

// Data_Number_Approximate_not
$Data_Number_Approximate_not = ($GLOBALS['Data_HeytingAlgebra_not'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Number_Approximate_Tolerance
$Data_Number_Approximate_Tolerance = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Approximate_Fraction
$Data_Number_Approximate_Fraction = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Approximate_eqRelative
$Data_Number_Approximate_eqRelative = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if (($__case_1 === 0.0)) {
$frac = $__case_0;
$y = $__case_2;
return ($GLOBALS['Data_Number_Approximate_lessThanOrEq'])(($GLOBALS['Data_Number_abs'])($y), $frac);
} else {
if (($__case_2 === 0.0)) {
$frac = $__case_0;
$x = $__case_1;
return ($GLOBALS['Data_Number_Approximate_lessThanOrEq'])(($GLOBALS['Data_Number_abs'])($x), $frac);
} else {
if (true) {
$frac = $__case_0;
$x = $__case_1;
$y = $__case_2;
return ($GLOBALS['Data_Number_Approximate_lessThanOrEq'])(($GLOBALS['Data_Number_abs'])(($GLOBALS['Data_Number_Approximate_sub'])($x, $y)), ($GLOBALS['Data_Number_Approximate_div'])(($GLOBALS['Data_Number_Approximate_mul'])($frac, ($GLOBALS['Data_Number_abs'])(($GLOBALS['Data_Number_Approximate_add'])($x, $y))), 2.0));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Approximate_eqApproximate
$Data_Number_Approximate_eqApproximate = ($onePPM = ($GLOBALS['Data_Number_Approximate_Fraction'])(0.000001);
return ($GLOBALS['Data_Number_Approximate_eqRelative'])($onePPM);)();

// Data_Number_Approximate_neqApproximate
$Data_Number_Approximate_neqApproximate = (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Number_Approximate_not'])(($GLOBALS['Data_Number_Approximate_eqApproximate'])($x, $y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Number_Approximate_eqAbsolute
$Data_Number_Approximate_eqAbsolute = (function() {
  $__body = function($v, $x, $y) {
    $__case_0 = $v;
    $__case_1 = $x;
    $__case_2 = $y;
    if (true) {
$tolerance = $__case_0;
$x1 = $__case_1;
$y1 = $__case_2;
return ($GLOBALS['Data_Number_Approximate_lessThanOrEq'])(($GLOBALS['Data_Number_abs'])(($GLOBALS['Data_Number_Approximate_sub'])($x1, $y1)), $tolerance);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $x = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $x, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

