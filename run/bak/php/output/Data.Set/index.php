<?php

namespace Data\Set;

// ALL IMPORTS: Control.Category, Control.Semigroupoid, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.List, Data.List.Types, Data.Map.Internal, Data.Maybe, Data.Monoid, Data.Ord, Data.Semigroup, Data.Set, Data.Show, Data.Unfoldable, Data.Unit, Prelude, Prim, Safe.Coerce
// TO REQUIRE: Control.Category, Control.Semigroupoid, Data.Eq, Data.Foldable, Data.Function, Data.Functor, Data.HeytingAlgebra, Data.List, Data.List.Types, Data.Map.Internal, Data.Maybe, Data.Monoid, Data.Ord, Data.Semigroup, Data.Set, Data.Show, Data.Unfoldable, Data.Unit, Prelude, Safe.Coerce
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';

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
\PhpursThunks::$thunks['Data_Set_Set'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_union'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeUnionWith'))))($compare_0))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))($m1))($m2);
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
\PhpursThunks::$thunks['Data_Set_toggle'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $alter_0 = (($GLOBALS['Data_Map_Internal_alter'] ?? \PhpursThunks::eval('Data_Map_Internal_alter')))($dictOrd);
  $__res = (function() use (&$alter_0) {
  $__fn = function($a, $v = null) use (&$alter_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($alter_0)(function($v2) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Nothing"))) {
$__t1 = new Phpurs_Data1("Just", ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
} else {
if ((is_object($v2) && (($v2)->tag === "Just"))) {
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
}))($a))($v);
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
\PhpursThunks::$thunks['Data_Set_toMap'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_toList'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Map_Internal_keys'] ?? \PhpursThunks::eval('Data_Map_Internal_keys')))($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_toUnfoldable'] = function() { $v = function($dictUnfoldable) {
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
})))(($GLOBALS['Data_Set_toList'] ?? \PhpursThunks::eval('Data_Set_toList')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_toUnfoldable1'] = function() { $v = (($GLOBALS['Data_Set_toUnfoldable'] ?? \PhpursThunks::eval('Data_Set_toUnfoldable')))(($GLOBALS['Data_Unfoldable_unfoldableArray'] ?? \PhpursThunks::eval('Data_Unfoldable_unfoldableArray'))); return $v; };
\PhpursThunks::$thunks['Data_Set_size'] = function() { $v = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($GLOBALS['Data_Map_Internal_size'] ?? \PhpursThunks::eval('Data_Map_Internal_size'))); return $v; };
\PhpursThunks::$thunks['Data_Set_singleton'] = function() { $v = function($a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data6("Node", 1, 1, $a, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')), new Phpurs_Data0("Leaf"), new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_showSet'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($s) use (&$dictShow) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(fromFoldable "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(((($GLOBALS['Data_Show_showArrayImpl'] ?? \PhpursThunks::eval('Data_Show_showArrayImpl')))(($dictShow)->show))((($GLOBALS['Data_Set_toUnfoldable1'] ?? \PhpursThunks::eval('Data_Set_toUnfoldable1')))($s))))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_semigroupSet'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (object)["append" => (($GLOBALS['Data_Set_union'] ?? \PhpursThunks::eval('Data_Set_union')))($dictOrd)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_member'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(function($k) use (&$dictOrd) {
  $__num = \func_num_args();
  $go = null;
  $go = function($v) use (&$dictOrd, &$go, &$k) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Leaf"))) {
$__t0 = false;
} else {
if ((is_object($v) && (($v)->tag === "Node"))) {
$v1_1 = ((($dictOrd)->compare)($k))(($v)->value2);
if ((is_object($v1_1) && (($v1_1)->tag === "LT"))) {
$__t2 = ($go)(($v)->value4);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "GT"))) {
$__t2 = ($go)(($v)->value5);
} else {
if ((is_object($v1_1) && (($v1_1)->tag === "EQ"))) {
$__t2 = true;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
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
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_isEmpty'] = function() { $v = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($GLOBALS['Data_Map_Internal_isEmpty'] ?? \PhpursThunks::eval('Data_Map_Internal_isEmpty'))); return $v; };
\PhpursThunks::$thunks['Data_Set_intersection'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn4')))(($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeIntersectionWith'))))($compare_0))(($GLOBALS['Data_Function_const'] ?? \PhpursThunks::eval('Data_Function_const'))))($m1))($m2);
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
\PhpursThunks::$thunks['Data_Set_insert'] = function() { $v = (function() {
  $__fn = function($dictOrd, $a = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($GLOBALS['Data_Map_Internal_insert'] ?? \PhpursThunks::eval('Data_Map_Internal_insert')))($dictOrd))($a))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Set_fromMap'] = function() { $v = ($GLOBALS['Data_Set_Set'] ?? \PhpursThunks::eval('Data_Set_Set')); return $v; };
\PhpursThunks::$thunks['Data_Set_foldableSet'] = function() { $v = (object)["foldMap" => function($dictMonoid) {
  $__num = \func_num_args();
  $foldMap1_0 = ((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldMap)($dictMonoid);
  $__res = function($f) use (&$foldMap1_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($foldMap1_0)($f)))(($GLOBALS['Data_Set_toList'] ?? \PhpursThunks::eval('Data_Set_toList')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldl" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
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
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($go)($x)))(($GLOBALS['Data_Set_toList'] ?? \PhpursThunks::eval('Data_Set_toList')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)($f))($x)))(($GLOBALS['Data_Set_toList'] ?? \PhpursThunks::eval('Data_Set_toList')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Set_findMin'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_Map_Internal_findMin'] ?? \PhpursThunks::eval('Data_Map_Internal_findMin')))($v);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($__local_var_0)->value0)->key);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_findMax'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_Map_Internal_findMax'] ?? \PhpursThunks::eval('Data_Map_Internal_findMax')))($v);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = new Phpurs_Data1("Just", (($__local_var_0)->value0)->key);
} else {
$__t1 = new Phpurs_Data0("Nothing");
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_filter'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Map_Internal_filterKeys'] ?? \PhpursThunks::eval('Data_Map_Internal_filterKeys')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_eqSet'] = function() { $v = function($dictEq) {
  $__num = \func_num_args();
  $__res = (object)["eq" => (function() use (&$dictEq) {
  $__fn = function($v, $v1 = null) use (&$dictEq, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Map_Internal_eqMap'] ?? \PhpursThunks::eval('Data_Map_Internal_eqMap')))($dictEq))(($GLOBALS['Data_Eq_eqUnit'] ?? \PhpursThunks::eval('Data_Eq_eqUnit'))))->eq)($v))($v1);
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
\PhpursThunks::$thunks['Data_Set_ordSet'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $eqSet1_1 = (object)["eq" => (function() use (&$__local_var_0) {
  $__fn = function($v, $v1 = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($GLOBALS['Data_Map_Internal_eqMap'] ?? \PhpursThunks::eval('Data_Map_Internal_eqMap')))($__local_var_0))(($GLOBALS['Data_Eq_eqUnit'] ?? \PhpursThunks::eval('Data_Eq_eqUnit'))))->eq)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["compare" => (function() use (&$dictOrd) {
  $__fn = function($s1, $s2 = null) use (&$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_List_Types_ordList'] ?? \PhpursThunks::eval('Data_List_Types_ordList')))($dictOrd))->compare)((($GLOBALS['Data_Map_Internal_keys'] ?? \PhpursThunks::eval('Data_Map_Internal_keys')))($s1)))((($GLOBALS['Data_Map_Internal_keys'] ?? \PhpursThunks::eval('Data_Map_Internal_keys')))($s2));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqSet1_1) {
  $__num = \func_num_args();
  $__res = $eqSet1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_eq1Set'] = function() { $v = (object)["eq1" => (function() {
  $__fn = function($dictEq, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((((($GLOBALS['Data_Map_Internal_eqMap'] ?? \PhpursThunks::eval('Data_Map_Internal_eqMap')))($dictEq))(($GLOBALS['Data_Eq_eqUnit'] ?? \PhpursThunks::eval('Data_Eq_eqUnit'))))->eq)($v))($v1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Set_ord1Set'] = function() { $v = (object)["compare1" => function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Set_ordSet'] ?? \PhpursThunks::eval('Data_Set_ordSet')))($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Set_eq1Set'] ?? \PhpursThunks::eval('Data_Set_eq1Set'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Set_empty'] = function() { $v = new Phpurs_Data0("Leaf"); return $v; };
\PhpursThunks::$thunks['Data_Set_fromFoldable'] = function() { $v = (function() {
  $__fn = function($dictFoldable, $dictOrd = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFoldable)->foldl)((function() use (&$dictOrd) {
  $__fn = function($m, $a = null) use (&$dictOrd, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_Map_Internal_insert'] ?? \PhpursThunks::eval('Data_Map_Internal_insert')))($dictOrd))($a))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($m);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Set_map'] = function() { $v = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Set_foldableSet'] ?? \PhpursThunks::eval('Data_Set_foldableSet')))->foldl)((function() use (&$dictOrd, &$f) {
  $__fn = function($m, $a = null) use (&$dictOrd, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_Map_Internal_insert'] ?? \PhpursThunks::eval('Data_Map_Internal_insert')))($dictOrd))(($f)($a)))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($m);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))(new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Set_mapMaybe'] = function() { $v = (function() {
  $__fn = function($dictOrd, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Data_List_Types_foldableList'] ?? \PhpursThunks::eval('Data_List_Types_foldableList')))->foldr)((function() use (&$dictOrd, &$f) {
  $__fn = function($a, $acc = null) use (&$dictOrd, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = ($f)($a);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Nothing"))) {
$__t1 = $acc;
} else {
if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = ((((($GLOBALS['Data_Map_Internal_insert'] ?? \PhpursThunks::eval('Data_Map_Internal_insert')))($dictOrd))(($__local_var_0)->value0))(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($acc);
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
})()))(new Phpurs_Data0("Leaf"))))(($GLOBALS['Data_Set_toList'] ?? \PhpursThunks::eval('Data_Set_toList')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Set_monoidSet'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $semigroupSet1_0 = (object)["append" => (($GLOBALS['Data_Set_union'] ?? \PhpursThunks::eval('Data_Set_union')))($dictOrd)];
  $__res = (object)["mempty" => new Phpurs_Data0("Leaf"), "Semigroup0" => function($dollar__unused_0) use (&$semigroupSet1_0) {
  $__num = \func_num_args();
  $__res = $semigroupSet1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_unions'] = function() { $v = (function() {
  $__fn = function($dictFoldable, $dictOrd = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFoldable)->foldl)((($GLOBALS['Data_Set_union'] ?? \PhpursThunks::eval('Data_Set_union')))($dictOrd)))(new Phpurs_Data0("Leaf"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Set_difference'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeDifference'))))($compare_0))($m1))($m2);
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
\PhpursThunks::$thunks['Data_Set_subset'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $compare_0 = ($dictOrd)->compare;
  $difference1_1 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((function() use (&$compare_0) {
  $__fn = function($m1, $m2 = null) use (&$compare_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_runFn3')))(($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \PhpursThunks::eval('Data_Map_Internal_unsafeDifference'))))($compare_0))($m1))($m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__res = (function() use (&$difference1_1) {
  $__fn = function($s1, $s2 = null) use (&$difference1_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Data_Set_isEmpty'] ?? \PhpursThunks::eval('Data_Set_isEmpty')))((($difference1_1)($s1))($s2));
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
\PhpursThunks::$thunks['Data_Set_properSubset'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $subset1_0 = (($GLOBALS['Data_Set_subset'] ?? \PhpursThunks::eval('Data_Set_subset')))($dictOrd);
  $__res = (function() use (&$subset1_0) {
  $__fn = function($s1, $s2 = null) use (&$subset1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($GLOBALS['Data_Eq_eqBooleanImpl'] ?? \PhpursThunks::eval('Data_Eq_eqBooleanImpl')))(((($GLOBALS['Data_Eq_eqIntImpl'] ?? \PhpursThunks::eval('Data_Eq_eqIntImpl')))((($GLOBALS['Data_Set_size'] ?? \PhpursThunks::eval('Data_Set_size')))($s1)))((($GLOBALS['Data_Set_size'] ?? \PhpursThunks::eval('Data_Set_size')))($s2))))(false)))((($subset1_0)($s1))($s2));
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
\PhpursThunks::$thunks['Data_Set_delete'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Map_Internal_delete'] ?? \PhpursThunks::eval('Data_Map_Internal_delete')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_checkValid'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Map_Internal_checkValid'] ?? \PhpursThunks::eval('Data_Map_Internal_checkValid')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_catMaybes'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Set_mapMaybe'] ?? \PhpursThunks::eval('Data_Set_mapMaybe')))($dictOrd))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };






































