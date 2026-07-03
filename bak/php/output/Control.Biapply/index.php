<?php

namespace Control\Biapply;

require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';

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


// Control_Biapply_identity
$Control_Biapply_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Control_Biapply_Biapply$Dict
$Control_Biapply_Biapply__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Biapply_biapplyTuple
$Control_Biapply_biapplyTuple = ($GLOBALS['Control_Biapply_Biapply__dollar__Dict'])((object)["biapply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$f = ($__case_0)->values[0];
$g = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
$b = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($f)($a), ($g)($b));
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
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Bifunctor_bifunctorTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Biapply_biapply
$Control_Biapply_biapply = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->biapply;
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

// Control_Biapply_biapplyFirst
$Control_Biapply_biapplyFirst = (function() {
  $__fn = function($dictBiapply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$biapply1 = ($GLOBALS['Control_Biapply_biapply'])($dictBiapply);
$bimap = ($GLOBALS['Data_Bifunctor_bimap'])((($dictBiapply)->Bifunctor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($biapply1, $bimap) {
  $__fn = function($a, $b = null) use ($biapply1, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($biapply1)(($GLOBALS['Control_Biapply_identity'])(($bimap)(($GLOBALS['Data_Function_const'])($GLOBALS['Control_Biapply_identity']), ($GLOBALS['Data_Function_const'])($GLOBALS['Control_Biapply_identity'])), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Biapply_biapplySecond
$Control_Biapply_biapplySecond = (function() {
  $__fn = function($dictBiapply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$biapply1 = ($GLOBALS['Control_Biapply_biapply'])($dictBiapply);
$bimap = ($GLOBALS['Data_Bifunctor_bimap'])((($dictBiapply)->Bifunctor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($biapply1, $bimap) {
  $__fn = function($a, $b = null) use ($biapply1, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($biapply1)(($GLOBALS['Control_Biapply_identity'])(($bimap)($GLOBALS['Data_Function_const'], $GLOBALS['Data_Function_const']), $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Biapply_bilift2
$Control_Biapply_bilift2 = (function() {
  $__fn = function($dictBiapply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$biapply1 = ($GLOBALS['Control_Biapply_biapply'])($dictBiapply);
$bimap = ($GLOBALS['Data_Bifunctor_bimap'])((($dictBiapply)->Bifunctor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($biapply1, $bimap) {
  $__fn = function($f, $g = null, $a = null, $b = null) use ($biapply1, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($biapply1)(($GLOBALS['Control_Biapply_identity'])(($bimap)($f, $g), $a), $b);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Biapply_bilift3
$Control_Biapply_bilift3 = (function() {
  $__fn = function($dictBiapply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$biapply1 = ($GLOBALS['Control_Biapply_biapply'])($dictBiapply);
$bimap = ($GLOBALS['Data_Bifunctor_bimap'])((($dictBiapply)->Bifunctor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($biapply1, $bimap) {
  $__fn = function($f, $g = null, $a = null, $b = null, $c = null) use ($biapply1, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) return phpurs_curry_fallback($__fn, func_get_args(), 5);
    $__res = ($biapply1)(($biapply1)(($GLOBALS['Control_Biapply_identity'])(($bimap)($f, $g), $a), $b), $c);
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

