<?php

namespace Test\ListOps;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.ListOps/index.php';

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


// Test_ListOps_lessThan
$Test_ListOps_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Test_ListOps_sub
$Test_ListOps_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Test_ListOps_eq
$Test_ListOps_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Test_ListOps_mod
$Test_ListOps_mod = ($GLOBALS['Data_EuclideanRing_mod'])($GLOBALS['Data_EuclideanRing_euclideanRingInt']);

// Test_ListOps_Nil
$Test_ListOps_Nil = (object)["tag" => "Nil", "values" => []];

// Test_ListOps_Cons
$Test_ListOps_Cons = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Cons", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_ListOps_range
$Test_ListOps_range = (function() {
  $__fn = function($start, $end = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($start, &$go) {
  $__fn = function($curr, $acc = null) use ($start, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = ($GLOBALS['Test_ListOps_lessThan'])($curr, $start);
if (($__case_0 === true)) {
return $acc;
} else {
if (true) {
$__tco_tmp_0 = ($GLOBALS['Test_ListOps_sub'])($curr, 1);
$__tco_tmp_1 = ($GLOBALS['Test_ListOps_Cons'])($curr, $acc);
$curr = $__tco_tmp_0;
$acc = $__tco_tmp_1;
continue;
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
    $__res = ($go)($end, $GLOBALS['Test_ListOps_Nil']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_ListOps_foldl
$Test_ListOps_foldl = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_2)->tag === "Nil")) {
$acc = $__case_1;
return $acc;
} else {
if ((($__case_2)->tag === "Cons")) {
$f = $__case_0;
$acc = $__case_1;
$x = ($__case_2)->values[0];
$xs = ($__case_2)->values[1];
$__tco_tmp_0 = $f;
$__tco_tmp_1 = ($f)($acc, $x);
$__tco_tmp_2 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Test_ListOps_filterEvens
$Test_ListOps_filterEvens = (function() {
  $__fn = function($lst) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
$acc = $__case_1;
return $acc;
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$acc = $__case_1;
$__case_0 = ($GLOBALS['Test_ListOps_eq'])(($GLOBALS['Test_ListOps_mod'])($x, 2), 0);
if (($__case_0 === true)) {
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($GLOBALS['Test_ListOps_Cons'])($x, $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (true) {
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = $acc;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
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
    $__res = ($go)($lst, $GLOBALS['Test_ListOps_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Test_ListOps_sumEvens
$Test_ListOps_sumEvens = ($GLOBALS['Test_ListOps_foldl'])(($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']), 0, ($GLOBALS['Test_ListOps_filterEvens'])(($GLOBALS['Test_ListOps_range'])(1, 900)));

// Test_ListOps_describe
$Test_ListOps_describe = ($GLOBALS['Effect_Console_log'])("List Processing (900 elements):");

// Test_ListOps_act
$Test_ListOps_act = ($GLOBALS['Effect_Console_logShow'])($GLOBALS['Data_Show_showInt'], $GLOBALS['Test_ListOps_sumEvens']);

