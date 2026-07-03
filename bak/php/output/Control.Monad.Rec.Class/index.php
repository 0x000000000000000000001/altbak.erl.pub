<?php

namespace Control\Monad\Rec\Class;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Ref/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
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


// Control_Monad_Rec_Class_compose
$Control_Monad_Rec_Class_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Rec_Class_bind
$Control_Monad_Rec_Class_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Effect_bindEffect']);

// Control_Monad_Rec_Class_bindFlipped
$Control_Monad_Rec_Class_bindFlipped = ($GLOBALS['Control_Bind_bindFlipped'])($GLOBALS['Effect_bindEffect']);

// Control_Monad_Rec_Class_discard
$Control_Monad_Rec_Class_discard = ($GLOBALS['Control_Bind_discard'])($GLOBALS['Control_Bind_discardUnit'], $GLOBALS['Effect_bindEffect']);

// Control_Monad_Rec_Class_pure
$Control_Monad_Rec_Class_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Effect_applicativeEffect']);

// Control_Monad_Rec_Class_map
$Control_Monad_Rec_Class_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Effect_functorEffect']);

// Control_Monad_Rec_Class_Loop
$Control_Monad_Rec_Class_Loop = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "Loop", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_Done
$Control_Monad_Rec_Class_Done = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "Done", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_MonadRec$Dict
$Control_Monad_Rec_Class_MonadRec__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_tailRecM
$Control_Monad_Rec_Class_tailRecM = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->tailRecM;
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

// Control_Monad_Rec_Class_tailRecM2
$Control_Monad_Rec_Class_tailRecM2 = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tailRecM1 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
    $__res = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_tailRecM3
$Control_Monad_Rec_Class_tailRecM3 = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tailRecM1 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
    $__res = (function() use ($tailRecM1) {
  $__fn = function($f, $a = null, $b = null, $c = null) use ($tailRecM1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($tailRecM1)((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($f)(($o)->a, ($o)->b, ($o)->c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b, "c" => $c]);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_untilJust
$Control_Monad_Rec_Class_untilJust = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tailRecM1 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
$mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'])((((((((($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($tailRecM1, $mapFlipped) {
  $__fn = function($m) use ($tailRecM1, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($tailRecM1)((function() use ($mapFlipped, $m) {
  $__fn = function($v) use ($mapFlipped, $m, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($mapFlipped)($m, (function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Control_Monad_Rec_Class_Loop'])($GLOBALS['Data_Unit_unit']);
} else {
if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Done'])($x);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v1) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_whileJust
$Control_Monad_Rec_Class_whileJust = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($append, $mempty) {
  $__fn = function($dictMonadRec) use ($append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tailRecM1 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
$mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'])((((((((($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($tailRecM1, $mapFlipped, $append, $mempty) {
  $__fn = function($m) use ($tailRecM1, $mapFlipped, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($tailRecM1)((function() use ($mapFlipped, $m, $append) {
  $__fn = function($v) use ($mapFlipped, $m, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($mapFlipped)($m, (function() use ($v, $append) {
  $__body = function($v1) use ($v, $append) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Control_Monad_Rec_Class_Done'])($v);
} else {
if ((($__case_0)->tag === "Just")) {
$x = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Loop'])(($append)($v, $x));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v1) use ($v, $append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $mempty);
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

// Control_Monad_Rec_Class_tailRec
$Control_Monad_Rec_Class_tailRec = (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use (&$go, $f) {
  $__fn = function($v) use (&$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Loop")) {
$a = ($__case_0)->values[0];
$__tco_tmp_0 = ($f)($a);
$v = $__tco_tmp_0;
continue;
} else {
if ((($__case_0)->tag === "Done")) {
$b = ($__case_0)->values[0];
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Control_Monad_Rec_Class_compose'])($go, $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_tailRec2
$Control_Monad_Rec_Class_tailRec2 = (function() {
  $__fn = function($f, $a = null, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_tailRec'])((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($f)(($o)->a, ($o)->b);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_tailRec3
$Control_Monad_Rec_Class_tailRec3 = (function() {
  $__fn = function($f, $a = null, $b = null, $c = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_tailRec'])((function() use ($f) {
  $__fn = function($o) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($f)(($o)->a, ($o)->b, ($o)->c);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), (object)["a" => $a, "b" => $b, "c" => $c]);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_monadRecMaybe
$Control_Monad_Rec_Class_monadRecMaybe = ($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'])((object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$g = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Control_Monad_Rec_Class_Done'])($GLOBALS['Data_Maybe_Nothing']);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Loop"))) {
$a = (($__case_0)->values[0])->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Loop'])(($f)($a));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Done"))) {
$b = (($__case_0)->values[0])->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Done'])(($GLOBALS['Data_Maybe_Just'])($b));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Control_Monad_Rec_Class_tailRec'])($g, ($f)($a0));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Maybe_monadMaybe'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_monadRecIdentity
$Control_Monad_Rec_Class_monadRecIdentity = ($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'])((object)["tailRecM" => (function() {
  $__fn = function($f) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$runIdentity = (function() {
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
    $__res = ($GLOBALS['Control_Monad_Rec_Class_compose'])($GLOBALS['Data_Identity_Identity'], ($GLOBALS['Control_Monad_Rec_Class_tailRec'])(($GLOBALS['Control_Monad_Rec_Class_compose'])($runIdentity, $f)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Identity_monadIdentity'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_monadRecFunction
$Control_Monad_Rec_Class_monadRecFunction = ($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'])((object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null, $e = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_tailRec'])((function() use ($f, $e) {
  $__fn = function($a) use ($f, $e, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($f)($a, $e);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $a0);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Control_Monad_monadFn'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_monadRecEither
$Control_Monad_Rec_Class_monadRecEither = ($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'])((object)["tailRecM" => (function() {
  $__fn = function($f, $a0 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$g = (function() use ($f) {
  $__body = function($v) use ($f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$e = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Done'])(($GLOBALS['Data_Either_Left'])($e));
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Loop"))) {
$a = (($__case_0)->values[0])->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Loop'])(($f)($a));
} else {
if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Done"))) {
$b = (($__case_0)->values[0])->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Done'])(($GLOBALS['Data_Either_Right'])($b));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Control_Monad_Rec_Class_tailRec'])($g, ($f)($a0));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Either_monadEither'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_monadRecEffect
$Control_Monad_Rec_Class_monadRecEffect = ($GLOBALS['Control_Monad_Rec_Class_MonadRec__dollar__Dict'])((object)["tailRecM" => (function() {
  $__fn = function($f, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$fromDone = ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() {
  $__fn = function($__dollar____unused, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ((function() use ($v) {
  $__body = function($__dollar____unused) use ($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Done")) {
$b = ($__case_0)->values[0];
return $b;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($__dollar____unused) use ($v, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($__dollar____unused);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())($GLOBALS['Prim_undefined']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
    $__res = ($GLOBALS['Control_Monad_Rec_Class_bind'])(($GLOBALS['Control_Monad_Rec_Class_bindFlipped'])($GLOBALS['Effect_Ref_new'], ($f)($a)), (function() use ($f, $fromDone) {
  $__fn = function($r) use ($f, $fromDone, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_discard'])(($GLOBALS['Effect_untilE'])(($GLOBALS['Control_Monad_Rec_Class_bind'])(($GLOBALS['Effect_Ref_read'])($r), (function() use ($f, $r) {
  $__body = function($v) use ($f, $r) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Loop")) {
$a__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_bind'])(($f)($a__prime__), (function() use ($r) {
  $__fn = function($e) use ($r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_bind'])(($GLOBALS['Effect_Ref_write'])($e, $r), (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_pure'])(false);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
if ((($__case_0)->tag === "Done")) {
return ($GLOBALS['Control_Monad_Rec_Class_pure'])(true);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($f, $r, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), (function() use ($fromDone, $r) {
  $__fn = function($__dollar____unused) use ($fromDone, $r, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_map'])($fromDone, ($GLOBALS['Effect_Ref_read'])($r));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Monad0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Effect_monadEffect'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_loop3
$Control_Monad_Rec_Class_loop3 = (function() {
  $__fn = function($a, $b = null, $c = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_Loop'])((object)["a" => $a, "b" => $b, "c" => $c]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_loop2
$Control_Monad_Rec_Class_loop2 = (function() {
  $__fn = function($a, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_Rec_Class_Loop'])((object)["a" => $a, "b" => $b]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_functorStep
$Control_Monad_Rec_Class_functorStep = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__body = function($f, $m) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Loop")) {
$v = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Loop'])($v);
} else {
if ((($__case_0)->tag === "Done")) {
$v = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Done'])(($f)($v));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($f, $m = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $m);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_Rec_Class_forever
$Control_Monad_Rec_Class_forever = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tailRecM1 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
$voidRight = ($GLOBALS['Data_Functor_voidRight'])((((((((($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($tailRecM1, $voidRight) {
  $__fn = function($ma) use ($tailRecM1, $voidRight, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($tailRecM1)((function() use ($voidRight, $ma) {
  $__fn = function($u) use ($voidRight, $ma, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($voidRight)(($GLOBALS['Control_Monad_Rec_Class_Loop'])($u), $ma);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Rec_Class_bifunctorStep
$Control_Monad_Rec_Class_bifunctorStep = ($GLOBALS['Data_Bifunctor_Bifunctor__dollar__Dict'])((object)["bimap" => (function() {
  $__body = function($v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Loop")) {
$f = $__case_0;
$a = ($__case_2)->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Loop'])(($f)($a));
} else {
if ((($__case_2)->tag === "Done")) {
$g = $__case_1;
$b = ($__case_2)->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Done'])(($g)($b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $v1, $v2);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]);

