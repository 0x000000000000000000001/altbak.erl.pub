<?php

namespace Data\Functor\Product\Nested;

require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
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


// Data_Functor_Product_Nested_product9
$Data_Functor_Product_Nested_product9 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 9) return phpurs_curry_fallback($__fn, func_get_args(), 9);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Functor_Product_product'])($b, ($GLOBALS['Data_Functor_Product_product'])($c, ($GLOBALS['Data_Functor_Product_product'])($d, ($GLOBALS['Data_Functor_Product_product'])($e, ($GLOBALS['Data_Functor_Product_product'])($f, ($GLOBALS['Data_Functor_Product_product'])($g, ($GLOBALS['Data_Functor_Product_product'])($h, ($GLOBALS['Data_Functor_Product_product'])($i, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit']))))))))));
  return $__num > 9 ? $__res(...array_slice(func_get_args(), 9)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product8
$Data_Functor_Product_Nested_product8 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 8) return phpurs_curry_fallback($__fn, func_get_args(), 8);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Functor_Product_product'])($b, ($GLOBALS['Data_Functor_Product_product'])($c, ($GLOBALS['Data_Functor_Product_product'])($d, ($GLOBALS['Data_Functor_Product_product'])($e, ($GLOBALS['Data_Functor_Product_product'])($f, ($GLOBALS['Data_Functor_Product_product'])($g, ($GLOBALS['Data_Functor_Product_product'])($h, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit'])))))))));
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product7
$Data_Functor_Product_Nested_product7 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 7) return phpurs_curry_fallback($__fn, func_get_args(), 7);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Functor_Product_product'])($b, ($GLOBALS['Data_Functor_Product_product'])($c, ($GLOBALS['Data_Functor_Product_product'])($d, ($GLOBALS['Data_Functor_Product_product'])($e, ($GLOBALS['Data_Functor_Product_product'])($f, ($GLOBALS['Data_Functor_Product_product'])($g, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit']))))))));
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product6
$Data_Functor_Product_Nested_product6 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 6) return phpurs_curry_fallback($__fn, func_get_args(), 6);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Functor_Product_product'])($b, ($GLOBALS['Data_Functor_Product_product'])($c, ($GLOBALS['Data_Functor_Product_product'])($d, ($GLOBALS['Data_Functor_Product_product'])($e, ($GLOBALS['Data_Functor_Product_product'])($f, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit'])))))));
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product5
$Data_Functor_Product_Nested_product5 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 5) return phpurs_curry_fallback($__fn, func_get_args(), 5);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Functor_Product_product'])($b, ($GLOBALS['Data_Functor_Product_product'])($c, ($GLOBALS['Data_Functor_Product_product'])($d, ($GLOBALS['Data_Functor_Product_product'])($e, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit']))))));
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product4
$Data_Functor_Product_Nested_product4 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Functor_Product_product'])($b, ($GLOBALS['Data_Functor_Product_product'])($c, ($GLOBALS['Data_Functor_Product_product'])($d, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit'])))));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product3
$Data_Functor_Product_Nested_product3 = (function() {
  $__fn = function($a, $b = null, $c = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Functor_Product_product'])($b, ($GLOBALS['Data_Functor_Product_product'])($c, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit']))));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product2
$Data_Functor_Product_Nested_product2 = (function() {
  $__fn = function($a, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Functor_Product_product'])($b, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit'])));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product10
$Data_Functor_Product_Nested_product10 = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 10) return phpurs_curry_fallback($__fn, func_get_args(), 10);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Functor_Product_product'])($b, ($GLOBALS['Data_Functor_Product_product'])($c, ($GLOBALS['Data_Functor_Product_product'])($d, ($GLOBALS['Data_Functor_Product_product'])($e, ($GLOBALS['Data_Functor_Product_product'])($f, ($GLOBALS['Data_Functor_Product_product'])($g, ($GLOBALS['Data_Functor_Product_product'])($h, ($GLOBALS['Data_Functor_Product_product'])($i, ($GLOBALS['Data_Functor_Product_product'])($j, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit'])))))))))));
  return $__num > 10 ? $__res(...array_slice(func_get_args(), 10)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_product1
$Data_Functor_Product_Nested_product1 = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Product_product'])($a, ($GLOBALS['Data_Const_Const'])($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_Nested_get9
$Data_Functor_Product_Nested_get9 = (function() {
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

// Data_Functor_Product_Nested_get8
$Data_Functor_Product_Nested_get8 = (function() {
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

// Data_Functor_Product_Nested_get7
$Data_Functor_Product_Nested_get7 = (function() {
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

// Data_Functor_Product_Nested_get6
$Data_Functor_Product_Nested_get6 = (function() {
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

// Data_Functor_Product_Nested_get5
$Data_Functor_Product_Nested_get5 = (function() {
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

// Data_Functor_Product_Nested_get4
$Data_Functor_Product_Nested_get4 = (function() {
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

// Data_Functor_Product_Nested_get3
$Data_Functor_Product_Nested_get3 = (function() {
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

// Data_Functor_Product_Nested_get2
$Data_Functor_Product_Nested_get2 = (function() {
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

// Data_Functor_Product_Nested_get10
$Data_Functor_Product_Nested_get10 = (function() {
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

// Data_Functor_Product_Nested_get1
$Data_Functor_Product_Nested_get1 = (function() {
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

