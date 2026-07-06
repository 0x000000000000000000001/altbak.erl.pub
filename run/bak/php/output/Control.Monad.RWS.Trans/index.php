<?php

namespace Control\Monad\RWS\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Control_Monad_RWS_Trans_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_RWS_Trans_newtypeRWST': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_RWS_Trans_lazyRWST': $v = (object)["defer" => (function() use (&$__fn) {
  $__fn = function($f, $r = null, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($f, $r, &$__fn) { return $__fn($f, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $r, $s);
      if ($__num2 === 1) return function($s) use ($f, $r, &$__fn) { return $__fn($f, $r, $s); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $v = ($f)($__global_Data_Unit_unit);
  $__case_0 = $v;
  if (true) {
$f__prime__ = $__case_0;
$__res = ($f__prime__)($r, $s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Control_Monad_RWS_Trans_RWSResult
function Control_Monad_RWS_Trans_RWSResult($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_RWSResult';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("RWSResult", $value0, $value1, $value2);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_RWSResult'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_RWSResult';

// Control_Monad_RWS_Trans_RWST
function Control_Monad_RWS_Trans_RWST($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_RWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_RWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_RWST';

// Control_Monad_RWS_Trans_withRWST
function Control_Monad_RWS_Trans_withRWST($f, $m = null, $r = null, $s = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_withRWST';
  if ($__num < 4) {
    if ($__num === 3) return function($s) use ($f, $m, $r, $__fn) { return $__fn($f, $m, $r, $s); };
    if ($__num === 2) return function($r, $s = null) use ($f, $m, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $m, $r, $s);
      if ($__num2 === 1) return function($s) use ($f, $m, $r, $__fn) { return $__fn($f, $m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$f, $m], 4);
    };
    if ($__num === 1) return function($m, $r = null, $s = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $m, $r, $s);
      if ($__num2 === 2) return function($s) use ($f, $m, $r, $__fn) { return $__fn($f, $m, $r, $s); };
      if ($__num2 === 1) return function($r, $s = null) use ($f, $m, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $m, $r, $s);
        if ($__num3 === 1) return function($s) use ($f, $m, $r, $__fn) { return $__fn($f, $m, $r, $s); };
        return phpurs_curry_fallback($__fn, [$f, $m], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__global_Data_Tuple_uncurry = ($GLOBALS['Data_Tuple_uncurry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_uncurry'));
  $__case_0 = $m;
  $__case_res_0 = null;
  if (true) {
$m__prime__ = $__case_0;
$__case_res_0 = $m__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  $__res = ($__global_Data_Tuple_uncurry)($__case_res_0, ($f)($r, $s));
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_withRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_withRWST';

// Control_Monad_RWS_Trans_runRWST
function Control_Monad_RWS_Trans_runRWST($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_runRWST';
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
$GLOBALS['Control_Monad_RWS_Trans_runRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_runRWST';


// Control_Monad_RWS_Trans_monadTransRWST
function Control_Monad_RWS_Trans_monadTransRWST($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadTransRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $mempty = ($dictMonoid)->mempty;
  $__res = (object)["lift" => function($dictMonad) use ($__global_Prim_undefined, $mempty) {
  $__num = func_num_args();
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (function() use ($bind, $pure, $mempty, &$__fn) {
  $__fn = function($m, $v = null, $s = null) use ($bind, $pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($m, $v, &$__fn) { return $__fn($m, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $v, $s);
      if ($__num2 === 1) return function($s) use ($m, $v, &$__fn) { return $__fn($m, $v, $s); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($bind)($m, function($a) use ($pure, $s, $mempty) {
  $__num = func_num_args();
  $__res = ($pure)(new Phpurs_Data3("RWSResult", $s, $a, $mempty));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadTransRWST';

// Control_Monad_RWS_Trans_mapRWST
function Control_Monad_RWS_Trans_mapRWST($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_mapRWST';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$m = $__case_1;
$__res = (function() use ($f1, $m, &$__fn) {
  $__fn = function($r, $s = null) use ($f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($f1)(($m)($r, $s));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_mapRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_mapRWST';


// Control_Monad_RWS_Trans_functorRWST
function Control_Monad_RWS_Trans_functorRWST($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_functorRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map = ($dictFunctor)->map;
  $__res = (object)["map" => (function() use ($map, &$__fn) {
  $__fn = function($f, $v = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$m = $__case_1;
$__res = (function() use ($map, $f1, $m, &$__fn) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($map)(function($v1) use ($f1) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
$__res = new Phpurs_Data3("RWSResult", $state, ($f1)($result), $writer);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($m)($r, $s));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Control_Monad_RWS_Trans_functorRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_functorRWST';

// Control_Monad_RWS_Trans_execRWST
function Control_Monad_RWS_Trans_execRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_execRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (function() use ($bind, $pure, &$__fn) {
  $__fn = function($v, $r = null, $s = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($v, $r, &$__fn) { return $__fn($v, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $s);
      if ($__num2 === 1) return function($s) use ($v, $r, &$__fn) { return $__fn($v, $r, $s); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $r;
  $__case_2 = $s;
  if (true) {
$m = $__case_0;
$r1 = $__case_1;
$s1 = $__case_2;
$__res = ($bind)(($m)($r1, $s1), function($v1) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$writer = ($__case_0)->v2;
$__res = ($pure)(new Phpurs_Data2("Tuple", $state, $writer));
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_execRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_execRWST';

// Control_Monad_RWS_Trans_evalRWST
function Control_Monad_RWS_Trans_evalRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_evalRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (function() use ($bind, $pure, &$__fn) {
  $__fn = function($v, $r = null, $s = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($v, $r, &$__fn) { return $__fn($v, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $s);
      if ($__num2 === 1) return function($s) use ($v, $r, &$__fn) { return $__fn($v, $r, $s); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $r;
  $__case_2 = $s;
  if (true) {
$m = $__case_0;
$r1 = $__case_1;
$s1 = $__case_2;
$__res = ($bind)(($m)($r1, $s1), function($v1) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "RWSResult":
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
$__res = ($pure)(new Phpurs_Data2("Tuple", $result, $writer));
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_evalRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_evalRWST';

// Control_Monad_RWS_Trans_applyRWST
function Control_Monad_RWS_Trans_applyRWST($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_applyRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
  $__global_Control_Monad_RWS_Trans_functorRWST = ($GLOBALS['Control_Monad_RWS_Trans_functorRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_functorRWST'));
  $bind = ($dictBind)->bind;
  $Functor0 = (((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
  $mapFlipped = ($__global_Data_Functor_mapFlipped)($Functor0);
  $functorRWST1 = ($__global_Control_Monad_RWS_Trans_functorRWST)($Functor0);
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $bind, $mapFlipped, $functorRWST1) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $__res = (object)["apply" => (function() use ($bind, $mapFlipped, $append, &$__fn) {
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$f = $__case_0;
$m = $__case_1;
$__res = (function() use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bind)(($f)($r, $s), function($v2) use ($mapFlipped, $m, $r, $append) {
  $__num = func_num_args();
  $__case_0 = $v2;
  switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$f__prime__ = ($__case_0)->v1;
$w__prime__ = ($__case_0)->v2;
$__res = ($mapFlipped)(($m)($r, $s__prime__), function($v3) use ($f__prime__, $append, $w__prime__) {
  $__num = func_num_args();
  $__case_0 = $v3;
  switch (($__case_0)->tag) {
case "RWSResult":
$s__prime____prime__ = ($__case_0)->v0;
$a__prime____prime__ = ($__case_0)->v1;
$w__prime____prime__ = ($__case_0)->v2;
$__res = new Phpurs_Data3("RWSResult", $s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
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
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) use ($functorRWST1) {
  $__num = func_num_args();
  $__res = $functorRWST1;
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
$GLOBALS['Control_Monad_RWS_Trans_applyRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_applyRWST';

// Control_Monad_RWS_Trans_bindRWST
function Control_Monad_RWS_Trans_bindRWST($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_bindRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_applyRWST = ($GLOBALS['Control_Monad_RWS_Trans_applyRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_applyRWST'));
  $bind = ($dictBind)->bind;
  $mapFlipped = ($__global_Data_Functor_mapFlipped)((((($dictBind)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $applyRWST1 = ($__global_Control_Monad_RWS_Trans_applyRWST)($dictBind);
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $applyRWST1, $bind, $mapFlipped) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $applyRWST2 = ($applyRWST1)($dictMonoid);
  $__res = (object)["bind" => (function() use ($bind, $mapFlipped, $append, &$__fn) {
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($v, &$__fn) { return $__fn($v, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $f;
  if (true) {
$m = $__case_0;
$f1 = $__case_1;
$__res = (function() use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bind)(($m)($r, $s), function($v1) use ($f1, $mapFlipped, $r, $append) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
$__res = ($mapFlipped)(($f__prime__)($r, $s__prime__), function($v3) use ($append, $w) {
  $__num = func_num_args();
  $__case_0 = $v3;
  switch (($__case_0)->tag) {
case "RWSResult":
$state = ($__case_0)->v0;
$result = ($__case_0)->v1;
$writer = ($__case_0)->v2;
$__res = new Phpurs_Data3("RWSResult", $state, $result, ($append)($w, $writer));
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
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($applyRWST2) {
  $__num = func_num_args();
  $__res = $applyRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_bindRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_bindRWST';

// Control_Monad_RWS_Trans_semigroupRWST
function Control_Monad_RWS_Trans_semigroupRWST($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_semigroupRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_RWS_Trans_applyRWST = ($GLOBALS['Control_Monad_RWS_Trans_applyRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_applyRWST'));
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $applyRWST1 = ($__global_Control_Monad_RWS_Trans_applyRWST)($dictBind);
  $__res = function($dictMonoid) use ($__global_Control_Apply_lift2, $applyRWST1) {
  $__num = func_num_args();
  $lift2 = ($__global_Control_Apply_lift2)(($applyRWST1)($dictMonoid));
  $__res = function($dictSemigroup) use ($lift2) {
  $__num = func_num_args();
  $__res = (object)["append" => ($lift2)(($dictSemigroup)->append)];
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
$GLOBALS['Control_Monad_RWS_Trans_semigroupRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_semigroupRWST';

// Control_Monad_RWS_Trans_applicativeRWST
function Control_Monad_RWS_Trans_applicativeRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_applicativeRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_applyRWST = ($GLOBALS['Control_Monad_RWS_Trans_applyRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_applyRWST'));
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $applyRWST1 = ($__global_Control_Monad_RWS_Trans_applyRWST)((($dictMonad)->Bind1)($__global_Prim_undefined));
  $__res = function($dictMonoid) use ($applyRWST1, $pure) {
  $__num = func_num_args();
  $mempty = ($dictMonoid)->mempty;
  $applyRWST2 = ($applyRWST1)($dictMonoid);
  $__res = (object)["pure" => (function() use ($pure, $mempty, &$__fn) {
  $__fn = function($a, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($a, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($a, $v, $s);
      if ($__num2 === 1) return function($s) use ($a, $v, &$__fn) { return $__fn($a, $v, $s); };
      return phpurs_curry_fallback($__fn, [$a], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($pure)(new Phpurs_Data3("RWSResult", $s, $a, $mempty));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($applyRWST2) {
  $__num = func_num_args();
  $__res = $applyRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_applicativeRWST';

// Control_Monad_RWS_Trans_monadRWST
function Control_Monad_RWS_Trans_monadRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_RWS_Trans_applicativeRWST = ($GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_applicativeRWST'));
  $__global_Control_Monad_RWS_Trans_bindRWST = ($GLOBALS['Control_Monad_RWS_Trans_bindRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_bindRWST'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $applicativeRWST1 = ($__global_Control_Monad_RWS_Trans_applicativeRWST)($dictMonad);
  $bindRWST1 = ($__global_Control_Monad_RWS_Trans_bindRWST)((($dictMonad)->Bind1)($__global_Prim_undefined));
  $__res = function($dictMonoid) use ($applicativeRWST1, $bindRWST1) {
  $__num = func_num_args();
  $applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
  $bindRWST2 = ($bindRWST1)($dictMonoid);
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeRWST2) {
  $__num = func_num_args();
  $__res = $applicativeRWST2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) use ($bindRWST2) {
  $__num = func_num_args();
  $__res = $bindRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadRWST';

// Control_Monad_RWS_Trans_monadAskRWST
function Control_Monad_RWS_Trans_monadAskRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadAskRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_monadRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadRWST'));
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $monadRWST1 = ($__global_Control_Monad_RWS_Trans_monadRWST)($dictMonad);
  $__res = function($dictMonoid) use ($monadRWST1, $pure) {
  $__num = func_num_args();
  $mempty = ($dictMonoid)->mempty;
  $monadRWST2 = ($monadRWST1)($dictMonoid);
  $__res = (object)["ask" => (function() use ($pure, $mempty, &$__fn) {
  $__fn = function($r, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($pure)(new Phpurs_Data3("RWSResult", $s, $r, $mempty));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($__dollar____unused) use ($monadRWST2) {
  $__num = func_num_args();
  $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadAskRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadAskRWST';

// Control_Monad_RWS_Trans_monadReaderRWST
function Control_Monad_RWS_Trans_monadReaderRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadReaderRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_RWS_Trans_monadAskRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadAskRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadAskRWST'));
  $monadAskRWST1 = ($__global_Control_Monad_RWS_Trans_monadAskRWST)($dictMonad);
  $__res = function($dictMonoid) use ($monadAskRWST1) {
  $__num = func_num_args();
  $monadAskRWST2 = ($monadAskRWST1)($dictMonoid);
  $__res = (object)["local" => (function() use (&$__fn) {
  $__fn = function($f, $m = null, $r = null, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($s) use ($f, $m, $r, &$__fn) { return $__fn($f, $m, $r, $s); };
    if ($__num === 2) return function($r, $s = null) use ($f, $m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $m, $r, $s);
      if ($__num2 === 1) return function($s) use ($f, $m, $r, &$__fn) { return $__fn($f, $m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$f, $m], 4);
    };
    if ($__num === 1) return function($m, $r = null, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $m, $r, $s);
      if ($__num2 === 2) return function($s) use ($f, $m, $r, &$__fn) { return $__fn($f, $m, $r, $s); };
      if ($__num2 === 1) return function($r, $s = null) use ($f, $m, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $m, $r, $s);
        if ($__num3 === 1) return function($s) use ($f, $m, $r, &$__fn) { return $__fn($f, $m, $r, $s); };
        return phpurs_curry_fallback($__fn, [$f, $m], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $m;
  if (true) {
$m__prime__ = $__case_0;
$__res = ($m__prime__)(($f)($r), $s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => function($__dollar____unused) use ($monadAskRWST2) {
  $__num = func_num_args();
  $__res = $monadAskRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadReaderRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadReaderRWST';

// Control_Monad_RWS_Trans_monadEffectRWS
function Control_Monad_RWS_Trans_monadEffectRWS($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadEffectRWS';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_RWS_Trans_monadTransRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadTransRWST'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_monadRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadRWST'));
  $__global_Control_Monad_RWS_Trans_compose = ($GLOBALS['Control_Monad_RWS_Trans_compose'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_compose'));
  $lift = (($__global_Control_Monad_RWS_Trans_monadTransRWST)($dictMonoid))->lift;
  $__res = function($dictMonadEffect) use ($__global_Prim_undefined, $__global_Control_Monad_RWS_Trans_monadRWST, $dictMonoid, $__global_Control_Monad_RWS_Trans_compose, $lift) {
  $__num = func_num_args();
  $Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
  $monadRWST1 = ($__global_Control_Monad_RWS_Trans_monadRWST)($Monad0, $dictMonoid);
  $__res = (object)["liftEffect" => ($__global_Control_Monad_RWS_Trans_compose)(($lift)($Monad0), ($dictMonadEffect)->liftEffect), "Monad0" => function($__dollar____unused) use ($monadRWST1) {
  $__num = func_num_args();
  $__res = $monadRWST1;
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
$GLOBALS['Control_Monad_RWS_Trans_monadEffectRWS'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadEffectRWS';

// Control_Monad_RWS_Trans_monadRecRWST
function Control_Monad_RWS_Trans_monadRecRWST($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadRecRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_monadRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadRWST'));
  $Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
  $bind = ((($Monad0)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $tailRecM = ($dictMonadRec)->tailRecM;
  $monadRWST1 = ($__global_Control_Monad_RWS_Trans_monadRWST)($Monad0);
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $monadRWST1, $bind, $pure, $tailRecM) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $monadRWST2 = ($monadRWST1)($dictMonoid);
  $__res = (object)["tailRecM" => (function() use ($bind, $pure, $append, $tailRecM, $mempty, &$__fn) {
  $__fn = function($k, $a = null) use ($bind, $pure, $append, $tailRecM, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($k, &$__fn) { return $__fn($k, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $k__prime__ = (function() use ($k, $bind, $pure, $append, &$__fn) {
  $__fn = function($r, $v = null) use ($k, $bind, $pure, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($r, &$__fn) { return $__fn($r, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $r;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "RWSResult":
$r1 = $__case_0;
$state = ($__case_1)->v0;
$result = ($__case_1)->v1;
$writer = ($__case_1)->v2;
$v1 = ($k)($result);
$__case_0 = $v1;
if (true) {
$m = $__case_0;
$__res = ($bind)(($m)($r1, $state), function($v2) use ($pure, $append, $writer) {
  $__num = func_num_args();
  $__case_0 = $v2;
  switch (($__case_0)->tag) {
case "RWSResult":
$state__prime__ = ($__case_0)->v0;
$result__prime__ = ($__case_0)->v1;
$writer__prime__ = ($__case_0)->v2;
$__case_0 = $result__prime__;
$__case_res_0 = null;
switch (($__case_0)->tag) {
case "Loop":
$x = ($__case_0)->v0;
$__case_res_0 = new Phpurs_Data1("Loop", new Phpurs_Data3("RWSResult", $state__prime__, $x, ($append)($writer, $writer__prime__)));
break;
case "Done":
$y = ($__case_0)->v0;
$__case_res_0 = new Phpurs_Data1("Done", new Phpurs_Data3("RWSResult", $state__prime__, $y, ($append)($writer, $writer__prime__)));
break;
default:
throw new \Exception("Pattern match failure");
break;
};
$__res = ($pure)($__case_res_0);
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
  $__res = (function() use ($tailRecM, $k__prime__, $a, $mempty, &$__fn) {
  $__fn = function($r, $s = null) use ($tailRecM, $k__prime__, $a, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($tailRecM)(($k__prime__)($r), new Phpurs_Data3("RWSResult", $s, $a, $mempty));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($__dollar____unused) use ($monadRWST2) {
  $__num = func_num_args();
  $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadRecRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadRecRWST';

// Control_Monad_RWS_Trans_monadStateRWST
function Control_Monad_RWS_Trans_monadStateRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadStateRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_monadRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadRWST'));
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $monadRWST1 = ($__global_Control_Monad_RWS_Trans_monadRWST)($dictMonad);
  $__res = function($dictMonoid) use ($monadRWST1, $pure) {
  $__num = func_num_args();
  $mempty = ($dictMonoid)->mempty;
  $monadRWST2 = ($monadRWST1)($dictMonoid);
  $__res = (object)["state" => (function() use ($pure, $mempty, &$__fn) {
  $__fn = function($f, $v = null, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($f, $v, &$__fn) { return $__fn($f, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $s);
      if ($__num2 === 1) return function($s) use ($f, $v, &$__fn) { return $__fn($f, $v, $s); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $v1 = ($f)($s);
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$s__prime__ = ($__case_0)->v1;
$__res = ($pure)(new Phpurs_Data3("RWSResult", $s__prime__, $a, $mempty));
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
})(), "Monad0" => function($__dollar____unused) use ($monadRWST2) {
  $__num = func_num_args();
  $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadStateRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadStateRWST';

// Control_Monad_RWS_Trans_monadTellRWST
function Control_Monad_RWS_Trans_monadTellRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadTellRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_monadRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadRWST'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $monadRWST1 = ($__global_Control_Monad_RWS_Trans_monadRWST)($dictMonad);
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $monadRWST1, $pure, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $Semigroup0 = (($dictMonoid)->Semigroup0)($__global_Prim_undefined);
  $monadRWST2 = ($monadRWST1)($dictMonoid);
  $__res = (object)["tell" => (function() use ($pure, $__global_Data_Unit_unit, &$__fn) {
  $__fn = function($w, $v = null, $s = null) use ($pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($w, $v, &$__fn) { return $__fn($w, $v, $s); };
    if ($__num === 1) return function($v, $s = null) use ($w, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($w, $v, $s);
      if ($__num2 === 1) return function($s) use ($w, $v, &$__fn) { return $__fn($w, $v, $s); };
      return phpurs_curry_fallback($__fn, [$w], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($pure)(new Phpurs_Data3("RWSResult", $s, $__global_Data_Unit_unit, $w));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Semigroup0" => function($__dollar____unused) use (&$Semigroup0) {
  $__num = func_num_args();
  $__res = $Semigroup0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad1" => function($__dollar____unused) use ($monadRWST2) {
  $__num = func_num_args();
  $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadTellRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadTellRWST';

// Control_Monad_RWS_Trans_monadWriterRWST
function Control_Monad_RWS_Trans_monadWriterRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadWriterRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_monadTellRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadTellRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadTellRWST'));
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $monadTellRWST1 = ($__global_Control_Monad_RWS_Trans_monadTellRWST)($dictMonad);
  $__res = function($dictMonoid) use ($monadTellRWST1, $bind, $pure) {
  $__num = func_num_args();
  $monadTellRWST2 = ($monadTellRWST1)($dictMonoid);
  $__res = (object)["listen" => (function() use ($bind, $pure, &$__fn) {
  $__fn = function($m, $r = null, $s = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($m, $r, &$__fn) { return $__fn($m, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $r, $s);
      if ($__num2 === 1) return function($s) use ($m, $r, &$__fn) { return $__fn($m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $m;
  if (true) {
$m__prime__ = $__case_0;
$__res = ($bind)(($m__prime__)($r, $s), function($v) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "RWSResult":
$s__prime__ = ($__case_0)->v0;
$a = ($__case_0)->v1;
$w = ($__case_0)->v2;
$__res = ($pure)(new Phpurs_Data3("RWSResult", $s__prime__, new Phpurs_Data2("Tuple", $a, $w), $w));
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "pass" => (function() use ($bind, $pure, &$__fn) {
  $__fn = function($m, $r = null, $s = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($m, $r, &$__fn) { return $__fn($m, $r, $s); };
    if ($__num === 1) return function($r, $s = null) use ($m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $r, $s);
      if ($__num2 === 1) return function($s) use ($m, $r, &$__fn) { return $__fn($m, $r, $s); };
      return phpurs_curry_fallback($__fn, [$m], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $m;
  if (true) {
$m__prime__ = $__case_0;
$__res = ($bind)(($m__prime__)($r, $s), function($v) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (((($__case_0)->tag === "RWSResult") && ((($__case_0)->v1)->tag === "Tuple"))) {
$s__prime__ = ($__case_0)->v0;
$a = (($__case_0)->v1)->v0;
$f = (($__case_0)->v1)->v1;
$w = ($__case_0)->v2;
$__res = ($pure)(new Phpurs_Data3("RWSResult", $s__prime__, $a, ($f)($w)));
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monoid0" => function($__dollar____unused) use ($dictMonoid) {
  $__num = func_num_args();
  $__res = $dictMonoid;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "MonadTell1" => function($__dollar____unused) use ($monadTellRWST2) {
  $__num = func_num_args();
  $__res = $monadTellRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadWriterRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadWriterRWST';

// Control_Monad_RWS_Trans_monadThrowRWST
function Control_Monad_RWS_Trans_monadThrowRWST($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadThrowRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_monadRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadRWST'));
  $__global_Control_Monad_RWS_Trans_monadTransRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadTransRWST'));
  $Monad0 = (($dictMonadThrow)->Monad0)($__global_Prim_undefined);
  $throwError = ($dictMonadThrow)->throwError;
  $monadRWST1 = ($__global_Control_Monad_RWS_Trans_monadRWST)($Monad0);
  $__res = function($dictMonoid) use ($__global_Control_Monad_RWS_Trans_monadTransRWST, &$Monad0, $monadRWST1, $throwError) {
  $__num = func_num_args();
  $lift = ((($__global_Control_Monad_RWS_Trans_monadTransRWST)($dictMonoid))->lift)($Monad0);
  $monadRWST2 = ($monadRWST1)($dictMonoid);
  $__res = (object)["throwError" => function($e) use ($lift, $throwError) {
  $__num = func_num_args();
  $__res = ($lift)(($throwError)($e));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) use ($monadRWST2) {
  $__num = func_num_args();
  $__res = $monadRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadThrowRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadThrowRWST';

// Control_Monad_RWS_Trans_monadErrorRWST
function Control_Monad_RWS_Trans_monadErrorRWST($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadErrorRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_RWS_Trans_monadThrowRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadThrowRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadThrowRWST'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $catchError = ($dictMonadError)->catchError;
  $monadThrowRWST1 = ($__global_Control_Monad_RWS_Trans_monadThrowRWST)((($dictMonadError)->MonadThrow0)($__global_Prim_undefined));
  $__res = function($dictMonoid) use ($monadThrowRWST1, $catchError) {
  $__num = func_num_args();
  $monadThrowRWST2 = ($monadThrowRWST1)($dictMonoid);
  $__res = (object)["catchError" => (function() use ($catchError, &$__fn) {
  $__fn = function($m, $h = null, $r = null, $s = null) use ($catchError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($s) use ($m, $h, $r, &$__fn) { return $__fn($m, $h, $r, $s); };
    if ($__num === 2) return function($r, $s = null) use ($m, $h, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($m, $h, $r, $s);
      if ($__num2 === 1) return function($s) use ($m, $h, $r, &$__fn) { return $__fn($m, $h, $r, $s); };
      return phpurs_curry_fallback($__fn, [$m, $h], 4);
    };
    if ($__num === 1) return function($h, $r = null, $s = null) use ($m, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($m, $h, $r, $s);
      if ($__num2 === 2) return function($s) use ($m, $h, $r, &$__fn) { return $__fn($m, $h, $r, $s); };
      if ($__num2 === 1) return function($r, $s = null) use ($m, $h, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($m, $h, $r, $s);
        if ($__num3 === 1) return function($s) use ($m, $h, $r, &$__fn) { return $__fn($m, $h, $r, $s); };
        return phpurs_curry_fallback($__fn, [$m, $h], 4);
      };
      return phpurs_curry_fallback($__fn, [$m], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $m;
  $__case_res_0 = null;
  if (true) {
$m__prime__ = $__case_0;
$__case_res_0 = ($m__prime__)($r, $s);
} else {
throw new \Exception("Pattern match failure");
};
  $__res = ($catchError)($__case_res_0, function($e) use ($h, $r, $s) {
  $__num = func_num_args();
  $v = ($h)($e);
  $__case_0 = $v;
  if (true) {
$m__prime__ = $__case_0;
$__res = ($m__prime__)($r, $s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($__dollar____unused) use ($monadThrowRWST2) {
  $__num = func_num_args();
  $__res = $monadThrowRWST2;
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
$GLOBALS['Control_Monad_RWS_Trans_monadErrorRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadErrorRWST';

// Control_Monad_RWS_Trans_monadSTRWST
function Control_Monad_RWS_Trans_monadSTRWST($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monadSTRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_RWS_Trans_monadTransRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadTransRWST'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_monadRWST = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_monadRWST'));
  $__global_Control_Monad_RWS_Trans_compose = ($GLOBALS['Control_Monad_RWS_Trans_compose'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_compose'));
  $lift = (($__global_Control_Monad_RWS_Trans_monadTransRWST)($dictMonoid))->lift;
  $__res = function($dictMonadST) use ($__global_Prim_undefined, $__global_Control_Monad_RWS_Trans_monadRWST, $dictMonoid, $__global_Control_Monad_RWS_Trans_compose, $lift) {
  $__num = func_num_args();
  $Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
  $monadRWST1 = ($__global_Control_Monad_RWS_Trans_monadRWST)($Monad0, $dictMonoid);
  $__res = (object)["liftST" => ($__global_Control_Monad_RWS_Trans_compose)(($lift)($Monad0), ($dictMonadST)->liftST), "Monad0" => function($__dollar____unused) use ($monadRWST1) {
  $__num = func_num_args();
  $__res = $monadRWST1;
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
$GLOBALS['Control_Monad_RWS_Trans_monadSTRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monadSTRWST';

// Control_Monad_RWS_Trans_monoidRWST
function Control_Monad_RWS_Trans_monoidRWST($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_monoidRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_RWS_Trans_applicativeRWST = ($GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_applicativeRWST'));
  $__global_Control_Monad_RWS_Trans_semigroupRWST = ($GLOBALS['Control_Monad_RWS_Trans_semigroupRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_semigroupRWST'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $applicativeRWST1 = ($__global_Control_Monad_RWS_Trans_applicativeRWST)($dictMonad);
  $semigroupRWST1 = ($__global_Control_Monad_RWS_Trans_semigroupRWST)((($dictMonad)->Bind1)($__global_Prim_undefined));
  $__res = function($dictMonoid) use ($applicativeRWST1, $semigroupRWST1, $__global_Prim_undefined) {
  $__num = func_num_args();
  $pure = (($applicativeRWST1)($dictMonoid))->pure;
  $semigroupRWST2 = ($semigroupRWST1)($dictMonoid);
  $__res = function($dictMonoid1) use ($semigroupRWST2, $__global_Prim_undefined, $pure) {
  $__num = func_num_args();
  $semigroupRWST3 = ($semigroupRWST2)((($dictMonoid1)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($pure)(($dictMonoid1)->mempty), "Semigroup0" => function($__dollar____unused) use ($semigroupRWST3) {
  $__num = func_num_args();
  $__res = $semigroupRWST3;
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
$GLOBALS['Control_Monad_RWS_Trans_monoidRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_monoidRWST';

// Control_Monad_RWS_Trans_altRWST
function Control_Monad_RWS_Trans_altRWST($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_altRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_RWS_Trans_functorRWST = ($GLOBALS['Control_Monad_RWS_Trans_functorRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_functorRWST'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $alt = ($dictAlt)->alt;
  $functorRWST1 = ($__global_Control_Monad_RWS_Trans_functorRWST)((($dictAlt)->Functor0)($__global_Prim_undefined));
  $__res = (object)["alt" => (function() use ($alt, &$__fn) {
  $__fn = function($v, $v1 = null) use ($alt, &$__fn) {
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
$__res = (function() use ($alt, $m, $n, &$__fn) {
  $__fn = function($r, $s = null) use ($alt, $m, $n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($r, &$__fn) { return $__fn($r, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($alt)(($m)($r, $s), ($n)($r, $s));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) use ($functorRWST1) {
  $__num = func_num_args();
  $__res = $functorRWST1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_altRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_altRWST';

// Control_Monad_RWS_Trans_plusRWST
function Control_Monad_RWS_Trans_plusRWST($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_plusRWST';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_RWS_Trans_altRWST = ($GLOBALS['Control_Monad_RWS_Trans_altRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_altRWST'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $empty = ($dictPlus)->empty;
  $altRWST1 = ($__global_Control_Monad_RWS_Trans_altRWST)((($dictPlus)->Alt0)($__global_Prim_undefined));
  $__res = (object)["empty" => (function() use ($empty, &$__fn) {
  $__fn = function($v, $v1 = null) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = $empty;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Alt0" => function($__dollar____unused) use ($altRWST1) {
  $__num = func_num_args();
  $__res = $altRWST1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_plusRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_plusRWST';

// Control_Monad_RWS_Trans_alternativeRWST
function Control_Monad_RWS_Trans_alternativeRWST($dictMonoid, $dictAlternative = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_RWS_Trans_alternativeRWST';
  if ($__num < 2) {
    if ($__num === 1) return function($dictAlternative) use ($dictMonoid, $__fn) { return $__fn($dictMonoid, $dictAlternative); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_RWS_Trans_plusRWST = ($GLOBALS['Control_Monad_RWS_Trans_plusRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_plusRWST'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_RWS_Trans_applicativeRWST = ($GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'] ?? \Control\Monad\RWS\Trans\phpurs_eval_thunk('Control_Monad_RWS_Trans_applicativeRWST'));
  $plusRWST1 = ($__global_Control_Monad_RWS_Trans_plusRWST)((($dictAlternative)->Plus1)($__global_Prim_undefined));
  $__res = function($dictMonad) use ($__global_Control_Monad_RWS_Trans_applicativeRWST, $dictMonoid, $plusRWST1) {
  $__num = func_num_args();
  $applicativeRWST1 = ($__global_Control_Monad_RWS_Trans_applicativeRWST)($dictMonad, $dictMonoid);
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeRWST1) {
  $__num = func_num_args();
  $__res = $applicativeRWST1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) use ($plusRWST1) {
  $__num = func_num_args();
  $__res = $plusRWST1;
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
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_RWS_Trans_alternativeRWST'] = __NAMESPACE__ . '\\Control_Monad_RWS_Trans_alternativeRWST';

