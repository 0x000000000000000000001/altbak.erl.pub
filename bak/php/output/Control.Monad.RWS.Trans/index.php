<?php

namespace Control\Monad\RWS\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Monad.RWS.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Reader.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.State.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Writer.Class/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect.Class/index.php';
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


// Control_Monad_RWS_Trans_compose
$Control_Monad_RWS_Trans_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_RWS_Trans_RWSResult
$Control_Monad_RWS_Trans_RWSResult = (function() {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)["tag" => "RWSResult", "values" => [$value0, $value1, $value2]];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_RWST
$Control_Monad_RWS_Trans_RWST = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_withRWST
$Control_Monad_RWS_Trans_withRWST = (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($m, $f) {
  $__fn = function($r, $s = null) use ($m, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$__case_0 = $m;
$__case_res_0 = null;
if (true) {
$m__prime__ = $__case_0;
$__case_res_0 = $m__prime__;
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($GLOBALS['Data_Tuple_uncurry'])($__case_res_0, ($f)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_runRWST
$Control_Monad_RWS_Trans_runRWST = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$x = $__case_0;
return $x;
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

// Control_Monad_RWS_Trans_newtypeRWST
$Control_Monad_RWS_Trans_newtypeRWST = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_RWS_Trans_monadTransRWST
$Control_Monad_RWS_Trans_monadTransRWST = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_Trans_Class_MonadTrans__dollar__Dict'])((object)["lift" => (function() use ($mempty) {
  $__fn = function($dictMonad) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bind, $pure, $mempty) {
  $__fn = function($m) use ($bind, $pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($bind, $m, $pure, $mempty) {
  $__fn = function($v, $s = null) use ($bind, $m, $pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($bind)($m, (function() use ($pure, $s, $mempty) {
  $__fn = function($a) use ($pure, $s, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure)(($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($s, $a, $mempty));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_mapRWST
$Control_Monad_RWS_Trans_mapRWST = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($f1, $m) {
  $__fn = function($r, $s = null) use ($f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($f1)(($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
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
})();

// Control_Monad_RWS_Trans_lazyRWST
$Control_Monad_RWS_Trans_lazyRWST = ($GLOBALS['Control_Lazy_Lazy__dollar__Dict'])((object)["defer" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($f) {
  $__body = function($r, $s) use ($f) {
    $v = ($f)($GLOBALS['Data_Unit_unit']);
    $__case_0 = $v;
    if (true) {
$f__prime__ = $__case_0;
return ($f__prime__)($r, $s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $s = null) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($r, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_RWS_Trans_functorRWST
$Control_Monad_RWS_Trans_functorRWST = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() use ($map) {
  $__body = function($f, $v) use ($map) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$m = $__case_1;
return ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($map, $f1, $m) {
  $__fn = function($r, $s = null) use ($map, $f1, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($map)((function() use ($f1) {
  $__body = function($v1) use ($f1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "RWSResult")) {
$state = ($__case_0)->values[0];
$result = ($__case_0)->values[1];
$writer = ($__case_0)->values[2];
return ($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($state, ($f1)($result), $writer);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($f1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($m)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
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
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_execRWST
$Control_Monad_RWS_Trans_execRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bind, $pure) {
  $__body = function($v, $r, $s) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $s;
    if (true) {
$m = $__case_0;
$r1 = $__case_1;
$s1 = $__case_2;
return ($bind)(($m)($r1, $s1), (function() use ($pure) {
  $__body = function($v1) use ($pure) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "RWSResult")) {
$state = ($__case_0)->values[0];
$writer = ($__case_0)->values[2];
return ($pure)(($GLOBALS['Data_Tuple_Tuple'])($state, $writer));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $s = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $r, $s);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_evalRWST
$Control_Monad_RWS_Trans_evalRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bind, $pure) {
  $__body = function($v, $r, $s) use ($bind, $pure) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $s;
    if (true) {
$m = $__case_0;
$r1 = $__case_1;
$s1 = $__case_2;
return ($bind)(($m)($r1, $s1), (function() use ($pure) {
  $__body = function($v1) use ($pure) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "RWSResult")) {
$result = ($__case_0)->values[1];
$writer = ($__case_0)->values[2];
return ($pure)(($GLOBALS['Data_Tuple_Tuple'])($result, $writer));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $s = null) use ($bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $r, $s);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_applyRWST
$Control_Monad_RWS_Trans_applyRWST = (function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])($dictBind);
$Functor0 = (((($dictBind)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']);
$mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'])($Functor0);
$functorRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_functorRWST'])($Functor0);
    $__res = (function() use ($bind, $mapFlipped, $functorRWST1) {
  $__fn = function($dictMonoid) use ($bind, $mapFlipped, $functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $v1) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$m = $__case_1;
return ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($bind, $f, $mapFlipped, $m, $append) {
  $__fn = function($r, $s = null) use ($bind, $f, $mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($bind)(($f)($r, $s), (function() use ($mapFlipped, $m, $r, $append) {
  $__body = function($v2) use ($mapFlipped, $m, $r, $append) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "RWSResult")) {
$s__prime__ = ($__case_0)->values[0];
$f__prime__ = ($__case_0)->values[1];
$w__prime__ = ($__case_0)->values[2];
return ($mapFlipped)(($m)($r, $s__prime__), (function() use ($f__prime__, $append, $w__prime__) {
  $__body = function($v3) use ($f__prime__, $append, $w__prime__) {
    $__case_0 = $v3;
    if ((($__case_0)->tag === "RWSResult")) {
$s__prime____prime__ = ($__case_0)->values[0];
$a__prime____prime__ = ($__case_0)->values[1];
$w__prime____prime__ = ($__case_0)->values[2];
return ($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($s__prime____prime__, ($f__prime__)($a__prime____prime__), ($append)($w__prime__, $w__prime____prime__));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v3) use ($f__prime__, $append, $w__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v2) use ($mapFlipped, $m, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorRWST1;
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

// Control_Monad_RWS_Trans_bindRWST
$Control_Monad_RWS_Trans_bindRWST = (function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])($dictBind);
$mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'])((((($dictBind)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$applyRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_applyRWST'])($dictBind);
    $__res = (function() use ($applyRWST1, $bind, $mapFlipped) {
  $__fn = function($dictMonoid) use ($applyRWST1, $bind, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() use ($bind, $mapFlipped, $append) {
  $__body = function($v, $f) use ($bind, $mapFlipped, $append) {
    $__case_0 = $v;
    $__case_1 = $f;
    if (true) {
$m = $__case_0;
$f1 = $__case_1;
return ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($bind, $m, $f1, $mapFlipped, $append) {
  $__fn = function($r, $s = null) use ($bind, $m, $f1, $mapFlipped, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($bind)(($m)($r, $s), (function() use ($f1, $mapFlipped, $r, $append) {
  $__body = function($v1) use ($f1, $mapFlipped, $r, $append) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "RWSResult")) {
$s__prime__ = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
$w = ($__case_0)->values[2];
$v2 = ($f1)($a);
$__case_0 = $v2;
if (true) {
$f__prime__ = $__case_0;
return ($mapFlipped)(($f__prime__)($r, $s__prime__), (function() use ($append, $w) {
  $__body = function($v3) use ($append, $w) {
    $__case_0 = $v3;
    if ((($__case_0)->tag === "RWSResult")) {
$state = ($__case_0)->values[0];
$result = ($__case_0)->values[1];
$writer = ($__case_0)->values[2];
return ($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($state, $result, ($append)($w, $writer));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v3) use ($append, $w, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v3);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($f1, $mapFlipped, $r, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($bind, $mapFlipped, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyRWST2;
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

// Control_Monad_RWS_Trans_semigroupRWST
$Control_Monad_RWS_Trans_semigroupRWST = (function() {
  $__fn = function($dictBind) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applyRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_applyRWST'])($dictBind);
    $__res = (function() use ($applyRWST1) {
  $__fn = function($dictMonoid) use ($applyRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lift2 = ($GLOBALS['Control_Apply_lift2'])(($applyRWST1)($dictMonoid));
    $__res = (function() use ($lift2) {
  $__fn = function($dictSemigroup) use ($lift2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => ($lift2)(($GLOBALS['Data_Semigroup_append'])($dictSemigroup))]);
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

// Control_Monad_RWS_Trans_applicativeRWST
$Control_Monad_RWS_Trans_applicativeRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$applyRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_applyRWST'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($applyRWST1, $pure) {
  $__fn = function($dictMonoid) use ($applyRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$applyRWST2 = ($applyRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => (function() use ($pure, $mempty) {
  $__fn = function($a) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($pure, $a, $mempty) {
  $__fn = function($v, $s = null) use ($pure, $a, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($pure)(($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($s, $a, $mempty));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyRWST2) {
  $__fn = function($__dollar____unused) use ($applyRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyRWST2;
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

// Control_Monad_RWS_Trans_monadRWST
$Control_Monad_RWS_Trans_monadRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'])($dictMonad);
$bindRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_bindRWST'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($applicativeRWST1, $bindRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $bindRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeRWST2 = ($applicativeRWST1)($dictMonoid);
$bindRWST2 = ($bindRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeRWST2) {
  $__fn = function($__dollar____unused) use ($applicativeRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeRWST2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindRWST2) {
  $__fn = function($__dollar____unused) use ($bindRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $bindRWST2;
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

// Control_Monad_RWS_Trans_monadAskRWST
$Control_Monad_RWS_Trans_monadAskRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$monadRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'])($dictMonad);
    $__res = (function() use ($monadRWST1, $pure) {
  $__fn = function($dictMonoid) use ($monadRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_Reader_Class_MonadAsk__dollar__Dict'])((object)["ask" => ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($pure, $mempty) {
  $__fn = function($r, $s = null) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($pure)(($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($s, $r, $mempty));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadReaderRWST
$Control_Monad_RWS_Trans_monadReaderRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadAskRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadAskRWST'])($dictMonad);
    $__res = (function() use ($monadAskRWST1) {
  $__fn = function($dictMonoid) use ($monadAskRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadAskRWST2 = ($monadAskRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_Reader_Class_MonadReader__dollar__Dict'])((object)["local" => (function() {
  $__fn = function($f, $m = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($m, $f) {
  $__body = function($r, $s) use ($m, $f) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($m__prime__)(($f)($r), $s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $s = null) use ($m, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($r, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadAsk0" => (function() use ($monadAskRWST2) {
  $__fn = function($__dollar____unused) use ($monadAskRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadAskRWST2;
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

// Control_Monad_RWS_Trans_monadEffectRWS
$Control_Monad_RWS_Trans_monadEffectRWS = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lift = ($GLOBALS['Control_Monad_Trans_Class_lift'])(($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'])($dictMonoid));
    $__res = (function() use ($dictMonoid, $lift) {
  $__fn = function($dictMonadEffect) use ($dictMonoid, $lift, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']);
$monadRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'])($Monad0, $dictMonoid);
    $__res = ($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'])((object)["liftEffect" => ($GLOBALS['Control_Monad_RWS_Trans_compose'])(($lift)($Monad0), ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect)), "Monad0" => (function() use ($monadRWST1) {
  $__fn = function($__dollar____unused) use ($monadRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadRWST1;
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

// Control_Monad_RWS_Trans_monadRecRWST
$Control_Monad_RWS_Trans_monadRecRWST = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])((($Monad0)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
$tailRecM = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
$monadRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'])($Monad0);
    $__res = (function() use ($monadRWST1, $bind, $pure, $tailRecM) {
  $__fn = function($dictMonoid) use ($monadRWST1, $bind, $pure, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'])((object)["tailRecM" => (function() use ($bind, $pure, $append, $tailRecM, $mempty) {
  $__fn = function($k, $a = null) use ($bind, $pure, $append, $tailRecM, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$k__prime__ = (function() use ($k, $bind, $pure, $append) {
  $__body = function($r, $v) use ($k, $bind, $pure, $append) {
    $__case_0 = $r;
    $__case_1 = $v;
    if ((($__case_1)->tag === "RWSResult")) {
$r1 = $__case_0;
$state = ($__case_1)->values[0];
$result = ($__case_1)->values[1];
$writer = ($__case_1)->values[2];
$v1 = ($k)($result);
$__case_0 = $v1;
if (true) {
$m = $__case_0;
return ($bind)(($m)($r1, $state), (function() use ($pure, $append, $writer) {
  $__body = function($v2) use ($pure, $append, $writer) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "RWSResult")) {
$state__prime__ = ($__case_0)->values[0];
$result__prime__ = ($__case_0)->values[1];
$writer__prime__ = ($__case_0)->values[2];
$__case_0 = $result__prime__;
$__case_res_0 = null;
if ((($__case_0)->tag === "Loop")) {
$x = ($__case_0)->values[0];
$__case_res_0 = ($GLOBALS['Control_Monad_Rec_Class_Loop'])(($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($state__prime__, $x, ($append)($writer, $writer__prime__)));
} else {
if ((($__case_0)->tag === "Done")) {
$y = ($__case_0)->values[0];
$__case_res_0 = ($GLOBALS['Control_Monad_Rec_Class_Done'])(($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($state__prime__, $y, ($append)($writer, $writer__prime__)));
} else {
throw new \Exception("Pattern match failure");
};
};
return ($pure)($__case_res_0);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v2) use ($pure, $append, $writer, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $v = null) use ($k, $bind, $pure, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($r, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($tailRecM, $k__prime__, $a, $mempty) {
  $__fn = function($r, $s = null) use ($tailRecM, $k__prime__, $a, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($tailRecM)(($k__prime__)($r), ($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($s, $a, $mempty));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadStateRWST
$Control_Monad_RWS_Trans_monadStateRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$monadRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'])($dictMonad);
    $__res = (function() use ($monadRWST1, $pure) {
  $__fn = function($dictMonoid) use ($monadRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_State_Class_MonadState__dollar__Dict'])((object)["state" => (function() use ($pure, $mempty) {
  $__fn = function($f) use ($pure, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($f, $pure, $mempty) {
  $__body = function($v, $s) use ($f, $pure, $mempty) {
    $v1 = ($f)($s);
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$s__prime__ = ($__case_0)->values[1];
return ($pure)(($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($s__prime__, $a, $mempty));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $s = null) use ($f, $pure, $mempty, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadTellRWST
$Control_Monad_RWS_Trans_monadTellRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$monadRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'])($dictMonad);
    $__res = (function() use ($monadRWST1, $pure) {
  $__fn = function($dictMonoid) use ($monadRWST1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Semigroup0 = (($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_Writer_Class_MonadTell__dollar__Dict'])((object)["tell" => (function() use ($pure) {
  $__fn = function($w) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($pure, $w) {
  $__fn = function($v, $s = null) use ($pure, $w, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($pure)(($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($s, $GLOBALS['Data_Unit_unit'], $w));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Semigroup0" => (function() use (&$Semigroup0) {
  $__fn = function($__dollar____unused) use (&$Semigroup0, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $Semigroup0;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad1" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadWriterRWST
$Control_Monad_RWS_Trans_monadWriterRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$monadTellRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadTellRWST'])($dictMonad);
    $__res = (function() use ($monadTellRWST1, $bind, $pure) {
  $__fn = function($dictMonoid) use ($monadTellRWST1, $bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadTellRWST2 = ($monadTellRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_Writer_Class_MonadWriter__dollar__Dict'])((object)["listen" => (function() use ($bind, $pure) {
  $__fn = function($m) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($m, $bind, $pure) {
  $__body = function($r, $s) use ($m, $bind, $pure) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($bind)(($m__prime__)($r, $s), (function() use ($pure) {
  $__body = function($v) use ($pure) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "RWSResult")) {
$s__prime__ = ($__case_0)->values[0];
$a = ($__case_0)->values[1];
$w = ($__case_0)->values[2];
return ($pure)(($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($s__prime__, ($GLOBALS['Data_Tuple_Tuple'])($a, $w), $w));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $s = null) use ($m, $bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($r, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pass" => (function() use ($bind, $pure) {
  $__fn = function($m) use ($bind, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($m, $bind, $pure) {
  $__body = function($r, $s) use ($m, $bind, $pure) {
    $__case_0 = $m;
    if (true) {
$m__prime__ = $__case_0;
return ($bind)(($m__prime__)($r, $s), (function() use ($pure) {
  $__body = function($v) use ($pure) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "RWSResult") && ((($__case_0)->values[1])->tag === "Tuple"))) {
$s__prime__ = ($__case_0)->values[0];
$a = (($__case_0)->values[1])->values[0];
$f = (($__case_0)->values[1])->values[1];
$w = ($__case_0)->values[2];
return ($pure)(($GLOBALS['Control_Monad_RWS_Trans_RWSResult'])($s__prime__, $a, ($f)($w)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $s = null) use ($m, $bind, $pure, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($r, $s);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monoid0" => (function() use ($dictMonoid) {
  $__fn = function($__dollar____unused) use ($dictMonoid, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $dictMonoid;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "MonadTell1" => (function() use ($monadTellRWST2) {
  $__fn = function($__dollar____unused) use ($monadTellRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadTellRWST2;
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

// Control_Monad_RWS_Trans_monadThrowRWST
$Control_Monad_RWS_Trans_monadThrowRWST = (function() {
  $__fn = function($dictMonadThrow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadThrow)->Monad0)($GLOBALS['Prim_undefined']);
$throwError = ($GLOBALS['Control_Monad_Error_Class_throwError'])($dictMonadThrow);
$monadRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'])($Monad0);
    $__res = (function() use (&$Monad0, $monadRWST1, $throwError) {
  $__fn = function($dictMonoid) use (&$Monad0, $monadRWST1, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lift = ($GLOBALS['Control_Monad_Trans_Class_lift'])(($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'])($dictMonoid), $Monad0);
$monadRWST2 = ($monadRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'])((object)["throwError" => (function() use ($lift, $throwError) {
  $__fn = function($e) use ($lift, $throwError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($lift)(($throwError)($e));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() use ($monadRWST2) {
  $__fn = function($__dollar____unused) use ($monadRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadRWST2;
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

// Control_Monad_RWS_Trans_monadErrorRWST
$Control_Monad_RWS_Trans_monadErrorRWST = (function() {
  $__fn = function($dictMonadError) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$catchError = ($GLOBALS['Control_Monad_Error_Class_catchError'])($dictMonadError);
$monadThrowRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadThrowRWST'])((($dictMonadError)->MonadThrow0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($monadThrowRWST1, $catchError) {
  $__fn = function($dictMonoid) use ($monadThrowRWST1, $catchError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadThrowRWST2 = ($monadThrowRWST1)($dictMonoid);
    $__res = ($GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'])((object)["catchError" => (function() use ($catchError) {
  $__fn = function($m, $h = null) use ($catchError, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($catchError, $m, $h) {
  $__fn = function($r, $s = null) use ($catchError, $m, $h, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$__case_0 = $m;
$__case_res_0 = null;
if (true) {
$m__prime__ = $__case_0;
$__case_res_0 = ($m__prime__)($r, $s);
} else {
throw new \Exception("Pattern match failure");
};
    $__res = ($catchError)($__case_res_0, (function() use ($h, $r, $s) {
  $__body = function($e) use ($h, $r, $s) {
    $v = ($h)($e);
    $__case_0 = $v;
    if (true) {
$m__prime__ = $__case_0;
return ($m__prime__)($r, $s);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($e) use ($h, $r, $s, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => (function() use ($monadThrowRWST2) {
  $__fn = function($__dollar____unused) use ($monadThrowRWST2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadThrowRWST2;
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

// Control_Monad_RWS_Trans_monadSTRWST
$Control_Monad_RWS_Trans_monadSTRWST = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lift = ($GLOBALS['Control_Monad_Trans_Class_lift'])(($GLOBALS['Control_Monad_RWS_Trans_monadTransRWST'])($dictMonoid));
    $__res = (function() use ($dictMonoid, $lift) {
  $__fn = function($dictMonadST) use ($dictMonoid, $lift, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadST)->Monad0)($GLOBALS['Prim_undefined']);
$monadRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_monadRWST'])($Monad0, $dictMonoid);
    $__res = ($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'])((object)["liftST" => ($GLOBALS['Control_Monad_RWS_Trans_compose'])(($lift)($Monad0), ($GLOBALS['Control_Monad_ST_Class_liftST'])($dictMonadST)), "Monad0" => (function() use ($monadRWST1) {
  $__fn = function($__dollar____unused) use ($monadRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadRWST1;
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

// Control_Monad_RWS_Trans_monoidRWST
$Control_Monad_RWS_Trans_monoidRWST = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'])($dictMonad);
$semigroupRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_semigroupRWST'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($applicativeRWST1, $semigroupRWST1) {
  $__fn = function($dictMonoid) use ($applicativeRWST1, $semigroupRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure = ($GLOBALS['Control_Applicative_pure'])(($applicativeRWST1)($dictMonoid));
$semigroupRWST2 = ($semigroupRWST1)($dictMonoid);
    $__res = (function() use ($semigroupRWST2, $pure) {
  $__fn = function($dictMonoid1) use ($semigroupRWST2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupRWST3 = ($semigroupRWST2)((($dictMonoid1)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($pure)(($GLOBALS['Data_Monoid_mempty'])($dictMonoid1)), "Semigroup0" => (function() use ($semigroupRWST3) {
  $__fn = function($__dollar____unused) use ($semigroupRWST3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupRWST3;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_altRWST
$Control_Monad_RWS_Trans_altRWST = (function() {
  $__fn = function($dictAlt) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$alt = ($GLOBALS['Control_Alt_alt'])($dictAlt);
$functorRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_functorRWST'])((($dictAlt)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => (function() use ($alt) {
  $__body = function($v, $v1) use ($alt) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$m = $__case_0;
$n = $__case_1;
return ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($alt, $m, $n) {
  $__fn = function($r, $s = null) use ($alt, $m, $n, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($alt)(($m)($r, $s), ($n)($r, $s));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($alt, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorRWST1) {
  $__fn = function($__dollar____unused) use ($functorRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_plusRWST
$Control_Monad_RWS_Trans_plusRWST = (function() {
  $__fn = function($dictPlus) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$empty = ($GLOBALS['Control_Plus_empty'])($dictPlus);
$altRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_altRWST'])((($dictPlus)->Alt0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => ($GLOBALS['Control_Monad_RWS_Trans_RWST'])((function() use ($empty) {
  $__fn = function($v, $v1 = null) use ($empty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $empty;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), "Alt0" => (function() use ($altRWST1) {
  $__fn = function($__dollar____unused) use ($altRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $altRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_RWS_Trans_alternativeRWST
$Control_Monad_RWS_Trans_alternativeRWST = (function() {
  $__fn = function($dictMonoid, $dictAlternative = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$plusRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_plusRWST'])((($dictAlternative)->Plus1)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($dictMonoid, $plusRWST1) {
  $__fn = function($dictMonad) use ($dictMonoid, $plusRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeRWST1 = ($GLOBALS['Control_Monad_RWS_Trans_applicativeRWST'])($dictMonad, $dictMonoid);
    $__res = ($GLOBALS['Control_Alternative_Alternative__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeRWST1) {
  $__fn = function($__dollar____unused) use ($applicativeRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusRWST1) {
  $__fn = function($__dollar____unused) use ($plusRWST1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $plusRWST1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

