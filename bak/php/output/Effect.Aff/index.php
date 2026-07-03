<?php

namespace Effect\Aff;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Global/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Aff/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
require_once __DIR__ . '/../Effect.Unsafe/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Unsafe.Coerce/index.php';

if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}





$Effect_Aff__pure = function($x) { return function() use(&$x) { return $x; }; };
$Effect_Aff__map = phpurs_uncurry2(function($f) { return function($aff) use(&$f) { return function() use(&$f, &$aff) { return $f($aff()); }; }; });
$Effect_Aff__bind = phpurs_uncurry2(function($aff) { return function($f) use(&$aff) { return function() use(&$aff, &$f) { return $f($aff())(); }; }; });
$Effect_Aff__liftEffect = function($eff) { return $eff; };
$Effect_Aff__makeFiber = function($util, $aff) { return function() use(&$aff) { $fiber = new \Fiber($aff); $fiber->start(); return (object)['run' => function() {}, 'join' => function($k) { return function() { return function(){}; }; }]; }; };
$Effect_Aff__fork = phpurs_uncurry2(function($immediate) { return function($aff) use(&$immediate) { return function() use(&$aff) { $fiber = new \Fiber($aff); \Revolt\EventLoop::queue(function() use(&$fiber) { $fiber->start(); }); return (object)['run' => function() {}, 'join' => function($k){ return function(){ return function(){}; }; }]; }; }; });
$Effect_Aff__delay = function($right, $ms) { return function() use(&$right, &$ms) { $fiber = \Fiber::getCurrent(); \Revolt\EventLoop::delay($ms / 1000, function() use(&$fiber, &$right) { if ($fiber) $fiber->resume(); }); if ($fiber) \Fiber::suspend(); return $right(null); }; };
$Effect_Aff__makeSupervisedFiber = $Effect_Aff__makeFiber;
$Effect_Aff__killAll = function($err, $sup, $cb) { return function() { return function(){}; }; };
$Effect_Aff_makeAff = function($k) { return function() use(&$k) { return $k(function($res){ return function(){}; })(); }; };
$Effect_Aff__throwError = function($err) { return function() use(&$err) { throw $err; }; };
$Effect_Aff__catchError = phpurs_uncurry2(function($aff) { return function($f) use(&$aff) { return function() use(&$aff, &$f) { try { return $aff(); } catch (\Throwable $e) { return $f($e)(); } }; }; });
$Effect_Aff_generalBracket = function($acq) { return function($cond) { return function($use) use(&$acq) { return function() use(&$acq, &$use) { $res = $acq(); return $use($res)(); }; }; }; };
$Effect_Aff__parAffMap = $Effect_Aff__map;
$Effect_Aff__parAffApply = phpurs_uncurry2(function($aff1) { return function($aff2) use(&$aff1) { return function() use(&$aff1, &$aff2) { return $aff1()($aff2()); }; }; });
$Effect_Aff__sequential = function($aff) { return $aff; };
$Effect_Aff__parAffAlt = phpurs_uncurry2(function($aff1) { return function($aff2) use(&$aff1) { return function() use(&$aff1, &$aff2) { try { return $aff1(); } catch (\Throwable $e) { return $aff2(); } }; }; });

// Effect_Aff_bind
$Effect_Aff_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Effect_bindEffect']);

// Effect_Aff_discard
$Effect_Aff_discard = ($GLOBALS['Control_Bind_discard'])($GLOBALS['Control_Bind_discardUnit'], $GLOBALS['Effect_bindEffect']);

// Effect_Aff_pure
$Effect_Aff_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Effect_applicativeEffect']);

// Effect_Aff_compose
$Effect_Aff_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Effect_Aff_void
$Effect_Aff_void = ($GLOBALS['Data_Functor_void'])($GLOBALS['Effect_functorEffect']);

// Effect_Aff_map
$Effect_Aff_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Effect_functorEffect']);

// Effect_Aff_pure1
$Effect_Aff_pure1 = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_Either_applicativeEither']);

// Effect_Aff_composeFlipped
$Effect_Aff_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Effect_Aff_Fiber
$Effect_Aff_Fiber = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_FFIUtil
$Effect_Aff_FFIUtil = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_Canceler
$Effect_Aff_Canceler = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_suspendAff
$Effect_Aff_suspendAff = ($GLOBALS['Effect_Aff__fork'])(false);

// Effect_Aff_newtypeCanceler
$Effect_Aff_newtypeCanceler = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_functorParAff
$Effect_Aff_functorParAff = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => $GLOBALS['Effect_Aff__parAffMap']]);

// Effect_Aff_functorAff
$Effect_Aff_functorAff = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => $GLOBALS['Effect_Aff__map']]);

// Effect_Aff_map1
$Effect_Aff_map1 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Effect_Aff_functorAff']);

// Effect_Aff_forkAff
$Effect_Aff_forkAff = ($GLOBALS['Effect_Aff__fork'])(true);

// Effect_Aff_ffiUtil
$Effect_Aff_ffiUtil = ($unsafeFromRight = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Right")) {
$a = ($__case_0)->values[0];
return $a;
} else {
if ((($__case_0)->tag === "Left")) {
return ($GLOBALS['Partial_Unsafe_unsafeCrashWith'])("unsafeFromRight: Left");
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$unsafeFromLeft = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$a = ($__case_0)->values[0];
return $a;
} else {
if ((($__case_0)->tag === "Right")) {
return ($GLOBALS['Partial_Unsafe_unsafeCrashWith'])("unsafeFromLeft: Right");
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$isLeft = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
return true;
} else {
if ((($__case_0)->tag === "Right")) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Effect_Aff_FFIUtil'])((object)["isLeft" => $isLeft, "fromLeft" => $unsafeFromLeft, "fromRight" => $unsafeFromRight, "left" => $GLOBALS['Data_Either_Left'], "right" => $GLOBALS['Data_Either_Right']]);)();

// Effect_Aff_makeFiber
$Effect_Aff_makeFiber = (function() {
  $__fn = function($aff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Effect_Aff__makeFiber'], $GLOBALS['Effect_Aff_ffiUtil'], $aff);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_launchAff
$Effect_Aff_launchAff = (function() {
  $__fn = function($aff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_bind'])(($GLOBALS['Effect_Aff_makeFiber'])($aff), (function() {
  $__fn = function($fiber) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$__case_0 = $fiber;
$__case_res_0 = null;
if (true) {
$f = $__case_0;
$__case_res_0 = ($f)->run;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($GLOBALS['Effect_Aff_discard'])($__case_res_0, (function() use ($fiber) {
  $__fn = function($__dollar____unused) use ($fiber, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_pure'])($fiber);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_launchAff_
$Effect_Aff_launchAff_ = ($GLOBALS['Effect_Aff_compose'])($GLOBALS['Effect_Aff_void'], $GLOBALS['Effect_Aff_launchAff']);

// Effect_Aff_launchSuspendedAff
$Effect_Aff_launchSuspendedAff = $GLOBALS['Effect_Aff_makeFiber'];

// Effect_Aff_delay
$Effect_Aff_delay = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Effect_Aff__delay'], $GLOBALS['Data_Either_Right'], $n);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_bracket
$Effect_Aff_bracket = (function() {
  $__fn = function($acquire, $completed = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Aff_generalBracket'])($acquire, (object)["killed" => ($GLOBALS['Data_Function_const'])($completed), "failed" => ($GLOBALS['Data_Function_const'])($completed), "completed" => ($GLOBALS['Data_Function_const'])($completed)]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_applyParAff
$Effect_Aff_applyParAff = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => $GLOBALS['Effect_Aff__parAffApply'], "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_functorParAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_lift2
$Effect_Aff_lift2 = ($GLOBALS['Control_Apply_lift2'])($GLOBALS['Effect_Aff_applyParAff']);

// Effect_Aff_semigroupParAff
$Effect_Aff_semigroupParAff = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => ($GLOBALS['Effect_Aff_lift2'])(($GLOBALS['Data_Semigroup_append'])($dictSemigroup))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_monadAff
$Effect_Aff_monadAff = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_applicativeAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_bindAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_bindAff
$Effect_Aff_bindAff = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => $GLOBALS['Effect_Aff__bind'], "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_applyAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_applicativeAff
$Effect_Aff_applicativeAff = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => $GLOBALS['Effect_Aff__pure'], "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_applyAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_applyAff
$Effect_Aff_applyAff = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => ($GLOBALS['Control_Monad_ap'])($GLOBALS['Effect_Aff_monadAff']), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_functorAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_pure2
$Effect_Aff_pure2 = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Effect_Aff_applicativeAff']);

// Effect_Aff_bind1
$Effect_Aff_bind1 = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Effect_Aff_bindAff']);

// Effect_Aff_lift21
$Effect_Aff_lift21 = ($GLOBALS['Control_Apply_lift2'])($GLOBALS['Effect_Aff_applyAff']);

// Effect_Aff_apply
$Effect_Aff_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Effect_Aff_applyAff']);

// Effect_Aff_bindFlipped
$Effect_Aff_bindFlipped = ($GLOBALS['Control_Bind_bindFlipped'])($GLOBALS['Effect_Aff_bindAff']);

// Effect_Aff_cancelWith
$Effect_Aff_cancelWith = (function() {
  $__body = function($aff, $v) {
    $__case_0 = $aff;
    $__case_1 = $v;
    if (true) {
$aff1 = $__case_0;
$cancel = $__case_1;
return ($GLOBALS['Effect_Aff_generalBracket'])(($GLOBALS['Effect_Aff_pure2'])($GLOBALS['Data_Unit_unit']), (object)["killed" => (function() use ($cancel) {
  $__fn = function($e, $v1 = null) use ($cancel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($cancel)($e);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "failed" => ($GLOBALS['Data_Function_const'])($GLOBALS['Effect_Aff_pure2']), "completed" => ($GLOBALS['Data_Function_const'])($GLOBALS['Effect_Aff_pure2'])], ($GLOBALS['Data_Function_const'])($aff1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($aff, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($aff, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_finally
$Effect_Aff_finally = (function() {
  $__fn = function($fin, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Aff_bracket'])(($GLOBALS['Effect_Aff_pure2'])($GLOBALS['Data_Unit_unit']), ($GLOBALS['Data_Function_const'])($fin), ($GLOBALS['Data_Function_const'])($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_invincible
$Effect_Aff_invincible = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_bracket'])($a, ($GLOBALS['Data_Function_const'])(($GLOBALS['Effect_Aff_pure2'])($GLOBALS['Data_Unit_unit'])), $GLOBALS['Effect_Aff_pure2']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_lazyAff
$Effect_Aff_lazyAff = ($GLOBALS['Control_Lazy_Lazy__dollar__Dict'])((object)["defer" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_bind1'])(($GLOBALS['Effect_Aff_pure2'])($GLOBALS['Data_Unit_unit']), $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_parallelAff
$Effect_Aff_parallelAff = ($GLOBALS['Control_Parallel_Class_Parallel__dollar__Dict'])((object)["parallel" => $GLOBALS['Unsafe_Coerce_unsafeCoerce'], "sequential" => $GLOBALS['Effect_Aff__sequential'], "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_applyAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_applyParAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_parallel
$Effect_Aff_parallel = ($GLOBALS['Control_Parallel_Class_parallel'])($GLOBALS['Effect_Aff_parallelAff']);

// Effect_Aff_applicativeParAff
$Effect_Aff_applicativeParAff = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => ($GLOBALS['Effect_Aff_compose'])($GLOBALS['Effect_Aff_parallel'], $GLOBALS['Effect_Aff_pure2']), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_applyParAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_pure3
$Effect_Aff_pure3 = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Effect_Aff_applicativeParAff']);

// Effect_Aff_parSequence_
$Effect_Aff_parSequence_ = ($GLOBALS['Control_Parallel_parSequence_'])($GLOBALS['Effect_Aff_parallelAff'], $GLOBALS['Effect_Aff_applicativeParAff'], $GLOBALS['Data_Foldable_foldableArray']);

// Effect_Aff_monoidParAff
$Effect_Aff_monoidParAff = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupParAff1 = ($GLOBALS['Effect_Aff_semigroupParAff'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Effect_Aff_pure3'])(($GLOBALS['Data_Monoid_mempty'])($dictMonoid)), "Semigroup0" => (function() use ($semigroupParAff1) {
  $__fn = function($__dollar____unused) use ($semigroupParAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupParAff1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_semigroupCanceler
$Effect_Aff_semigroupCanceler = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$c1 = $__case_0;
$c2 = $__case_1;
return ($GLOBALS['Effect_Aff_Canceler'])((function() use ($c1, $c2) {
  $__fn = function($err) use ($c1, $c2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_parSequence_'])([($c1)($err), ($c2)($err)]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_semigroupAff
$Effect_Aff_semigroupAff = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => ($GLOBALS['Effect_Aff_lift21'])(($GLOBALS['Data_Semigroup_append'])($dictSemigroup))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_monadEffectAff
$Effect_Aff_monadEffectAff = ($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'])((object)["liftEffect" => $GLOBALS['Effect_Aff__liftEffect'], "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_monadAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_liftEffect
$Effect_Aff_liftEffect = ($GLOBALS['Effect_Class_liftEffect'])($GLOBALS['Effect_Aff_monadEffectAff']);

// Effect_Aff_effectCanceler
$Effect_Aff_effectCanceler = ($GLOBALS['Effect_Aff_compose'])($GLOBALS['Effect_Aff_Canceler'], ($GLOBALS['Effect_Aff_compose'])($GLOBALS['Data_Function_const'], $GLOBALS['Effect_Aff_liftEffect']));

// Effect_Aff_joinFiber
$Effect_Aff_joinFiber = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$t = $__case_0;
return ($GLOBALS['Effect_Aff_makeAff'])((function() use ($t) {
  $__fn = function($k) use ($t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_map'])($GLOBALS['Effect_Aff_effectCanceler'], (($t)->join)($k));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_functorFiber
$Effect_Aff_functorFiber = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__fn = function($f, $t = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Unsafe_unsafePerformEffect'])(($GLOBALS['Effect_Aff_makeFiber'])(($GLOBALS['Effect_Aff_map1'])($f, ($GLOBALS['Effect_Aff_joinFiber'])($t))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_applyFiber
$Effect_Aff_applyFiber = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() {
  $__fn = function($t1, $t2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Unsafe_unsafePerformEffect'])(($GLOBALS['Effect_Aff_makeFiber'])(($GLOBALS['Effect_Aff_apply'])(($GLOBALS['Effect_Aff_joinFiber'])($t1), ($GLOBALS['Effect_Aff_joinFiber'])($t2))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_functorFiber'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_applicativeFiber
$Effect_Aff_applicativeFiber = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Unsafe_unsafePerformEffect'])(($GLOBALS['Effect_Aff_makeFiber'])(($GLOBALS['Effect_Aff_pure2'])($a)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_applyFiber'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_killFiber
$Effect_Aff_killFiber = (function() {
  $__body = function($e, $v) {
    $__case_0 = $e;
    $__case_1 = $v;
    if (true) {
$e1 = $__case_0;
$t = $__case_1;
return ($GLOBALS['Effect_Aff_bind1'])(($GLOBALS['Effect_Aff_liftEffect'])(($t)->isSuspended), (function() use ($t, $e1) {
  $__body = function($suspended) use ($t, $e1) {
    $__case_0 = $suspended;
    if (($__case_0 === true)) {
return ($GLOBALS['Effect_Aff_liftEffect'])(($GLOBALS['Effect_Aff_void'])(($GLOBALS['Data_Function_Uncurried_runFn2'])(($t)->kill, $e1, ($GLOBALS['Data_Function_const'])(($GLOBALS['Effect_Aff_pure'])($GLOBALS['Data_Unit_unit'])))));
} else {
if (true) {
return ($GLOBALS['Effect_Aff_makeAff'])((function() use ($t, $e1) {
  $__fn = function($k) use ($t, $e1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_map'])($GLOBALS['Effect_Aff_effectCanceler'], ($GLOBALS['Data_Function_Uncurried_runFn2'])(($t)->kill, $e1, $k));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($suspended) use ($t, $e1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($suspended);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($e, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($e, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_fiberCanceler
$Effect_Aff_fiberCanceler = ($GLOBALS['Effect_Aff_compose'])($GLOBALS['Effect_Aff_Canceler'], ($GLOBALS['Data_Function_flip'])($GLOBALS['Effect_Aff_killFiber']));

// Effect_Aff_supervise
$Effect_Aff_supervise = (function() {
  $__fn = function($aff) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$killError = ($GLOBALS['Effect_Exception_error'])("[Aff] Child fiber outlived parent");
$killAll = (function() {
  $__fn = function($err, $sup = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Aff_makeAff'])((function() use ($err, $sup) {
  $__fn = function($k) use ($err, $sup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Function_Uncurried_runFn3'])($GLOBALS['Effect_Aff__killAll'], $err, ($sup)->supervisor, ($k)(($GLOBALS['Effect_Aff_pure1'])($GLOBALS['Data_Unit_unit'])));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$acquire = ($GLOBALS['Effect_Aff_bind'])(($GLOBALS['Data_Function_Uncurried_runFn2'])($GLOBALS['Effect_Aff__makeSupervisedFiber'], $GLOBALS['Effect_Aff_ffiUtil'], $aff), (function() {
  $__fn = function($sup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$__case_0 = ($sup)->fiber;
$__case_res_0 = null;
if (true) {
$f = $__case_0;
$__case_res_0 = ($f)->run;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($GLOBALS['Effect_Aff_discard'])($__case_res_0, (function() use ($sup) {
  $__fn = function($__dollar____unused) use ($sup, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_pure'])($sup);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
    $__res = ($GLOBALS['Effect_Aff_generalBracket'])(($GLOBALS['Effect_Aff_liftEffect'])($acquire), (object)["killed" => (function() use ($killAll) {
  $__fn = function($err, $sup = null) use ($killAll, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Aff_parSequence_'])([($GLOBALS['Effect_Aff_killFiber'])($err, ($sup)->fiber), ($killAll)($err, $sup)]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "failed" => ($GLOBALS['Data_Function_const'])(($killAll)($killError)), "completed" => ($GLOBALS['Data_Function_const'])(($killAll)($killError))], ($GLOBALS['Effect_Aff_compose'])($GLOBALS['Effect_Aff_joinFiber'], (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($v)->fiber;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_monadSTAff
$Effect_Aff_monadSTAff = ($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'])((object)["liftST" => ($GLOBALS['Effect_Aff_composeFlipped'])(($GLOBALS['Control_Monad_ST_Class_liftST'])($GLOBALS['Control_Monad_ST_Class_monadSTEffect']), $GLOBALS['Effect_Aff_liftEffect']), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_monadAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_monadThrowAff
$Effect_Aff_monadThrowAff = ($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'])((object)["throwError" => $GLOBALS['Effect_Aff__throwError'], "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_monadAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_monadErrorAff
$Effect_Aff_monadErrorAff = ($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'])((object)["catchError" => $GLOBALS['Effect_Aff__catchError'], "MonadThrow0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_monadThrowAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_try
$Effect_Aff_try = ($GLOBALS['Control_Monad_Error_Class_try'])($GLOBALS['Effect_Aff_monadErrorAff']);

// Effect_Aff_catchError
$Effect_Aff_catchError = ($GLOBALS['Control_Monad_Error_Class_catchError'])($GLOBALS['Effect_Aff_monadErrorAff']);

// Effect_Aff_attempt
$Effect_Aff_attempt = $GLOBALS['Effect_Aff_try'];

// Effect_Aff_runAff
$Effect_Aff_runAff = (function() {
  $__fn = function($k, $aff = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Aff_launchAff'])(($GLOBALS['Effect_Aff_bindFlipped'])(($GLOBALS['Effect_Aff_compose'])($GLOBALS['Effect_Aff_liftEffect'], $k), ($GLOBALS['Effect_Aff_try'])($aff)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_runAff_
$Effect_Aff_runAff_ = (function() {
  $__fn = function($k, $aff = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Aff_void'])(($GLOBALS['Effect_Aff_runAff'])($k, $aff));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_runSuspendedAff
$Effect_Aff_runSuspendedAff = (function() {
  $__fn = function($k, $aff = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Aff_launchSuspendedAff'])(($GLOBALS['Effect_Aff_bindFlipped'])(($GLOBALS['Effect_Aff_compose'])($GLOBALS['Effect_Aff_liftEffect'], $k), ($GLOBALS['Effect_Aff_try'])($aff)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_monadRecAff
$Effect_Aff_monadRecAff = ($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'])((object)["tailRecM" => (function() {
  $__fn = function($k) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($k, &$go) {
  $__fn = function($a) use ($k, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
return ($GLOBALS['Effect_Aff_bind1'])(($k)($a), (function() use (&$go) {
  $__body = function($res) use (&$go) {
    $__case_0 = $res;
    if ((($__case_0)->tag === "Done")) {
$r = ($__case_0)->values[0];
return ($GLOBALS['Effect_Aff_pure2'])($r);
} else {
if ((($__case_0)->tag === "Loop")) {
$b = ($__case_0)->values[0];
return ($go)($b);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($res) use (&$go, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($res);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = $go;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_monadAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_monoidAff
$Effect_Aff_monoidAff = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupAff1 = ($GLOBALS['Effect_Aff_semigroupAff'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Effect_Aff_pure2'])(($GLOBALS['Data_Monoid_mempty'])($dictMonoid)), "Semigroup0" => (function() use ($semigroupAff1) {
  $__fn = function($__dollar____unused) use ($semigroupAff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupAff1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Effect_Aff_nonCanceler
$Effect_Aff_nonCanceler = ($GLOBALS['Effect_Aff_Canceler'])(($GLOBALS['Data_Function_const'])(($GLOBALS['Effect_Aff_pure2'])($GLOBALS['Data_Unit_unit'])));

// Effect_Aff_monoidCanceler
$Effect_Aff_monoidCanceler = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => $GLOBALS['Effect_Aff_nonCanceler'], "Semigroup0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_semigroupCanceler'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_mempty
$Effect_Aff_mempty = ($GLOBALS['Data_Monoid_mempty'])($GLOBALS['Effect_Aff_monoidCanceler']);

// Effect_Aff_never
$Effect_Aff_never = ($GLOBALS['Effect_Aff_makeAff'])((function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Effect_Aff_pure'])($GLOBALS['Effect_Aff_mempty']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());

// Effect_Aff_apathize
$Effect_Aff_apathize = ($GLOBALS['Effect_Aff_composeFlipped'])($GLOBALS['Effect_Aff_attempt'], ($GLOBALS['Effect_Aff_map1'])(($GLOBALS['Data_Function_const'])($GLOBALS['Data_Unit_unit'])));

// Effect_Aff_altParAff
$Effect_Aff_altParAff = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => $GLOBALS['Effect_Aff__parAffAlt'], "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_functorParAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_altAff
$Effect_Aff_altAff = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => (function() {
  $__fn = function($a1, $a2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Effect_Aff_catchError'])($a1, ($GLOBALS['Data_Function_const'])($a2));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_functorAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_plusAff
$Effect_Aff_plusAff = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => ($GLOBALS['Control_Monad_Error_Class_throwError'])($GLOBALS['Effect_Aff_monadThrowAff'], ($GLOBALS['Effect_Exception_error'])("Always fails")), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_altAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_plusParAff
$Effect_Aff_plusParAff = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => ($GLOBALS['Effect_Aff_parallel'])(($GLOBALS['Control_Plus_empty'])($GLOBALS['Effect_Aff_plusAff'])), "Alt0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_altParAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Effect_Aff_alternativeParAff
$Effect_Aff_alternativeParAff = ($GLOBALS['Control_Alternative_Alternative__dollar__Dict'])((object)["Applicative0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_applicativeParAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_Aff_plusParAff'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

