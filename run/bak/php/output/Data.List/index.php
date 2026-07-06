<?php

namespace Data\List;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Internal/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
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
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_List_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_List_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_List_foldr': $v = (($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')))->foldr; break;
      case 'Data_List_tailRecM2': $v = \Control\Monad\Rec\Class\Control_Monad_Rec_Class_tailRecM2(($GLOBALS['Control_Monad_Rec_Class_monadRecMaybe'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_monadRecMaybe'))); break;
      case 'Data_List_eq': $v = (($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering')))->eq; break;
      case 'Data_List_notEq': $v = \Data\Eq\Data_Eq_notEq(($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering'))); break;
      case 'Data_List_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_List_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_List_lessThan': $v = \Data\Ord\Data_Ord_lessThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_sequence': $v = (($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList')))->sequence; break;
      case 'Data_List_eq1': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_List_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_List_greaterThan': $v = \Data\Ord\Data_Ord_greaterThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_negate': $v = \Data\Ring\Data_Ring_negate(($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'))); break;
      case 'Data_List_bimap': $v = (($GLOBALS['Control_Monad_Rec_Class_bifunctorStep'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_bifunctorStep')))->bimap; break;
      case 'Data_List_foldl': $v = (($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')))->foldl; break;
      case 'Data_List_any': $v = \Data\Foldable\Data_Foldable_any(($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')), ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'))); break;
      case 'Data_List_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_List_append1': $v = (($GLOBALS['Data_List_Types_semigroupList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_semigroupList')))->append; break;
      case 'Data_List_bind': $v = (($GLOBALS['Data_List_Types_bindList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindList')))->bind; break;
      case 'Data_List_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_List_unzip': $v = (($GLOBALS['Data_List_foldr'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldr')))(function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__res = function($v1) use ($a, $b) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$as = ($__case_0)->v0;
$bs = ($__case_0)->v1;
$__res = new Phpurs_Data2("Tuple", new Phpurs_Data2("Cons", $a, $as), new Phpurs_Data2("Cons", $b, $bs));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, new Phpurs_Data2("Tuple", ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))); break;
      case 'Data_List_reverse': $v = (function() use (&$__fn) {
$go = (function() use (&$go, &$__fn) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
$acc = $__case_0;
$__res = $acc;
goto __end;;
break;
case "Cons":
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$__tco_tmp_0 = new Phpurs_Data2("Cons", $x, $acc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue II/*__LVL__*/;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
})(); break;
      case 'Data_List_take': $v = (function() use (&$__fn) {
$go = (function() use (&$go, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (true) {
$acc = $__case_0;
$n = $__case_1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
switch (($__case_2)->tag) {
case "Nil":
$acc = $__case_0;
$__res = ($__global_Data_List_reverse)($acc);
goto __end;;
break;
case "Cons":
$acc = $__case_0;
$n = $__case_1;
$x = ($__case_2)->v0;
$xs = ($__case_2)->v1;
$__tco_tmp_0 = new Phpurs_Data2("Cons", $x, $acc);
$__tco_tmp_1 = ($n - 1);
$__tco_tmp_2 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue II/*__LVL__*/;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
return ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
})(); break;
      case 'Data_List_zip': $v = \Data\List\Data_List_zipWith((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_List_newtypePattern': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_length': $v = (($GLOBALS['Data_List_foldl'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldl')))((function() use (&$__fn) {
  $__fn = function($acc, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($acc, &$__fn) { return $__fn($acc, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($acc + 1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), 0); break;
      case 'Data_List_concatMap': $v = \Data\Function\Data_Function_flip(($GLOBALS['Data_List_bind'] ?? \Data\List\phpurs_eval_thunk('Data_List_bind'))); break;
      case 'Data_List_catMaybes': $v = \Data\List\Data_List_mapMaybe(($GLOBALS['Data_List_identity'] ?? \Data\List\phpurs_eval_thunk('Data_List_identity'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };























// Data_List_Pattern
function Data_List_Pattern($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Pattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Pattern'] = __NAMESPACE__ . '\\Data_List_Pattern';

// Data_List_updateAt
function Data_List_updateAt($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_updateAt';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0 === 0) && (($__case_2)->tag === "Cons"))) {
$x = $__case_1;
$xs = ($__case_2)->v1;
$__res = new Phpurs_Data1("Just", new Phpurs_Data2("Cons", $x, $xs));
goto __end;;
} else {
switch (($__case_2)->tag) {
case "Cons":
$n = $__case_0;
$x = $__case_1;
$x1 = ($__case_2)->v0;
$xs = ($__case_2)->v1;
$__res = ($__global_Data_List_map)(function($v3) use ($x1) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Cons", $x1, $v3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, \Data\List\Data_List_updateAt(($n - 1), $x, $xs));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_updateAt'] = __NAMESPACE__ . '\\Data_List_updateAt';


// Data_List_uncons
function Data_List_uncons($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = new Phpurs_Data1("Just", (object)["head" => $x, "tail" => $xs]);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_uncons'] = __NAMESPACE__ . '\\Data_List_uncons';

// Data_List_toUnfoldable
function Data_List_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
  $__global_Data_List_uncons = ($GLOBALS['Data_List_uncons'] ?? \Data\List\phpurs_eval_thunk('Data_List_uncons'));
  $__res = (($dictUnfoldable)->unfoldr)(function($xs) use ($__global_Data_List_map, $__global_Data_List_uncons) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_map)(function($rec) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($rec)->head, ($rec)->tail);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_List_uncons)($xs));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_toUnfoldable'] = __NAMESPACE__ . '\\Data_List_toUnfoldable';

// Data_List_tail
function Data_List_tail($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Cons":
$xs = ($__case_0)->v1;
$__res = new Phpurs_Data1("Just", $xs);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_tail'] = __NAMESPACE__ . '\\Data_List_tail';

// Data_List_stripPrefix
function Data_List_stripPrefix($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_stripPrefix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_tailRecM2 = ($GLOBALS['Data_List_tailRecM2'] ?? \Data\List\phpurs_eval_thunk('Data_List_tailRecM2'));
  $eq2 = ($dictEq)->eq;
  $__res = (function() use ($__global_Data_List_tailRecM2, &$__fn) {
  $__fn = function($v, $s = null) use ($__global_Data_List_tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, &$__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $s;
  if (true) {
$p__prime__ = $__case_0;
$s1 = $__case_1;
$go = (function() use (&$__fn) {
  $__fn = function($prefix, $input = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($input) use ($prefix, &$__fn) { return $__fn($prefix, $input); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $prefix;
  $__case_1 = $input;
  if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$p = ($__case_0)->v0;
$ps = ($__case_0)->v1;
$i = ($__case_1)->v0;
$is = ($__case_1)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
switch (($__case_0)->tag) {
case "Nil":
$is = $__case_1;
$__res = new Phpurs_Data1("Just", new Phpurs_Data1("Done", $is));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__res = ($__global_Data_List_tailRecM2)($go, $p__prime__, $s1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_stripPrefix'] = __NAMESPACE__ . '\\Data_List_stripPrefix';

// Data_List_span
function Data_List_span($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_span';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Cons":
$p = $__case_0;
$x = ($__case_1)->v0;
$xs__prime__ = ($__case_1)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$xs = $__case_1;
$__res = (object)["init" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "rest" => $xs];
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_span'] = __NAMESPACE__ . '\\Data_List_span';

// Data_List_snoc
function Data_List_snoc($xs, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_snoc';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($xs, $__fn) { return $__fn($xs, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_foldr = ($GLOBALS['Data_List_foldr'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldr'));
  $__res = ($__global_Data_List_foldr)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), new Phpurs_Data2("Cons", $x, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))), $xs);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_snoc'] = __NAMESPACE__ . '\\Data_List_snoc';

// Data_List_singleton
function Data_List_singleton($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data2("Cons", $a, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_singleton'] = __NAMESPACE__ . '\\Data_List_singleton';

// Data_List_sortBy
function Data_List_sortBy($cmp) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_sortBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_singleton = ($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton'));
  $__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
  $merge = (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$as = $__case_0;
$a = ($__case_0)->v0;
$as__prime__ = ($__case_0)->v1;
$bs = $__case_1;
$b = ($__case_1)->v0;
$bs__prime__ = ($__case_1)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
if ((($__case_0)->tag === "Nil")) {
$bs = $__case_1;
$__res = $bs;
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Nil":
$as = $__case_0;
$__res = $as;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $mergePairs = function($v) use (&$merge, &$mergePairs) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Cons"))) {
$a = ($__case_0)->v0;
$b = (($__case_0)->v1)->v0;
$xs = (($__case_0)->v1)->v1;
$__res = new Phpurs_Data2("Cons", ($merge)($a, $b), ($mergePairs)($xs));
goto __end;;
} else {
if (true) {
$xs = $__case_0;
$__res = $xs;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $mergeAll = function($v) use (&$mergeAll, &$mergePairs) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Nil"))) {
$x = ($__case_0)->v0;
$__res = $x;
goto __end;;
} else {
if (true) {
$xs = $__case_0;
$__tco_tmp_0 = ($mergePairs)($xs);
$v = $__tco_tmp_0;
continue ;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $sequences = function($v) use ($__global_Data_List_singleton) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Cons"))) {
$a = ($__case_0)->v0;
$b = (($__case_0)->v1)->v0;
$xs = (($__case_0)->v1)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
if (true) {
$xs = $__case_0;
$__res = ($__global_Data_List_singleton)($xs);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $descending = (function() use (&$sequences, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$sequences, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Cons":
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->v0;
$bs = ($__case_2)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
$__res = new Phpurs_Data2("Cons", new Phpurs_Data2("Cons", $a, $as), ($sequences)($bs));
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $ascending = (function() use ($__global_Data_List_singleton, &$sequences, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($__global_Data_List_singleton, &$sequences, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Cons":
$a = $__case_0;
$as = $__case_1;
$b = ($__case_2)->v0;
$bs = ($__case_2)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$a = $__case_0;
$as = $__case_1;
$bs = $__case_2;
$__res = new Phpurs_Data2("Cons", ($as)(($__global_Data_List_singleton)($a)), ($sequences)($bs));
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = ($__global_Data_List_compose)($mergeAll, $sequences);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_sortBy'] = __NAMESPACE__ . '\\Data_List_sortBy';

// Data_List_sort
function Data_List_sort($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_sort';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_sortBy = ($GLOBALS['Data_List_sortBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_sortBy'));
  $compare = ($dictOrd)->compare;
  $__res = function($xs) use ($__global_Data_List_sortBy, $compare) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_sortBy)($compare, $xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_sort'] = __NAMESPACE__ . '\\Data_List_sort';

// Data_List_tails
function Data_List_tails($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_tails';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_singleton = ($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton'));
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
$__res = ($__global_Data_List_singleton)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
goto __end;;
break;
case "Cons":
$list = $__case_0;
$tl = ($__case_0)->v1;
$__res = new Phpurs_Data2("Cons", $list, \Data\List\Data_List_tails($tl));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_tails'] = __NAMESPACE__ . '\\Data_List_tails';

// Data_List_showPattern
function Data_List_showPattern($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_showPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Types_showList = ($GLOBALS['Data_List_Types_showList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_showList'));
  $show = (($__global_Data_List_Types_showList)($dictShow))->show;
  $__res = (object)["show" => function($v) use ($show) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = ("(Pattern " . (($show)($s) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_showPattern'] = __NAMESPACE__ . '\\Data_List_showPattern';



// Data_List_takeWhile
function Data_List_takeWhile($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_takeWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  $go = (function() use ($__global_Data_List_reverse, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Cons":
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$acc = $__case_0;
$__res = ($__global_Data_List_reverse)($acc);
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_takeWhile'] = __NAMESPACE__ . '\\Data_List_takeWhile';

// Data_List_unsnoc
function Data_List_unsnoc($lst) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_unsnoc';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  $go = (function() use (&$go, &$__fn) {
  $__fn = function($v, $v1 = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Nil"))) {
$x = ($__case_0)->v0;
$acc = $__case_1;
$__res = new Phpurs_Data1("Just", (object)["revInit" => $acc, "last" => $x]);
goto __end;;
} else {
switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$acc = $__case_1;
$__tco_tmp_0 = $xs;
$__tco_tmp_1 = new Phpurs_Data2("Cons", $x, $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($__global_Data_List_map)(function($h) use ($__global_Data_List_reverse) {
  $__num = func_num_args();
  $__res = (object)["init" => ($__global_Data_List_reverse)(($h)->revInit), "last" => ($h)->last];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($go)($lst, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_unsnoc'] = __NAMESPACE__ . '\\Data_List_unsnoc';

// Data_List_zipWith
function Data_List_zipWith($f, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_zipWith';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($f, $xs, $__fn) { return $__fn($f, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($f, $xs, $__fn) { return $__fn($f, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  $go = (function() use (&$go, $f, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0)->tag === "Nil")) {
$acc = $__case_2;
$__res = $acc;
goto __end;;
} else {
if ((($__case_1)->tag === "Nil")) {
$acc = $__case_2;
$__res = $acc;
goto __end;;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$b = ($__case_1)->v0;
$bs = ($__case_1)->v1;
$acc = $__case_2;
$__tco_tmp_0 = $as;
$__tco_tmp_1 = $bs;
$__tco_tmp_2 = new Phpurs_Data2("Cons", ($f)($a, $b), $acc);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue ;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = ($__global_Data_List_reverse)(($go)($xs, $ys, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_zipWith'] = __NAMESPACE__ . '\\Data_List_zipWith';


// Data_List_zipWithA
function Data_List_zipWithA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_zipWithA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_sequence = ($GLOBALS['Data_List_sequence'] ?? \Data\List\phpurs_eval_thunk('Data_List_sequence'));
  $__global_Data_List_zipWith = ($GLOBALS['Data_List_zipWith'] ?? \Data\List\phpurs_eval_thunk('Data_List_zipWith'));
  $sequence1 = ($__global_Data_List_sequence)($dictApplicative);
  $__res = (function() use ($sequence1, $__global_Data_List_zipWith, &$__fn) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, $__global_Data_List_zipWith, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($f, $xs, &$__fn) { return $__fn($f, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($f, $xs, &$__fn) { return $__fn($f, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($sequence1)(($__global_Data_List_zipWith)($f, $xs, $ys));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_zipWithA'] = __NAMESPACE__ . '\\Data_List_zipWithA';

// Data_List_range
function Data_List_range($start, $end = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_range';
  if ($__num < 2) {
    if ($__num === 1) return function($end) use ($start, $__fn) { return $__fn($start, $end); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $start;
  $__case_1 = $end;
  if (true) {
$start1 = $__case_0;
$end1 = $__case_1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_range'] = __NAMESPACE__ . '\\Data_List_range';

// Data_List_partition
function Data_List_partition($p, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_partition';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($p, $__fn) { return $__fn($p, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_foldr = ($GLOBALS['Data_List_foldr'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldr'));
  $select = (function() use ($p, &$__fn) {
  $__fn = function($x, $v = null) use ($p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($x, &$__fn) { return $__fn($x, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $v;
  if (is_object($__case_1)) {
$x1 = $__case_0;
$no = ($__case_1)->no;
$yes = ($__case_1)->yes;
$__case_0 = ($p)($x1);
switch ($__case_0) {
case true:
$__res = (object)["no" => $no, "yes" => new Phpurs_Data2("Cons", $x1, $yes)];
goto __end;;
break;
default:
$__res = (object)["no" => new Phpurs_Data2("Cons", $x1, $no), "yes" => $yes];
goto __end;;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($__global_Data_List_foldr)($select, (object)["no" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "yes" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))], $xs);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_partition'] = __NAMESPACE__ . '\\Data_List_partition';

// Data_List_null
function Data_List_null($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_null';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = true;
goto __end;;
break;
default:
$__res = false;
goto __end;;
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_null'] = __NAMESPACE__ . '\\Data_List_null';

// Data_List_nubBy
function Data_List_nubBy($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_nubBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Internal_insertAndLookupBy = ($GLOBALS['Data_List_Internal_insertAndLookupBy'] ?? \Data\List\Internal\phpurs_eval_thunk('Data_List_Internal_insertAndLookupBy'));
  $__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  $go = (function() use ($__global_Data_List_Internal_insertAndLookupBy, $p, &$go, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($__global_Data_List_Internal_insertAndLookupBy, $p, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Nil":
$acc = $__case_1;
$__res = $acc;
goto __end;;
break;
case "Cons":
$s = $__case_0;
$acc = $__case_1;
$a = ($__case_2)->v0;
$as = ($__case_2)->v1;
$v3 = ($__global_Data_List_Internal_insertAndLookupBy)($p, $a, $s);
$__case_0 = $v3;
if (is_object($__case_0)) {
$found = ($__case_0)->found;
$s__prime__ = ($__case_0)->result;
$__case_0 = $found;
switch ($__case_0) {
case true:
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = $acc;
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue 3;
break;
default:
$__tco_tmp_0 = $s__prime__;
$__tco_tmp_1 = new Phpurs_Data2("Cons", $a, $acc);
$__tco_tmp_2 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue 3;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = ($__global_Data_List_compose)($__global_Data_List_reverse, ($go)(($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_nubBy'] = __NAMESPACE__ . '\\Data_List_nubBy';

// Data_List_nub
function Data_List_nub($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_nub';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_nubBy = ($GLOBALS['Data_List_nubBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubBy'));
  $__res = ($__global_Data_List_nubBy)(($dictOrd)->compare);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_nub'] = __NAMESPACE__ . '\\Data_List_nub';


// Data_List_mapMaybe
function Data_List_mapMaybe($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  $go = (function() use ($__global_Data_List_reverse, $f, &$go, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_List_reverse, $f, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
$acc = $__case_0;
$__res = ($__global_Data_List_reverse)($acc);
goto __end;;
break;
case "Cons":
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$v2 = ($f)($x);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
case "Just":
$y = ($__case_0)->v0;
$__tco_tmp_0 = new Phpurs_Data2("Cons", $y, $acc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 3;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_mapMaybe'] = __NAMESPACE__ . '\\Data_List_mapMaybe';

// Data_List_manyRec
function Data_List_manyRec($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_manyRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__global_Data_List_bimap = ($GLOBALS['Data_List_bimap'] ?? \Data\List\phpurs_eval_thunk('Data_List_bimap'));
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  $bind1 = ((((($dictMonadRec)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->bind;
  $tailRecM = ($dictMonadRec)->tailRecM;
  $__res = function($dictAlternative) use ($__global_Prim_undefined, $bind1, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM) {
  $__num = func_num_args();
  $Alt0 = (((($dictAlternative)->Plus1)($__global_Prim_undefined))->Alt0)($__global_Prim_undefined);
  $alt = ($Alt0)->alt;
  $map1 = ((($Alt0)->Functor0)($__global_Prim_undefined))->map;
  $pure = ((($dictAlternative)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = function($p) use ($bind1, $alt, $map1, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse, $tailRecM) {
  $__num = func_num_args();
  $go = function($acc) use ($bind1, $alt, $map1, $p, $pure, $__global_Data_Unit_unit, $__global_Data_List_bimap, $__global_Data_List_reverse) {
  $__num = func_num_args();
  $__res = ($bind1)(($alt)(($map1)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Loop", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $p), ($pure)(new Phpurs_Data1("Done", $__global_Data_Unit_unit))), function($aa) use ($pure, $__global_Data_List_bimap, $acc, $__global_Data_List_reverse) {
  $__num = func_num_args();
  $__res = ($pure)(($__global_Data_List_bimap)(function($v) use ($acc) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Cons", $v, $acc);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, function($v) use ($__global_Data_List_reverse, $acc) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_reverse)($acc);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $aa));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($tailRecM)($go, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_manyRec'] = __NAMESPACE__ . '\\Data_List_manyRec';

// Data_List_someRec
function Data_List_someRec($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_someRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_manyRec = ($GLOBALS['Data_List_manyRec'] ?? \Data\List\phpurs_eval_thunk('Data_List_manyRec'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $manyRec1 = ($__global_Data_List_manyRec)($dictMonadRec);
  $__res = function($dictAlternative) use ($__global_Prim_undefined, $manyRec1) {
  $__num = func_num_args();
  $apply = ((((($dictAlternative)->Applicative0)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->apply;
  $map1 = ((((((($dictAlternative)->Plus1)($__global_Prim_undefined))->Alt0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $manyRec2 = ($manyRec1)($dictAlternative);
  $__res = function($v) use ($apply, $map1, $manyRec2) {
  $__num = func_num_args();
  $__res = ($apply)(($map1)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $v), ($manyRec2)($v));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_someRec'] = __NAMESPACE__ . '\\Data_List_someRec';

// Data_List_some
function Data_List_some($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_some';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_many = ($GLOBALS['Data_List_many'] ?? \Data\List\phpurs_eval_thunk('Data_List_many'));
  while (true) {
$apply = ((((($dictAlternative)->Applicative0)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->apply;
$map1 = ((((((($dictAlternative)->Plus1)($__global_Prim_undefined))->Alt0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
$__res = function($dictLazy) use ($apply, $map1, $__global_Data_List_many, $dictAlternative) {
  $__num = func_num_args();
  $defer = ($dictLazy)->defer;
  $__res = function($v) use ($apply, $map1, $defer, $__global_Data_List_many, $dictAlternative, $dictLazy) {
  $__num = func_num_args();
  $__res = ($apply)(($map1)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $v), ($defer)(function($v1) use ($__global_Data_List_many, $dictAlternative, $dictLazy, $v) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_many)($dictAlternative, $dictLazy, $v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_some'] = __NAMESPACE__ . '\\Data_List_some';

// Data_List_many
function Data_List_many($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_many';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_some = ($GLOBALS['Data_List_some'] ?? \Data\List\phpurs_eval_thunk('Data_List_some'));
  while (true) {
$alt = ((((($dictAlternative)->Plus1)($__global_Prim_undefined))->Alt0)($__global_Prim_undefined))->alt;
$pure = ((($dictAlternative)->Applicative0)($__global_Prim_undefined))->pure;
$__res = (function() use ($alt, $__global_Data_List_some, $dictAlternative, $pure, &$__fn) {
  $__fn = function($dictLazy, $v = null) use ($alt, $__global_Data_List_some, $dictAlternative, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($alt)(($__global_Data_List_some)($dictAlternative, $dictLazy, $v), ($pure)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_many'] = __NAMESPACE__ . '\\Data_List_many';


// Data_List_last
function Data_List_last($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_last';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Nil"))) {
$x = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", $x);
goto __end;;
} else {
switch (($__case_0)->tag) {
case "Cons":
$xs = ($__case_0)->v1;
$__tco_tmp_0 = $xs;
$v = $__tco_tmp_0;
continue 2;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_last'] = __NAMESPACE__ . '\\Data_List_last';

// Data_List_insertBy
function Data_List_insertBy($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_insertBy';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_singleton = ($GLOBALS['Data_List_singleton'] ?? \Data\List\phpurs_eval_thunk('Data_List_singleton'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Nil":
$x = $__case_1;
$__res = ($__global_Data_List_singleton)($x);
goto __end;;
break;
case "Cons":
$cmp = $__case_0;
$x = $__case_1;
$ys = $__case_2;
$y = ($__case_2)->v0;
$ys__prime__ = ($__case_2)->v1;
$v3 = ($cmp)($x, $y);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "GT":
$__res = new Phpurs_Data2("Cons", $y, \Data\List\Data_List_insertBy($cmp, $x, $ys__prime__));
goto __end;;
break;
default:
$__res = new Phpurs_Data2("Cons", $x, $ys);
goto __end;;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_insertBy'] = __NAMESPACE__ . '\\Data_List_insertBy';

// Data_List_insertAt
function Data_List_insertAt($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_insertAt';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if (($__case_0 === 0)) {
$x = $__case_1;
$xs = $__case_2;
$__res = new Phpurs_Data1("Just", new Phpurs_Data2("Cons", $x, $xs));
goto __end;;
} else {
switch (($__case_2)->tag) {
case "Cons":
$n = $__case_0;
$x = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
$__res = ($__global_Data_List_map)(function($v3) use ($y) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Cons", $y, $v3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, \Data\List\Data_List_insertAt(($n - 1), $x, $ys));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_insertAt'] = __NAMESPACE__ . '\\Data_List_insertAt';

// Data_List_insert
function Data_List_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_insertBy = ($GLOBALS['Data_List_insertBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_insertBy'));
  $__res = ($__global_Data_List_insertBy)(($dictOrd)->compare);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_insert'] = __NAMESPACE__ . '\\Data_List_insert';

// Data_List_init
function Data_List_init($lst) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_init';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
  $__global_Data_List_unsnoc = ($GLOBALS['Data_List_unsnoc'] ?? \Data\List\phpurs_eval_thunk('Data_List_unsnoc'));
  $__res = ($__global_Data_List_map)(function($v) {
  $__num = func_num_args();
  $__res = ($v)->init;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_List_unsnoc)($lst));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_init'] = __NAMESPACE__ . '\\Data_List_init';

// Data_List_index
function Data_List_index($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_index';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
} else {
if (((($__case_0)->tag === "Cons") && ($__case_1 === 0))) {
$a = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", $a);
goto __end;;
} else {
switch (($__case_0)->tag) {
case "Cons":
$as = ($__case_0)->v1;
$i = $__case_1;
$__tco_tmp_0 = $as;
$__tco_tmp_1 = ($i - 1);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_index'] = __NAMESPACE__ . '\\Data_List_index';

// Data_List_head
function Data_List_head($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", $x);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_head'] = __NAMESPACE__ . '\\Data_List_head';

// Data_List_transpose
function Data_List_transpose($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_transpose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_mapMaybe = ($GLOBALS['Data_List_mapMaybe'] ?? \Data\List\phpurs_eval_thunk('Data_List_mapMaybe'));
  $__global_Data_List_head = ($GLOBALS['Data_List_head'] ?? \Data\List\phpurs_eval_thunk('Data_List_head'));
  $__global_Data_List_tail = ($GLOBALS['Data_List_tail'] ?? \Data\List\phpurs_eval_thunk('Data_List_tail'));
  while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v0)->tag === "Nil"))) {
$xss = ($__case_0)->v1;
$__tco_tmp_0 = $xss;
$v = $__tco_tmp_0;
continue ;
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v0)->tag === "Cons"))) {
$x = (($__case_0)->v0)->v0;
$xs = (($__case_0)->v0)->v1;
$xss = ($__case_0)->v1;
$__res = new Phpurs_Data2("Cons", new Phpurs_Data2("Cons", $x, ($__global_Data_List_mapMaybe)($__global_Data_List_head, $xss)), \Data\List\Data_List_transpose(new Phpurs_Data2("Cons", $xs, ($__global_Data_List_mapMaybe)($__global_Data_List_tail, $xss))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_transpose'] = __NAMESPACE__ . '\\Data_List_transpose';

// Data_List_groupBy
function Data_List_groupBy($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_groupBy';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_span = ($GLOBALS['Data_List_span'] ?? \Data\List\phpurs_eval_thunk('Data_List_span'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$eq2 = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$v2 = ($__global_Data_List_span)(($eq2)($x), $xs);
$__case_0 = $v2;
if (is_object($__case_0)) {
$ys = ($__case_0)->init;
$zs = ($__case_0)->rest;
$__res = new Phpurs_Data2("Cons", new Phpurs_Data2("NonEmpty", $x, $ys), \Data\List\Data_List_groupBy($eq2, $zs));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_groupBy'] = __NAMESPACE__ . '\\Data_List_groupBy';

// Data_List_groupAllBy
function Data_List_groupAllBy($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_groupAllBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
  $__global_Data_List_groupBy = ($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy'));
  $__global_Data_List_eq = ($GLOBALS['Data_List_eq'] ?? \Data\List\phpurs_eval_thunk('Data_List_eq'));
  $__global_Data_List_sortBy = ($GLOBALS['Data_List_sortBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_sortBy'));
  $__res = ($__global_Data_List_compose)(($__global_Data_List_groupBy)((function() use ($__global_Data_List_eq, $p, &$__fn) {
  $__fn = function($x, $y = null) use ($__global_Data_List_eq, $p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_List_eq)(($p)($x, $y), ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ")));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), ($__global_Data_List_sortBy)($p));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_groupAllBy'] = __NAMESPACE__ . '\\Data_List_groupAllBy';

// Data_List_group
function Data_List_group($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_groupBy = ($GLOBALS['Data_List_groupBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_groupBy'));
  $__res = ($__global_Data_List_groupBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_group'] = __NAMESPACE__ . '\\Data_List_group';

// Data_List_groupAll
function Data_List_groupAll($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_groupAll';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
  $__global_Data_List_group = ($GLOBALS['Data_List_group'] ?? \Data\List\phpurs_eval_thunk('Data_List_group'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_sort = ($GLOBALS['Data_List_sort'] ?? \Data\List\phpurs_eval_thunk('Data_List_sort'));
  $__res = ($__global_Data_List_compose)(($__global_Data_List_group)((($dictOrd)->Eq0)($__global_Prim_undefined)), ($__global_Data_List_sort)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_groupAll'] = __NAMESPACE__ . '\\Data_List_groupAll';

// Data_List_fromFoldable
function Data_List_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (($dictFoldable)->foldr)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_fromFoldable'] = __NAMESPACE__ . '\\Data_List_fromFoldable';

// Data_List_foldM
function Data_List_foldM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_foldM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  while (true) {
$pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
$bind1 = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$__res = (function() use ($pure, $bind1, $dictMonad, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($pure, $bind1, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_foldM = ($GLOBALS['Data_List_foldM'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldM'));
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  switch (($__case_2)->tag) {
case "Nil":
$b = $__case_1;
$__res = ($pure)($b);
goto __end;;
break;
case "Cons":
$f = $__case_0;
$b = $__case_1;
$a = ($__case_2)->v0;
$as = ($__case_2)->v1;
$__res = ($bind1)(($f)($b, $a), function($b__prime__) use ($__global_Data_List_foldM, $dictMonad, $f, $as) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_foldM)($dictMonad, $f, $b__prime__, $as);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_foldM'] = __NAMESPACE__ . '\\Data_List_foldM';

// Data_List_findIndex
function Data_List_findIndex($fn) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_findIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $go = (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Cons":
$n = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_findIndex'] = __NAMESPACE__ . '\\Data_List_findIndex';

// Data_List_findLastIndex
function Data_List_findLastIndex($fn, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_findLastIndex';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($fn, $__fn) { return $__fn($fn, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
  $__global_Data_List_length = ($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length'));
  $__global_Data_List_findIndex = ($GLOBALS['Data_List_findIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findIndex'));
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  $__res = ($__global_Data_List_map)(function($v) use ($__global_Data_List_length, $xs) {
  $__num = func_num_args();
  $__res = ((($__global_Data_List_length)($xs) - 1) - $v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_List_findIndex)($fn, ($__global_Data_List_reverse)($xs)));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_findLastIndex'] = __NAMESPACE__ . '\\Data_List_findLastIndex';

// Data_List_filterM
function Data_List_filterM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_filterM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  while (true) {
$pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
$bind1 = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$__res = (function() use ($pure, $bind1, $dictMonad, &$__fn) {
  $__fn = function($v, $v1 = null) use ($pure, $bind1, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_filterM = ($GLOBALS['Data_List_filterM'] ?? \Data\List\phpurs_eval_thunk('Data_List_filterM'));
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Nil":
$__res = ($pure)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
goto __end;;
break;
case "Cons":
$p = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$__res = ($bind1)(($p)($x), function($b) use ($bind1, $__global_Data_List_filterM, $dictMonad, $p, $xs, $pure, $x) {
  $__num = func_num_args();
  $__res = ($bind1)(($__global_Data_List_filterM)($dictMonad, $p, $xs), function($xs__prime__) use ($pure, $b, $x) {
  $__num = func_num_args();
  $__case_0 = $b;
  $__case_res_0 = null;
  switch ($__case_0) {
case true:
$__case_res_0 = new Phpurs_Data2("Cons", $x, $xs__prime__);
break;
default:
$__case_res_0 = $xs__prime__;
break;
};
  $__res = ($pure)($__case_res_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_filterM'] = __NAMESPACE__ . '\\Data_List_filterM';

// Data_List_filter
function Data_List_filter($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  $go = (function() use ($__global_Data_List_reverse, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_List_reverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
$acc = $__case_0;
$__res = ($__global_Data_List_reverse)($acc);
goto __end;;
break;
case "Cons":
$acc = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_filter'] = __NAMESPACE__ . '\\Data_List_filter';

// Data_List_intersectBy
function Data_List_intersectBy($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_intersectBy';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_filter = ($GLOBALS['Data_List_filter'] ?? \Data\List\phpurs_eval_thunk('Data_List_filter'));
  $__global_Data_List_any = ($GLOBALS['Data_List_any'] ?? \Data\List\phpurs_eval_thunk('Data_List_any'));
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  if ((($__case_1)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
} else {
switch (($__case_2)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
default:
$eq2 = $__case_0;
$xs = $__case_1;
$ys = $__case_2;
$__res = ($__global_Data_List_filter)(function($x) use ($__global_Data_List_any, $eq2, $ys) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_any)(($eq2)($x), $ys);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $xs);
goto __end;;
break;
};
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_intersectBy'] = __NAMESPACE__ . '\\Data_List_intersectBy';

// Data_List_intersect
function Data_List_intersect($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_intersect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_intersectBy = ($GLOBALS['Data_List_intersectBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_intersectBy'));
  $__res = ($__global_Data_List_intersectBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_intersect'] = __NAMESPACE__ . '\\Data_List_intersect';

// Data_List_nubByEq
function Data_List_nubByEq($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_nubByEq';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_filter = ($GLOBALS['Data_List_filter'] ?? \Data\List\phpurs_eval_thunk('Data_List_filter'));
  $__global_Data_HeytingAlgebra_boolNot = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
switch (($__case_1)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$eq__prime__ = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$__res = new Phpurs_Data2("Cons", $x, \Data\List\Data_List_nubByEq($eq__prime__, ($__global_Data_List_filter)(function($y) use ($__global_Data_HeytingAlgebra_boolNot, $eq__prime__, $x) {
  $__num = func_num_args();
  $__res = ($__global_Data_HeytingAlgebra_boolNot)(($eq__prime__)($x, $y));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $xs)));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_nubByEq'] = __NAMESPACE__ . '\\Data_List_nubByEq';

// Data_List_nubEq
function Data_List_nubEq($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_nubEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_nubByEq = ($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq'));
  $__res = ($__global_Data_List_nubByEq)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_nubEq'] = __NAMESPACE__ . '\\Data_List_nubEq';

// Data_List_eqPattern
function Data_List_eqPattern($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_eqPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Types_eqList = ($GLOBALS['Data_List_Types_eqList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eqList'));
  $eq2 = (($__global_Data_List_Types_eqList)($dictEq))->eq;
  $__res = (object)["eq" => (function() use ($eq2, &$__fn) {
  $__fn = function($x, $y = null) use ($eq2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (true) {
$l = $__case_0;
$r = $__case_1;
$__res = ($eq2)($l, $r);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_eqPattern'] = __NAMESPACE__ . '\\Data_List_eqPattern';

// Data_List_ordPattern
function Data_List_ordPattern($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ordPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Types_ordList = ($GLOBALS['Data_List_Types_ordList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ordList'));
  $__global_Data_List_eqPattern = ($GLOBALS['Data_List_eqPattern'] ?? \Data\List\phpurs_eval_thunk('Data_List_eqPattern'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $compare = (($__global_Data_List_Types_ordList)($dictOrd))->compare;
  $eqPattern1 = ($__global_Data_List_eqPattern)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare, &$__fn) {
  $__fn = function($x, $y = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (true) {
$l = $__case_0;
$r = $__case_1;
$__res = ($compare)($l, $r);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) use ($eqPattern1) {
  $__num = func_num_args();
  $__res = $eqPattern1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ordPattern'] = __NAMESPACE__ . '\\Data_List_ordPattern';

// Data_List_elemLastIndex
function Data_List_elemLastIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_elemLastIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_findLastIndex = ($GLOBALS['Data_List_findLastIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findLastIndex'));
  $eq2 = ($dictEq)->eq;
  $__res = function($x) use ($__global_Data_List_findLastIndex, $eq2) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_findLastIndex)(function($v) use ($eq2, $x) {
  $__num = func_num_args();
  $__res = ($eq2)($v, $x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_elemLastIndex'] = __NAMESPACE__ . '\\Data_List_elemLastIndex';

// Data_List_elemIndex
function Data_List_elemIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_elemIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_findIndex = ($GLOBALS['Data_List_findIndex'] ?? \Data\List\phpurs_eval_thunk('Data_List_findIndex'));
  $eq2 = ($dictEq)->eq;
  $__res = function($x) use ($__global_Data_List_findIndex, $eq2) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_findIndex)(function($v) use ($eq2, $x) {
  $__num = func_num_args();
  $__res = ($eq2)($v, $x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_elemIndex'] = __NAMESPACE__ . '\\Data_List_elemIndex';

// Data_List_dropWhile
function Data_List_dropWhile($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_dropWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $go = function($v) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$xs = $__case_0;
$__res = $xs;
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_dropWhile'] = __NAMESPACE__ . '\\Data_List_dropWhile';

// Data_List_dropEnd
function Data_List_dropEnd($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_dropEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_take = ($GLOBALS['Data_List_take'] ?? \Data\List\phpurs_eval_thunk('Data_List_take'));
  $__global_Data_List_length = ($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length'));
  $__res = ($__global_Data_List_take)((($__global_Data_List_length)($xs) - $n), $xs);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_dropEnd'] = __NAMESPACE__ . '\\Data_List_dropEnd';

// Data_List_drop
function Data_List_drop($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_drop';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (true) {
$n = $__case_0;
$xs = $__case_1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$n = $__case_0;
$xs = ($__case_1)->v1;
$__tco_tmp_0 = ($n - 1);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_drop'] = __NAMESPACE__ . '\\Data_List_drop';

// Data_List_slice
function Data_List_slice($start, $end = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_slice';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($start, $end, $__fn) { return $__fn($start, $end, $xs); };
    if ($__num === 1) return function($end, $xs = null) use ($start, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($start, $end, $xs);
      if ($__num2 === 1) return function($xs) use ($start, $end, $__fn) { return $__fn($start, $end, $xs); };
      return phpurs_curry_fallback($__fn, [$start], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_take = ($GLOBALS['Data_List_take'] ?? \Data\List\phpurs_eval_thunk('Data_List_take'));
  $__global_Data_List_drop = ($GLOBALS['Data_List_drop'] ?? \Data\List\phpurs_eval_thunk('Data_List_drop'));
  $__res = ($__global_Data_List_take)(($end - $start), ($__global_Data_List_drop)($start, $xs));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_slice'] = __NAMESPACE__ . '\\Data_List_slice';

// Data_List_takeEnd
function Data_List_takeEnd($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_takeEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_drop = ($GLOBALS['Data_List_drop'] ?? \Data\List\phpurs_eval_thunk('Data_List_drop'));
  $__global_Data_List_length = ($GLOBALS['Data_List_length'] ?? \Data\List\phpurs_eval_thunk('Data_List_length'));
  $__res = ($__global_Data_List_drop)((($__global_Data_List_length)($xs) - $n), $xs);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_takeEnd'] = __NAMESPACE__ . '\\Data_List_takeEnd';

// Data_List_deleteBy
function Data_List_deleteBy($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_deleteBy';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch (($__case_2)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$eq__prime__ = $__case_0;
$x = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
case "Cons":
$eq__prime__ = $__case_0;
$x = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
$__res = new Phpurs_Data2("Cons", $y, \Data\List\Data_List_deleteBy($eq__prime__, $x, $ys));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_deleteBy'] = __NAMESPACE__ . '\\Data_List_deleteBy';

// Data_List_unionBy
function Data_List_unionBy($eq2, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_unionBy';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($eq2, $xs, $__fn) { return $__fn($eq2, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($eq2, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq2, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($eq2, $xs, $__fn) { return $__fn($eq2, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$eq2], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_append1 = ($GLOBALS['Data_List_append1'] ?? \Data\List\phpurs_eval_thunk('Data_List_append1'));
  $__global_Data_List_foldl = ($GLOBALS['Data_List_foldl'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldl'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_List_deleteBy = ($GLOBALS['Data_List_deleteBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteBy'));
  $__global_Data_List_nubByEq = ($GLOBALS['Data_List_nubByEq'] ?? \Data\List\phpurs_eval_thunk('Data_List_nubByEq'));
  $__res = ($__global_Data_List_append1)($xs, ($__global_Data_List_foldl)(($__global_Data_Function_flip)(($__global_Data_List_deleteBy)($eq2)), ($__global_Data_List_nubByEq)($eq2, $ys), $xs));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_unionBy'] = __NAMESPACE__ . '\\Data_List_unionBy';

// Data_List_union
function Data_List_union($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_unionBy = ($GLOBALS['Data_List_unionBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_unionBy'));
  $__res = ($__global_Data_List_unionBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_union'] = __NAMESPACE__ . '\\Data_List_union';

// Data_List_deleteAt
function Data_List_deleteAt($v, $v1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_deleteAt';
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, $__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->v1;
$__res = new Phpurs_Data1("Just", $ys);
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Cons":
$n = $__case_0;
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
$__res = ($__global_Data_List_map)(function($v2) use ($y) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Cons", $y, $v2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, \Data\List\Data_List_deleteAt(($n - 1), $ys));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_deleteAt'] = __NAMESPACE__ . '\\Data_List_deleteAt';

// Data_List_delete
function Data_List_delete($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_deleteBy = ($GLOBALS['Data_List_deleteBy'] ?? \Data\List\phpurs_eval_thunk('Data_List_deleteBy'));
  $__res = ($__global_Data_List_deleteBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_delete'] = __NAMESPACE__ . '\\Data_List_delete';

// Data_List_difference
function Data_List_difference($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_foldl = ($GLOBALS['Data_List_foldl'] ?? \Data\List\phpurs_eval_thunk('Data_List_foldl'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_List_delete = ($GLOBALS['Data_List_delete'] ?? \Data\List\phpurs_eval_thunk('Data_List_delete'));
  $__res = ($__global_Data_List_foldl)(($__global_Data_Function_flip)(($__global_Data_List_delete)($dictEq)));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_difference'] = __NAMESPACE__ . '\\Data_List_difference';


// Data_List_concat
function Data_List_concat($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_concat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_bind = ($GLOBALS['Data_List_bind'] ?? \Data\List\phpurs_eval_thunk('Data_List_bind'));
  $__global_Data_List_identity = ($GLOBALS['Data_List_identity'] ?? \Data\List\phpurs_eval_thunk('Data_List_identity'));
  $__res = ($__global_Data_List_bind)($v, $__global_Data_List_identity);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_concat'] = __NAMESPACE__ . '\\Data_List_concat';


// Data_List_alterAt
function Data_List_alterAt($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_alterAt';
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, $__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_map = ($GLOBALS['Data_List_map'] ?? \Data\List\phpurs_eval_thunk('Data_List_map'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
if ((($__case_0 === 0) && (($__case_2)->tag === "Cons"))) {
$f = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
$v3 = ($f)($y);
$__case_0 = $v3;
$__case_res_0 = null;
switch (($__case_0)->tag) {
case "Nothing":
$__case_res_0 = $ys;
break;
case "Just":
$y__prime__ = ($__case_0)->v0;
$__case_res_0 = new Phpurs_Data2("Cons", $y__prime__, $ys);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
$__res = new Phpurs_Data1("Just", $__case_res_0);
goto __end;;
} else {
switch (($__case_2)->tag) {
case "Cons":
$n = $__case_0;
$f = $__case_1;
$y = ($__case_2)->v0;
$ys = ($__case_2)->v1;
$__res = ($__global_Data_List_map)(function($v3) use ($y) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Cons", $y, $v3);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, \Data\List\Data_List_alterAt(($n - 1), $f, $ys));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_alterAt'] = __NAMESPACE__ . '\\Data_List_alterAt';

// Data_List_modifyAt
function Data_List_modifyAt($n, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_modifyAt';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($n, $__fn) { return $__fn($n, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_alterAt = ($GLOBALS['Data_List_alterAt'] ?? \Data\List\phpurs_eval_thunk('Data_List_alterAt'));
  $__global_Data_List_compose = ($GLOBALS['Data_List_compose'] ?? \Data\List\phpurs_eval_thunk('Data_List_compose'));
  $__res = ($__global_Data_List_alterAt)($n, ($__global_Data_List_compose)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $f));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_modifyAt'] = __NAMESPACE__ . '\\Data_List_modifyAt';

