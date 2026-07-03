<?php

namespace Data\Semiring\Generic;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Semiring.Generic/index.php';
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


// Data_Semiring_Generic_GenericSemiring$Dict
$Data_Semiring_Generic_GenericSemiring__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_Generic_genericZero'
$Data_Semiring_Generic_genericZero__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericZero__prime__;
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

// Data_Semiring_Generic_genericZero
$Data_Semiring_Generic_genericZero = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericSemiring) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($to)(($GLOBALS['Data_Semiring_Generic_genericZero__prime__'])($dictGenericSemiring));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_Generic_genericSemiringNoArguments
$Data_Semiring_Generic_genericSemiringNoArguments = ($GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'])((object)["genericAdd'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Generic_Rep_NoArguments'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => $GLOBALS['Data_Generic_Rep_NoArguments'], "genericMul'" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Generic_Rep_NoArguments'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => $GLOBALS['Data_Generic_Rep_NoArguments']]);

// Data_Semiring_Generic_genericSemiringArgument
$Data_Semiring_Generic_genericSemiringArgument = (function() {
  $__fn = function($dictSemiring) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$add = ($GLOBALS['Data_Semiring_add'])($dictSemiring);
$mul = ($GLOBALS['Data_Semiring_mul'])($dictSemiring);
    $__res = ($GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'])((object)["genericAdd'" => (function() use ($add) {
  $__body = function($v, $v1) use ($add) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($GLOBALS['Data_Generic_Rep_Argument'])(($add)($x, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($add, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => ($GLOBALS['Data_Generic_Rep_Argument'])(($GLOBALS['Data_Semiring_zero'])($dictSemiring)), "genericMul'" => (function() use ($mul) {
  $__body = function($v, $v1) use ($mul) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($GLOBALS['Data_Generic_Rep_Argument'])(($mul)($x, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($mul, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => ($GLOBALS['Data_Generic_Rep_Argument'])(($GLOBALS['Data_Semiring_one'])($dictSemiring))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_Generic_genericOne'
$Data_Semiring_Generic_genericOne__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericOne__prime__;
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

// Data_Semiring_Generic_genericOne
$Data_Semiring_Generic_genericOne = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericSemiring) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($to)(($GLOBALS['Data_Semiring_Generic_genericOne__prime__'])($dictGenericSemiring));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_Generic_genericMul'
$Data_Semiring_Generic_genericMul__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericMul__prime__;
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

// Data_Semiring_Generic_genericMul
$Data_Semiring_Generic_genericMul = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
$from = ($GLOBALS['Data_Generic_Rep_from'])($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericSemiring) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericMul__prime__1 = ($GLOBALS['Data_Semiring_Generic_genericMul__prime__'])($dictGenericSemiring);
    $__res = (function() use ($to, $genericMul__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericMul__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($to)(($genericMul__prime__1)(($from)($x), ($from)($y)));
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

// Data_Semiring_Generic_genericAdd'
$Data_Semiring_Generic_genericAdd__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericAdd__prime__;
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

// Data_Semiring_Generic_genericSemiringConstructor
$Data_Semiring_Generic_genericSemiringConstructor = (function() {
  $__fn = function($dictGenericSemiring) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericAdd__prime__1 = ($GLOBALS['Data_Semiring_Generic_genericAdd__prime__'])($dictGenericSemiring);
$genericMul__prime__1 = ($GLOBALS['Data_Semiring_Generic_genericMul__prime__'])($dictGenericSemiring);
    $__res = ($GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'])((object)["genericAdd'" => (function() use ($genericAdd__prime__1) {
  $__body = function($v, $v1) use ($genericAdd__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($GLOBALS['Data_Generic_Rep_Constructor'])(($genericAdd__prime__1)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericAdd__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => ($GLOBALS['Data_Generic_Rep_Constructor'])(($GLOBALS['Data_Semiring_Generic_genericZero__prime__'])($dictGenericSemiring)), "genericMul'" => (function() use ($genericMul__prime__1) {
  $__body = function($v, $v1) use ($genericMul__prime__1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
return ($GLOBALS['Data_Generic_Rep_Constructor'])(($genericMul__prime__1)($a1, $a2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericMul__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => ($GLOBALS['Data_Generic_Rep_Constructor'])(($GLOBALS['Data_Semiring_Generic_genericOne__prime__'])($dictGenericSemiring))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_Generic_genericSemiringProduct
$Data_Semiring_Generic_genericSemiringProduct = (function() {
  $__fn = function($dictGenericSemiring) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericAdd__prime__1 = ($GLOBALS['Data_Semiring_Generic_genericAdd__prime__'])($dictGenericSemiring);
$genericZero__prime__1 = ($GLOBALS['Data_Semiring_Generic_genericZero__prime__'])($dictGenericSemiring);
$genericMul__prime__1 = ($GLOBALS['Data_Semiring_Generic_genericMul__prime__'])($dictGenericSemiring);
$genericOne__prime__1 = ($GLOBALS['Data_Semiring_Generic_genericOne__prime__'])($dictGenericSemiring);
    $__res = (function() use ($genericAdd__prime__1, $genericZero__prime__1, $genericMul__prime__1, $genericOne__prime__1) {
  $__fn = function($dictGenericSemiring1) use ($genericAdd__prime__1, $genericZero__prime__1, $genericMul__prime__1, $genericOne__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericAdd__prime__2 = ($GLOBALS['Data_Semiring_Generic_genericAdd__prime__'])($dictGenericSemiring1);
$genericMul__prime__2 = ($GLOBALS['Data_Semiring_Generic_genericMul__prime__'])($dictGenericSemiring1);
    $__res = ($GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'])((object)["genericAdd'" => (function() use ($genericAdd__prime__1, $genericAdd__prime__2) {
  $__body = function($v, $v1) use ($genericAdd__prime__1, $genericAdd__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Generic_Rep_Product'])(($genericAdd__prime__1)($a1, $a2), ($genericAdd__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericAdd__prime__1, $genericAdd__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => ($GLOBALS['Data_Generic_Rep_Product'])($genericZero__prime__1, ($GLOBALS['Data_Semiring_Generic_genericZero__prime__'])($dictGenericSemiring1)), "genericMul'" => (function() use ($genericMul__prime__1, $genericMul__prime__2) {
  $__body = function($v, $v1) use ($genericMul__prime__1, $genericMul__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Generic_Rep_Product'])(($genericMul__prime__1)($a1, $a2), ($genericMul__prime__2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericMul__prime__1, $genericMul__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => ($GLOBALS['Data_Generic_Rep_Product'])($genericOne__prime__1, ($GLOBALS['Data_Semiring_Generic_genericOne__prime__'])($dictGenericSemiring1))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_Generic_genericAdd
$Data_Semiring_Generic_genericAdd = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
$from = ($GLOBALS['Data_Generic_Rep_from'])($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericSemiring) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericAdd__prime__1 = ($GLOBALS['Data_Semiring_Generic_genericAdd__prime__'])($dictGenericSemiring);
    $__res = (function() use ($to, $genericAdd__prime__1, $from) {
  $__fn = function($x, $y = null) use ($to, $genericAdd__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($to)(($genericAdd__prime__1)(($from)($x), ($from)($y)));
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

