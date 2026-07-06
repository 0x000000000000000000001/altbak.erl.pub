<?php

namespace Control\Comonad\Env\Trans;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
      case 'Control_Comonad_Env_Trans_map': $v = (($GLOBALS['Data_Functor_functorFn'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorFn')))->map; break;
      case 'Control_Comonad_Env_Trans_composeFlipped': $v = \Control\Semigroupoid\Control_Semigroupoid_composeFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Control_Comonad_Env_Trans_newtypeEnvT': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Comonad_Env_Trans_comonadTransEnvT': $v = (object)["lower" => (function() use (&$__fn) {
  $__fn = function($dictComonad, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($dictComonad, &$__fn) { return $__fn($dictComonad, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v1;
$__res = $x;
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
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Control_Comonad_Env_Trans_EnvT
function Control_Comonad_Env_Trans_EnvT($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_EnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_EnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_EnvT';

// Control_Comonad_Env_Trans_withEnvT
function Control_Comonad_Env_Trans_withEnvT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_withEnvT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
$__res = new Phpurs_Data2("Tuple", ($f1)($e), $x);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_withEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_withEnvT';

// Control_Comonad_Env_Trans_runEnvT
function Control_Comonad_Env_Trans_runEnvT($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_runEnvT';
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
$GLOBALS['Control_Comonad_Env_Trans_runEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_runEnvT';


// Control_Comonad_Env_Trans_mapEnvT
function Control_Comonad_Env_Trans_mapEnvT($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_mapEnvT';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
$__res = new Phpurs_Data2("Tuple", $e, ($f1)($x));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_mapEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_mapEnvT';

// Control_Comonad_Env_Trans_functorEnvT
function Control_Comonad_Env_Trans_functorEnvT($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_functorEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map1 = ($dictFunctor)->map;
  $__res = (object)["map" => (function() use ($map1, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
$__res = new Phpurs_Data2("Tuple", $e, ($map1)($f1, $x));
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
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_functorEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_functorEnvT';

// Control_Comonad_Env_Trans_functorWithIndexEnvT
function Control_Comonad_Env_Trans_functorWithIndexEnvT($dictFunctorWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_functorWithIndexEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Env_Trans_functorEnvT = ($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_functorEnvT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $mapWithIndex = ($dictFunctorWithIndex)->mapWithIndex;
  $functorEnvT1 = ($__global_Control_Comonad_Env_Trans_functorEnvT)((($dictFunctorWithIndex)->Functor0)($__global_Prim_undefined));
  $__res = (object)["mapWithIndex" => (function() use ($mapWithIndex, &$__fn) {
  $__fn = function($f, $v = null) use ($mapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
$__res = new Phpurs_Data2("Tuple", $e, ($mapWithIndex)($f1, $x));
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
})(), "Functor0" => function($__dollar____unused) use ($functorEnvT1) {
  $__num = func_num_args();
  $__res = $functorEnvT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_functorWithIndexEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_functorWithIndexEnvT';

// Control_Comonad_Env_Trans_foldableEnvT
function Control_Comonad_Env_Trans_foldableEnvT($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_foldableEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $foldl = ($dictFoldable)->foldl;
  $foldr = ($dictFoldable)->foldr;
  $foldMap = ($dictFoldable)->foldMap;
  $__res = (object)["foldl" => (function() use ($foldl, &$__fn) {
  $__fn = function($fn, $a = null, $v = null) use ($foldl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($fn, $a, &$__fn) { return $__fn($fn, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($fn, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($fn, $a, $v);
      if ($__num2 === 1) return function($v) use ($fn, $a, &$__fn) { return $__fn($fn, $a, $v); };
      return phpurs_curry_fallback($__fn, [$fn], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $fn;
  $__case_1 = $a;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Tuple":
$fn1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v1;
$__res = ($foldl)($fn1, $a1, $x);
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
})(), "foldr" => (function() use ($foldr, &$__fn) {
  $__fn = function($fn, $a = null, $v = null) use ($foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($fn, $a, &$__fn) { return $__fn($fn, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($fn, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($fn, $a, $v);
      if ($__num2 === 1) return function($v) use ($fn, $a, &$__fn) { return $__fn($fn, $a, $v); };
      return phpurs_curry_fallback($__fn, [$fn], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $fn;
  $__case_1 = $a;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Tuple":
$fn1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v1;
$__res = ($foldr)($fn1, $a1, $x);
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
})(), "foldMap" => function($dictMonoid) use ($foldMap) {
  $__num = func_num_args();
  $foldMap1 = ($foldMap)($dictMonoid);
  $__res = (function() use ($foldMap1, &$__fn) {
  $__fn = function($fn, $v = null) use ($foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($fn, &$__fn) { return $__fn($fn, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $fn;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$fn1 = $__case_0;
$x = ($__case_1)->v1;
$__res = ($foldMap1)($fn1, $x);
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_foldableEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_foldableEnvT';

// Control_Comonad_Env_Trans_foldableWithIndexEnvT
function Control_Comonad_Env_Trans_foldableWithIndexEnvT($dictFoldableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_foldableWithIndexEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Env_Trans_foldableEnvT = ($GLOBALS['Control_Comonad_Env_Trans_foldableEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_foldableEnvT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldlWithIndex = ($dictFoldableWithIndex)->foldlWithIndex;
  $foldrWithIndex = ($dictFoldableWithIndex)->foldrWithIndex;
  $foldMapWithIndex = ($dictFoldableWithIndex)->foldMapWithIndex;
  $foldableEnvT1 = ($__global_Control_Comonad_Env_Trans_foldableEnvT)((($dictFoldableWithIndex)->Foldable0)($__global_Prim_undefined));
  $__res = (object)["foldlWithIndex" => (function() use ($foldlWithIndex, &$__fn) {
  $__fn = function($f, $a = null, $v = null) use ($foldlWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $v);
      if ($__num2 === 1) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $a;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v1;
$__res = ($foldlWithIndex)($f1, $a1, $x);
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
})(), "foldrWithIndex" => (function() use ($foldrWithIndex, &$__fn) {
  $__fn = function($f, $a = null, $v = null) use ($foldrWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $v);
      if ($__num2 === 1) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $a;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->v1;
$__res = ($foldrWithIndex)($f1, $a1, $x);
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
})(), "foldMapWithIndex" => function($dictMonoid) use ($foldMapWithIndex) {
  $__num = func_num_args();
  $foldMapWithIndex1 = ($foldMapWithIndex)($dictMonoid);
  $__res = (function() use ($foldMapWithIndex1, &$__fn) {
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v1;
$__res = ($foldMapWithIndex1)($f1, $x);
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable0" => function($__dollar____unused) use ($foldableEnvT1) {
  $__num = func_num_args();
  $__res = $foldableEnvT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_foldableWithIndexEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_foldableWithIndexEnvT';

// Control_Comonad_Env_Trans_traversableEnvT
function Control_Comonad_Env_Trans_traversableEnvT($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_traversableEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Env_Trans_functorEnvT = ($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_functorEnvT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Env_Trans_foldableEnvT = ($GLOBALS['Control_Comonad_Env_Trans_foldableEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_foldableEnvT'));
  $__global_Control_Comonad_Env_Trans_map = ($GLOBALS['Control_Comonad_Env_Trans_map'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_map'));
  $__global_Control_Comonad_Env_Trans_EnvT = ($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT'));
  $sequence = ($dictTraversable)->sequence;
  $traverse = ($dictTraversable)->traverse;
  $functorEnvT1 = ($__global_Control_Comonad_Env_Trans_functorEnvT)((($dictTraversable)->Functor0)($__global_Prim_undefined));
  $foldableEnvT1 = ($__global_Control_Comonad_Env_Trans_foldableEnvT)((($dictTraversable)->Foldable1)($__global_Prim_undefined));
  $__res = (object)["sequence" => function($dictApplicative) use ($__global_Prim_undefined, $sequence, $__global_Control_Comonad_Env_Trans_map, $__global_Control_Comonad_Env_Trans_EnvT) {
  $__num = func_num_args();
  $map1 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $sequence1 = ($sequence)($dictApplicative);
  $__res = function($v) use ($map1, $__global_Control_Comonad_Env_Trans_map, $__global_Control_Comonad_Env_Trans_EnvT, $sequence1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$x = ($__case_0)->v1;
$__res = ($map1)(($__global_Control_Comonad_Env_Trans_map)($__global_Control_Comonad_Env_Trans_EnvT, ((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a)), ($sequence1)($x));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "traverse" => function($dictApplicative) use ($__global_Prim_undefined, $traverse, $__global_Control_Comonad_Env_Trans_map, $__global_Control_Comonad_Env_Trans_EnvT) {
  $__num = func_num_args();
  $map1 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverse1 = ($traverse)($dictApplicative);
  $__res = (function() use ($map1, $__global_Control_Comonad_Env_Trans_map, $__global_Control_Comonad_Env_Trans_EnvT, $traverse1, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Comonad_Env_Trans_map, $__global_Control_Comonad_Env_Trans_EnvT, $traverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$a = ($__case_1)->v0;
$x = ($__case_1)->v1;
$__res = ($map1)(($__global_Control_Comonad_Env_Trans_map)($__global_Control_Comonad_Env_Trans_EnvT, ((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($a)), ($traverse1)($f1, $x));
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) use ($functorEnvT1) {
  $__num = func_num_args();
  $__res = $functorEnvT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) use ($foldableEnvT1) {
  $__num = func_num_args();
  $__res = $foldableEnvT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_traversableEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_traversableEnvT';

// Control_Comonad_Env_Trans_traversableWithIndexEnvT
function Control_Comonad_Env_Trans_traversableWithIndexEnvT($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_traversableWithIndexEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Env_Trans_functorWithIndexEnvT = ($GLOBALS['Control_Comonad_Env_Trans_functorWithIndexEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_functorWithIndexEnvT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Env_Trans_foldableWithIndexEnvT = ($GLOBALS['Control_Comonad_Env_Trans_foldableWithIndexEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_foldableWithIndexEnvT'));
  $__global_Control_Comonad_Env_Trans_traversableEnvT = ($GLOBALS['Control_Comonad_Env_Trans_traversableEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_traversableEnvT'));
  $__global_Control_Comonad_Env_Trans_map = ($GLOBALS['Control_Comonad_Env_Trans_map'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_map'));
  $__global_Control_Comonad_Env_Trans_EnvT = ($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT'));
  $traverseWithIndex = ($dictTraversableWithIndex)->traverseWithIndex;
  $functorWithIndexEnvT1 = ($__global_Control_Comonad_Env_Trans_functorWithIndexEnvT)((($dictTraversableWithIndex)->FunctorWithIndex0)($__global_Prim_undefined));
  $foldableWithIndexEnvT1 = ($__global_Control_Comonad_Env_Trans_foldableWithIndexEnvT)((($dictTraversableWithIndex)->FoldableWithIndex1)($__global_Prim_undefined));
  $traversableEnvT1 = ($__global_Control_Comonad_Env_Trans_traversableEnvT)((($dictTraversableWithIndex)->Traversable2)($__global_Prim_undefined));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use ($__global_Prim_undefined, $traverseWithIndex, $__global_Control_Comonad_Env_Trans_map, $__global_Control_Comonad_Env_Trans_EnvT) {
  $__num = func_num_args();
  $map1 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverseWithIndex1 = ($traverseWithIndex)($dictApplicative);
  $__res = (function() use ($map1, $__global_Control_Comonad_Env_Trans_map, $__global_Control_Comonad_Env_Trans_EnvT, $traverseWithIndex1, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, $__global_Control_Comonad_Env_Trans_map, $__global_Control_Comonad_Env_Trans_EnvT, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
$__res = ($map1)(($__global_Control_Comonad_Env_Trans_map)($__global_Control_Comonad_Env_Trans_EnvT, ((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($e)), ($traverseWithIndex1)($f1, $x));
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
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) use ($functorWithIndexEnvT1) {
  $__num = func_num_args();
  $__res = $functorWithIndexEnvT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) use ($foldableWithIndexEnvT1) {
  $__num = func_num_args();
  $__res = $foldableWithIndexEnvT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) use ($traversableEnvT1) {
  $__num = func_num_args();
  $__res = $traversableEnvT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_traversableWithIndexEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_traversableWithIndexEnvT';

// Control_Comonad_Env_Trans_extendEnvT
function Control_Comonad_Env_Trans_extendEnvT($dictExtend) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_extendEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Comonad_Env_Trans_functorEnvT = ($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_functorEnvT'));
  $__global_Control_Comonad_Env_Trans_composeFlipped = ($GLOBALS['Control_Comonad_Env_Trans_composeFlipped'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_composeFlipped'));
  $__global_Control_Comonad_Env_Trans_EnvT = ($GLOBALS['Control_Comonad_Env_Trans_EnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_EnvT'));
  $Functor0 = (($dictExtend)->Functor0)($__global_Prim_undefined);
  $map1 = ($Functor0)->map;
  $extend = ($dictExtend)->extend;
  $functorEnvT1 = ($__global_Control_Comonad_Env_Trans_functorEnvT)($Functor0);
  $__res = (object)["extend" => (function() use ($map1, $extend, $__global_Control_Comonad_Env_Trans_composeFlipped, $__global_Control_Comonad_Env_Trans_EnvT, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, $extend, $__global_Control_Comonad_Env_Trans_composeFlipped, $__global_Control_Comonad_Env_Trans_EnvT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$e = ($__case_1)->v0;
$x = ($__case_1)->v1;
$__res = new Phpurs_Data2("Tuple", $e, ($map1)($f1, ($extend)(($__global_Control_Comonad_Env_Trans_composeFlipped)(((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($e), $__global_Control_Comonad_Env_Trans_EnvT), $x)));
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
})(), "Functor0" => function($__dollar____unused) use ($functorEnvT1) {
  $__num = func_num_args();
  $__res = $functorEnvT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_extendEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_extendEnvT';


// Control_Comonad_Env_Trans_comonadEnvT
function Control_Comonad_Env_Trans_comonadEnvT($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Comonad_Env_Trans_comonadEnvT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Comonad_Env_Trans_extendEnvT = ($GLOBALS['Control_Comonad_Env_Trans_extendEnvT'] ?? \Control\Comonad\Env\Trans\phpurs_eval_thunk('Control_Comonad_Env_Trans_extendEnvT'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $extract = ($dictComonad)->extract;
  $extendEnvT1 = ($__global_Control_Comonad_Env_Trans_extendEnvT)((($dictComonad)->Extend0)($__global_Prim_undefined));
  $__res = (object)["extract" => function($v) use ($extract) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v1;
$__res = ($extract)($x);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Extend0" => function($__dollar____unused) use ($extendEnvT1) {
  $__num = func_num_args();
  $__res = $extendEnvT1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'] = __NAMESPACE__ . '\\Control_Comonad_Env_Trans_comonadEnvT';

