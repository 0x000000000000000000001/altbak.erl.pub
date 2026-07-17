<?php

namespace Data\Tuple;

// ALL IMPORTS: Control.Applicative, Control.Apply, Control.Bind, Control.Comonad, Control.Extend, Control.Lazy, Control.Monad, Control.Semigroupoid, Data.BooleanAlgebra, Data.Bounded, Data.CommutativeRing, Data.Eq, Data.Function, Data.Functor, Data.Functor.Invariant, Data.Generic.Rep, Data.HeytingAlgebra, Data.Monoid, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Tuple, Data.Unit, Prelude, Prim
// TO REQUIRE: Control.Applicative, Control.Apply, Control.Bind, Control.Comonad, Control.Extend, Control.Lazy, Control.Monad, Control.Semigroupoid, Data.BooleanAlgebra, Data.Bounded, Data.CommutativeRing, Data.Eq, Data.Function, Data.Functor, Data.Functor.Invariant, Data.Generic.Rep, Data.HeytingAlgebra, Data.Monoid, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Tuple, Data.Unit, Prelude
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
\PhpursThunks::$thunks['Data_Tuple_Tuple'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_uncurry'] = function() { $v = (function() {
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
\PhpursThunks::$thunks['Data_Tuple_swap'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($v)->value1, ($v)->value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_snd'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_showTuple'] = function() { $v = (function() {
  $__fn = function($dictShow, $dictShow1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["show" => function($v) use (&$dictShow, &$dictShow1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(Tuple "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value0)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(" "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow1)->show)(($v)->value1)))(")"))));
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
\PhpursThunks::$thunks['Data_Tuple_semiringTuple'] = function() { $v = function($dictSemiring) {
  $__num = \func_num_args();
  $one_0 = ($dictSemiring)->one;
  $zero_1 = ($dictSemiring)->zero;
  $__res = function($dictSemiring1) use (&$dictSemiring, &$one_0, &$zero_1) {
  $__num = \func_num_args();
  $__res = (object)["add" => (function() use (&$dictSemiring, &$dictSemiring1) {
  $__fn = function($v, $v1 = null) use (&$dictSemiring, &$dictSemiring1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($dictSemiring)->add)(($v)->value0))(($v1)->value0), ((($dictSemiring1)->add)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => new Phpurs_Data2("Tuple", $one_0, ($dictSemiring1)->one), "mul" => (function() use (&$dictSemiring, &$dictSemiring1) {
  $__fn = function($v, $v1 = null) use (&$dictSemiring, &$dictSemiring1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($dictSemiring)->mul)(($v)->value0))(($v1)->value0), ((($dictSemiring1)->mul)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => new Phpurs_Data2("Tuple", $zero_1, ($dictSemiring1)->zero)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_semigroupoidTuple'] = function() { $v = (object)["compose" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v1)->value0, ($v)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Tuple_semigroupTuple'] = function() { $v = (function() {
  $__fn = function($dictSemigroup, $dictSemigroup1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["append" => (function() use (&$dictSemigroup, &$dictSemigroup1) {
  $__fn = function($v, $v1 = null) use (&$dictSemigroup, &$dictSemigroup1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($dictSemigroup)->append)(($v)->value0))(($v1)->value0), ((($dictSemigroup1)->append)(($v)->value1))(($v1)->value1));
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
\PhpursThunks::$thunks['Data_Tuple_ringTuple'] = function() { $v = function($dictRing) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictRing)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $one_1 = ($__local_var_0)->one;
  $zero_2 = ($__local_var_0)->zero;
  $semiringTuple1_3 = function($dictSemiring1) use (&$__local_var_0, &$one_1, &$zero_2) {
  $__num = \func_num_args();
  $__res = (object)["add" => (function() use (&$__local_var_0, &$dictSemiring1) {
  $__fn = function($v, $v1 = null) use (&$__local_var_0, &$dictSemiring1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($__local_var_0)->add)(($v)->value0))(($v1)->value0), ((($dictSemiring1)->add)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => new Phpurs_Data2("Tuple", $one_1, ($dictSemiring1)->one), "mul" => (function() use (&$__local_var_0, &$dictSemiring1) {
  $__fn = function($v, $v1 = null) use (&$__local_var_0, &$dictSemiring1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($__local_var_0)->mul)(($v)->value0))(($v1)->value0), ((($dictSemiring1)->mul)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => new Phpurs_Data2("Tuple", $zero_2, ($dictSemiring1)->zero)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = function($dictRing1) use (&$dictRing, &$semiringTuple1_3) {
  $__num = \func_num_args();
  $semiringTuple2_4 = ($semiringTuple1_3)((($dictRing1)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["sub" => (function() use (&$dictRing, &$dictRing1) {
  $__fn = function($v, $v1 = null) use (&$dictRing, &$dictRing1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($dictRing)->sub)(($v)->value0))(($v1)->value0), ((($dictRing1)->sub)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => function($dollar__unused_0) use (&$semiringTuple2_4) {
  $__num = \func_num_args();
  $__res = $semiringTuple2_4;
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
\PhpursThunks::$thunks['Data_Tuple_monoidTuple'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ($dictMonoid)->mempty;
  $__local_var_1 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictMonoid1) use (&$__local_var_1, &$mempty_0) {
  $__num = \func_num_args();
  $__local_var_2 = (($dictMonoid1)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $semigroupTuple2_3 = (object)["append" => (function() use (&$__local_var_1, &$__local_var_2) {
  $__fn = function($v, $v1 = null) use (&$__local_var_1, &$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($__local_var_1)->append)(($v)->value0))(($v1)->value0), ((($__local_var_2)->append)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["mempty" => new Phpurs_Data2("Tuple", $mempty_0, ($dictMonoid1)->mempty), "Semigroup0" => function($dollar__unused_0) use (&$semigroupTuple2_3) {
  $__num = \func_num_args();
  $__res = $semigroupTuple2_3;
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
\PhpursThunks::$thunks['Data_Tuple_heytingAlgebraTuple'] = function() { $v = function($dictHeytingAlgebra) {
  $__num = \func_num_args();
  $tt_0 = ($dictHeytingAlgebra)->tt;
  $ff_1 = ($dictHeytingAlgebra)->ff;
  $__res = function($dictHeytingAlgebra1) use (&$dictHeytingAlgebra, &$ff_1, &$tt_0) {
  $__num = \func_num_args();
  $__res = (object)["tt" => new Phpurs_Data2("Tuple", $tt_0, ($dictHeytingAlgebra1)->tt), "ff" => new Phpurs_Data2("Tuple", $ff_1, ($dictHeytingAlgebra1)->ff), "implies" => (function() use (&$dictHeytingAlgebra, &$dictHeytingAlgebra1) {
  $__fn = function($v, $v1 = null) use (&$dictHeytingAlgebra, &$dictHeytingAlgebra1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($dictHeytingAlgebra)->implies)(($v)->value0))(($v1)->value0), ((($dictHeytingAlgebra1)->implies)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use (&$dictHeytingAlgebra, &$dictHeytingAlgebra1) {
  $__fn = function($v, $v1 = null) use (&$dictHeytingAlgebra, &$dictHeytingAlgebra1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($dictHeytingAlgebra)->conj)(($v)->value0))(($v1)->value0), ((($dictHeytingAlgebra1)->conj)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use (&$dictHeytingAlgebra, &$dictHeytingAlgebra1) {
  $__fn = function($v, $v1 = null) use (&$dictHeytingAlgebra, &$dictHeytingAlgebra1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($dictHeytingAlgebra)->disj)(($v)->value0))(($v1)->value0), ((($dictHeytingAlgebra1)->disj)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => function($v) use (&$dictHeytingAlgebra, &$dictHeytingAlgebra1) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", (($dictHeytingAlgebra)->not)(($v)->value0), (($dictHeytingAlgebra1)->not)(($v)->value1));
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
\PhpursThunks::$thunks['Data_Tuple_genericTuple'] = function() { $v = (object)["to" => function($x) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($x)->value0, ($x)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "from" => function($x) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Product", ($x)->value0, ($x)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Tuple_functorTuple'] = function() { $v = (object)["map" => (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($m)->value0, ($f)(($m)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Tuple_invariantTuple'] = function() { $v = (object)["imap" => (function() {
  $__fn = function($f, $v = null, $m = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Tuple", ($m)->value0, ($f)(($m)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Tuple_fst'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_lazyTuple'] = function() { $v = (function() {
  $__fn = function($dictLazy, $dictLazy1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["defer" => function($f) use (&$dictLazy, &$dictLazy1) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", (($dictLazy)->defer)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__res = (($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), (($dictLazy1)->defer)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__res = (($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))->value1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
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
\PhpursThunks::$thunks['Data_Tuple_extendTuple'] = function() { $v = (object)["extend" => (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, ($f)($v));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Tuple_functorTuple'] ?? \PhpursThunks::eval('Data_Tuple_functorTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Tuple_eqTuple'] = function() { $v = (function() {
  $__fn = function($dictEq, $dictEq1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["eq" => (function() use (&$dictEq, &$dictEq1) {
  $__fn = function($x, $y = null) use (&$dictEq, &$dictEq1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($dictEq)->eq)(($x)->value0))(($y)->value0)))(((($dictEq1)->eq)(($x)->value1))(($y)->value1));
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
\PhpursThunks::$thunks['Data_Tuple_ordTuple'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $eqTuple1_0 = (($GLOBALS['Data_Tuple_eqTuple'] ?? \PhpursThunks::eval('Data_Tuple_eqTuple')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd1) use (&$dictOrd, &$eqTuple1_0) {
  $__num = \func_num_args();
  $eqTuple2_1 = ($eqTuple1_0)((($dictOrd1)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["compare" => (function() use (&$dictOrd, &$dictOrd1) {
  $__fn = function($x, $y = null) use (&$dictOrd, &$dictOrd1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_2 = ((($dictOrd)->compare)(($x)->value0))(($y)->value0);
  if ((is_object($v_2) && (($v_2)->tag === "LT"))) {
$__t3 = new Phpurs_Data0("LT");
} else {
if ((is_object($v_2) && (($v_2)->tag === "GT"))) {
$__t3 = new Phpurs_Data0("GT");
} else {
$__t3 = ((($dictOrd1)->compare)(($x)->value1))(($y)->value1);
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqTuple2_1) {
  $__num = \func_num_args();
  $__res = $eqTuple2_1;
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
\PhpursThunks::$thunks['Data_Tuple_eq1Tuple'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (object)["eq1" => function($dictEq1) use (&$dictEq) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Tuple_eqTuple'] ?? \PhpursThunks::eval('Data_Tuple_eqTuple')))($dictEq))($dictEq1))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_ord1Tuple'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $ordTuple1_0 = (($GLOBALS['Data_Tuple_ordTuple'] ?? \PhpursThunks::eval('Data_Tuple_ordTuple')))($dictOrd);
  $__local_var_1 = (($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $eq1Tuple1_2 = (object)["eq1" => function($dictEq1) use (&$__local_var_1) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_Tuple_eqTuple'] ?? \PhpursThunks::eval('Data_Tuple_eqTuple')))($__local_var_1))($dictEq1))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["compare1" => function($dictOrd1) use (&$ordTuple1_0) {
  $__num = \func_num_args();
  $__res = (($ordTuple1_0)($dictOrd1))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused_0) use (&$eq1Tuple1_2) {
  $__num = \func_num_args();
  $__res = $eq1Tuple1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_curry'] = function() { $v = (function() {
  $__fn = function($f, $a = null, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, $b));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_comonadTuple'] = function() { $v = (object)["extract" => ($GLOBALS['Data_Tuple_snd'] ?? \PhpursThunks::eval('Data_Tuple_snd')), "Extend0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Tuple_extendTuple'] ?? \PhpursThunks::eval('Data_Tuple_extendTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Tuple_commutativeRingTuple'] = function() { $v = function($dictCommutativeRing) {
  $__num = \func_num_args();
  $ringTuple1_0 = (($GLOBALS['Data_Tuple_ringTuple'] ?? \PhpursThunks::eval('Data_Tuple_ringTuple')))((($dictCommutativeRing)->Ring0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictCommutativeRing1) use (&$ringTuple1_0) {
  $__num = \func_num_args();
  $ringTuple2_1 = ($ringTuple1_0)((($dictCommutativeRing1)->Ring0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Ring0" => function($dollar__unused_0) use (&$ringTuple2_1) {
  $__num = \func_num_args();
  $__res = $ringTuple2_1;
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
\PhpursThunks::$thunks['Data_Tuple_boundedTuple'] = function() { $v = function($dictBounded) {
  $__num = \func_num_args();
  $top_0 = ($dictBounded)->top;
  $bottom_1 = ($dictBounded)->bottom;
  $ordTuple1_2 = (($GLOBALS['Data_Tuple_ordTuple'] ?? \PhpursThunks::eval('Data_Tuple_ordTuple')))((($dictBounded)->Ord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictBounded1) use (&$bottom_1, &$ordTuple1_2, &$top_0) {
  $__num = \func_num_args();
  $ordTuple2_3 = ($ordTuple1_2)((($dictBounded1)->Ord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["top" => new Phpurs_Data2("Tuple", $top_0, ($dictBounded1)->top), "bottom" => new Phpurs_Data2("Tuple", $bottom_1, ($dictBounded1)->bottom), "Ord0" => function($dollar__unused_0) use (&$ordTuple2_3) {
  $__num = \func_num_args();
  $__res = $ordTuple2_3;
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
\PhpursThunks::$thunks['Data_Tuple_booleanAlgebraTuple'] = function() { $v = function($dictBooleanAlgebra) {
  $__num = \func_num_args();
  $heytingAlgebraTuple1_0 = (($GLOBALS['Data_Tuple_heytingAlgebraTuple'] ?? \PhpursThunks::eval('Data_Tuple_heytingAlgebraTuple')))((($dictBooleanAlgebra)->HeytingAlgebra0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictBooleanAlgebra1) use (&$heytingAlgebraTuple1_0) {
  $__num = \func_num_args();
  $heytingAlgebraTuple2_1 = ($heytingAlgebraTuple1_0)((($dictBooleanAlgebra1)->HeytingAlgebra0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["HeytingAlgebra0" => function($dollar__unused_0) use (&$heytingAlgebraTuple2_1) {
  $__num = \func_num_args();
  $__res = $heytingAlgebraTuple2_1;
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
\PhpursThunks::$thunks['Data_Tuple_applyTuple'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["apply" => (function() use (&$dictSemigroup) {
  $__fn = function($v, $v1 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ((($dictSemigroup)->append)(($v)->value0))(($v1)->value0), (($v)->value1)(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Tuple_functorTuple'] ?? \PhpursThunks::eval('Data_Tuple_functorTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_bindTuple'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $applyTuple1_0 = (($GLOBALS['Data_Tuple_applyTuple'] ?? \PhpursThunks::eval('Data_Tuple_applyTuple')))($dictSemigroup);
  $__res = (object)["bind" => (function() use (&$dictSemigroup) {
  $__fn = function($v, $f = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v1_1 = ($f)(($v)->value1);
  $__res = new Phpurs_Data2("Tuple", ((($dictSemigroup)->append)(($v)->value0))(($v1_1)->value0), ($v1_1)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($dollar__unused_0) use (&$applyTuple1_0) {
  $__num = \func_num_args();
  $__res = $applyTuple1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_applicativeTuple'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $applyTuple1_0 = (($GLOBALS['Data_Tuple_applyTuple'] ?? \PhpursThunks::eval('Data_Tuple_applyTuple')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["pure" => (($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple')))(($dictMonoid)->mempty), "Apply0" => function($dollar__unused_0) use (&$applyTuple1_0) {
  $__num = \func_num_args();
  $__res = $applyTuple1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_monadTuple'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $applicativeTuple1_0 = (($GLOBALS['Data_Tuple_applicativeTuple'] ?? \PhpursThunks::eval('Data_Tuple_applicativeTuple')))($dictMonoid);
  $bindTuple1_1 = (($GLOBALS['Data_Tuple_bindTuple'] ?? \PhpursThunks::eval('Data_Tuple_bindTuple')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeTuple1_0) {
  $__num = \func_num_args();
  $__res = $applicativeTuple1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bind1" => function($dollar__unused_0) use (&$bindTuple1_1) {
  $__num = \func_num_args();
  $__res = $bindTuple1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
































