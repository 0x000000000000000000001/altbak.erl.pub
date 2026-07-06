<?php

namespace Data\Functor\Compose;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
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
      case 'Data_Functor_Compose_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Functor_Compose_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Functor_Compose_newtypeCompose': $v = (object)["Coercible0" => function($__dollar____unused) {
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




// Data_Functor_Compose_Compose
function Data_Functor_Compose_Compose($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_Compose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_Compose'] = __NAMESPACE__ . '\\Data_Functor_Compose_Compose';

// Data_Functor_Compose_showCompose
function Data_Functor_Compose_showCompose($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_showCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($v) use ($show) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$fga = $__case_0;
$__res = ("(Compose " . (($show)($fga) . ")"));
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
$GLOBALS['Data_Functor_Compose_showCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_showCompose';


// Data_Functor_Compose_functorCompose
function Data_Functor_Compose_functorCompose($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_functorCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map = ($dictFunctor)->map;
  $__res = function($dictFunctor1) use ($map) {
  $__num = func_num_args();
  $map1 = ($dictFunctor1)->map;
  $__res = (object)["map" => (function() use ($map, $map1, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$fga = $__case_1;
$__res = ($map)(($map1)($f1), $fga);
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Functor_Compose_functorCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_functorCompose';

// Data_Functor_Compose_eqCompose
function Data_Functor_Compose_eqCompose($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_eqCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_App_eqApp = ($GLOBALS['Data_Functor_App_eqApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_eqApp'));
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $eq1 = ($dictEq1)->eq1;
  $__res = function($dictEq11) use ($__global_Data_Functor_App_eqApp, $eq1, $__global_Unsafe_Coerce_unsafeCoerce) {
  $__num = func_num_args();
  $eqApp = ($__global_Data_Functor_App_eqApp)($dictEq11);
  $__res = function($dictEq) use ($eq1, $eqApp, $__global_Unsafe_Coerce_unsafeCoerce) {
  $__num = func_num_args();
  $eq11 = ($eq1)(($eqApp)($dictEq));
  $__res = (object)["eq" => (function() use ($eq11, $__global_Unsafe_Coerce_unsafeCoerce, &$__fn) {
  $__fn = function($v, $v1 = null) use ($eq11, $__global_Unsafe_Coerce_unsafeCoerce, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$fga1 = $__case_0;
$fga2 = $__case_1;
$__res = ($eq11)(($__global_Unsafe_Coerce_unsafeCoerce)($fga1), ($__global_Unsafe_Coerce_unsafeCoerce)($fga2));
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
$GLOBALS['Data_Functor_Compose_eqCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_eqCompose';

// Data_Functor_Compose_ordCompose
function Data_Functor_Compose_ordCompose($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_ordCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_eqCompose = ($GLOBALS['Data_Functor_Compose_eqCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_eqCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_App_ordApp = ($GLOBALS['Data_Functor_App_ordApp'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_ordApp'));
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $compare1 = ($dictOrd1)->compare1;
  $eqCompose1 = ($__global_Data_Functor_Compose_eqCompose)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $__res = function($dictOrd11) use ($__global_Data_Functor_App_ordApp, $eqCompose1, $__global_Prim_undefined, $compare1, $__global_Unsafe_Coerce_unsafeCoerce) {
  $__num = func_num_args();
  $ordApp = ($__global_Data_Functor_App_ordApp)($dictOrd11);
  $eqCompose2 = ($eqCompose1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
  $__res = function($dictOrd) use ($compare1, $ordApp, $eqCompose2, $__global_Prim_undefined, $__global_Unsafe_Coerce_unsafeCoerce) {
  $__num = func_num_args();
  $compare11 = ($compare1)(($ordApp)($dictOrd));
  $eqCompose3 = ($eqCompose2)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare11, $__global_Unsafe_Coerce_unsafeCoerce, &$__fn) {
  $__fn = function($v, $v1 = null) use ($compare11, $__global_Unsafe_Coerce_unsafeCoerce, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$fga1 = $__case_0;
$fga2 = $__case_1;
$__res = ($compare11)(($__global_Unsafe_Coerce_unsafeCoerce)($fga1), ($__global_Unsafe_Coerce_unsafeCoerce)($fga2));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) use ($eqCompose3) {
  $__num = func_num_args();
  $__res = $eqCompose3;
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
$GLOBALS['Data_Functor_Compose_ordCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_ordCompose';

// Data_Functor_Compose_eq1Compose
function Data_Functor_Compose_eq1Compose($dictEq1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_eq1Compose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_eqCompose = ($GLOBALS['Data_Functor_Compose_eqCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_eqCompose'));
  $eqCompose1 = ($__global_Data_Functor_Compose_eqCompose)($dictEq1);
  $__res = function($dictEq11) use ($eqCompose1) {
  $__num = func_num_args();
  $eqCompose2 = ($eqCompose1)($dictEq11);
  $__res = (object)["eq1" => function($dictEq) use ($eqCompose2) {
  $__num = func_num_args();
  $__res = (($eqCompose2)($dictEq))->eq;
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
$GLOBALS['Data_Functor_Compose_eq1Compose'] = __NAMESPACE__ . '\\Data_Functor_Compose_eq1Compose';

// Data_Functor_Compose_ord1Compose
function Data_Functor_Compose_ord1Compose($dictOrd1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_ord1Compose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_ordCompose = ($GLOBALS['Data_Functor_Compose_ordCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_ordCompose'));
  $__global_Data_Functor_Compose_eq1Compose = ($GLOBALS['Data_Functor_Compose_eq1Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_eq1Compose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ordCompose1 = ($__global_Data_Functor_Compose_ordCompose)($dictOrd1);
  $eq1Compose1 = ($__global_Data_Functor_Compose_eq1Compose)((($dictOrd1)->Eq10)($__global_Prim_undefined));
  $__res = function($dictOrd11) use ($ordCompose1, $eq1Compose1, $__global_Prim_undefined) {
  $__num = func_num_args();
  $ordCompose2 = ($ordCompose1)($dictOrd11);
  $eq1Compose2 = ($eq1Compose1)((($dictOrd11)->Eq10)($__global_Prim_undefined));
  $__res = (object)["compare1" => function($dictOrd) use ($ordCompose2) {
  $__num = func_num_args();
  $__res = (($ordCompose2)($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Eq10" => function($__dollar____unused) use ($eq1Compose2) {
  $__num = func_num_args();
  $__res = $eq1Compose2;
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
$GLOBALS['Data_Functor_Compose_ord1Compose'] = __NAMESPACE__ . '\\Data_Functor_Compose_ord1Compose';

// Data_Functor_Compose_bihoistCompose
function Data_Functor_Compose_bihoistCompose($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_bihoistCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map = ($dictFunctor)->map;
  $__res = (function() use ($map, &$__fn) {
  $__fn = function($natF, $natG = null, $v = null) use ($map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($natF, $natG, &$__fn) { return $__fn($natF, $natG, $v); };
    if ($__num === 1) return function($natG, $v = null) use ($natF, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($natF, $natG, $v);
      if ($__num2 === 1) return function($v) use ($natF, $natG, &$__fn) { return $__fn($natF, $natG, $v); };
      return phpurs_curry_fallback($__fn, [$natF], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $natF;
  $__case_1 = $natG;
  $__case_2 = $v;
  if (true) {
$natF1 = $__case_0;
$natG1 = $__case_1;
$fga = $__case_2;
$__res = ($natF1)(($map)($natG1, $fga));
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
$GLOBALS['Data_Functor_Compose_bihoistCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_bihoistCompose';

// Data_Functor_Compose_applyCompose
function Data_Functor_Compose_applyCompose($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_applyCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Compose_functorCompose = ($GLOBALS['Data_Functor_Compose_functorCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_functorCompose'));
  $apply = ($dictApply)->apply;
  $Functor0 = (($dictApply)->Functor0)($__global_Prim_undefined);
  $map = ($Functor0)->map;
  $functorCompose1 = ($__global_Data_Functor_Compose_functorCompose)($Functor0);
  $__res = function($dictApply1) use ($functorCompose1, $__global_Prim_undefined, $apply, $map) {
  $__num = func_num_args();
  $apply1 = ($dictApply1)->apply;
  $functorCompose2 = ($functorCompose1)((($dictApply1)->Functor0)($__global_Prim_undefined));
  $__res = (object)["apply" => (function() use ($apply, $map, $apply1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($apply, $map, $apply1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$f = $__case_0;
$x = $__case_1;
$__res = ($apply)(($map)($apply1, $f), $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) use ($functorCompose2) {
  $__num = func_num_args();
  $__res = $functorCompose2;
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
$GLOBALS['Data_Functor_Compose_applyCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_applyCompose';

// Data_Functor_Compose_applicativeCompose
function Data_Functor_Compose_applicativeCompose($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_applicativeCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_applyCompose = ($GLOBALS['Data_Functor_Compose_applyCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_applyCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Compose_compose = ($GLOBALS['Data_Functor_Compose_compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_compose'));
  $__global_Data_Functor_Compose_Compose = ($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose'));
  $pure = ($dictApplicative)->pure;
  $applyCompose1 = ($__global_Data_Functor_Compose_applyCompose)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $__res = function($dictApplicative1) use ($applyCompose1, $__global_Prim_undefined, $__global_Data_Functor_Compose_compose, $__global_Data_Functor_Compose_Compose, $pure) {
  $__num = func_num_args();
  $applyCompose2 = ($applyCompose1)((($dictApplicative1)->Apply0)($__global_Prim_undefined));
  $__res = (object)["pure" => ($__global_Data_Functor_Compose_compose)($__global_Data_Functor_Compose_Compose, ($__global_Data_Functor_Compose_compose)($pure, ($dictApplicative1)->pure)), "Apply0" => function($__dollar____unused) use ($applyCompose2) {
  $__num = func_num_args();
  $__res = $applyCompose2;
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
$GLOBALS['Data_Functor_Compose_applicativeCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_applicativeCompose';

// Data_Functor_Compose_altCompose
function Data_Functor_Compose_altCompose($dictAlt) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_altCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_functorCompose = ($GLOBALS['Data_Functor_Compose_functorCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_functorCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $alt = ($dictAlt)->alt;
  $functorCompose1 = ($__global_Data_Functor_Compose_functorCompose)((($dictAlt)->Functor0)($__global_Prim_undefined));
  $__res = function($dictFunctor) use ($functorCompose1, $alt) {
  $__num = func_num_args();
  $functorCompose2 = ($functorCompose1)($dictFunctor);
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
$a = $__case_0;
$b = $__case_1;
$__res = ($alt)($a, $b);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) use ($functorCompose2) {
  $__num = func_num_args();
  $__res = $functorCompose2;
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
$GLOBALS['Data_Functor_Compose_altCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_altCompose';

// Data_Functor_Compose_plusCompose
function Data_Functor_Compose_plusCompose($dictPlus) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_plusCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_altCompose = ($GLOBALS['Data_Functor_Compose_altCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_altCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $empty = ($dictPlus)->empty;
  $altCompose1 = ($__global_Data_Functor_Compose_altCompose)((($dictPlus)->Alt0)($__global_Prim_undefined));
  $__res = function($dictFunctor) use ($altCompose1, $empty) {
  $__num = func_num_args();
  $altCompose2 = ($altCompose1)($dictFunctor);
  $__res = (object)["empty" => $empty, "Alt0" => function($__dollar____unused) use ($altCompose2) {
  $__num = func_num_args();
  $__res = $altCompose2;
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
$GLOBALS['Data_Functor_Compose_plusCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_plusCompose';

// Data_Functor_Compose_alternativeCompose
function Data_Functor_Compose_alternativeCompose($dictAlternative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Functor_Compose_alternativeCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_applicativeCompose = ($GLOBALS['Data_Functor_Compose_applicativeCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_applicativeCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_Compose_plusCompose = ($GLOBALS['Data_Functor_Compose_plusCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_plusCompose'));
  $applicativeCompose1 = ($__global_Data_Functor_Compose_applicativeCompose)((($dictAlternative)->Applicative0)($__global_Prim_undefined));
  $plusCompose1 = ($__global_Data_Functor_Compose_plusCompose)((($dictAlternative)->Plus1)($__global_Prim_undefined));
  $__res = function($dictApplicative) use ($applicativeCompose1, $plusCompose1, $__global_Prim_undefined) {
  $__num = func_num_args();
  $applicativeCompose2 = ($applicativeCompose1)($dictApplicative);
  $plusCompose2 = ($plusCompose1)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = (object)["Applicative0" => function($__dollar____unused) use ($applicativeCompose2) {
  $__num = func_num_args();
  $__res = $applicativeCompose2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) use ($plusCompose2) {
  $__num = func_num_args();
  $__res = $plusCompose2;
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
$GLOBALS['Data_Functor_Compose_alternativeCompose'] = __NAMESPACE__ . '\\Data_Functor_Compose_alternativeCompose';

