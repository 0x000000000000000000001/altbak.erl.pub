<?php

namespace Data\Functor\Coproduct;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
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


// Data_Functor_Coproduct_append
$Data_Functor_Coproduct_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Functor_Coproduct_bimap
$Data_Functor_Coproduct_bimap = ($GLOBALS['Data_Bifunctor_bimap'])($GLOBALS['Data_Bifunctor_bifunctorEither']);

// Data_Functor_Coproduct_compose
$Data_Functor_Coproduct_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Functor_Coproduct_Coproduct
$Data_Functor_Coproduct_Coproduct = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_showCoproduct
$Data_Functor_Coproduct_showCoproduct = (function() {
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
    if ((($__case_0)->tag === "Left")) {
$fa = ($__case_0)->values[0];
return ($GLOBALS['Data_Functor_Coproduct_append'])("(left ", ($GLOBALS['Data_Functor_Coproduct_append'])(($show)($fa), ")"));
} else {
if ((($__case_0)->tag === "Right")) {
$ga = ($__case_0)->values[0];
return ($GLOBALS['Data_Functor_Coproduct_append'])("(right ", ($GLOBALS['Data_Functor_Coproduct_append'])(($show1)($ga), ")"));
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_Functor_Coproduct_right
$Data_Functor_Coproduct_right = (function() {
  $__fn = function($ga) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_Coproduct'])(($GLOBALS['Data_Either_Right'])($ga));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_newtypeCoproduct
$Data_Functor_Coproduct_newtypeCoproduct = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Functor_Coproduct_left
$Data_Functor_Coproduct_left = (function() {
  $__fn = function($fa) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_Coproduct'])(($GLOBALS['Data_Either_Left'])($fa));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_functorCoproduct
$Data_Functor_Coproduct_functorCoproduct = (function() {
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
$e = $__case_1;
return ($GLOBALS['Data_Functor_Coproduct_Coproduct'])(($GLOBALS['Data_Functor_Coproduct_bimap'])(($map)($f1), ($map1)($f1), $e));
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

// Data_Functor_Coproduct_eq1Coproduct
$Data_Functor_Coproduct_eq1Coproduct = (function() {
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
    if (true) {
$x = $__case_0;
$y = $__case_1;
$__case_0 = $x;
$__case_1 = $y;
if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$fa = ($__case_0)->values[0];
$ga = ($__case_1)->values[0];
return ($eq12)($fa, $ga);
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$fa = ($__case_0)->values[0];
$ga = ($__case_1)->values[0];
return ($eq13)($fa, $ga);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
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

// Data_Functor_Coproduct_eqCoproduct
$Data_Functor_Coproduct_eqCoproduct = (function() {
  $__fn = function($dictEq1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1Coproduct1 = ($GLOBALS['Data_Functor_Coproduct_eq1Coproduct'])($dictEq1);
    $__res = (function() use ($eq1Coproduct1) {
  $__fn = function($dictEq11) use ($eq1Coproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq1'])(($eq1Coproduct1)($dictEq11));
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

// Data_Functor_Coproduct_ord1Coproduct
$Data_Functor_Coproduct_ord1Coproduct = (function() {
  $__fn = function($dictOrd1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare1'])($dictOrd1);
$eq1Coproduct1 = ($GLOBALS['Data_Functor_Coproduct_eq1Coproduct'])((($dictOrd1)->Eq10)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($eq1Coproduct1, $compare1) {
  $__fn = function($dictOrd11) use ($eq1Coproduct1, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare11 = ($GLOBALS['Data_Ord_compare1'])($dictOrd11);
$eq1Coproduct2 = ($eq1Coproduct1)((($dictOrd11)->Eq10)($GLOBALS['Prim_undefined']));
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
    if (true) {
$x = $__case_0;
$y = $__case_1;
$__case_0 = $x;
$__case_1 = $y;
if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$fa = ($__case_0)->values[0];
$ga = ($__case_1)->values[0];
return ($compare12)($fa, $ga);
} else {
if ((($__case_0)->tag === "Left")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Left")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$fa = ($__case_0)->values[0];
$ga = ($__case_1)->values[0];
return ($compare13)($fa, $ga);
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
})(), "Eq10" => (function() use ($eq1Coproduct2) {
  $__fn = function($__dollar____unused) use ($eq1Coproduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eq1Coproduct2;
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

// Data_Functor_Coproduct_ordCoproduct
$Data_Functor_Coproduct_ordCoproduct = (function() {
  $__fn = function($dictOrd1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ord1Coproduct1 = ($GLOBALS['Data_Functor_Coproduct_ord1Coproduct'])($dictOrd1);
$eqCoproduct1 = ($GLOBALS['Data_Functor_Coproduct_eqCoproduct'])((($dictOrd1)->Eq10)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ord1Coproduct1, $eqCoproduct1) {
  $__fn = function($dictOrd11) use ($ord1Coproduct1, $eqCoproduct1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare1'])(($ord1Coproduct1)($dictOrd11));
$eqCoproduct2 = ($eqCoproduct1)((($dictOrd11)->Eq10)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($eqCoproduct2, $compare1) {
  $__fn = function($dictOrd) use ($eqCoproduct2, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eqCoproduct3 = ($eqCoproduct2)((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($compare1)($dictOrd), "Eq0" => (function() use ($eqCoproduct3) {
  $__fn = function($__dollar____unused) use ($eqCoproduct3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqCoproduct3;
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

// Data_Functor_Coproduct_coproduct
$Data_Functor_Coproduct_coproduct = (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$f = $__case_0;
$a = ($__case_2)->values[0];
return ($f)($a);
} else {
if ((($__case_2)->tag === "Right")) {
$g = $__case_1;
$b = ($__case_2)->values[0];
return ($g)($b);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_extendCoproduct
$Data_Functor_Coproduct_extendCoproduct = (function() {
  $__fn = function($dictExtend) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$extend = ($GLOBALS['Control_Extend_extend'])($dictExtend);
$functorCoproduct1 = ($GLOBALS['Data_Functor_Coproduct_functorCoproduct'])((($dictExtend)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($functorCoproduct1, $extend) {
  $__fn = function($dictExtend1) use ($functorCoproduct1, $extend, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$extend1 = ($GLOBALS['Control_Extend_extend'])($dictExtend1);
$functorCoproduct2 = ($functorCoproduct1)((($dictExtend1)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() use ($extend, $extend1) {
  $__fn = function($f) use ($extend, $extend1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_compose'])($GLOBALS['Data_Functor_Coproduct_Coproduct'], ($GLOBALS['Data_Functor_Coproduct_coproduct'])(($GLOBALS['Data_Functor_Coproduct_compose'])($GLOBALS['Data_Either_Left'], ($extend)(($GLOBALS['Data_Functor_Coproduct_compose'])($f, ($GLOBALS['Data_Functor_Coproduct_compose'])($GLOBALS['Data_Functor_Coproduct_Coproduct'], $GLOBALS['Data_Either_Left'])))), ($GLOBALS['Data_Functor_Coproduct_compose'])($GLOBALS['Data_Either_Right'], ($extend1)(($GLOBALS['Data_Functor_Coproduct_compose'])($f, ($GLOBALS['Data_Functor_Coproduct_compose'])($GLOBALS['Data_Functor_Coproduct_Coproduct'], $GLOBALS['Data_Either_Right']))))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorCoproduct2) {
  $__fn = function($__dollar____unused) use ($functorCoproduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorCoproduct2;
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

// Data_Functor_Coproduct_comonadCoproduct
$Data_Functor_Coproduct_comonadCoproduct = (function() {
  $__fn = function($dictComonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$extract = ($GLOBALS['Control_Comonad_extract'])($dictComonad);
$extendCoproduct1 = ($GLOBALS['Data_Functor_Coproduct_extendCoproduct'])((($dictComonad)->Extend0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($extendCoproduct1, $extract) {
  $__fn = function($dictComonad1) use ($extendCoproduct1, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$extendCoproduct2 = ($extendCoproduct1)((($dictComonad1)->Extend0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Comonad_Comonad__dollar__Dict'])((object)["extract" => ($GLOBALS['Data_Functor_Coproduct_coproduct'])($extract, ($GLOBALS['Control_Comonad_extract'])($dictComonad1)), "Extend0" => (function() use ($extendCoproduct2) {
  $__fn = function($__dollar____unused) use ($extendCoproduct2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $extendCoproduct2;
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

// Data_Functor_Coproduct_bihoistCoproduct
$Data_Functor_Coproduct_bihoistCoproduct = (function() {
  $__body = function($natF, $natG, $v) {
    $__case_0 = $natF;
    $__case_1 = $natG;
    $__case_2 = $v;
    if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$e = $__case_2;
return ($GLOBALS['Data_Functor_Coproduct_Coproduct'])(($GLOBALS['Data_Functor_Coproduct_bimap'])($natF1, $natG1, $e));
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

