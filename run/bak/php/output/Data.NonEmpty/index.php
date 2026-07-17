<?php

namespace Data\NonEmpty;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Plus, Control.Semigroupoid, Data.Eq, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Functor, Data.FunctorWithIndex, Data.HeytingAlgebra, Data.Maybe, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Semigroup, Data.Semigroup.Foldable, Data.Show, Data.Traversable, Data.TraversableWithIndex, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Plus, Control.Semigroupoid, Data.Eq, Data.Foldable, Data.FoldableWithIndex, Data.Function, Data.Functor, Data.FunctorWithIndex, Data.HeytingAlgebra, Data.Maybe, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Semigroup, Data.Semigroup.Foldable, Data.Show, Data.Traversable, Data.TraversableWithIndex, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
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
\PhpursThunks::$thunks['Data_NonEmpty_NonEmpty'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_unfoldable1NonEmpty'] = function() { $v = function($dictUnfoldable) {
  $__num = \func_num_args();
  $__res = (object)["unfoldr1" => (function() use (&$dictUnfoldable) {
  $__fn = function($f, $b = null) use (&$dictUnfoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = ($f)($b);
  $__res = new Phpurs_Data2("NonEmpty", ($__local_var_0)->value0, ((($dictUnfoldable)->unfoldr)(function($v1) use (&$f) {
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
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_tail'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_singleton'] = function() { $v = function($dictPlus) {
  $__num = \func_num_args();
  $empty_0 = ($dictPlus)->empty;
  $__res = function($a) use (&$empty_0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $a, $empty_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_showNonEmpty'] = function() { $v = (function() {
  $__fn = function($dictShow, $dictShow1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["show" => function($v) use (&$dictShow, &$dictShow1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(NonEmpty "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value0)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(" "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow1)->show)(($v)->value1)))(")"))));
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
\PhpursThunks::$thunks['Data_NonEmpty_semigroupNonEmpty'] = function() { $v = (function() {
  $__fn = function($dictApplicative, $dictSemigroup = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["append" => (function() use (&$dictApplicative, &$dictSemigroup) {
  $__fn = function($v, $v1 = null) use (&$dictApplicative, &$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", ($v)->value0, ((($dictSemigroup)->append)(($v)->value1))(((($dictSemigroup)->append)((($dictApplicative)->pure)(($v1)->value0)))(($v1)->value1)));
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
\PhpursThunks::$thunks['Data_NonEmpty_oneOf'] = function() { $v = (function() {
  $__fn = function($dictAlternative, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->alt)((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(($v)->value0)))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_head'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_functorNonEmpty'] = function() { $v = function($dictFunctor) {
  $__num = \func_num_args();
  $__res = (object)["map" => (function() use (&$dictFunctor) {
  $__fn = function($f, $m = null) use (&$dictFunctor, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", ($f)(($m)->value0), ((($dictFunctor)->map)($f))(($m)->value1));
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
\PhpursThunks::$thunks['Data_NonEmpty_functorWithIndex'] = function() { $v = function($dictFunctorWithIndex) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictFunctorWithIndex)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorNonEmpty1_1 = (object)["map" => (function() use (&$__local_var_0) {
  $__fn = function($f, $m = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", ($f)(($m)->value0), ((($__local_var_0)->map)($f))(($m)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["mapWithIndex" => (function() use (&$dictFunctorWithIndex) {
  $__fn = function($f, $v = null) use (&$dictFunctorWithIndex, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", (($f)(new Phpurs_Data0("Nothing")))(($v)->value0), ((($dictFunctorWithIndex)->mapWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just')))))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorNonEmpty1_1) {
  $__num = \func_num_args();
  $__res = $functorNonEmpty1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_fromNonEmpty'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($f)(($v)->value0))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_foldableNonEmpty'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = (object)["foldMap" => function($dictMonoid) use (&$dictFoldable) {
  $__num = \func_num_args();
  $foldMap1_0 = (($dictFoldable)->foldMap)($dictMonoid);
  $__res = (function() use (&$dictMonoid, &$foldMap1_0) {
  $__fn = function($f, $v = null) use (&$dictMonoid, &$foldMap1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)(($f)(($v)->value0)))((($foldMap1_0)($f))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldl" => (function() use (&$dictFoldable) {
  $__fn = function($f, $b = null, $v = null) use (&$dictFoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictFoldable)->foldl)($f))((($f)($b))(($v)->value0)))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() use (&$dictFoldable) {
  $__fn = function($f, $b = null, $v = null) use (&$dictFoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($f)(($v)->value0))((((($dictFoldable)->foldr)($f))($b))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_foldableWithIndexNonEmpty'] = function() { $v = function($dictFoldableWithIndex) {
  $__num = \func_num_args();
  $foldableNonEmpty1_0 = (($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldableNonEmpty')))((($dictFoldableWithIndex)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["foldMapWithIndex" => function($dictMonoid) use (&$dictFoldableWithIndex) {
  $__num = \func_num_args();
  $foldMapWithIndex1_1 = (($dictFoldableWithIndex)->foldMapWithIndex)($dictMonoid);
  $__res = (function() use (&$dictMonoid, &$foldMapWithIndex1_1) {
  $__fn = function($f, $v = null) use (&$dictMonoid, &$foldMapWithIndex1_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)((($f)(new Phpurs_Data0("Nothing")))(($v)->value0)))((($foldMapWithIndex1_1)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just')))))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => (function() use (&$dictFoldableWithIndex) {
  $__fn = function($f, $b = null, $v = null) use (&$dictFoldableWithIndex, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictFoldableWithIndex)->foldlWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just')))))(((($f)(new Phpurs_Data0("Nothing")))($b))(($v)->value0)))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldrWithIndex" => (function() use (&$dictFoldableWithIndex) {
  $__fn = function($f, $b = null, $v = null) use (&$dictFoldableWithIndex, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($f)(new Phpurs_Data0("Nothing")))(($v)->value0))((((($dictFoldableWithIndex)->foldrWithIndex)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just')))))($b))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) use (&$foldableNonEmpty1_0) {
  $__num = \func_num_args();
  $__res = $foldableNonEmpty1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_traversableNonEmpty'] = function() { $v = function($dictTraversable) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictTraversable)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorNonEmpty1_1 = (object)["map" => (function() use (&$__local_var_0) {
  $__fn = function($f, $m = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", ($f)(($m)->value0), ((($__local_var_0)->map)($f))(($m)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $foldableNonEmpty1_2 = (($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldableNonEmpty')))((($dictTraversable)->Foldable1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["sequence" => function($dictApplicative) use (&$dictTraversable) {
  $__num = \func_num_args();
  $Apply0_3 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $sequence1_4 = (($dictTraversable)->sequence)($dictApplicative);
  $__res = function($v) use (&$Apply0_3, &$sequence1_4) {
  $__num = \func_num_args();
  $__res = ((($Apply0_3)->apply)(((((($Apply0_3)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_NonEmpty'))))(($v)->value0)))(($sequence1_4)(($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "traverse" => function($dictApplicative) use (&$dictTraversable) {
  $__num = \func_num_args();
  $Apply0_5 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $traverse1_6 = (($dictTraversable)->traverse)($dictApplicative);
  $__res = (function() use (&$Apply0_5, &$traverse1_6) {
  $__fn = function($f, $v = null) use (&$Apply0_5, &$traverse1_6, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($Apply0_5)->apply)(((((($Apply0_5)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_NonEmpty'))))(($f)(($v)->value0))))((($traverse1_6)($f))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Functor0" => function($dollar__unused_0) use (&$functorNonEmpty1_1) {
  $__num = \func_num_args();
  $__res = $functorNonEmpty1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable1" => function($dollar__unused_0) use (&$foldableNonEmpty1_2) {
  $__num = \func_num_args();
  $__res = $foldableNonEmpty1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_traversableWithIndexNonEmpty'] = function() { $v = function($dictTraversableWithIndex) {
  $__num = \func_num_args();
  $functorWithIndex1_0 = (($GLOBALS['Data_NonEmpty_functorWithIndex'] ?? \PhpursThunks::eval('Data_NonEmpty_functorWithIndex')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $foldableWithIndexNonEmpty1_1 = (($GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldableWithIndexNonEmpty')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traversableNonEmpty1_2 = (($GLOBALS['Data_NonEmpty_traversableNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_traversableNonEmpty')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use (&$dictTraversableWithIndex) {
  $__num = \func_num_args();
  $Apply0_3 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $traverseWithIndex1_4 = (($dictTraversableWithIndex)->traverseWithIndex)($dictApplicative);
  $__res = (function() use (&$Apply0_3, &$traverseWithIndex1_4) {
  $__fn = function($f, $v = null) use (&$Apply0_3, &$traverseWithIndex1_4, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($Apply0_3)->apply)(((((($Apply0_3)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_NonEmpty_NonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_NonEmpty'))))((($f)(new Phpurs_Data0("Nothing")))(($v)->value0))))((($traverseWithIndex1_4)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just')))))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($dollar__unused_0) use (&$functorWithIndex1_0) {
  $__num = \func_num_args();
  $__res = $functorWithIndex1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) use (&$foldableWithIndexNonEmpty1_1) {
  $__num = \func_num_args();
  $__res = $foldableWithIndexNonEmpty1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) use (&$traversableNonEmpty1_2) {
  $__num = \func_num_args();
  $__res = $traversableNonEmpty1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_foldable1NonEmpty'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $foldableNonEmpty1_0 = (($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldableNonEmpty')))($dictFoldable);
  $__res = (object)["foldMap1" => (function() use (&$dictFoldable) {
  $__fn = function($dictSemigroup, $f = null, $v = null) use (&$dictFoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($dictFoldable)->foldl)((function() use (&$dictSemigroup, &$f) {
  $__fn = function($s, $a1 = null) use (&$dictSemigroup, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictSemigroup)->append)($s))(($f)($a1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(($f)(($v)->value0)))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() use (&$dictFoldable) {
  $__fn = function($f, $v = null) use (&$dictFoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_1 = ($f)(($v)->value0);
  $__local_var_4 = (((($dictFoldable)->foldr)(function($a1) use (&$f) {
  $__num = \func_num_args();
  $__local_var_2 = ($f)($a1);
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(function($v2) use (&$__local_var_2, &$a1) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t3 = $a1;
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t3 = ($__local_var_2)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(new Phpurs_Data0("Nothing")))(($v)->value1);
  if ((is_object($__local_var_4) && (($__local_var_4)->tag === "Nothing"))) {
$__t5 = ($v)->value0;
} else {
if ((is_object($__local_var_4) && (($__local_var_4)->tag === "Just"))) {
$__t5 = ($__local_var_1)(($__local_var_4)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
  $__res = $__t5;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() use (&$dictFoldable) {
  $__fn = function($f, $v = null) use (&$dictFoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictFoldable)->foldl)($f))(($v)->value0))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($dollar__unused_0) use (&$foldableNonEmpty1_0) {
  $__num = \func_num_args();
  $__res = $foldableNonEmpty1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_foldl1'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_NonEmpty_foldable1NonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_foldable1NonEmpty')))($dictFoldable))->foldl1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_eqNonEmpty'] = function() { $v = (function() {
  $__fn = function($dictEq1, $dictEq = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $eq11_0 = (($dictEq1)->eq1)($dictEq);
  $__res = (object)["eq" => (function() use (&$dictEq, &$eq11_0) {
  $__fn = function($x, $y = null) use (&$dictEq, &$eq11_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($dictEq)->eq)(($x)->value0))(($y)->value0)))((($eq11_0)(($x)->value1))(($y)->value1));
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
\PhpursThunks::$thunks['Data_NonEmpty_ordNonEmpty'] = function() { $v = function($dictOrd1) {
  $__num = \func_num_args();
  $eqNonEmpty1_0 = (($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_eqNonEmpty')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd) use (&$dictOrd1, &$eqNonEmpty1_0) {
  $__num = \func_num_args();
  $compare11_1 = (($dictOrd1)->compare1)($dictOrd);
  $eqNonEmpty2_2 = ($eqNonEmpty1_0)((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["compare" => (function() use (&$compare11_1, &$dictOrd) {
  $__fn = function($x, $y = null) use (&$compare11_1, &$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_3 = ((($dictOrd)->compare)(($x)->value0))(($y)->value0);
  if ((is_object($v_3) && (($v_3)->tag === "LT"))) {
$__t4 = new Phpurs_Data0("LT");
} else {
if ((is_object($v_3) && (($v_3)->tag === "GT"))) {
$__t4 = new Phpurs_Data0("GT");
} else {
$__t4 = (($compare11_1)(($x)->value1))(($y)->value1);
};
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqNonEmpty2_2) {
  $__num = \func_num_args();
  $__res = $eqNonEmpty2_2;
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
\PhpursThunks::$thunks['Data_NonEmpty_eq1NonEmpty'] = function() { $v = function($dictEq1) {
  $__num = \func_num_args();
  $__res = (object)["eq1" => function($dictEq) use (&$dictEq1) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_eqNonEmpty')))($dictEq1))($dictEq))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_NonEmpty_ord1NonEmpty'] = function() { $v = function($dictOrd1) {
  $__num = \func_num_args();
  $ordNonEmpty1_0 = (($GLOBALS['Data_NonEmpty_ordNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_ordNonEmpty')))($dictOrd1);
  $__local_var_1 = (($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $eq1NonEmpty1_2 = (object)["eq1" => function($dictEq) use (&$__local_var_1) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \PhpursThunks::eval('Data_NonEmpty_eqNonEmpty')))($__local_var_1))($dictEq))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["compare1" => function($dictOrd) use (&$ordNonEmpty1_0) {
  $__num = \func_num_args();
  $__res = (($ordNonEmpty1_0)($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused_0) use (&$eq1NonEmpty1_2) {
  $__num = \func_num_args();
  $__res = $eq1NonEmpty1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };























