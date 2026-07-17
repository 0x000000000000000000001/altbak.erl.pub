<?php

namespace Data\Set\NonEmpty;

// ALL IMPORTS: Control.Semigroupoid, Data.Array.NonEmpty, Data.Array.NonEmpty.Internal, Data.Eq, Data.Foldable, Data.Function.Uncurried, Data.Functor, Data.List.NonEmpty, Data.List.Types, Data.Map.Internal, Data.Maybe, Data.Ord, Data.Semigroup, Data.Semigroup.Foldable, Data.Set, Data.Set.NonEmpty, Data.Show, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Partial.Unsafe, Prelude, Prim, Safe.Coerce
// TO REQUIRE: Control.Semigroupoid, Data.Array.NonEmpty, Data.Array.NonEmpty.Internal, Data.Eq, Data.Foldable, Data.Function.Uncurried, Data.Functor, Data.List.NonEmpty, Data.List.Types, Data.Map.Internal, Data.Maybe, Data.Ord, Data.Semigroup, Data.Semigroup.Foldable, Data.Set, Data.Set.NonEmpty, Data.Show, Data.Tuple, Data.Unfoldable, Data.Unfoldable1, Partial.Unsafe, Prelude, Safe.Coerce
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Set.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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
\PhpursThunks::$thunks['Data_Set_NonEmpty_unionSet'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Set_union'] ?? \PhpursThunks::eval('Data_Set_union')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_toUnfoldable1'] = function() { $v = function($dictUnfoldable1) {
  $__num = \func_num_args();
  $stepNext_0 = (((($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapL'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapL'))))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", $k, $next));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())))(function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Nothing");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($dictUnfoldable1)->unfoldr1)(function($v) use (&$stepNext_0) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, ($stepNext_0)(($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((((($GLOBALS['Data_Map_Internal_stepWith'] ?? \PhpursThunks::eval('Data_Map_Internal_stepWith')))(($GLOBALS['Data_Map_Internal_iterMapL'] ?? \PhpursThunks::eval('Data_Map_Internal_iterMapL'))))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \PhpursThunks::eval('Data_Function_Uncurried_mkFn3')))((function() {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Tuple", $k, $next);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})())))(function($v) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Partial__crashWith'] ?? \PhpursThunks::eval('Partial__crashWith')))("toUnfoldable1: impossible");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
})))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Map_Internal_toMapIter'] ?? \PhpursThunks::eval('Data_Map_Internal_toMapIter'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Set_toMap'] ?? \PhpursThunks::eval('Data_Set_toMap'))))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_toUnfoldable11'] = function() { $v = (($GLOBALS['Data_Set_NonEmpty_toUnfoldable1'] ?? \PhpursThunks::eval('Data_Set_NonEmpty_toUnfoldable1')))(($GLOBALS['Data_Unfoldable1_unfoldable1Array'] ?? \PhpursThunks::eval('Data_Unfoldable1_unfoldable1Array'))); return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_toUnfoldable12'] = function() { $v = (($GLOBALS['Data_Set_NonEmpty_toUnfoldable1'] ?? \PhpursThunks::eval('Data_Set_NonEmpty_toUnfoldable1')))(($GLOBALS['Data_List_Types_unfoldable1NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_unfoldable1NonEmptyList'))); return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_toUnfoldable'] = function() { $v = function($dictUnfoldable) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Set_toUnfoldable'] ?? \PhpursThunks::eval('Data_Set_toUnfoldable')))($dictUnfoldable));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_toSet'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = $v;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_subset'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Set_subset'] ?? \PhpursThunks::eval('Data_Set_subset')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_size'] = function() { $v = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($GLOBALS['Data_Set_size'] ?? \PhpursThunks::eval('Data_Set_size'))); return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_singleton'] = function() { $v = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($GLOBALS['Data_Set_singleton'] ?? \PhpursThunks::eval('Data_Set_singleton'))); return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_showNonEmptySet'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($s) use (&$dictShow) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(fromFoldable1 "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((((($GLOBALS['Data_Array_NonEmpty_Internal_showNonEmptyArray'] ?? \PhpursThunks::eval('Data_Array_NonEmpty_Internal_showNonEmptyArray')))($dictShow))->show)((($GLOBALS['Data_Set_NonEmpty_toUnfoldable11'] ?? \PhpursThunks::eval('Data_Set_NonEmpty_toUnfoldable11')))($s))))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_semigroupNonEmptySet'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (object)["append" => (($GLOBALS['Data_Set_union'] ?? \PhpursThunks::eval('Data_Set_union')))($dictOrd)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_properSubset'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Set_properSubset'] ?? \PhpursThunks::eval('Data_Set_properSubset')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_ordNonEmptySet'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Data_Set_ordSet'] ?? \PhpursThunks::eval('Data_Set_ordSet')))($dictOrd);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_ord1NonEmptySet'] = function() { $v = ($GLOBALS['Data_Set_ord1Set'] ?? \PhpursThunks::eval('Data_Set_ord1Set')); return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_min'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$v) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_Map_Internal_findMin'] ?? \PhpursThunks::eval('Data_Map_Internal_findMin')))($v);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = (($__local_var_0)->value0)->key;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
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
\PhpursThunks::$thunks['Data_Set_NonEmpty_member'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Set_member'] ?? \PhpursThunks::eval('Data_Set_member')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_max'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \PhpursThunks::eval('Partial_Unsafe__unsafePartial')))(function($dollar__unused_0) use (&$v) {
  $__num = \func_num_args();
  $__local_var_0 = (($GLOBALS['Data_Map_Internal_findMax'] ?? \PhpursThunks::eval('Data_Map_Internal_findMax')))($v);
  if ((is_object($__local_var_0) && (($__local_var_0)->tag === "Just"))) {
$__t1 = (($__local_var_0)->value0)->key;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
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
\PhpursThunks::$thunks['Data_Set_NonEmpty_mapMaybe'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Set_mapMaybe'] ?? \PhpursThunks::eval('Data_Set_mapMaybe')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_map'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Set_map'] ?? \PhpursThunks::eval('Data_Set_map')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_insert'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Set_insert'] ?? \PhpursThunks::eval('Data_Set_insert')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_fromSet'] = function() { $v = function($s) {
  $__num = \func_num_args();
  if ((($GLOBALS['Data_Set_isEmpty'] ?? \PhpursThunks::eval('Data_Set_isEmpty')))($s)) {
$__t0 = new Phpurs_Data0("Nothing");
} else {
$__t0 = new Phpurs_Data1("Just", $s);
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_intersection'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $intersection1_0 = (($GLOBALS['Data_Set_intersection'] ?? \PhpursThunks::eval('Data_Set_intersection')))($dictOrd);
  $__res = (function() use (&$intersection1_0) {
  $__fn = function($v, $v1 = null) use (&$intersection1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_1 = (($intersection1_0)($v))($v1);
  if ((($GLOBALS['Data_Set_isEmpty'] ?? \PhpursThunks::eval('Data_Set_isEmpty')))($__local_var_1)) {
$__t2 = new Phpurs_Data0("Nothing");
} else {
$__t2 = new Phpurs_Data1("Just", $__local_var_1);
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
\PhpursThunks::$thunks['Data_Set_NonEmpty_fromFoldable1'] = function() { $v = (function() {
  $__fn = function($dictFoldable1, $dictOrd = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictFoldable1)->foldMap1)((object)["append" => (($GLOBALS['Data_Set_union'] ?? \PhpursThunks::eval('Data_Set_union')))($dictOrd)]))(($GLOBALS['Data_Set_NonEmpty_singleton'] ?? \PhpursThunks::eval('Data_Set_NonEmpty_singleton')));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_fromFoldable'] = function() { $v = (function() {
  $__fn = function($dictFoldable, $dictOrd = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \PhpursThunks::eval('Data_Set_NonEmpty_fromSet'))))(((($dictFoldable)->foldl)((function() use (&$dictOrd) {
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
})()))(new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_foldableNonEmptySet'] = function() { $v = ($GLOBALS['Data_Set_foldableSet'] ?? \PhpursThunks::eval('Data_Set_foldableSet')); return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_foldable1NonEmptySet'] = function() { $v = (object)["foldMap1" => function($dictSemigroup) {
  $__num = \func_num_args();
  $foldMap11_0 = ((($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_foldable1NonEmptyList')))->foldMap1)($dictSemigroup);
  $__res = function($f) use (&$foldMap11_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($foldMap11_0)($f)))(($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \PhpursThunks::eval('Data_Set_NonEmpty_toUnfoldable12')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldr1" => function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_foldable1NonEmptyList')))->foldr1)($f)))(($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \PhpursThunks::eval('Data_Set_NonEmpty_toUnfoldable12')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "foldl1" => function($f) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(((($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \PhpursThunks::eval('Data_List_Types_foldable1NonEmptyList')))->foldl1)($f)))(($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \PhpursThunks::eval('Data_Set_NonEmpty_toUnfoldable12')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Foldable0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Set_foldableSet'] ?? \PhpursThunks::eval('Data_Set_foldableSet'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_filter'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Map_Internal_filterKeys'] ?? \PhpursThunks::eval('Data_Map_Internal_filterKeys')))($dictOrd)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_eqNonEmptySet'] = function() { $v = function($dictEq) {
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
\PhpursThunks::$thunks['Data_Set_NonEmpty_eq1NonEmptySet'] = function() { $v = ($GLOBALS['Data_Set_eq1Set'] ?? \PhpursThunks::eval('Data_Set_eq1Set')); return $v; };
\PhpursThunks::$thunks['Data_Set_NonEmpty_difference'] = function() { $v = function($dictOrd) {
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
  $__fn = function($v, $v1 = null) use (&$difference1_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_2 = (($difference1_1)($v))($v1);
  if ((($GLOBALS['Data_Set_isEmpty'] ?? \PhpursThunks::eval('Data_Set_isEmpty')))($__local_var_2)) {
$__t3 = new Phpurs_Data0("Nothing");
} else {
$__t3 = new Phpurs_Data1("Just", $__local_var_2);
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
\PhpursThunks::$thunks['Data_Set_NonEmpty_delete'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $delete1_0 = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Map_Internal_delete'] ?? \PhpursThunks::eval('Data_Map_Internal_delete')))($dictOrd));
  $__res = (function() use (&$delete1_0) {
  $__fn = function($a, $v = null) use (&$delete1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_1 = (($delete1_0)($a))($v);
  if ((($GLOBALS['Data_Set_isEmpty'] ?? \PhpursThunks::eval('Data_Set_isEmpty')))($__local_var_1)) {
$__t2 = new Phpurs_Data0("Nothing");
} else {
$__t2 = new Phpurs_Data1("Just", $__local_var_1);
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
\PhpursThunks::$thunks['Data_Set_NonEmpty_cons'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $__res = (($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Data_Set_insert'] ?? \PhpursThunks::eval('Data_Set_insert')))($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


































