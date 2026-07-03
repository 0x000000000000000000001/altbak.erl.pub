<?php

namespace Test\Polymorphism;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Polymorphism/index.php';

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


// Test_Polymorphism_sub
$Test_Polymorphism_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Test_Polymorphism_add
$Test_Polymorphism_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Test_Polymorphism_Monoidish$Dict
$Test_Polymorphism_Monoidish__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Test_Polymorphism_mempty_
$Test_Polymorphism_mempty_ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mempty_;
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

// Test_Polymorphism_mappend_
$Test_Polymorphism_mappend_ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mappend_;
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

// Test_Polymorphism_polyLoop
$Test_Polymorphism_polyLoop = (function() {
  $__fn = function($dictMonoidish) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mappend_1 = ($GLOBALS['Test_Polymorphism_mappend_'])($dictMonoidish);
$mempty_1 = ($GLOBALS['Test_Polymorphism_mempty_'])($dictMonoidish);
    $__res = (function() use ($mappend_1, $mempty_1) {
  $__fn = function($n_init, $acc_init = null) use ($mappend_1, $mempty_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use (&$go, $mappend_1, $mempty_1) {
  $__fn = function($v, $v1 = null) use (&$go, $mappend_1, $mempty_1, &$__fn) {
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
$__tco_tmp_0 = ($GLOBALS['Test_Polymorphism_sub'])($n, 1);
$__tco_tmp_1 = ($mappend_1)($acc, $mempty_1);
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
    $__res = ($go)($n_init, $acc_init);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Test_Polymorphism_intMonoidish
$Test_Polymorphism_intMonoidish = ($GLOBALS['Test_Polymorphism_Monoidish__dollar__Dict'])((object)["mempty_" => 1, "mappend_" => (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Test_Polymorphism_add'])($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Test_Polymorphism_describe
$Test_Polymorphism_describe = ($GLOBALS['Effect_Console_log'])("Polymorphism (10M Type Class Dict Lookups):");

// Test_Polymorphism_act
$Test_Polymorphism_act = ($GLOBALS['Effect_Console_logShow'])($GLOBALS['Data_Show_showInt'], ($GLOBALS['Test_Polymorphism_polyLoop'])($GLOBALS['Test_Polymorphism_intMonoidish'], 10000000, 0));

