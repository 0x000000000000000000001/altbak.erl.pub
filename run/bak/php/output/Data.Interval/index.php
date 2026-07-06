<?php

namespace Data\Interval;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Extend/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_Interval_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Interval_show': $v = (\Data\Maybe\Data_Maybe_showMaybe(($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt'))))->show; break;
      case 'Data_Interval_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Interval_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Interval_eq': $v = (\Data\Maybe\Data_Maybe_eqMaybe(($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'))))->eq; break;
      case 'Data_Interval_compare': $v = (\Data\Maybe\Data_Maybe_ordMaybe(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))))->compare; break;
      case 'Data_Interval_foldableInterval': $v = (object)["foldl" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  switch (($__case_2)->tag) {
case "StartEnd":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
$__res = ($f)(($f)($z, $x), $y);
goto __end;;
break;
case "DurationEnd":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v1;
$__res = ($f)($z, $x);
goto __end;;
break;
case "StartDuration":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
$__res = ($f)($z, $x);
goto __end;;
break;
default:
$z = $__case_1;
$__res = $z;
goto __end;;
break;
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr" => function($x) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldrDefault = ($GLOBALS['Data_Foldable_foldrDefault'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrDefault'));
  $__global_Data_Interval_foldableInterval = ($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval'));
  $__res = ($__global_Data_Foldable_foldrDefault)($__global_Data_Interval_foldableInterval, $x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldMapDefaultL = ($GLOBALS['Data_Foldable_foldMapDefaultL'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMapDefaultL'));
  $__global_Data_Interval_foldableInterval = ($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval'));
  $__res = ($__global_Data_Foldable_foldMapDefaultL)($__global_Data_Interval_foldableInterval, $dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_foldl': $v = (($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval')))->foldl; break;
      case 'Data_Interval_foldr': $v = (($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval')))->foldr; break;
      case 'Data_Interval_foldableRecurringInterval': $v = (object)["foldl" => (function() use (&$__fn) {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($f, &$__fn) { return $__fn($f, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Interval_compose = ($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose'));
  $__global_Data_Interval_foldl = ($GLOBALS['Data_Interval_foldl'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldl'));
  $__global_Data_Interval_interval = ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval'));
  $__res = ($__global_Data_Interval_compose)(($__global_Data_Interval_foldl)($f, $i), $__global_Data_Interval_interval);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() use (&$__fn) {
  $__fn = function($f, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($f, &$__fn) { return $__fn($f, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Interval_compose = ($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose'));
  $__global_Data_Interval_foldr = ($GLOBALS['Data_Interval_foldr'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldr'));
  $__global_Data_Interval_interval = ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval'));
  $__res = ($__global_Data_Interval_compose)(($__global_Data_Interval_foldr)($f, $i), $__global_Data_Interval_interval);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldMapDefaultL = ($GLOBALS['Data_Foldable_foldMapDefaultL'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMapDefaultL'));
  $__global_Data_Interval_foldableRecurringInterval = ($GLOBALS['Data_Interval_foldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableRecurringInterval'));
  $__res = ($__global_Data_Foldable_foldMapDefaultL)($__global_Data_Interval_foldableRecurringInterval, $dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_bifunctorInterval': $v = (object)["bimap" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  switch (($__case_2)->tag) {
case "StartEnd":
$f = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
$__res = new Phpurs_Data2("StartEnd", ($f)($x), ($f)($y));
goto __end;;
break;
case "DurationEnd":
$g = $__case_0;
$f = $__case_1;
$d = ($__case_2)->v0;
$x = ($__case_2)->v1;
$__res = new Phpurs_Data2("DurationEnd", ($g)($d), ($f)($x));
goto __end;;
break;
case "StartDuration":
$g = $__case_0;
$f = $__case_1;
$x = ($__case_2)->v0;
$d = ($__case_2)->v1;
$__res = new Phpurs_Data2("StartDuration", ($f)($x), ($g)($d));
goto __end;;
break;
case "DurationOnly":
$g = $__case_0;
$d = ($__case_2)->v0;
$__res = new Phpurs_Data1("DurationOnly", ($g)($d));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_bimap': $v = (($GLOBALS['Data_Interval_bifunctorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifunctorInterval')))->bimap; break;
      case 'Data_Interval_bifunctorRecurringInterval': $v = (object)["bimap" => (function() use (&$__fn) {
  $__fn = function($f, $g = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
    if ($__num === 1) return function($g, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, &$__fn) { return $__fn($f, $g, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Interval_bimap = ($GLOBALS['Data_Interval_bimap'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bimap'));
  $__case_0 = $f;
  $__case_1 = $g;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$g1 = $__case_1;
$n = ($__case_2)->v0;
$i = ($__case_2)->v1;
$__res = new Phpurs_Data2("RecurringInterval", $n, ($__global_Data_Interval_bimap)($f1, $g1, $i));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_functorInterval': $v = (object)["map" => (($GLOBALS['Data_Interval_bimap'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bimap')))((($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity)]; break;
      case 'Data_Interval_map': $v = (($GLOBALS['Data_Interval_functorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorInterval')))->map; break;
      case 'Data_Interval_extendInterval': $v = (object)["extend" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "StartEnd":
$f = $__case_0;
$a = $__case_1;
$__res = new Phpurs_Data2("StartEnd", ($f)($a), ($f)($a));
goto __end;;
break;
case "DurationEnd":
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->v0;
$__res = new Phpurs_Data2("DurationEnd", $d, ($f)($a));
goto __end;;
break;
case "StartDuration":
$f = $__case_0;
$a = $__case_1;
$d = ($__case_1)->v1;
$__res = new Phpurs_Data2("StartDuration", ($f)($a), $d);
goto __end;;
break;
case "DurationOnly":
$d = ($__case_1)->v0;
$__res = new Phpurs_Data1("DurationOnly", $d);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_functorInterval = ($GLOBALS['Data_Interval_functorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorInterval'));
  $__res = $__global_Data_Interval_functorInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_extend': $v = (($GLOBALS['Data_Interval_extendInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_extendInterval')))->extend; break;
      case 'Data_Interval_functorRecurringInterval': $v = (object)["map" => (function() use (&$__fn) {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Interval_map = ($GLOBALS['Data_Interval_map'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_map'));
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
$__res = new Phpurs_Data2("RecurringInterval", $n, ($__global_Data_Interval_map)($f1, $i));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_extendRecurringInterval': $v = (object)["extend" => (function() use (&$__fn) {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Interval_extend = ($GLOBALS['Data_Interval_extend'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_extend'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$a = $__case_1;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
$__res = new Phpurs_Data2("RecurringInterval", $n, ($__global_Data_Interval_extend)(($__global_Data_Function_const)(($f1)($a)), $i));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_functorRecurringInterval = ($GLOBALS['Data_Interval_functorRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorRecurringInterval'));
  $__res = $__global_Data_Interval_functorRecurringInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_traversableInterval': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $Functor0 = (($Apply0)->Functor0)($__global_Prim_undefined);
  $map1 = ($Functor0)->map;
  $mapFlipped = ($__global_Data_Functor_mapFlipped)($Functor0);
  $pure = ($dictApplicative)->pure;
  $__res = (function() use ($apply, $map1, $mapFlipped, $pure, &$__fn) {
  $__fn = function($v, $v1 = null) use ($apply, $map1, $mapFlipped, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "StartEnd":
$f = $__case_0;
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
$__res = ($apply)(($map1)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($f)($x)), ($f)($y));
goto __end;;
break;
case "DurationEnd":
$f = $__case_0;
$d = ($__case_1)->v0;
$x = ($__case_1)->v1;
$__res = ($mapFlipped)(($f)($x), ((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($d));
goto __end;;
break;
case "StartDuration":
$f = $__case_0;
$x = ($__case_1)->v0;
$d = ($__case_1)->v1;
$__res = ($mapFlipped)(($f)($x), function($v2) use ($d) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("StartDuration", $v2, $d);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
break;
case "DurationOnly":
$d = ($__case_1)->v0;
$__res = ($pure)(new Phpurs_Data1("DurationOnly", $d));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_Traversable_sequenceDefault = ($GLOBALS['Data_Traversable_sequenceDefault'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequenceDefault'));
  $__global_Data_Interval_traversableInterval = ($GLOBALS['Data_Interval_traversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traversableInterval'));
  $__res = ($__global_Data_Traversable_sequenceDefault)($__global_Data_Interval_traversableInterval, $dictApplicative);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_functorInterval = ($GLOBALS['Data_Interval_functorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorInterval'));
  $__res = $__global_Data_Interval_functorInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_foldableInterval = ($GLOBALS['Data_Interval_foldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableInterval'));
  $__res = $__global_Data_Interval_foldableInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_traverse': $v = (($GLOBALS['Data_Interval_traversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traversableInterval')))->traverse; break;
      case 'Data_Interval_traversableRecurringInterval': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_Interval_over = ($GLOBALS['Data_Interval_over'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_over'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Interval_traverse = ($GLOBALS['Data_Interval_traverse'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traverse'));
  $over1 = ($__global_Data_Interval_over)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $traverse1 = ($__global_Data_Interval_traverse)($dictApplicative);
  $__res = (function() use ($over1, $traverse1, &$__fn) {
  $__fn = function($f, $i = null) use ($over1, $traverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($f, &$__fn) { return $__fn($f, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($over1)(($traverse1)($f), $i);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_Traversable_sequenceDefault = ($GLOBALS['Data_Traversable_sequenceDefault'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequenceDefault'));
  $__global_Data_Interval_traversableRecurringInterval = ($GLOBALS['Data_Interval_traversableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_traversableRecurringInterval'));
  $__res = ($__global_Data_Traversable_sequenceDefault)($__global_Data_Interval_traversableRecurringInterval, $dictApplicative);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_functorRecurringInterval = ($GLOBALS['Data_Interval_functorRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_functorRecurringInterval'));
  $__res = $__global_Data_Interval_functorRecurringInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_foldableRecurringInterval = ($GLOBALS['Data_Interval_foldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_foldableRecurringInterval'));
  $__res = $__global_Data_Interval_foldableRecurringInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_bifoldableInterval': $v = (object)["bifoldl" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
    if ($__num === 2) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      return phpurs_curry_fallback($__fn, [$v, $v1], 4);
    };
    if ($__num === 1) return function($v1, $v2 = null, $v3 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $v1, $v2, $v3);
      if ($__num2 === 2) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
      if ($__num2 === 1) return function($v2, $v3 = null) use ($v, $v1, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $v1, $v2, $v3);
        if ($__num3 === 1) return function($v3) use ($v, $v1, $v2, &$__fn) { return $__fn($v, $v1, $v2, $v3); };
        return phpurs_curry_fallback($__fn, [$v, $v1], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  $__case_3 = $v3;
  switch (($__case_3)->tag) {
case "StartEnd":
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->v0;
$y = ($__case_3)->v1;
$__res = ($f)(($f)($z, $x), $y);
goto __end;;
break;
case "DurationEnd":
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$d = ($__case_3)->v0;
$x = ($__case_3)->v1;
$__res = ($f)(($g)($z, $d), $x);
goto __end;;
break;
case "StartDuration":
$g = $__case_0;
$f = $__case_1;
$z = $__case_2;
$x = ($__case_3)->v0;
$d = ($__case_3)->v1;
$__res = ($f)(($g)($z, $d), $x);
goto __end;;
break;
case "DurationOnly":
$g = $__case_0;
$z = $__case_2;
$d = ($__case_3)->v0;
$__res = ($g)($z, $d);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => function($x) {
  $__num = func_num_args();
  $__global_Data_Bifoldable_bifoldrDefault = ($GLOBALS['Data_Bifoldable_bifoldrDefault'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldrDefault'));
  $__global_Data_Interval_bifoldableInterval = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval'));
  $__res = ($__global_Data_Bifoldable_bifoldrDefault)($__global_Data_Interval_bifoldableInterval, $x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "bifoldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Bifoldable_bifoldMapDefaultL = ($GLOBALS['Data_Bifoldable_bifoldMapDefaultL'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldMapDefaultL'));
  $__global_Data_Interval_bifoldableInterval = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval'));
  $__res = ($__global_Data_Bifoldable_bifoldMapDefaultL)($__global_Data_Interval_bifoldableInterval, $dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_bifoldl': $v = (($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval')))->bifoldl; break;
      case 'Data_Interval_bifoldr': $v = (($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval')))->bifoldr; break;
      case 'Data_Interval_bifoldableRecurringInterval': $v = (object)["bifoldl" => (function() use (&$__fn) {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
    if ($__num === 1) return function($g, $i = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $i);
      if ($__num2 === 1) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Interval_compose = ($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose'));
  $__global_Data_Interval_bifoldl = ($GLOBALS['Data_Interval_bifoldl'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldl'));
  $__global_Data_Interval_interval = ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval'));
  $__res = ($__global_Data_Interval_compose)(($__global_Data_Interval_bifoldl)($f, $g, $i), $__global_Data_Interval_interval);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() use (&$__fn) {
  $__fn = function($f, $g = null, $i = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
    if ($__num === 1) return function($g, $i = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $i);
      if ($__num2 === 1) return function($i) use ($f, $g, &$__fn) { return $__fn($f, $g, $i); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Interval_compose = ($GLOBALS['Data_Interval_compose'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compose'));
  $__global_Data_Interval_bifoldr = ($GLOBALS['Data_Interval_bifoldr'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldr'));
  $__global_Data_Interval_interval = ($GLOBALS['Data_Interval_interval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_interval'));
  $__res = ($__global_Data_Interval_compose)(($__global_Data_Interval_bifoldr)($f, $g, $i), $__global_Data_Interval_interval);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Bifoldable_bifoldMapDefaultL = ($GLOBALS['Data_Bifoldable_bifoldMapDefaultL'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldMapDefaultL'));
  $__global_Data_Interval_bifoldableRecurringInterval = ($GLOBALS['Data_Interval_bifoldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableRecurringInterval'));
  $__res = ($__global_Data_Bifoldable_bifoldMapDefaultL)($__global_Data_Interval_bifoldableRecurringInterval, $dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_bitraversableInterval': $v = (object)["bitraverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map1 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($apply, $map1, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($apply, $map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  switch (($__case_2)->tag) {
case "StartEnd":
$r = $__case_1;
$x = ($__case_2)->v0;
$y = ($__case_2)->v1;
$__res = ($apply)(($map1)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($r)($x)), ($r)($y));
goto __end;;
break;
case "DurationEnd":
$l = $__case_0;
$r = $__case_1;
$d = ($__case_2)->v0;
$x = ($__case_2)->v1;
$__res = ($apply)(($map1)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($l)($d)), ($r)($x));
goto __end;;
break;
case "StartDuration":
$l = $__case_0;
$r = $__case_1;
$x = ($__case_2)->v0;
$d = ($__case_2)->v1;
$__res = ($apply)(($map1)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("StartDuration", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($r)($x)), ($l)($d));
goto __end;;
break;
case "DurationOnly":
$l = $__case_0;
$d = ($__case_2)->v0;
$__res = ($map1)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("DurationOnly", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($l)($d));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_Bitraversable_bisequenceDefault = ($GLOBALS['Data_Bitraversable_bisequenceDefault'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bisequenceDefault'));
  $__global_Data_Interval_bitraversableInterval = ($GLOBALS['Data_Interval_bitraversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraversableInterval'));
  $__res = ($__global_Data_Bitraversable_bisequenceDefault)($__global_Data_Interval_bitraversableInterval, $dictApplicative);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_bifunctorInterval = ($GLOBALS['Data_Interval_bifunctorInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifunctorInterval'));
  $__res = $__global_Data_Interval_bifunctorInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_bifoldableInterval = ($GLOBALS['Data_Interval_bifoldableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableInterval'));
  $__res = $__global_Data_Interval_bifoldableInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_bitraverse': $v = (($GLOBALS['Data_Interval_bitraversableInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraversableInterval')))->bitraverse; break;
      case 'Data_Interval_bitraversableRecurringInterval': $v = (object)["bitraverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_Interval_over = ($GLOBALS['Data_Interval_over'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_over'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Interval_bitraverse = ($GLOBALS['Data_Interval_bitraverse'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraverse'));
  $over1 = ($__global_Data_Interval_over)((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $bitraverse1 = ($__global_Data_Interval_bitraverse)($dictApplicative);
  $__res = (function() use ($over1, $bitraverse1, &$__fn) {
  $__fn = function($l, $r = null, $i = null) use ($over1, $bitraverse1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($i) use ($l, $r, &$__fn) { return $__fn($l, $r, $i); };
    if ($__num === 1) return function($r, $i = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $i);
      if ($__num2 === 1) return function($i) use ($l, $r, &$__fn) { return $__fn($l, $r, $i); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($over1)(($bitraverse1)($l, $r), $i);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_Bitraversable_bisequenceDefault = ($GLOBALS['Data_Bitraversable_bisequenceDefault'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_bisequenceDefault'));
  $__global_Data_Interval_bitraversableRecurringInterval = ($GLOBALS['Data_Interval_bitraversableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bitraversableRecurringInterval'));
  $__res = ($__global_Data_Bitraversable_bisequenceDefault)($__global_Data_Interval_bitraversableRecurringInterval, $dictApplicative);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_bifunctorRecurringInterval = ($GLOBALS['Data_Interval_bifunctorRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifunctorRecurringInterval'));
  $__res = $__global_Data_Interval_bifunctorRecurringInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_bifoldableRecurringInterval = ($GLOBALS['Data_Interval_bifoldableRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_bifoldableRecurringInterval'));
  $__res = $__global_Data_Interval_bifoldableRecurringInterval;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Data_Interval_StartEnd
function Data_Interval_StartEnd($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_StartEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("StartEnd", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_StartEnd'] = __NAMESPACE__ . '\\Data_Interval_StartEnd';

// Data_Interval_DurationEnd
function Data_Interval_DurationEnd($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_DurationEnd';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("DurationEnd", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_DurationEnd'] = __NAMESPACE__ . '\\Data_Interval_DurationEnd';

// Data_Interval_StartDuration
function Data_Interval_StartDuration($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_StartDuration';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("StartDuration", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_StartDuration'] = __NAMESPACE__ . '\\Data_Interval_StartDuration';

// Data_Interval_DurationOnly
function Data_Interval_DurationOnly($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_DurationOnly';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("DurationOnly", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_DurationOnly'] = __NAMESPACE__ . '\\Data_Interval_DurationOnly';

// Data_Interval_RecurringInterval
function Data_Interval_RecurringInterval($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_RecurringInterval';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Interval_RecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_RecurringInterval';

// Data_Interval_showInterval
function Data_Interval_showInterval($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_showInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $show1 = ($dictShow)->show;
  $__res = function($dictShow1) use ($show1) {
  $__num = func_num_args();
  $show2 = ($dictShow1)->show;
  $__res = (object)["show" => function($v) use ($show2, $show1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "StartEnd":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
$__res = ("(StartEnd " . (($show2)($x) . (" " . (($show2)($y) . ")"))));
goto __end;;
break;
case "DurationEnd":
$d = ($__case_0)->v0;
$x = ($__case_0)->v1;
$__res = ("(DurationEnd " . (($show1)($d) . (" " . (($show2)($x) . ")"))));
goto __end;;
break;
case "StartDuration":
$x = ($__case_0)->v0;
$d = ($__case_0)->v1;
$__res = ("(StartDuration " . (($show2)($x) . (" " . (($show1)($d) . ")"))));
goto __end;;
break;
case "DurationOnly":
$d = ($__case_0)->v0;
$__res = ("(DurationOnly " . (($show1)($d) . ")"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_showInterval'] = __NAMESPACE__ . '\\Data_Interval_showInterval';

// Data_Interval_showRecurringInterval
function Data_Interval_showRecurringInterval($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_showRecurringInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Interval_showInterval = ($GLOBALS['Data_Interval_showInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_showInterval'));
  $__global_Data_Interval_show = ($GLOBALS['Data_Interval_show'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_show'));
  $showInterval1 = ($__global_Data_Interval_showInterval)($dictShow);
  $__res = function($dictShow1) use ($showInterval1, $__global_Data_Interval_show) {
  $__num = func_num_args();
  $show1 = (($showInterval1)($dictShow1))->show;
  $__res = (object)["show" => function($v) use ($__global_Data_Interval_show, $show1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "RecurringInterval":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
$__res = ("(RecurringInterval " . (($__global_Data_Interval_show)($x) . (" " . (($show1)($y) . ")"))));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_showRecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_showRecurringInterval';

// Data_Interval_over
function Data_Interval_over($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_over';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $map1 = ($dictFunctor)->map;
  $__res = (function() use ($map1, &$__fn) {
  $__fn = function($f, $v = null) use ($map1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "RecurringInterval":
$f1 = $__case_0;
$n = ($__case_1)->v0;
$i = ($__case_1)->v1;
$__res = ($map1)(((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("RecurringInterval", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($n), ($f1)($i));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_over'] = __NAMESPACE__ . '\\Data_Interval_over';

// Data_Interval_interval
function Data_Interval_interval($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_interval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "RecurringInterval":
$i = ($__case_0)->v1;
$__res = $i;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_interval'] = __NAMESPACE__ . '\\Data_Interval_interval';





// Data_Interval_eqInterval
function Data_Interval_eqInterval($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_eqInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $eq1 = ($dictEq)->eq;
  $__res = function($dictEq1) use ($__global_Data_HeytingAlgebra_boolConj, $eq1) {
  $__num = func_num_args();
  $eq2 = ($dictEq1)->eq;
  $__res = (object)["eq" => (function() use ($__global_Data_HeytingAlgebra_boolConj, $eq2, $eq1, &$__fn) {
  $__fn = function($x, $y = null) use ($__global_Data_HeytingAlgebra_boolConj, $eq2, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($eq2)($l, $r), ($eq2)($l1, $r1));
goto __end;;
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($eq1)($l, $r), ($eq2)($l1, $r1));
goto __end;;
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($eq2)($l, $r), ($eq1)($l1, $r1));
goto __end;;
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
$__res = ($eq1)($l, $r);
goto __end;;
} else {
if (true) {
$__res = false;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_eqInterval'] = __NAMESPACE__ . '\\Data_Interval_eqInterval';

// Data_Interval_eqRecurringInterval
function Data_Interval_eqRecurringInterval($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_eqRecurringInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Interval_eqInterval = ($GLOBALS['Data_Interval_eqInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eqInterval'));
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__global_Data_Interval_eq = ($GLOBALS['Data_Interval_eq'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eq'));
  $eqInterval1 = ($__global_Data_Interval_eqInterval)($dictEq);
  $__res = function($dictEq1) use ($eqInterval1, $__global_Data_HeytingAlgebra_boolConj, $__global_Data_Interval_eq) {
  $__num = func_num_args();
  $eq1 = (($eqInterval1)($dictEq1))->eq;
  $__res = (object)["eq" => (function() use ($__global_Data_HeytingAlgebra_boolConj, $__global_Data_Interval_eq, $eq1, &$__fn) {
  $__fn = function($x, $y = null) use ($__global_Data_HeytingAlgebra_boolConj, $__global_Data_Interval_eq, $eq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Interval_eq)($l, $r), ($eq1)($l1, $r1));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_eqRecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_eqRecurringInterval';

// Data_Interval_ordInterval
function Data_Interval_ordInterval($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_ordInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Interval_eqInterval = ($GLOBALS['Data_Interval_eqInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eqInterval'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $compare1 = ($dictOrd)->compare;
  $eqInterval1 = ($__global_Data_Interval_eqInterval)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = function($dictOrd1) use ($eqInterval1, $__global_Prim_undefined, $compare1) {
  $__num = func_num_args();
  $compare2 = ($dictOrd1)->compare;
  $eqInterval2 = ($eqInterval1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare2, $compare1, &$__fn) {
  $__fn = function($x, $y = null) use ($compare2, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "StartEnd") && (($__case_1)->tag === "StartEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare2)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
case "GT":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
$__res = ($compare2)($l1, $r1);
goto __end;;
break;
};
} else {
if ((($__case_0)->tag === "StartEnd")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "StartEnd")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "DurationEnd") && (($__case_1)->tag === "DurationEnd"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare1)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
case "GT":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
$__res = ($compare2)($l1, $r1);
goto __end;;
break;
};
} else {
if ((($__case_0)->tag === "DurationEnd")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "DurationEnd")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "StartDuration") && (($__case_1)->tag === "StartDuration"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($compare2)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
case "GT":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
$__res = ($compare1)($l1, $r1);
goto __end;;
break;
};
} else {
if ((($__case_0)->tag === "StartDuration")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "StartDuration")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "DurationOnly") && (($__case_1)->tag === "DurationOnly"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
$__res = ($compare1)($l, $r);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
};
};
};
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) use ($eqInterval2) {
  $__num = func_num_args();
  $__res = $eqInterval2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_ordInterval'] = __NAMESPACE__ . '\\Data_Interval_ordInterval';

// Data_Interval_ordRecurringInterval
function Data_Interval_ordRecurringInterval($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_ordRecurringInterval';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Interval_ordInterval = ($GLOBALS['Data_Interval_ordInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_ordInterval'));
  $__global_Data_Interval_eqRecurringInterval = ($GLOBALS['Data_Interval_eqRecurringInterval'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_eqRecurringInterval'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Interval_compare = ($GLOBALS['Data_Interval_compare'] ?? \Data\Interval\phpurs_eval_thunk('Data_Interval_compare'));
  $ordInterval1 = ($__global_Data_Interval_ordInterval)($dictOrd);
  $eqRecurringInterval1 = ($__global_Data_Interval_eqRecurringInterval)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = function($dictOrd1) use ($ordInterval1, $eqRecurringInterval1, $__global_Prim_undefined, $__global_Data_Interval_compare) {
  $__num = func_num_args();
  $compare1 = (($ordInterval1)($dictOrd1))->compare;
  $eqRecurringInterval2 = ($eqRecurringInterval1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($__global_Data_Interval_compare, $compare1, &$__fn) {
  $__fn = function($x, $y = null) use ($__global_Data_Interval_compare, $compare1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "RecurringInterval") && (($__case_1)->tag === "RecurringInterval"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$v = ($__global_Data_Interval_compare)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
case "GT":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
$__res = ($compare1)($l1, $r1);
goto __end;;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) use ($eqRecurringInterval2) {
  $__num = func_num_args();
  $__res = $eqRecurringInterval2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_ordRecurringInterval'] = __NAMESPACE__ . '\\Data_Interval_ordRecurringInterval';




















