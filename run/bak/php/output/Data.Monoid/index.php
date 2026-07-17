<?php

namespace Data\Monoid;

// ALL IMPORTS: Data.Boolean, Data.Eq, Data.EuclideanRing, Data.Monoid, Data.Ord, Data.Ordering, Data.Semigroup, Data.Symbol, Data.Unit, Prim, Prim.Row, Prim.RowList, Record.Unsafe, Type.Proxy
// TO REQUIRE: Data.Boolean, Data.Eq, Data.EuclideanRing, Data.Monoid, Data.Ord, Data.Ordering, Data.Semigroup, Data.Symbol, Data.Unit, Record.Unsafe, Type.Proxy
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Record.Unsafe/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

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
\PhpursThunks::$thunks['Data_Monoid_monoidUnit'] = function() { $v = (object)["mempty" => ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')), "Semigroup0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Semigroup_semigroupUnit'] ?? \PhpursThunks::eval('Data_Semigroup_semigroupUnit'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Monoid_monoidString'] = function() { $v = (object)["mempty" => "", "Semigroup0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \PhpursThunks::eval('Data_Semigroup_semigroupString'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Monoid_monoidRecordNil'] = function() { $v = (object)["memptyRecord" => function($v) {
  $__num = \func_num_args();
  $__res = (object)[];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "SemigroupRecord0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Semigroup_semigroupRecordNil'] ?? \PhpursThunks::eval('Data_Semigroup_semigroupRecordNil'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Monoid_monoidOrdering'] = function() { $v = (object)["mempty" => new Phpurs_Data0("EQ"), "Semigroup0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Ordering_semigroupOrdering'] ?? \PhpursThunks::eval('Data_Ordering_semigroupOrdering'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Monoid_monoidArray'] = function() { $v = (object)["mempty" => [], "Semigroup0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Semigroup_semigroupArray'] ?? \PhpursThunks::eval('Data_Semigroup_semigroupArray'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Monoid_memptyRecord'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->memptyRecord;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Monoid_monoidRecord'] = function() { $v = (function() {
  $__fn = function($dollar__unused_0, $dictMonoidRecord = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $semigroupRecord1_0 = (object)["append" => (((($dictMonoidRecord)->SemigroupRecord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->appendRecord)(new Phpurs_Data0("Proxy"))];
  $__res = (object)["mempty" => (($dictMonoidRecord)->memptyRecord)(new Phpurs_Data0("Proxy")), "Semigroup0" => function($dollar__unused_0) use (&$semigroupRecord1_0) {
  $__num = \func_num_args();
  $__res = $semigroupRecord1_0;
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
\PhpursThunks::$thunks['Data_Monoid_mempty'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->mempty;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Monoid_monoidFn'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty1_0 = ($dictMonoid)->mempty;
  $__local_var_1 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $semigroupFn_2 = (object)["append" => (function() use (&$__local_var_1) {
  $__fn = function($f, $g = null, $x = null) use (&$__local_var_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($__local_var_1)->append)(($f)($x)))(($g)($x));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["mempty" => function($v) use (&$mempty1_0) {
  $__num = \func_num_args();
  $__res = $mempty1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Semigroup0" => function($dollar__unused_0) use (&$semigroupFn_2) {
  $__num = \func_num_args();
  $__res = $semigroupFn_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Monoid_monoidRecordCons'] = function() { $v = (function() {
  $__fn = function($dictIsSymbol, $dictMonoid = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $mempty1_0 = ($dictMonoid)->mempty;
  $Semigroup0_1 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$Semigroup0_1, &$dictIsSymbol, &$mempty1_0) {
  $__fn = function($dollar__unused_0, $dictMonoidRecord = null) use (&$Semigroup0_1, &$dictIsSymbol, &$mempty1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $semigroupRecordCons1_2 = ((((($GLOBALS['Data_Semigroup_semigroupRecordCons'] ?? \PhpursThunks::eval('Data_Semigroup_semigroupRecordCons')))($dictIsSymbol))(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))((($dictMonoidRecord)->SemigroupRecord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')))))($Semigroup0_1);
  $__res = (object)["memptyRecord" => function($v) use (&$dictIsSymbol, &$dictMonoidRecord, &$mempty1_0) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Record_Unsafe_unsafeSet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeSet')))((($dictIsSymbol)->reflectSymbol)(new Phpurs_Data0("Proxy"))))($mempty1_0))((($dictMonoidRecord)->memptyRecord)(new Phpurs_Data0("Proxy")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "SemigroupRecord0" => function($dollar__unused_0) use (&$semigroupRecordCons1_2) {
  $__num = \func_num_args();
  $__res = $semigroupRecordCons1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Monoid_power'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty1_0 = ($dictMonoid)->mempty;
  $__local_var_1 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($x) use (&$__local_var_1, &$mempty1_0) {
  $__num = \func_num_args();
  $go = null;
  $go = function($p) use (&$__local_var_1, &$go, &$mempty1_0, &$x) {
  $__num = \func_num_args();
  if (( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($p))(0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($p))(0))->tag === "GT")))) {
$__t3 = $mempty1_0;
} else {
if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))($p))(1)) {
$__t3 = $x;
} else {
if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))(((($GLOBALS['Data_EuclideanRing_intMod'] ?? \PhpursThunks::eval('Data_EuclideanRing_intMod')))($p))(2)))(0)) {
$x__prime___4 = ($go)(((($GLOBALS['Data_EuclideanRing_intDiv'] ?? \PhpursThunks::eval('Data_EuclideanRing_intDiv')))($p))(2));
$__t3 = ((($__local_var_1)->append)($x__prime___4))($x__prime___4);
} else {
$x__prime___2 = ($go)(((($GLOBALS['Data_EuclideanRing_intDiv'] ?? \PhpursThunks::eval('Data_EuclideanRing_intDiv')))($p))(2));
$__t3 = ((($__local_var_1)->append)($x__prime___2))(((($__local_var_1)->append)($x__prime___2))($x));
};
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Monoid_guard'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty1_0 = ($dictMonoid)->mempty;
  $__res = (function() use (&$mempty1_0) {
  $__fn = function($v, $v1 = null) use (&$mempty1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ($v) {
$__t1 = $v1;
} else {
$__t1 = $mempty1_0;
};
  $__res = $__t1;
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
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };














