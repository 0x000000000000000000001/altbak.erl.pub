<?php

namespace Data\Bifoldable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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


// Data_Bifoldable_compose
$Data_Bifoldable_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Bifoldable_identity
$Data_Bifoldable_identity = ($GLOBALS['Control_Category_identity'])($GLOBALS['Control_Category_categoryFn']);

// Data_Bifoldable_unwrap
$Data_Bifoldable_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_Bifoldable_monoidEndo
$Data_Bifoldable_monoidEndo = ($GLOBALS['Data_Monoid_Endo_monoidEndo'])($GLOBALS['Control_Category_categoryFn']);

// Data_Bifoldable_monoidDual
$Data_Bifoldable_monoidDual = ($GLOBALS['Data_Monoid_Dual_monoidDual'])($GLOBALS['Data_Bifoldable_monoidEndo']);

// Data_Bifoldable_Bifoldable$Dict
$Data_Bifoldable_Bifoldable__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifoldr
$Data_Bifoldable_bifoldr = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bifoldr;
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

// Data_Bifoldable_bitraverse_
$Data_Bifoldable_bitraverse_ = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldr1 = ($GLOBALS['Data_Bifoldable_bifoldr'])($dictBifoldable);
    $__res = (function() use ($bifoldr1) {
  $__fn = function($dictApplicative) use ($bifoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applySecond = ($GLOBALS['Control_Apply_applySecond'])((($dictApplicative)->Apply0)($GLOBALS['Prim_undefined']));
$pure = ($GLOBALS['Control_Applicative_pure'])($dictApplicative);
    $__res = (function() use ($bifoldr1, $applySecond, $pure) {
  $__fn = function($f, $g = null) use ($bifoldr1, $applySecond, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($bifoldr1)(($GLOBALS['Data_Bifoldable_compose'])($applySecond, $f), ($GLOBALS['Data_Bifoldable_compose'])($applySecond, $g), ($pure)($GLOBALS['Data_Unit_unit']));
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

// Data_Bifoldable_bifor_
$Data_Bifoldable_bifor_ = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bitraverse_1 = ($GLOBALS['Data_Bifoldable_bitraverse_'])($dictBifoldable);
    $__res = (function() use ($bitraverse_1) {
  $__fn = function($dictApplicative) use ($bitraverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bitraverse_2 = ($bitraverse_1)($dictApplicative);
    $__res = (function() use ($bitraverse_2) {
  $__fn = function($t, $f = null, $g = null) use ($bitraverse_2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($bitraverse_2)($f, $g, $t);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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

// Data_Bifoldable_bisequence_
$Data_Bifoldable_bisequence_ = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bitraverse_1 = ($GLOBALS['Data_Bifoldable_bitraverse_'])($dictBifoldable);
    $__res = (function() use ($bitraverse_1) {
  $__fn = function($dictApplicative) use ($bitraverse_1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bitraverse_1)($dictApplicative, $GLOBALS['Data_Bifoldable_identity'], $GLOBALS['Data_Bifoldable_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifoldl
$Data_Bifoldable_bifoldl = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bifoldl;
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

// Data_Bifoldable_bifoldableTuple
$Data_Bifoldable_bifoldableTuple = ($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'])((object)["bifoldMap" => (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($append) {
  $__body = function($f, $g, $v) use ($append) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Tuple")) {
$f1 = $__case_0;
$g1 = $__case_1;
$a = ($__case_2)->values[0];
$b = ($__case_2)->values[1];
return ($append)(($f1)($a), ($g1)($b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $v = null) use ($append, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($f, $g, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__body = function($f, $g, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $z;
    $__case_3 = $v;
    if ((($__case_3)->tag === "Tuple")) {
$f1 = $__case_0;
$g1 = $__case_1;
$z1 = $__case_2;
$a = ($__case_3)->values[0];
$b = ($__case_3)->values[1];
return ($f1)($a, ($g1)($b, $z1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($f, $g, $z, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__body = function($f, $g, $z, $v) {
    $__case_0 = $f;
    $__case_1 = $g;
    $__case_2 = $z;
    $__case_3 = $v;
    if ((($__case_3)->tag === "Tuple")) {
$f1 = $__case_0;
$g1 = $__case_1;
$z1 = $__case_2;
$a = ($__case_3)->values[0];
$b = ($__case_3)->values[1];
return ($g1)(($f1)($z1, $a), $b);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $g = null, $z = null, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($f, $g, $z, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()]);

// Data_Bifoldable_bifoldableJoker
$Data_Bifoldable_bifoldableJoker = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldr = ($GLOBALS['Data_Foldable_foldr'])($dictFoldable);
$foldl = ($GLOBALS['Data_Foldable_foldl'])($dictFoldable);
$foldMap = ($GLOBALS['Data_Foldable_foldMap'])($dictFoldable);
    $__res = ($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'])((object)["bifoldr" => (function() use ($foldr) {
  $__body = function($v, $r, $u, $v1) use ($foldr) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
return ($foldr)($r1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($v, $r, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl) {
  $__body = function($v, $r, $u, $v1) use ($foldl) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
return ($foldl)($r1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($v, $r, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($v, $r, $v1) use ($foldMap1) {
    $__case_0 = $v;
    $__case_1 = $r;
    $__case_2 = $v1;
    if (true) {
$r1 = $__case_1;
$f = $__case_2;
return ($foldMap1)($r1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $r = null, $v1 = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $r, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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

// Data_Bifoldable_bifoldableEither
$Data_Bifoldable_bifoldableEither = ($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'])((object)["bifoldr" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    if ((($__case_3)->tag === "Left")) {
$f = $__case_0;
$z = $__case_2;
$a = ($__case_3)->values[0];
return ($f)($a, $z);
} else {
if ((($__case_3)->tag === "Right")) {
$g = $__case_1;
$z = $__case_2;
$b = ($__case_3)->values[0];
return ($g)($b, $z);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($v, $v1, $v2, $v3);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__body = function($v, $v1, $v2, $v3) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    $__case_3 = $v3;
    if ((($__case_3)->tag === "Left")) {
$f = $__case_0;
$z = $__case_2;
$a = ($__case_3)->values[0];
return ($f)($z, $a);
} else {
if ((($__case_3)->tag === "Right")) {
$g = $__case_1;
$z = $__case_2;
$b = ($__case_3)->values[0];
return ($g)($z, $b);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($v, $v1, $v2, $v3);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__body = function($dictMonoid, $v, $v1, $v2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    $__case_2 = $v2;
    if ((($__case_2)->tag === "Left")) {
$f = $__case_0;
$a = ($__case_2)->values[0];
return ($f)($a);
} else {
if ((($__case_2)->tag === "Right")) {
$g = $__case_1;
$b = ($__case_2)->values[0];
return ($g)($b);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($dictMonoid, $v = null, $v1 = null, $v2 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($dictMonoid, $v, $v1, $v2);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()]);

// Data_Bifoldable_bifoldableConst
$Data_Bifoldable_bifoldableConst = ($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'])((object)["bifoldr" => (function() {
  $__body = function($f, $v, $z, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $z;
    $__case_3 = $v1;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_2;
$a = $__case_3;
return ($f1)($a, $z1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $z = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($f, $v, $z, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__body = function($f, $v, $z, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $z;
    $__case_3 = $v1;
    if (true) {
$f1 = $__case_0;
$z1 = $__case_2;
$a = $__case_3;
return ($f1)($z1, $a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($f, $v = null, $z = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($f, $v, $z, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__body = function($dictMonoid, $f, $v, $v1) {
    $__case_0 = $f;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$f1 = $__case_0;
$a = $__case_2;
return ($f1)($a);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dictMonoid, $f = null, $v = null, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($dictMonoid, $f, $v, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()]);

// Data_Bifoldable_bifoldableClown
$Data_Bifoldable_bifoldableClown = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldr = ($GLOBALS['Data_Foldable_foldr'])($dictFoldable);
$foldl = ($GLOBALS['Data_Foldable_foldl'])($dictFoldable);
$foldMap = ($GLOBALS['Data_Foldable_foldMap'])($dictFoldable);
    $__res = ($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'])((object)["bifoldr" => (function() use ($foldr) {
  $__body = function($l, $v, $u, $v1) use ($foldr) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
return ($foldr)($l1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldr, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($l, $v, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl) {
  $__body = function($l, $v, $u, $v1) use ($foldl) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $u;
    $__case_3 = $v1;
    if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
return ($foldl)($l1, $u1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldl, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($l, $v, $u, $v1);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($foldMap) {
  $__fn = function($dictMonoid) use ($foldMap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap1 = ($foldMap)($dictMonoid);
    $__res = (function() use ($foldMap1) {
  $__body = function($l, $v, $v1) use ($foldMap1) {
    $__case_0 = $l;
    $__case_1 = $v;
    $__case_2 = $v1;
    if (true) {
$l1 = $__case_0;
$f = $__case_2;
return ($foldMap1)($l1, $f);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $v = null, $v1 = null) use ($foldMap1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($l, $v, $v1);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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

// Data_Bifoldable_bifoldMapDefaultR
$Data_Bifoldable_bifoldMapDefaultR = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldr1 = ($GLOBALS['Data_Bifoldable_bifoldr'])($dictBifoldable);
    $__res = (function() use ($bifoldr1) {
  $__fn = function($dictMonoid) use ($bifoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($bifoldr1, $append, $mempty) {
  $__fn = function($f, $g = null) use ($bifoldr1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($bifoldr1)(($GLOBALS['Data_Bifoldable_compose'])($append, $f), ($GLOBALS['Data_Bifoldable_compose'])($append, $g), $mempty);
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

// Data_Bifoldable_bifoldMapDefaultL
$Data_Bifoldable_bifoldMapDefaultL = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldl1 = ($GLOBALS['Data_Bifoldable_bifoldl'])($dictBifoldable);
    $__res = (function() use ($bifoldl1) {
  $__fn = function($dictMonoid) use ($bifoldl1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
    $__res = (function() use ($bifoldl1, $append, $mempty) {
  $__fn = function($f, $g = null) use ($bifoldl1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($bifoldl1)((function() use ($append, $f) {
  $__fn = function($m, $a = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($append)($m, ($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), (function() use ($append, $g) {
  $__fn = function($m, $b = null) use ($append, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($append)($m, ($g)($b));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
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

// Data_Bifoldable_bifoldMap
$Data_Bifoldable_bifoldMap = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->bifoldMap;
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

// Data_Bifoldable_bifoldableFlip
$Data_Bifoldable_bifoldableFlip = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldr1 = ($GLOBALS['Data_Bifoldable_bifoldr'])($dictBifoldable);
$bifoldl1 = ($GLOBALS['Data_Bifoldable_bifoldl'])($dictBifoldable);
$bifoldMap1 = ($GLOBALS['Data_Bifoldable_bifoldMap'])($dictBifoldable);
    $__res = ($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'])((object)["bifoldr" => (function() use ($bifoldr1) {
  $__body = function($r, $l, $u, $v) use ($bifoldr1) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $u;
    $__case_3 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
return ($bifoldr1)($l1, $r1, $u1, $p);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldr1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($r, $l, $u, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($bifoldl1) {
  $__body = function($r, $l, $u, $v) use ($bifoldl1) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $u;
    $__case_3 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
return ($bifoldl1)($l1, $r1, $u1, $p);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldl1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($r, $l, $u, $v);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($bifoldMap1) {
  $__fn = function($dictMonoid) use ($bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldMap2 = ($bifoldMap1)($dictMonoid);
    $__res = (function() use ($bifoldMap2) {
  $__body = function($r, $l, $v) use ($bifoldMap2) {
    $__case_0 = $r;
    $__case_1 = $l;
    $__case_2 = $v;
    if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$p = $__case_2;
return ($bifoldMap2)($l1, $r1, $p);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($r, $l = null, $v = null) use ($bifoldMap2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($r, $l, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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

// Data_Bifoldable_bifoldlDefault
$Data_Bifoldable_bifoldlDefault = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldMap1 = ($GLOBALS['Data_Bifoldable_bifoldMap'])($dictBifoldable, $GLOBALS['Data_Bifoldable_monoidDual']);
    $__res = (function() use ($bifoldMap1) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($GLOBALS['Data_Bifoldable_unwrap'])(($GLOBALS['Data_Bifoldable_unwrap'])(($bifoldMap1)(($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Dual_Dual'], ($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Endo_Endo'], ($GLOBALS['Data_Function_flip'])($f))), ($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Dual_Dual'], ($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Endo_Endo'], ($GLOBALS['Data_Function_flip'])($g))), $p)), $z);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifoldrDefault
$Data_Bifoldable_bifoldrDefault = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldMap1 = ($GLOBALS['Data_Bifoldable_bifoldMap'])($dictBifoldable, $GLOBALS['Data_Bifoldable_monoidEndo']);
    $__res = (function() use ($bifoldMap1) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($GLOBALS['Data_Bifoldable_unwrap'])(($bifoldMap1)(($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Endo_Endo'], $f), ($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Endo_Endo'], $g), $p), $z);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifoldableProduct2
$Data_Bifoldable_bifoldableProduct2 = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
while (true) {
$bifoldMap1 = ($GLOBALS['Data_Bifoldable_bifoldMap'])($dictBifoldable);
return (function() use ($dictBifoldable, $bifoldMap1) {
  $__fn = function($dictBifoldable1) use ($dictBifoldable, $bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldMap2 = ($GLOBALS['Data_Bifoldable_bifoldMap'])($dictBifoldable1);
    $__res = ($GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'])((object)["bifoldr" => (function() use ($dictBifoldable, $dictBifoldable1) {
  $__fn = function($l, $r = null, $u = null, $m = null) use ($dictBifoldable, $dictBifoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($GLOBALS['Data_Bifoldable_bifoldrDefault'])(($GLOBALS['Data_Bifoldable_bifoldableProduct2'])($dictBifoldable, $dictBifoldable1), $l, $r, $u, $m);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($dictBifoldable, $dictBifoldable1) {
  $__fn = function($l, $r = null, $u = null, $m = null) use ($dictBifoldable, $dictBifoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($GLOBALS['Data_Bifoldable_bifoldlDefault'])(($GLOBALS['Data_Bifoldable_bifoldableProduct2'])($dictBifoldable, $dictBifoldable1), $l, $r, $u, $m);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use ($bifoldMap1, $bifoldMap2) {
  $__fn = function($dictMonoid) use ($bifoldMap1, $bifoldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append = ($GLOBALS['Data_Semigroup_append'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
$bifoldMap3 = ($bifoldMap1)($dictMonoid);
$bifoldMap4 = ($bifoldMap2)($dictMonoid);
    $__res = (function() use ($append, $bifoldMap3, $bifoldMap4) {
  $__body = function($l, $r, $v) use ($append, $bifoldMap3, $bifoldMap4) {
    $__case_0 = $l;
    $__case_1 = $r;
    $__case_2 = $v;
    if ((($__case_2)->tag === "Product2")) {
$l1 = $__case_0;
$r1 = $__case_1;
$f = ($__case_2)->values[0];
$g = ($__case_2)->values[1];
return ($append)(($bifoldMap3)($l1, $r1, $f), ($bifoldMap4)($l1, $r1, $g));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($l, $r = null, $v = null) use ($append, $bifoldMap3, $bifoldMap4, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($l, $r, $v);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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
};
    $__res = null;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_bifold
$Data_Bifoldable_bifold = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldMap1 = ($GLOBALS['Data_Bifoldable_bifoldMap'])($dictBifoldable);
    $__res = (function() use ($bifoldMap1) {
  $__fn = function($dictMonoid) use ($bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bifoldMap1)($dictMonoid, $GLOBALS['Data_Bifoldable_identity'], $GLOBALS['Data_Bifoldable_identity']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bifoldable_biany
$Data_Bifoldable_biany = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldMap1 = ($GLOBALS['Data_Bifoldable_bifoldMap'])($dictBifoldable);
    $__res = (function() use ($bifoldMap1) {
  $__fn = function($dictBooleanAlgebra) use ($bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldMap2 = ($bifoldMap1)(($GLOBALS['Data_Monoid_Disj_monoidDisj'])((($dictBooleanAlgebra)->HeytingAlgebra0)($GLOBALS['Prim_undefined'])));
    $__res = (function() use ($bifoldMap2) {
  $__fn = function($p, $q = null) use ($bifoldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Bifoldable_unwrap'], ($bifoldMap2)(($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Disj_Disj'], $p), ($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Disj_Disj'], $q)));
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

// Data_Bifoldable_biall
$Data_Bifoldable_biall = (function() {
  $__fn = function($dictBifoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldMap1 = ($GLOBALS['Data_Bifoldable_bifoldMap'])($dictBifoldable);
    $__res = (function() use ($bifoldMap1) {
  $__fn = function($dictBooleanAlgebra) use ($bifoldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bifoldMap2 = ($bifoldMap1)(($GLOBALS['Data_Monoid_Conj_monoidConj'])((($dictBooleanAlgebra)->HeytingAlgebra0)($GLOBALS['Prim_undefined'])));
    $__res = (function() use ($bifoldMap2) {
  $__fn = function($p, $q = null) use ($bifoldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Bifoldable_unwrap'], ($bifoldMap2)(($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Conj_Conj'], $p), ($GLOBALS['Data_Bifoldable_compose'])($GLOBALS['Data_Monoid_Conj_Conj'], $q)));
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

