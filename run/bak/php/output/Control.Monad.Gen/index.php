<?php

namespace Control\Monad\Gen;

// ALL IMPORTS: Control.Applicative, Control.Bind, Control.Monad.Gen, Control.Monad.Gen.Class, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Boolean, Data.Foldable, Data.Function, Data.Functor, Data.Maybe, Data.Monoid.Additive, Data.Newtype, Data.Ord, Data.Ring, Data.Semigroup, Data.Semigroup.Foldable, Data.Semigroup.Last, Data.Semiring, Data.Tuple, Data.Unfoldable, Data.Unit, Prelude, Prim
// TO REQUIRE: Control.Applicative, Control.Bind, Control.Monad.Gen, Control.Monad.Gen.Class, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Boolean, Data.Foldable, Data.Function, Data.Functor, Data.Maybe, Data.Monoid.Additive, Data.Newtype, Data.Ord, Data.Ring, Data.Semigroup, Data.Semigroup.Foldable, Data.Semigroup.Last, Data.Semiring, Data.Tuple, Data.Unfoldable, Data.Unit, Prelude
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Last/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
\PhpursThunks::$thunks['Control_Monad_Gen_monoidAdditive'] = function() { $v = (function() use (&$__fn) {
$semigroupAdditive1_0 = (object)["append" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Semiring_numAdd'] ?? \PhpursThunks::eval('Data_Semiring_numAdd')))($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
return (object)["mempty" => 0.0, "Semigroup0" => function($dollar__unused_0) use (&$semigroupAdditive1_0) {
  $__num = \func_num_args();
  $__res = $semigroupAdditive1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
})(); return $v; };
\PhpursThunks::$thunks['Control_Monad_Gen_Cons'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Control_Monad_Gen_Nil'] = function() { $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); return $v; };
\PhpursThunks::$thunks['Control_Monad_Gen_unfoldable'] = function() { $v = (function() {
  $__fn = function($dictMonadRec, $dictMonadGen = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $Monad0_0 = (($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $Bind1_2 = (($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$Bind1_2, &$__local_var_1, &$dictMonadGen, &$dictMonadRec) {
  $__fn = function($dictUnfoldable, $gen = null) use (&$Bind1_2, &$__local_var_1, &$dictMonadGen, &$dictMonadRec, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((($Bind1_2)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)((($dictUnfoldable)->unfoldr)(function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t3 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t3 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($v)->value0, ($v)->value1));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))((($dictMonadGen)->sized)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($dictMonadRec)->tailRecM)(function($v) use (&$Bind1_2, &$__local_var_1, &$gen) {
  $__num = \func_num_args();
  if (( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value1))(0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)(($v)->value1))(0))->tag === "GT")))) {
$__t6 = (($__local_var_1)->pure)(new Phpurs_Data1("Done", ($v)->value0));
} else {
$__local_var_4 = ($v)->value0;
$__local_var_5 = ($v)->value1;
$__t6 = ((($Bind1_2)->bind)($gen))(function($x) use (&$__local_var_1, &$__local_var_4, &$__local_var_5) {
  $__num = \func_num_args();
  $__res = (($__local_var_1)->pure)(new Phpurs_Data1("Loop", new Phpurs_Data2("Tuple", new Phpurs_Data2("Cons", $x, $__local_var_4), ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($__local_var_5))(1))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
};
  $__res = $__t6;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))((($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple')))(new Phpurs_Data0("Nil")))));
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
\PhpursThunks::$thunks['Control_Monad_Gen_semigroupFreqSemigroup'] = function() { $v = (object)["append" => (function() {
  $__fn = function($v, $v1 = null, $pos = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $v2_0 = ($v)($pos);
  if ((is_object(($v2_0)->value0) && ((($v2_0)->value0)->tag === "Just"))) {
$__t1 = ($v1)((($v2_0)->value0)->value0);
} else {
$__t1 = $v2_0;
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Control_Monad_Gen_fromIndex'] = function() { $v = function($dictFoldable1) {
  $__num = \func_num_args();
  $foldMap1_0 = (($dictFoldable1)->foldMap1)(($GLOBALS['Data_Semigroup_Last_semigroupLast'] ?? \PhpursThunks::eval('Data_Semigroup_Last_semigroupLast')));
  $__res = (function() use (&$dictFoldable1, &$foldMap1_0) {
  $__fn = function($i, $xs = null) use (&$dictFoldable1, &$foldMap1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (function() use (&$foldMap1_0, &$go, &$xs) {
  $__fn = function($v, $v1 = null) use (&$foldMap1_0, &$go, &$xs, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if ((is_object(($v1)->value1) && ((($v1)->value1)->tag === "Nil"))) {
$__t2 = ($v1)->value0;
} else {
if (( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))(0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($v))(0))->tag === "GT")))) {
$__t2 = ($v1)->value0;
} else {
$__t2 = (($go)(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1)))(($v1)->value1);
};
};
$__t1 = $__t2;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($foldMap1_0)(($GLOBALS['Data_Semigroup_Last_Last'] ?? \PhpursThunks::eval('Data_Semigroup_Last_Last'))))($xs));
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
  $__res = (($go)($i))((((((($dictFoldable1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->foldr)(($GLOBALS['Control_Monad_Gen_Cons'] ?? \PhpursThunks::eval('Control_Monad_Gen_Cons'))))(new Phpurs_Data0("Nil")))($xs));
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
\PhpursThunks::$thunks['Control_Monad_Gen_oneOf'] = function() { $v = (function() {
  $__fn = function($dictMonadGen, $dictFoldable1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $length_0 = ((((($dictFoldable1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->foldl)((function() {
  $__fn = function($c, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))($c);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(0);
  $fromIndex1_1 = (($GLOBALS['Control_Monad_Gen_fromIndex'] ?? \PhpursThunks::eval('Control_Monad_Gen_fromIndex')))($dictFoldable1);
  $__res = function($xs) use (&$dictMonadGen, &$fromIndex1_1, &$length_0) {
  $__num = \func_num_args();
  $__res = ((((((($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(((($dictMonadGen)->chooseInt)(0))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))(($length_0)($xs)))(1))))(function($n) use (&$fromIndex1_1, &$xs) {
  $__num = \func_num_args();
  $__res = (($fromIndex1_1)($n))($xs);
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
\PhpursThunks::$thunks['Control_Monad_Gen_freqSemigroup'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__local_var_0 = ($v)->value0;
  $__local_var_1 = ($v)->value1;
  $__res = function($pos) use (&$__local_var_0, &$__local_var_1) {
  $__num = \func_num_args();
  if (( ! (is_object((((($GLOBALS['Data_Ord_ordNumber'] ?? \PhpursThunks::eval('Data_Ord_ordNumber')))->compare)($pos))($__local_var_0)) && (((((($GLOBALS['Data_Ord_ordNumber'] ?? \PhpursThunks::eval('Data_Ord_ordNumber')))->compare)($pos))($__local_var_0))->tag === "LT")))) {
$__t2 = new Phpurs_Data2("Tuple", new Phpurs_Data1("Just", ((($GLOBALS['Data_Ring_numSub'] ?? \PhpursThunks::eval('Data_Ring_numSub')))($pos))($__local_var_0)), $__local_var_1);
} else {
$__t2 = new Phpurs_Data2("Tuple", new Phpurs_Data0("Nothing"), $__local_var_1);
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Gen_frequency'] = function() { $v = (function() {
  $__fn = function($dictMonadGen, $dictFoldable1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $foldMap_0 = (((($dictFoldable1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->foldMap)(($GLOBALS['Control_Monad_Gen_monoidAdditive'] ?? \PhpursThunks::eval('Control_Monad_Gen_monoidAdditive')));
  $foldMap1_1 = (($dictFoldable1)->foldMap1)(($GLOBALS['Control_Monad_Gen_semigroupFreqSemigroup'] ?? \PhpursThunks::eval('Control_Monad_Gen_semigroupFreqSemigroup')));
  $__res = function($xs) use (&$dictMonadGen, &$foldMap_0, &$foldMap1_1) {
  $__num = \func_num_args();
  $__res = ((((((($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(((($dictMonadGen)->chooseFloat)(0.0))((((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($foldMap_0))(($GLOBALS['Data_Tuple_fst'] ?? \PhpursThunks::eval('Data_Tuple_fst'))))($xs))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Tuple_snd'] ?? \PhpursThunks::eval('Data_Tuple_snd'))))((($foldMap1_1)(($GLOBALS['Control_Monad_Gen_freqSemigroup'] ?? \PhpursThunks::eval('Control_Monad_Gen_freqSemigroup'))))($xs)));
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
\PhpursThunks::$thunks['Control_Monad_Gen_filtered'] = function() { $v = (function() {
  $__fn = function($dictMonadRec, $dictMonadGen = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (((((((($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($gen) use (&$__local_var_0, &$dictMonadRec) {
  $__num = \func_num_args();
  $__res = ((($dictMonadRec)->tailRecM)(function($v) use (&$__local_var_0, &$gen) {
  $__num = \func_num_args();
  $__res = ((($__local_var_0)->map)(function($a) {
  $__num = \func_num_args();
  if ((is_object($a) && (($a)->tag === "Nothing"))) {
$__t1 = new Phpurs_Data1("Loop", ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
} else {
if ((is_object($a) && (($a)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Done", ($a)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($gen);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
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
\PhpursThunks::$thunks['Control_Monad_Gen_suchThat'] = function() { $v = (function() {
  $__fn = function($dictMonadRec, $dictMonadGen = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $filtered2_0 = ((($GLOBALS['Control_Monad_Gen_filtered'] ?? \PhpursThunks::eval('Control_Monad_Gen_filtered')))($dictMonadRec))($dictMonadGen);
  $__local_var_1 = (((((((($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_1, &$filtered2_0) {
  $__fn = function($gen, $pred = null) use (&$__local_var_1, &$filtered2_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($filtered2_0)(((($__local_var_1)->map)(function($a) use (&$pred) {
  $__num = \func_num_args();
  if (($pred)($a)) {
$__t2 = new Phpurs_Data1("Just", $a);
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($gen));
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
\PhpursThunks::$thunks['Control_Monad_Gen_elements'] = function() { $v = function($dictMonadGen) {
  $__num = \func_num_args();
  $Monad0_0 = (($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictFoldable1) use (&$Monad0_0, &$dictMonadGen) {
  $__num = \func_num_args();
  $length_1 = ((((($dictFoldable1)->Foldable0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->foldl)((function() {
  $__fn = function($c, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))($c);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(0);
  $fromIndex1_2 = (($GLOBALS['Control_Monad_Gen_fromIndex'] ?? \PhpursThunks::eval('Control_Monad_Gen_fromIndex')))($dictFoldable1);
  $__res = function($xs) use (&$Monad0_0, &$dictMonadGen, &$fromIndex1_2, &$length_1) {
  $__num = \func_num_args();
  $__res = ((((($Monad0_0)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)(((($dictMonadGen)->chooseInt)(0))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))(($length_1)($xs)))(1))))(function($n) use (&$Monad0_0, &$fromIndex1_2, &$xs) {
  $__num = \func_num_args();
  $__res = (((($Monad0_0)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)((($fromIndex1_2)($n))($xs));
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
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Monad_Gen_choose'] = function() { $v = function($dictMonadGen) {
  $__num = \func_num_args();
  $chooseBool_0 = ($dictMonadGen)->chooseBool;
  $__res = (function() use (&$chooseBool_0, &$dictMonadGen) {
  $__fn = function($genA, $genB = null) use (&$chooseBool_0, &$dictMonadGen, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((($dictMonadGen)->Monad0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)($chooseBool_0))(function($v) use (&$genA, &$genB) {
  $__num = \func_num_args();
  if ($v) {
$__t1 = $genA;
} else {
$__t1 = $genB;
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };















