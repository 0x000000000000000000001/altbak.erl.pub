<?php

namespace Data\List\Lazy;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
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


// Data_List_Lazy_apply
$Data_List_Lazy_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_Lazy_applyLazy']);

// Data_List_Lazy_map
$Data_List_Lazy_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Lazy_functorLazy']);

// Data_List_Lazy_unwrap
$Data_List_Lazy_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_List_Lazy_sequence
$Data_List_Lazy_sequence = ($GLOBALS['Data_Traversable_sequence'])($GLOBALS['Data_List_Lazy_Types_traversableList']);

// Data_List_Lazy_sub
$Data_List_Lazy_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_List_Lazy_foldr
$Data_List_Lazy_foldr = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_List_Lazy_Types_foldableList']);

// Data_List_Lazy_map1
$Data_List_Lazy_map1 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_List_Lazy_compose
$Data_List_Lazy_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_List_Lazy_lessThanOrEq
$Data_List_Lazy_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_List_Lazy_tailRecM2
$Data_List_Lazy_tailRecM2 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM2'])($GLOBALS['Control_Monad_Rec_Class_monadRecMaybe']);

// Data_List_Lazy_append
$Data_List_Lazy_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_List_Lazy_defer
$Data_List_Lazy_defer = ($GLOBALS['Control_Lazy_defer'])($GLOBALS['Data_List_Lazy_Types_lazyList']);

// Data_List_Lazy_foldl
$Data_List_Lazy_foldl = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Lazy_Types_foldableList']);

// Data_List_Lazy_lessThan
$Data_List_Lazy_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_List_Lazy_one
$Data_List_Lazy_one = ($GLOBALS['Data_Semiring_one'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_List_Lazy_fix
$Data_List_Lazy_fix = ($GLOBALS['Control_Lazy_fix'])($GLOBALS['Data_List_Lazy_Types_lazyList']);

// Data_List_Lazy_greaterThan
$Data_List_Lazy_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_List_Lazy_greaterThanOrEq
$Data_List_Lazy_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_List_Lazy_unfoldr
$Data_List_Lazy_unfoldr = ($GLOBALS['Data_Unfoldable_unfoldr'])($GLOBALS['Data_List_Lazy_Types_unfoldableList']);

// Data_List_Lazy_add
$Data_List_Lazy_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_List_Lazy_map2
$Data_List_Lazy_map2 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_List_Lazy_Types_functorList']);

// Data_List_Lazy_bind
$Data_List_Lazy_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_Maybe_bindMaybe']);

// Data_List_Lazy_pure
$Data_List_Lazy_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_Maybe_applicativeMaybe']);

// Data_List_Lazy_any
$Data_List_Lazy_any = ($GLOBALS['Data_Foldable_any'])($GLOBALS['Data_List_Lazy_Types_foldableList'], $GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_List_Lazy_not
$Data_List_Lazy_not = ($GLOBALS['Data_HeytingAlgebra_not'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_List_Lazy_append1
$Data_List_Lazy_append1 = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_List_Lazy_Types_semigroupList']);

// Data_List_Lazy_bind1
$Data_List_Lazy_bind1 = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_List_Lazy_Types_bindList']);

// Data_List_Lazy_identity
$Data_List_Lazy_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_List_Lazy_Pattern
$Data_List_Lazy_Pattern = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_zipWith
$Data_List_Lazy_zipWith = (function() {
  $__fn = function($f, $xs = null, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$go = (function() use ($f) {
  $__body = function($v, $v1) use ($f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$b = ($__case_1)->values[0];
$bs = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])(($f)($a, $b), ($GLOBALS['Data_List_Lazy_zipWith'])($f, $as, $bs));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_apply'])(($GLOBALS['Data_List_Lazy_map'])($go, ($GLOBALS['Data_List_Lazy_unwrap'])($xs)), ($GLOBALS['Data_List_Lazy_unwrap'])($ys)));
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_zipWithA
$Data_List_Lazy_zipWithA = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequence1 = ($GLOBALS['Data_List_Lazy_sequence'])($dictApplicative);
    $__res = (function() use ($sequence1) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($sequence1)(($GLOBALS['Data_List_Lazy_zipWith'])($f, $xs, $ys));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_zip
$Data_List_Lazy_zip = ($GLOBALS['Data_List_Lazy_zipWith'])($GLOBALS['Data_Tuple_Tuple']);

// Data_List_Lazy_updateAt
$Data_List_Lazy_updateAt = (function() {
  $__fn = function($n, $x = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$go = (function() use ($x) {
  $__body = function($v, $v1) use ($x) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($x, $ys);
} else {
if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($y, ($GLOBALS['Data_List_Lazy_updateAt'])(($GLOBALS['Data_List_Lazy_sub'])($n__prime__, 1), $x, $ys));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($x, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_map'])(($go)($n), ($GLOBALS['Data_List_Lazy_unwrap'])($xs)));
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_unzip
$Data_List_Lazy_unzip = ($GLOBALS['Data_List_Lazy_foldr'])((function() {
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
return ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_List_Lazy_Types_cons'])($a, $as), ($GLOBALS['Data_List_Lazy_Types_cons'])($b, $bs));
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
})(), ($GLOBALS['Data_Tuple_Tuple'])($GLOBALS['Data_List_Lazy_Types_nil'], $GLOBALS['Data_List_Lazy_Types_nil']));

// Data_List_Lazy_uncons
$Data_List_Lazy_uncons = (function() {
  $__body = function($xs) {
    $v = ($GLOBALS['Data_List_Lazy_Types_step'])($xs);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_Just'])((object)["head" => $x, "tail" => $xs__prime__]);
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Lazy_toUnfoldable
$Data_List_Lazy_toUnfoldable = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_map1'])((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_Lazy_uncons'])($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_takeWhile
$Data_List_Lazy_takeWhile = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$go = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
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
return ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_List_Lazy_Types_List'], ($GLOBALS['Data_List_Lazy_compose'])(($GLOBALS['Data_List_Lazy_map'])($go), $GLOBALS['Data_List_Lazy_unwrap']));
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_take
$Data_List_Lazy_take = (function() {
  $__fn = function($n) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$go = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$x = ($__case_1)->values[0];
$xs = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($x, ($GLOBALS['Data_List_Lazy_take'])(($GLOBALS['Data_List_Lazy_sub'])($n__prime__, 1), $xs));
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
$__case_0 = ($GLOBALS['Data_List_Lazy_lessThanOrEq'])($n, 0);
if (($__case_0 === true)) {
return ($GLOBALS['Data_Function_const'])($GLOBALS['Data_List_Lazy_Types_nil']);
} else {
if (true) {
return ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_List_Lazy_Types_List'], ($GLOBALS['Data_List_Lazy_compose'])(($GLOBALS['Data_List_Lazy_map'])(($go)($n)), $GLOBALS['Data_List_Lazy_unwrap']));
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

// Data_List_Lazy_tail
$Data_List_Lazy_tail = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_map1'])((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($v)->tail;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_Lazy_uncons'])($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_stripPrefix
$Data_List_Lazy_stripPrefix = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() {
  $__body = function($v, $s) {
    $__case_0 = $v;
    $__case_1 = $s;
    if (true) {
$p__prime__ = $__case_0;
$s1 = $__case_1;
$go = (function() {
  $__body = function($prefix, $input) {
    $v1 = ($GLOBALS['Data_List_Lazy_Types_step'])($prefix);
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Control_Monad_Rec_Class_Done'])($input));
} else {
if ((($__case_0)->tag === "Cons")) {
$p = ($__case_0)->values[0];
$ps = ($__case_0)->values[1];
$v2 = ($GLOBALS['Data_List_Lazy_Types_step'])($input);
$__case_0 = $v2;
if ((($__case_0)->tag === "Cons")) {
$i = ($__case_0)->values[0];
$is = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
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
  };
  $__fn = function($prefix, $input = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($prefix, $input);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_tailRecM2'])($go, $p__prime__, $s1);
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

// Data_List_Lazy_span
$Data_List_Lazy_span = (function() {
  $__fn = function($p, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$v = ($GLOBALS['Data_List_Lazy_uncons'])($xs);
$__case_0 = $v;
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$x = (($__case_0)->values[0])->head;
$xs__prime__ = (($__case_0)->values[0])->tail;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return (object)["init" => $GLOBALS['Data_List_Lazy_Types_nil'], "rest" => $xs];
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

// Data_List_Lazy_snoc
$Data_List_Lazy_snoc = (function() {
  $__fn = function($xs, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_foldr'])($GLOBALS['Data_List_Lazy_Types_cons'], ($GLOBALS['Data_List_Lazy_Types_cons'])($x, $GLOBALS['Data_List_Lazy_Types_nil']), $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_singleton
$Data_List_Lazy_singleton = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_cons'])($a, $GLOBALS['Data_List_Lazy_Types_nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_showPattern
$Data_List_Lazy_showPattern = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_List_Lazy_Types_showList'])($dictShow));
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$s = $__case_0;
return ($GLOBALS['Data_List_Lazy_append'])("(Pattern ", ($GLOBALS['Data_List_Lazy_append'])(($show)($s), ")"));
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

// Data_List_Lazy_scanlLazy
$Data_List_Lazy_scanlLazy = (function() {
  $__fn = function($f, $acc = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$go = (function() use ($f, $acc) {
  $__body = function($v) use ($f, $acc) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
$acc__prime__ = ($f)($acc, $x);
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($acc__prime__, ($GLOBALS['Data_List_Lazy_scanlLazy'])($f, $acc__prime__, $xs__prime__));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($f, $acc, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_map'])($go, ($GLOBALS['Data_List_Lazy_unwrap'])($xs)));
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_reverse
$Data_List_Lazy_reverse = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_defer'])((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_foldl'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Lazy_Types_cons']), $GLOBALS['Data_List_Lazy_Types_nil'], $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_replicateM
$Data_List_Lazy_replicateM = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bind2 = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
return (function() {
  $__body = function($n, $m) {
    $__case_0 = $n;
    $__case_1 = $m;
    if (true) {
$n1 = $__case_0;
$m1 = $__case_1;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($n, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($n, $m);
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

// Data_List_Lazy_repeat
$Data_List_Lazy_repeat = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_fix'])((function() use ($x) {
  $__fn = function($xs) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_cons'])($x, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_replicate
$Data_List_Lazy_replicate = (function() {
  $__fn = function($i, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_take'])($i, ($GLOBALS['Data_List_Lazy_repeat'])($xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_range
$Data_List_Lazy_range = (function() {
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

// Data_List_Lazy_partition
$Data_List_Lazy_partition = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($f) {
  $__body = function($x, $v) use ($f) {
    $__case_0 = $x;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$x1 = $__case_0;
$ys = ($__case_1)->yes;
$ns = ($__case_1)->no;
$__case_0 = ($f)($x1);
if (($__case_0 === true)) {
return (object)["yes" => ($GLOBALS['Data_List_Lazy_Types_cons'])($x1, $ys), "no" => $ns];
} else {
if (true) {
return (object)["yes" => $ys, "no" => ($GLOBALS['Data_List_Lazy_Types_cons'])($x1, $ns)];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $v = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_List_Lazy_foldr'])($go, (object)["yes" => $GLOBALS['Data_List_Lazy_Types_nil'], "no" => $GLOBALS['Data_List_Lazy_Types_nil']]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_null
$Data_List_Lazy_null = ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_Maybe_isNothing'], $GLOBALS['Data_List_Lazy_uncons']);

// Data_List_Lazy_nubBy
$Data_List_Lazy_nubBy = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$goStep = (function() use ($p, &$go) {
  $__fn = function($v, $v1 = null) use ($p, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_1)->tag === "Cons")) {
$s = $__case_0;
$a = ($__case_1)->values[0];
$as = ($__case_1)->values[1];
$v2 = ($GLOBALS['Data_List_Internal_insertAndLookupBy'])($p, $a, $s);
$__case_0 = $v2;
if ((is_object)($__case_0)) {
$found = ($__case_0)->found;
$s__prime__ = ($__case_0)->result;
$__case_0 = $found;
if (($__case_0 === true)) {
return ($GLOBALS['Data_List_Lazy_Types_step'])(($go)($s__prime__, $as));
} else {
if (true) {
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($a, ($go)($s__prime__, $as));
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
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$go = (function() use (&$goStep) {
  $__fn = function($s, $v = null) use (&$goStep, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $s;
$__case_1 = $v;
if (true) {
$s1 = $__case_0;
$l = $__case_1;
return ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_map'])(($goStep)($s1), $l));
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($GLOBALS['Data_List_Internal_emptySet']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_nub
$Data_List_Lazy_nub = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_nubBy'])(($GLOBALS['Data_Ord_compare'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_newtypePattern
$Data_List_Lazy_newtypePattern = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_mapMaybe
$Data_List_Lazy_mapMaybe = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$go = (function() use ($f, &$go) {
  $__fn = function($v) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$v1 = ($f)($x);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
$__tco_tmp_0 = ($GLOBALS['Data_List_Lazy_Types_step'])($xs);
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "Just")) {
$y = ($__case_0)->values[0];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($y, ($GLOBALS['Data_List_Lazy_mapMaybe'])($f, $xs));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_List_Lazy_Types_List'], ($GLOBALS['Data_List_Lazy_compose'])(($GLOBALS['Data_List_Lazy_map'])($go), $GLOBALS['Data_List_Lazy_unwrap']));
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_some
$Data_List_Lazy_some = (function() {
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
$defer1 = ($GLOBALS['Control_Lazy_defer'])($dictLazy);
    $__res = (function() use ($apply1, $map3, $defer1, $dictAlternative, $dictLazy) {
  $__fn = function($v) use ($apply1, $map3, $defer1, $dictAlternative, $dictLazy, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($apply1)(($map3)($GLOBALS['Data_List_Lazy_Types_cons'], $v), ($defer1)((function() use ($dictAlternative, $dictLazy, $v) {
  $__fn = function($v1) use ($dictAlternative, $dictLazy, $v, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_many'])($dictAlternative, $dictLazy, $v);
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

// Data_List_Lazy_many
$Data_List_Lazy_many = (function() {
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
    $__res = ($alt)(($GLOBALS['Data_List_Lazy_some'])($dictAlternative, $dictLazy, $v), ($pure1)($GLOBALS['Data_List_Lazy_Types_nil']));
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

// Data_List_Lazy_length
$Data_List_Lazy_length = ($GLOBALS['Data_List_Lazy_foldl'])((function() {
  $__fn = function($l, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_add'])($l, 1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), 0);

// Data_List_Lazy_last
$Data_List_Lazy_last = ($go = (function() {
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
return ($GLOBALS['Data_List_Lazy_compose'])($go, $GLOBALS['Data_List_Lazy_Types_step']);)();

// Data_List_Lazy_iterate
$Data_List_Lazy_iterate = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_fix'])((function() use ($x, $f) {
  $__fn = function($xs) use ($x, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_cons'])($x, ($GLOBALS['Data_List_Lazy_map2'])($f, $xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_insertAt
$Data_List_Lazy_insertAt = (function() {
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
return ($GLOBALS['Data_List_Lazy_Types_cons'])($x, $xs);
} else {
if (true) {
$n = $__case_0;
$x = $__case_1;
$xs = $__case_2;
$go = (function() use ($x, $n) {
  $__body = function($v3) use ($x, $n) {
    $__case_0 = $v3;
    if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($x, $GLOBALS['Data_List_Lazy_Types_nil']);
} else {
if ((($__case_0)->tag === "Cons")) {
$y = ($__case_0)->values[0];
$ys = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($y, ($GLOBALS['Data_List_Lazy_insertAt'])(($GLOBALS['Data_List_Lazy_sub'])($n, 1), $x, $ys));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v3) use ($x, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_map'])($go, ($GLOBALS['Data_List_Lazy_unwrap'])($xs)));
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

// Data_List_Lazy_init
$Data_List_Lazy_init = ($go = (function() {
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
return ($GLOBALS['Data_List_Lazy_compose'])($go, $GLOBALS['Data_List_Lazy_Types_step']);)();

// Data_List_Lazy_index
$Data_List_Lazy_index = (function() {
  $__fn = function($xs) use (&$__fn) {
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
if (((($__case_0)->tag === "Cons") && ($__case_1 === 0))) {
$a = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])($a);
} else {
if ((($__case_0)->tag === "Cons")) {
$as = ($__case_0)->values[1];
$i = $__case_1;
$__tco_tmp_0 = ($GLOBALS['Data_List_Lazy_Types_step'])($as);
$__tco_tmp_1 = ($GLOBALS['Data_List_Lazy_sub'])($i, 1);
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
    $__res = ($go)(($GLOBALS['Data_List_Lazy_Types_step'])($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_head
$Data_List_Lazy_head = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_map1'])((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($v)->head;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_Lazy_uncons'])($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_transpose
$Data_List_Lazy_transpose = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$v = ($GLOBALS['Data_List_Lazy_uncons'])($xs);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return $xs;
} else {
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$h = (($__case_0)->values[0])->head;
$xss = (($__case_0)->values[0])->tail;
$v1 = ($GLOBALS['Data_List_Lazy_uncons'])($h);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
$__tco_tmp_0 = $xss;
$xs = $__tco_tmp_0;
continue;
} else {
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$x = (($__case_0)->values[0])->head;
$xs__prime__ = (($__case_0)->values[0])->tail;
return ($GLOBALS['Data_List_Lazy_Types_cons'])(($GLOBALS['Data_List_Lazy_Types_cons'])($x, ($GLOBALS['Data_List_Lazy_mapMaybe'])($GLOBALS['Data_List_Lazy_head'], $xss)), ($GLOBALS['Data_List_Lazy_transpose'])(($GLOBALS['Data_List_Lazy_Types_cons'])($xs__prime__, ($GLOBALS['Data_List_Lazy_mapMaybe'])($GLOBALS['Data_List_Lazy_tail'], $xss))));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_groupBy
$Data_List_Lazy_groupBy = (function() {
  $__fn = function($eq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$go = (function() use ($eq) {
  $__body = function($v) use ($eq) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$v1 = ($GLOBALS['Data_List_Lazy_span'])(($eq)($x), $xs);
$__case_0 = $v1;
if ((is_object)($__case_0)) {
$ys = ($__case_0)->init;
$zs = ($__case_0)->rest;
return ($GLOBALS['Data_List_Lazy_Types_Cons'])(($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($x, $ys) {
  $__fn = function($v2) use ($x, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])($x, $ys);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($GLOBALS['Data_List_Lazy_groupBy'])($eq, $zs));
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($eq, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_List_Lazy_Types_List'], ($GLOBALS['Data_List_Lazy_compose'])(($GLOBALS['Data_List_Lazy_map'])($go), $GLOBALS['Data_List_Lazy_unwrap']));
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_group
$Data_List_Lazy_group = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_groupBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_fromStep
$Data_List_Lazy_fromStep = ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_List_Lazy_Types_List'], ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_Lazy_applicativeLazy']));

// Data_List_Lazy_insertBy
$Data_List_Lazy_insertBy = (function() {
  $__fn = function($cmp, $x = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$go = (function() use ($x, $cmp) {
  $__body = function($v) use ($x, $cmp) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($x, $GLOBALS['Data_List_Lazy_Types_nil']);
} else {
if ((($__case_0)->tag === "Cons")) {
$ys = $__case_0;
$y = ($__case_0)->values[0];
$ys__prime__ = ($__case_0)->values[1];
$v1 = ($cmp)($x, $y);
$__case_0 = $v1;
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($y, ($GLOBALS['Data_List_Lazy_insertBy'])($cmp, $x, $ys__prime__));
} else {
if (true) {
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($x, ($GLOBALS['Data_List_Lazy_fromStep'])($ys));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($x, $cmp, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_map'])($go, ($GLOBALS['Data_List_Lazy_unwrap'])($xs)));
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_insert
$Data_List_Lazy_insert = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_insertBy'])(($GLOBALS['Data_Ord_compare'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_fromFoldable
$Data_List_Lazy_fromFoldable = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Foldable_foldr'])($dictFoldable, $GLOBALS['Data_List_Lazy_Types_cons'], $GLOBALS['Data_List_Lazy_Types_nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_foldrLazy
$Data_List_Lazy_foldrLazy = (function() {
  $__fn = function($dictLazy) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$defer1 = ($GLOBALS['Control_Lazy_defer'])($dictLazy);
    $__res = (function() use ($defer1) {
  $__fn = function($op, $z = null) use ($defer1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($defer1, $op, &$go, $z) {
  $__fn = function($xs) use ($defer1, $op, &$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$v = ($GLOBALS['Data_List_Lazy_Types_step'])($xs);
$__case_0 = $v;
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($defer1)((function() use ($op, $x, &$go, $xs__prime__) {
  $__fn = function($v1) use ($op, $x, &$go, $xs__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($op)($x, ($go)($xs__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
if ((($__case_0)->tag === "Nil")) {
return $z;
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
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_foldM
$Data_List_Lazy_foldM = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bind2 = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
return (function() use ($pure1, $bind2, $dictMonad) {
  $__body = function($f, $b, $xs) use ($pure1, $bind2, $dictMonad) {
    $v = ($GLOBALS['Data_List_Lazy_uncons'])($xs);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$a = (($__case_0)->values[0])->head;
$as = (($__case_0)->values[0])->tail;
return ($bind2)(($f)($b, $a), (function() use ($dictMonad, $f, $as) {
  $__fn = function($b__prime__) use ($dictMonad, $f, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_foldM'])($dictMonad, $f, $b__prime__, $as);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($f, $b = null, $xs = null) use ($pure1, $bind2, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $b, $xs);
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

// Data_List_Lazy_findIndex
$Data_List_Lazy_findIndex = (function() {
  $__fn = function($fn) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($fn, &$go) {
  $__fn = function($n, $list = null) use ($fn, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
return ($GLOBALS['Data_List_Lazy_bind'])(($GLOBALS['Data_List_Lazy_uncons'])($list), (function() use ($fn, $n, &$go) {
  $__body = function($o) use ($fn, $n, &$go) {
    $__case_0 = ($fn)(($o)->head);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_List_Lazy_pure'])($n);
} else {
if (true) {
return ($go)(($GLOBALS['Data_List_Lazy_add'])($n, 1), ($o)->tail);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($o) use ($fn, $n, &$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($o);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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

// Data_List_Lazy_findLastIndex
$Data_List_Lazy_findLastIndex = (function() {
  $__fn = function($fn, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_map1'])((function() use ($xs) {
  $__fn = function($v) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_sub'])(($GLOBALS['Data_List_Lazy_sub'])(($GLOBALS['Data_List_Lazy_length'])($xs), 1), $v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_Lazy_findIndex'])($fn, ($GLOBALS['Data_List_Lazy_reverse'])($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_filterM
$Data_List_Lazy_filterM = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bind2 = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
return (function() use ($pure1, $bind2, $dictMonad) {
  $__body = function($p, $list) use ($pure1, $bind2, $dictMonad) {
    $v = ($GLOBALS['Data_List_Lazy_uncons'])($list);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($GLOBALS['Data_List_Lazy_Types_nil']);
} else {
if (((($__case_0)->tag === "Just") && (is_object)(($__case_0)->values[0]))) {
$x = (($__case_0)->values[0])->head;
$xs = (($__case_0)->values[0])->tail;
return ($bind2)(($p)($x), (function() use ($bind2, $dictMonad, $p, $xs, $pure1, $x) {
  $__fn = function($b) use ($bind2, $dictMonad, $p, $xs, $pure1, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind2)(($GLOBALS['Data_List_Lazy_filterM'])($dictMonad, $p, $xs), (function() use ($pure1, $b, $x) {
  $__fn = function($xs__prime__) use ($pure1, $b, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$__case_0 = $b;
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = ($GLOBALS['Data_List_Lazy_Types_cons'])($x, $xs__prime__);
} else {
if (true) {
$__case_res_0 = $xs__prime__;
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($pure1)($__case_res_0);
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
  $__fn = function($p, $list = null) use ($pure1, $bind2, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($p, $list);
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

// Data_List_Lazy_filter
$Data_List_Lazy_filter = (function() {
  $__fn = function($p) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
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
return ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_List_Lazy_Types_List'], ($GLOBALS['Data_List_Lazy_compose'])(($GLOBALS['Data_List_Lazy_map'])($go), $GLOBALS['Data_List_Lazy_unwrap']));
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_intersectBy
$Data_List_Lazy_intersectBy = (function() {
  $__fn = function($eq, $xs = null, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_List_Lazy_filter'])((function() use ($eq, $ys) {
  $__fn = function($x) use ($eq, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_any'])(($eq)($x), $ys);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_intersect
$Data_List_Lazy_intersect = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_intersectBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_nubByEq
$Data_List_Lazy_nubByEq = (function() {
  $__fn = function($eq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$go = (function() use ($eq) {
  $__body = function($v) use ($eq) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($x, ($GLOBALS['Data_List_Lazy_nubByEq'])($eq, ($GLOBALS['Data_List_Lazy_filter'])((function() use ($eq, $x) {
  $__fn = function($y) use ($eq, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_not'])(($eq)($x, $y));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs)));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($eq, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_List_Lazy_Types_List'], ($GLOBALS['Data_List_Lazy_compose'])(($GLOBALS['Data_List_Lazy_map'])($go), $GLOBALS['Data_List_Lazy_unwrap']));
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_nubEq
$Data_List_Lazy_nubEq = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_nubByEq'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_eqPattern
$Data_List_Lazy_eqPattern = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq = ($GLOBALS['Data_Eq_eq'])(($GLOBALS['Data_List_Lazy_Types_eqList'])($dictEq));
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() use ($eq) {
  $__body = function($x, $y) use ($eq) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($eq)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq, $__body, &$__fn) {
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

// Data_List_Lazy_ordPattern
$Data_List_Lazy_ordPattern = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])(($GLOBALS['Data_List_Lazy_Types_ordList'])($dictOrd));
$eqPattern1 = ($GLOBALS['Data_List_Lazy_eqPattern'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
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

// Data_List_Lazy_elemLastIndex
$Data_List_Lazy_elemLastIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq) {
  $__fn = function($x) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_findLastIndex'])((function() use ($eq, $x) {
  $__fn = function($v) use ($eq, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($eq)($v, $x);
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

// Data_List_Lazy_elemIndex
$Data_List_Lazy_elemIndex = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq) {
  $__fn = function($x) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_findIndex'])((function() use ($eq, $x) {
  $__fn = function($v) use ($eq, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($eq)($v, $x);
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

// Data_List_Lazy_dropWhile
$Data_List_Lazy_dropWhile = (function() {
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
return ($GLOBALS['Data_List_Lazy_fromStep'])($xs);
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
    $__res = ($GLOBALS['Data_List_Lazy_compose'])($go, $GLOBALS['Data_List_Lazy_Types_step']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_drop
$Data_List_Lazy_drop = (function() {
  $__fn = function($n) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$xs = $__case_1;
return $xs;
} else {
if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$xs = ($__case_1)->values[1];
$__tco_tmp_0 = ($GLOBALS['Data_List_Lazy_sub'])($n__prime__, 1);
$__tco_tmp_1 = ($GLOBALS['Data_List_Lazy_Types_step'])($xs);
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
    $__res = ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_List_Lazy_Types_List'], ($GLOBALS['Data_List_Lazy_compose'])(($GLOBALS['Data_List_Lazy_map'])(($go)($n)), $GLOBALS['Data_List_Lazy_unwrap']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_slice
$Data_List_Lazy_slice = (function() {
  $__fn = function($start, $end = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_List_Lazy_take'])(($GLOBALS['Data_List_Lazy_sub'])($end, $start), ($GLOBALS['Data_List_Lazy_drop'])($start, $xs));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_deleteBy
$Data_List_Lazy_deleteBy = (function() {
  $__fn = function($eq, $x = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$go = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$y = ($__case_0)->values[0];
$ys = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
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
return ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_map'])($go, ($GLOBALS['Data_List_Lazy_unwrap'])($xs)));
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_unionBy
$Data_List_Lazy_unionBy = (function() {
  $__fn = function($eq, $xs = null, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_List_Lazy_append1'])($xs, ($GLOBALS['Data_List_Lazy_foldl'])(($GLOBALS['Data_Function_flip'])(($GLOBALS['Data_List_Lazy_deleteBy'])($eq)), ($GLOBALS['Data_List_Lazy_nubByEq'])($eq, $ys), $xs));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_union
$Data_List_Lazy_union = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_unionBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_deleteAt
$Data_List_Lazy_deleteAt = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$go = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_step'])($ys);
} else {
if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($y, ($GLOBALS['Data_List_Lazy_deleteAt'])(($GLOBALS['Data_List_Lazy_sub'])($n__prime__, 1), $ys));
} else {
throw new \Exception("Pattern match failure");
};
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
return ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_map'])(($go)($n), ($GLOBALS['Data_List_Lazy_unwrap'])($xs)));
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_delete
$Data_List_Lazy_delete = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_deleteBy'])(($GLOBALS['Data_Eq_eq'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_difference
$Data_List_Lazy_difference = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_foldl'])(($GLOBALS['Data_Function_flip'])(($GLOBALS['Data_List_Lazy_delete'])($dictEq)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_cycle
$Data_List_Lazy_cycle = (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_fix'])((function() use ($xs) {
  $__fn = function($ys) use ($xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_append1'])($xs, $ys);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_concatMap
$Data_List_Lazy_concatMap = ($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Lazy_bind1']);

// Data_List_Lazy_concat
$Data_List_Lazy_concat = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_bind1'])($v, $GLOBALS['Data_List_Lazy_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_catMaybes
$Data_List_Lazy_catMaybes = ($GLOBALS['Data_List_Lazy_mapMaybe'])($GLOBALS['Data_List_Lazy_identity']);

// Data_List_Lazy_alterAt
$Data_List_Lazy_alterAt = (function() {
  $__fn = function($n, $f = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$go = (function() use ($f) {
  $__body = function($v, $v1) use ($f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
$v2 = ($f)($y);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_List_Lazy_Types_step'])($ys);
} else {
if ((($__case_0)->tag === "Just")) {
$y__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($y__prime__, $ys);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_1)->tag === "Cons")) {
$n__prime__ = $__case_0;
$y = ($__case_1)->values[0];
$ys = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($y, ($GLOBALS['Data_List_Lazy_alterAt'])(($GLOBALS['Data_List_Lazy_sub'])($n__prime__, 1), $f, $ys));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_map'])(($go)($n), ($GLOBALS['Data_List_Lazy_unwrap'])($xs)));
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_modifyAt
$Data_List_Lazy_modifyAt = (function() {
  $__fn = function($n, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_alterAt'])($n, ($GLOBALS['Data_List_Lazy_compose'])($GLOBALS['Data_Maybe_Just'], $f));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

