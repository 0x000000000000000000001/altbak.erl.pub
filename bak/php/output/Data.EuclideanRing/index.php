<?php

namespace Data\EuclideanRing;

require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';

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
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}




$Data_EuclideanRing_intDegree = function($x) { return abs($x); };
$Data_EuclideanRing_intDiv = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return (int)($x / $y); }; });
$Data_EuclideanRing_intMod = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return $x % $y; }; });
$Data_EuclideanRing_numDiv = phpurs_uncurry2(function($x) { return function($y) use(&$x) { return $x / $y; }; });

// Data_EuclideanRing_disj
$Data_EuclideanRing_disj = ($GLOBALS['Data_HeytingAlgebra_disj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_EuclideanRing_EuclideanRing$Dict
$Data_EuclideanRing_EuclideanRing__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_EuclideanRing_mod
$Data_EuclideanRing_mod = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mod;
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

// Data_EuclideanRing_gcd
$Data_EuclideanRing_gcd = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$eq = ($GLOBALS['Data_Eq_eq'])($dictEq);
return (function() use ($eq, $dictEq) {
  $__fn = function($dictEuclideanRing) use ($eq, $dictEq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$zero = ($GLOBALS['Data_Semiring_zero'])((((((($dictEuclideanRing)->CommutativeRing0)($GLOBALS['Prim_undefined']))->Ring0)($GLOBALS['Prim_undefined']))->Semiring0)($GLOBALS['Prim_undefined']));
$mod1 = ($GLOBALS['Data_EuclideanRing_mod'])($dictEuclideanRing);
    $__res = (function() use ($eq, $zero, $dictEq, $dictEuclideanRing, $mod1) {
  $__body = function($a, $b) use ($eq, $zero, $dictEq, $dictEuclideanRing, $mod1) {
    $__case_0 = ($eq)($b, $zero);
    if (($__case_0 === true)) {
return $a;
} else {
if (true) {
return ($GLOBALS['Data_EuclideanRing_gcd'])($dictEq, $dictEuclideanRing, $b, ($mod1)($a, $b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null) use ($eq, $zero, $dictEq, $dictEuclideanRing, $mod1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a, $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_EuclideanRing_euclideanRingNumber
$Data_EuclideanRing_euclideanRingNumber = ($GLOBALS['Data_EuclideanRing_EuclideanRing__dollar__Dict'])((object)["degree" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = 1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "div" => $GLOBALS['Data_EuclideanRing_numDiv'], "mod" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = 0.0;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_CommutativeRing_commutativeRingNumber'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_EuclideanRing_euclideanRingInt
$Data_EuclideanRing_euclideanRingInt = ($GLOBALS['Data_EuclideanRing_EuclideanRing__dollar__Dict'])((object)["degree" => $GLOBALS['Data_EuclideanRing_intDegree'], "div" => $GLOBALS['Data_EuclideanRing_intDiv'], "mod" => $GLOBALS['Data_EuclideanRing_intMod'], "CommutativeRing0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_CommutativeRing_commutativeRingInt'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_EuclideanRing_div
$Data_EuclideanRing_div = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->div;
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

// Data_EuclideanRing_lcm
$Data_EuclideanRing_lcm = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq = ($GLOBALS['Data_Eq_eq'])($dictEq);
$gcd1 = ($GLOBALS['Data_EuclideanRing_gcd'])($dictEq);
    $__res = (function() use ($gcd1, $eq) {
  $__fn = function($dictEuclideanRing) use ($gcd1, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Semiring0 = (((((($dictEuclideanRing)->CommutativeRing0)($GLOBALS['Prim_undefined']))->Ring0)($GLOBALS['Prim_undefined']))->Semiring0)($GLOBALS['Prim_undefined']);
$zero = ($GLOBALS['Data_Semiring_zero'])($Semiring0);
$div1 = ($GLOBALS['Data_EuclideanRing_div'])($dictEuclideanRing);
$mul = ($GLOBALS['Data_Semiring_mul'])($Semiring0);
$gcd2 = ($gcd1)($dictEuclideanRing);
    $__res = (function() use ($eq, $zero, $div1, $mul, $gcd2) {
  $__body = function($a, $b) use ($eq, $zero, $div1, $mul, $gcd2) {
    $__case_0 = ($GLOBALS['Data_EuclideanRing_disj'])(($eq)($a, $zero), ($eq)($b, $zero));
    if (($__case_0 === true)) {
return $zero;
} else {
if (true) {
return ($div1)(($mul)($a, $b), ($gcd2)($a, $b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null) use ($eq, $zero, $div1, $mul, $gcd2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a, $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Data_EuclideanRing_degree
$Data_EuclideanRing_degree = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->degree;
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

