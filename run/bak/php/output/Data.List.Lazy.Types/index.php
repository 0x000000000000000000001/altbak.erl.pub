<?php

namespace Data\List\Lazy\Types;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Comonad, Control.Extend, Control.Lazy, Control.Monad, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Eq, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Functor, Data.FunctorWithIndex, Data.Lazy, Data.List.Lazy.Types, Data.Maybe, Data.Monoid, Data.Newtype, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Traversable, Data.TraversableWithIndex, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Comonad, Control.Extend, Control.Lazy, Control.Monad, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Eq, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Functor, Data.FunctorWithIndex, Data.Lazy, Data.List.Lazy.Types, Data.Maybe, Data.Monoid, Data.Newtype, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Traversable, Data.TraversableWithIndex, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
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
\PhpursThunks::$thunks['Data_List_Lazy_Types_List'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_Nil'] = function() { $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_Cons'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_NonEmptyList'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_nil'] = function() { $v = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nil");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_newtypeNonEmptyList'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_newtypeList'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_step'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force'))))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_semigroupList'] = function() { $v = (object)["append" => (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$ys) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($ys);
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
$__t2 = new Phpurs_Data2("Cons", ($__local_var_1)->value0, (((($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList')))->append)(($__local_var_1)->value1))($ys));
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
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_monoidList'] = function() { $v = (object)["mempty" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')), "Semigroup0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_lazyList'] = function() { $v = (object)["defer" => function($f) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step'))))($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_functorList'] = function() { $v = (object)["map" => (function() {
  $__fn = function($f, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$f) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data0("Nil");
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
$__t2 = new Phpurs_Data2("Cons", ($f)(($__local_var_1)->value0), (((($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorList')))->map)($f))(($__local_var_1)->value1));
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
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_functorNonEmptyList'] = function() { $v = (object)["map" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$f) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__res = new Phpurs_Data2("NonEmpty", ($f)(($__local_var_0)->value0), (((($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorList')))->map)($f))(($__local_var_0)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_eq1List'] = function() { $v = (object)["eq1" => (function() {
  $__fn = function($dictEq, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = (function() use (&$dictEq, &$go) {
  $__fn = function($v, $v1 = null) use (&$dictEq, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = (is_object($v1) && (($v1)->tag === "Nil"));
} else {
$__t0 = ((is_object($v) && (($v)->tag === "Cons")) && ((is_object($v1) && (($v1)->tag === "Cons")) && (((($dictEq)->eq)(($v)->value0))(($v1)->value0) && (($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v)->value1)))((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v1)->value1)))));
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = (($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($xs)))((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($ys));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_eq1NonEmptyList'] = function() { $v = (object)["eq1" => function($dictEq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Lazy_eq1Lazy'] ?? \PhpursThunks::eval('Data_Lazy_eq1Lazy')))->eq1)(((($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_eqNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_eq1List'))))($dictEq));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_eqList'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (object)["eq" => ((($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_eq1List')))->eq1)($dictEq)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_eqNonEmptyList'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__local_var_0 = ((($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_eqNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_eq1List'))))($dictEq);
  $__res = (object)["eq" => (function() use (&$__local_var_0) {
  $__fn = function($x, $y = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->eq)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($x)))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($y));
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
\PhpursThunks::$thunks['Data_List_Lazy_Types_ord1List'] = function() { $v = (object)["compare1" => (function() {
  $__fn = function($dictOrd, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = (function() use (&$dictOrd, &$go) {
  $__fn = function($v, $v1 = null) use (&$dictOrd, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = new Phpurs_Data0("EQ");
} else {
$__t1 = new Phpurs_Data0("LT");
};
$__t0 = $__t1;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("GT");
} else {
if (((is_object($v) && (($v)->tag === "Cons")) && (is_object($v1) && (($v1)->tag === "Cons")))) {
$v2_2 = ((($dictOrd)->compare)(($v)->value0))(($v1)->value0);
if ((is_object($v2_2) && (($v2_2)->tag === "EQ"))) {
$__t3 = (($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v)->value1)))((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v1)->value1));
} else {
$__t3 = $v2_2;
};
$__t0 = $__t3;
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
})();
  $__res = (($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($xs)))((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($ys));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Eq10" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_eq1List'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_ordNonEmpty'] = function() { $v = (($GLOBALS['Data_NonEmpty_ordNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_ordNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_ord1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_ord1List'))); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_ord1NonEmptyList'] = function() { $v = (object)["compare1" => function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Lazy_ordLazy'] ?? \PhpursThunks::eval('Data_Lazy_ordLazy')))((($GLOBALS['Data_List_Lazy_Types_ordNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_ordNonEmpty')))($dictOrd)))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_eq1NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_eq1NonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_ordList'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (object)["compare" => ((($GLOBALS['Data_List_Lazy_Types_ord1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_ord1List')))->compare1)($dictOrd), "Eq0" => function($dollar__unused_0) use (&$dictOrd) {
  $__num = \func_num_args();
  $__res = (object)["eq" => ((($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_eq1List')))->eq1)((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_ordNonEmptyList'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_ordLazy'] ?? \PhpursThunks::eval('Data_Lazy_ordLazy')))((($GLOBALS['Data_List_Lazy_Types_ordNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_ordNonEmpty')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_cons'] = function() { $v = (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$x, &$xs) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $x, $xs);
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
\PhpursThunks::$thunks['Data_List_Lazy_Types_foldableList'] = function() { $v = (object)["foldr" => (function() {
  $__fn = function($op, $z = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)((function() use (&$op) {
  $__fn = function($b, $a = null) use (&$op, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($op)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($z))(((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)((function() {
  $__fn = function($b, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$a, &$b) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $a, $b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'))))($xs));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => function($op) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go, &$op) {
  $__fn = function($b, $xs = null) use (&$go, &$op, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($xs);
  if ((is_object($v_0) && (($v_0)->tag === "Nil"))) {
$__t1 = $b;
} else {
if ((is_object($v_0) && (($v_0)->tag === "Cons"))) {
$__t1 = (($go)((($op)($b))(($v_0)->value0)))(($v_0)->value1);
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
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_2 = ($dictMonoid)->mempty;
  $__res = function($f) use (&$dictMonoid, &$mempty_2) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)((function() use (&$dictMonoid, &$f) {
  $__fn = function($b, $a = null) use (&$dictMonoid, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)($b))(($f)($a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($mempty_2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_foldableNonEmpty'] = function() { $v = (($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldableNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList'))); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_extendList'] = function() { $v = (object)["extend" => (function() {
  $__fn = function($f, $l = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($l);
  if ((is_object($v_0) && (($v_0)->tag === "Nil"))) {
$__t1 = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'));
} else {
if ((is_object($v_0) && (($v_0)->tag === "Cons"))) {
$__local_var_2 = ($f)($l);
$__local_var_7 = (((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldr)((function() use (&$f) {
  $__fn = function($a, $v = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_3 = ($v)->acc;
  $__local_var_4 = ($v)->val;
  $acc__prime___5 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3, &$a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $a, $__local_var_3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  $__local_var_6 = ($f)($acc__prime___5);
  $__res = (object)["val" => (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4, &$__local_var_6) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_6, $__local_var_4);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), "acc" => $acc__prime___5];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))((object)["val" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')), "acc" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'))]))(($v_0)->value1))->val;
$__t1 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_2, &$__local_var_7) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_2, $__local_var_7);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_extendNonEmptyList'] = function() { $v = (object)["extend" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = ((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v))->value1;
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v2) use (&$__local_var_0, &$f, &$v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", ($f)($v), (((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldr)((function() use (&$f) {
  $__fn = function($a, $v1 = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_1 = ($v1)->acc;
  $__local_var_2 = ($v1)->val;
  $__local_var_3 = ($f)((($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v2) use (&$__local_var_1, &$a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $a, $__local_var_1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  $__res = (object)["val" => (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_2, &$__local_var_3) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_3, $__local_var_2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), "acc" => (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_1, &$a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $a, $__local_var_1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))((object)["val" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')), "acc" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'))]))($__local_var_0))->val);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_foldableNonEmptyList'] = function() { $v = (object)["foldr" => (function() {
  $__fn = function($f, $b = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableNonEmpty')))->foldr)($f))($b))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() {
  $__fn = function($f, $b = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableNonEmpty')))->foldl)($f))($b))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $foldMap1_0 = ((($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableNonEmpty')))->foldMap)($dictMonoid);
  $__res = (function() use (&$foldMap1_0) {
  $__fn = function($f, $v = null) use (&$foldMap1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($foldMap1_0)($f))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_showList'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($xs) use (&$dictShow) {
  $__num = \func_num_args();
  $v_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($xs);
  if ((is_object($v_0) && (($v_0)->tag === "Nil"))) {
$__t1 = "";
} else {
if ((is_object($v_0) && (($v_0)->tag === "Cons"))) {
$__t1 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v_0)->value0)))(((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)((function() use (&$dictShow) {
  $__fn = function($shown, $x__prime__ = null) use (&$dictShow, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))($shown))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(","))((($dictShow)->show)($x__prime__)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(""))(($v_0)->value1));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(fromFoldable ["))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))($__t1))("])"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_showNonEmptyList'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($v) use (&$dictShow) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(NonEmptyList "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((((($GLOBALS['Data_Lazy_showLazy'] ?? \PhpursThunks::eval('Data_Lazy_showLazy')))(((($GLOBALS['Data_NonEmpty_showNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_showNonEmpty')))($dictShow))((($GLOBALS['Data_List_Lazy_Types_showList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_showList')))($dictShow))))->show)($v)))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_showStep'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($v) use (&$dictShow) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = "Nil";
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("("))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value0)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(" : "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((((($GLOBALS['Data_List_Lazy_Types_showList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_showList')))($dictShow))->show)(($v)->value1)))(")"))));
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
\PhpursThunks::$thunks['Data_List_Lazy_Types_foldableWithIndexList'] = function() { $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f, $b = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $v_2 = ((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)(function($v1) {
  $__num = \func_num_args();
  $__local_var_0 = ($v1)->value1;
  $__local_var_1 = ($v1)->value0;
  $__res = function($a) use (&$__local_var_0, &$__local_var_1) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($__local_var_1))(1), (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $a, $__local_var_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(new Phpurs_Data2("Tuple", 0, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')))))($xs);
  $__res = (((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)(function($v1) use (&$f) {
  $__num = \func_num_args();
  $__local_var_3 = ($v1)->value1;
  $__local_var_4 = ($v1)->value0;
  $__res = function($a) use (&$__local_var_3, &$__local_var_4, &$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($__local_var_4))(1), ((($f)(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($__local_var_4))(1)))($a))($__local_var_3));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(new Phpurs_Data2("Tuple", ($v_2)->value0, $b)))(($v_2)->value1))->value1;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $acc = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Tuple_snd'] ?? \PhpursThunks::eval('Data_Tuple_snd'))))((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__local_var_5 = ($v)->value1;
  $__local_var_6 = ($v)->value0;
  $__res = function($a) use (&$__local_var_5, &$__local_var_6, &$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($__local_var_6))(1), ((($f)($__local_var_6))($__local_var_5))($a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(new Phpurs_Data2("Tuple", 0, $acc)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_7 = ($dictMonoid)->mempty;
  $__res = function($f) use (&$dictMonoid, &$mempty_7) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableWithIndexList')))->foldlWithIndex)((function() use (&$dictMonoid, &$f) {
  $__fn = function($i, $acc = null) use (&$dictMonoid, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)($acc)))(($f)($i));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($mempty_7);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] = function() { $v = (($GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldableWithIndexNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableWithIndexList'))); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_foldableWithIndexNonEmptyList'] = function() { $v = (object)["foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $foldMapWithIndex1_0 = ((($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableWithIndexNonEmpty')))->foldMapWithIndex)($dictMonoid);
  $__res = (function() use (&$foldMapWithIndex1_0) {
  $__fn = function($f, $v = null) use (&$foldMapWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_1 = (($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1);
  $__res = (($foldMapWithIndex1_0)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(function($v2) use (&$__local_var_1) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t2 = 0;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t2 = ($__local_var_1)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => (function() {
  $__fn = function($f, $b = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_3 = (($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1);
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableWithIndexNonEmpty')))->foldlWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(function($v2) use (&$__local_var_3) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t4 = 0;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t4 = ($__local_var_3)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))($b))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldrWithIndex" => (function() {
  $__fn = function($f, $b = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_5 = (($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1);
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableWithIndexNonEmpty')))->foldrWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(function($v2) use (&$__local_var_5) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t6 = 0;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t6 = ($__local_var_5)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = $__t6;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))($b))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_foldableNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_functorWithIndexList'] = function() { $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableWithIndexList')))->foldrWithIndex)((function() use (&$f) {
  $__fn = function($i, $x = null, $acc = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = (($f)($i))($x);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$acc) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_0, $acc);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_mapWithIndex'] = function() { $v = ((($GLOBALS['Data_NonEmpty_functorWithIndex'] ?? \PhpursThunks::eval('Data_NonEmpty_functorWithIndex')))(($GLOBALS['Data_List_Lazy_Types_functorWithIndexList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorWithIndexList'))))->mapWithIndex; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_functorWithIndexNonEmptyList'] = function() { $v = (object)["mapWithIndex" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v1) use (&$f, &$v) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1);
  $__res = ((($GLOBALS['Data_List_Lazy_Types_mapWithIndex'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_mapWithIndex')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(function($v2) use (&$__local_var_0) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t1 = 0;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t1 = ($__local_var_0)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_toList'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step'))))(function($v1) use (&$v) {
  $__num = \func_num_args();
  $v2_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__local_var_1 = ($v2_0)->value0;
  $__local_var_2 = ($v2_0)->value1;
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_1, &$__local_var_2) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_1, $__local_var_2);
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_semigroupNonEmptyList'] = function() { $v = (object)["append" => (function() {
  $__fn = function($v, $as__prime__ = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v1_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__local_var_1 = ($v1_0)->value0;
  $__local_var_2 = ($v1_0)->value1;
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v2) use (&$__local_var_1, &$__local_var_2, &$as__prime__) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $__local_var_1, (((($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList')))->append)($__local_var_2))((($GLOBALS['Data_List_Lazy_Types_toList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_toList')))($as__prime__)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_traversableList'] = function() { $v = (object)["traverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($f) use (&$Apply0_0, &$dictApplicative) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldr)((function() use (&$Apply0_0, &$f) {
  $__fn = function($a, $b = null) use (&$Apply0_0, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($Apply0_0)->apply)(((((($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_cons'))))(($f)($a))))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))((($dictApplicative)->pure)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_traversableList')))->traverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_traversableNonEmpty'] = function() { $v = (($GLOBALS['Data_NonEmpty_traversableNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_traversableNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_traversableList'))); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_traversableNonEmptyList'] = function() { $v = (object)["traverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $traverse1_0 = ((($GLOBALS['Data_List_Lazy_Types_traversableNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_traversableNonEmpty')))->traverse)($dictApplicative);
  $__res = (function() use (&$dictApplicative, &$traverse1_0) {
  $__fn = function($f, $v = null) use (&$dictApplicative, &$traverse1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(function($xxs) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v1) use (&$xxs) {
  $__num = \func_num_args();
  $__res = $xxs;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($traverse1_0)($f))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v)));
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
  $sequence1_1 = ((($GLOBALS['Data_List_Lazy_Types_traversableNonEmpty'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_traversableNonEmpty')))->sequence)($dictApplicative);
  $__res = function($v) use (&$dictApplicative, &$sequence1_1) {
  $__num = \func_num_args();
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(function($xxs) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v1) use (&$xxs) {
  $__num = \func_num_args();
  $__res = $xxs;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($sequence1_1)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_foldableNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_traversableWithIndexList'] = function() { $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($f) use (&$Apply0_0, &$dictApplicative) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableWithIndexList')))->foldrWithIndex)((function() use (&$Apply0_0, &$f) {
  $__fn = function($i, $a = null, $b = null) use (&$Apply0_0, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($Apply0_0)->apply)(((((($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_cons'))))((($f)($i))($a))))($b);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))((($dictApplicative)->pure)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorWithIndexList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorWithIndexList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableWithIndexList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_traversableList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_traverseWithIndex'] = function() { $v = ((($GLOBALS['Data_NonEmpty_traversableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_traversableWithIndexNonEmpty')))(($GLOBALS['Data_List_Lazy_Types_traversableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_traversableWithIndexList'))))->traverseWithIndex; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_traversableWithIndexNonEmptyList'] = function() { $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = \func_num_args();
  $traverseWithIndex1_0 = (($GLOBALS['Data_List_Lazy_Types_traverseWithIndex'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_traverseWithIndex')))($dictApplicative);
  $__res = (function() use (&$dictApplicative, &$traverseWithIndex1_0) {
  $__fn = function($f, $v = null) use (&$dictApplicative, &$traverseWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_1 = (($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1);
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(function($xxs) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v1) use (&$xxs) {
  $__num = \func_num_args();
  $__res = $xxs;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($traverseWithIndex1_0)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(function($v2) use (&$__local_var_1) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t2 = 0;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t2 = ($__local_var_1)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorWithIndexNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorWithIndexNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableWithIndexNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_traversableNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_traversableNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_unfoldable1List'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($f, $b = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step'))))(function($v) use (&$b, &$f, &$go) {
  $__num = \func_num_args();
  $v1_0 = ($f)($b);
  if ((is_object(($v1_0)->value1) && ((($v1_0)->value1)->tag === "Just"))) {
$__local_var_2 = ($v1_0)->value0;
$__local_var_3 = (($go)($f))((($v1_0)->value1)->value0);
$__t1 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_2, &$__local_var_3) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_2, $__local_var_3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
if ((is_object(($v1_0)->value1) && ((($v1_0)->value1)->tag === "Nothing"))) {
$__local_var_4 = ($v1_0)->value0;
$__t1 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_4, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return (object)["unfoldr1" => $go];
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_unfoldableList'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($f, $b = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step'))))(function($v) use (&$b, &$f, &$go) {
  $__num = \func_num_args();
  $v1_0 = ($f)($b);
  if ((is_object($v1_0) && (($v1_0)->tag === "Nothing"))) {
$__t1 = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'));
} else {
if ((is_object($v1_0) && (($v1_0)->tag === "Just"))) {
$__local_var_2 = (($v1_0)->value0)->value0;
$__local_var_3 = (($go)($f))((($v1_0)->value0)->value1);
$__t1 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_2, &$__local_var_3) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_2, $__local_var_3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return (object)["unfoldr" => $go, "Unfoldable10" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_unfoldable1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_unfoldable1List'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_unfoldr1'] = function() { $v = (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = ($f)($b);
  $__res = new Phpurs_Data2("NonEmpty", ($__local_var_0)->value0, (((($GLOBALS['Data_List_Lazy_Types_unfoldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_unfoldableList')))->unfoldr)(function($v1) use (&$f) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", ($f)(($v1)->value0));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($__local_var_0)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_unfoldable1NonEmptyList'] = function() { $v = (object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$b, &$f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_Lazy_Types_unfoldr1'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_unfoldr1')))($f))($b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_comonadNonEmptyList'] = function() { $v = (object)["extract" => function($v) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v))->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Extend0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_extendNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_extendNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_monadList'] = function() { $v = (object)["Applicative0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_applicativeList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applicativeList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_bindList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_bindList'] = function() { $v = (object)["bind" => (function() {
  $__fn = function($xs, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$f) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data0("Nil");
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
$__t2 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))((((($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList')))->append)(($f)(($__local_var_1)->value0)))((((($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_bindList')))->bind)(($__local_var_1)->value1))($f)));
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
})(), "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_applyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_applyList'] = function() { $v = (object)["apply" => (($GLOBALS['Control_Monad_ap'] ?? \PhpursThunks::eval('Control_Monad_ap')))(($GLOBALS['Data_List_Lazy_Types_monadList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_monadList'))), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_applicativeList'] = function() { $v = (object)["pure" => function($a) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $a, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_applyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_applyNonEmptyList'] = function() { $v = (object)["apply" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v2_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v1);
  $v3_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__local_var_2 = ($v2_0)->value0;
  $__local_var_3 = ($v2_0)->value1;
  $__local_var_4 = ($v3_1)->value0;
  $__local_var_5 = ($v3_1)->value1;
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v4) use (&$__local_var_2, &$__local_var_3, &$__local_var_4, &$__local_var_5) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", ($__local_var_4)($__local_var_2), (((($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList')))->append)((((($GLOBALS['Data_List_Lazy_Types_applyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applyList')))->apply)($__local_var_5))((($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_2) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_2, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))))((((($GLOBALS['Data_List_Lazy_Types_applyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applyList')))->apply)((($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4, &$__local_var_5) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_4, $__local_var_5);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))($__local_var_3)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_bindNonEmptyList'] = function() { $v = (object)["bind" => (function() {
  $__fn = function($v, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v1_0 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v);
  $__local_var_1 = ($v1_0)->value1;
  $v2_2 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($f)(($v1_0)->value0)));
  $__local_var_3 = ($v2_2)->value0;
  $__local_var_4 = ($v2_2)->value1;
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v3) use (&$__local_var_1, &$__local_var_3, &$__local_var_4, &$f) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $__local_var_3, (((($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList')))->append)($__local_var_4))((((($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_bindList')))->bind)($__local_var_1))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_toList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_toList'))))($f))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_applyNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applyNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_altNonEmptyList'] = function() { $v = (object)["alt" => (($GLOBALS['Data_List_Lazy_Types_semigroupNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupNonEmptyList')))->append, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_altList'] = function() { $v = (object)["alt" => (($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList')))->append, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_plusList'] = function() { $v = (object)["empty" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')), "Alt0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_altList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_altList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_alternativeList'] = function() { $v = (object)["Applicative0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_applicativeList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applicativeList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_plusList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_plusList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_monadPlusList'] = function() { $v = (object)["Monad0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_monadList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_monadList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alternative1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_alternativeList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_alternativeList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_applicativeNonEmptyList'] = function() { $v = (object)["pure" => function($a) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $a, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_applyNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applyNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Types_monadNonEmptyList'] = function() { $v = (object)["Applicative0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_applicativeNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_applicativeNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_bindNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_bindNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };

































































