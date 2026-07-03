<?php

namespace Data\FoldableWithIndex;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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


// Data_FoldableWithIndex_compose
$Data_FoldableWithIndex_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_FoldableWithIndex_foldr
$Data_FoldableWithIndex_foldr = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableMultiplicative']);

// Data_FoldableWithIndex_foldl
$Data_FoldableWithIndex_foldl = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableMultiplicative']);

// Data_FoldableWithIndex_foldMap
$Data_FoldableWithIndex_foldMap = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_Foldable_foldableMultiplicative']);

// Data_FoldableWithIndex_foldr1
$Data_FoldableWithIndex_foldr1 = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableMaybe']);

// Data_FoldableWithIndex_foldl1
$Data_FoldableWithIndex_foldl1 = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableMaybe']);

// Data_FoldableWithIndex_foldMap1
$Data_FoldableWithIndex_foldMap1 = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_Foldable_foldableMaybe']);

// Data_FoldableWithIndex_foldr2
$Data_FoldableWithIndex_foldr2 = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableLast']);

// Data_FoldableWithIndex_foldl2
$Data_FoldableWithIndex_foldl2 = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableLast']);

// Data_FoldableWithIndex_foldMap2
$Data_FoldableWithIndex_foldMap2 = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_Foldable_foldableLast']);

// Data_FoldableWithIndex_foldr3
$Data_FoldableWithIndex_foldr3 = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableFirst']);

// Data_FoldableWithIndex_foldl3
$Data_FoldableWithIndex_foldl3 = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableFirst']);

// Data_FoldableWithIndex_foldMap3
$Data_FoldableWithIndex_foldMap3 = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_Foldable_foldableFirst']);

// Data_FoldableWithIndex_foldr4
$Data_FoldableWithIndex_foldr4 = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableDual']);

// Data_FoldableWithIndex_foldl4
$Data_FoldableWithIndex_foldl4 = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableDual']);

// Data_FoldableWithIndex_foldMap4
$Data_FoldableWithIndex_foldMap4 = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_Foldable_foldableDual']);

// Data_FoldableWithIndex_foldr5
$Data_FoldableWithIndex_foldr5 = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableDisj']);

// Data_FoldableWithIndex_foldl5
$Data_FoldableWithIndex_foldl5 = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableDisj']);

// Data_FoldableWithIndex_foldMap5
$Data_FoldableWithIndex_foldMap5 = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_Foldable_foldableDisj']);

// Data_FoldableWithIndex_foldr6
$Data_FoldableWithIndex_foldr6 = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableConj']);

// Data_FoldableWithIndex_foldl6
$Data_FoldableWithIndex_foldl6 = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableConj']);

// Data_FoldableWithIndex_foldMap6
$Data_FoldableWithIndex_foldMap6 = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_Foldable_foldableConj']);

// Data_FoldableWithIndex_foldr7
$Data_FoldableWithIndex_foldr7 = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableAdditive']);

// Data_FoldableWithIndex_foldl7
$Data_FoldableWithIndex_foldl7 = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableAdditive']);

// Data_FoldableWithIndex_foldMap7
$Data_FoldableWithIndex_foldMap7 = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_Foldable_foldableAdditive']);

// Data_FoldableWithIndex_foldr8
$Data_FoldableWithIndex_foldr8 = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Foldable_foldableArray']);

// Data_FoldableWithIndex_mapWithIndex
$Data_FoldableWithIndex_mapWithIndex = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($GLOBALS['Data_FunctorWithIndex_functorWithIndexArray']);

// Data_FoldableWithIndex_foldl8
$Data_FoldableWithIndex_foldl8 = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Foldable_foldableArray']);

// Data_FoldableWithIndex_unwrap
$Data_FoldableWithIndex_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_FoldableWithIndex_monoidEndo
$Data_FoldableWithIndex_monoidEndo = ($GLOBALS['Data_Monoid_Endo_monoidEndo'])($GLOBALS['Control_Category_categoryFn']);

// Data_FoldableWithIndex_monoidDual
$Data_FoldableWithIndex_monoidDual = ($GLOBALS['Data_Monoid_Dual_monoidDual'])($GLOBALS['Data_FoldableWithIndex_monoidEndo']);

// Data_FoldableWithIndex_FoldableWithIndex$Dict
$Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldrWithIndex
$Data_FoldableWithIndex_foldrWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldrWithIndex;
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

// Data_FoldableWithIndex_traverseWithIndex_
$Data_FoldableWithIndex_traverseWithIndex_ = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applySecond = ($GLOBALS['Control_Apply_applySecond'])((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($applySecond, $pure) {
  $__fn = function($dictFoldableWithIndex) use ($applySecond, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldrWithIndex1, $applySecond, $pure) {
  $__fn = function($f) use ($foldrWithIndex1, $applySecond, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldrWithIndex1)((function() use ($applySecond, $f) {
  $__fn = function($i) use ($applySecond, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_compose'])($applySecond, ($f)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($pure)($GLOBALS['Data_Unit_unit']));
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

// Data_FoldableWithIndex_forWithIndex_
$Data_FoldableWithIndex_forWithIndex_ = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex_1 = ($GLOBALS['Data_FoldableWithIndex_traverseWithIndex_'])($dictApplicative);
    $__res = (function() use ($traverseWithIndex_1) {
  $__fn = function($dictFoldableWithIndex) use ($traverseWithIndex_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_flip'])(($traverseWithIndex_1)($dictFoldableWithIndex));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldrDefault
$Data_FoldableWithIndex_foldrDefault = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldrWithIndex1) {
  $__fn = function($f) use ($foldrWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldrWithIndex1)(($GLOBALS['Data_Function_const'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldlWithIndex
$Data_FoldableWithIndex_foldlWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldlWithIndex;
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

// Data_FoldableWithIndex_foldlDefault
$Data_FoldableWithIndex_foldlDefault = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($f) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldlWithIndex1)(($GLOBALS['Data_Function_const'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldableWithIndexTuple
$Data_FoldableWithIndex_foldableWithIndexTuple = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->values[1];
return ($f1)($GLOBALS['Data_Unit_unit'], $x, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->values[1];
return ($f1)($GLOBALS['Data_Unit_unit'], $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[1];
return ($f1)($GLOBALS['Data_Unit_unit'], $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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

// Data_FoldableWithIndex_foldableWithIndexMultiplicative
$Data_FoldableWithIndex_foldableWithIndexMultiplicative = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldr'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldl'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap8 = ($GLOBALS['Data_FoldableWithIndex_foldMap'])($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_Foldable_foldableMultiplicative'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexMaybe
$Data_FoldableWithIndex_foldableWithIndexMaybe = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldr1'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldl1'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap8 = ($GLOBALS['Data_FoldableWithIndex_foldMap1'])($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_Foldable_foldableMaybe'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexLast
$Data_FoldableWithIndex_foldableWithIndexLast = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldr2'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldl2'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap8 = ($GLOBALS['Data_FoldableWithIndex_foldMap2'])($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_Foldable_foldableLast'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexIdentity
$Data_FoldableWithIndex_foldableWithIndexIdentity = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($GLOBALS['Data_Unit_unit'], $x, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__body = function($f, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($f1)($GLOBALS['Data_Unit_unit'], $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__body = function($dictMonoid, $f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($f1)($GLOBALS['Data_Unit_unit'], $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($dictMonoid, $f, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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

// Data_FoldableWithIndex_foldableWithIndexFirst
$Data_FoldableWithIndex_foldableWithIndexFirst = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldr3'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldl3'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap8 = ($GLOBALS['Data_FoldableWithIndex_foldMap3'])($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_Foldable_foldableFirst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexEither
$Data_FoldableWithIndex_foldableWithIndexEither = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$z = $__case_1;
return $z;
} else {
if ((($__case_2)->tag === "Right")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($GLOBALS['Data_Unit_unit'], $x, $z);
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
})(), "foldlWithIndex" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$z = $__case_1;
return $z;
} else {
if ((($__case_2)->tag === "Right")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($GLOBALS['Data_Unit_unit'], $z, $x);
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
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($mempty) {
  $__body = function($v, $v1) use ($mempty) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
return $mempty;
} else {
if ((($__case_1)->tag === "Right")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
return ($f)($GLOBALS['Data_Unit_unit'], $x);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($mempty, $__body, &$__fn) {
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
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Foldable_foldableEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexDual
$Data_FoldableWithIndex_foldableWithIndexDual = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldr4'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldl4'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap8 = ($GLOBALS['Data_FoldableWithIndex_foldMap4'])($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_Foldable_foldableDual'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexDisj
$Data_FoldableWithIndex_foldableWithIndexDisj = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldr5'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldl5'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap8 = ($GLOBALS['Data_FoldableWithIndex_foldMap5'])($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_Foldable_foldableDisj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexConst
$Data_FoldableWithIndex_foldableWithIndexConst = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $z;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $z;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($mempty) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $mempty;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
    $__res = $GLOBALS['Data_Foldable_foldableConst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexConj
$Data_FoldableWithIndex_foldableWithIndexConj = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldr6'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldl6'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap8 = ($GLOBALS['Data_FoldableWithIndex_foldMap6'])($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_Foldable_foldableConj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldableWithIndexAdditive
$Data_FoldableWithIndex_foldableWithIndexAdditive = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldr7'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldl7'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap8 = ($GLOBALS['Data_FoldableWithIndex_foldMap7'])($dictMonoid);
    $__res = (function() use ($foldMap8) {
  $__fn = function($f) use ($foldMap8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMap8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_Foldable_foldableAdditive'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldWithIndexM
$Data_FoldableWithIndex_foldWithIndexM = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($dictMonad) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($foldlWithIndex1, $bind, $pure) {
  $__fn = function($f, $a0 = null) use ($foldlWithIndex1, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($foldlWithIndex1)((function() use ($bind, $f) {
  $__fn = function($i, $ma = null, $b = null) use ($bind, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($bind)($ma, ($GLOBALS['Data_Function_flip'])(($f)($i), $b));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($pure)($a0));
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

// Data_FoldableWithIndex_foldMapWithIndexDefaultR
$Data_FoldableWithIndex_foldMapWithIndexDefaultR = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldrWithIndex1) {
  $__fn = function($dictMonoid) use ($foldrWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($foldrWithIndex1, $append, $mempty) {
  $__fn = function($f) use ($foldrWithIndex1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldrWithIndex1)((function() use ($append, $f) {
  $__fn = function($i, $x = null, $acc = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($append)(($f)($i, $x), $acc);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldableWithIndexArray
$Data_FoldableWithIndex_foldableWithIndexArray = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_FoldableWithIndex_compose'])(($GLOBALS['Data_FoldableWithIndex_foldr8'])((function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return (function() use ($f, $i, $x) {
  $__fn = function($y) use ($f, $i, $x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($f)($i, $x, $y);
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
})(), $z), ($GLOBALS['Data_FoldableWithIndex_mapWithIndex'])($GLOBALS['Data_Tuple_Tuple']));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_FoldableWithIndex_compose'])(($GLOBALS['Data_FoldableWithIndex_foldl8'])((function() use ($f) {
  $__body = function($y, $v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$i = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($f)($i, $y, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($y, $v = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($y, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $z), ($GLOBALS['Data_FoldableWithIndex_mapWithIndex'])($GLOBALS['Data_Tuple_Tuple']));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndexDefaultR'])($GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'], $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Foldable_foldableArray'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FoldableWithIndex_foldMapWithIndexDefaultL
$Data_FoldableWithIndex_foldMapWithIndexDefaultL = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($dictMonoid) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($foldlWithIndex1, $append, $mempty) {
  $__fn = function($f) use ($foldlWithIndex1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldlWithIndex1)((function() use ($append, $f) {
  $__fn = function($i, $acc = null, $x = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($append)($acc, ($f)($i, $x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldMapWithIndex
$Data_FoldableWithIndex_foldMapWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->foldMapWithIndex;
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

// Data_FoldableWithIndex_foldableWithIndexApp
$Data_FoldableWithIndex_foldableWithIndexApp = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex);
$foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex);
$foldableApp = ($GLOBALS['Data_Foldable_foldableApp'])((($dictFoldableWithIndex)->Foldable0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() use ($foldrWithIndex1) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldrWithIndex1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1) {
  $__body = function($f, $z, $v) use ($foldlWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
return ($foldlWithIndex1)($f1, $z1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex2 = ($foldMapWithIndex1)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex2) {
  $__body = function($f, $v) use ($foldMapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($foldMapWithIndex2)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex2, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableApp) {
  $__fn = function($__dollar____unused) use ($foldableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldableWithIndexCompose
$Data_FoldableWithIndex_foldableWithIndexCompose = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex);
$foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex);
$foldableCompose = ($GLOBALS['Data_Foldable_foldableCompose'])((($dictFoldableWithIndex)->Foldable0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($foldableCompose, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableCompose, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex2 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex1);
$foldlWithIndex2 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex1);
$foldMapWithIndex2 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex1);
$foldableCompose1 = ($foldableCompose)((($dictFoldableWithIndex1)->Foldable0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $foldrWithIndex2) {
  $__body = function($f, $i, $v) use ($foldrWithIndex1, $foldrWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldrWithIndex1)((function() use ($foldrWithIndex2, $f1) {
  $__fn = function($a) use ($foldrWithIndex2, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_flip'])(($foldrWithIndex2)(($GLOBALS['Data_Tuple_curry'])($f1, $a)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldrWithIndex1, $foldrWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1, $foldlWithIndex2) {
  $__body = function($f, $i, $v) use ($foldlWithIndex1, $foldlWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $i;
    $__case_2 = $v;
    if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
return ($foldlWithIndex1)(($GLOBALS['Data_FoldableWithIndex_compose'])($foldlWithIndex2, ($GLOBALS['Data_Tuple_curry'])($f1)), $i1, $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $i = null, $v = null) use ($foldlWithIndex1, $foldlWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $i, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex3, $foldMapWithIndex4) {
  $__body = function($f, $v) use ($foldMapWithIndex3, $foldMapWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($foldMapWithIndex3)(($GLOBALS['Data_FoldableWithIndex_compose'])($foldMapWithIndex4, ($GLOBALS['Data_Tuple_curry'])($f1)), $fga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex3, $foldMapWithIndex4, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableCompose1) {
  $__fn = function($__dollar____unused) use ($foldableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldableWithIndexCoproduct
$Data_FoldableWithIndex_foldableWithIndexCoproduct = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex);
$foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex);
$foldableCoproduct = ($GLOBALS['Data_Foldable_foldableCoproduct'])((($dictFoldableWithIndex)->Foldable0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($foldableCoproduct, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableCoproduct, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex2 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex1);
$foldlWithIndex2 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex1);
$foldMapWithIndex2 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex1);
$foldableCoproduct1 = ($foldableCoproduct)((($dictFoldableWithIndex1)->Foldable0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $foldrWithIndex2) {
  $__fn = function($f, $z = null) use ($foldrWithIndex1, $foldrWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Functor_Coproduct_coproduct'])(($foldrWithIndex1)(($GLOBALS['Data_FoldableWithIndex_compose'])($f, $GLOBALS['Data_Either_Left']), $z), ($foldrWithIndex2)(($GLOBALS['Data_FoldableWithIndex_compose'])($f, $GLOBALS['Data_Either_Right']), $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex1, $foldlWithIndex2) {
  $__fn = function($f, $z = null) use ($foldlWithIndex1, $foldlWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Functor_Coproduct_coproduct'])(($foldlWithIndex1)(($GLOBALS['Data_FoldableWithIndex_compose'])($f, $GLOBALS['Data_Either_Left']), $z), ($foldlWithIndex2)(($GLOBALS['Data_FoldableWithIndex_compose'])($f, $GLOBALS['Data_Either_Right']), $z));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex3, $foldMapWithIndex4) {
  $__fn = function($f) use ($foldMapWithIndex3, $foldMapWithIndex4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_coproduct'])(($foldMapWithIndex3)(($GLOBALS['Data_FoldableWithIndex_compose'])($f, $GLOBALS['Data_Either_Left'])), ($foldMapWithIndex4)(($GLOBALS['Data_FoldableWithIndex_compose'])($f, $GLOBALS['Data_Either_Right'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() use ($foldableCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldableWithIndexProduct
$Data_FoldableWithIndex_foldableWithIndexProduct = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex);
$foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex);
$foldableProduct = ($GLOBALS['Data_Foldable_foldableProduct'])((($dictFoldableWithIndex)->Foldable0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($foldableProduct, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1) {
  $__fn = function($dictFoldableWithIndex1) use ($foldableProduct, $foldrWithIndex1, $foldlWithIndex1, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldrWithIndex2 = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex1);
$foldlWithIndex2 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex1);
$foldMapWithIndex2 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex1);
$foldableProduct1 = ($foldableProduct)((($dictFoldableWithIndex1)->Foldable0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() use ($foldrWithIndex1, $foldrWithIndex2) {
  $__body = function($f, $z, $v) use ($foldrWithIndex1, $foldrWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->values[0];
$ga = ($__case_2)->values[1];
return ($foldrWithIndex1)(($GLOBALS['Data_FoldableWithIndex_compose'])($f1, $GLOBALS['Data_Either_Left']), ($foldrWithIndex2)(($GLOBALS['Data_FoldableWithIndex_compose'])($f1, $GLOBALS['Data_Either_Right']), $z1, $ga), $fa);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldrWithIndex1, $foldrWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use ($foldlWithIndex2, $foldlWithIndex1) {
  $__body = function($f, $z, $v) use ($foldlWithIndex2, $foldlWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $z;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->values[0];
$ga = ($__case_2)->values[1];
return ($foldlWithIndex2)(($GLOBALS['Data_FoldableWithIndex_compose'])($f1, $GLOBALS['Data_Either_Right']), ($foldlWithIndex1)(($GLOBALS['Data_FoldableWithIndex_compose'])($f1, $GLOBALS['Data_Either_Left']), $z1, $fa), $ga);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $z = null, $v = null) use ($foldlWithIndex2, $foldlWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $z, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex1, $foldMapWithIndex2) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, $foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$foldMapWithIndex3 = ($foldMapWithIndex1)($dictMonoid);
$foldMapWithIndex4 = ($foldMapWithIndex2)($dictMonoid);
    $__res = (function() use ($append, $foldMapWithIndex3, $foldMapWithIndex4) {
  $__body = function($f, $v) use ($append, $foldMapWithIndex3, $foldMapWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$fa = ($__case_1)->values[0];
$ga = ($__case_1)->values[1];
return ($append)(($foldMapWithIndex3)(($GLOBALS['Data_FoldableWithIndex_compose'])($f1, $GLOBALS['Data_Either_Left']), $fa), ($foldMapWithIndex4)(($GLOBALS['Data_FoldableWithIndex_compose'])($f1, $GLOBALS['Data_Either_Right']), $ga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($append, $foldMapWithIndex3, $foldMapWithIndex4, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableProduct1) {
  $__fn = function($__dollar____unused) use ($foldableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldlWithIndexDefault
$Data_FoldableWithIndex_foldlWithIndexDefault = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex, $GLOBALS['Data_FoldableWithIndex_monoidDual']);
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($c, $u = null, $xs = null) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_FoldableWithIndex_unwrap'])(($GLOBALS['Data_FoldableWithIndex_unwrap'])(($foldMapWithIndex1)((function() use ($c) {
  $__fn = function($i) use ($c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_compose'])($GLOBALS['Data_Monoid_Dual_Dual'], ($GLOBALS['Data_FoldableWithIndex_compose'])($GLOBALS['Data_Monoid_Endo_Endo'], ($GLOBALS['Data_Function_flip'])(($c)($i))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs)), $u);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_foldrWithIndexDefault
$Data_FoldableWithIndex_foldrWithIndexDefault = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex, $GLOBALS['Data_FoldableWithIndex_monoidEndo']);
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($c, $u = null, $xs = null) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_FoldableWithIndex_unwrap'])(($foldMapWithIndex1)((function() use ($c) {
  $__fn = function($i) use ($c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_compose'])($GLOBALS['Data_Monoid_Endo_Endo'], ($c)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs), $u);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_surroundMapWithIndex
$Data_FoldableWithIndex_surroundMapWithIndex = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex, $GLOBALS['Data_FoldableWithIndex_monoidEndo']);
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($dictSemigroup) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
    $__res = (function() use ($append, $foldMapWithIndex1) {
  $__fn = function($d, $t = null, $f = null) use ($append, $foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$joined = (function() use ($append, $d, $t) {
  $__fn = function($i, $a = null) use ($append, $d, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Monoid_Endo_Endo'])((function() use ($append, $d, $t, $i, $a) {
  $__fn = function($m) use ($append, $d, $t, $i, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($append)($d, ($append)(($t)($i, $a), $m));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_FoldableWithIndex_unwrap'])(($foldMapWithIndex1)($joined, $f), $d);
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

// Data_FoldableWithIndex_foldMapDefault
$Data_FoldableWithIndex_foldMapDefault = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex2 = ($foldMapWithIndex1)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex2) {
  $__fn = function($f) use ($foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldMapWithIndex2)(($GLOBALS['Data_Function_const'])($f));
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

// Data_FoldableWithIndex_findWithIndex
$Data_FoldableWithIndex_findWithIndex = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($p) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nothing")) {
$i = $__case_0;
$x = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
$r = $__case_1;
return $r;
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
    $__res = ($foldlWithIndex1)($go, $GLOBALS['Data_Maybe_Nothing']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_findMapWithIndex
$Data_FoldableWithIndex_findMapWithIndex = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldlWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldlWithIndex1) {
  $__fn = function($f) use ($foldlWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($f) {
  $__body = function($v, $v1, $v2) use ($f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_1)->tag === "Nothing")) {
$i = $__case_0;
$x = $__case_2;
return ($f)($i, $x);
} else {
if (true) {
$r = $__case_1;
return $r;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($foldlWithIndex1)($go, $GLOBALS['Data_Maybe_Nothing']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_anyWithIndex
$Data_FoldableWithIndex_anyWithIndex = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($dictHeytingAlgebra) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex2 = ($foldMapWithIndex1)(($GLOBALS['Data_Monoid_Disj_monoidDisj'])($dictHeytingAlgebra));
    $__res = (function() use ($foldMapWithIndex2) {
  $__fn = function($t) use ($foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_compose'])($GLOBALS['Data_FoldableWithIndex_unwrap'], ($foldMapWithIndex2)((function() use ($t) {
  $__fn = function($i) use ($t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_compose'])($GLOBALS['Data_Monoid_Disj_Disj'], ($t)($i));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FoldableWithIndex_allWithIndex
$Data_FoldableWithIndex_allWithIndex = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex1 = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex);
    $__res = (function() use ($foldMapWithIndex1) {
  $__fn = function($dictHeytingAlgebra) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex2 = ($foldMapWithIndex1)(($GLOBALS['Data_Monoid_Conj_monoidConj'])($dictHeytingAlgebra));
    $__res = (function() use ($foldMapWithIndex2) {
  $__fn = function($t) use ($foldMapWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_compose'])($GLOBALS['Data_FoldableWithIndex_unwrap'], ($foldMapWithIndex2)((function() use ($t) {
  $__fn = function($i) use ($t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_compose'])($GLOBALS['Data_Monoid_Conj_Conj'], ($t)($i));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

