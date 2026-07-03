<?php

namespace Data\Tuple;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Comonad/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Lazy/index.php';
require_once __DIR__ . '/../Control.Monad/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.BooleanAlgebra/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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


// Data_Tuple_append
$Data_Tuple_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Tuple_conj
$Data_Tuple_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Tuple_Tuple
$Data_Tuple_Tuple = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)["tag" => "Tuple", "values" => [$value0, $value1]];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_uncurry
$Data_Tuple_uncurry = (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$a = ($__case_1)->values[0];
$b = ($__case_1)->values[1];
return ($f1)($a, $b);
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

// Data_Tuple_swap
$Data_Tuple_swap = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($b, $a);
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

// Data_Tuple_snd
$Data_Tuple_snd = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$b = ($__case_0)->values[1];
return $b;
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

// Data_Tuple_showTuple
$Data_Tuple_showTuple = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = (function() use ($show) {
  $__fn = function($dictShow1) use ($show, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show1 = ($GLOBALS['Data_Show_show'])($dictShow1);
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($show, $show1) {
  $__body = function($v) use ($show, $show1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($GLOBALS['Data_Tuple_append'])("(Tuple ", ($GLOBALS['Data_Tuple_append'])(($show)($a), ($GLOBALS['Data_Tuple_append'])(" ", ($GLOBALS['Data_Tuple_append'])(($show1)($b), ")"))));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show, $show1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
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

// Data_Tuple_semiringTuple
$Data_Tuple_semiringTuple = (function() {
  $__fn = function($dictSemiring) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$add = ($GLOBALS['Data_Semiring_add'])($dictSemiring);
$one = ($GLOBALS['Data_Semiring_one'])($dictSemiring);
$mul = ($GLOBALS['Data_Semiring_mul'])($dictSemiring);
$zero = ($GLOBALS['Data_Semiring_zero'])($dictSemiring);
    $__res = (function() use ($add, $one, $mul, $zero) {
  $__fn = function($dictSemiring1) use ($add, $one, $mul, $zero, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$add1 = ($GLOBALS['Data_Semiring_add'])($dictSemiring1);
$mul1 = ($GLOBALS['Data_Semiring_mul'])($dictSemiring1);
    $__res = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'])((object)["add" => (function() use ($add, $add1) {
  $__body = function($v, $v1) use ($add, $add1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($add)($x1, $x2), ($add1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($add, $add1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => ($GLOBALS['Data_Tuple_Tuple'])($one, ($GLOBALS['Data_Semiring_one'])($dictSemiring1)), "mul" => (function() use ($mul, $mul1) {
  $__body = function($v, $v1) use ($mul, $mul1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($mul)($x1, $x2), ($mul1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($mul, $mul1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => ($GLOBALS['Data_Tuple_Tuple'])($zero, ($GLOBALS['Data_Semiring_zero'])($dictSemiring1))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_semigroupoidTuple
$Data_Tuple_semigroupoidTuple = ($GLOBALS['Control_Semigroupoid_Semigroupoid__dollar__Dict'])((object)["compose" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$c = ($__case_0)->values[1];
$a = ($__case_1)->values[0];
return ($GLOBALS['Data_Tuple_Tuple'])($a, $c);
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

// Data_Tuple_semigroupTuple
$Data_Tuple_semigroupTuple = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append1 = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
    $__res = (function() use ($append1) {
  $__fn = function($dictSemigroup1) use ($append1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append2 = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup1);
    $__res = ($GLOBALS['Data_Semigroup_Semigroup__dollar__Dict'])((object)["append" => (function() use ($append1, $append2) {
  $__body = function($v, $v1) use ($append1, $append2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a1 = ($__case_0)->values[0];
$b1 = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$b2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($append1)($a1, $a2), ($append2)($b1, $b2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append1, $append2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Data_Tuple_ringTuple
$Data_Tuple_ringTuple = (function() {
  $__fn = function($dictRing) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sub = ($GLOBALS['Data_Ring_sub'])($dictRing);
$semiringTuple1 = ($GLOBALS['Data_Tuple_semiringTuple'])((($dictRing)->Semiring0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($semiringTuple1, $sub) {
  $__fn = function($dictRing1) use ($semiringTuple1, $sub, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$sub1 = ($GLOBALS['Data_Ring_sub'])($dictRing1);
$semiringTuple2 = ($semiringTuple1)((($dictRing1)->Semiring0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ring_Ring__dollar__Dict'])((object)["sub" => (function() use ($sub, $sub1) {
  $__body = function($v, $v1) use ($sub, $sub1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($sub)($x1, $x2), ($sub1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($sub, $sub1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => (function() use ($semiringTuple2) {
  $__fn = function($__dollar____unused) use ($semiringTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semiringTuple2;
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

// Data_Tuple_monoidTuple
$Data_Tuple_monoidTuple = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$mempty = ($GLOBALS['Data_Monoid_mempty'])($dictMonoid);
$semigroupTuple1 = ($GLOBALS['Data_Tuple_semigroupTuple'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($semigroupTuple1, $mempty) {
  $__fn = function($dictMonoid1) use ($semigroupTuple1, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$semigroupTuple2 = ($semigroupTuple1)((($dictMonoid1)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Monoid_Monoid__dollar__Dict'])((object)["mempty" => ($GLOBALS['Data_Tuple_Tuple'])($mempty, ($GLOBALS['Data_Monoid_mempty'])($dictMonoid1)), "Semigroup0" => (function() use ($semigroupTuple2) {
  $__fn = function($__dollar____unused) use ($semigroupTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $semigroupTuple2;
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

// Data_Tuple_heytingAlgebraTuple
$Data_Tuple_heytingAlgebraTuple = (function() {
  $__fn = function($dictHeytingAlgebra) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$tt = ($GLOBALS['Data_HeytingAlgebra_tt'])($dictHeytingAlgebra);
$ff = ($GLOBALS['Data_HeytingAlgebra_ff'])($dictHeytingAlgebra);
$implies = ($GLOBALS['Data_HeytingAlgebra_implies'])($dictHeytingAlgebra);
$conj1 = ($GLOBALS['Data_HeytingAlgebra_conj'])($dictHeytingAlgebra);
$disj = ($GLOBALS['Data_HeytingAlgebra_disj'])($dictHeytingAlgebra);
$not = ($GLOBALS['Data_HeytingAlgebra_not'])($dictHeytingAlgebra);
    $__res = (function() use ($tt, $ff, $implies, $conj1, $disj, $not) {
  $__fn = function($dictHeytingAlgebra1) use ($tt, $ff, $implies, $conj1, $disj, $not, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$implies1 = ($GLOBALS['Data_HeytingAlgebra_implies'])($dictHeytingAlgebra1);
$conj2 = ($GLOBALS['Data_HeytingAlgebra_conj'])($dictHeytingAlgebra1);
$disj1 = ($GLOBALS['Data_HeytingAlgebra_disj'])($dictHeytingAlgebra1);
$not1 = ($GLOBALS['Data_HeytingAlgebra_not'])($dictHeytingAlgebra1);
    $__res = ($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'])((object)["tt" => ($GLOBALS['Data_Tuple_Tuple'])($tt, ($GLOBALS['Data_HeytingAlgebra_tt'])($dictHeytingAlgebra1)), "ff" => ($GLOBALS['Data_Tuple_Tuple'])($ff, ($GLOBALS['Data_HeytingAlgebra_ff'])($dictHeytingAlgebra1)), "implies" => (function() use ($implies, $implies1) {
  $__body = function($v, $v1) use ($implies, $implies1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($implies)($x1, $x2), ($implies1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($implies, $implies1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use ($conj1, $conj2) {
  $__body = function($v, $v1) use ($conj1, $conj2) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($conj1)($x1, $x2), ($conj2)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($conj1, $conj2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($disj, $disj1) {
  $__body = function($v, $v1) use ($disj, $disj1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$x1 = ($__case_0)->values[0];
$y1 = ($__case_0)->values[1];
$x2 = ($__case_1)->values[0];
$y2 = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($disj)($x1, $x2), ($disj1)($y1, $y2));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($disj, $disj1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => (function() use ($not, $not1) {
  $__body = function($v) use ($not, $not1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$x = ($__case_0)->values[0];
$y = ($__case_0)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($not)($x), ($not1)($y));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($not, $not1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
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

// Data_Tuple_genericTuple
$Data_Tuple_genericTuple = ($GLOBALS['Data_Generic_Rep_Generic__dollar__Dict'])((object)["to" => (function() {
  $__body = function($x) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Product")) {
$arg = ($__case_0)->values[0];
$arg1 = ($__case_0)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($arg, $arg1);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "from" => (function() {
  $__body = function($x) {
    $__case_0 = $x;
    if ((($__case_0)->tag === "Tuple")) {
$arg = ($__case_0)->values[0];
$arg1 = ($__case_0)->values[1];
return ($GLOBALS['Data_Generic_Rep_Constructor'])(($GLOBALS['Data_Generic_Rep_Product'])(($GLOBALS['Data_Generic_Rep_Argument'])($arg), ($GLOBALS['Data_Generic_Rep_Argument'])($arg1)));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($x);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Tuple_functorTuple
$Data_Tuple_functorTuple = ($GLOBALS['Data_Functor_Functor__dollar__Dict'])((object)["map" => (function() {
  $__body = function($f, $m) {
    $__case_0 = $m;
    if ((($__case_0)->tag === "Tuple")) {
$v = ($__case_0)->values[0];
$v1 = ($__case_0)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])($v, ($f)($v1));
} else {
throw new \Exception("Pattern match failure");
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

// Data_Tuple_invariantTuple
$Data_Tuple_invariantTuple = ($GLOBALS['Data_Functor_Invariant_Invariant__dollar__Dict'])((object)["imap" => ($GLOBALS['Data_Functor_Invariant_imapF'])($GLOBALS['Data_Tuple_functorTuple'])]);

// Data_Tuple_fst
$Data_Tuple_fst = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
return $a;
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

// Data_Tuple_lazyTuple
$Data_Tuple_lazyTuple = (function() {
  $__fn = function($dictLazy) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$defer = ($GLOBALS['Control_Lazy_defer'])($dictLazy);
    $__res = (function() use ($defer) {
  $__fn = function($dictLazy1) use ($defer, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$defer1 = ($GLOBALS['Control_Lazy_defer'])($dictLazy1);
    $__res = ($GLOBALS['Control_Lazy_Lazy__dollar__Dict'])((object)["defer" => (function() use ($defer, $defer1) {
  $__fn = function($f) use ($defer, $defer1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($defer)((function() use ($f) {
  $__fn = function($v) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_fst'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), ($defer1)((function() use ($f) {
  $__fn = function($v) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_snd'])(($f)($GLOBALS['Data_Unit_unit']));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
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

// Data_Tuple_extendTuple
$Data_Tuple_extendTuple = ($GLOBALS['Control_Extend_Extend__dollar__Dict'])((object)["extend" => (function() {
  $__body = function($f, $v) {
    $__case_0 = $f;
    $__case_1 = $v;
    if ((($__case_1)->tag === "Tuple")) {
$f1 = $__case_0;
$t = $__case_1;
$a = ($__case_1)->values[0];
return ($GLOBALS['Data_Tuple_Tuple'])($a, ($f1)($t));
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
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Tuple_functorTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Tuple_eqTuple
$Data_Tuple_eqTuple = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq = ($GLOBALS['Data_Eq_eq'])($dictEq);
    $__res = (function() use ($eq) {
  $__fn = function($dictEq1) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eq1 = ($GLOBALS['Data_Eq_eq'])($dictEq1);
    $__res = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() use ($eq, $eq1) {
  $__body = function($x, $y) use ($eq, $eq1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_conj'])(($eq)($l, $r), ($eq1)($l1, $r1));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($eq, $eq1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

// Data_Tuple_ordTuple
$Data_Tuple_ordTuple = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare = ($GLOBALS['Data_Ord_compare'])($dictOrd);
$eqTuple1 = ($GLOBALS['Data_Tuple_eqTuple'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($eqTuple1, $compare) {
  $__fn = function($dictOrd1) use ($eqTuple1, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare1 = ($GLOBALS['Data_Ord_compare'])($dictOrd1);
$eqTuple2 = ($eqTuple1)((($dictOrd1)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() use ($compare, $compare1) {
  $__body = function($x, $y) use ($compare, $compare1) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$l = ($__case_0)->values[0];
$l1 = ($__case_0)->values[1];
$r = ($__case_1)->values[0];
$r1 = ($__case_1)->values[1];
$v = ($compare)($l, $r);
$__case_0 = $v;
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (true) {
return ($compare1)($l1, $r1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($compare, $compare1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqTuple2) {
  $__fn = function($__dollar____unused) use ($eqTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqTuple2;
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

// Data_Tuple_eq1Tuple
$Data_Tuple_eq1Tuple = (function() {
  $__fn = function($dictEq) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$eqTuple1 = ($GLOBALS['Data_Tuple_eqTuple'])($dictEq);
    $__res = ($GLOBALS['Data_Eq_Eq1__dollar__Dict'])((object)["eq1" => (function() use ($eqTuple1) {
  $__fn = function($dictEq1) use ($eqTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Eq_eq'])(($eqTuple1)($dictEq1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_ord1Tuple
$Data_Tuple_ord1Tuple = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ordTuple1 = ($GLOBALS['Data_Tuple_ordTuple'])($dictOrd);
$eq1Tuple1 = ($GLOBALS['Data_Tuple_eq1Tuple'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord1__dollar__Dict'])((object)["compare1" => (function() use ($ordTuple1) {
  $__fn = function($dictOrd1) use ($ordTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Ord_compare'])(($ordTuple1)($dictOrd1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() use ($eq1Tuple1) {
  $__fn = function($__dollar____unused) use ($eq1Tuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eq1Tuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_curry
$Data_Tuple_curry = (function() {
  $__fn = function($f, $a = null, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($f)(($GLOBALS['Data_Tuple_Tuple'])($a, $b));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_comonadTuple
$Data_Tuple_comonadTuple = ($GLOBALS['Control_Comonad_Comonad__dollar__Dict'])((object)["extract" => $GLOBALS['Data_Tuple_snd'], "Extend0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Tuple_extendTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Tuple_commutativeRingTuple
$Data_Tuple_commutativeRingTuple = (function() {
  $__fn = function($dictCommutativeRing) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ringTuple1 = ($GLOBALS['Data_Tuple_ringTuple'])((($dictCommutativeRing)->Ring0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ringTuple1) {
  $__fn = function($dictCommutativeRing1) use ($ringTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ringTuple2 = ($ringTuple1)((($dictCommutativeRing1)->Ring0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_CommutativeRing_CommutativeRing__dollar__Dict'])((object)["Ring0" => (function() use ($ringTuple2) {
  $__fn = function($__dollar____unused) use ($ringTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ringTuple2;
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

// Data_Tuple_boundedTuple
$Data_Tuple_boundedTuple = (function() {
  $__fn = function($dictBounded) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$top = ($GLOBALS['Data_Bounded_top'])($dictBounded);
$bottom = ($GLOBALS['Data_Bounded_bottom'])($dictBounded);
$ordTuple1 = ($GLOBALS['Data_Tuple_ordTuple'])((($dictBounded)->Ord0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ordTuple1, $top, $bottom) {
  $__fn = function($dictBounded1) use ($ordTuple1, $top, $bottom, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ordTuple2 = ($ordTuple1)((($dictBounded1)->Ord0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Bounded_Bounded__dollar__Dict'])((object)["top" => ($GLOBALS['Data_Tuple_Tuple'])($top, ($GLOBALS['Data_Bounded_top'])($dictBounded1)), "bottom" => ($GLOBALS['Data_Tuple_Tuple'])($bottom, ($GLOBALS['Data_Bounded_bottom'])($dictBounded1)), "Ord0" => (function() use ($ordTuple2) {
  $__fn = function($__dollar____unused) use ($ordTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ordTuple2;
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

// Data_Tuple_booleanAlgebraTuple
$Data_Tuple_booleanAlgebraTuple = (function() {
  $__fn = function($dictBooleanAlgebra) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$heytingAlgebraTuple1 = ($GLOBALS['Data_Tuple_heytingAlgebraTuple'])((($dictBooleanAlgebra)->HeytingAlgebra0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($heytingAlgebraTuple1) {
  $__fn = function($dictBooleanAlgebra1) use ($heytingAlgebraTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$heytingAlgebraTuple2 = ($heytingAlgebraTuple1)((($dictBooleanAlgebra1)->HeytingAlgebra0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_BooleanAlgebra_BooleanAlgebra__dollar__Dict'])((object)["HeytingAlgebra0" => (function() use ($heytingAlgebraTuple2) {
  $__fn = function($__dollar____unused) use ($heytingAlgebraTuple2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $heytingAlgebraTuple2;
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

// Data_Tuple_applyTuple
$Data_Tuple_applyTuple = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append1 = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
    $__res = ($GLOBALS['Control_Apply_Apply__dollar__Dict'])((object)["apply" => (function() use ($append1) {
  $__body = function($v, $v1) use ($append1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$a1 = ($__case_0)->values[0];
$f = ($__case_0)->values[1];
$a2 = ($__case_1)->values[0];
$x = ($__case_1)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($append1)($a1, $a2), ($f)($x));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $v1 = null) use ($append1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Tuple_functorTuple'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_bindTuple
$Data_Tuple_bindTuple = (function() {
  $__fn = function($dictSemigroup) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$append1 = ($GLOBALS['Data_Semigroup_append'])($dictSemigroup);
$applyTuple1 = ($GLOBALS['Data_Tuple_applyTuple'])($dictSemigroup);
    $__res = ($GLOBALS['Control_Bind_Bind__dollar__Dict'])((object)["bind" => (function() use ($append1) {
  $__body = function($v, $f) use ($append1) {
    $__case_0 = $v;
    $__case_1 = $f;
    if ((($__case_0)->tag === "Tuple")) {
$a1 = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
$f1 = $__case_1;
$v1 = ($f1)($b);
$__case_0 = $v1;
if ((($__case_0)->tag === "Tuple")) {
$a2 = ($__case_0)->values[0];
$c = ($__case_0)->values[1];
return ($GLOBALS['Data_Tuple_Tuple'])(($append1)($a1, $a2), $c);
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v, $f = null) use ($append1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $f);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => (function() use ($applyTuple1) {
  $__fn = function($__dollar____unused) use ($applyTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyTuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_applicativeTuple
$Data_Tuple_applicativeTuple = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applyTuple1 = ($GLOBALS['Data_Tuple_applyTuple'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Applicative_Applicative__dollar__Dict'])((object)["pure" => ($GLOBALS['Data_Tuple_Tuple'])(($GLOBALS['Data_Monoid_mempty'])($dictMonoid)), "Apply0" => (function() use ($applyTuple1) {
  $__fn = function($__dollar____unused) use ($applyTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applyTuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Tuple_monadTuple
$Data_Tuple_monadTuple = (function() {
  $__fn = function($dictMonoid) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$applicativeTuple1 = ($GLOBALS['Data_Tuple_applicativeTuple'])($dictMonoid);
$bindTuple1 = ($GLOBALS['Data_Tuple_bindTuple'])((($dictMonoid)->Semigroup0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Control_Monad_Monad__dollar__Dict'])((object)["Applicative0" => (function() use ($applicativeTuple1) {
  $__fn = function($__dollar____unused) use ($applicativeTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $applicativeTuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Bind1" => (function() use ($bindTuple1) {
  $__fn = function($__dollar____unused) use ($bindTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $bindTuple1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

