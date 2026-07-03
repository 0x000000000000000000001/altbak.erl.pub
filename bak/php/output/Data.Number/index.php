<?php

namespace Data\Number;

require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Number/index.php';

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


// Data_Number_tau
$Data_Number_tau = 6.283185307179586;

// Data_Number_sqrt2
$Data_Number_sqrt2 = 1.4142135623730951;

// Data_Number_sqrt1_2
$Data_Number_sqrt1_2 = 0.7071067811865476;

// Data_Number_pi
$Data_Number_pi = 3.141592653589793;

// Data_Number_log2e
$Data_Number_log2e = 1.4426950408889634;

// Data_Number_log10e
$Data_Number_log10e = 0.4342944819032518;

// Data_Number_ln2
$Data_Number_ln2 = 0.6931471805599453;

// Data_Number_ln10
$Data_Number_ln10 = 2.302585092994046;

// Data_Number_fromString
$Data_Number_fromString = (function() {
  $__fn = function($str) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Number_fromStringImpl'], $str, $GLOBALS['Data_Number_isFinite'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Number_e
$Data_Number_e = 2.718281828459045;

