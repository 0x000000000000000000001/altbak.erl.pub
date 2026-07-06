<?php

namespace Control\Monad\Cont\Trans;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
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
      case 'Control_Monad_Cont_Trans_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_Cont_Trans_newtypeContT': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Cont_Trans_monadTransContT': $v = (object)["lift" => function($dictMonad) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $__res = (function() use ($bind, &$__fn) {
  $__fn = function($m, $k = null) use ($bind, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($m, &$__fn) { return $__fn($m, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bind)($m, $k);
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
      case 'Control_Monad_Cont_Trans_lift': $v = (($GLOBALS['Control_Monad_Cont_Trans_monadTransContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadTransContT')))->lift; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Control_Monad_Cont_Trans_ContT
function Control_Monad_Cont_Trans_ContT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_ContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_ContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_ContT';

// Control_Monad_Cont_Trans_withContT
function Control_Monad_Cont_Trans_withContT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_withContT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$m = $__case_1;
$__res = function($k) use ($m, $f1) {
  $__num = func_num_args();
  $__res = ($m)(($f1)($k));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_withContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_withContT';

// Control_Monad_Cont_Trans_runContT
function Control_Monad_Cont_Trans_runContT($v, $k = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_runContT';
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($v, $__fn) { return $__fn($v, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $k;
  if (true) {
$f = $__case_0;
$k1 = $__case_1;
$__res = ($f)($k1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_runContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_runContT';




// Control_Monad_Cont_Trans_mapContT
function Control_Monad_Cont_Trans_mapContT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_mapContT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$m = $__case_1;
$__res = function($k) use ($f1, $m) {
  $__num = func_num_args();
  $__res = ($f1)(($m)($k));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_mapContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_mapContT';

// Control_Monad_Cont_Trans_functorContT
function Control_Monad_Cont_Trans_functorContT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_functorContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (object)["map" => (function() use (&$__fn) {
  $__fn = function($f, $v = null) use (&$__fn) {
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
$__res = function($k) use ($m, $f1) {
  $__num = func_num_args();
  $__res = ($m)(function($a) use ($k, $f1) {
  $__num = func_num_args();
  $__res = ($k)(($f1)($a));
  goto __end;;
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
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_functorContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_functorContT';

// Control_Monad_Cont_Trans_applyContT
function Control_Monad_Cont_Trans_applyContT($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_applyContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_functorContT = ($GLOBALS['Control_Monad_Cont_Trans_functorContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_functorContT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $functorContT1 = ($__global_Control_Monad_Cont_Trans_functorContT)((($dictApply)->Functor0)($__global_Prim_undefined));
  $__res = (object)["apply" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$f = $__case_0;
$v2 = $__case_1;
$__res = function($k) use ($f, $v2) {
  $__num = func_num_args();
  $__res = ($f)(function($g) use ($v2, $k) {
  $__num = func_num_args();
  $__res = ($v2)(function($a) use ($k, $g) {
  $__num = func_num_args();
  $__res = ($k)(($g)($a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
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
})(), "Functor0" => function($__dollar____unused) use ($functorContT1) {
  $__num = func_num_args();
  $__res = $functorContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_applyContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_applyContT';

// Control_Monad_Cont_Trans_bindContT
function Control_Monad_Cont_Trans_bindContT($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_bindContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_applyContT = ($GLOBALS['Control_Monad_Cont_Trans_applyContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applyContT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $applyContT1 = ($__global_Control_Monad_Cont_Trans_applyContT)((($dictBind)->Apply0)($__global_Prim_undefined));
  $__res = (object)["bind" => (function() use (&$__fn) {
  $__fn = function($v, $k = null) use (&$__fn) {
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
$__res = function($k__prime__) use ($m, $k1) {
  $__num = func_num_args();
  $__res = ($m)(function($a) use ($k1, $k__prime__) {
  $__num = func_num_args();
  $v1 = ($k1)($a);
  $__case_0 = $v1;
  if (true) {
$m__prime__ = $__case_0;
$__res = ($m__prime__)($k__prime__);
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
})(), "Apply0" => function($__dollar____unused) use ($applyContT1) {
  $__num = func_num_args();
  $__res = $applyContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_bindContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_bindContT';

// Control_Monad_Cont_Trans_semigroupContT
function Control_Monad_Cont_Trans_semigroupContT($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_semigroupContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Control_Monad_Cont_Trans_applyContT = ($GLOBALS['Control_Monad_Cont_Trans_applyContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applyContT'));
  $lift2 = ($__global_Control_Apply_lift2)(($__global_Control_Monad_Cont_Trans_applyContT)($dictApply));
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
$GLOBALS['Control_Monad_Cont_Trans_semigroupContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_semigroupContT';

// Control_Monad_Cont_Trans_applicativeContT
function Control_Monad_Cont_Trans_applicativeContT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_applicativeContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_applyContT = ($GLOBALS['Control_Monad_Cont_Trans_applyContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applyContT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $applyContT1 = ($__global_Control_Monad_Cont_Trans_applyContT)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $__res = (object)["pure" => (function() use (&$__fn) {
  $__fn = function($a, $k = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($a, &$__fn) { return $__fn($a, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($k)($a);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($applyContT1) {
  $__num = func_num_args();
  $__res = $applyContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_applicativeContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_applicativeContT';

// Control_Monad_Cont_Trans_monadContT
function Control_Monad_Cont_Trans_monadContT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_applicativeContT = ($GLOBALS['Control_Monad_Cont_Trans_applicativeContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applicativeContT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Cont_Trans_bindContT = ($GLOBALS['Control_Monad_Cont_Trans_bindContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_bindContT'));
  $applicativeContT1 = ($__global_Control_Monad_Cont_Trans_applicativeContT)((($dictMonad)->Applicative0)($__global_Prim_undefined));
  $bindContT1 = ($__global_Control_Monad_Cont_Trans_bindContT)((($dictMonad)->Bind1)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeContT1) {
  $__num = func_num_args();
  $__res = $applicativeContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) use ($bindContT1) {
  $__num = func_num_args();
  $__res = $bindContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadContT';

// Control_Monad_Cont_Trans_monadAskContT
function Control_Monad_Cont_Trans_monadAskContT($dictMonadAsk) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadAskContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Cont_Trans_monadContT = ($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT'));
  $__global_Control_Monad_Cont_Trans_lift = ($GLOBALS['Control_Monad_Cont_Trans_lift'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_lift'));
  $Monad0 = (($dictMonadAsk)->Monad0)($__global_Prim_undefined);
  $monadContT1 = ($__global_Control_Monad_Cont_Trans_monadContT)($Monad0);
  $__res = (object)["ask" => ($__global_Control_Monad_Cont_Trans_lift)($Monad0, ($dictMonadAsk)->ask), "Monad0" => function($__dollar____unused) use ($monadContT1) {
  $__num = func_num_args();
  $__res = $monadContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadAskContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadAskContT';

// Control_Monad_Cont_Trans_monadReaderContT
function Control_Monad_Cont_Trans_monadReaderContT($dictMonadReader) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadReaderContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Cont_Trans_monadAskContT = ($GLOBALS['Control_Monad_Cont_Trans_monadAskContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadAskContT'));
  $__global_Control_Monad_Cont_Trans_compose = ($GLOBALS['Control_Monad_Cont_Trans_compose'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_compose'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $MonadAsk0 = (($dictMonadReader)->MonadAsk0)($__global_Prim_undefined);
  $bind = ((((($MonadAsk0)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->bind;
  $ask = ($MonadAsk0)->ask;
  $local = ($dictMonadReader)->local;
  $monadAskContT1 = ($__global_Control_Monad_Cont_Trans_monadAskContT)($MonadAsk0);
  $__res = (object)["local" => (function() use ($bind, $ask, $local, $__global_Control_Monad_Cont_Trans_compose, $__global_Data_Function_const, &$__fn) {
  $__fn = function($f, $v = null) use ($bind, $ask, $local, $__global_Control_Monad_Cont_Trans_compose, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$c = $__case_1;
$__res = function($k) use ($bind, $ask, $local, $f1, $c, $__global_Control_Monad_Cont_Trans_compose, $__global_Data_Function_const) {
  $__num = func_num_args();
  $__res = ($bind)($ask, function($r) use ($local, $f1, $c, $__global_Control_Monad_Cont_Trans_compose, $__global_Data_Function_const, $k) {
  $__num = func_num_args();
  $__res = ($local)($f1, ($c)(($__global_Control_Monad_Cont_Trans_compose)(($local)(($__global_Data_Function_const)($r)), $k)));
  goto __end;;
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
})(), "MonadAsk0" => function($__dollar____unused) use ($monadAskContT1) {
  $__num = func_num_args();
  $__res = $monadAskContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadReaderContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadReaderContT';

// Control_Monad_Cont_Trans_monadContContT
function Control_Monad_Cont_Trans_monadContContT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadContContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_monadContT = ($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT'));
  $monadContT1 = ($__global_Control_Monad_Cont_Trans_monadContT)($dictMonad);
  $__res = (object)["callCC" => (function() use (&$__fn) {
  $__fn = function($f, $k = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($f, &$__fn) { return $__fn($f, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $v = ($f)((function() use ($k, &$__fn) {
  $__fn = function($a, $v1 = null) use ($k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($a, &$__fn) { return $__fn($a, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($k)($a);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  $__case_0 = $v;
  if (true) {
$f__prime__ = $__case_0;
$__res = ($f__prime__)($k);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($__dollar____unused) use ($monadContT1) {
  $__num = func_num_args();
  $__res = $monadContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadContContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadContContT';

// Control_Monad_Cont_Trans_monadEffectContT
function Control_Monad_Cont_Trans_monadEffectContT($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadEffectContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Cont_Trans_monadContT = ($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT'));
  $__global_Control_Monad_Cont_Trans_compose = ($GLOBALS['Control_Monad_Cont_Trans_compose'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_compose'));
  $__global_Control_Monad_Cont_Trans_lift = ($GLOBALS['Control_Monad_Cont_Trans_lift'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_lift'));
  $Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
  $monadContT1 = ($__global_Control_Monad_Cont_Trans_monadContT)($Monad0);
  $__res = (object)["liftEffect" => ($__global_Control_Monad_Cont_Trans_compose)(($__global_Control_Monad_Cont_Trans_lift)($Monad0), ($dictMonadEffect)->liftEffect), "Monad0" => function($__dollar____unused) use ($monadContT1) {
  $__num = func_num_args();
  $__res = $monadContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadEffectContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadEffectContT';

// Control_Monad_Cont_Trans_monadStateContT
function Control_Monad_Cont_Trans_monadStateContT($dictMonadState) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadStateContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Cont_Trans_monadContT = ($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT'));
  $__global_Control_Monad_Cont_Trans_compose = ($GLOBALS['Control_Monad_Cont_Trans_compose'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_compose'));
  $__global_Control_Monad_Cont_Trans_lift = ($GLOBALS['Control_Monad_Cont_Trans_lift'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_lift'));
  $Monad0 = (($dictMonadState)->Monad0)($__global_Prim_undefined);
  $monadContT1 = ($__global_Control_Monad_Cont_Trans_monadContT)($Monad0);
  $__res = (object)["state" => ($__global_Control_Monad_Cont_Trans_compose)(($__global_Control_Monad_Cont_Trans_lift)($Monad0), ($dictMonadState)->state), "Monad0" => function($__dollar____unused) use ($monadContT1) {
  $__num = func_num_args();
  $__res = $monadContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadStateContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadStateContT';

// Control_Monad_Cont_Trans_monadSTContT
function Control_Monad_Cont_Trans_monadSTContT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monadSTContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Cont_Trans_monadContT = ($GLOBALS['Control_Monad_Cont_Trans_monadContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_monadContT'));
  $__global_Control_Monad_Cont_Trans_compose = ($GLOBALS['Control_Monad_Cont_Trans_compose'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_compose'));
  $__global_Control_Monad_Cont_Trans_lift = ($GLOBALS['Control_Monad_Cont_Trans_lift'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_lift'));
  $Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
  $monadContT1 = ($__global_Control_Monad_Cont_Trans_monadContT)($Monad0);
  $__res = (object)["liftST" => ($__global_Control_Monad_Cont_Trans_compose)(($__global_Control_Monad_Cont_Trans_lift)($Monad0), ($dictMonadST)->liftST), "Monad0" => function($__dollar____unused) use ($monadContT1) {
  $__num = func_num_args();
  $__res = $monadContT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Cont_Trans_monadSTContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monadSTContT';

// Control_Monad_Cont_Trans_monoidContT
function Control_Monad_Cont_Trans_monoidContT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Cont_Trans_monoidContT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Cont_Trans_applicativeContT = ($GLOBALS['Control_Monad_Cont_Trans_applicativeContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_applicativeContT'));
  $__global_Control_Monad_Cont_Trans_semigroupContT = ($GLOBALS['Control_Monad_Cont_Trans_semigroupContT'] ?? \Control\Monad\Cont\Trans\phpurs_eval_thunk('Control_Monad_Cont_Trans_semigroupContT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = (($__global_Control_Monad_Cont_Trans_applicativeContT)($dictApplicative))->pure;
  $semigroupContT1 = ($__global_Control_Monad_Cont_Trans_semigroupContT)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $__res = function($dictMonoid) use ($semigroupContT1, $__global_Prim_undefined, $pure) {
  $__num = func_num_args();
  $semigroupContT2 = ($semigroupContT1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($pure)(($dictMonoid)->mempty), "Semigroup0" => function($__dollar____unused) use ($semigroupContT2) {
  $__num = func_num_args();
  $__res = $semigroupContT2;
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
$GLOBALS['Control_Monad_Cont_Trans_monoidContT'] = __NAMESPACE__ . '\\Control_Monad_Cont_Trans_monoidContT';

