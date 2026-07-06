<?php

namespace Control\Monad\List\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.List.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
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
      case 'Control_Monad_List_Trans_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_List_Trans_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Control_Monad_List_Trans_map1': $v = (($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy')))->map; break;
      case 'Control_Monad_List_Trans_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Control_Monad_List_Trans_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Control_Monad_List_Trans_pure': $v = (($GLOBALS['Data_Lazy_applicativeLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applicativeLazy')))->pure; break;
      case 'Control_Monad_List_Trans_Done': $v = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")); break;
      case 'Control_Monad_List_Trans_newtypeListT': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_List_Trans_monadTransListT': $v = (object)["lift" => function($dictMonad) {
  $__num = func_num_args();
  $__global_Control_Monad_List_Trans_fromEffect = ($GLOBALS['Control_Monad_List_Trans_fromEffect'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_fromEffect'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = ($__global_Control_Monad_List_Trans_fromEffect)((($dictMonad)->Applicative0)($__global_Prim_undefined));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_List_Trans_lift': $v = (($GLOBALS['Control_Monad_List_Trans_monadTransListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_monadTransListT')))->lift; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Control_Monad_List_Trans_Yield
function Control_Monad_List_Trans_Yield($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_Yield';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Yield", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_Yield'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_Yield';

// Control_Monad_List_Trans_Skip
function Control_Monad_List_Trans_Skip($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_Skip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Skip", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_Skip'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_Skip';


// Control_Monad_List_Trans_ListT
function Control_Monad_List_Trans_ListT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_ListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_ListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_ListT';

// Control_Monad_List_Trans_wrapLazy
function Control_Monad_List_Trans_wrapLazy($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_wrapLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $pure1 = ($dictApplicative)->pure;
  $__res = function($v) use ($pure1) {
  $__num = func_num_args();
  $__res = ($pure1)(new Phpurs_Data1("Skip", $v));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_wrapLazy'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_wrapLazy';

// Control_Monad_List_Trans_wrapEffect
function Control_Monad_List_Trans_wrapEffect($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_wrapEffect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_compose = ($GLOBALS['Control_Monad_List_Trans_compose'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_compose'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $map2 = ($dictFunctor)->map;
  $__res = function($v) use ($map2, $__global_Control_Monad_List_Trans_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__num = func_num_args();
  $__res = ($map2)(($__global_Control_Monad_List_Trans_compose)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Skip", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Control_Monad_List_Trans_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const)), $v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_wrapEffect'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_wrapEffect';

// Control_Monad_List_Trans_unfold
function Control_Monad_List_Trans_unfold($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_unfold';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  while (true) {
$map2 = ((((((($dictMonad)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
$__res = (function() use ($__global_Data_Lazy_defer, $dictMonad, $map2, &$__fn) {
  $__fn = function($f, $z = null) use ($__global_Data_Lazy_defer, $dictMonad, $map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_List_Trans_unfold = ($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_unfold'));
  $g = function($v) use ($__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_unfold, $dictMonad, $f) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$z__prime__ = (($__case_0)->v0)->v0;
$a = (($__case_0)->v0)->v1;
$__res = new Phpurs_Data2("Yield", $a, ($__global_Data_Lazy_defer)(function($v1) use ($__global_Control_Monad_List_Trans_unfold, $dictMonad, $f, $z__prime__) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_List_Trans_unfold)($dictMonad, $f, $z__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
goto __end;;
} else {
switch (($__case_0)->tag) {
case "Nothing":
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($map2)($g, ($f)($z));
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
$GLOBALS['Control_Monad_List_Trans_unfold'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_unfold';

// Control_Monad_List_Trans_uncons
function Control_Monad_List_Trans_uncons($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  while (true) {
$pure1 = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
$bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$__res = function($v) use ($pure1, $__global_Data_Lazy_force, $dictMonad, $bind) {
  $__num = func_num_args();
  $__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
  $__case_0 = $v;
  if (true) {
$l = $__case_0;
$g = function($v1) use ($pure1, $__global_Data_Lazy_force, $__global_Control_Monad_List_Trans_uncons, $dictMonad) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__res = ($pure1)(new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", $a, ($__global_Data_Lazy_force)($s))));
goto __end;;
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = ($__global_Control_Monad_List_Trans_uncons)($dictMonad, ($__global_Data_Lazy_force)($s));
goto __end;;
break;
case "Done":
$__res = ($pure1)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($bind)($l, $g);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
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
$GLOBALS['Control_Monad_List_Trans_uncons'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_uncons';

// Control_Monad_List_Trans_tail
function Control_Monad_List_Trans_tail($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
  $__global_Control_Monad_List_Trans_map = ($GLOBALS['Control_Monad_List_Trans_map'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $map2 = ((((((($dictMonad)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $uncons1 = ($__global_Control_Monad_List_Trans_uncons)($dictMonad);
  $__res = function($l) use ($map2, $__global_Control_Monad_List_Trans_map, $__global_Data_Tuple_snd, $uncons1) {
  $__num = func_num_args();
  $__res = ($map2)(($__global_Control_Monad_List_Trans_map)($__global_Data_Tuple_snd), ($uncons1)($l));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_tail'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_tail';

// Control_Monad_List_Trans_stepMap
function Control_Monad_List_Trans_stepMap($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_stepMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map2 = ($dictFunctor)->map;
  $__res = (function() use ($map2, &$__fn) {
  $__fn = function($f, $v = null) use ($map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$l = $__case_1;
$__res = ($map2)($f1, $l);
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
$GLOBALS['Control_Monad_List_Trans_stepMap'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_stepMap';

// Control_Monad_List_Trans_takeWhile
function Control_Monad_List_Trans_takeWhile($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_takeWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_stepMap = ($GLOBALS['Control_Monad_List_Trans_stepMap'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_stepMap'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
  while (true) {
$stepMap1 = ($__global_Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = function($f) use ($__global_Control_Monad_List_Trans_map1, $dictApplicative, $stepMap1) {
  $__num = func_num_args();
  $__global_Control_Monad_List_Trans_takeWhile = ($GLOBALS['Control_Monad_List_Trans_takeWhile'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_takeWhile'));
  $g = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_takeWhile, $dictApplicative) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
$__res = new Phpurs_Data2("Yield", $a, ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_takeWhile)($dictApplicative, $f), $s));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_takeWhile)($dictApplicative, $f), $s));
goto __end;;
break;
case "Done":
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($stepMap1)($g);
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
$GLOBALS['Control_Monad_List_Trans_takeWhile'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_takeWhile';

// Control_Monad_List_Trans_scanl
function Control_Monad_List_Trans_scanl($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_scanl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_unfold = ($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_unfold'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $map2 = ((((((($dictMonad)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $unfold1 = ($__global_Control_Monad_List_Trans_unfold)($dictMonad);
  $__res = (function() use ($__global_Data_Lazy_force, $map2, $unfold1, &$__fn) {
  $__fn = function($f, $b = null, $l = null) use ($__global_Data_Lazy_force, $map2, $unfold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $b, &$__fn) { return $__fn($f, $b, $l); };
    if ($__num === 1) return function($b, $l = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b, $l);
      if ($__num2 === 1) return function($l) use ($f, $b, &$__fn) { return $__fn($f, $b, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $g = function($v) use ($f, $__global_Data_Lazy_force, $map2) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$b__prime__ = ($__case_0)->v0;
$l__prime__ = ($__case_0)->v1;
$h = function($v1) use ($f, $b__prime__, $__global_Data_Lazy_force) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$b__prime____prime__ = ($f)($b__prime__, $a);
$__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", $b__prime____prime__, ($__global_Data_Lazy_force)($s)), $b__prime__));
goto __end;;
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", $b__prime__, ($__global_Data_Lazy_force)($s)), $b__prime__));
goto __end;;
break;
case "Done":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($map2)($h, $l__prime__);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($unfold1)($g, new Phpurs_Data2("Tuple", $b, $l));
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
$GLOBALS['Control_Monad_List_Trans_scanl'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_scanl';

// Control_Monad_List_Trans_prepend'
function Control_Monad_List_Trans_prepend__prime__($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_prepend__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $pure1 = ($dictApplicative)->pure;
  $__res = (function() use ($pure1, &$__fn) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($pure1)(new Phpurs_Data2("Yield", $h, $t));
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
$GLOBALS['Control_Monad_List_Trans_prepend__prime__'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_prepend__prime__';

// Control_Monad_List_Trans_prepend
function Control_Monad_List_Trans_prepend($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_prepend';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_prepend__prime__ = ($GLOBALS['Control_Monad_List_Trans_prepend__prime__'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_prepend__prime__'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $prepend__prime__1 = ($__global_Control_Monad_List_Trans_prepend__prime__)($dictApplicative);
  $__res = (function() use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, $__global_Data_Lazy_defer, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($h, &$__fn) { return $__fn($h, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($prepend__prime__1)($h, ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($t)));
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
$GLOBALS['Control_Monad_List_Trans_prepend'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_prepend';

// Control_Monad_List_Trans_nil
function Control_Monad_List_Trans_nil($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_nil';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (($dictApplicative)->pure)(($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done")));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_nil'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_nil';

// Control_Monad_List_Trans_singleton
function Control_Monad_List_Trans_singleton($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_prepend = ($GLOBALS['Control_Monad_List_Trans_prepend'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_prepend'));
  $__global_Control_Monad_List_Trans_nil = ($GLOBALS['Control_Monad_List_Trans_nil'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_nil'));
  $prepend1 = ($__global_Control_Monad_List_Trans_prepend)($dictApplicative);
  $nil1 = ($__global_Control_Monad_List_Trans_nil)($dictApplicative);
  $__res = function($a) use ($prepend1, $nil1) {
  $__num = func_num_args();
  $__res = ($prepend1)($a, $nil1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_singleton'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_singleton';

// Control_Monad_List_Trans_take
function Control_Monad_List_Trans_take($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_take';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_nil = ($GLOBALS['Control_Monad_List_Trans_nil'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_nil'));
  $__global_Control_Monad_List_Trans_stepMap = ($GLOBALS['Control_Monad_List_Trans_stepMap'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_stepMap'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
  while (true) {
$nil1 = ($__global_Control_Monad_List_Trans_nil)($dictApplicative);
$stepMap1 = ($__global_Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = (function() use ($nil1, $__global_Control_Monad_List_Trans_map1, $dictApplicative, $stepMap1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($nil1, $__global_Control_Monad_List_Trans_map1, $dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_List_Trans_take = ($GLOBALS['Control_Monad_List_Trans_take'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_take'));
  $__case_0 = $v;
  $__case_1 = $v1;
  switch ($__case_0) {
case 0:
$__res = $nil1;
goto __end;;
break;
default:
$n = $__case_0;
$fa = $__case_1;
$f = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_take, $dictApplicative, $n) {
  $__num = func_num_args();
  $__case_0 = $v2;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__res = new Phpurs_Data2("Yield", $a, ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_take)($dictApplicative, ($n - 1)), $s));
goto __end;;
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_take)($dictApplicative, $n), $s));
goto __end;;
break;
case "Done":
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($stepMap1)($f, $fa);
goto __end;;
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
$GLOBALS['Control_Monad_List_Trans_take'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_take';

// Control_Monad_List_Trans_zipWith'
function Control_Monad_List_Trans_zipWith__prime__($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_zipWith__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_nil = ($GLOBALS['Control_Monad_List_Trans_nil'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_nil'));
  $__global_Control_Monad_List_Trans_prepend__prime__ = ($GLOBALS['Control_Monad_List_Trans_prepend__prime__'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_prepend__prime__'));
  $__global_Control_Monad_List_Trans_wrapEffect = ($GLOBALS['Control_Monad_List_Trans_wrapEffect'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_wrapEffect'));
  $__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  while (true) {
$Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
$pure1 = ($Applicative0)->pure;
$nil1 = ($__global_Control_Monad_List_Trans_nil)($Applicative0);
$Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
$Functor0 = (((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
$map2 = ($Functor0)->map;
$prepend__prime__1 = ($__global_Control_Monad_List_Trans_prepend__prime__)($Applicative0);
$wrapEffect1 = ($__global_Control_Monad_List_Trans_wrapEffect)($Functor0);
$bind = ($Bind1)->bind;
$uncons1 = ($__global_Control_Monad_List_Trans_uncons)($dictMonad);
$__res = function($f) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $dictMonad, $wrapEffect1, $bind, $uncons1) {
  $__num = func_num_args();
  $__global_Control_Monad_List_Trans_zipWith__prime__ = ($GLOBALS['Control_Monad_List_Trans_zipWith__prime__'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_zipWith__prime__'));
  $g = (function() use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, &$__fn) {
  $__fn = function($v, $v1 = null) use ($pure1, $nil1, $map2, $__global_Data_Function_flip, $prepend__prime__1, $__global_Data_Lazy_defer, $__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if ((($__case_1)->tag === "Nothing")) {
$__res = ($pure1)($nil1);
goto __end;;
} else {
if ((($__case_0)->tag === "Nothing")) {
$__res = ($pure1)($nil1);
goto __end;;
} else {
if ((((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple")) && ((($__case_1)->tag === "Just") && ((($__case_1)->v0)->tag === "Tuple")))) {
$ha = (($__case_0)->v0)->v0;
$ta = (($__case_0)->v0)->v1;
$hb = (($__case_1)->v0)->v0;
$tb = (($__case_1)->v0)->v1;
$__res = ($map2)(($__global_Data_Function_flip)($prepend__prime__1, ($__global_Data_Lazy_defer)(function($v2) use ($__global_Control_Monad_List_Trans_zipWith__prime__, $dictMonad, $f, $ta, $tb) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_List_Trans_zipWith__prime__)($dictMonad, $f, $ta, $tb);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), ($f)($ha, $hb));
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
  $loop = (function() use ($wrapEffect1, $bind, $uncons1, $g, &$__fn) {
  $__fn = function($fa, $fb = null) use ($wrapEffect1, $bind, $uncons1, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($fb) use ($fa, &$__fn) { return $__fn($fa, $fb); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($wrapEffect1)(($bind)(($uncons1)($fa), function($ua) use ($bind, $uncons1, $fb, $g) {
  $__num = func_num_args();
  $__res = ($bind)(($uncons1)($fb), function($ub) use ($g, $ua) {
  $__num = func_num_args();
  $__res = ($g)($ua, $ub);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = $loop;
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
$GLOBALS['Control_Monad_List_Trans_zipWith__prime__'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_zipWith__prime__';

// Control_Monad_List_Trans_zipWith
function Control_Monad_List_Trans_zipWith($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_zipWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_zipWith__prime__ = ($GLOBALS['Control_Monad_List_Trans_zipWith__prime__'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_zipWith__prime__'));
  $pure1 = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $zipWith__prime__1 = ($__global_Control_Monad_List_Trans_zipWith__prime__)($dictMonad);
  $__res = function($f) use ($pure1, $zipWith__prime__1) {
  $__num = func_num_args();
  $g = (function() use ($pure1, $f, &$__fn) {
  $__fn = function($a, $b = null) use ($pure1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($pure1)(($f)($a, $b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($zipWith__prime__1)($g);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_zipWith'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_zipWith';


// Control_Monad_List_Trans_mapMaybe
function Control_Monad_List_Trans_mapMaybe($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_stepMap = ($GLOBALS['Control_Monad_List_Trans_stepMap'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_stepMap'));
  $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
  $__global_Control_Monad_List_Trans_map = ($GLOBALS['Control_Monad_List_Trans_map'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map'));
  $__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
  while (true) {
$stepMap1 = ($__global_Control_Monad_List_Trans_stepMap)($dictFunctor);
$__res = function($f) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $__global_Control_Monad_List_Trans_map1, $dictFunctor, $stepMap1) {
  $__num = func_num_args();
  $__global_Control_Monad_List_Trans_mapMaybe = ($GLOBALS['Control_Monad_List_Trans_mapMaybe'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_mapMaybe'));
  $g = function($v) use ($__global_Data_Maybe_fromMaybe, $__global_Control_Monad_List_Trans_map, $f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_mapMaybe, $dictFunctor) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__res = ($__global_Data_Maybe_fromMaybe)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Skip", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Control_Monad_List_Trans_map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Yield", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f)($a)), ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
goto __end;;
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_mapMaybe)($dictFunctor, $f), $s));
goto __end;;
break;
case "Done":
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($stepMap1)($g);
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
$GLOBALS['Control_Monad_List_Trans_mapMaybe'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_mapMaybe';

// Control_Monad_List_Trans_iterate
function Control_Monad_List_Trans_iterate($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_iterate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_unfold = ($GLOBALS['Control_Monad_List_Trans_unfold'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_unfold'));
  $pure1 = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $unfold1 = ($__global_Control_Monad_List_Trans_unfold)($dictMonad);
  $__res = (function() use ($pure1, $unfold1, &$__fn) {
  $__fn = function($f, $a = null) use ($pure1, $unfold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $g = function($x) use ($pure1, $f) {
  $__num = func_num_args();
  $__res = ($pure1)(new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", ($f)($x), $x)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($unfold1)($g, $a);
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
$GLOBALS['Control_Monad_List_Trans_iterate'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_iterate';

// Control_Monad_List_Trans_repeat
function Control_Monad_List_Trans_repeat($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_repeat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_iterate = ($GLOBALS['Control_Monad_List_Trans_iterate'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_iterate'));
  $__global_Control_Monad_List_Trans_identity = ($GLOBALS['Control_Monad_List_Trans_identity'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_identity'));
  $__res = ($__global_Control_Monad_List_Trans_iterate)($dictMonad, $__global_Control_Monad_List_Trans_identity);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_repeat'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_repeat';

// Control_Monad_List_Trans_head
function Control_Monad_List_Trans_head($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
  $__global_Control_Monad_List_Trans_map = ($GLOBALS['Control_Monad_List_Trans_map'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map'));
  $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
  $map2 = ((((((($dictMonad)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $uncons1 = ($__global_Control_Monad_List_Trans_uncons)($dictMonad);
  $__res = function($l) use ($map2, $__global_Control_Monad_List_Trans_map, $__global_Data_Tuple_fst, $uncons1) {
  $__num = func_num_args();
  $__res = ($map2)(($__global_Control_Monad_List_Trans_map)($__global_Data_Tuple_fst), ($uncons1)($l));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_head'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_head';

// Control_Monad_List_Trans_functorListT
function Control_Monad_List_Trans_functorListT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_functorListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_stepMap = ($GLOBALS['Control_Monad_List_Trans_stepMap'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_stepMap'));
  $__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
  while (true) {
$stepMap1 = ($__global_Control_Monad_List_Trans_stepMap)($dictFunctor);
$__res = (object)["map" => function($f) use ($__global_Control_Monad_List_Trans_map1, $dictFunctor, $stepMap1) {
  $__num = func_num_args();
  $__global_Control_Monad_List_Trans_functorListT = ($GLOBALS['Control_Monad_List_Trans_functorListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_functorListT'));
  $g = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_functorListT, $dictFunctor) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__res = new Phpurs_Data2("Yield", ($f)($a), ($__global_Control_Monad_List_Trans_map1)(((($__global_Control_Monad_List_Trans_functorListT)($dictFunctor))->map)($f), $s));
goto __end;;
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(((($__global_Control_Monad_List_Trans_functorListT)($dictFunctor))->map)($f), $s));
goto __end;;
break;
case "Done":
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($stepMap1)($g);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_functorListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_functorListT';

// Control_Monad_List_Trans_fromEffect
function Control_Monad_List_Trans_fromEffect($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_fromEffect';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_nil = ($GLOBALS['Control_Monad_List_Trans_nil'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_nil'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $map2 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $nil1 = ($__global_Control_Monad_List_Trans_nil)($dictApplicative);
  $__res = function($fa) use ($map2, $__global_Data_Function_flip, $__global_Data_Lazy_defer, $nil1) {
  $__num = func_num_args();
  $__res = ($map2)(($__global_Data_Function_flip)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Yield", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Lazy_defer)(function($v) use ($nil1) {
  $__num = func_num_args();
  $__res = $nil1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), $fa);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_fromEffect'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_fromEffect';



// Control_Monad_List_Trans_foldlRec'
function Control_Monad_List_Trans_foldlRec__prime__($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_foldlRec__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
  $__global_Control_Monad_Rec_Class_tailRecM2 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM2'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM2'));
  $Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
  $pure1 = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $bind = ((($Monad0)->Bind1)($__global_Prim_undefined))->bind;
  $uncons1 = ($__global_Control_Monad_List_Trans_uncons)($Monad0);
  $tailRecM2 = ($__global_Control_Monad_Rec_Class_tailRecM2)($dictMonadRec);
  $__res = function($f) use ($pure1, $bind, $uncons1, $tailRecM2) {
  $__num = func_num_args();
  $loop = (function() use ($pure1, $bind, $f, $uncons1, &$__fn) {
  $__fn = function($b, $l = null) use ($pure1, $bind, $f, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $g = function($v) use ($pure1, $b, $bind, $f) {
  $__num = func_num_args();
  $__case_0 = $v;
  if ((($__case_0)->tag === "Nothing")) {
$__res = ($pure1)(new Phpurs_Data1("Done", $b));
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
$__res = ($bind)(($f)($b, $a), function($b__prime__) use ($pure1, $as) {
  $__num = func_num_args();
  $__res = ($pure1)(new Phpurs_Data1("Loop", (object)["a" => $b__prime__, "b" => $as]));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($bind)(($uncons1)($l), $g);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($tailRecM2)($loop);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_foldlRec__prime__'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_foldlRec__prime__';

// Control_Monad_List_Trans_runListTRec
function Control_Monad_List_Trans_runListTRec($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_runListTRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_foldlRec__prime__ = ($GLOBALS['Control_Monad_List_Trans_foldlRec__prime__'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_foldlRec__prime__'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $pure1 = ((((($dictMonadRec)->Monad0)($__global_Prim_undefined))->Applicative0)($__global_Prim_undefined))->pure;
  $__res = ($__global_Control_Monad_List_Trans_foldlRec__prime__)($dictMonadRec, (function() use ($pure1, $__global_Data_Unit_unit, &$__fn) {
  $__fn = function($v, $v1 = null) use ($pure1, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($pure1)($__global_Data_Unit_unit);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $__global_Data_Unit_unit);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_runListTRec'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_runListTRec';

// Control_Monad_List_Trans_foldlRec
function Control_Monad_List_Trans_foldlRec($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_foldlRec';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
  $__global_Control_Monad_Rec_Class_tailRecM2 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM2'] ?? \Control\Monad\Rec\Class\phpurs_eval_thunk('Control_Monad_Rec_Class_tailRecM2'));
  $Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
  $pure1 = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $bind = ((($Monad0)->Bind1)($__global_Prim_undefined))->bind;
  $uncons1 = ($__global_Control_Monad_List_Trans_uncons)($Monad0);
  $tailRecM2 = ($__global_Control_Monad_Rec_Class_tailRecM2)($dictMonadRec);
  $__res = function($f) use ($pure1, $bind, $uncons1, $tailRecM2) {
  $__num = func_num_args();
  $loop = (function() use ($pure1, $f, $bind, $uncons1, &$__fn) {
  $__fn = function($b, $l = null) use ($pure1, $f, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $g = function($v) use ($pure1, $b, $f) {
  $__num = func_num_args();
  $__case_0 = $v;
  if ((($__case_0)->tag === "Nothing")) {
$__res = ($pure1)(new Phpurs_Data1("Done", $b));
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
$__res = ($pure1)(new Phpurs_Data1("Loop", (object)["a" => ($f)($b, $a), "b" => $as]));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($bind)(($uncons1)($l), $g);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($tailRecM2)($loop);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_foldlRec'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_foldlRec';

// Control_Monad_List_Trans_foldl'
function Control_Monad_List_Trans_foldl__prime__($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_foldl__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $pure1 = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $uncons1 = ($__global_Control_Monad_List_Trans_uncons)($dictMonad);
  $__res = function($f) use ($pure1, $bind, $__global_Data_Function_flip, $uncons1) {
  $__num = func_num_args();
  $loop = (function() use ($pure1, $bind, $f, $__global_Data_Function_flip, &$loop, $uncons1, &$__fn) {
  $__fn = function($b, $l = null) use ($pure1, $bind, $f, $__global_Data_Function_flip, &$loop, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$g = function($v) use ($pure1, $b, $bind, $f, $__global_Data_Function_flip, &$loop) {
  $__num = func_num_args();
  $__case_0 = $v;
  if ((($__case_0)->tag === "Nothing")) {
$__res = ($pure1)($b);
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
$__res = ($bind)(($f)($b, $a), ($__global_Data_Function_flip)($loop, $as));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($bind)(($uncons1)($l), $g);
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = $loop;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_foldl__prime__'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_foldl__prime__';

// Control_Monad_List_Trans_runListT
function Control_Monad_List_Trans_runListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_runListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_foldl__prime__ = ($GLOBALS['Control_Monad_List_Trans_foldl__prime__'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_foldl__prime__'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $pure1 = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = ($__global_Control_Monad_List_Trans_foldl__prime__)($dictMonad, (function() use ($pure1, $__global_Data_Unit_unit, &$__fn) {
  $__fn = function($v, $v1 = null) use ($pure1, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($pure1)($__global_Data_Unit_unit);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $__global_Data_Unit_unit);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_runListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_runListT';

// Control_Monad_List_Trans_foldl
function Control_Monad_List_Trans_foldl($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_foldl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_uncons = ($GLOBALS['Control_Monad_List_Trans_uncons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_uncons'));
  $pure1 = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $uncons1 = ($__global_Control_Monad_List_Trans_uncons)($dictMonad);
  $__res = function($f) use ($pure1, $bind, $uncons1) {
  $__num = func_num_args();
  $loop = (function() use ($pure1, &$loop, $f, $bind, $uncons1, &$__fn) {
  $__fn = function($b, $l = null) use ($pure1, &$loop, $f, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($b, &$__fn) { return $__fn($b, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$g = function($v) use ($pure1, $b, &$loop, $f) {
  $__num = func_num_args();
  $__case_0 = $v;
  if ((($__case_0)->tag === "Nothing")) {
$__res = ($pure1)($b);
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$as = (($__case_0)->v0)->v1;
$__res = ($loop)(($f)($b, $a), $as);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($bind)(($uncons1)($l), $g);
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = $loop;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_foldl'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_foldl';

// Control_Monad_List_Trans_filter
function Control_Monad_List_Trans_filter($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_stepMap = ($GLOBALS['Control_Monad_List_Trans_stepMap'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_stepMap'));
  $__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
  while (true) {
$stepMap1 = ($__global_Control_Monad_List_Trans_stepMap)($dictFunctor);
$__res = function($f) use ($__global_Control_Monad_List_Trans_map1, $dictFunctor, $stepMap1) {
  $__num = func_num_args();
  $__global_Control_Monad_List_Trans_filter = ($GLOBALS['Control_Monad_List_Trans_filter'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_filter'));
  $g = function($v) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_filter, $dictFunctor, $f) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$s__prime__ = ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_filter)($dictFunctor, $f), $s);
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
$__res = new Phpurs_Data2("Yield", $a, $s__prime__);
goto __end;;
break;
default:
$__res = new Phpurs_Data1("Skip", $s__prime__);
goto __end;;
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
$s__prime__ = ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_filter)($dictFunctor, $f), $s);
$__res = new Phpurs_Data1("Skip", $s__prime__);
goto __end;;
break;
case "Done":
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($stepMap1)($g);
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
$GLOBALS['Control_Monad_List_Trans_filter'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_filter';

// Control_Monad_List_Trans_dropWhile
function Control_Monad_List_Trans_dropWhile($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_dropWhile';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_stepMap = ($GLOBALS['Control_Monad_List_Trans_stepMap'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_stepMap'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
  while (true) {
$stepMap1 = ($__global_Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = function($f) use ($__global_Control_Monad_List_Trans_map1, $dictApplicative, $stepMap1) {
  $__num = func_num_args();
  $__global_Control_Monad_List_Trans_dropWhile = ($GLOBALS['Control_Monad_List_Trans_dropWhile'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_dropWhile'));
  $g = function($v) use ($f, $__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_dropWhile, $dictApplicative) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__case_0 = ($f)($a);
switch ($__case_0) {
case true:
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_dropWhile)($dictApplicative, $f), $s));
goto __end;;
break;
default:
$__res = new Phpurs_Data2("Yield", $a, $s);
goto __end;;
break;
};
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_dropWhile)($dictApplicative, $f), $s));
goto __end;;
break;
case "Done":
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($stepMap1)($g);
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
$GLOBALS['Control_Monad_List_Trans_dropWhile'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_dropWhile';

// Control_Monad_List_Trans_drop
function Control_Monad_List_Trans_drop($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_drop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_stepMap = ($GLOBALS['Control_Monad_List_Trans_stepMap'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_stepMap'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
  while (true) {
$stepMap1 = ($__global_Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = (function() use ($__global_Control_Monad_List_Trans_map1, $dictApplicative, $stepMap1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Control_Monad_List_Trans_map1, $dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_List_Trans_drop = ($GLOBALS['Control_Monad_List_Trans_drop'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_drop'));
  $__case_0 = $v;
  $__case_1 = $v1;
  switch ($__case_0) {
case 0:
$fa = $__case_1;
$__res = $fa;
goto __end;;
break;
default:
$n = $__case_0;
$fa = $__case_1;
$f = function($v2) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_drop, $dictApplicative, $n) {
  $__num = func_num_args();
  $__case_0 = $v2;
  switch (($__case_0)->tag) {
case "Yield":
$s = ($__case_0)->v1;
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_drop)($dictApplicative, ($n - 1)), $s));
goto __end;;
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(($__global_Control_Monad_List_Trans_drop)($dictApplicative, $n), $s));
goto __end;;
break;
case "Done":
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = ($stepMap1)($f, $fa);
goto __end;;
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
$GLOBALS['Control_Monad_List_Trans_drop'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_drop';

// Control_Monad_List_Trans_cons
function Control_Monad_List_Trans_cons($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_cons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $pure1 = ($dictApplicative)->pure;
  $__res = (function() use ($pure1, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($lh, $t = null) use ($pure1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($lh, &$__fn) { return $__fn($lh, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($pure1)(new Phpurs_Data2("Yield", ($__global_Data_Lazy_force)($lh), $t));
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
$GLOBALS['Control_Monad_List_Trans_cons'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_cons';

// Control_Monad_List_Trans_unfoldable1ListT
function Control_Monad_List_Trans_unfoldable1ListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_unfoldable1ListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_singleton = ($GLOBALS['Control_Monad_List_Trans_singleton'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_singleton'));
  $__global_Control_Monad_List_Trans_cons = ($GLOBALS['Control_Monad_List_Trans_cons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_cons'));
  $__global_Control_Monad_List_Trans_pure = ($GLOBALS['Control_Monad_List_Trans_pure'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_pure'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
  $singleton1 = ($__global_Control_Monad_List_Trans_singleton)($Applicative0);
  $cons1 = ($__global_Control_Monad_List_Trans_cons)($Applicative0);
  $__res = (object)["unfoldr1" => (function() use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$__fn) {
  $__fn = function($f, $b = null) use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = function($v) use ($singleton1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$go, $f) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Nothing"))) {
$x = ($__case_0)->v0;
$__res = ($singleton1)($x);
goto __end;;
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v1)->tag === "Just"))) {
$x = ($__case_0)->v0;
$y = (($__case_0)->v1)->v0;
$__res = ($cons1)(($__global_Control_Monad_List_Trans_pure)($x), ($__global_Data_Lazy_defer)(function($v1) use (&$go, $f, $y) {
  $__num = func_num_args();
  $__res = ($go)(($f)($y));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
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
  $__res = ($go)(($f)($b));
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
$GLOBALS['Control_Monad_List_Trans_unfoldable1ListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_unfoldable1ListT';

// Control_Monad_List_Trans_unfoldableListT
function Control_Monad_List_Trans_unfoldableListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_unfoldableListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_nil = ($GLOBALS['Control_Monad_List_Trans_nil'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_nil'));
  $__global_Control_Monad_List_Trans_cons = ($GLOBALS['Control_Monad_List_Trans_cons'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_cons'));
  $__global_Control_Monad_List_Trans_unfoldable1ListT = ($GLOBALS['Control_Monad_List_Trans_unfoldable1ListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_unfoldable1ListT'));
  $__global_Control_Monad_List_Trans_pure = ($GLOBALS['Control_Monad_List_Trans_pure'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_pure'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
  $nil1 = ($__global_Control_Monad_List_Trans_nil)($Applicative0);
  $cons1 = ($__global_Control_Monad_List_Trans_cons)($Applicative0);
  $unfoldable1ListT1 = ($__global_Control_Monad_List_Trans_unfoldable1ListT)($dictMonad);
  $__res = (object)["unfoldr" => (function() use ($nil1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$__fn) {
  $__fn = function($f, $b = null) use ($nil1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($f, &$__fn) { return $__fn($f, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = function($v) use ($nil1, $cons1, $__global_Control_Monad_List_Trans_pure, $__global_Data_Lazy_defer, &$go, $f) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
$__res = $nil1;
goto __end;;
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$x = (($__case_0)->v0)->v0;
$y = (($__case_0)->v0)->v1;
$__res = ($cons1)(($__global_Control_Monad_List_Trans_pure)($x), ($__global_Data_Lazy_defer)(function($v1) use (&$go, $f, $y) {
  $__num = func_num_args();
  $__res = ($go)(($f)($y));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
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
  $__res = ($go)(($f)($b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => function($__dollar____unused) use ($unfoldable1ListT1) {
  $__num = func_num_args();
  $__res = $unfoldable1ListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_unfoldableListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_unfoldableListT';

// Control_Monad_List_Trans_semigroupListT
function Control_Monad_List_Trans_semigroupListT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_semigroupListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_concat = ($GLOBALS['Control_Monad_List_Trans_concat'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_concat'));
  while (true) {
$__res = (object)["append" => ($__global_Control_Monad_List_Trans_concat)($dictApplicative)];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_semigroupListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_semigroupListT';

// Control_Monad_List_Trans_concat
function Control_Monad_List_Trans_concat($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_concat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_stepMap = ($GLOBALS['Control_Monad_List_Trans_stepMap'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_stepMap'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
  $__global_Control_Monad_List_Trans_semigroupListT = ($GLOBALS['Control_Monad_List_Trans_semigroupListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_semigroupListT'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  while (true) {
$stepMap1 = ($__global_Control_Monad_List_Trans_stepMap)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = (function() use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_semigroupListT, $dictApplicative, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1, &$__fn) {
  $__fn = function($x, $y = null) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_semigroupListT, $dictApplicative, $__global_Data_Lazy_defer, $__global_Data_Function_const, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $f = function($v) use ($__global_Control_Monad_List_Trans_map1, $__global_Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y, $__global_Data_Lazy_defer, $__global_Data_Function_const) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__res = new Phpurs_Data2("Yield", $a, ($__global_Control_Monad_List_Trans_map1)(function($v1) use ($__global_Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y) {
  $__num = func_num_args();
  $__res = ((($__global_Control_Monad_List_Trans_semigroupListT)($dictApplicative))->append)($v1, $y);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $s));
goto __end;;
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(function($v1) use ($__global_Control_Monad_List_Trans_semigroupListT, $dictApplicative, $y) {
  $__num = func_num_args();
  $__res = ((($__global_Control_Monad_List_Trans_semigroupListT)($dictApplicative))->append)($v1, $y);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $s));
goto __end;;
break;
case "Done":
$__res = new Phpurs_Data1("Skip", ($__global_Data_Lazy_defer)(($__global_Data_Function_const)($y)));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($stepMap1)($f, $x);
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
$GLOBALS['Control_Monad_List_Trans_concat'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_concat';

// Control_Monad_List_Trans_monoidListT
function Control_Monad_List_Trans_monoidListT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monoidListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_semigroupListT = ($GLOBALS['Control_Monad_List_Trans_semigroupListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_semigroupListT'));
  $__global_Control_Monad_List_Trans_nil = ($GLOBALS['Control_Monad_List_Trans_nil'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_nil'));
  $semigroupListT1 = ($__global_Control_Monad_List_Trans_semigroupListT)($dictApplicative);
  $__res = (object)["mempty" => ($__global_Control_Monad_List_Trans_nil)($dictApplicative), "Semigroup0" => function($__dollar____unused) use ($semigroupListT1) {
  $__num = func_num_args();
  $__res = $semigroupListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monoidListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monoidListT';

// Control_Monad_List_Trans_catMaybes
function Control_Monad_List_Trans_catMaybes($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_catMaybes';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_mapMaybe = ($GLOBALS['Control_Monad_List_Trans_mapMaybe'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_mapMaybe'));
  $__global_Control_Monad_List_Trans_identity = ($GLOBALS['Control_Monad_List_Trans_identity'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_identity'));
  $__res = ($__global_Control_Monad_List_Trans_mapMaybe)($dictFunctor, $__global_Control_Monad_List_Trans_identity);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_catMaybes'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_catMaybes';

// Control_Monad_List_Trans_monadListT
function Control_Monad_List_Trans_monadListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monadListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_applicativeListT = ($GLOBALS['Control_Monad_List_Trans_applicativeListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_applicativeListT'));
  $__global_Control_Monad_List_Trans_bindListT = ($GLOBALS['Control_Monad_List_Trans_bindListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_bindListT'));
  while (true) {
$__res = (object)["Applicative0" => function($__dollar____unused) use ($__global_Control_Monad_List_Trans_applicativeListT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_List_Trans_applicativeListT)($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) use ($__global_Control_Monad_List_Trans_bindListT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_List_Trans_bindListT)($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monadListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monadListT';

// Control_Monad_List_Trans_bindListT
function Control_Monad_List_Trans_bindListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_bindListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_semigroupListT = ($GLOBALS['Control_Monad_List_Trans_semigroupListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_semigroupListT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_stepMap = ($GLOBALS['Control_Monad_List_Trans_stepMap'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_stepMap'));
  $__global_Control_Monad_List_Trans_map1 = ($GLOBALS['Control_Monad_List_Trans_map1'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_map1'));
  $__global_Control_Monad_List_Trans_applyListT = ($GLOBALS['Control_Monad_List_Trans_applyListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_applyListT'));
  while (true) {
$append = (($__global_Control_Monad_List_Trans_semigroupListT)((($dictMonad)->Applicative0)($__global_Prim_undefined)))->append;
$stepMap1 = ($__global_Control_Monad_List_Trans_stepMap)((((((($dictMonad)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = (object)["bind" => (function() use ($append, $dictMonad, $__global_Control_Monad_List_Trans_map1, $stepMap1, &$__fn) {
  $__fn = function($fa, $f = null) use ($append, $dictMonad, $__global_Control_Monad_List_Trans_map1, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($fa, &$__fn) { return $__fn($fa, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_List_Trans_bindListT = ($GLOBALS['Control_Monad_List_Trans_bindListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_bindListT'));
  $g = function($v) use ($append, $f, $__global_Control_Monad_List_Trans_bindListT, $dictMonad, $__global_Control_Monad_List_Trans_map1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Yield":
$a = ($__case_0)->v0;
$s = ($__case_0)->v1;
$h = function($s__prime__) use ($append, $f, $a, $__global_Control_Monad_List_Trans_bindListT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($append)(($f)($a), ((($__global_Control_Monad_List_Trans_bindListT)($dictMonad))->bind)($s__prime__, $f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)($h, $s));
goto __end;;
break;
case "Skip":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Skip", ($__global_Control_Monad_List_Trans_map1)(function($v1) use ($__global_Control_Monad_List_Trans_bindListT, $dictMonad, $f) {
  $__num = func_num_args();
  $__res = ((($__global_Control_Monad_List_Trans_bindListT)($dictMonad))->bind)($v1, $f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $s));
goto __end;;
break;
case "Done":
$__res = ($GLOBALS['__phpurs_data0_Done'] ??= new Phpurs_Data0("Done"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($stepMap1)($g, $fa);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($__global_Control_Monad_List_Trans_applyListT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_List_Trans_applyListT)($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_bindListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_bindListT';

// Control_Monad_List_Trans_applyListT
function Control_Monad_List_Trans_applyListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_applyListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_functorListT = ($GLOBALS['Control_Monad_List_Trans_functorListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_functorListT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_ap = ($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap'));
  $__global_Control_Monad_List_Trans_monadListT = ($GLOBALS['Control_Monad_List_Trans_monadListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_monadListT'));
  while (true) {
$functorListT1 = ($__global_Control_Monad_List_Trans_functorListT)((((((($dictMonad)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = (object)["apply" => ($__global_Control_Monad_ap)(($__global_Control_Monad_List_Trans_monadListT)($dictMonad)), "Functor0" => function($__dollar____unused) use ($functorListT1) {
  $__num = func_num_args();
  $__res = $functorListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_applyListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_applyListT';

// Control_Monad_List_Trans_applicativeListT
function Control_Monad_List_Trans_applicativeListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_applicativeListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_singleton = ($GLOBALS['Control_Monad_List_Trans_singleton'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_singleton'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_applyListT = ($GLOBALS['Control_Monad_List_Trans_applyListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_applyListT'));
  while (true) {
$__res = (object)["pure" => ($__global_Control_Monad_List_Trans_singleton)((($dictMonad)->Applicative0)($__global_Prim_undefined)), "Apply0" => function($__dollar____unused) use ($__global_Control_Monad_List_Trans_applyListT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_List_Trans_applyListT)($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_applicativeListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_applicativeListT';

// Control_Monad_List_Trans_monadEffectListT
function Control_Monad_List_Trans_monadEffectListT($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monadEffectListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_monadListT = ($GLOBALS['Control_Monad_List_Trans_monadListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_monadListT'));
  $__global_Control_Monad_List_Trans_compose = ($GLOBALS['Control_Monad_List_Trans_compose'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_compose'));
  $__global_Control_Monad_List_Trans_lift = ($GLOBALS['Control_Monad_List_Trans_lift'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_lift'));
  $Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
  $monadListT1 = ($__global_Control_Monad_List_Trans_monadListT)($Monad0);
  $__res = (object)["liftEffect" => ($__global_Control_Monad_List_Trans_compose)(($__global_Control_Monad_List_Trans_lift)($Monad0), ($dictMonadEffect)->liftEffect), "Monad0" => function($__dollar____unused) use ($monadListT1) {
  $__num = func_num_args();
  $__res = $monadListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monadEffectListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monadEffectListT';

// Control_Monad_List_Trans_monadSTListT
function Control_Monad_List_Trans_monadSTListT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monadSTListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_monadListT = ($GLOBALS['Control_Monad_List_Trans_monadListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_monadListT'));
  $__global_Control_Monad_List_Trans_compose = ($GLOBALS['Control_Monad_List_Trans_compose'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_compose'));
  $__global_Control_Monad_List_Trans_lift = ($GLOBALS['Control_Monad_List_Trans_lift'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_lift'));
  $Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
  $monadListT1 = ($__global_Control_Monad_List_Trans_monadListT)($Monad0);
  $__res = (object)["liftST" => ($__global_Control_Monad_List_Trans_compose)(($__global_Control_Monad_List_Trans_lift)($Monad0), ($dictMonadST)->liftST), "Monad0" => function($__dollar____unused) use ($monadListT1) {
  $__num = func_num_args();
  $__res = $monadListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monadSTListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monadSTListT';

// Control_Monad_List_Trans_altListT
function Control_Monad_List_Trans_altListT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_altListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_functorListT = ($GLOBALS['Control_Monad_List_Trans_functorListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_functorListT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_concat = ($GLOBALS['Control_Monad_List_Trans_concat'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_concat'));
  $functorListT1 = ($__global_Control_Monad_List_Trans_functorListT)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = (object)["alt" => ($__global_Control_Monad_List_Trans_concat)($dictApplicative), "Functor0" => function($__dollar____unused) use ($functorListT1) {
  $__num = func_num_args();
  $__res = $functorListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_altListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_altListT';

// Control_Monad_List_Trans_plusListT
function Control_Monad_List_Trans_plusListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_plusListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_List_Trans_altListT = ($GLOBALS['Control_Monad_List_Trans_altListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_altListT'));
  $__global_Control_Monad_List_Trans_nil = ($GLOBALS['Control_Monad_List_Trans_nil'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_nil'));
  $Applicative0 = (($dictMonad)->Applicative0)($__global_Prim_undefined);
  $altListT1 = ($__global_Control_Monad_List_Trans_altListT)($Applicative0);
  $__res = (object)["empty" => ($__global_Control_Monad_List_Trans_nil)($Applicative0), "Alt0" => function($__dollar____unused) use ($altListT1) {
  $__num = func_num_args();
  $__res = $altListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_plusListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_plusListT';

// Control_Monad_List_Trans_alternativeListT
function Control_Monad_List_Trans_alternativeListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_alternativeListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_applicativeListT = ($GLOBALS['Control_Monad_List_Trans_applicativeListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_applicativeListT'));
  $__global_Control_Monad_List_Trans_plusListT = ($GLOBALS['Control_Monad_List_Trans_plusListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_plusListT'));
  $applicativeListT1 = ($__global_Control_Monad_List_Trans_applicativeListT)($dictMonad);
  $plusListT1 = ($__global_Control_Monad_List_Trans_plusListT)($dictMonad);
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeListT1) {
  $__num = func_num_args();
  $__res = $applicativeListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) use ($plusListT1) {
  $__num = func_num_args();
  $__res = $plusListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_alternativeListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_alternativeListT';

// Control_Monad_List_Trans_monadPlusListT
function Control_Monad_List_Trans_monadPlusListT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_List_Trans_monadPlusListT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_List_Trans_monadListT = ($GLOBALS['Control_Monad_List_Trans_monadListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_monadListT'));
  $__global_Control_Monad_List_Trans_alternativeListT = ($GLOBALS['Control_Monad_List_Trans_alternativeListT'] ?? \Control\Monad\List\Trans\phpurs_eval_thunk('Control_Monad_List_Trans_alternativeListT'));
  $monadListT1 = ($__global_Control_Monad_List_Trans_monadListT)($dictMonad);
  $alternativeListT1 = ($__global_Control_Monad_List_Trans_alternativeListT)($dictMonad);
  $__res = (object)["Monad0" => function($__dollar____unused) use ($monadListT1) {
  $__num = func_num_args();
  $__res = $monadListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alternative1" => function($__dollar____unused) use ($alternativeListT1) {
  $__num = func_num_args();
  $__res = $alternativeListT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_List_Trans_monadPlusListT'] = __NAMESPACE__ . '\\Control_Monad_List_Trans_monadPlusListT';

