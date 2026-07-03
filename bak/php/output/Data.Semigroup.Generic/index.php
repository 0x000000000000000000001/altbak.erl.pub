<?php

namespace Data\Semigroup\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Generic/index.php';
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


// Data_Semigroup_Generic_GenericSemigroup$Dict
$Data_Semigroup_Generic_GenericSemigroup__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Generic_genericSemigroupNoConstructors
$Data_Semigroup_Generic_genericSemigroupNoConstructors = ($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'])((object)["genericAppend'" => (function() {
  $__fn = function($a, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $a;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Generic_genericSemigroupNoArguments
$Data_Semigroup_Generic_genericSemigroupNoArguments = ($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'])((object)["genericAppend'" => (function() {
  $__fn = function($a, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $a;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Generic_genericSemigroupArgument
$Data_Semigroup_Generic_genericSemigroupArgument = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
    $__res = ($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'])((object)["genericAppend'" => (function() use ($append) {
  $__body = function($v, $v1) use ($append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($GLOBALS['Data_Generic_Rep_Argument'])(($append)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Generic_genericAppend'
$Data_Semigroup_Generic_genericAppend__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericAppend__prime__;
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

// Data_Semigroup_Generic_genericSemigroupConstructor
$Data_Semigroup_Generic_genericSemigroupConstructor = (function() {
  $__fn = function($dictGenericSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericAppend__prime__1 = ($GLOBALS['Data_Semigroup_Generic_genericAppend__prime__'])($dictGenericSemigroup);
    $__res = ($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'])((object)["genericAppend'" => (function() use ($genericAppend__prime__1) {
  $__body = function($v, $v1) use ($genericAppend__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($GLOBALS['Data_Generic_Rep_Constructor'])(($genericAppend__prime__1)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericAppend__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Generic_genericSemigroupProduct
$Data_Semigroup_Generic_genericSemigroupProduct = (function() {
  $__fn = function($dictGenericSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericAppend__prime__1 = ($GLOBALS['Data_Semigroup_Generic_genericAppend__prime__'])($dictGenericSemigroup);
    $__res = (function() use ($genericAppend__prime__1) {
  $__fn = function($dictGenericSemigroup1) use ($genericAppend__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericAppend__prime__2 = ($GLOBALS['Data_Semigroup_Generic_genericAppend__prime__'])($dictGenericSemigroup1);
    $__res = ($GLOBALS['Data_Semigroup_Generic_GenericSemigroup__dollar__Dict'])((object)["genericAppend'" => (function() use ($genericAppend__prime__1, $genericAppend__prime__2) {
  $__body = function($v, $v1) use ($genericAppend__prime__1, $genericAppend__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Generic_Rep_Product'])(($genericAppend__prime__1)($a1, $a2), ($genericAppend__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericAppend__prime__1, $genericAppend__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Generic_genericAppend
$Data_Semigroup_Generic_genericAppend = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
$from = ($GLOBALS['Data_Generic_Rep_from'])($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericSemigroup) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericAppend__prime__1 = ($GLOBALS['Data_Semigroup_Generic_genericAppend__prime__'])($dictGenericSemigroup);
    $__res = (function() use ($to, $genericAppend__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericAppend__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($to)(($genericAppend__prime__1)(($from)($x), ($from)($y)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

