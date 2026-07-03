<?php

namespace Data\DateTime;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.DateTime/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
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


// Data_DateTime_fromEnum
$Data_DateTime_fromEnum = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Date_Component_boundedEnumYear']);

// Data_DateTime_fromEnum1
$Data_DateTime_fromEnum1 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Date_Component_boundedEnumMonth']);

// Data_DateTime_fromEnum2
$Data_DateTime_fromEnum2 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Date_Component_boundedEnumDay']);

// Data_DateTime_fromEnum3
$Data_DateTime_fromEnum3 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Time_Component_boundedEnumHour']);

// Data_DateTime_fromEnum4
$Data_DateTime_fromEnum4 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Time_Component_boundedEnumMinute']);

// Data_DateTime_fromEnum5
$Data_DateTime_fromEnum5 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Time_Component_boundedEnumSecond']);

// Data_DateTime_fromEnum6
$Data_DateTime_fromEnum6 = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Time_Component_boundedEnumMillisecond']);

// Data_DateTime_append
$Data_DateTime_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_DateTime_show
$Data_DateTime_show = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Date_showDate']);

// Data_DateTime_show1
$Data_DateTime_show1 = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Time_showTime']);

// Data_DateTime_conj
$Data_DateTime_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_DateTime_eq
$Data_DateTime_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Date_eqDate']);

// Data_DateTime_eq1
$Data_DateTime_eq1 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Time_eqTime']);

// Data_DateTime_compare
$Data_DateTime_compare = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Date_ordDate']);

// Data_DateTime_compare1
$Data_DateTime_compare1 = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Time_ordTime']);

// Data_DateTime_bind
$Data_DateTime_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_Maybe_bindMaybe']);

// Data_DateTime_apply
$Data_DateTime_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Data_Maybe_applyMaybe']);

// Data_DateTime_map
$Data_DateTime_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_DateTime_join
$Data_DateTime_join = ($GLOBALS['Control_Bind_join'])($GLOBALS['Data_Maybe_bindMaybe']);

// Data_DateTime_toEnum
$Data_DateTime_toEnum = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Date_Component_boundedEnumYear']);

// Data_DateTime_toEnum1
$Data_DateTime_toEnum1 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Date_Component_boundedEnumMonth']);

// Data_DateTime_toEnum2
$Data_DateTime_toEnum2 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Date_Component_boundedEnumDay']);

// Data_DateTime_toEnum3
$Data_DateTime_toEnum3 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Time_Component_boundedEnumHour']);

// Data_DateTime_toEnum4
$Data_DateTime_toEnum4 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Time_Component_boundedEnumMinute']);

// Data_DateTime_toEnum5
$Data_DateTime_toEnum5 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Time_Component_boundedEnumSecond']);

// Data_DateTime_toEnum6
$Data_DateTime_toEnum6 = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Time_Component_boundedEnumMillisecond']);

// Data_DateTime_DateTime
$Data_DateTime_DateTime = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "DateTime", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_DateTime_toRecord
$Data_DateTime_toRecord = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$d = ($__case_0)->values[0];
$t = ($__case_0)->values[1];
return (object)["year" => ($GLOBALS['Data_DateTime_fromEnum'])(($GLOBALS['Data_Date_year'])($d)), "month" => ($GLOBALS['Data_DateTime_fromEnum1'])(($GLOBALS['Data_Date_month'])($d)), "day" => ($GLOBALS['Data_DateTime_fromEnum2'])(($GLOBALS['Data_Date_day'])($d)), "hour" => ($GLOBALS['Data_DateTime_fromEnum3'])(($GLOBALS['Data_Time_hour'])($t)), "minute" => ($GLOBALS['Data_DateTime_fromEnum4'])(($GLOBALS['Data_Time_minute'])($t)), "second" => ($GLOBALS['Data_DateTime_fromEnum5'])(($GLOBALS['Data_Time_second'])($t)), "millisecond" => ($GLOBALS['Data_DateTime_fromEnum6'])(($GLOBALS['Data_Time_millisecond'])($t))];
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

// Data_DateTime_time
$Data_DateTime_time = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$t = ($__case_0)->values[1];
return $t;
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

// Data_DateTime_showDateTime
$Data_DateTime_showDateTime = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$d = ($__case_0)->values[0];
$t = ($__case_0)->values[1];
return ($GLOBALS['Data_DateTime_append'])("(DateTime ", ($GLOBALS['Data_DateTime_append'])(($GLOBALS['Data_DateTime_show'])($d), ($GLOBALS['Data_DateTime_append'])(" ", ($GLOBALS['Data_DateTime_append'])(($GLOBALS['Data_DateTime_show1'])($t), ")"))));
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

// Data_DateTime_modifyTimeF
$Data_DateTime_modifyTimeF = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "DateTime")) {
$f1 = $__case_0;
$d = ($__case_1)->values[0];
$t = ($__case_1)->values[1];
return ($map1)(($GLOBALS['Data_DateTime_DateTime'])($d), ($f1)($t));
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

// Data_DateTime_modifyTime
$Data_DateTime_modifyTime = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "DateTime")) {
$f1 = $__case_0;
$d = ($__case_1)->values[0];
$t = ($__case_1)->values[1];
return ($GLOBALS['Data_DateTime_DateTime'])($d, ($f1)($t));
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

// Data_DateTime_modifyDateF
$Data_DateTime_modifyDateF = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "DateTime")) {
$f1 = $__case_0;
$d = ($__case_1)->values[0];
$t = ($__case_1)->values[1];
return ($map1)(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_DateTime_DateTime'], $t), ($f1)($d));
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

// Data_DateTime_modifyDate
$Data_DateTime_modifyDate = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "DateTime")) {
$f1 = $__case_0;
$d = ($__case_1)->values[0];
$t = ($__case_1)->values[1];
return ($GLOBALS['Data_DateTime_DateTime'])(($f1)($d), $t);
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

// Data_DateTime_eqDateTime
$Data_DateTime_eqDateTime = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "DateTime") && (($__case_1)->tag === "DateTime"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($GLOBALS['Data_DateTime_conj'])(($GLOBALS['Data_DateTime_eq'])($l, $r), ($GLOBALS['Data_DateTime_eq1'])($l1, $r1));
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

// Data_DateTime_ordDateTime
$Data_DateTime_ordDateTime = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "DateTime") && (($__case_1)->tag === "DateTime"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($GLOBALS['Data_DateTime_compare'])($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
return ($GLOBALS['Data_DateTime_compare1'])($l1, $r1);
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
    $__res = $GLOBALS['Data_DateTime_eqDateTime'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_DateTime_diff
$Data_DateTime_diff = (function() {
  $__fn = function($dictDuration) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$toDuration = ($GLOBALS['Data_Time_Duration_toDuration'])($dictDuration);
    $__res = (function() use ($toDuration) {
  $__fn = function($dt1, $dt2 = null) use ($toDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($toDuration)(($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Data_DateTime_calcDiff'], ($GLOBALS['Data_DateTime_toRecord'])($dt1), ($GLOBALS['Data_DateTime_toRecord'])($dt2)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_DateTime_date
$Data_DateTime_date = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$d = ($__case_0)->values[0];
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

// Data_DateTime_boundedDateTime
$Data_DateTime_boundedDateTime = ($GLOBALS['Data_Bounded_Bounded__dollar__Dict'])((object)["bottom" => ($GLOBALS['Data_DateTime_DateTime'])(($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Date_boundedDate']), ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_boundedTime'])), "top" => ($GLOBALS['Data_DateTime_DateTime'])(($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Date_boundedDate']), ($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Time_boundedTime'])), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_DateTime_ordDateTime'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_DateTime_adjust
$Data_DateTime_adjust = (function() {
  $__fn = function($dictDuration) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$fromDuration = ($GLOBALS['Data_Time_Duration_fromDuration'])($dictDuration);
    $__res = (function() use ($fromDuration) {
  $__fn = function($d, $dt = null) use ($fromDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_DateTime_bind'])(($GLOBALS['Data_DateTime_adjustImpl'])($GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Maybe_Nothing'], ($fromDuration)($d), ($GLOBALS['Data_DateTime_toRecord'])($dt)), (function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_DateTime_apply'])(($GLOBALS['Data_DateTime_map'])($GLOBALS['Data_DateTime_DateTime'], ($GLOBALS['Data_DateTime_join'])(($GLOBALS['Data_DateTime_apply'])(($GLOBALS['Data_DateTime_apply'])(($GLOBALS['Data_DateTime_map'])($GLOBALS['Data_Date_exactDate'], ($GLOBALS['Data_DateTime_toEnum'])(($rec)->year)), ($GLOBALS['Data_DateTime_toEnum1'])(($rec)->month)), ($GLOBALS['Data_DateTime_toEnum2'])(($rec)->day)))), ($GLOBALS['Data_DateTime_apply'])(($GLOBALS['Data_DateTime_apply'])(($GLOBALS['Data_DateTime_apply'])(($GLOBALS['Data_DateTime_map'])($GLOBALS['Data_Time_Time'], ($GLOBALS['Data_DateTime_toEnum3'])(($rec)->hour)), ($GLOBALS['Data_DateTime_toEnum4'])(($rec)->minute)), ($GLOBALS['Data_DateTime_toEnum5'])(($rec)->second)), ($GLOBALS['Data_DateTime_toEnum6'])(($rec)->millisecond)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

