<?php

namespace Data\Enum;

// ALL IMPORTS: Control.Alternative, Control.Apply, Control.Bind, Control.MonadPlus, Control.Semigroupoid, Data.Boolean, Data.Bounded, Data.Either, Data.Enum, Data.Eq, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.Maybe, Data.Newtype, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Data.Unit, Partial.Unsafe, Prelude, Prim
// TO REQUIRE: Control.Alternative, Control.Apply, Control.Bind, Control.MonadPlus, Control.Semigroupoid, Data.Boolean, Data.Bounded, Data.Either, Data.Enum, Data.Eq, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.Maybe, Data.Newtype, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Data.Unit, Partial.Unsafe, Prelude
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
\PhpursThunks::$thunks['Data_Enum_guard'] = function() { $v = (($GLOBALS['Control_Alternative_guard'] ?? \PhpursThunks::eval('Control_Alternative_guard')))(($GLOBALS['Data_Maybe_alternativeMaybe'] ?? \PhpursThunks::eval('Data_Maybe_alternativeMaybe'))); return $v; };
\PhpursThunks::$thunks['Data_Enum_fromJust'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Just"))) {
$__t0 = ($v)->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Cardinality'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_toEnum'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->toEnum;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_succ'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->succ;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_upFromIncluding'] = function() { $v = (function() {
  $__fn = function($dictEnum, $dictUnfoldable1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictUnfoldable1)->unfoldr1)(function($x) use (&$dictEnum) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", $x, (($dictEnum)->succ)($x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Enum_showCardinality'] = function() { $v = (object)["show" => function($v) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(Cardinality "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($GLOBALS['Data_Show_showIntImpl'] ?? \PhpursThunks::eval('Data_Show_showIntImpl')))($v)))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_pred'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->pred;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_ordCardinality'] = function() { $v = ($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')); return $v; };
\PhpursThunks::$thunks['Data_Enum_newtypeCardinality'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_fromEnum'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->fromEnum;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_toEnumWithDefaults'] = function() { $v = function($dictBoundedEnum) {
  $__num = \func_num_args();
  $bottom2_0 = ((($dictBoundedEnum)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bottom;
  $__res = (function() use (&$bottom2_0, &$dictBoundedEnum) {
  $__fn = function($low, $high = null, $x = null) use (&$bottom2_0, &$dictBoundedEnum, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $v_1 = (($dictBoundedEnum)->toEnum)($x);
  if ((is_object($v_1) && (($v_1)->tag === "Just"))) {
$__t2 = ($v_1)->value0;
} else {
if ((is_object($v_1) && (($v_1)->tag === "Nothing"))) {
if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))((($dictBoundedEnum)->fromEnum)($bottom2_0))) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))((($dictBoundedEnum)->fromEnum)($bottom2_0)))->tag === "LT"))) {
$__t3 = $low;
} else {
$__t3 = $high;
};
$__t2 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
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
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_eqCardinality'] = function() { $v = ($GLOBALS['Data_Eq_eqInt'] ?? \PhpursThunks::eval('Data_Eq_eqInt')); return $v; };
\PhpursThunks::$thunks['Data_Enum_enumUnit'] = function() { $v = (object)["succ" => function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nothing");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "pred" => function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nothing");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Ord0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Ord_ordUnit'] ?? \PhpursThunks::eval('Data_Ord_ordUnit'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_enumTuple'] = function() { $v = function($dictEnum) {
  $__num = \func_num_args();
  $ordTuple_0 = (($GLOBALS['Data_Tuple_ordTuple'] ?? \PhpursThunks::eval('Data_Tuple_ordTuple')))((($dictEnum)->Ord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictBoundedEnum) use (&$dictEnum, &$ordTuple_0) {
  $__num = \func_num_args();
  $Bounded0_1 = (($dictBoundedEnum)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bottom2_2 = ($Bounded0_1)->bottom;
  $Enum1_3 = (($dictBoundedEnum)->Enum1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $top2_4 = ($Bounded0_1)->top;
  $ordTuple1_5 = ($ordTuple_0)((($Enum1_3)->Ord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["succ" => function($v) use (&$Enum1_3, &$bottom2_2, &$dictEnum) {
  $__num = \func_num_args();
  $__local_var_6 = (($dictEnum)->succ)(($v)->value0);
  if ((is_object($__local_var_6) && (($__local_var_6)->tag === "Just"))) {
$__t7 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($__local_var_6)->value0, $bottom2_2));
} else {
$__t7 = new Phpurs_Data0("Nothing");
};
  $__local_var_8 = $__t7;
  $__local_var_9 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))((($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple')))(($v)->value0));
  $__local_var_10 = (($Enum1_3)->succ)(($v)->value1);
  if ((is_object($__local_var_10) && (($__local_var_10)->tag === "Nothing"))) {
$__t11 = $__local_var_8;
} else {
if ((is_object($__local_var_10) && (($__local_var_10)->tag === "Just"))) {
$__t11 = ($__local_var_9)(($__local_var_10)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t11 = null;
};
};
  $__res = $__t11;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "pred" => function($v) use (&$Enum1_3, &$dictEnum, &$top2_4) {
  $__num = \func_num_args();
  $__local_var_12 = (($dictEnum)->pred)(($v)->value0);
  if ((is_object($__local_var_12) && (($__local_var_12)->tag === "Just"))) {
$__t13 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($__local_var_12)->value0, $top2_4));
} else {
$__t13 = new Phpurs_Data0("Nothing");
};
  $__local_var_14 = $__t13;
  $__local_var_15 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))((($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple')))(($v)->value0));
  $__local_var_16 = (($Enum1_3)->pred)(($v)->value1);
  if ((is_object($__local_var_16) && (($__local_var_16)->tag === "Nothing"))) {
$__t17 = $__local_var_14;
} else {
if ((is_object($__local_var_16) && (($__local_var_16)->tag === "Just"))) {
$__t17 = ($__local_var_15)(($__local_var_16)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t17 = null;
};
};
  $__res = $__t17;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Ord0" => function($dollar__unused_0) use (&$ordTuple1_5) {
  $__num = \func_num_args();
  $__res = $ordTuple1_5;
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
\PhpursThunks::$thunks['Data_Enum_enumOrdering'] = function() { $v = (object)["succ" => function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "LT"))) {
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data0("EQ"));
} else {
if ((is_object($v) && (($v)->tag === "EQ"))) {
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data0("GT"));
} else {
if ((is_object($v) && (($v)->tag === "GT"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "pred" => function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "LT"))) {
$__t1 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "EQ"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data0("LT"));
} else {
if ((is_object($v) && (($v)->tag === "GT"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data0("EQ"));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Ord0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Ord_ordOrdering'] ?? \PhpursThunks::eval('Data_Ord_ordOrdering'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_enumMaybe'] = function() { $v = function($dictBoundedEnum) {
  $__num = \func_num_args();
  $bottom2_0 = ((($dictBoundedEnum)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bottom;
  $Enum1_1 = (($dictBoundedEnum)->Enum1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $ordMaybe_2 = (($GLOBALS['Data_Maybe_ordMaybe'] ?? \PhpursThunks::eval('Data_Maybe_ordMaybe')))((($Enum1_1)->Ord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["succ" => function($v) use (&$Enum1_1, &$bottom2_0) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t3 = new Phpurs_Data1("Just", new Phpurs_Data1("Just", $bottom2_0));
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__local_var_4 = (($Enum1_1)->succ)(($v)->value0);
if ((is_object($__local_var_4) && (($__local_var_4)->tag === "Just"))) {
$__t5 = new Phpurs_Data1("Just", new Phpurs_Data1("Just", ($__local_var_4)->value0));
} else {
$__t5 = new Phpurs_Data0("Nothing");
};
$__t3 = $__t5;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "pred" => function($v) use (&$Enum1_1) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t6 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__t6 = new Phpurs_Data1("Just", (($Enum1_1)->pred)(($v)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = $__t6;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Ord0" => function($dollar__unused_0) use (&$ordMaybe_2) {
  $__num = \func_num_args();
  $__res = $ordMaybe_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_enumInt'] = function() { $v = (object)["succ" => function($n) {
  $__num = \func_num_args();
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(($GLOBALS['Data_Bounded_topInt'] ?? \PhpursThunks::eval('Data_Bounded_topInt')))) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(($GLOBALS['Data_Bounded_topInt'] ?? \PhpursThunks::eval('Data_Bounded_topInt'))))->tag === "LT"))) {
$__t0 = new Phpurs_Data1("Just", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($n))(1));
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "pred" => function($n) {
  $__num = \func_num_args();
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(($GLOBALS['Data_Bounded_bottomInt'] ?? \PhpursThunks::eval('Data_Bounded_bottomInt')))) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(($GLOBALS['Data_Bounded_bottomInt'] ?? \PhpursThunks::eval('Data_Bounded_bottomInt'))))->tag === "GT"))) {
$__t1 = new Phpurs_Data1("Just", ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($n))(1));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Ord0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_enumFromTo'] = function() { $v = function($dictEnum) {
  $__num = \func_num_args();
  $Ord0_0 = (($dictEnum)->Ord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$Ord0_0, &$dictEnum) {
  $__fn = function($dictUnfoldable1, $v = null, $v1 = null) use (&$Ord0_0, &$dictEnum, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((((($Ord0_0)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->eq)($v))($v1)) {
$__t4 = (((($GLOBALS['Data_Unfoldable1_replicate1'] ?? \PhpursThunks::eval('Data_Unfoldable1_replicate1')))($dictUnfoldable1))(1))($v);
} else {
if ((is_object(((($Ord0_0)->compare)($v))($v1)) && ((((($Ord0_0)->compare)($v))($v1))->tag === "LT"))) {
$__t4 = ((($dictUnfoldable1)->unfoldr1)(function($a) use (&$Ord0_0, &$dictEnum, &$v1) {
  $__num = \func_num_args();
  $__local_var_5 = (($dictEnum)->succ)($a);
  if ((is_object($__local_var_5) && (($__local_var_5)->tag === "Just"))) {
if ((is_object((($GLOBALS['Data_Enum_guard'] ?? \PhpursThunks::eval('Data_Enum_guard')))(( ! (is_object(((($Ord0_0)->compare)(($__local_var_5)->value0))($v1)) && ((((($Ord0_0)->compare)(($__local_var_5)->value0))($v1))->tag === "GT"))))) && (((($GLOBALS['Data_Enum_guard'] ?? \PhpursThunks::eval('Data_Enum_guard')))(( ! (is_object(((($Ord0_0)->compare)(($__local_var_5)->value0))($v1)) && ((((($Ord0_0)->compare)(($__local_var_5)->value0))($v1))->tag === "GT")))))->tag === "Just"))) {
$__t7 = new Phpurs_Data1("Just", ($__local_var_5)->value0);
} else {
$__t7 = new Phpurs_Data0("Nothing");
};
$__t6 = $__t7;
} else {
if ((is_object($__local_var_5) && (($__local_var_5)->tag === "Nothing"))) {
$__t6 = new Phpurs_Data0("Nothing");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = new Phpurs_Data2("Tuple", $a, $__t6);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($v);
} else {
$__t4 = ((($dictUnfoldable1)->unfoldr1)(function($a) use (&$Ord0_0, &$dictEnum, &$v1) {
  $__num = \func_num_args();
  $__local_var_1 = (($dictEnum)->pred)($a);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
if ((is_object((($GLOBALS['Data_Enum_guard'] ?? \PhpursThunks::eval('Data_Enum_guard')))(( ! (is_object(((($Ord0_0)->compare)(($__local_var_1)->value0))($v1)) && ((((($Ord0_0)->compare)(($__local_var_1)->value0))($v1))->tag === "LT"))))) && (((($GLOBALS['Data_Enum_guard'] ?? \PhpursThunks::eval('Data_Enum_guard')))(( ! (is_object(((($Ord0_0)->compare)(($__local_var_1)->value0))($v1)) && ((((($Ord0_0)->compare)(($__local_var_1)->value0))($v1))->tag === "LT")))))->tag === "Just"))) {
$__t3 = new Phpurs_Data1("Just", ($__local_var_1)->value0);
} else {
$__t3 = new Phpurs_Data0("Nothing");
};
$__t2 = $__t3;
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nothing"))) {
$__t2 = new Phpurs_Data0("Nothing");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = new Phpurs_Data2("Tuple", $a, $__t2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($v);
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_enumFromThenTo'] = function() { $v = (function() {
  $__fn = function($dictUnfoldable, $dictFunctor = null, $dictBoundedEnum = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $toEnum1_0 = ($dictBoundedEnum)->toEnum;
  $__res = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))((function() use (&$dictBoundedEnum, &$dictFunctor, &$dictUnfoldable, &$toEnum1_0) {
  $__fn = function($dollar__unused_0, $a = null, $b = null, $c = null) use (&$dictBoundedEnum, &$dictFunctor, &$dictUnfoldable, &$toEnum1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $a__prime___1 = (($dictBoundedEnum)->fromEnum)($a);
  $__local_var_2 = ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($dictBoundedEnum)->fromEnum)($b)))($a__prime___1);
  $__local_var_3 = (($dictBoundedEnum)->fromEnum)($c);
  $__res = ((($dictFunctor)->map)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Enum_fromJust'] ?? \PhpursThunks::eval('Data_Enum_fromJust'))))($toEnum1_0)))(((($dictUnfoldable)->unfoldr)(function($e) use (&$__local_var_2, &$__local_var_3) {
  $__num = \func_num_args();
  if (( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($e))($__local_var_3)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($e))($__local_var_3))->tag === "GT")))) {
$__t4 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", $e, ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($e))($__local_var_2)));
} else {
$__t4 = new Phpurs_Data0("Nothing");
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($a__prime___1));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Enum_enumEither'] = function() { $v = function($dictBoundedEnum) {
  $__num = \func_num_args();
  $Enum1_0 = (($dictBoundedEnum)->Enum1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $top2_1 = ((($dictBoundedEnum)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->top;
  $ordEither_2 = (($GLOBALS['Data_Either_ordEither'] ?? \PhpursThunks::eval('Data_Either_ordEither')))((($Enum1_0)->Ord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictBoundedEnum1) use (&$Enum1_0, &$ordEither_2, &$top2_1) {
  $__num = \func_num_args();
  $bottom2_3 = ((($dictBoundedEnum1)->Bounded0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bottom;
  $Enum11_4 = (($dictBoundedEnum1)->Enum1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $ordEither1_5 = ($ordEither_2)((($Enum11_4)->Ord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["succ" => function($v) use (&$Enum1_0, &$Enum11_4, &$bottom2_3) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__local_var_7 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')));
$__local_var_8 = (($Enum1_0)->succ)(($v)->value0);
if ((is_object($__local_var_8) && (($__local_var_8)->tag === "Nothing"))) {
$__t9 = new Phpurs_Data1("Just", new Phpurs_Data1("Right", $bottom2_3));
} else {
if ((is_object($__local_var_8) && (($__local_var_8)->tag === "Just"))) {
$__t9 = ($__local_var_7)(($__local_var_8)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t9 = null;
};
};
$__t6 = $__t9;
} else {
if ((is_object($v) && (($v)->tag === "Right"))) {
$__local_var_10 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')));
$__local_var_11 = (($Enum11_4)->succ)(($v)->value0);
if ((is_object($__local_var_11) && (($__local_var_11)->tag === "Nothing"))) {
$__t12 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($__local_var_11) && (($__local_var_11)->tag === "Just"))) {
$__t12 = ($__local_var_10)(($__local_var_11)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t12 = null;
};
};
$__t6 = $__t12;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = $__t6;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "pred" => function($v) use (&$Enum1_0, &$Enum11_4, &$top2_1) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__local_var_14 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')));
$__local_var_15 = (($Enum1_0)->pred)(($v)->value0);
if ((is_object($__local_var_15) && (($__local_var_15)->tag === "Nothing"))) {
$__t16 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($__local_var_15) && (($__local_var_15)->tag === "Just"))) {
$__t16 = ($__local_var_14)(($__local_var_15)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t16 = null;
};
};
$__t13 = $__t16;
} else {
if ((is_object($v) && (($v)->tag === "Right"))) {
$__local_var_17 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')));
$__local_var_18 = (($Enum11_4)->pred)(($v)->value0);
if ((is_object($__local_var_18) && (($__local_var_18)->tag === "Nothing"))) {
$__t19 = new Phpurs_Data1("Just", new Phpurs_Data1("Left", $top2_1));
} else {
if ((is_object($__local_var_18) && (($__local_var_18)->tag === "Just"))) {
$__t19 = ($__local_var_17)(($__local_var_18)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t19 = null;
};
};
$__t13 = $__t19;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t13 = null;
};
};
  $__res = $__t13;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Ord0" => function($dollar__unused_0) use (&$ordEither1_5) {
  $__num = \func_num_args();
  $__res = $ordEither1_5;
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
\PhpursThunks::$thunks['Data_Enum_enumBoolean'] = function() { $v = (object)["succ" => function($v) {
  $__num = \func_num_args();
  if (( ! $v)) {
$__t0 = new Phpurs_Data1("Just", true);
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "pred" => function($v) {
  $__num = \func_num_args();
  if ($v) {
$__t1 = new Phpurs_Data1("Just", false);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Ord0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Ord_ordBoolean'] ?? \PhpursThunks::eval('Data_Ord_ordBoolean'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_downFromIncluding'] = function() { $v = (function() {
  $__fn = function($dictEnum, $dictUnfoldable1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictUnfoldable1)->unfoldr1)(function($x) use (&$dictEnum) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", $x, (($dictEnum)->pred)($x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Enum_downFrom'] = function() { $v = function($dictEnum) {
  $__num = \func_num_args();
  $pred1_0 = ($dictEnum)->pred;
  $__res = function($dictUnfoldable) use (&$pred1_0) {
  $__num = \func_num_args();
  $__res = (($dictUnfoldable)->unfoldr)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v1) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($v1)->value0, ($v1)->value0));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($pred1_0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_upFrom'] = function() { $v = function($dictEnum) {
  $__num = \func_num_args();
  $succ1_0 = ($dictEnum)->succ;
  $__res = function($dictUnfoldable) use (&$succ1_0) {
  $__num = \func_num_args();
  $__res = (($dictUnfoldable)->unfoldr)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v1) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($v1)->value0, ($v1)->value0));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($succ1_0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_defaultToEnum'] = function() { $v = function($dictBounded) {
  $__num = \func_num_args();
  $bottom2_0 = ($dictBounded)->bottom;
  $__res = (function() use (&$bottom2_0) {
  $__fn = function($dictEnum, $i__prime__ = null) use (&$bottom2_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$dictEnum, &$go) {
  $__fn = function($i, $x = null) use (&$dictEnum, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))($i))(0)) {
$__t3 = new Phpurs_Data1("Just", $x);
} else {
$v_1 = (($dictEnum)->succ)($x);
if ((is_object($v_1) && (($v_1)->tag === "Just"))) {
$__t2 = (($go)(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($i))(1)))(($v_1)->value0);
} else {
if ((is_object($v_1) && (($v_1)->tag === "Nothing"))) {
$__t2 = new Phpurs_Data0("Nothing");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t3 = $__t2;
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($i__prime__))(0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($i__prime__))(0))->tag === "LT"))) {
$__t4 = new Phpurs_Data0("Nothing");
} else {
$__t4 = (($go)($i__prime__))($bottom2_0);
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_defaultSucc'] = function() { $v = (function() {
  $__fn = function($toEnum__prime__, $fromEnum__prime__ = null, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($toEnum__prime__)(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($fromEnum__prime__)($a)))(1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Enum_defaultPred'] = function() { $v = (function() {
  $__fn = function($toEnum__prime__, $fromEnum__prime__ = null, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($toEnum__prime__)(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))(($fromEnum__prime__)($a)))(1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Enum_defaultFromEnum'] = function() { $v = function($dictEnum) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$dictEnum, &$go) {
  $__fn = function($i, $x = null) use (&$dictEnum, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_0 = (($dictEnum)->pred)($x);
  if ((is_object($v_0) && (($v_0)->tag === "Just"))) {
$__t1 = (($go)(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($i))(1)))(($v_0)->value0);
} else {
if ((is_object($v_0) && (($v_0)->tag === "Nothing"))) {
$__t1 = $i;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_defaultCardinality'] = function() { $v = function($dictBounded) {
  $__num = \func_num_args();
  $bottom2_0 = ($dictBounded)->bottom;
  $__res = function($dictEnum) use (&$bottom2_0) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$dictEnum, &$go) {
  $__fn = function($i, $x = null) use (&$dictEnum, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_1 = (($dictEnum)->succ)($x);
  if ((is_object($v_1) && (($v_1)->tag === "Just"))) {
$__t2 = (($go)(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($i))(1)))(($v_1)->value0);
} else {
if ((is_object($v_1) && (($v_1)->tag === "Nothing"))) {
$__t2 = $i;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = (($go)(1))($bottom2_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_charToEnum'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if (((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))((($GLOBALS['Data_Enum_toCharCode'] ?? \PhpursThunks::eval('Data_Enum_toCharCode')))(($GLOBALS['Data_Bounded_bottomChar'] ?? \PhpursThunks::eval('Data_Bounded_bottomChar'))))) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))((($GLOBALS['Data_Enum_toCharCode'] ?? \PhpursThunks::eval('Data_Enum_toCharCode')))(($GLOBALS['Data_Bounded_bottomChar'] ?? \PhpursThunks::eval('Data_Bounded_bottomChar')))))->tag === "LT")))))(( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))((($GLOBALS['Data_Enum_toCharCode'] ?? \PhpursThunks::eval('Data_Enum_toCharCode')))(($GLOBALS['Data_Bounded_topChar'] ?? \PhpursThunks::eval('Data_Bounded_topChar'))))) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))((($GLOBALS['Data_Enum_toCharCode'] ?? \PhpursThunks::eval('Data_Enum_toCharCode')))(($GLOBALS['Data_Bounded_topChar'] ?? \PhpursThunks::eval('Data_Bounded_topChar')))))->tag === "GT"))))) {
$__t0 = new Phpurs_Data1("Just", (($GLOBALS['Data_Enum_fromCharCode'] ?? \PhpursThunks::eval('Data_Enum_fromCharCode')))($v));
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_enumChar'] = function() { $v = (object)["succ" => ((($GLOBALS['Data_Enum_defaultSucc'] ?? \PhpursThunks::eval('Data_Enum_defaultSucc')))(($GLOBALS['Data_Enum_charToEnum'] ?? \PhpursThunks::eval('Data_Enum_charToEnum'))))(($GLOBALS['Data_Enum_toCharCode'] ?? \PhpursThunks::eval('Data_Enum_toCharCode'))), "pred" => ((($GLOBALS['Data_Enum_defaultPred'] ?? \PhpursThunks::eval('Data_Enum_defaultPred')))(($GLOBALS['Data_Enum_charToEnum'] ?? \PhpursThunks::eval('Data_Enum_charToEnum'))))(($GLOBALS['Data_Enum_toCharCode'] ?? \PhpursThunks::eval('Data_Enum_toCharCode'))), "Ord0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Ord_ordChar'] ?? \PhpursThunks::eval('Data_Ord_ordChar'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_cardinality'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->cardinality;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_boundedEnumUnit'] = function() { $v = (object)["cardinality" => 1, "toEnum" => function($v) {
  $__num = \func_num_args();
  switch ($v) {
case 0:
$__t0 = new Phpurs_Data1("Just", ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
break;
default:
$__t0 = new Phpurs_Data0("Nothing");
break;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = \func_num_args();
  $__res = 0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bounded0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bounded_boundedUnit'] ?? \PhpursThunks::eval('Data_Bounded_boundedUnit'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Enum1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Enum_enumUnit'] ?? \PhpursThunks::eval('Data_Enum_enumUnit'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_boundedEnumOrdering'] = function() { $v = (object)["cardinality" => 3, "toEnum" => function($v) {
  $__num = \func_num_args();
  switch ($v) {
case 0:
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data0("LT"));
break;
case 1:
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data0("EQ"));
break;
case 2:
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data0("GT"));
break;
default:
$__t0 = new Phpurs_Data0("Nothing");
break;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "LT"))) {
$__t1 = 0;
} else {
if ((is_object($v) && (($v)->tag === "EQ"))) {
$__t1 = 1;
} else {
if ((is_object($v) && (($v)->tag === "GT"))) {
$__t1 = 2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bounded0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bounded_boundedOrdering'] ?? \PhpursThunks::eval('Data_Bounded_boundedOrdering'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Enum1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Enum_enumOrdering'] ?? \PhpursThunks::eval('Data_Enum_enumOrdering'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_boundedEnumChar'] = function() { $v = (object)["cardinality" => ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_Enum_toCharCode'] ?? \PhpursThunks::eval('Data_Enum_toCharCode')))(($GLOBALS['Data_Bounded_topChar'] ?? \PhpursThunks::eval('Data_Bounded_topChar')))))((($GLOBALS['Data_Enum_toCharCode'] ?? \PhpursThunks::eval('Data_Enum_toCharCode')))(($GLOBALS['Data_Bounded_bottomChar'] ?? \PhpursThunks::eval('Data_Bounded_bottomChar')))), "toEnum" => ($GLOBALS['Data_Enum_charToEnum'] ?? \PhpursThunks::eval('Data_Enum_charToEnum')), "fromEnum" => ($GLOBALS['Data_Enum_toCharCode'] ?? \PhpursThunks::eval('Data_Enum_toCharCode')), "Bounded0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bounded_boundedChar'] ?? \PhpursThunks::eval('Data_Bounded_boundedChar'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Enum1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Enum_enumChar'] ?? \PhpursThunks::eval('Data_Enum_enumChar'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_boundedEnumBoolean'] = function() { $v = (object)["cardinality" => 2, "toEnum" => function($v) {
  $__num = \func_num_args();
  switch ($v) {
case 0:
$__t0 = new Phpurs_Data1("Just", false);
break;
case 1:
$__t0 = new Phpurs_Data1("Just", true);
break;
default:
$__t0 = new Phpurs_Data0("Nothing");
break;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = \func_num_args();
  if (( ! $v)) {
$__t1 = 0;
} else {
if ($v) {
$__t1 = 1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bounded0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bounded_boundedBoolean'] ?? \PhpursThunks::eval('Data_Bounded_boundedBoolean'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Enum1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Enum_enumBoolean'] ?? \PhpursThunks::eval('Data_Enum_enumBoolean'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };







































