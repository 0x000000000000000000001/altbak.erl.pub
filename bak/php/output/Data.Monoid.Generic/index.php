<?php

namespace Data\Monoid\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Generic/index.php';

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


// Data_Monoid_Generic_GenericMonoid$Dict
$Data_Monoid_Generic_GenericMonoid__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Monoid_Generic_genericMonoidNoArguments
$Data_Monoid_Generic_genericMonoidNoArguments = ($GLOBALS['Data_Monoid_Generic_GenericMonoid__dollar__Dict'])((object)["genericMempty'" => $GLOBALS['Data_Generic_Rep_NoArguments']]);

// Data_Monoid_Generic_genericMonoidArgument
$Data_Monoid_Generic_genericMonoidArgument = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Monoid_Generic_GenericMonoid__dollar__Dict'])((object)["genericMempty'" => ($GLOBALS['Data_Generic_Rep_Argument'])(($GLOBALS['Data_Monoid_mempty'])($dictMonoid))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Monoid_Generic_genericMempty'
$Data_Monoid_Generic_genericMempty__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericMempty__prime__;
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

// Data_Monoid_Generic_genericMonoidConstructor
$Data_Monoid_Generic_genericMonoidConstructor = (function() {
  $__fn = function($dictGenericMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Monoid_Generic_GenericMonoid__dollar__Dict'])((object)["genericMempty'" => ($GLOBALS['Data_Generic_Rep_Constructor'])(($GLOBALS['Data_Monoid_Generic_genericMempty__prime__'])($dictGenericMonoid))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Monoid_Generic_genericMonoidProduct
$Data_Monoid_Generic_genericMonoidProduct = (function() {
  $__fn = function($dictGenericMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericMempty__prime__1 = ($GLOBALS['Data_Monoid_Generic_genericMempty__prime__'])($dictGenericMonoid);
    $__res = (function() use ($genericMempty__prime__1) {
  $__fn = function($dictGenericMonoid1) use ($genericMempty__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Monoid_Generic_GenericMonoid__dollar__Dict'])((object)["genericMempty'" => ($GLOBALS['Data_Generic_Rep_Product'])($genericMempty__prime__1, ($GLOBALS['Data_Monoid_Generic_genericMempty__prime__'])($dictGenericMonoid1))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Monoid_Generic_genericMempty
$Data_Monoid_Generic_genericMempty = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericMonoid) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($to)(($GLOBALS['Data_Monoid_Generic_genericMempty__prime__'])($dictGenericMonoid));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

