<?php

namespace Data\Interval\Duration;

// ALL IMPORTS: Control.Semigroupoid, Data.Eq, Data.EuclideanRing, Data.Interval.Duration, Data.Map, Data.Map.Internal, Data.Monoid, Data.Newtype, Data.Ord, Data.Ordering, Data.Semigroup, Data.Semiring, Data.Show, Prelude, Prim
// TO REQUIRE: Control.Semigroupoid, Data.Eq, Data.EuclideanRing, Data.Interval.Duration, Data.Map, Data.Map.Internal, Data.Monoid, Data.Newtype, Data.Ord, Data.Ordering, Data.Semigroup, Data.Semiring, Data.Show, Prelude
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

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $value0; public function __construct($t, $value0) { $this->tag = $t; $this->value0 = $value0; } }
  class Phpurs_Data2 { public $tag; public $value0, $value1; public function __construct($t, $value0, $value1) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; } }
  class Phpurs_Data3 { public $tag; public $value0, $value1, $value2; public function __construct($t, $value0, $value1, $value2) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; } }
  class Phpurs_Data4 { public $tag; public $value0, $value1, $value2, $value3; public function __construct($t, $value0, $value1, $value2, $value3) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; } }
  class Phpurs_Data5 { public $tag; public $value0, $value1, $value2, $value3, $value4; public function __construct($t, $value0, $value1, $value2, $value3, $value4) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; $this->value4 = $value4; } }
  class Phpurs_Data6 { public $tag; public $value0, $value1, $value2, $value3, $value4, $value5; public function __construct($t, $value0, $value1, $value2, $value3, $value4, $value5) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; $this->value4 = $value4; $this->value5 = $value5; } }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - \count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num > 1) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = \array_merge($args, $more);
      if (\count($merged) >= $expected) {
        $res = $fn(...\array_slice($merged, 0, $expected));
        if (\count($merged) > $expected) {
          return $res(...\array_slice($merged, $expected));
        }
        return $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
\PhpursThunks::$thunks['Data_Interval_Duration_Second'] = function() { $v = ($GLOBALS['__phpurs_data0_Second'] ??= new Phpurs_Data0("Second")); return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_Minute'] = function() { $v = ($GLOBALS['__phpurs_data0_Minute'] ??= new Phpurs_Data0("Minute")); return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_Hour'] = function() { $v = ($GLOBALS['__phpurs_data0_Hour'] ??= new Phpurs_Data0("Hour")); return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_Day'] = function() { $v = ($GLOBALS['__phpurs_data0_Day'] ??= new Phpurs_Data0("Day")); return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_Week'] = function() { $v = ($GLOBALS['__phpurs_data0_Week'] ??= new Phpurs_Data0("Week")); return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_Month'] = function() { $v = ($GLOBALS['__phpurs_data0_Month'] ??= new Phpurs_Data0("Month")); return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_Year'] = function() { $v = ($GLOBALS['__phpurs_data0_Year'] ??= new Phpurs_Data0("Year")); return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_Duration'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_showDurationComponent'] = function() { $v = (object)["show" => function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Minute"))) {
$__t0 = "Minute";
} else {
if ((is_object($v) && (($v)->tag === "Second"))) {
$__t0 = "Second";
} else {
if ((is_object($v) && (($v)->tag === "Hour"))) {
$__t0 = "Hour";
} else {
if ((is_object($v) && (($v)->tag === "Day"))) {
$__t0 = "Day";
} else {
if ((is_object($v) && (($v)->tag === "Week"))) {
$__t0 = "Week";
} else {
if ((is_object($v) && (($v)->tag === "Month"))) {
$__t0 = "Month";
} else {
if ((is_object($v) && (($v)->tag === "Year"))) {
$__t0 = "Year";
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
};
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_show'] = function() { $v = (((($GLOBALS['Data_Map_Internal_showMap'] ?? \PhpursThunks::eval('Data_Map_Internal_showMap')))(($GLOBALS['Data_Interval_Duration_showDurationComponent'] ?? \PhpursThunks::eval('Data_Interval_Duration_showDurationComponent'))))(($GLOBALS['Data_Show_showNumber'] ?? \PhpursThunks::eval('Data_Show_showNumber'))))->show; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_showDuration'] = function() { $v = (object)["show" => function($v) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(Duration "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($GLOBALS['Data_Interval_Duration_show'] ?? \PhpursThunks::eval('Data_Interval_Duration_show')))($v)))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_newtypeDuration'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_eqDurationComponent'] = function() { $v = (object)["eq" => (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($x) && (($x)->tag === "Second"))) {
$__t0 = (is_object($y) && (($y)->tag === "Second"));
} else {
if ((is_object($x) && (($x)->tag === "Minute"))) {
$__t0 = (is_object($y) && (($y)->tag === "Minute"));
} else {
if ((is_object($x) && (($x)->tag === "Hour"))) {
$__t0 = (is_object($y) && (($y)->tag === "Hour"));
} else {
if ((is_object($x) && (($x)->tag === "Day"))) {
$__t0 = (is_object($y) && (($y)->tag === "Day"));
} else {
if ((is_object($x) && (($x)->tag === "Week"))) {
$__t0 = (is_object($y) && (($y)->tag === "Week"));
} else {
if ((is_object($x) && (($x)->tag === "Month"))) {
$__t0 = (is_object($y) && (($y)->tag === "Month"));
} else {
$__t0 = ((is_object($x) && (($x)->tag === "Year")) && (is_object($y) && (($y)->tag === "Year")));
};
};
};
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_eq'] = function() { $v = (((($GLOBALS['Data_Map_Internal_eqMap'] ?? \PhpursThunks::eval('Data_Map_Internal_eqMap')))(($GLOBALS['Data_Interval_Duration_eqDurationComponent'] ?? \PhpursThunks::eval('Data_Interval_Duration_eqDurationComponent'))))(($GLOBALS['Data_Eq_eqNumber'] ?? \PhpursThunks::eval('Data_Eq_eqNumber'))))->eq; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_ordDurationComponent'] = function() { $v = (object)["compare" => (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($x) && (($x)->tag === "Second"))) {
if ((is_object($y) && (($y)->tag === "Second"))) {
$__t1 = new Phpurs_Data0("EQ");
} else {
$__t1 = new Phpurs_Data0("LT");
};
$__t0 = $__t1;
} else {
if ((is_object($y) && (($y)->tag === "Second"))) {
$__t0 = new Phpurs_Data0("GT");
} else {
if ((is_object($x) && (($x)->tag === "Minute"))) {
if ((is_object($y) && (($y)->tag === "Minute"))) {
$__t2 = new Phpurs_Data0("EQ");
} else {
$__t2 = new Phpurs_Data0("LT");
};
$__t0 = $__t2;
} else {
if ((is_object($y) && (($y)->tag === "Minute"))) {
$__t0 = new Phpurs_Data0("GT");
} else {
if ((is_object($x) && (($x)->tag === "Hour"))) {
if ((is_object($y) && (($y)->tag === "Hour"))) {
$__t3 = new Phpurs_Data0("EQ");
} else {
$__t3 = new Phpurs_Data0("LT");
};
$__t0 = $__t3;
} else {
if ((is_object($y) && (($y)->tag === "Hour"))) {
$__t0 = new Phpurs_Data0("GT");
} else {
if ((is_object($x) && (($x)->tag === "Day"))) {
if ((is_object($y) && (($y)->tag === "Day"))) {
$__t4 = new Phpurs_Data0("EQ");
} else {
$__t4 = new Phpurs_Data0("LT");
};
$__t0 = $__t4;
} else {
if ((is_object($y) && (($y)->tag === "Day"))) {
$__t0 = new Phpurs_Data0("GT");
} else {
if ((is_object($x) && (($x)->tag === "Week"))) {
if ((is_object($y) && (($y)->tag === "Week"))) {
$__t5 = new Phpurs_Data0("EQ");
} else {
$__t5 = new Phpurs_Data0("LT");
};
$__t0 = $__t5;
} else {
if ((is_object($y) && (($y)->tag === "Week"))) {
$__t0 = new Phpurs_Data0("GT");
} else {
if ((is_object($x) && (($x)->tag === "Month"))) {
if ((is_object($y) && (($y)->tag === "Month"))) {
$__t6 = new Phpurs_Data0("EQ");
} else {
$__t6 = new Phpurs_Data0("LT");
};
$__t0 = $__t6;
} else {
if ((is_object($y) && (($y)->tag === "Month"))) {
$__t0 = new Phpurs_Data0("GT");
} else {
if (((is_object($x) && (($x)->tag === "Year")) && (is_object($y) && (($y)->tag === "Year")))) {
$__t0 = new Phpurs_Data0("EQ");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
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
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_Duration_eqDurationComponent'] ?? \PhpursThunks::eval('Data_Interval_Duration_eqDurationComponent'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_compare'] = function() { $v = (((($GLOBALS['Data_Map_Internal_ordMap'] ?? \PhpursThunks::eval('Data_Map_Internal_ordMap')))(($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \PhpursThunks::eval('Data_Interval_Duration_ordDurationComponent'))))(($GLOBALS['Data_Ord_ordNumber'] ?? \PhpursThunks::eval('Data_Ord_ordNumber'))))->compare; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_semigroupDuration'] = function() { $v = (object)["append" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))((($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \PhpursThunks::eval('Data_Interval_Duration_ordDurationComponent')))->compare))(($GLOBALS['Data_Semiring_numAdd'] ?? \PhpursThunks::eval('Data_Semiring_numAdd'))))($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_monoidDuration'] = function() { $v = (object)["mempty" => new Phpurs_Data0("Leaf"), "Semigroup0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_Duration_semigroupDuration'] ?? \PhpursThunks::eval('Data_Interval_Duration_semigroupDuration'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_eqDuration'] = function() { $v = (object)["eq" => (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Interval_Duration_eq'] ?? \PhpursThunks::eval('Data_Interval_Duration_eq')))($x))($y);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_ordDuration'] = function() { $v = (object)["compare" => (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Interval_Duration_compare'] ?? \PhpursThunks::eval('Data_Interval_Duration_compare')))($x))($y);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_Duration_eqDuration'] ?? \PhpursThunks::eval('Data_Interval_Duration_eqDuration'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_hour'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data6("Node", 1, 1, new Phpurs_Data0("Hour"), $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_millisecond'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data6("Node", 1, 1, new Phpurs_Data0("Second"), $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(function($v) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_EuclideanRing_numDiv'] ?? \PhpursThunks::eval('Data_EuclideanRing_numDiv')))($v))(1000.0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_minute'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data6("Node", 1, 1, new Phpurs_Data0("Minute"), $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_month'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data6("Node", 1, 1, new Phpurs_Data0("Month"), $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_second'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data6("Node", 1, 1, new Phpurs_Data0("Second"), $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_week'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data6("Node", 1, 1, new Phpurs_Data0("Week"), $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_year'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data6("Node", 1, 1, new Phpurs_Data0("Year"), $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_Duration_day'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data6("Node", 1, 1, new Phpurs_Data0("Day"), $v, new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };






























