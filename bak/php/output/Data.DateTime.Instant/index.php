<?php

namespace Data\DateTime\Instant;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.DateTime/index.php';
require_once __DIR__ . '/../Data.DateTime.Instant/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
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


// Data_DateTime_Instant_fromJust
$Data_DateTime_Instant_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_DateTime_Instant_toEnum
$Data_DateTime_Instant_toEnum = ($GLOBALS['Data_Enum_toEnum'])($GLOBALS['Data_Date_Component_boundedEnumMonth']);

// Data_DateTime_Instant_append
$Data_DateTime_Instant_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_DateTime_Instant_show
$Data_DateTime_Instant_show = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Time_Duration_showMilliseconds']);

// Data_DateTime_Instant_conj
$Data_DateTime_Instant_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_DateTime_Instant_greaterThanOrEq
$Data_DateTime_Instant_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordNumber']);

// Data_DateTime_Instant_negate
$Data_DateTime_Instant_negate = ($GLOBALS['Data_Ring_negate'])($GLOBALS['Data_Ring_ringNumber']);

// Data_DateTime_Instant_lessThanOrEq
$Data_DateTime_Instant_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordNumber']);

// Data_DateTime_Instant_fromEnum
$Data_DateTime_Instant_fromEnum = ($GLOBALS['Data_Enum_fromEnum'])($GLOBALS['Data_Date_Component_boundedEnumMonth']);

// Data_DateTime_Instant_bottom
$Data_DateTime_Instant_bottom = ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_Component_boundedHour']);

// Data_DateTime_Instant_bottom1
$Data_DateTime_Instant_bottom1 = ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_Component_boundedMinute']);

// Data_DateTime_Instant_bottom2
$Data_DateTime_Instant_bottom2 = ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_Component_boundedSecond']);

// Data_DateTime_Instant_bottom3
$Data_DateTime_Instant_bottom3 = ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Time_Component_boundedMillisecond']);

// Data_DateTime_Instant_append1
$Data_DateTime_Instant_append1 = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Time_Duration_semigroupMilliseconds']);

// Data_DateTime_Instant_negateDuration
$Data_DateTime_Instant_negateDuration = ($GLOBALS['Data_Time_Duration_negateDuration'])($GLOBALS['Data_Time_Duration_durationMilliseconds']);

// Data_DateTime_Instant_Instant
$Data_DateTime_Instant_Instant = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_DateTime_Instant_unInstant
$Data_DateTime_Instant_unInstant = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
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

// Data_DateTime_Instant_toDateTime
$Data_DateTime_Instant_toDateTime = ($mkDateTime = ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused, $y = null, $mo = null, $d = null, $h = null, $mi = null, $s = null, $ms = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 8) return phpurs_curry_fallback($__fn, func_get_args(), 8);
    $__res = ($GLOBALS['Data_DateTime_DateTime'])(($GLOBALS['Data_Date_canonicalDate'])($y, ($GLOBALS['Data_DateTime_Instant_fromJust'])(($GLOBALS['Data_DateTime_Instant_toEnum'])($mo)), $d), ($GLOBALS['Data_Time_Time'])($h, $mi, $s, $ms));
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})());
return ($GLOBALS['Data_DateTime_Instant_toDateTimeImpl'])($mkDateTime);)();

// Data_DateTime_Instant_showInstant
$Data_DateTime_Instant_showInstant = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
return ($GLOBALS['Data_DateTime_Instant_append'])("(Instant ", ($GLOBALS['Data_DateTime_Instant_append'])(($GLOBALS['Data_DateTime_Instant_show'])($ms), ")"));
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

// Data_DateTime_Instant_ordDateTime
$Data_DateTime_Instant_ordDateTime = $GLOBALS['Data_Time_Duration_ordMilliseconds'];

// Data_DateTime_Instant_instant
$Data_DateTime_Instant_instant = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$ms = $__case_0;
$n = $__case_0;
return "/* Unsupported: Guards not supported */";
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

// Data_DateTime_Instant_fromDateTime
$Data_DateTime_Instant_fromDateTime = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "DateTime")) {
$d = ($__case_0)->values[0];
$t = ($__case_0)->values[1];
return ($GLOBALS['Data_Function_Uncurried_runFn7'])($GLOBALS['Data_DateTime_Instant_fromDateTimeImpl'], ($GLOBALS['Data_Date_year'])($d), ($GLOBALS['Data_DateTime_Instant_fromEnum'])(($GLOBALS['Data_Date_month'])($d)), ($GLOBALS['Data_Date_day'])($d), ($GLOBALS['Data_Time_hour'])($t), ($GLOBALS['Data_Time_minute'])($t), ($GLOBALS['Data_Time_second'])($t), ($GLOBALS['Data_Time_millisecond'])($t));
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

// Data_DateTime_Instant_fromDate
$Data_DateTime_Instant_fromDate = (function() {
  $__fn = function($d) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn7'])($GLOBALS['Data_DateTime_Instant_fromDateTimeImpl'], ($GLOBALS['Data_Date_year'])($d), ($GLOBALS['Data_DateTime_Instant_fromEnum'])(($GLOBALS['Data_Date_month'])($d)), ($GLOBALS['Data_Date_day'])($d), $GLOBALS['Data_DateTime_Instant_bottom'], $GLOBALS['Data_DateTime_Instant_bottom1'], $GLOBALS['Data_DateTime_Instant_bottom2'], $GLOBALS['Data_DateTime_Instant_bottom3']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_DateTime_Instant_eqDateTime
$Data_DateTime_Instant_eqDateTime = $GLOBALS['Data_Time_Duration_eqMilliseconds'];

// Data_DateTime_Instant_diff
$Data_DateTime_Instant_diff = (function() {
  $__fn = function($dictDuration) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$toDuration = ($GLOBALS['Data_Time_Duration_toDuration'])($dictDuration);
    $__res = (function() use ($toDuration) {
  $__fn = function($dt1, $dt2 = null) use ($toDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($toDuration)(($GLOBALS['Data_DateTime_Instant_append1'])(($GLOBALS['Data_DateTime_Instant_unInstant'])($dt1), ($GLOBALS['Data_DateTime_Instant_negateDuration'])(($GLOBALS['Data_DateTime_Instant_unInstant'])($dt2))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_DateTime_Instant_boundedInstant
$Data_DateTime_Instant_boundedInstant = ($GLOBALS['Data_Bounded_Bounded__dollar__Dict'])((object)["bottom" => ($GLOBALS['Data_DateTime_Instant_Instant'])(($GLOBALS['Data_Time_Duration_Milliseconds'])(($GLOBALS['Data_DateTime_Instant_negate'])(8639977881600000.0))), "top" => ($GLOBALS['Data_DateTime_Instant_Instant'])(($GLOBALS['Data_Time_Duration_Milliseconds'])(8639977881599999.0)), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_DateTime_Instant_ordDateTime'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

