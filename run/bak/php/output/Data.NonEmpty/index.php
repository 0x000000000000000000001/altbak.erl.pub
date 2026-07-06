<?php

namespace Data\NonEmpty;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
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
      case 'Data_NonEmpty_map': $v = (($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple')))->map; break;
      case 'Data_NonEmpty_map1': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_NonEmpty_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_NonEmpty_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_NonEmpty_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };







// Data_NonEmpty_NonEmpty
function Data_NonEmpty_NonEmpty($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_NonEmpty';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_NonEmpty_NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_NonEmpty';

// Data_NonEmpty_unfoldable1NonEmpty
function Data_NonEmpty_unfoldable1NonEmpty($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_unfoldable1NonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Tuple_uncurry = ($GLOBALS['Data_Tuple_uncurry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_uncurry'));
  $__global_Data_NonEmpty_map = ($GLOBALS['Data_NonEmpty_map'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_map'));
  $__global_Data_NonEmpty_map1 = ($GLOBALS['Data_NonEmpty_map1'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_map1'));
  $unfoldr = ($dictUnfoldable)->unfoldr;
  $__res = (object)["unfoldr1" => (function() use ($__global_Data_Tuple_uncurry, $__global_Data_NonEmpty_map, $unfoldr, $__global_Data_NonEmpty_map1, &$__fn) {
  $__fn = function($f, $b = null) use ($__global_Data_Tuple_uncurry, $__global_Data_NonEmpty_map, $unfoldr, $__global_Data_NonEmpty_map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Tuple_uncurry)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_NonEmpty_map)(($unfoldr)(($__global_Data_NonEmpty_map1)($f)), ($f)($b)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_unfoldable1NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_unfoldable1NonEmpty';

// Data_NonEmpty_tail
function Data_NonEmpty_tail($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "NonEmpty":
$xs = ($__case_0)->v1;
$__res = $xs;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_tail'] = __NAMESPACE__ . '\\Data_NonEmpty_tail';

// Data_NonEmpty_singleton
function Data_NonEmpty_singleton($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $empty = ($dictPlus)->empty;
  $__res = function($a) use ($empty) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $a, $empty);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_singleton'] = __NAMESPACE__ . '\\Data_NonEmpty_singleton';

// Data_NonEmpty_showNonEmpty
function Data_NonEmpty_showNonEmpty($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_showNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $show = ($dictShow)->show;
  $__res = function($dictShow1) use ($show) {
  $__num = func_num_args();
  $show1 = ($dictShow1)->show;
  $__res = (object)["show" => function($v) use ($show, $show1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$fa = ($__case_0)->v1;
$__res = ("(NonEmpty " . (($show)($a) . (" " . (($show1)($fa) . ")"))));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_showNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_showNonEmpty';

// Data_NonEmpty_semigroupNonEmpty
function Data_NonEmpty_semigroupNonEmpty($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_semigroupNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $pure = ($dictApplicative)->pure;
  $__res = function($dictSemigroup) use ($pure) {
  $__num = func_num_args();
  $append1 = ($dictSemigroup)->append;
  $__res = (object)["append" => (function() use ($append1, $pure, &$__fn) {
  $__fn = function($v, $v1 = null) use ($append1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$a1 = ($__case_0)->v0;
$f1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$f2 = ($__case_1)->v1;
$__res = new Phpurs_Data2("NonEmpty", $a1, ($append1)($f1, ($append1)(($pure)($a2), $f2)));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_semigroupNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_semigroupNonEmpty';

// Data_NonEmpty_oneOf
function Data_NonEmpty_oneOf($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_oneOf';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $alt = ((((($dictAlternative)->Plus1)($__global_Prim_undefined))->Alt0)($__global_Prim_undefined))->alt;
  $pure = ((($dictAlternative)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = function($v) use ($alt, $pure) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$fa = ($__case_0)->v1;
$__res = ($alt)(($pure)($a), $fa);
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
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_oneOf'] = __NAMESPACE__ . '\\Data_NonEmpty_oneOf';

// Data_NonEmpty_head
function Data_NonEmpty_head($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$__res = $x;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_head'] = __NAMESPACE__ . '\\Data_NonEmpty_head';

// Data_NonEmpty_functorNonEmpty
function Data_NonEmpty_functorNonEmpty($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_functorNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map2 = ($dictFunctor)->map;
  $__res = (object)["map" => (function() use ($map2, &$__fn) {
  $__fn = function($f, $m = null) use ($map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($f, &$__fn) { return $__fn($f, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $m;
  switch (($__case_0)->tag) {
case "NonEmpty":
$v = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$__res = new Phpurs_Data2("NonEmpty", ($f)($v), ($map2)($f, $v1));
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
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_functorNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_functorNonEmpty';

// Data_NonEmpty_functorWithIndex
function Data_NonEmpty_functorWithIndex($dictFunctorWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_functorWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_functorNonEmpty = ($GLOBALS['Data_NonEmpty_functorNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_functorNonEmpty'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_NonEmpty_compose = ($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose'));
  $mapWithIndex = ($dictFunctorWithIndex)->mapWithIndex;
  $functorNonEmpty1 = ($__global_Data_NonEmpty_functorNonEmpty)((($dictFunctorWithIndex)->Functor0)($__global_Prim_undefined));
  $__res = (object)["mapWithIndex" => (function() use ($mapWithIndex, $__global_Data_NonEmpty_compose, &$__fn) {
  $__fn = function($f, $v = null) use ($mapWithIndex, $__global_Data_NonEmpty_compose, &$__fn) {
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
$fa = ($__case_1)->v1;
$__res = new Phpurs_Data2("NonEmpty", ($f1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $a), ($mapWithIndex)(($__global_Data_NonEmpty_compose)($f1, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $fa));
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
})(), "Functor0" => function($__dollar____unused) use ($functorNonEmpty1) {
  $__num = func_num_args();
  $__res = $functorNonEmpty1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_functorWithIndex'] = __NAMESPACE__ . '\\Data_NonEmpty_functorWithIndex';

// Data_NonEmpty_fromNonEmpty
function Data_NonEmpty_fromNonEmpty($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_fromNonEmpty';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$fa = ($__case_1)->v1;
$__res = ($f1)($a, $fa);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_NonEmpty_fromNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_fromNonEmpty';

// Data_NonEmpty_foldableNonEmpty
function Data_NonEmpty_foldableNonEmpty($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_foldableNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldMap = ($dictFoldable)->foldMap;
  $foldl = ($dictFoldable)->foldl;
  $foldr = ($dictFoldable)->foldr;
  $__res = (object)["foldMap" => function($dictMonoid) use ($__global_Prim_undefined, $foldMap) {
  $__num = func_num_args();
  $append1 = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $foldMap1 = ($foldMap)($dictMonoid);
  $__res = (function() use ($append1, $foldMap1, &$__fn) {
  $__fn = function($f, $v = null) use ($append1, $foldMap1, &$__fn) {
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
$fa = ($__case_1)->v1;
$__res = ($append1)(($f1)($a), ($foldMap1)($f1, $fa));
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
}, "foldl" => (function() use ($foldl, &$__fn) {
  $__fn = function($f, $b = null, $v = null) use ($foldl, &$__fn) {
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
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
$__res = ($foldl)($f1, ($f1)($b1, $a), $fa);
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
})(), "foldr" => (function() use ($foldr, &$__fn) {
  $__fn = function($f, $b = null, $v = null) use ($foldr, &$__fn) {
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
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
$__res = ($f1)($a, ($foldr)($f1, $b1, $fa));
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
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_foldableNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_foldableNonEmpty';

// Data_NonEmpty_foldableWithIndexNonEmpty
function Data_NonEmpty_foldableWithIndexNonEmpty($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_foldableWithIndexNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_foldableNonEmpty = ($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableNonEmpty'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_NonEmpty_compose = ($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose'));
  $foldMapWithIndex = ($dictFoldableWithIndex)->foldMapWithIndex;
  $foldlWithIndex = ($dictFoldableWithIndex)->foldlWithIndex;
  $foldrWithIndex = ($dictFoldableWithIndex)->foldrWithIndex;
  $foldableNonEmpty1 = ($__global_Data_NonEmpty_foldableNonEmpty)((($dictFoldableWithIndex)->Foldable0)($__global_Prim_undefined));
  $__res = (object)["foldMapWithIndex" => function($dictMonoid) use ($__global_Prim_undefined, $foldMapWithIndex, $__global_Data_NonEmpty_compose) {
  $__num = func_num_args();
  $append1 = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $foldMapWithIndex1 = ($foldMapWithIndex)($dictMonoid);
  $__res = (function() use ($append1, $foldMapWithIndex1, $__global_Data_NonEmpty_compose, &$__fn) {
  $__fn = function($f, $v = null) use ($append1, $foldMapWithIndex1, $__global_Data_NonEmpty_compose, &$__fn) {
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
$fa = ($__case_1)->v1;
$__res = ($append1)(($f1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $a), ($foldMapWithIndex1)(($__global_Data_NonEmpty_compose)($f1, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $fa));
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
}, "foldlWithIndex" => (function() use ($foldlWithIndex, $__global_Data_NonEmpty_compose, &$__fn) {
  $__fn = function($f, $b = null, $v = null) use ($foldlWithIndex, $__global_Data_NonEmpty_compose, &$__fn) {
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
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
$__res = ($foldlWithIndex)(($__global_Data_NonEmpty_compose)($f1, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), ($f1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $b1, $a), $fa);
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
})(), "foldrWithIndex" => (function() use ($foldrWithIndex, $__global_Data_NonEmpty_compose, &$__fn) {
  $__fn = function($f, $b = null, $v = null) use ($foldrWithIndex, $__global_Data_NonEmpty_compose, &$__fn) {
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
  $__case_0 = $f;
  $__case_1 = $b;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "NonEmpty":
$f1 = $__case_0;
$b1 = $__case_1;
$a = ($__case_2)->v0;
$fa = ($__case_2)->v1;
$__res = ($f1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $a, ($foldrWithIndex)(($__global_Data_NonEmpty_compose)($f1, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $b1, $fa));
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
})(), "Foldable0" => function($__dollar____unused) use ($foldableNonEmpty1) {
  $__num = func_num_args();
  $__res = $foldableNonEmpty1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_foldableWithIndexNonEmpty';

// Data_NonEmpty_traversableNonEmpty
function Data_NonEmpty_traversableNonEmpty($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_traversableNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_functorNonEmpty = ($GLOBALS['Data_NonEmpty_functorNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_functorNonEmpty'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_NonEmpty_foldableNonEmpty = ($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableNonEmpty'));
  $sequence = ($dictTraversable)->sequence;
  $traverse = ($dictTraversable)->traverse;
  $functorNonEmpty1 = ($__global_Data_NonEmpty_functorNonEmpty)((($dictTraversable)->Functor0)($__global_Prim_undefined));
  $foldableNonEmpty1 = ($__global_Data_NonEmpty_foldableNonEmpty)((($dictTraversable)->Foldable1)($__global_Prim_undefined));
  $__res = (object)["sequence" => function($dictApplicative) use ($__global_Prim_undefined, $sequence) {
  $__num = func_num_args();
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map2 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $sequence1 = ($sequence)($dictApplicative);
  $__res = function($v) use ($apply, $map2, $sequence1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "NonEmpty":
$a = ($__case_0)->v0;
$fa = ($__case_0)->v1;
$__res = ($apply)(($map2)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $a), ($sequence1)($fa));
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
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "traverse" => function($dictApplicative) use ($__global_Prim_undefined, $traverse) {
  $__num = func_num_args();
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map2 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $traverse1 = ($traverse)($dictApplicative);
  $__res = (function() use ($apply, $map2, $traverse1, &$__fn) {
  $__fn = function($f, $v = null) use ($apply, $map2, $traverse1, &$__fn) {
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
$fa = ($__case_1)->v1;
$__res = ($apply)(($map2)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f1)($a)), ($traverse1)($f1, $fa));
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
}, "Functor0" => function($__dollar____unused) use ($functorNonEmpty1) {
  $__num = func_num_args();
  $__res = $functorNonEmpty1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) use ($foldableNonEmpty1) {
  $__num = func_num_args();
  $__res = $foldableNonEmpty1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_traversableNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_traversableNonEmpty';

// Data_NonEmpty_traversableWithIndexNonEmpty
function Data_NonEmpty_traversableWithIndexNonEmpty($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_traversableWithIndexNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_functorWithIndex = ($GLOBALS['Data_NonEmpty_functorWithIndex'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_functorWithIndex'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_NonEmpty_foldableWithIndexNonEmpty = ($GLOBALS['Data_NonEmpty_foldableWithIndexNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableWithIndexNonEmpty'));
  $__global_Data_NonEmpty_traversableNonEmpty = ($GLOBALS['Data_NonEmpty_traversableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_traversableNonEmpty'));
  $__global_Data_NonEmpty_compose = ($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose'));
  $traverseWithIndex = ($dictTraversableWithIndex)->traverseWithIndex;
  $functorWithIndex1 = ($__global_Data_NonEmpty_functorWithIndex)((($dictTraversableWithIndex)->FunctorWithIndex0)($__global_Prim_undefined));
  $foldableWithIndexNonEmpty1 = ($__global_Data_NonEmpty_foldableWithIndexNonEmpty)((($dictTraversableWithIndex)->FoldableWithIndex1)($__global_Prim_undefined));
  $traversableNonEmpty1 = ($__global_Data_NonEmpty_traversableNonEmpty)((($dictTraversableWithIndex)->Traversable2)($__global_Prim_undefined));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use ($__global_Prim_undefined, $traverseWithIndex, $__global_Data_NonEmpty_compose) {
  $__num = func_num_args();
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map2 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $traverseWithIndex1 = ($traverseWithIndex)($dictApplicative);
  $__res = (function() use ($apply, $map2, $traverseWithIndex1, $__global_Data_NonEmpty_compose, &$__fn) {
  $__fn = function($f, $v = null) use ($apply, $map2, $traverseWithIndex1, $__global_Data_NonEmpty_compose, &$__fn) {
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
$fa = ($__case_1)->v1;
$__res = ($apply)(($map2)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $a)), ($traverseWithIndex1)(($__global_Data_NonEmpty_compose)($f1, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $fa));
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
}, "FunctorWithIndex0" => function($__dollar____unused) use ($functorWithIndex1) {
  $__num = func_num_args();
  $__res = $functorWithIndex1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) use ($foldableWithIndexNonEmpty1) {
  $__num = func_num_args();
  $__res = $foldableWithIndexNonEmpty1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) use ($traversableNonEmpty1) {
  $__num = func_num_args();
  $__res = $traversableNonEmpty1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_traversableWithIndexNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_traversableWithIndexNonEmpty';

// Data_NonEmpty_foldable1NonEmpty
function Data_NonEmpty_foldable1NonEmpty($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_foldable1NonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_foldableNonEmpty = ($GLOBALS['Data_NonEmpty_foldableNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldableNonEmpty'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__global_Data_NonEmpty_compose = ($GLOBALS['Data_NonEmpty_compose'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_compose'));
  $foldl = ($dictFoldable)->foldl;
  $foldr = ($dictFoldable)->foldr;
  $foldableNonEmpty1 = ($__global_Data_NonEmpty_foldableNonEmpty)($dictFoldable);
  $__res = (object)["foldMap1" => function($dictSemigroup) use ($foldl) {
  $__num = func_num_args();
  $append1 = ($dictSemigroup)->append;
  $__res = (function() use ($foldl, $append1, &$__fn) {
  $__fn = function($f, $v = null) use ($foldl, $append1, &$__fn) {
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
$fa = ($__case_1)->v1;
$__res = ($foldl)((function() use ($append1, $f1, &$__fn) {
  $__fn = function($s, $a1 = null) use ($append1, $f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a1) use ($s, &$__fn) { return $__fn($s, $a1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($append1)($s, ($f1)($a1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f1)($a), $fa);
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
}, "foldr1" => (function() use ($__global_Data_Maybe_maybe, $foldr, $__global_Data_NonEmpty_compose, &$__fn) {
  $__fn = function($f, $v = null) use ($__global_Data_Maybe_maybe, $foldr, $__global_Data_NonEmpty_compose, &$__fn) {
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
$fa = ($__case_1)->v1;
$__res = ($__global_Data_Maybe_maybe)($a, ($f1)($a), ($foldr)(function($a1) use ($__global_Data_NonEmpty_compose, $__global_Data_Maybe_maybe, $f1) {
  $__num = func_num_args();
  $__res = ($__global_Data_NonEmpty_compose)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_Maybe_maybe)($a1, ($f1)($a1)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $fa));
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
})(), "foldl1" => (function() use ($foldl, &$__fn) {
  $__fn = function($f, $v = null) use ($foldl, &$__fn) {
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
$fa = ($__case_1)->v1;
$__res = ($foldl)($f1, $a, $fa);
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
})(), "Foldable0" => function($__dollar____unused) use ($foldableNonEmpty1) {
  $__num = func_num_args();
  $__res = $foldableNonEmpty1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_foldable1NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_foldable1NonEmpty';

// Data_NonEmpty_foldl1
function Data_NonEmpty_foldl1($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_foldl1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_foldable1NonEmpty = ($GLOBALS['Data_NonEmpty_foldable1NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_foldable1NonEmpty'));
  $__res = (($__global_Data_NonEmpty_foldable1NonEmpty)($dictFoldable))->foldl1;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_foldl1'] = __NAMESPACE__ . '\\Data_NonEmpty_foldl1';

// Data_NonEmpty_eqNonEmpty
function Data_NonEmpty_eqNonEmpty($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_eqNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $eq1 = ($dictEq1)->eq1;
  $__res = function($dictEq) use ($eq1, $__global_Data_HeytingAlgebra_boolConj) {
  $__num = func_num_args();
  $eq = ($dictEq)->eq;
  $eq11 = ($eq1)($dictEq);
  $__res = (object)["eq" => (function() use ($__global_Data_HeytingAlgebra_boolConj, $eq, $eq11, &$__fn) {
  $__fn = function($x, $y = null) use ($__global_Data_HeytingAlgebra_boolConj, $eq, $eq11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($eq)($l, $r), ($eq11)($l1, $r1));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_eqNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_eqNonEmpty';

// Data_NonEmpty_ordNonEmpty
function Data_NonEmpty_ordNonEmpty($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_ordNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_eqNonEmpty = ($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_eqNonEmpty'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $compare1 = ($dictOrd1)->compare1;
  $eqNonEmpty1 = ($__global_Data_NonEmpty_eqNonEmpty)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $__res = function($dictOrd) use ($compare1, $eqNonEmpty1, $__global_Prim_undefined) {
  $__num = func_num_args();
  $compare = ($dictOrd)->compare;
  $compare11 = ($compare1)($dictOrd);
  $eqNonEmpty2 = ($eqNonEmpty1)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare, $compare11, &$__fn) {
  $__fn = function($x, $y = null) use ($compare, $compare11, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "NonEmpty") && (($__case_1)->tag === "NonEmpty"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
case "GT":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
$__res = ($compare11)($l1, $r1);
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
})(), "Eq0" => function($__dollar____unused) use ($eqNonEmpty2) {
  $__num = func_num_args();
  $__res = $eqNonEmpty2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_ordNonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_ordNonEmpty';

// Data_NonEmpty_eq1NonEmpty
function Data_NonEmpty_eq1NonEmpty($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_eq1NonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_eqNonEmpty = ($GLOBALS['Data_NonEmpty_eqNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_eqNonEmpty'));
  $eqNonEmpty1 = ($__global_Data_NonEmpty_eqNonEmpty)($dictEq1);
  $__res = (object)["eq1" => function($dictEq) use ($eqNonEmpty1) {
  $__num = func_num_args();
  $__res = (($eqNonEmpty1)($dictEq))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_eq1NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_eq1NonEmpty';

// Data_NonEmpty_ord1NonEmpty
function Data_NonEmpty_ord1NonEmpty($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_NonEmpty_ord1NonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_NonEmpty_ordNonEmpty = ($GLOBALS['Data_NonEmpty_ordNonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_ordNonEmpty'));
  $__global_Data_NonEmpty_eq1NonEmpty = ($GLOBALS['Data_NonEmpty_eq1NonEmpty'] ?? \Data\NonEmpty\phpurs_eval_thunk('Data_NonEmpty_eq1NonEmpty'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ordNonEmpty1 = ($__global_Data_NonEmpty_ordNonEmpty)($dictOrd1);
  $eq1NonEmpty1 = ($__global_Data_NonEmpty_eq1NonEmpty)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $__res = (object)["compare1" => function($dictOrd) use ($ordNonEmpty1) {
  $__num = func_num_args();
  $__res = (($ordNonEmpty1)($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Eq10" => function($__dollar____unused) use ($eq1NonEmpty1) {
  $__num = func_num_args();
  $__res = $eq1NonEmpty1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_NonEmpty_ord1NonEmpty'] = __NAMESPACE__ . '\\Data_NonEmpty_ord1NonEmpty';

