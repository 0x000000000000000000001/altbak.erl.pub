<?php

namespace Control\Monad\List\Trans;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Monad.List.Trans/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
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


// Control_Monad_List_Trans_compose
$Control_Monad_List_Trans_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_List_Trans_map
$Control_Monad_List_Trans_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Control_Monad_List_Trans_map1
$Control_Monad_List_Trans_map1 = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Lazy_functorLazy']);

// Control_Monad_List_Trans_sub
$Control_Monad_List_Trans_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Control_Monad_List_Trans_identity
$Control_Monad_List_Trans_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Control_Monad_List_Trans_pure
$Control_Monad_List_Trans_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_Lazy_applicativeLazy']);

// Control_Monad_List_Trans_Yield
$Control_Monad_List_Trans_Yield = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Yield", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_Skip
$Control_Monad_List_Trans_Skip = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "Skip", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_Done
$Control_Monad_List_Trans_Done = (object)["tag" => "Done", "values" => []];

// Control_Monad_List_Trans_ListT
$Control_Monad_List_Trans_ListT = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_wrapLazy
$Control_Monad_List_Trans_wrapLazy = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($pure1) {
  $__fn = function($v) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_ListT'])(($pure1)(($GLOBALS['Control_Monad_List_Trans_Skip'])($v)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_wrapEffect
$Control_Monad_List_Trans_wrapEffect = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map2 = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map2) {
  $__fn = function($v) use ($map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_ListT'])(($map2)(($GLOBALS['Control_Monad_List_Trans_compose'])($GLOBALS['Control_Monad_List_Trans_Skip'], ($GLOBALS['Control_Monad_List_Trans_compose'])($GLOBALS['Data_Lazy_defer'], $GLOBALS['Data_Function_const'])), $v));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_unfold
$Control_Monad_List_Trans_unfold = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$map2 = ($GLOBALS['Data_Functor_map'])((((((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return (function() use ($dictMonad, $map2) {
  $__fn = function($f, $z = null) use ($dictMonad, $map2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$g = (function() use ($dictMonad, $f) {
  $__body = function($v) use ($dictMonad, $f) {
    $__case_0 = $v;
    if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$z__prime__ = (($__case_0)->values[0])->values[0];
$a = (($__case_0)->values[0])->values[1];
return ($GLOBALS['Control_Monad_List_Trans_Yield'])($a, ($GLOBALS['Data_Lazy_defer'])((function() use ($dictMonad, $f, $z__prime__) {
  $__fn = function($v1) use ($dictMonad, $f, $z__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_unfold'])($dictMonad, $f, $z__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
if ((($__case_0)->tag === "Nothing")) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($dictMonad, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Control_Monad_List_Trans_ListT'])(($map2)($g, ($f)($z)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_uncons
$Control_Monad_List_Trans_uncons = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
return (function() use ($pure1, $dictMonad, $bind) {
  $__body = function($v) use ($pure1, $dictMonad, $bind) {
    $__case_0 = $v;
    if (true) {
$l = $__case_0;
$g = (function() use ($pure1, $dictMonad) {
  $__body = function($v1) use ($pure1, $dictMonad) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($pure1)(($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Lazy_force'])($s))));
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_List_Trans_uncons'])($dictMonad, ($GLOBALS['Data_Lazy_force'])($s));
} else {
if ((($__case_0)->tag === "Done")) {
return ($pure1)($GLOBALS['Data_Maybe_Nothing']);
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v1) use ($pure1, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)($l, $g);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($pure1, $dictMonad, $bind, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_tail
$Control_Monad_List_Trans_tail = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map2 = ($GLOBALS['Data_Functor_map'])((((((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$uncons1 = ($GLOBALS['Control_Monad_List_Trans_uncons'])($dictMonad);
    $__res = (function() use ($map2, $uncons1) {
  $__fn = function($l) use ($map2, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($map2)(($GLOBALS['Control_Monad_List_Trans_map'])($GLOBALS['Data_Tuple_snd']), ($uncons1)($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_stepMap
$Control_Monad_List_Trans_stepMap = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map2 = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map2) {
  $__body = function($f, $v) use ($map2) {
    $__case_0 = $f;
    $__case_1 = $v;
    if (true) {
$f1 = $__case_0;
$l = $__case_1;
return ($GLOBALS['Control_Monad_List_Trans_ListT'])(($map2)($f1, $l));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map2, $__body, &$__fn) {
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

// Control_Monad_List_Trans_takeWhile
$Control_Monad_List_Trans_takeWhile = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$stepMap1 = ($GLOBALS['Control_Monad_List_Trans_stepMap'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return (function() use ($dictApplicative, $stepMap1) {
  $__fn = function($f) use ($dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$g = (function() use ($f, $dictApplicative) {
  $__body = function($v) use ($f, $dictApplicative) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$__case_0 = ($f)($a);
if (($__case_0 === true)) {
return ($GLOBALS['Control_Monad_List_Trans_Yield'])($a, ($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_takeWhile'])($dictApplicative, $f), $s));
} else {
if (true) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_takeWhile'])($dictApplicative, $f), $s));
} else {
if ((($__case_0)->tag === "Done")) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($f, $dictApplicative, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_scanl
$Control_Monad_List_Trans_scanl = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map2 = ($GLOBALS['Data_Functor_map'])((((((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$unfold1 = ($GLOBALS['Control_Monad_List_Trans_unfold'])($dictMonad);
    $__res = (function() use ($map2, $unfold1) {
  $__fn = function($f, $b = null, $l = null) use ($map2, $unfold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$g = (function() use ($f, $map2) {
  $__body = function($v) use ($f, $map2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$b__prime__ = ($__case_0)->values[0];
$l__prime__ = ($__case_0)->values[1];
$h = (function() use ($f, $b__prime__) {
  $__body = function($v1) use ($f, $b__prime__) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$b__prime____prime__ = ($f)($b__prime__, $a);
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_Tuple_Tuple'])($b__prime____prime__, ($GLOBALS['Data_Lazy_force'])($s)), $b__prime__));
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_Tuple_Tuple'])($b__prime__, ($GLOBALS['Data_Lazy_force'])($s)), $b__prime__));
} else {
if ((($__case_0)->tag === "Done")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v1) use ($f, $b__prime__, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($map2)($h, $l__prime__);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($f, $map2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfold1)($g, ($GLOBALS['Data_Tuple_Tuple'])($b, $l));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_prepend'
$Control_Monad_List_Trans_prepend__prime__ = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($pure1) {
  $__fn = function($h, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_List_Trans_ListT'])(($pure1)(($GLOBALS['Control_Monad_List_Trans_Yield'])($h, $t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_prepend
$Control_Monad_List_Trans_prepend = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$prepend__prime__1 = ($GLOBALS['Control_Monad_List_Trans_prepend__prime__'])($dictApplicative);
    $__res = (function() use ($prepend__prime__1) {
  $__fn = function($h, $t = null) use ($prepend__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($prepend__prime__1)($h, ($GLOBALS['Data_Lazy_defer'])(($GLOBALS['Data_Function_const'])($t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_nil
$Control_Monad_List_Trans_nil = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_ListT'])(($GLOBALS['Control_Applicative_pure'])($dictApplicative, $GLOBALS['Control_Monad_List_Trans_Done']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_singleton
$Control_Monad_List_Trans_singleton = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$prepend1 = ($GLOBALS['Control_Monad_List_Trans_prepend'])($dictApplicative);
$nil1 = ($GLOBALS['Control_Monad_List_Trans_nil'])($dictApplicative);
    $__res = (function() use ($prepend1, $nil1) {
  $__fn = function($a) use ($prepend1, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($prepend1)($a, $nil1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_take
$Control_Monad_List_Trans_take = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$nil1 = ($GLOBALS['Control_Monad_List_Trans_nil'])($dictApplicative);
$stepMap1 = ($GLOBALS['Control_Monad_List_Trans_stepMap'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return (function() use ($nil1, $dictApplicative, $stepMap1) {
  $__body = function($v, $v1) use ($nil1, $dictApplicative, $stepMap1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (($__case_0 === 0)) {
return $nil1;
} else {
if (true) {
$n = $__case_0;
$fa = $__case_1;
$f = (function() use ($dictApplicative, $n) {
  $__body = function($v2) use ($dictApplicative, $n) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($GLOBALS['Control_Monad_List_Trans_Yield'])($a, ($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_take'])($dictApplicative, ($GLOBALS['Control_Monad_List_Trans_sub'])($n, 1)), $s));
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_take'])($dictApplicative, $n), $s));
} else {
if ((($__case_0)->tag === "Done")) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v2) use ($dictApplicative, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($nil1, $dictApplicative, $stepMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_zipWith'
$Control_Monad_List_Trans_zipWith__prime__ = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$Applicative0 = (($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']);
$pure1 = ($GLOBALS['Control_Applicative_pure'])($Applicative0);
$nil1 = ($GLOBALS['Control_Monad_List_Trans_nil'])($Applicative0);
$Bind1 = (($dictMonad)->Bind1)($GLOBALS['Prim_undefined']);
$Functor0 = (((($Bind1)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']);
$map2 = ($GLOBALS['Data_Functor_map'])($Functor0);
$prepend__prime__1 = ($GLOBALS['Control_Monad_List_Trans_prepend__prime__'])($Applicative0);
$wrapEffect1 = ($GLOBALS['Control_Monad_List_Trans_wrapEffect'])($Functor0);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$uncons1 = ($GLOBALS['Control_Monad_List_Trans_uncons'])($dictMonad);
return (function() use ($pure1, $nil1, $map2, $prepend__prime__1, $dictMonad, $wrapEffect1, $bind, $uncons1) {
  $__fn = function($f) use ($pure1, $nil1, $map2, $prepend__prime__1, $dictMonad, $wrapEffect1, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$g = (function() use ($pure1, $nil1, $map2, $prepend__prime__1, $dictMonad, $f) {
  $__body = function($v, $v1) use ($pure1, $nil1, $map2, $prepend__prime__1, $dictMonad, $f) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if ((($__case_1)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($nil1);
} else {
if ((((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple")) && ((($__case_1)->tag === "Just") && ((($__case_1)->values[0])->tag === "Tuple")))) {
$ha = (($__case_0)->values[0])->values[0];
$ta = (($__case_0)->values[0])->values[1];
$hb = (($__case_1)->values[0])->values[0];
$tb = (($__case_1)->values[0])->values[1];
return ($map2)(($GLOBALS['Data_Function_flip'])($prepend__prime__1, ($GLOBALS['Data_Lazy_defer'])((function() use ($dictMonad, $f, $ta, $tb) {
  $__fn = function($v2) use ($dictMonad, $f, $ta, $tb, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_zipWith__prime__'])($dictMonad, $f, $ta, $tb);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), ($f)($ha, $hb));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($pure1, $nil1, $map2, $prepend__prime__1, $dictMonad, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$loop = (function() use ($wrapEffect1, $bind, $uncons1, $g) {
  $__fn = function($fa, $fb = null) use ($wrapEffect1, $bind, $uncons1, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($wrapEffect1)(($bind)(($uncons1)($fa), (function() use ($bind, $uncons1, $fb, $g) {
  $__fn = function($ua) use ($bind, $uncons1, $fb, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($uncons1)($fb), (function() use ($g, $ua) {
  $__fn = function($ub) use ($g, $ua, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($g)($ua, $ub);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $loop;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_zipWith
$Control_Monad_List_Trans_zipWith = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$zipWith__prime__1 = ($GLOBALS['Control_Monad_List_Trans_zipWith__prime__'])($dictMonad);
    $__res = (function() use ($pure1, $zipWith__prime__1) {
  $__fn = function($f) use ($pure1, $zipWith__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$g = (function() use ($pure1, $f) {
  $__fn = function($a, $b = null) use ($pure1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($pure1)(($f)($a, $b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($zipWith__prime__1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_newtypeListT
$Control_Monad_List_Trans_newtypeListT = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_List_Trans_mapMaybe
$Control_Monad_List_Trans_mapMaybe = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$stepMap1 = ($GLOBALS['Control_Monad_List_Trans_stepMap'])($dictFunctor);
return (function() use ($dictFunctor, $stepMap1) {
  $__fn = function($f) use ($dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$g = (function() use ($f, $dictFunctor) {
  $__body = function($v) use ($f, $dictFunctor) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_fromMaybe'])($GLOBALS['Control_Monad_List_Trans_Skip'], ($GLOBALS['Control_Monad_List_Trans_map'])($GLOBALS['Control_Monad_List_Trans_Yield'], ($f)($a)), ($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_mapMaybe'])($dictFunctor, $f), $s));
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_mapMaybe'])($dictFunctor, $f), $s));
} else {
if ((($__case_0)->tag === "Done")) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($f, $dictFunctor, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_iterate
$Control_Monad_List_Trans_iterate = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$unfold1 = ($GLOBALS['Control_Monad_List_Trans_unfold'])($dictMonad);
    $__res = (function() use ($pure1, $unfold1) {
  $__fn = function($f, $a = null) use ($pure1, $unfold1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$g = (function() use ($pure1, $f) {
  $__fn = function($x) use ($pure1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure1)(($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])(($f)($x), $x)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($unfold1)($g, $a);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_repeat
$Control_Monad_List_Trans_repeat = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_iterate'])($dictMonad, $GLOBALS['Control_Monad_List_Trans_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_head
$Control_Monad_List_Trans_head = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map2 = ($GLOBALS['Data_Functor_map'])((((((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$uncons1 = ($GLOBALS['Control_Monad_List_Trans_uncons'])($dictMonad);
    $__res = (function() use ($map2, $uncons1) {
  $__fn = function($l) use ($map2, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($map2)(($GLOBALS['Control_Monad_List_Trans_map'])($GLOBALS['Data_Tuple_fst']), ($uncons1)($l));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_functorListT
$Control_Monad_List_Trans_functorListT = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$stepMap1 = ($GLOBALS['Control_Monad_List_Trans_stepMap'])($dictFunctor);
return ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() use ($dictFunctor, $stepMap1) {
  $__fn = function($f) use ($dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$g = (function() use ($f, $dictFunctor) {
  $__body = function($v) use ($f, $dictFunctor) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($GLOBALS['Control_Monad_List_Trans_Yield'])(($f)($a), ($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Data_Functor_map'])(($GLOBALS['Control_Monad_List_Trans_functorListT'])($dictFunctor), $f), $s));
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Data_Functor_map'])(($GLOBALS['Control_Monad_List_Trans_functorListT'])($dictFunctor), $f), $s));
} else {
if ((($__case_0)->tag === "Done")) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($f, $dictFunctor, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_fromEffect
$Control_Monad_List_Trans_fromEffect = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map2 = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$nil1 = ($GLOBALS['Control_Monad_List_Trans_nil'])($dictApplicative);
    $__res = (function() use ($map2, $nil1) {
  $__fn = function($fa) use ($map2, $nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_ListT'])(($map2)(($GLOBALS['Data_Function_flip'])($GLOBALS['Control_Monad_List_Trans_Yield'], ($GLOBALS['Data_Lazy_defer'])((function() use ($nil1) {
  $__fn = function($v) use ($nil1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $nil1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())), $fa));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_monadTransListT
$Control_Monad_List_Trans_monadTransListT = ($GLOBALS['Control_Monad_Trans_Class_MonadTrans__dollar__Dict'])((object)["lift" => (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_fromEffect'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Monad_List_Trans_lift
$Control_Monad_List_Trans_lift = ($GLOBALS['Control_Monad_Trans_Class_lift'])($GLOBALS['Control_Monad_List_Trans_monadTransListT']);

// Control_Monad_List_Trans_foldlRec'
$Control_Monad_List_Trans_foldlRec__prime__ = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']);
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
$bind = ($GLOBALS['Control_Bind_bind'])((($Monad0)->Bind1)($GLOBALS['Prim_undefined']));
$uncons1 = ($GLOBALS['Control_Monad_List_Trans_uncons'])($Monad0);
$tailRecM2 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM2'])($dictMonadRec);
    $__res = (function() use ($pure1, $bind, $uncons1, $tailRecM2) {
  $__fn = function($f) use ($pure1, $bind, $uncons1, $tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$loop = (function() use ($pure1, $bind, $f, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, $bind, $f, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$g = (function() use ($pure1, $b, $bind, $f) {
  $__body = function($v) use ($pure1, $b, $bind, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)(($GLOBALS['Control_Monad_Rec_Class_Done'])($b));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$as = (($__case_0)->values[0])->values[1];
return ($bind)(($f)($b, $a), (function() use ($pure1, $as) {
  $__fn = function($b__prime__) use ($pure1, $as, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure1)(($GLOBALS['Control_Monad_Rec_Class_Loop'])((object)["a" => $b__prime__, "b" => $as]));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, $bind, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($bind)(($uncons1)($l), $g);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($loop);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_runListTRec
$Control_Monad_List_Trans_runListTRec = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])((((($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']))->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_List_Trans_foldlRec__prime__'])($dictMonadRec, (function() use ($pure1) {
  $__fn = function($v, $v1 = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($pure1)($GLOBALS['Data_Unit_unit']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_foldlRec
$Control_Monad_List_Trans_foldlRec = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadRec)->Monad0)($GLOBALS['Prim_undefined']);
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
$bind = ($GLOBALS['Control_Bind_bind'])((($Monad0)->Bind1)($GLOBALS['Prim_undefined']));
$uncons1 = ($GLOBALS['Control_Monad_List_Trans_uncons'])($Monad0);
$tailRecM2 = ($GLOBALS['Control_Monad_Rec_Class_tailRecM2'])($dictMonadRec);
    $__res = (function() use ($pure1, $bind, $uncons1, $tailRecM2) {
  $__fn = function($f) use ($pure1, $bind, $uncons1, $tailRecM2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$loop = (function() use ($pure1, $f, $bind, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, $f, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$g = (function() use ($pure1, $b, $f) {
  $__body = function($v) use ($pure1, $b, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)(($GLOBALS['Control_Monad_Rec_Class_Done'])($b));
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$as = (($__case_0)->values[0])->values[1];
return ($pure1)(($GLOBALS['Control_Monad_Rec_Class_Loop'])((object)["a" => ($f)($b, $a), "b" => $as]));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($bind)(($uncons1)($l), $g);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM2)($loop);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_foldl'
$Control_Monad_List_Trans_foldl__prime__ = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$uncons1 = ($GLOBALS['Control_Monad_List_Trans_uncons'])($dictMonad);
    $__res = (function() use ($pure1, $bind, $uncons1) {
  $__fn = function($f) use ($pure1, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$loop = (function() use ($pure1, $bind, $f, &$loop, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, $bind, $f, &$loop, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$g = (function() use ($pure1, $b, $bind, $f, &$loop) {
  $__body = function($v) use ($pure1, $b, $bind, $f, &$loop) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$as = (($__case_0)->values[0])->values[1];
return ($bind)(($f)($b, $a), ($GLOBALS['Data_Function_flip'])($loop, $as));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, $bind, $f, &$loop, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)(($uncons1)($l), $g);
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $loop;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_runListT
$Control_Monad_List_Trans_runListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_List_Trans_foldl__prime__'])($dictMonad, (function() use ($pure1) {
  $__fn = function($v, $v1 = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($pure1)($GLOBALS['Data_Unit_unit']);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $GLOBALS['Data_Unit_unit']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_foldl
$Control_Monad_List_Trans_foldl = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']));
$bind = ($GLOBALS['Control_Bind_bind'])((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']));
$uncons1 = ($GLOBALS['Control_Monad_List_Trans_uncons'])($dictMonad);
    $__res = (function() use ($pure1, $bind, $uncons1) {
  $__fn = function($f) use ($pure1, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$loop = (function() use ($pure1, &$loop, $f, $bind, $uncons1) {
  $__fn = function($b, $l = null) use ($pure1, &$loop, $f, $bind, $uncons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$g = (function() use ($pure1, $b, &$loop, $f) {
  $__body = function($v) use ($pure1, $b, &$loop, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($pure1)($b);
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$a = (($__case_0)->values[0])->values[0];
$as = (($__case_0)->values[0])->values[1];
return ($loop)(($f)($b, $a), $as);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pure1, $b, &$loop, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($bind)(($uncons1)($l), $g);
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = $loop;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_filter
$Control_Monad_List_Trans_filter = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$stepMap1 = ($GLOBALS['Control_Monad_List_Trans_stepMap'])($dictFunctor);
return (function() use ($dictFunctor, $stepMap1) {
  $__fn = function($f) use ($dictFunctor, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$g = (function() use ($dictFunctor, $f) {
  $__body = function($v) use ($dictFunctor, $f) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$s__prime__ = ($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_filter'])($dictFunctor, $f), $s);
$__case_0 = ($f)($a);
if (($__case_0 === true)) {
return ($GLOBALS['Control_Monad_List_Trans_Yield'])($a, $s__prime__);
} else {
if (true) {
return ($GLOBALS['Control_Monad_List_Trans_Skip'])($s__prime__);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
$s__prime__ = ($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_filter'])($dictFunctor, $f), $s);
return ($GLOBALS['Control_Monad_List_Trans_Skip'])($s__prime__);
} else {
if ((($__case_0)->tag === "Done")) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($dictFunctor, $f, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_dropWhile
$Control_Monad_List_Trans_dropWhile = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$stepMap1 = ($GLOBALS['Control_Monad_List_Trans_stepMap'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return (function() use ($dictApplicative, $stepMap1) {
  $__fn = function($f) use ($dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$g = (function() use ($f, $dictApplicative) {
  $__body = function($v) use ($f, $dictApplicative) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$__case_0 = ($f)($a);
if (($__case_0 === true)) {
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_dropWhile'])($dictApplicative, $f), $s));
} else {
if (true) {
return ($GLOBALS['Control_Monad_List_Trans_Yield'])($a, $s);
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_dropWhile'])($dictApplicative, $f), $s));
} else {
if ((($__case_0)->tag === "Done")) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($f, $dictApplicative, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_drop
$Control_Monad_List_Trans_drop = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$stepMap1 = ($GLOBALS['Control_Monad_List_Trans_stepMap'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return (function() use ($dictApplicative, $stepMap1) {
  $__body = function($v, $v1) use ($dictApplicative, $stepMap1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (($__case_0 === 0)) {
$fa = $__case_1;
return $fa;
} else {
if (true) {
$n = $__case_0;
$fa = $__case_1;
$f = (function() use ($dictApplicative, $n) {
  $__body = function($v2) use ($dictApplicative, $n) {
    $__case_0 = $v2;
    if ((($__case_0)->tag === "Yield")) {
$s = ($__case_0)->values[1];
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_drop'])($dictApplicative, ($GLOBALS['Control_Monad_List_Trans_sub'])($n, 1)), $s));
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])(($GLOBALS['Control_Monad_List_Trans_drop'])($dictApplicative, $n), $s));
} else {
if ((($__case_0)->tag === "Done")) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v2) use ($dictApplicative, $n, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($stepMap1)($f, $fa);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null) use ($dictApplicative, $stepMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_cons
$Control_Monad_List_Trans_cons = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pure1 = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($pure1) {
  $__fn = function($lh, $t = null) use ($pure1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Control_Monad_List_Trans_ListT'])(($pure1)(($GLOBALS['Control_Monad_List_Trans_Yield'])(($GLOBALS['Data_Lazy_force'])($lh), $t)));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_unfoldable1ListT
$Control_Monad_List_Trans_unfoldable1ListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Applicative0 = (($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']);
$singleton1 = ($GLOBALS['Control_Monad_List_Trans_singleton'])($Applicative0);
$cons1 = ($GLOBALS['Control_Monad_List_Trans_cons'])($Applicative0);
    $__res = ($GLOBALS['Data_Unfoldable1_Unfoldable1__dollar__Dict'])((object)["unfoldr1" => (function() use ($singleton1, $cons1) {
  $__fn = function($f, $b = null) use ($singleton1, $cons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($singleton1, $cons1, &$go, $f) {
  $__fn = function($v) use ($singleton1, $cons1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Nothing"))) {
$x = ($__case_0)->values[0];
return ($singleton1)($x);
} else {
if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[1])->tag === "Just"))) {
$x = ($__case_0)->values[0];
$y = (($__case_0)->values[1])->values[0];
return ($cons1)(($GLOBALS['Control_Monad_List_Trans_pure'])($x), ($GLOBALS['Data_Lazy_defer'])((function() use (&$go, $f, $y) {
  $__fn = function($v1) use (&$go, $f, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($go)(($f)($y));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
    $__res = ($go)(($f)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_unfoldableListT
$Control_Monad_List_Trans_unfoldableListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Applicative0 = (($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']);
$nil1 = ($GLOBALS['Control_Monad_List_Trans_nil'])($Applicative0);
$cons1 = ($GLOBALS['Control_Monad_List_Trans_cons'])($Applicative0);
$unfoldable1ListT1 = ($GLOBALS['Control_Monad_List_Trans_unfoldable1ListT'])($dictMonad);
    $__res = ($GLOBALS['Data_Unfoldable_Unfoldable__dollar__Dict'])((object)["unfoldr" => (function() use ($nil1, $cons1) {
  $__fn = function($f, $b = null) use ($nil1, $cons1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use ($nil1, $cons1, &$go, $f) {
  $__fn = function($v) use ($nil1, $cons1, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$__case_0 = $v;
if ((($__case_0)->tag === "Nothing")) {
return $nil1;
} else {
if (((($__case_0)->tag === "Just") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$x = (($__case_0)->values[0])->values[0];
$y = (($__case_0)->values[0])->values[1];
return ($cons1)(($GLOBALS['Control_Monad_List_Trans_pure'])($x), ($GLOBALS['Data_Lazy_defer'])((function() use (&$go, $f, $y) {
  $__fn = function($v1) use (&$go, $f, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($go)(($f)($y));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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
    $__res = ($go)(($f)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Unfoldable10" => (function() use ($unfoldable1ListT1) {
  $__fn = function($__dollar____unused) use ($unfoldable1ListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $unfoldable1ListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_semigroupListT
$Control_Monad_List_Trans_semigroupListT = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
return ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => ($GLOBALS['Control_Monad_List_Trans_concat'])($dictApplicative)]);
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_concat
$Control_Monad_List_Trans_concat = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$stepMap1 = ($GLOBALS['Control_Monad_List_Trans_stepMap'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return (function() use ($dictApplicative, $stepMap1) {
  $__fn = function($x, $y = null) use ($dictApplicative, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$f = (function() use ($dictApplicative, $y) {
  $__body = function($v) use ($dictApplicative, $y) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
return ($GLOBALS['Control_Monad_List_Trans_Yield'])($a, ($GLOBALS['Control_Monad_List_Trans_map1'])((function() use ($dictApplicative, $y) {
  $__fn = function($v1) use ($dictApplicative, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_append'])(($GLOBALS['Control_Monad_List_Trans_semigroupListT'])($dictApplicative), $v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])((function() use ($dictApplicative, $y) {
  $__fn = function($v1) use ($dictApplicative, $y, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Semigroup_append'])(($GLOBALS['Control_Monad_List_Trans_semigroupListT'])($dictApplicative), $v1, $y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
} else {
if ((($__case_0)->tag === "Done")) {
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Data_Lazy_defer'])(($GLOBALS['Data_Function_const'])($y)));
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($dictApplicative, $y, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($f, $x);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_monoidListT
$Control_Monad_List_Trans_monoidListT = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupListT1 = ($GLOBALS['Control_Monad_List_Trans_semigroupListT'])($dictApplicative);
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Control_Monad_List_Trans_nil'])($dictApplicative), "Semigroup0" => (function() use ($semigroupListT1) {
  $__fn = function($__dollar____unused) use ($semigroupListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_catMaybes
$Control_Monad_List_Trans_catMaybes = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_mapMaybe'])($dictFunctor, $GLOBALS['Control_Monad_List_Trans_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_monadListT
$Control_Monad_List_Trans_monadListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
return ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_applicativeListT'])($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_bindListT'])($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_bindListT
$Control_Monad_List_Trans_bindListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$append = ($GLOBALS['Data_Semigroup_append'])(($GLOBALS['Control_Monad_List_Trans_semigroupListT'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined'])));
$stepMap1 = ($GLOBALS['Control_Monad_List_Trans_stepMap'])((((((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() use ($append, $dictMonad, $stepMap1) {
  $__fn = function($fa, $f = null) use ($append, $dictMonad, $stepMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$g = (function() use ($append, $f, $dictMonad) {
  $__body = function($v) use ($append, $f, $dictMonad) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Yield")) {
$a = ($__case_0)->values[0];
$s = ($__case_0)->values[1];
$h = (function() use ($append, $f, $a, $dictMonad) {
  $__fn = function($s__prime__) use ($append, $f, $a, $dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($append)(($f)($a), ($GLOBALS['Control_Bind_bind'])(($GLOBALS['Control_Monad_List_Trans_bindListT'])($dictMonad), $s__prime__, $f));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])($h, $s));
} else {
if ((($__case_0)->tag === "Skip")) {
$s = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_List_Trans_Skip'])(($GLOBALS['Control_Monad_List_Trans_map1'])((function() use ($dictMonad, $f) {
  $__fn = function($v1) use ($dictMonad, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Bind_bind'])(($GLOBALS['Control_Monad_List_Trans_bindListT'])($dictMonad), $v1, $f);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), $s));
} else {
if ((($__case_0)->tag === "Done")) {
return $GLOBALS['Control_Monad_List_Trans_Done'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($v) use ($append, $f, $dictMonad, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($stepMap1)($g, $fa);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_applyListT'])($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_applyListT
$Control_Monad_List_Trans_applyListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$functorListT1 = ($GLOBALS['Control_Monad_List_Trans_functorListT'])((((((($dictMonad)->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
return ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => ($GLOBALS['Control_Monad_ap'])(($GLOBALS['Control_Monad_List_Trans_monadListT'])($dictMonad)), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_applicativeListT
$Control_Monad_List_Trans_applicativeListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
return ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => ($GLOBALS['Control_Monad_List_Trans_singleton'])((($dictMonad)->Applicative0)($GLOBALS['Prim_undefined'])), "Apply0" => (function() use ($dictMonad) {
  $__fn = function($__dollar____unused) use ($dictMonad, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Control_Monad_List_Trans_applyListT'])($dictMonad);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_monadEffectListT
$Control_Monad_List_Trans_monadEffectListT = (function() {
  $__fn = function($dictMonadEffect) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadEffect)->Monad0)($GLOBALS['Prim_undefined']);
$monadListT1 = ($GLOBALS['Control_Monad_List_Trans_monadListT'])($Monad0);
    $__res = ($GLOBALS['Effect_Class_MonadEffect__dollar__Dict'])((object)["liftEffect" => ($GLOBALS['Control_Monad_List_Trans_compose'])(($GLOBALS['Control_Monad_List_Trans_lift'])($Monad0), ($GLOBALS['Effect_Class_liftEffect'])($dictMonadEffect)), "Monad0" => (function() use ($monadListT1) {
  $__fn = function($__dollar____unused) use ($monadListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_monadSTListT
$Control_Monad_List_Trans_monadSTListT = (function() {
  $__fn = function($dictMonadST) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadST)->Monad0)($GLOBALS['Prim_undefined']);
$monadListT1 = ($GLOBALS['Control_Monad_List_Trans_monadListT'])($Monad0);
    $__res = ($GLOBALS['Control_Monad_ST_Class_MonadST__dollar__Dict'])((object)["liftST" => ($GLOBALS['Control_Monad_List_Trans_compose'])(($GLOBALS['Control_Monad_List_Trans_lift'])($Monad0), ($GLOBALS['Control_Monad_ST_Class_liftST'])($dictMonadST)), "Monad0" => (function() use ($monadListT1) {
  $__fn = function($__dollar____unused) use ($monadListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_altListT
$Control_Monad_List_Trans_altListT = (function() {
  $__fn = function($dictApplicative) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$functorListT1 = ($GLOBALS['Control_Monad_List_Trans_functorListT'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Alt_Alt__dollar__Dict'])((object)["alt" => ($GLOBALS['Control_Monad_List_Trans_concat'])($dictApplicative), "Functor0" => (function() use ($functorListT1) {
  $__fn = function($__dollar____unused) use ($functorListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_plusListT
$Control_Monad_List_Trans_plusListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Applicative0 = (($dictMonad)->Applicative0)($GLOBALS['Prim_undefined']);
$altListT1 = ($GLOBALS['Control_Monad_List_Trans_altListT'])($Applicative0);
    $__res = ($GLOBALS['Control_Plus_Plus__dollar__Dict'])((object)["empty" => ($GLOBALS['Control_Monad_List_Trans_nil'])($Applicative0), "Alt0" => (function() use ($altListT1) {
  $__fn = function($__dollar____unused) use ($altListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $altListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_alternativeListT
$Control_Monad_List_Trans_alternativeListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeListT1 = ($GLOBALS['Control_Monad_List_Trans_applicativeListT'])($dictMonad);
$plusListT1 = ($GLOBALS['Control_Monad_List_Trans_plusListT'])($dictMonad);
    $__res = ($GLOBALS['Control_Alternative_Alternative__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeListT1) {
  $__fn = function($__dollar____unused) use ($applicativeListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Plus1" => (function() use ($plusListT1) {
  $__fn = function($__dollar____unused) use ($plusListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $plusListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_List_Trans_monadPlusListT
$Control_Monad_List_Trans_monadPlusListT = (function() {
  $__fn = function($dictMonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$monadListT1 = ($GLOBALS['Control_Monad_List_Trans_monadListT'])($dictMonad);
$alternativeListT1 = ($GLOBALS['Control_Monad_List_Trans_alternativeListT'])($dictMonad);
    $__res = ($GLOBALS['Control_MonadPlus_MonadPlus__dollar__Dict'])((object)["Monad0" => (function() use ($monadListT1) {
  $__fn = function($__dollar____unused) use ($monadListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $monadListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Alternative1" => (function() use ($alternativeListT1) {
  $__fn = function($__dollar____unused) use ($alternativeListT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $alternativeListT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

