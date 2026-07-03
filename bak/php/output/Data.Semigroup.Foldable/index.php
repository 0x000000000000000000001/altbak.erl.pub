<?php

namespace Data\Semigroup\Foldable;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord.Max/index.php';
require_once __DIR__ . '/../Data.Ord.Min/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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


// Data_Semigroup_Foldable_eq
$Data_Semigroup_Foldable_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Ordering_eqOrdering']);

// Data_Semigroup_Foldable_composeFlipped
$Data_Semigroup_Foldable_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Semigroup_Foldable_compose
$Data_Semigroup_Foldable_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Semigroup_Foldable_alaF
$Data_Semigroup_Foldable_alaF = ($GLOBALS['Data_Newtype_alaF'])($GLOBALS['Prim_undefined'], $GLOBALS['Prim_undefined'], $GLOBALS['Prim_undefined'], $GLOBALS['Prim_undefined']);

// Data_Semigroup_Foldable_identity
$Data_Semigroup_Foldable_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_Semigroup_Foldable_ala
$Data_Semigroup_Foldable_ala = ($GLOBALS['Data_Newtype_ala'])($GLOBALS['Prim_undefined'], $GLOBALS['Prim_undefined'], $GLOBALS['Prim_undefined']);

// Data_Semigroup_Foldable_JoinWith
$Data_Semigroup_Foldable_JoinWith = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_Foldable1$Dict
$Data_Semigroup_Foldable_Foldable1__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_FoldRight1
$Data_Semigroup_Foldable_FoldRight1 = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "FoldRight1", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_Act
$Data_Semigroup_Foldable_Act = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_semigroupJoinWith
$Data_Semigroup_Foldable_semigroupJoinWith = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
    $__res = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() use ($append) {
  $__body = function($v, $v1) use ($append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($GLOBALS['Data_Semigroup_Foldable_JoinWith'])((function() use ($append, $a, $b) {
  $__fn = function($j) use ($append, $a, $b, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($append)(($a)($j), ($append)($j, ($b)($j)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_semigroupAct
$Data_Semigroup_Foldable_semigroupAct = (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applySecond = ($GLOBALS['Control_Apply_applySecond'])($dictApply);
    $__res = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() use ($applySecond) {
  $__body = function($v, $v1) use ($applySecond) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($GLOBALS['Data_Semigroup_Foldable_Act'])(($applySecond)($a, $b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($applySecond, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_runFoldRight1
$Data_Semigroup_Foldable_runFoldRight1 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "FoldRight1")) {
$f = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
return ($f)($a);
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

// Data_Semigroup_Foldable_mkFoldRight1
$Data_Semigroup_Foldable_mkFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_FoldRight1'])($GLOBALS['Data_Function_const']);

// Data_Semigroup_Foldable_joinee
$Data_Semigroup_Foldable_joinee = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
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

// Data_Semigroup_Foldable_getAct
$Data_Semigroup_Foldable_getAct = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return $f;
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

// Data_Semigroup_Foldable_foldr1
$Data_Semigroup_Foldable_foldr1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldr1;
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

// Data_Semigroup_Foldable_foldl1
$Data_Semigroup_Foldable_foldl1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldl1;
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

// Data_Semigroup_Foldable_maximumBy
$Data_Semigroup_Foldable_maximumBy = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldl11 = ($GLOBALS['Data_Semigroup_Foldable_foldl1'])($dictFoldable1);
    $__res = (function() use ($foldl11) {
  $__fn = function($cmp) use ($foldl11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldl11)((function() use ($cmp) {
  $__body = function($x, $y) use ($cmp) {
    $__case_0 = ($GLOBALS['Data_Semigroup_Foldable_eq'])(($cmp)($x, $y), $GLOBALS['Data_Ordering_GT']);
    if (($__case_0 === true)) {
return $x;
} else {
if (true) {
return $y;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x, $y = null) use ($cmp, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Data_Semigroup_Foldable_minimumBy
$Data_Semigroup_Foldable_minimumBy = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldl11 = ($GLOBALS['Data_Semigroup_Foldable_foldl1'])($dictFoldable1);
    $__res = (function() use ($foldl11) {
  $__fn = function($cmp) use ($foldl11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldl11)((function() use ($cmp) {
  $__body = function($x, $y) use ($cmp) {
    $__case_0 = ($GLOBALS['Data_Semigroup_Foldable_eq'])(($cmp)($x, $y), $GLOBALS['Data_Ordering_LT']);
    if (($__case_0 === true)) {
return $x;
} else {
if (true) {
return $y;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x, $y = null) use ($cmp, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Data_Semigroup_Foldable_foldableTuple
$Data_Semigroup_Foldable_foldableTuple = ($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'])((object)["foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[1];
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($dictSemigroup, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Tuple")) {
$x = ($__case_1)->values[1];
return $x;
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
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Tuple")) {
$x = ($__case_1)->values[1];
return $x;
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Foldable_foldableTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Foldable_foldableMultiplicative
$Data_Semigroup_Foldable_foldableMultiplicative = ($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'])((object)["foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($dictSemigroup, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Foldable_foldableMultiplicative'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Foldable_foldableIdentity
$Data_Semigroup_Foldable_foldableIdentity = ($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'])((object)["foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($dictSemigroup, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Foldable_foldableIdentity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Foldable_foldableDual
$Data_Semigroup_Foldable_foldableDual = ($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'])((object)["foldr1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldl1" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return $x;
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
})(), "foldMap1" => (function() {
  $__body = function($dictSemigroup, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictSemigroup, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($dictSemigroup, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Foldable_foldableDual'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Semigroup_Foldable_foldRight1Semigroup
$Data_Semigroup_Foldable_foldRight1Semigroup = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "FoldRight1") && (($__case_1)->tag === "FoldRight1"))) {
$lf = ($__case_0)->values[0];
$lr = ($__case_0)->values[1];
$rf = ($__case_1)->values[0];
$rr = ($__case_1)->values[1];
return ($GLOBALS['Data_Semigroup_Foldable_FoldRight1'])((function() use ($lf, $lr, $rf) {
  $__fn = function($a, $f = null) use ($lf, $lr, $rf, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($lf)(($f)($lr, ($rf)($a, $f)), $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $rr);
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
})()]);

// Data_Semigroup_Foldable_semigroupDual
$Data_Semigroup_Foldable_semigroupDual = ($GLOBALS['Data_Monoid_Dual_semigroupDual'])($GLOBALS['Data_Semigroup_Foldable_foldRight1Semigroup']);

// Data_Semigroup_Foldable_foldMap1DefaultR
$Data_Semigroup_Foldable_foldMap1DefaultR = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldr11 = ($GLOBALS['Data_Semigroup_Foldable_foldr1'])($dictFoldable1);
    $__res = (function() use ($foldr11) {
  $__fn = function($dictFunctor) use ($foldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map, $foldr11) {
  $__fn = function($dictSemigroup) use ($map, $foldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
    $__res = (function() use ($map, $foldr11, $append) {
  $__fn = function($f) use ($map, $foldr11, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Foldable_composeFlipped'])(($map)($f), ($foldr11)($append));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_foldMap1DefaultL
$Data_Semigroup_Foldable_foldMap1DefaultL = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldl11 = ($GLOBALS['Data_Semigroup_Foldable_foldl1'])($dictFoldable1);
    $__res = (function() use ($foldl11) {
  $__fn = function($dictFunctor) use ($foldl11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map, $foldl11) {
  $__fn = function($dictSemigroup) use ($map, $foldl11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
    $__res = (function() use ($map, $foldl11, $append) {
  $__fn = function($f) use ($map, $foldl11, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Foldable_composeFlipped'])(($map)($f), ($foldl11)($append));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_foldMap1
$Data_Semigroup_Foldable_foldMap1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldMap1;
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

// Data_Semigroup_Foldable_foldl1Default
$Data_Semigroup_Foldable_foldl1Default = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Foldable_compose'])(($GLOBALS['Data_Function_flip'])(($GLOBALS['Data_Semigroup_Foldable_compose'])($GLOBALS['Data_Semigroup_Foldable_runFoldRight1'], ($GLOBALS['Data_Semigroup_Foldable_alaF'])($GLOBALS['Data_Monoid_Dual_Dual'], ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1, $GLOBALS['Data_Semigroup_Foldable_semigroupDual']), $GLOBALS['Data_Semigroup_Foldable_mkFoldRight1']))), $GLOBALS['Data_Function_flip']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_foldr1Default
$Data_Semigroup_Foldable_foldr1Default = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_flip'])(($GLOBALS['Data_Semigroup_Foldable_compose'])($GLOBALS['Data_Semigroup_Foldable_runFoldRight1'], ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1, $GLOBALS['Data_Semigroup_Foldable_foldRight1Semigroup'], $GLOBALS['Data_Semigroup_Foldable_mkFoldRight1'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_intercalateMap
$Data_Semigroup_Foldable_intercalateMap = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap11 = ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1);
    $__res = (function() use ($foldMap11) {
  $__fn = function($dictSemigroup) use ($foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap12 = ($foldMap11)(($GLOBALS['Data_Semigroup_Foldable_semigroupJoinWith'])($dictSemigroup));
    $__res = (function() use ($foldMap12) {
  $__fn = function($j, $f = null, $foldable = null) use ($foldMap12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Semigroup_Foldable_joinee'])(($foldMap12)(($GLOBALS['Data_Semigroup_Foldable_compose'])($GLOBALS['Data_Semigroup_Foldable_JoinWith'], ($GLOBALS['Data_Semigroup_Foldable_compose'])($GLOBALS['Data_Function_const'], $f)), $foldable), $j);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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

// Data_Semigroup_Foldable_intercalate
$Data_Semigroup_Foldable_intercalate = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$intercalateMap1 = ($GLOBALS['Data_Semigroup_Foldable_intercalateMap'])($dictFoldable1);
    $__res = (function() use ($intercalateMap1) {
  $__fn = function($dictSemigroup) use ($intercalateMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_flip'])(($intercalateMap1)($dictSemigroup), $GLOBALS['Data_Semigroup_Foldable_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_maximum
$Data_Semigroup_Foldable_maximum = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupMax = ($GLOBALS['Data_Ord_Max_semigroupMax'])($dictOrd);
    $__res = (function() use ($semigroupMax) {
  $__fn = function($dictFoldable1) use ($semigroupMax, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Foldable_ala'])($GLOBALS['Data_Ord_Max_Max'], ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1, $semigroupMax));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_minimum
$Data_Semigroup_Foldable_minimum = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupMin = ($GLOBALS['Data_Ord_Min_semigroupMin'])($dictOrd);
    $__res = (function() use ($semigroupMin) {
  $__fn = function($dictFoldable1) use ($semigroupMin, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Foldable_ala'])($GLOBALS['Data_Ord_Min_Min'], ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1, $semigroupMin));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_traverse1_
$Data_Semigroup_Foldable_traverse1_ = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap11 = ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1);
    $__res = (function() use ($foldMap11) {
  $__fn = function($dictApply) use ($foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$voidRight = ($GLOBALS['Data_Functor_voidRight'])((($dictApply)->Functor0)($GLOBALS['Prim_undefined']));
$foldMap12 = ($foldMap11)(($GLOBALS['Data_Semigroup_Foldable_semigroupAct'])($dictApply));
    $__res = (function() use ($voidRight, $foldMap12) {
  $__fn = function($f, $t = null) use ($voidRight, $foldMap12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($voidRight)($GLOBALS['Data_Unit_unit'], ($GLOBALS['Data_Semigroup_Foldable_getAct'])(($foldMap12)(($GLOBALS['Data_Semigroup_Foldable_compose'])($GLOBALS['Data_Semigroup_Foldable_Act'], $f), $t)));
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

// Data_Semigroup_Foldable_for1_
$Data_Semigroup_Foldable_for1_ = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse1_1 = ($GLOBALS['Data_Semigroup_Foldable_traverse1_'])($dictFoldable1);
    $__res = (function() use ($traverse1_1) {
  $__fn = function($dictApply) use ($traverse1_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_flip'])(($traverse1_1)($dictApply));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_sequence1_
$Data_Semigroup_Foldable_sequence1_ = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse1_1 = ($GLOBALS['Data_Semigroup_Foldable_traverse1_'])($dictFoldable1);
    $__res = (function() use ($traverse1_1) {
  $__fn = function($dictApply) use ($traverse1_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse1_1)($dictApply, $GLOBALS['Data_Semigroup_Foldable_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semigroup_Foldable_fold1
$Data_Semigroup_Foldable_fold1 = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap11 = ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1);
    $__res = (function() use ($foldMap11) {
  $__fn = function($dictSemigroup) use ($foldMap11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap11)($dictSemigroup, $GLOBALS['Data_Semigroup_Foldable_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

