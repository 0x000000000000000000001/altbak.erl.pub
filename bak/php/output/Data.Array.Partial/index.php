<?php

namespace Data\Array\Partial;

require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
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


// Data_Array_Partial_unsafeIndex
$Data_Array_Partial_unsafeIndex = ($GLOBALS['Data_Array_unsafeIndex'])($GLOBALS['Prim_undefined']);

// Data_Array_Partial_sub
$Data_Array_Partial_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_Array_Partial_tail
$Data_Array_Partial_tail = (function() {
  $__fn = function($__dollar____unused, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_slice'])(1, ($GLOBALS['Data_Array_length'])($xs), $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_Partial_last
$Data_Array_Partial_last = (function() {
  $__fn = function($__dollar____unused, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_Partial_unsafeIndex'])($xs, ($GLOBALS['Data_Array_Partial_sub'])(($GLOBALS['Data_Array_length'])($xs), 1));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_Partial_init
$Data_Array_Partial_init = (function() {
  $__fn = function($__dollar____unused, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_slice'])(0, ($GLOBALS['Data_Array_Partial_sub'])(($GLOBALS['Data_Array_length'])($xs), 1), $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_Partial_head
$Data_Array_Partial_head = (function() {
  $__fn = function($__dollar____unused, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_Partial_unsafeIndex'])($xs, 0);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

