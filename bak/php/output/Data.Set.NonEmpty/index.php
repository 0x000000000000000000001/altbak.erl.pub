<?php

namespace Data\Set\NonEmpty;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Set.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';

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


// Data_Set_NonEmpty_coerce
$Data_Set_NonEmpty_coerce = ($GLOBALS['Safe_Coerce_coerce'])($GLOBALS['Prim_undefined']);

// Data_Set_NonEmpty_compose
$Data_Set_NonEmpty_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Set_NonEmpty_map1
$Data_Set_NonEmpty_map1 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Tuple_functorTuple']);

// Data_Set_NonEmpty_append
$Data_Set_NonEmpty_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Set_NonEmpty_fromJust
$Data_Set_NonEmpty_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Set_NonEmpty_foldMap1
$Data_Set_NonEmpty_foldMap1 = ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($GLOBALS['Data_List_Types_foldable1NonEmptyList']);

// Data_Set_NonEmpty_foldr1
$Data_Set_NonEmpty_foldr1 = ($GLOBALS['Data_Semigroup_Foldable_foldr1'])($GLOBALS['Data_List_Types_foldable1NonEmptyList']);

// Data_Set_NonEmpty_foldl1
$Data_Set_NonEmpty_foldl1 = ($GLOBALS['Data_Semigroup_Foldable_foldl1'])($GLOBALS['Data_List_Types_foldable1NonEmptyList']);

// Data_Set_NonEmpty_NonEmptySet
$Data_Set_NonEmpty_NonEmptySet = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_unionSet
$Data_Set_NonEmpty_unionSet = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Semigroup_append'])(($GLOBALS['Data_Set_semigroupSet'])($dictOrd)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_toUnfoldable1
$Data_Set_NonEmpty_toUnfoldable1 = (function() {
  $__fn = function($dictUnfoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$stepNext = ($GLOBALS['Data_Map_Internal_stepAscCps'])(($GLOBALS['Data_Function_Uncurried_mkFn3'])((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])($k, $next));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_Nothing'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
$stepHead = ($GLOBALS['Data_Map_Internal_stepAscCps'])(($GLOBALS['Data_Function_Uncurried_mkFn3'])((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($k, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'])("toUnfoldable1: impossible");
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__res = ($GLOBALS['Data_Set_NonEmpty_compose'])(($GLOBALS['Data_Unfoldable1_unfoldr1'])($dictUnfoldable1, (function() use ($stepNext) {
  $__fn = function($v) use ($stepNext, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_map1'])($stepNext, $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Set_NonEmpty_compose'])($stepHead, ($GLOBALS['Data_Set_NonEmpty_compose'])($GLOBALS['Data_Map_Internal_toMapIter'], ($GLOBALS['Data_Set_NonEmpty_compose'])($GLOBALS['Data_Set_toMap'], $GLOBALS['Data_Set_NonEmpty_coerce']))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_toUnfoldable11
$Data_Set_NonEmpty_toUnfoldable11 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable1'])($GLOBALS['Data_Array_NonEmpty_Internal_unfoldable1NonEmptyArray']);

// Data_Set_NonEmpty_toUnfoldable12
$Data_Set_NonEmpty_toUnfoldable12 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable1'])($GLOBALS['Data_List_Types_unfoldable1NonEmptyList']);

// Data_Set_NonEmpty_toUnfoldable
$Data_Set_NonEmpty_toUnfoldable = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Set_toUnfoldable'])($dictUnfoldable));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_toSet
$Data_Set_NonEmpty_toSet = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return $s;
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

// Data_Set_NonEmpty_subset
$Data_Set_NonEmpty_subset = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Set_subset'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_size
$Data_Set_NonEmpty_size = ($GLOBALS['Data_Set_NonEmpty_coerce'])($GLOBALS['Data_Set_size']);

// Data_Set_NonEmpty_singleton
$Data_Set_NonEmpty_singleton = ($GLOBALS['Data_Set_NonEmpty_coerce'])($GLOBALS['Data_Set_singleton']);

// Data_Set_NonEmpty_showNonEmptySet
$Data_Set_NonEmpty_showNonEmptySet = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_Array_NonEmpty_Internal_showNonEmptyArray'])($dictShow));
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show) {
  $__fn = function($s) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_append'])("(fromFoldable1 ", ($GLOBALS['Data_Set_NonEmpty_append'])(($show)(($GLOBALS['Data_Set_NonEmpty_toUnfoldable11'])($s)), ")"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_semigroupNonEmptySet
$Data_Set_NonEmpty_semigroupNonEmptySet = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_semigroupSet'])($dictOrd);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_properSubset
$Data_Set_NonEmpty_properSubset = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Set_properSubset'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_ordNonEmptySet
$Data_Set_NonEmpty_ordNonEmptySet = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_ordSet'])($dictOrd);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_ord1NonEmptySet
$Data_Set_NonEmpty_ord1NonEmptySet = $GLOBALS['Data_Set_ord1Set'];

// Data_Set_NonEmpty_min
$Data_Set_NonEmpty_min = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() use ($s) {
  $__fn = function($__dollar____unused) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_fromJust'])(($GLOBALS['Data_Set_findMin'])($s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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

// Data_Set_NonEmpty_member
$Data_Set_NonEmpty_member = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Set_member'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_max
$Data_Set_NonEmpty_max = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() use ($s) {
  $__fn = function($__dollar____unused) use ($s, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_fromJust'])(($GLOBALS['Data_Set_findMax'])($s));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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

// Data_Set_NonEmpty_mapMaybe
$Data_Set_NonEmpty_mapMaybe = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Set_mapMaybe'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_map
$Data_Set_NonEmpty_map = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Set_map'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_insert
$Data_Set_NonEmpty_insert = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Set_insert'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_fromSet
$Data_Set_NonEmpty_fromSet = (function() {
  $__body = function($s) {
    $__case_0 = ($GLOBALS['Data_Set_isEmpty'])($s);
    if (($__case_0 === true)) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Set_NonEmpty_NonEmptySet'])($s));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($s) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($s);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_intersection
$Data_Set_NonEmpty_intersection = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$intersection1 = ($GLOBALS['Data_Set_intersection'])($dictOrd);
    $__res = (function() use ($intersection1) {
  $__body = function($v, $v1) use ($intersection1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
return ($GLOBALS['Data_Set_NonEmpty_fromSet'])(($intersection1)($s1, $s2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($intersection1, $__body, &$__fn) {
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

// Data_Set_NonEmpty_fromFoldable1
$Data_Set_NonEmpty_fromFoldable1 = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap11 = ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1);
    $__res = (function() use ($foldMap11) {
  $__fn = function($dictOrd) use ($foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap11)(($GLOBALS['Data_Set_NonEmpty_semigroupNonEmptySet'])($dictOrd), $GLOBALS['Data_Set_NonEmpty_singleton']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_fromFoldable
$Data_Set_NonEmpty_fromFoldable = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$fromFoldable2 = ($GLOBALS['Data_Set_fromFoldable'])($dictFoldable);
    $__res = (function() use ($fromFoldable2) {
  $__fn = function($dictOrd) use ($fromFoldable2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_compose'])($GLOBALS['Data_Set_NonEmpty_fromSet'], ($fromFoldable2)($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_foldableNonEmptySet
$Data_Set_NonEmpty_foldableNonEmptySet = $GLOBALS['Data_Set_foldableSet'];

// Data_Set_NonEmpty_foldable1NonEmptySet
$Data_Set_NonEmpty_foldable1NonEmptySet = ($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'])((object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap11 = ($GLOBALS['Data_Set_NonEmpty_foldMap1'])($dictSemigroup);
    $__res = (function() use ($foldMap11) {
  $__fn = function($f) use ($foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_compose'])(($foldMap11)($f), $GLOBALS['Data_Set_NonEmpty_toUnfoldable12']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_compose'])(($GLOBALS['Data_Set_NonEmpty_foldr1'])($f), $GLOBALS['Data_Set_NonEmpty_toUnfoldable12']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_compose'])(($GLOBALS['Data_Set_NonEmpty_foldl1'])($f), $GLOBALS['Data_Set_NonEmpty_toUnfoldable12']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Set_NonEmpty_foldableNonEmptySet'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Set_NonEmpty_filter
$Data_Set_NonEmpty_filter = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Set_filter'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_eqNonEmptySet
$Data_Set_NonEmpty_eqNonEmptySet = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_eqSet'])($dictEq);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_eq1NonEmptySet
$Data_Set_NonEmpty_eq1NonEmptySet = $GLOBALS['Data_Set_eq1Set'];

// Data_Set_NonEmpty_difference
$Data_Set_NonEmpty_difference = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$difference1 = ($GLOBALS['Data_Set_difference'])($dictOrd);
    $__res = (function() use ($difference1) {
  $__body = function($v, $v1) use ($difference1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
return ($GLOBALS['Data_Set_NonEmpty_fromSet'])(($difference1)($s1, $s2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($difference1, $__body, &$__fn) {
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

// Data_Set_NonEmpty_delete
$Data_Set_NonEmpty_delete = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$delete1 = ($GLOBALS['Data_Set_delete'])($dictOrd);
    $__res = (function() use ($delete1) {
  $__body = function($a, $v) use ($delete1) {
    $__case_0 = $a;
    $__case_1 = $v;
    if (true) {
$a1 = $__case_0;
$s = $__case_1;
return ($GLOBALS['Data_Set_NonEmpty_fromSet'])(($delete1)($a1, $s));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($delete1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Set_NonEmpty_cons
$Data_Set_NonEmpty_cons = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Set_NonEmpty_coerce'])(($GLOBALS['Data_Set_insert'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

