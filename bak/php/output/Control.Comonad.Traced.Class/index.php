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


// Control_Comonad_Traced_Class_compose
$Control_Comonad_Traced_Class_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Comonad_Traced_Class_composeFlipped
$Control_Comonad_Traced_Class_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Comonad_Traced_Class_ComonadTraced$Dict
$Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_track
$Control_Comonad_Traced_Class_track = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->track;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_tracks
$Control_Comonad_Traced_Class_tracks = (function() {
  $__fn = function($dictComonadTraced) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$track1 = ($GLOBALS['Control_Comonad_Traced_Class_track'])($dictComonadTraced);
$extract = ($GLOBALS['Control_Comonad_extract'])((($dictComonadTraced)->Comonad0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($track1, $extract) {
  $__fn = function($f, $w = null) use ($track1, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($track1)(($f)(($extract)($w)), $w);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_lowerTrack
$Control_Comonad_Traced_Class_lowerTrack = (function() {
  $__fn = function($dictComonadTrans) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lower = ($GLOBALS['Control_Comonad_Trans_Class_lower'])($dictComonadTrans);
    $__res = (function() use ($lower) {
  $__fn = function($dictComonadTraced) use ($lower, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$track1 = ($GLOBALS['Control_Comonad_Traced_Class_track'])($dictComonadTraced);
$lower1 = ($lower)((($dictComonadTraced)->Comonad0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($track1, $lower1) {
  $__fn = function($m) use ($track1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Comonad_Traced_Class_compose'])(($track1)($m), $lower1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_lowerTrack1
$Control_Comonad_Traced_Class_lowerTrack1 = ($GLOBALS['Control_Comonad_Traced_Class_lowerTrack'])($GLOBALS['Control_Comonad_Store_Trans_comonadTransStoreT']);

// Control_Comonad_Traced_Class_lowerTrack2
$Control_Comonad_Traced_Class_lowerTrack2 = ($GLOBALS['Control_Comonad_Traced_Class_lowerTrack'])($GLOBALS['Control_Comonad_Trans_Class_comonadTransIdentityT']);

// Control_Comonad_Traced_Class_lowerTrack3
$Control_Comonad_Traced_Class_lowerTrack3 = ($GLOBALS['Control_Comonad_Traced_Class_lowerTrack'])($GLOBALS['Control_Comonad_Env_Trans_comonadTransEnvT']);

// Control_Comonad_Traced_Class_listens
$Control_Comonad_Traced_Class_listens = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$tr = $__case_1;
return ($GLOBALS['Control_Comonad_Traced_Trans_TracedT'])(($map)((function() use ($f1) {
  $__fn = function($g, $t = null) use ($f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($g)($t), ($f1)($t));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $tr));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_listen
$Control_Comonad_Traced_Class_listen = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($v) use ($map) {
    $__case_0 = $v;
    if (true) {
$tr = $__case_0;
return ($GLOBALS['Control_Comonad_Traced_Trans_TracedT'])(($map)((function() {
  $__fn = function($f, $t = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($f)($t), $t);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $tr));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_comonadTracedTracedT
$Control_Comonad_Traced_Class_comonadTracedTracedT = (function() {
  $__fn = function($dictComonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$extract = ($GLOBALS['Control_Comonad_extract'])($dictComonad);
$comonadTracedT = ($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'])($dictComonad);
    $__res = (function() use ($comonadTracedT, $extract) {
  $__fn = function($dictMonoid) use ($comonadTracedT, $extract, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = ($GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'])((object)["track" => (function() use ($extract) {
  $__body = function($t, $v) use ($extract) {
    $__case_0 = $t;
    $__case_1 = $v;
    if (true) {
$t1 = $__case_0;
$tr = $__case_1;
return ($extract)($tr, $t1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($t, $v = null) use ($extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($t, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Comonad0" => (function() use ($comonadTracedT1) {
  $__fn = function($__dollar____unused) use ($comonadTracedT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $comonadTracedT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_comonadTracedStoreT
$Control_Comonad_Traced_Class_comonadTracedStoreT = (function() {
  $__fn = function($dictComonadTraced) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comonadStoreT = ($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'])((($dictComonadTraced)->Comonad0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'])((object)["track" => ($GLOBALS['Control_Comonad_Traced_Class_lowerTrack1'])($dictComonadTraced), "Comonad0" => (function() use ($comonadStoreT) {
  $__fn = function($__dollar____unused) use ($comonadStoreT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $comonadStoreT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_comonadTracedIdentityT
$Control_Comonad_Traced_Class_comonadTracedIdentityT = (function() {
  $__fn = function($dictComonadTraced) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comonadIdentityT = ($GLOBALS['Control_Monad_Identity_Trans_comonadIdentityT'])((($dictComonadTraced)->Comonad0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'])((object)["track" => ($GLOBALS['Control_Comonad_Traced_Class_lowerTrack2'])($dictComonadTraced), "Comonad0" => (function() use ($comonadIdentityT) {
  $__fn = function($__dollar____unused) use ($comonadIdentityT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $comonadIdentityT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_comonadTracedEnvT
$Control_Comonad_Traced_Class_comonadTracedEnvT = (function() {
  $__fn = function($dictComonadTraced) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comonadEnvT = ($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'])((($dictComonadTraced)->Comonad0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Comonad_Traced_Class_ComonadTraced__dollar__Dict'])((object)["track" => ($GLOBALS['Control_Comonad_Traced_Class_lowerTrack3'])($dictComonadTraced), "Comonad0" => (function() use ($comonadEnvT) {
  $__fn = function($__dollar____unused) use ($comonadEnvT, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $comonadEnvT;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Traced_Class_censor
$Control_Comonad_Traced_Class_censor = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$tr = $__case_1;
return ($GLOBALS['Control_Comonad_Traced_Trans_TracedT'])(($map)((function() use ($f1) {
  $__fn = function($v1) use ($f1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Comonad_Traced_Class_composeFlipped'])($f1, $v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $tr));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

