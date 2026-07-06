<?php

namespace Control\Monad\Reader\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Cont.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
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
      case 'Control_Monad_Reader_Trans_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_Reader_Trans_newtypeReaderT': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Reader_Trans_monadTransReaderT': $v = (object)["lift" => function($dictMonad) {
  $__num = func_num_args();
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__global_Control_Monad_Reader_Trans_ReaderT = ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_ReaderT'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__res = ($__global_Control_Monad_Reader_Trans_compose)($__global_Control_Monad_Reader_Trans_ReaderT, $__global_Data_Function_const);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Reader_Trans_lift': $v = (($GLOBALS['Control_Monad_Reader_Trans_monadTransReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadTransReaderT')))->lift; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };



// Control_Monad_Reader_Trans_ReaderT
function Control_Monad_Reader_Trans_ReaderT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_ReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_ReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_ReaderT';

// Control_Monad_Reader_Trans_withReaderT
function Control_Monad_Reader_Trans_withReaderT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_withReaderT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$m = $__case_1;
$__res = ($__global_Control_Monad_Reader_Trans_compose)($m, $f1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_withReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_withReaderT';

// Control_Monad_Reader_Trans_runReaderT
function Control_Monad_Reader_Trans_runReaderT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_runReaderT';
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
$GLOBALS['Control_Monad_Reader_Trans_runReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_runReaderT';




// Control_Monad_Reader_Trans_mapReaderT
function Control_Monad_Reader_Trans_mapReaderT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_mapReaderT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$m = $__case_1;
$__res = ($__global_Control_Monad_Reader_Trans_compose)($f1, $m);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_mapReaderT';

// Control_Monad_Reader_Trans_functorReaderT
function Control_Monad_Reader_Trans_functorReaderT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_functorReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__global_Control_Monad_Reader_Trans_mapReaderT = ($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_mapReaderT'));
  $__res = (object)["map" => ($__global_Control_Monad_Reader_Trans_compose)($__global_Control_Monad_Reader_Trans_mapReaderT, ($dictFunctor)->map)];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_functorReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_functorReaderT';

// Control_Monad_Reader_Trans_distributiveReaderT
function Control_Monad_Reader_Trans_distributiveReaderT($dictDistributive) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_distributiveReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_functorReaderT = ($GLOBALS['Control_Monad_Reader_Trans_functorReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_functorReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  while (true) {
$collect = ($dictDistributive)->collect;
$functorReaderT1 = ($__global_Control_Monad_Reader_Trans_functorReaderT)((($dictDistributive)->Functor0)($__global_Prim_undefined));
$__res = (object)["distribute" => function($dictFunctor) use ($collect) {
  $__num = func_num_args();
  $collect1 = ($collect)($dictFunctor);
  $__res = (function() use ($collect1, &$__fn) {
  $__fn = function($a, $e = null) use ($collect1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($e) use ($a, &$__fn) { return $__fn($a, $e); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($collect1)(function($r) use ($e) {
  $__num = func_num_args();
  $__case_0 = $r;
  if (true) {
$r__prime__ = $__case_0;
$__res = ($r__prime__)($e);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $a);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "collect" => function($dictFunctor) use ($__global_Control_Monad_Reader_Trans_compose, $dictDistributive) {
  $__num = func_num_args();
  $__global_Control_Monad_Reader_Trans_distributiveReaderT = ($GLOBALS['Control_Monad_Reader_Trans_distributiveReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_distributiveReaderT'));
  $map = ($dictFunctor)->map;
  $__res = function($f) use ($__global_Control_Monad_Reader_Trans_compose, $__global_Control_Monad_Reader_Trans_distributiveReaderT, $dictDistributive, $dictFunctor, $map) {
  $__num = func_num_args();
  $__res = ($__global_Control_Monad_Reader_Trans_compose)(((($__global_Control_Monad_Reader_Trans_distributiveReaderT)($dictDistributive))->distribute)($dictFunctor), ($map)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) use ($functorReaderT1) {
  $__num = func_num_args();
  $__res = $functorReaderT1;
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
$GLOBALS['Control_Monad_Reader_Trans_distributiveReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_distributiveReaderT';

// Control_Monad_Reader_Trans_applyReaderT
function Control_Monad_Reader_Trans_applyReaderT($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_applyReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_functorReaderT = ($GLOBALS['Control_Monad_Reader_Trans_functorReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_functorReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $apply = ($dictApply)->apply;
  $functorReaderT1 = ($__global_Control_Monad_Reader_Trans_functorReaderT)((($dictApply)->Functor0)($__global_Prim_undefined));
  $__res = (object)["apply" => (function() use ($apply, &$__fn) {
  $__fn = function($v, $v1 = null) use ($apply, &$__fn) {
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
$__res = function($r) use ($apply, $f, $v2) {
  $__num = func_num_args();
  $__res = ($apply)(($f)($r), ($v2)($r));
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
})(), "Functor0" => function($__dollar____unused) use ($functorReaderT1) {
  $__num = func_num_args();
  $__res = $functorReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_applyReaderT';

// Control_Monad_Reader_Trans_bindReaderT
function Control_Monad_Reader_Trans_bindReaderT($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_bindReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_applyReaderT = ($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_applyReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bind = ($dictBind)->bind;
  $applyReaderT1 = ($__global_Control_Monad_Reader_Trans_applyReaderT)((($dictBind)->Apply0)($__global_Prim_undefined));
  $__res = (object)["bind" => (function() use ($bind, &$__fn) {
  $__fn = function($v, $k = null) use ($bind, &$__fn) {
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
$__res = function($r) use ($bind, $m, $k1) {
  $__num = func_num_args();
  $__res = ($bind)(($m)($r), function($a) use ($k1, $r) {
  $__num = func_num_args();
  $v1 = ($k1)($a);
  $__case_0 = $v1;
  if (true) {
$f = $__case_0;
$__res = ($f)($r);
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
})(), "Apply0" => function($__dollar____unused) use ($applyReaderT1) {
  $__num = func_num_args();
  $__res = $applyReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_bindReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_bindReaderT';

// Control_Monad_Reader_Trans_semigroupReaderT
function Control_Monad_Reader_Trans_semigroupReaderT($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_semigroupReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Control_Monad_Reader_Trans_applyReaderT = ($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_applyReaderT'));
  $lift2 = ($__global_Control_Apply_lift2)(($__global_Control_Monad_Reader_Trans_applyReaderT)($dictApply));
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
$GLOBALS['Control_Monad_Reader_Trans_semigroupReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_semigroupReaderT';

// Control_Monad_Reader_Trans_applicativeReaderT
function Control_Monad_Reader_Trans_applicativeReaderT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_applicativeReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_applyReaderT = ($GLOBALS['Control_Monad_Reader_Trans_applyReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_applyReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__global_Control_Monad_Reader_Trans_ReaderT = ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_ReaderT'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $applyReaderT1 = ($__global_Control_Monad_Reader_Trans_applyReaderT)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $__res = (object)["pure" => ($__global_Control_Monad_Reader_Trans_compose)($__global_Control_Monad_Reader_Trans_ReaderT, ($__global_Control_Monad_Reader_Trans_compose)($__global_Data_Function_const, ($dictApplicative)->pure)), "Apply0" => function($__dollar____unused) use ($applyReaderT1) {
  $__num = func_num_args();
  $__res = $applyReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_applicativeReaderT';

// Control_Monad_Reader_Trans_monadReaderT
function Control_Monad_Reader_Trans_monadReaderT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_applicativeReaderT = ($GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_applicativeReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_bindReaderT = ($GLOBALS['Control_Monad_Reader_Trans_bindReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_bindReaderT'));
  $applicativeReaderT1 = ($__global_Control_Monad_Reader_Trans_applicativeReaderT)((($dictMonad)->Applicative0)($__global_Prim_undefined));
  $bindReaderT1 = ($__global_Control_Monad_Reader_Trans_bindReaderT)((($dictMonad)->Bind1)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeReaderT1) {
  $__num = func_num_args();
  $__res = $applicativeReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) use ($bindReaderT1) {
  $__num = func_num_args();
  $__res = $bindReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadReaderT';

// Control_Monad_Reader_Trans_monadAskReaderT
function Control_Monad_Reader_Trans_monadAskReaderT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadAskReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_monadReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $monadReaderT1 = ($__global_Control_Monad_Reader_Trans_monadReaderT)($dictMonad);
  $__res = (object)["ask" => ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure, "Monad0" => function($__dollar____unused) use ($monadReaderT1) {
  $__num = func_num_args();
  $__res = $monadReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadAskReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadAskReaderT';

// Control_Monad_Reader_Trans_monadReaderReaderT
function Control_Monad_Reader_Trans_monadReaderReaderT($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadReaderReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_monadAskReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadAskReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadAskReaderT'));
  $__global_Control_Monad_Reader_Trans_withReaderT = ($GLOBALS['Control_Monad_Reader_Trans_withReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_withReaderT'));
  $monadAskReaderT1 = ($__global_Control_Monad_Reader_Trans_monadAskReaderT)($dictMonad);
  $__res = (object)["local" => $__global_Control_Monad_Reader_Trans_withReaderT, "MonadAsk0" => function($__dollar____unused) use ($monadAskReaderT1) {
  $__num = func_num_args();
  $__res = $monadAskReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadReaderReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadReaderReaderT';

// Control_Monad_Reader_Trans_monadContReaderT
function Control_Monad_Reader_Trans_monadContReaderT($dictMonadCont) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadContReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_monadReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__global_Control_Monad_Reader_Trans_ReaderT = ($GLOBALS['Control_Monad_Reader_Trans_ReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_ReaderT'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $callCC = ($dictMonadCont)->callCC;
  $monadReaderT1 = ($__global_Control_Monad_Reader_Trans_monadReaderT)((($dictMonadCont)->Monad0)($__global_Prim_undefined));
  $__res = (object)["callCC" => (function() use ($callCC, $__global_Control_Monad_Reader_Trans_compose, $__global_Control_Monad_Reader_Trans_ReaderT, $__global_Data_Function_const, &$__fn) {
  $__fn = function($f, $r = null) use ($callCC, $__global_Control_Monad_Reader_Trans_compose, $__global_Control_Monad_Reader_Trans_ReaderT, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($r) use ($f, &$__fn) { return $__fn($f, $r); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($callCC)(function($c) use ($f, $__global_Control_Monad_Reader_Trans_compose, $__global_Control_Monad_Reader_Trans_ReaderT, $__global_Data_Function_const, $r) {
  $__num = func_num_args();
  $v = ($f)(($__global_Control_Monad_Reader_Trans_compose)($__global_Control_Monad_Reader_Trans_ReaderT, ($__global_Control_Monad_Reader_Trans_compose)($__global_Data_Function_const, $c)));
  $__case_0 = $v;
  if (true) {
$f__prime__ = $__case_0;
$__res = ($f__prime__)($r);
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
})(), "Monad0" => function($__dollar____unused) use ($monadReaderT1) {
  $__num = func_num_args();
  $__res = $monadReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadContReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadContReaderT';

// Control_Monad_Reader_Trans_monadEffectReader
function Control_Monad_Reader_Trans_monadEffectReader($dictMonadEffect) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadEffectReader';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_monadReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadReaderT'));
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__global_Control_Monad_Reader_Trans_lift = ($GLOBALS['Control_Monad_Reader_Trans_lift'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_lift'));
  $Monad0 = (($dictMonadEffect)->Monad0)($__global_Prim_undefined);
  $monadReaderT1 = ($__global_Control_Monad_Reader_Trans_monadReaderT)($Monad0);
  $__res = (object)["liftEffect" => ($__global_Control_Monad_Reader_Trans_compose)(($__global_Control_Monad_Reader_Trans_lift)($Monad0), ($dictMonadEffect)->liftEffect), "Monad0" => function($__dollar____unused) use ($monadReaderT1) {
  $__num = func_num_args();
  $__res = $monadReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadEffectReader'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadEffectReader';

// Control_Monad_Reader_Trans_monadRecReaderT
function Control_Monad_Reader_Trans_monadRecReaderT($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadRecReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Bind_bindFlipped = ($GLOBALS['Control_Bind_bindFlipped'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_bindFlipped'));
  $__global_Control_Monad_Reader_Trans_monadReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadReaderT'));
  $Monad0 = (($dictMonadRec)->Monad0)($__global_Prim_undefined);
  $bindFlipped = ($__global_Control_Bind_bindFlipped)((($Monad0)->Bind1)($__global_Prim_undefined));
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $tailRecM = ($dictMonadRec)->tailRecM;
  $monadReaderT1 = ($__global_Control_Monad_Reader_Trans_monadReaderT)($Monad0);
  $__res = (object)["tailRecM" => (function() use ($bindFlipped, $pure, $tailRecM, &$__fn) {
  $__fn = function($k, $a = null) use ($bindFlipped, $pure, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($k, &$__fn) { return $__fn($k, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $k__prime__ = (function() use ($k, $bindFlipped, $pure, &$__fn) {
  $__fn = function($r, $a__prime__ = null) use ($k, $bindFlipped, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a__prime__) use ($r, &$__fn) { return $__fn($r, $a__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $v = ($k)($a__prime__);
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($bindFlipped)($pure, ($f)($r));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = function($r) use ($tailRecM, $k__prime__, $a) {
  $__num = func_num_args();
  $__res = ($tailRecM)(($k__prime__)($r), $a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => function($__dollar____unused) use ($monadReaderT1) {
  $__num = func_num_args();
  $__res = $monadReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadRecReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadRecReaderT';

// Control_Monad_Reader_Trans_monadStateReaderT
function Control_Monad_Reader_Trans_monadStateReaderT($dictMonadState) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadStateReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_monadReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadReaderT'));
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__global_Control_Monad_Reader_Trans_lift = ($GLOBALS['Control_Monad_Reader_Trans_lift'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_lift'));
  $Monad0 = (($dictMonadState)->Monad0)($__global_Prim_undefined);
  $monadReaderT1 = ($__global_Control_Monad_Reader_Trans_monadReaderT)($Monad0);
  $__res = (object)["state" => ($__global_Control_Monad_Reader_Trans_compose)(($__global_Control_Monad_Reader_Trans_lift)($Monad0), ($dictMonadState)->state), "Monad0" => function($__dollar____unused) use ($monadReaderT1) {
  $__num = func_num_args();
  $__res = $monadReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadStateReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadStateReaderT';

// Control_Monad_Reader_Trans_monadTellReaderT
function Control_Monad_Reader_Trans_monadTellReaderT($dictMonadTell) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadTellReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_monadReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadReaderT'));
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__global_Control_Monad_Reader_Trans_lift = ($GLOBALS['Control_Monad_Reader_Trans_lift'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_lift'));
  $Monad1 = (($dictMonadTell)->Monad1)($__global_Prim_undefined);
  $Semigroup0 = (($dictMonadTell)->Semigroup0)($__global_Prim_undefined);
  $monadReaderT1 = ($__global_Control_Monad_Reader_Trans_monadReaderT)($Monad1);
  $__res = (object)["tell" => ($__global_Control_Monad_Reader_Trans_compose)(($__global_Control_Monad_Reader_Trans_lift)($Monad1), ($dictMonadTell)->tell), "Semigroup0" => function($__dollar____unused) use (&$Semigroup0) {
  $__num = func_num_args();
  $__res = $Semigroup0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad1" => function($__dollar____unused) use ($monadReaderT1) {
  $__num = func_num_args();
  $__res = $monadReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadTellReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadTellReaderT';

// Control_Monad_Reader_Trans_monadWriterReaderT
function Control_Monad_Reader_Trans_monadWriterReaderT($dictMonadWriter) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadWriterReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_monadTellReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadTellReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadTellReaderT'));
  $__global_Control_Monad_Reader_Trans_mapReaderT = ($GLOBALS['Control_Monad_Reader_Trans_mapReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_mapReaderT'));
  $Monoid0 = (($dictMonadWriter)->Monoid0)($__global_Prim_undefined);
  $monadTellReaderT1 = ($__global_Control_Monad_Reader_Trans_monadTellReaderT)((($dictMonadWriter)->MonadTell1)($__global_Prim_undefined));
  $__res = (object)["listen" => ($__global_Control_Monad_Reader_Trans_mapReaderT)(($dictMonadWriter)->listen), "pass" => ($__global_Control_Monad_Reader_Trans_mapReaderT)(($dictMonadWriter)->pass), "Monoid0" => function($__dollar____unused) use (&$Monoid0) {
  $__num = func_num_args();
  $__res = $Monoid0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "MonadTell1" => function($__dollar____unused) use ($monadTellReaderT1) {
  $__num = func_num_args();
  $__res = $monadTellReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadWriterReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadWriterReaderT';

// Control_Monad_Reader_Trans_monadThrowReaderT
function Control_Monad_Reader_Trans_monadThrowReaderT($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadThrowReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_monadReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadReaderT'));
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__global_Control_Monad_Reader_Trans_lift = ($GLOBALS['Control_Monad_Reader_Trans_lift'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_lift'));
  $Monad0 = (($dictMonadThrow)->Monad0)($__global_Prim_undefined);
  $monadReaderT1 = ($__global_Control_Monad_Reader_Trans_monadReaderT)($Monad0);
  $__res = (object)["throwError" => ($__global_Control_Monad_Reader_Trans_compose)(($__global_Control_Monad_Reader_Trans_lift)($Monad0), ($dictMonadThrow)->throwError), "Monad0" => function($__dollar____unused) use ($monadReaderT1) {
  $__num = func_num_args();
  $__res = $monadReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadThrowReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadThrowReaderT';

// Control_Monad_Reader_Trans_monadErrorReaderT
function Control_Monad_Reader_Trans_monadErrorReaderT($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadErrorReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_monadThrowReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadThrowReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadThrowReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $catchError = ($dictMonadError)->catchError;
  $monadThrowReaderT1 = ($__global_Control_Monad_Reader_Trans_monadThrowReaderT)((($dictMonadError)->MonadThrow0)($__global_Prim_undefined));
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
$__res = function($r) use ($catchError, $m, $h1) {
  $__num = func_num_args();
  $__res = ($catchError)(($m)($r), function($e) use ($h1, $r) {
  $__num = func_num_args();
  $v1 = ($h1)($e);
  $__case_0 = $v1;
  if (true) {
$f = $__case_0;
$__res = ($f)($r);
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
})(), "MonadThrow0" => function($__dollar____unused) use ($monadThrowReaderT1) {
  $__num = func_num_args();
  $__res = $monadThrowReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadErrorReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadErrorReaderT';

// Control_Monad_Reader_Trans_monadSTReaderT
function Control_Monad_Reader_Trans_monadSTReaderT($dictMonadST) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadSTReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_monadReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadReaderT'));
  $__global_Control_Monad_Reader_Trans_compose = ($GLOBALS['Control_Monad_Reader_Trans_compose'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_compose'));
  $__global_Control_Monad_Reader_Trans_lift = ($GLOBALS['Control_Monad_Reader_Trans_lift'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_lift'));
  $Monad0 = (($dictMonadST)->Monad0)($__global_Prim_undefined);
  $monadReaderT1 = ($__global_Control_Monad_Reader_Trans_monadReaderT)($Monad0);
  $__res = (object)["liftST" => ($__global_Control_Monad_Reader_Trans_compose)(($__global_Control_Monad_Reader_Trans_lift)($Monad0), ($dictMonadST)->liftST), "Monad0" => function($__dollar____unused) use ($monadReaderT1) {
  $__num = func_num_args();
  $__res = $monadReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadSTReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadSTReaderT';

// Control_Monad_Reader_Trans_monoidReaderT
function Control_Monad_Reader_Trans_monoidReaderT($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monoidReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_applicativeReaderT = ($GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_applicativeReaderT'));
  $__global_Control_Monad_Reader_Trans_semigroupReaderT = ($GLOBALS['Control_Monad_Reader_Trans_semigroupReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_semigroupReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = (($__global_Control_Monad_Reader_Trans_applicativeReaderT)($dictApplicative))->pure;
  $semigroupReaderT1 = ($__global_Control_Monad_Reader_Trans_semigroupReaderT)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $__res = function($dictMonoid) use ($semigroupReaderT1, $__global_Prim_undefined, $pure) {
  $__num = func_num_args();
  $semigroupReaderT2 = ($semigroupReaderT1)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($pure)(($dictMonoid)->mempty), "Semigroup0" => function($__dollar____unused) use ($semigroupReaderT2) {
  $__num = func_num_args();
  $__res = $semigroupReaderT2;
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
$GLOBALS['Control_Monad_Reader_Trans_monoidReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monoidReaderT';

// Control_Monad_Reader_Trans_altReaderT
function Control_Monad_Reader_Trans_altReaderT($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_altReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_functorReaderT = ($GLOBALS['Control_Monad_Reader_Trans_functorReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_functorReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $alt = ($dictAlt)->alt;
  $functorReaderT1 = ($__global_Control_Monad_Reader_Trans_functorReaderT)((($dictAlt)->Functor0)($__global_Prim_undefined));
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
$__res = function($r) use ($alt, $m, $n) {
  $__num = func_num_args();
  $__res = ($alt)(($m)($r), ($n)($r));
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
})(), "Functor0" => function($__dollar____unused) use ($functorReaderT1) {
  $__num = func_num_args();
  $__res = $functorReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_altReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_altReaderT';

// Control_Monad_Reader_Trans_plusReaderT
function Control_Monad_Reader_Trans_plusReaderT($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_plusReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_altReaderT = ($GLOBALS['Control_Monad_Reader_Trans_altReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_altReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $altReaderT1 = ($__global_Control_Monad_Reader_Trans_altReaderT)((($dictPlus)->Alt0)($__global_Prim_undefined));
  $__res = (object)["empty" => ($__global_Data_Function_const)(($dictPlus)->empty), "Alt0" => function($__dollar____unused) use ($altReaderT1) {
  $__num = func_num_args();
  $__res = $altReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_plusReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_plusReaderT';

// Control_Monad_Reader_Trans_alternativeReaderT
function Control_Monad_Reader_Trans_alternativeReaderT($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_alternativeReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_applicativeReaderT = ($GLOBALS['Control_Monad_Reader_Trans_applicativeReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_applicativeReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_plusReaderT = ($GLOBALS['Control_Monad_Reader_Trans_plusReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_plusReaderT'));
  $applicativeReaderT1 = ($__global_Control_Monad_Reader_Trans_applicativeReaderT)((($dictAlternative)->Applicative0)($__global_Prim_undefined));
  $plusReaderT1 = ($__global_Control_Monad_Reader_Trans_plusReaderT)((($dictAlternative)->Plus1)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeReaderT1) {
  $__num = func_num_args();
  $__res = $applicativeReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) use ($plusReaderT1) {
  $__num = func_num_args();
  $__res = $plusReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_alternativeReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_alternativeReaderT';

// Control_Monad_Reader_Trans_monadPlusReaderT
function Control_Monad_Reader_Trans_monadPlusReaderT($dictMonadPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Reader_Trans_monadPlusReaderT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Reader_Trans_monadReaderT = ($GLOBALS['Control_Monad_Reader_Trans_monadReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_monadReaderT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Reader_Trans_alternativeReaderT = ($GLOBALS['Control_Monad_Reader_Trans_alternativeReaderT'] ?? \Control\Monad\Reader\Trans\phpurs_eval_thunk('Control_Monad_Reader_Trans_alternativeReaderT'));
  $monadReaderT1 = ($__global_Control_Monad_Reader_Trans_monadReaderT)((($dictMonadPlus)->Monad0)($__global_Prim_undefined));
  $alternativeReaderT1 = ($__global_Control_Monad_Reader_Trans_alternativeReaderT)((($dictMonadPlus)->Alternative1)($__global_Prim_undefined));
  $__res = (object)["Monad0" => function($__dollar____unused) use ($monadReaderT1) {
  $__num = func_num_args();
  $__res = $monadReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alternative1" => function($__dollar____unused) use ($alternativeReaderT1) {
  $__num = func_num_args();
  $__res = $alternativeReaderT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Reader_Trans_monadPlusReaderT'] = __NAMESPACE__ . '\\Control_Monad_Reader_Trans_monadPlusReaderT';

