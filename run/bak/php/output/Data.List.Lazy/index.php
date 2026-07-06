<?php

namespace Data\List\Lazy;

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
      case 'Data_List_Lazy_apply': $v = (($GLOBALS['Data_Lazy_applyLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applyLazy')))->apply; break;
      case 'Data_List_Lazy_map': $v = (($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy')))->map; break;
      case 'Data_List_Lazy_unwrap': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_List_Lazy_sequence': $v = (($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableList')))->sequence; break;
      case 'Data_List_Lazy_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_List_Lazy_foldr': $v = (($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')))->foldr; break;
      case 'Data_List_Lazy_map1': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_List_Lazy_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_List_Lazy_lessThanOrEq': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_Lazy_tailRecM2': $v = \Control\Monad\Rec\Class\Control_Monad_Rec_Class_tailRecM2(($GLOBALS['Control_Monad_Rec_Class_monadRecMaybe'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_monadRecMaybe'))); break;
      case 'Data_List_Lazy_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_List_Lazy_defer': $v = (($GLOBALS['Data_List_Lazy_Types_lazyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_lazyList')))->defer; break;
      case 'Data_List_Lazy_foldl': $v = (($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')))->foldl; break;
      case 'Data_List_Lazy_lessThan': $v = \Data\Ord\Data_Ord_lessThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_Lazy_one': $v = 1; break;
      case 'Data_List_Lazy_fix': $v = \Control\Lazy\Control_Lazy_fix(($GLOBALS['Data_List_Lazy_Types_lazyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_lazyList'))); break;
      case 'Data_List_Lazy_greaterThan': $v = \Data\Ord\Data_Ord_greaterThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_Lazy_greaterThanOrEq': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_List_Lazy_unfoldr': $v = (($GLOBALS['Data_List_Lazy_Types_unfoldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unfoldableList')))->unfoldr; break;
      case 'Data_List_Lazy_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_List_Lazy_map2': $v = (($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList')))->map; break;
      case 'Data_List_Lazy_bind': $v = (($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe')))->bind; break;
      case 'Data_List_Lazy_pure': $v = ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')); break;
      case 'Data_List_Lazy_any': $v = \Data\Foldable\Data_Foldable_any(($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')), ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'))); break;
      case 'Data_List_Lazy_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_List_Lazy_append1': $v = (($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList')))->append; break;
      case 'Data_List_Lazy_bind1': $v = (($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindList')))->bind; break;
      case 'Data_List_Lazy_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_List_Lazy_zip': $v = \Data\List\Lazy\Data_List_Lazy_zipWith((function() use (&$__fn) {
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
      case 'Data_List_Lazy_unzip': $v = (($GLOBALS['Data_List_Lazy_foldr'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldr')))(function($v) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__res = function($v1) use ($__global_Data_List_Lazy_Types_cons, $a, $b) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$as = ($__case_0)->v0;
$bs = ($__case_0)->v1;
$__res = new Phpurs_Data2("Tuple", ($__global_Data_List_Lazy_Types_cons)($a, $as), ($__global_Data_List_Lazy_Types_cons)($b, $bs));
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
}, new Phpurs_Data2("Tuple", ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')))); break;
      case 'Data_List_Lazy_null': $v = (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))(($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing')), "\\Data\\List\\Lazy\\Data_List_Lazy_uncons"); break;
      case 'Data_List_Lazy_newtypePattern': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_length': $v = (($GLOBALS['Data_List_Lazy_foldl'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldl')))((function() use (&$__fn) {
  $__fn = function($l, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($l, &$__fn) { return $__fn($l, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($l + 1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), 0); break;
      case 'Data_List_Lazy_last': $v = (function() use (&$__fn) {
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
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))($go, ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')));
})(); break;
      case 'Data_List_Lazy_init': $v = (function() use (&$__fn) {
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
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
return (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))($go, ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step')));
})(); break;
      case 'Data_List_Lazy_fromStep': $v = (($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose')))("\\Data\\List\\Lazy\\Types\\Data_List_Lazy_Types_List", (($GLOBALS['Data_Lazy_applicativeLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applicativeLazy')))->pure); break;
      case 'Data_List_Lazy_concatMap': $v = \Data\Function\Data_Function_flip(($GLOBALS['Data_List_Lazy_bind1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_bind1'))); break;
      case 'Data_List_Lazy_catMaybes': $v = \Data\List\Lazy\Data_List_Lazy_mapMaybe(($GLOBALS['Data_List_Lazy_identity'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_identity'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






























// Data_List_Lazy_Pattern
function Data_List_Lazy_Pattern($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Pattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Pattern'] = __NAMESPACE__ . '\\Data_List_Lazy_Pattern';

// Data_List_Lazy_zipWith
function Data_List_Lazy_zipWith($f, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_zipWith';
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
  $__global_Data_List_Lazy_apply = ($GLOBALS['Data_List_Lazy_apply'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_apply'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = (function() use ($f, &$__fn) {
  $__fn = function($v, $v1 = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_zipWith = ($GLOBALS['Data_List_Lazy_zipWith'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_zipWith'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if ((($__case_0)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
} else {
if ((($__case_1)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$b = ($__case_1)->v0;
$bs = ($__case_1)->v1;
$__res = new Phpurs_Data2("Cons", ($f)($a, $b), ($__global_Data_List_Lazy_zipWith)($f, $as, $bs));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__res = ($__global_Data_List_Lazy_apply)(($__global_Data_List_Lazy_map)($go, ($__global_Data_List_Lazy_unwrap)($xs)), ($__global_Data_List_Lazy_unwrap)($ys));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_zipWith'] = __NAMESPACE__ . '\\Data_List_Lazy_zipWith';

// Data_List_Lazy_zipWithA
function Data_List_Lazy_zipWithA($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_zipWithA';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_sequence = ($GLOBALS['Data_List_Lazy_sequence'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_sequence'));
  $__global_Data_List_Lazy_zipWith = ($GLOBALS['Data_List_Lazy_zipWith'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_zipWith'));
  $sequence1 = ($__global_Data_List_Lazy_sequence)($dictApplicative);
  $__res = (function() use ($sequence1, $__global_Data_List_Lazy_zipWith, &$__fn) {
  $__fn = function($f, $xs = null, $ys = null) use ($sequence1, $__global_Data_List_Lazy_zipWith, &$__fn) {
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
  $__res = ($sequence1)(($__global_Data_List_Lazy_zipWith)($f, $xs, $ys));
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
$GLOBALS['Data_List_Lazy_zipWithA'] = __NAMESPACE__ . '\\Data_List_Lazy_zipWithA';


// Data_List_Lazy_updateAt
function Data_List_Lazy_updateAt($n, $x = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_updateAt';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($n, $x, $__fn) { return $__fn($n, $x, $xs); };
    if ($__num === 1) return function($x, $xs = null) use ($n, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($n, $x, $xs);
      if ($__num2 === 1) return function($xs) use ($n, $x, $__fn) { return $__fn($n, $x, $xs); };
      return phpurs_curry_fallback($__fn, [$n], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = (function() use ($x, &$__fn) {
  $__fn = function($v, $v1 = null) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_updateAt = ($GLOBALS['Data_List_Lazy_updateAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_updateAt'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if ((($__case_1)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
} else {
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->v1;
$__res = new Phpurs_Data2("Cons", $x, $ys);
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Cons":
$n__prime__ = $__case_0;
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
$__res = new Phpurs_Data2("Cons", $y, ($__global_Data_List_Lazy_updateAt)(($n__prime__ - 1), $x, $ys));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__res = ($__global_Data_List_Lazy_map)(($go)($n), ($__global_Data_List_Lazy_unwrap)($xs));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_updateAt'] = __NAMESPACE__ . '\\Data_List_Lazy_updateAt';


// Data_List_Lazy_uncons
function Data_List_Lazy_uncons($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $v = ($__global_Data_List_Lazy_Types_step)($xs);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$__res = new Phpurs_Data1("Just", (object)["head" => $x, "tail" => $xs__prime__]);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_uncons'] = __NAMESPACE__ . '\\Data_List_Lazy_uncons';

// Data_List_Lazy_toUnfoldable
function Data_List_Lazy_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_map1 = ($GLOBALS['Data_List_Lazy_map1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map1'));
  $__global_Data_List_Lazy_uncons = ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'));
  $__res = (($dictUnfoldable)->unfoldr)(function($xs) use ($__global_Data_List_Lazy_map1, $__global_Data_List_Lazy_uncons) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_map1)(function($rec) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($rec)->head, ($rec)->tail);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_List_Lazy_uncons)($xs));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_toUnfoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_toUnfoldable';

// Data_List_Lazy_takeWhile
function Data_List_Lazy_takeWhile($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_takeWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_compose = ($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose'));
  $__global_Data_List_Lazy_Types_List = ($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($__global_Data_List_Lazy_compose)($__global_Data_List_Lazy_Types_List, ($__global_Data_List_Lazy_compose)(($__global_Data_List_Lazy_map)($go), $__global_Data_List_Lazy_unwrap));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_takeWhile'] = __NAMESPACE__ . '\\Data_List_Lazy_takeWhile';

// Data_List_Lazy_take
function Data_List_Lazy_take($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_take';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_lessThanOrEq = ($GLOBALS['Data_List_Lazy_lessThanOrEq'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_lessThanOrEq'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__global_Data_List_Lazy_compose = ($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose'));
  $__global_Data_List_Lazy_Types_List = ($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_take = ($GLOBALS['Data_List_Lazy_take'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_take'));
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$n__prime__ = $__case_0;
$x = ($__case_1)->v0;
$xs = ($__case_1)->v1;
$__res = new Phpurs_Data2("Cons", $x, ($__global_Data_List_Lazy_take)(($n__prime__ - 1), $xs));
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
$__case_0 = ($__global_Data_List_Lazy_lessThanOrEq)($n, 0);
switch ($__case_0) {
case true:
$__res = ($__global_Data_Function_const)($__global_Data_List_Lazy_Types_nil);
goto __end;;
break;
default:
$__res = ($__global_Data_List_Lazy_compose)($__global_Data_List_Lazy_Types_List, ($__global_Data_List_Lazy_compose)(($__global_Data_List_Lazy_map)(($go)($n)), $__global_Data_List_Lazy_unwrap));
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_take'] = __NAMESPACE__ . '\\Data_List_Lazy_take';

// Data_List_Lazy_tail
function Data_List_Lazy_tail($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_map1 = ($GLOBALS['Data_List_Lazy_map1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map1'));
  $__global_Data_List_Lazy_uncons = ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'));
  $__res = ($__global_Data_List_Lazy_map1)(function($v) {
  $__num = func_num_args();
  $__res = ($v)->tail;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_List_Lazy_uncons)($xs));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_tail'] = __NAMESPACE__ . '\\Data_List_Lazy_tail';

// Data_List_Lazy_stripPrefix
function Data_List_Lazy_stripPrefix($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_stripPrefix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_tailRecM2 = ($GLOBALS['Data_List_Lazy_tailRecM2'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_tailRecM2'));
  $eq = ($dictEq)->eq;
  $__res = (function() use ($__global_Data_List_Lazy_Types_step, $__global_Data_List_Lazy_tailRecM2, &$__fn) {
  $__fn = function($v, $s = null) use ($__global_Data_List_Lazy_Types_step, $__global_Data_List_Lazy_tailRecM2, &$__fn) {
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
$go = (function() use ($__global_Data_List_Lazy_Types_step, &$__fn) {
  $__fn = function($prefix, $input = null) use ($__global_Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($input) use ($prefix, &$__fn) { return $__fn($prefix, $input); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $v1 = ($__global_Data_List_Lazy_Types_step)($prefix);
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Nil":
$__res = new Phpurs_Data1("Just", new Phpurs_Data1("Done", $input));
goto __end;;
break;
case "Cons":
$p = ($__case_0)->v0;
$ps = ($__case_0)->v1;
$v2 = ($__global_Data_List_Lazy_Types_step)($input);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Cons":
$i = ($__case_0)->v0;
$is = ($__case_0)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
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
$__res = ($__global_Data_List_Lazy_tailRecM2)($go, $p__prime__, $s1);
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
$GLOBALS['Data_List_Lazy_stripPrefix'] = __NAMESPACE__ . '\\Data_List_Lazy_stripPrefix';

// Data_List_Lazy_span
function Data_List_Lazy_span($p, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_span';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($p, $__fn) { return $__fn($p, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_uncons = ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  while (true) {
$v = ($__global_Data_List_Lazy_uncons)($xs);
$__case_0 = $v;
if (((($__case_0)->tag === "Just") && is_object(($__case_0)->v0))) {
$x = (($__case_0)->v0)->head;
$xs__prime__ = (($__case_0)->v0)->tail;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
if (true) {
$__res = (object)["init" => $__global_Data_List_Lazy_Types_nil, "rest" => $xs];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_span'] = __NAMESPACE__ . '\\Data_List_Lazy_span';

// Data_List_Lazy_snoc
function Data_List_Lazy_snoc($xs, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_snoc';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($xs, $__fn) { return $__fn($xs, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_foldr = ($GLOBALS['Data_List_Lazy_foldr'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldr'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__res = ($__global_Data_List_Lazy_foldr)($__global_Data_List_Lazy_Types_cons, ($__global_Data_List_Lazy_Types_cons)($x, $__global_Data_List_Lazy_Types_nil), $xs);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_snoc'] = __NAMESPACE__ . '\\Data_List_Lazy_snoc';

// Data_List_Lazy_singleton
function Data_List_Lazy_singleton($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__res = ($__global_Data_List_Lazy_Types_cons)($a, $__global_Data_List_Lazy_Types_nil);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_singleton'] = __NAMESPACE__ . '\\Data_List_Lazy_singleton';

// Data_List_Lazy_showPattern
function Data_List_Lazy_showPattern($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_showPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_showList = ($GLOBALS['Data_List_Lazy_Types_showList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_showList'));
  $show = (($__global_Data_List_Lazy_Types_showList)($dictShow))->show;
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
$GLOBALS['Data_List_Lazy_showPattern'] = __NAMESPACE__ . '\\Data_List_Lazy_showPattern';

// Data_List_Lazy_scanlLazy
function Data_List_Lazy_scanlLazy($f, $acc = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_scanlLazy';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $acc, $__fn) { return $__fn($f, $acc, $xs); };
    if ($__num === 1) return function($acc, $xs = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $acc, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $acc, $__fn) { return $__fn($f, $acc, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = function($v) use ($f, $acc) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_scanlLazy = ($GLOBALS['Data_List_Lazy_scanlLazy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_scanlLazy'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$acc__prime__ = ($f)($acc, $x);
$__res = new Phpurs_Data2("Cons", $acc__prime__, ($__global_Data_List_Lazy_scanlLazy)($f, $acc__prime__, $xs__prime__));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($__global_Data_List_Lazy_map)($go, ($__global_Data_List_Lazy_unwrap)($xs));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_scanlLazy'] = __NAMESPACE__ . '\\Data_List_Lazy_scanlLazy';

// Data_List_Lazy_reverse
function Data_List_Lazy_reverse($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_reverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_defer = ($GLOBALS['Data_List_Lazy_defer'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_defer'));
  $__global_Data_List_Lazy_foldl = ($GLOBALS['Data_List_Lazy_foldl'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldl'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__res = ($__global_Data_List_Lazy_defer)(function($v) use ($__global_Data_List_Lazy_foldl, $__global_Data_Function_flip, $__global_Data_List_Lazy_Types_cons, $__global_Data_List_Lazy_Types_nil, $xs) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_foldl)(($__global_Data_Function_flip)($__global_Data_List_Lazy_Types_cons), $__global_Data_List_Lazy_Types_nil, $xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_reverse'] = __NAMESPACE__ . '\\Data_List_Lazy_reverse';

// Data_List_Lazy_replicateM
function Data_List_Lazy_replicateM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_replicateM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  while (true) {
$pure1 = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
$bind2 = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$__res = (function() use (&$__fn) {
  $__fn = function($n, $m = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($n, &$__fn) { return $__fn($n, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $n;
  $__case_1 = $m;
  if (true) {
$n1 = $__case_0;
$m1 = $__case_1;
$__res = "/* Unsupported: Guards not supported */";
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
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_replicateM'] = __NAMESPACE__ . '\\Data_List_Lazy_replicateM';

// Data_List_Lazy_repeat
function Data_List_Lazy_repeat($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_repeat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_fix = ($GLOBALS['Data_List_Lazy_fix'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fix'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__res = ($__global_Data_List_Lazy_fix)(function($xs) use ($__global_Data_List_Lazy_Types_cons, $x) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_Types_cons)($x, $xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_repeat'] = __NAMESPACE__ . '\\Data_List_Lazy_repeat';

// Data_List_Lazy_replicate
function Data_List_Lazy_replicate($i, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_replicate';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($i, $__fn) { return $__fn($i, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_take = ($GLOBALS['Data_List_Lazy_take'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_take'));
  $__global_Data_List_Lazy_repeat = ($GLOBALS['Data_List_Lazy_repeat'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_repeat'));
  $__res = ($__global_Data_List_Lazy_take)($i, ($__global_Data_List_Lazy_repeat)($xs));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_replicate'] = __NAMESPACE__ . '\\Data_List_Lazy_replicate';

// Data_List_Lazy_range
function Data_List_Lazy_range($start, $end = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_range';
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
$GLOBALS['Data_List_Lazy_range'] = __NAMESPACE__ . '\\Data_List_Lazy_range';

// Data_List_Lazy_partition
function Data_List_Lazy_partition($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_partition';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_foldr = ($GLOBALS['Data_List_Lazy_foldr'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldr'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $go = (function() use ($f, $__global_Data_List_Lazy_Types_cons, &$__fn) {
  $__fn = function($x, $v = null) use ($f, $__global_Data_List_Lazy_Types_cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($x, &$__fn) { return $__fn($x, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $v;
  if (is_object($__case_1)) {
$x1 = $__case_0;
$ys = ($__case_1)->yes;
$ns = ($__case_1)->no;
$__case_0 = ($f)($x1);
switch ($__case_0) {
case true:
$__res = (object)["yes" => ($__global_Data_List_Lazy_Types_cons)($x1, $ys), "no" => $ns];
goto __end;;
break;
default:
$__res = (object)["yes" => $ys, "no" => ($__global_Data_List_Lazy_Types_cons)($x1, $ns)];
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
  $__res = ($__global_Data_List_Lazy_foldr)($go, (object)["yes" => $__global_Data_List_Lazy_Types_nil, "no" => $__global_Data_List_Lazy_Types_nil]);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_partition'] = __NAMESPACE__ . '\\Data_List_Lazy_partition';


// Data_List_Lazy_nubBy
function Data_List_Lazy_nubBy($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_nubBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Internal_insertAndLookupBy = ($GLOBALS['Data_List_Internal_insertAndLookupBy'] ?? \Data\List\Internal\phpurs_eval_thunk('Data_List_Internal_insertAndLookupBy'));
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $goStep = (function() use ($__global_Data_List_Internal_insertAndLookupBy, $p, $__global_Data_List_Lazy_Types_step, &$go, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_List_Internal_insertAndLookupBy, $p, $__global_Data_List_Lazy_Types_step, &$go, &$__fn) {
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
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$s = $__case_0;
$a = ($__case_1)->v0;
$as = ($__case_1)->v1;
$v2 = ($__global_Data_List_Internal_insertAndLookupBy)($p, $a, $s);
$__case_0 = $v2;
if (is_object($__case_0)) {
$found = ($__case_0)->found;
$s__prime__ = ($__case_0)->result;
$__case_0 = $found;
switch ($__case_0) {
case true:
$__res = ($__global_Data_List_Lazy_Types_step)(($go)($s__prime__, $as));
goto __end;;
break;
default:
$__res = new Phpurs_Data2("Cons", $a, ($go)($s__prime__, $as));
goto __end;;
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
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $go = (function() use ($__global_Data_List_Lazy_map, &$goStep, &$__fn) {
  $__fn = function($s, $v = null) use ($__global_Data_List_Lazy_map, &$goStep, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($s, &$__fn) { return $__fn($s, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $s;
$__case_1 = $v;
if (true) {
$s1 = $__case_0;
$l = $__case_1;
$__res = ($__global_Data_List_Lazy_map)(($goStep)($s1), $l);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_nubBy'] = __NAMESPACE__ . '\\Data_List_Lazy_nubBy';

// Data_List_Lazy_nub
function Data_List_Lazy_nub($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_nub';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_nubBy = ($GLOBALS['Data_List_Lazy_nubBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_nubBy'));
  $__res = ($__global_Data_List_Lazy_nubBy)(($dictOrd)->compare);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_nub'] = __NAMESPACE__ . '\\Data_List_Lazy_nub';


// Data_List_Lazy_mapMaybe
function Data_List_Lazy_mapMaybe($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_compose = ($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose'));
  $__global_Data_List_Lazy_Types_List = ($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = function($v) use ($f, &$go, $__global_Data_List_Lazy_Types_step) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_mapMaybe = ($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_mapMaybe'));
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$v1 = ($f)($x);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
$__tco_tmp_0 = ($__global_Data_List_Lazy_Types_step)($xs);
$v = $__tco_tmp_0;
continue 3;
break;
case "Just":
$y = ($__case_0)->v0;
$__res = new Phpurs_Data2("Cons", $y, ($__global_Data_List_Lazy_mapMaybe)($f, $xs));
goto __end;;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($__global_Data_List_Lazy_compose)($__global_Data_List_Lazy_Types_List, ($__global_Data_List_Lazy_compose)(($__global_Data_List_Lazy_map)($go), $__global_Data_List_Lazy_unwrap));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_mapMaybe'] = __NAMESPACE__ . '\\Data_List_Lazy_mapMaybe';

// Data_List_Lazy_some
function Data_List_Lazy_some($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_some';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_many = ($GLOBALS['Data_List_Lazy_many'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_many'));
  while (true) {
$apply1 = ((((($dictAlternative)->Applicative0)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->apply;
$map3 = ((((((($dictAlternative)->Plus1)($__global_Prim_undefined))->Alt0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
$__res = function($dictLazy) use ($apply1, $map3, $__global_Data_List_Lazy_Types_cons, $__global_Data_List_Lazy_many, $dictAlternative) {
  $__num = func_num_args();
  $defer1 = ($dictLazy)->defer;
  $__res = function($v) use ($apply1, $map3, $__global_Data_List_Lazy_Types_cons, $defer1, $__global_Data_List_Lazy_many, $dictAlternative, $dictLazy) {
  $__num = func_num_args();
  $__res = ($apply1)(($map3)($__global_Data_List_Lazy_Types_cons, $v), ($defer1)(function($v1) use ($__global_Data_List_Lazy_many, $dictAlternative, $dictLazy, $v) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_many)($dictAlternative, $dictLazy, $v);
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
$GLOBALS['Data_List_Lazy_some'] = __NAMESPACE__ . '\\Data_List_Lazy_some';

// Data_List_Lazy_many
function Data_List_Lazy_many($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_many';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_some = ($GLOBALS['Data_List_Lazy_some'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_some'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  while (true) {
$alt = ((((($dictAlternative)->Plus1)($__global_Prim_undefined))->Alt0)($__global_Prim_undefined))->alt;
$pure1 = ((($dictAlternative)->Applicative0)($__global_Prim_undefined))->pure;
$__res = (function() use ($alt, $__global_Data_List_Lazy_some, $dictAlternative, $pure1, $__global_Data_List_Lazy_Types_nil, &$__fn) {
  $__fn = function($dictLazy, $v = null) use ($alt, $__global_Data_List_Lazy_some, $dictAlternative, $pure1, $__global_Data_List_Lazy_Types_nil, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictLazy, &$__fn) { return $__fn($dictLazy, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($alt)(($__global_Data_List_Lazy_some)($dictAlternative, $dictLazy, $v), ($pure1)($__global_Data_List_Lazy_Types_nil));
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
$GLOBALS['Data_List_Lazy_many'] = __NAMESPACE__ . '\\Data_List_Lazy_many';



// Data_List_Lazy_iterate
function Data_List_Lazy_iterate($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_iterate';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_fix = ($GLOBALS['Data_List_Lazy_fix'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fix'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_map2 = ($GLOBALS['Data_List_Lazy_map2'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map2'));
  $__res = ($__global_Data_List_Lazy_fix)(function($xs) use ($__global_Data_List_Lazy_Types_cons, $x, $__global_Data_List_Lazy_map2, $f) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_Types_cons)($x, ($__global_Data_List_Lazy_map2)($f, $xs));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_iterate'] = __NAMESPACE__ . '\\Data_List_Lazy_iterate';

// Data_List_Lazy_insertAt
function Data_List_Lazy_insertAt($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_insertAt';
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
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch ($__case_0) {
case 0:
$x = $__case_1;
$xs = $__case_2;
$__res = ($__global_Data_List_Lazy_Types_cons)($x, $xs);
goto __end;;
break;
default:
$n = $__case_0;
$x = $__case_1;
$xs = $__case_2;
$go = function($v3) use ($x, $__global_Data_List_Lazy_Types_nil, $n) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_insertAt = ($GLOBALS['Data_List_Lazy_insertAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_insertAt'));
  $__case_0 = $v3;
  switch (($__case_0)->tag) {
case "Nil":
$__res = new Phpurs_Data2("Cons", $x, $__global_Data_List_Lazy_Types_nil);
goto __end;;
break;
case "Cons":
$y = ($__case_0)->v0;
$ys = ($__case_0)->v1;
$__res = new Phpurs_Data2("Cons", $y, ($__global_Data_List_Lazy_insertAt)(($n - 1), $x, $ys));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($__global_Data_List_Lazy_map)($go, ($__global_Data_List_Lazy_unwrap)($xs));
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_insertAt'] = __NAMESPACE__ . '\\Data_List_Lazy_insertAt';


// Data_List_Lazy_index
function Data_List_Lazy_index($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_index';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $go = (function() use (&$go, $__global_Data_List_Lazy_Types_step, &$__fn) {
  $__fn = function($v, $v1 = null) use (&$go, $__global_Data_List_Lazy_Types_step, &$__fn) {
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
if (((($__case_0)->tag === "Cons") && ($__case_1 === 0))) {
$a = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", $a);
goto __end;;
} else {
switch (($__case_0)->tag) {
case "Cons":
$as = ($__case_0)->v1;
$i = $__case_1;
$__tco_tmp_0 = ($__global_Data_List_Lazy_Types_step)($as);
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
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(($__global_Data_List_Lazy_Types_step)($xs));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_index'] = __NAMESPACE__ . '\\Data_List_Lazy_index';

// Data_List_Lazy_head
function Data_List_Lazy_head($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_map1 = ($GLOBALS['Data_List_Lazy_map1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map1'));
  $__global_Data_List_Lazy_uncons = ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'));
  $__res = ($__global_Data_List_Lazy_map1)(function($v) {
  $__num = func_num_args();
  $__res = ($v)->head;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_List_Lazy_uncons)($xs));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_head'] = __NAMESPACE__ . '\\Data_List_Lazy_head';

// Data_List_Lazy_transpose
function Data_List_Lazy_transpose($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_transpose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_uncons = ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_mapMaybe = ($GLOBALS['Data_List_Lazy_mapMaybe'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_mapMaybe'));
  $__global_Data_List_Lazy_head = ($GLOBALS['Data_List_Lazy_head'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_head'));
  $__global_Data_List_Lazy_tail = ($GLOBALS['Data_List_Lazy_tail'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_tail'));
  while (true) {
$v = ($__global_Data_List_Lazy_uncons)($xs);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
$__res = $xs;
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && is_object(($__case_0)->v0))) {
$h = (($__case_0)->v0)->head;
$xss = (($__case_0)->v0)->tail;
$v1 = ($__global_Data_List_Lazy_uncons)($h);
$__case_0 = $v1;
if ((($__case_0)->tag === "Nothing")) {
$__tco_tmp_0 = $xss;
$xs = $__tco_tmp_0;
continue ;
} else {
if (((($__case_0)->tag === "Just") && is_object(($__case_0)->v0))) {
$x = (($__case_0)->v0)->head;
$xs__prime__ = (($__case_0)->v0)->tail;
$__res = ($__global_Data_List_Lazy_Types_cons)(($__global_Data_List_Lazy_Types_cons)($x, ($__global_Data_List_Lazy_mapMaybe)($__global_Data_List_Lazy_head, $xss)), \Data\List\Lazy\Data_List_Lazy_transpose(($__global_Data_List_Lazy_Types_cons)($xs__prime__, ($__global_Data_List_Lazy_mapMaybe)($__global_Data_List_Lazy_tail, $xss))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_transpose'] = __NAMESPACE__ . '\\Data_List_Lazy_transpose';

// Data_List_Lazy_groupBy
function Data_List_Lazy_groupBy($eq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_groupBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_span = ($GLOBALS['Data_List_Lazy_span'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_span'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_compose = ($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose'));
  $__global_Data_List_Lazy_Types_List = ($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = function($v) use ($__global_Data_List_Lazy_span, $eq, $__global_Data_Lazy_defer) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_groupBy = ($GLOBALS['Data_List_Lazy_groupBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_groupBy'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$v1 = ($__global_Data_List_Lazy_span)(($eq)($x), $xs);
$__case_0 = $v1;
if (is_object($__case_0)) {
$ys = ($__case_0)->init;
$zs = ($__case_0)->rest;
$__res = new Phpurs_Data2("Cons", ($__global_Data_Lazy_defer)(function($v2) use ($x, $ys) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $x, $ys);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), ($__global_Data_List_Lazy_groupBy)($eq, $zs));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($__global_Data_List_Lazy_compose)($__global_Data_List_Lazy_Types_List, ($__global_Data_List_Lazy_compose)(($__global_Data_List_Lazy_map)($go), $__global_Data_List_Lazy_unwrap));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_groupBy'] = __NAMESPACE__ . '\\Data_List_Lazy_groupBy';

// Data_List_Lazy_group
function Data_List_Lazy_group($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_group';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_groupBy = ($GLOBALS['Data_List_Lazy_groupBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_groupBy'));
  $__res = ($__global_Data_List_Lazy_groupBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_group'] = __NAMESPACE__ . '\\Data_List_Lazy_group';


// Data_List_Lazy_insertBy
function Data_List_Lazy_insertBy($cmp, $x = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_insertBy';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($cmp, $x, $__fn) { return $__fn($cmp, $x, $xs); };
    if ($__num === 1) return function($x, $xs = null) use ($cmp, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($cmp, $x, $xs);
      if ($__num2 === 1) return function($xs) use ($cmp, $x, $__fn) { return $__fn($cmp, $x, $xs); };
      return phpurs_curry_fallback($__fn, [$cmp], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__global_Data_List_Lazy_fromStep = ($GLOBALS['Data_List_Lazy_fromStep'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fromStep'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = function($v) use ($x, $__global_Data_List_Lazy_Types_nil, $cmp, $__global_Data_List_Lazy_fromStep) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_insertBy = ($GLOBALS['Data_List_Lazy_insertBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_insertBy'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = new Phpurs_Data2("Cons", $x, $__global_Data_List_Lazy_Types_nil);
goto __end;;
break;
case "Cons":
$ys = $__case_0;
$y = ($__case_0)->v0;
$ys__prime__ = ($__case_0)->v1;
$v1 = ($cmp)($x, $y);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "GT":
$__res = new Phpurs_Data2("Cons", $y, ($__global_Data_List_Lazy_insertBy)($cmp, $x, $ys__prime__));
goto __end;;
break;
default:
$__res = new Phpurs_Data2("Cons", $x, ($__global_Data_List_Lazy_fromStep)($ys));
goto __end;;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($__global_Data_List_Lazy_map)($go, ($__global_Data_List_Lazy_unwrap)($xs));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_insertBy'] = __NAMESPACE__ . '\\Data_List_Lazy_insertBy';

// Data_List_Lazy_insert
function Data_List_Lazy_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_insertBy = ($GLOBALS['Data_List_Lazy_insertBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_insertBy'));
  $__res = ($__global_Data_List_Lazy_insertBy)(($dictOrd)->compare);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_insert'] = __NAMESPACE__ . '\\Data_List_Lazy_insert';

// Data_List_Lazy_fromFoldable
function Data_List_Lazy_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__res = (($dictFoldable)->foldr)($__global_Data_List_Lazy_Types_cons, $__global_Data_List_Lazy_Types_nil);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_fromFoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_fromFoldable';

// Data_List_Lazy_foldrLazy
function Data_List_Lazy_foldrLazy($dictLazy) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_foldrLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $defer1 = ($dictLazy)->defer;
  $__res = (function() use ($__global_Data_List_Lazy_Types_step, $defer1, &$__fn) {
  $__fn = function($op, $z = null) use ($__global_Data_List_Lazy_Types_step, $defer1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($op, &$__fn) { return $__fn($op, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = function($xs) use ($__global_Data_List_Lazy_Types_step, $defer1, $op, &$go, $z) {
  $__num = func_num_args();
  while (true) {
$v = ($__global_Data_List_Lazy_Types_step)($xs);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$__res = ($defer1)(function($v1) use ($op, $x, &$go, $xs__prime__) {
  $__num = func_num_args();
  $__res = ($op)($x, ($go)($xs__prime__));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
break;
case "Nil":
$__res = $z;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_foldrLazy'] = __NAMESPACE__ . '\\Data_List_Lazy_foldrLazy';

// Data_List_Lazy_foldM
function Data_List_Lazy_foldM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_foldM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_uncons = ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'));
  while (true) {
$pure1 = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
$bind2 = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$__res = (function() use ($__global_Data_List_Lazy_uncons, $pure1, $bind2, $dictMonad, &$__fn) {
  $__fn = function($f, $b = null, $xs = null) use ($__global_Data_List_Lazy_uncons, $pure1, $bind2, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $b, &$__fn) { return $__fn($f, $b, $xs); };
    if ($__num === 1) return function($b, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $b, &$__fn) { return $__fn($f, $b, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_foldM = ($GLOBALS['Data_List_Lazy_foldM'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldM'));
  $v = ($__global_Data_List_Lazy_uncons)($xs);
  $__case_0 = $v;
  if ((($__case_0)->tag === "Nothing")) {
$__res = ($pure1)($b);
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && is_object(($__case_0)->v0))) {
$a = (($__case_0)->v0)->head;
$as = (($__case_0)->v0)->tail;
$__res = ($bind2)(($f)($b, $a), function($b__prime__) use ($__global_Data_List_Lazy_foldM, $dictMonad, $f, $as) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_foldM)($dictMonad, $f, $b__prime__, $as);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
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
$GLOBALS['Data_List_Lazy_foldM'] = __NAMESPACE__ . '\\Data_List_Lazy_foldM';

// Data_List_Lazy_findIndex
function Data_List_Lazy_findIndex($fn) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_findIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_bind = ($GLOBALS['Data_List_Lazy_bind'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_bind'));
  $__global_Data_List_Lazy_uncons = ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'));
  $__global_Data_Maybe_Just = ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just'));
  $go = (function() use ($__global_Data_List_Lazy_bind, $__global_Data_List_Lazy_uncons, $fn, $__global_Data_Maybe_Just, &$go, &$__fn) {
  $__fn = function($n, $list = null) use ($__global_Data_List_Lazy_bind, $__global_Data_List_Lazy_uncons, $fn, $__global_Data_Maybe_Just, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($list) use ($n, &$__fn) { return $__fn($n, $list); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__res = ($__global_Data_List_Lazy_bind)(($__global_Data_List_Lazy_uncons)($list), function($o) use ($fn, $__global_Data_Maybe_Just, $n, &$go) {
  $__num = func_num_args();
  $__case_0 = ($fn)(($o)->head);
  switch ($__case_0) {
case true:
$__res = ($__global_Data_Maybe_Just)($n);
goto __end;;
break;
default:
$__res = ($go)(($n + 1), ($o)->tail);
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
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
$GLOBALS['Data_List_Lazy_findIndex'] = __NAMESPACE__ . '\\Data_List_Lazy_findIndex';

// Data_List_Lazy_findLastIndex
function Data_List_Lazy_findLastIndex($fn, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_findLastIndex';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($fn, $__fn) { return $__fn($fn, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_map1 = ($GLOBALS['Data_List_Lazy_map1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map1'));
  $__global_Data_List_Lazy_length = ($GLOBALS['Data_List_Lazy_length'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_length'));
  $__global_Data_List_Lazy_findIndex = ($GLOBALS['Data_List_Lazy_findIndex'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_findIndex'));
  $__global_Data_List_Lazy_reverse = ($GLOBALS['Data_List_Lazy_reverse'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_reverse'));
  $__res = ($__global_Data_List_Lazy_map1)(function($v) use ($__global_Data_List_Lazy_length, $xs) {
  $__num = func_num_args();
  $__res = ((($__global_Data_List_Lazy_length)($xs) - 1) - $v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_List_Lazy_findIndex)($fn, ($__global_Data_List_Lazy_reverse)($xs)));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_findLastIndex'] = __NAMESPACE__ . '\\Data_List_Lazy_findLastIndex';

// Data_List_Lazy_filterM
function Data_List_Lazy_filterM($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_filterM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_uncons = ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  while (true) {
$pure1 = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
$bind2 = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$__res = (function() use ($__global_Data_List_Lazy_uncons, $pure1, $__global_Data_List_Lazy_Types_nil, $bind2, $dictMonad, $__global_Data_List_Lazy_Types_cons, &$__fn) {
  $__fn = function($p, $list = null) use ($__global_Data_List_Lazy_uncons, $pure1, $__global_Data_List_Lazy_Types_nil, $bind2, $dictMonad, $__global_Data_List_Lazy_Types_cons, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($list) use ($p, &$__fn) { return $__fn($p, $list); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_filterM = ($GLOBALS['Data_List_Lazy_filterM'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_filterM'));
  $v = ($__global_Data_List_Lazy_uncons)($list);
  $__case_0 = $v;
  if ((($__case_0)->tag === "Nothing")) {
$__res = ($pure1)($__global_Data_List_Lazy_Types_nil);
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && is_object(($__case_0)->v0))) {
$x = (($__case_0)->v0)->head;
$xs = (($__case_0)->v0)->tail;
$__res = ($bind2)(($p)($x), function($b) use ($bind2, $__global_Data_List_Lazy_filterM, $dictMonad, $p, $xs, $pure1, $__global_Data_List_Lazy_Types_cons, $x) {
  $__num = func_num_args();
  $__res = ($bind2)(($__global_Data_List_Lazy_filterM)($dictMonad, $p, $xs), function($xs__prime__) use ($pure1, $b, $__global_Data_List_Lazy_Types_cons, $x) {
  $__num = func_num_args();
  $__case_0 = $b;
  $__case_res_0 = null;
  switch ($__case_0) {
case true:
$__case_res_0 = ($__global_Data_List_Lazy_Types_cons)($x, $xs__prime__);
break;
default:
$__case_res_0 = $xs__prime__;
break;
};
  $__res = ($pure1)($__case_res_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
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
$GLOBALS['Data_List_Lazy_filterM'] = __NAMESPACE__ . '\\Data_List_Lazy_filterM';

// Data_List_Lazy_filter
function Data_List_Lazy_filter($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_compose = ($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose'));
  $__global_Data_List_Lazy_Types_List = ($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = function($v) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($__global_Data_List_Lazy_compose)($__global_Data_List_Lazy_Types_List, ($__global_Data_List_Lazy_compose)(($__global_Data_List_Lazy_map)($go), $__global_Data_List_Lazy_unwrap));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_filter'] = __NAMESPACE__ . '\\Data_List_Lazy_filter';

// Data_List_Lazy_intersectBy
function Data_List_Lazy_intersectBy($eq, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_intersectBy';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($eq, $xs, $__fn) { return $__fn($eq, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($eq, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($eq, $xs, $__fn) { return $__fn($eq, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$eq], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_filter = ($GLOBALS['Data_List_Lazy_filter'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_filter'));
  $__global_Data_List_Lazy_any = ($GLOBALS['Data_List_Lazy_any'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_any'));
  $__res = ($__global_Data_List_Lazy_filter)(function($x) use ($__global_Data_List_Lazy_any, $eq, $ys) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_any)(($eq)($x), $ys);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $xs);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_intersectBy'] = __NAMESPACE__ . '\\Data_List_Lazy_intersectBy';

// Data_List_Lazy_intersect
function Data_List_Lazy_intersect($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_intersect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_intersectBy = ($GLOBALS['Data_List_Lazy_intersectBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_intersectBy'));
  $__res = ($__global_Data_List_Lazy_intersectBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_intersect'] = __NAMESPACE__ . '\\Data_List_Lazy_intersect';

// Data_List_Lazy_nubByEq
function Data_List_Lazy_nubByEq($eq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_nubByEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_filter = ($GLOBALS['Data_List_Lazy_filter'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_filter'));
  $__global_Data_HeytingAlgebra_boolNot = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot'));
  $__global_Data_List_Lazy_compose = ($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose'));
  $__global_Data_List_Lazy_Types_List = ($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = function($v) use ($eq, $__global_Data_List_Lazy_filter, $__global_Data_HeytingAlgebra_boolNot) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_nubByEq = ($GLOBALS['Data_List_Lazy_nubByEq'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_nubByEq'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = new Phpurs_Data2("Cons", $x, ($__global_Data_List_Lazy_nubByEq)($eq, ($__global_Data_List_Lazy_filter)(function($y) use ($__global_Data_HeytingAlgebra_boolNot, $eq, $x) {
  $__num = func_num_args();
  $__res = ($__global_Data_HeytingAlgebra_boolNot)(($eq)($x, $y));
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
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($__global_Data_List_Lazy_compose)($__global_Data_List_Lazy_Types_List, ($__global_Data_List_Lazy_compose)(($__global_Data_List_Lazy_map)($go), $__global_Data_List_Lazy_unwrap));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_nubByEq'] = __NAMESPACE__ . '\\Data_List_Lazy_nubByEq';

// Data_List_Lazy_nubEq
function Data_List_Lazy_nubEq($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_nubEq';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_nubByEq = ($GLOBALS['Data_List_Lazy_nubByEq'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_nubByEq'));
  $__res = ($__global_Data_List_Lazy_nubByEq)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_nubEq'] = __NAMESPACE__ . '\\Data_List_Lazy_nubEq';

// Data_List_Lazy_eqPattern
function Data_List_Lazy_eqPattern($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_eqPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_eqList = ($GLOBALS['Data_List_Lazy_Types_eqList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqList'));
  $eq = (($__global_Data_List_Lazy_Types_eqList)($dictEq))->eq;
  $__res = (object)["eq" => (function() use ($eq, &$__fn) {
  $__fn = function($x, $y = null) use ($eq, &$__fn) {
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
$__res = ($eq)($l, $r);
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
$GLOBALS['Data_List_Lazy_eqPattern'] = __NAMESPACE__ . '\\Data_List_Lazy_eqPattern';

// Data_List_Lazy_ordPattern
function Data_List_Lazy_ordPattern($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_ordPattern';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_ordList = ($GLOBALS['Data_List_Lazy_Types_ordList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ordList'));
  $__global_Data_List_Lazy_eqPattern = ($GLOBALS['Data_List_Lazy_eqPattern'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_eqPattern'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $compare = (($__global_Data_List_Lazy_Types_ordList)($dictOrd))->compare;
  $eqPattern1 = ($__global_Data_List_Lazy_eqPattern)((($dictOrd)->Eq0)($__global_Prim_undefined));
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
$GLOBALS['Data_List_Lazy_ordPattern'] = __NAMESPACE__ . '\\Data_List_Lazy_ordPattern';

// Data_List_Lazy_elemLastIndex
function Data_List_Lazy_elemLastIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_elemLastIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_findLastIndex = ($GLOBALS['Data_List_Lazy_findLastIndex'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_findLastIndex'));
  $eq = ($dictEq)->eq;
  $__res = function($x) use ($__global_Data_List_Lazy_findLastIndex, $eq) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_findLastIndex)(function($v) use ($eq, $x) {
  $__num = func_num_args();
  $__res = ($eq)($v, $x);
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
$GLOBALS['Data_List_Lazy_elemLastIndex'] = __NAMESPACE__ . '\\Data_List_Lazy_elemLastIndex';

// Data_List_Lazy_elemIndex
function Data_List_Lazy_elemIndex($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_elemIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_findIndex = ($GLOBALS['Data_List_Lazy_findIndex'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_findIndex'));
  $eq = ($dictEq)->eq;
  $__res = function($x) use ($__global_Data_List_Lazy_findIndex, $eq) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_findIndex)(function($v) use ($eq, $x) {
  $__num = func_num_args();
  $__res = ($eq)($v, $x);
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
$GLOBALS['Data_List_Lazy_elemIndex'] = __NAMESPACE__ . '\\Data_List_Lazy_elemIndex';

// Data_List_Lazy_dropWhile
function Data_List_Lazy_dropWhile($p) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_dropWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_fromStep = ($GLOBALS['Data_List_Lazy_fromStep'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fromStep'));
  $__global_Data_List_Lazy_compose = ($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose'));
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $go = function($v) use ($__global_Data_List_Lazy_fromStep) {
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
$__res = ($__global_Data_List_Lazy_fromStep)($xs);
goto __end;;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($__global_Data_List_Lazy_compose)($go, $__global_Data_List_Lazy_Types_step);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_dropWhile'] = __NAMESPACE__ . '\\Data_List_Lazy_dropWhile';

// Data_List_Lazy_drop
function Data_List_Lazy_drop($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_drop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_compose = ($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose'));
  $__global_Data_List_Lazy_Types_List = ($GLOBALS['Data_List_Lazy_Types_List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_List'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  $go = (function() use (&$go, $__global_Data_List_Lazy_Types_step, &$__fn) {
  $__fn = function($v, $v1 = null) use (&$go, $__global_Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (($__case_0 === 0)) {
$xs = $__case_1;
$__res = $xs;
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$n__prime__ = $__case_0;
$xs = ($__case_1)->v1;
$__tco_tmp_0 = ($n__prime__ - 1);
$__tco_tmp_1 = ($__global_Data_List_Lazy_Types_step)($xs);
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
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($__global_Data_List_Lazy_compose)($__global_Data_List_Lazy_Types_List, ($__global_Data_List_Lazy_compose)(($__global_Data_List_Lazy_map)(($go)($n)), $__global_Data_List_Lazy_unwrap));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_drop'] = __NAMESPACE__ . '\\Data_List_Lazy_drop';

// Data_List_Lazy_slice
function Data_List_Lazy_slice($start, $end = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_slice';
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
  $__global_Data_List_Lazy_take = ($GLOBALS['Data_List_Lazy_take'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_take'));
  $__global_Data_List_Lazy_drop = ($GLOBALS['Data_List_Lazy_drop'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_drop'));
  $__res = ($__global_Data_List_Lazy_take)(($end - $start), ($__global_Data_List_Lazy_drop)($start, $xs));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_slice'] = __NAMESPACE__ . '\\Data_List_Lazy_slice';

// Data_List_Lazy_deleteBy
function Data_List_Lazy_deleteBy($eq, $x = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_deleteBy';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($eq, $x, $__fn) { return $__fn($eq, $x, $xs); };
    if ($__num === 1) return function($x, $xs = null) use ($eq, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq, $x, $xs);
      if ($__num2 === 1) return function($xs) use ($eq, $x, $__fn) { return $__fn($eq, $x, $xs); };
      return phpurs_curry_fallback($__fn, [$eq], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$y = ($__case_0)->v0;
$ys = ($__case_0)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($__global_Data_List_Lazy_map)($go, ($__global_Data_List_Lazy_unwrap)($xs));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_deleteBy'] = __NAMESPACE__ . '\\Data_List_Lazy_deleteBy';

// Data_List_Lazy_unionBy
function Data_List_Lazy_unionBy($eq, $xs = null, $ys = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_unionBy';
  if ($__num < 3) {
    if ($__num === 2) return function($ys) use ($eq, $xs, $__fn) { return $__fn($eq, $xs, $ys); };
    if ($__num === 1) return function($xs, $ys = null) use ($eq, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($eq, $xs, $ys);
      if ($__num2 === 1) return function($ys) use ($eq, $xs, $__fn) { return $__fn($eq, $xs, $ys); };
      return phpurs_curry_fallback($__fn, [$eq], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_append1 = ($GLOBALS['Data_List_Lazy_append1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_append1'));
  $__global_Data_List_Lazy_foldl = ($GLOBALS['Data_List_Lazy_foldl'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldl'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_List_Lazy_deleteBy = ($GLOBALS['Data_List_Lazy_deleteBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_deleteBy'));
  $__global_Data_List_Lazy_nubByEq = ($GLOBALS['Data_List_Lazy_nubByEq'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_nubByEq'));
  $__res = ($__global_Data_List_Lazy_append1)($xs, ($__global_Data_List_Lazy_foldl)(($__global_Data_Function_flip)(($__global_Data_List_Lazy_deleteBy)($eq)), ($__global_Data_List_Lazy_nubByEq)($eq, $ys), $xs));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_unionBy'] = __NAMESPACE__ . '\\Data_List_Lazy_unionBy';

// Data_List_Lazy_union
function Data_List_Lazy_union($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_unionBy = ($GLOBALS['Data_List_Lazy_unionBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unionBy'));
  $__res = ($__global_Data_List_Lazy_unionBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_union'] = __NAMESPACE__ . '\\Data_List_Lazy_union';

// Data_List_Lazy_deleteAt
function Data_List_Lazy_deleteAt($n, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_deleteAt';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($n, $__fn) { return $__fn($n, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = (function() use ($__global_Data_List_Lazy_Types_step, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_deleteAt = ($GLOBALS['Data_List_Lazy_deleteAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_deleteAt'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if ((($__case_1)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
} else {
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$ys = ($__case_1)->v1;
$__res = ($__global_Data_List_Lazy_Types_step)($ys);
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Cons":
$n__prime__ = $__case_0;
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
$__res = new Phpurs_Data2("Cons", $y, ($__global_Data_List_Lazy_deleteAt)(($n__prime__ - 1), $ys));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__res = ($__global_Data_List_Lazy_map)(($go)($n), ($__global_Data_List_Lazy_unwrap)($xs));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_deleteAt'] = __NAMESPACE__ . '\\Data_List_Lazy_deleteAt';

// Data_List_Lazy_delete
function Data_List_Lazy_delete($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_deleteBy = ($GLOBALS['Data_List_Lazy_deleteBy'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_deleteBy'));
  $__res = ($__global_Data_List_Lazy_deleteBy)(($dictEq)->eq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_delete'] = __NAMESPACE__ . '\\Data_List_Lazy_delete';

// Data_List_Lazy_difference
function Data_List_Lazy_difference($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_foldl = ($GLOBALS['Data_List_Lazy_foldl'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_foldl'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_List_Lazy_delete = ($GLOBALS['Data_List_Lazy_delete'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_delete'));
  $__res = ($__global_Data_List_Lazy_foldl)(($__global_Data_Function_flip)(($__global_Data_List_Lazy_delete)($dictEq)));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_difference'] = __NAMESPACE__ . '\\Data_List_Lazy_difference';

// Data_List_Lazy_cycle
function Data_List_Lazy_cycle($xs) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_cycle';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_fix = ($GLOBALS['Data_List_Lazy_fix'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fix'));
  $__global_Data_List_Lazy_append1 = ($GLOBALS['Data_List_Lazy_append1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_append1'));
  $__res = ($__global_Data_List_Lazy_fix)(function($ys) use ($__global_Data_List_Lazy_append1, $xs) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_append1)($xs, $ys);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_cycle'] = __NAMESPACE__ . '\\Data_List_Lazy_cycle';


// Data_List_Lazy_concat
function Data_List_Lazy_concat($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_concat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_bind1 = ($GLOBALS['Data_List_Lazy_bind1'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_bind1'));
  $__global_Data_List_Lazy_identity = ($GLOBALS['Data_List_Lazy_identity'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_identity'));
  $__res = ($__global_Data_List_Lazy_bind1)($v, $__global_Data_List_Lazy_identity);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_concat'] = __NAMESPACE__ . '\\Data_List_Lazy_concat';


// Data_List_Lazy_alterAt
function Data_List_Lazy_alterAt($n, $f = null, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_alterAt';
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($n, $f, $__fn) { return $__fn($n, $f, $xs); };
    if ($__num === 1) return function($f, $xs = null) use ($n, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($n, $f, $xs);
      if ($__num2 === 1) return function($xs) use ($n, $f, $__fn) { return $__fn($n, $f, $xs); };
      return phpurs_curry_fallback($__fn, [$n], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_map = ($GLOBALS['Data_List_Lazy_map'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_map'));
  $__global_Data_List_Lazy_unwrap = ($GLOBALS['Data_List_Lazy_unwrap'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_unwrap'));
  while (true) {
$go = (function() use ($f, $__global_Data_List_Lazy_Types_step, &$__fn) {
  $__fn = function($v, $v1 = null) use ($f, $__global_Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_alterAt = ($GLOBALS['Data_List_Lazy_alterAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_alterAt'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if ((($__case_1)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
} else {
if ((($__case_0 === 0) && (($__case_1)->tag === "Cons"))) {
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
$v2 = ($f)($y);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
$__res = ($__global_Data_List_Lazy_Types_step)($ys);
goto __end;;
break;
case "Just":
$y__prime__ = ($__case_0)->v0;
$__res = new Phpurs_Data2("Cons", $y__prime__, $ys);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
switch (($__case_1)->tag) {
case "Cons":
$n__prime__ = $__case_0;
$y = ($__case_1)->v0;
$ys = ($__case_1)->v1;
$__res = new Phpurs_Data2("Cons", $y, ($__global_Data_List_Lazy_alterAt)(($n__prime__ - 1), $f, $ys));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__res = ($__global_Data_List_Lazy_map)(($go)($n), ($__global_Data_List_Lazy_unwrap)($xs));
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_List_Lazy_alterAt'] = __NAMESPACE__ . '\\Data_List_Lazy_alterAt';

// Data_List_Lazy_modifyAt
function Data_List_Lazy_modifyAt($n, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_modifyAt';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($n, $__fn) { return $__fn($n, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_alterAt = ($GLOBALS['Data_List_Lazy_alterAt'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_alterAt'));
  $__global_Data_List_Lazy_compose = ($GLOBALS['Data_List_Lazy_compose'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_compose'));
  $__res = ($__global_Data_List_Lazy_alterAt)($n, ($__global_Data_List_Lazy_compose)(function($value0) {
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
$GLOBALS['Data_List_Lazy_modifyAt'] = __NAMESPACE__ . '\\Data_List_Lazy_modifyAt';

