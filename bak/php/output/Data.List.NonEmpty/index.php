<?php

namespace Data\List\NonEmpty;

require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
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


// Data_List_NonEmpty_sequence1
$Data_List_NonEmpty_sequence1 = ($GLOBALS['Data_Semigroup_Traversable_sequence1'])($GLOBALS['Data_List_Types_traversable1NonEmptyList']);

// Data_List_NonEmpty_append
$Data_List_NonEmpty_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_List_NonEmpty_eq
$Data_List_NonEmpty_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_List_NonEmpty_map
$Data_List_NonEmpty_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_List_NonEmpty_compose
$Data_List_NonEmpty_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_List_NonEmpty_sub
$Data_List_NonEmpty_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_List_NonEmpty_map1
$Data_List_NonEmpty_map1 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_List_Types_functorNonEmptyList']);

// Data_List_NonEmpty_add
$Data_List_NonEmpty_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_List_NonEmpty_bind
$Data_List_NonEmpty_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_List_Types_bindNonEmptyList']);

// Data_List_NonEmpty_identity
$Data_List_NonEmpty_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_List_NonEmpty_append1
$Data_List_NonEmpty_append1 = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_List_Types_semigroupList']);

// Data_List_NonEmpty_zipWith
$Data_List_NonEmpty_zipWith = (function() {
  $__body = function($f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (((($__case_1)->tag === "NonEmpty") && (($__case_2)->tag === "NonEmpty"))) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])(($f1)($x, $y), ($GLOBALS['Data_List_zipWith'])($f1, $xs, $ys)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_zipWithA
$Data_List_NonEmpty_zipWithA = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequence11 = ($GLOBALS['Data_List_NonEmpty_sequence1'])((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($sequence11) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($sequence11)(($GLOBALS['Data_List_NonEmpty_zipWith'])($f, $xs, $ys));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_zip
$Data_List_NonEmpty_zip = ($GLOBALS['Data_List_NonEmpty_zipWith'])($GLOBALS['Data_Tuple_Tuple']);

// Data_List_NonEmpty_wrappedOperation2
$Data_List_NonEmpty_wrappedOperation2 = (function() {
  $__body = function($name, $f, $v, $v1) {
    $__case_0 = $name;
    $__case_1 = $f;
    $__case_2 = $v;
    $__case_3 = $v1;
    if (((($__case_2)->tag === "NonEmpty") && (($__case_3)->tag === "NonEmpty"))) {
$name1 = $__case_0;
$f1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
$y = ($__case_3)->values[0];
$ys = ($__case_3)->values[1];
$v2 = ($f1)(($GLOBALS['Data_List_Types_Cons'])($x, $xs), ($GLOBALS['Data_List_Types_Cons'])($y, $ys));
$__case_0 = $v2;
if ((($__case_0)->tag === "Cons")) {
$x__prime__ = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($x__prime__, $xs__prime__));
} else {
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Partial_Unsafe_unsafeCrashWith'])(($GLOBALS['Data_List_NonEmpty_append'])("Impossible: empty list in NonEmptyList ", $name1));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($name, $f = null, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($name, $f, $v, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_wrappedOperation
$Data_List_NonEmpty_wrappedOperation = (function() {
  $__body = function($name, $f, $v) {
    $__case_0 = $name;
    $__case_1 = $f;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$name1 = $__case_0;
$f1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
$v1 = ($f1)(($GLOBALS['Data_List_Types_Cons'])($x, $xs));
$__case_0 = $v1;
if ((($__case_0)->tag === "Cons")) {
$x__prime__ = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($x__prime__, $xs__prime__));
} else {
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Partial_Unsafe_unsafeCrashWith'])(($GLOBALS['Data_List_NonEmpty_append'])("Impossible: empty list in NonEmptyList ", $name1));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($name, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($name, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_updateAt
$Data_List_NonEmpty_updateAt = (function() {
  $__body = function($i, $a, $v) {
    $__case_0 = $i;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$i1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($i, $a = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($i, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_unzip
$Data_List_NonEmpty_unzip = (function() {
  $__fn = function($ts) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_List_NonEmpty_map1'])($GLOBALS['Data_Tuple_fst'], $ts), ($GLOBALS['Data_List_NonEmpty_map1'])($GLOBALS['Data_Tuple_snd'], $ts));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_unsnoc
$Data_List_NonEmpty_unsnoc = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$v1 = ($GLOBALS['Data_List_unsnoc'])($xs);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
return (object)["init" => $GLOBALS['Data_List_Types_Nil'], "last" => $x];
} else {
if ((($__case_0)->tag === "Just")) {
$un = ($__case_0)->values[0];
return (object)["init" => ($GLOBALS['Data_List_Types_Cons'])($x, ($un)->init), "last" => ($un)->last];
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
})();

// Data_List_NonEmpty_unionBy
$Data_List_NonEmpty_unionBy = ($GLOBALS['Data_List_NonEmpty_compose'])(($GLOBALS['Data_List_NonEmpty_wrappedOperation2'])("unionBy"), $GLOBALS['Data_List_unionBy']);

// Data_List_NonEmpty_union
$Data_List_NonEmpty_union = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_wrappedOperation2'])("union", ($GLOBALS['Data_List_union'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_uncons
$Data_List_NonEmpty_uncons = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return (object)["head" => $x, "tail" => $xs];
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

// Data_List_NonEmpty_toList
$Data_List_NonEmpty_toList = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Types_Cons'])($x, $xs);
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

// Data_List_NonEmpty_toUnfoldable
$Data_List_NonEmpty_toUnfoldable = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_compose'])(($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_map'])((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_uncons'])($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $GLOBALS['Data_List_NonEmpty_toList']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_tail
$Data_List_NonEmpty_tail = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$xs = ($__case_0)->values[1];
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

// Data_List_NonEmpty_sortBy
$Data_List_NonEmpty_sortBy = ($GLOBALS['Data_List_NonEmpty_compose'])(($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("sortBy"), $GLOBALS['Data_List_sortBy']);

// Data_List_NonEmpty_sort
$Data_List_NonEmpty_sort = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($xs) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_sortBy'])($compare, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_snoc
$Data_List_NonEmpty_snoc = (function() {
  $__body = function($v, $y) {
    $__case_0 = $v;
    $__case_1 = $y;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$y1 = $__case_1;
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($x, ($GLOBALS['Data_List_snoc'])($xs, $y1)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_singleton
$Data_List_NonEmpty_singleton = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_Types_NonEmptyList'], ($GLOBALS['Data_NonEmpty_singleton'])($GLOBALS['Data_List_Types_plusList']));

// Data_List_NonEmpty_snoc'
$Data_List_NonEmpty_snoc__prime__ = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$y = $__case_1;
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($x, ($GLOBALS['Data_List_snoc'])($xs, $y)));
} else {
if ((($__case_0)->tag === "Nil")) {
$y = $__case_1;
return ($GLOBALS['Data_List_NonEmpty_singleton'])($y);
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

// Data_List_NonEmpty_reverse
$Data_List_NonEmpty_reverse = ($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("reverse", $GLOBALS['Data_List_reverse']);

// Data_List_NonEmpty_nubEq
$Data_List_NonEmpty_nubEq = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("nubEq", ($GLOBALS['Data_List_nubEq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_nubByEq
$Data_List_NonEmpty_nubByEq = ($GLOBALS['Data_List_NonEmpty_compose'])(($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("nubByEq"), $GLOBALS['Data_List_nubByEq']);

// Data_List_NonEmpty_nubBy
$Data_List_NonEmpty_nubBy = ($GLOBALS['Data_List_NonEmpty_compose'])(($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("nubBy"), $GLOBALS['Data_List_nubBy']);

// Data_List_NonEmpty_nub
$Data_List_NonEmpty_nub = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("nub", ($GLOBALS['Data_List_nub'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_modifyAt
$Data_List_NonEmpty_modifyAt = (function() {
  $__body = function($i, $f, $v) {
    $__case_0 = $i;
    $__case_1 = $f;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$i1 = $__case_0;
$f1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($i, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($i, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_lift
$Data_List_NonEmpty_lift = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($f1)(($GLOBALS['Data_List_Types_Cons'])($x, $xs));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_mapMaybe
$Data_List_NonEmpty_mapMaybe = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_lift'], $GLOBALS['Data_List_mapMaybe']);

// Data_List_NonEmpty_partition
$Data_List_NonEmpty_partition = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_lift'], $GLOBALS['Data_List_partition']);

// Data_List_NonEmpty_span
$Data_List_NonEmpty_span = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_lift'], $GLOBALS['Data_List_span']);

// Data_List_NonEmpty_take
$Data_List_NonEmpty_take = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_lift'], $GLOBALS['Data_List_take']);

// Data_List_NonEmpty_takeWhile
$Data_List_NonEmpty_takeWhile = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_lift'], $GLOBALS['Data_List_takeWhile']);

// Data_List_NonEmpty_length
$Data_List_NonEmpty_length = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_NonEmpty_add'])(1, ($GLOBALS['Data_List_length'])($xs));
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

// Data_List_NonEmpty_last
$Data_List_NonEmpty_last = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_fromMaybe'])($x, ($GLOBALS['Data_List_last'])($xs));
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

// Data_List_NonEmpty_intersectBy
$Data_List_NonEmpty_intersectBy = ($GLOBALS['Data_List_NonEmpty_compose'])(($GLOBALS['Data_List_NonEmpty_wrappedOperation2'])("intersectBy"), $GLOBALS['Data_List_intersectBy']);

// Data_List_NonEmpty_intersect
$Data_List_NonEmpty_intersect = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_wrappedOperation2'])("intersect", ($GLOBALS['Data_List_intersect'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_insertAt
$Data_List_NonEmpty_insertAt = (function() {
  $__body = function($i, $a, $v) {
    $__case_0 = $i;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$i1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($i, $a = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($i, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_init
$Data_List_NonEmpty_init = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_maybe'])($GLOBALS['Data_List_Types_Nil'], (function() use ($x) {
  $__fn = function($v1) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_Cons'])($x, $v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_init'])($xs));
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

// Data_List_NonEmpty_index
$Data_List_NonEmpty_index = (function() {
  $__body = function($v, $i) {
    $__case_0 = $v;
    $__case_1 = $i;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$i1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $i = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $i);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_head
$Data_List_NonEmpty_head = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
return $x;
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

// Data_List_NonEmpty_groupBy
$Data_List_NonEmpty_groupBy = ($GLOBALS['Data_List_NonEmpty_compose'])(($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("groupBy"), $GLOBALS['Data_List_groupBy']);

// Data_List_NonEmpty_groupAllBy
$Data_List_NonEmpty_groupAllBy = ($GLOBALS['Data_List_NonEmpty_compose'])(($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("groupAllBy"), $GLOBALS['Data_List_groupAllBy']);

// Data_List_NonEmpty_groupAll
$Data_List_NonEmpty_groupAll = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("groupAll", ($GLOBALS['Data_List_groupAll'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_group
$Data_List_NonEmpty_group = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_wrappedOperation'])("group", ($GLOBALS['Data_List_group'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_fromList
$Data_List_NonEmpty_fromList = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($x, $xs)));
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
})();

// Data_List_NonEmpty_fromFoldable
$Data_List_NonEmpty_fromFoldable = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_fromList'], ($GLOBALS['Data_List_fromFoldable'])($dictFoldable));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_foldM
$Data_List_NonEmpty_foldM = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind1 = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$foldM1 = ($GLOBALS['Data_List_foldM'])($dictMonad);
    $__res = (function() use ($bind1, $foldM1) {
  $__body = function($f, $b, $v) use ($bind1, $foldM1) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if ((($__case_2)->tag === "NonEmpty")) {
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->values[0];
$as = ($__case_2)->values[1];
return ($bind1)(($f1)($b1, $a), (function() use ($foldM1, $f1, $as) {
  $__fn = function($b__prime__) use ($foldM1, $f1, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldM1)($f1, $b__prime__, $as);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $b = null, $v = null) use ($bind1, $foldM1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_findLastIndex
$Data_List_NonEmpty_findLastIndex = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$v1 = ($GLOBALS['Data_List_findLastIndex'])($f1, $xs);
$__case_0 = $v1;
if ((($__case_0)->tag === "Just")) {
$i = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_List_NonEmpty_add'])($i, 1));
} else {
if ((($__case_0)->tag === "Nothing")) {
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_findIndex
$Data_List_NonEmpty_findIndex = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_filterM
$Data_List_NonEmpty_filterM = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_lift'], ($GLOBALS['Data_List_filterM'])($dictMonad));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_filter
$Data_List_NonEmpty_filter = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_lift'], $GLOBALS['Data_List_filter']);

// Data_List_NonEmpty_elemLastIndex
$Data_List_NonEmpty_elemLastIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq1) {
  $__fn = function($x) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_findLastIndex'])((function() use ($eq1, $x) {
  $__fn = function($v) use ($eq1, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($eq1)($v, $x);
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

// Data_List_NonEmpty_elemIndex
$Data_List_NonEmpty_elemIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq1) {
  $__fn = function($x) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_findIndex'])((function() use ($eq1, $x) {
  $__fn = function($v) use ($eq1, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($eq1)($v, $x);
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

// Data_List_NonEmpty_dropWhile
$Data_List_NonEmpty_dropWhile = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_lift'], $GLOBALS['Data_List_dropWhile']);

// Data_List_NonEmpty_drop
$Data_List_NonEmpty_drop = ($GLOBALS['Data_List_NonEmpty_compose'])($GLOBALS['Data_List_NonEmpty_lift'], $GLOBALS['Data_List_drop']);

// Data_List_NonEmpty_cons'
$Data_List_NonEmpty_cons__prime__ = (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($x, $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_cons
$Data_List_NonEmpty_cons = (function() {
  $__body = function($y, $v) {
    $__case_0 = $y;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$y1 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($y1, ($GLOBALS['Data_List_Types_Cons'])($x, $xs)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($y, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($y, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_concatMap
$Data_List_NonEmpty_concatMap = ($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_NonEmpty_bind']);

// Data_List_NonEmpty_concat
$Data_List_NonEmpty_concat = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_NonEmpty_bind'])($v, $GLOBALS['Data_List_NonEmpty_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_NonEmpty_catMaybes
$Data_List_NonEmpty_catMaybes = ($GLOBALS['Data_List_NonEmpty_lift'])($GLOBALS['Data_List_catMaybes']);

// Data_List_NonEmpty_appendFoldable
$Data_List_NonEmpty_appendFoldable = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$fromFoldable1 = ($GLOBALS['Data_List_fromFoldable'])($dictFoldable);
    $__res = (function() use ($fromFoldable1) {
  $__body = function($v, $ys) use ($fromFoldable1) {
    $__case_0 = $v;
    $__case_1 = $ys;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$ys1 = $__case_1;
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($x, ($GLOBALS['Data_List_NonEmpty_append1'])($xs, ($fromFoldable1)($ys1))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $ys = null) use ($fromFoldable1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

