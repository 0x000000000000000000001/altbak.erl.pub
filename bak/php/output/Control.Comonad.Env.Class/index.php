<?php

namespace Control\Comonad\Env\Class;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Class/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Store/index.php';
require_once __DIR__ . '/../Control.Comonad.Store.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Traced.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
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


// Control_Comonad_Env_Class_compose
$Control_Comonad_Env_Class_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Comonad_Env_Class_lower
$Control_Comonad_Env_Class_lower = ($GLOBALS['Control_Comonad_Trans_Class_lower'])($GLOBALS['Control_Comonad_Store_Trans_comonadTransStoreT']);

// Control_Comonad_Env_Class_ComonadAsk$Dict
$Control_Comonad_Env_Class_ComonadAsk__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Class_ComonadEnv$Dict
$Control_Comonad_Env_Class_ComonadEnv__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Class_local
$Control_Comonad_Env_Class_local = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->local;
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

// Control_Comonad_Env_Class_comonadAskTuple
$Control_Comonad_Env_Class_comonadAskTuple = ($GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'])((object)["ask" => $GLOBALS['Data_Tuple_fst'], "Comonad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Tuple_comonadTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Comonad_Env_Class_comonadEnvTuple
$Control_Comonad_Env_Class_comonadEnvTuple = ($GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'])((object)["local" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[0];
$y = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($f1)($x), $y);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Control_Comonad_Env_Class_comonadAskTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Comonad_Env_Class_comonadAskEnvT
$Control_Comonad_Env_Class_comonadAskEnvT = (function() {
  $__fn = function($dictComonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comonadEnvT = ($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'])($dictComonad);
    $__res = ($GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'])((object)["ask" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return ($GLOBALS['Data_Tuple_fst'])($x);
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
})(), "Comonad0" => (function() use ($comonadEnvT) {
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

// Control_Comonad_Env_Class_comonadEnvEnvT
$Control_Comonad_Env_Class_comonadEnvEnvT = (function() {
  $__fn = function($dictComonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comonadAskEnvT1 = ($GLOBALS['Control_Comonad_Env_Class_comonadAskEnvT'])($dictComonad);
    $__res = ($GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'])((object)["local" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__case_0 = $x;
$__case_res_0 = null;
if ((($__case_0)->tag === "Tuple")) {
$y = ($__case_0)->values[0];
$z = ($__case_0)->values[1];
$__case_res_0 = ($GLOBALS['Data_Tuple_Tuple'])(($f1)($y), $z);
} else {
throw new \Exception("Pattern match failure");
};
return ($GLOBALS['Control_Comonad_Env_Trans_EnvT'])($__case_res_0);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() use ($comonadAskEnvT1) {
  $__fn = function($__dollar____unused) use ($comonadAskEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $comonadAskEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Class_ask
$Control_Comonad_Env_Class_ask = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ask;
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

// Control_Comonad_Env_Class_asks
$Control_Comonad_Env_Class_asks = (function() {
  $__fn = function($dictComonadAsk) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ask1 = ($GLOBALS['Control_Comonad_Env_Class_ask'])($dictComonadAsk);
    $__res = (function() use ($ask1) {
  $__fn = function($f, $x = null) use ($ask1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($f)(($ask1)($x));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Class_comonadAskStoreT
$Control_Comonad_Env_Class_comonadAskStoreT = (function() {
  $__fn = function($dictComonadAsk) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Comonad0 = (($dictComonadAsk)->Comonad0)($GLOBALS['Prim_undefined']);
$comonadStoreT = ($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'])($Comonad0);
    $__res = ($GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'])((object)["ask" => ($GLOBALS['Control_Comonad_Env_Class_compose'])(($GLOBALS['Control_Comonad_Env_Class_ask'])($dictComonadAsk), ($GLOBALS['Control_Comonad_Env_Class_lower'])($Comonad0)), "Comonad0" => (function() use ($comonadStoreT) {
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

// Control_Comonad_Env_Class_comonadEnvStoreT
$Control_Comonad_Env_Class_comonadEnvStoreT = (function() {
  $__fn = function($dictComonadEnv) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$local1 = ($GLOBALS['Control_Comonad_Env_Class_local'])($dictComonadEnv);
$comonadAskStoreT1 = ($GLOBALS['Control_Comonad_Env_Class_comonadAskStoreT'])((($dictComonadEnv)->ComonadAsk0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'])((object)["local" => (function() use ($local1) {
  $__body = function($f, $v) use ($local1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$w = ($__case_1)->values[0];
$s = ($__case_1)->values[1];
return ($GLOBALS['Control_Comonad_Store_Trans_StoreT'])(($GLOBALS['Data_Tuple_Tuple'])(($local1)($f1, $w), $s));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($local1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() use ($comonadAskStoreT1) {
  $__fn = function($__dollar____unused) use ($comonadAskStoreT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $comonadAskStoreT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Class_comonadAskTracedT
$Control_Comonad_Env_Class_comonadAskTracedT = (function() {
  $__fn = function($dictComonadAsk) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ask1 = ($GLOBALS['Control_Comonad_Env_Class_ask'])($dictComonadAsk);
$Comonad0 = (($dictComonadAsk)->Comonad0)($GLOBALS['Prim_undefined']);
$comonadTracedT = ($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'])($Comonad0);
    $__res = (function() use ($comonadTracedT, $ask1, &$Comonad0) {
  $__fn = function($dictMonoid) use ($comonadTracedT, $ask1, &$Comonad0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = ($GLOBALS['Control_Comonad_Env_Class_ComonadAsk__dollar__Dict'])((object)["ask" => ($GLOBALS['Control_Comonad_Env_Class_compose'])($ask1, ($GLOBALS['Control_Comonad_Trans_Class_lower'])(($GLOBALS['Control_Comonad_Traced_Trans_comonadTransTracedT'])($dictMonoid), $Comonad0)), "Comonad0" => (function() use ($comonadTracedT1) {
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

// Control_Comonad_Env_Class_comonadEnvTracedT
$Control_Comonad_Env_Class_comonadEnvTracedT = (function() {
  $__fn = function($dictComonadEnv) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$local1 = ($GLOBALS['Control_Comonad_Env_Class_local'])($dictComonadEnv);
$comonadAskTracedT1 = ($GLOBALS['Control_Comonad_Env_Class_comonadAskTracedT'])((($dictComonadEnv)->ComonadAsk0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($comonadAskTracedT1, $local1) {
  $__fn = function($dictMonoid) use ($comonadAskTracedT1, $local1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$comonadAskTracedT2 = ($comonadAskTracedT1)($dictMonoid);
    $__res = ($GLOBALS['Control_Comonad_Env_Class_ComonadEnv__dollar__Dict'])((object)["local" => (function() use ($local1) {
  $__body = function($f, $v) use ($local1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$w = $__case_1;
return ($GLOBALS['Control_Comonad_Traced_Trans_TracedT'])(($local1)($f1, $w));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($local1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ComonadAsk0" => (function() use ($comonadAskTracedT2) {
  $__fn = function($__dollar____unused) use ($comonadAskTracedT2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $comonadAskTracedT2;
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

