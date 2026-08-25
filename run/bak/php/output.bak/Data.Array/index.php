<?php

namespace Data\Array;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Lazy, Control.Monad.Rec.Class, Control.Monad.ST, Control.Monad.ST.Internal, Control.Semigroupoid, Data.Array, Data.Array.NonEmpty.Internal, Data.Array.ST, Data.Array.ST.Iterator, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Function.Uncurried, Data.Functor, Data.FunctorWithIndex, Data.HeytingAlgebra, Data.Maybe, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Traversable, Data.Tuple, Data.Unfoldable, Partial.Unsafe, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Lazy, Control.Monad.Rec.Class, Control.Monad.ST, Control.Monad.ST.Internal, Control.Semigroupoid, Data.Array, Data.Array.NonEmpty.Internal, Data.Array.ST, Data.Array.ST.Iterator, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Function.Uncurried, Data.Functor, Data.FunctorWithIndex, Data.HeytingAlgebra, Data.Maybe, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Traversable, Data.Tuple, Data.Unfoldable, Partial.Unsafe, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Array.ST.Iterator/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
\PhpursThunks::$thunks['Data_Array_traverse_'] = function() { $v = (($GLOBALS['Data_Foldable_traverse_'] ?? \PhpursThunks::eval('Data_Foldable_traverse_')))(($GLOBALS['Control_Monad_ST_Internal_applicativeST'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_applicativeST'))); return $v; };
\PhpursThunks::$thunks['Data_Array_void'] = function() { $v = (($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_map_')))(function($v) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Array_fromJust'] = function() { $v = function($v) {
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
\PhpursThunks::$thunks['Data_Array_zipWith'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_zipWithImpl'] ?? \PhpursThunks::eval('Data_Array_zipWithImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_zipWithA'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $sequence1_0 = (((($GLOBALS['Data_Traversable_traversableArray'] ?? \PhpursThunks::eval('Data_Traversable_traversableArray')))->traverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  $__res = (function() use (&$sequence1_0) {
  $__fn = function($f, $xs = null, $ys = null) use (&$sequence1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($sequence1_0)((((($GLOBALS['Data_Array_zipWith'] ?? \PhpursThunks::eval('Data_Array_zipWith')))($f))($xs))($ys));
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
\PhpursThunks::$thunks['Data_Array_zip'] = function() { $v = (($GLOBALS['Data_Array_zipWith'] ?? \PhpursThunks::eval('Data_Array_zipWith')))(($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple'))); return $v; };
\PhpursThunks::$thunks['Data_Array_updateAtIndices'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $traverse_1_0 = (($GLOBALS['Data_Array_traverse_'] ?? \PhpursThunks::eval('Data_Array_traverse_')))($dictFoldable);
  $__res = (function() use (&$traverse_1_0) {
  $__fn = function($us, $xs = null) use (&$traverse_1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Data_Array_ST_withArray'] ?? \PhpursThunks::eval('Data_Array_ST_withArray')))(function($res) use (&$traverse_1_0, &$us) {
  $__num = \func_num_args();
  $__res = (($traverse_1_0)(function($v) use (&$res) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Array_ST_poke'] ?? \PhpursThunks::eval('Data_Array_ST_poke')))(($v)->value0))(($v)->value1))($res);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($us);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($xs));
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
\PhpursThunks::$thunks['Data_Array_updateAt'] = function() { $v = (((($GLOBALS['Data_Function_Uncurried_runFn5'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn5')))(($GLOBALS['Data_Array__updateAt'] ?? \PhpursThunks::eval('Data_Array__updateAt'))))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(new Phpurs_Data0("Nothing")); return $v; };
\PhpursThunks::$thunks['Data_Array_unsafeIndex'] = function() { $v = function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_unsafeIndexImpl'] ?? \PhpursThunks::eval('Data_Array_unsafeIndexImpl')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_unsafeIndex1'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_unsafeIndexImpl'] ?? \PhpursThunks::eval('Data_Array_unsafeIndexImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_uncons'] = function() { $v = (((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_unconsImpl'] ?? \PhpursThunks::eval('Data_Array_unconsImpl'))))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nothing");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data1("Just", (object)["head" => $x, "tail" => $xs]);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); return $v; };
\PhpursThunks::$thunks['Data_Array_toUnfoldable'] = function() { $v = (function() {
  $__fn = function($dictUnfoldable, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $len_0 = (($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs);
  $__res = ((($dictUnfoldable)->unfoldr)(function($i) use (&$len_0, &$xs) {
  $__num = \func_num_args();
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($i))($len_0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($i))($len_0))->tag === "LT"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$i, &$xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_unsafeIndex1'] ?? \PhpursThunks::eval('Data_Array_unsafeIndex1')))($xs))($i);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($i))(1)));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_tail'] = function() { $v = (((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_unconsImpl'] ?? \PhpursThunks::eval('Data_Array_unconsImpl'))))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nothing");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((function() {
  $__fn = function($v, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data1("Just", $xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); return $v; };
\PhpursThunks::$thunks['Data_Array_sortBy'] = function() { $v = function($comp) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_sortByImpl'] ?? \PhpursThunks::eval('Data_Array_sortByImpl'))))($comp))(function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "GT"))) {
$__t0 = 1;
} else {
if ((is_object($v) && (($v)->tag === "EQ"))) {
$__t0 = 0;
} else {
if ((is_object($v) && (($v)->tag === "LT"))) {
$__t0 = ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))(0))(1);
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
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_sortWith'] = function() { $v = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Array_sortBy'] ?? \PhpursThunks::eval('Data_Array_sortBy')))((function() use (&$dictOrd, &$f) {
  $__fn = function($x, $y = null) use (&$dictOrd, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictOrd)->compare)(($f)($x)))(($f)($y));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_sort'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = function($xs) use (&$compare_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_sortBy'] ?? \PhpursThunks::eval('Data_Array_sortBy')))($compare_0))($xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_snoc'] = function() { $v = (function() {
  $__fn = function($xs, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Data_Array_ST_withArray'] ?? \PhpursThunks::eval('Data_Array_ST_withArray')))((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))($x)))($xs));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_slice'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_sliceImpl'] ?? \PhpursThunks::eval('Data_Array_sliceImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_splitAt'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))(0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))(0))->tag === "GT")))) {
$__t0 = (object)["before" => [], "after" => $v1];
} else {
$__t0 = (object)["before" => (((($GLOBALS['Data_Array_slice'] ?? \PhpursThunks::eval('Data_Array_slice')))(0))($v))($v1), "after" => (((($GLOBALS['Data_Array_slice'] ?? \PhpursThunks::eval('Data_Array_slice')))($v))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($v1)))($v1)];
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_take'] = function() { $v = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(1))->tag === "LT"))) {
$__t0 = [];
} else {
$__t0 = (((($GLOBALS['Data_Array_slice'] ?? \PhpursThunks::eval('Data_Array_slice')))(0))($n))($xs);
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_singleton'] = function() { $v = function($a) {
  $__num = \func_num_args();
  $__res = [$a];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_scanr'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_scanrImpl'] ?? \PhpursThunks::eval('Data_Array_scanrImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_scanl'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_scanlImpl'] ?? \PhpursThunks::eval('Data_Array_scanlImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_replicate'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_replicateImpl'] ?? \PhpursThunks::eval('Data_Array_replicateImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_range'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_rangeImpl'] ?? \PhpursThunks::eval('Data_Array_rangeImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_partition'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_partitionImpl'] ?? \PhpursThunks::eval('Data_Array_partitionImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_null'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))(0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_modifyAtIndices'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $traverse_1_0 = (($GLOBALS['Data_Array_traverse_'] ?? \PhpursThunks::eval('Data_Array_traverse_')))($dictFoldable);
  $__res = (function() use (&$traverse_1_0) {
  $__fn = function($is, $f = null, $xs = null) use (&$traverse_1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Data_Array_ST_withArray'] ?? \PhpursThunks::eval('Data_Array_ST_withArray')))(function($res) use (&$f, &$is, &$traverse_1_0) {
  $__num = \func_num_args();
  $__res = (($traverse_1_0)(function($i) use (&$f, &$res) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Array_ST_modify'] ?? \PhpursThunks::eval('Data_Array_ST_modify')))($i))($f))($res);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($is);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($xs));
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
\PhpursThunks::$thunks['Data_Array_mapWithIndex'] = function() { $v = ($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_mapWithIndexArray')); return $v; };
\PhpursThunks::$thunks['Data_Array_intersperse'] = function() { $v = (function() {
  $__fn = function($a, $arr = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_0 = (($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($arr);
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v_0))(2)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v_0))(2))->tag === "LT"))) {
$__t1 = $arr;
} else {
$__t1 = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(($GLOBALS['Data_Array_ST_new'] ?? \PhpursThunks::eval('Data_Array_ST_new'))))(function($out) use (&$a, &$arr, &$v_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))((($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$arr) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_unsafeIndex1'] ?? \PhpursThunks::eval('Data_Array_unsafeIndex1')))($arr))(0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))($out)))(function($dollar__unused_0) use (&$a, &$arr, &$out, &$v_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))((((($GLOBALS['Control_Monad_ST_Internal_for'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_for')))(1))($v_0))(function($idx) use (&$a, &$arr, &$out) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))($a))($out)))(function($dollar__unused_0) use (&$arr, &$idx, &$out) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_void'] ?? \PhpursThunks::eval('Data_Array_void')))(((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))((($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$arr, &$idx) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_unsafeIndex1'] ?? \PhpursThunks::eval('Data_Array_unsafeIndex1')))($arr))($idx);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))($out));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(function($dollar__unused_0) use (&$out) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_pure_')))($out);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeFreeze'))));
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_intercalate'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Foldable_intercalate'] ?? \PhpursThunks::eval('Data_Foldable_intercalate')))(($GLOBALS['Data_Foldable_foldableArray'] ?? \PhpursThunks::eval('Data_Foldable_foldableArray'))))($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_insertAt'] = function() { $v = (((($GLOBALS['Data_Function_Uncurried_runFn5'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn5')))(($GLOBALS['Data_Array__insertAt'] ?? \PhpursThunks::eval('Data_Array__insertAt'))))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(new Phpurs_Data0("Nothing")); return $v; };
\PhpursThunks::$thunks['Data_Array_init'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))(0)) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
$__t0 = new Phpurs_Data1("Just", (((($GLOBALS['Data_Array_slice'] ?? \PhpursThunks::eval('Data_Array_slice')))(0))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))(1)))($xs));
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_index'] = function() { $v = (((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_indexImpl'] ?? \PhpursThunks::eval('Data_Array_indexImpl'))))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(new Phpurs_Data0("Nothing")); return $v; };
\PhpursThunks::$thunks['Data_Array_last'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($xs))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))(1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_unsnoc'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_Array_init'] ?? \PhpursThunks::eval('Data_Array_init')))($xs);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__local_var_2 = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($xs))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))(1));
if ((is_object($__local_var_2) && (($__local_var_2)->tag === "Just"))) {
$__t3 = new Phpurs_Data1("Just", (object)["init" => ($__local_var_0)->value0, "last" => ($__local_var_2)->value0]);
} else {
$__t3 = new Phpurs_Data0("Nothing");
};
$__t1 = $__t3;
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_modifyAt'] = function() { $v = (function() {
  $__fn = function($i, $f = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($xs))($i);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = (((($GLOBALS['Data_Array_updateAt'] ?? \PhpursThunks::eval('Data_Array_updateAt')))($i))(($f)(($__local_var_0)->value0)))($xs);
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
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_span'] = function() { $v = (function() {
  $__fn = function($p, $arr = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = function($i) use (&$arr, &$go, &$p) {
  $__num = \func_num_args();
  $v_0 = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($arr))($i);
  if ((is_object($v_0) && (($v_0)->tag === "Just"))) {
if (($p)(($v_0)->value0)) {
$__t2 = ($go)(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($i))(1));
} else {
$__t2 = new Phpurs_Data1("Just", $i);
};
$__t1 = $__t2;
} else {
if ((is_object($v_0) && (($v_0)->tag === "Nothing"))) {
$__t1 = new Phpurs_Data0("Nothing");
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $breakIndex_3 = ($go)(0);
  if ((is_object($breakIndex_3) && (($breakIndex_3)->tag === "Just"))) {
switch (($breakIndex_3)->value0) {
case 0:
$__t5 = (object)["init" => [], "rest" => $arr];
break;
default:
$__t5 = (object)["init" => (((($GLOBALS['Data_Array_slice'] ?? \PhpursThunks::eval('Data_Array_slice')))(0))(($breakIndex_3)->value0))($arr), "rest" => (((($GLOBALS['Data_Array_slice'] ?? \PhpursThunks::eval('Data_Array_slice')))(($breakIndex_3)->value0))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($arr)))($arr)];
break;
};
$__t4 = $__t5;
} else {
if ((is_object($breakIndex_3) && (($breakIndex_3)->tag === "Nothing"))) {
$__t4 = (object)["init" => $arr, "rest" => []];
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
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_takeWhile'] = function() { $v = (function() {
  $__fn = function($p, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Array_span'] ?? \PhpursThunks::eval('Data_Array_span')))($p))($xs))->init;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_unzip'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(($GLOBALS['Data_Array_ST_new'] ?? \PhpursThunks::eval('Data_Array_ST_new'))))(function($fsts) use (&$xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(($GLOBALS['Data_Array_ST_new'] ?? \PhpursThunks::eval('Data_Array_ST_new'))))(function($snds) use (&$fsts, &$xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_map_')))((($GLOBALS['Data_Array_ST_Iterator_Iterator'] ?? \PhpursThunks::eval('Data_Array_ST_Iterator_Iterator')))(function($v) use (&$xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($xs))($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))((($GLOBALS['Control_Monad_ST_Internal_new'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_new')))(0))))(function($iter) use (&$fsts, &$snds) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Data_Array_ST_Iterator_iterate'] ?? \PhpursThunks::eval('Data_Array_ST_Iterator_iterate')))($iter))(function($v) use (&$fsts, &$snds) {
  $__num = \func_num_args();
  $__local_var_0 = ($v)->value1;
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))((($GLOBALS['Data_Array_void'] ?? \PhpursThunks::eval('Data_Array_void')))(((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))(($v)->value0))($fsts))))(function($dollar__unused_0) use (&$__local_var_0, &$snds) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_void'] ?? \PhpursThunks::eval('Data_Array_void')))(((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))($__local_var_0))($snds));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(function($dollar__unused_0) use (&$fsts, &$snds) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))((($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeFreeze')))($fsts)))(function($fsts__prime__) use (&$snds) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))((($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeFreeze')))($snds)))(function($snds__prime__) use (&$fsts__prime__) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_pure_')))(new Phpurs_Data2("Tuple", $fsts__prime__, $snds__prime__));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
\PhpursThunks::$thunks['Data_Array_head'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($xs))(0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_nubBy'] = function() { $v = (function() {
  $__fn = function($comp, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $indexedAndSorted_0 = ((($GLOBALS['Data_Array_sortBy'] ?? \PhpursThunks::eval('Data_Array_sortBy')))((function() use (&$comp) {
  $__fn = function($x, $y = null) use (&$comp, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($comp)(($x)->value1))(($y)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(((($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_mapWithIndexArray')))(($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple'))))($xs));
  $v_1 = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($indexedAndSorted_0))(0);
  if ((is_object($v_1) && (($v_1)->tag === "Nothing"))) {
$__t2 = [];
} else {
if ((is_object($v_1) && (($v_1)->tag === "Just"))) {
$__t2 = ((($GLOBALS['Data_Functor_arrayMap'] ?? \PhpursThunks::eval('Data_Functor_arrayMap')))(($GLOBALS['Data_Tuple_snd'] ?? \PhpursThunks::eval('Data_Tuple_snd'))))((((($GLOBALS['Data_Array_sortWith'] ?? \PhpursThunks::eval('Data_Array_sortWith')))(($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt'))))(($GLOBALS['Data_Tuple_fst'] ?? \PhpursThunks::eval('Data_Tuple_fst'))))((($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))((($GLOBALS['Data_Array_ST_unsafeThaw'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeThaw')))([($v_1)->value0])))(function($result) use (&$comp, &$indexedAndSorted_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Control_Monad_ST_Internal_foreach'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_foreach')))($indexedAndSorted_0))(function($v1) use (&$comp, &$result) {
  $__num = \func_num_args();
  $__local_var_3 = ($v1)->value1;
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_map_')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Tuple_snd'] ?? \PhpursThunks::eval('Data_Tuple_snd'))))((($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_fromJust'] ?? \PhpursThunks::eval('Data_Array_fromJust'))))(($GLOBALS['Data_Array_last'] ?? \PhpursThunks::eval('Data_Array_last')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))))((($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeFreeze')))($result))))(function($lst) use (&$__local_var_3, &$comp, &$result, &$v1) {
  $__num = \func_num_args();
  $__local_var_4 = (($GLOBALS['Data_Array_void'] ?? \PhpursThunks::eval('Data_Array_void')))(((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))($v1))($result));
  if (((($GLOBALS['Data_Eq_eqBooleanImpl'] ?? \PhpursThunks::eval('Data_Eq_eqBooleanImpl')))((is_object((($comp)($lst))($__local_var_3)) && (((($comp)($lst))($__local_var_3))->tag === "EQ"))))(false)) {
$__t5 = $__local_var_4;
} else {
$__t5 = (($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_pure_')))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
};
  $__res = $__t5;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(function($dollar__unused_0) use (&$result) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeFreeze')))($result);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))));
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
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_nub'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_nubBy'] ?? \PhpursThunks::eval('Data_Array_nubBy')))(($dictOrd)->compare);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_groupBy'] = function() { $v = (function() {
  $__fn = function($op, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(($GLOBALS['Data_Array_ST_new'] ?? \PhpursThunks::eval('Data_Array_ST_new'))))(function($result) use (&$op, &$xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_map_')))((($GLOBALS['Data_Array_ST_Iterator_Iterator'] ?? \PhpursThunks::eval('Data_Array_ST_Iterator_Iterator')))(function($v) use (&$xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($xs))($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))((($GLOBALS['Control_Monad_ST_Internal_new'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_new')))(0))))(function($iter) use (&$op, &$result) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Data_Array_ST_Iterator_iterate'] ?? \PhpursThunks::eval('Data_Array_ST_Iterator_iterate')))($iter))(function($x) use (&$iter, &$op, &$result) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_void'] ?? \PhpursThunks::eval('Data_Array_void')))(((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(($GLOBALS['Data_Array_ST_new'] ?? \PhpursThunks::eval('Data_Array_ST_new'))))(function($sub1) use (&$iter, &$op, &$result, &$x) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))($x))($sub1)))(function($dollar__unused_0) use (&$iter, &$op, &$result, &$sub1, &$x) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))((((($GLOBALS['Data_Array_ST_Iterator_pushWhile'] ?? \PhpursThunks::eval('Data_Array_ST_Iterator_pushWhile')))(($op)($x)))($iter))($sub1)))(function($dollar__unused_0) use (&$result, &$sub1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))((($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeFreeze')))($sub1)))(function($grp) use (&$result) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))($grp))($result);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
})))(function($dollar__unused_0) use (&$result) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeFreeze')))($result);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_groupAllBy'] = function() { $v = function($cmp) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_groupBy'] ?? \PhpursThunks::eval('Data_Array_groupBy')))((function() use (&$cmp) {
  $__fn = function($x, $y = null) use (&$cmp, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (is_object((($cmp)($x))($y)) && (((($cmp)($x))($y))->tag === "EQ"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())))((($GLOBALS['Data_Array_sortBy'] ?? \PhpursThunks::eval('Data_Array_sortBy')))($cmp));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_groupAll'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_groupAllBy'] ?? \PhpursThunks::eval('Data_Array_groupAllBy')))(($dictOrd)->compare);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_group'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $eq2_0 = ($dictEq)->eq;
  $__res = function($xs) use (&$eq2_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_groupBy'] ?? \PhpursThunks::eval('Data_Array_groupBy')))($eq2_0))($xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_fromFoldable'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_fromFoldableImpl'] ?? \PhpursThunks::eval('Data_Array_fromFoldableImpl'))))(($dictFoldable)->foldr);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_foldr'] = function() { $v = ($GLOBALS['Data_Foldable_foldrArray'] ?? \PhpursThunks::eval('Data_Foldable_foldrArray')); return $v; };
\PhpursThunks::$thunks['Data_Array_foldl'] = function() { $v = ($GLOBALS['Data_Foldable_foldlArray'] ?? \PhpursThunks::eval('Data_Foldable_foldlArray')); return $v; };
\PhpursThunks::$thunks['Data_Array_transpose'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go, &$xs) {
  $__fn = function($idx, $allArrays = null) use (&$go, &$xs, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_3 = (((($GLOBALS['Data_Foldable_foldlArray'] ?? \PhpursThunks::eval('Data_Foldable_foldlArray')))((function() use (&$idx) {
  $__fn = function($acc, $nextArr = null) use (&$idx, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($nextArr))($idx);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = $acc;
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
if ((is_object($acc) && (($acc)->tag === "Nothing"))) {
$__t2 = [($__local_var_0)->value0];
} else {
if ((is_object($acc) && (($acc)->tag === "Just"))) {
$__t2 = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Data_Array_ST_withArray'] ?? \PhpursThunks::eval('Data_Array_ST_withArray')))((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))(($__local_var_0)->value0)))(($acc)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = new Phpurs_Data1("Just", $__t2);
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
})()))(new Phpurs_Data0("Nothing")))($xs);
  if ((is_object($v_3) && (($v_3)->tag === "Nothing"))) {
$__t4 = $allArrays;
} else {
if ((is_object($v_3) && (($v_3)->tag === "Just"))) {
$__t4 = (($go)(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($idx))(1)))((($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Data_Array_ST_withArray'] ?? \PhpursThunks::eval('Data_Array_ST_withArray')))((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))(($v_3)->value0)))($allArrays)));
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
})();
  $__res = (($go)(0))([]);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_foldRecM'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadRec)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$Monad0_0, &$__local_var_1, &$dictMonadRec) {
  $__fn = function($f, $b = null, $array = null) use (&$Monad0_0, &$__local_var_1, &$dictMonadRec, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictMonadRec)->tailRecM)(function($o) use (&$Monad0_0, &$__local_var_1, &$array, &$f) {
  $__num = \func_num_args();
  if (( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($o)->b))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($array))) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($o)->b))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($array)))->tag === "LT")))) {
$__t2 = (($__local_var_1)->pure)(new Phpurs_Data1("Done", ($o)->a));
} else {
$__t2 = ((((($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)((($f)(($o)->a))((($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$array, &$o) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_unsafeIndex1'] ?? \PhpursThunks::eval('Data_Array_unsafeIndex1')))($array))(($o)->b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))))(function($res__prime__) use (&$__local_var_1, &$o) {
  $__num = \func_num_args();
  $__res = (($__local_var_1)->pure)(new Phpurs_Data1("Loop", (object)["a" => $res__prime__, "b" => ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($o)->b))(1)]));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $b, "b" => 0]);
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
\PhpursThunks::$thunks['Data_Array_foldMap'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Foldable_foldMapDefaultR'] ?? \PhpursThunks::eval('Data_Foldable_foldMapDefaultR')))(($GLOBALS['Data_Foldable_foldableArray'] ?? \PhpursThunks::eval('Data_Foldable_foldableArray'))))($dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_foldM'] = function() { $v = (function() {
  $__fn = function($dictMonad, $f = null, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Array_unconsImpl'] ?? \PhpursThunks::eval('Data_Array_unconsImpl'))))(function($v) use (&$b, &$dictMonad) {
  $__num = \func_num_args();
  $__res = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((function() use (&$b, &$dictMonad, &$f) {
  $__fn = function($a, $as = null) use (&$b, &$dictMonad, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)((($f)($b))($a)))(function($b__prime__) use (&$as, &$dictMonad, &$f) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Data_Array_foldM'] ?? \PhpursThunks::eval('Data_Array_foldM')))($dictMonad))($f))($b__prime__))($as);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_fold'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Foldable_foldMapDefaultR'] ?? \PhpursThunks::eval('Data_Foldable_foldMapDefaultR')))(($GLOBALS['Data_Foldable_foldableArray'] ?? \PhpursThunks::eval('Data_Foldable_foldableArray'))))($dictMonoid))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_findMap'] = function() { $v = (((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_findMapImpl'] ?? \PhpursThunks::eval('Data_Array_findMapImpl'))))(new Phpurs_Data0("Nothing")))(($GLOBALS['Data_Maybe_isJust'] ?? \PhpursThunks::eval('Data_Maybe_isJust'))); return $v; };
\PhpursThunks::$thunks['Data_Array_findLastIndex'] = function() { $v = (((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_findLastIndexImpl'] ?? \PhpursThunks::eval('Data_Array_findLastIndexImpl'))))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(new Phpurs_Data0("Nothing")); return $v; };
\PhpursThunks::$thunks['Data_Array_insertBy'] = function() { $v = (function() {
  $__fn = function($cmp, $x = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = ((($GLOBALS['Data_Array_findLastIndex'] ?? \PhpursThunks::eval('Data_Array_findLastIndex')))(function($y) use (&$cmp, &$x) {
  $__num = \func_num_args();
  $__res = (is_object((($cmp)($x))($y)) && (((($cmp)($x))($y))->tag === "GT"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($ys);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = 0;
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($__local_var_0)->value0))(1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $i_2 = $__t1;
  $__res = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$i_2, &$x, &$ys) {
  $__num = \func_num_args();
  $__local_var_3 = (((($GLOBALS['Data_Array_insertAt'] ?? \PhpursThunks::eval('Data_Array_insertAt')))($i_2))($x))($ys);
  if ((is_object($__local_var_3) && (($__local_var_3)->tag === "Just"))) {
$__t4 = ($__local_var_3)->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_insert'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_insertBy'] ?? \PhpursThunks::eval('Data_Array_insertBy')))(($dictOrd)->compare);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_findIndex'] = function() { $v = (((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array_findIndexImpl'] ?? \PhpursThunks::eval('Data_Array_findIndexImpl'))))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(new Phpurs_Data0("Nothing")); return $v; };
\PhpursThunks::$thunks['Data_Array_find'] = function() { $v = (function() {
  $__fn = function($f, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$xs) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_unsafeIndex1'] ?? \PhpursThunks::eval('Data_Array_unsafeIndex1')))($xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  $__local_var_1 = ((($GLOBALS['Data_Array_findIndex'] ?? \PhpursThunks::eval('Data_Array_findIndex')))($f))($xs);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__t2 = new Phpurs_Data1("Just", ($__local_var_0)(($__local_var_1)->value0));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_filter'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_filterImpl'] ?? \PhpursThunks::eval('Data_Array_filterImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_intersectBy'] = function() { $v = (function() {
  $__fn = function($eq2, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Data_Array_filter'] ?? \PhpursThunks::eval('Data_Array_filter')))(function($x) use (&$eq2, &$ys) {
  $__num = \func_num_args();
  $__local_var_0 = ((($GLOBALS['Data_Array_findIndex'] ?? \PhpursThunks::eval('Data_Array_findIndex')))(($eq2)($x)))($ys);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = false;
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = true;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($xs);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_intersect'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_intersectBy'] ?? \PhpursThunks::eval('Data_Array_intersectBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_elemLastIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Array_findLastIndex'] ?? \PhpursThunks::eval('Data_Array_findLastIndex')))(function($v) use (&$dictEq, &$x) {
  $__num = \func_num_args();
  $__res = ((($dictEq)->eq)($v))($x);
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
\PhpursThunks::$thunks['Data_Array_elemIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Array_findIndex'] ?? \PhpursThunks::eval('Data_Array_findIndex')))(function($v) use (&$dictEq, &$x) {
  $__num = \func_num_args();
  $__res = ((($dictEq)->eq)($v))($x);
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
\PhpursThunks::$thunks['Data_Array_notElem'] = function() { $v = (function() {
  $__fn = function($dictEq, $a = null, $arr = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = ((($GLOBALS['Data_Array_findIndex'] ?? \PhpursThunks::eval('Data_Array_findIndex')))(function($v) use (&$a, &$dictEq) {
  $__num = \func_num_args();
  $__res = ((($dictEq)->eq)($v))($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($arr);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = true;
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = false;
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
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_elem'] = function() { $v = (function() {
  $__fn = function($dictEq, $a = null, $arr = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = ((($GLOBALS['Data_Array_findIndex'] ?? \PhpursThunks::eval('Data_Array_findIndex')))(function($v) use (&$a, &$dictEq) {
  $__num = \func_num_args();
  $__res = ((($dictEq)->eq)($v))($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($arr);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = false;
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = true;
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
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_dropWhile'] = function() { $v = (function() {
  $__fn = function($p, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Array_span'] ?? \PhpursThunks::eval('Data_Array_span')))($p))($xs))->rest;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_dropEnd'] = function() { $v = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))($n);
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($__local_var_0))(1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($__local_var_0))(1))->tag === "LT"))) {
$__t1 = [];
} else {
$__t1 = (((($GLOBALS['Data_Array_slice'] ?? \PhpursThunks::eval('Data_Array_slice')))(0))($__local_var_0))($xs);
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_drop'] = function() { $v = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(1))->tag === "LT"))) {
$__t0 = $xs;
} else {
$__t0 = (((($GLOBALS['Data_Array_slice'] ?? \PhpursThunks::eval('Data_Array_slice')))($n))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))($xs);
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_takeEnd'] = function() { $v = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Array_drop'] ?? \PhpursThunks::eval('Data_Array_drop')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))($n)))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_deleteAt'] = function() { $v = (((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Array__deleteAt'] ?? \PhpursThunks::eval('Data_Array__deleteAt'))))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))(new Phpurs_Data0("Nothing")); return $v; };
\PhpursThunks::$thunks['Data_Array_deleteBy'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  switch (count($v2)) {
case 0:
$__t5 = [];
break;
default:
$__local_var_0 = ((($GLOBALS['Data_Array_findIndex'] ?? \PhpursThunks::eval('Data_Array_findIndex')))(($v)($v1)))($v2);
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = $v2;
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__local_var_2 = ($__local_var_0)->value0;
$__t1 = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$__local_var_2, &$v2) {
  $__num = \func_num_args();
  $__local_var_3 = ((($GLOBALS['Data_Array_deleteAt'] ?? \PhpursThunks::eval('Data_Array_deleteAt')))($__local_var_2))($v2);
  if ((is_object($__local_var_3) && (($__local_var_3)->tag === "Just"))) {
$__t4 = ($__local_var_3)->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t5 = $__t1;
break;
};
  $__res = $__t5;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_delete'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_deleteBy'] ?? \PhpursThunks::eval('Data_Array_deleteBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_difference'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Foldable_foldrArray'] ?? \PhpursThunks::eval('Data_Foldable_foldrArray')))((($GLOBALS['Data_Array_delete'] ?? \PhpursThunks::eval('Data_Array_delete')))($dictEq));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_cons'] = function() { $v = (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Semigroup_concatArray'] ?? \PhpursThunks::eval('Data_Semigroup_concatArray')))([$x]))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_some'] = function() { $v = (function() {
  $__fn = function($dictAlternative, $dictLazy = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->apply)(((((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Array_cons'] ?? \PhpursThunks::eval('Data_Array_cons'))))($v)))((($dictLazy)->defer)(function($v1) use (&$dictAlternative, &$dictLazy, &$v) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Array_many'] ?? \PhpursThunks::eval('Data_Array_many')))($dictAlternative))($dictLazy))($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_many'] = function() { $v = (function() {
  $__fn = function($dictAlternative, $dictLazy = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->alt)((((($GLOBALS['Data_Array_some'] ?? \PhpursThunks::eval('Data_Array_some')))($dictAlternative))($dictLazy))($v)))((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)([]));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_concatMap'] = function() { $v = (function() {
  $__fn = function($b, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Bind_arrayBind'] ?? \PhpursThunks::eval('Control_Bind_arrayBind')))($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_mapMaybe'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_concatMap'] ?? \PhpursThunks::eval('Data_Array_concatMap')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v2) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t0 = [];
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
$__t0 = [($v2)->value0];
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_filterA'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $traverse1_0 = ((($GLOBALS['Data_Traversable_traversableArray'] ?? \PhpursThunks::eval('Data_Traversable_traversableArray')))->traverse)($dictApplicative);
  $__local_var_1 = (((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($p) use (&$__local_var_1, &$traverse1_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($__local_var_1)->map)((($GLOBALS['Data_Array_mapMaybe'] ?? \PhpursThunks::eval('Data_Array_mapMaybe')))(function($v) {
  $__num = \func_num_args();
  if (($v)->value1) {
$__t2 = new Phpurs_Data1("Just", ($v)->value0);
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))))(($traverse1_0)(function($x) use (&$__local_var_1, &$p) {
  $__num = \func_num_args();
  $__res = ((($__local_var_1)->map)((($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple')))($x)))(($p)($x));
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
}; return $v; };
\PhpursThunks::$thunks['Data_Array_catMaybes'] = function() { $v = (($GLOBALS['Data_Array_mapMaybe'] ?? \PhpursThunks::eval('Data_Array_mapMaybe')))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity); return $v; };
\PhpursThunks::$thunks['Data_Array_any'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_anyImpl'] ?? \PhpursThunks::eval('Data_Array_anyImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_nubByEq'] = function() { $v = (function() {
  $__fn = function($eq2, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Control_Monad_ST_Internal_run'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_run')))(((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(($GLOBALS['Data_Array_ST_new'] ?? \PhpursThunks::eval('Data_Array_ST_new'))))(function($arr) use (&$eq2, &$xs) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Control_Monad_ST_Internal_foreach'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_foreach')))($xs))(function($x) use (&$arr, &$eq2) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Monad_ST_Internal_bind_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_bind_')))(((($GLOBALS['Control_Monad_ST_Internal_map_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_map_')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolNot'))))((($GLOBALS['Data_Array_any'] ?? \PhpursThunks::eval('Data_Array_any')))(function($v) use (&$eq2, &$x) {
  $__num = \func_num_args();
  $__res = (($eq2)($v))($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))))((($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeFreeze')))($arr))))(function($e) use (&$arr, &$x) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_Array_void'] ?? \PhpursThunks::eval('Data_Array_void')))(((($GLOBALS['Data_Array_ST_push'] ?? \PhpursThunks::eval('Data_Array_ST_push')))($x))($arr));
  if ($e) {
$__t1 = $__local_var_0;
} else {
$__t1 = (($GLOBALS['Control_Monad_ST_Internal_pure_'] ?? \PhpursThunks::eval('Control_Monad_ST_Internal_pure_')))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(function($dollar__unused_0) use (&$arr) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_ST_unsafeFreeze'] ?? \PhpursThunks::eval('Data_Array_ST_unsafeFreeze')))($arr);
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_nubEq'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_nubByEq'] ?? \PhpursThunks::eval('Data_Array_nubByEq')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_unionBy'] = function() { $v = (function() {
  $__fn = function($eq2, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Data_Semigroup_concatArray'] ?? \PhpursThunks::eval('Data_Semigroup_concatArray')))($xs))((((($GLOBALS['Data_Foldable_foldlArray'] ?? \PhpursThunks::eval('Data_Foldable_foldlArray')))((function() use (&$eq2) {
  $__fn = function($b, $a = null) use (&$eq2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Array_deleteBy'] ?? \PhpursThunks::eval('Data_Array_deleteBy')))($eq2))($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(((($GLOBALS['Data_Array_nubByEq'] ?? \PhpursThunks::eval('Data_Array_nubByEq')))($eq2))($ys)))($xs));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_union'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_unionBy'] ?? \PhpursThunks::eval('Data_Array_unionBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_alterAt'] = function() { $v = (function() {
  $__fn = function($i, $f = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = ((($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index')))($xs))($i);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$v_2 = ($f)(($__local_var_0)->value0);
if ((is_object($v_2) && (($v_2)->tag === "Nothing"))) {
$__t3 = ((($GLOBALS['Data_Array_deleteAt'] ?? \PhpursThunks::eval('Data_Array_deleteAt')))($i))($xs);
} else {
if ((is_object($v_2) && (($v_2)->tag === "Just"))) {
$__t3 = (((($GLOBALS['Data_Array_updateAt'] ?? \PhpursThunks::eval('Data_Array_updateAt')))($i))(($v_2)->value0))($xs);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t1 = $__t3;
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
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_all'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_allImpl'] ?? \PhpursThunks::eval('Data_Array_allImpl'))); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
$ffi_Data_Array = \call_user_func(function() {
  $exports = [];
$rangeImpl = function($start, $end = null) use (&$rangeImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$rangeImpl) {

            return $rangeImpl(...\array_merge($__args, $more));
        };
    }
    $step = $start > $end ? -1 : 1;
    $result = [];
    $i = $start;
    while ($i !== $end) {
        $result[] = $i;
        $i += $step;
    }
    $result[] = $i;
    return $result;
};

$replicateImpl = function($count, $value = null) use (&$replicateImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$replicateImpl) {

            return $replicateImpl(...\array_merge($__args, $more));
        };
    }
    if ($count < 1) return [];
    return array_fill(0, $count, $value);
};

$fromFoldableImpl = function($foldr, $xs = null) use (&$fromFoldableImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$fromFoldableImpl) {

            return $fromFoldableImpl(...\array_merge($__args, $more));
        };
    }
    
    $emptyList = new \stdClass();
    $curryCons = function($head, $tail = null) {
        if (\func_num_args() < 2) {
            return function($tail) use ($head) {
                $obj = new \stdClass();
                $obj->head = $head;
                $obj->tail = $tail;
                return $obj;
            };
        }
        $obj = new \stdClass();
        $obj->head = $head;
        $obj->tail = $tail;
        return $obj;
    };
    
    $listToArray = function($list) use ($emptyList) {
        $result = [];
        $xs = $list;
        while ($xs !== $emptyList && $xs !== null) {
            $result[] = $xs->head;
            $xs = $xs->tail;
        }
        return $result;
    };
    
    return $listToArray($foldr($curryCons)($emptyList)($xs));
};

$length = function($xs) use (&$length) {
    return \count($xs);
};

$unconsImpl = function($empty, $next = null, $xs = null) use (&$unconsImpl) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unconsImpl) {

            return $unconsImpl(...\array_merge($__args, $more));
        };
    }
    if (\count($xs) === 0) return $empty((object)[]);
    return $next($xs[0])(\array_slice($xs, 1));
};

$indexImpl = function($just, $nothing = null, $xs = null, $i = null) use (&$indexImpl) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$indexImpl) {

            return $indexImpl(...\array_merge($__args, $more));
        };
    }
    return ($i < 0 || $i >= \count($xs)) ? $nothing : $just($xs[$i]);
};

$findMapImpl = function($nothing, $isJust = null, $f = null, $xs = null) use (&$findMapImpl) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$findMapImpl) {

            return $findMapImpl(...\array_merge($__args, $more));
        };
    }
    foreach ($xs as $x) {
        $result = $f($x);
        if ($isJust($result)) return $result;
    }
    return $nothing;
};

$findIndexImpl = function($just, $nothing = null, $f = null, $xs = null) use (&$findIndexImpl) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$findIndexImpl) {

            return $findIndexImpl(...\array_merge($__args, $more));
        };
    }
    foreach ($xs as $i => $x) {
        if ($f($x)) return $just($i);
    }
    return $nothing;
};

$findLastIndexImpl = function($just, $nothing = null, $f = null, $xs = null) use (&$findLastIndexImpl) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$findLastIndexImpl) {

            return $findLastIndexImpl(...\array_merge($__args, $more));
        };
    }
    for ($i = \count($xs) - 1; $i >= 0; $i--) {
        if ($f($xs[$i])) return $just($i);
    }
    return $nothing;
};

$_insertAt = function($just, $nothing = null, $i = null, $a = null, $l = null) use (&$_insertAt) {
    if (\func_num_args() < 5) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_insertAt) {

            return $_insertAt(...\array_merge($__args, $more));
        };
    }
    if ($i < 0 || $i > \count($l)) return $nothing;
    $l1 = $l;
    array_splice($l1, $i, 0, [$a]);
    return $just($l1);
};

$_deleteAt = function($just, $nothing = null, $i = null, $l = null) use (&$_deleteAt) {
    if (\func_num_args() < 4) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_deleteAt) {

            return $_deleteAt(...\array_merge($__args, $more));
        };
    }
    if ($i < 0 || $i >= \count($l)) return $nothing;
    $l1 = $l;
    array_splice($l1, $i, 1);
    return $just($l1);
};

$_updateAt = function($just, $nothing = null, $i = null, $a = null, $l = null) use (&$_updateAt) {
    if (\func_num_args() < 5) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$_updateAt) {

            return $_updateAt(...\array_merge($__args, $more));
        };
    }
    if ($i < 0 || $i >= \count($l)) return $nothing;
    $l1 = $l;
    $l1[$i] = $a;
    return $just($l1);
};

$reverse = function($l) use (&$reverse) {
    return array_reverse($l);
};

$concat = function($xss) use (&$concat) {
    if (\count($xss) === 0) return [];
    return \array_merge(...$xss);
};

$filterImpl = function($f, $xs = null) use (&$filterImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$filterImpl) {

            return $filterImpl(...\array_merge($__args, $more));
        };
    }
    $res = [];
    foreach ($xs as $x) {
        if ($f($x)) $res[] = $x;
    }
    return $res;
};

$partitionImpl = function($f, $xs = null) use (&$partitionImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$partitionImpl) {

            return $partitionImpl(...\array_merge($__args, $more));
        };
    }
    $yes = [];
    $no = [];
    foreach ($xs as $x) {
        if ($f($x)) $yes[] = $x;
        else $no[] = $x;
    }
    return (object)["yes" => $yes, "no" => $no];
};

$scanlImpl = function($f, $b = null, $xs = null) use (&$scanlImpl) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$scanlImpl) {

            return $scanlImpl(...\array_merge($__args, $more));
        };
    }
    $acc = $b;
    $out = [];
    foreach ($xs as $x) {
        $acc = $f($acc)($x);
        $out[] = $acc;
    }
    return $out;
};

$scanrImpl = function($f, $b = null, $xs = null) use (&$scanrImpl) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$scanrImpl) {

            return $scanrImpl(...\array_merge($__args, $more));
        };
    }
    $len = \count($xs);
    $acc = $b;
    $out = array_fill(0, $len, null);
    for ($i = $len - 1; $i >= 0; $i--) {
        $acc = $f($xs[$i])($acc);
        $out[$i] = $acc;
    }
    return $out;
};

$sortByImpl = function($compare, $fromOrdering = null, $xs = null) use (&$sortByImpl) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$sortByImpl) {

            return $sortByImpl(...\array_merge($__args, $more));
        };
    }
    $out = $xs;
    \usort($out, function($a, $b) use ($compare, $fromOrdering) {
        return $fromOrdering($compare($a)($b));
    });
    return $out;
};

$sliceImpl = function($s, $e = null, $l = null) use (&$sliceImpl) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$sliceImpl) {

            return $sliceImpl(...\array_merge($__args, $more));
        };
    }
    return \array_slice($l, $s, $e - $s);
};

$zipWithImpl = function($f, $xs = null, $ys = null) use (&$zipWithImpl) {
    if (\func_num_args() < 3) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$zipWithImpl) {

            return $zipWithImpl(...\array_merge($__args, $more));
        };
    }
    $l = \min(\count($xs), \count($ys));
    $result = [];
    for ($i = 0; $i < $l; $i++) {
        $result[] = $f($xs[$i])($ys[$i]);
    }
    return $result;
};

$anyImpl = function($p, $xs = null) use (&$anyImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$anyImpl) {

            return $anyImpl(...\array_merge($__args, $more));
        };
    }
    foreach ($xs as $x) {
        if ($p($x)) return true;
    }
    return false;
};

$allImpl = function($p, $xs = null) use (&$allImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$allImpl) {

            return $allImpl(...\array_merge($__args, $more));
        };
    }
    foreach ($xs as $x) {
        if (!$p($x)) return false;
    }
    return true;
};

$unsafeIndexImpl = function($xs, $n = null) use (&$unsafeIndexImpl) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$unsafeIndexImpl) {

            return $unsafeIndexImpl(...\array_merge($__args, $more));
        };
    }
    return $xs[$n];
};

$exports['rangeImpl'] = $rangeImpl;
$exports['replicateImpl'] = $replicateImpl;
$exports['fromFoldableImpl'] = $fromFoldableImpl;
$exports['length'] = $length;
$exports['unconsImpl'] = $unconsImpl;
$exports['indexImpl'] = $indexImpl;
$exports['findMapImpl'] = $findMapImpl;
$exports['findIndexImpl'] = $findIndexImpl;
$exports['findLastIndexImpl'] = $findLastIndexImpl;
$exports['_insertAt'] = $_insertAt;
$exports['_deleteAt'] = $_deleteAt;
$exports['_updateAt'] = $_updateAt;
$exports['reverse'] = $reverse;
$exports['concat'] = $concat;
$exports['filterImpl'] = $filterImpl;
$exports['partitionImpl'] = $partitionImpl;
$exports['scanlImpl'] = $scanlImpl;
$exports['scanrImpl'] = $scanrImpl;
$exports['sortByImpl'] = $sortByImpl;
$exports['sliceImpl'] = $sliceImpl;
$exports['zipWithImpl'] = $zipWithImpl;
$exports['anyImpl'] = $anyImpl;
$exports['allImpl'] = $allImpl;
$exports['unsafeIndexImpl'] = $unsafeIndexImpl;
return $exports;
  return $exports;
});
\PhpursThunks::$thunks['Data_Array__deleteAt'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['_deleteAt']; };
\PhpursThunks::$thunks['Data_Array__insertAt'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['_insertAt']; };
\PhpursThunks::$thunks['Data_Array__updateAt'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['_updateAt']; };
\PhpursThunks::$thunks['Data_Array_allImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['allImpl']; };
\PhpursThunks::$thunks['Data_Array_anyImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['anyImpl']; };
\PhpursThunks::$thunks['Data_Array_concat'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['concat']; };
\PhpursThunks::$thunks['Data_Array_filterImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['filterImpl']; };
\PhpursThunks::$thunks['Data_Array_findIndexImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['findIndexImpl']; };
\PhpursThunks::$thunks['Data_Array_findLastIndexImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['findLastIndexImpl']; };
\PhpursThunks::$thunks['Data_Array_findMapImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['findMapImpl']; };
\PhpursThunks::$thunks['Data_Array_fromFoldableImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['fromFoldableImpl']; };
\PhpursThunks::$thunks['Data_Array_indexImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['indexImpl']; };
\PhpursThunks::$thunks['Data_Array_length'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['length']; };
\PhpursThunks::$thunks['Data_Array_partitionImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['partitionImpl']; };
\PhpursThunks::$thunks['Data_Array_rangeImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['rangeImpl']; };
\PhpursThunks::$thunks['Data_Array_replicateImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['replicateImpl']; };
\PhpursThunks::$thunks['Data_Array_reverse'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['reverse']; };
\PhpursThunks::$thunks['Data_Array_scanlImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['scanlImpl']; };
\PhpursThunks::$thunks['Data_Array_scanrImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['scanrImpl']; };
\PhpursThunks::$thunks['Data_Array_sliceImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['sliceImpl']; };
\PhpursThunks::$thunks['Data_Array_sortByImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['sortByImpl']; };
\PhpursThunks::$thunks['Data_Array_unconsImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['unconsImpl']; };
\PhpursThunks::$thunks['Data_Array_unsafeIndexImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['unsafeIndexImpl']; };
\PhpursThunks::$thunks['Data_Array_zipWithImpl'] = function() use (&$ffi_Data_Array) { return $ffi_Data_Array['zipWithImpl']; };




























































































