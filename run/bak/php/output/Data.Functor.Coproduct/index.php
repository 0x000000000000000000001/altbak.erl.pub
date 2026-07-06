<?php

namespace Data\Functor\Coproduct;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
      case 'Data_Functor_Coproduct_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Coproduct_bimap': $v = (($GLOBALS['Data_Bifunctor_bifunctorEither'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorEither')))->bimap; break;
      case 'Data_Functor_Coproduct_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Functor_Coproduct_newtypeCoproduct': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
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





// Data_Functor_Coproduct_Coproduct
function Data_Functor_Coproduct_Coproduct($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_Coproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_Coproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_Coproduct';

// Data_Functor_Coproduct_showCoproduct
function Data_Functor_Coproduct_showCoproduct($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_showCoproduct';
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
case "Left":
$fa = ($__case_0)->v0;
$__res = ("(left " . (($show)($fa) . ")"));
goto __end;;
break;
case "Right":
$ga = ($__case_0)->v0;
$__res = ("(right " . (($show1)($ga) . ")"));
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
$GLOBALS['Data_Functor_Coproduct_showCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_showCoproduct';

// Data_Functor_Coproduct_right
function Data_Functor_Coproduct_right($ga) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_right';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Right", $ga);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_right'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_right';


// Data_Functor_Coproduct_left
function Data_Functor_Coproduct_left($fa) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_left';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Left", $fa);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_left'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_left';

// Data_Functor_Coproduct_functorCoproduct
function Data_Functor_Coproduct_functorCoproduct($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_functorCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_bimap = ($GLOBALS['Data_Functor_Coproduct_bimap'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_bimap'));
  $map = ($dictFunctor)->map;
  $__res = function($dictFunctor1) use ($__global_Data_Functor_Coproduct_bimap, $map) {
  $__num = func_num_args();
  $map1 = ($dictFunctor1)->map;
  $__res = (object)["map" => (function() use ($__global_Data_Functor_Coproduct_bimap, $map, $map1, &$__fn) {
  $__fn = function($f, $v = null) use ($__global_Data_Functor_Coproduct_bimap, $map, $map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$e = $__case_1;
$__res = ($__global_Data_Functor_Coproduct_bimap)(($map)($f1), ($map1)($f1), $e);
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
$GLOBALS['Data_Functor_Coproduct_functorCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_functorCoproduct';

// Data_Functor_Coproduct_eq1Coproduct
function Data_Functor_Coproduct_eq1Coproduct($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_eq1Coproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $eq1 = ($dictEq1)->eq1;
  $__res = function($dictEq11) use ($eq1) {
  $__num = func_num_args();
  $eq11 = ($dictEq11)->eq1;
  $__res = (object)["eq1" => function($dictEq) use ($eq1, $eq11) {
  $__num = func_num_args();
  $eq12 = ($eq1)($dictEq);
  $eq13 = ($eq11)($dictEq);
  $__res = (function() use ($eq12, $eq13, &$__fn) {
  $__fn = function($v, $v1 = null) use ($eq12, $eq13, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_0;
$y = $__case_1;
$__case_0 = $x;
$__case_1 = $y;
if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$fa = ($__case_0)->v0;
$ga = ($__case_1)->v0;
$__res = ($eq12)($fa, $ga);
goto __end;;
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$fa = ($__case_0)->v0;
$ga = ($__case_1)->v0;
$__res = ($eq13)($fa, $ga);
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
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_eq1Coproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_eq1Coproduct';

// Data_Functor_Coproduct_eqCoproduct
function Data_Functor_Coproduct_eqCoproduct($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_eqCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_eq1Coproduct = ($GLOBALS['Data_Functor_Coproduct_eq1Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_eq1Coproduct'));
  $eq1Coproduct1 = ($__global_Data_Functor_Coproduct_eq1Coproduct)($dictEq1);
  $__res = function($dictEq11) use ($eq1Coproduct1) {
  $__num = func_num_args();
  $eq1 = (($eq1Coproduct1)($dictEq11))->eq1;
  $__res = function($dictEq) use ($eq1) {
  $__num = func_num_args();
  $__res = (object)["eq" => ($eq1)($dictEq)];
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
$GLOBALS['Data_Functor_Coproduct_eqCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_eqCoproduct';

// Data_Functor_Coproduct_ord1Coproduct
function Data_Functor_Coproduct_ord1Coproduct($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_ord1Coproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_eq1Coproduct = ($GLOBALS['Data_Functor_Coproduct_eq1Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_eq1Coproduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $compare1 = ($dictOrd1)->compare1;
  $eq1Coproduct1 = ($__global_Data_Functor_Coproduct_eq1Coproduct)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $__res = function($dictOrd11) use ($eq1Coproduct1, $__global_Prim_undefined, $compare1) {
  $__num = func_num_args();
  $compare11 = ($dictOrd11)->compare1;
  $eq1Coproduct2 = ($eq1Coproduct1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
  $__res = (object)["compare1" => function($dictOrd) use ($compare1, $compare11) {
  $__num = func_num_args();
  $compare12 = ($compare1)($dictOrd);
  $compare13 = ($compare11)($dictOrd);
  $__res = (function() use ($compare12, $compare13, &$__fn) {
  $__fn = function($v, $v1 = null) use ($compare12, $compare13, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_0;
$y = $__case_1;
$__case_0 = $x;
$__case_1 = $y;
if (((($__case_0)->tag === "Left") && (($__case_1)->tag === "Left"))) {
$fa = ($__case_0)->v0;
$ga = ($__case_1)->v0;
$__res = ($compare12)($fa, $ga);
goto __end;;
} else {
if ((($__case_0)->tag === "Left")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "Left")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "Right") && (($__case_1)->tag === "Right"))) {
$fa = ($__case_0)->v0;
$ga = ($__case_1)->v0;
$__res = ($compare13)($fa, $ga);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
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
}, "Eq10" => function($__dollar____unused) use ($eq1Coproduct2) {
  $__num = func_num_args();
  $__res = $eq1Coproduct2;
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
$GLOBALS['Data_Functor_Coproduct_ord1Coproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_ord1Coproduct';

// Data_Functor_Coproduct_ordCoproduct
function Data_Functor_Coproduct_ordCoproduct($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_ordCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_ord1Coproduct = ($GLOBALS['Data_Functor_Coproduct_ord1Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_ord1Coproduct'));
  $__global_Data_Functor_Coproduct_eqCoproduct = ($GLOBALS['Data_Functor_Coproduct_eqCoproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_eqCoproduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ord1Coproduct1 = ($__global_Data_Functor_Coproduct_ord1Coproduct)($dictOrd1);
  $eqCoproduct1 = ($__global_Data_Functor_Coproduct_eqCoproduct)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $__res = function($dictOrd11) use ($ord1Coproduct1, $eqCoproduct1, $__global_Prim_undefined) {
  $__num = func_num_args();
  $compare1 = (($ord1Coproduct1)($dictOrd11))->compare1;
  $eqCoproduct2 = ($eqCoproduct1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
  $__res = function($dictOrd) use ($eqCoproduct2, $__global_Prim_undefined, $compare1) {
  $__num = func_num_args();
  $eqCoproduct3 = ($eqCoproduct2)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => ($compare1)($dictOrd), "Eq0" => function($__dollar____unused) use ($eqCoproduct3) {
  $__num = func_num_args();
  $__res = $eqCoproduct3;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_ordCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_ordCoproduct';

// Data_Functor_Coproduct_coproduct
function Data_Functor_Coproduct_coproduct($v, $v1 = null, $v2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_coproduct';
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
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  switch (($__case_2)->tag) {
case "Left":
$f = $__case_0;
$a = ($__case_2)->v0;
$__res = ($f)($a);
goto __end;;
break;
case "Right":
$g = $__case_1;
$b = ($__case_2)->v0;
$__res = ($g)($b);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_coproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_coproduct';

// Data_Functor_Coproduct_extendCoproduct
function Data_Functor_Coproduct_extendCoproduct($dictExtend) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_extendCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_functorCoproduct = ($GLOBALS['Data_Functor_Coproduct_functorCoproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_functorCoproduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Coproduct_compose = ($GLOBALS['Data_Functor_Coproduct_compose'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_compose'));
  $__global_Data_Functor_Coproduct_Coproduct = ($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct'));
  $__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
  $extend = ($dictExtend)->extend;
  $functorCoproduct1 = ($__global_Data_Functor_Coproduct_functorCoproduct)((($dictExtend)->Functor0)($__global_Prim_undefined));
  $__res = function($dictExtend1) use ($functorCoproduct1, $__global_Prim_undefined, $__global_Data_Functor_Coproduct_compose, $__global_Data_Functor_Coproduct_Coproduct, $__global_Data_Functor_Coproduct_coproduct, $extend) {
  $__num = func_num_args();
  $extend1 = ($dictExtend1)->extend;
  $functorCoproduct2 = ($functorCoproduct1)((($dictExtend1)->Functor0)($__global_Prim_undefined));
  $__res = (object)["extend" => function($f) use ($__global_Data_Functor_Coproduct_compose, $__global_Data_Functor_Coproduct_Coproduct, $__global_Data_Functor_Coproduct_coproduct, $extend, $extend1) {
  $__num = func_num_args();
  $__res = ($__global_Data_Functor_Coproduct_compose)($__global_Data_Functor_Coproduct_Coproduct, ($__global_Data_Functor_Coproduct_coproduct)(($__global_Data_Functor_Coproduct_compose)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($extend)(($__global_Data_Functor_Coproduct_compose)($f, ($__global_Data_Functor_Coproduct_compose)($__global_Data_Functor_Coproduct_Coproduct, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})))), ($__global_Data_Functor_Coproduct_compose)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($extend1)(($__global_Data_Functor_Coproduct_compose)($f, ($__global_Data_Functor_Coproduct_compose)($__global_Data_Functor_Coproduct_Coproduct, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}))))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) use ($functorCoproduct2) {
  $__num = func_num_args();
  $__res = $functorCoproduct2;
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
$GLOBALS['Data_Functor_Coproduct_extendCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_extendCoproduct';

// Data_Functor_Coproduct_comonadCoproduct
function Data_Functor_Coproduct_comonadCoproduct($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_comonadCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_extendCoproduct = ($GLOBALS['Data_Functor_Coproduct_extendCoproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_extendCoproduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
  $extract = ($dictComonad)->extract;
  $extendCoproduct1 = ($__global_Data_Functor_Coproduct_extendCoproduct)((($dictComonad)->Extend0)($__global_Prim_undefined));
  $__res = function($dictComonad1) use ($extendCoproduct1, $__global_Prim_undefined, $__global_Data_Functor_Coproduct_coproduct, $extract) {
  $__num = func_num_args();
  $extendCoproduct2 = ($extendCoproduct1)((($dictComonad1)->Extend0)($__global_Prim_undefined));
  $__res = (object)["extract" => ($__global_Data_Functor_Coproduct_coproduct)($extract, ($dictComonad1)->extract), "Extend0" => function($__dollar____unused) use ($extendCoproduct2) {
  $__num = func_num_args();
  $__res = $extendCoproduct2;
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
$GLOBALS['Data_Functor_Coproduct_comonadCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_comonadCoproduct';

// Data_Functor_Coproduct_bihoistCoproduct
function Data_Functor_Coproduct_bihoistCoproduct($natF, $natG = null, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Coproduct_bihoistCoproduct';
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($natF, $natG, $__fn) { return $__fn($natF, $natG, $v); };
    if ($__num === 1) return function($natG, $v = null) use ($natF, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($natF, $natG, $v);
      if ($__num2 === 1) return function($v) use ($natF, $natG, $__fn) { return $__fn($natF, $natG, $v); };
      return phpurs_curry_fallback($__fn, [$natF], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Functor_Coproduct_bimap = ($GLOBALS['Data_Functor_Coproduct_bimap'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_bimap'));
  $__case_0 = $natF;
  $__case_1 = $natG;
  $__case_2 = $v;
  if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$e = $__case_2;
$__res = ($__global_Data_Functor_Coproduct_bimap)($natF1, $natG1, $e);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Functor_Coproduct_bihoistCoproduct'] = __NAMESPACE__ . '\\Data_Functor_Coproduct_bihoistCoproduct';

