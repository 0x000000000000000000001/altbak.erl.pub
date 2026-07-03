<?php

namespace Data\Profunctor;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
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


// Data_Profunctor_composeFlipped
$Data_Profunctor_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Profunctor_identity
$Data_Profunctor_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_Profunctor_wrap
$Data_Profunctor_wrap = ($GLOBALS['Data_Newtype_wrap'])($GLOBALS['Prim_undefined']);

// Data_Profunctor_unwrap
$Data_Profunctor_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_Profunctor_Profunctor$Dict
$Data_Profunctor_Profunctor__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_profunctorFn
$Data_Profunctor_profunctorFn = ($GLOBALS['Data_Profunctor_Profunctor__dollar__Dict'])((object)["dimap" => (function() {
  $__fn = function($a2b, $c2d = null, $b2c = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Profunctor_composeFlipped'])($a2b, ($GLOBALS['Data_Profunctor_composeFlipped'])($b2c, $c2d));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);

// Data_Profunctor_dimap
$Data_Profunctor_dimap = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->dimap;
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

// Data_Profunctor_lcmap
$Data_Profunctor_lcmap = (function() {
  $__fn = function($dictProfunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$dimap1 = ($GLOBALS['Data_Profunctor_dimap'])($dictProfunctor);
    $__res = (function() use ($dimap1) {
  $__fn = function($a2b) use ($dimap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($dimap1)($a2b, $GLOBALS['Data_Profunctor_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_rmap
$Data_Profunctor_rmap = (function() {
  $__fn = function($dictProfunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$dimap1 = ($GLOBALS['Data_Profunctor_dimap'])($dictProfunctor);
    $__res = (function() use ($dimap1) {
  $__fn = function($b2c) use ($dimap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($dimap1)($GLOBALS['Data_Profunctor_identity'], $b2c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_unwrapIso
$Data_Profunctor_unwrapIso = (function() {
  $__fn = function($dictProfunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$dimap1 = ($GLOBALS['Data_Profunctor_dimap'])($dictProfunctor);
    $__res = (function() use ($dimap1) {
  $__fn = function($__dollar____unused) use ($dimap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($dimap1)($GLOBALS['Data_Profunctor_wrap'], $GLOBALS['Data_Profunctor_unwrap']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_wrapIso
$Data_Profunctor_wrapIso = (function() {
  $__fn = function($dictProfunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$dimap1 = ($GLOBALS['Data_Profunctor_dimap'])($dictProfunctor);
    $__res = (function() use ($dimap1) {
  $__fn = function($__dollar____unused, $v = null) use ($dimap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($dimap1)($GLOBALS['Data_Profunctor_unwrap'], $GLOBALS['Data_Profunctor_wrap']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Profunctor_arr
$Data_Profunctor_arr = (function() {
  $__fn = function($dictCategory) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$identity1 = ($GLOBALS['Control_Category_identity'])($dictCategory);
    $__res = (function() use ($identity1) {
  $__fn = function($dictProfunctor) use ($identity1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$rmap1 = ($GLOBALS['Data_Profunctor_rmap'])($dictProfunctor);
    $__res = (function() use ($rmap1, $identity1) {
  $__fn = function($f) use ($rmap1, $identity1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($rmap1)($f, $identity1);
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

