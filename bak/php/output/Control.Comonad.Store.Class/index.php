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


// Control_Comonad_Store_Class_compose
$Control_Comonad_Store_Class_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Comonad_Store_Class_lower
$Control_Comonad_Store_Class_lower = ($GLOBALS['Control_Comonad_Trans_Class_lower'])($GLOBALS['Control_Comonad_Env_Trans_comonadTransEnvT']);

// Control_Comonad_Store_Class_ComonadStore$Dict
$Control_Comonad_Store_Class_ComonadStore__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Store_Class_pos
$Control_Comonad_Store_Class_pos = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->pos;
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

// Control_Comonad_Store_Class_peek
$Control_Comonad_Store_Class_peek = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->peek;
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

// Control_Comonad_Store_Class_peeks
$Control_Comonad_Store_Class_peeks = (function() {
  $__fn = function($dictComonadStore) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$peek1 = ($GLOBALS['Control_Comonad_Store_Class_peek'])($dictComonadStore);
$pos1 = ($GLOBALS['Control_Comonad_Store_Class_pos'])($dictComonadStore);
    $__res = (function() use ($peek1, $pos1) {
  $__fn = function($f, $x = null) use ($peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($peek1)(($f)(($pos1)($x)), $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Store_Class_seeks
$Control_Comonad_Store_Class_seeks = (function() {
  $__fn = function($dictComonadStore) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$peeks1 = ($GLOBALS['Control_Comonad_Store_Class_peeks'])($dictComonadStore);
$duplicate = ($GLOBALS['Control_Extend_duplicate'])((((($dictComonadStore)->Comonad0)($GLOBALS['Prim_undefined']))->Extend0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($peeks1, $duplicate) {
  $__fn = function($f) use ($peeks1, $duplicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Comonad_Store_Class_compose'])(($peeks1)($f), $duplicate);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Store_Class_seek
$Control_Comonad_Store_Class_seek = (function() {
  $__fn = function($dictComonadStore) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$peek1 = ($GLOBALS['Control_Comonad_Store_Class_peek'])($dictComonadStore);
$duplicate = ($GLOBALS['Control_Extend_duplicate'])((((($dictComonadStore)->Comonad0)($GLOBALS['Prim_undefined']))->Extend0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($peek1, $duplicate) {
  $__fn = function($s) use ($peek1, $duplicate, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Comonad_Store_Class_compose'])(($peek1)($s), $duplicate);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Store_Class_experiment
$Control_Comonad_Store_Class_experiment = (function() {
  $__fn = function($dictComonadStore) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$peek1 = ($GLOBALS['Control_Comonad_Store_Class_peek'])($dictComonadStore);
$pos1 = ($GLOBALS['Control_Comonad_Store_Class_pos'])($dictComonadStore);
    $__res = (function() use ($peek1, $pos1) {
  $__fn = function($dictFunctor) use ($peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map, $peek1, $pos1) {
  $__fn = function($f, $x = null) use ($map, $peek1, $pos1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($map)(($GLOBALS['Data_Function_flip'])($peek1, $x), ($f)(($pos1)($x)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Control_Comonad_Store_Class_comonadStoreTracedT
$Control_Comonad_Store_Class_comonadStoreTracedT = (function() {
  $__fn = function($dictComonadStore) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pos1 = ($GLOBALS['Control_Comonad_Store_Class_pos'])($dictComonadStore);
$Comonad0 = (($dictComonadStore)->Comonad0)($GLOBALS['Prim_undefined']);
$peek1 = ($GLOBALS['Control_Comonad_Store_Class_peek'])($dictComonadStore);
$comonadTracedT = ($GLOBALS['Control_Comonad_Traced_Trans_comonadTracedT'])($Comonad0);
    $__res = (function() use (&$Comonad0, $comonadTracedT, $pos1, $peek1) {
  $__fn = function($dictMonoid) use (&$Comonad0, $comonadTracedT, $pos1, $peek1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lower1 = ($GLOBALS['Control_Comonad_Trans_Class_lower'])(($GLOBALS['Control_Comonad_Traced_Trans_comonadTransTracedT'])($dictMonoid), $Comonad0);
$comonadTracedT1 = ($comonadTracedT)($dictMonoid);
    $__res = ($GLOBALS['Control_Comonad_Store_Class_ComonadStore__dollar__Dict'])((object)["pos" => ($GLOBALS['Control_Comonad_Store_Class_compose'])($pos1, $lower1), "peek" => (function() use ($peek1, $lower1) {
  $__fn = function($s) use ($peek1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Comonad_Store_Class_compose'])(($peek1)($s), $lower1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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

// Control_Comonad_Store_Class_comonadStoreStoreT
$Control_Comonad_Store_Class_comonadStoreStoreT = (function() {
  $__fn = function($dictComonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$extract = ($GLOBALS['Control_Comonad_extract'])($dictComonad);
$comonadStoreT = ($GLOBALS['Control_Comonad_Store_Trans_comonadStoreT'])($dictComonad);
    $__res = ($GLOBALS['Control_Comonad_Store_Class_ComonadStore__dollar__Dict'])((object)["pos" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$s = ($__case_0)->values[1];
return $s;
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
})(), "peek" => (function() use ($extract) {
  $__body = function($s, $v) use ($extract) {
    $__case_0 = $s;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$s1 = $__case_0;
$f = ($__case_1)->values[0];
return ($extract)($f, $s1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($s, $v = null) use ($extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($s, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Comonad0" => (function() use ($comonadStoreT) {
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

// Control_Comonad_Store_Class_comonadStoreEnvT
$Control_Comonad_Store_Class_comonadStoreEnvT = (function() {
  $__fn = function($dictComonadStore) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Comonad0 = (($dictComonadStore)->Comonad0)($GLOBALS['Prim_undefined']);
$lower1 = ($GLOBALS['Control_Comonad_Store_Class_lower'])($Comonad0);
$peek1 = ($GLOBALS['Control_Comonad_Store_Class_peek'])($dictComonadStore);
$comonadEnvT = ($GLOBALS['Control_Comonad_Env_Trans_comonadEnvT'])($Comonad0);
    $__res = ($GLOBALS['Control_Comonad_Store_Class_ComonadStore__dollar__Dict'])((object)["pos" => ($GLOBALS['Control_Comonad_Store_Class_compose'])(($GLOBALS['Control_Comonad_Store_Class_pos'])($dictComonadStore), $lower1), "peek" => (function() use ($peek1, $lower1) {
  $__fn = function($s) use ($peek1, $lower1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Comonad_Store_Class_compose'])(($peek1)($s), $lower1);
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

