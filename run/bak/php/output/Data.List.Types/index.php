<?php

namespace Data\List\Types;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
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
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
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
      case 'Data_List_Types_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_List_Types_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_List_Types_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_List_Types_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_List_Types_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_List_Types_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_List_Types_Nil': $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); break;
      case 'Data_List_Types_newtypeNonEmptyList': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_functorList': $v = (object)["map" => "\\Data\\List\\Types\\Data_List_Types_listMap"]; break;
      case 'Data_List_Types_map': $v = "\\Data\\List\\Types\\Data_List_Types_listMap"; break;
      case 'Data_List_Types_functorNonEmptyList': $v = \Data\NonEmpty\Data_NonEmpty_functorNonEmpty(($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'))); break;
      case 'Data_List_Types_foldableList': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_List_Types_foldableList = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
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
  $rev = ($go)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  $__res = ($__global_Data_List_Types_compose)((($__global_Data_List_Types_foldableList)->foldl)(($__global_Data_Function_flip)($f), $b), $rev);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => function($f) {
  $__num = func_num_args();
  $go = (function() use (&$go, $f, &$__fn) {
  $__fn = function($b, $v = null) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($b, &$__fn) { return $__fn($b, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Nil":
$__res = $b;
goto __end;;
break;
case "Cons":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$__tco_tmp_0 = ($f)($b, $a);
$__tco_tmp_1 = $as;
$b = $__tco_tmp_0;
$v = $__tco_tmp_1;
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
  $__global_Data_List_Types_foldableList = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $append2 = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = function($f) use ($__global_Data_List_Types_foldableList, $__global_Data_List_Types_compose, $append2, $mempty) {
  $__num = func_num_args();
  $__res = (($__global_Data_List_Types_foldableList)->foldl)(function($acc) use ($__global_Data_List_Types_compose, $append2, $f) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Types_compose)(($append2)($acc), $f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $mempty);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_foldl': $v = (($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')))->foldl; break;
      case 'Data_List_Types_foldr': $v = (($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')))->foldr; break;
      case 'Data_List_Types_intercalate': $v = \Data\Foldable\Data_Foldable_intercalate(($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')), ($GLOBALS['Data_Monoid_monoidString'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_monoidString'))); break;
      case 'Data_List_Types_foldableNonEmptyList': $v = \Data\NonEmpty\Data_NonEmpty_foldableNonEmpty(($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'))); break;
      case 'Data_List_Types_foldableWithIndexList': $v = (object)["foldrWithIndex" => (function() use (&$__fn) {
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
  $__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $rev = ($__global_Data_List_Types_foldl)(function($v1) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$i = ($__case_0)->v0;
$acc = ($__case_0)->v1;
$__res = function($a) use ($i, $acc) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($i + 1), new Phpurs_Data2("Cons", $a, $acc));
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
  $v = ($rev)(new Phpurs_Data2("Tuple", 0, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))), $xs);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$len = ($__case_0)->v0;
$revList = ($__case_0)->v1;
$__res = ($__global_Data_Tuple_snd)(($__global_Data_List_Types_foldl)(function($v1) use ($f) {
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
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
  $__res = ($__global_Data_List_Types_compose)($__global_Data_Tuple_snd, ($__global_Data_List_Types_foldl)(function($v) use ($f) {
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
  $__global_Data_List_Types_foldableWithIndexList = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $append2 = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = function($f) use ($__global_Data_List_Types_foldableWithIndexList, $__global_Data_List_Types_compose, $append2, $mempty) {
  $__num = func_num_args();
  $__res = (($__global_Data_List_Types_foldableWithIndexList)->foldlWithIndex)((function() use ($__global_Data_List_Types_compose, $append2, $f, &$__fn) {
  $__fn = function($i, $acc = null) use ($__global_Data_List_Types_compose, $append2, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($i, &$__fn) { return $__fn($i, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_List_Types_compose)(($append2)($acc), ($f)($i));
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
  $__global_Data_List_Types_foldableList = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__res = $__global_Data_List_Types_foldableList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_foldableWithIndexNonEmpty': $v = \Data\NonEmpty\Data_NonEmpty_foldableWithIndexNonEmpty(($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'))); break;
      case 'Data_List_Types_foldMapWithIndex': $v = (($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexNonEmpty')))->foldMapWithIndex; break;
      case 'Data_List_Types_foldlWithIndex': $v = (($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexNonEmpty')))->foldlWithIndex; break;
      case 'Data_List_Types_foldrWithIndex': $v = (($GLOBALS['Data_List_Types_foldableWithIndexNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexNonEmpty')))->foldrWithIndex; break;
      case 'Data_List_Types_foldrWithIndex1': $v = (($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList')))->foldrWithIndex; break;
      case 'Data_List_Types_foldlWithIndex1': $v = (($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList')))->foldlWithIndex; break;
      case 'Data_List_Types_foldableWithIndexNonEmptyList': $v = (object)["foldMapWithIndex" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_List_Types_foldMapWithIndex = ($GLOBALS['Data_List_Types_foldMapWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldMapWithIndex'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $foldMapWithIndex1 = ($__global_Data_List_Types_foldMapWithIndex)($dictMonoid);
  $__res = (function() use ($foldMapWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, &$__fn) {
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, &$__fn) {
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
$__res = ($foldMapWithIndex1)(($__global_Data_List_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), $ne);
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
  $__global_Data_List_Types_foldlWithIndex = ($GLOBALS['Data_List_Types_foldlWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldlWithIndex'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
$__res = ($__global_Data_List_Types_foldlWithIndex)(($__global_Data_List_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), $b1, $ne);
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
  $__global_Data_List_Types_foldrWithIndex = ($GLOBALS['Data_List_Types_foldrWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldrWithIndex'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$b1 = $__case_1;
$ne = $__case_2;
$__res = ($__global_Data_List_Types_foldrWithIndex)(($__global_Data_List_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), $b1, $ne);
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
  $__global_Data_List_Types_foldableNonEmptyList = ($GLOBALS['Data_List_Types_foldableNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableNonEmptyList'));
  $__res = $__global_Data_List_Types_foldableNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_functorWithIndexList': $v = (object)["mapWithIndex" => function($f) {
  $__num = func_num_args();
  $__global_Data_List_Types_foldrWithIndex1 = ($GLOBALS['Data_List_Types_foldrWithIndex1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldrWithIndex1'));
  $__res = ($__global_Data_List_Types_foldrWithIndex1)((function() use ($f, &$__fn) {
  $__fn = function($i, $x = null, $acc = null) use ($f, &$__fn) {
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
  $__res = new Phpurs_Data2("Cons", ($f)($i, $x), $acc);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
  $__res = $__global_Data_List_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_mapWithIndex': $v = (\Data\NonEmpty\Data_NonEmpty_functorWithIndex(($GLOBALS['Data_List_Types_functorWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorWithIndexList'))))->mapWithIndex; break;
      case 'Data_List_Types_functorWithIndexNonEmptyList': $v = (object)["mapWithIndex" => (function() use (&$__fn) {
  $__fn = function($fn, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($fn, &$__fn) { return $__fn($fn, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_mapWithIndex = ($GLOBALS['Data_List_Types_mapWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_mapWithIndex'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__case_0 = $fn;
  $__case_1 = $v;
  if (true) {
$fn1 = $__case_0;
$ne = $__case_1;
$__res = ($__global_Data_List_Types_mapWithIndex)(($__global_Data_List_Types_compose)($fn1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), $ne);
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
  $__global_Data_List_Types_functorNonEmptyList = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorNonEmptyList'));
  $__res = $__global_Data_List_Types_functorNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_semigroupList': $v = (object)["append" => (function() use (&$__fn) {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_foldr = ($GLOBALS['Data_List_Types_foldr'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldr'));
  $__res = ($__global_Data_List_Types_foldr)((function() use (&$__fn) {
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
})(), $ys, $xs);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_append1': $v = (($GLOBALS['Data_List_Types_semigroupList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_semigroupList')))->append; break;
      case 'Data_List_Types_monoidList': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "Semigroup0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_semigroupList = ($GLOBALS['Data_List_Types_semigroupList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_semigroupList'));
  $__res = $__global_Data_List_Types_semigroupList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_semigroupNonEmptyList': $v = (object)["append" => (function() use (&$__fn) {
  $__fn = function($v, $as__prime__ = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($as__prime__) use ($v, &$__fn) { return $__fn($v, $as__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
  $__global_Data_List_Types_toList = ($GLOBALS['Data_List_Types_toList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_toList'));
  $__case_0 = $v;
  $__case_1 = $as__prime__;
  switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$as__prime__1 = $__case_1;
$__res = new Phpurs_Data2("NonEmpty", $a, ($__global_Data_List_Types_append1)($as, ($__global_Data_List_Types_toList)($as__prime__1)));
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
})()]; break;
      case 'Data_List_Types_traversableList': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $map1 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $lift2 = ($__global_Control_Apply_lift2)($Apply0);
  $pure1 = ($dictApplicative)->pure;
  $__res = function($f) use ($__global_Data_List_Types_compose, $map1, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, $lift2, $pure1) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Types_compose)(($map1)(($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)((function() use (&$__fn) {
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
})()), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))), ($__global_Data_List_Types_foldl)(function($acc) use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $f) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Types_compose)(($lift2)(($__global_Data_Function_flip)((function() use (&$__fn) {
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
})()), $acc), $f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($pure1)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_List_Types_traversableList = ($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList'));
  $__global_Data_List_Types_identity = ($GLOBALS['Data_List_Types_identity'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_identity'));
  $__res = (($__global_Data_List_Types_traversableList)->traverse)($dictApplicative, $__global_Data_List_Types_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
  $__res = $__global_Data_List_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_foldableList = ($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'));
  $__res = $__global_Data_List_Types_foldableList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_traversableNonEmptyList': $v = \Data\NonEmpty\Data_NonEmpty_traversableNonEmpty(($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList'))); break;
      case 'Data_List_Types_traversableWithIndexList': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_List_Types_foldlWithIndex1 = ($GLOBALS['Data_List_Types_foldlWithIndex1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldlWithIndex1'));
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $map1 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $lift2 = ($__global_Control_Apply_lift2)($Apply0);
  $pure1 = ($dictApplicative)->pure;
  $__res = function($f) use ($__global_Data_List_Types_foldl, $__global_Data_Function_flip, $__global_Data_List_Types_compose, $map1, $__global_Data_List_Types_foldlWithIndex1, $lift2, $pure1) {
  $__num = func_num_args();
  $rev = ($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)((function() use (&$__fn) {
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
})()), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  $__res = ($__global_Data_List_Types_compose)(($map1)($rev), ($__global_Data_List_Types_foldlWithIndex1)((function() use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $f, &$__fn) {
  $__fn = function($i, $acc = null) use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($i, &$__fn) { return $__fn($i, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_List_Types_compose)(($lift2)(($__global_Data_Function_flip)((function() use (&$__fn) {
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
})()), $acc), ($f)($i));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($pure1)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_functorWithIndexList = ($GLOBALS['Data_List_Types_functorWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorWithIndexList'));
  $__res = $__global_Data_List_Types_functorWithIndexList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_foldableWithIndexList = ($GLOBALS['Data_List_Types_foldableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexList'));
  $__res = $__global_Data_List_Types_foldableWithIndexList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_traversableList = ($GLOBALS['Data_List_Types_traversableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableList'));
  $__res = $__global_Data_List_Types_traversableList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_traverseWithIndex': $v = (\Data\NonEmpty\Data_NonEmpty_traversableWithIndexNonEmpty(($GLOBALS['Data_List_Types_traversableWithIndexList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableWithIndexList'))))->traverseWithIndex; break;
      case 'Data_List_Types_traversableWithIndexNonEmptyList': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Types_traverseWithIndex = ($GLOBALS['Data_List_Types_traverseWithIndex'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traverseWithIndex'));
  $__global_Data_List_Types_NonEmptyList = ($GLOBALS['Data_List_Types_NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_NonEmptyList'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $map1 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverseWithIndex1 = ($__global_Data_List_Types_traverseWithIndex)($dictApplicative);
  $__res = (function() use ($map1, $__global_Data_List_Types_NonEmptyList, $traverseWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, $__global_Data_List_Types_NonEmptyList, $traverseWithIndex1, $__global_Data_List_Types_compose, $__global_Data_Maybe_maybe, &$__fn) {
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
$__res = ($map1)($__global_Data_List_Types_NonEmptyList, ($traverseWithIndex1)(($__global_Data_List_Types_compose)($f1, ($__global_Data_Maybe_maybe)(0, (($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')))(1))), $ne));
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
  $__global_Data_List_Types_functorWithIndexNonEmptyList = ($GLOBALS['Data_List_Types_functorWithIndexNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorWithIndexNonEmptyList'));
  $__res = $__global_Data_List_Types_functorWithIndexNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_foldableWithIndexNonEmptyList = ($GLOBALS['Data_List_Types_foldableWithIndexNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableWithIndexNonEmptyList'));
  $__res = $__global_Data_List_Types_foldableWithIndexNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_traversableNonEmptyList = ($GLOBALS['Data_List_Types_traversableNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableNonEmptyList'));
  $__res = $__global_Data_List_Types_traversableNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_unfoldable1List': $v = (object)["unfoldr1" => (function() use (&$__fn) {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $go = (function() use ($f, &$go, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, &$__fn) {
  $__fn = function($source, $memo = null) use ($f, &$go, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($memo) use ($source, &$__fn) { return $__fn($source, $memo); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$v = ($f)($source);
$__case_0 = $v;
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Just"))) {
$one = ($__case_0)->v0;
$rest = (($__case_0)->v1)->v0;
$__tco_tmp_0 = $rest;
$__tco_tmp_1 = new Phpurs_Data2("Cons", $one, $memo);
$source = $__tco_tmp_0;
$memo = $__tco_tmp_1;
continue /*__LVL__*/;
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Nothing"))) {
$one = ($__case_0)->v0;
$__res = ($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)((function() use (&$__fn) {
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
})()), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), new Phpurs_Data2("Cons", $one, $memo));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
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
  $__res = ($go)($b, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_List_Types_unfoldableList': $v = (object)["unfoldr" => (function() use (&$__fn) {
  $__fn = function($f, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $go = (function() use ($f, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, &$go, &$__fn) {
  $__fn = function($source, $memo = null) use ($f, $__global_Data_List_Types_foldl, $__global_Data_Function_flip, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($memo) use ($source, &$__fn) { return $__fn($source, $memo); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$v = ($f)($source);
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
$__res = ($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)((function() use (&$__fn) {
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
})()), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), $memo);
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$one = (($__case_0)->v0)->v0;
$rest = (($__case_0)->v0)->v1;
$__tco_tmp_0 = $rest;
$__tco_tmp_1 = new Phpurs_Data2("Cons", $one, $memo);
$source = $__tco_tmp_0;
$memo = $__tco_tmp_1;
continue /*__LVL__*/;
} else {
throw new \Exception("Pattern match failure");
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
  $__res = ($go)($b, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_unfoldable1List = ($GLOBALS['Data_List_Types_unfoldable1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldable1List'));
  $__res = $__global_Data_List_Types_unfoldable1List;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_unfoldable1NonEmptyList': $v = \Data\NonEmpty\Data_NonEmpty_unfoldable1NonEmpty(($GLOBALS['Data_List_Types_unfoldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldableList'))); break;
      case 'Data_List_Types_foldable1NonEmptyList': $v = \Data\NonEmpty\Data_NonEmpty_foldable1NonEmpty(($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList'))); break;
      case 'Data_List_Types_extendNonEmptyList': $v = (object)["extend" => (function() use (&$__fn) {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_foldr = ($GLOBALS['Data_List_Types_foldr'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldr'));
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$w = $__case_1;
$as = ($__case_1)->v1;
$go = (function() use ($f1, &$__fn) {
  $__fn = function($a, $v1 = null) use ($f1, &$__fn) {
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
$__res = (object)["val" => new Phpurs_Data2("Cons", ($f1)(new Phpurs_Data2("NonEmpty", $a1, $acc)), $val), "acc" => new Phpurs_Data2("Cons", $a1, $acc)];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__res = new Phpurs_Data2("NonEmpty", ($f1)($w), (($__global_Data_List_Types_foldr)($go, (object)["val" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "acc" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))], $as))->val);
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
  $__global_Data_List_Types_functorNonEmptyList = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorNonEmptyList'));
  $__res = $__global_Data_List_Types_functorNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_extendList': $v = (object)["extend" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_foldr = ($GLOBALS['Data_List_Types_foldr'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldr'));
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$f = $__case_0;
$l = $__case_1;
$as = ($__case_1)->v1;
$go = (function() use ($f, &$__fn) {
  $__fn = function($a__prime__, $v2 = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v2) use ($a__prime__, &$__fn) { return $__fn($a__prime__, $v2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $a__prime__;
  $__case_1 = $v2;
  if (is_object($__case_1)) {
$a__prime__1 = $__case_0;
$val = ($__case_1)->val;
$acc = ($__case_1)->acc;
$acc__prime__ = new Phpurs_Data2("Cons", $a__prime__1, $acc);
$__res = (object)["val" => new Phpurs_Data2("Cons", ($f)($acc__prime__), $val), "acc" => $acc__prime__];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__res = new Phpurs_Data2("Cons", ($f)($l), (($__global_Data_List_Types_foldr)($go, (object)["val" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "acc" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))], $as))->val);
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
  $__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
  $__res = $__global_Data_List_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_eq1List': $v = (object)["eq1" => function($dictEq) {
  $__num = func_num_args();
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $eq = ($dictEq)->eq;
  $__res = (function() use ($__global_Data_HeytingAlgebra_boolConj, $eq, &$__fn) {
  $__fn = function($xs, $ys = null) use ($__global_Data_HeytingAlgebra_boolConj, $eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = (function() use (&$go, $__global_Data_HeytingAlgebra_boolConj, $eq, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$go, $__global_Data_HeytingAlgebra_boolConj, $eq, &$__fn) {
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
if (($__case_2 === false)) {
$__res = false;
goto __end;;
} else {
if (((($__case_0)->tag === "Nil") && (($__case_1)->tag === "Nil"))) {
$acc = $__case_2;
$__res = $acc;
goto __end;;
} else {
if (((($__case_0)->tag === "Cons") && (($__case_1)->tag === "Cons"))) {
$x = ($__case_0)->v0;
$xs__prime__ = ($__case_0)->v1;
$y = ($__case_1)->v0;
$ys__prime__ = ($__case_1)->v1;
$acc = $__case_2;
$__tco_tmp_0 = $xs__prime__;
$__tco_tmp_1 = $ys__prime__;
$__tco_tmp_2 = ($__global_Data_HeytingAlgebra_boolConj)($acc, ($eq)($y, $x));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue /*__LVL__*/;
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
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)($xs, $ys, true);
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
      case 'Data_List_Types_eq1': $v = (($GLOBALS['Data_List_Types_eq1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1List')))->eq1; break;
      case 'Data_List_Types_eqNonEmpty': $v = \Data\NonEmpty\Data_NonEmpty_eqNonEmpty(($GLOBALS['Data_List_Types_eq1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1List'))); break;
      case 'Data_List_Types_eq1NonEmptyList': $v = \Data\NonEmpty\Data_NonEmpty_eq1NonEmpty(($GLOBALS['Data_List_Types_eq1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1List'))); break;
      case 'Data_List_Types_ord1List': $v = (object)["compare1" => function($dictOrd) {
  $__num = func_num_args();
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($compare, &$__fn) {
  $__fn = function($xs, $ys = null) use ($compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = (function() use ($compare, &$go, &$__fn) {
  $__fn = function($v, $v1 = null) use ($compare, &$go, &$__fn) {
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
$__tco_tmp_0 = $xs__prime__;
$__tco_tmp_1 = $ys__prime__;
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
  $__res = ($go)($xs, $ys);
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
  $__global_Data_List_Types_eq1List = ($GLOBALS['Data_List_Types_eq1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1List'));
  $__res = $__global_Data_List_Types_eq1List;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_compare1': $v = (($GLOBALS['Data_List_Types_ord1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ord1List')))->compare1; break;
      case 'Data_List_Types_ordNonEmpty': $v = \Data\NonEmpty\Data_NonEmpty_ordNonEmpty(($GLOBALS['Data_List_Types_ord1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ord1List'))); break;
      case 'Data_List_Types_ord1NonEmptyList': $v = \Data\NonEmpty\Data_NonEmpty_ord1NonEmpty(($GLOBALS['Data_List_Types_ord1List'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ord1List'))); break;
      case 'Data_List_Types_comonadNonEmptyList': $v = (object)["extract" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$__res = $a;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Extend0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_extendNonEmptyList = ($GLOBALS['Data_List_Types_extendNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_extendNonEmptyList'));
  $__res = $__global_Data_List_Types_extendNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_applyList': $v = (object)["apply" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
  $__global_Data_List_Types_listMap = ($GLOBALS['Data_List_Types_listMap'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_listMap'));
  $__global_Data_List_Types_applyList = ($GLOBALS['Data_List_Types_applyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyList'));
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$f = ($__case_0)->v0;
$fs = ($__case_0)->v1;
$xs = $__case_1;
$__res = ($__global_Data_List_Types_append1)(($__global_Data_List_Types_listMap)($f, $xs), (($__global_Data_List_Types_applyList)->apply)($fs, $xs));
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
  $__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
  $__res = $__global_Data_List_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_apply': $v = (($GLOBALS['Data_List_Types_applyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyList')))->apply; break;
      case 'Data_List_Types_applyNonEmptyList': $v = (object)["apply" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
  $__global_Data_List_Types_apply = ($GLOBALS['Data_List_Types_apply'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_apply'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$f = ($__case_0)->v0;
$fs = ($__case_0)->v1;
$a = ($__case_1)->v0;
$as = ($__case_1)->v1;
$__res = new Phpurs_Data2("NonEmpty", ($f)($a), ($__global_Data_List_Types_append1)(($__global_Data_List_Types_apply)($fs, new Phpurs_Data2("Cons", $a, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")))), ($__global_Data_List_Types_apply)(new Phpurs_Data2("Cons", $f, $fs), $as)));
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
  $__global_Data_List_Types_functorNonEmptyList = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorNonEmptyList'));
  $__res = $__global_Data_List_Types_functorNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_bindList': $v = (object)["bind" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
  $__global_Data_List_Types_bindList = ($GLOBALS['Data_List_Types_bindList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindList'));
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$f = $__case_1;
$__res = ($__global_Data_List_Types_append1)(($f)($x), (($__global_Data_List_Types_bindList)->bind)($xs, $f));
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
})(), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_applyList = ($GLOBALS['Data_List_Types_applyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyList'));
  $__res = $__global_Data_List_Types_applyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_bind': $v = (($GLOBALS['Data_List_Types_bindList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindList')))->bind; break;
      case 'Data_List_Types_bindNonEmptyList': $v = (object)["bind" => (function() use (&$__fn) {
  $__fn = function($v, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Types_append1 = ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1'));
  $__global_Data_List_Types_bind = ($GLOBALS['Data_List_Types_bind'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bind'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_List_Types_toList = ($GLOBALS['Data_List_Types_toList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_toList'));
  $__case_0 = $v;
  $__case_1 = $f;
  switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$as = ($__case_0)->v1;
$f1 = $__case_1;
$v1 = ($f1)($a);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$b = ($__case_0)->v0;
$bs = ($__case_0)->v1;
$__res = new Phpurs_Data2("NonEmpty", $b, ($__global_Data_List_Types_append1)($bs, ($__global_Data_List_Types_bind)($as, ($__global_Data_List_Types_compose)($__global_Data_List_Types_toList, $f1))));
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
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_applyNonEmptyList = ($GLOBALS['Data_List_Types_applyNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyNonEmptyList'));
  $__res = $__global_Data_List_Types_applyNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_applicativeList': $v = (object)["pure" => function($a) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Cons", $a, ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_applyList = ($GLOBALS['Data_List_Types_applyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyList'));
  $__res = $__global_Data_List_Types_applyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_monadList': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_applicativeList = ($GLOBALS['Data_List_Types_applicativeList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeList'));
  $__res = $__global_Data_List_Types_applicativeList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_bindList = ($GLOBALS['Data_List_Types_bindList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindList'));
  $__res = $__global_Data_List_Types_bindList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_altNonEmptyList': $v = (object)["alt" => (($GLOBALS['Data_List_Types_semigroupNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_semigroupNonEmptyList')))->append, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_functorNonEmptyList = ($GLOBALS['Data_List_Types_functorNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorNonEmptyList'));
  $__res = $__global_Data_List_Types_functorNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_altList': $v = (object)["alt" => ($GLOBALS['Data_List_Types_append1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_append1')), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_functorList = ($GLOBALS['Data_List_Types_functorList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_functorList'));
  $__res = $__global_Data_List_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_plusList': $v = (object)["empty" => ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), "Alt0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_altList = ($GLOBALS['Data_List_Types_altList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_altList'));
  $__res = $__global_Data_List_Types_altList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_alternativeList': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_applicativeList = ($GLOBALS['Data_List_Types_applicativeList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeList'));
  $__res = $__global_Data_List_Types_applicativeList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_plusList = ($GLOBALS['Data_List_Types_plusList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_plusList'));
  $__res = $__global_Data_List_Types_plusList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_monadPlusList': $v = (object)["Monad0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_monadList = ($GLOBALS['Data_List_Types_monadList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_monadList'));
  $__res = $__global_Data_List_Types_monadList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alternative1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_alternativeList = ($GLOBALS['Data_List_Types_alternativeList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_alternativeList'));
  $__res = $__global_Data_List_Types_alternativeList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_applicativeNonEmptyList': $v = (object)["pure" => (($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose')))("\\Data\\List\\Types\\Data_List_Types_NonEmptyList", \Data\NonEmpty\Data_NonEmpty_singleton(($GLOBALS['Data_List_Types_plusList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_plusList')))), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_applyNonEmptyList = ($GLOBALS['Data_List_Types_applyNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applyNonEmptyList'));
  $__res = $__global_Data_List_Types_applyNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_pure': $v = (($GLOBALS['Data_List_Types_applicativeNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeNonEmptyList')))->pure; break;
      case 'Data_List_Types_monadNonEmptyList': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_applicativeNonEmptyList = ($GLOBALS['Data_List_Types_applicativeNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeNonEmptyList'));
  $__res = $__global_Data_List_Types_applicativeNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_bindNonEmptyList = ($GLOBALS['Data_List_Types_bindNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_bindNonEmptyList'));
  $__res = $__global_Data_List_Types_bindNonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_Types_traversable1NonEmptyList': $v = (object)["traverse1" => function($dictApply) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Data_List_Types_foldl = ($GLOBALS['Data_List_Types_foldl'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldl'));
  $__global_Data_List_Types_compose = ($GLOBALS['Data_List_Types_compose'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compose'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_List_Types_nelCons = ($GLOBALS['Data_List_Types_nelCons'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_nelCons'));
  $__global_Data_List_Types_pure = ($GLOBALS['Data_List_Types_pure'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_pure'));
  $Functor0 = (($dictApply)->Functor0)($__global_Prim_undefined);
  $mapFlipped = ($__global_Data_Functor_mapFlipped)($Functor0);
  $lift2 = ($__global_Control_Apply_lift2)($dictApply);
  $map1 = ($Functor0)->map;
  $__res = (function() use ($mapFlipped, $__global_Data_List_Types_foldl, $__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $map1, $__global_Data_List_Types_pure, &$__fn) {
  $__fn = function($f, $v = null) use ($mapFlipped, $__global_Data_List_Types_foldl, $__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $map1, $__global_Data_List_Types_pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$as = ($__case_1)->v1;
$__res = ($mapFlipped)(($__global_Data_List_Types_foldl)(function($acc) use ($__global_Data_List_Types_compose, $lift2, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $f1) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Types_compose)(($lift2)(($__global_Data_Function_flip)($__global_Data_List_Types_nelCons), $acc), $f1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($map1)($__global_Data_List_Types_pure, ($f1)($a)), $as), function($v1) use ($__global_Data_List_Types_foldl, $__global_Data_Function_flip, $__global_Data_List_Types_nelCons, $__global_Data_List_Types_pure) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = ($__global_Data_List_Types_foldl)(($__global_Data_Function_flip)($__global_Data_List_Types_nelCons), ($__global_Data_List_Types_pure)($x), $xs);
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
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence1" => function($dictApply) {
  $__num = func_num_args();
  $__global_Data_List_Types_traversable1NonEmptyList = ($GLOBALS['Data_List_Types_traversable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversable1NonEmptyList'));
  $__global_Data_List_Types_identity = ($GLOBALS['Data_List_Types_identity'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_identity'));
  $__res = (($__global_Data_List_Types_traversable1NonEmptyList)->traverse1)($dictApply, $__global_Data_List_Types_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable10" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_foldable1NonEmptyList = ($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList'));
  $__res = $__global_Data_List_Types_foldable1NonEmptyList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Types_traversableNonEmptyList = ($GLOBALS['Data_List_Types_traversableNonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_traversableNonEmptyList'));
  $__res = $__global_Data_List_Types_traversableNonEmptyList;
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









// Data_List_Types_Cons
function Data_List_Types_Cons($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_Cons';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Types_Cons'] = __NAMESPACE__ . '\\Data_List_Types_Cons';

// Data_List_Types_NonEmptyList
function Data_List_Types_NonEmptyList($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_NonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_NonEmptyList'] = __NAMESPACE__ . '\\Data_List_Types_NonEmptyList';

// Data_List_Types_toList
function Data_List_Types_toList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_toList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = new Phpurs_Data2("Cons", $x, $xs);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_toList'] = __NAMESPACE__ . '\\Data_List_Types_toList';


// Data_List_Types_nelCons
function Data_List_Types_nelCons($a, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_nelCons';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, $__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $a;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "NonEmpty":
$a1 = $__case_0;
$b = ($__case_1)->v0;
$bs = ($__case_1)->v1;
$__res = new Phpurs_Data2("NonEmpty", $a1, new Phpurs_Data2("Cons", $b, $bs));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Types_nelCons'] = __NAMESPACE__ . '\\Data_List_Types_nelCons';

// Data_List_Types_listMap
function Data_List_Types_listMap($f) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_listMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $chunkedRevMap = (function() use (&$chunkedRevMap, $f, &$__fn) {
  $__fn = function($v, $v1 = null) use (&$chunkedRevMap, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && (((($__case_1)->v1)->tag === "Cons") && (((($__case_1)->v1)->v1)->tag === "Cons")))) {
$chunksAcc = $__case_0;
$chunk = $__case_1;
$xs = ((($__case_1)->v1)->v1)->v1;
$__tco_tmp_0 = new Phpurs_Data2("Cons", $chunk, $chunksAcc);
$__tco_tmp_1 = $xs;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue ;
} else {
if (true) {
$chunksAcc = $__case_0;
$xs = $__case_1;
$unrolledMap = function($v2) use ($f) {
  $__num = func_num_args();
  $__case_0 = $v2;
  if (((($__case_0)->tag === "Cons") && (((($__case_0)->v1)->tag === "Cons") && (((($__case_0)->v1)->v1)->tag === "Nil")))) {
$x1 = ($__case_0)->v0;
$x2 = (($__case_0)->v1)->v0;
$__res = new Phpurs_Data2("Cons", ($f)($x1), new Phpurs_Data2("Cons", ($f)($x2), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))));
goto __end;;
} else {
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v1)->tag === "Nil"))) {
$x1 = ($__case_0)->v0;
$__res = new Phpurs_Data2("Cons", ($f)($x1), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
goto __end;;
} else {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$reverseUnrolledMap = (function() use (&$reverseUnrolledMap, $f, &$__fn) {
  $__fn = function($v2, $v3 = null) use (&$reverseUnrolledMap, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v3) use ($v2, &$__fn) { return $__fn($v2, $v3); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v2;
$__case_1 = $v3;
if (((($__case_0)->tag === "Cons") && (((($__case_0)->v0)->tag === "Cons") && ((((($__case_0)->v0)->v1)->tag === "Cons") && ((((($__case_0)->v0)->v1)->v1)->tag === "Cons"))))) {
$x1 = (($__case_0)->v0)->v0;
$x2 = ((($__case_0)->v0)->v1)->v0;
$x3 = (((($__case_0)->v0)->v1)->v1)->v0;
$cs = ($__case_0)->v1;
$acc = $__case_1;
$__tco_tmp_0 = $cs;
$__tco_tmp_1 = new Phpurs_Data2("Cons", ($f)($x1), new Phpurs_Data2("Cons", ($f)($x2), new Phpurs_Data2("Cons", ($f)($x3), $acc)));
$v2 = $__tco_tmp_0;
$v3 = $__tco_tmp_1;
continue ;
} else {
if (true) {
$acc = $__case_1;
$__res = $acc;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
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
$__res = ($reverseUnrolledMap)($chunksAcc, ($unrolledMap)($xs));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
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
  $__res = ($chunkedRevMap)(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_listMap'] = __NAMESPACE__ . '\\Data_List_Types_listMap';
























// Data_List_Types_showList
function Data_List_Types_showList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_showList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Types_intercalate = ($GLOBALS['Data_List_Types_intercalate'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_intercalate'));
  $__global_Data_List_Types_listMap = ($GLOBALS['Data_List_Types_listMap'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_listMap'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($__global_Data_List_Types_intercalate, $__global_Data_List_Types_listMap, $show) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = "Nil";
goto __end;;
break;
default:
$xs = $__case_0;
$__res = ("(" . (($__global_Data_List_Types_intercalate)(" : ", ($__global_Data_List_Types_listMap)($show, $xs)) . " : Nil)"));
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_showList'] = __NAMESPACE__ . '\\Data_List_Types_showList';

// Data_List_Types_showNonEmptyList
function Data_List_Types_showNonEmptyList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_showNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_showNonEmpty = ($GLOBALS['Data_NonEmpty_showNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_showNonEmpty'));
  $__global_Data_List_Types_showList = ($GLOBALS['Data_List_Types_showList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_showList'));
  $show = (($__global_Data_NonEmpty_showNonEmpty)($dictShow, ($__global_Data_List_Types_showList)($dictShow)))->show;
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
$GLOBALS['Data_List_Types_showNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Types_showNonEmptyList';
















// Data_List_Types_eqList
function Data_List_Types_eqList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_eqList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Types_eq1 = ($GLOBALS['Data_List_Types_eq1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eq1'));
  $__res = (object)["eq" => ($__global_Data_List_Types_eq1)($dictEq)];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_eqList'] = __NAMESPACE__ . '\\Data_List_Types_eqList';

// Data_List_Types_eqNonEmptyList
function Data_List_Types_eqNonEmptyList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_eqNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Types_eqNonEmpty = ($GLOBALS['Data_List_Types_eqNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eqNonEmpty'));
  $__res = ($__global_Data_List_Types_eqNonEmpty)($dictEq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_eqNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Types_eqNonEmptyList';





// Data_List_Types_ordList
function Data_List_Types_ordList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_ordList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Types_eqList = ($GLOBALS['Data_List_Types_eqList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_eqList'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_List_Types_compare1 = ($GLOBALS['Data_List_Types_compare1'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_compare1'));
  $eqList1 = ($__global_Data_List_Types_eqList)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => ($__global_Data_List_Types_compare1)($dictOrd), "Eq0" => function($__dollar____unused) use ($eqList1) {
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
$GLOBALS['Data_List_Types_ordList'] = __NAMESPACE__ . '\\Data_List_Types_ordList';

// Data_List_Types_ordNonEmptyList
function Data_List_Types_ordNonEmptyList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Types_ordNonEmptyList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Types_ordNonEmpty = ($GLOBALS['Data_List_Types_ordNonEmpty'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ordNonEmpty'));
  $__res = ($__global_Data_List_Types_ordNonEmpty)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Types_ordNonEmptyList'] = __NAMESPACE__ . '\\Data_List_Types_ordNonEmptyList';



















