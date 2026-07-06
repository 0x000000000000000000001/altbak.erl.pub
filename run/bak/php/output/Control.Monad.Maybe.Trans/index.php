<?php

namespace Control\Monad\Maybe\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Maybe.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Control_Monad_Maybe_Trans_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_Maybe_Trans_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Control_Monad_Maybe_Trans_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Control_Monad_Maybe_Trans_newtypeMaybeT': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Maybe_Trans_monadTransMaybeT': $v = (object)["lift" => function($dictMonad) {
  $__num = func_num_args();
  $__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
  $__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
  $__global_Control_Monad_liftM1 = ($GLOBALS['Control_Monad_liftM1'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_liftM1'));
  $__res = ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_liftM1)($dictMonad, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Maybe_Trans_lift': $v = (($GLOBALS['Control_Monad_Maybe_Trans_monadTransMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadTransMaybeT')))->lift; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };





// Control_Monad_Maybe_Trans_MaybeT
function Control_Monad_Maybe_Trans_MaybeT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_MaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_MaybeT';

// Control_Monad_Maybe_Trans_runMaybeT
function Control_Monad_Maybe_Trans_runMaybeT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_runMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = $x;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_runMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_runMaybeT';




// Control_Monad_Maybe_Trans_mapMaybeT
function Control_Monad_Maybe_Trans_mapMaybeT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_mapMaybeT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$m = $__case_1;
$__res = ($f1)($m);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_mapMaybeT';

// Control_Monad_Maybe_Trans_functorMaybeT
function Control_Monad_Maybe_Trans_functorMaybeT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_functorMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
  $map1 = ($dictFunctor)->map;
  $__res = (object)["map" => (function() use ($map1, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Monad_Maybe_Trans_map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$ma = $__case_1;
$__res = ($map1)(($__global_Control_Monad_Maybe_Trans_map)($f1), $ma);
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
$GLOBALS['Control_Monad_Maybe_Trans_functorMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_functorMaybeT';

// Control_Monad_Maybe_Trans_monadMaybeT
function Control_Monad_Maybe_Trans_monadMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_applicativeMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applicativeMaybeT'));
  $__global_Control_Monad_Maybe_Trans_bindMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_bindMaybeT'));
  while (true) {
$__res = (object)["Applicative0" => function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_applicativeMaybeT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Maybe_Trans_applicativeMaybeT)($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_bindMaybeT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Maybe_Trans_bindMaybeT)($dictMonad);
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
$GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadMaybeT';

// Control_Monad_Maybe_Trans_bindMaybeT
function Control_Monad_Maybe_Trans_bindMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_bindMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_applyMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applyMaybeT'));
  while (true) {
$bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
$__res = (object)["bind" => (function() use ($bind, $pure, &$__fn) {
  $__fn = function($v, $f = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $f;
  if (true) {
$x = $__case_0;
$f1 = $__case_1;
$__res = ($bind)($x, function($v1) use ($pure, $f1) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Nothing":
$__res = ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
goto __end;;
break;
case "Just":
$y = ($__case_0)->v0;
$v2 = ($f1)($y);
$__case_0 = $v2;
if (true) {
$m = $__case_0;
$__res = $m;
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
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_applyMaybeT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Maybe_Trans_applyMaybeT)($dictMonad);
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
$GLOBALS['Control_Monad_Maybe_Trans_bindMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_bindMaybeT';

// Control_Monad_Maybe_Trans_applyMaybeT
function Control_Monad_Maybe_Trans_applyMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_applyMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_functorMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_functorMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_functorMaybeT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_ap = ($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap'));
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  while (true) {
$functorMaybeT1 = ($__global_Control_Monad_Maybe_Trans_functorMaybeT)((((((($dictMonad)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = (object)["apply" => ($__global_Control_Monad_ap)(($__global_Control_Monad_Maybe_Trans_monadMaybeT)($dictMonad)), "Functor0" => function($__dollar____unused) use ($functorMaybeT1) {
  $__num = func_num_args();
  $__res = $functorMaybeT1;
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
$GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_applyMaybeT';

// Control_Monad_Maybe_Trans_applicativeMaybeT
function Control_Monad_Maybe_Trans_applicativeMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_applicativeMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
  $__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_applyMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applyMaybeT'));
  while (true) {
$__res = (object)["pure" => ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($__global_Control_Monad_Maybe_Trans_compose)(((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), "Apply0" => function($__dollar____unused) use ($__global_Control_Monad_Maybe_Trans_applyMaybeT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Maybe_Trans_applyMaybeT)($dictMonad);
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
$GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_applicativeMaybeT';

// Control_Monad_Maybe_Trans_semigroupMaybeT
function Control_Monad_Maybe_Trans_semigroupMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_semigroupMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Control_Monad_Maybe_Trans_applyMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_applyMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applyMaybeT'));
  $lift2 = ($__global_Control_Apply_lift2)(($__global_Control_Monad_Maybe_Trans_applyMaybeT)($dictMonad));
  $__res = function($dictSemigroup) use ($lift2) {
  $__num = func_num_args();
  $__res = (object)["append" => ($lift2)(($dictSemigroup)->append)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_semigroupMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_semigroupMaybeT';

// Control_Monad_Maybe_Trans_monadAskMaybeT
function Control_Monad_Maybe_Trans_monadAskMaybeT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadAskMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  $__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
  $Monad0 = (($dictMonadAsk)->Monad0)($__global_Prim_undefined);
  $monadMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
  $__res = (object)["ask" => ($__global_Control_Monad_Maybe_Trans_lift)($Monad0, ($dictMonadAsk)->ask), "Monad0" => function($__dollar____unused) use ($monadMaybeT1) {
  $__num = func_num_args();
  $__res = $monadMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadAskMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadAskMaybeT';

// Control_Monad_Maybe_Trans_monadReaderMaybeT
function Control_Monad_Maybe_Trans_monadReaderMaybeT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadReaderMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_monadAskMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadAskMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadAskMaybeT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_mapMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_mapMaybeT'));
  $local = ($dictMonadReader)->local;
  $monadAskMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadAskMaybeT)((($dictMonadReader)->MonadAsk0)($__global_Prim_undefined));
  $__res = (object)["local" => function($f) use ($__global_Control_Monad_Maybe_Trans_mapMaybeT, $local) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Maybe_Trans_mapMaybeT)(($local)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "MonadAsk0" => function($__dollar____unused) use ($monadAskMaybeT1) {
  $__num = func_num_args();
  $__res = $monadAskMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadReaderMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadReaderMaybeT';

// Control_Monad_Maybe_Trans_monadContMaybeT
function Control_Monad_Maybe_Trans_monadContMaybeT($dictMonadCont) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadContMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $callCC = ($dictMonadCont)->callCC;
  $monadMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadMaybeT)((($dictMonadCont)->Monad0)($__global_Prim_undefined));
  $__res = (object)["callCC" => function($f) use ($callCC) {
  $__num = func_num_args();
  $__res = ($callCC)(function($c) use ($f) {
  $__num = func_num_args();
  $v = ($f)(function($a) use ($c) {
  $__num = func_num_args();
  $__res = ($c)(new Phpurs_Data1("Just", $a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  $__case_0 = $v;
  if (true) {
$m = $__case_0;
$__res = $m;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) use ($monadMaybeT1) {
  $__num = func_num_args();
  $__res = $monadMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadContMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadContMaybeT';

// Control_Monad_Maybe_Trans_monadEffectMaybe
function Control_Monad_Maybe_Trans_monadEffectMaybe($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadEffectMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  $__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
  $__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
  $Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
  $monadMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
  $__res = (object)["liftEffect" => ($__global_Control_Monad_Maybe_Trans_compose)(($__global_Control_Monad_Maybe_Trans_lift)($Monad0), ($dictMonadEffect)->liftEffect), "Monad0" => function($__dollar____unused) use ($monadMaybeT1) {
  $__num = func_num_args();
  $__res = $monadMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadEffectMaybe'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadEffectMaybe';

// Control_Monad_Maybe_Trans_monadRecMaybeT
function Control_Monad_Maybe_Trans_monadRecMaybeT($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadRecMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  $__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
  $__global_Control_Monad_Maybe_Trans_MaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_MaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_MaybeT'));
  $tailRecM = ($dictMonadRec)->tailRecM;
  $Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
  $bind = ((($Monad0)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $monadMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
  $__res = (object)["tailRecM" => function($f) use ($__global_Control_Monad_Maybe_Trans_compose, $__global_Control_Monad_Maybe_Trans_MaybeT, $tailRecM, $bind, $pure) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Maybe_Trans_compose)($__global_Control_Monad_Maybe_Trans_MaybeT, ($tailRecM)(function($a) use ($f, $bind, $pure) {
  $__num = func_num_args();
  $v = ($f)($a);
  $__case_0 = $v;
  if (true) {
$m = $__case_0;
$__res = ($bind)($m, function($m__prime__) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $m__prime__;
  $__case_res_0 = null;
  if ((($__case_0)->tag === "Nothing")) {
$__case_res_0 = new Phpurs_Data1("Done", ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Loop"))) {
$a1 = (($__case_0)->v0)->v0;
$__case_res_0 = new Phpurs_Data1("Loop", $a1);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
$__case_res_0 = new Phpurs_Data1("Done", new Phpurs_Data1("Just", $b));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  $__res = ($pure)($__case_res_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) use ($monadMaybeT1) {
  $__num = func_num_args();
  $__res = $monadMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadRecMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadRecMaybeT';

// Control_Monad_Maybe_Trans_monadStateMaybeT
function Control_Monad_Maybe_Trans_monadStateMaybeT($dictMonadState) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadStateMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  $Monad0 = (($dictMonadState)->Monad0)($__global_Prim_undefined);
  $lift1 = ($__global_Control_Monad_Maybe_Trans_lift)($Monad0);
  $state = ($dictMonadState)->state;
  $monadMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
  $__res = (object)["state" => function($f) use ($lift1, $state) {
  $__num = func_num_args();
  $__res = ($lift1)(($state)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) use ($monadMaybeT1) {
  $__num = func_num_args();
  $__res = $monadMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadStateMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadStateMaybeT';

// Control_Monad_Maybe_Trans_monadTellMaybeT
function Control_Monad_Maybe_Trans_monadTellMaybeT($dictMonadTell) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadTellMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  $__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
  $__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
  $Monad1 = (($dictMonadTell)->Monad1)($__global_Prim_undefined);
  $Semigroup0 = (($dictMonadTell)->Semigroup0)($__global_Prim_undefined);
  $monadMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadMaybeT)($Monad1);
  $__res = (object)["tell" => ($__global_Control_Monad_Maybe_Trans_compose)(($__global_Control_Monad_Maybe_Trans_lift)($Monad1), ($dictMonadTell)->tell), "Semigroup0" => function($__dollar____unused) use (&$Semigroup0) {
  $__num = func_num_args();
  $__res = $Semigroup0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad1" => function($__dollar____unused) use ($monadMaybeT1) {
  $__num = func_num_args();
  $__res = $monadMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadTellMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadTellMaybeT';

// Control_Monad_Maybe_Trans_monadWriterMaybeT
function Control_Monad_Maybe_Trans_monadWriterMaybeT($dictMonadWriter) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadWriterMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_monadTellMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadTellMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadTellMaybeT'));
  $__global_Control_Monad_Maybe_Trans_mapMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_mapMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_mapMaybeT'));
  $__global_Control_Monad_Maybe_Trans_map = ($GLOBALS['Control_Monad_Maybe_Trans_map'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_map'));
  $__global_Control_Monad_Maybe_Trans_identity = ($GLOBALS['Control_Monad_Maybe_Trans_identity'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_identity'));
  $MonadTell1 = (($dictMonadWriter)->MonadTell1)($__global_Prim_undefined);
  $Monad1 = (($MonadTell1)->Monad1)($__global_Prim_undefined);
  $bind = ((($Monad1)->Bind1)($__global_Prim_undefined))->bind;
  $listen = ($dictMonadWriter)->listen;
  $pure = ((($Monad1)->Applicative0)($__global_Prim_undefined))->pure;
  $pass = ($dictMonadWriter)->pass;
  $Monoid0 = (($dictMonadWriter)->Monoid0)($__global_Prim_undefined);
  $monadTellMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadTellMaybeT)($MonadTell1);
  $__res = (object)["listen" => ($__global_Control_Monad_Maybe_Trans_mapMaybeT)(function($m) use ($bind, $listen, $pure, $__global_Control_Monad_Maybe_Trans_map) {
  $__num = func_num_args();
  $__res = ($bind)(($listen)($m), function($v) use ($pure, $__global_Control_Monad_Maybe_Trans_map) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
$__res = ($pure)(($__global_Control_Monad_Maybe_Trans_map)(function($r) use ($w) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", $r, $w);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $a));
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
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), "pass" => ($__global_Control_Monad_Maybe_Trans_mapMaybeT)(function($m) use ($pass, $bind, $pure, $__global_Control_Monad_Maybe_Trans_identity) {
  $__num = func_num_args();
  $__res = ($pass)(($bind)($m, function($a) use ($pure, $__global_Control_Monad_Maybe_Trans_identity) {
  $__num = func_num_args();
  $__case_0 = $a;
  $__case_res_0 = null;
  if ((($__case_0)->tag === "Nothing")) {
$__case_res_0 = new Phpurs_Data2("Tuple", ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $__global_Control_Monad_Maybe_Trans_identity);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->v0)->tag === "Tuple"))) {
$v = (($__case_0)->v0)->v0;
$f = (($__case_0)->v0)->v1;
$__case_res_0 = new Phpurs_Data2("Tuple", new Phpurs_Data1("Just", $v), $f);
} else {
throw new \Exception("Pattern match failure");
};
};
  $__res = ($pure)($__case_res_0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), "Monoid0" => function($__dollar____unused) use (&$Monoid0) {
  $__num = func_num_args();
  $__res = $Monoid0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "MonadTell1" => function($__dollar____unused) use ($monadTellMaybeT1) {
  $__num = func_num_args();
  $__res = $monadTellMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadWriterMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadWriterMaybeT';

// Control_Monad_Maybe_Trans_monadThrowMaybeT
function Control_Monad_Maybe_Trans_monadThrowMaybeT($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadThrowMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  $Monad0 = (($dictMonadThrow)->Monad0)($__global_Prim_undefined);
  $lift1 = ($__global_Control_Monad_Maybe_Trans_lift)($Monad0);
  $throwError = ($dictMonadThrow)->throwError;
  $monadMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
  $__res = (object)["throwError" => function($e) use ($lift1, $throwError) {
  $__num = func_num_args();
  $__res = ($lift1)(($throwError)($e));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) use ($monadMaybeT1) {
  $__num = func_num_args();
  $__res = $monadMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadThrowMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadThrowMaybeT';

// Control_Monad_Maybe_Trans_monadErrorMaybeT
function Control_Monad_Maybe_Trans_monadErrorMaybeT($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadErrorMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_monadThrowMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadThrowMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadThrowMaybeT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $catchError = ($dictMonadError)->catchError;
  $monadThrowMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadThrowMaybeT)((($dictMonadError)->MonadThrow0)($__global_Prim_undefined));
  $__res = (object)["catchError" => (function() use ($catchError, &$__fn) {
  $__fn = function($v, $h = null) use ($catchError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($h) use ($v, &$__fn) { return $__fn($v, $h); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $h;
  if (true) {
$m = $__case_0;
$h1 = $__case_1;
$__res = ($catchError)($m, function($a) use ($h1) {
  $__num = func_num_args();
  $v1 = ($h1)($a);
  $__case_0 = $v1;
  if (true) {
$b = $__case_0;
$__res = $b;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
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
})(), "MonadThrow0" => function($__dollar____unused) use ($monadThrowMaybeT1) {
  $__num = func_num_args();
  $__res = $monadThrowMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadErrorMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadErrorMaybeT';

// Control_Monad_Maybe_Trans_monadSTMaybeT
function Control_Monad_Maybe_Trans_monadSTMaybeT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadSTMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  $__global_Control_Monad_Maybe_Trans_compose = ($GLOBALS['Control_Monad_Maybe_Trans_compose'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_compose'));
  $__global_Control_Monad_Maybe_Trans_lift = ($GLOBALS['Control_Monad_Maybe_Trans_lift'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_lift'));
  $Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
  $monadMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadMaybeT)($Monad0);
  $__res = (object)["liftST" => ($__global_Control_Monad_Maybe_Trans_compose)(($__global_Control_Monad_Maybe_Trans_lift)($Monad0), ($dictMonadST)->liftST), "Monad0" => function($__dollar____unused) use ($monadMaybeT1) {
  $__num = func_num_args();
  $__res = $monadMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadSTMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadSTMaybeT';

// Control_Monad_Maybe_Trans_monoidMaybeT
function Control_Monad_Maybe_Trans_monoidMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monoidMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_applicativeMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applicativeMaybeT'));
  $__global_Control_Monad_Maybe_Trans_semigroupMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_semigroupMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_semigroupMaybeT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = (($__global_Control_Monad_Maybe_Trans_applicativeMaybeT)($dictMonad))->pure;
  $semigroupMaybeT1 = ($__global_Control_Monad_Maybe_Trans_semigroupMaybeT)($dictMonad);
  $__res = function($dictMonoid) use ($semigroupMaybeT1, $__global_Prim_undefined, $pure) {
  $__num = func_num_args();
  $semigroupMaybeT2 = ($semigroupMaybeT1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($pure)(($dictMonoid)->mempty), "Semigroup0" => function($__dollar____unused) use ($semigroupMaybeT2) {
  $__num = func_num_args();
  $__res = $semigroupMaybeT2;
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
$GLOBALS['Control_Monad_Maybe_Trans_monoidMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monoidMaybeT';

// Control_Monad_Maybe_Trans_altMaybeT
function Control_Monad_Maybe_Trans_altMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_altMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Maybe_Trans_functorMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_functorMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_functorMaybeT'));
  $Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
  $bind = ($Bind1)->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $functorMaybeT1 = ($__global_Control_Monad_Maybe_Trans_functorMaybeT)((((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = (object)["alt" => (function() use ($bind, $pure, &$__fn) {
  $__fn = function($v, $v1 = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
$__res = ($bind)($m1, function($m) use ($m2, $pure) {
  $__num = func_num_args();
  $__case_0 = $m;
  switch (($__case_0)->tag) {
case "Nothing":
$__res = $m2;
goto __end;;
break;
default:
$ja = $__case_0;
$__res = ($pure)($ja);
goto __end;;
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
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) use ($functorMaybeT1) {
  $__num = func_num_args();
  $__res = $functorMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_altMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_altMaybeT';

// Control_Monad_Maybe_Trans_plusMaybeT
function Control_Monad_Maybe_Trans_plusMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_plusMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_altMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_altMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_altMaybeT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $altMaybeT1 = ($__global_Control_Monad_Maybe_Trans_altMaybeT)($dictMonad);
  $__res = (object)["empty" => (((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), "Alt0" => function($__dollar____unused) use ($altMaybeT1) {
  $__num = func_num_args();
  $__res = $altMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_plusMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_plusMaybeT';

// Control_Monad_Maybe_Trans_alternativeMaybeT
function Control_Monad_Maybe_Trans_alternativeMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_alternativeMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_applicativeMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_applicativeMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_applicativeMaybeT'));
  $__global_Control_Monad_Maybe_Trans_plusMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_plusMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_plusMaybeT'));
  $applicativeMaybeT1 = ($__global_Control_Monad_Maybe_Trans_applicativeMaybeT)($dictMonad);
  $plusMaybeT1 = ($__global_Control_Monad_Maybe_Trans_plusMaybeT)($dictMonad);
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeMaybeT1) {
  $__num = func_num_args();
  $__res = $applicativeMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) use ($plusMaybeT1) {
  $__num = func_num_args();
  $__res = $plusMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_alternativeMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_alternativeMaybeT';

// Control_Monad_Maybe_Trans_monadPlusMaybeT
function Control_Monad_Maybe_Trans_monadPlusMaybeT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Maybe_Trans_monadPlusMaybeT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Maybe_Trans_monadMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_monadMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_monadMaybeT'));
  $__global_Control_Monad_Maybe_Trans_alternativeMaybeT = ($GLOBALS['Control_Monad_Maybe_Trans_alternativeMaybeT'] ?? \Control\Monad\Maybe\Trans\phpurs_eval_thunk('Control_Monad_Maybe_Trans_alternativeMaybeT'));
  $monadMaybeT1 = ($__global_Control_Monad_Maybe_Trans_monadMaybeT)($dictMonad);
  $alternativeMaybeT1 = ($__global_Control_Monad_Maybe_Trans_alternativeMaybeT)($dictMonad);
  $__res = (object)["Monad0" => function($__dollar____unused) use ($monadMaybeT1) {
  $__num = func_num_args();
  $__res = $monadMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alternative1" => function($__dollar____unused) use ($alternativeMaybeT1) {
  $__num = func_num_args();
  $__res = $alternativeMaybeT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Maybe_Trans_monadPlusMaybeT'] = __NAMESPACE__ . '\\Control_Monad_Maybe_Trans_monadPlusMaybeT';

