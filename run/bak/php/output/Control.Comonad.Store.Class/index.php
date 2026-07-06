<?php

namespace Control\Comonad\Store\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
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
      case 'Control_Comonad_Store_Class_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Comonad_Store_Class_lower': $v = (($GLOBALS['Control_Comonad_Env_Trans_comonadTransEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadTransEnvT')))->lower; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Control_Comonad_Store_Class_ComonadStore$Dict
function Control_Comonad_Store_Class_ComonadStore__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_ComonadStore__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_ComonadStore__dollar__Dict'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_ComonadStore__dollar__Dict';

// Control_Comonad_Store_Class_pos
function Control_Comonad_Store_Class_pos($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_pos';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->pos;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_pos'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_pos';

// Control_Comonad_Store_Class_peek
function Control_Comonad_Store_Class_peek($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_peek';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->peek;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_peek'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_peek';

// Control_Comonad_Store_Class_peeks
function Control_Comonad_Store_Class_peeks($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_peeks';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $peek1 = ($dictComonadStore)->peek;
  $pos1 = ($dictComonadStore)->pos;
  $__res = (function() use ($peek1, $pos1, &$__fn) {
  $__fn = function($f, $x = null) use ($peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($peek1)(($f)(($pos1)($x)), $x);
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
$GLOBALS['Control_Comonad_Store_Class_peeks'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_peeks';

// Control_Comonad_Store_Class_seeks
function Control_Comonad_Store_Class_seeks($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_seeks';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Store_Class_peeks = ($GLOBALS['Control_Comonad_Store_Class_peeks'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_peeks'));
  $__global_Control_Extend_duplicate = ($GLOBALS['Control_Extend_duplicate'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_duplicate'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Store_Class_compose = ($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose'));
  $peeks1 = ($__global_Control_Comonad_Store_Class_peeks)($dictComonadStore);
  $duplicate = ($__global_Control_Extend_duplicate)((((($dictComonadStore)->Comonad0)($__global_Prim_undefined))->Extend0)($__global_Prim_undefined));
  $__res = function($f) use ($__global_Control_Comonad_Store_Class_compose, $peeks1, $duplicate) {
  $__num = func_num_args();
  $__res = ($__global_Control_Comonad_Store_Class_compose)(($peeks1)($f), $duplicate);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_seeks'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_seeks';

// Control_Comonad_Store_Class_seek
function Control_Comonad_Store_Class_seek($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_seek';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Extend_duplicate = ($GLOBALS['Control_Extend_duplicate'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_duplicate'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Store_Class_compose = ($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose'));
  $peek1 = ($dictComonadStore)->peek;
  $duplicate = ($__global_Control_Extend_duplicate)((((($dictComonadStore)->Comonad0)($__global_Prim_undefined))->Extend0)($__global_Prim_undefined));
  $__res = function($s) use ($__global_Control_Comonad_Store_Class_compose, $peek1, $duplicate) {
  $__num = func_num_args();
  $__res = ($__global_Control_Comonad_Store_Class_compose)(($peek1)($s), $duplicate);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_seek'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_seek';

// Control_Comonad_Store_Class_experiment
function Control_Comonad_Store_Class_experiment($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_experiment';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $peek1 = ($dictComonadStore)->peek;
  $pos1 = ($dictComonadStore)->pos;
  $__res = function($dictFunctor) use ($__global_Data_Function_flip, $peek1, $pos1) {
  $__num = func_num_args();
  $map = ($dictFunctor)->map;
  $__res = (function() use ($map, $__global_Data_Function_flip, $peek1, $pos1, &$__fn) {
  $__fn = function($f, $x = null) use ($map, $__global_Data_Function_flip, $peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($map)(($__global_Data_Function_flip)($peek1, $x), ($f)(($pos1)($x)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Store_Class_experiment'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_experiment';

// Control_Comonad_Store_Class_comonadStoreTracedT
function Control_Comonad_Store_Class_comonadStoreTracedT($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_comonadStoreTracedT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Traced_Trans_comonadTracedT = ($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTracedT'));
  $__global_Control_Comonad_Traced_Trans_comonadTransTracedT = ($GLOBALS['Control_Comonad_Traced_Trans_comonadTransTracedT'] ?? \Control\Comonad\Traced\Trans\phpurs_eval_thunk('Control_Comonad_Traced_Trans_comonadTransTracedT'));
  $__global_Control_Comonad_Store_Class_compose = ($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose'));
  $pos1 = ($dictComonadStore)->pos;
  $Comonad0 = (($dictComonadStore)->Comonad0)($__global_Prim_undefined);
  $peek1 = ($dictComonadStore)->peek;
  $comonadTracedT = ($__global_Control_Comonad_Traced_Trans_comonadTracedT)($Comonad0);
  $__res = function($dictMonoid) use ($__global_Control_Comonad_Traced_Trans_comonadTransTracedT, &$Comonad0, $comonadTracedT, $__global_Control_Comonad_Store_Class_compose, $pos1, $peek1) {
  $__num = func_num_args();
  $lower1 = ((($__global_Control_Comonad_Traced_Trans_comonadTransTracedT)($dictMonoid))->lower)($Comonad0);
  $comonadTracedT1 = ($comonadTracedT)($dictMonoid);
  $__res = (object)["pos" => ($__global_Control_Comonad_Store_Class_compose)($pos1, $lower1), "peek" => function($s) use ($__global_Control_Comonad_Store_Class_compose, $peek1, $lower1) {
  $__num = func_num_args();
  $__res = ($__global_Control_Comonad_Store_Class_compose)(($peek1)($s), $lower1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Comonad0" => function($__dollar____unused) use ($comonadTracedT1) {
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
$GLOBALS['Control_Comonad_Store_Class_comonadStoreTracedT'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_comonadStoreTracedT';

// Control_Comonad_Store_Class_comonadStoreStoreT
function Control_Comonad_Store_Class_comonadStoreStoreT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_comonadStoreStoreT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Store_Trans_comonadStoreT = ($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'] ?? \Control\Comonad\Store\Trans\phpurs_eval_thunk('Control_Comonad_Store_Trans_comonadStoreT'));
  $extract = ($dictComonad)->extract;
  $comonadStoreT = ($__global_Control_Comonad_Store_Trans_comonadStoreT)($dictComonad);
  $__res = (object)["pos" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$s = ($__case_0)->v1;
$__res = $s;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "peek" => (function() use ($extract, &$__fn) {
  $__fn = function($s, $v = null) use ($extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($s, &$__fn) { return $__fn($s, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $s;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$s1 = $__case_0;
$f = ($__case_1)->v0;
$__res = ($extract)($f, $s1);
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
})(), "Comonad0" => function($__dollar____unused) use ($comonadStoreT) {
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
$GLOBALS['Control_Comonad_Store_Class_comonadStoreStoreT'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_comonadStoreStoreT';

// Control_Comonad_Store_Class_comonadStoreEnvT
function Control_Comonad_Store_Class_comonadStoreEnvT($dictComonadStore) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Store_Class_comonadStoreEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Store_Class_lower = ($GLOBALS['Control_Comonad_Store_Class_lower'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_lower'));
  $__global_Control_Comonad_Env_Trans_comonadEnvT = ($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_comonadEnvT'));
  $__global_Control_Comonad_Store_Class_compose = ($GLOBALS['Control_Comonad_Store_Class_compose'] ?? \Control\Comonad\Store\Class\phpurs_eval_thunk('Control_Comonad_Store_Class_compose'));
  $Comonad0 = (($dictComonadStore)->Comonad0)($__global_Prim_undefined);
  $lower1 = ($__global_Control_Comonad_Store_Class_lower)($Comonad0);
  $peek1 = ($dictComonadStore)->peek;
  $comonadEnvT = ($__global_Control_Comonad_Env_Trans_comonadEnvT)($Comonad0);
  $__res = (object)["pos" => ($__global_Control_Comonad_Store_Class_compose)(($dictComonadStore)->pos, $lower1), "peek" => function($s) use ($__global_Control_Comonad_Store_Class_compose, $peek1, $lower1) {
  $__num = func_num_args();
  $__res = ($__global_Control_Comonad_Store_Class_compose)(($peek1)($s), $lower1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Comonad0" => function($__dollar____unused) use ($comonadEnvT) {
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
$GLOBALS['Control_Comonad_Store_Class_comonadStoreEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Store_Class_comonadStoreEnvT';

