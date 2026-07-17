<?php

namespace Data\FoldableWithIndex;

// ALL IMPORTS: Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Semigroupoid, Data.Const, Data.Either, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Functor.App, Data.Functor.Compose, Data.Functor.Coproduct, Data.Functor.Product, Data.FunctorWithIndex, Data.Identity, Data.Maybe, Data.Maybe.First, Data.Maybe.Last, Data.Monoid, Data.Monoid.Additive, Data.Monoid.Conj, Data.Monoid.Disj, Data.Monoid.Dual, Data.Monoid.Endo, Data.Monoid.Multiplicative, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Prelude, Prim
// TO REQUIRE: Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Semigroupoid, Data.Const, Data.Either, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Functor.App, Data.Functor.Compose, Data.Functor.Coproduct, Data.Functor.Product, Data.FunctorWithIndex, Data.Identity, Data.Maybe, Data.Maybe.First, Data.Maybe.Last, Data.Monoid, Data.Monoid.Additive, Data.Monoid.Conj, Data.Monoid.Disj, Data.Monoid.Dual, Data.Monoid.Endo, Data.Monoid.Multiplicative, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Prelude
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
\PhpursThunks::$thunks['Data_FoldableWithIndex_monoidEndo'] = function() { $v = (($GLOBALS['Data_Monoid_Endo_monoidEndo'] ?? \PhpursThunks::eval('Data_Monoid_Endo_monoidEndo')))(($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn'))); return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_monoidDual'] = function() { $v = (($GLOBALS['Data_Monoid_Dual_monoidDual'] ?? \PhpursThunks::eval('Data_Monoid_Dual_monoidDual')))(($GLOBALS['Data_FoldableWithIndex_monoidEndo'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_monoidEndo'))); return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldrWithIndex'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->foldrWithIndex;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_traverseWithIndex_'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $applySecond_0 = (($GLOBALS['Control_Apply_applySecond'] ?? \PhpursThunks::eval('Control_Apply_applySecond')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (function() use (&$applySecond_0, &$dictApplicative) {
  $__fn = function($dictFoldableWithIndex, $f = null) use (&$applySecond_0, &$dictApplicative, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFoldableWithIndex)->foldrWithIndex)(function($i) use (&$applySecond_0, &$f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($applySecond_0))(($f)($i));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((($dictApplicative)->pure)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
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
\PhpursThunks::$thunks['Data_FoldableWithIndex_forWithIndex_'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $traverseWithIndex_1_0 = (($GLOBALS['Data_FoldableWithIndex_traverseWithIndex_'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_traverseWithIndex_')))($dictApplicative);
  $__res = function($dictFoldableWithIndex) use (&$traverseWithIndex_1_0) {
  $__num = \func_num_args();
  $__local_var_1 = ($traverseWithIndex_1_0)($dictFoldableWithIndex);
  $__res = (function() use (&$__local_var_1) {
  $__fn = function($b, $a = null) use (&$__local_var_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_1)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldrDefault'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictFoldableWithIndex)->foldrWithIndex)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__res = $f;
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
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldlWithIndex'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->foldlWithIndex;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldlDefault'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictFoldableWithIndex)->foldlWithIndex)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__res = $f;
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
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexTuple'] = function() { $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))(($v)->value1))($z);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($z))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableTuple'] ?? \PhpursThunks::eval('Data_Foldable_foldableTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexMultiplicative'] = function() { $v = (object)["foldrWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_0 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($z, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_0)($v))($z);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => function($f) {
  $__num = \func_num_args();
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \PhpursThunks::eval('Data_Foldable_foldableMultiplicative'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexMaybe'] = function() { $v = (object)["foldrWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_0 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($v1, $v2 = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t1 = $v1;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t1 = (($__local_var_0)(($v2)->value0))($v1);
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_2 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_2) {
  $__fn = function($v1, $v2 = null) use (&$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t3 = $v1;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t3 = (($__local_var_2)($v1))(($v2)->value0);
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_4 = ($dictMonoid)->mempty;
  $__res = function($f) use (&$mempty_4) {
  $__num = \func_num_args();
  $__local_var_5 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = function($v1) use (&$__local_var_5, &$mempty_4) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t6 = $mempty_4;
} else {
if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t6 = ($__local_var_5)(($v1)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = $__t6;
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
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableMaybe'] ?? \PhpursThunks::eval('Data_Foldable_foldableMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexLast'] = function() { $v = (object)["foldrWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_0 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($z, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t1 = $z;
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__t1 = (($__local_var_0)(($v)->value0))($z);
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_2 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_2) {
  $__fn = function($z, $v = null) use (&$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t3 = $z;
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__t3 = (($__local_var_2)($z))(($v)->value0);
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_4 = ($dictMonoid)->mempty;
  $__res = function($f) use (&$mempty_4) {
  $__num = \func_num_args();
  $__local_var_5 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = function($v1) use (&$__local_var_5, &$mempty_4) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t6 = $mempty_4;
} else {
if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t6 = ($__local_var_5)(($v1)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = $__t6;
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
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableLast'] ?? \PhpursThunks::eval('Data_Foldable_foldableLast'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexIdentity'] = function() { $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($v))($z);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($z))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableIdentity'] ?? \PhpursThunks::eval('Data_Foldable_foldableIdentity'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexFirst'] = function() { $v = (object)["foldrWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_0 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($z, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t1 = $z;
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__t1 = (($__local_var_0)(($v)->value0))($z);
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_2 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_2) {
  $__fn = function($z, $v = null) use (&$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nothing"))) {
$__t3 = $z;
} else {
if ((is_object($v) && (($v)->tag === "Just"))) {
$__t3 = (($__local_var_2)($z))(($v)->value0);
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_4 = ($dictMonoid)->mempty;
  $__res = function($f) use (&$mempty_4) {
  $__num = \func_num_args();
  $__local_var_5 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = function($v1) use (&$__local_var_5, &$mempty_4) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t6 = $mempty_4;
} else {
if ((is_object($v1) && (($v1)->tag === "Just"))) {
$__t6 = ($__local_var_5)(($v1)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
  $__res = $__t6;
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
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableFirst'] ?? \PhpursThunks::eval('Data_Foldable_foldableFirst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexEither'] = function() { $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t0 = $v1;
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t0 = ((($v)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))(($v2)->value0))($v1);
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
})(), "foldlWithIndex" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t1 = $v1;
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t1 = ((($v)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($v1))(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_2 = ($dictMonoid)->mempty;
  $__res = (function() use (&$mempty_2) {
  $__fn = function($v, $v1 = null) use (&$mempty_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Left"))) {
$__t3 = $mempty_2;
} else {
if ((is_object($v1) && (($v1)->tag === "Right"))) {
$__t3 = (($v)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))(($v1)->value0);
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableEither'] ?? \PhpursThunks::eval('Data_Foldable_foldableEither'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexDual'] = function() { $v = (object)["foldrWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_0 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($z, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_0)($v))($z);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => function($f) {
  $__num = \func_num_args();
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableDual'] ?? \PhpursThunks::eval('Data_Foldable_foldableDual'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexDisj'] = function() { $v = (object)["foldrWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_0 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($z, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_0)($v))($z);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => function($f) {
  $__num = \func_num_args();
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableDisj'] ?? \PhpursThunks::eval('Data_Foldable_foldableDisj'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexConst'] = function() { $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = $z;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = $z;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ($dictMonoid)->mempty;
  $__res = (function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableConst'] ?? \PhpursThunks::eval('Data_Foldable_foldableConst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexConj'] = function() { $v = (object)["foldrWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_0 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($z, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_0)($v))($z);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => function($f) {
  $__num = \func_num_args();
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableConj'] ?? \PhpursThunks::eval('Data_Foldable_foldableConj'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexAdditive'] = function() { $v = (object)["foldrWithIndex" => function($f) {
  $__num = \func_num_args();
  $__local_var_0 = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($z, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_0)($v))($z);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => function($f) {
  $__num = \func_num_args();
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldMapWithIndex" => (function() {
  $__fn = function($dictMonoid, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableAdditive'] ?? \PhpursThunks::eval('Data_Foldable_foldableAdditive'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldWithIndexM'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $dictMonad = null, $f = null, $a0 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($dictFoldableWithIndex)->foldlWithIndex)((function() use (&$dictMonad, &$f) {
  $__fn = function($i, $ma = null, $b = null) use (&$dictMonad, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = ($f)($i);
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($ma))(function($a) use (&$__local_var_0, &$b) {
  $__num = \func_num_args();
  $__res = (($__local_var_0)($a))($b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))((((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($a0));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldMapWithIndexDefaultR'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $dictMonoid = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $mempty_0 = ($dictMonoid)->mempty;
  $__res = function($f) use (&$dictFoldableWithIndex, &$dictMonoid, &$mempty_0) {
  $__num = \func_num_args();
  $__res = ((($dictFoldableWithIndex)->foldrWithIndex)((function() use (&$dictMonoid, &$f) {
  $__fn = function($i, $x = null, $acc = null) use (&$dictMonoid, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)((($f)($i))($x)))($acc);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))($mempty_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexArray'] = function() { $v = (object)["foldrWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Foldable_foldrArray'] ?? \PhpursThunks::eval('Data_Foldable_foldrArray')))(function($v) use (&$f) {
  $__num = \func_num_args();
  $__local_var_0 = ($v)->value0;
  $__local_var_1 = ($v)->value1;
  $__res = function($y) use (&$__local_var_0, &$__local_var_1, &$f) {
  $__num = \func_num_args();
  $__res = ((($f)($__local_var_0))($__local_var_1))($y);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($z)))((($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_mapWithIndexArray')))(($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Foldable_foldlArray'] ?? \PhpursThunks::eval('Data_Foldable_foldlArray')))((function() use (&$f) {
  $__fn = function($y, $v = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($f)(($v)->value0))($y))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($z)))((($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_mapWithIndexArray')))(($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_FoldableWithIndex_foldMapWithIndexDefaultR'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldMapWithIndexDefaultR')))(($GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexArray'))))($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Foldable_foldableArray'] ?? \PhpursThunks::eval('Data_Foldable_foldableArray'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldMapWithIndexDefaultL'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $dictMonoid = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $mempty_0 = ($dictMonoid)->mempty;
  $__res = function($f) use (&$dictFoldableWithIndex, &$dictMonoid, &$mempty_0) {
  $__num = \func_num_args();
  $__res = ((($dictFoldableWithIndex)->foldlWithIndex)((function() use (&$dictMonoid, &$f) {
  $__fn = function($i, $acc = null, $x = null) use (&$dictMonoid, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)($acc))((($f)($i))($x));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))($mempty_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldMapWithIndex'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->foldMapWithIndex;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexApp'] = function() { $v = function($dictFoldableWithIndex) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $foldableApp_1 = (object)["foldr" => (function() use (&$__local_var_0) {
  $__fn = function($f, $i = null, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($__local_var_0)->foldr)($f))($i))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__local_var_0) {
  $__fn = function($f, $i = null, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($__local_var_0)->foldl)($f))($i))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($__local_var_0)->foldMap)($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["foldrWithIndex" => (function() use (&$dictFoldableWithIndex) {
  $__fn = function($f, $z = null, $v = null) use (&$dictFoldableWithIndex, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictFoldableWithIndex)->foldrWithIndex)($f))($z))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$dictFoldableWithIndex) {
  $__fn = function($f, $z = null, $v = null) use (&$dictFoldableWithIndex, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictFoldableWithIndex)->foldlWithIndex)($f))($z))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) use (&$dictFoldableWithIndex) {
  $__num = \func_num_args();
  $__res = (($dictFoldableWithIndex)->foldMapWithIndex)($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) use (&$foldableApp_1) {
  $__num = \func_num_args();
  $__res = $foldableApp_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexCompose'] = function() { $v = function($dictFoldableWithIndex) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictFoldableWithIndex1) use (&$__local_var_0, &$dictFoldableWithIndex) {
  $__num = \func_num_args();
  $foldlWithIndex2_1 = ($dictFoldableWithIndex1)->foldlWithIndex;
  $__local_var_2 = (($dictFoldableWithIndex1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $foldableCompose1_6 = (object)["foldr" => (function() use (&$__local_var_0, &$__local_var_2) {
  $__fn = function($f, $i = null, $v = null) use (&$__local_var_0, &$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_3 = (($__local_var_2)->foldr)($f);
  $__res = (((($__local_var_0)->foldr)((function() use (&$__local_var_3) {
  $__fn = function($b, $a = null) use (&$__local_var_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_3)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($i))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__local_var_0, &$__local_var_2) {
  $__fn = function($f, $i = null, $v = null) use (&$__local_var_0, &$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($__local_var_0)->foldl)((($__local_var_2)->foldl)($f)))($i))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) use (&$__local_var_0, &$__local_var_2) {
  $__num = \func_num_args();
  $foldMap4_4 = (($__local_var_0)->foldMap)($dictMonoid);
  $foldMap5_5 = (($__local_var_2)->foldMap)($dictMonoid);
  $__res = (function() use (&$foldMap4_4, &$foldMap5_5) {
  $__fn = function($f, $v = null) use (&$foldMap4_4, &$foldMap5_5, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($foldMap4_4)(($foldMap5_5)($f)))($v);
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
  $__res = (object)["foldrWithIndex" => (function() use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1) {
  $__fn = function($f, $i = null, $v = null) use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictFoldableWithIndex)->foldrWithIndex)(function($a) use (&$dictFoldableWithIndex1, &$f) {
  $__num = \func_num_args();
  $__local_var_7 = (($dictFoldableWithIndex1)->foldrWithIndex)(function($b) use (&$a, &$f) {
  $__num = \func_num_args();
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, $b));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  $__res = (function() use (&$__local_var_7) {
  $__fn = function($b, $a = null) use (&$__local_var_7, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_7)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($i))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$dictFoldableWithIndex, &$foldlWithIndex2_1) {
  $__fn = function($f, $i = null, $v = null) use (&$dictFoldableWithIndex, &$foldlWithIndex2_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictFoldableWithIndex)->foldlWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($foldlWithIndex2_1))((function() use (&$f) {
  $__fn = function($a, $b = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, $b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())))($i))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1) {
  $__num = \func_num_args();
  $foldMapWithIndex3_8 = (($dictFoldableWithIndex)->foldMapWithIndex)($dictMonoid);
  $foldMapWithIndex4_9 = (($dictFoldableWithIndex1)->foldMapWithIndex)($dictMonoid);
  $__res = (function() use (&$foldMapWithIndex3_8, &$foldMapWithIndex4_9) {
  $__fn = function($f, $v = null) use (&$foldMapWithIndex3_8, &$foldMapWithIndex4_9, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($foldMapWithIndex3_8)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($foldMapWithIndex4_9))((function() use (&$f) {
  $__fn = function($a, $b = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, $b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) use (&$foldableCompose1_6) {
  $__num = \func_num_args();
  $__res = $foldableCompose1_6;
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
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexCoproduct'] = function() { $v = function($dictFoldableWithIndex) {
  $__num = \func_num_args();
  $foldableCoproduct_0 = (($GLOBALS['Data_Foldable_foldableCoproduct'] ?? \PhpursThunks::eval('Data_Foldable_foldableCoproduct')))((($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictFoldableWithIndex1) use (&$dictFoldableWithIndex, &$foldableCoproduct_0) {
  $__num = \func_num_args();
  $foldableCoproduct1_1 = ($foldableCoproduct_0)((($dictFoldableWithIndex1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["foldrWithIndex" => (function() use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1) {
  $__fn = function($f, $z = null) use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_2 = ((($dictFoldableWithIndex)->foldrWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')))))($z);
  $__local_var_3 = ((($dictFoldableWithIndex1)->foldrWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')))))($z);
  $__res = function($v2) use (&$__local_var_2, &$__local_var_3) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t4 = ($__local_var_2)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
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
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1) {
  $__fn = function($f, $z = null) use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_5 = ((($dictFoldableWithIndex)->foldlWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')))))($z);
  $__local_var_6 = ((($dictFoldableWithIndex1)->foldlWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')))))($z);
  $__res = function($v2) use (&$__local_var_5, &$__local_var_6) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t7 = ($__local_var_5)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t7 = ($__local_var_6)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
  $__res = $__t7;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1) {
  $__num = \func_num_args();
  $foldMapWithIndex3_8 = (($dictFoldableWithIndex)->foldMapWithIndex)($dictMonoid);
  $foldMapWithIndex4_9 = (($dictFoldableWithIndex1)->foldMapWithIndex)($dictMonoid);
  $__res = function($f) use (&$foldMapWithIndex3_8, &$foldMapWithIndex4_9) {
  $__num = \func_num_args();
  $__local_var_10 = ($foldMapWithIndex3_8)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left'))));
  $__local_var_11 = ($foldMapWithIndex4_9)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right'))));
  $__res = function($v2) use (&$__local_var_10, &$__local_var_11) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t12 = ($__local_var_10)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t12 = ($__local_var_11)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t12 = null;
};
};
  $__res = $__t12;
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
}, "Foldable0" => function($dollar__unused_0) use (&$foldableCoproduct1_1) {
  $__num = \func_num_args();
  $__res = $foldableCoproduct1_1;
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
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldableWithIndexProduct'] = function() { $v = function($dictFoldableWithIndex) {
  $__num = \func_num_args();
  $foldableProduct_0 = (($GLOBALS['Data_Foldable_foldableProduct'] ?? \PhpursThunks::eval('Data_Foldable_foldableProduct')))((($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictFoldableWithIndex1) use (&$dictFoldableWithIndex, &$foldableProduct_0) {
  $__num = \func_num_args();
  $foldableProduct1_1 = ($foldableProduct_0)((($dictFoldableWithIndex1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["foldrWithIndex" => (function() use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1) {
  $__fn = function($f, $z = null, $v = null) use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictFoldableWithIndex)->foldrWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')))))((((($dictFoldableWithIndex1)->foldrWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')))))($z))(($v)->value1)))(($v)->value0);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1) {
  $__fn = function($f, $z = null, $v = null) use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictFoldableWithIndex1)->foldlWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')))))((((($dictFoldableWithIndex)->foldlWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')))))($z))(($v)->value0)))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) use (&$dictFoldableWithIndex, &$dictFoldableWithIndex1) {
  $__num = \func_num_args();
  $foldMapWithIndex3_2 = (($dictFoldableWithIndex)->foldMapWithIndex)($dictMonoid);
  $foldMapWithIndex4_3 = (($dictFoldableWithIndex1)->foldMapWithIndex)($dictMonoid);
  $__res = (function() use (&$dictMonoid, &$foldMapWithIndex3_2, &$foldMapWithIndex4_3) {
  $__fn = function($f, $v = null) use (&$dictMonoid, &$foldMapWithIndex3_2, &$foldMapWithIndex4_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)((($foldMapWithIndex3_2)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')))))(($v)->value0)))((($foldMapWithIndex4_3)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')))))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) use (&$foldableProduct1_1) {
  $__num = \func_num_args();
  $__res = $foldableProduct1_1;
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
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldlWithIndexDefault'] = function() { $v = function($dictFoldableWithIndex) {
  $__num = \func_num_args();
  $foldMapWithIndex1_0 = (($dictFoldableWithIndex)->foldMapWithIndex)(($GLOBALS['Data_FoldableWithIndex_monoidDual'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_monoidDual')));
  $__res = (function() use (&$foldMapWithIndex1_0) {
  $__fn = function($c, $u = null, $xs = null) use (&$foldMapWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($foldMapWithIndex1_0)(function($i) use (&$c) {
  $__num = \func_num_args();
  $__local_var_1 = ($c)($i);
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Dual_Dual'] ?? \PhpursThunks::eval('Data_Monoid_Dual_Dual'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Endo_Endo'] ?? \PhpursThunks::eval('Data_Monoid_Endo_Endo'))))((function() use (&$__local_var_1) {
  $__fn = function($b, $a = null) use (&$__local_var_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_1)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($xs))))($u);
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
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldrWithIndexDefault'] = function() { $v = function($dictFoldableWithIndex) {
  $__num = \func_num_args();
  $foldMapWithIndex1_0 = (($dictFoldableWithIndex)->foldMapWithIndex)(($GLOBALS['Data_FoldableWithIndex_monoidEndo'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_monoidEndo')));
  $__res = (function() use (&$foldMapWithIndex1_0) {
  $__fn = function($c, $u = null, $xs = null) use (&$foldMapWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($foldMapWithIndex1_0)(function($i) use (&$c) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Endo_Endo'] ?? \PhpursThunks::eval('Data_Monoid_Endo_Endo'))))(($c)($i));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($xs)))($u);
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
\PhpursThunks::$thunks['Data_FoldableWithIndex_surroundMapWithIndex'] = function() { $v = function($dictFoldableWithIndex) {
  $__num = \func_num_args();
  $foldMapWithIndex1_0 = (($dictFoldableWithIndex)->foldMapWithIndex)(($GLOBALS['Data_FoldableWithIndex_monoidEndo'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_monoidEndo')));
  $__res = (function() use (&$foldMapWithIndex1_0) {
  $__fn = function($dictSemigroup, $d = null, $t = null, $f = null) use (&$foldMapWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($foldMapWithIndex1_0)((function() use (&$d, &$dictSemigroup, &$t) {
  $__fn = function($i, $a = null, $m = null) use (&$d, &$dictSemigroup, &$t, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictSemigroup)->append)($d))(((($dictSemigroup)->append)((($t)($i))($a)))($m));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))($f)))($d);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_foldMapDefault'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $dictMonoid = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $foldMapWithIndex2_0 = (($dictFoldableWithIndex)->foldMapWithIndex)($dictMonoid);
  $__res = function($f) use (&$foldMapWithIndex2_0) {
  $__num = \func_num_args();
  $__res = ($foldMapWithIndex2_0)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__res = $f;
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_findWithIndex'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $p = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFoldableWithIndex)->foldlWithIndex)((function() use (&$p) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$p, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($v1) && (($v1)->tag === "Nothing")) && (($p)($v))($v2))) {
$__t0 = new Phpurs_Data1("Just", (object)["index" => $v, "value" => $v2]);
} else {
$__t0 = $v1;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Nothing"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_findMapWithIndex'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFoldableWithIndex)->foldlWithIndex)((function() use (&$f) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v1) && (($v1)->tag === "Nothing"))) {
$__t0 = (($f)($v))($v2);
} else {
$__t0 = $v1;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Nothing"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_anyWithIndex'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $dictHeytingAlgebra = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $semigroupDisj1_0 = (object)["append" => (function() use (&$dictHeytingAlgebra) {
  $__fn = function($v, $v1 = null) use (&$dictHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictHeytingAlgebra)->disj)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $foldMapWithIndex2_1 = (($dictFoldableWithIndex)->foldMapWithIndex)((object)["mempty" => ($dictHeytingAlgebra)->ff, "Semigroup0" => function($dollar__unused_0) use (&$semigroupDisj1_0) {
  $__num = \func_num_args();
  $__res = $semigroupDisj1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]);
  $__res = function($t) use (&$foldMapWithIndex2_1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))(($foldMapWithIndex2_1)(function($i) use (&$t) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Disj_Disj'] ?? \PhpursThunks::eval('Data_Monoid_Disj_Disj'))))(($t)($i));
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_FoldableWithIndex_allWithIndex'] = function() { $v = (function() {
  $__fn = function($dictFoldableWithIndex, $dictHeytingAlgebra = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $semigroupConj1_0 = (object)["append" => (function() use (&$dictHeytingAlgebra) {
  $__fn = function($v, $v1 = null) use (&$dictHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictHeytingAlgebra)->conj)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $foldMapWithIndex2_1 = (($dictFoldableWithIndex)->foldMapWithIndex)((object)["mempty" => ($dictHeytingAlgebra)->tt, "Semigroup0" => function($dollar__unused_0) use (&$semigroupConj1_0) {
  $__num = \func_num_args();
  $__res = $semigroupConj1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]);
  $__res = function($t) use (&$foldMapWithIndex2_1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))(($foldMapWithIndex2_1)(function($i) use (&$t) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Conj_Conj'] ?? \PhpursThunks::eval('Data_Monoid_Conj_Conj'))))(($t)($i));
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };







































