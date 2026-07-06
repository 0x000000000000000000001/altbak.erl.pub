<?php

namespace Effect\Aff;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';

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
      case 'Effect_Aff_bind': $v = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE')); break;
      case 'Effect_Aff_discard': $v = ((($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'Effect_Aff_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'Effect_Aff_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Effect_Aff_void': $v = \Data\Functor\Data_Functor_void(($GLOBALS['Effect_functorEffect'] ?? \Effect\phpurs_eval_thunk('Effect_functorEffect'))); break;
      case 'Effect_Aff_functorAff': $v = (object)["map" => ($GLOBALS['Effect_Aff__map'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__map'))]; break;
      case 'Effect_Aff_ffiUtil': $v = (function() use (&$__fn) {
$unsafeFromRight = function($v) {
  $__num = func_num_args();
  $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Right":
$a = ($__case_0)->v0;
$__res = $a;
goto __end;;
break;
case "Left":
$__res = ($__global_Partial_Unsafe_unsafeCrashWith)("unsafeFromRight: Left");
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$unsafeFromLeft = function($v) {
  $__num = func_num_args();
  $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
$__res = $a;
goto __end;;
break;
case "Right":
$__res = ($__global_Partial_Unsafe_unsafeCrashWith)("unsafeFromLeft: Right");
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$isLeft = function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Left":
$__res = true;
goto __end;;
break;
case "Right":
$__res = false;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
return (object)["isLeft" => $isLeft, "fromLeft" => $unsafeFromLeft, "fromRight" => $unsafeFromRight, "left" => function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "right" => function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
})(); break;
      case 'Effect_Aff_launchAff_': $v = (($GLOBALS['Effect_Aff_compose'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_compose')))(($GLOBALS['Effect_Aff_void'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_void')), "\\Effect\\Aff\\Effect_Aff_launchAff"); break;
      case 'Effect_Aff_monadAff': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_applicativeAff = ($GLOBALS['Effect_Aff_applicativeAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applicativeAff'));
  $__res = $__global_Effect_Aff_applicativeAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_bindAff = ($GLOBALS['Effect_Aff_bindAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_bindAff'));
  $__res = $__global_Effect_Aff_bindAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Effect_Aff_bindAff': $v = (object)["bind" => ($GLOBALS['Effect_Aff__bind'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__bind')), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_applyAff = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
  $__res = $__global_Effect_Aff_applyAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Effect_Aff_applicativeAff': $v = (object)["pure" => ($GLOBALS['Effect_Aff__pure'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__pure')), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_applyAff = ($GLOBALS['Effect_Aff_applyAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_applyAff'));
  $__res = $__global_Effect_Aff_applyAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Effect_Aff_applyAff': $v = (object)["apply" => \Control\Monad\Control_Monad_ap(($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'))), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_functorAff = ($GLOBALS['Effect_Aff_functorAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_functorAff'));
  $__res = $__global_Effect_Aff_functorAff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Effect_Aff_monadEffectAff': $v = (object)["liftEffect" => ($GLOBALS['Effect_Aff__liftEffect'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__liftEffect')), "Monad0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_Aff_monadAff = ($GLOBALS['Effect_Aff_monadAff'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_monadAff'));
  $__res = $__global_Effect_Aff_monadAff;
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
$Effect_Aff__pure = function($x) { return function() use(&$x) { return $x; }; };
$Effect_Aff__map = function($f, $aff = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__map;
            return $Effect_Aff__map(...array_merge($__args, $more));
        };
    }
    return function() use(&$f, &$aff) { return $f($aff()); };
};
$Effect_Aff__bind = function($aff, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__bind;
            return $Effect_Aff__bind(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff, &$f) { return $f($aff())(); };
};
$Effect_Aff__liftEffect = function($eff) { return $eff; };
$Effect_Aff__makeFiber = function($util, $aff) { return function() use(&$aff) { $fiber = new \Fiber($aff); $fiber->start(); return (object)['run' => function() {}, 'join' => function($k) { return function() { return function(){}; }; }]; }; };
$Effect_Aff__fork = function($immediate, $aff = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__fork;
            return $Effect_Aff__fork(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff) { $fiber = new \Fiber($aff); \Revolt\EventLoop::queue(function() use(&$fiber) { $fiber->start(); }); return (object)['run' => function() {}, 'join' => function($k){ return function(){ return function(){}; }; }]; };
};
$Effect_Aff__delay = function($right, $ms) { return function() use(&$right, &$ms) { $fiber = \Fiber::getCurrent(); \Revolt\EventLoop::delay($ms / 1000, function() use(&$fiber, &$right) { if ($fiber) $fiber->resume(); }); if ($fiber) \Fiber::suspend(); return $right(null); }; };
$Effect_Aff__makeSupervisedFiber = $Effect_Aff__makeFiber;
$Effect_Aff__killAll = function($err, $sup, $cb) { return function() { return function(){}; }; };
$Effect_Aff_makeAff = function($k) { return function() use(&$k) { return $k(function($res){ return function(){}; })(); }; };
$Effect_Aff__throwError = function($err) { return function() use(&$err) { throw $err; }; };
$Effect_Aff__catchError = function($aff, $f = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__catchError;
            return $Effect_Aff__catchError(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff, &$f) { try { return $aff(); } catch (\Throwable $e) { return $f($e)(); } };
};
$Effect_Aff_generalBracket = function($acq) { return function($cond) { return function($use) use(&$acq) { return function() use(&$acq, &$use) { $res = $acq(); return $use($res)(); }; }; }; };
$Effect_Aff__parAffMap = $Effect_Aff__map;
$Effect_Aff__parAffApply = function($aff1, $aff2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__parAffApply;
            return $Effect_Aff__parAffApply(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff1, &$aff2) { return $aff1()($aff2()); };
};
$Effect_Aff__sequential = function($aff) { return $aff; };
$Effect_Aff__parAffAlt = function($aff1, $aff2 = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Effect_Aff__parAffAlt;
            return $Effect_Aff__parAffAlt(...array_merge($__args, $more));
        };
    }
    return function() use(&$aff1, &$aff2) { try { return $aff1(); } catch (\Throwable $e) { return $aff2(); } };
};






// Effect_Aff_FFIUtil
function Effect_Aff_FFIUtil($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_FFIUtil';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_FFIUtil'] = __NAMESPACE__ . '\\Effect_Aff_FFIUtil';



// Effect_Aff_makeFiber
function Effect_Aff_makeFiber($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_makeFiber';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Effect_Aff__makeFiber = ($GLOBALS['Effect_Aff__makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__makeFiber'));
  $__global_Effect_Aff_ffiUtil = ($GLOBALS['Effect_Aff_ffiUtil'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_ffiUtil'));
  $__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Effect_Aff__makeFiber, $__global_Effect_Aff_ffiUtil, $aff);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_makeFiber'] = __NAMESPACE__ . '\\Effect_Aff_makeFiber';

// Effect_Aff_launchAff
function Effect_Aff_launchAff($aff) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_launchAff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Effect_bindE = ($GLOBALS['Effect_bindE'] ?? \Effect\phpurs_eval_thunk('Effect_bindE'));
  $__global_Effect_Aff_makeFiber = ($GLOBALS['Effect_Aff_makeFiber'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_makeFiber'));
  $__global_Effect_Aff_discard = ($GLOBALS['Effect_Aff_discard'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff_discard'));
  $__global_Effect_pureE = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE'));
  $__res = ($__global_Effect_bindE)(($__global_Effect_Aff_makeFiber)($aff), function($fiber) use ($__global_Effect_Aff_discard, $__global_Effect_pureE) {
  $__num = func_num_args();
  $__case_0 = $fiber;
  $__case_res_0 = null;
  if (true) {
$f = $__case_0;
$__case_res_0 = ($f)->run;
} else {
throw new \Exception("Pattern match failure");
};
  $__res = ($__global_Effect_Aff_discard)($__case_res_0, function($__dollar____unused) use ($__global_Effect_pureE, $fiber) {
  $__num = func_num_args();
  $__res = ($__global_Effect_pureE)($fiber);
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
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_launchAff'] = __NAMESPACE__ . '\\Effect_Aff_launchAff';


// Effect_Aff_delay
function Effect_Aff_delay($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Effect_Aff_delay';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Effect_Aff__delay = ($GLOBALS['Effect_Aff__delay'] ?? \Effect\Aff\phpurs_eval_thunk('Effect_Aff__delay'));
  $__case_0 = $v;
  if (true) {
$n = $__case_0;
$__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Effect_Aff__delay, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $n);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Effect_Aff_delay'] = __NAMESPACE__ . '\\Effect_Aff_delay';






