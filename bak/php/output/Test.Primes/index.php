<?php

namespace Test\Primes;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Test.Primes/index.php';

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


// Test_Primes_add
$Test_Primes_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Test_Primes_lessThan
$Test_Primes_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Test_Primes_sub
$Test_Primes_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Test_Primes_notEq
$Test_Primes_notEq = ($GLOBALS['Data_Eq_notEq'])($GLOBALS['Data_Eq_eqInt']);

// Test_Primes_mod
$Test_Primes_mod = ($GLOBALS['Data_EuclideanRing_mod'])($GLOBALS['Data_EuclideanRing_euclideanRingInt']);

// Test_Primes_Nil
$Test_Primes_Nil = (object)["tag" => "Nil", "values" => []];

// Test_Primes_Cons
$Test_Primes_Cons = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Cons", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_Primes_sumList
$Test_Primes_sumList = (function() {
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
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($GLOBALS['Test_Primes_add'])($acc, $x);
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
    $__res = ($go)($lst, 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Test_Primes_reverse
$Test_Primes_reverse = (function() {
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
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($GLOBALS['Test_Primes_Cons'])($x, $acc);
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
    $__res = ($go)($lst, $GLOBALS['Test_Primes_Nil']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Test_Primes_range
$Test_Primes_range = (function() {
  $__fn = function($start, $end = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($start, &$go) {
  $__fn = function($curr, $acc = null) use ($start, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = ($GLOBALS['Test_Primes_lessThan'])($curr, $start);
if (($__case_0 === true)) {
return $acc;
} else {
if (true) {
$__tco_tmp_0 = ($GLOBALS['Test_Primes_sub'])($curr, 1);
$__tco_tmp_1 = ($GLOBALS['Test_Primes_Cons'])($curr, $acc);
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
    $__res = ($go)($end, $GLOBALS['Test_Primes_Nil']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_Primes_filter
$Test_Primes_filter = (function() {
  $__fn = function($p, $lst = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($p, &$go) {
  $__fn = function($v, $v1 = null) use ($p, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
$acc = $__case_1;
return ($GLOBALS['Test_Primes_reverse'])($acc);
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
$acc = $__case_1;
$__case_0 = ($p)($x);
if (($__case_0 === true)) {
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = ($GLOBALS['Test_Primes_Cons'])($x, $acc);
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
    $__res = ($go)($lst, $GLOBALS['Test_Primes_Nil']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Test_Primes_sieve
$Test_Primes_sieve = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Test_Primes_Nil'];
} else {
if ((($__case_0)->tag === "Cons")) {
$p = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Test_Primes_Cons'])($p, ($GLOBALS['Test_Primes_sieve'])(($GLOBALS['Test_Primes_filter'])((function() use ($p) {
  $__fn = function($x) use ($p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Test_Primes_notEq'])(($GLOBALS['Test_Primes_mod'])($x, $p), 0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $xs)));
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

// Test_Primes_describe
$Test_Primes_describe = ($GLOBALS['Effect_Console_log'])("Prime Sieve (sum primes up to 500):");

// Test_Primes_act
$Test_Primes_act = ($GLOBALS['Effect_Console_logShow'])($GLOBALS['Data_Show_showInt'], ($GLOBALS['Test_Primes_sumList'])(($GLOBALS['Test_Primes_sieve'])(($GLOBALS['Test_Primes_range'])(2, 500))));

