<?php

namespace Data\Time;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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


// Data_Time_append
$Data_Time_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Time_show
$Data_Time_show = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Time_Component_showHour']);

// Data_Time_show1
$Data_Time_show1 = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Time_Component_showMinute']);

// Data_Time_show2
$Data_Time_show2 = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Time_Component_showSecond']);

// Data_Time_show3
$Data_Time_show3 = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Time_Component_showMillisecond']);

// Data_Time_div
$Data_Time_div = ($GLOBALS['Data_EuclideanRing_div'])($GLOBALS['Data_EuclideanRing_euclideanRingNumber']);

// Data_Time_sub
$Data_Time_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringNumber']);

// Data_Time_mul
$Data_Time_mul = ($GLOBALS['Data_Semiring_mul'])($GLOBALS['Data_Semiring_semiringNumber']);

// Data_Time_add
$Data_Time_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringNumber']);

// Data_Time_fromJust
$Data_Time_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Time_apply
$Data_Time_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_Maybe_applyMaybe']);

// Data_Time_map
$Data_Time_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_Time_toEnum
$Data_Time_toEnum = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Time_Component_boundedEnumHour']);

// Data_Time_toEnum1
$Data_Time_toEnum1 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Time_Component_boundedEnumMinute']);

// Data_Time_toEnum2
$Data_Time_toEnum2 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Time_Component_boundedEnumSecond']);

// Data_Time_toEnum3
$Data_Time_toEnum3 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Time_Component_boundedEnumMillisecond']);

// Data_Time_fromEnum
$Data_Time_fromEnum = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Time_Component_boundedEnumHour']);

// Data_Time_fromEnum1
$Data_Time_fromEnum1 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Time_Component_boundedEnumMinute']);

// Data_Time_fromEnum2
$Data_Time_fromEnum2 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Time_Component_boundedEnumSecond']);

// Data_Time_fromEnum3
$Data_Time_fromEnum3 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Time_Component_boundedEnumMillisecond']);

// Data_Time_conj
$Data_Time_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Time_eq
$Data_Time_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Time_Component_eqHour']);

// Data_Time_eq1
$Data_Time_eq1 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Time_Component_eqMinute']);

// Data_Time_eq2
$Data_Time_eq2 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Time_Component_eqSecond']);

// Data_Time_eq3
$Data_Time_eq3 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Time_Component_eqMillisecond']);

// Data_Time_compare
$Data_Time_compare = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Time_Component_ordHour']);

// Data_Time_compare1
$Data_Time_compare1 = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Time_Component_ordMinute']);

// Data_Time_compare2
$Data_Time_compare2 = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Time_Component_ordSecond']);

// Data_Time_compare3
$Data_Time_compare3 = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Time_Component_ordMillisecond']);

// Data_Time_append1
$Data_Time_append1 = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Time_Duration_semigroupMilliseconds']);

// Data_Time_negateDuration
$Data_Time_negateDuration = ($GLOBALS['Data_Time_Duration_negateDuration'])($GLOBALS['Data_Time_Duration_durationMilliseconds']);

// Data_Time_unwrap
$Data_Time_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_Time_fromDuration
$Data_Time_fromDuration = ($GLOBALS['Data_Time_Duration_fromDuration'])($GLOBALS['Data_Time_Duration_durationDays']);

// Data_Time_greaterThan
$Data_Time_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Time_Duration_ordMilliseconds']);

// Data_Time_lessThan
$Data_Time_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Time_Duration_ordMilliseconds']);

// Data_Time_negate
$Data_Time_negate = ($GLOBALS['Data_Ring_negate'])($GLOBALS['Data_Ring_ringNumber']);

// Data_Time_append2
$Data_Time_append2 = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Time_Duration_semigroupDays']);

// Data_Time_Time
$Data_Time_Time = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = (object)["tag" => "Time", "values" => [$value0, $value1, $value2, $value3]];
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Data_Time_showTime
$Data_Time_showTime = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
$h = ($__case_0)->values[0];
$m = ($__case_0)->values[1];
$s = ($__case_0)->values[2];
$ms = ($__case_0)->values[3];
return ($GLOBALS['Data_Time_append'])("(Time ", ($GLOBALS['Data_Time_append'])(($GLOBALS['Data_Time_show'])($h), ($GLOBALS['Data_Time_append'])(" ", ($GLOBALS['Data_Time_append'])(($GLOBALS['Data_Time_show1'])($m), ($GLOBALS['Data_Time_append'])(" ", ($GLOBALS['Data_Time_append'])(($GLOBALS['Data_Time_show2'])($s), ($GLOBALS['Data_Time_append'])(" ", ($GLOBALS['Data_Time_append'])(($GLOBALS['Data_Time_show3'])($ms), ")"))))))));
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

// Data_Time_setSecond
$Data_Time_setSecond = (function() {
  $__body = function($s, $v) {
    $__case_0 = $s;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Time")) {
$s1 = $__case_0;
$h = ($__case_1)->values[0];
$m = ($__case_1)->values[1];
$ms = ($__case_1)->values[3];
return ($GLOBALS['Data_Time_Time'])($h, $m, $s1, $ms);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($s, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($s, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Time_setMinute
$Data_Time_setMinute = (function() {
  $__body = function($m, $v) {
    $__case_0 = $m;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Time")) {
$m1 = $__case_0;
$h = ($__case_1)->values[0];
$s = ($__case_1)->values[2];
$ms = ($__case_1)->values[3];
return ($GLOBALS['Data_Time_Time'])($h, $m1, $s, $ms);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($m, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($m, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Time_setMillisecond
$Data_Time_setMillisecond = (function() {
  $__body = function($ms, $v) {
    $__case_0 = $ms;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Time")) {
$ms1 = $__case_0;
$h = ($__case_1)->values[0];
$m = ($__case_1)->values[1];
$s = ($__case_1)->values[2];
return ($GLOBALS['Data_Time_Time'])($h, $m, $s, $ms1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($ms, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($ms, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Time_setHour
$Data_Time_setHour = (function() {
  $__body = function($h, $v) {
    $__case_0 = $h;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Time")) {
$h1 = $__case_0;
$m = ($__case_1)->values[1];
$s = ($__case_1)->values[2];
$ms = ($__case_1)->values[3];
return ($GLOBALS['Data_Time_Time'])($h1, $m, $s, $ms);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($h, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($h, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Time_second
$Data_Time_second = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
$s = ($__case_0)->values[2];
return $s;
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

// Data_Time_minute
$Data_Time_minute = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
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

// Data_Time_millisecond
$Data_Time_millisecond = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
$ms = ($__case_0)->values[3];
return $ms;
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

// Data_Time_millisToTime
$Data_Time_millisToTime = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms__prime__ = $__case_0;
$secondLength = 1000.0;
$minuteLength = 60000.0;
$hourLength = 3600000.0;
$hours = ($GLOBALS['Data_Number_floor'])(($GLOBALS['Data_Time_div'])($ms__prime__, $hourLength));
$minutes = ($GLOBALS['Data_Number_floor'])(($GLOBALS['Data_Time_div'])(($GLOBALS['Data_Time_sub'])($ms__prime__, ($GLOBALS['Data_Time_mul'])($hours, $hourLength)), $minuteLength));
$seconds = ($GLOBALS['Data_Number_floor'])(($GLOBALS['Data_Time_div'])(($GLOBALS['Data_Time_sub'])($ms__prime__, ($GLOBALS['Data_Time_add'])(($GLOBALS['Data_Time_mul'])($hours, $hourLength), ($GLOBALS['Data_Time_mul'])($minutes, $minuteLength))), $secondLength));
$milliseconds = ($GLOBALS['Data_Time_sub'])($ms__prime__, ($GLOBALS['Data_Time_add'])(($GLOBALS['Data_Time_add'])(($GLOBALS['Data_Time_mul'])($hours, $hourLength), ($GLOBALS['Data_Time_mul'])($minutes, $minuteLength)), ($GLOBALS['Data_Time_mul'])($seconds, $secondLength)));
return ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Time_fromJust'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_Time_apply'])(($GLOBALS['Data_Time_apply'])(($GLOBALS['Data_Time_apply'])(($GLOBALS['Data_Time_map'])($GLOBALS['Data_Time_Time'], ($GLOBALS['Data_Time_toEnum'])(($GLOBALS['Data_Int_floor'])($hours))), ($GLOBALS['Data_Time_toEnum1'])(($GLOBALS['Data_Int_floor'])($minutes))), ($GLOBALS['Data_Time_toEnum2'])(($GLOBALS['Data_Int_floor'])($seconds))), ($GLOBALS['Data_Time_toEnum3'])(($GLOBALS['Data_Int_floor'])($milliseconds))));
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

// Data_Time_hour
$Data_Time_hour = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Time")) {
$h = ($__case_0)->values[0];
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

// Data_Time_timeToMillis
$Data_Time_timeToMillis = (function() {
  $__fn = function($t) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_Milliseconds'])(($GLOBALS['Data_Time_add'])(($GLOBALS['Data_Time_add'])(($GLOBALS['Data_Time_add'])(($GLOBALS['Data_Time_mul'])(3600000.0, ($GLOBALS['Data_Int_toNumber'])(($GLOBALS['Data_Time_fromEnum'])(($GLOBALS['Data_Time_hour'])($t)))), ($GLOBALS['Data_Time_mul'])(60000.0, ($GLOBALS['Data_Int_toNumber'])(($GLOBALS['Data_Time_fromEnum1'])(($GLOBALS['Data_Time_minute'])($t))))), ($GLOBALS['Data_Time_mul'])(1000.0, ($GLOBALS['Data_Int_toNumber'])(($GLOBALS['Data_Time_fromEnum2'])(($GLOBALS['Data_Time_second'])($t))))), ($GLOBALS['Data_Int_toNumber'])(($GLOBALS['Data_Time_fromEnum3'])(($GLOBALS['Data_Time_millisecond'])($t)))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_eqTime
$Data_Time_eqTime = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Time") && (($__case_1)->tag === "Time"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$l2 = ($__case_0)->values[2];
$l3 = ($__case_0)->values[3];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$r2 = ($__case_1)->values[2];
$r3 = ($__case_1)->values[3];
return ($GLOBALS['Data_Time_conj'])(($GLOBALS['Data_Time_conj'])(($GLOBALS['Data_Time_conj'])(($GLOBALS['Data_Time_eq'])($l, $r), ($GLOBALS['Data_Time_eq1'])($l1, $r1)), ($GLOBALS['Data_Time_eq2'])($l2, $r2)), ($GLOBALS['Data_Time_eq3'])($l3, $r3));
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

// Data_Time_ordTime
$Data_Time_ordTime = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Time") && (($__case_1)->tag === "Time"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$l2 = ($__case_0)->values[2];
$l3 = ($__case_0)->values[3];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$r2 = ($__case_1)->values[2];
$r3 = ($__case_1)->values[3];
$v = ($GLOBALS['Data_Time_compare'])($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
$v1 = ($GLOBALS['Data_Time_compare1'])($l1, $r1);
$__case_0 = $v1;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
$v2 = ($GLOBALS['Data_Time_compare2'])($l2, $r2);
$__case_0 = $v2;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
return ($GLOBALS['Data_Time_compare3'])($l3, $r3);
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
    $__res = $GLOBALS['Data_Time_eqTime'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_diff
$Data_Time_diff = (function() {
  $__fn = function($dictDuration) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$toDuration = ($GLOBALS['Data_Time_Duration_toDuration'])($dictDuration);
    $__res = (function() use ($toDuration) {
  $__fn = function($t1, $t2 = null) use ($toDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($toDuration)(($GLOBALS['Data_Time_append1'])(($GLOBALS['Data_Time_timeToMillis'])($t1), ($GLOBALS['Data_Time_negateDuration'])(($GLOBALS['Data_Time_timeToMillis'])($t2))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_boundedTime
$Data_Time_boundedTime = ($GLOBALS['Data_Bounded_Bounded__dollar__Dict'])((object)["bottom" => ($GLOBALS['Data_Time_Time'])(($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_Component_boundedHour']), ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_Component_boundedMinute']), ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_Component_boundedSecond']), ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_Component_boundedMillisecond'])), "top" => ($GLOBALS['Data_Time_Time'])(($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Time_Component_boundedHour']), ($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Time_Component_boundedMinute']), ($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Time_Component_boundedSecond']), ($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Time_Component_boundedMillisecond'])), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Time_ordTime'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_maxTime
$Data_Time_maxTime = ($GLOBALS['Data_Time_timeToMillis'])(($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Time_boundedTime']));

// Data_Time_minTime
$Data_Time_minTime = ($GLOBALS['Data_Time_timeToMillis'])(($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_boundedTime']));

// Data_Time_adjust
$Data_Time_adjust = (function() {
  $__fn = function($dictDuration) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$fromDuration1 = ($GLOBALS['Data_Time_Duration_fromDuration'])($dictDuration);
    $__res = (function() use ($fromDuration1) {
  $__fn = function($d, $t = null) use ($fromDuration1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$tLength = ($GLOBALS['Data_Time_timeToMillis'])($t);
$dayLength = 86400000.0;
$d__prime__ = ($fromDuration1)($d);
$wholeDays = ($GLOBALS['Data_Time_Duration_Days'])(($GLOBALS['Data_Number_floor'])(($GLOBALS['Data_Time_div'])(($GLOBALS['Data_Time_unwrap'])($d__prime__), $dayLength)));
$msAdjust = ($GLOBALS['Data_Time_append1'])($d__prime__, ($GLOBALS['Data_Time_negateDuration'])(($GLOBALS['Data_Time_fromDuration'])($wholeDays)));
$msAdjusted = ($GLOBALS['Data_Time_append1'])($tLength, $msAdjust);
$__case_0 = ($GLOBALS['Data_Time_greaterThan'])($msAdjusted, $GLOBALS['Data_Time_maxTime']);
$__case_res_0 = null;
if (($__case_0 === true)) {
$__case_res_0 = 1.0;
} else {
if (true) {
$__case_0 = ($GLOBALS['Data_Time_lessThan'])($msAdjusted, $GLOBALS['Data_Time_minTime']);
$__case_res_1 = null;
if (($__case_0 === true)) {
$__case_res_1 = ($GLOBALS['Data_Time_negate'])(1.0);
} else {
if (true) {
$__case_res_1 = 0.0;
} else {
throw new \Exception("Pattern match failure");
};
};
$__case_res_0 = $__case_res_1;
} else {
throw new \Exception("Pattern match failure");
};
};
$wrap = $__case_res_0;
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_Time_append2'])($wholeDays, ($GLOBALS['Data_Time_Duration_Days'])($wrap)), ($GLOBALS['Data_Time_millisToTime'])(($GLOBALS['Data_Time_append1'])($msAdjusted, ($GLOBALS['Data_Time_Duration_Milliseconds'])(($GLOBALS['Data_Time_mul'])($dayLength, ($GLOBALS['Data_Time_negate'])($wrap))))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

