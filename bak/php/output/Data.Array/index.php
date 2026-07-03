<?php

namespace Data\Array;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Array.ST.Iterator/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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


// Data_Array_sequence
$Data_Array_sequence = ($GLOBALS['Data_Traversable_sequence'])($GLOBALS['Data_Traversable_traversableArray']);

// Data_Array_traverse_
$Data_Array_traverse_ = ($GLOBALS['Data_Foldable_traverse_'])($GLOBALS['Control_Monad_ST_Internal_applicativeST']);

// Data_Array_lessThan
$Data_Array_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Array_add
$Data_Array_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Array_negate
$Data_Array_negate = ($GLOBALS['Data_Ring_negate'])($GLOBALS['Data_Ring_ringInt']);

// Data_Array_lessThanOrEq
$Data_Array_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Array_eq
$Data_Array_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_Array_bind
$Data_Array_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Control_Monad_ST_Internal_bindST']);

// Data_Array_discard
$Data_Array_discard = ($GLOBALS['Control_Bind_discard'])($GLOBALS['Control_Bind_discardUnit'], $GLOBALS['Control_Monad_ST_Internal_bindST']);

// Data_Array_void
$Data_Array_void = ($GLOBALS['Data_Functor_void'])($GLOBALS['Control_Monad_ST_Internal_functorST']);

// Data_Array_pure
$Data_Array_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Control_Monad_ST_Internal_applicativeST']);

// Data_Array_intercalate1
$Data_Array_intercalate1 = ($GLOBALS['Data_Foldable_intercalate'])($GLOBALS['Data_Foldable_foldableArray']);

// Data_Array_zero
$Data_Array_zero = ($GLOBALS['Data_Semiring_zero'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Array_sub
$Data_Array_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_Array_one
$Data_Array_one = ($GLOBALS['Data_Semiring_one'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Array_apply
$Data_Array_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_Maybe_applyMaybe']);

// Data_Array_map
$Data_Array_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_Array_map1
$Data_Array_map1 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Functor_functorArray']);

// Data_Array_map2
$Data_Array_map2 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Control_Monad_ST_Internal_functorST']);

// Data_Array_compose
$Data_Array_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Array_fromJust
$Data_Array_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Array_when
$Data_Array_when = ($GLOBALS['Control_Applicative_when'])($GLOBALS['Control_Monad_ST_Internal_applicativeST']);

// Data_Array_notEq
$Data_Array_notEq = ($GLOBALS['Data_Eq_notEq'])($GLOBALS['Data_Ordering_eqOrdering']);

// Data_Array_eq1
$Data_Array_eq1 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Ordering_eqOrdering']);

// Data_Array_greaterThanOrEq
$Data_Array_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Array_foldMap1
$Data_Array_foldMap1 = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_Foldable_foldableArray']);

// Data_Array_fold1
$Data_Array_fold1 = ($GLOBALS['Data_Foldable_fold'])($GLOBALS['Data_Foldable_foldableArray']);

// Data_Array_append
$Data_Array_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupArray']);

// Data_Array_composeFlipped
$Data_Array_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Array_traverse
$Data_Array_traverse = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Traversable_traversableArray']);

// Data_Array_not
$Data_Array_not = ($GLOBALS['Data_HeytingAlgebra_not'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Array_zipWith
$Data_Array_zipWith = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Array_zipWithImpl']);

// Data_Array_zipWithA
$Data_Array_zipWithA = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequence1 = ($GLOBALS['Data_Array_sequence'])($dictApplicative);
    $__res = (function() use ($sequence1) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($sequence1)(($GLOBALS['Data_Array_zipWith'])($f, $xs, $ys));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_zip
$Data_Array_zip = ($GLOBALS['Data_Array_zipWith'])($GLOBALS['Data_Tuple_Tuple']);

// Data_Array_updateAtIndices
$Data_Array_updateAtIndices = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse_1 = ($GLOBALS['Data_Array_traverse_'])($dictFoldable);
    $__res = (function() use ($traverse_1) {
  $__fn = function($us, $xs = null) use ($traverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_ST_Internal_run'])(($GLOBALS['Data_Array_ST_withArray'])((function() use ($traverse_1, $us) {
  $__fn = function($res) use ($traverse_1, $us, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse_1)((function() use ($res) {
  $__body = function($v) use ($res) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
return ($GLOBALS['Data_Array_ST_poke'])($i, $a, $res);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($res, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $us);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_updateAt
$Data_Array_updateAt = ($GLOBALS['Data_Function_Uncurried_runFn5'])($GLOBALS['Data_Array__updateAt'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Array_unsafeIndex
$Data_Array_unsafeIndex = (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_unsafeIndexImpl']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_unsafeIndex1
$Data_Array_unsafeIndex1 = ($GLOBALS['Data_Array_unsafeIndex'])($GLOBALS['Prim_undefined']);

// Data_Array_uncons
$Data_Array_uncons = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Array_unconsImpl'], ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']), (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Maybe_Just'])((object)["head" => $x, "tail" => $xs]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());

// Data_Array_toUnfoldable
$Data_Array_toUnfoldable = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldr = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable);
    $__res = (function() use ($unfoldr) {
  $__fn = function($xs) use ($unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$len = ($GLOBALS['Data_Array_length'])($xs);
$f = (function() {
  $__body = function($i) {
    $__case_0 = $i;
    if (true) {
$i1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($i) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($i);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr)($f, 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_tail
$Data_Array_tail = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Array_unconsImpl'], ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']), (function() {
  $__fn = function($v, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Maybe_Just'])($xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());

// Data_Array_sortBy
$Data_Array_sortBy = (function() {
  $__fn = function($comp) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Array_sortByImpl'], $comp, (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return 1;
} else {
if ((($__case_0)->tag === "EQ")) {
return 0;
} else {
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Array_negate'])(1);
} else {
throw new \Exception("Pattern match failure");
};
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
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_sortWith
$Data_Array_sortWith = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comparing = ($GLOBALS['Data_Ord_comparing'])($dictOrd);
    $__res = (function() use ($comparing) {
  $__fn = function($f) use ($comparing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_sortBy'])(($comparing)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_sortWith1
$Data_Array_sortWith1 = ($GLOBALS['Data_Array_sortWith'])($GLOBALS['Data_Ord_ordInt']);

// Data_Array_sort
$Data_Array_sort = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($xs) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_sortBy'])($compare, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_snoc
$Data_Array_snoc = (function() {
  $__fn = function($xs, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_ST_Internal_run'])(($GLOBALS['Data_Array_ST_withArray'])(($GLOBALS['Data_Array_ST_push'])($x), $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_slice
$Data_Array_slice = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Array_sliceImpl']);

// Data_Array_splitAt
$Data_Array_splitAt = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$i = $__case_0;
$xs = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$i = $__case_0;
$xs = $__case_1;
return (object)["before" => ($GLOBALS['Data_Array_slice'])(0, $i, $xs), "after" => ($GLOBALS['Data_Array_slice'])($i, ($GLOBALS['Data_Array_length'])($xs), $xs)];
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
})();

// Data_Array_take
$Data_Array_take = (function() {
  $__body = function($n, $xs) {
    $__case_0 = ($GLOBALS['Data_Array_lessThan'])($n, 1);
    if (($__case_0 === true)) {
return [];
} else {
if (true) {
return ($GLOBALS['Data_Array_slice'])(0, $n, $xs);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n, $xs = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($n, $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_singleton
$Data_Array_singleton = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = [$a];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_scanr
$Data_Array_scanr = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Array_scanrImpl']);

// Data_Array_scanl
$Data_Array_scanl = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Array_scanlImpl']);

// Data_Array_replicate
$Data_Array_replicate = ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_replicateImpl']);

// Data_Array_range
$Data_Array_range = ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_rangeImpl']);

// Data_Array_partition
$Data_Array_partition = ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_partitionImpl']);

// Data_Array_null
$Data_Array_null = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_eq'])(($GLOBALS['Data_Array_length'])($xs), 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_modifyAtIndices
$Data_Array_modifyAtIndices = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse_1 = ($GLOBALS['Data_Array_traverse_'])($dictFoldable);
    $__res = (function() use ($traverse_1) {
  $__fn = function($is, $f = null, $xs = null) use ($traverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Control_Monad_ST_Internal_run'])(($GLOBALS['Data_Array_ST_withArray'])((function() use ($traverse_1, $f, $is) {
  $__fn = function($res) use ($traverse_1, $f, $is, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse_1)((function() use ($f, $res) {
  $__fn = function($i) use ($f, $res, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_modify'])($i, $f, $res);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $is);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_mapWithIndex
$Data_Array_mapWithIndex = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($GLOBALS['Data_FunctorWithIndex_functorWithIndexArray']);

// Data_Array_intersperse
$Data_Array_intersperse = (function() {
  $__body = function($a, $arr) {
    $v = ($GLOBALS['Data_Array_length'])($arr);
    $__case_0 = $v;
    if (true) {
$len = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $arr = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a, $arr);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_intercalate
$Data_Array_intercalate = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_intercalate1'])($dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_insertAt
$Data_Array_insertAt = ($GLOBALS['Data_Function_Uncurried_runFn5'])($GLOBALS['Data_Array__insertAt'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Array_init
$Data_Array_init = (function() {
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

// Data_Array_index
$Data_Array_index = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Array_indexImpl'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Array_last
$Data_Array_last = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_index'])($xs, ($GLOBALS['Data_Array_sub'])(($GLOBALS['Data_Array_length'])($xs), 1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_unsnoc
$Data_Array_unsnoc = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_apply'])(($GLOBALS['Data_Array_map'])((function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["init" => $v, "last" => $v1];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Array_init'])($xs)), ($GLOBALS['Data_Array_last'])($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_modifyAt
$Data_Array_modifyAt = (function() {
  $__fn = function($i, $f = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$go = (function() use ($i, $f, $xs) {
  $__fn = function($x) use ($i, $f, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_updateAt'])($i, ($f)($x), $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_Maybe_maybe'])($GLOBALS['Data_Maybe_Nothing'], $go, ($GLOBALS['Data_Array_index'])($xs, $i));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Array_span
$Data_Array_span = (function() {
  $__body = function($p, $arr) {
    $go = (function() use ($arr, $p, &$go) {
  $__fn = function($i) use ($arr, $p, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$v = ($GLOBALS['Data_Array_index'])($arr, $i);
$__case_0 = $v;
if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
$__case_0 = ($p)($x);
if (($__case_0 === true)) {
$__tco_tmp_0 = ($GLOBALS['Data_Array_add'])($i, 1);
$i = $__tco_tmp_0;
continue;
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Just'])($i);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "Nothing")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $breakIndex = ($go)(0);
    $__case_0 = $breakIndex;
    if (((($__case_0)->tag === "Just") && (($__case_0)->values[0] === 0))) {
return (object)["init" => [], "rest" => $arr];
} else {
if ((($__case_0)->tag === "Just")) {
$i = ($__case_0)->values[0];
return (object)["init" => ($GLOBALS['Data_Array_slice'])(0, $i, $arr), "rest" => ($GLOBALS['Data_Array_slice'])($i, ($GLOBALS['Data_Array_length'])($arr), $arr)];
} else {
if ((($__case_0)->tag === "Nothing")) {
return (object)["init" => $arr, "rest" => []];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($p, $arr = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($p, $arr);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_takeWhile
$Data_Array_takeWhile = (function() {
  $__fn = function($p, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (($GLOBALS['Data_Array_span'])($p, $xs))->init;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_unzip
$Data_Array_unzip = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_ST_Internal_run'])(($GLOBALS['Data_Array_bind'])($GLOBALS['Data_Array_ST_new'], (function() use ($xs) {
  $__fn = function($fsts) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_bind'])($GLOBALS['Data_Array_ST_new'], (function() use ($xs, $fsts) {
  $__fn = function($snds) use ($xs, $fsts, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_bind'])(($GLOBALS['Data_Array_ST_Iterator_iterator'])((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_index'])($xs, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($fsts, $snds) {
  $__fn = function($iter) use ($fsts, $snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_discard'])(($GLOBALS['Data_Array_ST_Iterator_iterate'])($iter, (function() use ($fsts, $snds) {
  $__body = function($v) use ($fsts, $snds) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$fst = ($__case_0)->values[0];
$snd = ($__case_0)->values[1];
return ($GLOBALS['Data_Array_discard'])(($GLOBALS['Data_Array_void'])(($GLOBALS['Data_Array_ST_push'])($fst, $fsts)), (function() use ($snd, $snds) {
  $__fn = function($__dollar____unused) use ($snd, $snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_void'])(($GLOBALS['Data_Array_ST_push'])($snd, $snds));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($fsts, $snds, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($fsts, $snds) {
  $__fn = function($__dollar____unused) use ($fsts, $snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_bind'])(($GLOBALS['Data_Array_ST_unsafeFreeze'])($fsts), (function() use ($snds) {
  $__fn = function($fsts__prime__) use ($snds, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_bind'])(($GLOBALS['Data_Array_ST_unsafeFreeze'])($snds), (function() use ($fsts__prime__) {
  $__fn = function($snds__prime__) use ($fsts__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_pure'])(($GLOBALS['Data_Tuple_Tuple'])($fsts__prime__, $snds__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_head
$Data_Array_head = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_index'])($xs, 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_nubBy
$Data_Array_nubBy = (function() {
  $__body = function($comp, $xs) {
    $indexedAndSorted = ($GLOBALS['Data_Array_sortBy'])((function() use ($comp) {
  $__fn = function($x, $y = null) use ($comp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($comp)(($GLOBALS['Data_Tuple_snd'])($x), ($GLOBALS['Data_Tuple_snd'])($y));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Array_mapWithIndex'])($GLOBALS['Data_Tuple_Tuple'], $xs));
    $v = ($GLOBALS['Data_Array_head'])($indexedAndSorted);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return [];
} else {
if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($GLOBALS['Data_Array_map1'])($GLOBALS['Data_Tuple_snd'], ($GLOBALS['Data_Array_sortWith1'])($GLOBALS['Data_Tuple_fst'], ($GLOBALS['Control_Monad_ST_Internal_run'])(($GLOBALS['Data_Array_bind'])(($GLOBALS['Data_Array_ST_unsafeThaw'])(($GLOBALS['Data_Array_singleton'])($x)), (function() use ($indexedAndSorted, $comp) {
  $__fn = function($result) use ($indexedAndSorted, $comp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_discard'])(($GLOBALS['Control_Monad_ST_Internal_foreach'])($indexedAndSorted, (function() use ($result, $comp) {
  $__body = function($v1) use ($result, $comp) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$pair = $__case_0;
$x__prime__ = ($__case_0)->values[1];
return ($GLOBALS['Data_Array_bind'])(($GLOBALS['Data_Array_map2'])(($GLOBALS['Data_Array_compose'])($GLOBALS['Data_Tuple_snd'], ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_compose'])($GLOBALS['Data_Array_fromJust'], $GLOBALS['Data_Array_last']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($GLOBALS['Data_Array_ST_unsafeFreeze'])($result)), (function() use ($comp, $x__prime__, $pair, $result) {
  $__fn = function($lst) use ($comp, $x__prime__, $pair, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_when'])(($GLOBALS['Data_Array_notEq'])(($comp)($lst, $x__prime__), $GLOBALS['Data_Ordering_EQ']), ($GLOBALS['Data_Array_void'])(($GLOBALS['Data_Array_ST_push'])($pair, $result)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($result, $comp, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($result) {
  $__fn = function($__dollar____unused) use ($result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_unsafeFreeze'])($result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()))));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($comp, $xs = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($comp, $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_nub
$Data_Array_nub = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_nubBy'])(($GLOBALS['Data_Ord_compare'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_groupBy
$Data_Array_groupBy = (function() {
  $__fn = function($op, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_ST_Internal_run'])(($GLOBALS['Data_Array_bind'])($GLOBALS['Data_Array_ST_new'], (function() use ($xs, $op) {
  $__fn = function($result) use ($xs, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_bind'])(($GLOBALS['Data_Array_ST_Iterator_iterator'])((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_index'])($xs, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($op, $result) {
  $__fn = function($iter) use ($op, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_discard'])(($GLOBALS['Data_Array_ST_Iterator_iterate'])($iter, (function() use ($op, $iter, $result) {
  $__fn = function($x) use ($op, $iter, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_void'])(($GLOBALS['Data_Array_bind'])($GLOBALS['Data_Array_ST_new'], (function() use ($x, $op, $iter, $result) {
  $__fn = function($sub1) use ($x, $op, $iter, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_bind'])(($GLOBALS['Data_Array_ST_push'])($x, $sub1), (function() use ($op, $x, $iter, $sub1, $result) {
  $__fn = function($__dollar____unused) use ($op, $x, $iter, $sub1, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_discard'])(($GLOBALS['Data_Array_ST_Iterator_pushWhile'])(($op)($x), $iter, $sub1), (function() use ($sub1, $result) {
  $__fn = function($__dollar____unused) use ($sub1, $result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_bind'])(($GLOBALS['Data_Array_ST_unsafeFreeze'])($sub1), (function() use ($result) {
  $__fn = function($grp) use ($result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_push'])(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'])($grp), $result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($result) {
  $__fn = function($__dollar____unused) use ($result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_unsafeFreeze'])($result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_groupAllBy
$Data_Array_groupAllBy = (function() {
  $__fn = function($cmp) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_compose'])(($GLOBALS['Data_Array_groupBy'])((function() use ($cmp) {
  $__fn = function($x, $y = null) use ($cmp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_eq1'])(($cmp)($x, $y), $GLOBALS['Data_Ordering_EQ']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Array_sortBy'])($cmp));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_groupAll
$Data_Array_groupAll = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_groupAllBy'])(($GLOBALS['Data_Ord_compare'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_group
$Data_Array_group = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq2 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($xs) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_groupBy'])($eq2, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_fromFoldable
$Data_Array_fromFoldable = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_fromFoldableImpl'], ($GLOBALS['Data_Foldable_foldr'])($dictFoldable));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_foldr
$Data_Array_foldr = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableArray']);

// Data_Array_foldl
$Data_Array_foldl = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableArray']);

// Data_Array_transpose
$Data_Array_transpose = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$buildNext = (function() use ($xs) {
  $__fn = function($idx) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_flip'])($GLOBALS['Data_Array_foldl'], $GLOBALS['Data_Maybe_Nothing'], (function() use ($idx) {
  $__fn = function($acc, $nextArr = null) use ($idx, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Maybe_maybe'])($acc, (function() use ($acc) {
  $__fn = function($el) use ($acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Maybe_maybe'])([$el], ($GLOBALS['Data_Function_flip'])($GLOBALS['Data_Array_snoc'], $el), $acc));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Array_index'])($nextArr, $idx));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$go = (function() use ($buildNext, &$go) {
  $__fn = function($idx, $allArrays = null) use ($buildNext, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$v = ($buildNext)($idx);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return $allArrays;
} else {
if ((($__case_0)->tag === "Just")) {
$next = ($__case_0)->values[0];
$__tco_tmp_0 = ($GLOBALS['Data_Array_add'])($idx, 1);
$__tco_tmp_1 = ($GLOBALS['Data_Array_snoc'])($allArrays, $next);
$idx = $__tco_tmp_0;
$allArrays = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)(0, []);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_foldRecM
$Data_Array_foldRecM = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']);
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
$bind1 = ($GLOBALS['Control_Bind_bind'])((($Monad0)->Bind1)($GLOBALS['Prim_undefined']));
$tailRecM2 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM2'])($dictMonadRec);
    $__res = (function() use ($tailRecM2) {
  $__fn = function($f, $b = null, $array = null) use ($tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$go = (function() {
  $__body = function($res, $i) {
    $__case_0 = $res;
    $__case_1 = $i;
    if (true) {
$res1 = $__case_0;
$i1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($res, $i = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($res, $i);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($go, $b, 0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_foldMap
$Data_Array_foldMap = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_foldMap1'])($dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_foldM
$Data_Array_foldM = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bind1 = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
return (function() use ($pure1, $bind1, $dictMonad) {
  $__fn = function($f, $b = null) use ($pure1, $bind1, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Array_unconsImpl'], (function() use ($pure1, $b) {
  $__fn = function($v) use ($pure1, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure1)($b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() use ($bind1, $f, $b, $dictMonad) {
  $__fn = function($a, $as = null) use ($bind1, $f, $b, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($bind1)(($f)($b, $a), (function() use ($dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_foldM'])($dictMonad, $f, $b__prime__, $as);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_fold
$Data_Array_fold = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_fold1'])($dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_findMap
$Data_Array_findMap = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Array_findMapImpl'], $GLOBALS['Data_Maybe_Nothing'], $GLOBALS['Data_Maybe_isJust']);

// Data_Array_findLastIndex
$Data_Array_findLastIndex = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Array_findLastIndexImpl'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Array_insertBy
$Data_Array_insertBy = (function() {
  $__fn = function($cmp, $x = null, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$i = ($GLOBALS['Data_Maybe_maybe'])(0, (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_add'])($v, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Array_findLastIndex'])((function() use ($cmp, $x) {
  $__fn = function($y) use ($cmp, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_eq1'])(($cmp)($x, $y), $GLOBALS['Data_Ordering_GT']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $ys));
    $__res = ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() use ($i, $x, $ys) {
  $__fn = function($__dollar____unused) use ($i, $x, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_fromJust'])(($GLOBALS['Data_Array_insertAt'])($i, $x, $ys));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Array_insert
$Data_Array_insert = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_insertBy'])(($GLOBALS['Data_Ord_compare'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_findIndex
$Data_Array_findIndex = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Array_findIndexImpl'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Array_find
$Data_Array_find = (function() {
  $__fn = function($f, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_map'])(($GLOBALS['Partial_Unsafe_unsafePartial'])((function() use ($xs) {
  $__fn = function($__dollar____unused) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_unsafeIndex1'])($xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Array_findIndex'])($f, $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_filter
$Data_Array_filter = ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_filterImpl']);

// Data_Array_intersectBy
$Data_Array_intersectBy = (function() {
  $__fn = function($eq2, $xs = null, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Array_filter'])((function() use ($eq2, $ys) {
  $__fn = function($x) use ($eq2, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Maybe_isJust'])(($GLOBALS['Data_Array_findIndex'])(($eq2)($x), $ys));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Array_intersect
$Data_Array_intersect = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_intersectBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_elemLastIndex
$Data_Array_elemLastIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq2 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($x) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_findLastIndex'])((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_elemIndex
$Data_Array_elemIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq2 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($x) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_findIndex'])((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_notElem
$Data_Array_notElem = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$elemIndex1 = ($GLOBALS['Data_Array_elemIndex'])($dictEq);
    $__res = (function() use ($elemIndex1) {
  $__fn = function($a, $arr = null) use ($elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Maybe_isNothing'])(($elemIndex1)($a, $arr));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_elem
$Data_Array_elem = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$elemIndex1 = ($GLOBALS['Data_Array_elemIndex'])($dictEq);
    $__res = (function() use ($elemIndex1) {
  $__fn = function($a, $arr = null) use ($elemIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Maybe_isJust'])(($elemIndex1)($a, $arr));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_dropWhile
$Data_Array_dropWhile = (function() {
  $__fn = function($p, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (($GLOBALS['Data_Array_span'])($p, $xs))->rest;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_dropEnd
$Data_Array_dropEnd = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_take'])(($GLOBALS['Data_Array_sub'])(($GLOBALS['Data_Array_length'])($xs), $n), $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_drop
$Data_Array_drop = (function() {
  $__body = function($n, $xs) {
    $__case_0 = ($GLOBALS['Data_Array_lessThan'])($n, 1);
    if (($__case_0 === true)) {
return $xs;
} else {
if (true) {
return ($GLOBALS['Data_Array_slice'])($n, ($GLOBALS['Data_Array_length'])($xs), $xs);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n, $xs = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($n, $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_takeEnd
$Data_Array_takeEnd = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_drop'])(($GLOBALS['Data_Array_sub'])(($GLOBALS['Data_Array_length'])($xs), $n), $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_deleteAt
$Data_Array_deleteAt = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Array__deleteAt'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Array_deleteBy
$Data_Array_deleteBy = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if (($__case_2 === /* ArrayLiteral */)) {
return [];
} else {
if (true) {
$eq2 = $__case_0;
$x = $__case_1;
$ys = $__case_2;
return ($GLOBALS['Data_Maybe_maybe'])($ys, (function() use ($ys) {
  $__fn = function($i) use ($ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() use ($i, $ys) {
  $__fn = function($__dollar____unused) use ($i, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_fromJust'])(($GLOBALS['Data_Array_deleteAt'])($i, $ys));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Array_findIndex'])(($eq2)($x), $ys));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Array_delete
$Data_Array_delete = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_deleteBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_difference
$Data_Array_difference = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_foldr'])(($GLOBALS['Data_Array_delete'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_cons
$Data_Array_cons = (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_append'])([$x], $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_some
$Data_Array_some = (function() {
  $__fn = function($dictAlternative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$apply1 = ($GLOBALS['Control_Apply_apply'])((((($dictAlternative)->Applicative0)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']));
$map3 = ($GLOBALS['Data_Functor_map'])((((((($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']))->Alt0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return (function() use ($apply1, $map3, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply1, $map3, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$defer = ($GLOBALS['Control_Lazy_defer'])($dictLazy);
    $__res = (function() use ($apply1, $map3, $defer, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply1, $map3, $defer, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($apply1)(($map3)($GLOBALS['Data_Array_cons'], $v), ($defer)((function() use ($dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_many'])($dictAlternative, $dictLazy, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_many
$Data_Array_many = (function() {
  $__fn = function($dictAlternative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$alt = ($GLOBALS['Control_Alt_alt'])((((($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']))->Alt0)($GLOBALS['Prim_undefined']));
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictAlternative)->Applicative0)($GLOBALS['Prim_undefined']));
return (function() use ($alt, $dictAlternative, $pure1) {
  $__fn = function($dictLazy, $v = null) use ($alt, $dictAlternative, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($alt)(($GLOBALS['Data_Array_some'])($dictAlternative, $dictLazy, $v), ($pure1)([]));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_concatMap
$Data_Array_concatMap = ($GLOBALS['Data_Function_flip'])(($GLOBALS['Control_Bind_bind'])($GLOBALS['Control_Bind_bindArray']));

// Data_Array_mapMaybe
$Data_Array_mapMaybe = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_concatMap'])(($GLOBALS['Data_Array_compose'])(($GLOBALS['Data_Maybe_maybe'])([], $GLOBALS['Data_Array_singleton']), $f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_filterA
$Data_Array_filterA = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse1 = ($GLOBALS['Data_Array_traverse'])($dictApplicative);
$map3 = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($traverse1, $map3) {
  $__fn = function($p) use ($traverse1, $map3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_composeFlipped'])(($traverse1)((function() use ($map3, $p) {
  $__fn = function($x) use ($map3, $p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($map3)(($GLOBALS['Data_Tuple_Tuple'])($x), ($p)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($map3)(($GLOBALS['Data_Array_mapMaybe'])((function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
$__case_0 = $b;
if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Just'])($x);
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
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
})())));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_catMaybes
$Data_Array_catMaybes = ($GLOBALS['Data_Array_mapMaybe'])(($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']));

// Data_Array_any
$Data_Array_any = ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_anyImpl']);

// Data_Array_nubByEq
$Data_Array_nubByEq = (function() {
  $__fn = function($eq2, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_ST_Internal_run'])(($GLOBALS['Data_Array_bind'])($GLOBALS['Data_Array_ST_new'], (function() use ($xs, $eq2) {
  $__fn = function($arr) use ($xs, $eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_discard'])(($GLOBALS['Control_Monad_ST_Internal_foreach'])($xs, (function() use ($eq2, $arr) {
  $__fn = function($x) use ($eq2, $arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_bind'])(($GLOBALS['Data_Array_map2'])(($GLOBALS['Data_Array_compose'])($GLOBALS['Data_Array_not'], ($GLOBALS['Data_Array_any'])((function() use ($eq2, $x) {
  $__fn = function($v) use ($eq2, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($eq2)($v, $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($GLOBALS['Data_Array_ST_unsafeFreeze'])($arr)), (function() use ($x, $arr) {
  $__fn = function($e) use ($x, $arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_when'])($e, ($GLOBALS['Data_Array_void'])(($GLOBALS['Data_Array_ST_push'])($x, $arr)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), (function() use ($arr) {
  $__fn = function($__dollar____unused) use ($arr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_unsafeFreeze'])($arr);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_nubEq
$Data_Array_nubEq = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_nubByEq'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_unionBy
$Data_Array_unionBy = (function() {
  $__fn = function($eq2, $xs = null, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Array_append'])($xs, ($GLOBALS['Data_Array_foldl'])(($GLOBALS['Data_Function_flip'])(($GLOBALS['Data_Array_deleteBy'])($eq2)), ($GLOBALS['Data_Array_nubByEq'])($eq2, $ys), $xs));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Array_union
$Data_Array_union = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_unionBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_alterAt
$Data_Array_alterAt = (function() {
  $__fn = function($i, $f = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$go = (function() use ($f, $i, $xs) {
  $__body = function($x) use ($f, $i, $xs) {
    $v = ($f)($x);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Array_deleteAt'])($i, $xs);
} else {
if ((($__case_0)->tag === "Just")) {
$x__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_Array_updateAt'])($i, $x__prime__, $xs);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x) use ($f, $i, $xs, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_Maybe_maybe'])($GLOBALS['Data_Maybe_Nothing'], $go, ($GLOBALS['Data_Array_index'])($xs, $i));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Array_all
$Data_Array_all = ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_allImpl']);

