<?php

namespace Data\Maybe;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Extend, Control.Monad, Control.Plus, Data.Bounded, Data.Eq, Data.Function, Data.Functor, Data.Functor.Invariant, Data.Generic.Rep, Data.Maybe, Data.Monoid, Data.Ord, Data.Ordering, Data.Semigroup, Data.Semiring, Data.Show, Data.Unit, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Extend, Control.Monad, Control.Plus, Data.Bounded, Data.Eq, Data.Function, Data.Functor, Data.Functor.Invariant, Data.Generic.Rep, Data.Maybe, Data.Monoid, Data.Ord, Data.Ordering, Data.Semigroup, Data.Semiring, Data.Show, Data.Unit, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
\PhpursThunks::$thunks['Data_Maybe_Nothing'] = function() { $v = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")); return $v; };
\PhpursThunks::$thunks['Data_Maybe_Just'] = function() { $v = function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_showMaybe'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($v) use (&$dictShow) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Just"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(Just "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value0)))(")"));
} else {
if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t0 = "Nothing";
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_semigroupMaybe'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($v, $v1 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t0 = $v1;
} else {
if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t0 = $v;
} else {
if (((is_object($v) && (($v)->tag === "Just")) && (is_object($v1) && (($v1)->tag === "Just")))) {
$__t0 = new Phpurs_Data1("Just", ((($dictSemigroup)->append)(($v)->value0))(($v1)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_optional'] = function() { $v = (function() {
  $__fn = function($dictAlt, $dictApplicative = null, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictAlt)->alt)(((((($dictAlt)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))($a)))((($dictApplicative)->pure)(new Phpurs_Data0("Nothing")));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Maybe_monoidMaybe'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $semigroupMaybe1_1 = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($v, $v1 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t0 = $v1;
} else {
if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t0 = $v;
} else {
if (((is_object($v) && (($v)->tag === "Just")) && (is_object($v1) && (($v1)->tag === "Just")))) {
$__t0 = new Phpurs_Data1("Just", ((($dictSemigroup)->append)(($v)->value0))(($v1)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
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
  $__res = (object)["mempty" => new Phpurs_Data0("Nothing"), "Semigroup0" => function($dollar__unused_0) use (&$semigroupMaybe1_1) {
  $__num = \func_num_args();
  $__res = $semigroupMaybe1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_maybe__prime__'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t0 = ($v)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t0 = ($v1)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Maybe_maybe'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t0 = $v;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t0 = ($v1)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Maybe_isNothing'] = function() { $v = function($v2) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t0 = true;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t0 = false;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_isJust'] = function() { $v = function($v2) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t0 = false;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t0 = true;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_genericMaybe'] = function() { $v = (object)["to" => function($x) {
  $__num = \func_num_args();
  if ((is_object($x) && (($x)->tag === "Inl"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($x) && (($x)->tag === "Inr"))) {
$__t0 = new Phpurs_Data1("Just", ($x)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "from" => function($x) {
  $__num = \func_num_args();
  if ((is_object($x) && (($x)->tag === "Nothing"))) {
$__t1 = new Phpurs_Data1("Inl", new Phpurs_Data0("NoArguments"));
} else {
if ((is_object($x) && (($x)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Inr", ($x)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_functorMaybe'] = function() { $v = (object)["map" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t0 = new Phpurs_Data1("Just", ($v)(($v1)->value0));
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_invariantMaybe'] = function() { $v = (object)["imap" => (function() {
  $__fn = function($f, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t0 = new Phpurs_Data1("Just", ($f)(($v1)->value0));
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_fromMaybe__prime__'] = function() { $v = function($a) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Maybe_maybe__prime__'] ?? \PhpursThunks::eval('Data_Maybe_maybe__prime__')))($a))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_fromMaybe'] = function() { $v = (function() {
  $__fn = function($a, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t0 = $a;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t0 = ($v2)->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Maybe_fromJust'] = function() { $v = (function() {
  $__fn = function($dollar__unused_0, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Just"))) {
$__t0 = ($v)->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Maybe_extendMaybe'] = function() { $v = (object)["extend" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
$__t0 = new Phpurs_Data1("Just", ($v)($v1));
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \PhpursThunks::eval('Data_Maybe_functorMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_eqMaybe'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (object)["eq" => (function() use (&$dictEq) {
  $__fn = function($x, $y = null) use (&$dictEq, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($x) && (($x)->tag === "Nothing"))) {
$__t0 = (is_object($y) && (($y)->tag === "Nothing"));
} else {
$__t0 = ((is_object($x) && (($x)->tag === "Just")) && ((is_object($y) && (($y)->tag === "Just")) && ((($dictEq)->eq)(($x)->value0))(($y)->value0)));
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_ordMaybe'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $eqMaybe1_2 = (object)["eq" => (function() use (&$__local_var_0) {
  $__fn = function($x, $y = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($x) && (($x)->tag === "Nothing"))) {
$__t1 = (is_object($y) && (($y)->tag === "Nothing"));
} else {
$__t1 = ((is_object($x) && (($x)->tag === "Just")) && ((is_object($y) && (($y)->tag === "Just")) && ((($__local_var_0)->eq)(($x)->value0))(($y)->value0)));
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["compare" => (function() use (&$dictOrd) {
  $__fn = function($x, $y = null) use (&$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($x) && (($x)->tag === "Nothing"))) {
if ((is_object($y) && (($y)->tag === "Nothing"))) {
$__t4 = new Phpurs_Data0("EQ");
} else {
$__t4 = new Phpurs_Data0("LT");
};
$__t3 = $__t4;
} else {
if ((is_object($y) && (($y)->tag === "Nothing"))) {
$__t3 = new Phpurs_Data0("GT");
} else {
if (((is_object($x) && (($x)->tag === "Just")) && (is_object($y) && (($y)->tag === "Just")))) {
$__t3 = ((($dictOrd)->compare)(($x)->value0))(($y)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqMaybe1_2) {
  $__num = \func_num_args();
  $__res = $eqMaybe1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_eq1Maybe'] = function() { $v = (object)["eq1" => (function() {
  $__fn = function($dictEq, $x = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($x) && (($x)->tag === "Nothing"))) {
$__t0 = (is_object($y) && (($y)->tag === "Nothing"));
} else {
$__t0 = ((is_object($x) && (($x)->tag === "Just")) && ((is_object($y) && (($y)->tag === "Just")) && ((($dictEq)->eq)(($x)->value0))(($y)->value0)));
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_ord1Maybe'] = function() { $v = (object)["compare1" => function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Maybe_ordMaybe'] ?? \PhpursThunks::eval('Data_Maybe_ordMaybe')))($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_eq1Maybe'] ?? \PhpursThunks::eval('Data_Maybe_eq1Maybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_boundedMaybe'] = function() { $v = function($dictBounded) {
  $__num = \func_num_args();
  $ordMaybe1_0 = (($GLOBALS['Data_Maybe_ordMaybe'] ?? \PhpursThunks::eval('Data_Maybe_ordMaybe')))((($dictBounded)->Ord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["top" => new Phpurs_Data1("Just", ($dictBounded)->top), "bottom" => new Phpurs_Data0("Nothing"), "Ord0" => function($dollar__unused_0) use (&$ordMaybe1_0) {
  $__num = \func_num_args();
  $__res = $ordMaybe1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_applyMaybe'] = function() { $v = (object)["apply" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Just"))) {
if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($v)->value0)(($v1)->value0));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
$__t0 = $__t1;
} else {
if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
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
  $__res = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \PhpursThunks::eval('Data_Maybe_functorMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_bindMaybe'] = function() { $v = (object)["bind" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Just"))) {
$__t0 = ($v1)(($v)->value0);
} else {
if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \PhpursThunks::eval('Data_Maybe_applyMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_semiringMaybe'] = function() { $v = function($dictSemiring) {
  $__num = \func_num_args();
  $__res = (object)["zero" => new Phpurs_Data0("Nothing"), "one" => new Phpurs_Data1("Just", ($dictSemiring)->one), "add" => (function() use (&$dictSemiring) {
  $__fn = function($v, $v1 = null) use (&$dictSemiring, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t0 = $v1;
} else {
if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t0 = $v;
} else {
if (((is_object($v) && (($v)->tag === "Just")) && (is_object($v1) && (($v1)->tag === "Just")))) {
$__t0 = new Phpurs_Data1("Just", ((($dictSemiring)->add)(($v)->value0))(($v1)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mul" => (function() use (&$dictSemiring) {
  $__fn = function($x, $y = null) use (&$dictSemiring, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (((is_object($x) && (($x)->tag === "Just")) && (is_object($y) && (($y)->tag === "Just")))) {
$__t1 = new Phpurs_Data1("Just", ((($dictSemiring)->mul)(($x)->value0))(($y)->value0));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Maybe_applicativeMaybe'] = function() { $v = (object)["pure" => ($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just')), "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_applyMaybe'] ?? \PhpursThunks::eval('Data_Maybe_applyMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_monadMaybe'] = function() { $v = (object)["Applicative0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_applicativeMaybe'] ?? \PhpursThunks::eval('Data_Maybe_applicativeMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_bindMaybe'] ?? \PhpursThunks::eval('Data_Maybe_bindMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_altMaybe'] = function() { $v = (object)["alt" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t0 = $v1;
} else {
$__t0 = $v;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \PhpursThunks::eval('Data_Maybe_functorMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_plusMaybe'] = function() { $v = (object)["empty" => new Phpurs_Data0("Nothing"), "Alt0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_altMaybe'] ?? \PhpursThunks::eval('Data_Maybe_altMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Maybe_alternativeMaybe'] = function() { $v = (object)["Applicative0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_applicativeMaybe'] ?? \PhpursThunks::eval('Data_Maybe_applicativeMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Maybe_plusMaybe'] ?? \PhpursThunks::eval('Data_Maybe_plusMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
































