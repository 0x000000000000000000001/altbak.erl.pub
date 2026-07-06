<?php

namespace Control\Comonad\Traced\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Identity.Trans/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Control_Comonad_Traced_Class_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Comonad_Traced_Class_composeFlipped': $v = \Control\Semigroupoid\Control_Semigroupoid_composeFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Control_Comonad_Traced_Class_lowerTrack1': $v = \Control\Comonad\Traced\Class\Control_Comonad_Traced_Class_lowerTrack(($GLOBALS['Control_Comonad_Store_Trans_comonadTransStoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_comonadTransStoreT'))); break;
      case 'Control_Comonad_Traced_Class_lowerTrack2': $v = \Control\Comonad\Traced\Class\Control_Comonad_Traced_Class_lowerTrack(($GLOBALS['Control_Comonad_Trans_Class_comonadTransIdentityT'] ?? \Control\Comonad\Trans\Class\phpurs_eval_thunk('Control_Comonad_Trans_Class_comonadTransIdentityT'))); break;
      case 'Control_Comonad_Traced_Class_lowerTrack3': $v = \Control\Comonad\Traced\Class\Control_Comonad_Traced_Class_lowerTrack(($GLOBALS['Control_Comonad_Env_Trans_comonadTransEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadTransEnvT'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Control_Comonad_Traced_Class_ComonadTraced$Dict
function Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict';

// Control_Comonad_Traced_Class_track
function Control_Comonad_Traced_Class_track($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_track';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->track;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_track'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_track';

// Control_Comonad_Traced_Class_tracks
function Control_Comonad_Traced_Class_tracks($dictComonadTraced) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_tracks';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $track1 = ($dictComonadTraced)->track;
  $extract = ((($dictComonadTraced)->Comonad0)($__global_Prim_undefined))->extract;
  $__res = (function() use ($track1, $extract, &$__fn) {
  $__fn = function($f, $w = null) use ($track1, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($w) use ($f, &$__fn) { return $__fn($f, $w); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($track1)(($f)(($extract)($w)), $w);
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
$GLOBALS['Control_Comonad_Traced_Class_tracks'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_tracks';

// Control_Comonad_Traced_Class_lowerTrack
function Control_Comonad_Traced_Class_lowerTrack($dictComonadTrans) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_lowerTrack';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Traced_Class_compose = ($GLOBALS['Control_Comonad_Traced_Class_compose'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_compose'));
  $lower = ($dictComonadTrans)->lower;
  $__res = function($dictComonadTraced) use ($lower, $__global_Prim_undefined, $__global_Control_Comonad_Traced_Class_compose) {
  $__num = func_num_args();
  $track1 = ($dictComonadTraced)->track;
  $lower1 = ($lower)((($dictComonadTraced)->Comonad0)($__global_Prim_undefined));
  $__res = function($m) use ($__global_Control_Comonad_Traced_Class_compose, $track1, $lower1) {
  $__num = func_num_args();
  $__res = ($__global_Control_Comonad_Traced_Class_compose)(($track1)($m), $lower1);
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
$GLOBALS['Control_Comonad_Traced_Class_lowerTrack'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_lowerTrack';




// Control_Comonad_Traced_Class_listens
function Control_Comonad_Traced_Class_listens($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_listens';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map = ($dictFunctor)->map;
  $__res = (function() use ($map, &$__fn) {
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
$tr = $__case_1;
$__res = ($map)((function() use ($f1, &$__fn) {
  $__fn = function($g, $t = null) use ($f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($g, &$__fn) { return $__fn($g, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($g)($t), ($f1)($t));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $tr);
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
$GLOBALS['Control_Comonad_Traced_Class_listens'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_listens';

// Control_Comonad_Traced_Class_listen
function Control_Comonad_Traced_Class_listen($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_listen';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map = ($dictFunctor)->map;
  $__res = function($v) use ($map) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$tr = $__case_0;
$__res = ($map)((function() use (&$__fn) {
  $__fn = function($f, $t = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($f, &$__fn) { return $__fn($f, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($f)($t), $t);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $tr);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_listen'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_listen';

// Control_Comonad_Traced_Class_comonadTracedTracedT
function Control_Comonad_Traced_Class_comonadTracedTracedT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_comonadTracedTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Traced_Trans_comonadTracedT = ($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTracedT'));
  $extract = ($dictComonad)->extract;
  $comonadTracedT = ($__global_Control_Comonad_Traced_Trans_comonadTracedT)($dictComonad);
  $__res = function($dictMonoid) use ($comonadTracedT, $extract) {
  $__num = func_num_args();
  $comonadTracedT1 = ($comonadTracedT)($dictMonoid);
  $__res = (object)["track" => (function() use ($extract, &$__fn) {
  $__fn = function($t, $v = null) use ($extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($t, &$__fn) { return $__fn($t, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $t;
  $__case_1 = $v;
  if (true) {
$t1 = $__case_0;
$tr = $__case_1;
$__res = ($extract)($tr, $t1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Comonad0" => function($__dollar____unused) use ($comonadTracedT1) {
  $__num = func_num_args();
  $__res = $comonadTracedT1;
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
$GLOBALS['Control_Comonad_Traced_Class_comonadTracedTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_comonadTracedTracedT';

// Control_Comonad_Traced_Class_comonadTracedStoreT
function Control_Comonad_Traced_Class_comonadTracedStoreT($dictComonadTraced) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_comonadTracedStoreT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Store_Trans_comonadStoreT = ($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_comonadStoreT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Traced_Class_lowerTrack1 = ($GLOBALS['Control_Comonad_Traced_Class_lowerTrack1'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_lowerTrack1'));
  $comonadStoreT = ($__global_Control_Comonad_Store_Trans_comonadStoreT)((($dictComonadTraced)->Comonad0)($__global_Prim_undefined));
  $__res = (object)["track" => ($__global_Control_Comonad_Traced_Class_lowerTrack1)($dictComonadTraced), "Comonad0" => function($__dollar____unused) use ($comonadStoreT) {
  $__num = func_num_args();
  $__res = $comonadStoreT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_comonadTracedStoreT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_comonadTracedStoreT';

// Control_Comonad_Traced_Class_comonadTracedIdentityT
function Control_Comonad_Traced_Class_comonadTracedIdentityT($dictComonadTraced) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_comonadTracedIdentityT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Identity_Trans_comonadIdentityT = ($GLOBALS['Control_Monad_Identity_Trans_comonadIdentityT'] ?? \Control\Monad\Identity\Trans\phpurs_eval_thunk('Control_Monad_Identity_Trans_comonadIdentityT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Traced_Class_lowerTrack2 = ($GLOBALS['Control_Comonad_Traced_Class_lowerTrack2'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_lowerTrack2'));
  $comonadIdentityT = ($__global_Control_Monad_Identity_Trans_comonadIdentityT)((($dictComonadTraced)->Comonad0)($__global_Prim_undefined));
  $__res = (object)["track" => ($__global_Control_Comonad_Traced_Class_lowerTrack2)($dictComonadTraced), "Comonad0" => function($__dollar____unused) use ($comonadIdentityT) {
  $__num = func_num_args();
  $__res = $comonadIdentityT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_comonadTracedIdentityT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_comonadTracedIdentityT';

// Control_Comonad_Traced_Class_comonadTracedEnvT
function Control_Comonad_Traced_Class_comonadTracedEnvT($dictComonadTraced) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_comonadTracedEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Env_Trans_comonadEnvT = ($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadEnvT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Traced_Class_lowerTrack3 = ($GLOBALS['Control_Comonad_Traced_Class_lowerTrack3'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_lowerTrack3'));
  $comonadEnvT = ($__global_Control_Comonad_Env_Trans_comonadEnvT)((($dictComonadTraced)->Comonad0)($__global_Prim_undefined));
  $__res = (object)["track" => ($__global_Control_Comonad_Traced_Class_lowerTrack3)($dictComonadTraced), "Comonad0" => function($__dollar____unused) use ($comonadEnvT) {
  $__num = func_num_args();
  $__res = $comonadEnvT;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Traced_Class_comonadTracedEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_comonadTracedEnvT';

// Control_Comonad_Traced_Class_censor
function Control_Comonad_Traced_Class_censor($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Traced_Class_censor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Traced_Class_composeFlipped = ($GLOBALS['Control_Comonad_Traced_Class_composeFlipped'] ?? \Control\Comonad\Traced\Class\phpurs_eval_thunk('Control_Comonad_Traced_Class_composeFlipped'));
  $map = ($dictFunctor)->map;
  $__res = (function() use ($map, $__global_Control_Comonad_Traced_Class_composeFlipped, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Control_Comonad_Traced_Class_composeFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$tr = $__case_1;
$__res = ($map)(function($v1) use ($__global_Control_Comonad_Traced_Class_composeFlipped, $f1) {
  $__num = func_num_args();
  $__res = ($__global_Control_Comonad_Traced_Class_composeFlipped)($f1, $v1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $tr);
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
$GLOBALS['Control_Comonad_Traced_Class_censor'] = __NAMESPACE__ . '\\Control_Comonad_Traced_Class_censor';

