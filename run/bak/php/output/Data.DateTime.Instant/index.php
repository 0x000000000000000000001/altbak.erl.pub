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

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_DateTime_Instant_fromJust': $v = \Data\Maybe\Data_Maybe_fromJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_DateTime_Instant_toEnum': $v = (($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->toEnum; break;
      case 'Data_DateTime_Instant_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_DateTime_Instant_show': $v = (($GLOBALS['Data_Time_Duration_showMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_showMilliseconds')))->show; break;
      case 'Data_DateTime_Instant_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_DateTime_Instant_greaterThanOrEq': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_DateTime_Instant_negate': $v = \Data\Ring\Data_Ring_negate(($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'))); break;
      case 'Data_DateTime_Instant_lessThanOrEq': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_DateTime_Instant_fromEnum': $v = (($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->fromEnum; break;
      case 'Data_DateTime_Instant_bottom': $v = (($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour')))->bottom; break;
      case 'Data_DateTime_Instant_bottom1': $v = (($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute')))->bottom; break;
      case 'Data_DateTime_Instant_bottom2': $v = (($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond')))->bottom; break;
      case 'Data_DateTime_Instant_bottom3': $v = (($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond')))->bottom; break;
      case 'Data_DateTime_Instant_append1': $v = (($GLOBALS['Data_Time_Duration_semigroupMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupMilliseconds')))->append; break;
      case 'Data_DateTime_Instant_negateDuration': $v = \Data\Time\Duration\Data_Time_Duration_negateDuration(($GLOBALS['Data_Time_Duration_durationMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_durationMilliseconds'))); break;
      case 'Data_DateTime_Instant_toDateTime': $v = (function() use (&$__fn) {
$mkDateTime = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial')))((function() use (&$__fn) {
  $__fn = function($__dollar____unused, $y = null, $mo = null, $d = null, $h = null, $mi = null, $s = null, $ms = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, func_get_args(), 8);
  }
  $__global_Data_Date_canonicalDate = ($GLOBALS['Data_Date_canonicalDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_canonicalDate'));
  $__global_Data_DateTime_Instant_fromJust = ($GLOBALS['Data_DateTime_Instant_fromJust'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromJust'));
  $__global_Data_DateTime_Instant_toEnum = ($GLOBALS['Data_DateTime_Instant_toEnum'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_toEnum'));
  $__res = new Phpurs_Data2("DateTime", ($__global_Data_Date_canonicalDate)($y, ($__global_Data_DateTime_Instant_fromJust)(($__global_Data_DateTime_Instant_toEnum)($mo)), $d), new Phpurs_Data4("Time", $h, $mi, $s, $ms));
  goto __end;;
  __end:
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})());
return (($GLOBALS['Data_DateTime_Instant_toDateTimeImpl'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_toDateTimeImpl')))($mkDateTime);
})(); break;
      case 'Data_DateTime_Instant_showInstant': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_DateTime_Instant_show = ($GLOBALS['Data_DateTime_Instant_show'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_show'));
  $__case_0 = $v;
  if (true) {
$ms = $__case_0;
$__res = ("(Instant " . (($__global_Data_DateTime_Instant_show)($ms) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_DateTime_Instant_ordDateTime': $v = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber')); break;
      case 'Data_DateTime_Instant_eqDateTime': $v = ($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber')); break;
      case 'Data_DateTime_Instant_boundedInstant': $v = (object)["bottom" => (($GLOBALS['Data_DateTime_Instant_negate'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_negate')))(8639977881600000.0), "top" => 8639977881599999.0, "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordNumber = ($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'));
  $__res = $__global_Data_Ord_ordNumber;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };

















// Data_DateTime_Instant_Instant
function Data_DateTime_Instant_Instant($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_Instant';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_Instant'] = __NAMESPACE__ . '\\Data_DateTime_Instant_Instant';

// Data_DateTime_Instant_unInstant
function Data_DateTime_Instant_unInstant($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_unInstant';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$ms = $__case_0;
$__res = $ms;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_unInstant'] = __NAMESPACE__ . '\\Data_DateTime_Instant_unInstant';




// Data_DateTime_Instant_instant
function Data_DateTime_Instant_instant($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_instant';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$ms = $__case_0;
$n = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_instant'] = __NAMESPACE__ . '\\Data_DateTime_Instant_instant';

// Data_DateTime_Instant_fromDateTime
function Data_DateTime_Instant_fromDateTime($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_fromDateTime';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn7 = ($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn7'));
  $__global_Data_DateTime_Instant_fromDateTimeImpl = ($GLOBALS['Data_DateTime_Instant_fromDateTimeImpl'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromDateTimeImpl'));
  $__global_Data_Date_year = ($GLOBALS['Data_Date_year'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_year'));
  $__global_Data_DateTime_Instant_fromEnum = ($GLOBALS['Data_DateTime_Instant_fromEnum'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromEnum'));
  $__global_Data_Date_month = ($GLOBALS['Data_Date_month'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_month'));
  $__global_Data_Date_day = ($GLOBALS['Data_Date_day'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_day'));
  $__global_Data_Time_hour = ($GLOBALS['Data_Time_hour'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_hour'));
  $__global_Data_Time_minute = ($GLOBALS['Data_Time_minute'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minute'));
  $__global_Data_Time_second = ($GLOBALS['Data_Time_second'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_second'));
  $__global_Data_Time_millisecond = ($GLOBALS['Data_Time_millisecond'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisecond'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "DateTime":
$d = ($__case_0)->v0;
$t = ($__case_0)->v1;
$__res = ($__global_Data_Function_Uncurried_runFn7)($__global_Data_DateTime_Instant_fromDateTimeImpl, ($__global_Data_Date_year)($d), ($__global_Data_DateTime_Instant_fromEnum)(($__global_Data_Date_month)($d)), ($__global_Data_Date_day)($d), ($__global_Data_Time_hour)($t), ($__global_Data_Time_minute)($t), ($__global_Data_Time_second)($t), ($__global_Data_Time_millisecond)($t));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_fromDateTime'] = __NAMESPACE__ . '\\Data_DateTime_Instant_fromDateTime';

// Data_DateTime_Instant_fromDate
function Data_DateTime_Instant_fromDate($d) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_fromDate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn7 = ($GLOBALS['Data_Function_Uncurried_runFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn7'));
  $__global_Data_DateTime_Instant_fromDateTimeImpl = ($GLOBALS['Data_DateTime_Instant_fromDateTimeImpl'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromDateTimeImpl'));
  $__global_Data_Date_year = ($GLOBALS['Data_Date_year'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_year'));
  $__global_Data_DateTime_Instant_fromEnum = ($GLOBALS['Data_DateTime_Instant_fromEnum'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_fromEnum'));
  $__global_Data_Date_month = ($GLOBALS['Data_Date_month'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_month'));
  $__global_Data_Date_day = ($GLOBALS['Data_Date_day'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_day'));
  $__global_Data_DateTime_Instant_bottom = ($GLOBALS['Data_DateTime_Instant_bottom'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom'));
  $__global_Data_DateTime_Instant_bottom1 = ($GLOBALS['Data_DateTime_Instant_bottom1'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom1'));
  $__global_Data_DateTime_Instant_bottom2 = ($GLOBALS['Data_DateTime_Instant_bottom2'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom2'));
  $__global_Data_DateTime_Instant_bottom3 = ($GLOBALS['Data_DateTime_Instant_bottom3'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_bottom3'));
  $__res = ($__global_Data_Function_Uncurried_runFn7)($__global_Data_DateTime_Instant_fromDateTimeImpl, ($__global_Data_Date_year)($d), ($__global_Data_DateTime_Instant_fromEnum)(($__global_Data_Date_month)($d)), ($__global_Data_Date_day)($d), $__global_Data_DateTime_Instant_bottom, $__global_Data_DateTime_Instant_bottom1, $__global_Data_DateTime_Instant_bottom2, $__global_Data_DateTime_Instant_bottom3);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_fromDate'] = __NAMESPACE__ . '\\Data_DateTime_Instant_fromDate';


// Data_DateTime_Instant_diff
function Data_DateTime_Instant_diff($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_Instant_diff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_DateTime_Instant_append1 = ($GLOBALS['Data_DateTime_Instant_append1'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_append1'));
  $__global_Data_DateTime_Instant_unInstant = ($GLOBALS['Data_DateTime_Instant_unInstant'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_unInstant'));
  $__global_Data_DateTime_Instant_negateDuration = ($GLOBALS['Data_DateTime_Instant_negateDuration'] ?? \Data\DateTime\Instant\phpurs_eval_thunk('Data_DateTime_Instant_negateDuration'));
  $toDuration = ($dictDuration)->toDuration;
  $__res = (function() use ($toDuration, $__global_Data_DateTime_Instant_append1, $__global_Data_DateTime_Instant_unInstant, $__global_Data_DateTime_Instant_negateDuration, &$__fn) {
  $__fn = function($dt1, $dt2 = null) use ($toDuration, $__global_Data_DateTime_Instant_append1, $__global_Data_DateTime_Instant_unInstant, $__global_Data_DateTime_Instant_negateDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dt2) use ($dt1, &$__fn) { return $__fn($dt1, $dt2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($toDuration)(($__global_Data_DateTime_Instant_append1)(($__global_Data_DateTime_Instant_unInstant)($dt1), ($__global_Data_DateTime_Instant_negateDuration)(($__global_Data_DateTime_Instant_unInstant)($dt2))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_Instant_diff'] = __NAMESPACE__ . '\\Data_DateTime_Instant_diff';


