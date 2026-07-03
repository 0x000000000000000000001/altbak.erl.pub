<?php

namespace Data\List\Types;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
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


// Data_List_Types_compose
$Data_List_Types_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_List_Types_add
$Data_List_Types_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_List_Types_sub
$Data_List_Types_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_List_Types_append
$Data_List_Types_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_List_Types_identity
$Data_List_Types_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_List_Types_conj
$Data_List_Types_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_List_Types_Nil
$Data_List_Types_Nil = (object)["tag" => "Nil", "values" => []];

// Data_List_Types_Cons
$Data_List_Types_Cons = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Cons", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Types_NonEmptyList
$Data_List_Types_NonEmptyList = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Types_toList
$Data_List_Types_toList = (function() {
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

// Data_List_Types_newtypeNonEmptyList
$Data_List_Types_newtypeNonEmptyList = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_nelCons
$Data_List_Types_nelCons = (function() {
  $__body = function($a, $v) {
    $__case_0 = $a;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$a1 = $__case_0;
$b = ($__case_1)->values[0];
$bs = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($a1, ($GLOBALS['Data_List_Types_Cons'])($b, $bs)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Types_listMap
$Data_List_Types_listMap = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$chunkedRevMap = (function() use (&$chunkedRevMap, $f) {
  $__fn = function($v, $v1 = null) use (&$chunkedRevMap, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && (((($__case_1)->values[1])->tag === "Cons") && (((($__case_1)->values[1])->values[1])->tag === "Cons")))) {
$chunksAcc = $__case_0;
$chunk = $__case_1;
$xs = ((($__case_1)->values[1])->values[1])->values[1];
$__tco_tmp_0 = ($GLOBALS['Data_List_Types_Cons'])($chunk, $chunksAcc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (true) {
$chunksAcc = $__case_0;
$xs = $__case_1;
$unrolledMap = (function() use ($f) {
  $__body = function($v2) use ($f) {
    $__case_0 = $v2;
    if (((($__case_0)->tag === "Cons") && (((($__case_0)->values[1])->tag === "Cons") && (((($__case_0)->values[1])->values[1])->tag === "Nil")))) {
$x1 = ($__case_0)->values[0];
$x2 = (($__case_0)->values[1])->values[0];
return ($GLOBALS['Data_List_Types_Cons'])(($f)($x1), ($GLOBALS['Data_List_Types_Cons'])(($f)($x2), $GLOBALS['Data_List_Types_Nil']));
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[1])->tag === "Nil"))) {
$x1 = ($__case_0)->values[0];
return ($GLOBALS['Data_List_Types_Cons'])(($f)($x1), $GLOBALS['Data_List_Types_Nil']);
} else {
if (true) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v2) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$reverseUnrolledMap = (function() use (&$reverseUnrolledMap, $f) {
  $__fn = function($v2, $v3 = null) use (&$reverseUnrolledMap, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v2;
$__case_1 = $v3;
if (((($__case_0)->tag === "Cons") && (((($__case_0)->values[0])->tag === "Cons") && ((((($__case_0)->values[0])->values[1])->tag === "Cons") && ((((($__case_0)->values[0])->values[1])->values[1])->tag === "Cons"))))) {
$x1 = (($__case_0)->values[0])->values[0];
$x2 = ((($__case_0)->values[0])->values[1])->values[0];
$x3 = (((($__case_0)->values[0])->values[1])->values[1])->values[0];
$cs = ($__case_0)->values[1];
$acc = $__case_1;
$__tco_tmp_0 = $cs;
$__tco_tmp_1 = ($GLOBALS['Data_List_Types_Cons'])(($f)($x1), ($GLOBALS['Data_List_Types_Cons'])(($f)($x2), ($GLOBALS['Data_List_Types_Cons'])(($f)($x3), $acc)));
$v2 = $__tco_tmp_0;
$v3 = $__tco_tmp_1;
continue;
} else {
if (true) {
$acc = $__case_1;
return $acc;
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
return ($reverseUnrolledMap)($chunksAcc, ($unrolledMap)($xs));
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
    $__res = ($chunkedRevMap)($GLOBALS['Data_List_Types_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Types_functorList
$Data_List_Types_functorList = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => $GLOBALS['Data_List_Types_listMap']]);

// Data_List_Types_map
$Data_List_Types_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_List_Types_functorList']);

// Data_List_Types_functorNonEmptyList
$Data_List_Types_functorNonEmptyList = ($GLOBALS['Data_NonEmpty_functorNonEmpty'])($GLOBALS['Data_List_Types_functorList']);

// Data_List_Types_foldableList
$Data_List_Types_foldableList = ($GLOBALS['Data_Foldable_Foldable__dollar__Dict'])((object)["foldr" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use (&$go) {
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
$rev = ($go)($GLOBALS['Data_List_Types_Nil']);
    $__res = ($GLOBALS['Data_List_Types_compose'])(($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Types_foldableList'], ($GLOBALS['Data_Function_flip'])($f), $b), $rev);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use (&$go, $f) {
  $__fn = function($b, $v = null) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $b;
} else {
if ((($__case_0)->tag === "Cons")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$__tco_tmp_0 = ($f)($b, $a);
$__tco_tmp_1 = $as;
$b = $__tco_tmp_0;
$v = $__tco_tmp_1;
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
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append2 = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($append2, $mempty) {
  $__fn = function($f) use ($append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Types_foldableList'], (function() use ($append2, $f) {
  $__fn = function($acc) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_compose'])(($append2)($acc), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_foldl
$Data_List_Types_foldl = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Types_foldableList']);

// Data_List_Types_foldr
$Data_List_Types_foldr = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_List_Types_foldableList']);

// Data_List_Types_intercalate
$Data_List_Types_intercalate = ($GLOBALS['Data_Foldable_intercalate'])($GLOBALS['Data_List_Types_foldableList'], $GLOBALS['Data_Monoid_monoidString']);

// Data_List_Types_foldableNonEmptyList
$Data_List_Types_foldableNonEmptyList = ($GLOBALS['Data_NonEmpty_foldableNonEmpty'])($GLOBALS['Data_List_Types_foldableList']);

// Data_List_Types_foldableWithIndexList
$Data_List_Types_foldableWithIndexList = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__body = function($f, $b, $xs) {
    $rev = ($GLOBALS['Data_List_Types_foldl'])((function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$acc = ($__case_0)->values[1];
return (function() use ($i, $acc) {
  $__fn = function($a) use ($i, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_List_Types_add'])($i, 1), ($GLOBALS['Data_List_Types_Cons'])($a, $acc));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $v = ($rev)(($GLOBALS['Data_Tuple_Tuple'])(0, $GLOBALS['Data_List_Types_Nil']), $xs);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$len = ($__case_0)->values[0];
$revList = ($__case_0)->values[1];
return ($GLOBALS['Data_Tuple_snd'])(($GLOBALS['Data_List_Types_foldl'])((function() use ($f) {
  $__body = function($v1) use ($f) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$b__prime__ = ($__case_0)->values[1];
return (function() use ($i, $f, $b__prime__) {
  $__fn = function($a) use ($i, $f, $b__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_List_Types_sub'])($i, 1), ($f)(($GLOBALS['Data_List_Types_sub'])($i, 1), $a, $b__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Tuple_Tuple'])($len, $b), $revList));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $b = null, $xs = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $b, $xs);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $acc = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Types_compose'])($GLOBALS['Data_Tuple_snd'], ($GLOBALS['Data_List_Types_foldl'])((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return (function() use ($i, $f, $b) {
  $__fn = function($a) use ($i, $f, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_List_Types_add'])($i, 1), ($f)($i, $b, $a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Tuple_Tuple'])(0, $acc)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append2 = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($append2, $mempty) {
  $__fn = function($f) use ($append2, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($GLOBALS['Data_List_Types_foldableWithIndexList'], (function() use ($append2, $f) {
  $__fn = function($i, $acc = null) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Types_compose'])(($append2)($acc), ($f)($i));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_foldableList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_foldableWithIndexNonEmpty
$Data_List_Types_foldableWithIndexNonEmpty = ($GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'])($GLOBALS['Data_List_Types_foldableWithIndexList']);

// Data_List_Types_foldMapWithIndex
$Data_List_Types_foldMapWithIndex = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty']);

// Data_List_Types_foldlWithIndex
$Data_List_Types_foldlWithIndex = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty']);

// Data_List_Types_foldrWithIndex
$Data_List_Types_foldrWithIndex = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty']);

// Data_List_Types_foldrWithIndex1
$Data_List_Types_foldrWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($GLOBALS['Data_List_Types_foldableWithIndexList']);

// Data_List_Types_foldlWithIndex1
$Data_List_Types_foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($GLOBALS['Data_List_Types_foldableWithIndexList']);

// Data_List_Types_foldableWithIndexNonEmptyList
$Data_List_Types_foldableWithIndexNonEmptyList = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex1 = ($GLOBALS['Data_List_Types_foldMapWithIndex'])($dictMonoid);
    $__res = (function() use ($foldMapWithIndex1) {
  $__body = function($f, $v) use ($foldMapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($foldMapWithIndex1)(($GLOBALS['Data_List_Types_compose'])($f1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Types_add'])(1))), $ne);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__body = function($f, $b, $v) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return ($GLOBALS['Data_List_Types_foldlWithIndex'])(($GLOBALS['Data_List_Types_compose'])($f1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Types_add'])(1))), $b1, $ne);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $b = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldrWithIndex" => (function() {
  $__body = function($f, $b, $v) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
return ($GLOBALS['Data_List_Types_foldrWithIndex'])(($GLOBALS['Data_List_Types_compose'])($f1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Types_add'])(1))), $b1, $ne);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $b = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $b, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_foldableNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_functorWithIndexList
$Data_List_Types_functorWithIndexList = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_foldrWithIndex1'])((function() use ($f) {
  $__fn = function($i, $x = null, $acc = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_List_Types_Cons'])(($f)($i, $x), $acc);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_List_Types_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_mapWithIndex
$Data_List_Types_mapWithIndex = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])(($GLOBALS['Data_NonEmpty_functorWithIndex'])($GLOBALS['Data_List_Types_functorWithIndexList']));

// Data_List_Types_functorWithIndexNonEmptyList
$Data_List_Types_functorWithIndexNonEmptyList = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__body = function($fn, $v) {
    $__case_0 = $fn;
    $__case_1 = $v;
    if (true) {
$fn1 = $__case_0;
$ne = $__case_1;
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_List_Types_mapWithIndex'])(($GLOBALS['Data_List_Types_compose'])($fn1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Types_add'])(1))), $ne));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($fn, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($fn, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_semigroupList
$Data_List_Types_semigroupList = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Types_foldr'])($GLOBALS['Data_List_Types_Cons'], $ys, $xs);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_append1
$Data_List_Types_append1 = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_List_Types_semigroupList']);

// Data_List_Types_monoidList
$Data_List_Types_monoidList = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => $GLOBALS['Data_List_Types_Nil'], "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_semigroupList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_semigroupNonEmptyList
$Data_List_Types_semigroupNonEmptyList = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $as__prime__) {
    $__case_0 = $v;
    $__case_1 = $as__prime__;
    if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$as__prime__1 = $__case_1;
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($a, ($GLOBALS['Data_List_Types_append1'])($as, ($GLOBALS['Data_List_Types_toList'])($as__prime__1))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $as__prime__ = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $as__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_showList
$Data_List_Types_showList = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return "Nil";
} else {
if (true) {
$xs = $__case_0;
return ($GLOBALS['Data_List_Types_append'])("(", ($GLOBALS['Data_List_Types_append'])(($GLOBALS['Data_List_Types_intercalate'])(" : ", ($GLOBALS['Data_List_Types_map'])($show, $xs)), " : Nil)"));
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Types_showNonEmptyList
$Data_List_Types_showNonEmptyList = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_NonEmpty_showNonEmpty'])($dictShow, ($GLOBALS['Data_List_Types_showList'])($dictShow)));
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($GLOBALS['Data_List_Types_append'])("(NonEmptyList ", ($GLOBALS['Data_List_Types_append'])(($show)($nel), ")"));
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

// Data_List_Types_traversableList
$Data_List_Types_traversableList = ($GLOBALS['Data_Traversable_Traversable__dollar__Dict'])((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Apply0 = (($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']);
$map1 = ($GLOBALS['Data_Functor_map'])((($Apply0)->Functor0)($GLOBALS['Prim_undefined']));
$lift2 = ($GLOBALS['Control_Apply_lift2'])($Apply0);
$pure1 = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($map1, $lift2, $pure1) {
  $__fn = function($f) use ($map1, $lift2, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_compose'])(($map1)(($GLOBALS['Data_List_Types_foldl'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Types_Cons']), $GLOBALS['Data_List_Types_Nil'])), ($GLOBALS['Data_List_Types_foldl'])((function() use ($lift2, $f) {
  $__fn = function($acc) use ($lift2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_compose'])(($lift2)(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Types_Cons']), $acc), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($pure1)($GLOBALS['Data_List_Types_Nil'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_List_Types_traversableList'], $dictApplicative, $GLOBALS['Data_List_Types_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_foldableList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_traversableNonEmptyList
$Data_List_Types_traversableNonEmptyList = ($GLOBALS['Data_NonEmpty_traversableNonEmpty'])($GLOBALS['Data_List_Types_traversableList']);

// Data_List_Types_traversableWithIndexList
$Data_List_Types_traversableWithIndexList = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Apply0 = (($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']);
$map1 = ($GLOBALS['Data_Functor_map'])((($Apply0)->Functor0)($GLOBALS['Prim_undefined']));
$lift2 = ($GLOBALS['Control_Apply_lift2'])($Apply0);
$pure1 = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($map1, $lift2, $pure1) {
  $__fn = function($f) use ($map1, $lift2, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$rev = ($GLOBALS['Data_List_Types_foldl'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Types_Cons']), $GLOBALS['Data_List_Types_Nil']);
    $__res = ($GLOBALS['Data_List_Types_compose'])(($map1)($rev), ($GLOBALS['Data_List_Types_foldlWithIndex1'])((function() use ($lift2, $f) {
  $__fn = function($i, $acc = null) use ($lift2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Types_compose'])(($lift2)(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Types_Cons']), $acc), ($f)($i));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($pure1)($GLOBALS['Data_List_Types_Nil'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorWithIndexList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_foldableWithIndexList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_traversableList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_traverseWithIndex
$Data_List_Types_traverseWithIndex = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])(($GLOBALS['Data_NonEmpty_traversableWithIndexNonEmpty'])($GLOBALS['Data_List_Types_traversableWithIndexList']));

// Data_List_Types_traversableWithIndexNonEmptyList
$Data_List_Types_traversableWithIndexNonEmptyList = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$traverseWithIndex1 = ($GLOBALS['Data_List_Types_traverseWithIndex'])($dictApplicative);
    $__res = (function() use ($map1, $traverseWithIndex1) {
  $__body = function($f, $v) use ($map1, $traverseWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($map1)($GLOBALS['Data_List_Types_NonEmptyList'], ($traverseWithIndex1)(($GLOBALS['Data_List_Types_compose'])($f1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Types_add'])(1))), $ne));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $traverseWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorWithIndexNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_foldableWithIndexNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_traversableNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_unfoldable1List
$Data_List_Types_unfoldable1List = ($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'])((object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($f, &$go) {
  $__fn = function($source, $memo = null) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$v = ($f)($source);
$__case_0 = $v;
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Just"))) {
$one = ($__case_0)->values[0];
$rest = (($__case_0)->values[1])->values[0];
$__tco_tmp_0 = $rest;
$__tco_tmp_1 = ($GLOBALS['Data_List_Types_Cons'])($one, $memo);
$source = $__tco_tmp_0;
$memo = $__tco_tmp_1;
continue;
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Nothing"))) {
$one = ($__case_0)->values[0];
return ($GLOBALS['Data_List_Types_foldl'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Types_Cons']), $GLOBALS['Data_List_Types_Nil'], ($GLOBALS['Data_List_Types_Cons'])($one, $memo));
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
    $__res = ($go)($b, $GLOBALS['Data_List_Types_Nil']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_unfoldableList
$Data_List_Types_unfoldableList = ($GLOBALS['Data_Unfoldable_Unfoldable__dollar__Dict'])((object)["unfoldr" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($f, &$go) {
  $__fn = function($source, $memo = null) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$v = ($f)($source);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_List_Types_foldl'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Types_Cons']), $GLOBALS['Data_List_Types_Nil'], $memo);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$one = (($__case_0)->values[0])->values[0];
$rest = (($__case_0)->values[0])->values[1];
$__tco_tmp_0 = $rest;
$__tco_tmp_1 = ($GLOBALS['Data_List_Types_Cons'])($one, $memo);
$source = $__tco_tmp_0;
$memo = $__tco_tmp_1;
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
    $__res = ($go)($b, $GLOBALS['Data_List_Types_Nil']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_unfoldable1List'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_unfoldable1NonEmptyList
$Data_List_Types_unfoldable1NonEmptyList = ($GLOBALS['Data_NonEmpty_unfoldable1NonEmpty'])($GLOBALS['Data_List_Types_unfoldableList']);

// Data_List_Types_foldable1NonEmptyList
$Data_List_Types_foldable1NonEmptyList = ($GLOBALS['Data_NonEmpty_foldable1NonEmpty'])($GLOBALS['Data_List_Types_foldableList']);

// Data_List_Types_extendNonEmptyList
$Data_List_Types_extendNonEmptyList = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$w = $__case_1;
$as = ($__case_1)->values[1];
$go = (function() use ($f1) {
  $__body = function($a, $v1) use ($f1) {
    $__case_0 = $a;
    $__case_1 = $v1;
    if ((is_object)($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
return (object)["val" => ($GLOBALS['Data_List_Types_Cons'])(($f1)(($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($a1, $acc))), $val), "acc" => ($GLOBALS['Data_List_Types_Cons'])($a1, $acc)];
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v1 = null) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])(($f1)($w), (($GLOBALS['Data_List_Types_foldr'])($go, (object)["val" => $GLOBALS['Data_List_Types_Nil'], "acc" => $GLOBALS['Data_List_Types_Nil']], $as))->val));
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_extendList
$Data_List_Types_extendList = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if ((($__case_1)->tag === "Cons")) {
$f = $__case_0;
$l = $__case_1;
$as = ($__case_1)->values[1];
$go = (function() use ($f) {
  $__body = function($a__prime__, $v2) use ($f) {
    $__case_0 = $a__prime__;
    $__case_1 = $v2;
    if ((is_object)($__case_1)) {
$a__prime__1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
$acc__prime__ = ($GLOBALS['Data_List_Types_Cons'])($a__prime__1, $acc);
return (object)["val" => ($GLOBALS['Data_List_Types_Cons'])(($f)($acc__prime__), $val), "acc" => $acc__prime__];
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a__prime__, $v2 = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a__prime__, $v2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Data_List_Types_Cons'])(($f)($l), (($GLOBALS['Data_List_Types_foldr'])($go, (object)["val" => $GLOBALS['Data_List_Types_Nil'], "acc" => $GLOBALS['Data_List_Types_Nil']], $as))->val);
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_eq1List
$Data_List_Types_eq1List = ($GLOBALS['Data_Eq_Eq1__dollar__Dict'])((object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq) {
  $__fn = function($xs, $ys = null) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use (&$go, $eq) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_2 === false)) {
return false;
} else {
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
$acc = $__case_2;
return $acc;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
$y = ($__case_1)->values[0];
$ys__prime__ = ($__case_1)->values[1];
$acc = $__case_2;
$__tco_tmp_0 = $xs__prime__;
$__tco_tmp_1 = $ys__prime__;
$__tco_tmp_2 = ($GLOBALS['Data_List_Types_conj'])($acc, ($eq)($y, $x));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($xs, $ys, true);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_eq1
$Data_List_Types_eq1 = ($GLOBALS['Data_Eq_eq1'])($GLOBALS['Data_List_Types_eq1List']);

// Data_List_Types_eqNonEmpty
$Data_List_Types_eqNonEmpty = ($GLOBALS['Data_NonEmpty_eqNonEmpty'])($GLOBALS['Data_List_Types_eq1List']);

// Data_List_Types_eq1NonEmptyList
$Data_List_Types_eq1NonEmptyList = ($GLOBALS['Data_NonEmpty_eq1NonEmpty'])($GLOBALS['Data_List_Types_eq1List']);

// Data_List_Types_eqList
$Data_List_Types_eqList = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => ($GLOBALS['Data_List_Types_eq1'])($dictEq)]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Types_eqNonEmptyList
$Data_List_Types_eqNonEmptyList = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_eqNonEmpty'])($dictEq);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Types_ord1List
$Data_List_Types_ord1List = ($GLOBALS['Data_Ord_Ord1__dollar__Dict'])((object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($xs, $ys = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($compare, &$go) {
  $__fn = function($v, $v1 = null) use ($compare, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Nil")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
$y = ($__case_1)->values[0];
$ys__prime__ = ($__case_1)->values[1];
$v2 = ($compare)($x, $y);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
$__tco_tmp_0 = $xs__prime__;
$__tco_tmp_1 = $ys__prime__;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_eq1List'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_compare1
$Data_List_Types_compare1 = ($GLOBALS['Data_Ord_compare1'])($GLOBALS['Data_List_Types_ord1List']);

// Data_List_Types_ordNonEmpty
$Data_List_Types_ordNonEmpty = ($GLOBALS['Data_NonEmpty_ordNonEmpty'])($GLOBALS['Data_List_Types_ord1List']);

// Data_List_Types_ord1NonEmptyList
$Data_List_Types_ord1NonEmptyList = ($GLOBALS['Data_NonEmpty_ord1NonEmpty'])($GLOBALS['Data_List_Types_ord1List']);

// Data_List_Types_ordList
$Data_List_Types_ordList = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eqList1 = ($GLOBALS['Data_List_Types_eqList'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($GLOBALS['Data_List_Types_compare1'])($dictOrd), "Eq0" => (function() use ($eqList1) {
  $__fn = function($__dollar____unused) use ($eqList1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqList1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Types_ordNonEmptyList
$Data_List_Types_ordNonEmptyList = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_ordNonEmpty'])($dictOrd);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Types_comonadNonEmptyList
$Data_List_Types_comonadNonEmptyList = ($GLOBALS['Control_Comonad_Comonad__dollar__Dict'])((object)["extract" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
return $a;
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
})(), "Extend0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_extendNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_applyList
$Data_List_Types_applyList = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$f = ($__case_0)->values[0];
$fs = ($__case_0)->values[1];
$xs = $__case_1;
return ($GLOBALS['Data_List_Types_append1'])(($GLOBALS['Data_List_Types_map'])($f, $xs), ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_List_Types_applyList'], $fs, $xs));
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_apply
$Data_List_Types_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_List_Types_applyList']);

// Data_List_Types_applyNonEmptyList
$Data_List_Types_applyNonEmptyList = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$f = ($__case_0)->values[0];
$fs = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
$as = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])(($f)($a), ($GLOBALS['Data_List_Types_append1'])(($GLOBALS['Data_List_Types_apply'])($fs, ($GLOBALS['Data_List_Types_Cons'])($a, $GLOBALS['Data_List_Types_Nil'])), ($GLOBALS['Data_List_Types_apply'])(($GLOBALS['Data_List_Types_Cons'])($f, $fs), $as))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_bindList
$Data_List_Types_bindList = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$f = $__case_1;
return ($GLOBALS['Data_List_Types_append1'])(($f)($x), ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_List_Types_bindList'], $xs, $f));
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
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_applyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_bind
$Data_List_Types_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_List_Types_bindList']);

// Data_List_Types_bindNonEmptyList
$Data_List_Types_bindNonEmptyList = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() {
  $__body = function($v, $f) {
    $__case_0 = $v;
    $__case_1 = $f;
    if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$f1 = $__case_1;
$v1 = ($f1)($a);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$b = ($__case_0)->values[0];
$bs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Types_NonEmptyList'])(($GLOBALS['Data_NonEmpty_NonEmpty'])($b, ($GLOBALS['Data_List_Types_append1'])($bs, ($GLOBALS['Data_List_Types_bind'])($as, ($GLOBALS['Data_List_Types_compose'])($GLOBALS['Data_List_Types_toList'], $f1)))));
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_applyNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_applicativeList
$Data_List_Types_applicativeList = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_Cons'])($a, $GLOBALS['Data_List_Types_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_applyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_monadList
$Data_List_Types_monadList = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_applicativeList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_bindList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_altNonEmptyList
$Data_List_Types_altNonEmptyList = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_List_Types_semigroupNonEmptyList']), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_altList
$Data_List_Types_altList = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => $GLOBALS['Data_List_Types_append1'], "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_plusList
$Data_List_Types_plusList = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => $GLOBALS['Data_List_Types_Nil'], "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_altList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_alternativeList
$Data_List_Types_alternativeList = ($GLOBALS['Control_Alternative_Alternative__dollar__Dict'])((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_applicativeList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_plusList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_monadPlusList
$Data_List_Types_monadPlusList = ($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'])((object)["Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_monadList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_alternativeList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_applicativeNonEmptyList
$Data_List_Types_applicativeNonEmptyList = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => ($GLOBALS['Data_List_Types_compose'])($GLOBALS['Data_List_Types_NonEmptyList'], ($GLOBALS['Data_NonEmpty_singleton'])($GLOBALS['Data_List_Types_plusList'])), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_applyNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_pure
$Data_List_Types_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_List_Types_applicativeNonEmptyList']);

// Data_List_Types_monadNonEmptyList
$Data_List_Types_monadNonEmptyList = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_applicativeNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_bindNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Types_traversable1NonEmptyList
$Data_List_Types_traversable1NonEmptyList = ($GLOBALS['Data_Semigroup_Traversable_Traversable1__dollar__Dict'])((object)["traverse1" => (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Functor0 = (($dictApply)->Functor0)($GLOBALS['Prim_undefined']);
$mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'])($Functor0);
$lift2 = ($GLOBALS['Control_Apply_lift2'])($dictApply);
$map1 = ($GLOBALS['Data_Functor_map'])($Functor0);
    $__res = (function() use ($mapFlipped, $lift2, $map1) {
  $__body = function($f, $v) use ($mapFlipped, $lift2, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "NonEmpty")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$as = ($__case_1)->values[1];
return ($mapFlipped)(($GLOBALS['Data_List_Types_foldl'])((function() use ($lift2, $f1) {
  $__fn = function($acc) use ($lift2, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Types_compose'])(($lift2)(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Types_nelCons']), $acc), $f1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($map1)($GLOBALS['Data_List_Types_pure'], ($f1)($a)), $as), (function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Types_foldl'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Types_nelCons']), ($GLOBALS['Data_List_Types_pure'])($x), $xs);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapFlipped, $lift2, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence1" => (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Traversable_traverse1'])($GLOBALS['Data_List_Types_traversable1NonEmptyList'], $dictApply, $GLOBALS['Data_List_Types_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_foldable1NonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Types_traversableNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

