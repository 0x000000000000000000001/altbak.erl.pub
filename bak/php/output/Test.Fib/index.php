<?php

namespace Test\Fib;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Fib/index.php';

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


// Test_Fib_add
$Test_Fib_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Test_Fib_sub
$Test_Fib_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Test_Fib_fib
$Test_Fib_fib = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if (($__case_0 === 0)) {
return 0;
} else {
if (($__case_0 === 1)) {
return 1;
} else {
if (true) {
$n = $__case_0;
return ($GLOBALS['Test_Fib_add'])(($GLOBALS['Test_Fib_fib'])(($GLOBALS['Test_Fib_sub'])($n, 1)), ($GLOBALS['Test_Fib_fib'])(($GLOBALS['Test_Fib_sub'])($n, 2)));
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

// Test_Fib_describe
$Test_Fib_describe = ($GLOBALS['Effect_Console_log'])("Fibonacci:");

// Test_Fib_act
$Test_Fib_act = ($GLOBALS['Effect_Console_logShow'])($GLOBALS['Data_Show_showInt'], ($GLOBALS['Test_Fib_fib'])(10));

