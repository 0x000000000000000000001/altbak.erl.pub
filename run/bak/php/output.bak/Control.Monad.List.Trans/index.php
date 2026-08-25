<?php

namespace Control\Monad\List\Trans;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Monad, Control.Monad.List.Trans, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.Trans.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Lazy, Data.Maybe, Data.Monoid, Data.Newtype, Data.Ring, Data.Semigroup, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Data.Unit, Effect.Class, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Monad, Control.Monad.List.Trans, Control.Monad.Rec.Class, Control.Monad.ST.Class, Control.Monad.Trans.Class, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Function, Data.Functor, Data.Lazy, Data.Maybe, Data.Monoid, Data.Newtype, Data.Ring, Data.Semigroup, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Data.Unit, Effect.Class, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.List.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_Yield'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Yield", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_Skip'] = function() { $v = function($value0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Skip", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_Done'] = function() { $v = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_ListT'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_wrapLazy'] = function() { $v = (function() {
  $__fn = function($dictApplicative, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictApplicative)->pure)(new Phpurs_Data1("Skip", $v));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_wrapEffect'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFunctor)->map)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_List_Trans_Skip'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_Skip'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer'))))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_unfold'] = function() { $v = (function() {
  $__fn = function($dictMonad, $f = null, $z = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(function($v) use (&$dictMonad, &$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Just"))) {
$__local_var_1 = (($v)->value0)->value0;
$__t0 = new Phpurs_Data2("Yield", (($v)->value0)->value1, (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v1) use (&$__local_var_1, &$dictMonad, &$f) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_unfold')))($dictMonad))($f))($__local_var_1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t0 = new Phpurs_Data0("Done");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($f)($z));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_uncons'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($v) use (&$__local_var_0, &$dictMonad) {
  $__num = \func_num_args();
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($v))(function($v1) use (&$__local_var_0, &$dictMonad) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Yield"))) {
$__t1 = (($__local_var_0)->pure)(new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($v1)->value0, (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))(($v1)->value1))));
} else {
if ((is_object($v1) && (($v1)->tag === "Skip"))) {
$__t1 = ((($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_uncons')))($dictMonad))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))(($v1)->value0));
} else {
if ((is_object($v1) && (($v1)->tag === "Done"))) {
$__t1 = (($__local_var_0)->pure)(new Phpurs_Data0("Nothing"));
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
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_tail'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $uncons1_0 = (($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_uncons')))($dictMonad);
  $__res = function($l) use (&$dictMonad, &$uncons1_0) {
  $__num = \func_num_args();
  $__res = ((((((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(function($v1) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($v1)->value0)->value1);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($uncons1_0)($l));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_takeWhile'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $__local_var_0 = (((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_0, &$dictApplicative) {
  $__fn = function($f, $v = null) use (&$__local_var_0, &$dictApplicative, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->map)(function($v) use (&$dictApplicative, &$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Yield"))) {
if (($f)(($v)->value0)) {
$__local_var_3 = ((($GLOBALS['Control_Monad_List_Trans_takeWhile'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_takeWhile')))($dictApplicative))($f);
$__t2 = new Phpurs_Data2("Yield", ($v)->value0, (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3) {
  $__num = \func_num_args();
  $__res = ($__local_var_3)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
$__t2 = new Phpurs_Data0("Done");
};
$__t1 = $__t2;
} else {
if ((is_object($v) && (($v)->tag === "Skip"))) {
$__local_var_4 = ($v)->value0;
$__local_var_5 = ((($GLOBALS['Control_Monad_List_Trans_takeWhile'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_takeWhile')))($dictApplicative))($f);
$__t1 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4, &$__local_var_5) {
  $__num = \func_num_args();
  $__res = ($__local_var_5)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_4));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Done"))) {
$__t1 = new Phpurs_Data0("Done");
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
}))($v);
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_scanl'] = function() { $v = (function() {
  $__fn = function($dictMonad, $f = null, $b = null, $l = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_unfold')))($dictMonad))(function($v) use (&$dictMonad, &$f) {
  $__num = \func_num_args();
  $__local_var_0 = ($v)->value0;
  $__res = ((((((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(function($v1) use (&$__local_var_0, &$f) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Yield"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", (($f)($__local_var_0))(($v1)->value0), (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))(($v1)->value1)), $__local_var_0));
} else {
if ((is_object($v1) && (($v1)->tag === "Skip"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", $__local_var_0, (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))(($v1)->value0)), $__local_var_0));
} else {
if ((is_object($v1) && (($v1)->tag === "Done"))) {
$__t1 = new Phpurs_Data0("Nothing");
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
}))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(new Phpurs_Data2("Tuple", $b, $l));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_prepend__prime__'] = function() { $v = (function() {
  $__fn = function($dictApplicative, $h = null, $t = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($dictApplicative)->pure)(new Phpurs_Data2("Yield", $h, $t));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_prepend'] = function() { $v = (function() {
  $__fn = function($dictApplicative, $h = null, $t = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($dictApplicative)->pure)(new Phpurs_Data2("Yield", $h, (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$t) {
  $__num = \func_num_args();
  $__res = $t;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_nil'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $__res = (($dictApplicative)->pure)(new Phpurs_Data0("Done"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_singleton'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $nil1_0 = (($dictApplicative)->pure)(new Phpurs_Data0("Done"));
  $__res = function($a) use (&$dictApplicative, &$nil1_0) {
  $__num = \func_num_args();
  $__res = (($dictApplicative)->pure)(new Phpurs_Data2("Yield", $a, (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$nil1_0) {
  $__num = \func_num_args();
  $__res = $nil1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_take'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $nil1_0 = (($dictApplicative)->pure)(new Phpurs_Data0("Done"));
  $__local_var_1 = (((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_1, &$dictApplicative, &$nil1_0) {
  $__fn = function($v, $v1 = null) use (&$__local_var_1, &$dictApplicative, &$nil1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  switch ($v) {
case 0:
$__t7 = $nil1_0;
break;
default:
$__t7 = ((($__local_var_1)->map)(function($v2) use (&$dictApplicative, &$v) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Yield"))) {
$__local_var_3 = ($v2)->value1;
$__local_var_4 = ((($GLOBALS['Control_Monad_List_Trans_take'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_take')))($dictApplicative))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1));
$__t2 = new Phpurs_Data2("Yield", ($v2)->value0, (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3, &$__local_var_4) {
  $__num = \func_num_args();
  $__res = ($__local_var_4)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_3));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v2) && (($v2)->tag === "Skip"))) {
$__local_var_5 = ($v2)->value0;
$__local_var_6 = ((($GLOBALS['Control_Monad_List_Trans_take'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_take')))($dictApplicative))($v);
$__t2 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_5, &$__local_var_6) {
  $__num = \func_num_args();
  $__res = ($__local_var_6)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_5));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v2) && (($v2)->tag === "Done"))) {
$__t2 = new Phpurs_Data0("Done");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($v1);
break;
};
  $__res = $__t7;
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_zipWith__prime__'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $Applicative0_0 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $nil1_1 = (($Applicative0_0)->pure)(new Phpurs_Data0("Done"));
  $Bind1_2 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Functor0_3 = (((($Bind1_2)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $uncons1_4 = (($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_uncons')))($dictMonad);
  $__res = (function() use (&$Applicative0_0, &$Bind1_2, &$Functor0_3, &$dictMonad, &$nil1_1, &$uncons1_4) {
  $__fn = function($f, $fa = null, $fb = null) use (&$Applicative0_0, &$Bind1_2, &$Functor0_3, &$dictMonad, &$nil1_1, &$uncons1_4, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($Functor0_3)->map)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Control_Monad_List_Trans_Skip'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_Skip'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer'))))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))))(((($Bind1_2)->bind)(($uncons1_4)($fa)))(function($ua) use (&$Applicative0_0, &$Bind1_2, &$Functor0_3, &$dictMonad, &$f, &$fb, &$nil1_1, &$uncons1_4) {
  $__num = \func_num_args();
  $__res = ((($Bind1_2)->bind)(($uncons1_4)($fb)))(function($ub) use (&$Applicative0_0, &$Functor0_3, &$dictMonad, &$f, &$nil1_1, &$ua) {
  $__num = \func_num_args();
  if ((is_object($ub) && (($ub)->tag === "Nothing"))) {
$__t5 = (($Applicative0_0)->pure)($nil1_1);
} else {
if ((is_object($ua) && (($ua)->tag === "Nothing"))) {
$__t5 = (($Applicative0_0)->pure)($nil1_1);
} else {
if (((is_object($ua) && (($ua)->tag === "Just")) && (is_object($ub) && (($ub)->tag === "Just")))) {
$__local_var_6 = (($ua)->value0)->value1;
$__local_var_7 = (($ub)->value0)->value1;
$__local_var_8 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v2) use (&$__local_var_6, &$__local_var_7, &$dictMonad, &$f) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Control_Monad_List_Trans_zipWith__prime__'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_zipWith__prime__')))($dictMonad))($f))($__local_var_6))($__local_var_7);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
$__t5 = ((($Functor0_3)->map)(function($a) use (&$Applicative0_0, &$__local_var_8) {
  $__num = \func_num_args();
  $__res = (($Applicative0_0)->pure)(new Phpurs_Data2("Yield", $a, $__local_var_8));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($f)((($ua)->value0)->value0))((($ub)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
};
  $__res = $__t5;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_zipWith'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $zipWith__prime__1_0 = (($GLOBALS['Control_Monad_List_Trans_zipWith__prime__'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_zipWith__prime__')))($dictMonad);
  $__res = function($f) use (&$dictMonad, &$zipWith__prime__1_0) {
  $__num = \func_num_args();
  $__res = ($zipWith__prime__1_0)((function() use (&$dictMonad, &$f) {
  $__fn = function($a, $b = null) use (&$dictMonad, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)((($f)($a))($b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_newtypeListT'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_mapMaybe'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictFunctor)->map)(function($v) use (&$dictFunctor, &$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Yield"))) {
$__local_var_1 = ($f)(($v)->value0);
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__local_var_4 = ((($GLOBALS['Control_Monad_List_Trans_mapMaybe'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_mapMaybe')))($dictFunctor))($f);
$__t3 = new Phpurs_Data2("Yield", ($__local_var_1)->value0, (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4) {
  $__num = \func_num_args();
  $__res = ($__local_var_4)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
$__local_var_2 = ((($GLOBALS['Control_Monad_List_Trans_mapMaybe'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_mapMaybe')))($dictFunctor))($f);
$__t3 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_2) {
  $__num = \func_num_args();
  $__res = ($__local_var_2)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
};
$__t0 = $__t3;
} else {
if ((is_object($v) && (($v)->tag === "Skip"))) {
$__local_var_5 = ($v)->value0;
$__local_var_6 = ((($GLOBALS['Control_Monad_List_Trans_mapMaybe'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_mapMaybe')))($dictFunctor))($f);
$__t0 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_5, &$__local_var_6) {
  $__num = \func_num_args();
  $__res = ($__local_var_6)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_5));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Done"))) {
$__t0 = new Phpurs_Data0("Done");
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
}))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_iterate'] = function() { $v = (function() {
  $__fn = function($dictMonad, $f = null, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_unfold')))($dictMonad))(function($x) use (&$dictMonad, &$f) {
  $__num = \func_num_args();
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($f)($x), $x)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($a);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_repeat'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_List_Trans_iterate'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_iterate')))($dictMonad))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_head'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $uncons1_0 = (($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_uncons')))($dictMonad);
  $__res = function($l) use (&$dictMonad, &$uncons1_0) {
  $__num = \func_num_args();
  $__res = ((((((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(function($v1) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($v1)->value0)->value0);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($uncons1_0)($l));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_functorListT'] = function() { $v = function($dictFunctor) {
  $__num = \func_num_args();
  $__res = (object)["map" => (function() use (&$dictFunctor) {
  $__fn = function($f, $v = null) use (&$dictFunctor, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFunctor)->map)(function($v) use (&$dictFunctor, &$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Yield"))) {
$__local_var_1 = ($v)->value1;
$__local_var_2 = (((($GLOBALS['Control_Monad_List_Trans_functorListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_functorListT')))($dictFunctor))->map)($f);
$__t0 = new Phpurs_Data2("Yield", ($f)(($v)->value0), (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_1, &$__local_var_2) {
  $__num = \func_num_args();
  $__res = ($__local_var_2)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Skip"))) {
$__local_var_3 = ($v)->value0;
$__local_var_4 = (((($GLOBALS['Control_Monad_List_Trans_functorListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_functorListT')))($dictFunctor))->map)($f);
$__t0 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3, &$__local_var_4) {
  $__num = \func_num_args();
  $__res = ($__local_var_4)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_3));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Done"))) {
$__t0 = new Phpurs_Data0("Done");
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
}))($v);
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_fromEffect'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $nil1_0 = (($dictApplicative)->pure)(new Phpurs_Data0("Done"));
  $__res = function($fa) use (&$dictApplicative, &$nil1_0) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$nil1_0) {
  $__num = \func_num_args();
  $__res = $nil1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(function($a) use (&$__local_var_1) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Yield", $a, $__local_var_1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($fa);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_monadTransListT'] = function() { $v = (object)["lift" => function($dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_fromEffect'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_fromEffect')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_foldlRec__prime__'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_2 = (($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $uncons1_3 = (($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_uncons')))($Monad0_0);
  $__res = (function() use (&$__local_var_1, &$__local_var_2, &$dictMonadRec, &$uncons1_3) {
  $__fn = function($f, $a = null, $b = null) use (&$__local_var_1, &$__local_var_2, &$dictMonadRec, &$uncons1_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictMonadRec)->tailRecM)(function($o) use (&$__local_var_1, &$__local_var_2, &$f, &$uncons1_3) {
  $__num = \func_num_args();
  $__local_var_4 = ($o)->a;
  $__res = ((($__local_var_2)->bind)(($uncons1_3)(($o)->b)))(function($v) use (&$__local_var_1, &$__local_var_2, &$__local_var_4, &$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t5 = (($__local_var_1)->pure)(new Phpurs_Data1("Done", $__local_var_4));
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__local_var_6 = (($v)->value0)->value1;
$__t5 = ((($__local_var_2)->bind)((($f)($__local_var_4))((($v)->value0)->value0)))(function($b__prime__) use (&$__local_var_1, &$__local_var_6) {
  $__num = \func_num_args();
  $__res = (($__local_var_1)->pure)(new Phpurs_Data1("Loop", (object)["a" => $b__prime__, "b" => $__local_var_6]));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
  $__res = $__t5;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b]);
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_runListTRec'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Control_Monad_List_Trans_foldlRec__prime__'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_foldlRec__prime__')))($dictMonadRec))((function() use (&$dictMonadRec) {
  $__fn = function($v, $v1 = null) use (&$dictMonadRec, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_foldlRec'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $uncons1_2 = (($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_uncons')))($Monad0_0);
  $__res = (function() use (&$Monad0_0, &$__local_var_1, &$dictMonadRec, &$uncons1_2) {
  $__fn = function($f, $a = null, $b = null) use (&$Monad0_0, &$__local_var_1, &$dictMonadRec, &$uncons1_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictMonadRec)->tailRecM)(function($o) use (&$Monad0_0, &$__local_var_1, &$f, &$uncons1_2) {
  $__num = \func_num_args();
  $__local_var_3 = ($o)->a;
  $__res = ((((($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(($uncons1_2)(($o)->b)))(function($v) use (&$__local_var_1, &$__local_var_3, &$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t4 = (($__local_var_1)->pure)(new Phpurs_Data1("Done", $__local_var_3));
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__t4 = (($__local_var_1)->pure)(new Phpurs_Data1("Loop", (object)["a" => (($f)($__local_var_3))((($v)->value0)->value0), "b" => (($v)->value0)->value1]));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b]);
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_foldl__prime__'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $uncons1_1 = (($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_uncons')))($dictMonad);
  $__res = function($f) use (&$__local_var_0, &$dictMonad, &$uncons1_1) {
  $__num = \func_num_args();
  $loop = null;
  $loop = (function() use (&$__local_var_0, &$dictMonad, &$f, &$loop, &$uncons1_1) {
  $__fn = function($b, $l = null) use (&$__local_var_0, &$dictMonad, &$f, &$loop, &$uncons1_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->bind)(($uncons1_1)($l)))(function($v) use (&$__local_var_0, &$b, &$dictMonad, &$f, &$loop) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t2 = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($b);
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__local_var_3 = (($v)->value0)->value1;
$__t2 = ((($__local_var_0)->bind)((($f)($b))((($v)->value0)->value0)))(function($a) use (&$__local_var_3, &$loop) {
  $__num = \func_num_args();
  $__res = (($loop)($a))($__local_var_3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = $loop;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_runListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Control_Monad_List_Trans_foldl__prime__'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_foldl__prime__')))($dictMonad))((function() use (&$dictMonad) {
  $__fn = function($v, $v1 = null) use (&$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_foldl'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $uncons1_0 = (($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_uncons')))($dictMonad);
  $__res = function($f) use (&$dictMonad, &$uncons1_0) {
  $__num = \func_num_args();
  $loop = null;
  $loop = (function() use (&$dictMonad, &$f, &$loop, &$uncons1_0) {
  $__fn = function($b, $l = null) use (&$dictMonad, &$f, &$loop, &$uncons1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(($uncons1_0)($l)))(function($v) use (&$b, &$dictMonad, &$f, &$loop) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t1 = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($b);
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__t1 = (($loop)((($f)($b))((($v)->value0)->value0)))((($v)->value0)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = $loop;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_filter'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictFunctor)->map)(function($v) use (&$dictFunctor, &$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Yield"))) {
$__local_var_1 = ($v)->value1;
$__local_var_2 = ((($GLOBALS['Control_Monad_List_Trans_filter'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_filter')))($dictFunctor))($f);
$s__prime___3 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_1, &$__local_var_2) {
  $__num = \func_num_args();
  $__res = ($__local_var_2)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
if (($f)(($v)->value0)) {
$__t4 = new Phpurs_Data2("Yield", ($v)->value0, $s__prime___3);
} else {
$__t4 = new Phpurs_Data1("Skip", $s__prime___3);
};
$__t0 = $__t4;
} else {
if ((is_object($v) && (($v)->tag === "Skip"))) {
$__local_var_5 = ($v)->value0;
$__local_var_6 = ((($GLOBALS['Control_Monad_List_Trans_filter'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_filter')))($dictFunctor))($f);
$__t0 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_5, &$__local_var_6) {
  $__num = \func_num_args();
  $__res = ($__local_var_6)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_5));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Done"))) {
$__t0 = new Phpurs_Data0("Done");
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
}))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_dropWhile'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $__local_var_0 = (((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_0, &$dictApplicative) {
  $__fn = function($f, $v = null) use (&$__local_var_0, &$dictApplicative, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->map)(function($v) use (&$dictApplicative, &$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Yield"))) {
if (($f)(($v)->value0)) {
$__local_var_3 = ((($GLOBALS['Control_Monad_List_Trans_dropWhile'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_dropWhile')))($dictApplicative))($f);
$__t2 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3) {
  $__num = \func_num_args();
  $__res = ($__local_var_3)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
$__t2 = new Phpurs_Data2("Yield", ($v)->value0, ($v)->value1);
};
$__t1 = $__t2;
} else {
if ((is_object($v) && (($v)->tag === "Skip"))) {
$__local_var_4 = ($v)->value0;
$__local_var_5 = ((($GLOBALS['Control_Monad_List_Trans_dropWhile'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_dropWhile')))($dictApplicative))($f);
$__t1 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4, &$__local_var_5) {
  $__num = \func_num_args();
  $__res = ($__local_var_5)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_4));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Done"))) {
$__t1 = new Phpurs_Data0("Done");
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
}))($v);
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_drop'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $__local_var_0 = (((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_0, &$dictApplicative) {
  $__fn = function($v, $v1 = null) use (&$__local_var_0, &$dictApplicative, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  switch ($v) {
case 0:
$__t6 = $v1;
break;
default:
$__t6 = ((($__local_var_0)->map)(function($v2) use (&$dictApplicative, &$v) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Yield"))) {
$__local_var_2 = ($v2)->value1;
$__local_var_3 = ((($GLOBALS['Control_Monad_List_Trans_drop'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_drop')))($dictApplicative))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1));
$__t1 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_2, &$__local_var_3) {
  $__num = \func_num_args();
  $__res = ($__local_var_3)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_2));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v2) && (($v2)->tag === "Skip"))) {
$__local_var_4 = ($v2)->value0;
$__local_var_5 = ((($GLOBALS['Control_Monad_List_Trans_drop'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_drop')))($dictApplicative))($v);
$__t1 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4, &$__local_var_5) {
  $__num = \func_num_args();
  $__res = ($__local_var_5)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_4));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v2) && (($v2)->tag === "Done"))) {
$__t1 = new Phpurs_Data0("Done");
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
}))($v1);
break;
};
  $__res = $__t6;
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_cons'] = function() { $v = (function() {
  $__fn = function($dictApplicative, $lh = null, $t = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($dictApplicative)->pure)(new Phpurs_Data2("Yield", (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($lh), $t));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_unfoldable1ListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $Applicative0_0 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $singleton1_1 = (($GLOBALS['Control_Monad_List_Trans_singleton'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_singleton')))($Applicative0_0);
  $__res = (object)["unfoldr1" => (function() use (&$Applicative0_0, &$singleton1_1) {
  $__fn = function($f, $b = null) use (&$Applicative0_0, &$singleton1_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$Applicative0_0, &$f, &$go, &$singleton1_1) {
  $__num = \func_num_args();
  if ((is_object(($v)->value1) && ((($v)->value1)->tag === "Nothing"))) {
$__t2 = ($singleton1_1)(($v)->value0);
} else {
if ((is_object(($v)->value1) && ((($v)->value1)->tag === "Just"))) {
$__local_var_3 = ($v)->value0;
$__local_var_4 = (($v)->value1)->value0;
$__t2 = (($Applicative0_0)->pure)(new Phpurs_Data2("Yield", (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))((($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3) {
  $__num = \func_num_args();
  $__res = $__local_var_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})), (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v1) use (&$__local_var_4, &$f, &$go) {
  $__num = \func_num_args();
  $__res = ($go)(($f)($__local_var_4));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = ($go)(($f)($b));
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_unfoldableListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $Applicative0_0 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $nil1_1 = (($Applicative0_0)->pure)(new Phpurs_Data0("Done"));
  $unfoldable1ListT1_2 = (($GLOBALS['Control_Monad_List_Trans_unfoldable1ListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_unfoldable1ListT')))($dictMonad);
  $__res = (object)["unfoldr" => (function() use (&$Applicative0_0, &$nil1_1) {
  $__fn = function($f, $b = null) use (&$Applicative0_0, &$nil1_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($v) use (&$Applicative0_0, &$f, &$go, &$nil1_1) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t3 = $nil1_1;
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__local_var_4 = (($v)->value0)->value0;
$__local_var_5 = (($v)->value0)->value1;
$__t3 = (($Applicative0_0)->pure)(new Phpurs_Data2("Yield", (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))((($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4) {
  $__num = \func_num_args();
  $__res = $__local_var_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})), (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v1) use (&$__local_var_5, &$f, &$go) {
  $__num = \func_num_args();
  $__res = ($go)(($f)($__local_var_5));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = ($go)(($f)($b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => function($dollar__unused_0) use (&$unfoldable1ListT1_2) {
  $__num = \func_num_args();
  $__res = $unfoldable1ListT1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_semigroupListT'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $__res = (object)["append" => (($GLOBALS['Control_Monad_List_Trans_concat'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_concat')))($dictApplicative)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_concat'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $__local_var_0 = (((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_0, &$dictApplicative) {
  $__fn = function($x, $y = null) use (&$__local_var_0, &$dictApplicative, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->map)(function($v) use (&$dictApplicative, &$y) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Yield"))) {
$__local_var_2 = ($v)->value1;
$__t1 = new Phpurs_Data2("Yield", ($v)->value0, (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_2, &$dictApplicative, &$y) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Control_Monad_List_Trans_concat'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_concat')))($dictApplicative))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_2)))($y);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Skip"))) {
$__local_var_3 = ($v)->value0;
$__t1 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3, &$dictApplicative, &$y) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Control_Monad_List_Trans_concat'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_concat')))($dictApplicative))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_3)))($y);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Done"))) {
$__t1 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$y) {
  $__num = \func_num_args();
  $__res = $y;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
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
}))($x);
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
\PhpursThunks::$thunks['Control_Monad_List_Trans_monoidListT'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $semigroupListT1_0 = (object)["append" => (($GLOBALS['Control_Monad_List_Trans_concat'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_concat')))($dictApplicative)];
  $__res = (object)["mempty" => (($dictApplicative)->pure)(new Phpurs_Data0("Done")), "Semigroup0" => function($dollar__unused_0) use (&$semigroupListT1_0) {
  $__num = \func_num_args();
  $__res = $semigroupListT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_catMaybes'] = function() { $v = function($dictFunctor) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_List_Trans_mapMaybe'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_mapMaybe')))($dictFunctor))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_monadListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_applicativeListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_applicativeListT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_bindListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_bindListT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_bindListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $append_0 = (($GLOBALS['Control_Monad_List_Trans_concat'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_concat')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__local_var_1 = (((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (object)["bind" => (function() use (&$__local_var_1, &$append_0, &$dictMonad) {
  $__fn = function($fa, $f = null) use (&$__local_var_1, &$append_0, &$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_1)->map)(function($v) use (&$append_0, &$dictMonad, &$f) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Yield"))) {
$__local_var_3 = ($v)->value0;
$__local_var_4 = ($v)->value1;
$__t2 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3, &$__local_var_4, &$append_0, &$dictMonad, &$f) {
  $__num = \func_num_args();
  $__res = (($append_0)(($f)($__local_var_3)))(((((($GLOBALS['Control_Monad_List_Trans_bindListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_bindListT')))($dictMonad))->bind)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_4)))($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Skip"))) {
$__local_var_5 = ($v)->value0;
$__t2 = new Phpurs_Data1("Skip", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_5, &$dictMonad, &$f) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Control_Monad_List_Trans_bindListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_bindListT')))($dictMonad))->bind)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_5)))($f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
if ((is_object($v) && (($v)->tag === "Done"))) {
$__t2 = new Phpurs_Data0("Done");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($fa);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_applyListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_applyListT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_applyListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $functorListT1_0 = (($GLOBALS['Control_Monad_List_Trans_functorListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_functorListT')))((((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \PhpursThunks::eval('Control_Monad_ap')))((object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_applicativeListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_applicativeListT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_bindListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_bindListT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]), "Functor0" => function($dollar__unused_0) use (&$functorListT1_0) {
  $__num = \func_num_args();
  $__res = $functorListT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_applicativeListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["pure" => (($GLOBALS['Control_Monad_List_Trans_singleton'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_singleton')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')))), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_applyListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_applyListT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_monadEffectListT'] = function() { $v = function($dictMonadEffect) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadEffect)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadListT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (object)["pure" => (($GLOBALS['Control_Monad_List_Trans_singleton'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_singleton')))((($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')))), "Apply0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_applyListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_applyListT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_bindListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_bindListT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["liftEffect" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Control_Monad_List_Trans_fromEffect'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_fromEffect')))((($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))))(($dictMonadEffect)->liftEffect), "Monad0" => function($dollar__unused_0) use (&$monadListT1_1) {
  $__num = \func_num_args();
  $__res = $monadListT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_monadSTListT'] = function() { $v = function($dictMonadST) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadST)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $monadListT1_1 = (object)["Applicative0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (object)["pure" => (($GLOBALS['Control_Monad_List_Trans_singleton'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_singleton')))((($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')))), "Apply0" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_applyListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_applyListT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$Monad0_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_bindListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_bindListT')))($Monad0_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["liftST" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Control_Monad_List_Trans_fromEffect'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_fromEffect')))((($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))))(($dictMonadST)->liftST), "Monad0" => function($dollar__unused_0) use (&$monadListT1_1) {
  $__num = \func_num_args();
  $__res = $monadListT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_altListT'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $functorListT1_0 = (($GLOBALS['Control_Monad_List_Trans_functorListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_functorListT')))((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["alt" => (($GLOBALS['Control_Monad_List_Trans_concat'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_concat')))($dictApplicative), "Functor0" => function($dollar__unused_0) use (&$functorListT1_0) {
  $__num = \func_num_args();
  $__res = $functorListT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_plusListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $Applicative0_0 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $altListT1_1 = (($GLOBALS['Control_Monad_List_Trans_altListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_altListT')))($Applicative0_0);
  $__res = (object)["empty" => (($Applicative0_0)->pure)(new Phpurs_Data0("Done")), "Alt0" => function($dollar__unused_0) use (&$altListT1_1) {
  $__num = \func_num_args();
  $__res = $altListT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_alternativeListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $applicativeListT1_0 = (object)["pure" => (($GLOBALS['Control_Monad_List_Trans_singleton'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_singleton')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')))), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_applyListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_applyListT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $plusListT1_1 = (($GLOBALS['Control_Monad_List_Trans_plusListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_plusListT')))($dictMonad);
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeListT1_0) {
  $__num = \func_num_args();
  $__res = $applicativeListT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) use (&$plusListT1_1) {
  $__num = \func_num_args();
  $__res = $plusListT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_List_Trans_monadPlusListT'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $monadListT1_0 = (object)["Applicative0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (object)["pure" => (($GLOBALS['Control_Monad_List_Trans_singleton'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_singleton')))((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')))), "Apply0" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_applyListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_applyListT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$dictMonad) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_List_Trans_bindListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_bindListT')))($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $alternativeListT1_1 = (($GLOBALS['Control_Monad_List_Trans_alternativeListT'] ?? \PhpursThunks::eval('Control_Monad_List_Trans_alternativeListT')))($dictMonad);
  $__res = (object)["Monad0" => function($dollar__unused_0) use (&$monadListT1_0) {
  $__num = \func_num_args();
  $__res = $monadListT1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alternative1" => function($dollar__unused_0) use (&$alternativeListT1_1) {
  $__num = \func_num_args();
  $__res = $alternativeListT1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };






















































