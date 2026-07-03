<?php

namespace Data\TraversableWithIndex;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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


// Data_TraversableWithIndex_compose
$Data_TraversableWithIndex_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_TraversableWithIndex_traverse
$Data_TraversableWithIndex_traverse = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Traversable_traversableMultiplicative']);

// Data_TraversableWithIndex_traverse1
$Data_TraversableWithIndex_traverse1 = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Traversable_traversableMaybe']);

// Data_TraversableWithIndex_traverse2
$Data_TraversableWithIndex_traverse2 = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Traversable_traversableLast']);

// Data_TraversableWithIndex_traverse3
$Data_TraversableWithIndex_traverse3 = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Traversable_traversableFirst']);

// Data_TraversableWithIndex_traverse4
$Data_TraversableWithIndex_traverse4 = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Traversable_traversableDual']);

// Data_TraversableWithIndex_traverse5
$Data_TraversableWithIndex_traverse5 = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Traversable_traversableDisj']);

// Data_TraversableWithIndex_traverse6
$Data_TraversableWithIndex_traverse6 = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Traversable_traversableConj']);

// Data_TraversableWithIndex_traverse7
$Data_TraversableWithIndex_traverse7 = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Traversable_traversableAdditive']);

// Data_TraversableWithIndex_TraversableWithIndex$Dict
$Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_TraversableWithIndex_traverseWithIndexDefault
$Data_TraversableWithIndex_traverseWithIndexDefault = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequence = ($GLOBALS['Data_Traversable_sequence'])((($dictTraversableWithIndex)->Traversable2)($GLOBALS['Prim_undefined']));
$mapWithIndex = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])((($dictTraversableWithIndex)->FunctorWithIndex0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($sequence, $mapWithIndex) {
  $__fn = function($dictApplicative) use ($sequence, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($sequence1, $mapWithIndex) {
  $__fn = function($f) use ($sequence1, $mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_TraversableWithIndex_compose'])($sequence1, ($mapWithIndex)($f));
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

// Data_TraversableWithIndex_traverseWithIndex
$Data_TraversableWithIndex_traverseWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->traverseWithIndex;
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

// Data_TraversableWithIndex_traverseDefault
$Data_TraversableWithIndex_traverseDefault = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex1 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex);
    $__res = (function() use ($traverseWithIndex1) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
    $__res = (function() use ($traverseWithIndex2) {
  $__fn = function($f) use ($traverseWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverseWithIndex2)(($GLOBALS['Data_Function_const'])($f));
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

// Data_TraversableWithIndex_traversableWithIndexTuple
$Data_TraversableWithIndex_traversableWithIndexTuple = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$y = ($__case_1)->values[1];
return ($map)(($GLOBALS['Data_Tuple_Tuple'])($x), ($f1)($GLOBALS['Data_Unit_unit'], $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexProduct
$Data_TraversableWithIndex_traversableWithIndexProduct = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex1 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex);
$functorWithIndexProduct = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexProduct'])((($dictTraversableWithIndex)->FunctorWithIndex0)($GLOBALS['Prim_undefined']));
$foldableWithIndexProduct = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexProduct'])((($dictTraversableWithIndex)->FoldableWithIndex1)($GLOBALS['Prim_undefined']));
$traversableProduct = ($GLOBALS['Data_Traversable_traversableProduct'])((($dictTraversableWithIndex)->Traversable2)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($functorWithIndexProduct, $foldableWithIndexProduct, $traversableProduct, $traverseWithIndex1) {
  $__fn = function($dictTraversableWithIndex1) use ($functorWithIndexProduct, $foldableWithIndexProduct, $traversableProduct, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex2 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex1);
$functorWithIndexProduct1 = ($functorWithIndexProduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)($GLOBALS['Prim_undefined']));
$foldableWithIndexProduct1 = ($foldableWithIndexProduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)($GLOBALS['Prim_undefined']));
$traversableProduct1 = ($traversableProduct)((($dictTraversableWithIndex1)->Traversable2)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() use ($traverseWithIndex1, $traverseWithIndex2) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, $traverseWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lift2 = ($GLOBALS['Control_Apply_lift2'])((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']));
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($lift2, $traverseWithIndex3, $traverseWithIndex4) {
  $__body = function($f, $v) use ($lift2, $traverseWithIndex3, $traverseWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$fa = ($__case_1)->values[0];
$ga = ($__case_1)->values[1];
return ($lift2)($GLOBALS['Data_Functor_Product_product'], ($traverseWithIndex3)(($GLOBALS['Data_TraversableWithIndex_compose'])($f1, $GLOBALS['Data_Either_Left']), $fa), ($traverseWithIndex4)(($GLOBALS['Data_TraversableWithIndex_compose'])($f1, $GLOBALS['Data_Either_Right']), $ga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($lift2, $traverseWithIndex3, $traverseWithIndex4, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexProduct1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorWithIndexProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexProduct1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableWithIndexProduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableProduct1) {
  $__fn = function($__dollar____unused) use ($traversableProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $traversableProduct1;
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

// Data_TraversableWithIndex_traversableWithIndexMultiplicative
$Data_TraversableWithIndex_traversableWithIndexMultiplicative = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse8 = ($GLOBALS['Data_TraversableWithIndex_traverse'])($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexMultiplicative'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexMultiplicative'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableMultiplicative'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexMaybe
$Data_TraversableWithIndex_traversableWithIndexMaybe = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse8 = ($GLOBALS['Data_TraversableWithIndex_traverse1'])($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexMaybe'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexMaybe'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableMaybe'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexLast
$Data_TraversableWithIndex_traversableWithIndexLast = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse8 = ($GLOBALS['Data_TraversableWithIndex_traverse2'])($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexLast'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexLast'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableLast'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexIdentity
$Data_TraversableWithIndex_traversableWithIndexIdentity = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($GLOBALS['Data_Identity_Identity'], ($f1)($GLOBALS['Data_Unit_unit'], $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexIdentity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexIdentity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableIdentity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexFirst
$Data_TraversableWithIndex_traversableWithIndexFirst = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse8 = ($GLOBALS['Data_TraversableWithIndex_traverse3'])($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexFirst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexFirst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableFirst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexEither
$Data_TraversableWithIndex_traversableWithIndexEither = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
$map = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($pure, $map) {
  $__body = function($v, $v1) use ($pure, $map) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$x = ($__case_1)->values[0];
return ($pure)(($GLOBALS['Data_Either_Left'])($x));
} else {
if ((($__case_1)->tag === "Right")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
return ($map)($GLOBALS['Data_Either_Right'], ($f)($GLOBALS['Data_Unit_unit'], $x));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $map, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexDual
$Data_TraversableWithIndex_traversableWithIndexDual = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse8 = ($GLOBALS['Data_TraversableWithIndex_traverse4'])($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexDual'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexDual'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableDual'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexDisj
$Data_TraversableWithIndex_traversableWithIndexDisj = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse8 = ($GLOBALS['Data_TraversableWithIndex_traverse5'])($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexDisj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexDisj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableDisj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexCoproduct
$Data_TraversableWithIndex_traversableWithIndexCoproduct = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex1 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex);
$functorWithIndexCoproduct = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexCoproduct'])((($dictTraversableWithIndex)->FunctorWithIndex0)($GLOBALS['Prim_undefined']));
$foldableWithIndexCoproduct = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexCoproduct'])((($dictTraversableWithIndex)->FoldableWithIndex1)($GLOBALS['Prim_undefined']));
$traversableCoproduct = ($GLOBALS['Data_Traversable_traversableCoproduct'])((($dictTraversableWithIndex)->Traversable2)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($functorWithIndexCoproduct, $foldableWithIndexCoproduct, $traversableCoproduct, $traverseWithIndex1) {
  $__fn = function($dictTraversableWithIndex1) use ($functorWithIndexCoproduct, $foldableWithIndexCoproduct, $traversableCoproduct, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex2 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex1);
$functorWithIndexCoproduct1 = ($functorWithIndexCoproduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)($GLOBALS['Prim_undefined']));
$foldableWithIndexCoproduct1 = ($foldableWithIndexCoproduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)($GLOBALS['Prim_undefined']));
$traversableCoproduct1 = ($traversableCoproduct)((($dictTraversableWithIndex1)->Traversable2)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() use ($traverseWithIndex1, $traverseWithIndex2) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, $traverseWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($map, $traverseWithIndex3, $traverseWithIndex4) {
  $__fn = function($f) use ($map, $traverseWithIndex3, $traverseWithIndex4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_coproduct'])(($GLOBALS['Data_TraversableWithIndex_compose'])(($map)(($GLOBALS['Data_TraversableWithIndex_compose'])($GLOBALS['Data_Functor_Coproduct_Coproduct'], $GLOBALS['Data_Either_Left'])), ($traverseWithIndex3)(($GLOBALS['Data_TraversableWithIndex_compose'])($f, $GLOBALS['Data_Either_Left']))), ($GLOBALS['Data_TraversableWithIndex_compose'])(($map)(($GLOBALS['Data_TraversableWithIndex_compose'])($GLOBALS['Data_Functor_Coproduct_Coproduct'], $GLOBALS['Data_Either_Right'])), ($traverseWithIndex4)(($GLOBALS['Data_TraversableWithIndex_compose'])($f, $GLOBALS['Data_Either_Right']))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexCoproduct1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorWithIndexCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexCoproduct1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableWithIndexCoproduct1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableCoproduct1) {
  $__fn = function($__dollar____unused) use ($traversableCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $traversableCoproduct1;
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

// Data_TraversableWithIndex_traversableWithIndexConst
$Data_TraversableWithIndex_traversableWithIndexConst = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($pure) {
  $__body = function($v, $v1) use ($pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return ($pure)(($GLOBALS['Data_Const_Const'])($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($pure, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexConst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexConst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableConst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexConj
$Data_TraversableWithIndex_traversableWithIndexConj = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse8 = ($GLOBALS['Data_TraversableWithIndex_traverse6'])($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexConj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexConj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableConj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexCompose
$Data_TraversableWithIndex_traversableWithIndexCompose = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex1 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex);
$functorWithIndexCompose = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexCompose'])((($dictTraversableWithIndex)->FunctorWithIndex0)($GLOBALS['Prim_undefined']));
$foldableWithIndexCompose = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexCompose'])((($dictTraversableWithIndex)->FoldableWithIndex1)($GLOBALS['Prim_undefined']));
$traversableCompose = ($GLOBALS['Data_Traversable_traversableCompose'])((($dictTraversableWithIndex)->Traversable2)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($functorWithIndexCompose, $foldableWithIndexCompose, $traversableCompose, $traverseWithIndex1) {
  $__fn = function($dictTraversableWithIndex1) use ($functorWithIndexCompose, $foldableWithIndexCompose, $traversableCompose, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex2 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex1);
$functorWithIndexCompose1 = ($functorWithIndexCompose)((($dictTraversableWithIndex1)->FunctorWithIndex0)($GLOBALS['Prim_undefined']));
$foldableWithIndexCompose1 = ($foldableWithIndexCompose)((($dictTraversableWithIndex1)->FoldableWithIndex1)($GLOBALS['Prim_undefined']));
$traversableCompose1 = ($traversableCompose)((($dictTraversableWithIndex1)->Traversable2)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() use ($traverseWithIndex1, $traverseWithIndex2) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, $traverseWithIndex2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
$traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
    $__res = (function() use ($map, $traverseWithIndex3, $traverseWithIndex4) {
  $__body = function($f, $v) use ($map, $traverseWithIndex3, $traverseWithIndex4) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($map)($GLOBALS['Data_Functor_Compose_Compose'], ($traverseWithIndex3)(($GLOBALS['Data_TraversableWithIndex_compose'])($traverseWithIndex4, ($GLOBALS['Data_Tuple_curry'])($f1)), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $traverseWithIndex3, $traverseWithIndex4, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexCompose1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorWithIndexCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexCompose1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableWithIndexCompose1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableCompose1) {
  $__fn = function($__dollar____unused) use ($traversableCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $traversableCompose1;
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

// Data_TraversableWithIndex_traversableWithIndexArray
$Data_TraversableWithIndex_traversableWithIndexArray = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndexDefault'])($GLOBALS['Data_TraversableWithIndex_traversableWithIndexArray'], $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexArray'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableArray'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_traversableWithIndexApp
$Data_TraversableWithIndex_traversableWithIndexApp = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex1 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex);
$functorWithIndexApp = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexApp'])((($dictTraversableWithIndex)->FunctorWithIndex0)($GLOBALS['Prim_undefined']));
$foldableWithIndexApp = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexApp'])((($dictTraversableWithIndex)->FoldableWithIndex1)($GLOBALS['Prim_undefined']));
$traversableApp = ($GLOBALS['Data_Traversable_traversableApp'])((($dictTraversableWithIndex)->Traversable2)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() use ($traverseWithIndex1) {
  $__fn = function($dictApplicative) use ($traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
    $__res = (function() use ($map, $traverseWithIndex2) {
  $__body = function($f, $v) use ($map, $traverseWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($map)($GLOBALS['Data_Functor_App_App'], ($traverseWithIndex2)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $traverseWithIndex2, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexApp) {
  $__fn = function($__dollar____unused) use ($functorWithIndexApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorWithIndexApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexApp) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableWithIndexApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableApp) {
  $__fn = function($__dollar____unused) use ($traversableApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $traversableApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_TraversableWithIndex_traversableWithIndexAdditive
$Data_TraversableWithIndex_traversableWithIndexAdditive = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverse8 = ($GLOBALS['Data_TraversableWithIndex_traverse7'])($dictApplicative);
    $__res = (function() use ($traverse8) {
  $__fn = function($f) use ($traverse8, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($traverse8)(($f)($GLOBALS['Data_Unit_unit']));
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
    $__res = $GLOBALS['Data_FunctorWithIndex_functorWithIndexAdditive'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexAdditive'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Traversable_traversableAdditive'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_TraversableWithIndex_mapAccumRWithIndex
$Data_TraversableWithIndex_mapAccumRWithIndex = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex1 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex, $GLOBALS['Data_Traversable_Accum_Internal_applicativeStateR']);
    $__res = (function() use ($traverseWithIndex1) {
  $__fn = function($f, $s0 = null, $xs = null) use ($traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'])(($traverseWithIndex1)((function() use ($f) {
  $__fn = function($i, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_StateR'])((function() use ($f, $i, $a) {
  $__fn = function($s) use ($f, $i, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($f)($i, $s, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_TraversableWithIndex_scanrWithIndex
$Data_TraversableWithIndex_scanrWithIndex = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapAccumRWithIndex1 = ($GLOBALS['Data_TraversableWithIndex_mapAccumRWithIndex'])($dictTraversableWithIndex);
    $__res = (function() use ($mapAccumRWithIndex1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumRWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (($mapAccumRWithIndex1)((function() use ($f) {
  $__fn = function($i, $b = null, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$b__prime__ = ($f)($i, $a, $b);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_TraversableWithIndex_mapAccumLWithIndex
$Data_TraversableWithIndex_mapAccumLWithIndex = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex1 = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex, $GLOBALS['Data_Traversable_Accum_Internal_applicativeStateL']);
    $__res = (function() use ($traverseWithIndex1) {
  $__fn = function($f, $s0 = null, $xs = null) use ($traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'])(($traverseWithIndex1)((function() use ($f) {
  $__fn = function($i, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Traversable_Accum_Internal_StateL'])((function() use ($f, $i, $a) {
  $__fn = function($s) use ($f, $i, $a, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($f)($i, $s, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_TraversableWithIndex_scanlWithIndex
$Data_TraversableWithIndex_scanlWithIndex = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapAccumLWithIndex1 = ($GLOBALS['Data_TraversableWithIndex_mapAccumLWithIndex'])($dictTraversableWithIndex);
    $__res = (function() use ($mapAccumLWithIndex1) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumLWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (($mapAccumLWithIndex1)((function() use ($f) {
  $__fn = function($i, $b = null, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$b__prime__ = ($f)($i, $b, $a);
    $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_TraversableWithIndex_forWithIndex
$Data_TraversableWithIndex_forWithIndex = (function() {
  $__fn = function($dictApplicative, $dictTraversableWithIndex = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Function_flip'])(($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex, $dictApplicative));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

