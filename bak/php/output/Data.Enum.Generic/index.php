<?php

namespace Data\Enum\Generic;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded.Generic/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Enum.Generic/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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


// Data_Enum_Generic_compose
$Data_Enum_Generic_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Enum_Generic_map
$Data_Enum_Generic_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_Enum_Generic_unwrap
$Data_Enum_Generic_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_Enum_Generic_add
$Data_Enum_Generic_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Enum_Generic_conj
$Data_Enum_Generic_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Enum_Generic_greaterThanOrEq
$Data_Enum_Generic_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Enum_Generic_lessThan
$Data_Enum_Generic_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Enum_Generic_sub
$Data_Enum_Generic_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_Enum_Generic_mul
$Data_Enum_Generic_mul = ($GLOBALS['Data_Semiring_mul'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Enum_Generic_apply
$Data_Enum_Generic_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_Maybe_applyMaybe']);

// Data_Enum_Generic_div
$Data_Enum_Generic_div = ($GLOBALS['Data_EuclideanRing_div'])($GLOBALS['Data_EuclideanRing_euclideanRingInt']);

// Data_Enum_Generic_mod
$Data_Enum_Generic_mod = ($GLOBALS['Data_EuclideanRing_mod'])($GLOBALS['Data_EuclideanRing_euclideanRingInt']);

// Data_Enum_Generic_eq
$Data_Enum_Generic_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_Enum_Generic_GenericEnum$Dict
$Data_Enum_Generic_GenericEnum__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_GenericBoundedEnum$Dict
$Data_Enum_Generic_GenericBoundedEnum__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericToEnum'
$Data_Enum_Generic_genericToEnum__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericToEnum__prime__;
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

// Data_Enum_Generic_genericToEnum
$Data_Enum_Generic_genericToEnum = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericBoundedEnum) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_Generic_compose'])(($GLOBALS['Data_Enum_Generic_map'])($to), ($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'])($dictGenericBoundedEnum));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericSucc'
$Data_Enum_Generic_genericSucc__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericSucc__prime__;
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

// Data_Enum_Generic_genericSucc
$Data_Enum_Generic_genericSucc = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
$from = ($GLOBALS['Data_Generic_Rep_from'])($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericEnum) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_Generic_compose'])(($GLOBALS['Data_Enum_Generic_map'])($to), ($GLOBALS['Data_Enum_Generic_compose'])(($GLOBALS['Data_Enum_Generic_genericSucc__prime__'])($dictGenericEnum), $from));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericPred'
$Data_Enum_Generic_genericPred__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericPred__prime__;
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

// Data_Enum_Generic_genericPred
$Data_Enum_Generic_genericPred = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
$from = ($GLOBALS['Data_Generic_Rep_from'])($dictGeneric);
    $__res = (function() use ($to, $from) {
  $__fn = function($dictGenericEnum) use ($to, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_Generic_compose'])(($GLOBALS['Data_Enum_Generic_map'])($to), ($GLOBALS['Data_Enum_Generic_compose'])(($GLOBALS['Data_Enum_Generic_genericPred__prime__'])($dictGenericEnum), $from));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericFromEnum'
$Data_Enum_Generic_genericFromEnum__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericFromEnum__prime__;
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

// Data_Enum_Generic_genericFromEnum
$Data_Enum_Generic_genericFromEnum = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$from = ($GLOBALS['Data_Generic_Rep_from'])($dictGeneric);
    $__res = (function() use ($from) {
  $__fn = function($dictGenericBoundedEnum) use ($from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_Generic_compose'])(($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'])($dictGenericBoundedEnum), $from);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericEnumSum
$Data_Enum_Generic_genericEnumSum = (function() {
  $__fn = function($dictGenericEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericPred__prime__1 = ($GLOBALS['Data_Enum_Generic_genericPred__prime__'])($dictGenericEnum);
$genericSucc__prime__1 = ($GLOBALS['Data_Enum_Generic_genericSucc__prime__'])($dictGenericEnum);
    $__res = (function() use ($genericPred__prime__1, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop) use ($genericPred__prime__1, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericTop__prime__ = ($GLOBALS['Data_Bounded_Generic_genericTop__prime__'])($dictGenericTop);
    $__res = (function() use ($genericPred__prime__1, $genericTop__prime__, $genericSucc__prime__1) {
  $__fn = function($dictGenericEnum1) use ($genericPred__prime__1, $genericTop__prime__, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericPred__prime__2 = ($GLOBALS['Data_Enum_Generic_genericPred__prime__'])($dictGenericEnum1);
$genericSucc__prime__2 = ($GLOBALS['Data_Enum_Generic_genericSucc__prime__'])($dictGenericEnum1);
    $__res = (function() use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $genericSucc__prime__1, $genericSucc__prime__2) {
  $__fn = function($dictGenericBottom) use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $genericSucc__prime__1, $genericSucc__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericBottom__prime__ = ($GLOBALS['Data_Bounded_Generic_genericBottom__prime__'])($dictGenericBottom);
    $__res = ($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'])((object)["genericPred'" => (function() use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__) {
  $__body = function($v) use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Inl")) {
$a = ($__case_0)->values[0];
return ($GLOBALS['Data_Enum_Generic_map'])($GLOBALS['Data_Generic_Rep_Inl'], ($genericPred__prime__1)($a));
} else {
if ((($__case_0)->tag === "Inr")) {
$b = ($__case_0)->values[0];
$v1 = ($genericPred__prime__2)($b);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Generic_Rep_Inl'])($genericTop__prime__));
} else {
if ((($__case_0)->tag === "Just")) {
$b__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Generic_Rep_Inr'])($b__prime__));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($genericSucc__prime__1, $genericBottom__prime__, $genericSucc__prime__2) {
  $__body = function($v) use ($genericSucc__prime__1, $genericBottom__prime__, $genericSucc__prime__2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Inl")) {
$a = ($__case_0)->values[0];
$v1 = ($genericSucc__prime__1)($a);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Generic_Rep_Inr'])($genericBottom__prime__));
} else {
if ((($__case_0)->tag === "Just")) {
$a__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Generic_Rep_Inl'])($a__prime__));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "Inr")) {
$b = ($__case_0)->values[0];
return ($GLOBALS['Data_Enum_Generic_map'])($GLOBALS['Data_Generic_Rep_Inr'], ($genericSucc__prime__2)($b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($genericSucc__prime__1, $genericBottom__prime__, $genericSucc__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericEnumProduct
$Data_Enum_Generic_genericEnumProduct = (function() {
  $__fn = function($dictGenericEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericPred__prime__1 = ($GLOBALS['Data_Enum_Generic_genericPred__prime__'])($dictGenericEnum);
$genericSucc__prime__1 = ($GLOBALS['Data_Enum_Generic_genericSucc__prime__'])($dictGenericEnum);
    $__res = (function() use ($genericPred__prime__1, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop, $dictGenericBottom = null, $dictGenericEnum1 = null) use ($genericPred__prime__1, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$genericPred__prime__2 = ($GLOBALS['Data_Enum_Generic_genericPred__prime__'])($dictGenericEnum1);
$genericSucc__prime__2 = ($GLOBALS['Data_Enum_Generic_genericSucc__prime__'])($dictGenericEnum1);
    $__res = (function() use ($genericPred__prime__2, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__fn = function($dictGenericTop1) use ($genericPred__prime__2, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericTop__prime__ = ($GLOBALS['Data_Bounded_Generic_genericTop__prime__'])($dictGenericTop1);
    $__res = (function() use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__fn = function($dictGenericBottom1) use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericBottom__prime__ = ($GLOBALS['Data_Bounded_Generic_genericBottom__prime__'])($dictGenericBottom1);
    $__res = ($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'])((object)["genericPred'" => (function() use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1) {
  $__body = function($v) use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
$v1 = ($genericPred__prime__2)($b);
$__case_0 = $v1;
if ((($__case_0)->tag === "Just")) {
$p = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Generic_Rep_Product'])($a, $p));
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Enum_Generic_map'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_Generic_Rep_Product'], $genericTop__prime__), ($genericPred__prime__1)($a));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericPred__prime__2, $genericTop__prime__, $genericPred__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($genericSucc__prime__2, $genericBottom__prime__, $genericSucc__prime__1) {
  $__body = function($v) use ($genericSucc__prime__2, $genericBottom__prime__, $genericSucc__prime__1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
$v1 = ($genericSucc__prime__2)($b);
$__case_0 = $v1;
if ((($__case_0)->tag === "Just")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Generic_Rep_Product'])($a, $s));
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Enum_Generic_map'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_Generic_Rep_Product'], $genericBottom__prime__), ($genericSucc__prime__1)($a));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericSucc__prime__2, $genericBottom__prime__, $genericSucc__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericEnumNoArguments
$Data_Enum_Generic_genericEnumNoArguments = ($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'])((object)["genericPred'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_Nothing'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_Nothing'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_Generic_genericEnumConstructor
$Data_Enum_Generic_genericEnumConstructor = (function() {
  $__fn = function($dictGenericEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericPred__prime__1 = ($GLOBALS['Data_Enum_Generic_genericPred__prime__'])($dictGenericEnum);
$genericSucc__prime__1 = ($GLOBALS['Data_Enum_Generic_genericSucc__prime__'])($dictGenericEnum);
    $__res = ($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'])((object)["genericPred'" => (function() use ($genericPred__prime__1) {
  $__body = function($v) use ($genericPred__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($GLOBALS['Data_Enum_Generic_map'])($GLOBALS['Data_Generic_Rep_Constructor'], ($genericPred__prime__1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericPred__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($genericSucc__prime__1) {
  $__body = function($v) use ($genericSucc__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($GLOBALS['Data_Enum_Generic_map'])($GLOBALS['Data_Generic_Rep_Constructor'], ($genericSucc__prime__1)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericSucc__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericEnumArgument
$Data_Enum_Generic_genericEnumArgument = (function() {
  $__fn = function($dictEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pred = ($GLOBALS['Data_Enum_pred'])($dictEnum);
$succ = ($GLOBALS['Data_Enum_succ'])($dictEnum);
    $__res = ($GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'])((object)["genericPred'" => (function() use ($pred) {
  $__body = function($v) use ($pred) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($GLOBALS['Data_Enum_Generic_map'])($GLOBALS['Data_Generic_Rep_Argument'], ($pred)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pred, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericSucc'" => (function() use ($succ) {
  $__body = function($v) use ($succ) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($GLOBALS['Data_Enum_Generic_map'])($GLOBALS['Data_Generic_Rep_Argument'], ($succ)($a));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($succ, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericCardinality'
$Data_Enum_Generic_genericCardinality__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericCardinality__prime__;
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

// Data_Enum_Generic_genericCardinality
$Data_Enum_Generic_genericCardinality = (function() {
  $__fn = function($dictGeneric, $dictGenericBoundedEnum = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Enum_Cardinality'])(($GLOBALS['Data_Enum_Generic_unwrap'])(($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'])($dictGenericBoundedEnum)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericBoundedEnumSum
$Data_Enum_Generic_genericBoundedEnumSum = (function() {
  $__fn = function($dictGenericBoundedEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericCardinality__prime__1 = ($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'])($dictGenericBoundedEnum);
$genericToEnum__prime__1 = ($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'])($dictGenericBoundedEnum);
$genericFromEnum__prime__1 = ($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'])($dictGenericBoundedEnum);
    $__res = (function() use ($genericCardinality__prime__1, $genericFromEnum__prime__1) {
  $__fn = function($dictGenericBoundedEnum1) use ($genericCardinality__prime__1, $genericFromEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericToEnum__prime__2 = ($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'])($dictGenericBoundedEnum1);
$genericFromEnum__prime__2 = ($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'])($dictGenericBoundedEnum1);
    $__res = ($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'])((object)["genericCardinality'" => ($GLOBALS['Data_Enum_Cardinality'])(($GLOBALS['Data_Enum_Generic_add'])(($GLOBALS['Data_Enum_Generic_unwrap'])($genericCardinality__prime__1), ($GLOBALS['Data_Enum_Generic_unwrap'])(($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'])($dictGenericBoundedEnum1)))), "genericToEnum'" => (function() use ($genericCardinality__prime__1) {
  $__fn = function($n) use ($genericCardinality__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ca = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($to)($genericCardinality__prime__1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, $genericCardinality__prime__1) {
  $__body = function($v) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, $genericCardinality__prime__1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Inl")) {
$a = ($__case_0)->values[0];
return ($genericFromEnum__prime__1)($a);
} else {
if ((($__case_0)->tag === "Inr")) {
$b = ($__case_0)->values[0];
return ($GLOBALS['Data_Enum_Generic_add'])(($genericFromEnum__prime__2)($b), ($GLOBALS['Data_Enum_Generic_unwrap'])($genericCardinality__prime__1));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, $genericCardinality__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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

// Data_Enum_Generic_genericBoundedEnumProduct
$Data_Enum_Generic_genericBoundedEnumProduct = (function() {
  $__fn = function($dictGenericBoundedEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericCardinality__prime__1 = ($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'])($dictGenericBoundedEnum);
$genericToEnum__prime__1 = ($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'])($dictGenericBoundedEnum);
$genericFromEnum__prime__1 = ($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'])($dictGenericBoundedEnum);
    $__res = (function() use ($genericCardinality__prime__1, $genericToEnum__prime__1, $genericFromEnum__prime__1) {
  $__fn = function($dictGenericBoundedEnum1) use ($genericCardinality__prime__1, $genericToEnum__prime__1, $genericFromEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericCardinality__prime__2 = ($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'])($dictGenericBoundedEnum1);
$genericToEnum__prime__2 = ($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'])($dictGenericBoundedEnum1);
$genericFromEnum__prime__2 = ($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'])($dictGenericBoundedEnum1);
$from = (function() use ($genericFromEnum__prime__1, $genericFromEnum__prime__2) {
  $__body = function($v, $v1) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Product")) {
$cb = $__case_0;
$a = ($__case_1)->values[0];
$b = ($__case_1)->values[1];
return ($GLOBALS['Data_Enum_Generic_add'])(($GLOBALS['Data_Enum_Generic_mul'])(($genericFromEnum__prime__1)($a), $cb), ($genericFromEnum__prime__2)($b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'])((object)["genericCardinality'" => ($GLOBALS['Data_Enum_Cardinality'])(($GLOBALS['Data_Enum_Generic_mul'])(($GLOBALS['Data_Enum_Generic_unwrap'])($genericCardinality__prime__1), ($GLOBALS['Data_Enum_Generic_unwrap'])($genericCardinality__prime__2))), "genericToEnum'" => (function() use ($genericToEnum__prime__1, $genericToEnum__prime__2, $genericCardinality__prime__2) {
  $__fn = function($n) use ($genericToEnum__prime__1, $genericToEnum__prime__2, $genericCardinality__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = (function() use ($genericToEnum__prime__1, $n, $genericToEnum__prime__2) {
  $__body = function($v) use ($genericToEnum__prime__1, $n, $genericToEnum__prime__2) {
    $__case_0 = $v;
    if (true) {
$cb = $__case_0;
return ($GLOBALS['Data_Enum_Generic_apply'])(($GLOBALS['Data_Enum_Generic_map'])($GLOBALS['Data_Generic_Rep_Product'], ($genericToEnum__prime__1)(($GLOBALS['Data_Enum_Generic_div'])($n, $cb))), ($genericToEnum__prime__2)(($GLOBALS['Data_Enum_Generic_mod'])($n, $cb)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericToEnum__prime__1, $n, $genericToEnum__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($to)($genericCardinality__prime__2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => ($from)($genericCardinality__prime__2)]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericBoundedEnumNoArguments
$Data_Enum_Generic_genericBoundedEnumNoArguments = ($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'])((object)["genericCardinality'" => ($GLOBALS['Data_Enum_Cardinality'])(1), "genericToEnum'" => (function() {
  $__body = function($i) {
    $__case_0 = ($GLOBALS['Data_Enum_Generic_eq'])($i, 0);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Just'])($GLOBALS['Data_Generic_Rep_NoArguments']);
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($i) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($i);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = 0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_Generic_genericBoundedEnumConstructor
$Data_Enum_Generic_genericBoundedEnumConstructor = (function() {
  $__fn = function($dictGenericBoundedEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericToEnum__prime__1 = ($GLOBALS['Data_Enum_Generic_genericToEnum__prime__'])($dictGenericBoundedEnum);
$genericFromEnum__prime__1 = ($GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'])($dictGenericBoundedEnum);
    $__res = ($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'])((object)["genericCardinality'" => ($GLOBALS['Data_Enum_Cardinality'])(($GLOBALS['Data_Enum_Generic_unwrap'])(($GLOBALS['Data_Enum_Generic_genericCardinality__prime__'])($dictGenericBoundedEnum))), "genericToEnum'" => (function() use ($genericToEnum__prime__1) {
  $__fn = function($i) use ($genericToEnum__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_Generic_map'])($GLOBALS['Data_Generic_Rep_Constructor'], ($genericToEnum__prime__1)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use ($genericFromEnum__prime__1) {
  $__body = function($v) use ($genericFromEnum__prime__1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($genericFromEnum__prime__1)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericFromEnum__prime__1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Generic_genericBoundedEnumArgument
$Data_Enum_Generic_genericBoundedEnumArgument = (function() {
  $__fn = function($dictBoundedEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$toEnum = ($GLOBALS['Data_Enum_toEnum'])($dictBoundedEnum);
$fromEnum = ($GLOBALS['Data_Enum_fromEnum'])($dictBoundedEnum);
    $__res = ($GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'])((object)["genericCardinality'" => ($GLOBALS['Data_Enum_Cardinality'])(($GLOBALS['Data_Enum_Generic_unwrap'])(($GLOBALS['Data_Enum_cardinality'])($dictBoundedEnum))), "genericToEnum'" => (function() use ($toEnum) {
  $__fn = function($i) use ($toEnum, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_Generic_map'])($GLOBALS['Data_Generic_Rep_Argument'], ($toEnum)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "genericFromEnum'" => (function() use ($fromEnum) {
  $__body = function($v) use ($fromEnum) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return ($fromEnum)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($fromEnum, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

