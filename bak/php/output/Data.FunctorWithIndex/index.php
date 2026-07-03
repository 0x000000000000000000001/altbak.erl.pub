<?php

namespace Data\FunctorWithIndex;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
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


// Data_FunctorWithIndex_map
$Data_FunctorWithIndex_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Tuple_functorTuple']);

// Data_FunctorWithIndex_bimap
$Data_FunctorWithIndex_bimap = ($GLOBALS['Data_Bifunctor_bimap'])($GLOBALS['Data_Bifunctor_bifunctorTuple']);

// Data_FunctorWithIndex_compose
$Data_FunctorWithIndex_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_FunctorWithIndex_map1
$Data_FunctorWithIndex_map1 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Monoid_Multiplicative_functorMultiplicative']);

// Data_FunctorWithIndex_map2
$Data_FunctorWithIndex_map2 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_FunctorWithIndex_map3
$Data_FunctorWithIndex_map3 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_Last_functorLast']);

// Data_FunctorWithIndex_map4
$Data_FunctorWithIndex_map4 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_First_functorFirst']);

// Data_FunctorWithIndex_map5
$Data_FunctorWithIndex_map5 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Either_functorEither']);

// Data_FunctorWithIndex_map6
$Data_FunctorWithIndex_map6 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Monoid_Dual_functorDual']);

// Data_FunctorWithIndex_map7
$Data_FunctorWithIndex_map7 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Monoid_Disj_functorDisj']);

// Data_FunctorWithIndex_bimap1
$Data_FunctorWithIndex_bimap1 = ($GLOBALS['Data_Bifunctor_bimap'])($GLOBALS['Data_Bifunctor_bifunctorEither']);

// Data_FunctorWithIndex_map8
$Data_FunctorWithIndex_map8 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Monoid_Conj_functorConj']);

// Data_FunctorWithIndex_map9
$Data_FunctorWithIndex_map9 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Monoid_Additive_functorAdditive']);

// Data_FunctorWithIndex_FunctorWithIndex$Dict
$Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FunctorWithIndex_mapWithIndex
$Data_FunctorWithIndex_mapWithIndex = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mapWithIndex;
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

// Data_FunctorWithIndex_mapDefault
$Data_FunctorWithIndex_mapDefault = (function() {
  $__fn = function($dictFunctorWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapWithIndex1 = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($dictFunctorWithIndex);
    $__res = (function() use ($mapWithIndex1) {
  $__fn = function($f) use ($mapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($mapWithIndex1)(($GLOBALS['Data_Function_const'])($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FunctorWithIndex_functorWithIndexTuple
$Data_FunctorWithIndex_functorWithIndexTuple = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Tuple_functorTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexProduct
$Data_FunctorWithIndex_functorWithIndexProduct = (function() {
  $__fn = function($dictFunctorWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapWithIndex1 = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($dictFunctorWithIndex);
$functorProduct = ($GLOBALS['Data_Functor_Product_functorProduct'])((($dictFunctorWithIndex)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($functorProduct, $mapWithIndex1) {
  $__fn = function($dictFunctorWithIndex1) use ($functorProduct, $mapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapWithIndex2 = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($dictFunctorWithIndex1);
$functorProduct1 = ($functorProduct)((($dictFunctorWithIndex1)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() use ($mapWithIndex1, $mapWithIndex2) {
  $__body = function($f, $v) use ($mapWithIndex1, $mapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($GLOBALS['Data_Functor_Product_Product'])(($GLOBALS['Data_FunctorWithIndex_bimap'])(($mapWithIndex1)(($GLOBALS['Data_FunctorWithIndex_compose'])($f1, $GLOBALS['Data_Either_Left'])), ($mapWithIndex2)(($GLOBALS['Data_FunctorWithIndex_compose'])($f1, $GLOBALS['Data_Either_Right'])), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex1, $mapWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorProduct1) {
  $__fn = function($__dollar____unused) use ($functorProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorProduct1;
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

// Data_FunctorWithIndex_functorWithIndexMultiplicative
$Data_FunctorWithIndex_functorWithIndexMultiplicative = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map1'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Monoid_Multiplicative_functorMultiplicative'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexMaybe
$Data_FunctorWithIndex_functorWithIndexMaybe = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map2'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_functorMaybe'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexLast
$Data_FunctorWithIndex_functorWithIndexLast = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map3'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_Last_functorLast'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexIdentity
$Data_FunctorWithIndex_functorWithIndexIdentity = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$a = $__case_1;
return ($GLOBALS['Data_Identity_Identity'])(($f1)($GLOBALS['Data_Unit_unit'], $a));
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
    $__res = $GLOBALS['Data_Identity_functorIdentity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexFirst
$Data_FunctorWithIndex_functorWithIndexFirst = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map4'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_First_functorFirst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexEither
$Data_FunctorWithIndex_functorWithIndexEither = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map5'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_functorEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexDual
$Data_FunctorWithIndex_functorWithIndexDual = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map6'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Monoid_Dual_functorDual'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexDisj
$Data_FunctorWithIndex_functorWithIndexDisj = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map7'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Monoid_Disj_functorDisj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexCoproduct
$Data_FunctorWithIndex_functorWithIndexCoproduct = (function() {
  $__fn = function($dictFunctorWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapWithIndex1 = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($dictFunctorWithIndex);
$functorCoproduct = ($GLOBALS['Data_Functor_Coproduct_functorCoproduct'])((($dictFunctorWithIndex)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($functorCoproduct, $mapWithIndex1) {
  $__fn = function($dictFunctorWithIndex1) use ($functorCoproduct, $mapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapWithIndex2 = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($dictFunctorWithIndex1);
$functorCoproduct1 = ($functorCoproduct)((($dictFunctorWithIndex1)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() use ($mapWithIndex1, $mapWithIndex2) {
  $__body = function($f, $v) use ($mapWithIndex1, $mapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return ($GLOBALS['Data_Functor_Coproduct_Coproduct'])(($GLOBALS['Data_FunctorWithIndex_bimap1'])(($mapWithIndex1)(($GLOBALS['Data_FunctorWithIndex_compose'])($f1, $GLOBALS['Data_Either_Left'])), ($mapWithIndex2)(($GLOBALS['Data_FunctorWithIndex_compose'])($f1, $GLOBALS['Data_Either_Right'])), $e));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex1, $mapWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCoproduct1) {
  $__fn = function($__dollar____unused) use ($functorCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorCoproduct1;
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

// Data_FunctorWithIndex_functorWithIndexConst
$Data_FunctorWithIndex_functorWithIndexConst = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_1;
return ($GLOBALS['Data_Const_Const'])($x);
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
    $__res = $GLOBALS['Data_Const_functorConst'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexConj
$Data_FunctorWithIndex_functorWithIndexConj = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map8'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Monoid_Conj_functorConj'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexCompose
$Data_FunctorWithIndex_functorWithIndexCompose = (function() {
  $__fn = function($dictFunctorWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapWithIndex1 = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($dictFunctorWithIndex);
$functorCompose = ($GLOBALS['Data_Functor_Compose_functorCompose'])((($dictFunctorWithIndex)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($functorCompose, $mapWithIndex1) {
  $__fn = function($dictFunctorWithIndex1) use ($functorCompose, $mapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapWithIndex2 = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($dictFunctorWithIndex1);
$functorCompose1 = ($functorCompose)((($dictFunctorWithIndex1)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() use ($mapWithIndex1, $mapWithIndex2) {
  $__body = function($f, $v) use ($mapWithIndex1, $mapWithIndex2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($GLOBALS['Data_Functor_Compose_Compose'])(($mapWithIndex1)(($GLOBALS['Data_FunctorWithIndex_compose'])($mapWithIndex2, ($GLOBALS['Data_Tuple_curry'])($f1)), $fga));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex1, $mapWithIndex2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCompose1) {
  $__fn = function($__dollar____unused) use ($functorCompose1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorCompose1;
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

// Data_FunctorWithIndex_functorWithIndexArray
$Data_FunctorWithIndex_functorWithIndexArray = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => $GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'], "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Functor_functorArray'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_FunctorWithIndex_functorWithIndexApp
$Data_FunctorWithIndex_functorWithIndexApp = (function() {
  $__fn = function($dictFunctorWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapWithIndex1 = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($dictFunctorWithIndex);
$functorApp = ($GLOBALS['Data_Functor_App_functorApp'])((($dictFunctorWithIndex)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() use ($mapWithIndex1) {
  $__body = function($f, $v) use ($mapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
return ($GLOBALS['Data_Functor_App_App'])(($mapWithIndex1)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorApp) {
  $__fn = function($__dollar____unused) use ($functorApp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorApp;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_FunctorWithIndex_functorWithIndexAdditive
$Data_FunctorWithIndex_functorWithIndexAdditive = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FunctorWithIndex_map9'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Monoid_Additive_functorAdditive'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

