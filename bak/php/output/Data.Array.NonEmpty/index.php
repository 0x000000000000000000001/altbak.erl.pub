<?php

namespace Data\Array\NonEmpty;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

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


// Data_Array_NonEmpty_compose
$Data_Array_NonEmpty_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Array_NonEmpty_coerce
$Data_Array_NonEmpty_coerce = ($GLOBALS['Safe_Coerce_coerce'])($GLOBALS['Prim_undefined']);

// Data_Array_NonEmpty_max
$Data_Array_NonEmpty_max = ($GLOBALS['Data_Ord_max'])($GLOBALS['Data_Ord_ordInt']);

// Data_Array_NonEmpty_append
$Data_Array_NonEmpty_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupArray']);

// Data_Array_NonEmpty_intercalate1
$Data_Array_NonEmpty_intercalate1 = ($GLOBALS['Data_Semigroup_Foldable_intercalate'])($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray']);

// Data_Array_NonEmpty_greaterThan
$Data_Array_NonEmpty_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Array_NonEmpty_foldMap11
$Data_Array_NonEmpty_foldMap11 = ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray']);

// Data_Array_NonEmpty_fold11
$Data_Array_NonEmpty_fold11 = ($GLOBALS['Data_Semigroup_Foldable_fold1'])($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray']);

// Data_Array_NonEmpty_fromJust
$Data_Array_NonEmpty_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Array_NonEmpty_unsafeIndex1
$Data_Array_NonEmpty_unsafeIndex1 = ($GLOBALS['Data_Array_unsafeIndex'])($GLOBALS['Prim_undefined']);

// Data_Array_NonEmpty_lessThan
$Data_Array_NonEmpty_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Array_NonEmpty_sub
$Data_Array_NonEmpty_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_Array_NonEmpty_add
$Data_Array_NonEmpty_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Array_NonEmpty_unsafeFromArrayF
$Data_Array_NonEmpty_unsafeFromArrayF = $GLOBALS['Unsafe_Coerce_unsafeCoerce'];

// Data_Array_NonEmpty_unsafeFromArray
$Data_Array_NonEmpty_unsafeFromArray = $GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'];

// Data_Array_NonEmpty_transpose
$Data_Array_NonEmpty_transpose = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_coerce'], ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_transpose'], $GLOBALS['Data_Array_NonEmpty_coerce']));

// Data_Array_NonEmpty_toArray
$Data_Array_NonEmpty_toArray = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$xs = $__case_0;
return $xs;
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

// Data_Array_NonEmpty_unionBy'
$Data_Array_NonEmpty_unionBy__prime__ = (function() {
  $__fn = function($eq, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'], ($GLOBALS['Data_Array_unionBy'])($eq, ($GLOBALS['Data_Array_NonEmpty_toArray'])($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_union'
$Data_Array_NonEmpty_union__prime__ = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unionBy__prime__'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_unionBy
$Data_Array_NonEmpty_unionBy = (function() {
  $__fn = function($eq, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])(($GLOBALS['Data_Array_NonEmpty_unionBy__prime__'])($eq, $xs), $GLOBALS['Data_Array_NonEmpty_toArray']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_union
$Data_Array_NonEmpty_union = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unionBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_unzip
$Data_Array_NonEmpty_unzip = ($GLOBALS['Data_Array_NonEmpty_compose'])(($GLOBALS['Data_Bifunctor_bimap'])($GLOBALS['Data_Bifunctor_bifunctorTuple'], $GLOBALS['Data_Array_NonEmpty_unsafeFromArray'], $GLOBALS['Data_Array_NonEmpty_unsafeFromArray']), ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_unzip'], $GLOBALS['Data_Array_NonEmpty_toArray']));

// Data_Array_NonEmpty_updateAt
$Data_Array_NonEmpty_updateAt = (function() {
  $__fn = function($i, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_unsafeFromArrayF'], ($GLOBALS['Data_Array_NonEmpty_compose'])(($GLOBALS['Data_Array_updateAt'])($i, $x), $GLOBALS['Data_Array_NonEmpty_toArray']));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_zip
$Data_Array_NonEmpty_zip = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'])(($GLOBALS['Data_Array_zip'])(($GLOBALS['Data_Array_NonEmpty_toArray'])($xs), ($GLOBALS['Data_Array_NonEmpty_toArray'])($ys)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_zipWith
$Data_Array_NonEmpty_zipWith = (function() {
  $__fn = function($f, $xs = null, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'])(($GLOBALS['Data_Array_zipWith'])($f, ($GLOBALS['Data_Array_NonEmpty_toArray'])($xs), ($GLOBALS['Data_Array_NonEmpty_toArray'])($ys)));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_zipWithA
$Data_Array_NonEmpty_zipWithA = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$zipWithA1 = ($GLOBALS['Data_Array_zipWithA'])($dictApplicative);
    $__res = (function() use ($zipWithA1) {
  $__fn = function($f, $xs = null, $ys = null) use ($zipWithA1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArrayF'])(($zipWithA1)($f, ($GLOBALS['Data_Array_NonEmpty_toArray'])($xs), ($GLOBALS['Data_Array_NonEmpty_toArray'])($ys)));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_splitAt
$Data_Array_NonEmpty_splitAt = (function() {
  $__fn = function($i, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_splitAt'])($i, ($GLOBALS['Data_Array_NonEmpty_toArray'])($xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_some
$Data_Array_NonEmpty_some = (function() {
  $__fn = function($dictAlternative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$some1 = ($GLOBALS['Data_Array_some'])($dictAlternative);
    $__res = (function() use ($some1) {
  $__fn = function($dictLazy) use ($some1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_unsafeFromArrayF'], ($some1)($dictLazy));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_snoc'
$Data_Array_NonEmpty_snoc__prime__ = (function() {
  $__fn = function($xs, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'])(($GLOBALS['Data_Array_snoc'])($xs, $x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_snoc
$Data_Array_NonEmpty_snoc = (function() {
  $__fn = function($xs, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'])(($GLOBALS['Data_Array_snoc'])(($GLOBALS['Data_Array_NonEmpty_toArray'])($xs), $x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_singleton
$Data_Array_NonEmpty_singleton = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'], $GLOBALS['Data_Array_singleton']);

// Data_Array_NonEmpty_replicate
$Data_Array_NonEmpty_replicate = (function() {
  $__fn = function($i, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'])(($GLOBALS['Data_Array_replicate'])(($GLOBALS['Data_Array_NonEmpty_max'])(1, $i), $x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_range
$Data_Array_NonEmpty_range = (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'])(($GLOBALS['Data_Array_range'])($x, $y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_prependArray
$Data_Array_NonEmpty_prependArray = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'])(($GLOBALS['Data_Array_NonEmpty_append'])($xs, ($GLOBALS['Data_Array_NonEmpty_toArray'])($ys)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_modifyAt
$Data_Array_NonEmpty_modifyAt = (function() {
  $__fn = function($i, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_unsafeFromArrayF'], ($GLOBALS['Data_Array_NonEmpty_compose'])(($GLOBALS['Data_Array_modifyAt'])($i, $f), $GLOBALS['Data_Array_NonEmpty_toArray']));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersectBy'
$Data_Array_NonEmpty_intersectBy__prime__ = (function() {
  $__fn = function($eq, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_intersectBy'])($eq, ($GLOBALS['Data_Array_NonEmpty_toArray'])($xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersectBy
$Data_Array_NonEmpty_intersectBy = (function() {
  $__fn = function($eq, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])(($GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'])($eq, $xs), $GLOBALS['Data_Array_NonEmpty_toArray']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersect'
$Data_Array_NonEmpty_intersect__prime__ = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersect
$Data_Array_NonEmpty_intersect = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_intersectBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intercalate
$Data_Array_NonEmpty_intercalate = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_intercalate1'])($dictSemigroup);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_insertAt
$Data_Array_NonEmpty_insertAt = (function() {
  $__fn = function($i, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_unsafeFromArrayF'], ($GLOBALS['Data_Array_NonEmpty_compose'])(($GLOBALS['Data_Array_insertAt'])($i, $x), $GLOBALS['Data_Array_NonEmpty_toArray']));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_fromFoldable1
$Data_Array_NonEmpty_fromFoldable1 = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'], ($GLOBALS['Data_Array_fromFoldable'])((($dictFoldable1)->Foldable0)($GLOBALS['Prim_undefined'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_fromArray
$Data_Array_NonEmpty_fromArray = (function() {
  $__body = function($xs) {
    $__case_0 = $xs;
    if (true) {
$xs1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($xs) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_fromFoldable
$Data_Array_NonEmpty_fromFoldable = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_fromArray'], ($GLOBALS['Data_Array_fromFoldable'])($dictFoldable));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_transpose'
$Data_Array_NonEmpty_transpose__prime__ = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_fromArray'], ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_transpose'], $GLOBALS['Data_Array_NonEmpty_coerce']));

// Data_Array_NonEmpty_foldr1
$Data_Array_NonEmpty_foldr1 = ($GLOBALS['Data_Semigroup_Foldable_foldr1'])($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray']);

// Data_Array_NonEmpty_foldl1
$Data_Array_NonEmpty_foldl1 = ($GLOBALS['Data_Semigroup_Foldable_foldl1'])($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray']);

// Data_Array_NonEmpty_foldMap1
$Data_Array_NonEmpty_foldMap1 = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_foldMap11'])($dictSemigroup);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_fold1
$Data_Array_NonEmpty_fold1 = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_fold11'])($dictSemigroup);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_difference'
$Data_Array_NonEmpty_difference__prime__ = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$difference1 = ($GLOBALS['Data_Array_difference'])($dictEq);
    $__res = (function() use ($difference1) {
  $__fn = function($xs) use ($difference1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($difference1)(($GLOBALS['Data_Array_NonEmpty_toArray'])($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_cons'
$Data_Array_NonEmpty_cons__prime__ = (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'])(($GLOBALS['Data_Array_cons'])($x, $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_fromNonEmpty
$Data_Array_NonEmpty_fromNonEmpty = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Array_NonEmpty_cons__prime__'])($x, $xs);
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

// Data_Array_NonEmpty_concatMap
$Data_Array_NonEmpty_concatMap = ($GLOBALS['Data_Function_flip'])(($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_Array_NonEmpty_Internal_bindNonEmptyArray']));

// Data_Array_NonEmpty_concat
$Data_Array_NonEmpty_concat = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'], ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_concat'], ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_toArray'], ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Array_NonEmpty_Internal_functorNonEmptyArray'], $GLOBALS['Data_Array_NonEmpty_toArray']))));

// Data_Array_NonEmpty_appendArray
$Data_Array_NonEmpty_appendArray = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'])(($GLOBALS['Data_Array_NonEmpty_append'])(($GLOBALS['Data_Array_NonEmpty_toArray'])($xs), $ys));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_alterAt
$Data_Array_NonEmpty_alterAt = (function() {
  $__fn = function($i, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])(($GLOBALS['Data_Array_alterAt'])($i, $f), $GLOBALS['Data_Array_NonEmpty_toArray']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_adaptMaybe
$Data_Array_NonEmpty_adaptMaybe = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() use ($f) {
  $__fn = function($__dollar____unused) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_fromJust'], ($GLOBALS['Data_Array_NonEmpty_compose'])($f, $GLOBALS['Data_Array_NonEmpty_toArray']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_head
$Data_Array_NonEmpty_head = ($GLOBALS['Data_Array_NonEmpty_adaptMaybe'])($GLOBALS['Data_Array_head']);

// Data_Array_NonEmpty_init
$Data_Array_NonEmpty_init = ($GLOBALS['Data_Array_NonEmpty_adaptMaybe'])($GLOBALS['Data_Array_init']);

// Data_Array_NonEmpty_last
$Data_Array_NonEmpty_last = ($GLOBALS['Data_Array_NonEmpty_adaptMaybe'])($GLOBALS['Data_Array_last']);

// Data_Array_NonEmpty_tail
$Data_Array_NonEmpty_tail = ($GLOBALS['Data_Array_NonEmpty_adaptMaybe'])($GLOBALS['Data_Array_tail']);

// Data_Array_NonEmpty_uncons
$Data_Array_NonEmpty_uncons = ($GLOBALS['Data_Array_NonEmpty_adaptMaybe'])($GLOBALS['Data_Array_uncons']);

// Data_Array_NonEmpty_toNonEmpty
$Data_Array_NonEmpty_toNonEmpty = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn'], $GLOBALS['Data_Array_NonEmpty_uncons'], (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$x = ($__case_0)->head;
$xs = ($__case_0)->tail;
return ($GLOBALS['Data_NonEmpty_NonEmpty'])($x, $xs);
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
})());

// Data_Array_NonEmpty_unsnoc
$Data_Array_NonEmpty_unsnoc = ($GLOBALS['Data_Array_NonEmpty_adaptMaybe'])($GLOBALS['Data_Array_unsnoc']);

// Data_Array_NonEmpty_adaptAny
$Data_Array_NonEmpty_adaptAny = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($f, $GLOBALS['Data_Array_NonEmpty_toArray']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_all
$Data_Array_NonEmpty_all = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_all'])($p));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_any
$Data_Array_NonEmpty_any = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_any'])($p));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_catMaybes
$Data_Array_NonEmpty_catMaybes = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])($GLOBALS['Data_Array_catMaybes']);

// Data_Array_NonEmpty_delete
$Data_Array_NonEmpty_delete = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$delete1 = ($GLOBALS['Data_Array_delete'])($dictEq);
    $__res = (function() use ($delete1) {
  $__fn = function($x) use ($delete1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($delete1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_deleteAt
$Data_Array_NonEmpty_deleteAt = (function() {
  $__fn = function($i) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_deleteAt'])($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_deleteBy
$Data_Array_NonEmpty_deleteBy = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_deleteBy'])($f, $x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_difference
$Data_Array_NonEmpty_difference = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$difference__prime__1 = ($GLOBALS['Data_Array_NonEmpty_difference__prime__'])($dictEq);
    $__res = (function() use ($difference__prime__1) {
  $__fn = function($xs) use ($difference__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($difference__prime__1)($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_drop
$Data_Array_NonEmpty_drop = (function() {
  $__fn = function($i) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_drop'])($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_dropEnd
$Data_Array_NonEmpty_dropEnd = (function() {
  $__fn = function($i) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_dropEnd'])($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_dropWhile
$Data_Array_NonEmpty_dropWhile = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_dropWhile'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_elem
$Data_Array_NonEmpty_elem = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$elem1 = ($GLOBALS['Data_Array_elem'])($dictEq);
    $__res = (function() use ($elem1) {
  $__fn = function($x) use ($elem1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($elem1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_elemIndex
$Data_Array_NonEmpty_elemIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$elemIndex1 = ($GLOBALS['Data_Array_elemIndex'])($dictEq);
    $__res = (function() use ($elemIndex1) {
  $__fn = function($x) use ($elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($elemIndex1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_elemLastIndex
$Data_Array_NonEmpty_elemLastIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$elemLastIndex1 = ($GLOBALS['Data_Array_elemLastIndex'])($dictEq);
    $__res = (function() use ($elemLastIndex1) {
  $__fn = function($x) use ($elemLastIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($elemLastIndex1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_filter
$Data_Array_NonEmpty_filter = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_filter'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_filterA
$Data_Array_NonEmpty_filterA = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$filterA1 = ($GLOBALS['Data_Array_filterA'])($dictApplicative);
    $__res = (function() use ($filterA1) {
  $__fn = function($f) use ($filterA1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($filterA1)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_find
$Data_Array_NonEmpty_find = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_find'])($p));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_findIndex
$Data_Array_NonEmpty_findIndex = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_findIndex'])($p));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_findLastIndex
$Data_Array_NonEmpty_findLastIndex = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_findLastIndex'])($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_findMap
$Data_Array_NonEmpty_findMap = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_findMap'])($p));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_foldM
$Data_Array_NonEmpty_foldM = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldM1 = ($GLOBALS['Data_Array_foldM'])($dictMonad);
    $__res = (function() use ($foldM1) {
  $__fn = function($f, $acc = null) use ($foldM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($foldM1)($f, $acc));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_foldRecM
$Data_Array_NonEmpty_foldRecM = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldRecM1 = ($GLOBALS['Data_Array_foldRecM'])($dictMonadRec);
    $__res = (function() use ($foldRecM1) {
  $__fn = function($f, $acc = null) use ($foldRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($foldRecM1)($f, $acc));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_index
$Data_Array_NonEmpty_index = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])($GLOBALS['Data_Array_index']);

// Data_Array_NonEmpty_length
$Data_Array_NonEmpty_length = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])($GLOBALS['Data_Array_length']);

// Data_Array_NonEmpty_mapMaybe
$Data_Array_NonEmpty_mapMaybe = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_mapMaybe'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_notElem
$Data_Array_NonEmpty_notElem = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$notElem1 = ($GLOBALS['Data_Array_notElem'])($dictEq);
    $__res = (function() use ($notElem1) {
  $__fn = function($x) use ($notElem1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($notElem1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_partition
$Data_Array_NonEmpty_partition = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_partition'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_slice
$Data_Array_NonEmpty_slice = (function() {
  $__fn = function($start, $end = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_slice'])($start, $end));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_span
$Data_Array_NonEmpty_span = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_span'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_take
$Data_Array_NonEmpty_take = (function() {
  $__fn = function($i) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_take'])($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_takeEnd
$Data_Array_NonEmpty_takeEnd = (function() {
  $__fn = function($i) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_takeEnd'])($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_takeWhile
$Data_Array_NonEmpty_takeWhile = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_takeWhile'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_toUnfoldable
$Data_Array_NonEmpty_toUnfoldable = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])(($GLOBALS['Data_Array_toUnfoldable'])($dictUnfoldable));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_unsafeAdapt
$Data_Array_NonEmpty_unsafeAdapt = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_compose'])($GLOBALS['Data_Array_NonEmpty_unsafeFromArray'], ($GLOBALS['Data_Array_NonEmpty_adaptAny'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_cons
$Data_Array_NonEmpty_cons = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_cons'])($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_group
$Data_Array_NonEmpty_group = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_group'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_groupAllBy
$Data_Array_NonEmpty_groupAllBy = (function() {
  $__fn = function($op) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_groupAllBy'])($op));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_groupAll
$Data_Array_NonEmpty_groupAll = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_groupAllBy'])(($GLOBALS['Data_Ord_compare'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_groupBy
$Data_Array_NonEmpty_groupBy = (function() {
  $__fn = function($op) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_groupBy'])($op));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_insert
$Data_Array_NonEmpty_insert = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$insert1 = ($GLOBALS['Data_Array_insert'])($dictOrd);
    $__res = (function() use ($insert1) {
  $__fn = function($x) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($insert1)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_insertBy
$Data_Array_NonEmpty_insertBy = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_insertBy'])($f, $x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_intersperse
$Data_Array_NonEmpty_intersperse = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_intersperse'])($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_mapWithIndex
$Data_Array_NonEmpty_mapWithIndex = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_mapWithIndex'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_modifyAtIndices
$Data_Array_NonEmpty_modifyAtIndices = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$modifyAtIndices1 = ($GLOBALS['Data_Array_modifyAtIndices'])($dictFoldable);
    $__res = (function() use ($modifyAtIndices1) {
  $__fn = function($is, $f = null) use ($modifyAtIndices1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($modifyAtIndices1)($is, $f));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_nub
$Data_Array_NonEmpty_nub = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_nub'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_nubBy
$Data_Array_NonEmpty_nubBy = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_nubBy'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_nubByEq
$Data_Array_NonEmpty_nubByEq = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_nubByEq'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_nubEq
$Data_Array_NonEmpty_nubEq = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_nubEq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_reverse
$Data_Array_NonEmpty_reverse = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])($GLOBALS['Data_Array_reverse']);

// Data_Array_NonEmpty_scanl
$Data_Array_NonEmpty_scanl = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_scanl'])($f, $x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_scanr
$Data_Array_NonEmpty_scanr = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_scanr'])($f, $x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_sort
$Data_Array_NonEmpty_sort = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_sort'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_sortBy
$Data_Array_NonEmpty_sortBy = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($GLOBALS['Data_Array_sortBy'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_sortWith
$Data_Array_NonEmpty_sortWith = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sortWith1 = ($GLOBALS['Data_Array_sortWith'])($dictOrd);
    $__res = (function() use ($sortWith1) {
  $__fn = function($f) use ($sortWith1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($sortWith1)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_updateAtIndices
$Data_Array_NonEmpty_updateAtIndices = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$updateAtIndices1 = ($GLOBALS['Data_Array_updateAtIndices'])($dictFoldable);
    $__res = (function() use ($updateAtIndices1) {
  $__fn = function($pairs) use ($updateAtIndices1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeAdapt'])(($updateAtIndices1)($pairs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_unsafeIndex
$Data_Array_NonEmpty_unsafeIndex = (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_NonEmpty_adaptAny'])($GLOBALS['Data_Array_NonEmpty_unsafeIndex1']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_unsafeIndex2
$Data_Array_NonEmpty_unsafeIndex2 = ($GLOBALS['Data_Array_NonEmpty_unsafeIndex'])($GLOBALS['Prim_undefined']);

// Data_Array_NonEmpty_toUnfoldable1
$Data_Array_NonEmpty_toUnfoldable1 = (function() {
  $__fn = function($dictUnfoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldr1 = ($GLOBALS['Data_Unfoldable1_unfoldr1'])($dictUnfoldable1);
    $__res = (function() use ($unfoldr1) {
  $__fn = function($xs) use ($unfoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$len = ($GLOBALS['Data_Array_NonEmpty_length'])($xs);
$f = (function() use ($xs, $len) {
  $__fn = function($i) use ($xs, $len, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$__case_0 = ($GLOBALS['Data_Array_NonEmpty_lessThan'])($i, ($GLOBALS['Data_Array_NonEmpty_sub'])($len, 1));
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Array_NonEmpty_add'])($i, 1));
} else {
if (true) {
$__case_res_0 = $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Array_NonEmpty_unsafeIndex2'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs, $i), $__case_res_0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr1)($f, 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

