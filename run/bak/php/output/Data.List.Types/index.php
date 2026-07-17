<?php

namespace Data\List\Types;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Comonad, Control.Extend, Control.Monad, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Eq, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Functor, Data.FunctorWithIndex, Data.HeytingAlgebra, Data.List.Types, Data.Maybe, Data.Monoid, Data.Newtype, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semigroup.Foldable, Data.Semigroup.Traversable, Data.Semiring, Data.Show, Data.Traversable, Data.TraversableWithIndex, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Comonad, Control.Extend, Control.Monad, Control.MonadPlus, Control.Plus, Control.Semigroupoid, Data.Eq, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Functor, Data.FunctorWithIndex, Data.HeytingAlgebra, Data.List.Types, Data.Maybe, Data.Monoid, Data.Newtype, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semigroup.Foldable, Data.Semigroup.Traversable, Data.Semiring, Data.Show, Data.Traversable, Data.TraversableWithIndex, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
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
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
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
\PhpursThunks::$thunks['Data_List_Types_Nil'] = function() { $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); return $v; };
\PhpursThunks::$thunks['Data_List_Types_Cons'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Data_List_Types_NonEmptyList'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Types_toList'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Types_newtypeNonEmptyList'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_nelCons'] = function() { $v = (function() {
  $__fn = function($a, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $a, new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Types_listMap'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $chunkedRevMap = null;
  $chunkedRevMap = (function() use (&$chunkedRevMap, &$f) {
  $__fn = function($v, $v1 = null) use (&$chunkedRevMap, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (((is_object($v1) && (($v1)->tag === "Cons")) && ((is_object(($v1)->value1) && ((($v1)->value1)->tag === "Cons")) && (is_object((($v1)->value1)->value1) && (((($v1)->value1)->value1)->tag === "Cons"))))) {
$__t4 = (($chunkedRevMap)(new Phpurs_Data2("Cons", $v1, $v)))(((($v1)->value1)->value1)->value1);
} else {
$reverseUnrolledMap = null;
$reverseUnrolledMap = (function() use (&$f, &$reverseUnrolledMap) {
  $__fn = function($v2, $v3 = null) use (&$f, &$reverseUnrolledMap, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (((is_object($v2) && (($v2)->tag === "Cons")) && ((is_object(($v2)->value0) && ((($v2)->value0)->tag === "Cons")) && ((is_object((($v2)->value0)->value1) && (((($v2)->value0)->value1)->tag === "Cons")) && (is_object(((($v2)->value0)->value1)->value1) && ((((($v2)->value0)->value1)->value1)->tag === "Cons")))))) {
$__t0 = (($reverseUnrolledMap)(($v2)->value1))(new Phpurs_Data2("Cons", ($f)((($v2)->value0)->value0), new Phpurs_Data2("Cons", ($f)(((($v2)->value0)->value1)->value0), new Phpurs_Data2("Cons", ($f)((((($v2)->value0)->value1)->value1)->value0), $v3))));
} else {
$__t0 = $v3;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if ((is_object(($v1)->value1) && ((($v1)->value1)->tag === "Cons"))) {
if ((is_object((($v1)->value1)->value1) && (((($v1)->value1)->value1)->tag === "Nil"))) {
$__t3 = new Phpurs_Data2("Cons", ($f)(($v1)->value0), new Phpurs_Data2("Cons", ($f)((($v1)->value1)->value0), new Phpurs_Data0("Nil")));
} else {
$__t3 = new Phpurs_Data0("Nil");
};
$__t2 = $__t3;
} else {
if ((is_object(($v1)->value1) && ((($v1)->value1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data2("Cons", ($f)(($v1)->value0), new Phpurs_Data0("Nil"));
} else {
$__t2 = new Phpurs_Data0("Nil");
};
};
$__t1 = $__t2;
} else {
$__t1 = new Phpurs_Data0("Nil");
};
$__t4 = (($reverseUnrolledMap)($v))($__t1);
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($chunkedRevMap)(new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Types_functorList'] = function() { $v = (object)["map" => ($GLOBALS['Data_List_Types_listMap'] ?? \PhpursThunks::eval('Data_List_Types_listMap'))]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_functorNonEmptyList'] = function() { $v = (object)["map" => (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", ($f)(($m)->value0), ((($GLOBALS['Data_List_Types_listMap'] ?? \PhpursThunks::eval('Data_List_Types_listMap')))($f))(($m)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_foldableList'] = function() { $v = (object)["foldr" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t0 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
})();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldl)((function() use (&$f) {
  $__fn = function($b, $a = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($f)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($b)))(($go)(new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => function($f) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($b, $v = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t1 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t1 = (($go)((($f)($b))(($v)->value0)))(($v)->value1);
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
  $__res = (((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldl)(function($acc) use (&$dictMonoid, &$f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)($acc)))($f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($mempty_2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_intercalate'] = function() { $v = ((($GLOBALS['Data_Foldable_intercalate'] ?? \PhpursThunks::eval('Data_Foldable_intercalate')))(($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList'))))(($GLOBALS['Data_Monoid_monoidString'] ?? \PhpursThunks::eval('Data_Monoid_monoidString'))); return $v; };
\PhpursThunks::$thunks['Data_List_Types_foldableNonEmptyList'] = function() { $v = (($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldableNonEmpty')))(($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList'))); return $v; };
\PhpursThunks::$thunks['Data_List_Types_foldableWithIndexList'] = function() { $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f, $b = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($b, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = (($go)(new Phpurs_Data2("Tuple", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($b)->value0))(1), new Phpurs_Data2("Cons", ($v)->value0, ($b)->value1))))(($v)->value1);
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
})();
  $v_1 = (($go)(new Phpurs_Data2("Tuple", 0, new Phpurs_Data0("Nil"))))($xs);
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($b, $v = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t2 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t2 = (($go)(new Phpurs_Data2("Tuple", ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))(($b)->value0))(1), ((($f)(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))(($b)->value0))(1)))(($v)->value0))(($b)->value1))))(($v)->value1);
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
  $__res = ((($go)(new Phpurs_Data2("Tuple", ($v_1)->value0, $b)))(($v_1)->value1))->value1;
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
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($b, $v = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t3 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t3 = (($go)(new Phpurs_Data2("Tuple", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($b)->value0))(1), ((($f)(($b)->value0))(($b)->value1))(($v)->value0))))(($v)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Tuple_snd'] ?? \PhpursThunks::eval('Data_Tuple_snd'))))(($go)(new Phpurs_Data2("Tuple", 0, $acc)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_4 = ($dictMonoid)->mempty;
  $__res = function($f) use (&$dictMonoid, &$mempty_4) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Types_foldableWithIndexList')))->foldlWithIndex)((function() use (&$dictMonoid, &$f) {
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
})()))($mempty_4);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_foldableWithIndexNonEmpty'] = function() { $v = (($GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldableWithIndexNonEmpty')))(($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Types_foldableWithIndexList'))); return $v; };
\PhpursThunks::$thunks['Data_List_Types_foldableWithIndexNonEmptyList'] = function() { $v = (object)["foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $foldMapWithIndex1_0 = ((($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_List_Types_foldableWithIndexNonEmpty')))->foldMapWithIndex)($dictMonoid);
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
})))($v);
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
  $__res = ((((($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_List_Types_foldableWithIndexNonEmpty')))->foldlWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(function($v2) use (&$__local_var_3) {
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
})))($b))($v);
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
  $__res = ((((($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_List_Types_foldableWithIndexNonEmpty')))->foldrWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(function($v2) use (&$__local_var_5) {
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
})))($b))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_foldableNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_foldableNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_functorWithIndexList'] = function() { $v = (object)["mapWithIndex" => function($f) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Types_foldableWithIndexList')))->foldrWithIndex)((function() use (&$f) {
  $__fn = function($i, $x = null, $acc = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Cons", (($f)($i))($x), $acc);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_mapWithIndex'] = function() { $v = ((($GLOBALS['Data_NonEmpty_functorWithIndex'] ?? \PhpursThunks::eval('Data_NonEmpty_functorWithIndex')))(($GLOBALS['Data_List_Types_functorWithIndexList'] ?? \PhpursThunks::eval('Data_List_Types_functorWithIndexList'))))->mapWithIndex; return $v; };
\PhpursThunks::$thunks['Data_List_Types_functorWithIndexNonEmptyList'] = function() { $v = (object)["mapWithIndex" => (function() {
  $__fn = function($fn, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1);
  $__res = ((($GLOBALS['Data_List_Types_mapWithIndex'] ?? \PhpursThunks::eval('Data_List_Types_mapWithIndex')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($fn))(function($v2) use (&$__local_var_0) {
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
})))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_functorNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_semigroupList'] = function() { $v = (object)["append" => (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))($ys))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_monoidList'] = function() { $v = (object)["mempty" => new Phpurs_Data0("Nil"), "Semigroup0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Types_semigroupList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_semigroupNonEmptyList'] = function() { $v = (object)["append" => (function() {
  $__fn = function($v, $as__prime__ = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", ($v)->value0, ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))(new Phpurs_Data2("Cons", ($as__prime__)->value0, ($as__prime__)->value1)))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_showList'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $show_0 = ($dictShow)->show;
  $__res = (object)["show" => function($v) use (&$show_0) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t1 = "Nil";
} else {
$__t1 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("("))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(((($GLOBALS['Data_List_Types_intercalate'] ?? \PhpursThunks::eval('Data_List_Types_intercalate')))(" : "))(((($GLOBALS['Data_List_Types_listMap'] ?? \PhpursThunks::eval('Data_List_Types_listMap')))($show_0))($v))))(" : Nil)"));
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Types_showNonEmptyList'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($v) use (&$dictShow) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(NonEmptyList "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(((((($GLOBALS['Data_NonEmpty_showNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_showNonEmpty')))($dictShow))((($GLOBALS['Data_List_Types_showList'] ?? \PhpursThunks::eval('Data_List_Types_showList')))($dictShow)))->show)($v)))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Types_traversableList'] = function() { $v = (object)["traverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($f) use (&$Apply0_0, &$dictApplicative) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($b, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t1 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v)->value0, $b)))(($v)->value1);
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
  $go = null;
  $go = (function() use (&$Apply0_0, &$f, &$go) {
  $__fn = function($b, $v = null) use (&$Apply0_0, &$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t2 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t2 = (($go)((((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))($Apply0_0))((function() {
  $__fn = function($b, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $a, $b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($b)))($f))(($v)->value0)))(($v)->value1);
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
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($go)(new Phpurs_Data0("Nil")))))(($go)((($dictApplicative)->pure)(new Phpurs_Data0("Nil"))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Types_traversableList'] ?? \PhpursThunks::eval('Data_List_Types_traversableList')))->traverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_traversableNonEmptyList'] = function() { $v = (($GLOBALS['Data_NonEmpty_traversableNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_traversableNonEmpty')))(($GLOBALS['Data_List_Types_traversableList'] ?? \PhpursThunks::eval('Data_List_Types_traversableList'))); return $v; };
\PhpursThunks::$thunks['Data_List_Types_traversableWithIndexList'] = function() { $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($f) use (&$Apply0_0, &$dictApplicative) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($b, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t1 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v)->value0, $b)))(($v)->value1);
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
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($go)(new Phpurs_Data0("Nil")))))((((($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Types_foldableWithIndexList')))->foldlWithIndex)((function() use (&$Apply0_0, &$f) {
  $__fn = function($i, $acc = null) use (&$Apply0_0, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))($Apply0_0))((function() {
  $__fn = function($b, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $a, $b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($acc)))(($f)($i));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))((($dictApplicative)->pure)(new Phpurs_Data0("Nil"))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_functorWithIndexList'] ?? \PhpursThunks::eval('Data_List_Types_functorWithIndexList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Types_foldableWithIndexList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_traversableList'] ?? \PhpursThunks::eval('Data_List_Types_traversableList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_traverseWithIndex'] = function() { $v = ((($GLOBALS['Data_NonEmpty_traversableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_traversableWithIndexNonEmpty')))(($GLOBALS['Data_List_Types_traversableWithIndexList'] ?? \PhpursThunks::eval('Data_List_Types_traversableWithIndexList'))))->traverseWithIndex; return $v; };
\PhpursThunks::$thunks['Data_List_Types_traversableWithIndexNonEmptyList'] = function() { $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = \func_num_args();
  $traverseWithIndex1_0 = (($GLOBALS['Data_List_Types_traverseWithIndex'] ?? \PhpursThunks::eval('Data_List_Types_traverseWithIndex')))($dictApplicative);
  $__res = (function() use (&$dictApplicative, &$traverseWithIndex1_0) {
  $__fn = function($f, $v = null) use (&$dictApplicative, &$traverseWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_1 = (($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1);
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_List_Types_NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_NonEmptyList'))))((($traverseWithIndex1_0)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(function($v2) use (&$__local_var_1) {
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
})))($v));
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
  $__res = ($GLOBALS['Data_List_Types_functorWithIndexNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_functorWithIndexNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_foldableWithIndexNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_foldableWithIndexNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_traversableNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_traversableNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_unfoldable1List'] = function() { $v = (object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($source, $memo = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_0 = ($f)($source);
  if ((is_object(($v_0)->value1) && ((($v_0)->value1)->tag === "Just"))) {
$__t1 = (($go)((($v_0)->value1)->value0))(new Phpurs_Data2("Cons", ($v_0)->value0, $memo));
} else {
if ((is_object(($v_0)->value1) && ((($v_0)->value1)->tag === "Nothing"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($b, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t2 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t2 = (($go)(new Phpurs_Data2("Cons", ($v)->value0, $b)))(($v)->value1);
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
$__t1 = (($go)(new Phpurs_Data0("Nil")))(new Phpurs_Data2("Cons", ($v_0)->value0, $memo));
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
  $__res = (($go)($b))(new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_unfoldableList'] = function() { $v = (object)["unfoldr" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($source, $memo = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_0 = ($f)($source);
  if ((is_object($v_0) && (($v_0)->tag === "Nothing"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($b, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t2 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t2 = (($go)(new Phpurs_Data2("Cons", ($v)->value0, $b)))(($v)->value1);
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
$__t1 = (($go)(new Phpurs_Data0("Nil")))($memo);
} else {
if ((is_object($v_0) && (($v_0)->tag === "Just"))) {
$__t1 = (($go)((($v_0)->value0)->value1))(new Phpurs_Data2("Cons", (($v_0)->value0)->value0, $memo));
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
  $__res = (($go)($b))(new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_unfoldable1List'] ?? \PhpursThunks::eval('Data_List_Types_unfoldable1List'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_unfoldable1NonEmptyList'] = function() { $v = (object)["unfoldr1" => (function() {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = ($f)($b);
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($source, $memo = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($source) && (($source)->tag === "Just"))) {
$__t2 = (($go)((($f)(($source)->value0))->value1))(new Phpurs_Data2("Cons", (($f)(($source)->value0))->value0, $memo));
} else {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($b, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t1 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v)->value0, $b)))(($v)->value1);
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
$__t2 = (($go)(new Phpurs_Data0("Nil")))($memo);
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = new Phpurs_Data2("NonEmpty", ($__local_var_0)->value0, (($go)(($__local_var_0)->value1))(new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_foldable1NonEmptyList'] = function() { $v = (($GLOBALS['Data_NonEmpty_foldable1NonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldable1NonEmpty')))(($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList'))); return $v; };
\PhpursThunks::$thunks['Data_List_Types_extendNonEmptyList'] = function() { $v = (object)["extend" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", ($f)($v), (((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)((function() use (&$f) {
  $__fn = function($a, $v1 = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["val" => new Phpurs_Data2("Cons", ($f)(new Phpurs_Data2("NonEmpty", $a, ($v1)->acc)), ($v1)->val), "acc" => new Phpurs_Data2("Cons", $a, ($v1)->acc)];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))((object)["val" => new Phpurs_Data0("Nil"), "acc" => new Phpurs_Data0("Nil")]))(($v)->value1))->val);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_functorNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_extendList'] = function() { $v = (object)["extend" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t0 = new Phpurs_Data2("Cons", ($v)($v1), (((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)((function() use (&$v) {
  $__fn = function($a__prime__, $v2 = null) use (&$v, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["val" => new Phpurs_Data2("Cons", ($v)(new Phpurs_Data2("Cons", $a__prime__, ($v2)->acc)), ($v2)->val), "acc" => new Phpurs_Data2("Cons", $a__prime__, ($v2)->acc)];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))((object)["val" => new Phpurs_Data0("Nil"), "acc" => new Phpurs_Data0("Nil")]))(($v1)->value1))->val);
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
  $__res = ($GLOBALS['Data_List_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_eq1List'] = function() { $v = (object)["eq1" => (function() {
  $__fn = function($dictEq, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = (function() use (&$dictEq, &$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$dictEq, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (( ! $v2)) {
$__t0 = false;
} else {
if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = ((is_object($v1) && (($v1)->tag === "Nil")) && $v2);
} else {
$__t0 = ((is_object($v) && (($v)->tag === "Cons")) && ((is_object($v1) && (($v1)->tag === "Cons")) && ((($go)(($v)->value1))(($v1)->value1))(((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))($v2))(((($dictEq)->eq)(($v1)->value0))(($v)->value0)))));
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = ((($go)($xs))($ys))(true);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_eq1NonEmptyList'] = function() { $v = (object)["eq1" => function($dictEq) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_eqNonEmpty')))(($GLOBALS['Data_List_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Types_eq1List'))))($dictEq))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_eqList'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (object)["eq" => ((($GLOBALS['Data_List_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Types_eq1List')))->eq1)($dictEq)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Types_eqNonEmptyList'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_eqNonEmpty')))(($GLOBALS['Data_List_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Types_eq1List'))))($dictEq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Types_ord1List'] = function() { $v = (object)["compare1" => (function() {
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
$__t3 = (($go)(($v)->value1))(($v1)->value1);
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
  $__res = (($go)($xs))($ys);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Eq10" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Types_eq1List'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_ordNonEmpty'] = function() { $v = (($GLOBALS['Data_NonEmpty_ordNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_ordNonEmpty')))(($GLOBALS['Data_List_Types_ord1List'] ?? \PhpursThunks::eval('Data_List_Types_ord1List'))); return $v; };
\PhpursThunks::$thunks['Data_List_Types_ord1NonEmptyList'] = function() { $v = (($GLOBALS['Data_NonEmpty_ord1NonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_ord1NonEmpty')))(($GLOBALS['Data_List_Types_ord1List'] ?? \PhpursThunks::eval('Data_List_Types_ord1List'))); return $v; };
\PhpursThunks::$thunks['Data_List_Types_ordList'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (object)["compare" => (function() use (&$dictOrd) {
  $__fn = function($xs, $ys = null) use (&$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
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
$__t3 = (($go)(($v)->value1))(($v1)->value1);
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
  $__res = (($go)($xs))($ys);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$dictOrd) {
  $__num = \func_num_args();
  $__res = (object)["eq" => ((($GLOBALS['Data_List_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Types_eq1List')))->eq1)((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Types_ordNonEmptyList'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_Types_ordNonEmpty'] ?? \PhpursThunks::eval('Data_List_Types_ordNonEmpty')))($dictOrd);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Types_comonadNonEmptyList'] = function() { $v = (object)["extract" => function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Extend0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_extendNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_extendNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_applyList'] = function() { $v = (object)["apply" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))((((($GLOBALS['Data_List_Types_applyList'] ?? \PhpursThunks::eval('Data_List_Types_applyList')))->apply)(($v)->value1))($v1)))(((($GLOBALS['Data_List_Types_listMap'] ?? \PhpursThunks::eval('Data_List_Types_listMap')))(($v)->value0))($v1));
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
  $__res = ($GLOBALS['Data_List_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_applyNonEmptyList'] = function() { $v = (object)["apply" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", (($v)->value0)(($v1)->value0), ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))((((($GLOBALS['Data_List_Types_applyList'] ?? \PhpursThunks::eval('Data_List_Types_applyList')))->apply)(new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1)))(($v1)->value1)))((((($GLOBALS['Data_List_Types_applyList'] ?? \PhpursThunks::eval('Data_List_Types_applyList')))->apply)(($v)->value1))(new Phpurs_Data2("Cons", ($v1)->value0, new Phpurs_Data0("Nil")))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_functorNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_bindList'] = function() { $v = (object)["bind" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))((((($GLOBALS['Data_List_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Types_bindList')))->bind)(($v)->value1))($v1)))(($v1)(($v)->value0));
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
  $__res = ($GLOBALS['Data_List_Types_applyList'] ?? \PhpursThunks::eval('Data_List_Types_applyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_bindNonEmptyList'] = function() { $v = (object)["bind" => (function() {
  $__fn = function($v, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v1_0 = ($f)(($v)->value0);
  $__res = new Phpurs_Data2("NonEmpty", ($v1_0)->value0, ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))((((($GLOBALS['Data_List_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Types_bindList')))->bind)(($v)->value1))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Types_toList'] ?? \PhpursThunks::eval('Data_List_Types_toList'))))($f))))(($v1_0)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_applyNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_applyNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_applicativeList'] = function() { $v = (object)["pure" => function($a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $a, new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_applyList'] ?? \PhpursThunks::eval('Data_List_Types_applyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_monadList'] = function() { $v = (object)["Applicative0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_applicativeList'] ?? \PhpursThunks::eval('Data_List_Types_applicativeList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Types_bindList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_altNonEmptyList'] = function() { $v = (object)["alt" => (($GLOBALS['Data_List_Types_semigroupNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_semigroupNonEmptyList')))->append, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_functorNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_altList'] = function() { $v = (object)["alt" => (($GLOBALS['Data_List_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Types_semigroupList')))->append, "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Types_functorList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_plusList'] = function() { $v = (object)["empty" => new Phpurs_Data0("Nil"), "Alt0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_altList'] ?? \PhpursThunks::eval('Data_List_Types_altList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_alternativeList'] = function() { $v = (object)["Applicative0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_applicativeList'] ?? \PhpursThunks::eval('Data_List_Types_applicativeList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_plusList'] ?? \PhpursThunks::eval('Data_List_Types_plusList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_monadPlusList'] = function() { $v = (object)["Monad0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_monadList'] ?? \PhpursThunks::eval('Data_List_Types_monadList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Alternative1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_alternativeList'] ?? \PhpursThunks::eval('Data_List_Types_alternativeList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_applicativeNonEmptyList'] = function() { $v = (object)["pure" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Types_NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_NonEmptyList'))))(function($a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $a, new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), "Apply0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_applyNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_applyNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_monadNonEmptyList'] = function() { $v = (object)["Applicative0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_applicativeNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_applicativeNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_bindNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_bindNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Types_traversable1NonEmptyList'] = function() { $v = (object)["traverse1" => function($dictApply) {
  $__num = \func_num_args();
  $Functor0_0 = (($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$Functor0_0, &$dictApply) {
  $__fn = function($f, $v = null) use (&$Functor0_0, &$dictApply, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$dictApply, &$f, &$go) {
  $__fn = function($b, $v = null) use (&$dictApply, &$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t2 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t2 = (($go)((((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))($dictApply))((function() {
  $__fn = function($b, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $a, new Phpurs_Data2("Cons", ($b)->value0, ($b)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($b)))($f))(($v)->value0)))(($v)->value1);
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
  $__res = ((($Functor0_0)->map)(function($v1) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($b, $v = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t1 = $b;
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("NonEmpty", ($v)->value0, new Phpurs_Data2("Cons", ($b)->value0, ($b)->value1))))(($v)->value1);
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
  $__res = (($go)(((($GLOBALS['Data_List_Types_applicativeNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_applicativeNonEmptyList')))->pure)(($v1)->value0)))(($v1)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($go)(((($Functor0_0)->map)((($GLOBALS['Data_List_Types_applicativeNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_applicativeNonEmptyList')))->pure))(($f)(($v)->value0))))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "sequence1" => function($dictApply) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Types_traversable1NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_traversable1NonEmptyList')))->traverse1)($dictApply))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable10" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_foldable1NonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Types_traversableNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_traversableNonEmptyList'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };




























































