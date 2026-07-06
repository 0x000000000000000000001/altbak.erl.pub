<?php

namespace Data\Functor\Costar;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Contravariant/index.php';
require_once __DIR__ . '/../Data.Functor.Costar/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Closed/index.php';
require_once __DIR__ . '/../Data.Profunctor.Strong/index.php';
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
      case 'Data_Functor_Costar_composeFlipped': $v = \Control\Semigroupoid\Control_Semigroupoid_composeFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Functor_Costar_lcmap': $v = \Data\Profunctor\Data_Profunctor_lcmap(($GLOBALS['Data_Profunctor_profunctorFn'] ?? \Data\Profunctor\phpurs_eval_thunk('Data_Profunctor_profunctorFn'))); break;
      case 'Data_Functor_Costar_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Functor_Costar_newtypeCostar': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_functorCostar': $v = (object)["map" => (function() use (&$__fn) {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Functor_Costar_compose = ($GLOBALS['Data_Functor_Costar_compose'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_compose'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$g = $__case_1;
$__res = ($__global_Data_Functor_Costar_compose)($f1, $g);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Functor_Costar_invariantCostar': $v = (object)["imap" => \Data\Functor\Invariant\Data_Functor_Invariant_imapF(($GLOBALS['Data_Functor_Costar_functorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_functorCostar')))]; break;
      case 'Data_Functor_Costar_distributiveCostar': $v = (object)["distribute" => function($dictFunctor) {
  $__num = func_num_args();
  $map = ($dictFunctor)->map;
  $__res = (function() use ($map, &$__fn) {
  $__fn = function($f, $a = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($map)(function($v) use ($a) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$g = $__case_0;
$__res = ($g)($a);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $f);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "collect" => function($dictFunctor) {
  $__num = func_num_args();
  $__global_Data_Functor_Costar_compose = ($GLOBALS['Data_Functor_Costar_compose'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_compose'));
  $__global_Data_Functor_Costar_distributiveCostar = ($GLOBALS['Data_Functor_Costar_distributiveCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_distributiveCostar'));
  $map = ($dictFunctor)->map;
  $__res = function($f) use ($__global_Data_Functor_Costar_compose, $__global_Data_Functor_Costar_distributiveCostar, $dictFunctor, $map) {
  $__num = func_num_args();
  $__res = ($__global_Data_Functor_Costar_compose)((($__global_Data_Functor_Costar_distributiveCostar)->distribute)($dictFunctor), ($map)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Functor_Costar_functorCostar = ($GLOBALS['Data_Functor_Costar_functorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_functorCostar'));
  $__res = $__global_Data_Functor_Costar_functorCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_applyCostar': $v = (object)["apply" => (function() use (&$__fn) {
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
$g = $__case_1;
$__res = function($a) use ($f, $g) {
  $__num = func_num_args();
  $__res = ($f)($a, ($g)($a));
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
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Functor_Costar_functorCostar = ($GLOBALS['Data_Functor_Costar_functorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_functorCostar'));
  $__res = $__global_Data_Functor_Costar_functorCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_bindCostar': $v = (object)["bind" => (function() use (&$__fn) {
  $__fn = function($v, $f = null) use (&$__fn) {
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
$__res = function($x) use ($f1, $m) {
  $__num = func_num_args();
  $v1 = ($f1)(($m)($x));
  $__case_0 = $v1;
  if (true) {
$g = $__case_0;
$__res = ($g)($x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
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
})(), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Functor_Costar_applyCostar = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applyCostar'));
  $__res = $__global_Data_Functor_Costar_applyCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_applicativeCostar': $v = (object)["pure" => (function() use (&$__fn) {
  $__fn = function($a, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = $a;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Functor_Costar_applyCostar = ($GLOBALS['Data_Functor_Costar_applyCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applyCostar'));
  $__res = $__global_Data_Functor_Costar_applyCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Functor_Costar_monadCostar': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Functor_Costar_applicativeCostar = ($GLOBALS['Data_Functor_Costar_applicativeCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_applicativeCostar'));
  $__res = $__global_Data_Functor_Costar_applicativeCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Functor_Costar_bindCostar = ($GLOBALS['Data_Functor_Costar_bindCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_bindCostar'));
  $__res = $__global_Data_Functor_Costar_bindCostar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };





// Data_Functor_Costar_Costar
function Data_Functor_Costar_Costar($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_Costar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_Costar'] = __NAMESPACE__ . '\\Data_Functor_Costar_Costar';

// Data_Functor_Costar_semigroupoidCostar
function Data_Functor_Costar_semigroupoidCostar($dictExtend) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_semigroupoidCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Extend_composeCoKleisliFlipped = ($GLOBALS['Control_Extend_composeCoKleisliFlipped'] ?? \Control\Extend\phpurs_eval_thunk('Control_Extend_composeCoKleisliFlipped'));
  $composeCoKleisliFlipped = ($__global_Control_Extend_composeCoKleisliFlipped)($dictExtend);
  $__res = (object)["compose" => (function() use ($composeCoKleisliFlipped, &$__fn) {
  $__fn = function($v, $v1 = null) use ($composeCoKleisliFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$f = $__case_0;
$g = $__case_1;
$__res = ($composeCoKleisliFlipped)($f, $g);
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
$GLOBALS['Data_Functor_Costar_semigroupoidCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_semigroupoidCostar';

// Data_Functor_Costar_profunctorCostar
function Data_Functor_Costar_profunctorCostar($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_profunctorCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Costar_composeFlipped = ($GLOBALS['Data_Functor_Costar_composeFlipped'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_composeFlipped'));
  $map = ($dictFunctor)->map;
  $__res = (object)["dimap" => (function() use ($__global_Data_Functor_Costar_composeFlipped, $map, &$__fn) {
  $__fn = function($f, $g = null, $v = null) use ($__global_Data_Functor_Costar_composeFlipped, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
    if ($__num === 1) return function($g, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $g;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
$__res = ($__global_Data_Functor_Costar_composeFlipped)(($map)($f1), ($__global_Data_Functor_Costar_composeFlipped)($h, $g1));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_profunctorCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_profunctorCostar';

// Data_Functor_Costar_strongCostar
function Data_Functor_Costar_strongCostar($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_strongCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Costar_profunctorCostar = ($GLOBALS['Data_Functor_Costar_profunctorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_profunctorCostar'));
  $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $Functor0 = (((($dictComonad)->Extend0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
  $map = ($Functor0)->map;
  $extract = ($dictComonad)->extract;
  $profunctorCostar1 = ($__global_Data_Functor_Costar_profunctorCostar)($Functor0);
  $__res = (object)["first" => function($v) use ($map, $__global_Data_Tuple_fst, $__global_Data_Tuple_snd, $extract) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = function($x) use ($f, $map, $__global_Data_Tuple_fst, $__global_Data_Tuple_snd, $extract) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($f)(($map)($__global_Data_Tuple_fst, $x)), ($__global_Data_Tuple_snd)(($extract)($x)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "second" => function($v) use ($__global_Data_Tuple_fst, $extract, $map, $__global_Data_Tuple_snd) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = function($x) use ($__global_Data_Tuple_fst, $extract, $f, $map, $__global_Data_Tuple_snd) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($__global_Data_Tuple_fst)(($extract)($x)), ($f)(($map)($__global_Data_Tuple_snd, $x)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Profunctor0" => function($__dollar____unused) use ($profunctorCostar1) {
  $__num = func_num_args();
  $__res = $profunctorCostar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_strongCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_strongCostar';


// Data_Functor_Costar_hoistCostar
function Data_Functor_Costar_hoistCostar($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_hoistCostar';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Functor_Costar_lcmap = ($GLOBALS['Data_Functor_Costar_lcmap'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_lcmap'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$g = $__case_1;
$__res = ($__global_Data_Functor_Costar_lcmap)($f1, $g);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Costar_hoistCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_hoistCostar';




// Data_Functor_Costar_closedCostar
function Data_Functor_Costar_closedCostar($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_closedCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Costar_profunctorCostar = ($GLOBALS['Data_Functor_Costar_profunctorCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_profunctorCostar'));
  $map = ($dictFunctor)->map;
  $profunctorCostar1 = ($__global_Data_Functor_Costar_profunctorCostar)($dictFunctor);
  $__res = (object)["closed" => function($v) use ($map) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = (function() use ($f, $map, &$__fn) {
  $__fn = function($g, $x = null) use ($f, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($g, &$__fn) { return $__fn($g, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($f)(($map)(function($v1) use ($x) {
  $__num = func_num_args();
  $__res = ($v1)($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $g));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Profunctor0" => function($__dollar____unused) use ($profunctorCostar1) {
  $__num = func_num_args();
  $__res = $profunctorCostar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_closedCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_closedCostar';

// Data_Functor_Costar_categoryCostar
function Data_Functor_Costar_categoryCostar($dictComonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_categoryCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Costar_semigroupoidCostar = ($GLOBALS['Data_Functor_Costar_semigroupoidCostar'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_semigroupoidCostar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $semigroupoidCostar1 = ($__global_Data_Functor_Costar_semigroupoidCostar)((($dictComonad)->Extend0)($__global_Prim_undefined));
  $__res = (object)["identity" => ($dictComonad)->extract, "Semigroupoid0" => function($__dollar____unused) use ($semigroupoidCostar1) {
  $__num = func_num_args();
  $__res = $semigroupoidCostar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_categoryCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_categoryCostar';

// Data_Functor_Costar_bifunctorCostar
function Data_Functor_Costar_bifunctorCostar($dictContravariant) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Costar_bifunctorCostar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Costar_composeFlipped = ($GLOBALS['Data_Functor_Costar_composeFlipped'] ?? \Data\Functor\Costar\phpurs_eval_thunk('Data_Functor_Costar_composeFlipped'));
  $cmap = ($dictContravariant)->cmap;
  $__res = (object)["bimap" => (function() use ($__global_Data_Functor_Costar_composeFlipped, $cmap, &$__fn) {
  $__fn = function($f, $g = null, $v = null) use ($__global_Data_Functor_Costar_composeFlipped, $cmap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
    if ($__num === 1) return function($g, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $g;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$g1 = $__case_1;
$h = $__case_2;
$__res = ($__global_Data_Functor_Costar_composeFlipped)(($cmap)($f1), ($__global_Data_Functor_Costar_composeFlipped)($h, $g1));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Costar_bifunctorCostar'] = __NAMESPACE__ . '\\Data_Functor_Costar_bifunctorCostar';





