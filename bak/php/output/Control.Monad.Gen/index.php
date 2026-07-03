<?php

namespace Control\Monad\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Last/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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


// Control_Monad_Gen_lessThanOrEq
$Control_Monad_Gen_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Control_Monad_Gen_sub
$Control_Monad_Gen_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Control_Monad_Gen_compose
$Control_Monad_Gen_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Control_Monad_Gen_un
$Control_Monad_Gen_un = ($GLOBALS['Data_Newtype_un'])($GLOBALS['Prim_undefined']);

// Control_Monad_Gen_greaterThanOrEq
$Control_Monad_Gen_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordNumber']);

// Control_Monad_Gen_sub1
$Control_Monad_Gen_sub1 = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringNumber']);

// Control_Monad_Gen_alaF
$Control_Monad_Gen_alaF = ($GLOBALS['Data_Newtype_alaF'])($GLOBALS['Prim_undefined'], $GLOBALS['Prim_undefined'], $GLOBALS['Prim_undefined'], $GLOBALS['Prim_undefined']);

// Control_Monad_Gen_monoidAdditive
$Control_Monad_Gen_monoidAdditive = ($GLOBALS['Data_Monoid_Additive_monoidAdditive'])($GLOBALS['Data_Semiring_semiringNumber']);

// Control_Monad_Gen_Cons
$Control_Monad_Gen_Cons = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Cons", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_Nil
$Control_Monad_Gen_Nil = (object)["tag" => "Nil", "values" => []];

// Control_Monad_Gen_FreqSemigroup
$Control_Monad_Gen_FreqSemigroup = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_unfoldable
$Control_Monad_Gen_unfoldable = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tailRecM = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
    $__res = (function() use ($tailRecM) {
  $__fn = function($dictMonadGen) use ($tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']);
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
$Bind1 = (($Monad0)->Bind1)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])($Bind1);
$map = ($GLOBALS['Data_Functor_map'])((((($Bind1)->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
$sized = ($GLOBALS['Control_Monad_Gen_Class_sized'])($dictMonadGen);
    $__res = (function() use ($map, $sized, $tailRecM) {
  $__fn = function($dictUnfoldable) use ($map, $sized, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldr = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable);
    $__res = (function() use ($map, $unfoldr, $sized, $tailRecM) {
  $__fn = function($gen) use ($map, $unfoldr, $sized, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfold = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Tuple_Tuple'])($x, $xs));
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
$loopGen = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$acc = ($__case_0)->values[0];
$n = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
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
    $__res = ($map)(($unfoldr)($unfold), ($sized)(($GLOBALS['Control_Monad_Gen_compose'])(($tailRecM)($loopGen), ($GLOBALS['Data_Tuple_Tuple'])($GLOBALS['Control_Monad_Gen_Nil']))));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_semigroupFreqSemigroup
$Control_Monad_Gen_semigroupFreqSemigroup = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$f = $__case_0;
$g = $__case_1;
return ($GLOBALS['Control_Monad_Gen_FreqSemigroup'])((function() use ($f, $g) {
  $__body = function($pos) use ($f, $g) {
    $v2 = ($f)($pos);
    $__case_0 = $v2;
    if (((($__case_0)->tag === "Tuple") && ((($__case_0)->values[0])->tag === "Just"))) {
$pos__prime__ = (($__case_0)->values[0])->values[0];
return ($g)($pos__prime__);
} else {
if (true) {
$result = $__case_0;
return $result;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($pos) use ($f, $g, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($pos);
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

// Control_Monad_Gen_getFreqVal
$Control_Monad_Gen_getFreqVal = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$f = $__case_0;
return ($GLOBALS['Control_Monad_Gen_compose'])($GLOBALS['Data_Tuple_snd'], $f);
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

// Control_Monad_Gen_fromIndex
$Control_Monad_Gen_fromIndex = (function() {
  $__fn = function($dictFoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap1 = ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1, $GLOBALS['Data_Semigroup_Last_semigroupLast']);
$foldr = ($GLOBALS['Data_Foldable_foldr'])((($dictFoldable1)->Foldable0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($foldMap1, $foldr) {
  $__fn = function($i, $xs = null) use ($foldMap1, $foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$go = (function() use (&$go, $foldMap1, $xs) {
  $__fn = function($v, $v1 = null) use (&$go, $foldMap1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && ((($__case_1)->values[1])->tag === "Nil"))) {
$a = ($__case_1)->values[0];
return $a;
} else {
if ((($__case_1)->tag === "Cons")) {
$j = $__case_0;
$a = ($__case_1)->values[0];
return "/* Unsupported: Guards not supported */";
} else {
if ((($__case_1)->tag === "Cons")) {
$j = $__case_0;
$as = ($__case_1)->values[1];
$__tco_tmp_0 = ($GLOBALS['Control_Monad_Gen_sub'])($j, 1);
$__tco_tmp_1 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue;
} else {
if ((($__case_1)->tag === "Nil")) {
return ($GLOBALS['Control_Monad_Gen_un'])($GLOBALS['Data_Semigroup_Last_Last'], ($foldMap1)($GLOBALS['Data_Semigroup_Last_Last'], $xs));
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)($i, ($foldr)($GLOBALS['Control_Monad_Gen_Cons'], $GLOBALS['Control_Monad_Gen_Nil'], $xs));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_oneOf
$Control_Monad_Gen_oneOf = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']));
$chooseInt = ($GLOBALS['Control_Monad_Gen_Class_chooseInt'])($dictMonadGen);
    $__res = (function() use ($bind, $chooseInt) {
  $__fn = function($dictFoldable1) use ($bind, $chooseInt, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$length = ($GLOBALS['Data_Foldable_length'])((($dictFoldable1)->Foldable0)($GLOBALS['Prim_undefined']), $GLOBALS['Data_Semiring_semiringInt']);
$fromIndex1 = ($GLOBALS['Control_Monad_Gen_fromIndex'])($dictFoldable1);
    $__res = (function() use ($bind, $chooseInt, $length, $fromIndex1) {
  $__fn = function($xs) use ($bind, $chooseInt, $length, $fromIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($chooseInt)(0, ($GLOBALS['Control_Monad_Gen_sub'])(($length)($xs), 1)), (function() use ($fromIndex1, $xs) {
  $__fn = function($n) use ($fromIndex1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($fromIndex1)($n, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_freqSemigroup
$Control_Monad_Gen_freqSemigroup = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$weight = ($__case_0)->values[0];
$x = ($__case_0)->values[1];
return ($GLOBALS['Control_Monad_Gen_FreqSemigroup'])((function() use ($weight, $x) {
  $__body = function($pos) use ($weight, $x) {
    $__case_0 = ($GLOBALS['Control_Monad_Gen_greaterThanOrEq'])($pos, $weight);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Control_Monad_Gen_sub1'])($pos, $weight)), $x);
} else {
if (true) {
return ($GLOBALS['Data_Tuple_Tuple'])($GLOBALS['Data_Maybe_Nothing'], $x);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($pos) use ($weight, $x, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($pos);
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

// Control_Monad_Gen_frequency
$Control_Monad_Gen_frequency = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']));
$chooseFloat = ($GLOBALS['Control_Monad_Gen_Class_chooseFloat'])($dictMonadGen);
    $__res = (function() use ($bind, $chooseFloat) {
  $__fn = function($dictFoldable1) use ($bind, $chooseFloat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$foldMap = ($GLOBALS['Data_Foldable_foldMap'])((($dictFoldable1)->Foldable0)($GLOBALS['Prim_undefined']), $GLOBALS['Control_Monad_Gen_monoidAdditive']);
$foldMap1 = ($GLOBALS['Data_Semigroup_Foldable_foldMap1'])($dictFoldable1, $GLOBALS['Control_Monad_Gen_semigroupFreqSemigroup']);
    $__res = (function() use ($foldMap, $bind, $chooseFloat, $foldMap1) {
  $__fn = function($xs) use ($foldMap, $bind, $chooseFloat, $foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$total = ($GLOBALS['Control_Monad_Gen_alaF'])($GLOBALS['Data_Monoid_Additive_Additive'], $foldMap, $GLOBALS['Data_Tuple_fst'], $xs);
    $__res = ($bind)(($chooseFloat)(0.0, $total), ($GLOBALS['Control_Monad_Gen_getFreqVal'])(($foldMap1)($GLOBALS['Control_Monad_Gen_freqSemigroup'], $xs)));
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

// Control_Monad_Gen_filtered
$Control_Monad_Gen_filtered = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tailRecM = ($GLOBALS['Control_Monad_Rec_Class_tailRecM'])($dictMonadRec);
    $__res = (function() use ($tailRecM) {
  $__fn = function($dictMonadGen) use ($tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'])((((((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($mapFlipped, $tailRecM) {
  $__fn = function($gen) use ($mapFlipped, $tailRecM, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$go = (function() use ($mapFlipped, $gen) {
  $__fn = function($v) use ($mapFlipped, $gen, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($mapFlipped)($gen, (function() {
  $__body = function($a) {
    $__case_0 = $a;
    if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Control_Monad_Rec_Class_Loop'])($GLOBALS['Data_Unit_unit']);
} else {
if ((($__case_0)->tag === "Just")) {
$a__prime__ = ($__case_0)->values[0];
return ($GLOBALS['Control_Monad_Rec_Class_Done'])($a__prime__);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
    $__res = ($tailRecM)($go, $GLOBALS['Data_Unit_unit']);
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

// Control_Monad_Gen_suchThat
$Control_Monad_Gen_suchThat = (function() {
  $__fn = function($dictMonadRec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$filtered1 = ($GLOBALS['Control_Monad_Gen_filtered'])($dictMonadRec);
    $__res = (function() use ($filtered1) {
  $__fn = function($dictMonadGen) use ($filtered1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$filtered2 = ($filtered1)($dictMonadGen);
$mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'])((((((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']))->Apply0)($GLOBALS['Prim_undefined']))->Functor0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($filtered2, $mapFlipped) {
  $__fn = function($gen, $pred = null) use ($filtered2, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($filtered2)(($mapFlipped)($gen, (function() use ($pred) {
  $__body = function($a) use ($pred) {
    $__case_0 = ($pred)($a);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Just'])($a);
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a) use ($pred, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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

// Control_Monad_Gen_elements
$Control_Monad_Gen_elements = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Monad0 = (($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']);
$bind = ($GLOBALS['Control_Bind_bind'])((($Monad0)->Bind1)($GLOBALS['Prim_undefined']));
$chooseInt = ($GLOBALS['Control_Monad_Gen_Class_chooseInt'])($dictMonadGen);
$pure = ($GLOBALS['Control_Applicative_pure'])((($Monad0)->Applicative0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($bind, $chooseInt, $pure) {
  $__fn = function($dictFoldable1) use ($bind, $chooseInt, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$length = ($GLOBALS['Data_Foldable_length'])((($dictFoldable1)->Foldable0)($GLOBALS['Prim_undefined']), $GLOBALS['Data_Semiring_semiringInt']);
$fromIndex1 = ($GLOBALS['Control_Monad_Gen_fromIndex'])($dictFoldable1);
    $__res = (function() use ($bind, $chooseInt, $length, $pure, $fromIndex1) {
  $__fn = function($xs) use ($bind, $chooseInt, $length, $pure, $fromIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($bind)(($chooseInt)(0, ($GLOBALS['Control_Monad_Gen_sub'])(($length)($xs), 1)), (function() use ($pure, $fromIndex1, $xs) {
  $__fn = function($n) use ($pure, $fromIndex1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($pure)(($fromIndex1)($n, $xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Control_Monad_Gen_choose
$Control_Monad_Gen_choose = (function() {
  $__fn = function($dictMonadGen) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bind = ($GLOBALS['Control_Bind_bind'])((((($dictMonadGen)->Monad0)($GLOBALS['Prim_undefined']))->Bind1)($GLOBALS['Prim_undefined']));
$chooseBool = ($GLOBALS['Control_Monad_Gen_Class_chooseBool'])($dictMonadGen);
    $__res = (function() use ($bind, $chooseBool) {
  $__fn = function($genA, $genB = null) use ($bind, $chooseBool, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($bind)($chooseBool, (function() use ($genA, $genB) {
  $__body = function($v) use ($genA, $genB) {
    $__case_0 = $v;
    if (($__case_0 === true)) {
return $genA;
} else {
if (true) {
return $genB;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($genA, $genB, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

