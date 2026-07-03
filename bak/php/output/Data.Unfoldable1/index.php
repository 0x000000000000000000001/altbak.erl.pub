<?php

namespace Data\Unfoldable1;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
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


// Data_Unfoldable1_fromJust
$Data_Unfoldable1_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Unfoldable1_lessThanOrEq
$Data_Unfoldable1_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Unfoldable1_sub
$Data_Unfoldable1_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_Unfoldable1_add
$Data_Unfoldable1_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Unfoldable1_eq
$Data_Unfoldable1_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_Unfoldable1_greaterThanOrEq
$Data_Unfoldable1_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Unfoldable1_negate
$Data_Unfoldable1_negate = ($GLOBALS['Data_Ring_negate'])($GLOBALS['Data_Ring_ringInt']);

// Data_Unfoldable1_greaterThan
$Data_Unfoldable1_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Unfoldable1_Unfoldable1$Dict
$Data_Unfoldable1_Unfoldable1__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Unfoldable1_unfoldr1
$Data_Unfoldable1_unfoldr1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->unfoldr1;
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

// Data_Unfoldable1_unfoldable1Maybe
$Data_Unfoldable1_unfoldable1Maybe = ($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'])((object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_fst'])(($f)($b)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Unfoldable1_unfoldable1Array
$Data_Unfoldable1_unfoldable1Array = ($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'])((object)["unfoldr1" => ($GLOBALS['Data_Unfoldable1_unfoldr1ArrayImpl'])($GLOBALS['Data_Maybe_isNothing'], ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Unfoldable1_fromJust'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $GLOBALS['Data_Tuple_fst'], $GLOBALS['Data_Tuple_snd'])]);

// Data_Unfoldable1_replicate1
$Data_Unfoldable1_replicate1 = (function() {
  $__fn = function($dictUnfoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldr11 = ($GLOBALS['Data_Unfoldable1_unfoldr1'])($dictUnfoldable1);
    $__res = (function() use ($unfoldr11) {
  $__fn = function($n, $v = null) use ($unfoldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$step = (function() {
  $__body = function($i) {
    $__case_0 = $i;
    if (true) {
$i1 = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($i) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($i);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfoldr11)($step, ($GLOBALS['Data_Unfoldable1_sub'])($n, 1));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Unfoldable1_replicate1A
$Data_Unfoldable1_replicate1A = (function() {
  $__fn = function($dictApply, $dictUnfoldable1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$replicate11 = ($GLOBALS['Data_Unfoldable1_replicate1'])($dictUnfoldable1);
    $__res = (function() use ($dictApply, $replicate11) {
  $__fn = function($dictTraversable1) use ($dictApply, $replicate11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequence1 = ($GLOBALS['Data_Semigroup_Traversable_sequence1'])($dictTraversable1, $dictApply);
    $__res = (function() use ($sequence1, $replicate11) {
  $__fn = function($n, $m = null) use ($sequence1, $replicate11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($sequence1)(($replicate11)($n, $m));
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

// Data_Unfoldable1_singleton
$Data_Unfoldable1_singleton = (function() {
  $__fn = function($dictUnfoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable1_replicate1'])($dictUnfoldable1, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Unfoldable1_range
$Data_Unfoldable1_range = (function() {
  $__fn = function($dictUnfoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldr11 = ($GLOBALS['Data_Unfoldable1_unfoldr1'])($dictUnfoldable1);
    $__res = (function() use ($unfoldr11) {
  $__fn = function($start, $end = null) use ($unfoldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($end) {
  $__fn = function($delta, $i = null) use ($end, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$i__prime__ = ($GLOBALS['Data_Unfoldable1_add'])($i, $delta);
$__case_0 = ($GLOBALS['Data_Unfoldable1_eq'])($i, $end);
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = $GLOBALS['Data_Maybe_Nothing'];
} else {
if (true) {
$__case_res_0 = ($GLOBALS['Data_Maybe_Just'])($i__prime__);
} else {
throw new \Exception("Pattern match failure");
};
};
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($i, $__case_res_0);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__case_0 = ($GLOBALS['Data_Unfoldable1_greaterThanOrEq'])($end, $start);
$__case_res_1 = null;
if (($__case_0 === true)) {
$__case_res_1 = 1;
} else {
if (true) {
$__case_res_1 = ($GLOBALS['Data_Unfoldable1_negate'])(1);
} else {
throw new \Exception("Pattern match failure");
};
};
$delta = $__case_res_1;
    $__res = ($unfoldr11)(($go)($delta), $start);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Unfoldable1_iterateN
$Data_Unfoldable1_iterateN = (function() {
  $__fn = function($dictUnfoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldr11 = ($GLOBALS['Data_Unfoldable1_unfoldr1'])($dictUnfoldable1);
    $__res = (function() use ($unfoldr11) {
  $__fn = function($n, $f = null, $s = null) use ($unfoldr11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$go = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[0];
$n__prime__ = ($__case_0)->values[1];
$__case_0 = ($GLOBALS['Data_Unfoldable1_greaterThan'])($n__prime__, 0);
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])(($f)($x), ($GLOBALS['Data_Unfoldable1_sub'])($n__prime__, 1)));
} else {
if (true) {
$__case_res_0 = $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
return ($GLOBALS['Data_Tuple_Tuple'])($x, $__case_res_0);
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
})();
    $__res = ($unfoldr11)($go, ($GLOBALS['Data_Tuple_Tuple'])($s, ($GLOBALS['Data_Unfoldable1_sub'])($n, 1)));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

