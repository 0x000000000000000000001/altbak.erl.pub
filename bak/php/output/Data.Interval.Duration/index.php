<?php

namespace Data\Interval\Duration;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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


// Data_Interval_Duration_append
$Data_Interval_Duration_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Interval_Duration_add
$Data_Interval_Duration_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringNumber']);

// Data_Interval_Duration_div
$Data_Interval_Duration_div = ($GLOBALS['Data_EuclideanRing_div'])($GLOBALS['Data_EuclideanRing_euclideanRingNumber']);

// Data_Interval_Duration_Second
$Data_Interval_Duration_Second = (object)["tag" => "Second", "values" => []];

// Data_Interval_Duration_Minute
$Data_Interval_Duration_Minute = (object)["tag" => "Minute", "values" => []];

// Data_Interval_Duration_Hour
$Data_Interval_Duration_Hour = (object)["tag" => "Hour", "values" => []];

// Data_Interval_Duration_Day
$Data_Interval_Duration_Day = (object)["tag" => "Day", "values" => []];

// Data_Interval_Duration_Week
$Data_Interval_Duration_Week = (object)["tag" => "Week", "values" => []];

// Data_Interval_Duration_Month
$Data_Interval_Duration_Month = (object)["tag" => "Month", "values" => []];

// Data_Interval_Duration_Year
$Data_Interval_Duration_Year = (object)["tag" => "Year", "values" => []];

// Data_Interval_Duration_Duration
$Data_Interval_Duration_Duration = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_showDurationComponent
$Data_Interval_Duration_showDurationComponent = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Minute")) {
return "Minute";
} else {
if ((($__case_0)->tag === "Second")) {
return "Second";
} else {
if ((($__case_0)->tag === "Hour")) {
return "Hour";
} else {
if ((($__case_0)->tag === "Day")) {
return "Day";
} else {
if ((($__case_0)->tag === "Week")) {
return "Week";
} else {
if ((($__case_0)->tag === "Month")) {
return "Month";
} else {
if ((($__case_0)->tag === "Year")) {
return "Year";
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
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_show
$Data_Interval_Duration_show = ($GLOBALS['Data_Show_show'])(($GLOBALS['Data_Map_Internal_showMap'])($GLOBALS['Data_Interval_Duration_showDurationComponent'], $GLOBALS['Data_Show_showNumber']));

// Data_Interval_Duration_showDuration
$Data_Interval_Duration_showDuration = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return ($GLOBALS['Data_Interval_Duration_append'])("(Duration ", ($GLOBALS['Data_Interval_Duration_append'])(($GLOBALS['Data_Interval_Duration_show'])($d), ")"));
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

// Data_Interval_Duration_newtypeDuration
$Data_Interval_Duration_newtypeDuration = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_eqDurationComponent
$Data_Interval_Duration_eqDurationComponent = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Second") && (($__case_1)->tag === "Second"))) {
return true;
} else {
if (((($__case_0)->tag === "Minute") && (($__case_1)->tag === "Minute"))) {
return true;
} else {
if (((($__case_0)->tag === "Hour") && (($__case_1)->tag === "Hour"))) {
return true;
} else {
if (((($__case_0)->tag === "Day") && (($__case_1)->tag === "Day"))) {
return true;
} else {
if (((($__case_0)->tag === "Week") && (($__case_1)->tag === "Week"))) {
return true;
} else {
if (((($__case_0)->tag === "Month") && (($__case_1)->tag === "Month"))) {
return true;
} else {
if (((($__case_0)->tag === "Year") && (($__case_1)->tag === "Year"))) {
return true;
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
};
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

// Data_Interval_Duration_eq
$Data_Interval_Duration_eq = ($GLOBALS['Data_Eq_eq'])(($GLOBALS['Data_Map_Internal_eqMap'])($GLOBALS['Data_Interval_Duration_eqDurationComponent'], $GLOBALS['Data_Eq_eqNumber']));

// Data_Interval_Duration_ordDurationComponent
$Data_Interval_Duration_ordDurationComponent = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Second") && (($__case_1)->tag === "Second"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "Second")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Second")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Minute") && (($__case_1)->tag === "Minute"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "Minute")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Minute")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Hour") && (($__case_1)->tag === "Hour"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "Hour")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Hour")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Day") && (($__case_1)->tag === "Day"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "Day")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Day")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Week") && (($__case_1)->tag === "Week"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "Week")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Week")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Month") && (($__case_1)->tag === "Month"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "Month")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "Month")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "Year") && (($__case_1)->tag === "Year"))) {
return $GLOBALS['Data_Ordering_EQ'];
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
};
};
};
};
};
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
    $__res = $GLOBALS['Data_Interval_Duration_eqDurationComponent'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_unionWith
$Data_Interval_Duration_unionWith = ($GLOBALS['Data_Map_Internal_unionWith'])($GLOBALS['Data_Interval_Duration_ordDurationComponent']);

// Data_Interval_Duration_compare
$Data_Interval_Duration_compare = ($GLOBALS['Data_Ord_compare'])(($GLOBALS['Data_Map_Internal_ordMap'])($GLOBALS['Data_Interval_Duration_ordDurationComponent'], $GLOBALS['Data_Ord_ordNumber']));

// Data_Interval_Duration_semigroupDuration
$Data_Interval_Duration_semigroupDuration = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$a = $__case_0;
$b = $__case_1;
return ($GLOBALS['Data_Interval_Duration_Duration'])(($GLOBALS['Data_Interval_Duration_unionWith'])($GLOBALS['Data_Interval_Duration_add'], $a, $b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_monoidDuration
$Data_Interval_Duration_monoidDuration = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Data_Interval_Duration_Duration'])($GLOBALS['Data_Map_Internal_empty']), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_Duration_semigroupDuration'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_eqDuration
$Data_Interval_Duration_eqDuration = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($GLOBALS['Data_Interval_Duration_eq'])($l, $r);
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

// Data_Interval_Duration_ordDuration
$Data_Interval_Duration_ordDuration = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($GLOBALS['Data_Interval_Duration_compare'])($l, $r);
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
    $__res = $GLOBALS['Data_Interval_Duration_eqDuration'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_durationFromComponent
$Data_Interval_Duration_durationFromComponent = (function() {
  $__fn = function($k, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Interval_Duration_Duration'])(($GLOBALS['Data_Map_Internal_singleton'])($k, $v));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_hour
$Data_Interval_Duration_hour = ($GLOBALS['Data_Interval_Duration_durationFromComponent'])($GLOBALS['Data_Interval_Duration_Hour']);

// Data_Interval_Duration_millisecond
$Data_Interval_Duration_millisecond = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn'], ($GLOBALS['Data_Interval_Duration_durationFromComponent'])($GLOBALS['Data_Interval_Duration_Second']), (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Interval_Duration_div'])($v, 1000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());

// Data_Interval_Duration_minute
$Data_Interval_Duration_minute = ($GLOBALS['Data_Interval_Duration_durationFromComponent'])($GLOBALS['Data_Interval_Duration_Minute']);

// Data_Interval_Duration_month
$Data_Interval_Duration_month = ($GLOBALS['Data_Interval_Duration_durationFromComponent'])($GLOBALS['Data_Interval_Duration_Month']);

// Data_Interval_Duration_second
$Data_Interval_Duration_second = ($GLOBALS['Data_Interval_Duration_durationFromComponent'])($GLOBALS['Data_Interval_Duration_Second']);

// Data_Interval_Duration_week
$Data_Interval_Duration_week = ($GLOBALS['Data_Interval_Duration_durationFromComponent'])($GLOBALS['Data_Interval_Duration_Week']);

// Data_Interval_Duration_year
$Data_Interval_Duration_year = ($GLOBALS['Data_Interval_Duration_durationFromComponent'])($GLOBALS['Data_Interval_Duration_Year']);

// Data_Interval_Duration_day
$Data_Interval_Duration_day = ($GLOBALS['Data_Interval_Duration_durationFromComponent'])($GLOBALS['Data_Interval_Duration_Day']);

