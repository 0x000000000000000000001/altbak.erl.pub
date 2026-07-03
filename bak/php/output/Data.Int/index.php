<?php

namespace Data\Int;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.DivisionRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Int.Bits/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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


// Data_Int_conj
$Data_Int_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Int_greaterThanOrEq
$Data_Int_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Int_lessThanOrEq
$Data_Int_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Int_notEq
$Data_Int_notEq = ($GLOBALS['Data_Eq_notEq'])($GLOBALS['Data_Eq_eqInt']);

// Data_Int_not
$Data_Int_not = ($GLOBALS['Data_HeytingAlgebra_not'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Int_greaterThanOrEq1
$Data_Int_greaterThanOrEq1 = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordNumber']);

// Data_Int_top
$Data_Int_top = ($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Bounded_boundedInt']);

// Data_Int_lessThanOrEq1
$Data_Int_lessThanOrEq1 = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordNumber']);

// Data_Int_bottom
$Data_Int_bottom = ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Bounded_boundedInt']);

// Data_Int_compose
$Data_Int_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Int_eq
$Data_Int_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_Int_Radix
$Data_Int_Radix = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Int_Even
$Data_Int_Even = (object)["tag" => "Even", "values" => []];

// Data_Int_Odd
$Data_Int_Odd = (object)["tag" => "Odd", "values" => []];

// Data_Int_showParity
$Data_Int_showParity = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Even")) {
return "Even";
} else {
if ((($__case_0)->tag === "Odd")) {
return "Odd";
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Int_radix
$Data_Int_radix = (function() {
  $__body = function($n) {
    $__case_0 = $n;
    if (true) {
$n1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Int_odd
$Data_Int_odd = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Int_notEq'])(($GLOBALS['Data_Int_Bits_and'])($x, 1), 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Int_octal
$Data_Int_octal = ($GLOBALS['Data_Int_Radix'])(8);

// Data_Int_hexadecimal
$Data_Int_hexadecimal = ($GLOBALS['Data_Int_Radix'])(16);

// Data_Int_fromStringAs
$Data_Int_fromStringAs = ($GLOBALS['Data_Int_fromStringAsImpl'])($GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Int_fromString
$Data_Int_fromString = ($GLOBALS['Data_Int_fromStringAs'])(($GLOBALS['Data_Int_Radix'])(10));

// Data_Int_fromNumber
$Data_Int_fromNumber = ($GLOBALS['Data_Int_fromNumberImpl'])($GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Int_unsafeClamp
$Data_Int_unsafeClamp = (function() {
  $__body = function($x) {
    $__case_0 = $x;
    if (true) {
$x1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Int_round
$Data_Int_round = ($GLOBALS['Data_Int_compose'])($GLOBALS['Data_Int_unsafeClamp'], $GLOBALS['Data_Number_round']);

// Data_Int_trunc
$Data_Int_trunc = ($GLOBALS['Data_Int_compose'])($GLOBALS['Data_Int_unsafeClamp'], $GLOBALS['Data_Number_trunc']);

// Data_Int_floor
$Data_Int_floor = ($GLOBALS['Data_Int_compose'])($GLOBALS['Data_Int_unsafeClamp'], $GLOBALS['Data_Number_floor']);

// Data_Int_even
$Data_Int_even = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Int_eq'])(($GLOBALS['Data_Int_Bits_and'])($x, 1), 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Int_parity
$Data_Int_parity = (function() {
  $__body = function($n) {
    $__case_0 = ($GLOBALS['Data_Int_even'])($n);
    if (($__case_0 === true)) {
return $GLOBALS['Data_Int_Even'];
} else {
if (true) {
return $GLOBALS['Data_Int_Odd'];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Int_eqParity
$Data_Int_eqParity = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
return true;
} else {
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Int_eq1
$Data_Int_eq1 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Int_eqParity']);

// Data_Int_ordParity
$Data_Int_ordParity = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "Even")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Even")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Int_eqParity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Int_semiringParity
$Data_Int_semiringParity = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'])((object)["zero" => $GLOBALS['Data_Int_Even'], "add" => (function() {
  $__body = function($x, $y) {
    $__case_0 = ($GLOBALS['Data_Int_eq1'])($x, $y);
    if (($__case_0 === true)) {
return $GLOBALS['Data_Int_Even'];
} else {
if (true) {
return $GLOBALS['Data_Int_Odd'];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => $GLOBALS['Data_Int_Odd'], "mul" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
return $GLOBALS['Data_Int_Odd'];
} else {
if (true) {
return $GLOBALS['Data_Int_Even'];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Int_ringParity
$Data_Int_ringParity = ($GLOBALS['Data_Ring_Ring__dollar__Dict'])((object)["sub" => ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Int_semiringParity']), "Semiring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Int_semiringParity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Int_divisionRingParity
$Data_Int_divisionRingParity = ($GLOBALS['Data_DivisionRing_DivisionRing__dollar__Dict'])((object)["recip" => ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']), "Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Int_ringParity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Int_decimal
$Data_Int_decimal = ($GLOBALS['Data_Int_Radix'])(10);

// Data_Int_commutativeRingParity
$Data_Int_commutativeRingParity = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'])((object)["Ring0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Int_ringParity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Int_euclideanRingParity
$Data_Int_euclideanRingParity = ($GLOBALS['Data_EuclideanRing_EuclideanRing__dollar__Dict'])((object)["degree" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Even")) {
return 0;
} else {
if ((($__case_0)->tag === "Odd")) {
return 1;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "div" => (function() {
  $__fn = function($x, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $x;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mod" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Int_Even'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Int_commutativeRingParity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Int_ceil
$Data_Int_ceil = ($GLOBALS['Data_Int_compose'])($GLOBALS['Data_Int_unsafeClamp'], $GLOBALS['Data_Number_ceil']);

// Data_Int_boundedParity
$Data_Int_boundedParity = ($GLOBALS['Data_Bounded_Bounded__dollar__Dict'])((object)["bottom" => $GLOBALS['Data_Int_Even'], "top" => $GLOBALS['Data_Int_Odd'], "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Int_ordParity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Int_binary
$Data_Int_binary = ($GLOBALS['Data_Int_Radix'])(2);

// Data_Int_base36
$Data_Int_base36 = ($GLOBALS['Data_Int_Radix'])(36);

