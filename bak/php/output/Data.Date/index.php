<?php

namespace Data\Date;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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


// Data_Date_fromEnum
$Data_Date_fromEnum = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Date_Component_boundedEnumMonth']);

// Data_Date_eq
$Data_Date_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_Date_fromJust
$Data_Date_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Date_toEnum
$Data_Date_toEnum = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Date_Component_boundedEnumWeekday']);

// Data_Date_append
$Data_Date_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Date_show
$Data_Date_show = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Date_Component_showYear']);

// Data_Date_show1
$Data_Date_show1 = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Date_Component_showMonth']);

// Data_Date_show2
$Data_Date_show2 = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Date_Component_showDay']);

// Data_Date_fromEnum1
$Data_Date_fromEnum1 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Date_Component_boundedEnumYear']);

// Data_Date_conj
$Data_Date_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Date_mod
$Data_Date_mod = ($GLOBALS['Data_EuclideanRing_mod'])($GLOBALS['Data_EuclideanRing_euclideanRingInt']);

// Data_Date_disj
$Data_Date_disj = ($GLOBALS['Data_HeytingAlgebra_disj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Date_not
$Data_Date_not = ($GLOBALS['Data_HeytingAlgebra_not'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Date_compose
$Data_Date_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Date_toEnum1
$Data_Date_toEnum1 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Date_Component_boundedEnumDay']);

// Data_Date_eq1
$Data_Date_eq1 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Date_Component_eqYear']);

// Data_Date_eq2
$Data_Date_eq2 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Date_Component_eqMonth']);

// Data_Date_eq3
$Data_Date_eq3 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Date_Component_eqDay']);

// Data_Date_compare
$Data_Date_compare = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Date_Component_ordYear']);

// Data_Date_compare1
$Data_Date_compare1 = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Date_Component_ordMonth']);

// Data_Date_compare2
$Data_Date_compare2 = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Date_Component_ordDay']);

// Data_Date_succ
$Data_Date_succ = ($GLOBALS['Data_Enum_succ'])($GLOBALS['Data_Date_Component_enumMonth']);

// Data_Date_succ1
$Data_Date_succ1 = ($GLOBALS['Data_Enum_succ'])($GLOBALS['Data_Date_Component_enumDay']);

// Data_Date_greaterThan
$Data_Date_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])(($GLOBALS['Data_Maybe_ordMaybe'])($GLOBALS['Data_Date_Component_ordDay']));

// Data_Date_succ2
$Data_Date_succ2 = ($GLOBALS['Data_Enum_succ'])($GLOBALS['Data_Date_Component_enumYear']);

// Data_Date_apply
$Data_Date_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_Maybe_applyMaybe']);

// Data_Date_map
$Data_Date_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_Date_pure
$Data_Date_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_Maybe_applicativeMaybe']);

// Data_Date_pred
$Data_Date_pred = ($GLOBALS['Data_Enum_pred'])($GLOBALS['Data_Date_Component_enumMonth']);

// Data_Date_pred1
$Data_Date_pred1 = ($GLOBALS['Data_Enum_pred'])($GLOBALS['Data_Date_Component_enumDay']);

// Data_Date_pred2
$Data_Date_pred2 = ($GLOBALS['Data_Enum_pred'])($GLOBALS['Data_Date_Component_enumYear']);

// Data_Date_toEnum2
$Data_Date_toEnum2 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Date_Component_boundedEnumMonth']);

// Data_Date_add
$Data_Date_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Date_fromEnum2
$Data_Date_fromEnum2 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Date_Component_boundedEnumDay']);

// Data_Date_lessThan
$Data_Date_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Date_greaterThan1
$Data_Date_greaterThan1 = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Date_sub
$Data_Date_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_Date_bindFlipped
$Data_Date_bindFlipped = ($GLOBALS['Control_Bind_bindFlipped'])($GLOBALS['Data_Maybe_bindMaybe']);

// Data_Date_bind
$Data_Date_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_Maybe_bindMaybe']);

// Data_Date_Date
$Data_Date_Date = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)["tag" => "Date", "values" => [$value0, $value1, $value2]];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Date_year
$Data_Date_year = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
return $y;
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

// Data_Date_weekday
$Data_Date_weekday = ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__body = function($__dollar____unused, $v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$d = ($__case_0)->values[2];
$n = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Data_Date_calcWeekday'], $y, ($GLOBALS['Data_Date_fromEnum'])($m), $d);
$__case_0 = ($GLOBALS['Data_Date_eq'])($n, 0);
if (($__case_0 === true)) {
return ($GLOBALS['Data_Date_fromJust'])(($GLOBALS['Data_Date_toEnum'])(7));
} else {
if (true) {
return ($GLOBALS['Data_Date_fromJust'])(($GLOBALS['Data_Date_toEnum'])($n));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($__dollar____unused, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($__dollar____unused, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());

// Data_Date_showDate
$Data_Date_showDate = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$d = ($__case_0)->values[2];
return ($GLOBALS['Data_Date_append'])("(Date ", ($GLOBALS['Data_Date_append'])(($GLOBALS['Data_Date_show'])($y), ($GLOBALS['Data_Date_append'])(" ", ($GLOBALS['Data_Date_append'])(($GLOBALS['Data_Date_show1'])($m), ($GLOBALS['Data_Date_append'])(" ", ($GLOBALS['Data_Date_append'])(($GLOBALS['Data_Date_show2'])($d), ")"))))));
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
})()]);

// Data_Date_month
$Data_Date_month = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$m = ($__case_0)->values[1];
return $m;
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

// Data_Date_isLeapYear
$Data_Date_isLeapYear = (function() {
  $__fn = function($y) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$y__prime__ = ($GLOBALS['Data_Date_fromEnum1'])($y);
    $__res = ($GLOBALS['Data_Date_conj'])(($GLOBALS['Data_Date_eq'])(($GLOBALS['Data_Date_mod'])($y__prime__, 4), 0), ($GLOBALS['Data_Date_disj'])(($GLOBALS['Data_Date_eq'])(($GLOBALS['Data_Date_mod'])($y__prime__, 400), 0), ($GLOBALS['Data_Date_not'])(($GLOBALS['Data_Date_eq'])(($GLOBALS['Data_Date_mod'])($y__prime__, 100), 0))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Date_lastDayOfMonth
$Data_Date_lastDayOfMonth = (function() {
  $__body = function($y, $m) {
    $unsafeDay = ($GLOBALS['Data_Date_compose'])(($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Date_fromJust'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $GLOBALS['Data_Date_toEnum1']);
    $__case_0 = $m;
    if ((($__case_0)->tag === "January")) {
return ($unsafeDay)(31);
} else {
if ((($__case_0)->tag === "February")) {
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_0)->tag === "March")) {
return ($unsafeDay)(31);
} else {
if ((($__case_0)->tag === "April")) {
return ($unsafeDay)(30);
} else {
if ((($__case_0)->tag === "May")) {
return ($unsafeDay)(31);
} else {
if ((($__case_0)->tag === "June")) {
return ($unsafeDay)(30);
} else {
if ((($__case_0)->tag === "July")) {
return ($unsafeDay)(31);
} else {
if ((($__case_0)->tag === "August")) {
return ($unsafeDay)(31);
} else {
if ((($__case_0)->tag === "September")) {
return ($unsafeDay)(30);
} else {
if ((($__case_0)->tag === "October")) {
return ($unsafeDay)(31);
} else {
if ((($__case_0)->tag === "November")) {
return ($unsafeDay)(30);
} else {
if ((($__case_0)->tag === "December")) {
return ($unsafeDay)(31);
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
};
  };
  $__fn = function($y, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($y, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Date_eqDate
$Data_Date_eqDate = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$l2 = ($__case_0)->values[2];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$r2 = ($__case_1)->values[2];
return ($GLOBALS['Data_Date_conj'])(($GLOBALS['Data_Date_conj'])(($GLOBALS['Data_Date_eq1'])($l, $r), ($GLOBALS['Data_Date_eq2'])($l1, $r1)), ($GLOBALS['Data_Date_eq3'])($l2, $r2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Date_eq4
$Data_Date_eq4 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Date_eqDate']);

// Data_Date_ordDate
$Data_Date_ordDate = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$l2 = ($__case_0)->values[2];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$r2 = ($__case_1)->values[2];
$v = ($GLOBALS['Data_Date_compare'])($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
$v1 = ($GLOBALS['Data_Date_compare1'])($l1, $r1);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
return ($GLOBALS['Data_Date_compare2'])($l2, $r2);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Date_eqDate'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Date_enumDate
$Data_Date_enumDate = ($GLOBALS['Data_Enum_Enum__dollar__Dict'])((object)["succ" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$d = ($__case_0)->values[2];
$sm = ($GLOBALS['Data_Date_succ'])($m);
$l = ($GLOBALS['Data_Date_lastDayOfMonth'])($y, $m);
$v1 = ($GLOBALS['Data_Date_succ1'])($d);
$__case_0 = ($GLOBALS['Data_Date_greaterThan'])($v1, ($GLOBALS['Data_Maybe_Just'])($l));
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = $GLOBALS['Data_Maybe_Nothing'];
} else {
if (true) {
$__case_res_0 = $v1;
} else {
throw new \Exception("Pattern match failure");
};
};
$sd = $__case_res_0;
$__case_0 = ($GLOBALS['Data_Maybe_isNothing'])($sd);
$__case_res_1 = null;
if (($__case_0 === true)) {
$__case_res_1 = ($GLOBALS['Data_Maybe_fromMaybe'])($GLOBALS['Data_Date_Component_January'], $sm);
} else {
if (true) {
$__case_res_1 = $m;
} else {
throw new \Exception("Pattern match failure");
};
};
$m__prime__ = $__case_res_1;
$__case_0 = ($GLOBALS['Data_Date_conj'])(($GLOBALS['Data_Maybe_isNothing'])($sd), ($GLOBALS['Data_Maybe_isNothing'])($sm));
$__case_res_2 = null;
if (($__case_0 === true)) {
$__case_res_2 = ($GLOBALS['Data_Date_succ2'])($y);
} else {
if (true) {
$__case_res_2 = ($GLOBALS['Data_Maybe_Just'])($y);
} else {
throw new \Exception("Pattern match failure");
};
};
$y__prime__ = $__case_res_2;
$__case_0 = ($GLOBALS['Data_Maybe_isNothing'])($sd);
$__case_res_3 = null;
if (($__case_0 === true)) {
$__case_res_3 = ($GLOBALS['Data_Date_toEnum1'])(1);
} else {
if (true) {
$__case_res_3 = $sd;
} else {
throw new \Exception("Pattern match failure");
};
};
$d__prime__ = $__case_res_3;
return ($GLOBALS['Data_Date_apply'])(($GLOBALS['Data_Date_apply'])(($GLOBALS['Data_Date_map'])($GLOBALS['Data_Date_Date'], $y__prime__), ($GLOBALS['Data_Date_pure'])($m__prime__)), $d__prime__);
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
})(), "pred" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$y = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$d = ($__case_0)->values[2];
$pm = ($GLOBALS['Data_Date_pred'])($m);
$pd = ($GLOBALS['Data_Date_pred1'])($d);
$__case_0 = ($GLOBALS['Data_Date_conj'])(($GLOBALS['Data_Maybe_isNothing'])($pd), ($GLOBALS['Data_Maybe_isNothing'])($pm));
$__case_res_4 = null;
if (($__case_0 === true)) {
$__case_res_4 = ($GLOBALS['Data_Date_pred2'])($y);
} else {
if (true) {
$__case_res_4 = ($GLOBALS['Data_Maybe_Just'])($y);
} else {
throw new \Exception("Pattern match failure");
};
};
$y__prime__ = $__case_res_4;
$__case_0 = ($GLOBALS['Data_Maybe_isNothing'])($pd);
$__case_res_5 = null;
if (($__case_0 === true)) {
$__case_res_5 = ($GLOBALS['Data_Maybe_fromMaybe'])($GLOBALS['Data_Date_Component_December'], $pm);
} else {
if (true) {
$__case_res_5 = $m;
} else {
throw new \Exception("Pattern match failure");
};
};
$m__prime__ = $__case_res_5;
$l = ($GLOBALS['Data_Date_lastDayOfMonth'])($y, $m__prime__);
$__case_0 = ($GLOBALS['Data_Maybe_isNothing'])($pd);
$__case_res_6 = null;
if (($__case_0 === true)) {
$__case_res_6 = ($GLOBALS['Data_Maybe_Just'])($l);
} else {
if (true) {
$__case_res_6 = $pd;
} else {
throw new \Exception("Pattern match failure");
};
};
$d__prime__ = $__case_res_6;
return ($GLOBALS['Data_Date_apply'])(($GLOBALS['Data_Date_apply'])(($GLOBALS['Data_Date_map'])($GLOBALS['Data_Date_Date'], $y__prime__), ($GLOBALS['Data_Date_pure'])($m__prime__)), $d__prime__);
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
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Date_ordDate'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Date_pred3
$Data_Date_pred3 = ($GLOBALS['Data_Enum_pred'])($GLOBALS['Data_Date_enumDate']);

// Data_Date_succ3
$Data_Date_succ3 = ($GLOBALS['Data_Enum_succ'])($GLOBALS['Data_Date_enumDate']);

// Data_Date_diff
$Data_Date_diff = (function() {
  $__fn = function($dictDuration) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$toDuration = ($GLOBALS['Data_Time_Duration_toDuration'])($dictDuration);
    $__res = (function() use ($toDuration) {
  $__body = function($v, $v1) use ($toDuration) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$y1 = ($__case_0)->values[0];
$m1 = ($__case_0)->values[1];
$d1 = ($__case_0)->values[2];
$y2 = ($__case_1)->values[0];
$m2 = ($__case_1)->values[1];
$d2 = ($__case_1)->values[2];
return ($toDuration)(($GLOBALS['Data_Function_Uncurried_runFn6'])($GLOBALS['Data_Date_calcDiff'], $y1, ($GLOBALS['Data_Date_fromEnum'])($m1), $d1, $y2, ($GLOBALS['Data_Date_fromEnum'])($m2), $d2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($toDuration, $__body, &$__fn) {
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
})();

// Data_Date_day
$Data_Date_day = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Date")) {
$d = ($__case_0)->values[2];
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

// Data_Date_canonicalDate
$Data_Date_canonicalDate = (function() {
  $__fn = function($y, $m = null, $d = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$mkDate = ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused, $y__prime__ = null, $m__prime__ = null, $d__prime__ = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($GLOBALS['Data_Date_Date'])($y__prime__, ($GLOBALS['Data_Date_fromJust'])(($GLOBALS['Data_Date_toEnum2'])($m__prime__)), $d__prime__);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn4'])($GLOBALS['Data_Date_canonicalDateImpl'], $mkDate, $y, ($GLOBALS['Data_Date_fromEnum'])($m), $d);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Date_exactDate
$Data_Date_exactDate = (function() {
  $__body = function($y, $m, $d) {
    $dt = ($GLOBALS['Data_Date_Date'])($y, $m, $d);
    $__case_0 = ($GLOBALS['Data_Date_eq4'])(($GLOBALS['Data_Date_canonicalDate'])($y, $m, $d), $dt);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Just'])($dt);
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($y, $m = null, $d = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($y, $m, $d);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Date_boundedDate
$Data_Date_boundedDate = ($GLOBALS['Data_Bounded_Bounded__dollar__Dict'])((object)["bottom" => ($GLOBALS['Data_Date_Date'])(($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Date_Component_boundedYear']), ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Date_Component_boundedMonth']), ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Date_Component_boundedDay'])), "top" => ($GLOBALS['Data_Date_Date'])(($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Date_Component_boundedYear']), ($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Date_Component_boundedMonth']), ($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Date_Component_boundedDay'])), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Date_ordDate'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Date_adjust
$Data_Date_adjust = (function() {
  $__body = function($v, $date) {
    $__case_0 = $v;
    $__case_1 = $date;
    if (true) {
$n = $__case_0;
$date1 = $__case_1;
$adj = (function() use (&$adj) {
  $__fn = function($v1, $v2 = null) use (&$adj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v1;
$__case_1 = $v2;
if (($__case_0 === 0)) {
$dt = $__case_1;
return ($GLOBALS['Data_Maybe_Just'])($dt);
} else {
if ((($__case_1)->tag === "Date")) {
$i = $__case_0;
$y = ($__case_1)->values[0];
$m = ($__case_1)->values[1];
$d = ($__case_1)->values[2];
$j = ($GLOBALS['Data_Date_add'])($i, ($GLOBALS['Data_Date_fromEnum2'])($d));
$low = ($GLOBALS['Data_Date_lessThan'])($j, 1);
$__case_0 = $low;
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = ($GLOBALS['Data_Maybe_fromMaybe'])($GLOBALS['Data_Date_Component_December'], ($GLOBALS['Data_Date_pred'])($m));
} else {
if (true) {
$__case_res_0 = $m;
} else {
throw new \Exception("Pattern match failure");
};
};
$l = ($GLOBALS['Data_Date_lastDayOfMonth'])($y, $__case_res_0);
$hi = ($GLOBALS['Data_Date_greaterThan1'])($j, ($GLOBALS['Data_Date_fromEnum2'])($l));
$__case_res_1 = null;
if (true) {
$__case_res_1 = "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
$i__prime__ = $__case_res_1;
$__case_res_2 = null;
if (true) {
$__case_res_2 = "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
$dt__prime__ = $__case_res_2;
return ($GLOBALS['Data_Date_bindFlipped'])(($adj)($i__prime__), $dt__prime__);
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
return ($GLOBALS['Data_Date_bind'])(($GLOBALS['Data_Int_fromNumber'])($n), ($GLOBALS['Data_Function_flip'])($adj, $date1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $date = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $date);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

