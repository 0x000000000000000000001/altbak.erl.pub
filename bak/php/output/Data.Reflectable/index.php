<?php

namespace Data\Reflectable;

require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Reflectable/index.php';
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


// Data_Reflectable_Reifiable$Dict
$Data_Reflectable_Reifiable__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Reflectable_Reflectable$Dict
$Data_Reflectable_Reflectable__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Reflectable_reifiableString
$Data_Reflectable_reifiableString = ($GLOBALS['Data_Reflectable_Reifiable__dollar__Dict'])((object)[]);

// Data_Reflectable_reifiableOrdering
$Data_Reflectable_reifiableOrdering = ($GLOBALS['Data_Reflectable_Reifiable__dollar__Dict'])((object)[]);

// Data_Reflectable_reifiableInt
$Data_Reflectable_reifiableInt = ($GLOBALS['Data_Reflectable_Reifiable__dollar__Dict'])((object)[]);

// Data_Reflectable_reifiableBoolean
$Data_Reflectable_reifiableBoolean = ($GLOBALS['Data_Reflectable_Reifiable__dollar__Dict'])((object)[]);

// Data_Reflectable_reifyType
$Data_Reflectable_reifyType = (function() {
  $__fn = function($__dollar____unused, $s = null, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$coerce = $GLOBALS['Data_Reflectable_unsafeCoerce'];
    $__res = ($coerce)((function() use ($f) {
  $__fn = function($dictReflectable) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($f)($dictReflectable);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["reflectType" => (function() use ($s) {
  $__fn = function($v) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $s;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()], $GLOBALS['Type_Proxy_Proxy']);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Reflectable_reflectType
$Data_Reflectable_reflectType = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->reflectType;
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

