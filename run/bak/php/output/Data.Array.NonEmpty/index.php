<?php

namespace Data\Array\NonEmpty;

// ALL IMPORTS: Control.Alternative, Control.Bind, Control.Lazy, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Array, Data.Array.NonEmpty, Data.Array.NonEmpty.Internal, Data.Bifunctor, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.Maybe, Data.NonEmpty, Data.Ord, Data.Ring, Data.Semigroup, Data.Semigroup.Foldable, Data.Semiring, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Partial.Unsafe, Prelude, Prim, Safe.Coerce, Unsafe.Coerce
// TO REQUIRE: Control.Alternative, Control.Bind, Control.Lazy, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Array, Data.Array.NonEmpty, Data.Array.NonEmpty.Internal, Data.Bifunctor, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.Maybe, Data.NonEmpty, Data.Ord, Data.Ring, Data.Semigroup, Data.Semigroup.Foldable, Data.Semiring, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Partial.Unsafe, Prelude, Safe.Coerce, Unsafe.Coerce
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

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
\PhpursThunks::$thunks['Data_Array_NonEmpty_max'] = function() { $v = (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_0 = (((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))($y);
  if ((is_object($v_0) && (($v_0)->tag === "LT"))) {
$__t1 = $y;
} else {
if ((is_object($v_0) && (($v_0)->tag === "EQ"))) {
$__t1 = $x;
} else {
if ((is_object($v_0) && (($v_0)->tag === "GT"))) {
$__t1 = $x;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_fromJust'] = function() { $v = function($v) {
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
\PhpursThunks::$thunks['Data_Array_NonEmpty_unsafeIndex1'] = function() { $v = (($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_unsafeIndexImpl'] ?? \PhpursThunks::eval('Data_Array_unsafeIndexImpl'))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_transpose'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_transpose'] ?? \PhpursThunks::eval('Data_Array_transpose'))))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_toArray'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_unionBy__prime__'] = function() { $v = (function() {
  $__fn = function($eq, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Data_Array_unionBy'] ?? \PhpursThunks::eval('Data_Array_unionBy')))($eq))($xs));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_union__prime__'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_NonEmpty_unionBy__prime__'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_unionBy__prime__')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_unionBy'] = function() { $v = (function() {
  $__fn = function($eq, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Data_Array_unionBy'] ?? \PhpursThunks::eval('Data_Array_unionBy')))($eq))($xs))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_union'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_NonEmpty_unionBy'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_unionBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_unzip'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, ($v)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_unzip'] ?? \PhpursThunks::eval('Data_Array_unzip'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_updateAt'] = function() { $v = (function() {
  $__fn = function($i, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_updateAt'] ?? \PhpursThunks::eval('Data_Array_updateAt')))($i))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_zip'] = function() { $v = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Array_zip'] ?? \PhpursThunks::eval('Data_Array_zip')))($xs))($ys);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_zipWith'] = function() { $v = (function() {
  $__fn = function($f, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($GLOBALS['Data_Array_zipWith'] ?? \PhpursThunks::eval('Data_Array_zipWith')))($f))($xs))($ys);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_zipWithA'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $zipWithA1_0 = (($GLOBALS['Data_Array_zipWithA'] ?? \PhpursThunks::eval('Data_Array_zipWithA')))($dictApplicative);
  $__res = (function() use (&$zipWithA1_0) {
  $__fn = function($f, $xs = null, $ys = null) use (&$zipWithA1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(((($zipWithA1_0)($f))($xs))($ys));
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
\PhpursThunks::$thunks['Data_Array_NonEmpty_splitAt'] = function() { $v = (function() {
  $__fn = function($i, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Array_splitAt'] ?? \PhpursThunks::eval('Data_Array_splitAt')))($i))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_some'] = function() { $v = (function() {
  $__fn = function($dictAlternative, $dictLazy = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))(((($GLOBALS['Data_Array_some'] ?? \PhpursThunks::eval('Data_Array_some')))($dictAlternative))($dictLazy));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_snoc__prime__'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Data_Array_NonEmpty_snoc'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Data_Array_NonEmpty_singleton'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(($GLOBALS['Data_Array_singleton'] ?? \PhpursThunks::eval('Data_Array_singleton'))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_replicate'] = function() { $v = (function() {
  $__fn = function($i, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Array_replicate'] ?? \PhpursThunks::eval('Data_Array_replicate')))(((($GLOBALS['Data_Array_NonEmpty_max'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_max')))(1))($i)))($x);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_range'] = function() { $v = (function() {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Array_range'] ?? \PhpursThunks::eval('Data_Array_range')))($x))($y);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_prependArray'] = function() { $v = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Semigroup_concatArray'] ?? \PhpursThunks::eval('Data_Semigroup_concatArray')))($xs))($ys);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_modifyAt'] = function() { $v = (function() {
  $__fn = function($i, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_modifyAt'] ?? \PhpursThunks::eval('Data_Array_modifyAt')))($i))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_intersectBy__prime__'] = function() { $v = (function() {
  $__fn = function($eq, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Array_intersectBy'] ?? \PhpursThunks::eval('Data_Array_intersectBy')))($eq))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_intersectBy'] = function() { $v = (function() {
  $__fn = function($eq, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_intersectBy__prime__')))($eq))($xs)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_intersect__prime__'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_NonEmpty_intersectBy__prime__'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_intersectBy__prime__')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_intersect'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Array_NonEmpty_intersectBy'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_intersectBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_intercalate'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__local_var_0 = ((($GLOBALS['Data_Semigroup_Foldable_intercalateMap'] ?? \PhpursThunks::eval('Data_Semigroup_Foldable_intercalateMap')))(($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'))))($dictSemigroup);
  $__res = function($a) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = (($__local_var_0)($a))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_insertAt'] = function() { $v = (function() {
  $__fn = function($i, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_insertAt'] ?? \PhpursThunks::eval('Data_Array_insertAt')))($i))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_fromFoldable1'] = function() { $v = function($dictFoldable1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_fromFoldableImpl'] ?? \PhpursThunks::eval('Data_Array_fromFoldableImpl'))))(((($dictFoldable1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->foldr));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_fromArray'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))(0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)((($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length')))($xs)))(0))->tag === "GT"))) {
$__t0 = new Phpurs_Data1("Just", $xs);
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_fromFoldable'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_fromArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_fromArray'))))(((($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn2')))(($GLOBALS['Data_Array_fromFoldableImpl'] ?? \PhpursThunks::eval('Data_Array_fromFoldableImpl'))))(($dictFoldable)->foldr));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_transpose__prime__'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_fromArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_fromArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_transpose'] ?? \PhpursThunks::eval('Data_Array_transpose'))))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_foldr1'] = function() { $v = (($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray')))->foldr1; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_foldl1'] = function() { $v = (($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray')))->foldl1; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_foldMap1'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultL'] ?? \PhpursThunks::eval('Data_Semigroup_Foldable_foldMap1DefaultL')))(($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'))))(($GLOBALS['Data_Functor_functorArray'] ?? \PhpursThunks::eval('Data_Functor_functorArray'))))($dictSemigroup);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_fold1'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultL'] ?? \PhpursThunks::eval('Data_Semigroup_Foldable_foldMap1DefaultL')))(($GLOBALS['Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_foldable1NonEmptyArray'))))(($GLOBALS['Data_Functor_functorArray'] ?? \PhpursThunks::eval('Data_Functor_functorArray'))))($dictSemigroup))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_difference__prime__'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Foldable_foldrArray'] ?? \PhpursThunks::eval('Data_Foldable_foldrArray')))((($GLOBALS['Data_Array_delete'] ?? \PhpursThunks::eval('Data_Array_delete')))($dictEq));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_cons__prime__'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Data_Array_NonEmpty_fromNonEmpty'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatArray'] ?? \PhpursThunks::eval('Data_Semigroup_concatArray')))([($v)->value0]))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_concatMap'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Data_Array_NonEmpty_concat'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_concat'] ?? \PhpursThunks::eval('Data_Array_concat'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))))((($GLOBALS['Data_Functor_arrayMap'] ?? \PhpursThunks::eval('Data_Functor_arrayMap')))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')))))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_appendArray'] = function() { $v = (function() {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Semigroup_concatArray'] ?? \PhpursThunks::eval('Data_Semigroup_concatArray')))($xs))($ys);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_alterAt'] = function() { $v = (function() {
  $__fn = function($i, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_alterAt'] ?? \PhpursThunks::eval('Data_Array_alterAt')))($i))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_head'] = function() { $v = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_fromJust'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_fromJust'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_head'] ?? \PhpursThunks::eval('Data_Array_head'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_init'] = function() { $v = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_fromJust'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_fromJust'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_init'] ?? \PhpursThunks::eval('Data_Array_init'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_last'] = function() { $v = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_fromJust'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_fromJust'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_last'] ?? \PhpursThunks::eval('Data_Array_last'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_tail'] = function() { $v = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_fromJust'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_fromJust'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_tail'] ?? \PhpursThunks::eval('Data_Array_tail'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_uncons'] = function() { $v = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_fromJust'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_fromJust'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_uncons'] ?? \PhpursThunks::eval('Data_Array_uncons'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_toNonEmpty'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", ($v)->head, ($v)->tail);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['Data_Array_NonEmpty_uncons'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_uncons'))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_unsnoc'] = function() { $v = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_fromJust'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_fromJust'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_unsnoc'] ?? \PhpursThunks::eval('Data_Array_unsnoc'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_all'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_all'] ?? \PhpursThunks::eval('Data_Array_all')))($p)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_any'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_any'] ?? \PhpursThunks::eval('Data_Array_any')))($p)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_catMaybes'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_mapMaybe'] ?? \PhpursThunks::eval('Data_Array_mapMaybe')))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_delete'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_delete'] ?? \PhpursThunks::eval('Data_Array_delete')))($dictEq))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_deleteAt'] = function() { $v = function($i) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_deleteAt'] ?? \PhpursThunks::eval('Data_Array_deleteAt')))($i)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_deleteBy'] = function() { $v = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_deleteBy'] ?? \PhpursThunks::eval('Data_Array_deleteBy')))($f))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_difference'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $difference__prime__1_0 = (($GLOBALS['Data_Foldable_foldrArray'] ?? \PhpursThunks::eval('Data_Foldable_foldrArray')))((($GLOBALS['Data_Array_delete'] ?? \PhpursThunks::eval('Data_Array_delete')))($dictEq));
  $__res = function($xs) use (&$difference__prime__1_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($difference__prime__1_0)($xs)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_drop'] = function() { $v = function($i) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_drop'] ?? \PhpursThunks::eval('Data_Array_drop')))($i)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_dropEnd'] = function() { $v = function($i) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_dropEnd'] ?? \PhpursThunks::eval('Data_Array_dropEnd')))($i)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_dropWhile'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_dropWhile'] ?? \PhpursThunks::eval('Data_Array_dropWhile')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_elem'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_elem'] ?? \PhpursThunks::eval('Data_Array_elem')))($dictEq))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_elemIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_findIndex'] ?? \PhpursThunks::eval('Data_Array_findIndex')))(function($v) use (&$dictEq, &$x) {
  $__num = \func_num_args();
  $__res = ((($dictEq)->eq)($v))($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_elemLastIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_findLastIndex'] ?? \PhpursThunks::eval('Data_Array_findLastIndex')))(function($v) use (&$dictEq, &$x) {
  $__num = \func_num_args();
  $__res = ((($dictEq)->eq)($v))($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_filter'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_filter'] ?? \PhpursThunks::eval('Data_Array_filter')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_filterA'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $filterA1_0 = (($GLOBALS['Data_Array_filterA'] ?? \PhpursThunks::eval('Data_Array_filterA')))($dictApplicative);
  $__res = function($f) use (&$filterA1_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($filterA1_0)($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_find'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_find'] ?? \PhpursThunks::eval('Data_Array_find')))($p)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_findIndex'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_findIndex'] ?? \PhpursThunks::eval('Data_Array_findIndex')))($p)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_findLastIndex'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_findLastIndex'] ?? \PhpursThunks::eval('Data_Array_findLastIndex')))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_findMap'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_findMap'] ?? \PhpursThunks::eval('Data_Array_findMap')))($p)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_foldM'] = function() { $v = (function() {
  $__fn = function($dictMonad, $f = null, $acc = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Data_Array_foldM'] ?? \PhpursThunks::eval('Data_Array_foldM')))($dictMonad))($f))($acc)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_foldRecM'] = function() { $v = function($dictMonadRec) {
  $__num = \func_num_args();
  $foldRecM1_0 = (($GLOBALS['Data_Array_foldRecM'] ?? \PhpursThunks::eval('Data_Array_foldRecM')))($dictMonadRec);
  $__res = (function() use (&$foldRecM1_0) {
  $__fn = function($f, $acc = null) use (&$foldRecM1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($foldRecM1_0)($f))($acc)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
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
\PhpursThunks::$thunks['Data_Array_NonEmpty_index'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_index'] ?? \PhpursThunks::eval('Data_Array_index'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_length'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_length'] ?? \PhpursThunks::eval('Data_Array_length'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_mapMaybe'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_mapMaybe'] ?? \PhpursThunks::eval('Data_Array_mapMaybe')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_notElem'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_notElem'] ?? \PhpursThunks::eval('Data_Array_notElem')))($dictEq))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_partition'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_partition'] ?? \PhpursThunks::eval('Data_Array_partition')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_slice'] = function() { $v = (function() {
  $__fn = function($start, $end = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_slice'] ?? \PhpursThunks::eval('Data_Array_slice')))($start))($end)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_span'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_span'] ?? \PhpursThunks::eval('Data_Array_span')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_take'] = function() { $v = function($i) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_take'] ?? \PhpursThunks::eval('Data_Array_take')))($i)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_takeEnd'] = function() { $v = function($i) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_takeEnd'] ?? \PhpursThunks::eval('Data_Array_takeEnd')))($i)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_takeWhile'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_takeWhile'] ?? \PhpursThunks::eval('Data_Array_takeWhile')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_toUnfoldable'] = function() { $v = function($dictUnfoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_toUnfoldable'] ?? \PhpursThunks::eval('Data_Array_toUnfoldable')))($dictUnfoldable)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_cons'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_cons'] ?? \PhpursThunks::eval('Data_Array_cons')))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_group'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $eq2_0 = ($dictEq)->eq;
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($xs) use (&$eq2_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_groupBy'] ?? \PhpursThunks::eval('Data_Array_groupBy')))($eq2_0))($xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_groupAllBy'] = function() { $v = function($op) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_groupAllBy'] ?? \PhpursThunks::eval('Data_Array_groupAllBy')))($op)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_groupAll'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_groupAllBy'] ?? \PhpursThunks::eval('Data_Array_groupAllBy')))(($dictOrd)->compare)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_groupBy'] = function() { $v = function($op) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_groupBy'] ?? \PhpursThunks::eval('Data_Array_groupBy')))($op)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_insert'] = function() { $v = (function() {
  $__fn = function($dictOrd, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_insert'] ?? \PhpursThunks::eval('Data_Array_insert')))($dictOrd))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_insertBy'] = function() { $v = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_insertBy'] ?? \PhpursThunks::eval('Data_Array_insertBy')))($f))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_intersperse'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_intersperse'] ?? \PhpursThunks::eval('Data_Array_intersperse')))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_mapWithIndex'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_FunctorWithIndex_mapWithIndexArray'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_mapWithIndexArray')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_modifyAtIndices'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $modifyAtIndices1_0 = (($GLOBALS['Data_Array_modifyAtIndices'] ?? \PhpursThunks::eval('Data_Array_modifyAtIndices')))($dictFoldable);
  $__res = (function() use (&$modifyAtIndices1_0) {
  $__fn = function($is, $f = null) use (&$modifyAtIndices1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($modifyAtIndices1_0)($is))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
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
\PhpursThunks::$thunks['Data_Array_NonEmpty_nub'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_nub'] ?? \PhpursThunks::eval('Data_Array_nub')))($dictOrd)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_nubBy'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_nubBy'] ?? \PhpursThunks::eval('Data_Array_nubBy')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_nubByEq'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_nubByEq'] ?? \PhpursThunks::eval('Data_Array_nubByEq')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_nubEq'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_nubEq'] ?? \PhpursThunks::eval('Data_Array_nubEq')))($dictEq)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_reverse'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_reverse'] ?? \PhpursThunks::eval('Data_Array_reverse'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_scanl'] = function() { $v = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_scanl'] ?? \PhpursThunks::eval('Data_Array_scanl')))($f))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_scanr'] = function() { $v = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_scanr'] ?? \PhpursThunks::eval('Data_Array_scanr')))($f))($x)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_sort'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(function($xs) use (&$compare_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Array_sortBy'] ?? \PhpursThunks::eval('Data_Array_sortBy')))($compare_0))($xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_sortBy'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_Array_sortBy'] ?? \PhpursThunks::eval('Data_Array_sortBy')))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_sortWith'] = function() { $v = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Array_sortWith'] ?? \PhpursThunks::eval('Data_Array_sortWith')))($dictOrd))($f)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_updateAtIndices'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $updateAtIndices1_0 = (($GLOBALS['Data_Array_updateAtIndices'] ?? \PhpursThunks::eval('Data_Array_updateAtIndices')))($dictFoldable);
  $__res = function($pairs) use (&$updateAtIndices1_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_Internal_NonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_NonEmptyArray'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($updateAtIndices1_0)($pairs)))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_unsafeIndex'] = function() { $v = function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_unsafeIndex1'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_unsafeIndex1'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_unsafeIndex2'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Array_NonEmpty_unsafeIndex1'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_unsafeIndex1'))))(($GLOBALS['Data_Array_NonEmpty_toArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_toArray'))); return $v; };
\PhpursThunks::$thunks['Data_Array_NonEmpty_toUnfoldable1'] = function() { $v = (function() {
  $__fn = function($dictUnfoldable1, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $len_0 = (($GLOBALS['Data_Array_NonEmpty_length'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_length')))($xs);
  $__res = ((($dictUnfoldable1)->unfoldr1)(function($i) use (&$len_0, &$xs) {
  $__num = \func_num_args();
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($i))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($len_0))(1))) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($i))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($len_0))(1)))->tag === "LT"))) {
$__t1 = new Phpurs_Data1("Just", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($i))(1));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = new Phpurs_Data2("Tuple", (((($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Array_NonEmpty_unsafeIndex2'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_unsafeIndex2'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($xs))($i), $__t1);
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
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };













































































































