<?php

namespace Data\List\Internal;

require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
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


// Data_List_Internal_Leaf
$Data_List_Internal_Leaf = (object)["tag" => "Leaf", "values" => []];

// Data_List_Internal_Two
$Data_List_Internal_Two = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)["tag" => "Two", "values" => [$value0, $value1, $value2]];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Internal_Three
$Data_List_Internal_Three = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 5) return phpurs_curry_fallback($__fn, func_get_args(), 5);
    $__res = (object)["tag" => "Three", "values" => [$value0, $value1, $value2, $value3, $value4]];
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();

// Data_List_Internal_TwoLeft
$Data_List_Internal_TwoLeft = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "TwoLeft", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Internal_TwoRight
$Data_List_Internal_TwoRight = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "TwoRight", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Internal_ThreeLeft
$Data_List_Internal_ThreeLeft = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = (object)["tag" => "ThreeLeft", "values" => [$value0, $value1, $value2, $value3]];
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Data_List_Internal_ThreeMiddle
$Data_List_Internal_ThreeMiddle = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = (object)["tag" => "ThreeMiddle", "values" => [$value0, $value1, $value2, $value3]];
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Data_List_Internal_ThreeRight
$Data_List_Internal_ThreeRight = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = (object)["tag" => "ThreeRight", "values" => [$value0, $value1, $value2, $value3]];
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Data_List_Internal_KickUp
$Data_List_Internal_KickUp = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)["tag" => "KickUp", "values" => [$value0, $value1, $value2]];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Internal_fromZipper
$Data_List_Internal_fromZipper = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
$tree = $__case_1;
return $tree;
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$ctx = ($__case_0)->values[1];
$tree = $__case_1;
$__case_0 = $x;
if ((($__case_0)->tag === "TwoLeft")) {
$k1 = ($__case_0)->values[0];
$right = ($__case_0)->values[1];
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = ($GLOBALS['Data_List_Internal_Two'])($tree, $k1, $right);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if ((($__case_0)->tag === "TwoRight")) {
$left = ($__case_0)->values[0];
$k1 = ($__case_0)->values[1];
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = ($GLOBALS['Data_List_Internal_Two'])($left, $k1, $tree);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if ((($__case_0)->tag === "ThreeLeft")) {
$k1 = ($__case_0)->values[0];
$mid = ($__case_0)->values[1];
$k2 = ($__case_0)->values[2];
$right = ($__case_0)->values[3];
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = ($GLOBALS['Data_List_Internal_Three'])($tree, $k1, $mid, $k2, $right);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if ((($__case_0)->tag === "ThreeMiddle")) {
$left = ($__case_0)->values[0];
$k1 = ($__case_0)->values[1];
$k2 = ($__case_0)->values[2];
$right = ($__case_0)->values[3];
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = ($GLOBALS['Data_List_Internal_Three'])($left, $k1, $tree, $k2, $right);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if ((($__case_0)->tag === "ThreeRight")) {
$left = ($__case_0)->values[0];
$k1 = ($__case_0)->values[1];
$mid = ($__case_0)->values[2];
$k2 = ($__case_0)->values[3];
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = ($GLOBALS['Data_List_Internal_Three'])($left, $k1, $mid, $k2, $tree);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
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

// Data_List_Internal_insertAndLookupBy
$Data_List_Internal_insertAndLookupBy = (function() {
  $__fn = function($comp, $k = null, $orig = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$up = (function() use (&$up) {
  $__fn = function($v, $v1 = null) use (&$up, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "KickUp"))) {
$left = ($__case_1)->values[0];
$k__prime__ = ($__case_1)->values[1];
$right = ($__case_1)->values[2];
return ($GLOBALS['Data_List_Internal_Two'])($left, $k__prime__, $right);
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$ctx = ($__case_0)->values[1];
$kup = $__case_1;
$__case_0 = $x;
$__case_1 = $kup;
if (((($__case_0)->tag === "TwoLeft") && (($__case_1)->tag === "KickUp"))) {
$k1 = ($__case_0)->values[0];
$right = ($__case_0)->values[1];
$left = ($__case_1)->values[0];
$k__prime__ = ($__case_1)->values[1];
$mid = ($__case_1)->values[2];
return ($GLOBALS['Data_List_Internal_fromZipper'])($ctx, ($GLOBALS['Data_List_Internal_Three'])($left, $k__prime__, $mid, $k1, $right));
} else {
if (((($__case_0)->tag === "TwoRight") && (($__case_1)->tag === "KickUp"))) {
$left = ($__case_0)->values[0];
$k1 = ($__case_0)->values[1];
$mid = ($__case_1)->values[0];
$k__prime__ = ($__case_1)->values[1];
$right = ($__case_1)->values[2];
return ($GLOBALS['Data_List_Internal_fromZipper'])($ctx, ($GLOBALS['Data_List_Internal_Three'])($left, $k1, $mid, $k__prime__, $right));
} else {
if (((($__case_0)->tag === "ThreeLeft") && (($__case_1)->tag === "KickUp"))) {
$k1 = ($__case_0)->values[0];
$c = ($__case_0)->values[1];
$k2 = ($__case_0)->values[2];
$d = ($__case_0)->values[3];
$a = ($__case_1)->values[0];
$k__prime__ = ($__case_1)->values[1];
$b = ($__case_1)->values[2];
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = ($GLOBALS['Data_List_Internal_KickUp'])(($GLOBALS['Data_List_Internal_Two'])($a, $k__prime__, $b), $k1, ($GLOBALS['Data_List_Internal_Two'])($c, $k2, $d));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (((($__case_0)->tag === "ThreeMiddle") && (($__case_1)->tag === "KickUp"))) {
$a = ($__case_0)->values[0];
$k1 = ($__case_0)->values[1];
$k2 = ($__case_0)->values[2];
$d = ($__case_0)->values[3];
$b = ($__case_1)->values[0];
$k__prime__ = ($__case_1)->values[1];
$c = ($__case_1)->values[2];
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = ($GLOBALS['Data_List_Internal_KickUp'])(($GLOBALS['Data_List_Internal_Two'])($a, $k1, $b), $k__prime__, ($GLOBALS['Data_List_Internal_Two'])($c, $k2, $d));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (((($__case_0)->tag === "ThreeRight") && (($__case_1)->tag === "KickUp"))) {
$a = ($__case_0)->values[0];
$k1 = ($__case_0)->values[1];
$b = ($__case_0)->values[2];
$k2 = ($__case_0)->values[3];
$c = ($__case_1)->values[0];
$k__prime__ = ($__case_1)->values[1];
$d = ($__case_1)->values[2];
$__tco_tmp_0 = $ctx;
$__tco_tmp_1 = ($GLOBALS['Data_List_Internal_KickUp'])(($GLOBALS['Data_List_Internal_Two'])($a, $k1, $b), $k2, ($GLOBALS['Data_List_Internal_Two'])($c, $k__prime__, $d));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
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
$down = (function() use (&$up, $k, $comp, $orig, &$down) {
  $__fn = function($v, $v1 = null) use (&$up, $k, $comp, $orig, &$down, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_1)->tag === "Leaf")) {
$ctx = $__case_0;
return (object)["found" => false, "result" => ($up)($ctx, ($GLOBALS['Data_List_Internal_KickUp'])($GLOBALS['Data_List_Internal_Leaf'], $k, $GLOBALS['Data_List_Internal_Leaf']))];
} else {
if ((($__case_1)->tag === "Two")) {
$ctx = $__case_0;
$left = ($__case_1)->values[0];
$k1 = ($__case_1)->values[1];
$right = ($__case_1)->values[2];
$v2 = ($comp)($k, $k1);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
return (object)["found" => true, "result" => $orig];
} else {
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = ($GLOBALS['Data_List_Types_Cons'])(($GLOBALS['Data_List_Internal_TwoLeft'])($k1, $right), $ctx);
$__tco_tmp_1 = $left;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (true) {
$__tco_tmp_0 = ($GLOBALS['Data_List_Types_Cons'])(($GLOBALS['Data_List_Internal_TwoRight'])($left, $k1), $ctx);
$__tco_tmp_1 = $right;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
if ((($__case_1)->tag === "Three")) {
$ctx = $__case_0;
$left = ($__case_1)->values[0];
$k1 = ($__case_1)->values[1];
$mid = ($__case_1)->values[2];
$k2 = ($__case_1)->values[3];
$right = ($__case_1)->values[4];
$v2 = ($comp)($k, $k1);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
return (object)["found" => true, "result" => $orig];
} else {
if (true) {
$c1 = $__case_0;
$v3 = ($comp)($k, $k2);
$v4 = $c1;
$__case_0 = $v4;
$__case_1 = $v3;
if ((($__case_1)->tag === "EQ")) {
return (object)["found" => true, "result" => $orig];
} else {
if ((($__case_0)->tag === "LT")) {
$__tco_tmp_0 = ($GLOBALS['Data_List_Types_Cons'])(($GLOBALS['Data_List_Internal_ThreeLeft'])($k1, $mid, $k2, $right), $ctx);
$__tco_tmp_1 = $left;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (((($__case_0)->tag === "GT") && (($__case_1)->tag === "LT"))) {
$__tco_tmp_0 = ($GLOBALS['Data_List_Types_Cons'])(($GLOBALS['Data_List_Internal_ThreeMiddle'])($left, $k1, $k2, $right), $ctx);
$__tco_tmp_1 = $mid;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if (true) {
$__tco_tmp_0 = ($GLOBALS['Data_List_Types_Cons'])(($GLOBALS['Data_List_Internal_ThreeRight'])($left, $k1, $mid, $k2), $ctx);
$__tco_tmp_1 = $right;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
throw new \Exception("Pattern match failure");
};
};
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
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($down)($GLOBALS['Data_List_Types_Nil'], $orig);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_List_Internal_emptySet
$Data_List_Internal_emptySet = $GLOBALS['Data_List_Internal_Leaf'];

