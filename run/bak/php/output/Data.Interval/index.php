<?php

namespace Data\Interval;

// ALL IMPORTS: Control.Applicative, Control.Apply, Control.Category, Control.Extend, Control.Semigroupoid, Data.Bifoldable, Data.Bifunctor, Data.Bitraversable, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.Interval, Data.Interval.Duration, Data.Maybe, Data.Ord, Data.Ordering, Data.Semigroup, Data.Show, Data.Traversable, Prelude, Prim
// TO REQUIRE: Control.Applicative, Control.Apply, Control.Category, Control.Extend, Control.Semigroupoid, Data.Bifoldable, Data.Bifunctor, Data.Bitraversable, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.Interval, Data.Interval.Duration, Data.Maybe, Data.Ord, Data.Ordering, Data.Semigroup, Data.Show, Data.Traversable, Prelude
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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
\PhpursThunks::$thunks['Data_Interval_show'] = function() { $v = ((($GLOBALS['Data_Maybe_showMaybe'] ?? \PhpursThunks::eval('Data_Maybe_showMaybe')))(($GLOBALS['Data_Show_showInt'] ?? \PhpursThunks::eval('Data_Show_showInt'))))->show; return $v; };
\PhpursThunks::$thunks['Data_Interval_eq'] = function() { $v = (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($x) && (($x)->tag === "Nothing"))) {
$__t0 = (is_object($y) && (($y)->tag === "Nothing"));
} else {
$__t0 = ((is_object($x) && (($x)->tag === "Just")) && ((is_object($y) && (($y)->tag === "Just")) && ((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))(($x)->value0))(($y)->value0)));
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_compare'] = function() { $v = ((($GLOBALS['Data_Maybe_ordMaybe'] ?? \PhpursThunks::eval('Data_Maybe_ordMaybe')))(($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt'))))->compare; return $v; };
\PhpursThunks::$thunks['Data_Interval_StartEnd'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_DurationEnd'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_StartDuration'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("StartDuration", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_DurationOnly'] = function() { $v = function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("DurationOnly", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_RecurringInterval'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_showInterval'] = function() { $v = (function() {
  $__fn = function($dictShow, $dictShow1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["show" => function($v) use (&$dictShow, &$dictShow1) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "StartEnd"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(StartEnd "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow1)->show)(($v)->value0)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(" "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow1)->show)(($v)->value1)))(")"))));
} else {
if ((is_object($v) && (($v)->tag === "DurationEnd"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(DurationEnd "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value0)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(" "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow1)->show)(($v)->value1)))(")"))));
} else {
if ((is_object($v) && (($v)->tag === "StartDuration"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(StartDuration "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow1)->show)(($v)->value0)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(" "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value1)))(")"))));
} else {
if ((is_object($v) && (($v)->tag === "DurationOnly"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(DurationOnly "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value0)))(")"));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_showRecurringInterval'] = function() { $v = (function() {
  $__fn = function($dictShow, $dictShow1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["show" => function($v) use (&$dictShow, &$dictShow1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(RecurringInterval "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($GLOBALS['Data_Interval_show'] ?? \PhpursThunks::eval('Data_Interval_show')))(($v)->value0)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(" "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(((((($GLOBALS['Data_Interval_showInterval'] ?? \PhpursThunks::eval('Data_Interval_showInterval')))($dictShow))($dictShow1))->show)(($v)->value1)))(")"))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_over'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictFunctor)->map)((($GLOBALS['Data_Interval_RecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_RecurringInterval')))(($v)->value0)))(($f)(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_interval'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_foldableInterval'] = function() { $v = (object)["foldl" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "StartEnd"))) {
$__t0 = (($v)((($v)($v1))(($v2)->value0)))(($v2)->value1);
} else {
if ((is_object($v2) && (($v2)->tag === "DurationEnd"))) {
$__t0 = (($v)($v1))(($v2)->value1);
} else {
if ((is_object($v2) && (($v2)->tag === "StartDuration"))) {
$__t0 = (($v)($v1))(($v2)->value0);
} else {
$__t0 = $v1;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr" => function($x) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Foldable_foldrDefault'] ?? \PhpursThunks::eval('Data_Foldable_foldrDefault')))(($GLOBALS['Data_Interval_foldableInterval'] ?? \PhpursThunks::eval('Data_Interval_foldableInterval'))))($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Foldable_foldMapDefaultL'] ?? \PhpursThunks::eval('Data_Foldable_foldMapDefaultL')))(($GLOBALS['Data_Interval_foldableInterval'] ?? \PhpursThunks::eval('Data_Interval_foldableInterval'))))($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_foldableRecurringInterval'] = function() { $v = (object)["foldl" => (function() {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v2) use (&$f, &$i) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "StartEnd"))) {
$__t0 = (($f)((($f)($i))(($v2)->value0)))(($v2)->value1);
} else {
if ((is_object($v2) && (($v2)->tag === "DurationEnd"))) {
$__t0 = (($f)($i))(($v2)->value1);
} else {
if ((is_object($v2) && (($v2)->tag === "StartDuration"))) {
$__t0 = (($f)($i))(($v2)->value0);
} else {
$__t0 = $i;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['Data_Interval_interval'] ?? \PhpursThunks::eval('Data_Interval_interval')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Data_Foldable_foldrDefault'] ?? \PhpursThunks::eval('Data_Foldable_foldrDefault')))(($GLOBALS['Data_Interval_foldableInterval'] ?? \PhpursThunks::eval('Data_Interval_foldableInterval'))))($f))($i)))(($GLOBALS['Data_Interval_interval'] ?? \PhpursThunks::eval('Data_Interval_interval')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Foldable_foldMapDefaultL'] ?? \PhpursThunks::eval('Data_Foldable_foldMapDefaultL')))(($GLOBALS['Data_Interval_foldableRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_foldableRecurringInterval'))))($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_eqInterval'] = function() { $v = (function() {
  $__fn = function($dictEq, $dictEq1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["eq" => (function() use (&$dictEq, &$dictEq1) {
  $__fn = function($x, $y = null) use (&$dictEq, &$dictEq1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($x) && (($x)->tag === "StartEnd"))) {
$__t0 = ((is_object($y) && (($y)->tag === "StartEnd")) && ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($dictEq1)->eq)(($x)->value0))(($y)->value0)))(((($dictEq1)->eq)(($x)->value1))(($y)->value1)));
} else {
if ((is_object($x) && (($x)->tag === "DurationEnd"))) {
$__t0 = ((is_object($y) && (($y)->tag === "DurationEnd")) && ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($dictEq)->eq)(($x)->value0))(($y)->value0)))(((($dictEq1)->eq)(($x)->value1))(($y)->value1)));
} else {
if ((is_object($x) && (($x)->tag === "StartDuration"))) {
$__t0 = ((is_object($y) && (($y)->tag === "StartDuration")) && ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($dictEq1)->eq)(($x)->value0))(($y)->value0)))(((($dictEq)->eq)(($x)->value1))(($y)->value1)));
} else {
$__t0 = ((is_object($x) && (($x)->tag === "DurationOnly")) && ((is_object($y) && (($y)->tag === "DurationOnly")) && ((($dictEq)->eq)(($x)->value0))(($y)->value0)));
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_eqRecurringInterval'] = function() { $v = (function() {
  $__fn = function($dictEq, $dictEq1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["eq" => (function() use (&$dictEq, &$dictEq1) {
  $__fn = function($x, $y = null) use (&$dictEq, &$dictEq1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($GLOBALS['Data_Interval_eq'] ?? \PhpursThunks::eval('Data_Interval_eq')))(($x)->value0))(($y)->value0)))((((((($GLOBALS['Data_Interval_eqInterval'] ?? \PhpursThunks::eval('Data_Interval_eqInterval')))($dictEq))($dictEq1))->eq)(($x)->value1))(($y)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Interval_ordInterval'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $eqInterval1_0 = (($GLOBALS['Data_Interval_eqInterval'] ?? \PhpursThunks::eval('Data_Interval_eqInterval')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd1) use (&$dictOrd, &$eqInterval1_0) {
  $__num = \func_num_args();
  $eqInterval2_1 = ($eqInterval1_0)((($dictOrd1)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["compare" => (function() use (&$dictOrd, &$dictOrd1) {
  $__fn = function($x, $y = null) use (&$dictOrd, &$dictOrd1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($x) && (($x)->tag === "StartEnd"))) {
if ((is_object($y) && (($y)->tag === "StartEnd"))) {
$v_4 = ((($dictOrd1)->compare)(($x)->value0))(($y)->value0);
if ((is_object($v_4) && (($v_4)->tag === "LT"))) {
$__t5 = new Phpurs_Data0("LT");
} else {
if ((is_object($v_4) && (($v_4)->tag === "GT"))) {
$__t5 = new Phpurs_Data0("GT");
} else {
$__t5 = ((($dictOrd1)->compare)(($x)->value1))(($y)->value1);
};
};
$__t3 = $__t5;
} else {
$__t3 = new Phpurs_Data0("LT");
};
$__t2 = $__t3;
} else {
if ((is_object($y) && (($y)->tag === "StartEnd"))) {
$__t2 = new Phpurs_Data0("GT");
} else {
if ((is_object($x) && (($x)->tag === "DurationEnd"))) {
if ((is_object($y) && (($y)->tag === "DurationEnd"))) {
$v_7 = ((($dictOrd)->compare)(($x)->value0))(($y)->value0);
if ((is_object($v_7) && (($v_7)->tag === "LT"))) {
$__t8 = new Phpurs_Data0("LT");
} else {
if ((is_object($v_7) && (($v_7)->tag === "GT"))) {
$__t8 = new Phpurs_Data0("GT");
} else {
$__t8 = ((($dictOrd1)->compare)(($x)->value1))(($y)->value1);
};
};
$__t6 = $__t8;
} else {
$__t6 = new Phpurs_Data0("LT");
};
$__t2 = $__t6;
} else {
if ((is_object($y) && (($y)->tag === "DurationEnd"))) {
$__t2 = new Phpurs_Data0("GT");
} else {
if ((is_object($x) && (($x)->tag === "StartDuration"))) {
if ((is_object($y) && (($y)->tag === "StartDuration"))) {
$v_10 = ((($dictOrd1)->compare)(($x)->value0))(($y)->value0);
if ((is_object($v_10) && (($v_10)->tag === "LT"))) {
$__t11 = new Phpurs_Data0("LT");
} else {
if ((is_object($v_10) && (($v_10)->tag === "GT"))) {
$__t11 = new Phpurs_Data0("GT");
} else {
$__t11 = ((($dictOrd)->compare)(($x)->value1))(($y)->value1);
};
};
$__t9 = $__t11;
} else {
$__t9 = new Phpurs_Data0("LT");
};
$__t2 = $__t9;
} else {
if ((is_object($y) && (($y)->tag === "StartDuration"))) {
$__t2 = new Phpurs_Data0("GT");
} else {
if (((is_object($x) && (($x)->tag === "DurationOnly")) && (is_object($y) && (($y)->tag === "DurationOnly")))) {
$__t2 = ((($dictOrd)->compare)(($x)->value0))(($y)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
};
};
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqInterval2_1) {
  $__num = \func_num_args();
  $__res = $eqInterval2_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_ordRecurringInterval'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $ordInterval1_0 = (($GLOBALS['Data_Interval_ordInterval'] ?? \PhpursThunks::eval('Data_Interval_ordInterval')))($dictOrd);
  $eqRecurringInterval1_1 = (($GLOBALS['Data_Interval_eqRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_eqRecurringInterval')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd1) use (&$eqRecurringInterval1_1, &$ordInterval1_0) {
  $__num = \func_num_args();
  $eqRecurringInterval2_2 = ($eqRecurringInterval1_1)((($dictOrd1)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["compare" => (function() use (&$dictOrd1, &$ordInterval1_0) {
  $__fn = function($x, $y = null) use (&$dictOrd1, &$ordInterval1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_3 = ((($GLOBALS['Data_Interval_compare'] ?? \PhpursThunks::eval('Data_Interval_compare')))(($x)->value0))(($y)->value0);
  if ((is_object($v_3) && (($v_3)->tag === "LT"))) {
$__t4 = new Phpurs_Data0("LT");
} else {
if ((is_object($v_3) && (($v_3)->tag === "GT"))) {
$__t4 = new Phpurs_Data0("GT");
} else {
$__t4 = (((($ordInterval1_0)($dictOrd1))->compare)(($x)->value1))(($y)->value1);
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqRecurringInterval2_2) {
  $__num = \func_num_args();
  $__res = $eqRecurringInterval2_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Interval_bifunctorInterval'] = function() { $v = (object)["bimap" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "StartEnd"))) {
$__t0 = new Phpurs_Data2("StartEnd", ($v1)(($v2)->value0), ($v1)(($v2)->value1));
} else {
if ((is_object($v2) && (($v2)->tag === "DurationEnd"))) {
$__t0 = new Phpurs_Data2("DurationEnd", ($v)(($v2)->value0), ($v1)(($v2)->value1));
} else {
if ((is_object($v2) && (($v2)->tag === "StartDuration"))) {
$__t0 = new Phpurs_Data2("StartDuration", ($v1)(($v2)->value0), ($v)(($v2)->value1));
} else {
if ((is_object($v2) && (($v2)->tag === "DurationOnly"))) {
$__t0 = new Phpurs_Data1("DurationOnly", ($v)(($v2)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Interval_bifunctorRecurringInterval'] = function() { $v = (object)["bimap" => (function() {
  $__fn = function($f, $g = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object(($v)->value1) && ((($v)->value1)->tag === "StartEnd"))) {
$__t0 = new Phpurs_Data2("StartEnd", ($g)((($v)->value1)->value0), ($g)((($v)->value1)->value1));
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "DurationEnd"))) {
$__t0 = new Phpurs_Data2("DurationEnd", ($f)((($v)->value1)->value0), ($g)((($v)->value1)->value1));
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "StartDuration"))) {
$__t0 = new Phpurs_Data2("StartDuration", ($g)((($v)->value1)->value0), ($f)((($v)->value1)->value1));
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "DurationOnly"))) {
$__t0 = new Phpurs_Data1("DurationOnly", ($f)((($v)->value1)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
};
  $__res = new Phpurs_Data2("RecurringInterval", ($v)->value0, $__t0);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Interval_functorInterval'] = function() { $v = (object)["map" => (function() {
  $__fn = function($v1, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v2) && (($v2)->tag === "StartEnd"))) {
$__t0 = new Phpurs_Data2("StartEnd", ($v1)(($v2)->value0), ($v1)(($v2)->value1));
} else {
if ((is_object($v2) && (($v2)->tag === "DurationEnd"))) {
$__t0 = new Phpurs_Data2("DurationEnd", ($v2)->value0, ($v1)(($v2)->value1));
} else {
if ((is_object($v2) && (($v2)->tag === "StartDuration"))) {
$__t0 = new Phpurs_Data2("StartDuration", ($v1)(($v2)->value0), ($v2)->value1);
} else {
if ((is_object($v2) && (($v2)->tag === "DurationOnly"))) {
$__t0 = new Phpurs_Data1("DurationOnly", ($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
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
\PhpursThunks::$thunks['Data_Interval_extendInterval'] = function() { $v = (object)["extend" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "StartEnd"))) {
$__t0 = new Phpurs_Data2("StartEnd", ($v)($v1), ($v)($v1));
} else {
if ((is_object($v1) && (($v1)->tag === "DurationEnd"))) {
$__t0 = new Phpurs_Data2("DurationEnd", ($v1)->value0, ($v)($v1));
} else {
if ((is_object($v1) && (($v1)->tag === "StartDuration"))) {
$__t0 = new Phpurs_Data2("StartDuration", ($v)($v1), ($v1)->value1);
} else {
if ((is_object($v1) && (($v1)->tag === "DurationOnly"))) {
$__t0 = new Phpurs_Data1("DurationOnly", ($v1)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
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
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_functorInterval'] ?? \PhpursThunks::eval('Data_Interval_functorInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_functorRecurringInterval'] = function() { $v = (object)["map" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object(($v)->value1) && ((($v)->value1)->tag === "StartEnd"))) {
$__t0 = new Phpurs_Data2("StartEnd", ($f)((($v)->value1)->value0), ($f)((($v)->value1)->value1));
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "DurationEnd"))) {
$__t0 = new Phpurs_Data2("DurationEnd", (($v)->value1)->value0, ($f)((($v)->value1)->value1));
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "StartDuration"))) {
$__t0 = new Phpurs_Data2("StartDuration", ($f)((($v)->value1)->value0), (($v)->value1)->value1);
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "DurationOnly"))) {
$__t0 = new Phpurs_Data1("DurationOnly", (($v)->value1)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
};
  $__res = new Phpurs_Data2("RecurringInterval", ($v)->value0, $__t0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Interval_extendRecurringInterval'] = function() { $v = (object)["extend" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = ($f)($v);
  if ((is_object(($v)->value1) && ((($v)->value1)->tag === "StartEnd"))) {
$__t1 = new Phpurs_Data2("StartEnd", $__local_var_0, $__local_var_0);
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "DurationEnd"))) {
$__t1 = new Phpurs_Data2("DurationEnd", (($v)->value1)->value0, $__local_var_0);
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "StartDuration"))) {
$__t1 = new Phpurs_Data2("StartDuration", $__local_var_0, (($v)->value1)->value1);
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "DurationOnly"))) {
$__t1 = new Phpurs_Data1("DurationOnly", (($v)->value1)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
};
};
  $__res = new Phpurs_Data2("RecurringInterval", ($v)->value0, $__t1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_functorRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_functorRecurringInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_traversableInterval'] = function() { $v = (object)["traverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Functor0_1 = (($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$Apply0_0, &$Functor0_1, &$dictApplicative) {
  $__fn = function($v, $v1 = null) use (&$Apply0_0, &$Functor0_1, &$dictApplicative, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "StartEnd"))) {
$__t2 = ((($Apply0_0)->apply)(((($Functor0_1)->map)(($GLOBALS['Data_Interval_StartEnd'] ?? \PhpursThunks::eval('Data_Interval_StartEnd'))))(($v)(($v1)->value0))))(($v)(($v1)->value1));
} else {
if ((is_object($v1) && (($v1)->tag === "DurationEnd"))) {
$__t2 = ((($Functor0_1)->map)((($GLOBALS['Data_Interval_DurationEnd'] ?? \PhpursThunks::eval('Data_Interval_DurationEnd')))(($v1)->value0)))(($v)(($v1)->value1));
} else {
if ((is_object($v1) && (($v1)->tag === "StartDuration"))) {
$__local_var_3 = ($v1)->value1;
$__t2 = ((($Functor0_1)->map)(function($v2) use (&$__local_var_3) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("StartDuration", $v2, $__local_var_3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($v)(($v1)->value0));
} else {
if ((is_object($v1) && (($v1)->tag === "DurationOnly"))) {
$__t2 = (($dictApplicative)->pure)(new Phpurs_Data1("DurationOnly", ($v1)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Interval_traversableInterval'] ?? \PhpursThunks::eval('Data_Interval_traversableInterval')))->traverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_functorInterval'] ?? \PhpursThunks::eval('Data_Interval_functorInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_foldableInterval'] ?? \PhpursThunks::eval('Data_Interval_foldableInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_traversableRecurringInterval'] = function() { $v = (object)["traverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $over1_0 = (($GLOBALS['Data_Interval_over'] ?? \PhpursThunks::eval('Data_Interval_over')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traverse1_1 = ((($GLOBALS['Data_Interval_traversableInterval'] ?? \PhpursThunks::eval('Data_Interval_traversableInterval')))->traverse)($dictApplicative);
  $__res = (function() use (&$over1_0, &$traverse1_1) {
  $__fn = function($f, $i = null) use (&$over1_0, &$traverse1_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($over1_0)(($traverse1_1)($f)))($i);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Interval_traversableRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_traversableRecurringInterval')))->traverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_functorRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_functorRecurringInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_foldableRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_foldableRecurringInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_bifoldableInterval'] = function() { $v = (object)["bifoldl" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($v3) && (($v3)->tag === "StartEnd"))) {
$__t0 = (($v1)((($v1)($v2))(($v3)->value0)))(($v3)->value1);
} else {
if ((is_object($v3) && (($v3)->tag === "DurationEnd"))) {
$__t0 = (($v1)((($v)($v2))(($v3)->value0)))(($v3)->value1);
} else {
if ((is_object($v3) && (($v3)->tag === "StartDuration"))) {
$__t0 = (($v1)((($v)($v2))(($v3)->value1)))(($v3)->value0);
} else {
if ((is_object($v3) && (($v3)->tag === "DurationOnly"))) {
$__t0 = (($v)($v2))(($v3)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => function($x) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Bifoldable_bifoldrDefault'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldrDefault')))(($GLOBALS['Data_Interval_bifoldableInterval'] ?? \PhpursThunks::eval('Data_Interval_bifoldableInterval'))))($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "bifoldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Bifoldable_bifoldMapDefaultL'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldMapDefaultL')))(($GLOBALS['Data_Interval_bifoldableInterval'] ?? \PhpursThunks::eval('Data_Interval_bifoldableInterval'))))($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_bifoldableRecurringInterval'] = function() { $v = (object)["bifoldl" => (function() {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v3) use (&$f, &$g, &$i) {
  $__num = \func_num_args();
  if ((is_object($v3) && (($v3)->tag === "StartEnd"))) {
$__t0 = (($g)((($g)($i))(($v3)->value0)))(($v3)->value1);
} else {
if ((is_object($v3) && (($v3)->tag === "DurationEnd"))) {
$__t0 = (($g)((($f)($i))(($v3)->value0)))(($v3)->value1);
} else {
if ((is_object($v3) && (($v3)->tag === "StartDuration"))) {
$__t0 = (($g)((($f)($i))(($v3)->value1)))(($v3)->value0);
} else {
if ((is_object($v3) && (($v3)->tag === "DurationOnly"))) {
$__t0 = (($f)($i))(($v3)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['Data_Interval_interval'] ?? \PhpursThunks::eval('Data_Interval_interval')));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((((($GLOBALS['Data_Bifoldable_bifoldrDefault'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldrDefault')))(($GLOBALS['Data_Interval_bifoldableInterval'] ?? \PhpursThunks::eval('Data_Interval_bifoldableInterval'))))($f))($g))($i)))(($GLOBALS['Data_Interval_interval'] ?? \PhpursThunks::eval('Data_Interval_interval')));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Bifoldable_bifoldMapDefaultL'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldMapDefaultL')))(($GLOBALS['Data_Interval_bifoldableRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_bifoldableRecurringInterval'))))($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_bitraversableInterval'] = function() { $v = (object)["bitraverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$Apply0_0, &$__local_var_1) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$Apply0_0, &$__local_var_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "StartEnd"))) {
$__t2 = ((($Apply0_0)->apply)(((($__local_var_1)->map)(($GLOBALS['Data_Interval_StartEnd'] ?? \PhpursThunks::eval('Data_Interval_StartEnd'))))(($v1)(($v2)->value0))))(($v1)(($v2)->value1));
} else {
if ((is_object($v2) && (($v2)->tag === "DurationEnd"))) {
$__t2 = ((($Apply0_0)->apply)(((($__local_var_1)->map)(($GLOBALS['Data_Interval_DurationEnd'] ?? \PhpursThunks::eval('Data_Interval_DurationEnd'))))(($v)(($v2)->value0))))(($v1)(($v2)->value1));
} else {
if ((is_object($v2) && (($v2)->tag === "StartDuration"))) {
$__t2 = ((($Apply0_0)->apply)(((($__local_var_1)->map)(($GLOBALS['Data_Interval_StartDuration'] ?? \PhpursThunks::eval('Data_Interval_StartDuration'))))(($v1)(($v2)->value0))))(($v)(($v2)->value1));
} else {
if ((is_object($v2) && (($v2)->tag === "DurationOnly"))) {
$__t2 = ((($__local_var_1)->map)(($GLOBALS['Data_Interval_DurationOnly'] ?? \PhpursThunks::eval('Data_Interval_DurationOnly'))))(($v)(($v2)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Data_Interval_bitraversableInterval'] ?? \PhpursThunks::eval('Data_Interval_bitraversableInterval')))->bitraverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_bifunctorInterval'] ?? \PhpursThunks::eval('Data_Interval_bifunctorInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \PhpursThunks::eval('Data_Interval_bifoldableInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Interval_bitraversableRecurringInterval'] = function() { $v = (object)["bitraverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $over1_0 = (($GLOBALS['Data_Interval_over'] ?? \PhpursThunks::eval('Data_Interval_over')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $bitraverse1_1 = ((($GLOBALS['Data_Interval_bitraversableInterval'] ?? \PhpursThunks::eval('Data_Interval_bitraversableInterval')))->bitraverse)($dictApplicative);
  $__res = (function() use (&$bitraverse1_1, &$over1_0) {
  $__fn = function($l, $r = null, $i = null) use (&$bitraverse1_1, &$over1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($over1_0)((($bitraverse1_1)($l))($r)))($i);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Data_Interval_bitraversableRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_bitraversableRecurringInterval')))->bitraverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_bifunctorRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_bifunctorRecurringInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Interval_bifoldableRecurringInterval'] ?? \PhpursThunks::eval('Data_Interval_bifoldableRecurringInterval'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
































