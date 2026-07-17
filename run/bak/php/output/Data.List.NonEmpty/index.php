<?php

namespace Data\List\NonEmpty;

// ALL IMPORTS: Control.Bind, Control.Category, Control.Semigroupoid, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.List, Data.List.NonEmpty, Data.List.Types, Data.Maybe, Data.NonEmpty, Data.Ord, Data.Ring, Data.Semigroup, Data.Semigroup.Foldable, Data.Semigroup.Traversable, Data.Semiring, Data.Traversable, Data.Tuple, Data.Unfoldable, Partial.Unsafe, Prelude, Prim
// TO REQUIRE: Control.Bind, Control.Category, Control.Semigroupoid, Data.Boolean, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.List, Data.List.NonEmpty, Data.List.Types, Data.Maybe, Data.NonEmpty, Data.Ord, Data.Ring, Data.Semigroup, Data.Semigroup.Foldable, Data.Semigroup.Traversable, Data.Semiring, Data.Traversable, Data.Tuple, Data.Unfoldable, Partial.Unsafe, Prelude
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
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
\PhpursThunks::$thunks['Data_List_NonEmpty_zipWith'] = function() { $v = (function() {
  $__fn = function($f, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $go = null;
  $go = (function() use (&$f, &$go) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$f, &$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = $v2;
} else {
if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t0 = $v2;
} else {
if (((is_object($v) && (($v)->tag === "Cons")) && (is_object($v1) && (($v1)->tag === "Cons")))) {
$__t0 = ((($go)(($v)->value1))(($v1)->value1))(new Phpurs_Data2("Cons", (($f)(($v)->value0))(($v1)->value0), $v2));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
  $__res = new Phpurs_Data2("NonEmpty", (($f)(($v)->value0))(($v1)->value0), (($go)(new Phpurs_Data0("Nil")))(((($go)(($v)->value1))(($v1)->value1))(new Phpurs_Data0("Nil"))));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_zipWithA'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $sequence11_0 = (((($GLOBALS['Data_List_Types_traversable1NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_traversable1NonEmptyList')))->traverse1)((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')))))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  $__res = (function() use (&$sequence11_0) {
  $__fn = function($f, $xs = null, $ys = null) use (&$sequence11_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($sequence11_0)((((($GLOBALS['Data_List_NonEmpty_zipWith'] ?? \PhpursThunks::eval('Data_List_NonEmpty_zipWith')))($f))($xs))($ys));
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
\PhpursThunks::$thunks['Data_List_NonEmpty_zip'] = function() { $v = (($GLOBALS['Data_List_NonEmpty_zipWith'] ?? \PhpursThunks::eval('Data_List_NonEmpty_zipWith')))(($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_wrappedOperation2'] = function() { $v = (function() {
  $__fn = function($name, $f = null, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $v2_0 = (($f)(new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1)))(new Phpurs_Data2("Cons", ($v1)->value0, ($v1)->value1));
  if ((is_object($v2_0) && (($v2_0)->tag === "Cons"))) {
$__t1 = new Phpurs_Data2("NonEmpty", ($v2_0)->value0, ($v2_0)->value1);
} else {
if ((is_object($v2_0) && (($v2_0)->tag === "Nil"))) {
$__local_var_2 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("Impossible: empty list in NonEmptyList "))($name);
$__t1 = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$__local_var_2) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Partial__crashWith'] ?? \PhpursThunks::eval('Partial__crashWith')))($__local_var_2);
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
\PhpursThunks::$thunks['Data_List_NonEmpty_wrappedOperation'] = function() { $v = (function() {
  $__fn = function($name, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $v1_0 = ($f)(new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1));
  if ((is_object($v1_0) && (($v1_0)->tag === "Cons"))) {
$__t1 = new Phpurs_Data2("NonEmpty", ($v1_0)->value0, ($v1_0)->value1);
} else {
if ((is_object($v1_0) && (($v1_0)->tag === "Nil"))) {
$__local_var_2 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("Impossible: empty list in NonEmptyList "))($name);
$__t1 = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$__local_var_2) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Partial__crashWith'] ?? \PhpursThunks::eval('Partial__crashWith')))($__local_var_2);
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_updateAt'] = function() { $v = (function() {
  $__fn = function($i, $a = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))($i))(0)) {
$__t4 = new Phpurs_Data1("Just", new Phpurs_Data2("NonEmpty", $a, ($v)->value1));
} else {
$__local_var_0 = ($v)->value0;
$__local_var_1 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Types_NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_NonEmptyList'))))(function($v1) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $__local_var_0, $v1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
$__local_var_2 = (((($GLOBALS['Data_List_updateAt'] ?? \PhpursThunks::eval('Data_List_updateAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($i))(1)))($a))(($v)->value1);
if ((is_object($__local_var_2) && (($__local_var_2)->tag === "Just"))) {
$__t3 = new Phpurs_Data1("Just", ($__local_var_1)(($__local_var_2)->value0));
} else {
$__t3 = new Phpurs_Data0("Nothing");
};
$__t4 = $__t3;
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_unzip'] = function() { $v = function($ts) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", new Phpurs_Data2("NonEmpty", (($ts)->value0)->value0, ((($GLOBALS['Data_List_Types_listMap'] ?? \PhpursThunks::eval('Data_List_Types_listMap')))(($GLOBALS['Data_Tuple_fst'] ?? \PhpursThunks::eval('Data_Tuple_fst'))))(($ts)->value1)), new Phpurs_Data2("NonEmpty", (($ts)->value0)->value1, ((($GLOBALS['Data_List_Types_listMap'] ?? \PhpursThunks::eval('Data_List_Types_listMap')))(($GLOBALS['Data_Tuple_snd'] ?? \PhpursThunks::eval('Data_Tuple_snd'))))(($ts)->value1)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_unsnoc'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $v1_0 = (($GLOBALS['Data_List_unsnoc'] ?? \PhpursThunks::eval('Data_List_unsnoc')))(($v)->value1);
  if ((is_object($v1_0) && (($v1_0)->tag === "Nothing"))) {
$__t1 = (object)["init" => new Phpurs_Data0("Nil"), "last" => ($v)->value0];
} else {
if ((is_object($v1_0) && (($v1_0)->tag === "Just"))) {
$__t1 = (object)["init" => new Phpurs_Data2("Cons", ($v)->value0, (($v1_0)->value0)->init), "last" => (($v1_0)->value0)->last];
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
\PhpursThunks::$thunks['Data_List_NonEmpty_unionBy'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation2'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation2')))("unionBy")))(($GLOBALS['Data_List_unionBy'] ?? \PhpursThunks::eval('Data_List_unionBy'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_union'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_NonEmpty_wrappedOperation2'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation2')))("union"))((($GLOBALS['Data_List_union'] ?? \PhpursThunks::eval('Data_List_union')))($dictEq));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_uncons'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (object)["head" => ($v)->value0, "tail" => ($v)->value1];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_toList'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_toUnfoldable'] = function() { $v = function($dictUnfoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($dictUnfoldable)->unfoldr)(function($xs) {
  $__num = \func_num_args();
  if ((is_object($xs) && (($xs)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($xs) && (($xs)->tag === "Cons"))) {
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($xs)->value0, ($xs)->value1));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(($GLOBALS['Data_List_NonEmpty_toList'] ?? \PhpursThunks::eval('Data_List_NonEmpty_toList')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_tail'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_sortBy'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("sortBy")))(($GLOBALS['Data_List_sortBy'] ?? \PhpursThunks::eval('Data_List_sortBy'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_sort'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = function($xs) use (&$compare_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_NonEmpty_sortBy'] ?? \PhpursThunks::eval('Data_List_NonEmpty_sortBy')))($compare_0))($xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_snoc'] = function() { $v = (function() {
  $__fn = function($v, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", ($v)->value0, ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))(new Phpurs_Data2("Cons", $y, new Phpurs_Data0("Nil"))))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_singleton'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Types_NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_NonEmptyList'))))(function($a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $a, new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_snoc__prime__'] = function() { $v = (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = new Phpurs_Data2("NonEmpty", ($v)->value0, ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))(new Phpurs_Data2("Cons", $v1, new Phpurs_Data0("Nil"))))(($v)->value1));
} else {
if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = (($GLOBALS['Data_List_NonEmpty_singleton'] ?? \PhpursThunks::eval('Data_List_NonEmpty_singleton')))($v1);
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
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_reverse'] = function() { $v = ((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("reverse"))(($GLOBALS['Data_List_reverse'] ?? \PhpursThunks::eval('Data_List_reverse'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_nubEq'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("nubEq"))((($GLOBALS['Data_List_nubEq'] ?? \PhpursThunks::eval('Data_List_nubEq')))($dictEq));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_nubByEq'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("nubByEq")))(($GLOBALS['Data_List_nubByEq'] ?? \PhpursThunks::eval('Data_List_nubByEq'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_nubBy'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("nubBy")))(($GLOBALS['Data_List_nubBy'] ?? \PhpursThunks::eval('Data_List_nubBy'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_nub'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("nub"))((($GLOBALS['Data_List_nubBy'] ?? \PhpursThunks::eval('Data_List_nubBy')))(($dictOrd)->compare));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_modifyAt'] = function() { $v = (function() {
  $__fn = function($i, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))($i))(0)) {
$__t4 = new Phpurs_Data1("Just", new Phpurs_Data2("NonEmpty", ($f)(($v)->value0), ($v)->value1));
} else {
$__local_var_0 = ($v)->value0;
$__local_var_1 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Types_NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_NonEmptyList'))))(function($v1) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $__local_var_0, $v1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
$__local_var_2 = (((($GLOBALS['Data_List_alterAt'] ?? \PhpursThunks::eval('Data_List_alterAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($i))(1)))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Maybe_Just'] ?? \PhpursThunks::eval('Data_Maybe_Just'))))($f)))(($v)->value1);
if ((is_object($__local_var_2) && (($__local_var_2)->tag === "Just"))) {
$__t3 = new Phpurs_Data1("Just", ($__local_var_1)(($__local_var_2)->value0));
} else {
$__t3 = new Phpurs_Data0("Nothing");
};
$__t4 = $__t3;
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_lift'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_mapMaybe'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \PhpursThunks::eval('Data_List_NonEmpty_lift'))))(($GLOBALS['Data_List_mapMaybe'] ?? \PhpursThunks::eval('Data_List_mapMaybe'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_partition'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \PhpursThunks::eval('Data_List_NonEmpty_lift'))))(($GLOBALS['Data_List_partition'] ?? \PhpursThunks::eval('Data_List_partition'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_span'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \PhpursThunks::eval('Data_List_NonEmpty_lift'))))(($GLOBALS['Data_List_span'] ?? \PhpursThunks::eval('Data_List_span'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_take'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \PhpursThunks::eval('Data_List_NonEmpty_lift'))))(($GLOBALS['Data_List_take'] ?? \PhpursThunks::eval('Data_List_take'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_takeWhile'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \PhpursThunks::eval('Data_List_NonEmpty_lift'))))(($GLOBALS['Data_List_takeWhile'] ?? \PhpursThunks::eval('Data_List_takeWhile'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_length'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(1))((($GLOBALS['Data_List_length'] ?? \PhpursThunks::eval('Data_List_length')))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_last'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object(($v)->value1) && ((($v)->value1)->tag === "Cons"))) {
if ((is_object((($v)->value1)->value1) && (((($v)->value1)->value1)->tag === "Nil"))) {
$__t1 = (($v)->value1)->value0;
} else {
if ((is_object((($GLOBALS['Data_List_last'] ?? \PhpursThunks::eval('Data_List_last')))((($v)->value1)->value1)) && (((($GLOBALS['Data_List_last'] ?? \PhpursThunks::eval('Data_List_last')))((($v)->value1)->value1))->tag === "Nothing"))) {
$__t1 = ($v)->value0;
} else {
if ((is_object((($GLOBALS['Data_List_last'] ?? \PhpursThunks::eval('Data_List_last')))((($v)->value1)->value1)) && (((($GLOBALS['Data_List_last'] ?? \PhpursThunks::eval('Data_List_last')))((($v)->value1)->value1))->tag === "Just"))) {
$__t1 = ((($GLOBALS['Data_List_last'] ?? \PhpursThunks::eval('Data_List_last')))((($v)->value1)->value1))->value0;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
};
$__t0 = $__t1;
} else {
$__t0 = ($v)->value0;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_intersectBy'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation2'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation2')))("intersectBy")))(($GLOBALS['Data_List_intersectBy'] ?? \PhpursThunks::eval('Data_List_intersectBy'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_intersect'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_NonEmpty_wrappedOperation2'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation2')))("intersect"))((($GLOBALS['Data_List_intersect'] ?? \PhpursThunks::eval('Data_List_intersect')))($dictEq));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_insertAt'] = function() { $v = (function() {
  $__fn = function($i, $a = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))($i))(0)) {
$__t4 = new Phpurs_Data1("Just", new Phpurs_Data2("NonEmpty", $a, new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1)));
} else {
$__local_var_0 = ($v)->value0;
$__local_var_1 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_Types_NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_NonEmptyList'))))(function($v1) use (&$__local_var_0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $__local_var_0, $v1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
$__local_var_2 = (((($GLOBALS['Data_List_insertAt'] ?? \PhpursThunks::eval('Data_List_insertAt')))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($i))(1)))($a))(($v)->value1);
if ((is_object($__local_var_2) && (($__local_var_2)->tag === "Just"))) {
$__t3 = new Phpurs_Data1("Just", ($__local_var_1)(($__local_var_2)->value0));
} else {
$__t3 = new Phpurs_Data0("Nothing");
};
$__t4 = $__t3;
};
  $__res = $__t4;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_init'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_List_unsnoc'] ?? \PhpursThunks::eval('Data_List_unsnoc')))(($v)->value1);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data2("Cons", ($v)->value0, (($__local_var_0)->value0)->init);
} else {
$__t1 = new Phpurs_Data0("Nil");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_index'] = function() { $v = (function() {
  $__fn = function($v, $i = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))($i))(0)) {
$__t0 = new Phpurs_Data1("Just", ($v)->value0);
} else {
$__t0 = ((($GLOBALS['Data_List_index'] ?? \PhpursThunks::eval('Data_List_index')))(($v)->value1))(((($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')))($i))(1));
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_head'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_groupBy'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("groupBy")))(($GLOBALS['Data_List_groupBy'] ?? \PhpursThunks::eval('Data_List_groupBy'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_groupAllBy'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("groupAllBy")))(($GLOBALS['Data_List_groupAllBy'] ?? \PhpursThunks::eval('Data_List_groupAllBy'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_groupAll'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("groupAll"))((($GLOBALS['Data_List_groupAll'] ?? \PhpursThunks::eval('Data_List_groupAll')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_group'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_List_NonEmpty_wrappedOperation'] ?? \PhpursThunks::eval('Data_List_NonEmpty_wrappedOperation')))("group"))((($GLOBALS['Data_List_group'] ?? \PhpursThunks::eval('Data_List_group')))($dictEq));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_fromList'] = function() { $v = function($v) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Nil"))) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
if ((is_object($v) && (($v)->tag === "Cons"))) {
$__t0 = new Phpurs_Data1("Just", new Phpurs_Data2("NonEmpty", ($v)->value0, ($v)->value1));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_fromFoldable'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_fromList'] ?? \PhpursThunks::eval('Data_List_NonEmpty_fromList'))))(((($dictFoldable)->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))(new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_foldM'] = function() { $v = (function() {
  $__fn = function($dictMonad, $f = null, $b = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__local_var_0 = ($v)->value1;
  $__res = ((((($dictMonad)->Bind1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bind)((($f)($b))(($v)->value0)))(function($b__prime__) use (&$__local_var_0, &$dictMonad, &$f) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Data_List_foldM'] ?? \PhpursThunks::eval('Data_List_foldM')))($dictMonad))($f))($b__prime__))($__local_var_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_findLastIndex'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v1_0 = ((($GLOBALS['Data_List_findLastIndex'] ?? \PhpursThunks::eval('Data_List_findLastIndex')))($f))(($v)->value1);
  if ((is_object($v1_0) && (($v1_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($v1_0)->value0))(1));
} else {
if ((is_object($v1_0) && (($v1_0)->tag === "Nothing"))) {
if (($f)(($v)->value0)) {
$__t2 = new Phpurs_Data1("Just", 0);
} else {
$__t2 = new Phpurs_Data0("Nothing");
};
$__t1 = $__t2;
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
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_findIndex'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if (($f)(($v)->value0)) {
$__t2 = new Phpurs_Data1("Just", 0);
} else {
$__local_var_0 = ((($GLOBALS['Data_List_findIndex'] ?? \PhpursThunks::eval('Data_List_findIndex')))($f))(($v)->value1);
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", ((($GLOBALS['Data_Semiring_intAdd'] ?? \PhpursThunks::eval('Data_Semiring_intAdd')))(($__local_var_0)->value0))(1));
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
$__t2 = $__t1;
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_filterM'] = function() { $v = function($dictMonad) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \PhpursThunks::eval('Data_List_NonEmpty_lift'))))((($GLOBALS['Data_List_filterM'] ?? \PhpursThunks::eval('Data_List_filterM')))($dictMonad));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_filter'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \PhpursThunks::eval('Data_List_NonEmpty_lift'))))(($GLOBALS['Data_List_filter'] ?? \PhpursThunks::eval('Data_List_filter'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_elemLastIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_List_NonEmpty_findLastIndex'] ?? \PhpursThunks::eval('Data_List_NonEmpty_findLastIndex')))(function($v) use (&$dictEq, &$x) {
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
\PhpursThunks::$thunks['Data_List_NonEmpty_elemIndex'] = function() { $v = (function() {
  $__fn = function($dictEq, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_List_NonEmpty_findIndex'] ?? \PhpursThunks::eval('Data_List_NonEmpty_findIndex')))(function($v) use (&$dictEq, &$x) {
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
\PhpursThunks::$thunks['Data_List_NonEmpty_dropWhile'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \PhpursThunks::eval('Data_List_NonEmpty_lift'))))(($GLOBALS['Data_List_dropWhile'] ?? \PhpursThunks::eval('Data_List_dropWhile'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_drop'] = function() { $v = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_List_NonEmpty_lift'] ?? \PhpursThunks::eval('Data_List_NonEmpty_lift'))))(($GLOBALS['Data_List_drop'] ?? \PhpursThunks::eval('Data_List_drop'))); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_cons__prime__'] = function() { $v = (function() {
  $__fn = function($x, $xs = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $x, $xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_cons'] = function() { $v = (function() {
  $__fn = function($y, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $y, new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_concatMap'] = function() { $v = (function() {
  $__fn = function($b, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_List_Types_bindNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_bindNonEmptyList')))->bind)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_concat'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (((($GLOBALS['Data_List_Types_bindNonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_bindNonEmptyList')))->bind)($v))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_catMaybes'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $go = null;
  $go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$go = null;
$go = (function() use (&$go) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  if ((is_object($v1) && (($v1)->tag === "Nil"))) {
$__t1 = $v;
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
$__t1 = (($go)(new Phpurs_Data2("Cons", ($v1)->value0, $v)))(($v1)->value1);
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
$__t0 = (($go)(new Phpurs_Data0("Nil")))($v);
} else {
if ((is_object($v1) && (($v1)->tag === "Cons"))) {
if ((is_object(($v1)->value0) && ((($v1)->value0)->tag === "Nothing"))) {
$__t2 = (($go)($v))(($v1)->value1);
} else {
if ((is_object(($v1)->value0) && ((($v1)->value0)->tag === "Just"))) {
$__t2 = (($go)(new Phpurs_Data2("Cons", (($v1)->value0)->value0, $v)))(($v1)->value1);
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
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = (($go)(new Phpurs_Data0("Nil")))(new Phpurs_Data2("Cons", ($v)->value0, ($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_List_NonEmpty_appendFoldable'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $fromFoldable1_0 = ((($dictFoldable)->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))(new Phpurs_Data0("Nil"));
  $__res = (function() use (&$fromFoldable1_0) {
  $__fn = function($v, $ys = null) use (&$fromFoldable1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", ($v)->value0, ((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)(($GLOBALS['Data_List_Types_Cons'] ?? \PhpursThunks::eval('Data_List_Types_Cons'))))(($fromFoldable1_0)($ys)))(($v)->value1));
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






























































