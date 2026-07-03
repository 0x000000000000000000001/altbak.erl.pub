<?php

namespace Data\Functor\Product;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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


// Data_Functor_Product_append
$Data_Functor_Product_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Functor_Product_bimap
$Data_Functor_Product_bimap = ($GLOBALS['Data_Bifunctor_bimap'])($GLOBALS['Data_Bifunctor_bifunctorTuple']);

// Data_Functor_Product_conj
$Data_Functor_Product_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Functor_Product_compose
$Data_Functor_Product_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Functor_Product_unwrap
$Data_Functor_Product_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_Functor_Product_Product
$Data_Functor_Product_Product = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_showProduct
$Data_Functor_Product_showProduct = (function() {
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
    if ((($__case_0)->tag === "Tuple")) {
$fa = ($__case_0)->values[0];
$ga = ($__case_0)->values[1];
return ($GLOBALS['Data_Functor_Product_append'])("(product ", ($GLOBALS['Data_Functor_Product_append'])(($show)($fa), ($GLOBALS['Data_Functor_Product_append'])(" ", ($GLOBALS['Data_Functor_Product_append'])(($show1)($ga), ")"))));
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

// Data_Functor_Product_product
$Data_Functor_Product_product = (function() {
  $__fn = function($fa, $ga = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Functor_Product_Product'])(($GLOBALS['Data_Tuple_Tuple'])($fa, $ga));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_newtypeProduct
$Data_Functor_Product_newtypeProduct = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Functor_Product_functorProduct
$Data_Functor_Product_functorProduct = (function() {
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
    if (true) {
$f1 = $__case_0;
$fga = $__case_1;
return ($GLOBALS['Data_Functor_Product_Product'])(($GLOBALS['Data_Functor_Product_bimap'])(($map)($f1), ($map1)($f1), $fga));
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

// Data_Functor_Product_eq1Product
$Data_Functor_Product_eq1Product = (function() {
  $__fn = function($dictEq1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq1'])($dictEq1);
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq11) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq11 = ($GLOBALS['Data_Eq_eq1'])($dictEq11);
    $__res = ($GLOBALS['Data_Eq_Eq1__dollar__Dict'])((object)["eq1" => (function() use ($eq1, $eq11) {
  $__fn = function($dictEq) use ($eq1, $eq11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq12 = ($eq1)($dictEq);
$eq13 = ($eq11)($dictEq);
    $__res = (function() use ($eq12, $eq13) {
  $__body = function($v, $v1) use ($eq12, $eq13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l1 = ($__case_0)->values[0];
$r1 = ($__case_0)->values[1];
$l2 = ($__case_1)->values[0];
$r2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Functor_Product_conj'])(($eq12)($l1, $l2), ($eq13)($r1, $r2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($eq12, $eq13, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
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

// Data_Functor_Product_eqProduct
$Data_Functor_Product_eqProduct = (function() {
  $__fn = function($dictEq1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1Product1 = ($GLOBALS['Data_Functor_Product_eq1Product'])($dictEq1);
    $__res = (function() use ($eq1Product1) {
  $__fn = function($dictEq11) use ($eq1Product1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq1'])(($eq1Product1)($dictEq11));
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => ($eq1)($dictEq)]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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

// Data_Functor_Product_ord1Product
$Data_Functor_Product_ord1Product = (function() {
  $__fn = function($dictOrd1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare1'])($dictOrd1);
$eq1Product1 = ($GLOBALS['Data_Functor_Product_eq1Product'])((($dictOrd1)->Eq10)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($eq1Product1, $compare1) {
  $__fn = function($dictOrd11) use ($eq1Product1, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare11 = ($GLOBALS['Data_Ord_compare1'])($dictOrd11);
$eq1Product2 = ($eq1Product1)((($dictOrd11)->Eq10)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord1__dollar__Dict'])((object)["compare1" => (function() use ($compare1, $compare11) {
  $__fn = function($dictOrd) use ($compare1, $compare11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare12 = ($compare1)($dictOrd);
$compare13 = ($compare11)($dictOrd);
    $__res = (function() use ($compare12, $compare13) {
  $__body = function($v, $v1) use ($compare12, $compare13) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l1 = ($__case_0)->values[0];
$r1 = ($__case_0)->values[1];
$l2 = ($__case_1)->values[0];
$r2 = ($__case_1)->values[1];
$v2 = ($compare12)($l1, $l2);
$__case_0 = $v2;
if ((($__case_0)->tag === "EQ")) {
return ($compare13)($r1, $r2);
} else {
if (true) {
$o = $__case_0;
return $o;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($compare12, $compare13, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Product2) {
  $__fn = function($__dollar____unused) use ($eq1Product2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eq1Product2;
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

// Data_Functor_Product_ordProduct
$Data_Functor_Product_ordProduct = (function() {
  $__fn = function($dictOrd1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ord1Product1 = ($GLOBALS['Data_Functor_Product_ord1Product'])($dictOrd1);
$eqProduct1 = ($GLOBALS['Data_Functor_Product_eqProduct'])((($dictOrd1)->Eq10)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ord1Product1, $eqProduct1) {
  $__fn = function($dictOrd11) use ($ord1Product1, $eqProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare1'])(($ord1Product1)($dictOrd11));
$eqProduct2 = ($eqProduct1)((($dictOrd11)->Eq10)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($eqProduct2, $compare1) {
  $__fn = function($dictOrd) use ($eqProduct2, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eqProduct3 = ($eqProduct2)((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($compare1)($dictOrd), "Eq0" => (function() use ($eqProduct3) {
  $__fn = function($__dollar____unused) use ($eqProduct3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqProduct3;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_bihoistProduct
$Data_Functor_Product_bihoistProduct = (function() {
  $__body = function($natF, $natG, $v) {
    $__case_0 = $natF;
    $__case_1 = $natG;
    $__case_2 = $v;
    if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$e = $__case_2;
return ($GLOBALS['Data_Functor_Product_Product'])(($GLOBALS['Data_Functor_Product_bimap'])($natF1, $natG1, $e));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($natF, $natG = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($natF, $natG, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Product_applyProduct
$Data_Functor_Product_applyProduct = (function() {
  $__fn = function($dictApply) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$apply = ($GLOBALS['Control_Apply_apply'])($dictApply);
$functorProduct1 = ($GLOBALS['Data_Functor_Product_functorProduct'])((($dictApply)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($functorProduct1, $apply) {
  $__fn = function($dictApply1) use ($functorProduct1, $apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$apply1 = ($GLOBALS['Control_Apply_apply'])($dictApply1);
$functorProduct2 = ($functorProduct1)((($dictApply1)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() use ($apply, $apply1) {
  $__body = function($v, $v1) use ($apply, $apply1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$f = ($__case_0)->values[0];
$g = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
$b = ($__case_1)->values[1];
return ($GLOBALS['Data_Functor_Product_product'])(($apply)($f, $a), ($apply1)($g, $b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $apply1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorProduct2) {
  $__fn = function($__dollar____unused) use ($functorProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorProduct2;
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

// Data_Functor_Product_bindProduct
$Data_Functor_Product_bindProduct = (function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])($dictBind);
$applyProduct1 = ($GLOBALS['Data_Functor_Product_applyProduct'])((($dictBind)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($applyProduct1, $bind) {
  $__fn = function($dictBind1) use ($applyProduct1, $bind, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind1 = ($GLOBALS['Control_Bind_bind'])($dictBind1);
$applyProduct2 = ($applyProduct1)((($dictBind1)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() use ($bind, $bind1) {
  $__body = function($v, $f) use ($bind, $bind1) {
    $__case_0 = $v;
    $__case_1 = $f;
    if ((($__case_0)->tag === "Tuple")) {
$fa = ($__case_0)->values[0];
$ga = ($__case_0)->values[1];
$f1 = $__case_1;
return ($GLOBALS['Data_Functor_Product_product'])(($bind)($fa, ($GLOBALS['Data_Functor_Product_compose'])($GLOBALS['Data_Tuple_fst'], ($GLOBALS['Data_Functor_Product_compose'])($GLOBALS['Data_Functor_Product_unwrap'], $f1))), ($bind1)($ga, ($GLOBALS['Data_Functor_Product_compose'])($GLOBALS['Data_Tuple_snd'], ($GLOBALS['Data_Functor_Product_compose'])($GLOBALS['Data_Functor_Product_unwrap'], $f1))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $bind1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyProduct2) {
  $__fn = function($__dollar____unused) use ($applyProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyProduct2;
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

// Data_Functor_Product_applicativeProduct
$Data_Functor_Product_applicativeProduct = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
$applyProduct1 = ($GLOBALS['Data_Functor_Product_applyProduct'])((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($applyProduct1, $pure) {
  $__fn = function($dictApplicative1) use ($applyProduct1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])($dictApplicative1);
$applyProduct2 = ($applyProduct1)((($dictApplicative1)->Apply0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => (function() use ($pure, $pure1) {
  $__fn = function($a) use ($pure, $pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Product_product'])(($pure)($a), ($pure1)($a));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyProduct2) {
  $__fn = function($__dollar____unused) use ($applyProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyProduct2;
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

// Data_Functor_Product_monadProduct
$Data_Functor_Product_monadProduct = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeProduct1 = ($GLOBALS['Data_Functor_Product_applicativeProduct'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bindProduct1 = ($GLOBALS['Data_Functor_Product_bindProduct'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($applicativeProduct1, $bindProduct1) {
  $__fn = function($dictMonad1) use ($applicativeProduct1, $bindProduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeProduct2 = ($applicativeProduct1)((($dictMonad1)->Applicative0)($GLOBALS['Prim_undefined']));
$bindProduct2 = ($bindProduct1)((($dictMonad1)->Bind1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeProduct2) {
  $__fn = function($__dollar____unused) use ($applicativeProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeProduct2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindProduct2) {
  $__fn = function($__dollar____unused) use ($bindProduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $bindProduct2;
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

