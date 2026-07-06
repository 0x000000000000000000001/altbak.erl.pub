<?php

namespace Control\Monad\Except\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Except.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
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
      case 'Control_Monad_Except_Trans_map': $v = (($GLOBALS['Data_Either_functorEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_functorEither')))->map; break;
      case 'Control_Monad_Except_Trans_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_Except_Trans_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Control_Monad_Except_Trans_newtypeExceptT': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Except_Trans_monadTransExceptT': $v = (object)["lift" => function($dictMonad) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = function($m) use ($bind, $pure) {
  $__num = func_num_args();
  $__res = ($bind)($m, function($a) use ($pure) {
  $__num = func_num_args();
  $__res = ($pure)(new Phpurs_Data1("Right", $a));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Except_Trans_lift': $v = (($GLOBALS['Control_Monad_Except_Trans_monadTransExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadTransExceptT')))->lift; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };





// Control_Monad_Except_Trans_ExceptT
function Control_Monad_Except_Trans_ExceptT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_ExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_ExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_ExceptT';

// Control_Monad_Except_Trans_withExceptT
function Control_Monad_Except_Trans_withExceptT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_withExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map1 = ($dictFunctor)->map;
  $__res = (function() use ($map1, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$t = $__case_1;
$mapLeft = (function() use (&$__fn) {
  $__fn = function($v1, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v2) use ($v1, &$__fn) { return $__fn($v1, $v2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v1;
  $__case_1 = $v2;
  switch (($__case_1)->tag) {
case "Right":
$x = ($__case_1)->v0;
$__res = new Phpurs_Data1("Right", $x);
goto __end;;
break;
case "Left":
$f__prime__ = $__case_0;
$x = ($__case_1)->v0;
$__res = new Phpurs_Data1("Left", ($f__prime__)($x));
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
$__res = ($map1)(($mapLeft)($f1), $t);
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
$GLOBALS['Control_Monad_Except_Trans_withExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_withExceptT';

// Control_Monad_Except_Trans_runExceptT
function Control_Monad_Except_Trans_runExceptT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_runExceptT';
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
$GLOBALS['Control_Monad_Except_Trans_runExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_runExceptT';




// Control_Monad_Except_Trans_mapExceptT
function Control_Monad_Except_Trans_mapExceptT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_mapExceptT';
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
$GLOBALS['Control_Monad_Except_Trans_mapExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_mapExceptT';

// Control_Monad_Except_Trans_functorExceptT
function Control_Monad_Except_Trans_functorExceptT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_functorExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
  $__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
  $map1 = ($dictFunctor)->map;
  $__res = (object)["map" => function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $map1, $__global_Control_Monad_Except_Trans_map) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($map1)(($__global_Control_Monad_Except_Trans_map)($f)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_functorExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_functorExceptT';

// Control_Monad_Except_Trans_except
function Control_Monad_Except_Trans_except($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_except';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
  $__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
  $__res = ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($dictApplicative)->pure);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_except'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_except';

// Control_Monad_Except_Trans_monadExceptT
function Control_Monad_Except_Trans_monadExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_applicativeExceptT = ($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_applicativeExceptT'));
  $__global_Control_Monad_Except_Trans_bindExceptT = ($GLOBALS['Control_Monad_Except_Trans_bindExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_bindExceptT'));
  while (true) {
$__res = (object)["Applicative0" => function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_applicativeExceptT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Except_Trans_applicativeExceptT)($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_bindExceptT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Except_Trans_bindExceptT)($dictMonad);
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
$GLOBALS['Control_Monad_Except_Trans_monadExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadExceptT';

// Control_Monad_Except_Trans_bindExceptT
function Control_Monad_Except_Trans_bindExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_bindExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
  $__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
  $__global_Control_Monad_Except_Trans_applyExceptT = ($GLOBALS['Control_Monad_Except_Trans_applyExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_applyExceptT'));
  while (true) {
$bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
$__res = (object)["bind" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, &$__fn) {
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $k;
  if (true) {
$m = $__case_0;
$k1 = $__case_1;
$__res = ($bind)($m, ($__global_Data_Either_either)(($__global_Control_Monad_Except_Trans_compose)($pure, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), function($a) use ($k1) {
  $__num = func_num_args();
  $v1 = ($k1)($a);
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
}));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_applyExceptT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Except_Trans_applyExceptT)($dictMonad);
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
$GLOBALS['Control_Monad_Except_Trans_bindExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_bindExceptT';

// Control_Monad_Except_Trans_applyExceptT
function Control_Monad_Except_Trans_applyExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_applyExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_functorExceptT = ($GLOBALS['Control_Monad_Except_Trans_functorExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_functorExceptT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_ap = ($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap'));
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  while (true) {
$functorExceptT1 = ($__global_Control_Monad_Except_Trans_functorExceptT)((((((($dictMonad)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = (object)["apply" => ($__global_Control_Monad_ap)(($__global_Control_Monad_Except_Trans_monadExceptT)($dictMonad)), "Functor0" => function($__dollar____unused) use ($functorExceptT1) {
  $__num = func_num_args();
  $__res = $functorExceptT1;
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
$GLOBALS['Control_Monad_Except_Trans_applyExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_applyExceptT';

// Control_Monad_Except_Trans_applicativeExceptT
function Control_Monad_Except_Trans_applicativeExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_applicativeExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
  $__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_applyExceptT = ($GLOBALS['Control_Monad_Except_Trans_applyExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_applyExceptT'));
  while (true) {
$__res = (object)["pure" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)(((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), "Apply0" => function($__dollar____unused) use ($__global_Control_Monad_Except_Trans_applyExceptT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Except_Trans_applyExceptT)($dictMonad);
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
$GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_applicativeExceptT';

// Control_Monad_Except_Trans_semigroupExceptT
function Control_Monad_Except_Trans_semigroupExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_semigroupExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Control_Monad_Except_Trans_applyExceptT = ($GLOBALS['Control_Monad_Except_Trans_applyExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_applyExceptT'));
  $lift2 = ($__global_Control_Apply_lift2)(($__global_Control_Monad_Except_Trans_applyExceptT)($dictMonad));
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
$GLOBALS['Control_Monad_Except_Trans_semigroupExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_semigroupExceptT';

// Control_Monad_Except_Trans_monadAskExceptT
function Control_Monad_Except_Trans_monadAskExceptT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadAskExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  $__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
  $Monad0 = (($dictMonadAsk)->Monad0)($__global_Prim_undefined);
  $monadExceptT1 = ($__global_Control_Monad_Except_Trans_monadExceptT)($Monad0);
  $__res = (object)["ask" => ($__global_Control_Monad_Except_Trans_lift)($Monad0, ($dictMonadAsk)->ask), "Monad0" => function($__dollar____unused) use ($monadExceptT1) {
  $__num = func_num_args();
  $__res = $monadExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadAskExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadAskExceptT';

// Control_Monad_Except_Trans_monadReaderExceptT
function Control_Monad_Except_Trans_monadReaderExceptT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadReaderExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_monadAskExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadAskExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadAskExceptT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
  $local = ($dictMonadReader)->local;
  $monadAskExceptT1 = ($__global_Control_Monad_Except_Trans_monadAskExceptT)((($dictMonadReader)->MonadAsk0)($__global_Prim_undefined));
  $__res = (object)["local" => function($f) use ($__global_Control_Monad_Except_Trans_mapExceptT, $local) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Except_Trans_mapExceptT)(($local)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "MonadAsk0" => function($__dollar____unused) use ($monadAskExceptT1) {
  $__num = func_num_args();
  $__res = $monadAskExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadReaderExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadReaderExceptT';

// Control_Monad_Except_Trans_monadContExceptT
function Control_Monad_Except_Trans_monadContExceptT($dictMonadCont) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadContExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $callCC = ($dictMonadCont)->callCC;
  $monadExceptT1 = ($__global_Control_Monad_Except_Trans_monadExceptT)((($dictMonadCont)->Monad0)($__global_Prim_undefined));
  $__res = (object)["callCC" => function($f) use ($callCC) {
  $__num = func_num_args();
  $__res = ($callCC)(function($c) use ($f) {
  $__num = func_num_args();
  $v = ($f)(function($a) use ($c) {
  $__num = func_num_args();
  $__res = ($c)(new Phpurs_Data1("Right", $a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  $__case_0 = $v;
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
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) use ($monadExceptT1) {
  $__num = func_num_args();
  $__res = $monadExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadContExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadContExceptT';

// Control_Monad_Except_Trans_monadEffectExceptT
function Control_Monad_Except_Trans_monadEffectExceptT($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadEffectExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  $__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
  $__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
  $Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
  $monadExceptT1 = ($__global_Control_Monad_Except_Trans_monadExceptT)($Monad0);
  $__res = (object)["liftEffect" => ($__global_Control_Monad_Except_Trans_compose)(($__global_Control_Monad_Except_Trans_lift)($Monad0), ($dictMonadEffect)->liftEffect), "Monad0" => function($__dollar____unused) use ($monadExceptT1) {
  $__num = func_num_args();
  $__res = $monadExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadEffectExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadEffectExceptT';

// Control_Monad_Except_Trans_monadRecExceptT
function Control_Monad_Except_Trans_monadRecExceptT($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadRecExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  $__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
  $__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
  $tailRecM = ($dictMonadRec)->tailRecM;
  $Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
  $bind = ((($Monad0)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $monadExceptT1 = ($__global_Control_Monad_Except_Trans_monadExceptT)($Monad0);
  $__res = (object)["tailRecM" => function($f) use ($__global_Control_Monad_Except_Trans_compose, $__global_Control_Monad_Except_Trans_ExceptT, $tailRecM, $bind, $pure) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($tailRecM)(function($a) use ($f, $bind, $pure) {
  $__num = func_num_args();
  $v = ($f)($a);
  $__case_0 = $v;
  if (true) {
$m = $__case_0;
$__res = ($bind)($m, function($m__prime__) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $m__prime__;
  $__case_res_0 = null;
  if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->v0;
$__case_res_0 = new Phpurs_Data1("Done", new Phpurs_Data1("Left", $e));
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Loop"))) {
$a1 = (($__case_0)->v0)->v0;
$__case_res_0 = new Phpurs_Data1("Loop", $a1);
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Done"))) {
$b = (($__case_0)->v0)->v0;
$__case_res_0 = new Phpurs_Data1("Done", new Phpurs_Data1("Right", $b));
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
}, "Monad0" => function($__dollar____unused) use ($monadExceptT1) {
  $__num = func_num_args();
  $__res = $monadExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadRecExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadRecExceptT';

// Control_Monad_Except_Trans_monadStateExceptT
function Control_Monad_Except_Trans_monadStateExceptT($dictMonadState) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadStateExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  $Monad0 = (($dictMonadState)->Monad0)($__global_Prim_undefined);
  $lift1 = ($__global_Control_Monad_Except_Trans_lift)($Monad0);
  $state = ($dictMonadState)->state;
  $monadExceptT1 = ($__global_Control_Monad_Except_Trans_monadExceptT)($Monad0);
  $__res = (object)["state" => function($f) use ($lift1, $state) {
  $__num = func_num_args();
  $__res = ($lift1)(($state)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) use ($monadExceptT1) {
  $__num = func_num_args();
  $__res = $monadExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadStateExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadStateExceptT';

// Control_Monad_Except_Trans_monadTellExceptT
function Control_Monad_Except_Trans_monadTellExceptT($dictMonadTell) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadTellExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  $__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
  $__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
  $Monad1 = (($dictMonadTell)->Monad1)($__global_Prim_undefined);
  $Semigroup0 = (($dictMonadTell)->Semigroup0)($__global_Prim_undefined);
  $monadExceptT1 = ($__global_Control_Monad_Except_Trans_monadExceptT)($Monad1);
  $__res = (object)["tell" => ($__global_Control_Monad_Except_Trans_compose)(($__global_Control_Monad_Except_Trans_lift)($Monad1), ($dictMonadTell)->tell), "Semigroup0" => function($__dollar____unused) use (&$Semigroup0) {
  $__num = func_num_args();
  $__res = $Semigroup0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad1" => function($__dollar____unused) use ($monadExceptT1) {
  $__num = func_num_args();
  $__res = $monadExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadTellExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadTellExceptT';

// Control_Monad_Except_Trans_monadWriterExceptT
function Control_Monad_Except_Trans_monadWriterExceptT($dictMonadWriter) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadWriterExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_monadTellExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadTellExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadTellExceptT'));
  $__global_Control_Monad_Except_Trans_mapExceptT = ($GLOBALS['Control_Monad_Except_Trans_mapExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_mapExceptT'));
  $__global_Control_Monad_Except_Trans_map = ($GLOBALS['Control_Monad_Except_Trans_map'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_map'));
  $__global_Control_Monad_Except_Trans_identity = ($GLOBALS['Control_Monad_Except_Trans_identity'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_identity'));
  $MonadTell1 = (($dictMonadWriter)->MonadTell1)($__global_Prim_undefined);
  $Monad1 = (($MonadTell1)->Monad1)($__global_Prim_undefined);
  $bind = ((($Monad1)->Bind1)($__global_Prim_undefined))->bind;
  $listen = ($dictMonadWriter)->listen;
  $pure = ((($Monad1)->Applicative0)($__global_Prim_undefined))->pure;
  $pass = ($dictMonadWriter)->pass;
  $Monoid0 = (($dictMonadWriter)->Monoid0)($__global_Prim_undefined);
  $monadTellExceptT1 = ($__global_Control_Monad_Except_Trans_monadTellExceptT)($MonadTell1);
  $__res = (object)["listen" => ($__global_Control_Monad_Except_Trans_mapExceptT)(function($m) use ($bind, $listen, $pure, $__global_Control_Monad_Except_Trans_map) {
  $__num = func_num_args();
  $__res = ($bind)(($listen)($m), function($v) use ($pure, $__global_Control_Monad_Except_Trans_map) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$w = ($__case_0)->v1;
$__res = ($pure)(($__global_Control_Monad_Except_Trans_map)(function($r) use ($w) {
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
}), "pass" => ($__global_Control_Monad_Except_Trans_mapExceptT)(function($m) use ($pass, $bind, $pure, $__global_Control_Monad_Except_Trans_identity) {
  $__num = func_num_args();
  $__res = ($pass)(($bind)($m, function($a) use ($pure, $__global_Control_Monad_Except_Trans_identity) {
  $__num = func_num_args();
  $__case_0 = $a;
  $__case_res_0 = null;
  if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->v0;
$__case_res_0 = new Phpurs_Data2("Tuple", new Phpurs_Data1("Left", $e), $__global_Control_Monad_Except_Trans_identity);
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->v0)->tag === "Tuple"))) {
$r = (($__case_0)->v0)->v0;
$f = (($__case_0)->v0)->v1;
$__case_res_0 = new Phpurs_Data2("Tuple", new Phpurs_Data1("Right", $r), $f);
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
}, "MonadTell1" => function($__dollar____unused) use ($monadTellExceptT1) {
  $__num = func_num_args();
  $__res = $monadTellExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadWriterExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadWriterExceptT';

// Control_Monad_Except_Trans_monadThrowExceptT
function Control_Monad_Except_Trans_monadThrowExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadThrowExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  $__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
  $__global_Control_Monad_Except_Trans_ExceptT = ($GLOBALS['Control_Monad_Except_Trans_ExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_ExceptT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $monadExceptT1 = ($__global_Control_Monad_Except_Trans_monadExceptT)($dictMonad);
  $__res = (object)["throwError" => ($__global_Control_Monad_Except_Trans_compose)($__global_Control_Monad_Except_Trans_ExceptT, ($__global_Control_Monad_Except_Trans_compose)(((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), "Monad0" => function($__dollar____unused) use ($monadExceptT1) {
  $__num = func_num_args();
  $__res = $monadExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadThrowExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadThrowExceptT';

// Control_Monad_Except_Trans_monadErrorExceptT
function Control_Monad_Except_Trans_monadErrorExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadErrorExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_monadThrowExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadThrowExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadThrowExceptT'));
  $__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
  $__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $monadThrowExceptT1 = ($__global_Control_Monad_Except_Trans_monadThrowExceptT)($dictMonad);
  $__res = (object)["catchError" => (function() use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, &$__fn) {
  $__fn = function($v, $k = null) use ($bind, $__global_Data_Either_either, $__global_Control_Monad_Except_Trans_compose, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, &$__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $k;
  if (true) {
$m = $__case_0;
$k1 = $__case_1;
$__res = ($bind)($m, ($__global_Data_Either_either)(function($a) use ($k1) {
  $__num = func_num_args();
  $v1 = ($k1)($a);
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
}, ($__global_Control_Monad_Except_Trans_compose)($pure, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($__dollar____unused) use ($monadThrowExceptT1) {
  $__num = func_num_args();
  $__res = $monadThrowExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadErrorExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadErrorExceptT';

// Control_Monad_Except_Trans_monadSTExceptT
function Control_Monad_Except_Trans_monadSTExceptT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadSTExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  $__global_Control_Monad_Except_Trans_compose = ($GLOBALS['Control_Monad_Except_Trans_compose'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_compose'));
  $__global_Control_Monad_Except_Trans_lift = ($GLOBALS['Control_Monad_Except_Trans_lift'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_lift'));
  $Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
  $monadExceptT1 = ($__global_Control_Monad_Except_Trans_monadExceptT)($Monad0);
  $__res = (object)["liftST" => ($__global_Control_Monad_Except_Trans_compose)(($__global_Control_Monad_Except_Trans_lift)($Monad0), ($dictMonadST)->liftST), "Monad0" => function($__dollar____unused) use ($monadExceptT1) {
  $__num = func_num_args();
  $__res = $monadExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Except_Trans_monadSTExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadSTExceptT';

// Control_Monad_Except_Trans_monoidExceptT
function Control_Monad_Except_Trans_monoidExceptT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monoidExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_applicativeExceptT = ($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_applicativeExceptT'));
  $__global_Control_Monad_Except_Trans_semigroupExceptT = ($GLOBALS['Control_Monad_Except_Trans_semigroupExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_semigroupExceptT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = (($__global_Control_Monad_Except_Trans_applicativeExceptT)($dictMonad))->pure;
  $semigroupExceptT1 = ($__global_Control_Monad_Except_Trans_semigroupExceptT)($dictMonad);
  $__res = function($dictMonoid) use ($semigroupExceptT1, $__global_Prim_undefined, $pure) {
  $__num = func_num_args();
  $semigroupExceptT2 = ($semigroupExceptT1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($pure)(($dictMonoid)->mempty), "Semigroup0" => function($__dollar____unused) use ($semigroupExceptT2) {
  $__num = func_num_args();
  $__res = $semigroupExceptT2;
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
$GLOBALS['Control_Monad_Except_Trans_monoidExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monoidExceptT';

// Control_Monad_Except_Trans_altExceptT
function Control_Monad_Except_Trans_altExceptT($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_altExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_functorExceptT = ($GLOBALS['Control_Monad_Except_Trans_functorExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_functorExceptT'));
  $append = ($dictSemigroup)->append;
  $__res = function($dictMonad) use ($__global_Prim_undefined, $__global_Control_Monad_Except_Trans_functorExceptT, $append) {
  $__num = func_num_args();
  $Bind1 = (($dictMonad)->Bind1)($__global_Prim_undefined);
  $bind = ($Bind1)->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $functorExceptT1 = ($__global_Control_Monad_Except_Trans_functorExceptT)((((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = (object)["alt" => (function() use ($bind, $pure, $append, &$__fn) {
  $__fn = function($v, $v1 = null) use ($bind, $pure, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$m = $__case_0;
$n = $__case_1;
$__res = ($bind)($m, function($rm) use ($pure, $bind, $n, $append) {
  $__num = func_num_args();
  $__case_0 = $rm;
  switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
$__res = ($pure)(new Phpurs_Data1("Right", $x));
goto __end;;
break;
case "Left":
$err = ($__case_0)->v0;
$__res = ($bind)($n, function($rn) use ($pure, $append, $err) {
  $__num = func_num_args();
  $__case_0 = $rn;
  switch (($__case_0)->tag) {
case "Right":
$x = ($__case_0)->v0;
$__res = ($pure)(new Phpurs_Data1("Right", $x));
goto __end;;
break;
case "Left":
$err__prime__ = ($__case_0)->v0;
$__res = ($pure)(new Phpurs_Data1("Left", ($append)($err, $err__prime__)));
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
})(), "Functor0" => function($__dollar____unused) use ($functorExceptT1) {
  $__num = func_num_args();
  $__res = $functorExceptT1;
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
$GLOBALS['Control_Monad_Except_Trans_altExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_altExceptT';

// Control_Monad_Except_Trans_plusExceptT
function Control_Monad_Except_Trans_plusExceptT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_plusExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_altExceptT = ($GLOBALS['Control_Monad_Except_Trans_altExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_altExceptT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Except_Trans_monadThrowExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadThrowExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadThrowExceptT'));
  $mempty = ($dictMonoid)->mempty;
  $altExceptT1 = ($__global_Control_Monad_Except_Trans_altExceptT)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = function($dictMonad) use ($altExceptT1, $__global_Control_Monad_Except_Trans_monadThrowExceptT, $mempty) {
  $__num = func_num_args();
  $altExceptT2 = ($altExceptT1)($dictMonad);
  $__res = (object)["empty" => ((($__global_Control_Monad_Except_Trans_monadThrowExceptT)($dictMonad))->throwError)($mempty), "Alt0" => function($__dollar____unused) use ($altExceptT2) {
  $__num = func_num_args();
  $__res = $altExceptT2;
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
$GLOBALS['Control_Monad_Except_Trans_plusExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_plusExceptT';

// Control_Monad_Except_Trans_alternativeExceptT
function Control_Monad_Except_Trans_alternativeExceptT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_alternativeExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_plusExceptT = ($GLOBALS['Control_Monad_Except_Trans_plusExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_plusExceptT'));
  $__global_Control_Monad_Except_Trans_applicativeExceptT = ($GLOBALS['Control_Monad_Except_Trans_applicativeExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_applicativeExceptT'));
  $plusExceptT1 = ($__global_Control_Monad_Except_Trans_plusExceptT)($dictMonoid);
  $__res = function($dictMonad) use ($__global_Control_Monad_Except_Trans_applicativeExceptT, $plusExceptT1) {
  $__num = func_num_args();
  $applicativeExceptT1 = ($__global_Control_Monad_Except_Trans_applicativeExceptT)($dictMonad);
  $plusExceptT2 = ($plusExceptT1)($dictMonad);
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeExceptT1) {
  $__num = func_num_args();
  $__res = $applicativeExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) use ($plusExceptT2) {
  $__num = func_num_args();
  $__res = $plusExceptT2;
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
$GLOBALS['Control_Monad_Except_Trans_alternativeExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_alternativeExceptT';

// Control_Monad_Except_Trans_monadPlusExceptT
function Control_Monad_Except_Trans_monadPlusExceptT($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Except_Trans_monadPlusExceptT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Except_Trans_alternativeExceptT = ($GLOBALS['Control_Monad_Except_Trans_alternativeExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_alternativeExceptT'));
  $__global_Control_Monad_Except_Trans_monadExceptT = ($GLOBALS['Control_Monad_Except_Trans_monadExceptT'] ?? \Control\Monad\Except\Trans\phpurs_eval_thunk('Control_Monad_Except_Trans_monadExceptT'));
  $alternativeExceptT1 = ($__global_Control_Monad_Except_Trans_alternativeExceptT)($dictMonoid);
  $__res = function($dictMonad) use ($__global_Control_Monad_Except_Trans_monadExceptT, $alternativeExceptT1) {
  $__num = func_num_args();
  $monadExceptT1 = ($__global_Control_Monad_Except_Trans_monadExceptT)($dictMonad);
  $alternativeExceptT2 = ($alternativeExceptT1)($dictMonad);
  $__res = (object)["Monad0" => function($__dollar____unused) use ($monadExceptT1) {
  $__num = func_num_args();
  $__res = $monadExceptT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alternative1" => function($__dollar____unused) use ($alternativeExceptT2) {
  $__num = func_num_args();
  $__res = $alternativeExceptT2;
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
$GLOBALS['Control_Monad_Except_Trans_monadPlusExceptT'] = __NAMESPACE__ . '\\Control_Monad_Except_Trans_monadPlusExceptT';

