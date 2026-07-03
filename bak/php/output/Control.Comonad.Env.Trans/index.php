<?php

namespace Control\Comonad\Env\Trans;

require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Comonad.Env.Trans/index.php';
require_once __DIR__ . '/../Control.Comonad.Trans.Class/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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


// Control_Comonad_Env_Trans_map
$Control_Comonad_Env_Trans_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Functor_functorFn']);

// Control_Comonad_Env_Trans_composeFlipped
$Control_Comonad_Env_Trans_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Comonad_Env_Trans_EnvT
$Control_Comonad_Env_Trans_EnvT = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Trans_withEnvT
$Control_Comonad_Env_Trans_withEnvT = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($GLOBALS['Control_Comonad_Env_Trans_EnvT'])(($GLOBALS['Data_Tuple_Tuple'])(($f1)($e), $x));
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

// Control_Comonad_Env_Trans_runEnvT
$Control_Comonad_Env_Trans_runEnvT = (function() {
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

// Control_Comonad_Env_Trans_newtypeEnvT
$Control_Comonad_Env_Trans_newtypeEnvT = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Control_Comonad_Env_Trans_mapEnvT
$Control_Comonad_Env_Trans_mapEnvT = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($GLOBALS['Control_Comonad_Env_Trans_EnvT'])(($GLOBALS['Data_Tuple_Tuple'])($e, ($f1)($x)));
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

// Control_Comonad_Env_Trans_functorEnvT
$Control_Comonad_Env_Trans_functorEnvT = (function() {
  $__fn = function($dictFunctor) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() use ($map1) {
  $__body = function($f, $v) use ($map1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($GLOBALS['Control_Comonad_Env_Trans_EnvT'])(($GLOBALS['Data_Tuple_Tuple'])($e, ($map1)($f1, $x)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $__body, &$__fn) {
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

// Control_Comonad_Env_Trans_functorWithIndexEnvT
$Control_Comonad_Env_Trans_functorWithIndexEnvT = (function() {
  $__fn = function($dictFunctorWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapWithIndex = ($GLOBALS['Data_FunctorWithIndex_mapWithIndex'])($dictFunctorWithIndex);
$functorEnvT1 = ($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'])((($dictFunctorWithIndex)->Functor0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FunctorWithIndex_FunctorWithIndex__dollar__Dict'])((object)["mapWithIndex" => (function() use ($mapWithIndex) {
  $__body = function($f, $v) use ($mapWithIndex) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($GLOBALS['Control_Comonad_Env_Trans_EnvT'])(($GLOBALS['Data_Tuple_Tuple'])($e, ($mapWithIndex)($f1, $x)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($mapWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorEnvT1) {
  $__fn = function($__dollar____unused) use ($functorEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Trans_foldableEnvT
$Control_Comonad_Env_Trans_foldableEnvT = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldl = ($GLOBALS['Data_Foldable_foldl'])($dictFoldable);
$foldr = ($GLOBALS['Data_Foldable_foldr'])($dictFoldable);
$foldMap = ($GLOBALS['Data_Foldable_foldMap'])($dictFoldable);
    $__res = ($GLOBALS['Data_Foldable_Foldable__dollar__Dict'])((object)["foldl" => (function() use ($foldl) {
  $__body = function($fn, $a, $v) use ($foldl) {
    $__case_0 = $fn;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$fn1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[1];
return ($foldl)($fn1, $a1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($fn, $a = null, $v = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($fn, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() use ($foldr) {
  $__body = function($fn, $a, $v) use ($foldr) {
    $__case_0 = $fn;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$fn1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[1];
return ($foldr)($fn1, $a1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($fn, $a = null, $v = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($fn, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($fn, $v) use ($foldMap1) {
    $__case_0 = $fn;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$fn1 = $__case_0;
$x = ($__case_1)->values[1];
return ($foldMap1)($fn1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($fn, $v = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($fn, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Control_Comonad_Env_Trans_foldableWithIndexEnvT
$Control_Comonad_Env_Trans_foldableWithIndexEnvT = (function() {
  $__fn = function($dictFoldableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldlWithIndex = ($GLOBALS['Data_FoldableWithIndex_foldlWithIndex'])($dictFoldableWithIndex);
$foldrWithIndex = ($GLOBALS['Data_FoldableWithIndex_foldrWithIndex'])($dictFoldableWithIndex);
$foldMapWithIndex = ($GLOBALS['Data_FoldableWithIndex_foldMapWithIndex'])($dictFoldableWithIndex);
$foldableEnvT1 = ($GLOBALS['Control_Comonad_Env_Trans_foldableEnvT'])((($dictFoldableWithIndex)->Foldable0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_FoldableWithIndex_FoldableWithIndex__dollar__Dict'])((object)["foldlWithIndex" => (function() use ($foldlWithIndex) {
  $__body = function($f, $a, $v) use ($foldlWithIndex) {
    $__case_0 = $f;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[1];
return ($foldlWithIndex)($f1, $a1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $a = null, $v = null) use ($foldlWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldrWithIndex" => (function() use ($foldrWithIndex) {
  $__body = function($f, $a, $v) use ($foldrWithIndex) {
    $__case_0 = $f;
    $__case_1 = $a;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$a1 = $__case_1;
$x = ($__case_2)->values[1];
return ($foldrWithIndex)($f1, $a1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $a = null, $v = null) use ($foldrWithIndex, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $a, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => (function() use ($foldMapWithIndex) {
  $__fn = function($dictMonoid) use ($foldMapWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMapWithIndex1 = ($foldMapWithIndex)($dictMonoid);
    $__res = (function() use ($foldMapWithIndex1) {
  $__body = function($f, $v) use ($foldMapWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$x = ($__case_1)->values[1];
return ($foldMapWithIndex1)($f1, $x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($foldMapWithIndex1, $__body, &$__fn) {
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
})(), "Foldable0" => (function() use ($foldableEnvT1) {
  $__fn = function($__dollar____unused) use ($foldableEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Trans_traversableEnvT
$Control_Comonad_Env_Trans_traversableEnvT = (function() {
  $__fn = function($dictTraversable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sequence = ($GLOBALS['Data_Traversable_sequence'])($dictTraversable);
$traverse = ($GLOBALS['Data_Traversable_traverse'])($dictTraversable);
$functorEnvT1 = ($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'])((($dictTraversable)->Functor0)($GLOBALS['Prim_undefined']));
$foldableEnvT1 = ($GLOBALS['Control_Comonad_Env_Trans_foldableEnvT'])((($dictTraversable)->Foldable1)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Traversable_Traversable__dollar__Dict'])((object)["sequence" => (function() use ($sequence) {
  $__fn = function($dictApplicative) use ($sequence, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$sequence1 = ($sequence)($dictApplicative);
    $__res = (function() use ($map1, $sequence1) {
  $__body = function($v) use ($map1, $sequence1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($map1)(($GLOBALS['Control_Comonad_Env_Trans_map'])($GLOBALS['Control_Comonad_Env_Trans_EnvT'], ($GLOBALS['Data_Tuple_Tuple'])($a)), ($sequence1)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($map1, $sequence1, $__body, &$__fn) {
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
})(), "traverse" => (function() use ($traverse) {
  $__fn = function($dictApplicative) use ($traverse, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$traverse1 = ($traverse)($dictApplicative);
    $__res = (function() use ($map1, $traverse1) {
  $__body = function($f, $v) use ($map1, $traverse1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($map1)(($GLOBALS['Control_Comonad_Env_Trans_map'])($GLOBALS['Control_Comonad_Env_Trans_EnvT'], ($GLOBALS['Data_Tuple_Tuple'])($a)), ($traverse1)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $traverse1, $__body, &$__fn) {
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
})(), "Functor0" => (function() use ($functorEnvT1) {
  $__fn = function($__dollar____unused) use ($functorEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Foldable1" => (function() use ($foldableEnvT1) {
  $__fn = function($__dollar____unused) use ($foldableEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Trans_traversableWithIndexEnvT
$Control_Comonad_Env_Trans_traversableWithIndexEnvT = (function() {
  $__fn = function($dictTraversableWithIndex) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$traverseWithIndex = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndex'])($dictTraversableWithIndex);
$functorWithIndexEnvT1 = ($GLOBALS['Control_Comonad_Env_Trans_functorWithIndexEnvT'])((($dictTraversableWithIndex)->FunctorWithIndex0)($GLOBALS['Prim_undefined']));
$foldableWithIndexEnvT1 = ($GLOBALS['Control_Comonad_Env_Trans_foldableWithIndexEnvT'])((($dictTraversableWithIndex)->FoldableWithIndex1)($GLOBALS['Prim_undefined']));
$traversableEnvT1 = ($GLOBALS['Control_Comonad_Env_Trans_traversableEnvT'])((($dictTraversableWithIndex)->Traversable2)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'])((object)["traverseWithIndex" => (function() use ($traverseWithIndex) {
  $__fn = function($dictApplicative) use ($traverseWithIndex, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])((((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$traverseWithIndex1 = ($traverseWithIndex)($dictApplicative);
    $__res = (function() use ($map1, $traverseWithIndex1) {
  $__body = function($f, $v) use ($map1, $traverseWithIndex1) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($map1)(($GLOBALS['Control_Comonad_Env_Trans_map'])($GLOBALS['Control_Comonad_Env_Trans_EnvT'], ($GLOBALS['Data_Tuple_Tuple'])($e)), ($traverseWithIndex1)($f1, $x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $traverseWithIndex1, $__body, &$__fn) {
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
})(), "FunctorWithIndex0" => (function() use ($functorWithIndexEnvT1) {
  $__fn = function($__dollar____unused) use ($functorWithIndexEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorWithIndexEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "FoldableWithIndex1" => (function() use ($foldableWithIndexEnvT1) {
  $__fn = function($__dollar____unused) use ($foldableWithIndexEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $foldableWithIndexEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Traversable2" => (function() use ($traversableEnvT1) {
  $__fn = function($__dollar____unused) use ($traversableEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $traversableEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Trans_extendEnvT
$Control_Comonad_Env_Trans_extendEnvT = (function() {
  $__fn = function($dictExtend) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Functor0 = (($dictExtend)->Functor0)($GLOBALS['Prim_undefined']);
$map1 = ($GLOBALS['Data_Functor_map'])($Functor0);
$extend = ($GLOBALS['Control_Extend_extend'])($dictExtend);
$functorEnvT1 = ($GLOBALS['Control_Comonad_Env_Trans_functorEnvT'])($Functor0);
    $__res = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() use ($map1, $extend) {
  $__body = function($f, $v) use ($map1, $extend) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$e = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($GLOBALS['Control_Comonad_Env_Trans_EnvT'])(($GLOBALS['Data_Tuple_Tuple'])($e, ($map1)($f1, ($extend)(($GLOBALS['Control_Comonad_Env_Trans_composeFlipped'])(($GLOBALS['Data_Tuple_Tuple'])($e), $GLOBALS['Control_Comonad_Env_Trans_EnvT']), $x))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null) use ($map1, $extend, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($f, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() use ($functorEnvT1) {
  $__fn = function($__dollar____unused) use ($functorEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $functorEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Comonad_Env_Trans_comonadTransEnvT
$Control_Comonad_Env_Trans_comonadTransEnvT = ($GLOBALS['Control_Comonad_Trans_Class_ComonadTrans__dollar__Dict'])((object)["lower" => (function() {
  $__body = function($dictComonad, $v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[1];
return $x;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictComonad, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($dictComonad, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Control_Comonad_Env_Trans_comonadEnvT
$Control_Comonad_Env_Trans_comonadEnvT = (function() {
  $__fn = function($dictComonad) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$extract = ($GLOBALS['Control_Comonad_extract'])($dictComonad);
$extendEnvT1 = ($GLOBALS['Control_Comonad_Env_Trans_extendEnvT'])((($dictComonad)->Extend0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Comonad_Comonad__dollar__Dict'])((object)["extract" => (function() use ($extract) {
  $__body = function($v) use ($extract) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[1];
return ($extract)($x);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($extract, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Extend0" => (function() use ($extendEnvT1) {
  $__fn = function($__dollar____unused) use ($extendEnvT1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $extendEnvT1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

