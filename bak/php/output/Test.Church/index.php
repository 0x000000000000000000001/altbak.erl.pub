<?php

namespace Test\Church;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Church/index.php';

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


// Test_Church_add
$Test_Church_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Test_Church_sub
$Test_Church_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Test_Church_zeroC
$Test_Church_zeroC = (function() {
  $__fn = function($v, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $x;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_Church_toInt
$Test_Church_toInt = (function() {
  $__fn = function($n) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($n)((function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Church_add'])($x, 1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Test_Church_succC
$Test_Church_succC = (function() {
  $__fn = function($n, $f = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($f)(($n)($f, $x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Test_Church_mulC
$Test_Church_mulC = (function() {
  $__fn = function($m, $n = null, $f = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($m)(($n)($f), $x);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Test_Church_fromInt
$Test_Church_fromInt = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if (($__case_0 === 0)) {
return $GLOBALS['Test_Church_zeroC'];
} else {
if (true) {
$n = $__case_0;
return ($GLOBALS['Test_Church_succC'])(($GLOBALS['Test_Church_fromInt'])(($GLOBALS['Test_Church_sub'])($n, 1)));
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

// Test_Church_describe
$Test_Church_describe = ($GLOBALS['Effect_Console_log'])("Church Numerals (100k Closure Applications):");

// Test_Church_c10
$Test_Church_c10 = ($GLOBALS['Test_Church_fromInt'])(10);

// Test_Church_c100
$Test_Church_c100 = ($GLOBALS['Test_Church_mulC'])($GLOBALS['Test_Church_c10'], $GLOBALS['Test_Church_c10']);

// Test_Church_c10k
$Test_Church_c10k = ($GLOBALS['Test_Church_mulC'])($GLOBALS['Test_Church_c100'], $GLOBALS['Test_Church_c100']);

// Test_Church_c100k
$Test_Church_c100k = ($GLOBALS['Test_Church_mulC'])($GLOBALS['Test_Church_c10k'], $GLOBALS['Test_Church_c10']);

// Test_Church_addC
$Test_Church_addC = (function() {
  $__fn = function($m, $n = null, $f = null, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($m)($f, ($n)($f, $x));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Test_Church_act
$Test_Church_act = ($GLOBALS['Effect_Console_logShow'])($GLOBALS['Data_Show_showInt'], ($GLOBALS['Test_Church_toInt'])($GLOBALS['Test_Church_c100k']));

