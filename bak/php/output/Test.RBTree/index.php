<?php

namespace Test\RBTree;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.RBTree/index.php';

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


// Test_RBTree_greaterThan
$Test_RBTree_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordInt']);

// Test_RBTree_add
$Test_RBTree_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Test_RBTree_lessThan
$Test_RBTree_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Test_RBTree_sub
$Test_RBTree_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Test_RBTree_R
$Test_RBTree_R = (object)["tag" => "R", "values" => []];

// Test_RBTree_B
$Test_RBTree_B = (object)["tag" => "B", "values" => []];

// Test_RBTree_E
$Test_RBTree_E = (object)["tag" => "E", "values" => []];

// Test_RBTree_T
$Test_RBTree_T = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = (object)["tag" => "T", "values" => [$value0, $value1, $value2, $value3]];
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Test_RBTree_max
$Test_RBTree_max = (function() {
  $__body = function($x, $y) {
    $__case_0 = ($GLOBALS['Test_RBTree_greaterThan'])($x, $y);
    if (($__case_0 === true)) {
return $x;
} else {
if (true) {
return $y;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_RBTree_describe
$Test_RBTree_describe = ($GLOBALS['Effect_Console_log'])("Red-Black Tree (100k Worst-Case Insertions):");

// Test_RBTree_depth
$Test_RBTree_depth = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "E")) {
return 0;
} else {
if ((($__case_0)->tag === "T")) {
$a = ($__case_0)->values[1];
$b = ($__case_0)->values[3];
return ($GLOBALS['Test_RBTree_add'])(1, ($GLOBALS['Test_RBTree_max'])(($GLOBALS['Test_RBTree_depth'])($a), ($GLOBALS['Test_RBTree_depth'])($b)));
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

// Test_RBTree_balance
$Test_RBTree_balance = (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    if (((($__case_0)->tag === "B") && (((($__case_1)->tag === "T") && ((($__case_1)->values[0])->tag === "R")) && (((($__case_1)->values[1])->tag === "T") && (((($__case_1)->values[1])->values[0])->tag === "R"))))) {
$a = (($__case_1)->values[1])->values[1];
$x = (($__case_1)->values[1])->values[2];
$b = (($__case_1)->values[1])->values[3];
$y = ($__case_1)->values[2];
$c = ($__case_1)->values[3];
$z = $__case_2;
$d = $__case_3;
return ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_R'], ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_B'], $a, $x, $b), $y, ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_B'], $c, $z, $d));
} else {
if (((($__case_0)->tag === "B") && (((($__case_1)->tag === "T") && ((($__case_1)->values[0])->tag === "R")) && (((($__case_1)->values[3])->tag === "T") && (((($__case_1)->values[3])->values[0])->tag === "R"))))) {
$a = ($__case_1)->values[1];
$x = ($__case_1)->values[2];
$b = (($__case_1)->values[3])->values[1];
$y = (($__case_1)->values[3])->values[2];
$c = (($__case_1)->values[3])->values[3];
$z = $__case_2;
$d = $__case_3;
return ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_R'], ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_B'], $a, $x, $b), $y, ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_B'], $c, $z, $d));
} else {
if (((($__case_0)->tag === "B") && (((($__case_3)->tag === "T") && ((($__case_3)->values[0])->tag === "R")) && (((($__case_3)->values[1])->tag === "T") && (((($__case_3)->values[1])->values[0])->tag === "R"))))) {
$a = $__case_1;
$x = $__case_2;
$b = (($__case_3)->values[1])->values[1];
$y = (($__case_3)->values[1])->values[2];
$c = (($__case_3)->values[1])->values[3];
$z = ($__case_3)->values[2];
$d = ($__case_3)->values[3];
return ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_R'], ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_B'], $a, $x, $b), $y, ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_B'], $c, $z, $d));
} else {
if (((($__case_0)->tag === "B") && (((($__case_3)->tag === "T") && ((($__case_3)->values[0])->tag === "R")) && (((($__case_3)->values[3])->tag === "T") && (((($__case_3)->values[3])->values[0])->tag === "R"))))) {
$a = $__case_1;
$x = $__case_2;
$b = ($__case_3)->values[1];
$y = ($__case_3)->values[2];
$c = (($__case_3)->values[3])->values[1];
$z = (($__case_3)->values[3])->values[2];
$d = (($__case_3)->values[3])->values[3];
return ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_R'], ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_B'], $a, $x, $b), $y, ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_B'], $c, $z, $d));
} else {
if (true) {
$color = $__case_0;
$a = $__case_1;
$x = $__case_2;
$b = $__case_3;
return ($GLOBALS['Test_RBTree_T'])($color, $a, $x, $b);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($v, $v1, $v2, $v3);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Test_RBTree_insert
$Test_RBTree_insert = (function() {
  $__fn = function($x, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$makeBlack = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "T")) {
$a = ($__case_0)->values[1];
$y = ($__case_0)->values[2];
$b = ($__case_0)->values[3];
return ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_B'], $a, $y, $b);
} else {
if ((($__case_0)->tag === "E")) {
return $GLOBALS['Test_RBTree_E'];
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
$ins = (function() use ($x, &$ins) {
  $__fn = function($v) use ($x, &$ins, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "E")) {
return ($GLOBALS['Test_RBTree_T'])($GLOBALS['Test_RBTree_R'], $GLOBALS['Test_RBTree_E'], $x, $GLOBALS['Test_RBTree_E']);
} else {
if ((($__case_0)->tag === "T")) {
$color = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
$y = ($__case_0)->values[2];
$b = ($__case_0)->values[3];
$__case_0 = ($GLOBALS['Test_RBTree_lessThan'])($x, $y);
if (($__case_0 === true)) {
return ($GLOBALS['Test_RBTree_balance'])($color, ($ins)($a), $y, $b);
} else {
if (true) {
$__case_0 = ($GLOBALS['Test_RBTree_greaterThan'])($x, $y);
if (($__case_0 === true)) {
return ($GLOBALS['Test_RBTree_balance'])($color, $a, $y, ($ins)($b));
} else {
if (true) {
return ($GLOBALS['Test_RBTree_T'])($color, $a, $y, $b);
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
    $__res = ($makeBlack)(($ins)($s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_RBTree_buildTree
$Test_RBTree_buildTree = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$acc = $__case_1;
return $acc;
} else {
if (true) {
$n = $__case_0;
$acc = $__case_1;
$__tco_tmp_0 = ($GLOBALS['Test_RBTree_sub'])($n, 1);
$__tco_tmp_1 = ($GLOBALS['Test_RBTree_insert'])($n, $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
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

// Test_RBTree_act
$Test_RBTree_act = ($GLOBALS['Effect_Console_logShow'])($GLOBALS['Data_Show_showInt'], ($GLOBALS['Test_RBTree_depth'])(($GLOBALS['Test_RBTree_buildTree'])(100000, $GLOBALS['Test_RBTree_E'])));

