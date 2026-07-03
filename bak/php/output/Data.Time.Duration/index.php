<?php

namespace Data\Time\Duration;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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


// Data_Time_Duration_append
$Data_Time_Duration_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Time_Duration_show
$Data_Time_Duration_show = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Show_showNumber']);

// Data_Time_Duration_add
$Data_Time_Duration_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringNumber']);

// Data_Time_Duration_compose
$Data_Time_Duration_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Time_Duration_over
$Data_Time_Duration_over = ($GLOBALS['Data_Newtype_over'])($GLOBALS['Prim_undefined'], $GLOBALS['Prim_undefined']);

// Data_Time_Duration_negate
$Data_Time_Duration_negate = ($GLOBALS['Data_Ring_negate'])($GLOBALS['Data_Ring_ringNumber']);

// Data_Time_Duration_mul
$Data_Time_Duration_mul = ($GLOBALS['Data_Semiring_mul'])($GLOBALS['Data_Semiring_semiringNumber']);

// Data_Time_Duration_div
$Data_Time_Duration_div = ($GLOBALS['Data_EuclideanRing_div'])($GLOBALS['Data_EuclideanRing_euclideanRingNumber']);

// Data_Time_Duration_identity
$Data_Time_Duration_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_Time_Duration_Seconds
$Data_Time_Duration_Seconds = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Minutes
$Data_Time_Duration_Minutes = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Milliseconds
$Data_Time_Duration_Milliseconds = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Hours
$Data_Time_Duration_Hours = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Duration$Dict
$Data_Time_Duration_Duration__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_Days
$Data_Time_Duration_Days = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_toDuration
$Data_Time_Duration_toDuration = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->toDuration;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_showSeconds
$Data_Time_Duration_showSeconds = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($GLOBALS['Data_Time_Duration_append'])("(Seconds ", ($GLOBALS['Data_Time_Duration_append'])(($GLOBALS['Data_Time_Duration_show'])($n), ")"));
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

// Data_Time_Duration_showMinutes
$Data_Time_Duration_showMinutes = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($GLOBALS['Data_Time_Duration_append'])("(Minutes ", ($GLOBALS['Data_Time_Duration_append'])(($GLOBALS['Data_Time_Duration_show'])($n), ")"));
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

// Data_Time_Duration_showMilliseconds
$Data_Time_Duration_showMilliseconds = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($GLOBALS['Data_Time_Duration_append'])("(Milliseconds ", ($GLOBALS['Data_Time_Duration_append'])(($GLOBALS['Data_Time_Duration_show'])($n), ")"));
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

// Data_Time_Duration_showHours
$Data_Time_Duration_showHours = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($GLOBALS['Data_Time_Duration_append'])("(Hours ", ($GLOBALS['Data_Time_Duration_append'])(($GLOBALS['Data_Time_Duration_show'])($n), ")"));
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

// Data_Time_Duration_showDays
$Data_Time_Duration_showDays = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($GLOBALS['Data_Time_Duration_append'])("(Days ", ($GLOBALS['Data_Time_Duration_append'])(($GLOBALS['Data_Time_Duration_show'])($n), ")"));
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

// Data_Time_Duration_semigroupSeconds
$Data_Time_Duration_semigroupSeconds = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($GLOBALS['Data_Time_Duration_Seconds'])(($GLOBALS['Data_Time_Duration_add'])($x, $y));
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

// Data_Time_Duration_semigroupMinutes
$Data_Time_Duration_semigroupMinutes = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($GLOBALS['Data_Time_Duration_Minutes'])(($GLOBALS['Data_Time_Duration_add'])($x, $y));
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

// Data_Time_Duration_semigroupMilliseconds
$Data_Time_Duration_semigroupMilliseconds = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($GLOBALS['Data_Time_Duration_Milliseconds'])(($GLOBALS['Data_Time_Duration_add'])($x, $y));
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

// Data_Time_Duration_semigroupHours
$Data_Time_Duration_semigroupHours = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($GLOBALS['Data_Time_Duration_Hours'])(($GLOBALS['Data_Time_Duration_add'])($x, $y));
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

// Data_Time_Duration_semigroupDays
$Data_Time_Duration_semigroupDays = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$x = $__case_0;
$y = $__case_1;
return ($GLOBALS['Data_Time_Duration_Days'])(($GLOBALS['Data_Time_Duration_add'])($x, $y));
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

// Data_Time_Duration_ordSeconds
$Data_Time_Duration_ordSeconds = $GLOBALS['Data_Ord_ordNumber'];

// Data_Time_Duration_ordMinutes
$Data_Time_Duration_ordMinutes = $GLOBALS['Data_Ord_ordNumber'];

// Data_Time_Duration_ordMilliseconds
$Data_Time_Duration_ordMilliseconds = $GLOBALS['Data_Ord_ordNumber'];

// Data_Time_Duration_ordHours
$Data_Time_Duration_ordHours = $GLOBALS['Data_Ord_ordNumber'];

// Data_Time_Duration_ordDays
$Data_Time_Duration_ordDays = $GLOBALS['Data_Ord_ordNumber'];

// Data_Time_Duration_newtypeSeconds
$Data_Time_Duration_newtypeSeconds = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_newtypeMinutes
$Data_Time_Duration_newtypeMinutes = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_newtypeMilliseconds
$Data_Time_Duration_newtypeMilliseconds = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_newtypeHours
$Data_Time_Duration_newtypeHours = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_newtypeDays
$Data_Time_Duration_newtypeDays = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_monoidSeconds
$Data_Time_Duration_monoidSeconds = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Data_Time_Duration_Seconds'])(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Time_Duration_semigroupSeconds'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_monoidMinutes
$Data_Time_Duration_monoidMinutes = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Data_Time_Duration_Minutes'])(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Time_Duration_semigroupMinutes'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_monoidMilliseconds
$Data_Time_Duration_monoidMilliseconds = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Data_Time_Duration_Milliseconds'])(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Time_Duration_semigroupMilliseconds'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_monoidHours
$Data_Time_Duration_monoidHours = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Data_Time_Duration_Hours'])(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Time_Duration_semigroupHours'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_monoidDays
$Data_Time_Duration_monoidDays = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Data_Time_Duration_Days'])(0.0), "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Time_Duration_semigroupDays'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Time_Duration_fromDuration
$Data_Time_Duration_fromDuration = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->fromDuration;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_negateDuration
$Data_Time_Duration_negateDuration = (function() {
  $__fn = function($dictDuration) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_compose'])(($GLOBALS['Data_Time_Duration_toDuration'])($dictDuration), ($GLOBALS['Data_Time_Duration_compose'])(($GLOBALS['Data_Time_Duration_over'])($GLOBALS['Data_Time_Duration_Milliseconds'], $GLOBALS['Data_Time_Duration_negate']), ($GLOBALS['Data_Time_Duration_fromDuration'])($dictDuration)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Time_Duration_eqSeconds
$Data_Time_Duration_eqSeconds = $GLOBALS['Data_Eq_eqNumber'];

// Data_Time_Duration_eqMinutes
$Data_Time_Duration_eqMinutes = $GLOBALS['Data_Eq_eqNumber'];

// Data_Time_Duration_eqMilliseconds
$Data_Time_Duration_eqMilliseconds = $GLOBALS['Data_Eq_eqNumber'];

// Data_Time_Duration_eqHours
$Data_Time_Duration_eqHours = $GLOBALS['Data_Eq_eqNumber'];

// Data_Time_Duration_eqDays
$Data_Time_Duration_eqDays = $GLOBALS['Data_Eq_eqNumber'];

// Data_Time_Duration_durationSeconds
$Data_Time_Duration_durationSeconds = ($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'])((object)["fromDuration" => ($GLOBALS['Data_Time_Duration_over'])($GLOBALS['Data_Time_Duration_Seconds'], (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_mul'])($v, 1000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => ($GLOBALS['Data_Time_Duration_over'])($GLOBALS['Data_Time_Duration_Milliseconds'], (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_div'])($v, 1000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]);

// Data_Time_Duration_durationMinutes
$Data_Time_Duration_durationMinutes = ($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'])((object)["fromDuration" => ($GLOBALS['Data_Time_Duration_over'])($GLOBALS['Data_Time_Duration_Minutes'], (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_mul'])($v, 60000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => ($GLOBALS['Data_Time_Duration_over'])($GLOBALS['Data_Time_Duration_Milliseconds'], (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_div'])($v, 60000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]);

// Data_Time_Duration_durationMilliseconds
$Data_Time_Duration_durationMilliseconds = ($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'])((object)["fromDuration" => $GLOBALS['Data_Time_Duration_identity'], "toDuration" => $GLOBALS['Data_Time_Duration_identity']]);

// Data_Time_Duration_durationHours
$Data_Time_Duration_durationHours = ($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'])((object)["fromDuration" => ($GLOBALS['Data_Time_Duration_over'])($GLOBALS['Data_Time_Duration_Hours'], (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_mul'])($v, 3600000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => ($GLOBALS['Data_Time_Duration_over'])($GLOBALS['Data_Time_Duration_Milliseconds'], (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_div'])($v, 3600000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]);

// Data_Time_Duration_durationDays
$Data_Time_Duration_durationDays = ($GLOBALS['Data_Time_Duration_Duration__dollar__Dict'])((object)["fromDuration" => ($GLOBALS['Data_Time_Duration_over'])($GLOBALS['Data_Time_Duration_Days'], (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_mul'])($v, 86400000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), "toDuration" => ($GLOBALS['Data_Time_Duration_over'])($GLOBALS['Data_Time_Duration_Milliseconds'], (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_div'])($v, 86400000.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())]);

// Data_Time_Duration_convertDuration
$Data_Time_Duration_convertDuration = (function() {
  $__fn = function($dictDuration) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$fromDuration1 = ($GLOBALS['Data_Time_Duration_fromDuration'])($dictDuration);
    $__res = (function() use ($fromDuration1) {
  $__fn = function($dictDuration1) use ($fromDuration1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Time_Duration_compose'])(($GLOBALS['Data_Time_Duration_toDuration'])($dictDuration1), $fromDuration1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

