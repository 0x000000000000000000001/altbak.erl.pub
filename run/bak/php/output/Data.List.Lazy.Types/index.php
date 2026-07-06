<?php

namespace Data\List\Lazy\Types;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
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
      case 'Data_List_Lazy_Types_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_List_Lazy_Types_unwrap': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_List_Lazy_Types_map': $v = (($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy')))->map; break;
      case 'Data_List_Lazy_Types_eq1': $v = (($GLOBALS['Data_Lazy_eq1Lazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eq1Lazy')))->eq1; break;
      case 'Data_List_Lazy_Types_compare1': $v = (($GLOBALS['Data_Lazy_ord1Lazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ord1Lazy')))->compare1; break;
      case 'Data_List_Lazy_Types_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_List_Lazy_Types_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_List_Lazy_Types_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_List_Lazy_Types_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_List_Lazy_Types_Nil': $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); break;
      case 'Data_List_Lazy_Types_nil': $v = (($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer')))(function($v) {
  $__num = func_num_args();
  $__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}); break;
      case 'Data_List_Lazy_Types_newtypeNonEmptyList': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_newtypeList': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_step': $v = (($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose')))(($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')), ($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap'))); break;
      case 'Data_List_Lazy_Types_semigroupList': $v = (object)["append" => (function() use (&$__fn) {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_Types_semigroupList = ($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList'));
  $__global_Data_List_Lazy_Types_map = ($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map'));
  $__global_Data_List_Lazy_Types_unwrap = ($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap'));
  $go = function($v) use ($__global_Data_List_Lazy_Types_step, $ys, $__global_Data_List_Lazy_Types_semigroupList) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($__global_Data_List_Lazy_Types_step)($ys);
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$__res = new Phpurs_Data2("Cons", $x, (($__global_Data_List_Lazy_Types_semigroupList)->append)($xs__prime__, $ys));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($__global_Data_List_Lazy_Types_map)($go, ($__global_Data_List_Lazy_Types_unwrap)($xs));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Lazy_Types_append1': $v = (($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList')))->append; break;
      case 'Data_List_Lazy_Types_monoidList': $v = (object)["mempty" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), "Semigroup0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_semigroupList = ($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList'));
  $__res = $__global_Data_List_Lazy_Types_semigroupList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_lazyList': $v = (object)["defer" => function($f) {
  $__num = func_num_args();
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_Types_compose = ($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose'));
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__res = ($__global_Data_Lazy_defer)(($__global_Data_List_Lazy_Types_compose)($__global_Data_List_Lazy_Types_step, $f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_defer': $v = (($GLOBALS['Data_List_Lazy_Types_lazyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_lazyList')))->defer; break;
      case 'Data_List_Lazy_Types_functorList': $v = (object)["map" => (function() use (&$__fn) {
  $__fn = function($f, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($f, &$__fn) { return $__fn($f, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_functorList = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  $__global_Data_List_Lazy_Types_map = ($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map'));
  $__global_Data_List_Lazy_Types_unwrap = ($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap'));
  $go = function($v) use ($f, $__global_Data_List_Lazy_Types_functorList) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$__res = new Phpurs_Data2("Cons", ($f)($x), (($__global_Data_List_Lazy_Types_functorList)->map)($f, $xs__prime__));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($__global_Data_List_Lazy_Types_map)($go, ($__global_Data_List_Lazy_Types_unwrap)($xs));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Lazy_Types_map1': $v = (\Data\NonEmpty\Data_NonEmpty_functorNonEmpty(($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'))))->map; break;
      case 'Data_List_Lazy_Types_functorNonEmptyList': $v = (object)["map" => (function() use (&$__fn) {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_map = ($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map'));
  $__global_Data_List_Lazy_Types_map1 = ($GLOBALS['Data_List_Lazy_Types_map1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map1'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$nel = $__case_1;
$__res = ($__global_Data_List_Lazy_Types_map)(($__global_Data_List_Lazy_Types_map1)($f1), $nel);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Lazy_Types_eq1List': $v = (object)["eq1" => function($dictEq) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $eq = ($dictEq)->eq;
  $__res = (function() use ($__global_Data_List_Lazy_Types_step, &$__fn) {
  $__fn = function($xs, $ys = null) use ($__global_Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
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
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$y = ($__case_1)->v0;
$ys__prime__ = ($__case_1)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
if (true) {
$__res = false;
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
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)(($__global_Data_List_Lazy_Types_step)($xs), ($__global_Data_List_Lazy_Types_step)($ys));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_eqNonEmpty': $v = \Data\NonEmpty\Data_NonEmpty_eqNonEmpty(($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq1List'))); break;
      case 'Data_List_Lazy_Types_eq11': $v = (($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq1List')))->eq1; break;
      case 'Data_List_Lazy_Types_eq1NonEmptyList': $v = (object)["eq1" => function($dictEq) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_eq1 = ($GLOBALS['Data_List_Lazy_Types_eq1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq1'));
  $__global_Data_List_Lazy_Types_eqNonEmpty = ($GLOBALS['Data_List_Lazy_Types_eqNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqNonEmpty'));
  $eq12 = ($__global_Data_List_Lazy_Types_eq1)(($__global_Data_List_Lazy_Types_eqNonEmpty)($dictEq));
  $__res = (function() use ($eq12, &$__fn) {
  $__fn = function($v, $v1 = null) use ($eq12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$lhs = $__case_0;
$rhs = $__case_1;
$__res = ($eq12)($lhs, $rhs);
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_ord1List': $v = (object)["compare1" => function($dictOrd) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($compare, $__global_Data_List_Lazy_Types_step, &$__fn) {
  $__fn = function($xs, $ys = null) use ($compare, $__global_Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = (function() use ($compare, &$go, $__global_Data_List_Lazy_Types_step, &$__fn) {
  $__fn = function($v, $v1 = null) use ($compare, &$go, $__global_Data_List_Lazy_Types_step, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "Nil")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$y = ($__case_1)->v0;
$ys__prime__ = ($__case_1)->v1;
$v2 = ($compare)($x, $y);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "EQ":
$__tco_tmp_0 = ($__global_Data_List_Lazy_Types_step)($xs__prime__);
$__tco_tmp_1 = ($__global_Data_List_Lazy_Types_step)($ys__prime__);
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue I/*__LVL__*/;
break;
default:
$other = $__case_0;
$__res = $other;
goto __end;;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
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
  $__res = ($go)(($__global_Data_List_Lazy_Types_step)($xs), ($__global_Data_List_Lazy_Types_step)($ys));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Eq10" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_eq1List = ($GLOBALS['Data_List_Lazy_Types_eq1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq1List'));
  $__res = $__global_Data_List_Lazy_Types_eq1List;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_ordNonEmpty': $v = \Data\NonEmpty\Data_NonEmpty_ordNonEmpty(($GLOBALS['Data_List_Lazy_Types_ord1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ord1List'))); break;
      case 'Data_List_Lazy_Types_compare11': $v = (($GLOBALS['Data_List_Lazy_Types_ord1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ord1List')))->compare1; break;
      case 'Data_List_Lazy_Types_ord1NonEmptyList': $v = (object)["compare1" => function($dictOrd) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_compare1 = ($GLOBALS['Data_List_Lazy_Types_compare1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compare1'));
  $__global_Data_List_Lazy_Types_ordNonEmpty = ($GLOBALS['Data_List_Lazy_Types_ordNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ordNonEmpty'));
  $compare12 = ($__global_Data_List_Lazy_Types_compare1)(($__global_Data_List_Lazy_Types_ordNonEmpty)($dictOrd));
  $__res = (function() use ($compare12, &$__fn) {
  $__fn = function($v, $v1 = null) use ($compare12, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$lhs = $__case_0;
$rhs = $__case_1;
$__res = ($compare12)($lhs, $rhs);
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Eq10" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_eq1NonEmptyList = ($GLOBALS['Data_List_Lazy_Types_eq1NonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq1NonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_eq1NonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_foldableList': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($op, $z = null, $xs = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($op, $z, &$__fn) { return $__fn($op, $z, $xs); };
    if ($__num === 1) return function($z, $xs = null) use ($op, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($op, $z, $xs);
      if ($__num2 === 1) return function($xs) use ($op, $z, &$__fn) { return $__fn($op, $z, $xs); };
      return phpurs_curry_fallback($__fn, [$op], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_Types_foldableList = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $rev = (($__global_Data_List_Lazy_Types_foldableList)->foldl)(($__global_Data_Function_flip)($__global_Data_List_Lazy_Types_cons), $__global_Data_List_Lazy_Types_nil);
  $__res = (($__global_Data_List_Lazy_Types_foldableList)->foldl)(($__global_Data_Function_flip)($op), $z, ($rev)($xs));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => function($op) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $go = (function() use ($__global_Data_List_Lazy_Types_step, &$go, $op, &$__fn) {
  $__fn = function($b, $xs = null) use ($__global_Data_List_Lazy_Types_step, &$go, $op, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($b, &$__fn) { return $__fn($b, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$v = ($__global_Data_List_Lazy_Types_step)($xs);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
$__res = $b;
goto __end;;
break;
case "Cons":
$hd = ($__case_0)->v0;
$tl = ($__case_0)->v1;
$__tco_tmp_0 = ($op)($b, $hd);
$__tco_tmp_1 = $tl;
$b = $__tco_tmp_0;
$xs = $__tco_tmp_1;
continue I/*__LVL__*/;
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
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_Types_foldableList = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList'));
  $append2 = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = function($f) use ($__global_Data_List_Lazy_Types_foldableList, $append2, $mempty) {
  $__num = func_num_args();
  $__res = (($__global_Data_List_Lazy_Types_foldableList)->foldl)((function() use ($append2, $f, &$__fn) {
  $__fn = function($b, $a = null) use ($append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($b, &$__fn) { return $__fn($b, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($append2)($b, ($f)($a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_foldr': $v = (($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')))->foldr; break;
      case 'Data_List_Lazy_Types_foldableNonEmpty': $v = \Data\NonEmpty\Data_NonEmpty_foldableNonEmpty(($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList'))); break;
      case 'Data_List_Lazy_Types_foldr1': $v = (($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmpty')))->foldr; break;
      case 'Data_List_Lazy_Types_foldl': $v = (($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmpty')))->foldl; break;
      case 'Data_List_Lazy_Types_foldMap': $v = (($GLOBALS['Data_List_Lazy_Types_foldableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmpty')))->foldMap; break;
      case 'Data_List_Lazy_Types_foldl1': $v = (($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')))->foldl; break;
      case 'Data_List_Lazy_Types_extendList': $v = (object)["extend" => (function() use (&$__fn) {
  $__fn = function($f, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__global_Data_List_Lazy_Types_foldr = ($GLOBALS['Data_List_Lazy_Types_foldr'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldr'));
  $go = (function() use ($__global_Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__fn = function($a, $v = null) use ($__global_Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $a;
  $__case_1 = $v;
  if (is_object($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
$acc__prime__ = ($__global_Data_List_Lazy_Types_cons)($a1, $acc);
$__res = (object)["val" => ($__global_Data_List_Lazy_Types_cons)(($f)($acc__prime__), $val), "acc" => $acc__prime__];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $v = ($__global_Data_List_Lazy_Types_step)($l);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = $__global_Data_List_Lazy_Types_nil;
goto __end;;
break;
case "Cons":
$as = ($__case_0)->v1;
$__res = ($__global_Data_List_Lazy_Types_cons)(($f)($l), (($__global_Data_List_Lazy_Types_foldr)($go, (object)["val" => $__global_Data_List_Lazy_Types_nil, "acc" => $__global_Data_List_Lazy_Types_nil], $as))->val);
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
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorList = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  $__res = $__global_Data_List_Lazy_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_extendNonEmptyList': $v = (object)["extend" => (function() use (&$__fn) {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_List_Lazy_Types_foldr = ($GLOBALS['Data_List_Lazy_Types_foldr'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldr'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$w = $__case_1;
$nel = $__case_1;
$go = (function() use ($__global_Data_List_Lazy_Types_cons, $f1, $__global_Data_Lazy_defer, &$__fn) {
  $__fn = function($a, $v1 = null) use ($__global_Data_List_Lazy_Types_cons, $f1, $__global_Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($a, &$__fn) { return $__fn($a, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $a;
  $__case_1 = $v1;
  if (is_object($__case_1)) {
$a1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
$__res = (object)["val" => ($__global_Data_List_Lazy_Types_cons)(($f1)(($__global_Data_Lazy_defer)(function($v2) use ($a1, $acc) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $a1, $acc);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), $val), "acc" => ($__global_Data_List_Lazy_Types_cons)($a1, $acc)];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$v1 = ($__global_Data_Lazy_force)($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$as = ($__case_0)->v1;
$__res = ($__global_Data_Lazy_defer)(function($v2) use ($f1, $w, $__global_Data_List_Lazy_Types_foldr, $go, $__global_Data_List_Lazy_Types_nil, $as) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", ($f1)($w), (($__global_Data_List_Lazy_Types_foldr)($go, (object)["val" => $__global_Data_List_Lazy_Types_nil, "acc" => $__global_Data_List_Lazy_Types_nil], $as))->val);
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
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_functorNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_foldableNonEmptyList': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $b = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_Types_foldr1 = ($GLOBALS['Data_List_Lazy_Types_foldr1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldr1'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$nel = $__case_2;
$__res = ($__global_Data_List_Lazy_Types_foldr1)($f1, $b1, ($__global_Data_Lazy_force)($nel));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $b = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_Types_foldl = ($GLOBALS['Data_List_Lazy_Types_foldl'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$nel = $__case_2;
$__res = ($__global_Data_List_Lazy_Types_foldl)($f1, $b1, ($__global_Data_Lazy_force)($nel));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_foldMap = ($GLOBALS['Data_List_Lazy_Types_foldMap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldMap'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $foldMap1 = ($__global_Data_List_Lazy_Types_foldMap)($dictMonoid);
  $__res = (function() use ($foldMap1, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($f, $v = null) use ($foldMap1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$nel = $__case_1;
$__res = ($foldMap1)($f1, ($__global_Data_Lazy_force)($nel));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_foldableWithIndexList': $v = (object)["foldrWithIndex" => (function() use (&$__fn) {
  $__fn = function($f, $b = null, $xs = null) use (&$__fn) {
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
  $__global_Data_List_Lazy_Types_foldl1 = ($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $rev = ($__global_Data_List_Lazy_Types_foldl1)(function($v1) use ($__global_Data_List_Lazy_Types_cons) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$acc = ($__case_0)->v1;
$__res = function($a) use ($i, $__global_Data_List_Lazy_Types_cons, $acc) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($i + 1), ($__global_Data_List_Lazy_Types_cons)($a, $acc));
  goto __end;;
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
});
  $v = ($rev)(new Phpurs_Data2("Tuple", 0, $__global_Data_List_Lazy_Types_nil), $xs);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$len = ($__case_0)->v0;
$revList = ($__case_0)->v1;
$__res = ($__global_Data_Tuple_snd)(($__global_Data_List_Lazy_Types_foldl1)(function($v1) use ($f) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$b__prime__ = ($__case_0)->v1;
$__res = function($a) use ($i, $f, $b__prime__) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($i - 1), ($f)(($i - 1), $a, $b__prime__));
  goto __end;;
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
}, new Phpurs_Data2("Tuple", $len, $b), $revList));
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
})(), "foldlWithIndex" => (function() use (&$__fn) {
  $__fn = function($f, $acc = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($f, &$__fn) { return $__fn($f, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_compose = ($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $__global_Data_List_Lazy_Types_foldl1 = ($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1'));
  $__res = ($__global_Data_List_Lazy_Types_compose)($__global_Data_Tuple_snd, ($__global_Data_List_Lazy_Types_foldl1)(function($v) use ($f) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__res = function($a) use ($i, $f, $b) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($i + 1), ($f)($i, $b, $a));
  goto __end;;
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
}, new Phpurs_Data2("Tuple", 0, $acc)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_Types_foldableWithIndexList = ($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexList'));
  $__global_Data_List_Lazy_Types_compose = ($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose'));
  $append2 = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = function($f) use ($__global_Data_List_Lazy_Types_foldableWithIndexList, $__global_Data_List_Lazy_Types_compose, $append2, $mempty) {
  $__num = func_num_args();
  $__res = (($__global_Data_List_Lazy_Types_foldableWithIndexList)->foldlWithIndex)((function() use ($__global_Data_List_Lazy_Types_compose, $append2, $f, &$__fn) {
  $__fn = function($i, $acc = null) use ($__global_Data_List_Lazy_Types_compose, $append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($i, &$__fn) { return $__fn($i, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_List_Lazy_Types_compose)(($append2)($acc), ($f)($i));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_foldableList = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList'));
  $__res = $__global_Data_List_Lazy_Types_foldableList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_foldableWithIndexNonEmpty': $v = \Data\NonEmpty\Data_NonEmpty_foldableWithIndexNonEmpty(($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexList'))); break;
      case 'Data_List_Lazy_Types_foldMapWithIndex': $v = (($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexNonEmpty')))->foldMapWithIndex; break;
      case 'Data_List_Lazy_Types_foldlWithIndex': $v = (($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexNonEmpty')))->foldlWithIndex; break;
      case 'Data_List_Lazy_Types_foldrWithIndex': $v = (($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexNonEmpty')))->foldrWithIndex; break;
      case 'Data_List_Lazy_Types_foldrWithIndex1': $v = (($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexList')))->foldrWithIndex; break;
      case 'Data_List_Lazy_Types_foldableWithIndexNonEmptyList': $v = (object)["foldMapWithIndex" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_foldMapWithIndex = ($GLOBALS['Data_List_Lazy_Types_foldMapWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldMapWithIndex'));
  $__global_Data_List_Lazy_Types_compose = ($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $foldMapWithIndex1 = ($__global_Data_List_Lazy_Types_foldMapWithIndex)($dictMonoid);
  $__res = (function() use ($foldMapWithIndex1, $__global_Data_List_Lazy_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, $__global_Data_List_Lazy_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$ne = $__case_1;
$__res = ($foldMapWithIndex1)(($__global_Data_List_Lazy_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), ($__global_Data_Lazy_force)($ne));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => (function() use (&$__fn) {
  $__fn = function($f, $b = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_Types_foldlWithIndex = ($GLOBALS['Data_List_Lazy_Types_foldlWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldlWithIndex'));
  $__global_Data_List_Lazy_Types_compose = ($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
$__res = ($__global_Data_List_Lazy_Types_foldlWithIndex)(($__global_Data_List_Lazy_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), $b1, ($__global_Data_Lazy_force)($ne));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldrWithIndex" => (function() use (&$__fn) {
  $__fn = function($f, $b = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
    if ($__num === 1) return function($b, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $v);
      if ($__num2 === 1) return function($v) use ($f, $b, &$__fn) { return $__fn($f, $b, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_List_Lazy_Types_foldrWithIndex = ($GLOBALS['Data_List_Lazy_Types_foldrWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldrWithIndex'));
  $__global_Data_List_Lazy_Types_compose = ($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
$__res = ($__global_Data_List_Lazy_Types_foldrWithIndex)(($__global_Data_List_Lazy_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), $b1, ($__global_Data_Lazy_force)($ne));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_foldableNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_foldableNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_foldableNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_functorWithIndexList': $v = (object)["mapWithIndex" => function($f) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_foldrWithIndex1 = ($GLOBALS['Data_List_Lazy_Types_foldrWithIndex1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldrWithIndex1'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__res = ($__global_Data_List_Lazy_Types_foldrWithIndex1)((function() use ($__global_Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__fn = function($i, $x = null, $acc = null) use ($__global_Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($acc) use ($i, $x, &$__fn) { return $__fn($i, $x, $acc); };
    if ($__num === 1) return function($x, $acc = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $x, $acc);
      if ($__num2 === 1) return function($acc) use ($i, $x, &$__fn) { return $__fn($i, $x, $acc); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($__global_Data_List_Lazy_Types_cons)(($f)($i, $x), $acc);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $__global_Data_List_Lazy_Types_nil);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorList = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  $__res = $__global_Data_List_Lazy_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_mapWithIndex': $v = (\Data\NonEmpty\Data_NonEmpty_functorWithIndex(($GLOBALS['Data_List_Lazy_Types_functorWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorWithIndexList'))))->mapWithIndex; break;
      case 'Data_List_Lazy_Types_functorWithIndexNonEmptyList': $v = (object)["mapWithIndex" => (function() use (&$__fn) {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_Types_mapWithIndex = ($GLOBALS['Data_List_Lazy_Types_mapWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_mapWithIndex'));
  $__global_Data_List_Lazy_Types_compose = ($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$ne = $__case_1;
$__res = ($__global_Data_Lazy_defer)(function($v1) use ($__global_Data_List_Lazy_Types_mapWithIndex, $__global_Data_List_Lazy_Types_compose, $f1, $__global_Data_Maybe_maybe, $__global_Data_Lazy_force, $ne) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_Types_mapWithIndex)(($__global_Data_List_Lazy_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), ($__global_Data_Lazy_force)($ne));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_functorNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_semigroupNonEmptyList': $v = (object)["append" => (function() use (&$__fn) {
  $__fn = function($v, $as__prime__ = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($as__prime__) use ($v, &$__fn) { return $__fn($v, $as__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_Types_append1 = ($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1'));
  $__global_Data_List_Lazy_Types_toList = ($GLOBALS['Data_List_Lazy_Types_toList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_toList'));
  $__case_0 = $v;
  $__case_1 = $as__prime__;
  if (true) {
$neas = $__case_0;
$as__prime__1 = $__case_1;
$v1 = ($__global_Data_Lazy_force)($neas);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$__res = ($__global_Data_Lazy_defer)(function($v2) use ($a, $__global_Data_List_Lazy_Types_append1, $as, $__global_Data_List_Lazy_Types_toList, $as__prime__1) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $a, ($__global_Data_List_Lazy_Types_append1)($as, ($__global_Data_List_Lazy_Types_toList)($as__prime__1)));
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
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Lazy_Types_traversableList': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_Types_foldr = ($GLOBALS['Data_List_Lazy_Types_foldr'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldr'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply1 = ($Apply0)->apply;
  $map2 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $pure = ($dictApplicative)->pure;
  $__res = function($f) use ($__global_Data_List_Lazy_Types_foldr, $apply1, $map2, $__global_Data_List_Lazy_Types_cons, $pure, $__global_Data_List_Lazy_Types_nil) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_Types_foldr)((function() use ($apply1, $map2, $__global_Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__fn = function($a, $b = null) use ($apply1, $map2, $__global_Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($apply1)(($map2)($__global_Data_List_Lazy_Types_cons, ($f)($a)), $b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($pure)($__global_Data_List_Lazy_Types_nil));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_traversableList = ($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableList'));
  $__global_Data_List_Lazy_Types_identity = ($GLOBALS['Data_List_Lazy_Types_identity'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_identity'));
  $__res = (($__global_Data_List_Lazy_Types_traversableList)->traverse)($dictApplicative, $__global_Data_List_Lazy_Types_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorList = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  $__res = $__global_Data_List_Lazy_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_foldableList = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList'));
  $__res = $__global_Data_List_Lazy_Types_foldableList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_traversableNonEmpty': $v = \Data\NonEmpty\Data_NonEmpty_traversableNonEmpty(($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableList'))); break;
      case 'Data_List_Lazy_Types_traverse': $v = (($GLOBALS['Data_List_Lazy_Types_traversableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableNonEmpty')))->traverse; break;
      case 'Data_List_Lazy_Types_sequence': $v = (($GLOBALS['Data_List_Lazy_Types_traversableNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableNonEmpty')))->sequence; break;
      case 'Data_List_Lazy_Types_traversableNonEmptyList': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_Types_traverse = ($GLOBALS['Data_List_Lazy_Types_traverse'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traverse'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $map2 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverse1 = ($__global_Data_List_Lazy_Types_traverse)($dictApplicative);
  $__res = (function() use ($map2, $__global_Data_Lazy_defer, $traverse1, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($f, $v = null) use ($map2, $__global_Data_Lazy_defer, $traverse1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$nel = $__case_1;
$__res = ($map2)(function($xxs) use ($__global_Data_Lazy_defer) {
  $__num = func_num_args();
  $__res = ($__global_Data_Lazy_defer)(function($v1) use ($xxs) {
  $__num = func_num_args();
  $__res = $xxs;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($traverse1)($f1, ($__global_Data_Lazy_force)($nel)));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_Types_sequence = ($GLOBALS['Data_List_Lazy_Types_sequence'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_sequence'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $map2 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $sequence1 = ($__global_Data_List_Lazy_Types_sequence)($dictApplicative);
  $__res = function($v) use ($map2, $__global_Data_Lazy_defer, $sequence1, $__global_Data_Lazy_force) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$__res = ($map2)(function($xxs) use ($__global_Data_Lazy_defer) {
  $__num = func_num_args();
  $__res = ($__global_Data_Lazy_defer)(function($v1) use ($xxs) {
  $__num = func_num_args();
  $__res = $xxs;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($sequence1)(($__global_Data_Lazy_force)($nel)));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_functorNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_foldableNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_foldableNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_foldableNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_traversableWithIndexList': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_Types_foldrWithIndex1 = ($GLOBALS['Data_List_Lazy_Types_foldrWithIndex1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldrWithIndex1'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply1 = ($Apply0)->apply;
  $map2 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $pure = ($dictApplicative)->pure;
  $__res = function($f) use ($__global_Data_List_Lazy_Types_foldrWithIndex1, $apply1, $map2, $__global_Data_List_Lazy_Types_cons, $pure, $__global_Data_List_Lazy_Types_nil) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_Types_foldrWithIndex1)((function() use ($apply1, $map2, $__global_Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__fn = function($i, $a = null, $b = null) use ($apply1, $map2, $__global_Data_List_Lazy_Types_cons, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($b) use ($i, $a, &$__fn) { return $__fn($i, $a, $b); };
    if ($__num === 1) return function($a, $b = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $b);
      if ($__num2 === 1) return function($b) use ($i, $a, &$__fn) { return $__fn($i, $a, $b); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($apply1)(($map2)($__global_Data_List_Lazy_Types_cons, ($f)($i, $a)), $b);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($pure)($__global_Data_List_Lazy_Types_nil));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorWithIndexList = ($GLOBALS['Data_List_Lazy_Types_functorWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorWithIndexList'));
  $__res = $__global_Data_List_Lazy_Types_functorWithIndexList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_foldableWithIndexList = ($GLOBALS['Data_List_Lazy_Types_foldableWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexList'));
  $__res = $__global_Data_List_Lazy_Types_foldableWithIndexList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_traversableList = ($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableList'));
  $__res = $__global_Data_List_Lazy_Types_traversableList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_traverseWithIndex': $v = (\Data\NonEmpty\Data_NonEmpty_traversableWithIndexNonEmpty(($GLOBALS['Data_List_Lazy_Types_traversableWithIndexList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableWithIndexList'))))->traverseWithIndex; break;
      case 'Data_List_Lazy_Types_traversableWithIndexNonEmptyList': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_Types_traverseWithIndex = ($GLOBALS['Data_List_Lazy_Types_traverseWithIndex'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traverseWithIndex'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_Types_compose = ($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $map2 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverseWithIndex1 = ($__global_Data_List_Lazy_Types_traverseWithIndex)($dictApplicative);
  $__res = (function() use ($map2, $__global_Data_Lazy_defer, $traverseWithIndex1, $__global_Data_List_Lazy_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($f, $v = null) use ($map2, $__global_Data_Lazy_defer, $traverseWithIndex1, $__global_Data_List_Lazy_Types_compose, $__global_Data_Maybe_maybe, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$ne = $__case_1;
$__res = ($map2)(function($xxs) use ($__global_Data_Lazy_defer) {
  $__num = func_num_args();
  $__res = ($__global_Data_Lazy_defer)(function($v1) use ($xxs) {
  $__num = func_num_args();
  $__res = $xxs;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($traverseWithIndex1)(($__global_Data_List_Lazy_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), ($__global_Data_Lazy_force)($ne)));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorWithIndexNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_functorWithIndexNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorWithIndexNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_functorWithIndexNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_foldableWithIndexNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_foldableWithIndexNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableWithIndexNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_foldableWithIndexNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_traversableNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_traversableNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_traversableNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_unfoldable1List': $v = (function() use (&$__fn) {
$go = (function() use (&$go, &$__fn) {
  $__fn = function($f, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_defer = ($GLOBALS['Data_List_Lazy_Types_defer'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_defer'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  while (true) {
$__res = ($__global_Data_List_Lazy_Types_defer)(function($v) use ($f, $b, $__global_Data_List_Lazy_Types_cons, &$go, $__global_Data_List_Lazy_Types_nil) {
  $__num = func_num_args();
  $v1 = ($f)($b);
  $__case_0 = $v1;
  if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Just"))) {
$a = ($__case_0)->v0;
$b__prime__ = (($__case_0)->v1)->v0;
$__res = ($__global_Data_List_Lazy_Types_cons)($a, ($go)($f, $b__prime__));
goto __end;;
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Nothing"))) {
$a = ($__case_0)->v0;
$__res = ($__global_Data_List_Lazy_Types_cons)($a, $__global_Data_List_Lazy_Types_nil);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
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
return (object)["unfoldr1" => $go];
})(); break;
      case 'Data_List_Lazy_Types_unfoldableList': $v = (function() use (&$__fn) {
$go = (function() use (&$go, &$__fn) {
  $__fn = function($f, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_defer = ($GLOBALS['Data_List_Lazy_Types_defer'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_defer'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  while (true) {
$__res = ($__global_Data_List_Lazy_Types_defer)(function($v) use ($f, $b, $__global_Data_List_Lazy_Types_nil, $__global_Data_List_Lazy_Types_cons, &$go) {
  $__num = func_num_args();
  $v1 = ($f)($b);
  $__case_0 = $v1;
  if ((($__case_0)->tag === "Nothing")) {
$__res = $__global_Data_List_Lazy_Types_nil;
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$b__prime__ = (($__case_0)->v0)->v1;
$__res = ($__global_Data_List_Lazy_Types_cons)($a, ($go)($f, $b__prime__));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
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
return (object)["unfoldr" => $go, "Unfoldable10" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_unfoldable1List = ($GLOBALS['Data_List_Lazy_Types_unfoldable1List'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unfoldable1List'));
  $__res = $__global_Data_List_Lazy_Types_unfoldable1List;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
})(); break;
      case 'Data_List_Lazy_Types_unfoldr1': $v = (\Data\NonEmpty\Data_NonEmpty_unfoldable1NonEmpty(($GLOBALS['Data_List_Lazy_Types_unfoldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unfoldableList'))))->unfoldr1; break;
      case 'Data_List_Lazy_Types_unfoldable1NonEmptyList': $v = (object)["unfoldr1" => (function() use (&$__fn) {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_Types_unfoldr1 = ($GLOBALS['Data_List_Lazy_Types_unfoldr1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unfoldr1'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($__global_Data_List_Lazy_Types_unfoldr1, $f, $b) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_Types_unfoldr1)($f, $b);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Lazy_Types_comonadNonEmptyList': $v = (object)["extract" => function($v) {
  $__num = func_num_args();
  $__global_Data_NonEmpty_head = ($GLOBALS['Data_NonEmpty_head'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_head'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$__res = ($__global_Data_NonEmpty_head)(($__global_Data_Lazy_force)($nel));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Extend0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_extendNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_extendNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_extendNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_extendNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_monadList': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_applicativeList = ($GLOBALS['Data_List_Lazy_Types_applicativeList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applicativeList'));
  $__res = $__global_Data_List_Lazy_Types_applicativeList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_bindList = ($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindList'));
  $__res = $__global_Data_List_Lazy_Types_bindList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_bindList': $v = (object)["bind" => (function() use (&$__fn) {
  $__fn = function($xs, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($xs, &$__fn) { return $__fn($xs, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_Types_append1 = ($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1'));
  $__global_Data_List_Lazy_Types_bindList = ($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindList'));
  $__global_Data_List_Lazy_Types_map = ($GLOBALS['Data_List_Lazy_Types_map'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_map'));
  $__global_Data_List_Lazy_Types_unwrap = ($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap'));
  $go = function($v) use ($__global_Data_List_Lazy_Types_step, $__global_Data_List_Lazy_Types_append1, $f, $__global_Data_List_Lazy_Types_bindList) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$__res = ($__global_Data_List_Lazy_Types_step)(($__global_Data_List_Lazy_Types_append1)(($f)($x), (($__global_Data_List_Lazy_Types_bindList)->bind)($xs__prime__, $f)));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($__global_Data_List_Lazy_Types_map)($go, ($__global_Data_List_Lazy_Types_unwrap)($xs));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_applyList = ($GLOBALS['Data_List_Lazy_Types_applyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applyList'));
  $__res = $__global_Data_List_Lazy_Types_applyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_applicativeList': $v = (object)["pure" => function($a) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__res = ($__global_Data_List_Lazy_Types_cons)($a, $__global_Data_List_Lazy_Types_nil);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_applyList = ($GLOBALS['Data_List_Lazy_Types_applyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applyList'));
  $__res = $__global_Data_List_Lazy_Types_applyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_applyList': $v = (object)["apply" => \Control\Monad\Control_Monad_ap(($GLOBALS['Data_List_Lazy_Types_monadList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_monadList'))), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorList = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  $__res = $__global_Data_List_Lazy_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_apply': $v = (($GLOBALS['Data_List_Lazy_Types_applyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applyList')))->apply; break;
      case 'Data_List_Lazy_Types_bind': $v = (($GLOBALS['Data_List_Lazy_Types_bindList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindList')))->bind; break;
      case 'Data_List_Lazy_Types_applyNonEmptyList': $v = (object)["apply" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_Types_append1 = ($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1'));
  $__global_Data_List_Lazy_Types_apply = ($GLOBALS['Data_List_Lazy_Types_apply'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_apply'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$nefs = $__case_0;
$neas = $__case_1;
$v2 = ($__global_Data_Lazy_force)($neas);
$v3 = ($__global_Data_Lazy_force)($nefs);
$__case_0 = $v3;
$__case_1 = $v2;
if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$f = ($__case_0)->v0;
$fs = ($__case_0)->v1;
$a = ($__case_1)->v0;
$as = ($__case_1)->v1;
$__res = ($__global_Data_Lazy_defer)(function($v4) use ($f, $a, $__global_Data_List_Lazy_Types_append1, $__global_Data_List_Lazy_Types_apply, $fs, $__global_Data_List_Lazy_Types_cons, $__global_Data_List_Lazy_Types_nil, $as) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", ($f)($a), ($__global_Data_List_Lazy_Types_append1)(($__global_Data_List_Lazy_Types_apply)($fs, ($__global_Data_List_Lazy_Types_cons)($a, $__global_Data_List_Lazy_Types_nil)), ($__global_Data_List_Lazy_Types_apply)(($__global_Data_List_Lazy_Types_cons)($f, $fs), $as)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_functorNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_bindNonEmptyList': $v = (object)["bind" => (function() use (&$__fn) {
  $__fn = function($v, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_List_Lazy_Types_unwrap = ($GLOBALS['Data_List_Lazy_Types_unwrap'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_unwrap'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_Types_append1 = ($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1'));
  $__global_Data_List_Lazy_Types_bind = ($GLOBALS['Data_List_Lazy_Types_bind'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bind'));
  $__global_Data_List_Lazy_Types_compose = ($GLOBALS['Data_List_Lazy_Types_compose'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compose'));
  $__global_Data_List_Lazy_Types_toList = ($GLOBALS['Data_List_Lazy_Types_toList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_toList'));
  $__case_0 = $v;
  $__case_1 = $f;
  if (true) {
$nel = $__case_0;
$f1 = $__case_1;
$v1 = ($__global_Data_Lazy_force)($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$v2 = ($__global_Data_Lazy_force)(($__global_Data_List_Lazy_Types_unwrap)(($f1)($a)));
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "NonEmpty":
$b = ($__case_0)->v0;
$bs = ($__case_0)->v1;
$__res = ($__global_Data_Lazy_defer)(function($v3) use ($b, $__global_Data_List_Lazy_Types_append1, $bs, $__global_Data_List_Lazy_Types_bind, $as, $__global_Data_List_Lazy_Types_compose, $__global_Data_List_Lazy_Types_toList, $f1) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $b, ($__global_Data_List_Lazy_Types_append1)($bs, ($__global_Data_List_Lazy_Types_bind)($as, ($__global_Data_List_Lazy_Types_compose)($__global_Data_List_Lazy_Types_toList, $f1))));
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
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_applyNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_applyNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applyNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_applyNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_altNonEmptyList': $v = (object)["alt" => (($GLOBALS['Data_List_Lazy_Types_semigroupNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupNonEmptyList')))->append, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_functorNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_functorNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_altList': $v = (object)["alt" => ($GLOBALS['Data_List_Lazy_Types_append1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_append1')), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorList = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  $__res = $__global_Data_List_Lazy_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_plusList': $v = (object)["empty" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), "Alt0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_altList = ($GLOBALS['Data_List_Lazy_Types_altList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_altList'));
  $__res = $__global_Data_List_Lazy_Types_altList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_singleton': $v = \Data\NonEmpty\Data_NonEmpty_singleton(($GLOBALS['Data_List_Lazy_Types_plusList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_plusList'))); break;
      case 'Data_List_Lazy_Types_alternativeList': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_applicativeList = ($GLOBALS['Data_List_Lazy_Types_applicativeList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applicativeList'));
  $__res = $__global_Data_List_Lazy_Types_applicativeList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_plusList = ($GLOBALS['Data_List_Lazy_Types_plusList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_plusList'));
  $__res = $__global_Data_List_Lazy_Types_plusList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_monadPlusList': $v = (object)["Monad0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_monadList = ($GLOBALS['Data_List_Lazy_Types_monadList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_monadList'));
  $__res = $__global_Data_List_Lazy_Types_monadList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alternative1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_alternativeList = ($GLOBALS['Data_List_Lazy_Types_alternativeList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_alternativeList'));
  $__res = $__global_Data_List_Lazy_Types_alternativeList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_applicativeNonEmptyList': $v = (object)["pure" => function($a) {
  $__num = func_num_args();
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_Types_singleton = ($GLOBALS['Data_List_Lazy_Types_singleton'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_singleton'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($__global_Data_List_Lazy_Types_singleton, $a) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_Types_singleton)($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_applyNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_applyNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applyNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_applyNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Lazy_Types_monadNonEmptyList': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_applicativeNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_applicativeNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applicativeNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_applicativeNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_bindNonEmptyList = ($GLOBALS['Data_List_Lazy_Types_bindNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindNonEmptyList'));
  $__res = $__global_Data_List_Lazy_Types_bindNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };











// Data_List_Lazy_Types_List
function Data_List_Lazy_Types_List($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_List';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_List'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_List';


// Data_List_Lazy_Types_Cons
function Data_List_Lazy_Types_Cons($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_Cons';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_Cons'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_Cons';

// Data_List_Lazy_Types_NonEmptyList
function Data_List_Lazy_Types_NonEmptyList($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_NonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_NonEmptyList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_NonEmptyList';

















// Data_List_Lazy_Types_eqList
function Data_List_Lazy_Types_eqList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_eqList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_eq11 = ($GLOBALS['Data_List_Lazy_Types_eq11'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eq11'));
  $__res = (object)["eq" => ($__global_Data_List_Lazy_Types_eq11)($dictEq)];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_eqList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_eqList';

// Data_List_Lazy_Types_eqNonEmptyList
function Data_List_Lazy_Types_eqNonEmptyList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_eqNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_eqLazy = ($GLOBALS['Data_Lazy_eqLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eqLazy'));
  $__global_Data_List_Lazy_Types_eqNonEmpty = ($GLOBALS['Data_List_Lazy_Types_eqNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqNonEmpty'));
  $__res = ($__global_Data_Lazy_eqLazy)(($__global_Data_List_Lazy_Types_eqNonEmpty)($dictEq));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_eqNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_eqNonEmptyList';





// Data_List_Lazy_Types_ordList
function Data_List_Lazy_Types_ordList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_ordList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_eqList = ($GLOBALS['Data_List_Lazy_Types_eqList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqList'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Lazy_Types_compare11 = ($GLOBALS['Data_List_Lazy_Types_compare11'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_compare11'));
  $eqList1 = ($__global_Data_List_Lazy_Types_eqList)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => ($__global_Data_List_Lazy_Types_compare11)($dictOrd), "Eq0" => function($__dollar____unused) use ($eqList1) {
  $__num = func_num_args();
  $__res = $eqList1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_ordList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_ordList';

// Data_List_Lazy_Types_ordNonEmptyList
function Data_List_Lazy_Types_ordNonEmptyList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_ordNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_ordLazy = ($GLOBALS['Data_Lazy_ordLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ordLazy'));
  $__global_Data_List_Lazy_Types_ordNonEmpty = ($GLOBALS['Data_List_Lazy_Types_ordNonEmpty'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ordNonEmpty'));
  $__res = ($__global_Data_Lazy_ordLazy)(($__global_Data_List_Lazy_Types_ordNonEmpty)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_ordNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_ordNonEmptyList';

// Data_List_Lazy_Types_cons
function Data_List_Lazy_Types_cons($x, $xs = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_cons';
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($x, $__fn) { return $__fn($x, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($x, $xs) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Cons", $x, $xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_cons'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_cons';











// Data_List_Lazy_Types_showList
function Data_List_Lazy_Types_showList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_showList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_List_Lazy_Types_foldl1 = ($GLOBALS['Data_List_Lazy_Types_foldl1'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldl1'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($xs) use ($__global_Data_List_Lazy_Types_step, $show, $__global_Data_List_Lazy_Types_foldl1) {
  $__num = func_num_args();
  $v = ($__global_Data_List_Lazy_Types_step)($xs);
  $__case_0 = $v;
  $__case_res_0 = null;
  switch (($__case_0)->tag) {
case "Nil":
$__case_res_0 = "";
break;
case "Cons":
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$__case_res_0 = (($show)($x) . ($__global_Data_List_Lazy_Types_foldl1)((function() use ($show, &$__fn) {
  $__fn = function($shown, $x__prime__ = null) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x__prime__) use ($shown, &$__fn) { return $__fn($shown, $x__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($shown . ("," . ($show)($x__prime__)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "", $xs__prime__));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  $__res = ("(fromFoldable [" . ($__case_res_0 . "])"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_showList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_showList';

// Data_List_Lazy_Types_showNonEmptyList
function Data_List_Lazy_Types_showNonEmptyList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_showNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_showLazy = ($GLOBALS['Data_Lazy_showLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_showLazy'));
  $__global_Data_NonEmpty_showNonEmpty = ($GLOBALS['Data_NonEmpty_showNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_showNonEmpty'));
  $__global_Data_List_Lazy_Types_showList = ($GLOBALS['Data_List_Lazy_Types_showList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_showList'));
  $show = (($__global_Data_Lazy_showLazy)(($__global_Data_NonEmpty_showNonEmpty)($dictShow, ($__global_Data_List_Lazy_Types_showList)($dictShow))))->show;
  $__res = (object)["show" => function($v) use ($show) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$__res = ("(NonEmptyList " . (($show)($nel) . ")"));
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
$GLOBALS['Data_List_Lazy_Types_showNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_showNonEmptyList';

// Data_List_Lazy_Types_showStep
function Data_List_Lazy_Types_showStep($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_showStep';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_showList = ($GLOBALS['Data_List_Lazy_Types_showList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_showList'));
  $show = ($dictShow)->show;
  $show1 = (($__global_Data_List_Lazy_Types_showList)($dictShow))->show;
  $__res = (object)["show" => function($v) use ($show, $show1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = "Nil";
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = ("(" . (($show)($x) . (" : " . (($show1)($xs) . ")"))));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_showStep'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_showStep';











// Data_List_Lazy_Types_toList
function Data_List_Lazy_Types_toList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_Types_toList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_defer = ($GLOBALS['Data_List_Lazy_Types_defer'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$__res = ($__global_Data_List_Lazy_Types_defer)(function($v1) use ($__global_Data_Lazy_force, $nel, $__global_Data_List_Lazy_Types_cons) {
  $__num = func_num_args();
  $v2 = ($__global_Data_Lazy_force)($nel);
  $__case_0 = $v2;
  switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = ($__global_Data_List_Lazy_Types_cons)($x, $xs);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_Types_toList'] = __NAMESPACE__ . '\\Data_List_Lazy_Types_toList';































