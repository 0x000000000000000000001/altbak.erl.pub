<?php

namespace Data\List;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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


// Data_List_map
$Data_List_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_List_sub
$Data_List_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_List_foldr
$Data_List_foldr = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_List_Types_foldableList']);

// Data_List_tailRecM2
$Data_List_tailRecM2 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM2'])($GLOBALS['Control_Monad_Rec_Class_monadRecMaybe']);

// Data_List_eq
$Data_List_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Ordering_eqOrdering']);

// Data_List_notEq
$Data_List_notEq = ($GLOBALS['Data_Eq_notEq'])($GLOBALS['Data_Ordering_eqOrdering']);

// Data_List_compose
$Data_List_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_List_append
$Data_List_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_List_lessThan
$Data_List_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_List_sequence
$Data_List_sequence = ($GLOBALS['Data_Traversable_sequence'])($GLOBALS['Data_List_Types_traversableList']);

// Data_List_eq1
$Data_List_eq1 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_List_add
$Data_List_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_List_greaterThan
$Data_List_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_List_negate
$Data_List_negate = ($GLOBALS['Data_Ring_negate'])($GLOBALS['Data_Ring_ringInt']);

// Data_List_bimap
$Data_List_bimap = ($GLOBALS['Data_Bifunctor_bimap'])($GLOBALS['Control_Monad_Rec_Class_bifunctorStep']);

// Data_List_foldl
$Data_List_foldl = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Types_foldableList']);

// Data_List_any
$Data_List_any = ($GLOBALS['Data_Foldable_any'])($GLOBALS['Data_List_Types_foldableList'], $GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_List_not
$Data_List_not = ($GLOBALS['Data_HeytingAlgebra_not'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_List_append1
$Data_List_append1 = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_List_Types_semigroupList']);

// Data_List_bind
$Data_List_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_List_Types_bindList']);

// Data_List_identity
$Data_List_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_List_Pattern
$Data_List_Pattern = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_updateAt
$Data_List_updateAt = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0 === 0) && (($__case_2)->tag === "Cons"))) {
$x = $__case_1;
$xs = ($__case_2)->values[1];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_List_Types_Cons'])($x, $xs));
} else {
if ((($__case_2)->tag === "Cons")) {
$n = $__case_0;
$x = $__case_1;
$x1 = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
return ($GLOBALS['Data_List_map'])((function() use ($x1) {
  $__fn = function($v3) use ($x1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_Cons'])($x1, $v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_updateAt'])(($GLOBALS['Data_List_sub'])($n, 1), $x, $xs));
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_unzip
$Data_List_unzip = ($GLOBALS['Data_List_foldr'])((function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return (function() use ($a, $b) {
  $__body = function($v1) use ($a, $b) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$as = ($__case_0)->values[0];
$bs = ($__case_0)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_List_Types_Cons'])($a, $as), ($GLOBALS['Data_List_Types_Cons'])($b, $bs));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($a, $b, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
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
})(), ($GLOBALS['Data_Tuple_Tuple'])($GLOBALS['Data_List_Types_Nil'], $GLOBALS['Data_List_Types_Nil']));

// Data_List_uncons
$Data_List_uncons = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_Just'])((object)["head" => $x, "tail" => $xs]);
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

// Data_List_toUnfoldable
$Data_List_toUnfoldable = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_map'])((function() {
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
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_tail
$Data_List_tail = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Cons")) {
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_Just'])($xs);
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

// Data_List_stripPrefix
$Data_List_stripPrefix = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq2 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() {
  $__body = function($v, $s) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$p__prime__ = $__case_0;
$s1 = $__case_1;
$go = (function() {
  $__body = function($prefix, $input) {
    $__case_0 = $prefix;
    $__case_1 = $input;
    if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$p = ($__case_0)->values[0];
$ps = ($__case_0)->values[1];
$i = ($__case_1)->values[0];
$is = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_0)->tag === "Nil")) {
$is = $__case_1;
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Control_Monad_Rec_Class_Done'])($is));
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($prefix, $input = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($prefix, $input);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_tailRecM2'])($go, $p__prime__, $s1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $s = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_span
$Data_List_span = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Cons")) {
$p = $__case_0;
$x = ($__case_1)->values[0];
$xs__prime__ = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$xs = $__case_1;
return (object)["init" => $GLOBALS['Data_List_Types_Nil'], "rest" => $xs];
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

// Data_List_snoc
$Data_List_snoc = (function() {
  $__fn = function($xs, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_foldr'])($GLOBALS['Data_List_Types_Cons'], ($GLOBALS['Data_List_Types_Cons'])($x, $GLOBALS['Data_List_Types_Nil']), $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_singleton
$Data_List_singleton = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_Cons'])($a, $GLOBALS['Data_List_Types_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_sortBy
$Data_List_sortBy = (function() {
  $__fn = function($cmp) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$merge = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$as = $__case_0;
$a = ($__case_0)->values[0];
$as__prime__ = ($__case_0)->values[1];
$bs = $__case_1;
$b = ($__case_1)->values[0];
$bs__prime__ = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_0)->tag === "Nil")) {
$bs = $__case_1;
return $bs;
} else {
if ((($__case_1)->tag === "Nil")) {
$as = $__case_0;
return $as;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$mergePairs = (function() use (&$merge, &$mergePairs) {
  $__fn = function($v) use (&$merge, &$mergePairs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Cons"))) {
$a = ($__case_0)->values[0];
$b = (($__case_0)->values[1])->values[0];
$xs = (($__case_0)->values[1])->values[1];
return ($GLOBALS['Data_List_Types_Cons'])(($merge)($a, $b), ($mergePairs)($xs));
} else {
if (true) {
$xs = $__case_0;
return $xs;
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
$mergeAll = (function() use (&$mergeAll, &$mergePairs) {
  $__fn = function($v) use (&$mergeAll, &$mergePairs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x = ($__case_0)->values[0];
return $x;
} else {
if (true) {
$xs = $__case_0;
$__tco_tmp_0 = ($mergePairs)($xs);
$v = $__tco_tmp_0;
continue;
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
$sequences = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Cons"))) {
$a = ($__case_0)->values[0];
$b = (($__case_0)->values[1])->values[0];
$xs = (($__case_0)->values[1])->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$xs = $__case_0;
return ($GLOBALS['Data_List_singleton'])($xs);
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
$descending = (function() use (&$sequences) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$sequences, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Cons")) {
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->values[0];
$bs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
return ($GLOBALS['Data_List_Types_Cons'])(($GLOBALS['Data_List_Types_Cons'])($a, $as), ($sequences)($bs));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
$ascending = (function() use (&$sequences) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$sequences, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Cons")) {
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->values[0];
$bs = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
return ($GLOBALS['Data_List_Types_Cons'])(($as)(($GLOBALS['Data_List_singleton'])($a)), ($sequences)($bs));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_List_compose'])($mergeAll, $sequences);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_sort
$Data_List_sort = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($xs) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_sortBy'])($compare, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_tails
$Data_List_tails = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_List_singleton'])($GLOBALS['Data_List_Types_Nil']);
} else {
if ((($__case_0)->tag === "Cons")) {
$list = $__case_0;
$tl = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Types_Cons'])($list, ($GLOBALS['Data_List_tails'])($tl));
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

// Data_List_showPattern
$Data_List_showPattern = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_List_Types_showList'])($dictShow));
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($GLOBALS['Data_List_append'])("(Pattern ", ($GLOBALS['Data_List_append'])(($show)($s), ")"));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show, $__body, &$__fn) {
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

// Data_List_reverse
$Data_List_reverse = ($go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_0;
return $acc;
} else {
if ((($__case_1)->tag === "Cons")) {
$acc = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$__tco_tmp_0 = ($GLOBALS['Data_List_Types_Cons'])($x, $acc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
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
return ($go)($GLOBALS['Data_List_Types_Nil']);)();

// Data_List_take
$Data_List_take = ($go = (function() use (&$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (true) {
$acc = $__case_0;
$n = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_2)->tag === "Nil")) {
$acc = $__case_0;
return ($GLOBALS['Data_List_reverse'])($acc);
} else {
if ((($__case_2)->tag === "Cons")) {
$acc = $__case_0;
$n = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
$__tco_tmp_0 = ($GLOBALS['Data_List_Types_Cons'])($x, $acc);
$__tco_tmp_1 = ($GLOBALS['Data_List_sub'])($n, 1);
$__tco_tmp_2 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
return ($go)($GLOBALS['Data_List_Types_Nil']);)();

// Data_List_takeWhile
$Data_List_takeWhile = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Cons")) {
$acc = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$acc = $__case_0;
return ($GLOBALS['Data_List_reverse'])($acc);
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
    $__res = ($go)($GLOBALS['Data_List_Types_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_unsnoc
$Data_List_unsnoc = (function() {
  $__fn = function($lst) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x = ($__case_0)->values[0];
$acc = $__case_1;
return ($GLOBALS['Data_Maybe_Just'])((object)["revInit" => $acc, "last" => $x]);
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$acc = $__case_1;
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($GLOBALS['Data_List_Types_Cons'])($x, $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_List_map'])((function() {
  $__fn = function($h) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["init" => ($GLOBALS['Data_List_reverse'])(($h)->revInit), "last" => ($h)->last];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($go)($lst, $GLOBALS['Data_List_Types_Nil']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_zipWith
$Data_List_zipWith = (function() {
  $__fn = function($f, $xs = null, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$go = (function() use (&$go, $f) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0)->tag === "Nil")) {
$acc = $__case_2;
return $acc;
} else {
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_2;
return $acc;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$b = ($__case_1)->values[0];
$bs = ($__case_1)->values[1];
$acc = $__case_2;
$__tco_tmp_0 = $as;
$__tco_tmp_1 = $bs;
$__tco_tmp_2 = ($GLOBALS['Data_List_Types_Cons'])(($f)($a, $b), $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_List_reverse'])(($go)($xs, $ys, $GLOBALS['Data_List_Types_Nil']));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_zip
$Data_List_zip = ($GLOBALS['Data_List_zipWith'])($GLOBALS['Data_Tuple_Tuple']);

// Data_List_zipWithA
$Data_List_zipWithA = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequence1 = ($GLOBALS['Data_List_sequence'])($dictApplicative);
    $__res = (function() use ($sequence1) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($sequence1)(($GLOBALS['Data_List_zipWith'])($f, $xs, $ys));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_range
$Data_List_range = (function() {
  $__body = function($start, $end) {
    $__case_0 = $start;
    $__case_1 = $end;
    if (true) {
$start1 = $__case_0;
$end1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($start, $end = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($start, $end);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_partition
$Data_List_partition = (function() {
  $__fn = function($p, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$select = (function() use ($p) {
  $__body = function($x, $v) use ($p) {
    $__case_0 = $x;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$x1 = $__case_0;
$no = ($__case_1)->no;
$yes = ($__case_1)->yes;
$__case_0 = ($p)($x1);
if (($__case_0 === true)) {
return (object)["no" => $no, "yes" => ($GLOBALS['Data_List_Types_Cons'])($x1, $yes)];
} else {
if (true) {
return (object)["no" => ($GLOBALS['Data_List_Types_Cons'])($x1, $no), "yes" => $yes];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $v = null) use ($p, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_List_foldr'])($select, (object)["no" => $GLOBALS['Data_List_Types_Nil'], "yes" => $GLOBALS['Data_List_Types_Nil']], $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_null
$Data_List_null = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return true;
} else {
if (true) {
return false;
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

// Data_List_nubBy
$Data_List_nubBy = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($p, &$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($p, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Nil")) {
$acc = $__case_1;
return $acc;
} else {
if ((($__case_2)->tag === "Cons")) {
$s = $__case_0;
$acc = $__case_1;
$a = ($__case_2)->values[0];
$as = ($__case_2)->values[1];
$v3 = ($GLOBALS['Data_List_Internal_insertAndLookupBy'])($p, $a, $s);
$__case_0 = $v3;
if ((is_object)($__case_0)) {
$found = ($__case_0)->found;
$s__prime__ = ($__case_0)->result;
$__case_0 = $found;
if (($__case_0 === true)) {
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = $acc;
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
} else {
if (true) {
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = ($GLOBALS['Data_List_Types_Cons'])($a, $acc);
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_List_compose'])($GLOBALS['Data_List_reverse'], ($go)($GLOBALS['Data_List_Internal_emptySet'], $GLOBALS['Data_List_Types_Nil']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_nub
$Data_List_nub = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_nubBy'])(($GLOBALS['Data_Ord_compare'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_newtypePattern
$Data_List_newtypePattern = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_mapMaybe
$Data_List_mapMaybe = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($f, &$go) {
  $__fn = function($v, $v1 = null) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_0;
return ($GLOBALS['Data_List_reverse'])($acc);
} else {
if ((($__case_1)->tag === "Cons")) {
$acc = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$v2 = ($f)($x);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if ((($__case_0)->tag === "Just")) {
$y = ($__case_0)->values[0];
$__tco_tmp_0 = ($GLOBALS['Data_List_Types_Cons'])($y, $acc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
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
    $__res = ($go)($GLOBALS['Data_List_Types_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_manyRec
$Data_List_manyRec = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind1 = ($GLOBALS['Control_Bind_bind'])((((($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']));
$tailRecM = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
    $__res = (function() use ($bind1, $tailRecM) {
  $__fn = function($dictAlternative) use ($bind1, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Alt0 = (((($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']))->Alt0)($GLOBALS['Prim_undefined']);
$alt = ($GLOBALS['Control_Alt_alt'])($Alt0);
$map1 = ($GLOBALS['Data_Functor_map'])((($Alt0)->Functor0)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictAlternative)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bind1, $alt, $map1, $pure, $tailRecM) {
  $__fn = function($p) use ($bind1, $alt, $map1, $pure, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($bind1, $alt, $map1, $p, $pure) {
  $__fn = function($acc) use ($bind1, $alt, $map1, $p, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind1)(($alt)(($map1)($GLOBALS['Control_Monad_Rec_Class_Loop'], $p), ($pure)(($GLOBALS['Control_Monad_Rec_Class_Done'])($GLOBALS['Data_Unit_unit']))), (function() use ($pure, $acc) {
  $__fn = function($aa) use ($pure, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure)(($GLOBALS['Data_List_bimap'])((function() use ($acc) {
  $__fn = function($v) use ($acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_Cons'])($v, $acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (function() use ($acc) {
  $__fn = function($v) use ($acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_reverse'])($acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $aa));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM)($go, $GLOBALS['Data_List_Types_Nil']);
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

// Data_List_someRec
$Data_List_someRec = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$manyRec1 = ($GLOBALS['Data_List_manyRec'])($dictMonadRec);
    $__res = (function() use ($manyRec1) {
  $__fn = function($dictAlternative) use ($manyRec1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$apply = ($GLOBALS['Control_Apply_apply'])((((($dictAlternative)->Applicative0)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']));
$map1 = ($GLOBALS['Data_Functor_map'])((((((($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']))->Alt0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$manyRec2 = ($manyRec1)($dictAlternative);
    $__res = (function() use ($apply, $map1, $manyRec2) {
  $__fn = function($v) use ($apply, $map1, $manyRec2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($apply)(($map1)($GLOBALS['Data_List_Types_Cons'], $v), ($manyRec2)($v));
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

// Data_List_some
$Data_List_some = (function() {
  $__fn = function($dictAlternative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$apply = ($GLOBALS['Control_Apply_apply'])((((($dictAlternative)->Applicative0)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']));
$map1 = ($GLOBALS['Data_Functor_map'])((((((($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']))->Alt0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return (function() use ($apply, $map1, $dictAlternative) {
  $__fn = function($dictLazy) use ($apply, $map1, $dictAlternative, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$defer = ($GLOBALS['Control_Lazy_defer'])($dictLazy);
    $__res = (function() use ($apply, $map1, $defer, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply, $map1, $defer, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($apply)(($map1)($GLOBALS['Data_List_Types_Cons'], $v), ($defer)((function() use ($dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_many'])($dictAlternative, $dictLazy, $v);
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

// Data_List_many
$Data_List_many = (function() {
  $__fn = function($dictAlternative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$alt = ($GLOBALS['Control_Alt_alt'])((((($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']))->Alt0)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictAlternative)->Applicative0)($GLOBALS['Prim_undefined']));
return (function() use ($alt, $dictAlternative, $pure) {
  $__fn = function($dictLazy, $v = null) use ($alt, $dictAlternative, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($alt)(($GLOBALS['Data_List_some'])($dictAlternative, $dictLazy, $v), ($pure)($GLOBALS['Data_List_Types_Nil']));
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

// Data_List_length
$Data_List_length = ($GLOBALS['Data_List_foldl'])((function() {
  $__fn = function($acc, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_add'])($acc, 1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), 0);

// Data_List_last
$Data_List_last = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])($x);
} else {
if ((($__case_0)->tag === "Cons")) {
$xs = ($__case_0)->values[1];
$__tco_tmp_0 = $xs;
$v = $__tco_tmp_0;
continue;
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_insertBy
$Data_List_insertBy = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Nil")) {
$x = $__case_1;
return ($GLOBALS['Data_List_singleton'])($x);
} else {
if ((($__case_2)->tag === "Cons")) {
$cmp = $__case_0;
$x = $__case_1;
$ys = $__case_2;
$y = ($__case_2)->values[0];
$ys__prime__ = ($__case_2)->values[1];
$v3 = ($cmp)($x, $y);
$__case_0 = $v3;
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_List_Types_Cons'])($y, ($GLOBALS['Data_List_insertBy'])($cmp, $x, $ys__prime__));
} else {
if (true) {
return ($GLOBALS['Data_List_Types_Cons'])($x, $ys);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_insertAt
$Data_List_insertAt = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_0 === 0)) {
$x = $__case_1;
$xs = $__case_2;
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_List_Types_Cons'])($x, $xs));
} else {
if ((($__case_2)->tag === "Cons")) {
$n = $__case_0;
$x = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return ($GLOBALS['Data_List_map'])((function() use ($y) {
  $__fn = function($v3) use ($y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_Cons'])($y, $v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_insertAt'])(($GLOBALS['Data_List_sub'])($n, 1), $x, $ys));
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_insert
$Data_List_insert = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_insertBy'])(($GLOBALS['Data_Ord_compare'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_init
$Data_List_init = (function() {
  $__fn = function($lst) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_map'])((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($v)->init;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_unsnoc'])($lst));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_index
$Data_List_index = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if (((($__case_0)->tag === "Cons") && ($__case_1 === 0))) {
$a = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])($a);
} else {
if ((($__case_0)->tag === "Cons")) {
$as = ($__case_0)->values[1];
$i = $__case_1;
$__tco_tmp_0 = $as;
$__tco_tmp_1 = ($GLOBALS['Data_List_sub'])($i, 1);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_head
$Data_List_head = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])($x);
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

// Data_List_transpose
$Data_List_transpose = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[0])->tag === "Nil"))) {
$xss = ($__case_0)->values[1];
$__tco_tmp_0 = $xss;
$v = $__tco_tmp_0;
continue;
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[0])->tag === "Cons"))) {
$x = (($__case_0)->values[0])->values[0];
$xs = (($__case_0)->values[0])->values[1];
$xss = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Types_Cons'])(($GLOBALS['Data_List_Types_Cons'])($x, ($GLOBALS['Data_List_mapMaybe'])($GLOBALS['Data_List_head'], $xss)), ($GLOBALS['Data_List_transpose'])(($GLOBALS['Data_List_Types_Cons'])($xs, ($GLOBALS['Data_List_mapMaybe'])($GLOBALS['Data_List_tail'], $xss))));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_groupBy
$Data_List_groupBy = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if ((($__case_1)->tag === "Cons")) {
$eq2 = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
$v2 = ($GLOBALS['Data_List_span'])(($eq2)($x), $xs);
$__case_0 = $v2;
if ((is_object)($__case_0)) {
$ys = ($__case_0)->init;
$zs = ($__case_0)->rest;
return ($GLOBALS['Data_List_Types_Cons'])(($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($x, $ys)), ($GLOBALS['Data_List_groupBy'])($eq2, $zs));
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_groupAllBy
$Data_List_groupAllBy = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_compose'])(($GLOBALS['Data_List_groupBy'])((function() use ($p) {
  $__fn = function($x, $y = null) use ($p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_eq'])(($p)($x, $y), $GLOBALS['Data_Ordering_EQ']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_List_sortBy'])($p));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_group
$Data_List_group = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_groupBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_groupAll
$Data_List_groupAll = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_compose'])(($GLOBALS['Data_List_group'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined'])), ($GLOBALS['Data_List_sort'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_fromFoldable
$Data_List_fromFoldable = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Foldable_foldr'])($dictFoldable, $GLOBALS['Data_List_Types_Cons'], $GLOBALS['Data_List_Types_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_foldM
$Data_List_foldM = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bind1 = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
return (function() use ($pure, $bind1, $dictMonad) {
  $__body = function($v, $v1, $v2) use ($pure, $bind1, $dictMonad) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Nil")) {
$b = $__case_1;
return ($pure)($b);
} else {
if ((($__case_2)->tag === "Cons")) {
$f = $__case_0;
$b = $__case_1;
$a = ($__case_2)->values[0];
$as = ($__case_2)->values[1];
return ($bind1)(($f)($b, $a), (function() use ($dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_foldM'])($dictMonad, $f, $b__prime__, $as);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($pure, $bind1, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_findIndex
$Data_List_findIndex = (function() {
  $__fn = function($fn) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Cons")) {
$n = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
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
    $__res = ($go)(0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_findLastIndex
$Data_List_findLastIndex = (function() {
  $__fn = function($fn, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_map'])((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_sub'])(($GLOBALS['Data_List_sub'])(($GLOBALS['Data_List_length'])($xs), 1), $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_findIndex'])($fn, ($GLOBALS['Data_List_reverse'])($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_filterM
$Data_List_filterM = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bind1 = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
return (function() use ($pure, $bind1, $dictMonad) {
  $__body = function($v, $v1) use ($pure, $bind1, $dictMonad) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return ($pure)($GLOBALS['Data_List_Types_Nil']);
} else {
if ((($__case_1)->tag === "Cons")) {
$p = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($bind1)(($p)($x), (function() use ($bind1, $dictMonad, $p, $xs, $pure, $x) {
  $__fn = function($b) use ($bind1, $dictMonad, $p, $xs, $pure, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind1)(($GLOBALS['Data_List_filterM'])($dictMonad, $p, $xs), (function() use ($pure, $b, $x) {
  $__fn = function($xs__prime__) use ($pure, $b, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$__case_0 = $b;
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = ($GLOBALS['Data_List_Types_Cons'])($x, $xs__prime__);
} else {
if (true) {
$__case_res_0 = $xs__prime__;
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($pure)($__case_res_0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $bind1, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
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

// Data_List_filter
$Data_List_filter = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_0;
return ($GLOBALS['Data_List_reverse'])($acc);
} else {
if ((($__case_1)->tag === "Cons")) {
$acc = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
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
    $__res = ($go)($GLOBALS['Data_List_Types_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_intersectBy
$Data_List_intersectBy = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if ((($__case_2)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if (true) {
$eq2 = $__case_0;
$xs = $__case_1;
$ys = $__case_2;
return ($GLOBALS['Data_List_filter'])((function() use ($eq2, $ys) {
  $__fn = function($x) use ($eq2, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_any'])(($eq2)($x), $ys);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs);
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_intersect
$Data_List_intersect = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_intersectBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_nubByEq
$Data_List_nubByEq = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if ((($__case_1)->tag === "Cons")) {
$eq__prime__ = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Types_Cons'])($x, ($GLOBALS['Data_List_nubByEq'])($eq__prime__, ($GLOBALS['Data_List_filter'])((function() use ($eq__prime__, $x) {
  $__fn = function($y) use ($eq__prime__, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_not'])(($eq__prime__)($x, $y));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs)));
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

// Data_List_nubEq
$Data_List_nubEq = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_nubByEq'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_eqPattern
$Data_List_eqPattern = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq2 = ($GLOBALS['Data_Eq_eq'])(($GLOBALS['Data_List_Types_eqList'])($dictEq));
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() use ($eq2) {
  $__body = function($x, $y) use ($eq2) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($eq2)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_ordPattern
$Data_List_ordPattern = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])(($GLOBALS['Data_List_Types_ordList'])($dictOrd));
$eqPattern1 = ($GLOBALS['Data_List_eqPattern'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() use ($compare) {
  $__body = function($x, $y) use ($compare) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($compare)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqPattern1) {
  $__fn = function($__dollar____unused) use ($eqPattern1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqPattern1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_elemLastIndex
$Data_List_elemLastIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq2 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($x) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_findLastIndex'])((function() use ($eq2, $x) {
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

// Data_List_elemIndex
$Data_List_elemIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq2 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq2) {
  $__fn = function($x) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_findIndex'])((function() use ($eq2, $x) {
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

// Data_List_dropWhile
$Data_List_dropWhile = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$xs = $__case_0;
return $xs;
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
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_dropEnd
$Data_List_dropEnd = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_take'])(($GLOBALS['Data_List_sub'])(($GLOBALS['Data_List_length'])($xs), $n), $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_drop
$Data_List_drop = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (true) {
$n = $__case_0;
$xs = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if ((($__case_1)->tag === "Cons")) {
$n = $__case_0;
$xs = ($__case_1)->values[1];
$__tco_tmp_0 = ($GLOBALS['Data_List_sub'])($n, 1);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_slice
$Data_List_slice = (function() {
  $__fn = function($start, $end = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_List_take'])(($GLOBALS['Data_List_sub'])($end, $start), ($GLOBALS['Data_List_drop'])($start, $xs));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_takeEnd
$Data_List_takeEnd = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_drop'])(($GLOBALS['Data_List_sub'])(($GLOBALS['Data_List_length'])($xs), $n), $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_deleteBy
$Data_List_deleteBy = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if ((($__case_2)->tag === "Cons")) {
$eq__prime__ = $__case_0;
$x = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_2)->tag === "Cons")) {
$eq__prime__ = $__case_0;
$x = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return ($GLOBALS['Data_List_Types_Cons'])($y, ($GLOBALS['Data_List_deleteBy'])($eq__prime__, $x, $ys));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_unionBy
$Data_List_unionBy = (function() {
  $__fn = function($eq2, $xs = null, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_List_append1'])($xs, ($GLOBALS['Data_List_foldl'])(($GLOBALS['Data_Function_flip'])(($GLOBALS['Data_List_deleteBy'])($eq2)), ($GLOBALS['Data_List_nubByEq'])($eq2, $ys), $xs));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_union
$Data_List_union = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_unionBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_deleteAt
$Data_List_deleteAt = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->values[1];
return ($GLOBALS['Data_Maybe_Just'])($ys);
} else {
if ((($__case_1)->tag === "Cons")) {
$n = $__case_0;
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
return ($GLOBALS['Data_List_map'])((function() use ($y) {
  $__fn = function($v2) use ($y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_Cons'])($y, $v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_deleteAt'])(($GLOBALS['Data_List_sub'])($n, 1), $ys));
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_delete
$Data_List_delete = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_deleteBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_difference
$Data_List_difference = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_foldl'])(($GLOBALS['Data_Function_flip'])(($GLOBALS['Data_List_delete'])($dictEq)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_concatMap
$Data_List_concatMap = ($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_bind']);

// Data_List_concat
$Data_List_concat = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_bind'])($v, $GLOBALS['Data_List_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_catMaybes
$Data_List_catMaybes = ($GLOBALS['Data_List_mapMaybe'])($GLOBALS['Data_List_identity']);

// Data_List_alterAt
$Data_List_alterAt = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0 === 0) && (($__case_2)->tag === "Cons"))) {
$f = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
$v3 = ($f)($y);
$__case_0 = $v3;
$__case_res_0 = null;
if ((($__case_0)->tag === "Nothing")) {
$__case_res_0 = $ys;
} else {
if ((($__case_0)->tag === "Just")) {
$y__prime__ = ($__case_0)->values[0];
$__case_res_0 = ($GLOBALS['Data_List_Types_Cons'])($y__prime__, $ys);
} else {
throw new \Exception("Pattern match failure");
};
};
return ($GLOBALS['Data_Maybe_Just'])($__case_res_0);
} else {
if ((($__case_2)->tag === "Cons")) {
$n = $__case_0;
$f = $__case_1;
$y = ($__case_2)->values[0];
$ys = ($__case_2)->values[1];
return ($GLOBALS['Data_List_map'])((function() use ($y) {
  $__fn = function($v3) use ($y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_Cons'])($y, $v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_alterAt'])(($GLOBALS['Data_List_sub'])($n, 1), $f, $ys));
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_modifyAt
$Data_List_modifyAt = (function() {
  $__fn = function($n, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_alterAt'])($n, ($GLOBALS['Data_List_compose'])($GLOBALS['Data_Maybe_Just'], $f));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

