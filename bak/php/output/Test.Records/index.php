<?php

namespace Test\Records;

require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Records/index.php';

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


// Test_Records_sub
$Test_Records_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Test_Records_add
$Test_Records_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Test_Records_mod
$Test_Records_mod = ($GLOBALS['Data_EuclideanRing_mod'])($GLOBALS['Data_EuclideanRing_euclideanRingInt']);

// Test_Records_updateRec
$Test_Records_updateRec = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$r = $__case_1;
return $r;
} else {
if (true) {
$n = $__case_0;
$r = $__case_1;
$__tco_tmp_0 = ($GLOBALS['Test_Records_sub'])($n, 1);
$v2 = $r;
$v3 = ($r)->b;
$v4 = (($r)->b)->d;
$__tco_tmp_1 = (function($__e, $__v0, $__v1) { $__obj = clone $__e; $__obj->a = $__v0; $__obj->b = $__v1; return $__obj; })($v2, ($GLOBALS['Test_Records_add'])(($r)->a, 1), (function($__e, $__v0, $__v1) { $__obj = clone $__e; $__obj->c = $__v0; $__obj->d = $__v1; return $__obj; })($v3, ($GLOBALS['Test_Records_add'])((($r)->b)->c, 2), (function($__e, $__v0, $__v1) { $__obj = clone $__e; $__obj->e = $__v0; $__obj->f = $__v1; return $__obj; })($v4, ($GLOBALS['Test_Records_add'])(((($r)->b)->d)->e, 3), ($GLOBALS['Test_Records_add'])(((($r)->b)->d)->f, ($GLOBALS['Test_Records_mod'])($n, 5)))));
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

// Test_Records_initial
$Test_Records_initial = (object)["a" => 0, "b" => (object)["c" => 0, "d" => (object)["e" => 0, "f" => 0]]];

// Test_Records_describe
$Test_Records_describe = ($GLOBALS['Effect_Console_log'])("Deep Record Updates (10k iterations):");

// Test_Records_act
$Test_Records_act = ($GLOBALS['Effect_Console_logShow'])($GLOBALS['Data_Show_showInt'], (((($GLOBALS['Test_Records_updateRec'])(10000, $GLOBALS['Test_Records_initial']))->b)->d)->f);

