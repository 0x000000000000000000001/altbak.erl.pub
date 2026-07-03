<?php

namespace Data\Either;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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


// Data_Either_append
$Data_Either_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Either_compose
$Data_Either_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Either_Left
$Data_Either_Left = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "Left", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_Right
$Data_Either_Right = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "Right", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_showEither
$Data_Either_showEither = (function() {
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
$x = ($__case_0)->values[0];
return ($GLOBALS['Data_Either_append'])("(Left ", ($GLOBALS['Data_Either_append'])(($show)($x), ")"));
} else {
if ((($__case_0)->tag === "Right")) {
$y = ($__case_0)->values[0];
return ($GLOBALS['Data_Either_append'])("(Right ", ($GLOBALS['Data_Either_append'])(($show1)($y), ")"));
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

// Data_Either_note'
$Data_Either_note__prime__ = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Maybe_maybe__prime__'])(($GLOBALS['Data_Either_compose'])($GLOBALS['Data_Either_Left'], $f), $GLOBALS['Data_Either_Right']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_note
$Data_Either_note = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Maybe_maybe'])(($GLOBALS['Data_Either_Left'])($a), $GLOBALS['Data_Either_Right']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_genericEither
$Data_Either_genericEither = ($GLOBALS['Data_Generic_Rep_Generic__dollar__Dict'])((object)["to" => (function() {
  $__body = function($x) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Inl")) {
$arg = ($__case_0)->values[0];
return ($GLOBALS['Data_Either_Left'])($arg);
} else {
if ((($__case_0)->tag === "Inr")) {
$arg = ($__case_0)->values[0];
return ($GLOBALS['Data_Either_Right'])($arg);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "from" => (function() {
  $__body = function($x) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Left")) {
$arg = ($__case_0)->values[0];
return ($GLOBALS['Data_Generic_Rep_Inl'])(($GLOBALS['Data_Generic_Rep_Constructor'])(($GLOBALS['Data_Generic_Rep_Argument'])($arg)));
} else {
if ((($__case_0)->tag === "Right")) {
$arg = ($__case_0)->values[0];
return ($GLOBALS['Data_Generic_Rep_Inr'])(($GLOBALS['Data_Generic_Rep_Constructor'])(($GLOBALS['Data_Generic_Rep_Argument'])($arg)));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Either_functorEither
$Data_Either_functorEither = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__body = function($f, $m) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Left")) {
$v = ($__case_0)->values[0];
return ($GLOBALS['Data_Either_Left'])($v);
} else {
if ((($__case_0)->tag === "Right")) {
$v = ($__case_0)->values[0];
return ($GLOBALS['Data_Either_Right'])(($f)($v));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($f, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Either_map
$Data_Either_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Either_functorEither']);

// Data_Either_invariantEither
$Data_Either_invariantEither = ($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'])((object)["imap" => ($GLOBALS['Data_Functor_Invariant_imapF'])($GLOBALS['Data_Either_functorEither'])]);

// Data_Either_fromRight'
$Data_Either_fromRight__prime__ = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Right")) {
$b = ($__case_1)->values[0];
return $b;
} else {
if (true) {
$default = $__case_0;
return ($default)($GLOBALS['Data_Unit_unit']);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Either_fromRight
$Data_Either_fromRight = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Right")) {
$b = ($__case_1)->values[0];
return $b;
} else {
if (true) {
$default = $__case_0;
return $default;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Either_fromLeft'
$Data_Either_fromLeft__prime__ = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$a = ($__case_1)->values[0];
return $a;
} else {
if (true) {
$default = $__case_0;
return ($default)($GLOBALS['Data_Unit_unit']);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Either_fromLeft
$Data_Either_fromLeft = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$a = ($__case_1)->values[0];
return $a;
} else {
if (true) {
$default = $__case_0;
return $default;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Either_extendEither
$Data_Either_extendEither = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Left")) {
$y = ($__case_1)->values[0];
return ($GLOBALS['Data_Either_Left'])($y);
} else {
if (true) {
$f = $__case_0;
$x = $__case_1;
return ($GLOBALS['Data_Either_Right'])(($f)($x));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_functorEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Either_eqEither
$Data_Either_eqEither = (function() {
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
    if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($eq)($l, $r);
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($eq1)($l, $r);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
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

// Data_Either_ordEither
$Data_Either_ordEither = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
$eqEither1 = ($GLOBALS['Data_Either_eqEither'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($eqEither1, $compare) {
  $__fn = function($dictOrd1) use ($eqEither1, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare'])($dictOrd1);
$eqEither2 = ($eqEither1)((($dictOrd1)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() use ($compare, $compare1) {
  $__body = function($x, $y) use ($compare, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($compare)($l, $r);
} else {
if ((($__case_0)->tag === "Left")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Left")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($compare1)($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($compare, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqEither2) {
  $__fn = function($__dollar____unused) use ($eqEither2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqEither2;
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

// Data_Either_eq1Either
$Data_Either_eq1Either = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eqEither1 = ($GLOBALS['Data_Either_eqEither'])($dictEq);
    $__res = ($GLOBALS['Data_Eq_Eq1__dollar__Dict'])((object)["eq1" => (function() use ($eqEither1) {
  $__fn = function($dictEq1) use ($eqEither1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Eq_eq'])(($eqEither1)($dictEq1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_ord1Either
$Data_Either_ord1Either = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ordEither1 = ($GLOBALS['Data_Either_ordEither'])($dictOrd);
$eq1Either1 = ($GLOBALS['Data_Either_eq1Either'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord1__dollar__Dict'])((object)["compare1" => (function() use ($ordEither1) {
  $__fn = function($dictOrd1) use ($ordEither1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Ord_compare'])(($ordEither1)($dictOrd1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Either1) {
  $__fn = function($__dollar____unused) use ($eq1Either1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eq1Either1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_either
$Data_Either_either = (function() {
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

// Data_Either_hush
$Data_Either_hush = ($GLOBALS['Data_Either_either'])(($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']), $GLOBALS['Data_Maybe_Just']);

// Data_Either_isLeft
$Data_Either_isLeft = ($GLOBALS['Data_Either_either'])(($GLOBALS['Data_Function_const'])(true), ($GLOBALS['Data_Function_const'])(false));

// Data_Either_isRight
$Data_Either_isRight = ($GLOBALS['Data_Either_either'])(($GLOBALS['Data_Function_const'])(false), ($GLOBALS['Data_Function_const'])(true));

// Data_Either_choose
$Data_Either_choose = (function() {
  $__fn = function($dictAlt) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$alt = ($GLOBALS['Control_Alt_alt'])($dictAlt);
$map1 = ($GLOBALS['Data_Functor_map'])((($dictAlt)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($alt, $map1) {
  $__fn = function($a, $b = null) use ($alt, $map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($alt)(($map1)($GLOBALS['Data_Either_Left'], $a), ($map1)($GLOBALS['Data_Either_Right'], $b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_boundedEither
$Data_Either_boundedEither = (function() {
  $__fn = function($dictBounded) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bottom = ($GLOBALS['Data_Bounded_bottom'])($dictBounded);
$ordEither1 = ($GLOBALS['Data_Either_ordEither'])((($dictBounded)->Ord0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ordEither1, $bottom) {
  $__fn = function($dictBounded1) use ($ordEither1, $bottom, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ordEither2 = ($ordEither1)((($dictBounded1)->Ord0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Bounded_Bounded__dollar__Dict'])((object)["top" => ($GLOBALS['Data_Either_Right'])(($GLOBALS['Data_Bounded_top'])($dictBounded1)), "bottom" => ($GLOBALS['Data_Either_Left'])($bottom), "Ord0" => (function() use ($ordEither2) {
  $__fn = function($__dollar____unused) use ($ordEither2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ordEither2;
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

// Data_Either_blush
$Data_Either_blush = ($GLOBALS['Data_Either_either'])($GLOBALS['Data_Maybe_Just'], ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']));

// Data_Either_applyEither
$Data_Either_applyEither = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
return ($GLOBALS['Data_Either_Left'])($e);
} else {
if ((($__case_0)->tag === "Right")) {
$f = ($__case_0)->values[0];
$r = $__case_1;
return ($GLOBALS['Data_Either_map'])($f, $r);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_functorEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Either_apply
$Data_Either_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_Either_applyEither']);

// Data_Either_bindEither
$Data_Either_bindEither = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => ($GLOBALS['Data_Either_either'])((function() {
  $__fn = function($e, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Either_Left'])($e);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), (function() {
  $__fn = function($a, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($f)($a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_applyEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Either_semigroupEither
$Data_Either_semigroupEither = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append1 = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
    $__res = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() use ($append1) {
  $__fn = function($x, $y = null) use ($append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Either_apply'])(($GLOBALS['Data_Either_map'])($append1, $x), $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Either_applicativeEither
$Data_Either_applicativeEither = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => $GLOBALS['Data_Either_Right'], "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_applyEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Either_monadEither
$Data_Either_monadEither = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_applicativeEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_bindEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Either_altEither
$Data_Either_altEither = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_0)->tag === "Left")) {
$r = $__case_1;
return $r;
} else {
if (true) {
$l = $__case_0;
return $l;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_functorEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

