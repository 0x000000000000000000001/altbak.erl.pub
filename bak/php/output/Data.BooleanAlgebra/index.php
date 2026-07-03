<?php

namespace Data\BooleanAlgebra;

require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
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


// Data_BooleanAlgebra_heytingAlgebraRecord
$Data_BooleanAlgebra_heytingAlgebraRecord = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraRecord'])($GLOBALS['Prim_undefined']);

// Data_BooleanAlgebra_BooleanAlgebraRecord$Dict
$Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_BooleanAlgebra_BooleanAlgebra$Dict
$Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_BooleanAlgebra_booleanAlgebraUnit
$Data_BooleanAlgebra_booleanAlgebraUnit = ($GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'])((object)["HeytingAlgebra0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_HeytingAlgebra_heytingAlgebraUnit'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_BooleanAlgebra_booleanAlgebraRecordNil
$Data_BooleanAlgebra_booleanAlgebraRecordNil = ($GLOBALS['Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict'])((object)["HeytingAlgebraRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_HeytingAlgebra_heytingAlgebraRecordNil'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_BooleanAlgebra_booleanAlgebraRecordCons
$Data_BooleanAlgebra_booleanAlgebraRecordCons = (function() {
  $__fn = function($dictIsSymbol) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$heytingAlgebraRecordCons = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraRecordCons'])($dictIsSymbol, $GLOBALS['Prim_undefined']);
    $__res = (function() use ($heytingAlgebraRecordCons) {
  $__fn = function($__dollar____unused, $dictBooleanAlgebraRecord = null) use ($heytingAlgebraRecordCons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$heytingAlgebraRecordCons1 = ($heytingAlgebraRecordCons)((($dictBooleanAlgebraRecord)->HeytingAlgebraRecord0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($heytingAlgebraRecordCons1) {
  $__fn = function($dictBooleanAlgebra) use ($heytingAlgebraRecordCons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$heytingAlgebraRecordCons2 = ($heytingAlgebraRecordCons1)((($dictBooleanAlgebra)->HeytingAlgebra0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_BooleanAlgebra_BooleanAlgebraRecord__dollar__Dict'])((object)["HeytingAlgebraRecord0" => (function() use ($heytingAlgebraRecordCons2) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraRecordCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $heytingAlgebraRecordCons2;
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

// Data_BooleanAlgebra_booleanAlgebraRecord
$Data_BooleanAlgebra_booleanAlgebraRecord = (function() {
  $__fn = function($__dollar____unused, $dictBooleanAlgebraRecord = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$heytingAlgebraRecord1 = ($GLOBALS['Data_BooleanAlgebra_heytingAlgebraRecord'])((($dictBooleanAlgebraRecord)->HeytingAlgebraRecord0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'])((object)["HeytingAlgebra0" => (function() use ($heytingAlgebraRecord1) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $heytingAlgebraRecord1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_BooleanAlgebra_booleanAlgebraProxy
$Data_BooleanAlgebra_booleanAlgebraProxy = ($GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'])((object)["HeytingAlgebra0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_HeytingAlgebra_heytingAlgebraProxy'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_BooleanAlgebra_booleanAlgebraFn
$Data_BooleanAlgebra_booleanAlgebraFn = (function() {
  $__fn = function($dictBooleanAlgebra) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$heytingAlgebraFunction = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraFunction'])((($dictBooleanAlgebra)->HeytingAlgebra0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'])((object)["HeytingAlgebra0" => (function() use ($heytingAlgebraFunction) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraFunction, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $heytingAlgebraFunction;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_BooleanAlgebra_booleanAlgebraBoolean
$Data_BooleanAlgebra_booleanAlgebraBoolean = ($GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'])((object)["HeytingAlgebra0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

