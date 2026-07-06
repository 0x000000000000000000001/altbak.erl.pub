<?php

namespace Data\Date\Component;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
      case 'Data_Date_Component_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Date_Component_show': $v = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl')); break;
      case 'Data_Date_Component_negate': $v = \Data\Ring\Data_Ring_negate(($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'))); break;
      case 'Data_Date_Component_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Date_Component_greaterThanOrEq': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Date_Component_lessThanOrEq': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Date_Component_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Date_Component_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Date_Component_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Date_Component_Monday': $v = ($GLOBALS['__phpurs_data0_Monday'] ??= new Phpurs_Data0("Monday")); break;
      case 'Data_Date_Component_Tuesday': $v = ($GLOBALS['__phpurs_data0_Tuesday'] ??= new Phpurs_Data0("Tuesday")); break;
      case 'Data_Date_Component_Wednesday': $v = ($GLOBALS['__phpurs_data0_Wednesday'] ??= new Phpurs_Data0("Wednesday")); break;
      case 'Data_Date_Component_Thursday': $v = ($GLOBALS['__phpurs_data0_Thursday'] ??= new Phpurs_Data0("Thursday")); break;
      case 'Data_Date_Component_Friday': $v = ($GLOBALS['__phpurs_data0_Friday'] ??= new Phpurs_Data0("Friday")); break;
      case 'Data_Date_Component_Saturday': $v = ($GLOBALS['__phpurs_data0_Saturday'] ??= new Phpurs_Data0("Saturday")); break;
      case 'Data_Date_Component_Sunday': $v = ($GLOBALS['__phpurs_data0_Sunday'] ??= new Phpurs_Data0("Sunday")); break;
      case 'Data_Date_Component_January': $v = ($GLOBALS['__phpurs_data0_January'] ??= new Phpurs_Data0("January")); break;
      case 'Data_Date_Component_February': $v = ($GLOBALS['__phpurs_data0_February'] ??= new Phpurs_Data0("February")); break;
      case 'Data_Date_Component_March': $v = ($GLOBALS['__phpurs_data0_March'] ??= new Phpurs_Data0("March")); break;
      case 'Data_Date_Component_April': $v = ($GLOBALS['__phpurs_data0_April'] ??= new Phpurs_Data0("April")); break;
      case 'Data_Date_Component_May': $v = ($GLOBALS['__phpurs_data0_May'] ??= new Phpurs_Data0("May")); break;
      case 'Data_Date_Component_June': $v = ($GLOBALS['__phpurs_data0_June'] ??= new Phpurs_Data0("June")); break;
      case 'Data_Date_Component_July': $v = ($GLOBALS['__phpurs_data0_July'] ??= new Phpurs_Data0("July")); break;
      case 'Data_Date_Component_August': $v = ($GLOBALS['__phpurs_data0_August'] ??= new Phpurs_Data0("August")); break;
      case 'Data_Date_Component_September': $v = ($GLOBALS['__phpurs_data0_September'] ??= new Phpurs_Data0("September")); break;
      case 'Data_Date_Component_October': $v = ($GLOBALS['__phpurs_data0_October'] ??= new Phpurs_Data0("October")); break;
      case 'Data_Date_Component_November': $v = ($GLOBALS['__phpurs_data0_November'] ??= new Phpurs_Data0("November")); break;
      case 'Data_Date_Component_December': $v = ($GLOBALS['__phpurs_data0_December'] ??= new Phpurs_Data0("December")); break;
      case 'Data_Date_Component_showYear': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Show_showIntImpl = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl'));
  $__case_0 = $v;
  if (true) {
$y = $__case_0;
$__res = ("(Year " . (($__global_Data_Show_showIntImpl)($y) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_showWeekday': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Monday":
$__res = "Monday";
goto __end;;
break;
case "Tuesday":
$__res = "Tuesday";
goto __end;;
break;
case "Wednesday":
$__res = "Wednesday";
goto __end;;
break;
case "Thursday":
$__res = "Thursday";
goto __end;;
break;
case "Friday":
$__res = "Friday";
goto __end;;
break;
case "Saturday":
$__res = "Saturday";
goto __end;;
break;
case "Sunday":
$__res = "Sunday";
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_showMonth': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "January":
$__res = "January";
goto __end;;
break;
case "February":
$__res = "February";
goto __end;;
break;
case "March":
$__res = "March";
goto __end;;
break;
case "April":
$__res = "April";
goto __end;;
break;
case "May":
$__res = "May";
goto __end;;
break;
case "June":
$__res = "June";
goto __end;;
break;
case "July":
$__res = "July";
goto __end;;
break;
case "August":
$__res = "August";
goto __end;;
break;
case "September":
$__res = "September";
goto __end;;
break;
case "October":
$__res = "October";
goto __end;;
break;
case "November":
$__res = "November";
goto __end;;
break;
case "December":
$__res = "December";
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_showDay': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Show_showIntImpl = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl'));
  $__case_0 = $v;
  if (true) {
$d = $__case_0;
$__res = ("(Day " . (($__global_Data_Show_showIntImpl)($d) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_ordYear': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Date_Component_ordDay': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Date_Component_eqYear': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Date_Component_eqWeekday': $v = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "Monday") && (($__case_1)->tag === "Monday"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "Tuesday") && (($__case_1)->tag === "Tuesday"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "Wednesday") && (($__case_1)->tag === "Wednesday"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "Thursday") && (($__case_1)->tag === "Thursday"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "Friday") && (($__case_1)->tag === "Friday"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "Saturday") && (($__case_1)->tag === "Saturday"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "Sunday") && (($__case_1)->tag === "Sunday"))) {
$__res = true;
goto __end;;
} else {
if (true) {
$__res = false;
goto __end;;
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
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Date_Component_ordWeekday': $v = (object)["compare" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "Monday") && (($__case_1)->tag === "Monday"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "Monday")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "Monday")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "Tuesday") && (($__case_1)->tag === "Tuesday"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "Tuesday")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "Tuesday")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "Wednesday") && (($__case_1)->tag === "Wednesday"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "Wednesday")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "Wednesday")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "Thursday") && (($__case_1)->tag === "Thursday"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "Thursday")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "Thursday")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "Friday") && (($__case_1)->tag === "Friday"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "Friday")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "Friday")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "Saturday") && (($__case_1)->tag === "Saturday"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "Saturday")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "Saturday")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "Sunday") && (($__case_1)->tag === "Sunday"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
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
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_eqWeekday = ($GLOBALS['Data_Date_Component_eqWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_eqWeekday'));
  $__res = $__global_Data_Date_Component_eqWeekday;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_eqMonth': $v = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "January") && (($__case_1)->tag === "January"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "February") && (($__case_1)->tag === "February"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "March") && (($__case_1)->tag === "March"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "April") && (($__case_1)->tag === "April"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "May") && (($__case_1)->tag === "May"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "June") && (($__case_1)->tag === "June"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "July") && (($__case_1)->tag === "July"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "August") && (($__case_1)->tag === "August"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "September") && (($__case_1)->tag === "September"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "October") && (($__case_1)->tag === "October"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "November") && (($__case_1)->tag === "November"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "December") && (($__case_1)->tag === "December"))) {
$__res = true;
goto __end;;
} else {
if (true) {
$__res = false;
goto __end;;
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
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Date_Component_ordMonth': $v = (object)["compare" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "January") && (($__case_1)->tag === "January"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "January")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "January")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "February") && (($__case_1)->tag === "February"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "February")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "February")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "March") && (($__case_1)->tag === "March"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "March")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "March")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "April") && (($__case_1)->tag === "April"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "April")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "April")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "May") && (($__case_1)->tag === "May"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "May")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "May")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "June") && (($__case_1)->tag === "June"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "June")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "June")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "July") && (($__case_1)->tag === "July"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "July")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "July")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "August") && (($__case_1)->tag === "August"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "August")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "August")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "September") && (($__case_1)->tag === "September"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "September")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "September")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "October") && (($__case_1)->tag === "October"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "October")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "October")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "November") && (($__case_1)->tag === "November"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "November")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "November")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "December") && (($__case_1)->tag === "December"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
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
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_eqMonth = ($GLOBALS['Data_Date_Component_eqMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_eqMonth'));
  $__res = $__global_Data_Date_Component_eqMonth;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_eqDay': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Date_Component_boundedYear': $v = (object)["bottom" => (($GLOBALS['Data_Date_Component_negate'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_negate')))(271820), "top" => 275759, "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_boundedWeekday': $v = (object)["bottom" => ($GLOBALS['__phpurs_data0_Monday'] ??= new Phpurs_Data0("Monday")), "top" => ($GLOBALS['__phpurs_data0_Sunday'] ??= new Phpurs_Data0("Sunday")), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_ordWeekday = ($GLOBALS['Data_Date_Component_ordWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordWeekday'));
  $__res = $__global_Data_Date_Component_ordWeekday;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_boundedMonth': $v = (object)["bottom" => ($GLOBALS['__phpurs_data0_January'] ??= new Phpurs_Data0("January")), "top" => ($GLOBALS['__phpurs_data0_December'] ??= new Phpurs_Data0("December")), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_ordMonth = ($GLOBALS['Data_Date_Component_ordMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordMonth'));
  $__res = $__global_Data_Date_Component_ordMonth;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_boundedEnumYear': $v = (object)["cardinality" => 547580, "toEnum" => function($n) {
  $__num = func_num_args();
  $__case_0 = $n;
  if (true) {
$n1 = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$n = $__case_0;
$__res = $n;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bounded0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_boundedYear = ($GLOBALS['Data_Date_Component_boundedYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedYear'));
  $__res = $__global_Data_Date_Component_boundedYear;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Enum1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_enumYear = ($GLOBALS['Data_Date_Component_enumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumYear'));
  $__res = $__global_Data_Date_Component_enumYear;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_enumYear': $v = (object)["succ" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear')))->toEnum, (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v + 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear')))->fromEnum)), "pred" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear')))->toEnum, (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v - 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear')))->fromEnum)), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_boundedEnumWeekday': $v = (object)["cardinality" => 7, "toEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch ($__case_0) {
case 1:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_Monday'] ??= new Phpurs_Data0("Monday")));
goto __end;;
break;
case 2:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_Tuesday'] ??= new Phpurs_Data0("Tuesday")));
goto __end;;
break;
case 3:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_Wednesday'] ??= new Phpurs_Data0("Wednesday")));
goto __end;;
break;
case 4:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_Thursday'] ??= new Phpurs_Data0("Thursday")));
goto __end;;
break;
case 5:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_Friday'] ??= new Phpurs_Data0("Friday")));
goto __end;;
break;
case 6:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_Saturday'] ??= new Phpurs_Data0("Saturday")));
goto __end;;
break;
case 7:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_Sunday'] ??= new Phpurs_Data0("Sunday")));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Monday":
$__res = 1;
goto __end;;
break;
case "Tuesday":
$__res = 2;
goto __end;;
break;
case "Wednesday":
$__res = 3;
goto __end;;
break;
case "Thursday":
$__res = 4;
goto __end;;
break;
case "Friday":
$__res = 5;
goto __end;;
break;
case "Saturday":
$__res = 6;
goto __end;;
break;
case "Sunday":
$__res = 7;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bounded0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_boundedWeekday = ($GLOBALS['Data_Date_Component_boundedWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedWeekday'));
  $__res = $__global_Data_Date_Component_boundedWeekday;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Enum1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_enumWeekday = ($GLOBALS['Data_Date_Component_enumWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumWeekday'));
  $__res = $__global_Data_Date_Component_enumWeekday;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_enumWeekday': $v = (object)["succ" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Date_Component_boundedEnumWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumWeekday')))->toEnum, (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v + 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Date_Component_boundedEnumWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumWeekday')))->fromEnum)), "pred" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Date_Component_boundedEnumWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumWeekday')))->toEnum, (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v - 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Date_Component_boundedEnumWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumWeekday')))->fromEnum)), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_ordWeekday = ($GLOBALS['Data_Date_Component_ordWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordWeekday'));
  $__res = $__global_Data_Date_Component_ordWeekday;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_boundedEnumMonth': $v = (object)["cardinality" => 12, "toEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch ($__case_0) {
case 1:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_January'] ??= new Phpurs_Data0("January")));
goto __end;;
break;
case 2:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_February'] ??= new Phpurs_Data0("February")));
goto __end;;
break;
case 3:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_March'] ??= new Phpurs_Data0("March")));
goto __end;;
break;
case 4:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_April'] ??= new Phpurs_Data0("April")));
goto __end;;
break;
case 5:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_May'] ??= new Phpurs_Data0("May")));
goto __end;;
break;
case 6:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_June'] ??= new Phpurs_Data0("June")));
goto __end;;
break;
case 7:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_July'] ??= new Phpurs_Data0("July")));
goto __end;;
break;
case 8:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_August'] ??= new Phpurs_Data0("August")));
goto __end;;
break;
case 9:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_September'] ??= new Phpurs_Data0("September")));
goto __end;;
break;
case 10:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_October'] ??= new Phpurs_Data0("October")));
goto __end;;
break;
case 11:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_November'] ??= new Phpurs_Data0("November")));
goto __end;;
break;
case 12:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_December'] ??= new Phpurs_Data0("December")));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "January":
$__res = 1;
goto __end;;
break;
case "February":
$__res = 2;
goto __end;;
break;
case "March":
$__res = 3;
goto __end;;
break;
case "April":
$__res = 4;
goto __end;;
break;
case "May":
$__res = 5;
goto __end;;
break;
case "June":
$__res = 6;
goto __end;;
break;
case "July":
$__res = 7;
goto __end;;
break;
case "August":
$__res = 8;
goto __end;;
break;
case "September":
$__res = 9;
goto __end;;
break;
case "October":
$__res = 10;
goto __end;;
break;
case "November":
$__res = 11;
goto __end;;
break;
case "December":
$__res = 12;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bounded0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_boundedMonth = ($GLOBALS['Data_Date_Component_boundedMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedMonth'));
  $__res = $__global_Data_Date_Component_boundedMonth;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Enum1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_enumMonth = ($GLOBALS['Data_Date_Component_enumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumMonth'));
  $__res = $__global_Data_Date_Component_enumMonth;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_enumMonth': $v = (object)["succ" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->toEnum, (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v + 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->fromEnum)), "pred" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->toEnum, (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v - 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->fromEnum)), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_ordMonth = ($GLOBALS['Data_Date_Component_ordMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordMonth'));
  $__res = $__global_Data_Date_Component_ordMonth;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_boundedDay': $v = (object)["bottom" => 1, "top" => 31, "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_boundedEnumDay': $v = (object)["cardinality" => 31, "toEnum" => function($n) {
  $__num = func_num_args();
  $__case_0 = $n;
  if (true) {
$n1 = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$n = $__case_0;
$__res = $n;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bounded0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_boundedDay = ($GLOBALS['Data_Date_Component_boundedDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedDay'));
  $__res = $__global_Data_Date_Component_boundedDay;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Enum1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_Component_enumDay = ($GLOBALS['Data_Date_Component_enumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumDay'));
  $__res = $__global_Data_Date_Component_enumDay;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_Component_enumDay': $v = (object)["succ" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay')))->toEnum, (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v + 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay')))->fromEnum)), "pred" => (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))((($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay')))->toEnum, (($GLOBALS['Data_Date_Component_compose'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v - 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay')))->fromEnum)), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
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











// Data_Date_Component_Year
function Data_Date_Component_Year($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Year';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Component_Year'] = __NAMESPACE__ . '\\Data_Date_Component_Year';




















// Data_Date_Component_Day
function Data_Date_Component_Day($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Component_Day';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Component_Day'] = __NAMESPACE__ . '\\Data_Date_Component_Day';

























