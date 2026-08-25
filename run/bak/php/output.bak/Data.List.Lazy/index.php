<?php

namespace Data\List\Lazy;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Lazy, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.Lazy, Data.List.Internal, Data.List.Lazy, Data.List.Lazy.Types, Data.Maybe, Data.Newtype, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Traversable, Data.Tuple, Data.Unfoldable, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Bind, Control.Category, Control.Lazy, Control.Monad.Rec.Class, Control.Semigroupoid, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.Lazy, Data.List.Internal, Data.List.Lazy, Data.List.Lazy.Types, Data.Maybe, Data.Newtype, Data.NonEmpty, Data.Ord, Data.Ordering, Data.Ring, Data.Semigroup, Data.Semiring, Data.Show, Data.Traversable, Data.Tuple, Data.Unfoldable, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
\PhpursThunks::$thunks['Data_List_Lazy_tailRecM2'] = function() { $v = (function() {
  $__fn = function($f, $a = null, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($GLOBALS['Control_Monad_Rec_Class_monadRecMaybe'] ?? \PhpursThunks::eval('Control_Monad_Rec_Class_monadRecMaybe')))->tailRecM)(function($o) use (&$f) {
  $__num = \func_num_args();
  $__res = (($f)(($o)->a))(($o)->b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))((object)["a" => $a, "b" => $b]);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_any'] = function() { $v = ((($GLOBALS['Data_Foldable_any'] ?? \PhpursThunks::eval('Data_Foldable_any')))(($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList'))))(($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_heytingAlgebraBoolean'))); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_Pattern'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_zipWith'] = function() { $v = (function() {
  $__fn = function($f, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__local_var_3 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$f) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  $__res = function($v1) use (&$__local_var_1, &$f) {
  $__num = \func_num_args();
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data0("Nil");
} else {
if (((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons")) && (is_object($v1) && (($v1)->tag === "Cons")))) {
$__t2 = new Phpurs_Data2("Cons", (($f)(($__local_var_1)->value0))(($v1)->value0), (((($GLOBALS['Data_List_Lazy_zipWith'] ?? \PhpursThunks::eval('Data_List_Lazy_zipWith')))($f))(($__local_var_1)->value1))(($v1)->value1));
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
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  $__local_var_4 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($ys);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3, &$__local_var_4) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_3))((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_4));
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
\PhpursThunks::$thunks['Data_List_Lazy_zipWithA'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $sequence1_0 = (((($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_traversableList')))->traverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  $__res = (function() use (&$sequence1_0) {
  $__fn = function($f, $xs = null, $ys = null) use (&$sequence1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($sequence1_0)((((($GLOBALS['Data_List_Lazy_zipWith'] ?? \PhpursThunks::eval('Data_List_Lazy_zipWith')))($f))($xs))($ys));
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
\PhpursThunks::$thunks['Data_List_Lazy_zip'] = function() { $v = (($GLOBALS['Data_List_Lazy_zipWith'] ?? \PhpursThunks::eval('Data_List_Lazy_zipWith')))(($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple'))); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_updateAt'] = function() { $v = (function() {
  $__fn = function($n, $x = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$n, &$x) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data0("Nil");
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
switch ($n) {
case 0:
$__t3 = new Phpurs_Data2("Cons", $x, ($__local_var_1)->value1);
break;
default:
$__t3 = new Phpurs_Data2("Cons", ($__local_var_1)->value0, (((($GLOBALS['Data_List_Lazy_updateAt'] ?? \PhpursThunks::eval('Data_List_Lazy_updateAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($n))(1)))($x))(($__local_var_1)->value1));
break;
};
$__t2 = $__t3;
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_unzip'] = function() { $v = (((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldr)(function($v) {
  $__num = \func_num_args();
  $__local_var_0 = ($v)->value0;
  $__local_var_1 = ($v)->value1;
  $__res = function($v1) use (&$__local_var_0, &$__local_var_1) {
  $__num = \func_num_args();
  $__local_var_2 = ($v1)->value0;
  $__local_var_3 = ($v1)->value1;
  $__res = new Phpurs_Data2("Tuple", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$__local_var_2) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_0, $__local_var_2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_1, &$__local_var_3) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_1, $__local_var_3);
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
}))(new Phpurs_Data2("Tuple", ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')), ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')))); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_uncons'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $v_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($xs);
  if ((is_object($v_0) && (($v_0)->tag === "Nil"))) {
$__t1 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v_0) && (($v_0)->tag === "Cons"))) {
$__t1 = new Phpurs_Data1("Just", (object)["head" => ($v_0)->value0, "tail" => ($v_0)->value1]);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_toUnfoldable'] = function() { $v = function($dictUnfoldable) {
  $__num = \func_num_args();
  $__res = (($dictUnfoldable)->unfoldr)(function($xs) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))($xs);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", (($__local_var_0)->value0)->head, (($__local_var_0)->value0)->tail));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_takeWhile'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_List'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Lazy_functorLazy'] ?? \PhpursThunks::eval('Data_Lazy_functorLazy')))->map)(function($v) use (&$p) {
  $__num = \func_num_args();
  if (((is_object($v) && (($v)->tag === "Cons")) && ($p)(($v)->value0))) {
$__t0 = new Phpurs_Data2("Cons", ($v)->value0, ((($GLOBALS['Data_List_Lazy_takeWhile'] ?? \PhpursThunks::eval('Data_List_Lazy_takeWhile')))($p))(($v)->value1));
} else {
$__t0 = new Phpurs_Data0("Nil");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_take'] = function() { $v = function($n) {
  $__num = \func_num_args();
  if (( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(0)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(0))->tag === "GT")))) {
$__t1 = function($v) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
} else {
$__t1 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_List'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Lazy_functorLazy'] ?? \PhpursThunks::eval('Data_Lazy_functorLazy')))->map)(function($v1) use (&$n) {
  $__num = \func_num_args();
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t0 = new Phpurs_Data2("Cons", ($v1)->value0, ((($GLOBALS['Data_List_Lazy_take'] ?? \PhpursThunks::eval('Data_List_Lazy_take')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($n))(1)))(($v1)->value1));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))));
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_tail'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))($xs);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($__local_var_0)->value0)->tail);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_stripPrefix'] = function() { $v = (function() {
  $__fn = function($dictEq, $v = null, $s = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($GLOBALS['Data_List_Lazy_tailRecM2'] ?? \PhpursThunks::eval('Data_List_Lazy_tailRecM2')))((function() use (&$dictEq) {
  $__fn = function($prefix, $input = null) use (&$dictEq, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v1_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($prefix);
  if ((is_object($v1_0) && (($v1_0)->tag === "Nil"))) {
$__t1 = new Phpurs_Data1("Just", new Phpurs_Data1("Done", $input));
} else {
if ((is_object($v1_0) && (($v1_0)->tag === "Cons"))) {
$v2_2 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($input);
if (((is_object($v2_2) && (($v2_2)->tag === "Cons")) && ((($dictEq)->eq)(($v1_0)->value0))(($v2_2)->value0))) {
$__t3 = new Phpurs_Data1("Just", new Phpurs_Data1("Loop", (object)["a" => ($v1_0)->value1, "b" => ($v2_2)->value1]));
} else {
$__t3 = new Phpurs_Data0("Nothing");
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($v))($s);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_span'] = function() { $v = (function() {
  $__fn = function($p, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_0 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))($xs);
  if (((is_object($v_0) && (($v_0)->tag === "Just")) && ($p)((($v_0)->value0)->head))) {
$__local_var_2 = (($v_0)->value0)->head;
$v1_3 = ((($GLOBALS['Data_List_Lazy_span'] ?? \PhpursThunks::eval('Data_List_Lazy_span')))($p))((($v_0)->value0)->tail);
$__local_var_4 = ($v1_3)->init;
$__t1 = (object)["init" => (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_2, &$__local_var_4) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_2, $__local_var_4);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), "rest" => ($v1_3)->rest];
} else {
$__t1 = (object)["init" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')), "rest" => $xs];
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_snoc'] = function() { $v = (function() {
  $__fn = function($xs, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_cons'))))((($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$x) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $x, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))($xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_singleton'] = function() { $v = function($a) {
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
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_showPattern'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($v) use (&$dictShow) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(Pattern "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((((($GLOBALS['Data_List_Lazy_Types_showList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_showList')))($dictShow))->show)($v)))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_scanlLazy'] = function() { $v = (function() {
  $__fn = function($f, $acc = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$acc, &$f) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data0("Nil");
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
$acc__prime___3 = (($f)($acc))(($__local_var_1)->value0);
$__t2 = new Phpurs_Data2("Cons", $acc__prime___3, (((($GLOBALS['Data_List_Lazy_scanlLazy'] ?? \PhpursThunks::eval('Data_List_Lazy_scanlLazy')))($f))($acc__prime___3))(($__local_var_1)->value1));
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_reverse'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step'))))(function($v) use (&$xs) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)((function() {
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
})()))(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'))))($xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_replicateM'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_0, &$__local_var_1, &$dictMonad) {
  $__fn = function($n, $m = null) use (&$__local_var_0, &$__local_var_1, &$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(1)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($n))(1))->tag === "LT"))) {
$__t2 = (($__local_var_0)->pure)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
} else {
$__t2 = ((($__local_var_1)->bind)($m))(function($a) use (&$__local_var_0, &$__local_var_1, &$dictMonad, &$m, &$n) {
  $__num = \func_num_args();
  $__res = ((($__local_var_1)->bind)((((($GLOBALS['Data_List_Lazy_replicateM'] ?? \PhpursThunks::eval('Data_List_Lazy_replicateM')))($dictMonad))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($n))(1)))($m)))(function($as) use (&$__local_var_0, &$a) {
  $__num = \func_num_args();
  $__res = (($__local_var_0)->pure)((($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$a, &$as) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $a, $as);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_repeat'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $go = null;
  $go = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step'))))(function($v) use (&$go, &$x) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$go, &$x) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $x, $go);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_replicate'] = function() { $v = (function() {
  $__fn = function($i, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_List_Lazy_take'] ?? \PhpursThunks::eval('Data_List_Lazy_take')))($i))((($GLOBALS['Data_List_Lazy_repeat'] ?? \PhpursThunks::eval('Data_List_Lazy_repeat')))($xs));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_range'] = function() { $v = (function() {
  $__fn = function($start, $end = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($start))($end)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($start))($end))->tag === "GT"))) {
$__t1 = (((($GLOBALS['Data_List_Lazy_Types_unfoldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_unfoldableList')))->unfoldr)(function($x) use (&$end) {
  $__num = \func_num_args();
  if (( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))($end)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))($end))->tag === "LT")))) {
$__t2 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", $x, ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($x))(1)));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($start);
} else {
$__t1 = (((($GLOBALS['Data_List_Lazy_Types_unfoldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_unfoldableList')))->unfoldr)(function($x) use (&$end) {
  $__num = \func_num_args();
  if (( ! (is_object((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))($end)) && (((((($GLOBALS['Data_Ord_ordInt'] ?? \PhpursThunks::eval('Data_Ord_ordInt')))->compare)($x))($end))->tag === "GT")))) {
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", $x, ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($x))(1)));
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))($start);
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_partition'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldr)((function() use (&$f) {
  $__fn = function($x, $v = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (($f)($x)) {
$__t0 = (object)["yes" => (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$x) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $x, ($v)->yes);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), "no" => ($v)->no];
} else {
$__t0 = (object)["yes" => ($v)->yes, "no" => (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$x) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $x, ($v)->no);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})];
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))((object)["yes" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')), "no" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'))]);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_null'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_isNothing'] ?? \PhpursThunks::eval('Data_Maybe_isNothing'))))(($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons'))); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_nubBy'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $goStep = null;
  $go = null;
  $goStep = (function() use (&$go, &$p) {
  $__fn = function($v, $v1 = null) use (&$go, &$p, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$v2_1 = (((($GLOBALS['Data_List_Internal_insertAndLookupBy'] ?? \PhpursThunks::eval('Data_List_Internal_insertAndLookupBy')))($p))(($v1)->value0))($v);
if (($v2_1)->found) {
$__t2 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))((($go)(($v2_1)->result))(($v1)->value1));
} else {
$__t2 = new Phpurs_Data2("Cons", ($v1)->value0, (($go)(($v2_1)->result))(($v1)->value1));
};
$__t0 = $__t2;
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
  $go = (function() use (&$goStep) {
  $__fn = function($s, $v = null) use (&$goStep, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_3 = ($goStep)($s);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3) {
  $__num = \func_num_args();
  $__res = ($__local_var_3)((($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($v));
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
  $__res = ($go)(new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_nub'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_Lazy_nubBy'] ?? \PhpursThunks::eval('Data_List_Lazy_nubBy')))(($dictOrd)->compare);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_newtypePattern'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_mapMaybe'] = function() { $v = function($f) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$f, &$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$v1_1 = ($f)(($v)->value0);
if ((is_object($v1_1) && (($v1_1)->tag === "Nothing"))) {
$__t2 = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v)->value1));
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "Just"))) {
$__t2 = new Phpurs_Data2("Cons", ($v1_1)->value0, ((($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \PhpursThunks::eval('Data_List_Lazy_mapMaybe')))($f))(($v)->value1));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t0 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_List'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Lazy_functorLazy'] ?? \PhpursThunks::eval('Data_Lazy_functorLazy')))->map)($go)))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_some'] = function() { $v = (function() {
  $__fn = function($dictAlternative, $dictLazy = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->apply)(((((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_cons'))))($v)))((($dictLazy)->defer)(function($v1) use (&$dictAlternative, &$dictLazy, &$v) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_many'] ?? \PhpursThunks::eval('Data_List_Lazy_many')))($dictAlternative))($dictLazy))($v);
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
\PhpursThunks::$thunks['Data_List_Lazy_many'] = function() { $v = (function() {
  $__fn = function($dictAlternative, $dictLazy = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->alt)((((($GLOBALS['Data_List_Lazy_some'] ?? \PhpursThunks::eval('Data_List_Lazy_some')))($dictAlternative))($dictLazy))($v)))((((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil'))));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_length'] = function() { $v = (((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)((function() {
  $__fn = function($l, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($l))(1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(0); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_last'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = function($v) use (&$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Cons"))) {
if ((($GLOBALS['Data_List_Lazy_null'] ?? \PhpursThunks::eval('Data_List_Lazy_null')))(($v)->value1)) {
$__t1 = new Phpurs_Data1("Just", ($v)->value0);
} else {
$__t1 = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v)->value1));
};
$__t0 = $__t1;
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
return ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($go))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')));
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_iterate'] = function() { $v = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $go = null;
  $go = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step'))))(function($v) use (&$f, &$go, &$x) {
  $__num = \func_num_args();
  $__local_var_0 = (((($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_functorList')))->map)($f))($go);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$x) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $x, $__local_var_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_insertAt'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  switch ($v) {
case 0:
$__t3 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$v1, &$v2) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $v1, $v2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
break;
default:
$__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($v2);
$__t3 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$v1) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data2("Cons", $v1, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
$__t2 = new Phpurs_Data2("Cons", ($__local_var_1)->value0, (((($GLOBALS['Data_List_Lazy_insertAt'] ?? \PhpursThunks::eval('Data_List_Lazy_insertAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1)))($v1))(($__local_var_1)->value1));
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
break;
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_init'] = function() { $v = (function() use (&$__fn) {
$go = null;
$go = function($v) use (&$go) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Cons"))) {
if ((($GLOBALS['Data_List_Lazy_null'] ?? \PhpursThunks::eval('Data_List_Lazy_null')))(($v)->value1)) {
$__t5 = new Phpurs_Data1("Just", ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
} else {
$__local_var_1 = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v)->value1));
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Just"))) {
$__local_var_3 = ($v)->value0;
$__local_var_4 = ($__local_var_1)->value0;
$__t2 = new Phpurs_Data1("Just", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_3, &$__local_var_4) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_3, $__local_var_4);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
$__t5 = $__t2;
};
$__t0 = $__t5;
} else {
$__t0 = new Phpurs_Data0("Nothing");
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
return ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($go))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')));
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_index'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
switch ($v1) {
case 0:
$__t1 = new Phpurs_Data1("Just", ($v)->value0);
break;
default:
$__t1 = (($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v)->value1)))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v1))(1));
break;
};
$__t0 = $__t1;
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
  $__res = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($xs));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_head'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))($xs);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($__local_var_0)->value0)->head);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_transpose'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $v_0 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))($xs);
  if ((is_object($v_0) && (($v_0)->tag === "Nothing"))) {
$__t1 = $xs;
} else {
if ((is_object($v_0) && (($v_0)->tag === "Just"))) {
$v1_2 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))((($v_0)->value0)->head);
if ((is_object($v1_2) && (($v1_2)->tag === "Nothing"))) {
$__t3 = (($GLOBALS['Data_List_Lazy_transpose'] ?? \PhpursThunks::eval('Data_List_Lazy_transpose')))((($v_0)->value0)->tail);
} else {
if ((is_object($v1_2) && (($v1_2)->tag === "Just"))) {
$__local_var_4 = (($v1_2)->value0)->head;
$__local_var_5 = (($v1_2)->value0)->tail;
$__local_var_6 = ((($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \PhpursThunks::eval('Data_List_Lazy_mapMaybe')))(($GLOBALS['Data_List_Lazy_head'] ?? \PhpursThunks::eval('Data_List_Lazy_head'))))((($v_0)->value0)->tail);
$__local_var_7 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4, &$__local_var_6) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_4, $__local_var_6);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
$__local_var_8 = ((($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \PhpursThunks::eval('Data_List_Lazy_mapMaybe')))(($GLOBALS['Data_List_Lazy_tail'] ?? \PhpursThunks::eval('Data_List_Lazy_tail'))))((($v_0)->value0)->tail);
$__local_var_9 = (($GLOBALS['Data_List_Lazy_transpose'] ?? \PhpursThunks::eval('Data_List_Lazy_transpose')))((($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_5, &$__local_var_8) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_5, $__local_var_8);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
$__t3 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_7, &$__local_var_9) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_7, $__local_var_9);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_groupBy'] = function() { $v = function($eq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_List'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Lazy_functorLazy'] ?? \PhpursThunks::eval('Data_Lazy_functorLazy')))->map)(function($v) use (&$eq) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__local_var_1 = ($v)->value0;
$v1_2 = ((($GLOBALS['Data_List_Lazy_span'] ?? \PhpursThunks::eval('Data_List_Lazy_span')))(($eq)($__local_var_1)))(($v)->value1);
$__local_var_3 = ($v1_2)->init;
$__t0 = new Phpurs_Data2("Cons", (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v2) use (&$__local_var_1, &$__local_var_3) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $__local_var_1, $__local_var_3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), ((($GLOBALS['Data_List_Lazy_groupBy'] ?? \PhpursThunks::eval('Data_List_Lazy_groupBy')))($eq))(($v1_2)->rest));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_group'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_Lazy_groupBy'] ?? \PhpursThunks::eval('Data_List_Lazy_groupBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_fromStep'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_List'))))((($GLOBALS['Data_Lazy_applicativeLazy'] ?? \PhpursThunks::eval('Data_Lazy_applicativeLazy')))->pure); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_insertBy'] = function() { $v = (function() {
  $__fn = function($cmp, $x = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$cmp, &$x) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data2("Cons", $x, ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
if ((is_object((($cmp)($x))(($__local_var_1)->value0)) && (((($cmp)($x))(($__local_var_1)->value0))->tag === "GT"))) {
$__t3 = new Phpurs_Data2("Cons", ($__local_var_1)->value0, (((($GLOBALS['Data_List_Lazy_insertBy'] ?? \PhpursThunks::eval('Data_List_Lazy_insertBy')))($cmp))($x))(($__local_var_1)->value1));
} else {
$__t3 = new Phpurs_Data2("Cons", $x, (($GLOBALS['Data_List_Lazy_fromStep'] ?? \PhpursThunks::eval('Data_List_Lazy_fromStep')))($__local_var_1));
};
$__t2 = $__t3;
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_insert'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_Lazy_insertBy'] ?? \PhpursThunks::eval('Data_List_Lazy_insertBy')))(($dictOrd)->compare);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_fromFoldable'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = ((($dictFoldable)->foldr)(($GLOBALS['Data_List_Lazy_Types_cons'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_cons'))))(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_foldrLazy'] = function() { $v = (function() {
  $__fn = function($dictLazy, $op = null, $z = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = function($xs) use (&$dictLazy, &$go, &$op, &$z) {
  $__num = \func_num_args();
  $v_0 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))($xs);
  if ((is_object($v_0) && (($v_0)->tag === "Cons"))) {
$__local_var_2 = ($v_0)->value0;
$__local_var_3 = ($v_0)->value1;
$__t1 = (($dictLazy)->defer)(function($v1) use (&$__local_var_2, &$__local_var_3, &$go, &$op) {
  $__num = \func_num_args();
  $__res = (($op)($__local_var_2))(($go)($__local_var_3));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
if ((is_object($v_0) && (($v_0)->tag === "Nil"))) {
$__t1 = $z;
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
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_foldM'] = function() { $v = (function() {
  $__fn = function($dictMonad, $f = null, $b = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $v_0 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))($xs);
  if ((is_object($v_0) && (($v_0)->tag === "Nothing"))) {
$__t1 = (((($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->pure)($b);
} else {
if ((is_object($v_0) && (($v_0)->tag === "Just"))) {
$__local_var_2 = (($v_0)->value0)->tail;
$__t1 = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)((($f)($b))((($v_0)->value0)->head)))(function($b__prime__) use (&$__local_var_2, &$dictMonad, &$f) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Data_List_Lazy_foldM'] ?? \PhpursThunks::eval('Data_List_Lazy_foldM')))($dictMonad))($f))($b__prime__))($__local_var_2);
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
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_findIndex'] = function() { $v = function($fn) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$fn, &$go) {
  $__fn = function($n, $list = null) use (&$fn, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))($list);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
if (($fn)((($__local_var_0)->value0)->head)) {
$__t2 = new Phpurs_Data1("Just", $n);
} else {
$__t2 = (($go)(((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))($n))(1)))((($__local_var_0)->value0)->tail);
};
$__t1 = $__t2;
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = new Phpurs_Data0("Nothing");
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
  $__res = ($go)(0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_findLastIndex'] = function() { $v = (function() {
  $__fn = function($fn, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = ((($GLOBALS['Data_List_Lazy_findIndex'] ?? \PhpursThunks::eval('Data_List_Lazy_findIndex')))($fn))((($GLOBALS['Data_List_Lazy_reverse'] ?? \PhpursThunks::eval('Data_List_Lazy_reverse')))($xs));
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", ((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))((($GLOBALS['Data_List_Lazy_length'] ?? \PhpursThunks::eval('Data_List_Lazy_length')))($xs)))(1)))(($__local_var_0)->value0));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_filterM'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictMonad)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__local_var_1 = (($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_0, &$__local_var_1, &$dictMonad) {
  $__fn = function($p, $list = null) use (&$__local_var_0, &$__local_var_1, &$dictMonad, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_2 = (($GLOBALS['Data_List_Lazy_uncons'] ?? \PhpursThunks::eval('Data_List_Lazy_uncons')))($list);
  if ((is_object($v_2) && (($v_2)->tag === "Nothing"))) {
$__t3 = (($__local_var_0)->pure)(($GLOBALS['Data_List_Lazy_Types_nil'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_nil')));
} else {
if ((is_object($v_2) && (($v_2)->tag === "Just"))) {
$__local_var_4 = (($v_2)->value0)->head;
$__local_var_5 = (($v_2)->value0)->tail;
$__t3 = ((($__local_var_1)->bind)(($p)($__local_var_4)))(function($b) use (&$__local_var_0, &$__local_var_1, &$__local_var_4, &$__local_var_5, &$dictMonad, &$p) {
  $__num = \func_num_args();
  $__res = ((($__local_var_1)->bind)((((($GLOBALS['Data_List_Lazy_filterM'] ?? \PhpursThunks::eval('Data_List_Lazy_filterM')))($dictMonad))($p))($__local_var_5)))(function($xs__prime__) use (&$__local_var_0, &$__local_var_4, &$b) {
  $__num = \func_num_args();
  if ($b) {
$__t6 = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_4, &$xs__prime__) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", $__local_var_4, $xs__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
} else {
$__t6 = $xs__prime__;
};
  $__res = (($__local_var_0)->pure)($__t6);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_filter'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$go, &$p) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
if (($p)(($v)->value0)) {
$__t1 = new Phpurs_Data2("Cons", ($v)->value0, ((($GLOBALS['Data_List_Lazy_filter'] ?? \PhpursThunks::eval('Data_List_Lazy_filter')))($p))(($v)->value1));
} else {
$__t1 = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v)->value1));
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_List'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Lazy_functorLazy'] ?? \PhpursThunks::eval('Data_Lazy_functorLazy')))->map)($go)))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_intersectBy'] = function() { $v = (function() {
  $__fn = function($eq, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Data_List_Lazy_filter'] ?? \PhpursThunks::eval('Data_List_Lazy_filter')))(function($x) use (&$eq, &$ys) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_Lazy_any'] ?? \PhpursThunks::eval('Data_List_Lazy_any')))(($eq)($x)))($ys);
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
\PhpursThunks::$thunks['Data_List_Lazy_intersect'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_Lazy_intersectBy'] ?? \PhpursThunks::eval('Data_List_Lazy_intersectBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_nubByEq'] = function() { $v = function($eq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_List'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Lazy_functorLazy'] ?? \PhpursThunks::eval('Data_Lazy_functorLazy')))->map)(function($v) use (&$eq) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__local_var_1 = ($v)->value0;
$__t0 = new Phpurs_Data2("Cons", $__local_var_1, ((($GLOBALS['Data_List_Lazy_nubByEq'] ?? \PhpursThunks::eval('Data_List_Lazy_nubByEq')))($eq))(((($GLOBALS['Data_List_Lazy_filter'] ?? \PhpursThunks::eval('Data_List_Lazy_filter')))(function($y) use (&$__local_var_1, &$eq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolNot')))((($eq)($__local_var_1))($y));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}))(($v)->value1)));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_nubEq'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_Lazy_nubByEq'] ?? \PhpursThunks::eval('Data_List_Lazy_nubByEq')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_eqPattern'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (object)["eq" => (function() use (&$dictEq) {
  $__fn = function($x, $y = null) use (&$dictEq, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_eq1List')))->eq1)($dictEq))($x))($y);
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
\PhpursThunks::$thunks['Data_List_Lazy_ordPattern'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $eqPattern1_1 = (object)["eq" => (function() use (&$__local_var_0) {
  $__fn = function($x, $y = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_eq1List')))->eq1)($__local_var_0))($x))($y);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["compare" => (function() use (&$dictOrd) {
  $__fn = function($x, $y = null) use (&$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Lazy_Types_ordList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_ordList')))($dictOrd))->compare)($x))($y);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqPattern1_1) {
  $__num = \func_num_args();
  $__res = $eqPattern1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_elemLastIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_List_Lazy_findLastIndex'] ?? \PhpursThunks::eval('Data_List_Lazy_findLastIndex')))(function($v) use (&$dictEq, &$x) {
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
\PhpursThunks::$thunks['Data_List_Lazy_elemIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_List_Lazy_findIndex'] ?? \PhpursThunks::eval('Data_List_Lazy_findIndex')))(function($v) use (&$dictEq, &$x) {
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
\PhpursThunks::$thunks['Data_List_Lazy_dropWhile'] = function() { $v = function($p) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$go, &$p) {
  $__num = \func_num_args();
  if (((is_object($v) && (($v)->tag === "Cons")) && ($p)(($v)->value0))) {
$__t0 = ($go)((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v)->value1));
} else {
$__t0 = (($GLOBALS['Data_List_Lazy_fromStep'] ?? \PhpursThunks::eval('Data_List_Lazy_fromStep')))($v);
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($go))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_drop'] = function() { $v = function($n) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (($v === 0)) {
$__t0 = $v1;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nil");
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t0 = (($go)(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($v))(1)))((($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($v1)->value1));
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
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_List'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_List'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_Lazy_functorLazy'] ?? \PhpursThunks::eval('Data_Lazy_functorLazy')))->map)(($go)($n))))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_slice'] = function() { $v = (function() {
  $__fn = function($start, $end = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($GLOBALS['Data_List_Lazy_take'] ?? \PhpursThunks::eval('Data_List_Lazy_take')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($end))($start)))(((($GLOBALS['Data_List_Lazy_drop'] ?? \PhpursThunks::eval('Data_List_Lazy_drop')))($start))($xs));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_deleteBy'] = function() { $v = (function() {
  $__fn = function($eq, $x = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$eq, &$x) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data0("Nil");
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
if ((($eq)($x))(($__local_var_1)->value0)) {
$__t3 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($__local_var_1)->value1);
} else {
$__t3 = new Phpurs_Data2("Cons", ($__local_var_1)->value0, (((($GLOBALS['Data_List_Lazy_deleteBy'] ?? \PhpursThunks::eval('Data_List_Lazy_deleteBy')))($eq))($x))(($__local_var_1)->value1));
};
$__t2 = $__t3;
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_unionBy'] = function() { $v = (function() {
  $__fn = function($eq, $xs = null, $ys = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList')))->append)($xs))(((((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)((function() use (&$eq) {
  $__fn = function($b, $a = null) use (&$eq, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_List_Lazy_deleteBy'] ?? \PhpursThunks::eval('Data_List_Lazy_deleteBy')))($eq))($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(((($GLOBALS['Data_List_Lazy_nubByEq'] ?? \PhpursThunks::eval('Data_List_Lazy_nubByEq')))($eq))($ys)))($xs));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_union'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_Lazy_unionBy'] ?? \PhpursThunks::eval('Data_List_Lazy_unionBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_deleteAt'] = function() { $v = (function() {
  $__fn = function($n, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$n) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data0("Nil");
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
switch ($n) {
case 0:
$__t3 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($__local_var_1)->value1);
break;
default:
$__t3 = new Phpurs_Data2("Cons", ($__local_var_1)->value0, ((($GLOBALS['Data_List_Lazy_deleteAt'] ?? \PhpursThunks::eval('Data_List_Lazy_deleteAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($n))(1)))(($__local_var_1)->value1));
break;
};
$__t2 = $__t3;
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
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_delete'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_List_Lazy_deleteBy'] ?? \PhpursThunks::eval('Data_List_Lazy_deleteBy')))(($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_difference'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_foldableList')))->foldl)((function() use (&$dictEq) {
  $__fn = function($b, $a = null) use (&$dictEq, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_List_Lazy_deleteBy'] ?? \PhpursThunks::eval('Data_List_Lazy_deleteBy')))(($dictEq)->eq))($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_cycle'] = function() { $v = function($xs) {
  $__num = \func_num_args();
  $go = null;
  $go = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step'))))(function($v) use (&$go, &$xs) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_semigroupList')))->append)($xs))($go);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}));
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_concatMap'] = function() { $v = (function() {
  $__fn = function($b, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_bindList')))->bind)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_concat'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_bindList')))->bind)($v))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_catMaybes'] = function() { $v = (($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \PhpursThunks::eval('Data_List_Lazy_mapMaybe')))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_alterAt'] = function() { $v = (function() {
  $__fn = function($n, $f = null, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__local_var_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($xs);
  $__res = (($GLOBALS['Data_Lazy_defer'] ?? \PhpursThunks::eval('Data_Lazy_defer')))(function($v) use (&$__local_var_0, &$f, &$n) {
  $__num = \func_num_args();
  $__local_var_1 = (($GLOBALS['Data_Lazy_force'] ?? \PhpursThunks::eval('Data_Lazy_force')))($__local_var_0);
  if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Nil"))) {
$__t2 = new Phpurs_Data0("Nil");
} else {
if ((is_object($__local_var_1) && (($__local_var_1)->tag === "Cons"))) {
switch ($n) {
case 0:
$v2_4 = ($f)(($__local_var_1)->value0);
if ((is_object($v2_4) && (($v2_4)->tag === "Nothing"))) {
$__t5 = (($GLOBALS['Data_List_Lazy_Types_step'] ?? \PhpursThunks::eval('Data_List_Lazy_Types_step')))(($__local_var_1)->value1);
} else {
if ((is_object($v2_4) && (($v2_4)->tag === "Just"))) {
$__t5 = new Phpurs_Data2("Cons", ($v2_4)->value0, ($__local_var_1)->value1);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
$__t3 = $__t5;
break;
default:
$__t3 = new Phpurs_Data2("Cons", ($__local_var_1)->value0, (((($GLOBALS['Data_List_Lazy_alterAt'] ?? \PhpursThunks::eval('Data_List_Lazy_alterAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($n))(1)))($f))(($__local_var_1)->value1));
break;
};
$__t2 = $__t3;
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_Lazy_modifyAt'] = function() { $v = (function() {
  $__fn = function($n, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_List_Lazy_alterAt'] ?? \PhpursThunks::eval('Data_List_Lazy_alterAt')))($n))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))($f));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };













































































