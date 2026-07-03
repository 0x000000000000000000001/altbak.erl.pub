<?php

namespace Data\CommutativeRing;

require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

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


// Data_CommutativeRing_ringRecord
$Data_CommutativeRing_ringRecord = ($GLOBALS['Data_Ring_ringRecord'])($GLOBALS['Prim_undefined']);

// Data_CommutativeRing_CommutativeRingRecord$Dict
$Data_CommutativeRing_CommutativeRingRecord__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_CommutativeRing_CommutativeRing$Dict
$Data_CommutativeRing_CommutativeRing__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_CommutativeRing_commutativeRingUnit
$Data_CommutativeRing_commutativeRingUnit = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'])((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ring_ringUnit'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingRecordNil
$Data_CommutativeRing_commutativeRingRecordNil = ($GLOBALS['Data_CommutativeRing_CommutativeRingRecord__dollar__Dict'])((object)["RingRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ring_ringRecordNil'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingRecordCons
$Data_CommutativeRing_commutativeRingRecordCons = (function() {
  $__fn = function($dictIsSymbol) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ringRecordCons = ($GLOBALS['Data_Ring_ringRecordCons'])($dictIsSymbol, $GLOBALS['Prim_undefined']);
    $__res = (function() use ($ringRecordCons) {
  $__fn = function($__dollar____unused, $dictCommutativeRingRecord = null) use ($ringRecordCons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$ringRecordCons1 = ($ringRecordCons)((($dictCommutativeRingRecord)->RingRecord0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ringRecordCons1) {
  $__fn = function($dictCommutativeRing) use ($ringRecordCons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ringRecordCons2 = ($ringRecordCons1)((($dictCommutativeRing)->Ring0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_CommutativeRing_CommutativeRingRecord__dollar__Dict'])((object)["RingRecord0" => (function() use ($ringRecordCons2) {
  $__fn = function($__dollar____unused) use ($ringRecordCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ringRecordCons2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_CommutativeRing_commutativeRingRecord
$Data_CommutativeRing_commutativeRingRecord = (function() {
  $__fn = function($__dollar____unused, $dictCommutativeRingRecord = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$ringRecord1 = ($GLOBALS['Data_CommutativeRing_ringRecord'])((($dictCommutativeRingRecord)->RingRecord0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'])((object)["Ring0" => (function() use ($ringRecord1) {
  $__fn = function($__dollar____unused) use ($ringRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ringRecord1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_CommutativeRing_commutativeRingProxy
$Data_CommutativeRing_commutativeRingProxy = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'])((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ring_ringProxy'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingNumber
$Data_CommutativeRing_commutativeRingNumber = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'])((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ring_ringNumber'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingInt
$Data_CommutativeRing_commutativeRingInt = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'])((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ring_ringInt'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_CommutativeRing_commutativeRingFn
$Data_CommutativeRing_commutativeRingFn = (function() {
  $__fn = function($dictCommutativeRing) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ringFn = ($GLOBALS['Data_Ring_ringFn'])((($dictCommutativeRing)->Ring0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'])((object)["Ring0" => (function() use ($ringFn) {
  $__fn = function($__dollar____unused) use ($ringFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ringFn;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

