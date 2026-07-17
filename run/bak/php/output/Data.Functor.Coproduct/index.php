<?php

namespace Data\Functor\Coproduct;

// ALL IMPORTS: Control.Comonad, Control.Extend, Control.Semigroupoid, Data.Bifunctor, Data.Either, Data.Eq, Data.Functor, Data.Functor.Coproduct, Data.Newtype, Data.Ord, Data.Ordering, Data.Semigroup, Data.Show, Prelude, Prim
// TO REQUIRE: Control.Comonad, Control.Extend, Control.Semigroupoid, Data.Bifunctor, Data.Either, Data.Eq, Data.Functor, Data.Functor.Coproduct, Data.Newtype, Data.Ord, Data.Ordering, Data.Semigroup, Data.Show, Prelude
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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
\PhpursThunks::$thunks['Data_Functor_Coproduct_Coproduct'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_showCoproduct'] = function() { $v = (function() {
  $__fn = function($dictShow, $dictShow1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["show" => function($v) use (&$dictShow, &$dictShow1) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(left "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value0)))(")"));
} else {
if ((is_object($v) && (($v)->tag === "Right"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(right "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow1)->show)(($v)->value0)))(")"));
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_right'] = function() { $v = function($ga) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", $ga);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_newtypeCoproduct'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_left'] = function() { $v = function($fa) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Left", $fa);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_functorCoproduct'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $dictFunctor1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["map" => (function() use (&$dictFunctor, &$dictFunctor1) {
  $__fn = function($f, $v = null) use (&$dictFunctor, &$dictFunctor1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($dictFunctor)->map)($f);
  $__local_var_1 = (($dictFunctor1)->map)($f);
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t2 = new Phpurs_Data1("Left", ($__local_var_0)(($v)->value0));
} else {
if ((is_object($v) && (($v)->tag === "Right"))) {
$__t2 = new Phpurs_Data1("Right", ($__local_var_1)(($v)->value0));
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
})()];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_eq1Coproduct'] = function() { $v = (function() {
  $__fn = function($dictEq1, $dictEq11 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["eq1" => function($dictEq) use (&$dictEq1, &$dictEq11) {
  $__num = \func_num_args();
  $eq12_0 = (($dictEq1)->eq1)($dictEq);
  $eq13_1 = (($dictEq11)->eq1)($dictEq);
  $__res = (function() use (&$eq12_0, &$eq13_1) {
  $__fn = function($v, $v1 = null) use (&$eq12_0, &$eq13_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t2 = ((is_object($v1) && (($v1)->tag === "Left")) && (($eq12_0)(($v)->value0))(($v1)->value0));
} else {
$__t2 = ((is_object($v) && (($v)->tag === "Right")) && ((is_object($v1) && (($v1)->tag === "Right")) && (($eq13_1)(($v)->value0))(($v1)->value0)));
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
}];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_eqCoproduct'] = function() { $v = (function() {
  $__fn = function($dictEq1, $dictEq11 = null, $dictEq = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $eq12_0 = (($dictEq1)->eq1)($dictEq);
  $eq13_1 = (($dictEq11)->eq1)($dictEq);
  $__res = (object)["eq" => (function() use (&$eq12_0, &$eq13_1) {
  $__fn = function($v, $v1 = null) use (&$eq12_0, &$eq13_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t2 = ((is_object($v1) && (($v1)->tag === "Left")) && (($eq12_0)(($v)->value0))(($v1)->value0));
} else {
$__t2 = ((is_object($v) && (($v)->tag === "Right")) && ((is_object($v1) && (($v1)->tag === "Right")) && (($eq13_1)(($v)->value0))(($v1)->value0)));
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_ord1Coproduct'] = function() { $v = function($dictOrd1) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictOrd11) use (&$__local_var_0, &$dictOrd1) {
  $__num = \func_num_args();
  $__local_var_1 = (($dictOrd11)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $eq1Coproduct2_5 = (object)["eq1" => function($dictEq) use (&$__local_var_0, &$__local_var_1) {
  $__num = \func_num_args();
  $eq12_2 = (($__local_var_0)->eq1)($dictEq);
  $eq13_3 = (($__local_var_1)->eq1)($dictEq);
  $__res = (function() use (&$eq12_2, &$eq13_3) {
  $__fn = function($v, $v1 = null) use (&$eq12_2, &$eq13_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t4 = ((is_object($v1) && (($v1)->tag === "Left")) && (($eq12_2)(($v)->value0))(($v1)->value0));
} else {
$__t4 = ((is_object($v) && (($v)->tag === "Right")) && ((is_object($v1) && (($v1)->tag === "Right")) && (($eq13_3)(($v)->value0))(($v1)->value0)));
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
}];
  $__res = (object)["compare1" => function($dictOrd) use (&$dictOrd1, &$dictOrd11) {
  $__num = \func_num_args();
  $compare12_6 = (($dictOrd1)->compare1)($dictOrd);
  $compare13_7 = (($dictOrd11)->compare1)($dictOrd);
  $__res = (function() use (&$compare12_6, &$compare13_7) {
  $__fn = function($v, $v1 = null) use (&$compare12_6, &$compare13_7, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Left"))) {
if ((is_object($v1) && (($v1)->tag === "Left"))) {
$__t9 = (($compare12_6)(($v)->value0))(($v1)->value0);
} else {
$__t9 = new Phpurs_Data0("LT");
};
$__t8 = $__t9;
} else {
if ((is_object($v1) && (($v1)->tag === "Left"))) {
$__t8 = new Phpurs_Data0("GT");
} else {
if (((is_object($v) && (($v)->tag === "Right")) && (is_object($v1) && (($v1)->tag === "Right")))) {
$__t8 = (($compare13_7)(($v)->value0))(($v1)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t8 = null;
};
};
};
  $__res = $__t8;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused_0) use (&$eq1Coproduct2_5) {
  $__num = \func_num_args();
  $__res = $eq1Coproduct2_5;
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
\PhpursThunks::$thunks['Data_Functor_Coproduct_ordCoproduct'] = function() { $v = function($dictOrd1) {
  $__num = \func_num_args();
  $ord1Coproduct1_0 = (($GLOBALS['Data_Functor_Coproduct_ord1Coproduct'] ?? \PhpursThunks::eval('Data_Functor_Coproduct_ord1Coproduct')))($dictOrd1);
  $__local_var_1 = (($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictOrd11) use (&$__local_var_1, &$ord1Coproduct1_0) {
  $__num = \func_num_args();
  $__local_var_2 = (($dictOrd11)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictOrd) use (&$__local_var_1, &$__local_var_2, &$dictOrd11, &$ord1Coproduct1_0) {
  $__num = \func_num_args();
  $__local_var_3 = (($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $eq12_4 = (($__local_var_1)->eq1)($__local_var_3);
  $eq13_5 = (($__local_var_2)->eq1)($__local_var_3);
  $eqCoproduct3_7 = (object)["eq" => (function() use (&$eq12_4, &$eq13_5) {
  $__fn = function($v, $v1 = null) use (&$eq12_4, &$eq13_5, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t6 = ((is_object($v1) && (($v1)->tag === "Left")) && (($eq12_4)(($v)->value0))(($v1)->value0));
} else {
$__t6 = ((is_object($v) && (($v)->tag === "Right")) && ((is_object($v1) && (($v1)->tag === "Right")) && (($eq13_5)(($v)->value0))(($v1)->value0)));
};
  $__res = $__t6;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["compare" => ((($ord1Coproduct1_0)($dictOrd11))->compare1)($dictOrd), "Eq0" => function($dollar__unused_0) use (&$eqCoproduct3_7) {
  $__num = \func_num_args();
  $__res = $eqCoproduct3_7;
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
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_coproduct'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t0 = ($v)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
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
\PhpursThunks::$thunks['Data_Functor_Coproduct_extendCoproduct'] = function() { $v = function($dictExtend) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictExtend)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictExtend1) use (&$__local_var_0, &$dictExtend) {
  $__num = \func_num_args();
  $__local_var_1 = (($dictExtend1)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorCoproduct2_5 = (object)["map" => (function() use (&$__local_var_0, &$__local_var_1) {
  $__fn = function($f, $v = null) use (&$__local_var_0, &$__local_var_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_2 = (($__local_var_0)->map)($f);
  $__local_var_3 = (($__local_var_1)->map)($f);
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t4 = new Phpurs_Data1("Left", ($__local_var_2)(($v)->value0));
} else {
if ((is_object($v) && (($v)->tag === "Right"))) {
$__t4 = new Phpurs_Data1("Right", ($__local_var_3)(($v)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["extend" => function($f) use (&$dictExtend, &$dictExtend1) {
  $__num = \func_num_args();
  $__local_var_6 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left'))))((($dictExtend)->extend)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \PhpursThunks::eval('Data_Functor_Coproduct_Coproduct'))))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left'))))));
  $__local_var_7 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right'))))((($dictExtend1)->extend)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \PhpursThunks::eval('Data_Functor_Coproduct_Coproduct'))))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right'))))));
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \PhpursThunks::eval('Data_Functor_Coproduct_Coproduct'))))(function($v2) use (&$__local_var_6, &$__local_var_7) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t8 = ($__local_var_6)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t8 = ($__local_var_7)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t8 = null;
};
};
  $__res = $__t8;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) use (&$functorCoproduct2_5) {
  $__num = \func_num_args();
  $__res = $functorCoproduct2_5;
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
\PhpursThunks::$thunks['Data_Functor_Coproduct_comonadCoproduct'] = function() { $v = function($dictComonad) {
  $__num = \func_num_args();
  $extendCoproduct1_0 = (($GLOBALS['Data_Functor_Coproduct_extendCoproduct'] ?? \PhpursThunks::eval('Data_Functor_Coproduct_extendCoproduct')))((($dictComonad)->Extend0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictComonad1) use (&$dictComonad, &$extendCoproduct1_0) {
  $__num = \func_num_args();
  $extendCoproduct2_1 = ($extendCoproduct1_0)((($dictComonad1)->Extend0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["extract" => function($v2) use (&$dictComonad, &$dictComonad1) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t2 = (($dictComonad)->extract)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t2 = (($dictComonad1)->extract)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Extend0" => function($dollar__unused_0) use (&$extendCoproduct2_1) {
  $__num = \func_num_args();
  $__res = $extendCoproduct2_1;
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
\PhpursThunks::$thunks['Data_Functor_Coproduct_bihoistCoproduct'] = function() { $v = (function() {
  $__fn = function($natF, $natG = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t0 = new Phpurs_Data1("Left", ($natF)(($v)->value0));
} else {
if ((is_object($v) && (($v)->tag === "Right"))) {
$__t0 = new Phpurs_Data1("Right", ($natG)(($v)->value0));
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
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
















