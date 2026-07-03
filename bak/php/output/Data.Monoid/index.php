<?php

namespace Data\Monoid;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Record.Unsafe/index.php';
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


// Data_Monoid_semigroupRecord
$Data_Monoid_semigroupRecord = ($GLOBALS['Data_Semigroup_semigroupRecord'])($GLOBALS['Prim_undefined']);

// Data_Monoid_lessThanOrEq
$Data_Monoid_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Monoid_eq
$Data_Monoid_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_Monoid_mod
$Data_Monoid_mod = ($GLOBALS['Data_EuclideanRing_mod'])($GLOBALS['Data_EuclideanRing_euclideanRingInt']);

// Data_Monoid_div
$Data_Monoid_div = ($GLOBALS['Data_EuclideanRing_div'])($GLOBALS['Data_EuclideanRing_euclideanRingInt']);

// Data_Monoid_MonoidRecord$Dict
$Data_Monoid_MonoidRecord__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Monoid_Monoid$Dict
$Data_Monoid_Monoid__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Monoid_monoidUnit
$Data_Monoid_monoidUnit = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => $GLOBALS['Data_Unit_unit'], "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Semigroup_semigroupUnit'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_monoidString
$Data_Monoid_monoidString = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => "", "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Semigroup_semigroupString'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_monoidRecordNil
$Data_Monoid_monoidRecordNil = ($GLOBALS['Data_Monoid_MonoidRecord__dollar__Dict'])((object)["memptyRecord" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)[];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "SemigroupRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Semigroup_semigroupRecordNil'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_monoidOrdering
$Data_Monoid_monoidOrdering = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => $GLOBALS['Data_Ordering_EQ'], "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ordering_semigroupOrdering'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_monoidArray
$Data_Monoid_monoidArray = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => [], "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Semigroup_semigroupArray'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Monoid_memptyRecord
$Data_Monoid_memptyRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->memptyRecord;
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

// Data_Monoid_monoidRecord
$Data_Monoid_monoidRecord = (function() {
  $__fn = function($__dollar____unused, $dictMonoidRecord = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$semigroupRecord1 = ($GLOBALS['Data_Monoid_semigroupRecord'])((($dictMonoidRecord)->SemigroupRecord0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Data_Monoid_memptyRecord'])($dictMonoidRecord, $GLOBALS['Type_Proxy_Proxy']), "Semigroup0" => (function() use ($semigroupRecord1) {
  $__fn = function($__dollar____unused) use ($semigroupRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupRecord1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Monoid_mempty
$Data_Monoid_mempty = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mempty;
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

// Data_Monoid_monoidFn
$Data_Monoid_monoidFn = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty1 = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$semigroupFn = ($GLOBALS['Data_Semigroup_semigroupFn'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => (function() use ($mempty1) {
  $__fn = function($v) use ($mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $mempty1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Semigroup0" => (function() use ($semigroupFn) {
  $__fn = function($__dollar____unused) use ($semigroupFn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupFn;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Monoid_monoidRecordCons
$Data_Monoid_monoidRecordCons = (function() {
  $__fn = function($dictIsSymbol) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$reflectSymbol = ($GLOBALS['Data_Symbol_reflectSymbol'])($dictIsSymbol);
$semigroupRecordCons = ($GLOBALS['Data_Semigroup_semigroupRecordCons'])($dictIsSymbol, $GLOBALS['Prim_undefined']);
    $__res = (function() use ($semigroupRecordCons, $reflectSymbol) {
  $__fn = function($dictMonoid) use ($semigroupRecordCons, $reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty1 = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$Semigroup0 = (($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']);
    $__res = (function() use ($semigroupRecordCons, &$Semigroup0, $reflectSymbol, $mempty1) {
  $__fn = function($__dollar____unused, $dictMonoidRecord = null) use ($semigroupRecordCons, &$Semigroup0, $reflectSymbol, $mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$memptyRecord1 = ($GLOBALS['Data_Monoid_memptyRecord'])($dictMonoidRecord);
$semigroupRecordCons1 = ($semigroupRecordCons)((($dictMonoidRecord)->SemigroupRecord0)($GLOBALS['Prim_undefined']), $Semigroup0);
    $__res = ($GLOBALS['Data_Monoid_MonoidRecord__dollar__Dict'])((object)["memptyRecord" => (function() use ($memptyRecord1, $reflectSymbol, $mempty1) {
  $__fn = function($v) use ($memptyRecord1, $reflectSymbol, $mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tail = ($memptyRecord1)($GLOBALS['Type_Proxy_Proxy']);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
    $__res = ($insert)($mempty1, $tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "SemigroupRecord0" => (function() use ($semigroupRecordCons1) {
  $__fn = function($__dollar____unused) use ($semigroupRecordCons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupRecordCons1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
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

// Data_Monoid_power
$Data_Monoid_power = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty1 = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $p;
if (true) {
$p1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Monoid_guard
$Data_Monoid_guard = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty1 = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($mempty1) {
  $__body = function($v, $v1) use ($mempty1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (($__case_0 === true)) {
$a = $__case_1;
return $a;
} else {
if (($__case_0 === false)) {
return $mempty1;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($mempty1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

