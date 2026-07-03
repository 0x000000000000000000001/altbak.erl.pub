<?php

namespace Test\Ackermann;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Ackermann/index.php';

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


// Test_Ackermann_add
$Test_Ackermann_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Test_Ackermann_sub
$Test_Ackermann_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Test_Ackermann_describe
$Test_Ackermann_describe = ($GLOBALS['Effect_Console_log'])("Ackermann (3, 4):");

// Test_Ackermann_ackermann
$Test_Ackermann_ackermann = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$n = $__case_1;
return ($GLOBALS['Test_Ackermann_add'])($n, 1);
} else {
if (($__case_1 === 0)) {
$m = $__case_0;
$__tco_tmp_0 = ($GLOBALS['Test_Ackermann_sub'])($m, 1);
$__tco_tmp_1 = 1;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (true) {
$m = $__case_0;
$n = $__case_1;
$__tco_tmp_0 = ($GLOBALS['Test_Ackermann_sub'])($m, 1);
$__tco_tmp_1 = ($GLOBALS['Test_Ackermann_ackermann'])($m, ($GLOBALS['Test_Ackermann_sub'])($n, 1));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
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

// Test_Ackermann_act
$Test_Ackermann_act = ($GLOBALS['Effect_Console_logShow'])($GLOBALS['Data_Show_showInt'], ($GLOBALS['Test_Ackermann_ackermann'])(3, 4));

