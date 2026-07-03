<?php

namespace Data\Ord\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ord.Generic/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
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


// Data_Ord_Generic_GenericOrd$Dict
$Data_Ord_Generic_GenericOrd__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_Generic_genericOrdNoConstructors
$Data_Ord_Generic_genericOrdNoConstructors = ($GLOBALS['Data_Ord_Generic_GenericOrd__dollar__Dict'])((object)["genericCompare'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Ordering_EQ'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_Generic_genericOrdNoArguments
$Data_Ord_Generic_genericOrdNoArguments = ($GLOBALS['Data_Ord_Generic_GenericOrd__dollar__Dict'])((object)["genericCompare'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Ordering_EQ'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_Generic_genericOrdArgument
$Data_Ord_Generic_genericOrdArgument = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = ($GLOBALS['Data_Ord_Generic_GenericOrd__dollar__Dict'])((object)["genericCompare'" => (function() use ($compare) {
  $__body = function($v, $v1) use ($compare) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($compare)($a1, $a2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compare, $__body, &$__fn) {
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

// Data_Ord_Generic_genericCompare'
$Data_Ord_Generic_genericCompare__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericCompare__prime__;
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

// Data_Ord_Generic_genericOrdConstructor
$Data_Ord_Generic_genericOrdConstructor = (function() {
  $__fn = function($dictGenericOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericCompare__prime__1 = ($GLOBALS['Data_Ord_Generic_genericCompare__prime__'])($dictGenericOrd);
    $__res = ($GLOBALS['Data_Ord_Generic_GenericOrd__dollar__Dict'])((object)["genericCompare'" => (function() use ($genericCompare__prime__1) {
  $__body = function($v, $v1) use ($genericCompare__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($genericCompare__prime__1)($a1, $a2);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericCompare__prime__1, $__body, &$__fn) {
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

// Data_Ord_Generic_genericOrdProduct
$Data_Ord_Generic_genericOrdProduct = (function() {
  $__fn = function($dictGenericOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericCompare__prime__1 = ($GLOBALS['Data_Ord_Generic_genericCompare__prime__'])($dictGenericOrd);
    $__res = (function() use ($genericCompare__prime__1) {
  $__fn = function($dictGenericOrd1) use ($genericCompare__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericCompare__prime__2 = ($GLOBALS['Data_Ord_Generic_genericCompare__prime__'])($dictGenericOrd1);
    $__res = ($GLOBALS['Data_Ord_Generic_GenericOrd__dollar__Dict'])((object)["genericCompare'" => (function() use ($genericCompare__prime__1, $genericCompare__prime__2) {
  $__body = function($v, $v1) use ($genericCompare__prime__1, $genericCompare__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
$v2 = ($genericCompare__prime__1)($a1, $a2);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
return ($genericCompare__prime__2)($b1, $b2);
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericCompare__prime__1, $genericCompare__prime__2, $__body, &$__fn) {
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

// Data_Ord_Generic_genericOrdSum
$Data_Ord_Generic_genericOrdSum = (function() {
  $__fn = function($dictGenericOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericCompare__prime__1 = ($GLOBALS['Data_Ord_Generic_genericCompare__prime__'])($dictGenericOrd);
    $__res = (function() use ($genericCompare__prime__1) {
  $__fn = function($dictGenericOrd1) use ($genericCompare__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericCompare__prime__2 = ($GLOBALS['Data_Ord_Generic_genericCompare__prime__'])($dictGenericOrd1);
    $__res = ($GLOBALS['Data_Ord_Generic_GenericOrd__dollar__Dict'])((object)["genericCompare'" => (function() use ($genericCompare__prime__1, $genericCompare__prime__2) {
  $__body = function($v, $v1) use ($genericCompare__prime__1, $genericCompare__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Inl") && (($__case_1)->tag === "Inl"))) {
$a1 = ($__case_0)->values[0];
$a2 = ($__case_1)->values[0];
return ($genericCompare__prime__1)($a1, $a2);
} else {
if (((($__case_0)->tag === "Inr") && (($__case_1)->tag === "Inr"))) {
$b1 = ($__case_0)->values[0];
$b2 = ($__case_1)->values[0];
return ($genericCompare__prime__2)($b1, $b2);
} else {
if (((($__case_0)->tag === "Inl") && (($__case_1)->tag === "Inr"))) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if (((($__case_0)->tag === "Inr") && (($__case_1)->tag === "Inl"))) {
return $GLOBALS['Data_Ordering_GT'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($genericCompare__prime__1, $genericCompare__prime__2, $__body, &$__fn) {
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

// Data_Ord_Generic_genericCompare
$Data_Ord_Generic_genericCompare = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$from = ($GLOBALS['Data_Generic_Rep_from'])($dictGeneric);
    $__res = (function() use ($from) {
  $__fn = function($dictGenericOrd) use ($from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericCompare__prime__1 = ($GLOBALS['Data_Ord_Generic_genericCompare__prime__'])($dictGenericOrd);
    $__res = (function() use ($genericCompare__prime__1, $from) {
  $__fn = function($x, $y = null) use ($genericCompare__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($genericCompare__prime__1)(($from)($x), ($from)($y));
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

