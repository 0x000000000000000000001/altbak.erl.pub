<?php

namespace Data\Interval;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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


// Data_Interval_append
$Data_Interval_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Interval_show
$Data_Interval_show = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_Maybe_showMaybe'])($GLOBALS['Data_Show_showInt']));

// Data_Interval_compose
$Data_Interval_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Interval_conj
$Data_Interval_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Interval_eq
$Data_Interval_eq = ($GLOBALS['Data_Eq_eq'])(($GLOBALS['Data_Maybe_eqMaybe'])($GLOBALS['Data_Eq_eqInt']));

// Data_Interval_compare
$Data_Interval_compare = ($GLOBALS['Data_Ord_compare'])(($GLOBALS['Data_Maybe_ordMaybe'])($GLOBALS['Data_Ord_ordInt']));

// Data_Interval_StartEnd
$Data_Interval_StartEnd = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "StartEnd", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_DurationEnd
$Data_Interval_DurationEnd = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "DurationEnd", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_StartDuration
$Data_Interval_StartDuration = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "StartDuration", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_DurationOnly
$Data_Interval_DurationOnly = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "DurationOnly", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_RecurringInterval
$Data_Interval_RecurringInterval = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "RecurringInterval", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_showInterval
$Data_Interval_showInterval = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show1 = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = (function() use ($show1) {
  $__fn = function($dictShow1) use ($show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show2 = ($GLOBALS['Data_Show_show'])($dictShow1);
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show2, $show1) {
  $__body = function($v) use ($show2, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "StartEnd")) {
$x = ($__case_0)->values[0];
$y = ($__case_0)->values[1];
return ($GLOBALS['Data_Interval_append'])("(StartEnd ", ($GLOBALS['Data_Interval_append'])(($show2)($x), ($GLOBALS['Data_Interval_append'])(" ", ($GLOBALS['Data_Interval_append'])(($show2)($y), ")"))));
} else {
if ((($__case_0)->tag === "DurationEnd")) {
$d = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($GLOBALS['Data_Interval_append'])("(DurationEnd ", ($GLOBALS['Data_Interval_append'])(($show1)($d), ($GLOBALS['Data_Interval_append'])(" ", ($GLOBALS['Data_Interval_append'])(($show2)($x), ")"))));
} else {
if ((($__case_0)->tag === "StartDuration")) {
$x = ($__case_0)->values[0];
$d = ($__case_0)->values[1];
return ($GLOBALS['Data_Interval_append'])("(StartDuration ", ($GLOBALS['Data_Interval_append'])(($show2)($x), ($GLOBALS['Data_Interval_append'])(" ", ($GLOBALS['Data_Interval_append'])(($show1)($d), ")"))));
} else {
if ((($__case_0)->tag === "DurationOnly")) {
$d = ($__case_0)->values[0];
return ($GLOBALS['Data_Interval_append'])("(DurationOnly ", ($GLOBALS['Data_Interval_append'])(($show1)($d), ")"));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
  $__fn = function($v) use ($show2, $show1, $__body, &$__fn) {
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

// Data_Interval_showRecurringInterval
$Data_Interval_showRecurringInterval = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$showInterval1 = ($GLOBALS['Data_Interval_showInterval'])($dictShow);
    $__res = (function() use ($showInterval1) {
  $__fn = function($dictShow1) use ($showInterval1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show1 = ($GLOBALS['Data_Show_show'])(($showInterval1)($dictShow1));
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show1) {
  $__body = function($v) use ($show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "RecurringInterval")) {
$x = ($__case_0)->values[0];
$y = ($__case_0)->values[1];
return ($GLOBALS['Data_Interval_append'])("(RecurringInterval ", ($GLOBALS['Data_Interval_append'])(($GLOBALS['Data_Interval_show'])($x), ($GLOBALS['Data_Interval_append'])(" ", ($GLOBALS['Data_Interval_append'])(($show1)($y), ")"))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show1, $__body, &$__fn) {
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

// Data_Interval_over
$Data_Interval_over = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "RecurringInterval")) {
$f1 = $__case_0;
$n = ($__case_1)->values[0];
$i = ($__case_1)->values[1];
return ($map1)(($GLOBALS['Data_Interval_RecurringInterval'])($n), ($f1)($i));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_interval
$Data_Interval_interval = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "RecurringInterval")) {
$i = ($__case_0)->values[1];
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

// Data_Interval_foldableInterval
$Data_Interval_foldableInterval = ($GLOBALS['Data_Foldable_Foldable__dollar__Dict'])((object)["foldl" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "StartEnd")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($f)(($f)($z, $x), $y);
} else {
if ((($__case_2)->tag === "DurationEnd")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[1];
return ($f)($z, $x);
} else {
if ((($__case_2)->tag === "StartDuration")) {
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->values[0];
return ($f)($z, $x);
} else {
if (true) {
$z = $__case_1;
return $z;
} else {
throw new \Exception("Pattern match failure");
};
};
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
})(), "foldr" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Foldable_foldrDefault'])($GLOBALS['Data_Interval_foldableInterval'], $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Foldable_foldMapDefaultL'])($GLOBALS['Data_Interval_foldableInterval'], $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_foldl
$Data_Interval_foldl = ($GLOBALS['Data_Foldable_foldl'])($GLOBALS['Data_Interval_foldableInterval']);

// Data_Interval_foldr
$Data_Interval_foldr = ($GLOBALS['Data_Foldable_foldr'])($GLOBALS['Data_Interval_foldableInterval']);

// Data_Interval_foldableRecurringInterval
$Data_Interval_foldableRecurringInterval = ($GLOBALS['Data_Foldable_Foldable__dollar__Dict'])((object)["foldl" => (function() {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Interval_compose'])(($GLOBALS['Data_Interval_foldl'])($f, $i), $GLOBALS['Data_Interval_interval']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Interval_compose'])(($GLOBALS['Data_Interval_foldr'])($f, $i), $GLOBALS['Data_Interval_interval']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Foldable_foldMapDefaultL'])($GLOBALS['Data_Interval_foldableRecurringInterval'], $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_eqInterval
$Data_Interval_eqInterval = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq1) {
  $__fn = function($dictEq1) use ($eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq2 = ($GLOBALS['Data_Eq_eq'])($dictEq1);
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() use ($eq2, $eq1) {
  $__body = function($x, $y) use ($eq2, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($GLOBALS['Data_Interval_conj'])(($eq2)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($GLOBALS['Data_Interval_conj'])(($eq1)($l, $r), ($eq2)($l1, $r1));
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($GLOBALS['Data_Interval_conj'])(($eq2)($l, $r), ($eq1)($l1, $r1));
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
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
};
  };
  $__fn = function($x, $y = null) use ($eq2, $eq1, $__body, &$__fn) {
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

// Data_Interval_eqRecurringInterval
$Data_Interval_eqRecurringInterval = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eqInterval1 = ($GLOBALS['Data_Interval_eqInterval'])($dictEq);
    $__res = (function() use ($eqInterval1) {
  $__fn = function($dictEq1) use ($eqInterval1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq'])(($eqInterval1)($dictEq1));
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() use ($eq1) {
  $__body = function($x, $y) use ($eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($GLOBALS['Data_Interval_conj'])(($GLOBALS['Data_Interval_eq'])($l, $r), ($eq1)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq1, $__body, &$__fn) {
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

// Data_Interval_ordInterval
$Data_Interval_ordInterval = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
$eqInterval1 = ($GLOBALS['Data_Interval_eqInterval'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($eqInterval1, $compare1) {
  $__fn = function($dictOrd1) use ($eqInterval1, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare2 = ($GLOBALS['Data_Ord_compare'])($dictOrd1);
$eqInterval2 = ($eqInterval1)((($dictOrd1)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() use ($compare2, $compare1) {
  $__body = function($x, $y) use ($compare2, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare2)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
return ($compare2)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
if ((($__case_0)->tag === "StartEnd")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "StartEnd")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare1)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
return ($compare2)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
if ((($__case_0)->tag === "DurationEnd")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "DurationEnd")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare2)($l, $r);
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
if ((($__case_0)->tag === "StartDuration")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "StartDuration")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
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
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($compare2, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqInterval2) {
  $__fn = function($__dollar____unused) use ($eqInterval2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqInterval2;
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

// Data_Interval_ordRecurringInterval
$Data_Interval_ordRecurringInterval = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ordInterval1 = ($GLOBALS['Data_Interval_ordInterval'])($dictOrd);
$eqRecurringInterval1 = ($GLOBALS['Data_Interval_eqRecurringInterval'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ordInterval1, $eqRecurringInterval1) {
  $__fn = function($dictOrd1) use ($ordInterval1, $eqRecurringInterval1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare'])(($ordInterval1)($dictOrd1));
$eqRecurringInterval2 = ($eqRecurringInterval1)((($dictOrd1)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() use ($compare1) {
  $__body = function($x, $y) use ($compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($GLOBALS['Data_Interval_compare'])($l, $r);
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
  $__fn = function($x, $y = null) use ($compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqRecurringInterval2) {
  $__fn = function($__dollar____unused) use ($eqRecurringInterval2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqRecurringInterval2;
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

// Data_Interval_bifunctorInterval
$Data_Interval_bifunctorInterval = ($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'])((object)["bimap" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "StartEnd")) {
$f = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($GLOBALS['Data_Interval_StartEnd'])(($f)($x), ($f)($y));
} else {
if ((($__case_2)->tag === "DurationEnd")) {
$g = $__case_0;
$f = $__case_1;
$d = ($__case_2)->values[0];
$x = ($__case_2)->values[1];
return ($GLOBALS['Data_Interval_DurationEnd'])(($g)($d), ($f)($x));
} else {
if ((($__case_2)->tag === "StartDuration")) {
$g = $__case_0;
$f = $__case_1;
$x = ($__case_2)->values[0];
$d = ($__case_2)->values[1];
return ($GLOBALS['Data_Interval_StartDuration'])(($f)($x), ($g)($d));
} else {
if ((($__case_2)->tag === "DurationOnly")) {
$g = $__case_0;
$d = ($__case_2)->values[0];
return ($GLOBALS['Data_Interval_DurationOnly'])(($g)($d));
} else {
throw new \Exception("Pattern match failure");
};
};
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
})()]);

// Data_Interval_bimap
$Data_Interval_bimap = ($GLOBALS['Data_Bifunctor_bimap'])($GLOBALS['Data_Interval_bifunctorInterval']);

// Data_Interval_bifunctorRecurringInterval
$Data_Interval_bifunctorRecurringInterval = ($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'])((object)["bimap" => (function() {
  $__body = function($f, $g, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "RecurringInterval")) {
$f1 = $__case_0;
$g1 = $__case_1;
$n = ($__case_2)->values[0];
$i = ($__case_2)->values[1];
return ($GLOBALS['Data_Interval_RecurringInterval'])($n, ($GLOBALS['Data_Interval_bimap'])($f1, $g1, $i));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_functorInterval
$Data_Interval_functorInterval = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => ($GLOBALS['Data_Interval_bimap'])(($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']))]);

// Data_Interval_map
$Data_Interval_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Interval_functorInterval']);

// Data_Interval_extendInterval
$Data_Interval_extendInterval = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "StartEnd")) {
$f = $__case_0;
$a = $__case_1;
return ($GLOBALS['Data_Interval_StartEnd'])(($f)($a), ($f)($a));
} else {
if ((($__case_1)->tag === "DurationEnd")) {
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->values[0];
return ($GLOBALS['Data_Interval_DurationEnd'])($d, ($f)($a));
} else {
if ((($__case_1)->tag === "StartDuration")) {
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->values[1];
return ($GLOBALS['Data_Interval_StartDuration'])(($f)($a), $d);
} else {
if ((($__case_1)->tag === "DurationOnly")) {
$d = ($__case_1)->values[0];
return ($GLOBALS['Data_Interval_DurationOnly'])($d);
} else {
throw new \Exception("Pattern match failure");
};
};
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
    $__res = $GLOBALS['Data_Interval_functorInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_extend
$Data_Interval_extend = ($GLOBALS['Control_Extend_extend'])($GLOBALS['Data_Interval_extendInterval']);

// Data_Interval_functorRecurringInterval
$Data_Interval_functorRecurringInterval = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "RecurringInterval")) {
$f1 = $__case_0;
$n = ($__case_1)->values[0];
$i = ($__case_1)->values[1];
return ($GLOBALS['Data_Interval_RecurringInterval'])($n, ($GLOBALS['Data_Interval_map'])($f1, $i));
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
})()]);

// Data_Interval_extendRecurringInterval
$Data_Interval_extendRecurringInterval = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "RecurringInterval")) {
$f1 = $__case_0;
$a = $__case_1;
$n = ($__case_1)->values[0];
$i = ($__case_1)->values[1];
return ($GLOBALS['Data_Interval_RecurringInterval'])($n, ($GLOBALS['Data_Interval_extend'])(($GLOBALS['Data_Function_const'])(($f1)($a)), $i));
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_functorRecurringInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_traversableInterval
$Data_Interval_traversableInterval = ($GLOBALS['Data_Traversable_Traversable__dollar__Dict'])((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Apply0 = (($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']);
$apply = ($GLOBALS['Control_Apply_apply'])($Apply0);
$Functor0 = (($Apply0)->Functor0)($GLOBALS['Prim_undefined']);
$map1 = ($GLOBALS['Data_Functor_map'])($Functor0);
$mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'])($Functor0);
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($apply, $map1, $mapFlipped, $pure) {
  $__body = function($v, $v1) use ($apply, $map1, $mapFlipped, $pure) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "StartEnd")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
$y = ($__case_1)->values[1];
return ($apply)(($map1)($GLOBALS['Data_Interval_StartEnd'], ($f)($x)), ($f)($y));
} else {
if ((($__case_1)->tag === "DurationEnd")) {
$f = $__case_0;
$d = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($mapFlipped)(($f)($x), ($GLOBALS['Data_Interval_DurationEnd'])($d));
} else {
if ((($__case_1)->tag === "StartDuration")) {
$f = $__case_0;
$x = ($__case_1)->values[0];
$d = ($__case_1)->values[1];
return ($mapFlipped)(($f)($x), (function() use ($d) {
  $__fn = function($v2) use ($d, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Interval_StartDuration'])($v2, $d);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
if ((($__case_1)->tag === "DurationOnly")) {
$d = ($__case_1)->values[0];
return ($pure)(($GLOBALS['Data_Interval_DurationOnly'])($d));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($apply, $map1, $mapFlipped, $pure, $__body, &$__fn) {
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
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Traversable_sequenceDefault'])($GLOBALS['Data_Interval_traversableInterval'], $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_functorInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_foldableInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_traverse
$Data_Interval_traverse = ($GLOBALS['Data_Traversable_traverse'])($GLOBALS['Data_Interval_traversableInterval']);

// Data_Interval_traversableRecurringInterval
$Data_Interval_traversableRecurringInterval = ($GLOBALS['Data_Traversable_Traversable__dollar__Dict'])((object)["traverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$over1 = ($GLOBALS['Data_Interval_over'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$traverse1 = ($GLOBALS['Data_Interval_traverse'])($dictApplicative);
    $__res = (function() use ($over1, $traverse1) {
  $__fn = function($f, $i = null) use ($over1, $traverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($over1)(($traverse1)($f), $i);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "sequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Traversable_sequenceDefault'])($GLOBALS['Data_Interval_traversableRecurringInterval'], $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_functorRecurringInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_foldableRecurringInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_bifoldableInterval
$Data_Interval_bifoldableInterval = ($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'])((object)["bifoldl" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    if ((($__case_3)->tag === "StartEnd")) {
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->values[0];
$y = ($__case_3)->values[1];
return ($f)(($f)($z, $x), $y);
} else {
if ((($__case_3)->tag === "DurationEnd")) {
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$d = ($__case_3)->values[0];
$x = ($__case_3)->values[1];
return ($f)(($g)($z, $d), $x);
} else {
if ((($__case_3)->tag === "StartDuration")) {
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->values[0];
$d = ($__case_3)->values[1];
return ($f)(($g)($z, $d), $x);
} else {
if ((($__case_3)->tag === "DurationOnly")) {
$g = $__case_0;
$z = $__case_2;
$d = ($__case_3)->values[0];
return ($g)($z, $d);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($v, $v1, $v2, $v3);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bifoldable_bifoldrDefault'])($GLOBALS['Data_Interval_bifoldableInterval'], $x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bifoldable_bifoldMapDefaultL'])($GLOBALS['Data_Interval_bifoldableInterval'], $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_bifoldl
$Data_Interval_bifoldl = ($GLOBALS['Data_Bifoldable_bifoldl'])($GLOBALS['Data_Interval_bifoldableInterval']);

// Data_Interval_bifoldr
$Data_Interval_bifoldr = ($GLOBALS['Data_Bifoldable_bifoldr'])($GLOBALS['Data_Interval_bifoldableInterval']);

// Data_Interval_bifoldableRecurringInterval
$Data_Interval_bifoldableRecurringInterval = ($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'])((object)["bifoldl" => (function() {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Interval_compose'])(($GLOBALS['Data_Interval_bifoldl'])($f, $g, $i), $GLOBALS['Data_Interval_interval']);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Data_Interval_compose'])(($GLOBALS['Data_Interval_bifoldr'])($f, $g, $i), $GLOBALS['Data_Interval_interval']);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bifoldable_bifoldMapDefaultL'])($GLOBALS['Data_Interval_bifoldableRecurringInterval'], $dictMonoid);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_bitraversableInterval
$Data_Interval_bitraversableInterval = ($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'])((object)["bitraverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Apply0 = (($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']);
$apply = ($GLOBALS['Control_Apply_apply'])($Apply0);
$map1 = ($GLOBALS['Data_Functor_map'])((($Apply0)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($apply, $map1) {
  $__body = function($v, $v1, $v2) use ($apply, $map1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "StartEnd")) {
$r = $__case_1;
$x = ($__case_2)->values[0];
$y = ($__case_2)->values[1];
return ($apply)(($map1)($GLOBALS['Data_Interval_StartEnd'], ($r)($x)), ($r)($y));
} else {
if ((($__case_2)->tag === "DurationEnd")) {
$l = $__case_0;
$r = $__case_1;
$d = ($__case_2)->values[0];
$x = ($__case_2)->values[1];
return ($apply)(($map1)($GLOBALS['Data_Interval_DurationEnd'], ($l)($d)), ($r)($x));
} else {
if ((($__case_2)->tag === "StartDuration")) {
$l = $__case_0;
$r = $__case_1;
$x = ($__case_2)->values[0];
$d = ($__case_2)->values[1];
return ($apply)(($map1)($GLOBALS['Data_Interval_StartDuration'], ($r)($x)), ($l)($d));
} else {
if ((($__case_2)->tag === "DurationOnly")) {
$l = $__case_0;
$d = ($__case_2)->values[0];
return ($map1)($GLOBALS['Data_Interval_DurationOnly'], ($l)($d));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($apply, $map1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bitraversable_bisequenceDefault'])($GLOBALS['Data_Interval_bitraversableInterval'], $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_bifunctorInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_bifoldableInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_bitraverse
$Data_Interval_bitraverse = ($GLOBALS['Data_Bitraversable_bitraverse'])($GLOBALS['Data_Interval_bitraversableInterval']);

// Data_Interval_bitraversableRecurringInterval
$Data_Interval_bitraversableRecurringInterval = ($GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'])((object)["bitraverse" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$over1 = ($GLOBALS['Data_Interval_over'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$bitraverse1 = ($GLOBALS['Data_Interval_bitraverse'])($dictApplicative);
    $__res = (function() use ($over1, $bitraverse1) {
  $__fn = function($l, $r = null, $i = null) use ($over1, $bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($over1)(($bitraverse1)($l, $r), $i);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bitraversable_bisequenceDefault'])($GLOBALS['Data_Interval_bitraversableRecurringInterval'], $dictApplicative);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_bifunctorRecurringInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bifoldable1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_bifoldableRecurringInterval'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

