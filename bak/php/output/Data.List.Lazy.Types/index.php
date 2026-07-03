<?php

namespace Data\List\Lazy\Types;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
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
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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


// Data_List_Lazy_Types_compose
$Data_List_Lazy_Types_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_List_Lazy_Types_unwrap
$Data_List_Lazy_Types_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_List_Lazy_Types_map
$Data_List_Lazy_Types_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Lazy_functorLazy']);

// Data_List_Lazy_Types_eq1
$Data_List_Lazy_Types_eq1 = ($GLOBALS['Data_Eq_eq1'])($GLOBALS['Data_Lazy_eq1Lazy']);

// Data_List_Lazy_Types_compare1
$Data_List_Lazy_Types_compare1 = ($GLOBALS['Data_Ord_compare1'])($GLOBALS['Data_Lazy_ord1Lazy']);

// Data_List_Lazy_Types_append
$Data_List_Lazy_Types_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_List_Lazy_Types_add
$Data_List_Lazy_Types_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_List_Lazy_Types_sub
$Data_List_Lazy_Types_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_List_Lazy_Types_identity
$Data_List_Lazy_Types_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_List_Lazy_Types_List
$Data_List_Lazy_Types_List = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_Nil
$Data_List_Lazy_Types_Nil = (object)["tag" => "Nil", "values" => []];

// Data_List_Lazy_Types_Cons
$Data_List_Lazy_Types_Cons = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Cons", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_NonEmptyList
$Data_List_Lazy_Types_NonEmptyList = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_nil
$Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_Lazy_defer'])((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_Nil'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));

// Data_List_Lazy_Types_newtypeNonEmptyList
$Data_List_Lazy_Types_newtypeNonEmptyList = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_newtypeList
$Data_List_Lazy_Types_newtypeList = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_step
$Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_compose'])($GLOBALS['Data_Lazy_force'], $GLOBALS['Data_List_Lazy_Types_unwrap']);

// Data_List_Lazy_Types_semigroupList
$Data_List_Lazy_Types_semigroupList = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($ys) {
  $__body = function($v) use ($ys) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return ($GLOBALS['Data_List_Lazy_Types_step'])($ys);
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])($x, ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_List_Lazy_Types_semigroupList'], $xs__prime__, $ys));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($ys, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_Types_map'])($go, ($GLOBALS['Data_List_Lazy_Types_unwrap'])($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_append1
$Data_List_Lazy_Types_append1 = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_List_Lazy_Types_semigroupList']);

// Data_List_Lazy_Types_monoidList
$Data_List_Lazy_Types_monoidList = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => $GLOBALS['Data_List_Lazy_Types_nil'], "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_semigroupList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_lazyList
$Data_List_Lazy_Types_lazyList = ($GLOBALS['Control_Lazy_Lazy__dollar__Dict'])((object)["defer" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_Lazy_defer'])(($GLOBALS['Data_List_Lazy_Types_compose'])($GLOBALS['Data_List_Lazy_Types_step'], $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_defer
$Data_List_Lazy_Types_defer = ($GLOBALS['Control_Lazy_defer'])($GLOBALS['Data_List_Lazy_Types_lazyList']);

// Data_List_Lazy_Types_functorList
$Data_List_Lazy_Types_functorList = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__fn = function($f, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_Cons'])(($f)($x), ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_List_Lazy_Types_functorList'], $f, $xs__prime__));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_Types_map'])($go, ($GLOBALS['Data_List_Lazy_Types_unwrap'])($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_map1
$Data_List_Lazy_Types_map1 = ($GLOBALS['Data_Functor_map'])(($GLOBALS['Data_NonEmpty_functorNonEmpty'])($GLOBALS['Data_List_Lazy_Types_functorList']));

// Data_List_Lazy_Types_functorNonEmptyList
$Data_List_Lazy_Types_functorNonEmptyList = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$nel = $__case_1;
return ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_List_Lazy_Types_map'])(($GLOBALS['Data_List_Lazy_Types_map1'])($f1), $nel));
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
})()]);

// Data_List_Lazy_Types_eq1List
$Data_List_Lazy_Types_eq1List = ($GLOBALS['Data_Eq_Eq1__dollar__Dict'])((object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
return true;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
$y = ($__case_1)->values[0];
$ys__prime__ = ($__case_1)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return false;
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
    $__res = ($go)(($GLOBALS['Data_List_Lazy_Types_step'])($xs), ($GLOBALS['Data_List_Lazy_Types_step'])($ys));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_eqNonEmpty
$Data_List_Lazy_Types_eqNonEmpty = ($GLOBALS['Data_NonEmpty_eqNonEmpty'])($GLOBALS['Data_List_Lazy_Types_eq1List']);

// Data_List_Lazy_Types_eq11
$Data_List_Lazy_Types_eq11 = ($GLOBALS['Data_Eq_eq1'])($GLOBALS['Data_List_Lazy_Types_eq1List']);

// Data_List_Lazy_Types_eq1NonEmptyList
$Data_List_Lazy_Types_eq1NonEmptyList = ($GLOBALS['Data_Eq_Eq1__dollar__Dict'])((object)["eq1" => (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq12 = ($GLOBALS['Data_List_Lazy_Types_eq1'])(($GLOBALS['Data_List_Lazy_Types_eqNonEmpty'])($dictEq));
    $__res = (function() use ($eq12) {
  $__body = function($v, $v1) use ($eq12) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$lhs = $__case_0;
$rhs = $__case_1;
return ($eq12)($lhs, $rhs);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($eq12, $__body, &$__fn) {
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
})()]);

// Data_List_Lazy_Types_eqList
$Data_List_Lazy_Types_eqList = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => ($GLOBALS['Data_List_Lazy_Types_eq11'])($dictEq)]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_eqNonEmptyList
$Data_List_Lazy_Types_eqNonEmptyList = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Lazy_eqLazy'])(($GLOBALS['Data_List_Lazy_Types_eqNonEmpty'])($dictEq));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_ord1List
$Data_List_Lazy_Types_ord1List = ($GLOBALS['Data_Ord_Ord1__dollar__Dict'])((object)["compare1" => (function() {
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
$__tco_tmp_0 = ($GLOBALS['Data_List_Lazy_Types_step'])($xs__prime__);
$__tco_tmp_1 = ($GLOBALS['Data_List_Lazy_Types_step'])($ys__prime__);
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
    $__res = ($go)(($GLOBALS['Data_List_Lazy_Types_step'])($xs), ($GLOBALS['Data_List_Lazy_Types_step'])($ys));
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
    $__res = $GLOBALS['Data_List_Lazy_Types_eq1List'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_ordNonEmpty
$Data_List_Lazy_Types_ordNonEmpty = ($GLOBALS['Data_NonEmpty_ordNonEmpty'])($GLOBALS['Data_List_Lazy_Types_ord1List']);

// Data_List_Lazy_Types_compare11
$Data_List_Lazy_Types_compare11 = ($GLOBALS['Data_Ord_compare1'])($GLOBALS['Data_List_Lazy_Types_ord1List']);

// Data_List_Lazy_Types_ord1NonEmptyList
$Data_List_Lazy_Types_ord1NonEmptyList = ($GLOBALS['Data_Ord_Ord1__dollar__Dict'])((object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare12 = ($GLOBALS['Data_List_Lazy_Types_compare1'])(($GLOBALS['Data_List_Lazy_Types_ordNonEmpty'])($dictOrd));
    $__res = (function() use ($compare12) {
  $__body = function($v, $v1) use ($compare12) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$lhs = $__case_0;
$rhs = $__case_1;
return ($compare12)($lhs, $rhs);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compare12, $__body, &$__fn) {
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
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_eq1NonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_ordList
$Data_List_Lazy_Types_ordList = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eqList1 = ($GLOBALS['Data_List_Lazy_Types_eqList'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($GLOBALS['Data_List_Lazy_Types_compare11'])($dictOrd), "Eq0" => (function() use ($eqList1) {
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

// Data_List_Lazy_Types_ordNonEmptyList
$Data_List_Lazy_Types_ordNonEmptyList = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Lazy_ordLazy'])(($GLOBALS['Data_List_Lazy_Types_ordNonEmpty'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_cons
$Data_List_Lazy_Types_cons = (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_Lazy_defer'])((function() use ($x, $xs) {
  $__fn = function($v) use ($x, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_Cons'])($x, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_foldableList
$Data_List_Lazy_Types_foldableList = ($GLOBALS['Data_Foldable_Foldable__dollar__Dict'])((object)["foldr" => (function() {
  $__fn = function($op, $z = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$rev = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Lazy_Types_foldableList'], ($GLOBALS['Data_Function_flip'])($GLOBALS['Data_List_Lazy_Types_cons']), $GLOBALS['Data_List_Lazy_Types_nil']);
    $__res = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Lazy_Types_foldableList'], ($GLOBALS['Data_Function_flip'])($op), $z, ($rev)($xs));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($op) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use (&$go, $op) {
  $__fn = function($b, $xs = null) use (&$go, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$v = ($GLOBALS['Data_List_Lazy_Types_step'])($xs);
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $b;
} else {
if ((($__case_0)->tag === "Cons")) {
$hd = ($__case_0)->values[0];
$tl = ($__case_0)->values[1];
$__tco_tmp_0 = ($op)($b, $hd);
$__tco_tmp_1 = $tl;
$b = $__tco_tmp_0;
$xs = $__tco_tmp_1;
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
    $__res = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Lazy_Types_foldableList'], (function() use ($append2, $f) {
  $__fn = function($b, $a = null) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($append2)($b, ($f)($a));
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
})()]);

// Data_List_Lazy_Types_foldr
$Data_List_Lazy_Types_foldr = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_List_Lazy_Types_foldableList']);

// Data_List_Lazy_Types_foldableNonEmpty
$Data_List_Lazy_Types_foldableNonEmpty = ($GLOBALS['Data_NonEmpty_foldableNonEmpty'])($GLOBALS['Data_List_Lazy_Types_foldableList']);

// Data_List_Lazy_Types_foldr1
$Data_List_Lazy_Types_foldr1 = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty']);

// Data_List_Lazy_Types_foldl
$Data_List_Lazy_Types_foldl = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty']);

// Data_List_Lazy_Types_foldMap
$Data_List_Lazy_Types_foldMap = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty']);

// Data_List_Lazy_Types_foldl1
$Data_List_Lazy_Types_foldl1 = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_List_Lazy_Types_foldableList']);

// Data_List_Lazy_Types_extendList
$Data_List_Lazy_Types_extendList = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() {
  $__body = function($f, $l) {
    $go = (function() use ($f) {
  $__body = function($a, $v) use ($f) {
    $__case_0 = $a;
    $__case_1 = $v;
    if ((is_object)($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
$acc__prime__ = ($GLOBALS['Data_List_Lazy_Types_cons'])($a1, $acc);
return (object)["val" => ($GLOBALS['Data_List_Lazy_Types_cons'])(($f)($acc__prime__), $val), "acc" => $acc__prime__];
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($a, $v = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $v = ($GLOBALS['Data_List_Lazy_Types_step'])($l);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$as = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_cons'])(($f)($l), (($GLOBALS['Data_List_Lazy_Types_foldr'])($go, (object)["val" => $GLOBALS['Data_List_Lazy_Types_nil'], "acc" => $GLOBALS['Data_List_Lazy_Types_nil']], $as))->val);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($f, $l = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $l);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_extendNonEmptyList
$Data_List_Lazy_Types_extendNonEmptyList = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
$nel = $__case_1;
$go = (function() use ($f1) {
  $__body = function($a, $v1) use ($f1) {
    $__case_0 = $a;
    $__case_1 = $v1;
    if ((is_object)($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
return (object)["val" => ($GLOBALS['Data_List_Lazy_Types_cons'])(($f1)(($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($a1, $acc) {
  $__fn = function($v2) use ($a1, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])($a1, $acc);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()))), $val), "acc" => ($GLOBALS['Data_List_Lazy_Types_cons'])($a1, $acc)];
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
$v1 = ($GLOBALS['Data_Lazy_force'])($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$as = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($f1, $w, $go, $as) {
  $__fn = function($v2) use ($f1, $w, $go, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])(($f1)($w), (($GLOBALS['Data_List_Lazy_Types_foldr'])($go, (object)["val" => $GLOBALS['Data_List_Lazy_Types_nil'], "acc" => $GLOBALS['Data_List_Lazy_Types_nil']], $as))->val);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_foldableNonEmptyList
$Data_List_Lazy_Types_foldableNonEmptyList = ($GLOBALS['Data_Foldable_Foldable__dollar__Dict'])((object)["foldr" => (function() {
  $__body = function($f, $b, $v) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$nel = $__case_2;
return ($GLOBALS['Data_List_Lazy_Types_foldr1'])($f1, $b1, ($GLOBALS['Data_Lazy_force'])($nel));
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
})(), "foldl" => (function() {
  $__body = function($f, $b, $v) {
    $__case_0 = $f;
    $__case_1 = $b;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$nel = $__case_2;
return ($GLOBALS['Data_List_Lazy_Types_foldl'])($f1, $b1, ($GLOBALS['Data_Lazy_force'])($nel));
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
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap1 = ($GLOBALS['Data_List_Lazy_Types_foldMap'])($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($f, $v) use ($foldMap1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$nel = $__case_1;
return ($foldMap1)($f1, ($GLOBALS['Data_Lazy_force'])($nel));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMap1, $__body, &$__fn) {
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
})()]);

// Data_List_Lazy_Types_showList
$Data_List_Lazy_Types_showList = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show) {
  $__fn = function($xs) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$v = ($GLOBALS['Data_List_Lazy_Types_step'])($xs);
$__case_0 = $v;
$__case_res_0 = null;
if ((($__case_0)->tag === "Nil")) {
$__case_res_0 = "";
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
$__case_res_0 = ($GLOBALS['Data_List_Lazy_Types_append'])(($show)($x), ($GLOBALS['Data_List_Lazy_Types_foldl1'])((function() use ($show) {
  $__fn = function($shown, $x__prime__ = null) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_Types_append'])($shown, ($GLOBALS['Data_List_Lazy_Types_append'])(",", ($show)($x__prime__)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "", $xs__prime__));
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($GLOBALS['Data_List_Lazy_Types_append'])("(fromFoldable [", ($GLOBALS['Data_List_Lazy_Types_append'])($__case_res_0, "])"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_showNonEmptyList
$Data_List_Lazy_Types_showNonEmptyList = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_Lazy_showLazy'])(($GLOBALS['Data_NonEmpty_showNonEmpty'])($dictShow, ($GLOBALS['Data_List_Lazy_Types_showList'])($dictShow))));
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($GLOBALS['Data_List_Lazy_Types_append'])("(NonEmptyList ", ($GLOBALS['Data_List_Lazy_Types_append'])(($show)($nel), ")"));
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

// Data_List_Lazy_Types_showStep
$Data_List_Lazy_Types_showStep = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])($dictShow);
$show1 = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_List_Lazy_Types_showList'])($dictShow));
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show, $show1) {
  $__body = function($v) use ($show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return "Nil";
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_append'])("(", ($GLOBALS['Data_List_Lazy_Types_append'])(($show)($x), ($GLOBALS['Data_List_Lazy_Types_append'])(" : ", ($GLOBALS['Data_List_Lazy_Types_append'])(($show1)($xs), ")"))));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($show, $show1, $__body, &$__fn) {
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

// Data_List_Lazy_Types_foldableWithIndexList
$Data_List_Lazy_Types_foldableWithIndexList = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__body = function($f, $b, $xs) {
    $rev = ($GLOBALS['Data_List_Lazy_Types_foldl1'])((function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$acc = ($__case_0)->values[1];
return (function() use ($i, $acc) {
  $__fn = function($a) use ($i, $acc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_List_Lazy_Types_add'])($i, 1), ($GLOBALS['Data_List_Lazy_Types_cons'])($a, $acc));
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
    $v = ($rev)(($GLOBALS['Data_Tuple_Tuple'])(0, $GLOBALS['Data_List_Lazy_Types_nil']), $xs);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$len = ($__case_0)->values[0];
$revList = ($__case_0)->values[1];
return ($GLOBALS['Data_Tuple_snd'])(($GLOBALS['Data_List_Lazy_Types_foldl1'])((function() use ($f) {
  $__body = function($v1) use ($f) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$b__prime__ = ($__case_0)->values[1];
return (function() use ($i, $f, $b__prime__) {
  $__fn = function($a) use ($i, $f, $b__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_List_Lazy_Types_sub'])($i, 1), ($f)(($GLOBALS['Data_List_Lazy_Types_sub'])($i, 1), $a, $b__prime__));
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
    $__res = ($GLOBALS['Data_List_Lazy_Types_compose'])($GLOBALS['Data_Tuple_snd'], ($GLOBALS['Data_List_Lazy_Types_foldl1'])((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return (function() use ($i, $f, $b) {
  $__fn = function($a) use ($i, $f, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_List_Lazy_Types_add'])($i, 1), ($f)($i, $b, $a));
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
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'], (function() use ($append2, $f) {
  $__fn = function($i, $acc = null) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_Types_compose'])(($append2)($acc), ($f)($i));
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
    $__res = $GLOBALS['Data_List_Lazy_Types_foldableList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_foldableWithIndexNonEmpty
$Data_List_Lazy_Types_foldableWithIndexNonEmpty = ($GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'])($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList']);

// Data_List_Lazy_Types_foldMapWithIndex
$Data_List_Lazy_Types_foldMapWithIndex = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty']);

// Data_List_Lazy_Types_foldlWithIndex
$Data_List_Lazy_Types_foldlWithIndex = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty']);

// Data_List_Lazy_Types_foldrWithIndex
$Data_List_Lazy_Types_foldrWithIndex = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty']);

// Data_List_Lazy_Types_foldrWithIndex1
$Data_List_Lazy_Types_foldrWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList']);

// Data_List_Lazy_Types_foldableWithIndexNonEmptyList
$Data_List_Lazy_Types_foldableWithIndexNonEmptyList = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex1 = ($GLOBALS['Data_List_Lazy_Types_foldMapWithIndex'])($dictMonoid);
    $__res = (function() use ($foldMapWithIndex1) {
  $__body = function($f, $v) use ($foldMapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($foldMapWithIndex1)(($GLOBALS['Data_List_Lazy_Types_compose'])($f1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Lazy_Types_add'])(1))), ($GLOBALS['Data_Lazy_force'])($ne));
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
return ($GLOBALS['Data_List_Lazy_Types_foldlWithIndex'])(($GLOBALS['Data_List_Lazy_Types_compose'])($f1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Lazy_Types_add'])(1))), $b1, ($GLOBALS['Data_Lazy_force'])($ne));
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
return ($GLOBALS['Data_List_Lazy_Types_foldrWithIndex'])(($GLOBALS['Data_List_Lazy_Types_compose'])($f1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Lazy_Types_add'])(1))), $b1, ($GLOBALS['Data_Lazy_force'])($ne));
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
    $__res = $GLOBALS['Data_List_Lazy_Types_foldableNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_functorWithIndexList
$Data_List_Lazy_Types_functorWithIndexList = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_foldrWithIndex1'])((function() use ($f) {
  $__fn = function($i, $x = null, $acc = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_List_Lazy_Types_cons'])(($f)($i, $x), $acc);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_List_Lazy_Types_nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_mapWithIndex
$Data_List_Lazy_Types_mapWithIndex = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])(($GLOBALS['Data_NonEmpty_functorWithIndex'])($GLOBALS['Data_List_Lazy_Types_functorWithIndexList']));

// Data_List_Lazy_Types_functorWithIndexNonEmptyList
$Data_List_Lazy_Types_functorWithIndexNonEmptyList = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($f1, $ne) {
  $__fn = function($v1) use ($f1, $ne, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_mapWithIndex'])(($GLOBALS['Data_List_Lazy_Types_compose'])($f1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Lazy_Types_add'])(1))), ($GLOBALS['Data_Lazy_force'])($ne));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
    $__res = $GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_toList
$Data_List_Lazy_Types_toList = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($GLOBALS['Data_List_Lazy_Types_defer'])((function() use ($nel) {
  $__body = function($v1) use ($nel) {
    $v2 = ($GLOBALS['Data_Lazy_force'])($nel);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_cons'])($x, $xs);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($nel, $__body, &$__fn) {
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_Types_semigroupNonEmptyList
$Data_List_Lazy_Types_semigroupNonEmptyList = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $as__prime__) {
    $__case_0 = $v;
    $__case_1 = $as__prime__;
    if (true) {
$neas = $__case_0;
$as__prime__1 = $__case_1;
$v1 = ($GLOBALS['Data_Lazy_force'])($neas);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($a, $as, $as__prime__1) {
  $__fn = function($v2) use ($a, $as, $as__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])($a, ($GLOBALS['Data_List_Lazy_Types_append1'])($as, ($GLOBALS['Data_List_Lazy_Types_toList'])($as__prime__1)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Lazy_Types_traversableList
$Data_List_Lazy_Types_traversableList = ($GLOBALS['Data_Traversable_Traversable__dollar__Dict'])((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Apply0 = (($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']);
$apply1 = ($GLOBALS['Control_Apply_apply'])($Apply0);
$map2 = ($GLOBALS['Data_Functor_map'])((($Apply0)->Functor0)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($apply1, $map2, $pure) {
  $__fn = function($f) use ($apply1, $map2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_foldr'])((function() use ($apply1, $map2, $f) {
  $__fn = function($a, $b = null) use ($apply1, $map2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($apply1)(($map2)($GLOBALS['Data_List_Lazy_Types_cons'], ($f)($a)), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($pure)($GLOBALS['Data_List_Lazy_Types_nil']));
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
    $__res = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_List_Lazy_Types_traversableList'], $dictApplicative, $GLOBALS['Data_List_Lazy_Types_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_foldableList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_traversableNonEmpty
$Data_List_Lazy_Types_traversableNonEmpty = ($GLOBALS['Data_NonEmpty_traversableNonEmpty'])($GLOBALS['Data_List_Lazy_Types_traversableList']);

// Data_List_Lazy_Types_traverse
$Data_List_Lazy_Types_traverse = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_List_Lazy_Types_traversableNonEmpty']);

// Data_List_Lazy_Types_sequence
$Data_List_Lazy_Types_sequence = ($GLOBALS['Data_Traversable_sequence'])($GLOBALS['Data_List_Lazy_Types_traversableNonEmpty']);

// Data_List_Lazy_Types_traversableNonEmptyList
$Data_List_Lazy_Types_traversableNonEmptyList = ($GLOBALS['Data_Traversable_Traversable__dollar__Dict'])((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map2 = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$traverse1 = ($GLOBALS['Data_List_Lazy_Types_traverse'])($dictApplicative);
    $__res = (function() use ($map2, $traverse1) {
  $__body = function($f, $v) use ($map2, $traverse1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$nel = $__case_1;
return ($map2)((function() {
  $__fn = function($xxs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($xxs) {
  $__fn = function($v1) use ($xxs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $xxs;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($traverse1)($f1, ($GLOBALS['Data_Lazy_force'])($nel)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $traverse1, $__body, &$__fn) {
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
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map2 = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$sequence1 = ($GLOBALS['Data_List_Lazy_Types_sequence'])($dictApplicative);
    $__res = (function() use ($map2, $sequence1) {
  $__body = function($v) use ($map2, $sequence1) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($map2)((function() {
  $__fn = function($xxs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($xxs) {
  $__fn = function($v1) use ($xxs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $xxs;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($sequence1)(($GLOBALS['Data_Lazy_force'])($nel)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map2, $sequence1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_foldableNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_traversableWithIndexList
$Data_List_Lazy_Types_traversableWithIndexList = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Apply0 = (($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']);
$apply1 = ($GLOBALS['Control_Apply_apply'])($Apply0);
$map2 = ($GLOBALS['Data_Functor_map'])((($Apply0)->Functor0)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($apply1, $map2, $pure) {
  $__fn = function($f) use ($apply1, $map2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_foldrWithIndex1'])((function() use ($apply1, $map2, $f) {
  $__fn = function($i, $a = null, $b = null) use ($apply1, $map2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($apply1)(($map2)($GLOBALS['Data_List_Lazy_Types_cons'], ($f)($i, $a)), $b);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($pure)($GLOBALS['Data_List_Lazy_Types_nil']));
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
    $__res = $GLOBALS['Data_List_Lazy_Types_functorWithIndexList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_traversableList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_traverseWithIndex
$Data_List_Lazy_Types_traverseWithIndex = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])(($GLOBALS['Data_NonEmpty_traversableWithIndexNonEmpty'])($GLOBALS['Data_List_Lazy_Types_traversableWithIndexList']));

// Data_List_Lazy_Types_traversableWithIndexNonEmptyList
$Data_List_Lazy_Types_traversableWithIndexNonEmptyList = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map2 = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$traverseWithIndex1 = ($GLOBALS['Data_List_Lazy_Types_traverseWithIndex'])($dictApplicative);
    $__res = (function() use ($map2, $traverseWithIndex1) {
  $__body = function($f, $v) use ($map2, $traverseWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$ne = $__case_1;
return ($map2)((function() {
  $__fn = function($xxs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($xxs) {
  $__fn = function($v1) use ($xxs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $xxs;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($traverseWithIndex1)(($GLOBALS['Data_List_Lazy_Types_compose'])($f1, ($GLOBALS['Data_Maybe_maybe'])(0, ($GLOBALS['Data_List_Lazy_Types_add'])(1))), ($GLOBALS['Data_Lazy_force'])($ne)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $traverseWithIndex1, $__body, &$__fn) {
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
    $__res = $GLOBALS['Data_List_Lazy_Types_functorWithIndexNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_traversableNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_unfoldable1List
$Data_List_Lazy_Types_unfoldable1List = ($go = (function() use (&$go) {
  $__fn = function($f, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
return ($GLOBALS['Data_List_Lazy_Types_defer'])((function() use ($f, $b, &$go) {
  $__body = function($v) use ($f, $b, &$go) {
    $v1 = ($f)($b);
    $__case_0 = $v1;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Just"))) {
$a = ($__case_0)->values[0];
$b__prime__ = (($__case_0)->values[1])->values[0];
return ($GLOBALS['Data_List_Lazy_Types_cons'])($a, ($go)($f, $b__prime__));
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Nothing"))) {
$a = ($__case_0)->values[0];
return ($GLOBALS['Data_List_Lazy_Types_cons'])($a, $GLOBALS['Data_List_Lazy_Types_nil']);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($f, $b, &$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
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
return ($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'])((object)["unfoldr1" => $go]);)();

// Data_List_Lazy_Types_unfoldableList
$Data_List_Lazy_Types_unfoldableList = ($go = (function() use (&$go) {
  $__fn = function($f, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
return ($GLOBALS['Data_List_Lazy_Types_defer'])((function() use ($f, $b, &$go) {
  $__body = function($v) use ($f, $b, &$go) {
    $v1 = ($f)($b);
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
return $GLOBALS['Data_List_Lazy_Types_nil'];
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$b__prime__ = (($__case_0)->values[0])->values[1];
return ($GLOBALS['Data_List_Lazy_Types_cons'])($a, ($go)($f, $b__prime__));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($f, $b, &$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
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
return ($GLOBALS['Data_Unfoldable_Unfoldable__dollar__Dict'])((object)["unfoldr" => $go, "Unfoldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_unfoldable1List'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);)();

// Data_List_Lazy_Types_unfoldr1
$Data_List_Lazy_Types_unfoldr1 = ($GLOBALS['Data_Unfoldable1_unfoldr1'])(($GLOBALS['Data_NonEmpty_unfoldable1NonEmpty'])($GLOBALS['Data_List_Lazy_Types_unfoldableList']));

// Data_List_Lazy_Types_unfoldable1NonEmptyList
$Data_List_Lazy_Types_unfoldable1NonEmptyList = ($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'])((object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($f, $b) {
  $__fn = function($v) use ($f, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_unfoldr1'])($f, $b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_comonadNonEmptyList
$Data_List_Lazy_Types_comonadNonEmptyList = ($GLOBALS['Control_Comonad_Comonad__dollar__Dict'])((object)["extract" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
return ($GLOBALS['Data_NonEmpty_head'])(($GLOBALS['Data_Lazy_force'])($nel));
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
    $__res = $GLOBALS['Data_List_Lazy_Types_extendNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_monadList
$Data_List_Lazy_Types_monadList = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_applicativeList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_bindList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_bindList
$Data_List_Lazy_Types_bindList = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() {
  $__fn = function($xs, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_List_Lazy_Types_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs__prime__ = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_step'])(($GLOBALS['Data_List_Lazy_Types_append1'])(($f)($x), ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_List_Lazy_Types_bindList'], $xs__prime__, $f)));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_List_Lazy_Types_List'])(($GLOBALS['Data_List_Lazy_Types_map'])($go, ($GLOBALS['Data_List_Lazy_Types_unwrap'])($xs)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_applyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_applicativeList
$Data_List_Lazy_Types_applicativeList = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_cons'])($a, $GLOBALS['Data_List_Lazy_Types_nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_applyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_applyList
$Data_List_Lazy_Types_applyList = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => ($GLOBALS['Control_Monad_ap'])($GLOBALS['Data_List_Lazy_Types_monadList']), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_apply
$Data_List_Lazy_Types_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_List_Lazy_Types_applyList']);

// Data_List_Lazy_Types_bind
$Data_List_Lazy_Types_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_List_Lazy_Types_bindList']);

// Data_List_Lazy_Types_applyNonEmptyList
$Data_List_Lazy_Types_applyNonEmptyList = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$nefs = $__case_0;
$neas = $__case_1;
$v2 = ($GLOBALS['Data_Lazy_force'])($neas);
$v3 = ($GLOBALS['Data_Lazy_force'])($nefs);
$__case_0 = $v3;
$__case_1 = $v2;
if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$f = ($__case_0)->values[0];
$fs = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
$as = ($__case_1)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($f, $a, $fs, $as) {
  $__fn = function($v4) use ($f, $a, $fs, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])(($f)($a), ($GLOBALS['Data_List_Lazy_Types_append1'])(($GLOBALS['Data_List_Lazy_Types_apply'])($fs, ($GLOBALS['Data_List_Lazy_Types_cons'])($a, $GLOBALS['Data_List_Lazy_Types_nil'])), ($GLOBALS['Data_List_Lazy_Types_apply'])(($GLOBALS['Data_List_Lazy_Types_cons'])($f, $fs), $as)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = $GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_bindNonEmptyList
$Data_List_Lazy_Types_bindNonEmptyList = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() {
  $__body = function($v, $f) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$nel = $__case_0;
$f1 = $__case_1;
$v1 = ($GLOBALS['Data_Lazy_force'])($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$a = ($__case_0)->values[0];
$as = ($__case_0)->values[1];
$v2 = ($GLOBALS['Data_Lazy_force'])(($GLOBALS['Data_List_Lazy_Types_unwrap'])(($f1)($a)));
$__case_0 = $v2;
if ((($__case_0)->tag === "NonEmpty")) {
$b = ($__case_0)->values[0];
$bs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($b, $bs, $as, $f1) {
  $__fn = function($v3) use ($b, $bs, $as, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])($b, ($GLOBALS['Data_List_Lazy_Types_append1'])($bs, ($GLOBALS['Data_List_Lazy_Types_bind'])($as, ($GLOBALS['Data_List_Lazy_Types_compose'])($GLOBALS['Data_List_Lazy_Types_toList'], $f1))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
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
    $__res = $GLOBALS['Data_List_Lazy_Types_applyNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_altNonEmptyList
$Data_List_Lazy_Types_altNonEmptyList = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_List_Lazy_Types_semigroupNonEmptyList']), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_altList
$Data_List_Lazy_Types_altList = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => $GLOBALS['Data_List_Lazy_Types_append1'], "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_functorList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_plusList
$Data_List_Lazy_Types_plusList = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => $GLOBALS['Data_List_Lazy_Types_nil'], "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_altList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_singleton
$Data_List_Lazy_Types_singleton = ($GLOBALS['Data_NonEmpty_singleton'])($GLOBALS['Data_List_Lazy_Types_plusList']);

// Data_List_Lazy_Types_alternativeList
$Data_List_Lazy_Types_alternativeList = ($GLOBALS['Control_Alternative_Alternative__dollar__Dict'])((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_applicativeList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_plusList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_monadPlusList
$Data_List_Lazy_Types_monadPlusList = ($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'])((object)["Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_monadList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_alternativeList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_applicativeNonEmptyList
$Data_List_Lazy_Types_applicativeNonEmptyList = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($a) {
  $__fn = function($v) use ($a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_singleton'])($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_applyNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_List_Lazy_Types_monadNonEmptyList
$Data_List_Lazy_Types_monadNonEmptyList = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_applicativeNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_List_Lazy_Types_bindNonEmptyList'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

