<?php

namespace Data\Functor\Product2;

require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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


// Data_Functor_Product2_append
$Data_Functor_Product2_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Functor_Product2_conj
$Data_Functor_Product2_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Functor_Product2_Product2
$Data_Functor_Product2_Product2 = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Product2", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product2_showProduct2
$Data_Functor_Product2_showProduct2 = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = (function() use ($show) {
  $__fn = function($dictShow1) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show1 = ($GLOBALS['Data_Show_show'])($dictShow1);
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show, $show1) {
  $__body = function($v) use ($show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product2")) {
$x = ($__case_0)->values[0];
$y = ($__case_0)->values[1];
return ($GLOBALS['Data_Functor_Product2_append'])("(Product2 ", ($GLOBALS['Data_Functor_Product2_append'])(($show)($x), ($GLOBALS['Data_Functor_Product2_append'])(" ", ($GLOBALS['Data_Functor_Product2_append'])(($show1)($y), ")"))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show, $show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product2_profunctorProduct2
$Data_Functor_Product2_profunctorProduct2 = (function() {
  $__fn = function($dictProfunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$dimap = ($GLOBALS['Data_Profunctor_dimap'])($dictProfunctor);
    $__res = (function() use ($dimap) {
  $__fn = function($dictProfunctor1) use ($dimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$dimap1 = ($GLOBALS['Data_Profunctor_dimap'])($dictProfunctor1);
    $__res = ($GLOBALS['Data_Profunctor_Profunctor__dollar__Dict'])((object)["dimap" => (function() use ($dimap, $dimap1) {
  $__body = function($f, $g, $v) use ($dimap, $dimap1) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Product2")) {
$f1 = $__case_0;
$g1 = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($GLOBALS['Data_Functor_Product2_Product2'])(($dimap)($f1, $g1, $x), ($dimap1)($f1, $g1, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($dimap, $dimap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product2_functorProduct2
$Data_Functor_Product2_functorProduct2 = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map) {
  $__fn = function($dictFunctor1) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])($dictFunctor1);
    $__res = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() use ($map, $map1) {
  $__body = function($f, $v) use ($map, $map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Product2")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$y = ($__case_1)->values[1];
return ($GLOBALS['Data_Functor_Product2_Product2'])(($map)($f1, $x), ($map1)($f1, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product2_eqProduct2
$Data_Functor_Product2_eqProduct2 = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq) {
  $__fn = function($dictEq1) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq'])($dictEq1);
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() use ($eq, $eq1) {
  $__body = function($x, $y) use ($eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Product2") && (($__case_1)->tag === "Product2"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($GLOBALS['Data_Functor_Product2_conj'])(($eq)($l, $r), ($eq1)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product2_ordProduct2
$Data_Functor_Product2_ordProduct2 = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
$eqProduct21 = ($GLOBALS['Data_Functor_Product2_eqProduct2'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($eqProduct21, $compare) {
  $__fn = function($dictOrd1) use ($eqProduct21, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare'])($dictOrd1);
$eqProduct22 = ($eqProduct21)((($dictOrd1)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() use ($compare, $compare1) {
  $__body = function($x, $y) use ($compare, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Product2") && (($__case_1)->tag === "Product2"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
return ($compare1)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqProduct22) {
  $__fn = function($__dollar____unused) use ($eqProduct22, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqProduct22;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product2_bifunctorProduct2
$Data_Functor_Product2_bifunctorProduct2 = (function() {
  $__fn = function($dictBifunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bimap = ($GLOBALS['Data_Bifunctor_bimap'])($dictBifunctor);
    $__res = (function() use ($bimap) {
  $__fn = function($dictBifunctor1) use ($bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bimap1 = ($GLOBALS['Data_Bifunctor_bimap'])($dictBifunctor1);
    $__res = ($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'])((object)["bimap" => (function() use ($bimap, $bimap1) {
  $__body = function($f, $g, $v) use ($bimap, $bimap1) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Product2")) {
$f1 = $__case_0;
$g1 = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($GLOBALS['Data_Functor_Product2_Product2'])(($bimap)($f1, $g1, $x), ($bimap1)($f1, $g1, $y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($bimap, $bimap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product2_biapplyProduct2
$Data_Functor_Product2_biapplyProduct2 = (function() {
  $__fn = function($dictBiapply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$biapply = ($GLOBALS['Control_Biapply_biapply'])($dictBiapply);
$bifunctorProduct21 = ($GLOBALS['Data_Functor_Product2_bifunctorProduct2'])((($dictBiapply)->Bifunctor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bifunctorProduct21, $biapply) {
  $__fn = function($dictBiapply1) use ($bifunctorProduct21, $biapply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$biapply1 = ($GLOBALS['Control_Biapply_biapply'])($dictBiapply1);
$bifunctorProduct22 = ($bifunctorProduct21)((($dictBiapply1)->Bifunctor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Biapply_Biapply__dollar__Dict'])((object)["biapply" => (function() use ($biapply, $biapply1) {
  $__body = function($v, $v1) use ($biapply, $biapply1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Product2") && (($__case_1)->tag === "Product2"))) {
$w = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
$y = ($__case_1)->values[0];
$z = ($__case_1)->values[1];
return ($GLOBALS['Data_Functor_Product2_Product2'])(($biapply)($w, $y), ($biapply1)($x, $z));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($biapply, $biapply1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() use ($bifunctorProduct22) {
  $__fn = function($__dollar____unused) use ($bifunctorProduct22, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $bifunctorProduct22;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product2_biapplicativeProduct2
$Data_Functor_Product2_biapplicativeProduct2 = (function() {
  $__fn = function($dictBiapplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bipure = ($GLOBALS['Control_Biapplicative_bipure'])($dictBiapplicative);
$biapplyProduct21 = ($GLOBALS['Data_Functor_Product2_biapplyProduct2'])((($dictBiapplicative)->Biapply0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($biapplyProduct21, $bipure) {
  $__fn = function($dictBiapplicative1) use ($biapplyProduct21, $bipure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bipure1 = ($GLOBALS['Control_Biapplicative_bipure'])($dictBiapplicative1);
$biapplyProduct22 = ($biapplyProduct21)((($dictBiapplicative1)->Biapply0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Biapplicative_Biapplicative__dollar__Dict'])((object)["bipure" => (function() use ($bipure, $bipure1) {
  $__fn = function($a, $b = null) use ($bipure, $bipure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Functor_Product2_Product2'])(($bipure)($a, $b), ($bipure1)($a, $b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Biapply0" => (function() use ($biapplyProduct22) {
  $__fn = function($__dollar____unused) use ($biapplyProduct22, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $biapplyProduct22;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

