<?php

namespace Data\Profunctor\Split;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Exists/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Split/index.php';
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


// Data_Profunctor_Split_compose
$Data_Profunctor_Split_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Profunctor_Split_identity
$Data_Profunctor_Split_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_Profunctor_Split_SplitF
$Data_Profunctor_Split_SplitF = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)["tag" => "SplitF", "values" => [$value0, $value1, $value2]];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Split_Split
$Data_Profunctor_Split_Split = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Split_unSplit
$Data_Profunctor_Split_unSplit = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$e = $__case_1;
return ($GLOBALS['Data_Exists_runExists'])((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "SplitF")) {
$g = ($__case_0)->values[0];
$h = ($__case_0)->values[1];
$fx = ($__case_0)->values[2];
return ($f1)($g, $h, $fx);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $e);
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

// Data_Profunctor_Split_split
$Data_Profunctor_Split_split = (function() {
  $__fn = function($f, $g = null, $fx = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Profunctor_Split_Split'])(($GLOBALS['Data_Exists_mkExists'])(($GLOBALS['Data_Profunctor_Split_SplitF'])($f, $g, $fx)));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Split_profunctorSplit
$Data_Profunctor_Split_profunctorSplit = ($GLOBALS['Data_Profunctor_Profunctor__dollar__Dict'])((object)["dimap" => (function() {
  $__fn = function($f, $g = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Profunctor_Split_unSplit'])((function() use ($f, $g) {
  $__fn = function($h, $i = null) use ($f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Profunctor_Split_split'])(($GLOBALS['Data_Profunctor_Split_compose'])($h, $f), ($GLOBALS['Data_Profunctor_Split_compose'])($g, $i));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Profunctor_Split_lowerSplit
$Data_Profunctor_Split_lowerSplit = (function() {
  $__fn = function($dictInvariant) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Profunctor_Split_unSplit'])(($GLOBALS['Data_Function_flip'])(($GLOBALS['Data_Functor_Invariant_imap'])($dictInvariant)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Split_liftSplit
$Data_Profunctor_Split_liftSplit = ($GLOBALS['Data_Profunctor_Split_split'])($GLOBALS['Data_Profunctor_Split_identity'], $GLOBALS['Data_Profunctor_Split_identity']);

// Data_Profunctor_Split_hoistSplit
$Data_Profunctor_Split_hoistSplit = (function() {
  $__fn = function($nat) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Profunctor_Split_unSplit'])((function() use ($nat) {
  $__fn = function($f, $g = null) use ($nat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Profunctor_Split_compose'])(($GLOBALS['Data_Profunctor_Split_split'])($f, $g), $nat);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_Split_functorSplit
$Data_Profunctor_Split_functorSplit = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Profunctor_Split_unSplit'])((function() use ($f) {
  $__fn = function($g, $h = null, $fx = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Profunctor_Split_split'])($g, ($GLOBALS['Data_Profunctor_Split_compose'])($f, $h), $fx);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

