<?php

namespace Data\Profunctor\Star;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Distributive/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Choice/index.php';
require_once __DIR__ . '/../Data.Profunctor.Closed/index.php';
require_once __DIR__ . '/../Data.Profunctor.Star/index.php';
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
      case 'Data_Profunctor_Star_composeFlipped': $v = \Control\Semigroupoid\Control_Semigroupoid_composeFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Profunctor_Star_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Profunctor_Star_newtypeStar': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
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




// Data_Profunctor_Star_Star
function Data_Profunctor_Star_Star($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_Star';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_Star'] = __NAMESPACE__ . '\\Data_Profunctor_Star_Star';

// Data_Profunctor_Star_semigroupoidStar
function Data_Profunctor_Star_semigroupoidStar($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_semigroupoidStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $bind = ($dictBind)->bind;
  $__res = (object)["compose" => (function() use ($bind, &$__fn) {
  $__fn = function($v, $v1 = null) use ($bind, &$__fn) {
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
$__res = function($x) use ($bind, $g, $f) {
  $__num = func_num_args();
  $__res = ($bind)(($g)($x), $f);
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
$GLOBALS['Data_Profunctor_Star_semigroupoidStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_semigroupoidStar';

// Data_Profunctor_Star_profunctorStar
function Data_Profunctor_Star_profunctorStar($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_profunctorStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_composeFlipped = ($GLOBALS['Data_Profunctor_Star_composeFlipped'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_composeFlipped'));
  $map = ($dictFunctor)->map;
  $__res = (object)["dimap" => (function() use ($__global_Data_Profunctor_Star_composeFlipped, $map, &$__fn) {
  $__fn = function($f, $g = null, $v = null) use ($__global_Data_Profunctor_Star_composeFlipped, $map, &$__fn) {
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
$ft = $__case_2;
$__res = ($__global_Data_Profunctor_Star_composeFlipped)($f1, ($__global_Data_Profunctor_Star_composeFlipped)($ft, ($map)($g1)));
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
$GLOBALS['Data_Profunctor_Star_profunctorStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_profunctorStar';

// Data_Profunctor_Star_strongStar
function Data_Profunctor_Star_strongStar($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_strongStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_profunctorStar = ($GLOBALS['Data_Profunctor_Star_profunctorStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_profunctorStar'));
  $map = ($dictFunctor)->map;
  $profunctorStar1 = ($__global_Data_Profunctor_Star_profunctorStar)($dictFunctor);
  $__res = (object)["first" => function($v) use ($map) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = function($v1) use ($map, $f) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$s = ($__case_0)->v0;
$x = ($__case_0)->v1;
$__res = ($map)(function($v2) use ($x) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", $v2, $x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($f)($s));
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
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "second" => function($v) use ($map) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = function($v1) use ($map, $f) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v0;
$s = ($__case_0)->v1;
$__res = ($map)(((function() use (&$__fn) {
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
})())($x), ($f)($s));
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
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Profunctor0" => function($__dollar____unused) use ($profunctorStar1) {
  $__num = func_num_args();
  $__res = $profunctorStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_strongStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_strongStar';


// Data_Profunctor_Star_invariantStar
function Data_Profunctor_Star_invariantStar($dictInvariant) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_invariantStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_compose = ($GLOBALS['Data_Profunctor_Star_compose'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_compose'));
  $imap = ($dictInvariant)->imap;
  $__res = (object)["imap" => (function() use ($__global_Data_Profunctor_Star_compose, $imap, &$__fn) {
  $__fn = function($f, $g = null, $v = null) use ($__global_Data_Profunctor_Star_compose, $imap, &$__fn) {
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
$__res = ($__global_Data_Profunctor_Star_compose)(($imap)($f1, $g1), $h);
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
$GLOBALS['Data_Profunctor_Star_invariantStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_invariantStar';

// Data_Profunctor_Star_hoistStar
function Data_Profunctor_Star_hoistStar($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_hoistStar';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Profunctor_Star_compose = ($GLOBALS['Data_Profunctor_Star_compose'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_compose'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$g = $__case_1;
$__res = ($__global_Data_Profunctor_Star_compose)($f1, $g);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_hoistStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_hoistStar';

// Data_Profunctor_Star_functorStar
function Data_Profunctor_Star_functorStar($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_functorStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_compose = ($GLOBALS['Data_Profunctor_Star_compose'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_compose'));
  $map = ($dictFunctor)->map;
  $__res = (object)["map" => (function() use ($__global_Data_Profunctor_Star_compose, $map, &$__fn) {
  $__fn = function($f, $v = null) use ($__global_Data_Profunctor_Star_compose, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$g = $__case_1;
$__res = ($__global_Data_Profunctor_Star_compose)(($map)($f1), $g);
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
$GLOBALS['Data_Profunctor_Star_functorStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_functorStar';

// Data_Profunctor_Star_distributiveStar
function Data_Profunctor_Star_distributiveStar($dictDistributive) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_distributiveStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_functorStar = ($GLOBALS['Data_Profunctor_Star_functorStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_functorStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Profunctor_Star_compose = ($GLOBALS['Data_Profunctor_Star_compose'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_compose'));
  while (true) {
$collect = ($dictDistributive)->collect;
$functorStar1 = ($__global_Data_Profunctor_Star_functorStar)((($dictDistributive)->Functor0)($__global_Prim_undefined));
$__res = (object)["distribute" => function($dictFunctor) use ($collect) {
  $__num = func_num_args();
  $collect1 = ($collect)($dictFunctor);
  $__res = (function() use ($collect1, &$__fn) {
  $__fn = function($f, $a = null) use ($collect1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($collect1)(function($v) use ($a) {
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
}, "collect" => function($dictFunctor) use ($__global_Data_Profunctor_Star_compose, $dictDistributive) {
  $__num = func_num_args();
  $__global_Data_Profunctor_Star_distributiveStar = ($GLOBALS['Data_Profunctor_Star_distributiveStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_distributiveStar'));
  $map = ($dictFunctor)->map;
  $__res = function($f) use ($__global_Data_Profunctor_Star_compose, $__global_Data_Profunctor_Star_distributiveStar, $dictDistributive, $dictFunctor, $map) {
  $__num = func_num_args();
  $__res = ($__global_Data_Profunctor_Star_compose)(((($__global_Data_Profunctor_Star_distributiveStar)($dictDistributive))->distribute)($dictFunctor), ($map)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) use ($functorStar1) {
  $__num = func_num_args();
  $__res = $functorStar1;
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
$GLOBALS['Data_Profunctor_Star_distributiveStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_distributiveStar';

// Data_Profunctor_Star_closedStar
function Data_Profunctor_Star_closedStar($dictDistributive) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_closedStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_functorFn = ($GLOBALS['Data_Functor_functorFn'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorFn'));
  $__global_Data_Profunctor_Star_profunctorStar = ($GLOBALS['Data_Profunctor_Star_profunctorStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_profunctorStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Profunctor_Star_compose = ($GLOBALS['Data_Profunctor_Star_compose'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_compose'));
  $distribute = (($dictDistributive)->distribute)($__global_Data_Functor_functorFn);
  $profunctorStar1 = ($__global_Data_Profunctor_Star_profunctorStar)((($dictDistributive)->Functor0)($__global_Prim_undefined));
  $__res = (object)["closed" => function($v) use ($distribute, $__global_Data_Profunctor_Star_compose) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = function($g) use ($distribute, $__global_Data_Profunctor_Star_compose, $f) {
  $__num = func_num_args();
  $__res = ($distribute)(($__global_Data_Profunctor_Star_compose)($f, $g));
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
}, "Profunctor0" => function($__dollar____unused) use ($profunctorStar1) {
  $__num = func_num_args();
  $__res = $profunctorStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_closedStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_closedStar';

// Data_Profunctor_Star_choiceStar
function Data_Profunctor_Star_choiceStar($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_choiceStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Profunctor_Star_profunctorStar = ($GLOBALS['Data_Profunctor_Star_profunctorStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_profunctorStar'));
  $__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
  $__global_Data_Profunctor_Star_compose = ($GLOBALS['Data_Profunctor_Star_compose'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_compose'));
  $Functor0 = (((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined);
  $map = ($Functor0)->map;
  $pure = ($dictApplicative)->pure;
  $profunctorStar1 = ($__global_Data_Profunctor_Star_profunctorStar)($Functor0);
  $__res = (object)["left" => function($v) use ($__global_Data_Either_either, $__global_Data_Profunctor_Star_compose, $map, $pure) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($__global_Data_Either_either)(($__global_Data_Profunctor_Star_compose)(($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $f), ($__global_Data_Profunctor_Star_compose)($pure, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "right" => function($v) use ($__global_Data_Either_either, $__global_Data_Profunctor_Star_compose, $pure, $map) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($__global_Data_Either_either)(($__global_Data_Profunctor_Star_compose)($pure, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), ($__global_Data_Profunctor_Star_compose)(($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $f));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Profunctor0" => function($__dollar____unused) use ($profunctorStar1) {
  $__num = func_num_args();
  $__res = $profunctorStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_choiceStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_choiceStar';

// Data_Profunctor_Star_categoryStar
function Data_Profunctor_Star_categoryStar($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_categoryStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_semigroupoidStar = ($GLOBALS['Data_Profunctor_Star_semigroupoidStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_semigroupoidStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $semigroupoidStar1 = ($__global_Data_Profunctor_Star_semigroupoidStar)((($dictMonad)->Bind1)($__global_Prim_undefined));
  $__res = (object)["identity" => ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure, "Semigroupoid0" => function($__dollar____unused) use ($semigroupoidStar1) {
  $__num = func_num_args();
  $__res = $semigroupoidStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_categoryStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_categoryStar';

// Data_Profunctor_Star_applyStar
function Data_Profunctor_Star_applyStar($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_applyStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_functorStar = ($GLOBALS['Data_Profunctor_Star_functorStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_functorStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $apply = ($dictApply)->apply;
  $functorStar1 = ($__global_Data_Profunctor_Star_functorStar)((($dictApply)->Functor0)($__global_Prim_undefined));
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
$g = $__case_1;
$__res = function($a) use ($apply, $f, $g) {
  $__num = func_num_args();
  $__res = ($apply)(($f)($a), ($g)($a));
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
})(), "Functor0" => function($__dollar____unused) use ($functorStar1) {
  $__num = func_num_args();
  $__res = $functorStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_applyStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_applyStar';

// Data_Profunctor_Star_bindStar
function Data_Profunctor_Star_bindStar($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_bindStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_applyStar = ($GLOBALS['Data_Profunctor_Star_applyStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_applyStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bind = ($dictBind)->bind;
  $applyStar1 = ($__global_Data_Profunctor_Star_applyStar)((($dictBind)->Apply0)($__global_Prim_undefined));
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
$m = $__case_0;
$f1 = $__case_1;
$__res = function($x) use ($bind, $m, $f1) {
  $__num = func_num_args();
  $__res = ($bind)(($m)($x), function($a) use ($f1, $x) {
  $__num = func_num_args();
  $v1 = ($f1)($a);
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
})(), "Apply0" => function($__dollar____unused) use ($applyStar1) {
  $__num = func_num_args();
  $__res = $applyStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_bindStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_bindStar';

// Data_Profunctor_Star_applicativeStar
function Data_Profunctor_Star_applicativeStar($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_applicativeStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_applyStar = ($GLOBALS['Data_Profunctor_Star_applyStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_applyStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = ($dictApplicative)->pure;
  $applyStar1 = ($__global_Data_Profunctor_Star_applyStar)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $__res = (object)["pure" => (function() use ($pure, &$__fn) {
  $__fn = function($a, $v = null) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($pure)($a);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($applyStar1) {
  $__num = func_num_args();
  $__res = $applyStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_applicativeStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_applicativeStar';

// Data_Profunctor_Star_monadStar
function Data_Profunctor_Star_monadStar($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_monadStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_applicativeStar = ($GLOBALS['Data_Profunctor_Star_applicativeStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_applicativeStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Profunctor_Star_bindStar = ($GLOBALS['Data_Profunctor_Star_bindStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_bindStar'));
  $applicativeStar1 = ($__global_Data_Profunctor_Star_applicativeStar)((($dictMonad)->Applicative0)($__global_Prim_undefined));
  $bindStar1 = ($__global_Data_Profunctor_Star_bindStar)((($dictMonad)->Bind1)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeStar1) {
  $__num = func_num_args();
  $__res = $applicativeStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) use ($bindStar1) {
  $__num = func_num_args();
  $__res = $bindStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_monadStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_monadStar';

// Data_Profunctor_Star_altStar
function Data_Profunctor_Star_altStar($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_altStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_functorStar = ($GLOBALS['Data_Profunctor_Star_functorStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_functorStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $alt = ($dictAlt)->alt;
  $functorStar1 = ($__global_Data_Profunctor_Star_functorStar)((($dictAlt)->Functor0)($__global_Prim_undefined));
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
$f = $__case_0;
$g = $__case_1;
$__res = function($a) use ($alt, $f, $g) {
  $__num = func_num_args();
  $__res = ($alt)(($f)($a), ($g)($a));
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
})(), "Functor0" => function($__dollar____unused) use ($functorStar1) {
  $__num = func_num_args();
  $__res = $functorStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_altStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_altStar';

// Data_Profunctor_Star_plusStar
function Data_Profunctor_Star_plusStar($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_plusStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_altStar = ($GLOBALS['Data_Profunctor_Star_altStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_altStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $empty = ($dictPlus)->empty;
  $altStar1 = ($__global_Data_Profunctor_Star_altStar)((($dictPlus)->Alt0)($__global_Prim_undefined));
  $__res = (object)["empty" => function($v) use ($empty) {
  $__num = func_num_args();
  $__res = $empty;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alt0" => function($__dollar____unused) use ($altStar1) {
  $__num = func_num_args();
  $__res = $altStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_plusStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_plusStar';

// Data_Profunctor_Star_alternativeStar
function Data_Profunctor_Star_alternativeStar($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_alternativeStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_applicativeStar = ($GLOBALS['Data_Profunctor_Star_applicativeStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_applicativeStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Profunctor_Star_plusStar = ($GLOBALS['Data_Profunctor_Star_plusStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_plusStar'));
  $applicativeStar1 = ($__global_Data_Profunctor_Star_applicativeStar)((($dictAlternative)->Applicative0)($__global_Prim_undefined));
  $plusStar1 = ($__global_Data_Profunctor_Star_plusStar)((($dictAlternative)->Plus1)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeStar1) {
  $__num = func_num_args();
  $__res = $applicativeStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) use ($plusStar1) {
  $__num = func_num_args();
  $__res = $plusStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_alternativeStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_alternativeStar';

// Data_Profunctor_Star_monadPlusStar
function Data_Profunctor_Star_monadPlusStar($dictMonadPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Star_monadPlusStar';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Star_monadStar = ($GLOBALS['Data_Profunctor_Star_monadStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_monadStar'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Profunctor_Star_alternativeStar = ($GLOBALS['Data_Profunctor_Star_alternativeStar'] ?? \Data\Profunctor\Star\phpurs_eval_thunk('Data_Profunctor_Star_alternativeStar'));
  $monadStar1 = ($__global_Data_Profunctor_Star_monadStar)((($dictMonadPlus)->Monad0)($__global_Prim_undefined));
  $alternativeStar1 = ($__global_Data_Profunctor_Star_alternativeStar)((($dictMonadPlus)->Alternative1)($__global_Prim_undefined));
  $__res = (object)["Monad0" => function($__dollar____unused) use ($monadStar1) {
  $__num = func_num_args();
  $__res = $monadStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Alternative1" => function($__dollar____unused) use ($alternativeStar1) {
  $__num = func_num_args();
  $__res = $alternativeStar1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Star_monadPlusStar'] = __NAMESPACE__ . '\\Data_Profunctor_Star_monadPlusStar';

