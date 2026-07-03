<?php

namespace Data\Array\NonEmpty\Internal;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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


// Data_Array_NonEmpty_Internal_append
$Data_Array_NonEmpty_Internal_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Array_NonEmpty_Internal_NonEmptyArray
$Data_Array_NonEmpty_Internal_NonEmptyArray = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_Internal_unfoldable1NonEmptyArray
$Data_Array_NonEmpty_Internal_unfoldable1NonEmptyArray = $GLOBALS['Data_Unfoldable1_unfoldable1Array'];

// Data_Array_NonEmpty_Internal_traversableWithIndexNonEmptyArray
$Data_Array_NonEmpty_Internal_traversableWithIndexNonEmptyArray = $GLOBALS['Data_TraversableWithIndex_traversableWithIndexArray'];

// Data_Array_NonEmpty_Internal_traversableNonEmptyArray
$Data_Array_NonEmpty_Internal_traversableNonEmptyArray = $GLOBALS['Data_Traversable_traversableArray'];

// Data_Array_NonEmpty_Internal_showNonEmptyArray
$Data_Array_NonEmpty_Internal_showNonEmptyArray = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_Show_showArray'])($dictShow));
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$xs = $__case_0;
return ($GLOBALS['Data_Array_NonEmpty_Internal_append'])("(NonEmptyArray ", ($GLOBALS['Data_Array_NonEmpty_Internal_append'])(($show)($xs), ")"));
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

// Data_Array_NonEmpty_Internal_semigroupNonEmptyArray
$Data_Array_NonEmpty_Internal_semigroupNonEmptyArray = $GLOBALS['Data_Semigroup_semigroupArray'];

// Data_Array_NonEmpty_Internal_ordNonEmptyArray
$Data_Array_NonEmpty_Internal_ordNonEmptyArray = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Ord_ordArray'])($dictOrd);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_Internal_ord1NonEmptyArray
$Data_Array_NonEmpty_Internal_ord1NonEmptyArray = $GLOBALS['Data_Ord_ord1Array'];

// Data_Array_NonEmpty_Internal_monadNonEmptyArray
$Data_Array_NonEmpty_Internal_monadNonEmptyArray = $GLOBALS['Control_Monad_monadArray'];

// Data_Array_NonEmpty_Internal_functorWithIndexNonEmptyArray
$Data_Array_NonEmpty_Internal_functorWithIndexNonEmptyArray = $GLOBALS['Data_FunctorWithIndex_functorWithIndexArray'];

// Data_Array_NonEmpty_Internal_functorNonEmptyArray
$Data_Array_NonEmpty_Internal_functorNonEmptyArray = $GLOBALS['Data_Functor_functorArray'];

// Data_Array_NonEmpty_Internal_foldableWithIndexNonEmptyArray
$Data_Array_NonEmpty_Internal_foldableWithIndexNonEmptyArray = $GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'];

// Data_Array_NonEmpty_Internal_foldableNonEmptyArray
$Data_Array_NonEmpty_Internal_foldableNonEmptyArray = $GLOBALS['Data_Foldable_foldableArray'];

// Data_Array_NonEmpty_Internal_foldable1NonEmptyArray
$Data_Array_NonEmpty_Internal_foldable1NonEmptyArray = ($GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'])((object)["foldMap1" => (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultL'])($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'], $GLOBALS['Data_Array_NonEmpty_Internal_functorNonEmptyArray'], $dictSemigroup);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldr1" => ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_NonEmpty_Internal_foldr1Impl']), "foldl1" => ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Array_NonEmpty_Internal_foldl1Impl']), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Array_NonEmpty_Internal_foldableNonEmptyArray'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Array_NonEmpty_Internal_traversable1NonEmptyArray
$Data_Array_NonEmpty_Internal_traversable1NonEmptyArray = ($GLOBALS['Data_Semigroup_Traversable_Traversable1__dollar__Dict'])((object)["traverse1" => (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$apply = ($GLOBALS['Control_Apply_apply'])($dictApply);
$map = ($GLOBALS['Data_Functor_map'])((($dictApply)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($apply, $map) {
  $__fn = function($f) use ($apply, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Array_NonEmpty_Internal_traverse1Impl'], $apply, $map, $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
    $__res = ($GLOBALS['Data_Semigroup_Traversable_sequence1Default'])($GLOBALS['Data_Array_NonEmpty_Internal_traversable1NonEmptyArray'], $dictApply);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Array_NonEmpty_Internal_traversableNonEmptyArray'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Array_NonEmpty_Internal_eqNonEmptyArray
$Data_Array_NonEmpty_Internal_eqNonEmptyArray = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Eq_eqArray'])($dictEq);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_NonEmpty_Internal_eq1NonEmptyArray
$Data_Array_NonEmpty_Internal_eq1NonEmptyArray = $GLOBALS['Data_Eq_eq1Array'];

// Data_Array_NonEmpty_Internal_bindNonEmptyArray
$Data_Array_NonEmpty_Internal_bindNonEmptyArray = $GLOBALS['Control_Bind_bindArray'];

// Data_Array_NonEmpty_Internal_applyNonEmptyArray
$Data_Array_NonEmpty_Internal_applyNonEmptyArray = $GLOBALS['Control_Apply_applyArray'];

// Data_Array_NonEmpty_Internal_applicativeNonEmptyArray
$Data_Array_NonEmpty_Internal_applicativeNonEmptyArray = $GLOBALS['Control_Applicative_applicativeArray'];

// Data_Array_NonEmpty_Internal_altNonEmptyArray
$Data_Array_NonEmpty_Internal_altNonEmptyArray = $GLOBALS['Control_Alt_altArray'];

