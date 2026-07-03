<?php

namespace Data\Map\Internal;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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


// Data_Map_Internal_add
$Data_Map_Internal_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Map_Internal_greaterThan
$Data_Map_Internal_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Map_Internal_lessThanOrEq
$Data_Map_Internal_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Map_Internal_append
$Data_Map_Internal_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Map_Internal_show
$Data_Map_Internal_show = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Show_showInt']);

// Data_Map_Internal_map
$Data_Map_Internal_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_Map_Internal_compose
$Data_Map_Internal_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Map_Internal_conj
$Data_Map_Internal_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Map_Internal_identity
$Data_Map_Internal_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_Map_Internal_eq
$Data_Map_Internal_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_Map_Internal_lessThan
$Data_Map_Internal_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Map_Internal_abs
$Data_Map_Internal_abs = ($GLOBALS['Data_Ord_abs'])($GLOBALS['Data_Ord_ordInt'], $GLOBALS['Data_Ring_ringInt']);

// Data_Map_Internal_sub
$Data_Map_Internal_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_Map_Internal_disj
$Data_Map_Internal_disj = ($GLOBALS['Data_HeytingAlgebra_disj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Map_Internal_Leaf
$Data_Map_Internal_Leaf = (object)["tag" => "Leaf", "values" => []];

// Data_Map_Internal_Node
$Data_Map_Internal_Node = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) return phpurs_curry_fallback($__fn, func_get_args(), 6);
    $__res = (object)["tag" => "Node", "values" => [$value0, $value1, $value2, $value3, $value4, $value5]];
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_IterLeaf
$Data_Map_Internal_IterLeaf = (object)["tag" => "IterLeaf", "values" => []];

// Data_Map_Internal_IterEmit
$Data_Map_Internal_IterEmit = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)["tag" => "IterEmit", "values" => [$value0, $value1, $value2]];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_IterNode
$Data_Map_Internal_IterNode = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "IterNode", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_IterDone
$Data_Map_Internal_IterDone = (object)["tag" => "IterDone", "values" => []];

// Data_Map_Internal_IterNext
$Data_Map_Internal_IterNext = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)["tag" => "IterNext", "values" => [$value0, $value1, $value2]];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_Split
$Data_Map_Internal_Split = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)["tag" => "Split", "values" => [$value0, $value1, $value2]];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_SplitLast
$Data_Map_Internal_SplitLast = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)["tag" => "SplitLast", "values" => [$value0, $value1, $value2]];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_unsafeNode
$Data_Map_Internal_unsafeNode = ($GLOBALS['Data_Function_Uncurried_mkFn4'])((function() {
  $__body = function($k, $v, $l, $r) {
    $__case_0 = $l;
    if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_Node'])(1, 1, $k, $v, $l, $r);
} else {
if ((($__case_0)->tag === "Node")) {
$h2 = ($__case_0)->values[0];
$s2 = ($__case_0)->values[1];
return ($GLOBALS['Data_Map_Internal_Node'])(($GLOBALS['Data_Map_Internal_add'])(1, $h2), ($GLOBALS['Data_Map_Internal_add'])(1, $s2), $k, $v, $l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "Node")) {
$h1 = ($__case_0)->values[0];
$s1 = ($__case_0)->values[1];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_Node'])(($GLOBALS['Data_Map_Internal_add'])(1, $h1), ($GLOBALS['Data_Map_Internal_add'])(1, $s1), $k, $v, $l, $r);
} else {
if ((($__case_0)->tag === "Node")) {
$h2 = ($__case_0)->values[0];
$s2 = ($__case_0)->values[1];
$__case_0 = ($GLOBALS['Data_Map_Internal_greaterThan'])($h1, $h2);
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = $h1;
} else {
if (true) {
$__case_res_0 = $h2;
} else {
throw new \Exception("Pattern match failure");
};
};
return ($GLOBALS['Data_Map_Internal_Node'])(($GLOBALS['Data_Map_Internal_add'])(1, $__case_res_0), ($GLOBALS['Data_Map_Internal_add'])(($GLOBALS['Data_Map_Internal_add'])(1, $s1), $s2), $k, $v, $l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($k, $v = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($k, $v, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());

// Data_Map_Internal_toMapIter
$Data_Map_Internal_toMapIter = ($GLOBALS['Data_Function_flip'])($GLOBALS['Data_Map_Internal_IterNode'], $GLOBALS['Data_Map_Internal_IterLeaf']);

// Data_Map_Internal_stepWith
$Data_Map_Internal_stepWith = (function() {
  $__fn = function($f, $next = null, $done = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$go = (function() use ($done, $next, &$go, $f) {
  $__fn = function($v) use ($done, $next, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "IterLeaf")) {
return ($done)($GLOBALS['Data_Unit_unit']);
} else {
if ((($__case_0)->tag === "IterEmit")) {
$k = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
$iter = ($__case_0)->values[2];
return ($GLOBALS['Data_Function_Uncurried_runFn3'])($next, $k, $v1, $iter);
} else {
if ((($__case_0)->tag === "IterNode")) {
$m = ($__case_0)->values[0];
$iter = ($__case_0)->values[1];
$__tco_tmp_0 = ($f)($iter, $m);
$v = $__tco_tmp_0;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_size
$Data_Map_Internal_size = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Leaf")) {
return 0;
} else {
if ((($__case_0)->tag === "Node")) {
$s = ($__case_0)->values[1];
return $s;
} else {
throw new \Exception("Pattern match failure");
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
})();

// Data_Map_Internal_singleton
$Data_Map_Internal_singleton = (function() {
  $__fn = function($k, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Map_Internal_Node'])(1, 1, $k, $v, $GLOBALS['Data_Map_Internal_Leaf'], $GLOBALS['Data_Map_Internal_Leaf']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_unsafeBalancedNode
$Data_Map_Internal_unsafeBalancedNode = ($height = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Leaf")) {
return 0;
} else {
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
return $h;
} else {
throw new \Exception("Pattern match failure");
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
})();
$rotateLeft = ($GLOBALS['Data_Function_Uncurried_mkFn7'])((function() {
  $__body = function($k, $v, $l, $rk, $rv, $rl, $rr) {
    $__case_0 = $rl;
    if ((($__case_0)->tag === "Node")) {
$lh = ($__case_0)->values[0];
$lk = ($__case_0)->values[2];
$lv = ($__case_0)->values[3];
$ll = ($__case_0)->values[4];
$lr = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeNode'], $rk, $rv, ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeNode'], $k, $v, $l, $rl), $rr);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($k, $v = null, $l = null, $rk = null, $rv = null, $rl = null, $rr = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) return phpurs_curry_fallback($__fn, func_get_args(), 7);
    $__res = $__body($k, $v, $l, $rk, $rv, $rl, $rr);
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
$rotateRight = ($GLOBALS['Data_Function_Uncurried_mkFn7'])((function() {
  $__body = function($k, $v, $lk, $lv, $ll, $lr, $r) {
    $__case_0 = $lr;
    if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rk = ($__case_0)->values[2];
$rv = ($__case_0)->values[3];
$rl = ($__case_0)->values[4];
$rr = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeNode'], $lk, $lv, $ll, ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeNode'], $k, $v, $lr, $r));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($k, $v = null, $lk = null, $lv = null, $ll = null, $lr = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) return phpurs_curry_fallback($__fn, func_get_args(), 7);
    $__res = $__body($k, $v, $lk, $lv, $ll, $lr, $r);
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
return ($GLOBALS['Data_Function_Uncurried_mkFn4'])((function() {
  $__body = function($k, $v, $l, $r) {
    $__case_0 = $l;
    if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_singleton'])($k, $v);
} else {
if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rk = ($__case_0)->values[2];
$rv = ($__case_0)->values[3];
$rl = ($__case_0)->values[4];
$rr = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeNode'], $k, $v, $l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
if ((($__case_0)->tag === "Node")) {
$lh = ($__case_0)->values[0];
$lk = ($__case_0)->values[2];
$lv = ($__case_0)->values[3];
$ll = ($__case_0)->values[4];
$lr = ($__case_0)->values[5];
$__case_0 = $r;
if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rk = ($__case_0)->values[2];
$rv = ($__case_0)->values[3];
$rl = ($__case_0)->values[4];
$rr = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_0)->tag === "Leaf")) {
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeNode'], $k, $v, $l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($k, $v = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($k, $v, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());)();

// Data_Map_Internal_unsafeSplit
$Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Function_Uncurried_mkFn3'])((function() {
  $__body = function($comp, $k, $m) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_Split'])($GLOBALS['Data_Maybe_Nothing'], $GLOBALS['Data_Map_Internal_Leaf'], $GLOBALS['Data_Map_Internal_Leaf']);
} else {
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v = ($comp)($k, $mk);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
$v1 = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeSplit'], $comp, $k, $ml);
$__case_0 = $v1;
if ((($__case_0)->tag === "Split")) {
$b = ($__case_0)->values[0];
$ll = ($__case_0)->values[1];
$lr = ($__case_0)->values[2];
return ($GLOBALS['Data_Map_Internal_Split'])($b, $ll, ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, $lr, $mr));
} else {
throw new \Exception("Pattern match failure");
};
} else {
if ((($__case_0)->tag === "GT")) {
$v1 = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeSplit'], $comp, $k, $mr);
$__case_0 = $v1;
if ((($__case_0)->tag === "Split")) {
$b = ($__case_0)->values[0];
$rl = ($__case_0)->values[1];
$rr = ($__case_0)->values[2];
return ($GLOBALS['Data_Map_Internal_Split'])($b, ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, $ml, $rl), $rr);
} else {
throw new \Exception("Pattern match failure");
};
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Map_Internal_Split'])(($GLOBALS['Data_Maybe_Just'])($mv), $ml, $mr);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($comp, $k = null, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($comp, $k, $m);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeSplitLast
$Data_Map_Internal_unsafeSplitLast = ($GLOBALS['Data_Function_Uncurried_mkFn4'])((function() {
  $__body = function($k, $v, $l, $r) {
    $__case_0 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_SplitLast'])($k, $v, $l);
} else {
if ((($__case_0)->tag === "Node")) {
$rk = ($__case_0)->values[2];
$rv = ($__case_0)->values[3];
$rl = ($__case_0)->values[4];
$rr = ($__case_0)->values[5];
$v1 = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeSplitLast'], $rk, $rv, $rl, $rr);
$__case_0 = $v1;
if ((($__case_0)->tag === "SplitLast")) {
$k__prime__ = ($__case_0)->values[0];
$v__prime__ = ($__case_0)->values[1];
$t__prime__ = ($__case_0)->values[2];
return ($GLOBALS['Data_Map_Internal_SplitLast'])($k__prime__, $v__prime__, ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $k, $v, $l, $t__prime__));
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($k, $v = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($k, $v, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeJoinNodes
$Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Function_Uncurried_mkFn2'])((function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Leaf")) {
$b = $__case_1;
return $b;
} else {
if ((($__case_0)->tag === "Node")) {
$lk = ($__case_0)->values[2];
$lv = ($__case_0)->values[3];
$ll = ($__case_0)->values[4];
$lr = ($__case_0)->values[5];
$r = $__case_1;
$v2 = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeSplitLast'], $lk, $lv, $ll, $lr);
$__case_0 = $v2;
if ((($__case_0)->tag === "SplitLast")) {
$k = ($__case_0)->values[0];
$v3 = ($__case_0)->values[1];
$l = ($__case_0)->values[2];
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $k, $v3, $l, $r);
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeDifference
$Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Function_Uncurried_mkFn3'])((function() {
  $__body = function($comp, $l, $r) {
    $__case_0 = $l;
    $__case_1 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_1)->tag === "Leaf")) {
return $l;
} else {
if ((($__case_1)->tag === "Node")) {
$rk = ($__case_1)->values[2];
$rl = ($__case_1)->values[4];
$rr = ($__case_1)->values[5];
$v = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeSplit'], $comp, $rk, $l);
$__case_0 = $v;
if ((($__case_0)->tag === "Split")) {
$ll = ($__case_0)->values[1];
$lr = ($__case_0)->values[2];
$l__prime__ = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeDifference'], $comp, $ll, $rl);
$r__prime__ = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeDifference'], $comp, $lr, $rr);
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Map_Internal_unsafeJoinNodes'], $l__prime__, $r__prime__);
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($comp, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($comp, $l, $r);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeIntersectionWith
$Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Function_Uncurried_mkFn4'])((function() {
  $__body = function($comp, $app, $l, $r) {
    $__case_0 = $l;
    $__case_1 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_1)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_1)->tag === "Node")) {
$rk = ($__case_1)->values[2];
$rv = ($__case_1)->values[3];
$rl = ($__case_1)->values[4];
$rr = ($__case_1)->values[5];
$v = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeSplit'], $comp, $rk, $l);
$__case_0 = $v;
if ((($__case_0)->tag === "Split")) {
$lv = ($__case_0)->values[0];
$ll = ($__case_0)->values[1];
$lr = ($__case_0)->values[2];
$l__prime__ = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'], $comp, $app, $ll, $rl);
$r__prime__ = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'], $comp, $app, $lr, $rr);
$__case_0 = $lv;
if ((($__case_0)->tag === "Just")) {
$lv__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $rk, ($app)($lv__prime__, $rv), $l__prime__, $r__prime__);
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Map_Internal_unsafeJoinNodes'], $l__prime__, $r__prime__);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($comp, $app = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($comp, $app, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());

// Data_Map_Internal_unsafeUnionWith
$Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Function_Uncurried_mkFn4'])((function() {
  $__body = function($comp, $app, $l, $r) {
    $__case_0 = $l;
    $__case_1 = $r;
    if ((($__case_0)->tag === "Leaf")) {
return $r;
} else {
if ((($__case_1)->tag === "Leaf")) {
return $l;
} else {
if ((($__case_1)->tag === "Node")) {
$rk = ($__case_1)->values[2];
$rv = ($__case_1)->values[3];
$rl = ($__case_1)->values[4];
$rr = ($__case_1)->values[5];
$v = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeSplit'], $comp, $rk, $l);
$__case_0 = $v;
if ((($__case_0)->tag === "Split")) {
$lv = ($__case_0)->values[0];
$ll = ($__case_0)->values[1];
$lr = ($__case_0)->values[2];
$l__prime__ = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeUnionWith'], $comp, $app, $ll, $rl);
$r__prime__ = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeUnionWith'], $comp, $app, $lr, $rr);
$__case_0 = $lv;
if ((($__case_0)->tag === "Just")) {
$lv__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $rk, ($app)($lv__prime__, $rv), $l__prime__, $r__prime__);
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $rk, $rv, $l__prime__, $r__prime__);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($comp, $app = null, $l = null, $r = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($comp, $app, $l, $r);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());

// Data_Map_Internal_unionWith
$Data_Map_Internal_unionWith = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeUnionWith'], $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_union
$Data_Map_Internal_union = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_unionWith'])($dictOrd, $GLOBALS['Data_Function_const']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_update
$Data_Map_Internal_update = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($f, $k = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($compare, $k, &$go, $f) {
  $__fn = function($v) use ($compare, $k, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_0)->tag === "Node")) {
$mh = ($__case_0)->values[0];
$ms = ($__case_0)->values[1];
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, ($go)($ml), $mr);
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, $ml, ($go)($mr));
} else {
if ((($__case_0)->tag === "EQ")) {
$v2 = ($f)($mv);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Map_Internal_unsafeJoinNodes'], $ml, $mr);
} else {
if ((($__case_0)->tag === "Just")) {
$mv__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_Map_Internal_Node'])($mh, $ms, $mk, $mv__prime__, $ml, $mr);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_showTree
$Data_Map_Internal_showTree = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show1 = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = (function() use ($show1) {
  $__fn = function($dictShow1) use ($show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show2 = ($GLOBALS['Data_Show_show'])($dictShow1);
$go = (function() use ($show1, $show2, &$go) {
  $__fn = function($ind, $v = null) use ($show1, $show2, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_append'])($ind, "Leaf");
} else {
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($GLOBALS['Data_Map_Internal_append'])(($GLOBALS['Data_Map_Internal_append'])($ind, ($GLOBALS['Data_Map_Internal_append'])("[", ($GLOBALS['Data_Map_Internal_append'])(($GLOBALS['Data_Map_Internal_show'])($h), ($GLOBALS['Data_Map_Internal_append'])("] ", ($GLOBALS['Data_Map_Internal_append'])(($show1)($k), ($GLOBALS['Data_Map_Internal_append'])(" => ", ($GLOBALS['Data_Map_Internal_append'])(($show2)($v1), "
"))))))), ($GLOBALS['Data_Map_Internal_append'])(($GLOBALS['Data_Map_Internal_append'])(($go)(($GLOBALS['Data_Map_Internal_append'])($ind, "    "), $l), "
"), ($go)(($GLOBALS['Data_Map_Internal_append'])($ind, "    "), $r)));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)("");
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_semigroupMap
$Data_Map_Internal_semigroupMap = (function() {
  $__fn = function($__dollar____unused, $dictOrd = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$unionWith1 = ($GLOBALS['Data_Map_Internal_unionWith'])($dictOrd);
    $__res = (function() use ($unionWith1) {
  $__fn = function($dictSemigroup) use ($unionWith1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => ($unionWith1)(($GLOBALS['Data_Semigroup_append'])($dictSemigroup))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_semigroupMap1
$Data_Map_Internal_semigroupMap1 = ($GLOBALS['Data_Map_Internal_semigroupMap'])($GLOBALS['Prim_undefined']);

// Data_Map_Internal_pop
$Data_Map_Internal_pop = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__body = function($k, $m) use ($compare) {
    $v = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeSplit'], $compare, $k, $m);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Split")) {
$x = ($__case_0)->values[0];
$l = ($__case_0)->values[1];
$r = ($__case_0)->values[2];
return ($GLOBALS['Data_Map_Internal_map'])((function() use ($l, $r) {
  $__fn = function($a) use ($l, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Map_Internal_unsafeJoinNodes'], $l, $r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($k, $m = null) use ($compare, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($k, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_member
$Data_Map_Internal_member = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return false;
} else {
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "GT")) {
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "EQ")) {
return true;
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_mapMaybeWithKey
$Data_Map_Internal_mapMaybeWithKey = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($f, &$go) {
  $__fn = function($v) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$v2 = ($f)($k, $v1);
$__case_0 = $v2;
if ((($__case_0)->tag === "Just")) {
$v__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $k, $v__prime__, ($go)($l), ($go)($r));
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Map_Internal_unsafeJoinNodes'], ($go)($l), ($go)($r));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_mapMaybe
$Data_Map_Internal_mapMaybe = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_compose'])(($GLOBALS['Data_Map_Internal_mapMaybeWithKey'])($dictOrd), $GLOBALS['Data_Function_const']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_lookupLE
$Data_Map_Internal_lookupLE = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "GT")) {
$v2 = ($go)($mr);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Maybe_Just'])((object)["key" => $mk, "value" => $mv]);
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Maybe_Just'])((object)["key" => $mk, "value" => $mv]);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_lookupGE
$Data_Map_Internal_lookupGE = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$v2 = ($go)($ml);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Maybe_Just'])((object)["key" => $mk, "value" => $mv]);
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "GT")) {
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Maybe_Just'])((object)["key" => $mk, "value" => $mv]);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_lookup
$Data_Map_Internal_lookup = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "GT")) {
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Maybe_Just'])($mv);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_iterMapU
$Data_Map_Internal_iterMapU = (function() {
  $__body = function($iter, $v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Leaf")) {
return $iter;
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$__case_0 = $l;
if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_IterEmit'])($k, $v1, $iter);
} else {
if (true) {
return ($GLOBALS['Data_Map_Internal_IterEmit'])($k, $v1, ($GLOBALS['Data_Map_Internal_IterNode'])($r, $iter));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if (true) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_IterEmit'])($k, $v1, ($GLOBALS['Data_Map_Internal_IterNode'])($l, $iter));
} else {
if (true) {
return ($GLOBALS['Data_Map_Internal_IterEmit'])($k, $v1, ($GLOBALS['Data_Map_Internal_IterNode'])($l, ($GLOBALS['Data_Map_Internal_IterNode'])($r, $iter)));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($iter, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($iter, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_stepUnorderedCps
$Data_Map_Internal_stepUnorderedCps = ($GLOBALS['Data_Map_Internal_stepWith'])($GLOBALS['Data_Map_Internal_iterMapU']);

// Data_Map_Internal_stepUnfoldrUnordered
$Data_Map_Internal_stepUnfoldrUnordered = ($step = ($GLOBALS['Data_Function_Uncurried_mkFn3'])((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_Tuple_Tuple'])($k, $v), $next));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
return ($GLOBALS['Data_Map_Internal_stepUnorderedCps'])($step, (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_Nothing'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());)();

// Data_Map_Internal_toUnfoldableUnordered
$Data_Map_Internal_toUnfoldableUnordered = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_compose'])(($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, $GLOBALS['Data_Map_Internal_stepUnfoldrUnordered']), $GLOBALS['Data_Map_Internal_toMapIter']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_stepUnordered
$Data_Map_Internal_stepUnordered = ($GLOBALS['Data_Map_Internal_stepUnorderedCps'])(($GLOBALS['Data_Function_Uncurried_mkFn3'])((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Map_Internal_IterNext'])($k, $v, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Map_Internal_IterDone']));

// Data_Map_Internal_iterMapR
$Data_Map_Internal_iterMapR = ($go = (function() use (&$go) {
  $__fn = function($iter, $v = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $iter;
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
$__tco_tmp_0 = ($GLOBALS['Data_Map_Internal_IterEmit'])($k, $v1, $iter);
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue;
} else {
if (true) {
$__tco_tmp_0 = ($GLOBALS['Data_Map_Internal_IterEmit'])($k, $v1, ($GLOBALS['Data_Map_Internal_IterNode'])($l, $iter));
$__tco_tmp_1 = $r;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return $go;)();

// Data_Map_Internal_stepDescCps
$Data_Map_Internal_stepDescCps = ($GLOBALS['Data_Map_Internal_stepWith'])($GLOBALS['Data_Map_Internal_iterMapR']);

// Data_Map_Internal_stepDesc
$Data_Map_Internal_stepDesc = ($GLOBALS['Data_Map_Internal_stepDescCps'])(($GLOBALS['Data_Function_Uncurried_mkFn3'])((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Map_Internal_IterNext'])($k, $v, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Map_Internal_IterDone']));

// Data_Map_Internal_iterMapL
$Data_Map_Internal_iterMapL = ($go = (function() use (&$go) {
  $__fn = function($iter, $v = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $iter;
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
$__tco_tmp_0 = ($GLOBALS['Data_Map_Internal_IterEmit'])($k, $v1, $iter);
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue;
} else {
if (true) {
$__tco_tmp_0 = ($GLOBALS['Data_Map_Internal_IterEmit'])($k, $v1, ($GLOBALS['Data_Map_Internal_IterNode'])($r, $iter));
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return $go;)();

// Data_Map_Internal_stepAscCps
$Data_Map_Internal_stepAscCps = ($GLOBALS['Data_Map_Internal_stepWith'])($GLOBALS['Data_Map_Internal_iterMapL']);

// Data_Map_Internal_stepAsc
$Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAscCps'])(($GLOBALS['Data_Function_Uncurried_mkFn3'])((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Map_Internal_IterNext'])($k, $v, $next);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Map_Internal_IterDone']));

// Data_Map_Internal_eqMapIter
$Data_Map_Internal_eqMapIter = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() {
  $__fn = function($dictEq1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq2 = ($GLOBALS['Data_Eq_eq'])($dictEq1);
$go = (function() {
  $__fn = function($a, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$v = ($GLOBALS['Data_Map_Internal_stepAsc'])($a);
$__case_0 = $v;
if ((($__case_0)->tag === "IterNext")) {
$k1 = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
$a__prime__ = ($__case_0)->values[2];
$v2 = ($GLOBALS['Data_Map_Internal_stepAsc'])($b);
$__case_0 = $v2;
if ((($__case_0)->tag === "IterNext")) {
$k2 = ($__case_0)->values[0];
$v21 = ($__case_0)->values[1];
$b__prime__ = ($__case_0)->values[2];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "IterDone")) {
return true;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => $go]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_ordMapIter
$Data_Map_Internal_ordMapIter = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
$eqMapIter1 = ($GLOBALS['Data_Map_Internal_eqMapIter'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($eqMapIter1, $compare) {
  $__fn = function($dictOrd1) use ($eqMapIter1, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare'])($dictOrd1);
$eqMapIter2 = ($eqMapIter1)((($dictOrd1)->Eq0)($GLOBALS['Prim_undefined']));
$go = (function() use ($compare, $compare1, &$go) {
  $__fn = function($a, $b = null) use ($compare, $compare1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$v = ($GLOBALS['Data_Map_Internal_stepAsc'])($b);
$v1 = ($GLOBALS['Data_Map_Internal_stepAsc'])($a);
$__case_0 = $v1;
$__case_1 = $v;
if (((($__case_0)->tag === "IterNext") && (($__case_1)->tag === "IterNext"))) {
$k1 = ($__case_0)->values[0];
$v11 = ($__case_0)->values[1];
$a__prime__ = ($__case_0)->values[2];
$k2 = ($__case_1)->values[0];
$v2 = ($__case_1)->values[1];
$b__prime__ = ($__case_1)->values[2];
$v3 = ($compare)($k1, $k2);
$__case_0 = $v3;
if ((($__case_0)->tag === "EQ")) {
$v4 = ($compare1)($v11, $v2);
$__case_0 = $v4;
if ((($__case_0)->tag === "EQ")) {
$__tco_tmp_0 = $a__prime__;
$__tco_tmp_1 = $b__prime__;
$a = $__tco_tmp_0;
$b = $__tco_tmp_1;
continue;
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "IterDone")) {
$b__prime__ = $__case_1;
$__case_0 = $b__prime__;
if ((($__case_0)->tag === "IterDone")) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if (true) {
return $GLOBALS['Data_Ordering_LT'];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_1)->tag === "IterDone")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => $go, "Eq0" => (function() use ($eqMapIter2) {
  $__fn = function($__dollar____unused) use ($eqMapIter2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqMapIter2;
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

// Data_Map_Internal_stepUnfoldr
$Data_Map_Internal_stepUnfoldr = ($step = ($GLOBALS['Data_Function_Uncurried_mkFn3'])((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_Tuple_Tuple'])($k, $v), $next));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
return ($GLOBALS['Data_Map_Internal_stepAscCps'])($step, (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_Nothing'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());)();

// Data_Map_Internal_toUnfoldable
$Data_Map_Internal_toUnfoldable = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_compose'])(($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, $GLOBALS['Data_Map_Internal_stepUnfoldr']), $GLOBALS['Data_Map_Internal_toMapIter']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_toUnfoldable1
$Data_Map_Internal_toUnfoldable1 = ($GLOBALS['Data_Map_Internal_toUnfoldable'])($GLOBALS['Data_Unfoldable_unfoldableArray']);

// Data_Map_Internal_showMap
$Data_Map_Internal_showMap = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$showTuple = ($GLOBALS['Data_Tuple_showTuple'])($dictShow);
    $__res = (function() use ($showTuple) {
  $__fn = function($dictShow1) use ($showTuple, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show1 = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_Show_showArray'])(($showTuple)($dictShow1)));
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show1) {
  $__fn = function($as) use ($show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_append'])("(fromFoldable ", ($GLOBALS['Data_Map_Internal_append'])(($show1)(($GLOBALS['Data_Map_Internal_toUnfoldable1'])($as)), ")"));
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

// Data_Map_Internal_isSubmap
$Data_Map_Internal_isSubmap = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lookup1 = ($GLOBALS['Data_Map_Internal_lookup'])($dictOrd);
    $__res = (function() use ($lookup1) {
  $__fn = function($dictEq) use ($lookup1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq'])($dictEq);
$go = (function() use ($lookup1, $eq1, &$go) {
  $__fn = function($m1, $m2 = null) use ($lookup1, $eq1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $m1;
if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$v1 = ($lookup1)($k, $m2);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
return false;
} else {
if ((($__case_0)->tag === "Just")) {
$v__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_Map_Internal_conj'])(($eq1)($v, $v__prime__), ($GLOBALS['Data_Map_Internal_conj'])(($go)($l, $m2), ($go)($r, $m2)));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_isEmpty
$Data_Map_Internal_isEmpty = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
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
})();

// Data_Map_Internal_intersectionWith
$Data_Map_Internal_intersectionWith = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'], $compare, $app, $m1, $m2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_intersection
$Data_Map_Internal_intersection = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_intersectionWith'])($dictOrd, $GLOBALS['Data_Function_const']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_insertWith
$Data_Map_Internal_insertWith = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($app, $k = null, $v = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$go = (function() use ($k, $v, $compare, &$go, $app) {
  $__fn = function($v1) use ($k, $v, $compare, &$go, $app, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v1;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_singleton'])($k, $v);
} else {
if ((($__case_0)->tag === "Node")) {
$mh = ($__case_0)->values[0];
$ms = ($__case_0)->values[1];
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, ($go)($ml), $mr);
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, $ml, ($go)($mr));
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Map_Internal_Node'])($mh, $ms, $k, ($app)($mv, $v), $ml, $mr);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_insert
$Data_Map_Internal_insert = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($k, $v = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($k, $v, $compare, &$go) {
  $__fn = function($v1) use ($k, $v, $compare, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v1;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_singleton'])($k, $v);
} else {
if ((($__case_0)->tag === "Node")) {
$mh = ($__case_0)->values[0];
$ms = ($__case_0)->values[1];
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, ($go)($ml), $mr);
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, $ml, ($go)($mr));
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Map_Internal_Node'])($mh, $ms, $k, $v, $ml, $mr);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_functorMap
$Data_Map_Internal_functorMap = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($f, &$go) {
  $__fn = function($v) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($GLOBALS['Data_Map_Internal_Node'])($h, $s, $k, ($f)($v1), ($go)($l), ($go)($r));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_functorWithIndexMap
$Data_Map_Internal_functorWithIndexMap = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($f, &$go) {
  $__fn = function($v) use ($f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($GLOBALS['Data_Map_Internal_Node'])($h, $s, $k, ($f)($k, $v1), ($go)($l), ($go)($r));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Map_Internal_functorMap'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_foldableMap
$Data_Map_Internal_foldableMap = ($GLOBALS['Data_Foldable_Foldable__dollar__Dict'])((object)["foldr" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = ($GLOBALS['Data_Function_Uncurried_mkFn2'])((function() use (&$go, $f) {
  $__body = function($m__prime__, $z__prime__) use (&$go, $f) {
    $__case_0 = $m__prime__;
    if ((($__case_0)->tag === "Leaf")) {
return $z__prime__;
} else {
if ((($__case_0)->tag === "Node")) {
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $l, ($f)($v, ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $r, $z__prime__)));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($m__prime__, $z__prime__ = null) use (&$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($m__prime__, $z__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use (&$go, $z) {
  $__fn = function($m) use (&$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $m, $z);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = ($GLOBALS['Data_Function_Uncurried_mkFn2'])((function() use (&$go, $f) {
  $__body = function($z__prime__, $m__prime__) use (&$go, $f) {
    $__case_0 = $m__prime__;
    if ((($__case_0)->tag === "Leaf")) {
return $z__prime__;
} else {
if ((($__case_0)->tag === "Node")) {
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, ($f)(($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $z__prime__, $l), $v), $r);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($z__prime__, $m__prime__ = null) use (&$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($z__prime__, $m__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use (&$go, $z) {
  $__fn = function($m) use (&$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $z, $m);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$append1 = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($mempty, $append1) {
  $__fn = function($f) use ($mempty, $append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($mempty, $append1, &$go, $f) {
  $__fn = function($v) use ($mempty, $append1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $mempty;
} else {
if ((($__case_0)->tag === "Node")) {
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($append1)(($go)($l), ($append1)(($f)($v1), ($go)($r)));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_foldableWithIndexMap
$Data_Map_Internal_foldableWithIndexMap = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldrWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = ($GLOBALS['Data_Function_Uncurried_mkFn2'])((function() use (&$go, $f) {
  $__body = function($m__prime__, $z__prime__) use (&$go, $f) {
    $__case_0 = $m__prime__;
    if ((($__case_0)->tag === "Leaf")) {
return $z__prime__;
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $l, ($f)($k, $v, ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $r, $z__prime__)));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($m__prime__, $z__prime__ = null) use (&$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($m__prime__, $z__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use (&$go, $z) {
  $__fn = function($m) use (&$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $m, $z);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = ($GLOBALS['Data_Function_Uncurried_mkFn2'])((function() use (&$go, $f) {
  $__body = function($z__prime__, $m__prime__) use (&$go, $f) {
    $__case_0 = $m__prime__;
    if ((($__case_0)->tag === "Leaf")) {
return $z__prime__;
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, ($f)($k, ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $z__prime__, $l), $v), $r);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($z__prime__, $m__prime__ = null) use (&$go, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($z__prime__, $m__prime__);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = (function() use (&$go, $z) {
  $__fn = function($m) use (&$go, $z, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn2'])($go, $z, $m);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$append1 = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($mempty, $append1) {
  $__fn = function($f) use ($mempty, $append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($mempty, $append1, &$go, $f) {
  $__fn = function($v) use ($mempty, $append1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $mempty;
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($append1)(($go)($l), ($append1)(($f)($k, $v1), ($go)($r)));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Map_Internal_foldableMap'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_keys
$Data_Map_Internal_keys = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($GLOBALS['Data_Map_Internal_foldableWithIndexMap'], (function() {
  $__fn = function($k, $v = null, $acc = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_List_Types_Cons'])($k, $acc);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_List_Types_Nil']);

// Data_Map_Internal_traversableMap
$Data_Map_Internal_traversableMap = ($GLOBALS['Data_Traversable_Traversable__dollar__Dict'])((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
$Apply0 = (($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']);
$apply = ($GLOBALS['Control_Apply_apply'])($Apply0);
$map1 = ($GLOBALS['Data_Functor_map'])((($Apply0)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($pure, $apply, $map1) {
  $__fn = function($f) use ($pure, $apply, $map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($pure, $apply, $map1, &$go, $f) {
  $__fn = function($v) use ($pure, $apply, $map1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return ($pure)($GLOBALS['Data_Map_Internal_Leaf']);
} else {
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($apply)(($apply)(($map1)((function() use ($h, $s, $k) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use ($h, $s, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Map_Internal_Node'])($h, $s, $k, $v__prime__, $l__prime__, $r__prime__);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($go)($l)), ($f)($v1)), ($go)($r));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Map_Internal_traversableMap'], $dictApplicative, $GLOBALS['Data_Map_Internal_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Map_Internal_functorMap'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Map_Internal_foldableMap'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_traversableWithIndexMap
$Data_Map_Internal_traversableWithIndexMap = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
$Apply0 = (($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']);
$apply = ($GLOBALS['Control_Apply_apply'])($Apply0);
$map1 = ($GLOBALS['Data_Functor_map'])((($Apply0)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($pure, $apply, $map1) {
  $__fn = function($f) use ($pure, $apply, $map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($pure, $apply, $map1, &$go, $f) {
  $__fn = function($v) use ($pure, $apply, $map1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return ($pure)($GLOBALS['Data_Map_Internal_Leaf']);
} else {
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return ($apply)(($apply)(($map1)((function() use ($h, $s, $k) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use ($h, $s, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Map_Internal_Node'])($h, $s, $k, $v__prime__, $l__prime__, $r__prime__);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($go)($l)), ($f)($k, $v1)), ($go)($r));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
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
    $__res = $GLOBALS['Data_Map_Internal_functorWithIndexMap'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Map_Internal_foldableWithIndexMap'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Map_Internal_traversableMap'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Map_Internal_values
$Data_Map_Internal_values = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Map_Internal_foldableMap'], $GLOBALS['Data_List_Types_Cons'], $GLOBALS['Data_List_Types_Nil']);

// Data_Map_Internal_foldSubmapBy
$Data_Map_Internal_foldSubmapBy = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lessThan1 = ($GLOBALS['Data_Ord_lessThan'])($dictOrd);
$greaterThan1 = ($GLOBALS['Data_Ord_greaterThan'])($dictOrd);
$lessThanOrEq1 = ($GLOBALS['Data_Ord_lessThanOrEq'])($dictOrd);
    $__res = (function() use ($lessThan1, $greaterThan1, $lessThanOrEq1) {
  $__fn = function($appendFn, $memptyValue = null, $kmin = null, $kmax = null, $f = null) use ($lessThan1, $greaterThan1, $lessThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) return phpurs_curry_fallback($__fn, func_get_args(), 5);
$__case_0 = $kmin;
$__case_res_0 = null;
if ((($__case_0)->tag === "Just")) {
$kmin__prime__ = ($__case_0)->values[0];
$__case_res_0 = (function() use ($lessThan1, $kmin__prime__) {
  $__fn = function($k) use ($lessThan1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($lessThan1)($k, $kmin__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if ((($__case_0)->tag === "Nothing")) {
$__case_res_0 = ($GLOBALS['Data_Function_const'])(false);
} else {
throw new \Exception("Pattern match failure");
};
};
$tooSmall = $__case_res_0;
$__case_0 = $kmax;
$__case_res_1 = null;
if ((($__case_0)->tag === "Just")) {
$kmax__prime__ = ($__case_0)->values[0];
$__case_res_1 = (function() use ($greaterThan1, $kmax__prime__) {
  $__fn = function($k) use ($greaterThan1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($greaterThan1)($k, $kmax__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if ((($__case_0)->tag === "Nothing")) {
$__case_res_1 = ($GLOBALS['Data_Function_const'])(false);
} else {
throw new \Exception("Pattern match failure");
};
};
$tooLarge = $__case_res_1;
$__case_0 = $kmin;
$__case_1 = $kmax;
$__case_res_2 = null;
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$kmin__prime__ = ($__case_0)->values[0];
$kmax__prime__ = ($__case_1)->values[0];
$__case_res_2 = (function() use ($lessThanOrEq1, $kmin__prime__, $kmax__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmin__prime__, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_conj'])(($lessThanOrEq1)($kmin__prime__, $k), ($lessThanOrEq1)($k, $kmax__prime__));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Nothing"))) {
$kmin__prime__ = ($__case_0)->values[0];
$__case_res_2 = (function() use ($lessThanOrEq1, $kmin__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmin__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($lessThanOrEq1)($kmin__prime__, $k);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Just"))) {
$kmax__prime__ = ($__case_1)->values[0];
$__case_res_2 = (function() use ($lessThanOrEq1, $kmax__prime__) {
  $__fn = function($k) use ($lessThanOrEq1, $kmax__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($lessThanOrEq1)($k, $kmax__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
$__case_res_2 = ($GLOBALS['Data_Function_const'])(true);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
$inBounds = $__case_res_2;
$go = (function() use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge) {
  $__fn = function($v) use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $memptyValue;
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$left = ($__case_0)->values[4];
$right = ($__case_0)->values[5];
$__case_0 = ($tooSmall)($k);
$__case_res_3 = null;
if (($__case_0 === true)) {
$__case_res_3 = $memptyValue;
} else {
if (true) {
$__case_res_3 = ($go)($left);
} else {
throw new \Exception("Pattern match failure");
};
};
$__case_0 = ($inBounds)($k);
$__case_res_4 = null;
if (($__case_0 === true)) {
$__case_res_4 = ($f)($k, $v1);
} else {
if (true) {
$__case_res_4 = $memptyValue;
} else {
throw new \Exception("Pattern match failure");
};
};
$__case_0 = ($tooLarge)($k);
$__case_res_5 = null;
if (($__case_0 === true)) {
$__case_res_5 = $memptyValue;
} else {
if (true) {
$__case_res_5 = ($go)($right);
} else {
throw new \Exception("Pattern match failure");
};
};
return ($appendFn)(($appendFn)($__case_res_3, $__case_res_4), $__case_res_5);
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_foldSubmap
$Data_Map_Internal_foldSubmap = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldSubmapBy1 = ($GLOBALS['Data_Map_Internal_foldSubmapBy'])($dictOrd);
    $__res = (function() use ($foldSubmapBy1) {
  $__fn = function($dictMonoid) use ($foldSubmapBy1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($foldSubmapBy1)(($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined'])), ($GLOBALS['Data_Monoid_mempty'])($dictMonoid));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_findMin
$Data_Map_Internal_findMin = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$__case_0 = $l;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Maybe_Just'])((object)["key" => $k, "value" => $v1]);
} else {
if (true) {
$__tco_tmp_0 = $l;
$v = $__tco_tmp_0;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_lookupGT
$Data_Map_Internal_lookupGT = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$v2 = ($go)($ml);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Maybe_Just'])((object)["key" => $mk, "value" => $mv]);
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "GT")) {
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Map_Internal_findMin'])($mr);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_findMax
$Data_Map_Internal_findMax = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$r = ($__case_0)->values[5];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Maybe_Just'])((object)["key" => $k, "value" => $v1]);
} else {
if (true) {
$__tco_tmp_0 = $r;
$v = $__tco_tmp_0;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_lookupLT
$Data_Map_Internal_lookupLT = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "GT")) {
$v2 = ($go)($mr);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Maybe_Just'])((object)["key" => $mk, "value" => $mv]);
} else {
if (true) {
$other = $__case_0;
return $other;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Map_Internal_findMax'])($ml);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_filterWithKey
$Data_Map_Internal_filterWithKey = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_filterKeys
$Data_Map_Internal_filterKeys = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_0)->tag === "Node")) {
$k = ($__case_0)->values[2];
$v1 = ($__case_0)->values[3];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_filter
$Data_Map_Internal_filter = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_compose'])(($GLOBALS['Data_Map_Internal_filterWithKey'])($dictOrd), $GLOBALS['Data_Function_const']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_eqMap
$Data_Map_Internal_eqMap = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eqMapIter1 = ($GLOBALS['Data_Map_Internal_eqMapIter'])($dictEq);
    $__res = (function() use ($eqMapIter1) {
  $__fn = function($dictEq1) use ($eqMapIter1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq'])(($eqMapIter1)($dictEq1));
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() {
  $__body = function($xs, $ys) {
    $__case_0 = $xs;
    if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $ys;
if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "Node")) {
$s1 = ($__case_0)->values[1];
$__case_0 = $ys;
if ((($__case_0)->tag === "Node")) {
$s2 = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($xs, $ys = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Data_Map_Internal_ordMap
$Data_Map_Internal_ordMap = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ordMapIter1 = ($GLOBALS['Data_Map_Internal_ordMapIter'])($dictOrd);
$eqMap1 = ($GLOBALS['Data_Map_Internal_eqMap'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ordMapIter1, $eqMap1) {
  $__fn = function($dictOrd1) use ($ordMapIter1, $eqMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])(($ordMapIter1)($dictOrd1));
$eqMap2 = ($eqMap1)((($dictOrd1)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() use ($compare) {
  $__body = function($xs, $ys) use ($compare) {
    $__case_0 = $xs;
    if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $ys;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if (true) {
return $GLOBALS['Data_Ordering_LT'];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if (true) {
$__case_0 = $ys;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
return ($compare)(($GLOBALS['Data_Map_Internal_toMapIter'])($xs), ($GLOBALS['Data_Map_Internal_toMapIter'])($ys));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($xs, $ys = null) use ($compare, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($xs, $ys);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqMap2) {
  $__fn = function($__dollar____unused) use ($eqMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqMap2;
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

// Data_Map_Internal_eq1Map
$Data_Map_Internal_eq1Map = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eqMap1 = ($GLOBALS['Data_Map_Internal_eqMap'])($dictEq);
    $__res = ($GLOBALS['Data_Eq_Eq1__dollar__Dict'])((object)["eq1" => (function() use ($eqMap1) {
  $__fn = function($dictEq1) use ($eqMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Eq_eq'])(($eqMap1)($dictEq1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_ord1Map
$Data_Map_Internal_ord1Map = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ordMap1 = ($GLOBALS['Data_Map_Internal_ordMap'])($dictOrd);
$eq1Map1 = ($GLOBALS['Data_Map_Internal_eq1Map'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord1__dollar__Dict'])((object)["compare1" => (function() use ($ordMap1) {
  $__fn = function($dictOrd1) use ($ordMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Ord_compare'])(($ordMap1)($dictOrd1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Map1) {
  $__fn = function($__dollar____unused) use ($eq1Map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eq1Map1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_empty
$Data_Map_Internal_empty = $GLOBALS['Data_Map_Internal_Leaf'];

// Data_Map_Internal_fromFoldable
$Data_Map_Internal_fromFoldable = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$insert1 = ($GLOBALS['Data_Map_Internal_insert'])($dictOrd);
    $__res = (function() use ($insert1) {
  $__fn = function($dictFoldable) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Foldable_foldl'])($dictFoldable, (function() use ($insert1) {
  $__body = function($m, $v) use ($insert1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$k = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
return ($insert1)($k, $v1, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($m, $v = null) use ($insert1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($m, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_Map_Internal_empty']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_fromFoldableWith
$Data_Map_Internal_fromFoldableWith = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$insertWith1 = ($GLOBALS['Data_Map_Internal_insertWith'])($dictOrd);
    $__res = (function() use ($insertWith1) {
  $__fn = function($dictFoldable) use ($insertWith1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldl = ($GLOBALS['Data_Foldable_foldl'])($dictFoldable);
    $__res = (function() use ($insertWith1, $foldl) {
  $__fn = function($f) use ($insertWith1, $foldl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$f__prime__ = ($insertWith1)(($GLOBALS['Data_Function_flip'])($f));
    $__res = ($foldl)((function() use ($f__prime__) {
  $__body = function($m, $v) use ($f__prime__) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$k = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
return ($f__prime__)($k, $v1, $m);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($m, $v = null) use ($f__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($m, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_Map_Internal_empty']);
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

// Data_Map_Internal_fromFoldableWithIndex
$Data_Map_Internal_fromFoldableWithIndex = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$insert1 = ($GLOBALS['Data_Map_Internal_insert'])($dictOrd);
    $__res = (function() use ($insert1) {
  $__fn = function($dictFoldableWithIndex) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex, (function() use ($insert1) {
  $__fn = function($k, $m = null, $v = null) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($insert1)($k, $v, $m);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_Map_Internal_empty']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_monoidSemigroupMap
$Data_Map_Internal_monoidSemigroupMap = (function() {
  $__fn = function($__dollar____unused, $dictOrd = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$semigroupMap2 = ($GLOBALS['Data_Map_Internal_semigroupMap1'])($dictOrd);
    $__res = (function() use ($semigroupMap2) {
  $__fn = function($dictSemigroup) use ($semigroupMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupMap3 = ($semigroupMap2)($dictSemigroup);
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => $GLOBALS['Data_Map_Internal_empty'], "Semigroup0" => (function() use ($semigroupMap3) {
  $__fn = function($__dollar____unused) use ($semigroupMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupMap3;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_submap
$Data_Map_Internal_submap = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldSubmapBy1 = ($GLOBALS['Data_Map_Internal_foldSubmapBy'])($dictOrd);
$union1 = ($GLOBALS['Data_Map_Internal_union'])($dictOrd);
    $__res = (function() use ($foldSubmapBy1, $union1) {
  $__fn = function($kmin, $kmax = null) use ($foldSubmapBy1, $union1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($foldSubmapBy1)($union1, $GLOBALS['Data_Map_Internal_empty'], $kmin, $kmax, $GLOBALS['Data_Map_Internal_singleton']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_unions
$Data_Map_Internal_unions = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$union1 = ($GLOBALS['Data_Map_Internal_union'])($dictOrd);
    $__res = (function() use ($union1) {
  $__fn = function($dictFoldable) use ($union1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Foldable_foldl'])($dictFoldable, $union1, $GLOBALS['Data_Map_Internal_empty']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_difference
$Data_Map_Internal_difference = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($m1, $m2 = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeDifference'], $compare, $m1, $m2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_delete
$Data_Map_Internal_delete = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__fn = function($k) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($compare, $k, &$go) {
  $__fn = function($v) use ($compare, $k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return $GLOBALS['Data_Map_Internal_Leaf'];
} else {
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, ($go)($ml), $mr);
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $mk, $mv, $ml, ($go)($mr));
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Map_Internal_unsafeJoinNodes'], $ml, $mr);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_checkValid
$Data_Map_Internal_checkValid = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$greaterThan1 = ($GLOBALS['Data_Ord_greaterThan'])($dictOrd);
$lessThan1 = ($GLOBALS['Data_Ord_lessThan'])($dictOrd);
$go = (function() use ($greaterThan1, &$go, $lessThan1) {
  $__fn = function($v) use ($greaterThan1, &$go, $lessThan1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
if ((($__case_0)->tag === "Node")) {
$h = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$k = ($__case_0)->values[2];
$l = ($__case_0)->values[4];
$r = ($__case_0)->values[5];
$__case_0 = $l;
if ((($__case_0)->tag === "Leaf")) {
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return true;
} else {
if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rs = ($__case_0)->values[1];
$rk = ($__case_0)->values[2];
return ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_eq'])($h, 2), ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_eq'])($rh, 1), ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_greaterThan'])($s, $rs), ($GLOBALS['Data_Map_Internal_conj'])(($greaterThan1)($rk, $k), ($go)($r)))));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "Node")) {
$lh = ($__case_0)->values[0];
$ls = ($__case_0)->values[1];
$lk = ($__case_0)->values[2];
$__case_0 = $r;
if ((($__case_0)->tag === "Leaf")) {
return ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_eq'])($h, 2), ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_eq'])($lh, 1), ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_greaterThan'])($s, $ls), ($GLOBALS['Data_Map_Internal_conj'])(($lessThan1)($lk, $k), ($go)($l)))));
} else {
if ((($__case_0)->tag === "Node")) {
$rh = ($__case_0)->values[0];
$rs = ($__case_0)->values[1];
$rk = ($__case_0)->values[2];
return ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_greaterThan'])($h, $rh), ($GLOBALS['Data_Map_Internal_conj'])(($greaterThan1)($rk, $k), ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_greaterThan'])($h, $lh), ($GLOBALS['Data_Map_Internal_conj'])(($lessThan1)($lk, $k), ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_lessThan'])(($GLOBALS['Data_Map_Internal_abs'])(($GLOBALS['Data_Map_Internal_sub'])($rh, $lh)), 2), ($GLOBALS['Data_Map_Internal_conj'])(($GLOBALS['Data_Map_Internal_eq'])(($GLOBALS['Data_Map_Internal_add'])(($GLOBALS['Data_Map_Internal_add'])($rs, $ls), 1), $s), ($GLOBALS['Data_Map_Internal_conj'])(($go)($l), ($go)($r))))))));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_catMaybes
$Data_Map_Internal_catMaybes = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_mapMaybe'])($dictOrd, $GLOBALS['Data_Map_Internal_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_applyMap
$Data_Map_Internal_applyMap = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => ($GLOBALS['Data_Map_Internal_intersectionWith'])($dictOrd, $GLOBALS['Data_Map_Internal_identity']), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Map_Internal_functorMap'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_bindMap
$Data_Map_Internal_bindMap = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapMaybeWithKey1 = ($GLOBALS['Data_Map_Internal_mapMaybeWithKey'])($dictOrd);
$lookup1 = ($GLOBALS['Data_Map_Internal_lookup'])($dictOrd);
$applyMap1 = ($GLOBALS['Data_Map_Internal_applyMap'])($dictOrd);
    $__res = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() use ($mapMaybeWithKey1, $lookup1) {
  $__fn = function($m, $f = null) use ($mapMaybeWithKey1, $lookup1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($mapMaybeWithKey1)((function() use ($lookup1, $f) {
  $__fn = function($k) use ($lookup1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Map_Internal_compose'])(($lookup1)($k), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyMap1) {
  $__fn = function($__dollar____unused) use ($applyMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyMap1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_anyWithKey
$Data_Map_Internal_anyWithKey = (function() {
  $__fn = function($predicate) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($predicate, &$go) {
  $__fn = function($v) use ($predicate, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return false;
} else {
if ((($__case_0)->tag === "Node")) {
$mk = ($__case_0)->values[2];
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
return ($GLOBALS['Data_Map_Internal_disj'])(($predicate)($mk, $mv), ($GLOBALS['Data_Map_Internal_disj'])(($go)($ml), ($go)($mr)));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_any
$Data_Map_Internal_any = (function() {
  $__fn = function($predicate) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($predicate, &$go) {
  $__fn = function($v) use ($predicate, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Leaf")) {
return false;
} else {
if ((($__case_0)->tag === "Node")) {
$mv = ($__case_0)->values[3];
$ml = ($__case_0)->values[4];
$mr = ($__case_0)->values[5];
return ($GLOBALS['Data_Map_Internal_disj'])(($predicate)($mv), ($GLOBALS['Data_Map_Internal_disj'])(($go)($ml), ($go)($mr)));
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_alter
$Data_Map_Internal_alter = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare) {
  $__body = function($f, $k, $m) use ($compare) {
    $v = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Map_Internal_unsafeSplit'], $compare, $k, $m);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Split")) {
$v1 = ($__case_0)->values[0];
$l = ($__case_0)->values[1];
$r = ($__case_0)->values[2];
$v2 = ($f)($v1);
$__case_0 = $v2;
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_Map_Internal_unsafeJoinNodes'], $l, $r);
} else {
if ((($__case_0)->tag === "Just")) {
$v__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Map_Internal_unsafeBalancedNode'], $k, $v__prime__, $l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $k = null, $m = null) use ($compare, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $k, $m);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_altMap
$Data_Map_Internal_altMap = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => ($GLOBALS['Data_Map_Internal_union'])($dictOrd), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Map_Internal_functorMap'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Map_Internal_plusMap
$Data_Map_Internal_plusMap = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$altMap1 = ($GLOBALS['Data_Map_Internal_altMap'])($dictOrd);
    $__res = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => $GLOBALS['Data_Map_Internal_empty'], "Alt0" => (function() use ($altMap1) {
  $__fn = function($__dollar____unused) use ($altMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $altMap1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

