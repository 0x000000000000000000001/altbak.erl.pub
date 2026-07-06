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
      case 'Data_DateTime_fromEnum': $v = (($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear')))->fromEnum; break;
      case 'Data_DateTime_fromEnum1': $v = (($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->fromEnum; break;
      case 'Data_DateTime_fromEnum2': $v = (($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay')))->fromEnum; break;
      case 'Data_DateTime_fromEnum3': $v = (($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour')))->fromEnum; break;
      case 'Data_DateTime_fromEnum4': $v = (($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute')))->fromEnum; break;
      case 'Data_DateTime_fromEnum5': $v = (($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond')))->fromEnum; break;
      case 'Data_DateTime_fromEnum6': $v = (($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond')))->fromEnum; break;
      case 'Data_DateTime_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_DateTime_show': $v = (($GLOBALS['Data_Date_showDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_showDate')))->show; break;
      case 'Data_DateTime_show1': $v = (($GLOBALS['Data_Time_showTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_showTime')))->show; break;
      case 'Data_DateTime_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_DateTime_eq': $v = (($GLOBALS['Data_Date_eqDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eqDate')))->eq; break;
      case 'Data_DateTime_eq1': $v = (($GLOBALS['Data_Time_eqTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eqTime')))->eq; break;
      case 'Data_DateTime_compare': $v = (($GLOBALS['Data_Date_ordDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_ordDate')))->compare; break;
      case 'Data_DateTime_compare1': $v = (($GLOBALS['Data_Time_ordTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_ordTime')))->compare; break;
      case 'Data_DateTime_bind': $v = (($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe')))->bind; break;
      case 'Data_DateTime_apply': $v = (($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe')))->apply; break;
      case 'Data_DateTime_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_DateTime_join': $v = \Control\Bind\Control_Bind_join(($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe'))); break;
      case 'Data_DateTime_toEnum': $v = (($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear')))->toEnum; break;
      case 'Data_DateTime_toEnum1': $v = (($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->toEnum; break;
      case 'Data_DateTime_toEnum2': $v = (($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay')))->toEnum; break;
      case 'Data_DateTime_toEnum3': $v = (($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour')))->toEnum; break;
      case 'Data_DateTime_toEnum4': $v = (($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute')))->toEnum; break;
      case 'Data_DateTime_toEnum5': $v = (($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond')))->toEnum; break;
      case 'Data_DateTime_toEnum6': $v = (($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond')))->toEnum; break;
      case 'Data_DateTime_showDateTime': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_DateTime_show = ($GLOBALS['Data_DateTime_show'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_show'));
  $__global_Data_DateTime_show1 = ($GLOBALS['Data_DateTime_show1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_show1'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "DateTime":
$d = ($__case_0)->v0;
$t = ($__case_0)->v1;
$__res = ("(DateTime " . (($__global_Data_DateTime_show)($d) . (" " . (($__global_Data_DateTime_show1)($t) . ")"))));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_DateTime_eqDateTime': $v = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__global_Data_DateTime_eq = ($GLOBALS['Data_DateTime_eq'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_eq'));
  $__global_Data_DateTime_eq1 = ($GLOBALS['Data_DateTime_eq1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_eq1'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "DateTime") && (($__case_1)->tag === "DateTime"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_DateTime_eq)($l, $r), ($__global_Data_DateTime_eq1)($l1, $r1));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_DateTime_ordDateTime': $v = (object)["compare" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_DateTime_compare = ($GLOBALS['Data_DateTime_compare'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_compare'));
  $__global_Data_DateTime_compare1 = ($GLOBALS['Data_DateTime_compare1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_compare1'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "DateTime") && (($__case_1)->tag === "DateTime"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($__global_Data_DateTime_compare)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
case "GT":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
$__res = ($__global_Data_DateTime_compare1)($l1, $r1);
goto __end;;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_DateTime_eqDateTime = ($GLOBALS['Data_DateTime_eqDateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_eqDateTime'));
  $__res = $__global_Data_DateTime_eqDateTime;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_DateTime_boundedDateTime': $v = (object)["bottom" => new Phpurs_Data2("DateTime", (($GLOBALS['Data_Date_boundedDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_boundedDate')))->bottom, (($GLOBALS['Data_Time_boundedTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_boundedTime')))->bottom), "top" => new Phpurs_Data2("DateTime", (($GLOBALS['Data_Date_boundedDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_boundedDate')))->top, (($GLOBALS['Data_Time_boundedTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_boundedTime')))->top), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_DateTime_ordDateTime = ($GLOBALS['Data_DateTime_ordDateTime'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_ordDateTime'));
  $__res = $__global_Data_DateTime_ordDateTime;
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




























// Data_DateTime_DateTime
function Data_DateTime_DateTime($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_DateTime';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("DateTime", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_DateTime_DateTime'] = __NAMESPACE__ . '\\Data_DateTime_DateTime';

// Data_DateTime_toRecord
function Data_DateTime_toRecord($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_toRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_DateTime_fromEnum = ($GLOBALS['Data_DateTime_fromEnum'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum'));
  $__global_Data_Date_year = ($GLOBALS['Data_Date_year'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_year'));
  $__global_Data_DateTime_fromEnum1 = ($GLOBALS['Data_DateTime_fromEnum1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum1'));
  $__global_Data_Date_month = ($GLOBALS['Data_Date_month'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_month'));
  $__global_Data_DateTime_fromEnum2 = ($GLOBALS['Data_DateTime_fromEnum2'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum2'));
  $__global_Data_Date_day = ($GLOBALS['Data_Date_day'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_day'));
  $__global_Data_DateTime_fromEnum3 = ($GLOBALS['Data_DateTime_fromEnum3'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum3'));
  $__global_Data_Time_hour = ($GLOBALS['Data_Time_hour'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_hour'));
  $__global_Data_DateTime_fromEnum4 = ($GLOBALS['Data_DateTime_fromEnum4'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum4'));
  $__global_Data_Time_minute = ($GLOBALS['Data_Time_minute'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minute'));
  $__global_Data_DateTime_fromEnum5 = ($GLOBALS['Data_DateTime_fromEnum5'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum5'));
  $__global_Data_Time_second = ($GLOBALS['Data_Time_second'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_second'));
  $__global_Data_DateTime_fromEnum6 = ($GLOBALS['Data_DateTime_fromEnum6'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_fromEnum6'));
  $__global_Data_Time_millisecond = ($GLOBALS['Data_Time_millisecond'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisecond'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "DateTime":
$d = ($__case_0)->v0;
$t = ($__case_0)->v1;
$__res = (object)["year" => ($__global_Data_DateTime_fromEnum)(($__global_Data_Date_year)($d)), "month" => ($__global_Data_DateTime_fromEnum1)(($__global_Data_Date_month)($d)), "day" => ($__global_Data_DateTime_fromEnum2)(($__global_Data_Date_day)($d)), "hour" => ($__global_Data_DateTime_fromEnum3)(($__global_Data_Time_hour)($t)), "minute" => ($__global_Data_DateTime_fromEnum4)(($__global_Data_Time_minute)($t)), "second" => ($__global_Data_DateTime_fromEnum5)(($__global_Data_Time_second)($t)), "millisecond" => ($__global_Data_DateTime_fromEnum6)(($__global_Data_Time_millisecond)($t))];
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_toRecord'] = __NAMESPACE__ . '\\Data_DateTime_toRecord';

// Data_DateTime_time
function Data_DateTime_time($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_time';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "DateTime":
$t = ($__case_0)->v1;
$__res = $t;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_time'] = __NAMESPACE__ . '\\Data_DateTime_time';


// Data_DateTime_modifyTimeF
function Data_DateTime_modifyTimeF($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_modifyTimeF';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map1 = ($dictFunctor)->map;
  $__res = (function() use ($map1, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "DateTime":
$f1 = $__case_0;
$d = ($__case_1)->v0;
$t = ($__case_1)->v1;
$__res = ($map1)(((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("DateTime", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($d), ($f1)($t));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_modifyTimeF'] = __NAMESPACE__ . '\\Data_DateTime_modifyTimeF';

// Data_DateTime_modifyTime
function Data_DateTime_modifyTime($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_modifyTime';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "DateTime":
$f1 = $__case_0;
$d = ($__case_1)->v0;
$t = ($__case_1)->v1;
$__res = new Phpurs_Data2("DateTime", $d, ($f1)($t));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_DateTime_modifyTime'] = __NAMESPACE__ . '\\Data_DateTime_modifyTime';

// Data_DateTime_modifyDateF
function Data_DateTime_modifyDateF($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_modifyDateF';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $map1 = ($dictFunctor)->map;
  $__res = (function() use ($map1, $__global_Data_Function_flip, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "DateTime":
$f1 = $__case_0;
$d = ($__case_1)->v0;
$t = ($__case_1)->v1;
$__res = ($map1)(($__global_Data_Function_flip)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("DateTime", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $t), ($f1)($d));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_modifyDateF'] = __NAMESPACE__ . '\\Data_DateTime_modifyDateF';

// Data_DateTime_modifyDate
function Data_DateTime_modifyDate($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_modifyDate';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "DateTime":
$f1 = $__case_0;
$d = ($__case_1)->v0;
$t = ($__case_1)->v1;
$__res = new Phpurs_Data2("DateTime", ($f1)($d), $t);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_DateTime_modifyDate'] = __NAMESPACE__ . '\\Data_DateTime_modifyDate';



// Data_DateTime_diff
function Data_DateTime_diff($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_diff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Data_DateTime_calcDiff = ($GLOBALS['Data_DateTime_calcDiff'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_calcDiff'));
  $__global_Data_DateTime_toRecord = ($GLOBALS['Data_DateTime_toRecord'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toRecord'));
  $toDuration = ($dictDuration)->toDuration;
  $__res = (function() use ($toDuration, $__global_Data_Function_Uncurried_runFn2, $__global_Data_DateTime_calcDiff, $__global_Data_DateTime_toRecord, &$__fn) {
  $__fn = function($dt1, $dt2 = null) use ($toDuration, $__global_Data_Function_Uncurried_runFn2, $__global_Data_DateTime_calcDiff, $__global_Data_DateTime_toRecord, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dt2) use ($dt1, &$__fn) { return $__fn($dt1, $dt2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($toDuration)(($__global_Data_Function_Uncurried_runFn2)($__global_Data_DateTime_calcDiff, ($__global_Data_DateTime_toRecord)($dt1), ($__global_Data_DateTime_toRecord)($dt2)));
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
$GLOBALS['Data_DateTime_diff'] = __NAMESPACE__ . '\\Data_DateTime_diff';

// Data_DateTime_date
function Data_DateTime_date($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_date';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "DateTime":
$d = ($__case_0)->v0;
$__res = $d;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_DateTime_date'] = __NAMESPACE__ . '\\Data_DateTime_date';


// Data_DateTime_adjust
function Data_DateTime_adjust($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_DateTime_adjust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_DateTime_bind = ($GLOBALS['Data_DateTime_bind'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_bind'));
  $__global_Data_DateTime_adjustImpl = ($GLOBALS['Data_DateTime_adjustImpl'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_adjustImpl'));
  $__global_Data_DateTime_toRecord = ($GLOBALS['Data_DateTime_toRecord'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toRecord'));
  $__global_Data_DateTime_apply = ($GLOBALS['Data_DateTime_apply'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_apply'));
  $__global_Data_DateTime_map = ($GLOBALS['Data_DateTime_map'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_map'));
  $__global_Data_DateTime_join = ($GLOBALS['Data_DateTime_join'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_join'));
  $__global_Data_Date_exactDate = ($GLOBALS['Data_Date_exactDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_exactDate'));
  $__global_Data_DateTime_toEnum = ($GLOBALS['Data_DateTime_toEnum'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum'));
  $__global_Data_DateTime_toEnum1 = ($GLOBALS['Data_DateTime_toEnum1'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum1'));
  $__global_Data_DateTime_toEnum2 = ($GLOBALS['Data_DateTime_toEnum2'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum2'));
  $__global_Data_DateTime_toEnum3 = ($GLOBALS['Data_DateTime_toEnum3'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum3'));
  $__global_Data_DateTime_toEnum4 = ($GLOBALS['Data_DateTime_toEnum4'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum4'));
  $__global_Data_DateTime_toEnum5 = ($GLOBALS['Data_DateTime_toEnum5'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum5'));
  $__global_Data_DateTime_toEnum6 = ($GLOBALS['Data_DateTime_toEnum6'] ?? \Data\DateTime\phpurs_eval_thunk('Data_DateTime_toEnum6'));
  $fromDuration = ($dictDuration)->fromDuration;
  $__res = (function() use ($__global_Data_DateTime_bind, $__global_Data_DateTime_adjustImpl, $fromDuration, $__global_Data_DateTime_toRecord, $__global_Data_DateTime_apply, $__global_Data_DateTime_map, $__global_Data_DateTime_join, $__global_Data_Date_exactDate, $__global_Data_DateTime_toEnum, $__global_Data_DateTime_toEnum1, $__global_Data_DateTime_toEnum2, $__global_Data_DateTime_toEnum3, $__global_Data_DateTime_toEnum4, $__global_Data_DateTime_toEnum5, $__global_Data_DateTime_toEnum6, &$__fn) {
  $__fn = function($d, $dt = null) use ($__global_Data_DateTime_bind, $__global_Data_DateTime_adjustImpl, $fromDuration, $__global_Data_DateTime_toRecord, $__global_Data_DateTime_apply, $__global_Data_DateTime_map, $__global_Data_DateTime_join, $__global_Data_Date_exactDate, $__global_Data_DateTime_toEnum, $__global_Data_DateTime_toEnum1, $__global_Data_DateTime_toEnum2, $__global_Data_DateTime_toEnum3, $__global_Data_DateTime_toEnum4, $__global_Data_DateTime_toEnum5, $__global_Data_DateTime_toEnum6, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dt) use ($d, &$__fn) { return $__fn($d, $dt); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_DateTime_bind)(($__global_Data_DateTime_adjustImpl)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), ($fromDuration)($d), ($__global_Data_DateTime_toRecord)($dt)), function($rec) use ($__global_Data_DateTime_apply, $__global_Data_DateTime_map, $__global_Data_DateTime_join, $__global_Data_Date_exactDate, $__global_Data_DateTime_toEnum, $__global_Data_DateTime_toEnum1, $__global_Data_DateTime_toEnum2, $__global_Data_DateTime_toEnum3, $__global_Data_DateTime_toEnum4, $__global_Data_DateTime_toEnum5, $__global_Data_DateTime_toEnum6) {
  $__num = func_num_args();
  $__res = ($__global_Data_DateTime_apply)(($__global_Data_DateTime_map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("DateTime", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_DateTime_join)(($__global_Data_DateTime_apply)(($__global_Data_DateTime_apply)(($__global_Data_DateTime_map)($__global_Data_Date_exactDate, ($__global_Data_DateTime_toEnum)(($rec)->year)), ($__global_Data_DateTime_toEnum1)(($rec)->month)), ($__global_Data_DateTime_toEnum2)(($rec)->day)))), ($__global_Data_DateTime_apply)(($__global_Data_DateTime_apply)(($__global_Data_DateTime_apply)(($__global_Data_DateTime_map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
    if ($__num === 2) return function($value2, $value3 = null) use ($value0, $value1, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 1) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
      return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
    };
    if ($__num === 1) return function($value1, $value2 = null, $value3 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 2) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
      if ($__num2 === 1) return function($value2, $value3 = null) use ($value0, $value1, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($value0, $value1, $value2, $value3);
        if ($__num3 === 1) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
        return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
      };
      return phpurs_curry_fallback($__fn, [$value0], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = new Phpurs_Data4("Time", $value0, $value1, $value2, $value3);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_DateTime_toEnum3)(($rec)->hour)), ($__global_Data_DateTime_toEnum4)(($rec)->minute)), ($__global_Data_DateTime_toEnum5)(($rec)->second)), ($__global_Data_DateTime_toEnum6)(($rec)->millisecond)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
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
$GLOBALS['Data_DateTime_adjust'] = __NAMESPACE__ . '\\Data_DateTime_adjust';

