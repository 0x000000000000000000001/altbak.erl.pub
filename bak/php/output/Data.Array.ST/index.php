<?php

namespace Data\Array\ST;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Uncurried/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
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


// Data_Array_ST_bind
$Data_Array_ST_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Control_Monad_ST_Internal_bindST']);

// Data_Array_ST_negate
$Data_Array_ST_negate = ($GLOBALS['Data_Ring_negate'])($GLOBALS['Data_Ring_ringInt']);

// Data_Array_ST_pure
$Data_Array_ST_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Control_Monad_ST_Internal_applicativeST']);

// Data_Array_ST_unshiftAll
$Data_Array_ST_unshiftAll = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'])($GLOBALS['Data_Array_ST_unshiftAllImpl']);

// Data_Array_ST_unshift
$Data_Array_ST_unshift = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'])($GLOBALS['Data_Array_ST_unshiftAllImpl'], [$a]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_unsafeThaw
$Data_Array_ST_unsafeThaw = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'])($GLOBALS['Data_Array_ST_unsafeThawImpl']);

// Data_Array_ST_unsafeFreeze
$Data_Array_ST_unsafeFreeze = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'])($GLOBALS['Data_Array_ST_unsafeFreezeImpl']);

// Data_Array_ST_toAssocArray
$Data_Array_ST_toAssocArray = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'])($GLOBALS['Data_Array_ST_toAssocArrayImpl']);

// Data_Array_ST_thaw
$Data_Array_ST_thaw = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'])($GLOBALS['Data_Array_ST_thawImpl']);

// Data_Array_ST_withArray
$Data_Array_ST_withArray = (function() {
  $__fn = function($f, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Array_ST_bind'])(($GLOBALS['Data_Array_ST_thaw'])($xs), (function() use ($f) {
  $__fn = function($result) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_bind'])(($f)($result), (function() use ($result) {
  $__fn = function($__dollar____unused) use ($result, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_unsafeFreeze'])($result);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_splice
$Data_Array_ST_splice = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn4'])($GLOBALS['Data_Array_ST_spliceImpl']);

// Data_Array_ST_sortBy
$Data_Array_ST_sortBy = (function() {
  $__fn = function($comp) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'])($GLOBALS['Data_Array_ST_sortByImpl'], $comp, (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return 1;
} else {
if ((($__case_0)->tag === "EQ")) {
return 0;
} else {
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Array_ST_negate'])(1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_sortWith
$Data_Array_ST_sortWith = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comparing = ($GLOBALS['Data_Ord_comparing'])($dictOrd);
    $__res = (function() use ($comparing) {
  $__fn = function($f) use ($comparing, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_sortBy'])(($comparing)($f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_sort
$Data_Array_ST_sort = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Array_ST_sortBy'])(($GLOBALS['Data_Ord_compare'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_shift
$Data_Array_ST_shift = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'])($GLOBALS['Data_Array_ST_shiftImpl'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Array_ST_run
$Data_Array_ST_run = (function() {
  $__fn = function($st) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_ST_Internal_run'])(($GLOBALS['Data_Array_ST_bind'])($st, $GLOBALS['Data_Array_ST_unsafeFreeze']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_pushAll
$Data_Array_ST_pushAll = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'])($GLOBALS['Data_Array_ST_pushAllImpl']);

// Data_Array_ST_push
$Data_Array_ST_push = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'])($GLOBALS['Data_Array_ST_pushImpl']);

// Data_Array_ST_pop
$Data_Array_ST_pop = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'])($GLOBALS['Data_Array_ST_popImpl'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Array_ST_poke
$Data_Array_ST_poke = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'])($GLOBALS['Data_Array_ST_pokeImpl']);

// Data_Array_ST_peek
$Data_Array_ST_peek = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn4'])($GLOBALS['Data_Array_ST_peekImpl'], $GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing']);

// Data_Array_ST_modify
$Data_Array_ST_modify = (function() {
  $__fn = function($i, $f = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Array_ST_bind'])(($GLOBALS['Data_Array_ST_peek'])($i, $xs), (function() use ($i, $f, $xs) {
  $__body = function($entry) use ($i, $f, $xs) {
    $__case_0 = $entry;
    if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($GLOBALS['Data_Array_ST_poke'])($i, ($f)($x), $xs);
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Array_ST_pure'])(false);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($entry) use ($i, $f, $xs, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($entry);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Array_ST_length
$Data_Array_ST_length = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'])($GLOBALS['Data_Array_ST_lengthImpl']);

// Data_Array_ST_freeze
$Data_Array_ST_freeze = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'])($GLOBALS['Data_Array_ST_freezeImpl']);

// Data_Array_ST_clone
$Data_Array_ST_clone = ($GLOBALS['Control_Monad_ST_Uncurried_runSTFn1'])($GLOBALS['Data_Array_ST_cloneImpl']);

