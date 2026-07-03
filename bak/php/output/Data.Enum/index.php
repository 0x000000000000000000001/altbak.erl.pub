<?php

namespace Data\Enum;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.MonadPlus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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


// Data_Enum_apply
$Data_Enum_apply = ($GLOBALS['Control_Apply_apply'])($GLOBALS['Control_Apply_applyFn']);

// Data_Enum_append
$Data_Enum_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Enum_show
$Data_Enum_show = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Show_showInt']);

// Data_Enum_lessThan
$Data_Enum_lessThan = ($GLOBALS['Data_Ord_lessThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Enum_map
$Data_Enum_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_Enum_compose
$Data_Enum_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Enum_top
$Data_Enum_top = ($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Bounded_boundedInt']);

// Data_Enum_add
$Data_Enum_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_Enum_greaterThan
$Data_Enum_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Enum_bottom
$Data_Enum_bottom = ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Bounded_boundedInt']);

// Data_Enum_sub
$Data_Enum_sub = ($GLOBALS['Data_Ring_sub'])($GLOBALS['Data_Ring_ringInt']);

// Data_Enum_bind
$Data_Enum_bind = ($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_Maybe_bindMaybe']);

// Data_Enum_voidLeft
$Data_Enum_voidLeft = ($GLOBALS['Data_Functor_voidLeft'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_Enum_guard
$Data_Enum_guard = ($GLOBALS['Control_Alternative_guard'])($GLOBALS['Data_Maybe_alternativeMaybe']);

// Data_Enum_lessThanOrEq
$Data_Enum_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Enum_composeFlipped
$Data_Enum_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Enum_fromJust
$Data_Enum_fromJust = ($GLOBALS['Data_Maybe_fromJust'])($GLOBALS['Prim_undefined']);

// Data_Enum_eq
$Data_Enum_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Eq_eqInt']);

// Data_Enum_conj
$Data_Enum_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Enum_greaterThanOrEq
$Data_Enum_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordInt']);

// Data_Enum_bottom1
$Data_Enum_bottom1 = ($GLOBALS['Data_Bounded_bottom'])($GLOBALS['Data_Bounded_boundedChar']);

// Data_Enum_top1
$Data_Enum_top1 = ($GLOBALS['Data_Bounded_top'])($GLOBALS['Data_Bounded_boundedChar']);

// Data_Enum_Enum$Dict
$Data_Enum_Enum__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_Cardinality
$Data_Enum_Cardinality = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_BoundedEnum$Dict
$Data_Enum_BoundedEnum__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_toEnum
$Data_Enum_toEnum = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->toEnum;
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

// Data_Enum_succ
$Data_Enum_succ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->succ;
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

// Data_Enum_upFromIncluding
$Data_Enum_upFromIncluding = (function() {
  $__fn = function($dictEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$succ1 = ($GLOBALS['Data_Enum_succ'])($dictEnum);
    $__res = (function() use ($succ1) {
  $__fn = function($dictUnfoldable1) use ($succ1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable1_unfoldr1'])($dictUnfoldable1, ($GLOBALS['Data_Enum_apply'])($GLOBALS['Data_Tuple_Tuple'], $succ1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_showCardinality
$Data_Enum_showCardinality = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return ($GLOBALS['Data_Enum_append'])("(Cardinality ", ($GLOBALS['Data_Enum_append'])(($GLOBALS['Data_Enum_show'])($n), ")"));
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
})()]);

// Data_Enum_pred
$Data_Enum_pred = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->pred;
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

// Data_Enum_ordCardinality
$Data_Enum_ordCardinality = $GLOBALS['Data_Ord_ordInt'];

// Data_Enum_newtypeCardinality
$Data_Enum_newtypeCardinality = ($GLOBALS['Data_Newtype_Newtype__dollar__Dict'])((object)["Coercible0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Prim_undefined'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_fromEnum
$Data_Enum_fromEnum = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->fromEnum;
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

// Data_Enum_toEnumWithDefaults
$Data_Enum_toEnumWithDefaults = (function() {
  $__fn = function($dictBoundedEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$toEnum1 = ($GLOBALS['Data_Enum_toEnum'])($dictBoundedEnum);
$fromEnum1 = ($GLOBALS['Data_Enum_fromEnum'])($dictBoundedEnum);
$bottom2 = ($GLOBALS['Data_Bounded_bottom'])((($dictBoundedEnum)->Bounded0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($toEnum1, $fromEnum1, $bottom2) {
  $__body = function($low, $high, $x) use ($toEnum1, $fromEnum1, $bottom2) {
    $v = ($toEnum1)($x);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Just")) {
$enum = ($__case_0)->values[0];
return $enum;
} else {
if ((($__case_0)->tag === "Nothing")) {
$__case_0 = ($GLOBALS['Data_Enum_lessThan'])($x, ($fromEnum1)($bottom2));
if (($__case_0 === true)) {
return $low;
} else {
if (true) {
return $high;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($low, $high = null, $x = null) use ($toEnum1, $fromEnum1, $bottom2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($low, $high, $x);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_eqCardinality
$Data_Enum_eqCardinality = $GLOBALS['Data_Eq_eqInt'];

// Data_Enum_enumUnit
$Data_Enum_enumUnit = ($GLOBALS['Data_Enum_Enum__dollar__Dict'])((object)["succ" => ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']), "pred" => ($GLOBALS['Data_Function_const'])($GLOBALS['Data_Maybe_Nothing']), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ord_ordUnit'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_enumTuple
$Data_Enum_enumTuple = (function() {
  $__fn = function($dictEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$succ1 = ($GLOBALS['Data_Enum_succ'])($dictEnum);
$pred1 = ($GLOBALS['Data_Enum_pred'])($dictEnum);
$ordTuple = ($GLOBALS['Data_Tuple_ordTuple'])((($dictEnum)->Ord0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ordTuple, $succ1, $pred1) {
  $__fn = function($dictBoundedEnum) use ($ordTuple, $succ1, $pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Bounded0 = (($dictBoundedEnum)->Bounded0)($GLOBALS['Prim_undefined']);
$bottom2 = ($GLOBALS['Data_Bounded_bottom'])($Bounded0);
$Enum1 = (($dictBoundedEnum)->Enum1)($GLOBALS['Prim_undefined']);
$succ2 = ($GLOBALS['Data_Enum_succ'])($Enum1);
$top2 = ($GLOBALS['Data_Bounded_top'])($Bounded0);
$pred2 = ($GLOBALS['Data_Enum_pred'])($Enum1);
$ordTuple1 = ($ordTuple)((($Enum1)->Ord0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Enum_Enum__dollar__Dict'])((object)["succ" => (function() use ($bottom2, $succ1, $succ2) {
  $__body = function($v) use ($bottom2, $succ1, $succ2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_maybe'])(($GLOBALS['Data_Enum_map'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_Tuple_Tuple'], $bottom2), ($succ1)($a)), ($GLOBALS['Data_Enum_compose'])($GLOBALS['Data_Maybe_Just'], ($GLOBALS['Data_Tuple_Tuple'])($a)), ($succ2)($b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($bottom2, $succ1, $succ2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() use ($top2, $pred1, $pred2) {
  $__body = function($v) use ($top2, $pred1, $pred2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Tuple")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_maybe'])(($GLOBALS['Data_Enum_map'])(($GLOBALS['Data_Function_flip'])($GLOBALS['Data_Tuple_Tuple'], $top2), ($pred1)($a)), ($GLOBALS['Data_Enum_compose'])($GLOBALS['Data_Maybe_Just'], ($GLOBALS['Data_Tuple_Tuple'])($a)), ($pred2)($b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($top2, $pred1, $pred2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() use ($ordTuple1) {
  $__fn = function($__dollar____unused) use ($ordTuple1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ordTuple1;
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

// Data_Enum_enumOrdering
$Data_Enum_enumOrdering = ($GLOBALS['Data_Enum_Enum__dollar__Dict'])((object)["succ" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return ($GLOBALS['Data_Maybe_Just'])($GLOBALS['Data_Ordering_EQ']);
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Maybe_Just'])($GLOBALS['Data_Ordering_GT']);
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
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
})(), "pred" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "EQ")) {
return ($GLOBALS['Data_Maybe_Just'])($GLOBALS['Data_Ordering_LT']);
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Maybe_Just'])($GLOBALS['Data_Ordering_EQ']);
} else {
throw new \Exception("Pattern match failure");
};
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
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ord_ordOrdering'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_enumMaybe
$Data_Enum_enumMaybe = (function() {
  $__fn = function($dictBoundedEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bottom2 = ($GLOBALS['Data_Bounded_bottom'])((($dictBoundedEnum)->Bounded0)($GLOBALS['Prim_undefined']));
$Enum1 = (($dictBoundedEnum)->Enum1)($GLOBALS['Prim_undefined']);
$succ1 = ($GLOBALS['Data_Enum_succ'])($Enum1);
$pred1 = ($GLOBALS['Data_Enum_pred'])($Enum1);
$ordMaybe = ($GLOBALS['Data_Maybe_ordMaybe'])((($Enum1)->Ord0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Enum_Enum__dollar__Dict'])((object)["succ" => (function() use ($bottom2, $succ1) {
  $__body = function($v) use ($bottom2, $succ1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Maybe_Just'])($bottom2));
} else {
if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
return ($GLOBALS['Data_Enum_map'])($GLOBALS['Data_Maybe_Just'], ($succ1)($a));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($bottom2, $succ1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() use ($pred1) {
  $__body = function($v) use ($pred1) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nothing")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Just")) {
$a = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_Just'])(($pred1)($a));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pred1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() use ($ordMaybe) {
  $__fn = function($__dollar____unused) use ($ordMaybe, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ordMaybe;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_enumInt
$Data_Enum_enumInt = ($GLOBALS['Data_Enum_Enum__dollar__Dict'])((object)["succ" => (function() {
  $__body = function($n) {
    $__case_0 = ($GLOBALS['Data_Enum_lessThan'])($n, $GLOBALS['Data_Enum_top']);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Enum_add'])($n, 1));
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() {
  $__body = function($n) {
    $__case_0 = ($GLOBALS['Data_Enum_greaterThan'])($n, $GLOBALS['Data_Enum_bottom']);
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Enum_sub'])($n, 1));
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($n) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($n);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ord_ordInt'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_enumFromTo
$Data_Enum_enumFromTo = (function() {
  $__fn = function($dictEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Ord0 = (($dictEnum)->Ord0)($GLOBALS['Prim_undefined']);
$eq1 = ($GLOBALS['Data_Eq_eq'])((($Ord0)->Eq0)($GLOBALS['Prim_undefined']));
$lessThan1 = ($GLOBALS['Data_Ord_lessThan'])($Ord0);
$succ1 = ($GLOBALS['Data_Enum_succ'])($dictEnum);
$lessThanOrEq1 = ($GLOBALS['Data_Ord_lessThanOrEq'])($Ord0);
$pred1 = ($GLOBALS['Data_Enum_pred'])($dictEnum);
$greaterThanOrEq1 = ($GLOBALS['Data_Ord_greaterThanOrEq'])($Ord0);
    $__res = (function() {
  $__fn = function($dictUnfoldable1) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$singleton = ($GLOBALS['Data_Unfoldable1_singleton'])($dictUnfoldable1);
$unfoldr1 = ($GLOBALS['Data_Unfoldable1_unfoldr1'])($dictUnfoldable1);
$go = (function() {
  $__fn = function($step, $op = null, $to = null, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, ($GLOBALS['Data_Enum_bind'])(($step)($a), (function() use ($op, $to) {
  $__fn = function($a__prime__) use ($op, $to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Enum_voidLeft'])(($GLOBALS['Data_Enum_guard'])(($op)($a__prime__, $to)), $a__prime__);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
    $__res = (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (true) {
$from = $__case_0;
$to = $__case_1;
return "/* Unsupported: Guards not supported */";
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
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_enumFromThenTo
$Data_Enum_enumFromThenTo = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$unfoldr = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable);
    $__res = (function() use ($unfoldr) {
  $__fn = function($dictFunctor) use ($unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$map1 = ($GLOBALS['Data_Functor_map'])($dictFunctor);
    $__res = (function() use ($map1, $unfoldr) {
  $__fn = function($dictBoundedEnum) use ($map1, $unfoldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$fromEnum1 = ($GLOBALS['Data_Enum_fromEnum'])($dictBoundedEnum);
$toEnum1 = ($GLOBALS['Data_Enum_toEnum'])($dictBoundedEnum);
$go = (function() {
  $__body = function($step, $to, $e) {
    $__case_0 = $step;
    $__case_1 = $to;
    $__case_2 = $e;
    if (true) {
$step1 = $__case_0;
$to1 = $__case_1;
$e1 = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($step, $to = null, $e = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($step, $to, $e);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Partial_Unsafe_unsafePartial'])((function() use ($fromEnum1, $map1, $toEnum1, $unfoldr, $go) {
  $__fn = function($__dollar____unused, $a = null, $b = null, $c = null) use ($fromEnum1, $map1, $toEnum1, $unfoldr, $go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
$c__prime__ = ($fromEnum1)($c);
$b__prime__ = ($fromEnum1)($b);
$a__prime__ = ($fromEnum1)($a);
    $__res = ($map1)(($GLOBALS['Data_Enum_composeFlipped'])($toEnum1, $GLOBALS['Data_Enum_fromJust']), ($unfoldr)(($go)(($GLOBALS['Data_Enum_sub'])($b__prime__, $a__prime__), $c__prime__), $a__prime__));
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
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

// Data_Enum_enumEither
$Data_Enum_enumEither = (function() {
  $__fn = function($dictBoundedEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Enum1 = (($dictBoundedEnum)->Enum1)($GLOBALS['Prim_undefined']);
$succ1 = ($GLOBALS['Data_Enum_succ'])($Enum1);
$pred1 = ($GLOBALS['Data_Enum_pred'])($Enum1);
$top2 = ($GLOBALS['Data_Bounded_top'])((($dictBoundedEnum)->Bounded0)($GLOBALS['Prim_undefined']));
$ordEither = ($GLOBALS['Data_Either_ordEither'])((($Enum1)->Ord0)($GLOBALS['Prim_undefined']));
    $__res = (function() use ($ordEither, $succ1, $pred1, $top2) {
  $__fn = function($dictBoundedEnum1) use ($ordEither, $succ1, $pred1, $top2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bottom2 = ($GLOBALS['Data_Bounded_bottom'])((($dictBoundedEnum1)->Bounded0)($GLOBALS['Prim_undefined']));
$Enum11 = (($dictBoundedEnum1)->Enum1)($GLOBALS['Prim_undefined']);
$succ2 = ($GLOBALS['Data_Enum_succ'])($Enum11);
$pred2 = ($GLOBALS['Data_Enum_pred'])($Enum11);
$ordEither1 = ($ordEither)((($Enum11)->Ord0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Enum_Enum__dollar__Dict'])((object)["succ" => (function() use ($bottom2, $succ1, $succ2) {
  $__body = function($v) use ($bottom2, $succ1, $succ2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$a = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_maybe'])(($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Either_Right'])($bottom2)), ($GLOBALS['Data_Enum_compose'])($GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Either_Left']), ($succ1)($a));
} else {
if ((($__case_0)->tag === "Right")) {
$b = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_maybe'])($GLOBALS['Data_Maybe_Nothing'], ($GLOBALS['Data_Enum_compose'])($GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Either_Right']), ($succ2)($b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($bottom2, $succ1, $succ2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "pred" => (function() use ($pred1, $top2, $pred2) {
  $__body = function($v) use ($pred1, $top2, $pred2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Left")) {
$a = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_maybe'])($GLOBALS['Data_Maybe_Nothing'], ($GLOBALS['Data_Enum_compose'])($GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Either_Left']), ($pred1)($a));
} else {
if ((($__case_0)->tag === "Right")) {
$b = ($__case_0)->values[0];
return ($GLOBALS['Data_Maybe_maybe'])(($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_Either_Left'])($top2)), ($GLOBALS['Data_Enum_compose'])($GLOBALS['Data_Maybe_Just'], $GLOBALS['Data_Either_Right']), ($pred2)($b));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($pred1, $top2, $pred2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Ord0" => (function() use ($ordEither1) {
  $__fn = function($__dollar____unused) use ($ordEither1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ordEither1;
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

// Data_Enum_enumBoolean
$Data_Enum_enumBoolean = ($GLOBALS['Data_Enum_Enum__dollar__Dict'])((object)["succ" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === false)) {
return ($GLOBALS['Data_Maybe_Just'])(true);
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
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
})(), "pred" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Just'])(false);
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
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
})(), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ord_ordBoolean'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_downFromIncluding
$Data_Enum_downFromIncluding = (function() {
  $__fn = function($dictEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pred1 = ($GLOBALS['Data_Enum_pred'])($dictEnum);
    $__res = (function() use ($pred1) {
  $__fn = function($dictUnfoldable1) use ($pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable1_unfoldr1'])($dictUnfoldable1, ($GLOBALS['Data_Enum_apply'])($GLOBALS['Data_Tuple_Tuple'], $pred1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_diag
$Data_Enum_diag = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])($a, $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_downFrom
$Data_Enum_downFrom = (function() {
  $__fn = function($dictEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pred1 = ($GLOBALS['Data_Enum_pred'])($dictEnum);
    $__res = (function() use ($pred1) {
  $__fn = function($dictUnfoldable) use ($pred1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, ($GLOBALS['Data_Enum_compose'])(($GLOBALS['Data_Enum_map'])($GLOBALS['Data_Enum_diag']), $pred1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_upFrom
$Data_Enum_upFrom = (function() {
  $__fn = function($dictEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$succ1 = ($GLOBALS['Data_Enum_succ'])($dictEnum);
    $__res = (function() use ($succ1) {
  $__fn = function($dictUnfoldable) use ($succ1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, ($GLOBALS['Data_Enum_compose'])(($GLOBALS['Data_Enum_map'])($GLOBALS['Data_Enum_diag']), $succ1));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_defaultToEnum
$Data_Enum_defaultToEnum = (function() {
  $__fn = function($dictBounded) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bottom2 = ($GLOBALS['Data_Bounded_bottom'])($dictBounded);
    $__res = (function() use ($bottom2) {
  $__fn = function($dictEnum) use ($bottom2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$succ1 = ($GLOBALS['Data_Enum_succ'])($dictEnum);
    $__res = (function() use ($succ1, $bottom2) {
  $__body = function($i__prime__) use ($succ1, $bottom2) {
    $go = (function() use ($succ1, &$go) {
  $__fn = function($i, $x = null) use ($succ1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$__case_0 = ($GLOBALS['Data_Enum_eq'])($i, 0);
if (($__case_0 === true)) {
return ($GLOBALS['Data_Maybe_Just'])($x);
} else {
if (true) {
$v = ($succ1)($x);
$__case_0 = $v;
if ((($__case_0)->tag === "Just")) {
$x__prime__ = ($__case_0)->values[0];
$__tco_tmp_0 = ($GLOBALS['Data_Enum_sub'])($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue;
} else {
if ((($__case_0)->tag === "Nothing")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__case_0 = ($GLOBALS['Data_Enum_lessThan'])($i__prime__, 0);
    if (($__case_0 === true)) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if (true) {
return ($go)($i__prime__, $bottom2);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($i__prime__) use ($succ1, $bottom2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($i__prime__);
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

// Data_Enum_defaultSucc
$Data_Enum_defaultSucc = (function() {
  $__fn = function($toEnum__prime__, $fromEnum__prime__ = null, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($toEnum__prime__)(($GLOBALS['Data_Enum_add'])(($fromEnum__prime__)($a), 1));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_defaultPred
$Data_Enum_defaultPred = (function() {
  $__fn = function($toEnum__prime__, $fromEnum__prime__ = null, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($toEnum__prime__)(($GLOBALS['Data_Enum_sub'])(($fromEnum__prime__)($a), 1));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_defaultFromEnum
$Data_Enum_defaultFromEnum = (function() {
  $__fn = function($dictEnum) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$pred1 = ($GLOBALS['Data_Enum_pred'])($dictEnum);
$go = (function() use ($pred1, &$go) {
  $__fn = function($i, $x = null) use ($pred1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$v = ($pred1)($x);
$__case_0 = $v;
if ((($__case_0)->tag === "Just")) {
$x__prime__ = ($__case_0)->values[0];
$__tco_tmp_0 = ($GLOBALS['Data_Enum_add'])($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue;
} else {
if ((($__case_0)->tag === "Nothing")) {
return $i;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($go)(0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_defaultCardinality
$Data_Enum_defaultCardinality = (function() {
  $__fn = function($dictBounded) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$bottom2 = ($GLOBALS['Data_Bounded_bottom'])($dictBounded);
    $__res = (function() use ($bottom2) {
  $__fn = function($dictEnum) use ($bottom2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$succ1 = ($GLOBALS['Data_Enum_succ'])($dictEnum);
$go = (function() use ($succ1, &$go) {
  $__fn = function($i, $x = null) use ($succ1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
while (true) {
$v = ($succ1)($x);
$__case_0 = $v;
if ((($__case_0)->tag === "Just")) {
$x__prime__ = ($__case_0)->values[0];
$__tco_tmp_0 = ($GLOBALS['Data_Enum_add'])($i, 1);
$__tco_tmp_1 = $x__prime__;
$i = $__tco_tmp_0;
$x = $__tco_tmp_1;
continue;
} else {
if ((($__case_0)->tag === "Nothing")) {
return $i;
} else {
throw new \Exception("Pattern match failure");
};
};
};
    $__res = null;
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_Enum_Cardinality'])(($go)(1, $bottom2));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Enum_charToEnum
$Data_Enum_charToEnum = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$n = $__case_0;
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
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

// Data_Enum_enumChar
$Data_Enum_enumChar = ($GLOBALS['Data_Enum_Enum__dollar__Dict'])((object)["succ" => ($GLOBALS['Data_Enum_defaultSucc'])($GLOBALS['Data_Enum_charToEnum'], $GLOBALS['Data_Enum_toCharCode']), "pred" => ($GLOBALS['Data_Enum_defaultPred'])($GLOBALS['Data_Enum_charToEnum'], $GLOBALS['Data_Enum_toCharCode']), "Ord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ord_ordChar'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_cardinality
$Data_Enum_cardinality = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->cardinality;
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

// Data_Enum_boundedEnumUnit
$Data_Enum_boundedEnumUnit = ($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'])((object)["cardinality" => ($GLOBALS['Data_Enum_Cardinality'])(1), "toEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === 0)) {
return ($GLOBALS['Data_Maybe_Just'])($GLOBALS['Data_Unit_unit']);
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
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
})(), "fromEnum" => ($GLOBALS['Data_Function_const'])(0), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Bounded_boundedUnit'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Enum_enumUnit'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_boundedEnumOrdering
$Data_Enum_boundedEnumOrdering = ($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'])((object)["cardinality" => ($GLOBALS['Data_Enum_Cardinality'])(3), "toEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === 0)) {
return ($GLOBALS['Data_Maybe_Just'])($GLOBALS['Data_Ordering_LT']);
} else {
if (($__case_0 === 1)) {
return ($GLOBALS['Data_Maybe_Just'])($GLOBALS['Data_Ordering_EQ']);
} else {
if (($__case_0 === 2)) {
return ($GLOBALS['Data_Maybe_Just'])($GLOBALS['Data_Ordering_GT']);
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
};
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return 0;
} else {
if ((($__case_0)->tag === "EQ")) {
return 1;
} else {
if ((($__case_0)->tag === "GT")) {
return 2;
} else {
throw new \Exception("Pattern match failure");
};
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
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Bounded_boundedOrdering'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Enum_enumOrdering'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_boundedEnumChar
$Data_Enum_boundedEnumChar = ($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'])((object)["cardinality" => ($GLOBALS['Data_Enum_Cardinality'])(($GLOBALS['Data_Enum_sub'])(($GLOBALS['Data_Enum_toCharCode'])($GLOBALS['Data_Enum_top1']), ($GLOBALS['Data_Enum_toCharCode'])($GLOBALS['Data_Enum_bottom1']))), "toEnum" => $GLOBALS['Data_Enum_charToEnum'], "fromEnum" => $GLOBALS['Data_Enum_toCharCode'], "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Bounded_boundedChar'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Enum_enumChar'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Enum_boundedEnumBoolean
$Data_Enum_boundedEnumBoolean = ($GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'])((object)["cardinality" => ($GLOBALS['Data_Enum_Cardinality'])(2), "toEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === 0)) {
return ($GLOBALS['Data_Maybe_Just'])(false);
} else {
if (($__case_0 === 1)) {
return ($GLOBALS['Data_Maybe_Just'])(true);
} else {
if (true) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
throw new \Exception("Pattern match failure");
};
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
})(), "fromEnum" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === false)) {
return 0;
} else {
if (($__case_0 === true)) {
return 1;
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
})(), "Bounded0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Bounded_boundedBoolean'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Enum1" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Enum_enumBoolean'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

