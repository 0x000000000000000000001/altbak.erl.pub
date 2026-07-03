<?php

namespace Data\DivisionRing;

require_once __DIR__ . '/../Data.DivisionRing/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';

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


// Data_DivisionRing_div
$Data_DivisionRing_div = ($GLOBALS['Data_EuclideanRing_div'])($GLOBALS['Data_EuclideanRing_euclideanRingNumber']);

// Data_DivisionRing_DivisionRing$Dict
$Data_DivisionRing_DivisionRing__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_DivisionRing_recip
$Data_DivisionRing_recip = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->recip;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_DivisionRing_rightDiv
$Data_DivisionRing_rightDiv = (function() {
  $__fn = function($dictDivisionRing) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mul = ($GLOBALS['Data_Semiring_mul'])((((($dictDivisionRing)->Ring0)($GLOBALS['Prim_undefined']))->Semiring0)($GLOBALS['Prim_undefined']));
$recip1 = ($GLOBALS['Data_DivisionRing_recip'])($dictDivisionRing);
    $__res = (function() use ($mul, $recip1) {
  $__fn = function($a, $b = null) use ($mul, $recip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($mul)($a, ($recip1)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_DivisionRing_leftDiv
$Data_DivisionRing_leftDiv = (function() {
  $__fn = function($dictDivisionRing) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mul = ($GLOBALS['Data_Semiring_mul'])((((($dictDivisionRing)->Ring0)($GLOBALS['Prim_undefined']))->Semiring0)($GLOBALS['Prim_undefined']));
$recip1 = ($GLOBALS['Data_DivisionRing_recip'])($dictDivisionRing);
    $__res = (function() use ($mul, $recip1) {
  $__fn = function($a, $b = null) use ($mul, $recip1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($mul)(($recip1)($b), $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_DivisionRing_divisionringNumber
$Data_DivisionRing_divisionringNumber = ($GLOBALS['Data_DivisionRing_DivisionRing__dollar__Dict'])((object)["recip" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_DivisionRing_div'])(1.0, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ring_ringNumber'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

