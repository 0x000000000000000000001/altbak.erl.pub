<?php

namespace Data\List\Lazy\NonEmpty;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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


// Data_List_Lazy_NonEmpty_compose
$Data_List_Lazy_NonEmpty_compose = ($GLOBALS['Control_Semigroupoid_compose'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_List_Lazy_NonEmpty_map
$Data_List_Lazy_NonEmpty_map = ($GLOBALS['Data_Functor_map'])($GLOBALS['Data_Maybe_functorMaybe']);

// Data_List_Lazy_NonEmpty_add
$Data_List_Lazy_NonEmpty_add = ($GLOBALS['Data_Semiring_add'])($GLOBALS['Data_Semiring_semiringInt']);

// Data_List_Lazy_NonEmpty_append
$Data_List_Lazy_NonEmpty_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_List_Lazy_Types_semigroupList']);

// Data_List_Lazy_NonEmpty_uncons
$Data_List_Lazy_NonEmpty_uncons = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($GLOBALS['Data_Lazy_force'])($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return (object)["head" => $x, "tail" => $xs];
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Lazy_NonEmpty_toList
$Data_List_Lazy_NonEmpty_toList = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($GLOBALS['Data_Lazy_force'])($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_Types_cons'])($x, $xs);
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Lazy_NonEmpty_toUnfoldable
$Data_List_Lazy_NonEmpty_toUnfoldable = (function() {
  $__fn = function($dictUnfoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_NonEmpty_compose'])(($GLOBALS['Data_Unfoldable_unfoldr'])($dictUnfoldable, (function() {
  $__fn = function($xs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_NonEmpty_map'])((function() {
  $__fn = function($rec) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Tuple_Tuple'])(($rec)->head, ($rec)->tail);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_Lazy_uncons'])($xs));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()), $GLOBALS['Data_List_Lazy_NonEmpty_toList']);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_tail
$Data_List_Lazy_NonEmpty_tail = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($GLOBALS['Data_Lazy_force'])($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$xs = ($__case_0)->values[1];
return $xs;
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Lazy_NonEmpty_singleton
$Data_List_Lazy_NonEmpty_singleton = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_List_Lazy_Types_applicativeNonEmptyList']);

// Data_List_Lazy_NonEmpty_repeat
$Data_List_Lazy_NonEmpty_repeat = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($x) {
  $__fn = function($v) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])($x, ($GLOBALS['Data_List_Lazy_repeat'])($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_length
$Data_List_Lazy_NonEmpty_length = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($GLOBALS['Data_Lazy_force'])($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_List_Lazy_NonEmpty_add'])(1, ($GLOBALS['Data_List_Lazy_length'])($xs));
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Lazy_NonEmpty_last
$Data_List_Lazy_NonEmpty_last = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($GLOBALS['Data_Lazy_force'])($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_fromMaybe'])($x, ($GLOBALS['Data_List_Lazy_last'])($xs));
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Lazy_NonEmpty_iterate
$Data_List_Lazy_NonEmpty_iterate = (function() {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($x, $f) {
  $__fn = function($v) use ($x, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])($x, ($GLOBALS['Data_List_Lazy_iterate'])($f, ($f)($x)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_init
$Data_List_Lazy_NonEmpty_init = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($GLOBALS['Data_Lazy_force'])($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_maybe'])($GLOBALS['Data_List_Lazy_Types_nil'], (function() use ($x) {
  $__fn = function($v2) use ($x, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_Types_cons'])($x, $v2);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['Data_List_Lazy_init'])($xs));
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Lazy_NonEmpty_head
$Data_List_Lazy_NonEmpty_head = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$nel = $__case_0;
$v1 = ($GLOBALS['Data_Lazy_force'])($nel);
$__case_0 = $v1;
if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
return $x;
} else {
throw new \Exception("Pattern match failure");
};
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

// Data_List_Lazy_NonEmpty_fromList
$Data_List_Lazy_NonEmpty_fromList = (function() {
  $__body = function($l) {
    $v = ($GLOBALS['Data_List_Lazy_Types_step'])($l);
    $__case_0 = $v;
    if ((($__case_0)->tag === "Nil")) {
return $GLOBALS['Data_Maybe_Nothing'];
} else {
if ((($__case_0)->tag === "Cons")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_Maybe_Just'])(($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($x, $xs) {
  $__fn = function($v1) use ($x, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])($x, $xs);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($l) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($l);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_fromFoldable
$Data_List_Lazy_NonEmpty_fromFoldable = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_List_Lazy_NonEmpty_compose'])($GLOBALS['Data_List_Lazy_NonEmpty_fromList'], ($GLOBALS['Data_List_Lazy_fromFoldable'])($dictFoldable));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_cons
$Data_List_Lazy_NonEmpty_cons = (function() {
  $__body = function($y, $v) {
    $__case_0 = $y;
    $__case_1 = $v;
    if (true) {
$y1 = $__case_0;
$nel = $__case_1;
return ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($nel, $y1) {
  $__body = function($v1) use ($nel, $y1) {
    $v2 = ($GLOBALS['Data_Lazy_force'])($nel);
    $__case_0 = $v2;
    if ((($__case_0)->tag === "NonEmpty")) {
$x = ($__case_0)->values[0];
$xs = ($__case_0)->values[1];
return ($GLOBALS['Data_NonEmpty_NonEmpty'])($y1, ($GLOBALS['Data_List_Lazy_Types_cons'])($x, $xs));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($nel, $y1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($y, $v = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($y, $v);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_List_Lazy_NonEmpty_concatMap
$Data_List_Lazy_NonEmpty_concatMap = ($GLOBALS['Data_Function_flip'])(($GLOBALS['Control_Bind_bind'])($GLOBALS['Data_List_Lazy_Types_bindNonEmptyList']));

// Data_List_Lazy_NonEmpty_appendFoldable
$Data_List_Lazy_NonEmpty_appendFoldable = (function() {
  $__fn = function($dictFoldable) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$fromFoldable1 = ($GLOBALS['Data_List_Lazy_fromFoldable'])($dictFoldable);
    $__res = (function() use ($fromFoldable1) {
  $__fn = function($nel, $ys = null) use ($fromFoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_List_Lazy_Types_NonEmptyList'])(($GLOBALS['Data_Lazy_defer'])((function() use ($nel, $fromFoldable1, $ys) {
  $__fn = function($v) use ($nel, $fromFoldable1, $ys, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_NonEmpty_NonEmpty'])(($GLOBALS['Data_List_Lazy_NonEmpty_head'])($nel), ($GLOBALS['Data_List_Lazy_NonEmpty_append'])(($GLOBALS['Data_List_Lazy_NonEmpty_tail'])($nel), ($fromFoldable1)($ys)));
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

