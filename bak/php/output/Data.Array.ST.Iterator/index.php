<?php

namespace Data\Array\ST\Iterator;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Ref/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Array.ST.Iterator/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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


// Data_Array_ST_Iterator_bind
$Data_Array_ST_Iterator_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Control_Monad_ST_Internal_bindST']);

// Data_Array_ST_Iterator_pure
$Data_Array_ST_Iterator_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Control_Monad_ST_Internal_applicativeST']);

// Data_Array_ST_Iterator_add
$Data_Array_ST_Iterator_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Array_ST_Iterator_map
$Data_Array_ST_Iterator_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Control_Monad_ST_Internal_functorST']);

// Data_Array_ST_Iterator_not
$Data_Array_ST_Iterator_not = ($GLOBALS['Data_HeytingAlgebra_not'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Array_ST_Iterator_void
$Data_Array_ST_Iterator_void = ($GLOBALS['Data_Functor_void'])($GLOBALS['Control_Monad_ST_Internal_functorST']);

// Data_Array_ST_Iterator_Iterator
$Data_Array_ST_Iterator_Iterator = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Iterator", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_Iterator_peek
$Data_Array_ST_Iterator_peek = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Iterator")) {
$f = ($__case_0)->values[0];
$currentIndex = ($__case_0)->values[1];
return ($GLOBALS['Data_Array_ST_Iterator_bind'])(($GLOBALS['Control_Monad_ST_Internal_read'])($currentIndex), (function() use ($f) {
  $__fn = function($i) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_Iterator_pure'])(($f)($i));
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

// Data_Array_ST_Iterator_next
$Data_Array_ST_Iterator_next = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Iterator")) {
$f = ($__case_0)->values[0];
$currentIndex = ($__case_0)->values[1];
return ($GLOBALS['Data_Array_ST_Iterator_bind'])(($GLOBALS['Control_Monad_ST_Internal_read'])($currentIndex), (function() use ($currentIndex, $f) {
  $__fn = function($i) use ($currentIndex, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_Iterator_bind'])(($GLOBALS['Control_Monad_ST_Internal_modify'])((function() {
  $__fn = function($v1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_Iterator_add'])($v1, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $currentIndex), (function() use ($f, $i) {
  $__fn = function($__dollar____unused) use ($f, $i, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_Iterator_pure'])(($f)($i));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
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

// Data_Array_ST_Iterator_pushWhile
$Data_Array_ST_Iterator_pushWhile = (function() {
  $__fn = function($p, $iter = null, $array = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Array_ST_Iterator_bind'])(($GLOBALS['Control_Monad_ST_Internal_new'])(false), (function() use ($iter) {
  $__fn = function($break) use ($iter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_ST_Internal_while'])(($GLOBALS['Data_Array_ST_Iterator_map'])($GLOBALS['Data_Array_ST_Iterator_not'], ($GLOBALS['Control_Monad_ST_Internal_read'])($break)), ($GLOBALS['Data_Array_ST_Iterator_bind'])(($GLOBALS['Data_Array_ST_Iterator_peek'])($iter), (function() use ($break) {
  $__body = function($mx) use ($break) {
    $__case_0 = $mx;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_Array_ST_Iterator_void'])(($GLOBALS['Control_Monad_ST_Internal_write'])(true, $break));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($mx) use ($break, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($mx);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_Iterator_pushAll
$Data_Array_ST_Iterator_pushAll = ($GLOBALS['Data_Array_ST_Iterator_pushWhile'])(($GLOBALS['Data_Function_const'])(true));

// Data_Array_ST_Iterator_iterator
$Data_Array_ST_Iterator_iterator = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_Iterator_map'])(($GLOBALS['Data_Array_ST_Iterator_Iterator'])($f), ($GLOBALS['Control_Monad_ST_Internal_new'])(0));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_Iterator_iterate
$Data_Array_ST_Iterator_iterate = (function() {
  $__fn = function($iter, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_ST_Iterator_bind'])(($GLOBALS['Control_Monad_ST_Internal_new'])(false), (function() use ($iter, $f) {
  $__fn = function($break) use ($iter, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_ST_Internal_while'])(($GLOBALS['Data_Array_ST_Iterator_map'])($GLOBALS['Data_Array_ST_Iterator_not'], ($GLOBALS['Control_Monad_ST_Internal_read'])($break)), ($GLOBALS['Data_Array_ST_Iterator_bind'])(($GLOBALS['Data_Array_ST_Iterator_next'])($iter), (function() use ($f, $break) {
  $__body = function($mx) use ($f, $break) {
    $__case_0 = $mx;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($f)($x);
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Array_ST_Iterator_void'])(($GLOBALS['Control_Monad_ST_Internal_write'])(true, $break));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($mx) use ($f, $break, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($mx);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_Iterator_exhausted
$Data_Array_ST_Iterator_exhausted = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn'], ($GLOBALS['Data_Array_ST_Iterator_map'])($GLOBALS['Data_Maybe_isNothing']), $GLOBALS['Data_Array_ST_Iterator_peek']);

