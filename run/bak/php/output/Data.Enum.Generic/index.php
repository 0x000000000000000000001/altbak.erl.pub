<?php

namespace Data\Enum\Generic;

// ALL IMPORTS: Control.Apply, Control.Semigroupoid, Data.Boolean, Data.Bounded.Generic, Data.Enum, Data.Enum.Generic, Data.Eq, Data.EuclideanRing, Data.Function, Data.Functor, Data.Generic.Rep, Data.HeytingAlgebra, Data.Maybe, Data.Newtype, Data.Ord, Data.Ring, Data.Semiring, Prelude, Prim
// TO REQUIRE: Control.Apply, Control.Semigroupoid, Data.Boolean, Data.Bounded.Generic, Data.Enum, Data.Enum.Generic, Data.Eq, Data.EuclideanRing, Data.Function, Data.Functor, Data.Generic.Rep, Data.HeytingAlgebra, Data.Maybe, Data.Newtype, Data.Ord, Data.Ring, Data.Semiring, Prelude
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded.Generic/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Enum.Generic/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
\PhpursThunks::$thunks['Data_Enum_Generic_genericToEnum__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericToEnum__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericToEnum'] = function() { $v = (function() {
  $__fn = function($dictGeneric, $dictGenericBoundedEnum = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v1) use (&$dictGeneric) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t0 = new Phpurs_Data1("Just", (($dictGeneric)->to)(($v1)->value0));
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($dictGenericBoundedEnum)->genericToEnum__prime__);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericSucc__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericSucc__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericSucc'] = function() { $v = function($dictGeneric) {
  $__num = \func_num_args();
  $from_0 = ($dictGeneric)->from;
  $__res = function($dictGenericEnum) use (&$dictGeneric, &$from_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v1) use (&$dictGeneric) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($dictGeneric)->to)(($v1)->value0));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($dictGenericEnum)->genericSucc__prime__))($from_0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericPred__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericPred__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericPred'] = function() { $v = function($dictGeneric) {
  $__num = \func_num_args();
  $from_0 = ($dictGeneric)->from;
  $__res = function($dictGenericEnum) use (&$dictGeneric, &$from_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v1) use (&$dictGeneric) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($dictGeneric)->to)(($v1)->value0));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($dictGenericEnum)->genericPred__prime__))($from_0));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericFromEnum__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericFromEnum__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericFromEnum'] = function() { $v = function($dictGeneric) {
  $__num = \func_num_args();
  $from_0 = ($dictGeneric)->from;
  $__res = function($dictGenericBoundedEnum) use (&$from_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($dictGenericBoundedEnum)->genericFromEnum__prime__))($from_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericEnumSum'] = function() { $v = (function() {
  $__fn = function($dictGenericEnum, $dictGenericTop = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $genericTop__prime___0 = ($dictGenericTop)->genericTop__prime__;
  $__res = (function() use (&$dictGenericEnum, &$genericTop__prime___0) {
  $__fn = function($dictGenericEnum1, $dictGenericBottom = null) use (&$dictGenericEnum, &$genericTop__prime___0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $genericBottom__prime___1 = ($dictGenericBottom)->genericBottom__prime__;
  $__res = (object)["genericPred__prime__" => function($v) use (&$dictGenericEnum, &$dictGenericEnum1, &$genericTop__prime___0) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Inl"))) {
$__local_var_3 = (($dictGenericEnum)->genericPred__prime__)(($v)->value0);
if ((is_object($__local_var_3) && (($__local_var_3)->tag === "Just"))) {
$__t4 = new Phpurs_Data1("Just", new Phpurs_Data1("Inl", ($__local_var_3)->value0));
} else {
$__t4 = new Phpurs_Data0("Nothing");
};
$__t2 = $__t4;
} else {
if ((is_object($v) && (($v)->tag === "Inr"))) {
$v1_5 = (($dictGenericEnum1)->genericPred__prime__)(($v)->value0);
if ((is_object($v1_5) && (($v1_5)->tag === "Nothing"))) {
$__t6 = new Phpurs_Data1("Just", new Phpurs_Data1("Inl", $genericTop__prime___0));
} else {
if ((is_object($v1_5) && (($v1_5)->tag === "Just"))) {
$__t6 = new Phpurs_Data1("Just", new Phpurs_Data1("Inr", ($v1_5)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
$__t2 = $__t6;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "genericSucc__prime__" => function($v) use (&$dictGenericEnum, &$dictGenericEnum1, &$genericBottom__prime___1) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Inl"))) {
$v1_8 = (($dictGenericEnum)->genericSucc__prime__)(($v)->value0);
if ((is_object($v1_8) && (($v1_8)->tag === "Nothing"))) {
$__t9 = new Phpurs_Data1("Just", new Phpurs_Data1("Inr", $genericBottom__prime___1));
} else {
if ((is_object($v1_8) && (($v1_8)->tag === "Just"))) {
$__t9 = new Phpurs_Data1("Just", new Phpurs_Data1("Inl", ($v1_8)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t9 = null;
};
};
$__t7 = $__t9;
} else {
if ((is_object($v) && (($v)->tag === "Inr"))) {
$__local_var_10 = (($dictGenericEnum1)->genericSucc__prime__)(($v)->value0);
if ((is_object($__local_var_10) && (($__local_var_10)->tag === "Just"))) {
$__t11 = new Phpurs_Data1("Just", new Phpurs_Data1("Inr", ($__local_var_10)->value0));
} else {
$__t11 = new Phpurs_Data0("Nothing");
};
$__t7 = $__t11;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
  $__res = $__t7;
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
\PhpursThunks::$thunks['Data_Enum_Generic_genericEnumProduct'] = function() { $v = (function() {
  $__fn = function($dictGenericEnum, $dictGenericTop = null, $dictGenericBottom = null, $dictGenericEnum1 = null, $dictGenericTop1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $genericTop__prime___0 = ($dictGenericTop1)->genericTop__prime__;
  $__res = function($dictGenericBottom1) use (&$dictGenericEnum, &$dictGenericEnum1, &$genericTop__prime___0) {
  $__num = \func_num_args();
  $genericBottom__prime___1 = ($dictGenericBottom1)->genericBottom__prime__;
  $__res = (object)["genericPred__prime__" => function($v) use (&$dictGenericEnum, &$dictGenericEnum1, &$genericTop__prime___0) {
  $__num = \func_num_args();
  $v1_2 = (($dictGenericEnum1)->genericPred__prime__)(($v)->value1);
  if ((is_object($v1_2) && (($v1_2)->tag === "Just"))) {
$__t3 = new Phpurs_Data1("Just", new Phpurs_Data2("Product", ($v)->value0, ($v1_2)->value0));
} else {
if ((is_object($v1_2) && (($v1_2)->tag === "Nothing"))) {
$__local_var_4 = (($dictGenericEnum)->genericPred__prime__)(($v)->value0);
if ((is_object($__local_var_4) && (($__local_var_4)->tag === "Just"))) {
$__t5 = new Phpurs_Data1("Just", new Phpurs_Data2("Product", ($__local_var_4)->value0, $genericTop__prime___0));
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
}, "genericSucc__prime__" => function($v) use (&$dictGenericEnum, &$dictGenericEnum1, &$genericBottom__prime___1) {
  $__num = \func_num_args();
  $v1_6 = (($dictGenericEnum1)->genericSucc__prime__)(($v)->value1);
  if ((is_object($v1_6) && (($v1_6)->tag === "Just"))) {
$__t7 = new Phpurs_Data1("Just", new Phpurs_Data2("Product", ($v)->value0, ($v1_6)->value0));
} else {
if ((is_object($v1_6) && (($v1_6)->tag === "Nothing"))) {
$__local_var_8 = (($dictGenericEnum)->genericSucc__prime__)(($v)->value0);
if ((is_object($__local_var_8) && (($__local_var_8)->tag === "Just"))) {
$__t9 = new Phpurs_Data1("Just", new Phpurs_Data2("Product", ($__local_var_8)->value0, $genericBottom__prime___1));
} else {
$__t9 = new Phpurs_Data0("Nothing");
};
$__t7 = $__t9;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
  $__res = $__t7;
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
  return $__num > 5 ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericEnumNoArguments'] = function() { $v = (object)["genericPred__prime__" => function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nothing");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "genericSucc__prime__" => function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nothing");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericEnumConstructor'] = function() { $v = function($dictGenericEnum) {
  $__num = \func_num_args();
  $__res = (object)["genericPred__prime__" => function($v) use (&$dictGenericEnum) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictGenericEnum)->genericPred__prime__)($v);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", ($__local_var_0)->value0);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "genericSucc__prime__" => function($v) use (&$dictGenericEnum) {
  $__num = \func_num_args();
  $__local_var_2 = (($dictGenericEnum)->genericSucc__prime__)($v);
  if ((is_object($__local_var_2) && (($__local_var_2)->tag === "Just"))) {
$__t3 = new Phpurs_Data1("Just", ($__local_var_2)->value0);
} else {
$__t3 = new Phpurs_Data0("Nothing");
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericEnumArgument'] = function() { $v = function($dictEnum) {
  $__num = \func_num_args();
  $__res = (object)["genericPred__prime__" => function($v) use (&$dictEnum) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictEnum)->pred)($v);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", ($__local_var_0)->value0);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "genericSucc__prime__" => function($v) use (&$dictEnum) {
  $__num = \func_num_args();
  $__local_var_2 = (($dictEnum)->succ)($v);
  if ((is_object($__local_var_2) && (($__local_var_2)->tag === "Just"))) {
$__t3 = new Phpurs_Data1("Just", ($__local_var_2)->value0);
} else {
$__t3 = new Phpurs_Data0("Nothing");
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericCardinality__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericCardinality__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericCardinality'] = function() { $v = (function() {
  $__fn = function($dictGeneric, $dictGenericBoundedEnum = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($dictGenericBoundedEnum)->genericCardinality__prime__);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericBoundedEnumSum'] = function() { $v = function($dictGenericBoundedEnum) {
  $__num = \func_num_args();
  $genericCardinality__prime__1_0 = ($dictGenericBoundedEnum)->genericCardinality__prime__;
  $__res = function($dictGenericBoundedEnum1) use (&$dictGenericBoundedEnum, &$genericCardinality__prime__1_0) {
  $__num = \func_num_args();
  $__res = (object)["genericCardinality__prime__" => ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($genericCardinality__prime__1_0)))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($dictGenericBoundedEnum1)->genericCardinality__prime__)), "genericToEnum__prime__" => function($n) use (&$dictGenericBoundedEnum, &$dictGenericBoundedEnum1, &$genericCardinality__prime__1_0) {
  $__num = \func_num_args();
  if (((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(0))->tag === "LT")))))((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))($genericCardinality__prime__1_0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))($genericCardinality__prime__1_0))->tag === "LT")))) {
$__local_var_4 = (($dictGenericBoundedEnum)->genericToEnum__prime__)($n);
if ((is_object($__local_var_4) && (($__local_var_4)->tag === "Just"))) {
$__t5 = new Phpurs_Data1("Just", new Phpurs_Data1("Inl", ($__local_var_4)->value0));
} else {
$__t5 = new Phpurs_Data0("Nothing");
};
$__t3 = $__t5;
} else {
$__local_var_1 = (($dictGenericBoundedEnum1)->genericToEnum__prime__)(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($n))($genericCardinality__prime__1_0));
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Just", new Phpurs_Data1("Inr", ($__local_var_1)->value0));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
$__t3 = $__t2;
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "genericFromEnum__prime__" => function($v) use (&$dictGenericBoundedEnum, &$dictGenericBoundedEnum1, &$genericCardinality__prime__1_0) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Inl"))) {
$__t6 = (($dictGenericBoundedEnum)->genericFromEnum__prime__)(($v)->value0);
} else {
if ((is_object($v) && (($v)->tag === "Inr"))) {
$__t6 = ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))((($dictGenericBoundedEnum1)->genericFromEnum__prime__)(($v)->value0)))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($genericCardinality__prime__1_0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = $__t6;
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
\PhpursThunks::$thunks['Data_Enum_Generic_genericBoundedEnumProduct'] = function() { $v = function($dictGenericBoundedEnum) {
  $__num = \func_num_args();
  $genericCardinality__prime__1_0 = ($dictGenericBoundedEnum)->genericCardinality__prime__;
  $__res = function($dictGenericBoundedEnum1) use (&$dictGenericBoundedEnum, &$genericCardinality__prime__1_0) {
  $__num = \func_num_args();
  $genericCardinality__prime__2_1 = ($dictGenericBoundedEnum1)->genericCardinality__prime__;
  $__res = (object)["genericCardinality__prime__" => ((($GLOBALS['Data_Semiring_intMul'] ?? \PhpursThunks::eval('Data_Semiring_intMul')))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($genericCardinality__prime__1_0)))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($genericCardinality__prime__2_1)), "genericToEnum__prime__" => function($n) use (&$dictGenericBoundedEnum, &$dictGenericBoundedEnum1, &$genericCardinality__prime__2_1) {
  $__num = \func_num_args();
  $__local_var_2 = (($dictGenericBoundedEnum)->genericToEnum__prime__)(((($GLOBALS['Data_EuclideanRing_intDiv'] ?? \PhpursThunks::eval('Data_EuclideanRing_intDiv')))($n))($genericCardinality__prime__2_1));
  if ((is_object($__local_var_2) && (($__local_var_2)->tag === "Just"))) {
$__local_var_4 = (($dictGenericBoundedEnum1)->genericToEnum__prime__)(((($GLOBALS['Data_EuclideanRing_intMod'] ?? \PhpursThunks::eval('Data_EuclideanRing_intMod')))($n))($genericCardinality__prime__2_1));
if ((is_object($__local_var_4) && (($__local_var_4)->tag === "Just"))) {
$__t5 = new Phpurs_Data1("Just", new Phpurs_Data2("Product", ($__local_var_2)->value0, ($__local_var_4)->value0));
} else {
$__t5 = new Phpurs_Data0("Nothing");
};
$__t3 = $__t5;
} else {
$__t3 = new Phpurs_Data0("Nothing");
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "genericFromEnum__prime__" => function($v1) use (&$dictGenericBoundedEnum, &$dictGenericBoundedEnum1, &$genericCardinality__prime__2_1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(((($GLOBALS['Data_Semiring_intMul'] ?? \PhpursThunks::eval('Data_Semiring_intMul')))((($dictGenericBoundedEnum)->genericFromEnum__prime__)(($v1)->value0)))($genericCardinality__prime__2_1)))((($dictGenericBoundedEnum1)->genericFromEnum__prime__)(($v1)->value1));
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
\PhpursThunks::$thunks['Data_Enum_Generic_genericBoundedEnumNoArguments'] = function() { $v = (object)["genericCardinality__prime__" => 1, "genericToEnum__prime__" => function($i) {
  $__num = \func_num_args();
  if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))($i))(0)) {
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data0("NoArguments"));
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "genericFromEnum__prime__" => function($v) {
  $__num = \func_num_args();
  $__res = 0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericBoundedEnumConstructor'] = function() { $v = function($dictGenericBoundedEnum) {
  $__num = \func_num_args();
  $__res = (object)["genericCardinality__prime__" => (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($dictGenericBoundedEnum)->genericCardinality__prime__), "genericToEnum__prime__" => function($i) use (&$dictGenericBoundedEnum) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictGenericBoundedEnum)->genericToEnum__prime__)($i);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", ($__local_var_0)->value0);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "genericFromEnum__prime__" => function($v) use (&$dictGenericBoundedEnum) {
  $__num = \func_num_args();
  $__res = (($dictGenericBoundedEnum)->genericFromEnum__prime__)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Enum_Generic_genericBoundedEnumArgument'] = function() { $v = function($dictBoundedEnum) {
  $__num = \func_num_args();
  $__res = (object)["genericCardinality__prime__" => (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($dictBoundedEnum)->cardinality), "genericToEnum__prime__" => function($i) use (&$dictBoundedEnum) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictBoundedEnum)->toEnum)($i);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", ($__local_var_0)->value0);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "genericFromEnum__prime__" => function($v) use (&$dictBoundedEnum) {
  $__num = \func_num_args();
  $__res = (($dictBoundedEnum)->fromEnum)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };






















