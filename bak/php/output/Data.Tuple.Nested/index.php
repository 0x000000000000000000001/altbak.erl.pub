<?php

namespace Data\Tuple\Nested;

require_once __DIR__ . '/../Data.Tuple/index.php';
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


// Data_Tuple_Nested_uncurry9
$Data_Tuple_Nested_uncurry9 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$i = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f, $g, $h, $i);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f__prime__, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry8
$Data_Tuple_Nested_uncurry8 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f, $g, $h);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f__prime__, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry7
$Data_Tuple_Nested_uncurry7 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f__prime__, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry6
$Data_Tuple_Nested_uncurry6 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f__prime__, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry5
$Data_Tuple_Nested_uncurry5 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f1)($a, $b, $c, $d, $e);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry4
$Data_Tuple_Nested_uncurry4 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple"))))) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
return ($f1)($a, $b, $c, $d);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry3
$Data_Tuple_Nested_uncurry3 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && (((($__case_1)->values[1])->values[1])->tag === "Tuple")))) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
return ($f1)($a, $b, $c);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry2
$Data_Tuple_Nested_uncurry2 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && ((($__case_1)->values[1])->tag === "Tuple"))) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
return ($f1)($a, $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry10
$Data_Tuple_Nested_uncurry10 = (function() {
  $__body = function($f__prime__, $v) {
    $__case_0 = $f__prime__;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))))) {
$f__prime__1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$i = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$j = (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return ($f__prime__1)($a, $b, $c, $d, $e, $f, $g, $h, $i, $j);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f__prime__, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f__prime__, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_uncurry1
$Data_Tuple_Nested_uncurry1 = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
return ($f1)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple9
$Data_Tuple_Nested_tuple9 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 9) return phpurs_curry_fallback($__fn, func_get_args(), 9);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, ($GLOBALS['Data_Tuple_Tuple'])($h, ($GLOBALS['Data_Tuple_Tuple'])($i, $GLOBALS['Data_Unit_unit'])))))))));
  return $__num > 9 ? $__res(...array_slice(func_get_args(), 9)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple8
$Data_Tuple_Nested_tuple8 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 8) return phpurs_curry_fallback($__fn, func_get_args(), 8);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, ($GLOBALS['Data_Tuple_Tuple'])($h, $GLOBALS['Data_Unit_unit']))))))));
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple7
$Data_Tuple_Nested_tuple7 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 7) return phpurs_curry_fallback($__fn, func_get_args(), 7);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, $GLOBALS['Data_Unit_unit'])))))));
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple6
$Data_Tuple_Nested_tuple6 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) return phpurs_curry_fallback($__fn, func_get_args(), 6);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, $GLOBALS['Data_Unit_unit']))))));
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple5
$Data_Tuple_Nested_tuple5 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 5) return phpurs_curry_fallback($__fn, func_get_args(), 5);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, $GLOBALS['Data_Unit_unit'])))));
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple4
$Data_Tuple_Nested_tuple4 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, $GLOBALS['Data_Unit_unit']))));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple3
$Data_Tuple_Nested_tuple3 = (function() {
  $__fn = function($a, $b = null, $c = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, $GLOBALS['Data_Unit_unit'])));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple2
$Data_Tuple_Nested_tuple2 = (function() {
  $__fn = function($a, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, $GLOBALS['Data_Unit_unit']));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple10
$Data_Tuple_Nested_tuple10 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 10) return phpurs_curry_fallback($__fn, func_get_args(), 10);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, ($GLOBALS['Data_Tuple_Tuple'])($h, ($GLOBALS['Data_Tuple_Tuple'])($i, ($GLOBALS['Data_Tuple_Tuple'])($j, $GLOBALS['Data_Unit_unit']))))))))));
  return $__num > 10 ? $__res(...array_slice(func_get_args(), 10)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_tuple1
$Data_Tuple_Nested_tuple1 = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, $GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over9
$Data_Tuple_Nested_over9 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$i = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, ($GLOBALS['Data_Tuple_Tuple'])($h, ($GLOBALS['Data_Tuple_Tuple'])(($o1)($i), $z)))))))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over8
$Data_Tuple_Nested_over8 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, ($GLOBALS['Data_Tuple_Tuple'])(($o1)($h), $z))))))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over7
$Data_Tuple_Nested_over7 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])(($o1)($g), $z)))))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over6
$Data_Tuple_Nested_over6 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])(($o1)($f), $z))))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over5
$Data_Tuple_Nested_over5 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$z = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])(($o1)($e), $z)))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over4
$Data_Tuple_Nested_over4 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple"))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$z = (((($__case_1)->values[1])->values[1])->values[1])->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])(($o1)($d), $z))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over3
$Data_Tuple_Nested_over3 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && (((($__case_1)->values[1])->values[1])->tag === "Tuple")))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$z = ((($__case_1)->values[1])->values[1])->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])(($o1)($c), $z)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over2
$Data_Tuple_Nested_over2 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && ((($__case_1)->values[1])->tag === "Tuple"))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$z = (($__case_1)->values[1])->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])(($o1)($b), $z));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over10
$Data_Tuple_Nested_over10 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if (((($__case_1)->tag === "Tuple") && (((($__case_1)->values[1])->tag === "Tuple") && ((((($__case_1)->values[1])->values[1])->tag === "Tuple") && (((((($__case_1)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))))) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$b = (($__case_1)->values[1])->values[0];
$c = ((($__case_1)->values[1])->values[1])->values[0];
$d = (((($__case_1)->values[1])->values[1])->values[1])->values[0];
$e = ((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[0];
$f = (((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$g = ((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$h = (((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$i = ((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$j = (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
$z = (((((((((($__case_1)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, ($GLOBALS['Data_Tuple_Tuple'])($h, ($GLOBALS['Data_Tuple_Tuple'])($i, ($GLOBALS['Data_Tuple_Tuple'])(($o1)($j), $z))))))))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_over1
$Data_Tuple_Nested_over1 = (function() {
  $__body = function($o, $v) {
    $__case_0 = $o;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$o1 = $__case_0;
$a = ($__case_1)->values[0];
$z = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($o1)($a), $z);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($o, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($o, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_get9
$Data_Tuple_Nested_get9 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))))) {
$i = ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $i;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_get8
$Data_Tuple_Nested_get8 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))) {
$h = (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $h;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_get7
$Data_Tuple_Nested_get7 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))))) {
$g = ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $g;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_get6
$Data_Tuple_Nested_get6 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))) {
$f = (((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $f;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_get5
$Data_Tuple_Nested_get5 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple")))))) {
$e = ((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[0];
return $e;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_get4
$Data_Tuple_Nested_get4 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple"))))) {
$d = (((($__case_0)->values[1])->values[1])->values[1])->values[0];
return $d;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_get3
$Data_Tuple_Nested_get3 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && (((($__case_0)->values[1])->values[1])->tag === "Tuple")))) {
$c = ((($__case_0)->values[1])->values[1])->values[0];
return $c;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_get2
$Data_Tuple_Nested_get2 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Tuple"))) {
$b = (($__case_0)->values[1])->values[0];
return $b;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_get10
$Data_Tuple_Nested_get10 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Tuple") && (((($__case_0)->values[1])->tag === "Tuple") && ((((($__case_0)->values[1])->values[1])->tag === "Tuple") && (((((($__case_0)->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple") && ((((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->tag === "Tuple"))))))))))) {
$j = (((((((((($__case_0)->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[1])->values[0];
return $j;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_get1
$Data_Tuple_Nested_get1 = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
return $a;
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_Nested_curry9
$Data_Tuple_Nested_curry9 = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 11) return phpurs_curry_fallback($__fn, func_get_args(), 11);
    $__res = ($f__prime__)(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, ($GLOBALS['Data_Tuple_Tuple'])($h, ($GLOBALS['Data_Tuple_Tuple'])($i, $z))))))))));
  return $__num > 11 ? $__res(...array_slice(func_get_args(), 11)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry8
$Data_Tuple_Nested_curry8 = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 10) return phpurs_curry_fallback($__fn, func_get_args(), 10);
    $__res = ($f__prime__)(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, ($GLOBALS['Data_Tuple_Tuple'])($h, $z)))))))));
  return $__num > 10 ? $__res(...array_slice(func_get_args(), 10)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry7
$Data_Tuple_Nested_curry7 = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 9) return phpurs_curry_fallback($__fn, func_get_args(), 9);
    $__res = ($f__prime__)(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, $z))))))));
  return $__num > 9 ? $__res(...array_slice(func_get_args(), 9)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry6
$Data_Tuple_Nested_curry6 = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 8) return phpurs_curry_fallback($__fn, func_get_args(), 8);
    $__res = ($f__prime__)(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, $z)))))));
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry5
$Data_Tuple_Nested_curry5 = (function() {
  $__fn = function($z, $f = null, $a = null, $b = null, $c = null, $d = null, $e = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 7) return phpurs_curry_fallback($__fn, func_get_args(), 7);
    $__res = ($f)(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, $z))))));
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry4
$Data_Tuple_Nested_curry4 = (function() {
  $__fn = function($z, $f = null, $a = null, $b = null, $c = null, $d = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) return phpurs_curry_fallback($__fn, func_get_args(), 6);
    $__res = ($f)(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, $z)))));
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry3
$Data_Tuple_Nested_curry3 = (function() {
  $__fn = function($z, $f = null, $a = null, $b = null, $c = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 5) return phpurs_curry_fallback($__fn, func_get_args(), 5);
    $__res = ($f)(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, $z))));
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry2
$Data_Tuple_Nested_curry2 = (function() {
  $__fn = function($z, $f = null, $a = null, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($f)(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, $z)));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry10
$Data_Tuple_Nested_curry10 = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 12) return phpurs_curry_fallback($__fn, func_get_args(), 12);
    $__res = ($f__prime__)(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Tuple_Tuple'])($b, ($GLOBALS['Data_Tuple_Tuple'])($c, ($GLOBALS['Data_Tuple_Tuple'])($d, ($GLOBALS['Data_Tuple_Tuple'])($e, ($GLOBALS['Data_Tuple_Tuple'])($f, ($GLOBALS['Data_Tuple_Tuple'])($g, ($GLOBALS['Data_Tuple_Tuple'])($h, ($GLOBALS['Data_Tuple_Tuple'])($i, ($GLOBALS['Data_Tuple_Tuple'])($j, $z)))))))))));
  return $__num > 12 ? $__res(...array_slice(func_get_args(), 12)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_Nested_curry1
$Data_Tuple_Nested_curry1 = (function() {
  $__fn = function($z, $f = null, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($f)(($GLOBALS['Data_Tuple_Tuple'])($a, $z));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

