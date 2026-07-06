<?php

namespace Control\Monad\State\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
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
      case 'Control_Monad_State_Trans_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_State_Trans_newtypeStateT': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_State_Trans_monadTransStateT': $v = (object)["lift" => function($dictMonad) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (function() use ($bind, $pure, &$__fn) {
  $__fn = function($m, $s = null) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($m, &$__fn) { return $__fn($m, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bind)($m, function($x) use ($pure, $s) {
  $__num = func_num_args();
  $__res = ($pure)(new Phpurs_Data2("Tuple", $x, $s));
  goto __end;;
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
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_State_Trans_lift': $v = (($GLOBALS['Control_Monad_State_Trans_monadTransStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadTransStateT')))->lift; break;
      case 'Control_Monad_State_Trans_lazyStateT': $v = (object)["defer" => (function() use (&$__fn) {
  $__fn = function($f, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($f, &$__fn) { return $__fn($f, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $v = ($f)($__global_Data_Unit_unit);
  $__case_0 = $v;
  if (true) {
$f__prime__ = $__case_0;
$__res = ($f__prime__)($s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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



// Control_Monad_State_Trans_StateT
function Control_Monad_State_Trans_StateT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_StateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_StateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_StateT';

// Control_Monad_State_Trans_withStateT
function Control_Monad_State_Trans_withStateT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_withStateT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_State_Trans_compose = ($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$s = $__case_1;
$__res = ($__global_Control_Monad_State_Trans_compose)($s, $f1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_withStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_withStateT';

// Control_Monad_State_Trans_runStateT
function Control_Monad_State_Trans_runStateT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_runStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = $s;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_runStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_runStateT';




// Control_Monad_State_Trans_mapStateT
function Control_Monad_State_Trans_mapStateT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_mapStateT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_State_Trans_compose = ($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$m = $__case_1;
$__res = ($__global_Control_Monad_State_Trans_compose)($f1, $m);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_mapStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_mapStateT';


// Control_Monad_State_Trans_functorStateT
function Control_Monad_State_Trans_functorStateT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_functorStateT';
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
$a = $__case_1;
$__res = function($s) use ($map, $f1, $a) {
  $__num = func_num_args();
  $__res = ($map)(function($v1) use ($f1) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$b = ($__case_0)->v0;
$s__prime__ = ($__case_0)->v1;
$__res = new Phpurs_Data2("Tuple", ($f1)($b), $s__prime__);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($a)($s));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
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
$GLOBALS['Control_Monad_State_Trans_functorStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_functorStateT';

// Control_Monad_State_Trans_execStateT
function Control_Monad_State_Trans_execStateT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_execStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $map = ($dictFunctor)->map;
  $__res = (function() use ($map, $__global_Data_Tuple_snd, &$__fn) {
  $__fn = function($v, $s = null) use ($map, $__global_Data_Tuple_snd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, &$__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $s;
  if (true) {
$m = $__case_0;
$s1 = $__case_1;
$__res = ($map)($__global_Data_Tuple_snd, ($m)($s1));
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
$GLOBALS['Control_Monad_State_Trans_execStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_execStateT';

// Control_Monad_State_Trans_evalStateT
function Control_Monad_State_Trans_evalStateT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_evalStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
  $map = ($dictFunctor)->map;
  $__res = (function() use ($map, $__global_Data_Tuple_fst, &$__fn) {
  $__fn = function($v, $s = null) use ($map, $__global_Data_Tuple_fst, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($v, &$__fn) { return $__fn($v, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $s;
  if (true) {
$m = $__case_0;
$s1 = $__case_1;
$__res = ($map)($__global_Data_Tuple_fst, ($m)($s1));
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
$GLOBALS['Control_Monad_State_Trans_evalStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_evalStateT';

// Control_Monad_State_Trans_monadStateT
function Control_Monad_State_Trans_monadStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_State_Trans_applicativeStateT = ($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applicativeStateT'));
  $__global_Control_Monad_State_Trans_bindStateT = ($GLOBALS['Control_Monad_State_Trans_bindStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_bindStateT'));
  while (true) {
$__res = (object)["Applicative0" => function($__dollar____unused) use ($__global_Control_Monad_State_Trans_applicativeStateT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_State_Trans_applicativeStateT)($dictMonad);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) use ($__global_Control_Monad_State_Trans_bindStateT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_State_Trans_bindStateT)($dictMonad);
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
$GLOBALS['Control_Monad_State_Trans_monadStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadStateT';

// Control_Monad_State_Trans_bindStateT
function Control_Monad_State_Trans_bindStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_bindStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_applyStateT = ($GLOBALS['Control_Monad_State_Trans_applyStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applyStateT'));
  while (true) {
$bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
$__res = (object)["bind" => (function() use ($bind, &$__fn) {
  $__fn = function($v, $f = null) use ($bind, &$__fn) {
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
$__res = function($s) use ($bind, $x, $f1) {
  $__num = func_num_args();
  $__res = ($bind)(($x)($s), function($v1) use ($f1) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$v2 = ($__case_0)->v0;
$s__prime__ = ($__case_0)->v1;
$v3 = ($f1)($v2);
$__case_0 = $v3;
if (true) {
$st = $__case_0;
$__res = ($st)($s__prime__);
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($__global_Control_Monad_State_Trans_applyStateT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_State_Trans_applyStateT)($dictMonad);
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
$GLOBALS['Control_Monad_State_Trans_bindStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_bindStateT';

// Control_Monad_State_Trans_applyStateT
function Control_Monad_State_Trans_applyStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_applyStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_State_Trans_functorStateT = ($GLOBALS['Control_Monad_State_Trans_functorStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_functorStateT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_ap = ($GLOBALS['Control_Monad_ap'] ?? \Control\Monad\phpurs_eval_thunk('Control_Monad_ap'));
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  while (true) {
$functorStateT1 = ($__global_Control_Monad_State_Trans_functorStateT)((((((($dictMonad)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
$__res = (object)["apply" => ($__global_Control_Monad_ap)(($__global_Control_Monad_State_Trans_monadStateT)($dictMonad)), "Functor0" => function($__dollar____unused) use ($functorStateT1) {
  $__num = func_num_args();
  $__res = $functorStateT1;
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
$GLOBALS['Control_Monad_State_Trans_applyStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_applyStateT';

// Control_Monad_State_Trans_applicativeStateT
function Control_Monad_State_Trans_applicativeStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_applicativeStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_applyStateT = ($GLOBALS['Control_Monad_State_Trans_applyStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applyStateT'));
  while (true) {
$pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
$__res = (object)["pure" => (function() use ($pure, &$__fn) {
  $__fn = function($a, $s = null) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($a, &$__fn) { return $__fn($a, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($pure)(new Phpurs_Data2("Tuple", $a, $s));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($__global_Control_Monad_State_Trans_applyStateT, $dictMonad) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_State_Trans_applyStateT)($dictMonad);
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
$GLOBALS['Control_Monad_State_Trans_applicativeStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_applicativeStateT';

// Control_Monad_State_Trans_semigroupStateT
function Control_Monad_State_Trans_semigroupStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_semigroupStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Control_Monad_State_Trans_applyStateT = ($GLOBALS['Control_Monad_State_Trans_applyStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applyStateT'));
  $lift2 = ($__global_Control_Apply_lift2)(($__global_Control_Monad_State_Trans_applyStateT)($dictMonad));
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
$GLOBALS['Control_Monad_State_Trans_semigroupStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_semigroupStateT';

// Control_Monad_State_Trans_monadAskStateT
function Control_Monad_State_Trans_monadAskStateT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadAskStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  $__global_Control_Monad_State_Trans_lift = ($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift'));
  $Monad0 = (($dictMonadAsk)->Monad0)($__global_Prim_undefined);
  $monadStateT1 = ($__global_Control_Monad_State_Trans_monadStateT)($Monad0);
  $__res = (object)["ask" => ($__global_Control_Monad_State_Trans_lift)($Monad0, ($dictMonadAsk)->ask), "Monad0" => function($__dollar____unused) use ($monadStateT1) {
  $__num = func_num_args();
  $__res = $monadStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadAskStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadAskStateT';

// Control_Monad_State_Trans_monadReaderStateT
function Control_Monad_State_Trans_monadReaderStateT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadReaderStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_State_Trans_monadAskStateT = ($GLOBALS['Control_Monad_State_Trans_monadAskStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadAskStateT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_compose = ($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose'));
  $__global_Control_Monad_State_Trans_mapStateT = ($GLOBALS['Control_Monad_State_Trans_mapStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_mapStateT'));
  $monadAskStateT1 = ($__global_Control_Monad_State_Trans_monadAskStateT)((($dictMonadReader)->MonadAsk0)($__global_Prim_undefined));
  $__res = (object)["local" => ($__global_Control_Monad_State_Trans_compose)($__global_Control_Monad_State_Trans_mapStateT, ($dictMonadReader)->local), "MonadAsk0" => function($__dollar____unused) use ($monadAskStateT1) {
  $__num = func_num_args();
  $__res = $monadAskStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadReaderStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadReaderStateT';

// Control_Monad_State_Trans_monadContStateT
function Control_Monad_State_Trans_monadContStateT($dictMonadCont) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadContStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $callCC = ($dictMonadCont)->callCC;
  $monadStateT1 = ($__global_Control_Monad_State_Trans_monadStateT)((($dictMonadCont)->Monad0)($__global_Prim_undefined));
  $__res = (object)["callCC" => (function() use ($callCC, &$__fn) {
  $__fn = function($f, $s = null) use ($callCC, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($f, &$__fn) { return $__fn($f, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($callCC)(function($c) use ($f, $s) {
  $__num = func_num_args();
  $v = ($f)((function() use ($c, &$__fn) {
  $__fn = function($a, $s__prime__ = null) use ($c, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s__prime__) use ($a, &$__fn) { return $__fn($a, $s__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($c)(new Phpurs_Data2("Tuple", $a, $s__prime__));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__case_0 = $v;
  if (true) {
$f__prime__ = $__case_0;
$__res = ($f__prime__)($s);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($__dollar____unused) use ($monadStateT1) {
  $__num = func_num_args();
  $__res = $monadStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadContStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadContStateT';

// Control_Monad_State_Trans_monadEffectState
function Control_Monad_State_Trans_monadEffectState($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadEffectState';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  $__global_Control_Monad_State_Trans_compose = ($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose'));
  $__global_Control_Monad_State_Trans_lift = ($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift'));
  $Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
  $monadStateT1 = ($__global_Control_Monad_State_Trans_monadStateT)($Monad0);
  $__res = (object)["liftEffect" => ($__global_Control_Monad_State_Trans_compose)(($__global_Control_Monad_State_Trans_lift)($Monad0), ($dictMonadEffect)->liftEffect), "Monad0" => function($__dollar____unused) use ($monadStateT1) {
  $__num = func_num_args();
  $__res = $monadStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadEffectState'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadEffectState';

// Control_Monad_State_Trans_monadRecStateT
function Control_Monad_State_Trans_monadRecStateT($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadRecStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  $Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
  $bind = ((($Monad0)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $tailRecM = ($dictMonadRec)->tailRecM;
  $monadStateT1 = ($__global_Control_Monad_State_Trans_monadStateT)($Monad0);
  $__res = (object)["tailRecM" => (function() use ($bind, $pure, $tailRecM, &$__fn) {
  $__fn = function($f, $a = null) use ($bind, $pure, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $f__prime__ = function($v) use ($f, $bind, $pure) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$a__prime__ = ($__case_0)->v0;
$s = ($__case_0)->v1;
$v1 = ($f)($a__prime__);
$__case_0 = $v1;
if (true) {
$st = $__case_0;
$__res = ($bind)(($st)($s), function($v2) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $v2;
  switch (($__case_0)->tag) {
case "Tuple":
$m = ($__case_0)->v0;
$s1 = ($__case_0)->v1;
$__case_0 = $m;
$__case_res_0 = null;
switch (($__case_0)->tag) {
case "Loop":
$x = ($__case_0)->v0;
$__case_res_0 = new Phpurs_Data1("Loop", new Phpurs_Data2("Tuple", $x, $s1));
break;
case "Done":
$y = ($__case_0)->v0;
$__case_res_0 = new Phpurs_Data1("Done", new Phpurs_Data2("Tuple", $y, $s1));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = function($s) use ($tailRecM, $f__prime__, $a) {
  $__num = func_num_args();
  $__res = ($tailRecM)($f__prime__, new Phpurs_Data2("Tuple", $a, $s));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($__dollar____unused) use ($monadStateT1) {
  $__num = func_num_args();
  $__res = $monadStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadRecStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadRecStateT';

// Control_Monad_State_Trans_monadStateStateT
function Control_Monad_State_Trans_monadStateStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadStateStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  $__global_Control_Monad_State_Trans_compose = ($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose'));
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $monadStateT1 = ($__global_Control_Monad_State_Trans_monadStateT)($dictMonad);
  $__res = (object)["state" => function($f) use ($__global_Control_Monad_State_Trans_compose, $pure) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_State_Trans_compose)($pure, $f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) use ($monadStateT1) {
  $__num = func_num_args();
  $__res = $monadStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadStateStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadStateStateT';

// Control_Monad_State_Trans_monadTellStateT
function Control_Monad_State_Trans_monadTellStateT($dictMonadTell) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadTellStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  $__global_Control_Monad_State_Trans_compose = ($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose'));
  $__global_Control_Monad_State_Trans_lift = ($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift'));
  $Monad1 = (($dictMonadTell)->Monad1)($__global_Prim_undefined);
  $Semigroup0 = (($dictMonadTell)->Semigroup0)($__global_Prim_undefined);
  $monadStateT1 = ($__global_Control_Monad_State_Trans_monadStateT)($Monad1);
  $__res = (object)["tell" => ($__global_Control_Monad_State_Trans_compose)(($__global_Control_Monad_State_Trans_lift)($Monad1), ($dictMonadTell)->tell), "Semigroup0" => function($__dollar____unused) use (&$Semigroup0) {
  $__num = func_num_args();
  $__res = $Semigroup0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad1" => function($__dollar____unused) use ($monadStateT1) {
  $__num = func_num_args();
  $__res = $monadStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadTellStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadTellStateT';

// Control_Monad_State_Trans_monadWriterStateT
function Control_Monad_State_Trans_monadWriterStateT($dictMonadWriter) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadWriterStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_monadTellStateT = ($GLOBALS['Control_Monad_State_Trans_monadTellStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadTellStateT'));
  $MonadTell1 = (($dictMonadWriter)->MonadTell1)($__global_Prim_undefined);
  $Monad1 = (($MonadTell1)->Monad1)($__global_Prim_undefined);
  $bind = ((($Monad1)->Bind1)($__global_Prim_undefined))->bind;
  $listen = ($dictMonadWriter)->listen;
  $pure = ((($Monad1)->Applicative0)($__global_Prim_undefined))->pure;
  $pass = ($dictMonadWriter)->pass;
  $Monoid0 = (($dictMonadWriter)->Monoid0)($__global_Prim_undefined);
  $monadTellStateT1 = ($__global_Control_Monad_State_Trans_monadTellStateT)($MonadTell1);
  $__res = (object)["listen" => (function() use ($bind, $listen, $pure, &$__fn) {
  $__fn = function($m, $s = null) use ($bind, $listen, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($m, &$__fn) { return $__fn($m, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $m;
  if (true) {
$m__prime__ = $__case_0;
$__res = ($bind)(($listen)(($m__prime__)($s)), function($v) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$s__prime__ = (($__case_0)->v0)->v1;
$w = ($__case_0)->v1;
$__res = ($pure)(new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", $a, $w), $s__prime__));
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
})(), "pass" => (function() use ($pass, $bind, $pure, &$__fn) {
  $__fn = function($m, $s = null) use ($pass, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($m, &$__fn) { return $__fn($m, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $m;
  $__case_res_0 = null;
  if (true) {
$m__prime__ = $__case_0;
$__case_res_0 = ($bind)(($m__prime__)($s), function($v) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v0)->tag === "Tuple"))) {
$a = (($__case_0)->v0)->v0;
$f = (($__case_0)->v0)->v1;
$s__prime__ = ($__case_0)->v1;
$__res = ($pure)(new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", $a, $s__prime__), $f));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
} else {
throw new \Exception("Pattern match failure");
};
  $__res = ($pass)($__case_res_0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monoid0" => function($__dollar____unused) use (&$Monoid0) {
  $__num = func_num_args();
  $__res = $Monoid0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "MonadTell1" => function($__dollar____unused) use ($monadTellStateT1) {
  $__num = func_num_args();
  $__res = $monadTellStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadWriterStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadWriterStateT';

// Control_Monad_State_Trans_monadThrowStateT
function Control_Monad_State_Trans_monadThrowStateT($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadThrowStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_lift = ($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift'));
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  $Monad0 = (($dictMonadThrow)->Monad0)($__global_Prim_undefined);
  $lift1 = ($__global_Control_Monad_State_Trans_lift)($Monad0);
  $throwError = ($dictMonadThrow)->throwError;
  $monadStateT1 = ($__global_Control_Monad_State_Trans_monadStateT)($Monad0);
  $__res = (object)["throwError" => function($e) use ($lift1, $throwError) {
  $__num = func_num_args();
  $__res = ($lift1)(($throwError)($e));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) use ($monadStateT1) {
  $__num = func_num_args();
  $__res = $monadStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadThrowStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadThrowStateT';

// Control_Monad_State_Trans_monadErrorStateT
function Control_Monad_State_Trans_monadErrorStateT($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadErrorStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_State_Trans_monadThrowStateT = ($GLOBALS['Control_Monad_State_Trans_monadThrowStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadThrowStateT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $catchError = ($dictMonadError)->catchError;
  $monadThrowStateT1 = ($__global_Control_Monad_State_Trans_monadThrowStateT)((($dictMonadError)->MonadThrow0)($__global_Prim_undefined));
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
$__res = function($s) use ($catchError, $m, $h1) {
  $__num = func_num_args();
  $__res = ($catchError)(($m)($s), function($e) use ($h1, $s) {
  $__num = func_num_args();
  $v1 = ($h1)($e);
  $__case_0 = $v1;
  if (true) {
$f = $__case_0;
$__res = ($f)($s);
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
};
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($__dollar____unused) use ($monadThrowStateT1) {
  $__num = func_num_args();
  $__res = $monadThrowStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadErrorStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadErrorStateT';

// Control_Monad_State_Trans_monadSTStateT
function Control_Monad_State_Trans_monadSTStateT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadSTStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  $__global_Control_Monad_State_Trans_compose = ($GLOBALS['Control_Monad_State_Trans_compose'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_compose'));
  $__global_Control_Monad_State_Trans_lift = ($GLOBALS['Control_Monad_State_Trans_lift'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_lift'));
  $Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
  $monadStateT1 = ($__global_Control_Monad_State_Trans_monadStateT)($Monad0);
  $__res = (object)["liftST" => ($__global_Control_Monad_State_Trans_compose)(($__global_Control_Monad_State_Trans_lift)($Monad0), ($dictMonadST)->liftST), "Monad0" => function($__dollar____unused) use ($monadStateT1) {
  $__num = func_num_args();
  $__res = $monadStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadSTStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadSTStateT';

// Control_Monad_State_Trans_monoidStateT
function Control_Monad_State_Trans_monoidStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monoidStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_State_Trans_applicativeStateT = ($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applicativeStateT'));
  $__global_Control_Monad_State_Trans_semigroupStateT = ($GLOBALS['Control_Monad_State_Trans_semigroupStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_semigroupStateT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = (($__global_Control_Monad_State_Trans_applicativeStateT)($dictMonad))->pure;
  $semigroupStateT1 = ($__global_Control_Monad_State_Trans_semigroupStateT)($dictMonad);
  $__res = function($dictMonoid) use ($semigroupStateT1, $__global_Prim_undefined, $pure) {
  $__num = func_num_args();
  $semigroupStateT2 = ($semigroupStateT1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($pure)(($dictMonoid)->mempty), "Semigroup0" => function($__dollar____unused) use ($semigroupStateT2) {
  $__num = func_num_args();
  $__res = $semigroupStateT2;
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
$GLOBALS['Control_Monad_State_Trans_monoidStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monoidStateT';

// Control_Monad_State_Trans_altStateT
function Control_Monad_State_Trans_altStateT($dictMonad, $dictAlt = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_altStateT';
  if ($__num < 2) {
    if ($__num === 1) return function($dictAlt) use ($dictMonad, $__fn) { return $__fn($dictMonad, $dictAlt); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_State_Trans_functorStateT = ($GLOBALS['Control_Monad_State_Trans_functorStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_functorStateT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $alt = ($dictAlt)->alt;
  $functorStateT1 = ($__global_Control_Monad_State_Trans_functorStateT)((($dictAlt)->Functor0)($__global_Prim_undefined));
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
$x = $__case_0;
$y = $__case_1;
$__res = function($s) use ($alt, $x, $y) {
  $__num = func_num_args();
  $__res = ($alt)(($x)($s), ($y)($s));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) use ($functorStateT1) {
  $__num = func_num_args();
  $__res = $functorStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_altStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_altStateT';

// Control_Monad_State_Trans_plusStateT
function Control_Monad_State_Trans_plusStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_plusStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_State_Trans_altStateT = ($GLOBALS['Control_Monad_State_Trans_altStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_altStateT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $altStateT1 = ($__global_Control_Monad_State_Trans_altStateT)($dictMonad);
  $__res = function($dictPlus) use ($altStateT1, $__global_Prim_undefined) {
  $__num = func_num_args();
  $empty = ($dictPlus)->empty;
  $altStateT2 = ($altStateT1)((($dictPlus)->Alt0)($__global_Prim_undefined));
  $__res = (object)["empty" => function($v) use ($empty) {
  $__num = func_num_args();
  $__res = $empty;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alt0" => function($__dollar____unused) use ($altStateT2) {
  $__num = func_num_args();
  $__res = $altStateT2;
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
$GLOBALS['Control_Monad_State_Trans_plusStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_plusStateT';

// Control_Monad_State_Trans_alternativeStateT
function Control_Monad_State_Trans_alternativeStateT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_alternativeStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_State_Trans_applicativeStateT = ($GLOBALS['Control_Monad_State_Trans_applicativeStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_applicativeStateT'));
  $__global_Control_Monad_State_Trans_plusStateT = ($GLOBALS['Control_Monad_State_Trans_plusStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_plusStateT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $applicativeStateT1 = ($__global_Control_Monad_State_Trans_applicativeStateT)($dictMonad);
  $plusStateT1 = ($__global_Control_Monad_State_Trans_plusStateT)($dictMonad);
  $__res = function($dictAlternative) use ($plusStateT1, $__global_Prim_undefined, $applicativeStateT1) {
  $__num = func_num_args();
  $plusStateT2 = ($plusStateT1)((($dictAlternative)->Plus1)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeStateT1) {
  $__num = func_num_args();
  $__res = $applicativeStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) use ($plusStateT2) {
  $__num = func_num_args();
  $__res = $plusStateT2;
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
$GLOBALS['Control_Monad_State_Trans_alternativeStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_alternativeStateT';

// Control_Monad_State_Trans_monadPlusStateT
function Control_Monad_State_Trans_monadPlusStateT($dictMonadPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_State_Trans_monadPlusStateT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_State_Trans_monadStateT = ($GLOBALS['Control_Monad_State_Trans_monadStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_monadStateT'));
  $__global_Control_Monad_State_Trans_alternativeStateT = ($GLOBALS['Control_Monad_State_Trans_alternativeStateT'] ?? \Control\Monad\State\Trans\phpurs_eval_thunk('Control_Monad_State_Trans_alternativeStateT'));
  $Monad0 = (($dictMonadPlus)->Monad0)($__global_Prim_undefined);
  $monadStateT1 = ($__global_Control_Monad_State_Trans_monadStateT)($Monad0);
  $alternativeStateT1 = ($__global_Control_Monad_State_Trans_alternativeStateT)($Monad0, (($dictMonadPlus)->Alternative1)($__global_Prim_undefined));
  $__res = (object)["Monad0" => function($__dollar____unused) use ($monadStateT1) {
  $__num = func_num_args();
  $__res = $monadStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alternative1" => function($__dollar____unused) use ($alternativeStateT1) {
  $__num = func_num_args();
  $__res = $alternativeStateT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_State_Trans_monadPlusStateT'] = __NAMESPACE__ . '\\Control_Monad_State_Trans_monadPlusStateT';

