<?php

namespace Data\Functor\Joker;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Choice/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
      case 'Data_Functor_Joker_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Joker_composeFlipped': $v = \Control\Semigroupoid\Control_Semigroupoid_composeFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Functor_Joker_un': $v = \Data\Newtype\Data_Newtype_un(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Functor_Joker_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Functor_Joker_newtypeJoker': $v = (object)["Coercible0" => function($__dollar____unused) {
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






// Data_Functor_Joker_Joker
function Data_Functor_Joker_Joker($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_Joker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_Joker'] = __NAMESPACE__ . '\\Data_Functor_Joker_Joker';

// Data_Functor_Joker_showJoker
function Data_Functor_Joker_showJoker($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_showJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($show) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ("(Joker " . (($show)($x) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_showJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_showJoker';

// Data_Functor_Joker_profunctorJoker
function Data_Functor_Joker_profunctorJoker($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_profunctorJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map = ($dictFunctor)->map;
  $__res = (object)["dimap" => (function() use ($map, &$__fn) {
  $__fn = function($v, $g = null, $v1 = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
    if ($__num === 1) return function($g, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $g, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $g;
  $__case_2 = $v1;
  if (true) {
$g1 = $__case_1;
$a = $__case_2;
$__res = ($map)($g1, $a);
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
$GLOBALS['Data_Functor_Joker_profunctorJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_profunctorJoker';

// Data_Functor_Joker_ordJoker
function Data_Functor_Joker_ordJoker($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_ordJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $dictOrd;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_ordJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_ordJoker';


// Data_Functor_Joker_hoistJoker
function Data_Functor_Joker_hoistJoker($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_hoistJoker';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$a = $__case_1;
$__res = ($f1)($a);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Functor_Joker_hoistJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_hoistJoker';

// Data_Functor_Joker_functorJoker
function Data_Functor_Joker_functorJoker($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_functorJoker';
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
$__res = ($map)($f1, $a);
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
$GLOBALS['Data_Functor_Joker_functorJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_functorJoker';

// Data_Functor_Joker_eqJoker
function Data_Functor_Joker_eqJoker($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_eqJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $dictEq;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_eqJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_eqJoker';

// Data_Functor_Joker_choiceJoker
function Data_Functor_Joker_choiceJoker($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_choiceJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Joker_profunctorJoker = ($GLOBALS['Data_Functor_Joker_profunctorJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_profunctorJoker'));
  $map = ($dictFunctor)->map;
  $profunctorJoker1 = ($__global_Data_Functor_Joker_profunctorJoker)($dictFunctor);
  $__res = (object)["left" => function($v) use ($map) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "right" => function($v) use ($map) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Profunctor0" => function($__dollar____unused) use ($profunctorJoker1) {
  $__num = func_num_args();
  $__res = $profunctorJoker1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_choiceJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_choiceJoker';

// Data_Functor_Joker_bifunctorJoker
function Data_Functor_Joker_bifunctorJoker($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_bifunctorJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map = ($dictFunctor)->map;
  $__res = (object)["bimap" => (function() use ($map, &$__fn) {
  $__fn = function($v, $g = null, $v1 = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
    if ($__num === 1) return function($g, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $g, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $g, &$__fn) { return $__fn($v, $g, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $g;
  $__case_2 = $v1;
  if (true) {
$g1 = $__case_1;
$a = $__case_2;
$__res = ($map)($g1, $a);
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
$GLOBALS['Data_Functor_Joker_bifunctorJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_bifunctorJoker';

// Data_Functor_Joker_biapplyJoker
function Data_Functor_Joker_biapplyJoker($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_biapplyJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Joker_bifunctorJoker = ($GLOBALS['Data_Functor_Joker_bifunctorJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_bifunctorJoker'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $apply = ($dictApply)->apply;
  $bifunctorJoker1 = ($__global_Data_Functor_Joker_bifunctorJoker)((($dictApply)->Functor0)($__global_Prim_undefined));
  $__res = (object)["biapply" => (function() use ($apply, &$__fn) {
  $__fn = function($v, $v1 = null) use ($apply, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$fg = $__case_0;
$xy = $__case_1;
$__res = ($apply)($fg, $xy);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => function($__dollar____unused) use ($bifunctorJoker1) {
  $__num = func_num_args();
  $__res = $bifunctorJoker1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_biapplyJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_biapplyJoker';

// Data_Functor_Joker_biapplicativeJoker
function Data_Functor_Joker_biapplicativeJoker($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_biapplicativeJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Joker_biapplyJoker = ($GLOBALS['Data_Functor_Joker_biapplyJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_biapplyJoker'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = ($dictApplicative)->pure;
  $biapplyJoker1 = ($__global_Data_Functor_Joker_biapplyJoker)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $__res = (object)["bipure" => (function() use ($pure, &$__fn) {
  $__fn = function($v, $b = null) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($v, &$__fn) { return $__fn($v, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($pure)($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Biapply0" => function($__dollar____unused) use ($biapplyJoker1) {
  $__num = func_num_args();
  $__res = $biapplyJoker1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_biapplicativeJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_biapplicativeJoker';

// Data_Functor_Joker_applyJoker
function Data_Functor_Joker_applyJoker($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_applyJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Joker_functorJoker = ($GLOBALS['Data_Functor_Joker_functorJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_functorJoker'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $apply = ($dictApply)->apply;
  $functorJoker1 = ($__global_Data_Functor_Joker_functorJoker)((($dictApply)->Functor0)($__global_Prim_undefined));
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
$__res = ($apply)($f, $g);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) use ($functorJoker1) {
  $__num = func_num_args();
  $__res = $functorJoker1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_applyJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_applyJoker';

// Data_Functor_Joker_bindJoker
function Data_Functor_Joker_bindJoker($dictBind) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_bindJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Joker_applyJoker = ($GLOBALS['Data_Functor_Joker_applyJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_applyJoker'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Joker_composeFlipped = ($GLOBALS['Data_Functor_Joker_composeFlipped'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_composeFlipped'));
  $__global_Data_Functor_Joker_un = ($GLOBALS['Data_Functor_Joker_un'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_un'));
  $__global_Data_Functor_Joker_Joker = ($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker'));
  $bind = ($dictBind)->bind;
  $applyJoker1 = ($__global_Data_Functor_Joker_applyJoker)((($dictBind)->Apply0)($__global_Prim_undefined));
  $__res = (object)["bind" => (function() use ($bind, $__global_Data_Functor_Joker_composeFlipped, $__global_Data_Functor_Joker_un, $__global_Data_Functor_Joker_Joker, &$__fn) {
  $__fn = function($v, $amb = null) use ($bind, $__global_Data_Functor_Joker_composeFlipped, $__global_Data_Functor_Joker_un, $__global_Data_Functor_Joker_Joker, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($amb) use ($v, &$__fn) { return $__fn($v, $amb); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $amb;
  if (true) {
$ma = $__case_0;
$amb1 = $__case_1;
$__res = ($bind)($ma, ($__global_Data_Functor_Joker_composeFlipped)($amb1, ($__global_Data_Functor_Joker_un)($__global_Data_Functor_Joker_Joker)));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($applyJoker1) {
  $__num = func_num_args();
  $__res = $applyJoker1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_bindJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_bindJoker';

// Data_Functor_Joker_applicativeJoker
function Data_Functor_Joker_applicativeJoker($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_applicativeJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Joker_applyJoker = ($GLOBALS['Data_Functor_Joker_applyJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_applyJoker'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Joker_compose = ($GLOBALS['Data_Functor_Joker_compose'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_compose'));
  $__global_Data_Functor_Joker_Joker = ($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker'));
  $applyJoker1 = ($__global_Data_Functor_Joker_applyJoker)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $__res = (object)["pure" => ($__global_Data_Functor_Joker_compose)($__global_Data_Functor_Joker_Joker, ($dictApplicative)->pure), "Apply0" => function($__dollar____unused) use ($applyJoker1) {
  $__num = func_num_args();
  $__res = $applyJoker1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_applicativeJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_applicativeJoker';

// Data_Functor_Joker_monadJoker
function Data_Functor_Joker_monadJoker($dictMonad) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Joker_monadJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Joker_applicativeJoker = ($GLOBALS['Data_Functor_Joker_applicativeJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_applicativeJoker'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Joker_bindJoker = ($GLOBALS['Data_Functor_Joker_bindJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_bindJoker'));
  $applicativeJoker1 = ($__global_Data_Functor_Joker_applicativeJoker)((($dictMonad)->Applicative0)($__global_Prim_undefined));
  $bindJoker1 = ($__global_Data_Functor_Joker_bindJoker)((($dictMonad)->Bind1)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeJoker1) {
  $__num = func_num_args();
  $__res = $applicativeJoker1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) use ($bindJoker1) {
  $__num = func_num_args();
  $__res = $bindJoker1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Joker_monadJoker'] = __NAMESPACE__ . '\\Data_Functor_Joker_monadJoker';

