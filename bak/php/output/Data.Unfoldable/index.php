<?php

namespace Data\Unfoldable;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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


// Data_Unfoldable_map
$Data_Unfoldable_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_Unfoldable_fromJust
$Data_Unfoldable_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Unfoldable_lessThanOrEq
$Data_Unfoldable_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Unfoldable_sub
$Data_Unfoldable_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_Unfoldable_Unfoldable$Dict
$Data_Unfoldable_Unfoldable__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Unfoldable_unfoldr
$Data_Unfoldable_unfoldr = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->unfoldr;
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

// Data_Unfoldable_unfoldableMaybe
$Data_Unfoldable_unfoldableMaybe = ($GLOBALS['Data_Unfoldable_Unfoldable__dollar__Dict'])((object)["unfoldr" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Unfoldable_map'])($GLOBALS['Data_Tuple_fst'], ($f)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Unfoldable1_unfoldable1Maybe'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Unfoldable_unfoldableArray
$Data_Unfoldable_unfoldableArray = ($GLOBALS['Data_Unfoldable_Unfoldable__dollar__Dict'])((object)["unfoldr" => ($GLOBALS['Data_Unfoldable_unfoldrArrayImpl'])($GLOBALS['Data_Maybe_isNothing'], ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Unfoldable_fromJust'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $GLOBALS['Data_Tuple_fst'], $GLOBALS['Data_Tuple_snd']), "Unfoldable10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Unfoldable1_unfoldable1Array'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Unfoldable_replicate
$Data_Unfoldable_replicate = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldr1 = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable);
    $__res = (function() use ($unfoldr1) {
  $__fn = function($n, $v = null) use ($unfoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$step = (function() use ($v) {
  $__body = function($i) use ($v) {
    $__case_0 = ($GLOBALS['Data_Unfoldable_lessThanOrEq'])($i, 0);
    if (($__case_0 === true)) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if (true) {
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])($v, ($GLOBALS['Data_Unfoldable_sub'])($i, 1)));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($i) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($i);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr1)($step, $n);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Unfoldable_replicateA
$Data_Unfoldable_replicateA = (function() {
  $__fn = function($dictApplicative, $dictUnfoldable = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$replicate1 = ($GLOBALS['Data_Unfoldable_replicate'])($dictUnfoldable);
    $__res = (function() use ($dictApplicative, $replicate1) {
  $__fn = function($dictTraversable) use ($dictApplicative, $replicate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequence = ($GLOBALS['Data_Traversable_sequence'])($dictTraversable, $dictApplicative);
    $__res = (function() use ($sequence, $replicate1) {
  $__fn = function($n, $m = null) use ($sequence, $replicate1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($sequence)(($replicate1)($n, $m));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Unfoldable_none
$Data_Unfoldable_none = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']), $GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Unfoldable_fromMaybe
$Data_Unfoldable_fromMaybe = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, (function() {
  $__fn = function($b) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable_map'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_Tuple_Tuple'], $GLOBALS['Data_Maybe_Nothing']), $b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

