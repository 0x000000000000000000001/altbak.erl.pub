<?php

namespace Data\Map\Internal;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Map_Internal_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Map_Internal_greaterThan': $v = \Data\Ord\Data_Ord_greaterThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Map_Internal_lessThanOrEq': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Map_Internal_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Map_Internal_show': $v = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl')); break;
      case 'Data_Map_Internal_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_Map_Internal_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Map_Internal_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Map_Internal_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Map_Internal_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Map_Internal_lessThan': $v = \Data\Ord\Data_Ord_lessThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Map_Internal_abs': $v = \Data\Ord\Data_Ord_abs(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')), ($GLOBALS['Data_Ring_ringInt'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringInt'))); break;
      case 'Data_Map_Internal_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Map_Internal_disj': $v = ($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolDisj')); break;
      case 'Data_Map_Internal_Leaf': $v = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")); break;
      case 'Data_Map_Internal_IterLeaf': $v = ($GLOBALS['__phpurs_data0_IterLeaf'] ??= new Phpurs_Data0("IterLeaf")); break;
      case 'Data_Map_Internal_IterDone': $v = ($GLOBALS['__phpurs_data0_IterDone'] ??= new Phpurs_Data0("IterDone")); break;
      case 'Data_Map_Internal_unsafeNode': $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $l = null, $r = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($k, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $l, $r);
      if ($__num2 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      return phpurs_curry_fallback($__fn, [$k, $v], 4);
    };
    if ($__num === 1) return function($v, $l = null, $r = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($k, $v, $l, $r);
      if ($__num2 === 2) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($k, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($k, $v, $l, $r);
        if ($__num3 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
        return phpurs_curry_fallback($__fn, [$k, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$k], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__global_Data_Map_Internal_greaterThan = ($GLOBALS['Data_Map_Internal_greaterThan'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_greaterThan'));
  $__case_0 = $l;
  switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__res = new Phpurs_Data6("Node", 1, 1, $k, $v, $l, $r);
goto __end;;
break;
case "Node":
$h2 = ($__case_0)->v0;
$s2 = ($__case_0)->v1;
$__res = new Phpurs_Data6("Node", (1 + $h2), (1 + $s2), $k, $v, $l, $r);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "Node":
$h1 = ($__case_0)->v0;
$s1 = ($__case_0)->v1;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__res = new Phpurs_Data6("Node", (1 + $h1), (1 + $s1), $k, $v, $l, $r);
goto __end;;
break;
case "Node":
$h2 = ($__case_0)->v0;
$s2 = ($__case_0)->v1;
$__case_0 = ($__global_Data_Map_Internal_greaterThan)($h1, $h2);
$__case_res_0 = null;
switch ($__case_0) {
case true:
$__case_res_0 = $h1;
break;
default:
$__case_res_0 = $h2;
break;
};
$__res = new Phpurs_Data6("Node", (1 + $__case_res_0), ((1 + $s1) + $s2), $k, $v, $l, $r);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_toMapIter': $v = \Data\Function\Data_Function_flip((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_IterLeaf'] ??= new Phpurs_Data0("IterLeaf"))); break;
      case 'Data_Map_Internal_unsafeBalancedNode': $v = (function() use (&$__fn) {
$height = function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = 0;
goto __end;;
break;
case "Node":
$h = ($__case_0)->v0;
$__res = $h;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$rotateLeft = (($GLOBALS['Data_Function_Uncurried_mkFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn7')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $l = null, $rk = null, $rv = null, $rl = null, $rr = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeNode = ($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeNode'));
  $__case_0 = $rl;
  switch (($__case_0)->tag) {
case "Node":
$lh = ($__case_0)->v0;
$lk = ($__case_0)->v2;
$lv = ($__case_0)->v3;
$ll = ($__case_0)->v4;
$lr = ($__case_0)->v5;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $rk, $rv, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $k, $v, $l, $rl), $rr);
goto __end;;
break;
};
  __end:
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
$rotateRight = (($GLOBALS['Data_Function_Uncurried_mkFn7'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn7')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $lk = null, $lv = null, $ll = null, $lr = null, $r = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, func_get_args(), 7);
  }
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeNode = ($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeNode'));
  $__case_0 = $lr;
  switch (($__case_0)->tag) {
case "Node":
$rh = ($__case_0)->v0;
$rk = ($__case_0)->v2;
$rv = ($__case_0)->v3;
$rl = ($__case_0)->v4;
$rr = ($__case_0)->v5;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $lk, $lv, $ll, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $k, $v, $lr, $r));
goto __end;;
break;
};
  __end:
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
return (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $l = null, $r = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($k, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $l, $r);
      if ($__num2 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      return phpurs_curry_fallback($__fn, [$k, $v], 4);
    };
    if ($__num === 1) return function($v, $l = null, $r = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($k, $v, $l, $r);
      if ($__num2 === 2) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($k, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($k, $v, $l, $r);
        if ($__num3 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
        return phpurs_curry_fallback($__fn, [$k, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$k], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeNode = ($GLOBALS['Data_Map_Internal_unsafeNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeNode'));
  $__case_0 = $l;
  switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($__global_Data_Map_Internal_singleton)($k, $v);
goto __end;;
break;
case "Node":
$rh = ($__case_0)->v0;
$rk = ($__case_0)->v2;
$rv = ($__case_0)->v3;
$rl = ($__case_0)->v4;
$rr = ($__case_0)->v5;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $k, $v, $l, $r);
goto __end;;
break;
};
break;
case "Node":
$lh = ($__case_0)->v0;
$lk = ($__case_0)->v2;
$lv = ($__case_0)->v3;
$ll = ($__case_0)->v4;
$lr = ($__case_0)->v5;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Node":
$rh = ($__case_0)->v0;
$rk = ($__case_0)->v2;
$rv = ($__case_0)->v3;
$rl = ($__case_0)->v4;
$rr = ($__case_0)->v5;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
case "Leaf":
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeNode, $k, $v, $l, $r);
goto __end;;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
})(); break;
      case 'Data_Map_Internal_unsafeSplit': $v = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() use (&$__fn) {
  $__fn = function($comp, $k = null, $m = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m) use ($comp, $k, &$__fn) { return $__fn($comp, $k, $m); };
    if ($__num === 1) return function($k, $m = null) use ($comp, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($comp, $k, $m);
      if ($__num2 === 1) return function($m) use ($comp, $k, &$__fn) { return $__fn($comp, $k, $m); };
      return phpurs_curry_fallback($__fn, [$comp], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
  $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $__case_0 = $m;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = new Phpurs_Data3("Split", ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
goto __end;;
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v = ($comp)($k, $mk);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
$v1 = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $k, $ml);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Split":
$b = ($__case_0)->v0;
$ll = ($__case_0)->v1;
$lr = ($__case_0)->v2;
$__res = new Phpurs_Data3("Split", $b, $ll, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $lr, $mr));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "GT":
$v1 = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $k, $mr);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Split":
$b = ($__case_0)->v0;
$rl = ($__case_0)->v1;
$rr = ($__case_0)->v2;
$__res = new Phpurs_Data3("Split", $b, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, $rl), $rr);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "EQ":
$__res = new Phpurs_Data3("Split", new Phpurs_Data1("Just", $mv), $ml, $mr);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_unsafeSplitLast': $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $l = null, $r = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($k, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $l, $r);
      if ($__num2 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      return phpurs_curry_fallback($__fn, [$k, $v], 4);
    };
    if ($__num === 1) return function($v, $l = null, $r = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($k, $v, $l, $r);
      if ($__num2 === 2) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($k, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($k, $v, $l, $r);
        if ($__num3 === 1) return function($r) use ($k, $v, $l, &$__fn) { return $__fn($k, $v, $l, $r); };
        return phpurs_curry_fallback($__fn, [$k, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$k], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeSplitLast = ($GLOBALS['Data_Map_Internal_unsafeSplitLast'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplitLast'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $__case_0 = $r;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = new Phpurs_Data3("SplitLast", $k, $v, $l);
goto __end;;
break;
case "Node":
$rk = ($__case_0)->v2;
$rv = ($__case_0)->v3;
$rl = ($__case_0)->v4;
$rr = ($__case_0)->v5;
$v1 = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeSplitLast, $rk, $rv, $rl, $rr);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "SplitLast":
$k__prime__ = ($__case_0)->v0;
$v__prime__ = ($__case_0)->v1;
$t__prime__ = ($__case_0)->v2;
$__res = new Phpurs_Data3("SplitLast", $k__prime__, $v__prime__, ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v, $l, $t__prime__));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_unsafeJoinNodes': $v = (($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2')))((function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeSplitLast = ($GLOBALS['Data_Map_Internal_unsafeSplitLast'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplitLast'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_0)->tag) {
case "Leaf":
$b = $__case_1;
$__res = $b;
goto __end;;
break;
case "Node":
$lk = ($__case_0)->v2;
$lv = ($__case_0)->v3;
$ll = ($__case_0)->v4;
$lr = ($__case_0)->v5;
$r = $__case_1;
$v2 = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeSplitLast, $lk, $lv, $ll, $lr);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "SplitLast":
$k = ($__case_0)->v0;
$v3 = ($__case_0)->v1;
$l = ($__case_0)->v2;
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v3, $l, $r);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_unsafeDifference': $v = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() use (&$__fn) {
  $__fn = function($comp, $l = null, $r = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($r) use ($comp, $l, &$__fn) { return $__fn($comp, $l, $r); };
    if ($__num === 1) return function($l, $r = null) use ($comp, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($comp, $l, $r);
      if ($__num2 === 1) return function($r) use ($comp, $l, &$__fn) { return $__fn($comp, $l, $r); };
      return phpurs_curry_fallback($__fn, [$comp], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
  $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
  $__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
  $__case_0 = $l;
  $__case_1 = $r;
  if ((($__case_0)->tag === "Leaf")) {
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Leaf":
$__res = $l;
goto __end;;
break;
case "Node":
$rk = ($__case_1)->v2;
$rl = ($__case_1)->v4;
$rr = ($__case_1)->v5;
$v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $rk, $l);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Split":
$ll = ($__case_0)->v1;
$lr = ($__case_0)->v2;
$l__prime__ = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $comp, $ll, $rl);
$r__prime__ = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $comp, $lr, $rr);
$__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $l__prime__, $r__prime__);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_unsafeIntersectionWith': $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() use (&$__fn) {
  $__fn = function($comp, $app = null, $l = null, $r = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($comp, $app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($comp, $app, $l, $r);
      if ($__num2 === 1) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
      return phpurs_curry_fallback($__fn, [$comp, $app], 4);
    };
    if ($__num === 1) return function($app, $l = null, $r = null) use ($comp, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($comp, $app, $l, $r);
      if ($__num2 === 2) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($comp, $app, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($comp, $app, $l, $r);
        if ($__num3 === 1) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
        return phpurs_curry_fallback($__fn, [$comp, $app], 4);
      };
      return phpurs_curry_fallback($__fn, [$comp], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
  $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
  $__case_0 = $l;
  $__case_1 = $r;
  if ((($__case_0)->tag === "Leaf")) {
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
break;
case "Node":
$rk = ($__case_1)->v2;
$rv = ($__case_1)->v3;
$rl = ($__case_1)->v4;
$rr = ($__case_1)->v5;
$v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $rk, $l);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Split":
$lv = ($__case_0)->v0;
$ll = ($__case_0)->v1;
$lr = ($__case_0)->v2;
$l__prime__ = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $comp, $app, $ll, $rl);
$r__prime__ = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $comp, $app, $lr, $rr);
$__case_0 = $lv;
switch (($__case_0)->tag) {
case "Just":
$lv__prime__ = ($__case_0)->v0;
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $rk, ($app)($lv__prime__, $rv), $l__prime__, $r__prime__);
goto __end;;
break;
case "Nothing":
$__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $l__prime__, $r__prime__);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_unsafeUnionWith': $v = (($GLOBALS['Data_Function_Uncurried_mkFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn4')))((function() use (&$__fn) {
  $__fn = function($comp, $app = null, $l = null, $r = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
    if ($__num === 2) return function($l, $r = null) use ($comp, $app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($comp, $app, $l, $r);
      if ($__num2 === 1) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
      return phpurs_curry_fallback($__fn, [$comp, $app], 4);
    };
    if ($__num === 1) return function($app, $l = null, $r = null) use ($comp, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($comp, $app, $l, $r);
      if ($__num2 === 2) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
      if ($__num2 === 1) return function($l, $r = null) use ($comp, $app, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($comp, $app, $l, $r);
        if ($__num3 === 1) return function($r) use ($comp, $app, $l, &$__fn) { return $__fn($comp, $app, $l, $r); };
        return phpurs_curry_fallback($__fn, [$comp, $app], 4);
      };
      return phpurs_curry_fallback($__fn, [$comp], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
  $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $__case_0 = $l;
  $__case_1 = $r;
  if ((($__case_0)->tag === "Leaf")) {
$__res = $r;
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Leaf":
$__res = $l;
goto __end;;
break;
case "Node":
$rk = ($__case_1)->v2;
$rv = ($__case_1)->v3;
$rl = ($__case_1)->v4;
$rr = ($__case_1)->v5;
$v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $comp, $rk, $l);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Split":
$lv = ($__case_0)->v0;
$ll = ($__case_0)->v1;
$lr = ($__case_0)->v2;
$l__prime__ = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $comp, $app, $ll, $rl);
$r__prime__ = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $comp, $app, $lr, $rr);
$__case_0 = $lv;
switch (($__case_0)->tag) {
case "Just":
$lv__prime__ = ($__case_0)->v0;
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $rk, ($app)($lv__prime__, $rv), $l__prime__, $r__prime__);
goto __end;;
break;
case "Nothing":
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $rk, $rv, $l__prime__, $r__prime__);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Map_Internal_semigroupMap1': $v = \Data\Map\Internal\Data_Map_Internal_semigroupMap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Map_Internal_stepUnorderedCps': $v = \Data\Map\Internal\Data_Map_Internal_stepWith("\\Data\\Map\\Internal\\Data_Map_Internal_iterMapU"); break;
      case 'Data_Map_Internal_stepUnfoldrUnordered': $v = (function() use (&$__fn) {
$step = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", $k, $v), $next));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
return (($GLOBALS['Data_Map_Internal_stepUnorderedCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnorderedCps')))($step, function($v) {
  $__num = func_num_args();
  $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
})(); break;
      case 'Data_Map_Internal_stepUnordered': $v = (($GLOBALS['Data_Map_Internal_stepUnorderedCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnorderedCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterNext", $k, $v, $next);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), \Data\Function\Data_Function_const(($GLOBALS['__phpurs_data0_IterDone'] ??= new Phpurs_Data0("IterDone")))); break;
      case 'Data_Map_Internal_iterMapR': $v = (function() use (&$__fn) {
$go = (function() use (&$go, &$__fn) {
  $__fn = function($iter, $v = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($iter, &$__fn) { return $__fn($iter, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = $iter;
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__tco_tmp_0 = new Phpurs_Data3("IterEmit", $k, $v1, $iter);
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue III/*__LVL__*/;
break;
default:
$__tco_tmp_0 = new Phpurs_Data3("IterEmit", $k, $v1, new Phpurs_Data2("IterNode", $l, $iter));
$__tco_tmp_1 = $r;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue III/*__LVL__*/;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return $go;
})(); break;
      case 'Data_Map_Internal_stepDescCps': $v = \Data\Map\Internal\Data_Map_Internal_stepWith(($GLOBALS['Data_Map_Internal_iterMapR'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_iterMapR'))); break;
      case 'Data_Map_Internal_stepDesc': $v = (($GLOBALS['Data_Map_Internal_stepDescCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepDescCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterNext", $k, $v, $next);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), \Data\Function\Data_Function_const(($GLOBALS['__phpurs_data0_IterDone'] ??= new Phpurs_Data0("IterDone")))); break;
      case 'Data_Map_Internal_iterMapL': $v = (function() use (&$__fn) {
$go = (function() use (&$go, &$__fn) {
  $__fn = function($iter, $v = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($iter, &$__fn) { return $__fn($iter, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = $iter;
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__tco_tmp_0 = new Phpurs_Data3("IterEmit", $k, $v1, $iter);
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue III/*__LVL__*/;
break;
default:
$__tco_tmp_0 = new Phpurs_Data3("IterEmit", $k, $v1, new Phpurs_Data2("IterNode", $r, $iter));
$__tco_tmp_1 = $l;
$iter = $__tco_tmp_0;
$v = $__tco_tmp_1;
continue III/*__LVL__*/;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
return $go;
})(); break;
      case 'Data_Map_Internal_stepAscCps': $v = \Data\Map\Internal\Data_Map_Internal_stepWith(($GLOBALS['Data_Map_Internal_iterMapL'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_iterMapL'))); break;
      case 'Data_Map_Internal_stepAsc': $v = (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))((($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterNext", $k, $v, $next);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), \Data\Function\Data_Function_const(($GLOBALS['__phpurs_data0_IterDone'] ??= new Phpurs_Data0("IterDone")))); break;
      case 'Data_Map_Internal_stepUnfoldr': $v = (function() use (&$__fn) {
$step = (($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3')))((function() use (&$__fn) {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", new Phpurs_Data2("Tuple", $k, $v), $next));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
return (($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps')))($step, function($v) {
  $__num = func_num_args();
  $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
})(); break;
      case 'Data_Map_Internal_toUnfoldable1': $v = \Data\Map\Internal\Data_Map_Internal_toUnfoldable(($GLOBALS['Data_Unfoldable_unfoldableArray'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldableArray'))); break;
      case 'Data_Map_Internal_functorMap': $v = (object)["map" => function($f) {
  $__num = func_num_args();
  $go = function($v) use ($f, &$go) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = new Phpurs_Data6("Node", $h, $s, $k, ($f)($v1), ($go)($l), ($go)($r));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Map_Internal_functorWithIndexMap': $v = (object)["mapWithIndex" => function($f) {
  $__num = func_num_args();
  $go = function($v) use ($f, &$go) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = new Phpurs_Data6("Node", $h, $s, $k, ($f)($k, $v1), ($go)($l), ($go)($r));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
  $__res = $__global_Data_Map_Internal_functorMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Map_Internal_foldableMap': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Function_Uncurried_mkFn2 = ($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $go = ($__global_Data_Function_Uncurried_mkFn2)((function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, &$__fn) {
  $__fn = function($m__prime__, $z__prime__ = null) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z__prime__) use ($m__prime__, &$__fn) { return $__fn($m__prime__, $z__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $m__prime__;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = $z__prime__;
goto __end;;
break;
case "Node":
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = ($__global_Data_Function_Uncurried_runFn2)($go, $l, ($f)($v, ($__global_Data_Function_Uncurried_runFn2)($go, $r, $z__prime__)));
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
})());
  $__res = function($m) use ($__global_Data_Function_Uncurried_runFn2, &$go, $z) {
  $__num = func_num_args();
  $__res = ($__global_Data_Function_Uncurried_runFn2)($go, $m, $z);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Function_Uncurried_mkFn2 = ($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $go = ($__global_Data_Function_Uncurried_mkFn2)((function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, &$__fn) {
  $__fn = function($z__prime__, $m__prime__ = null) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m__prime__) use ($z__prime__, &$__fn) { return $__fn($z__prime__, $m__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $m__prime__;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = $z__prime__;
goto __end;;
break;
case "Node":
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = ($__global_Data_Function_Uncurried_runFn2)($go, ($f)(($__global_Data_Function_Uncurried_runFn2)($go, $z__prime__, $l), $v), $r);
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
})());
  $__res = function($m) use ($__global_Data_Function_Uncurried_runFn2, &$go, $z) {
  $__num = func_num_args();
  $__res = ($__global_Data_Function_Uncurried_runFn2)($go, $z, $m);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $mempty = ($dictMonoid)->mempty;
  $append1 = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $__res = function($f) use ($mempty, $append1) {
  $__num = func_num_args();
  $go = function($v) use ($mempty, $append1, &$go, $f) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = $mempty;
goto __end;;
break;
case "Node":
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = ($append1)(($go)($l), ($append1)(($f)($v1), ($go)($r)));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Map_Internal_foldableWithIndexMap': $v = (object)["foldrWithIndex" => (function() use (&$__fn) {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Function_Uncurried_mkFn2 = ($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $go = ($__global_Data_Function_Uncurried_mkFn2)((function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, &$__fn) {
  $__fn = function($m__prime__, $z__prime__ = null) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z__prime__) use ($m__prime__, &$__fn) { return $__fn($m__prime__, $z__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $m__prime__;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = $z__prime__;
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = ($__global_Data_Function_Uncurried_runFn2)($go, $l, ($f)($k, $v, ($__global_Data_Function_Uncurried_runFn2)($go, $r, $z__prime__)));
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
})());
  $__res = function($m) use ($__global_Data_Function_Uncurried_runFn2, &$go, $z) {
  $__num = func_num_args();
  $__res = ($__global_Data_Function_Uncurried_runFn2)($go, $m, $z);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldlWithIndex" => (function() use (&$__fn) {
  $__fn = function($f, $z = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Function_Uncurried_mkFn2 = ($GLOBALS['Data_Function_Uncurried_mkFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn2'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $go = ($__global_Data_Function_Uncurried_mkFn2)((function() use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, &$__fn) {
  $__fn = function($z__prime__, $m__prime__ = null) use ($__global_Data_Function_Uncurried_runFn2, &$go, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m__prime__) use ($z__prime__, &$__fn) { return $__fn($z__prime__, $m__prime__); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $m__prime__;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = $z__prime__;
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = ($__global_Data_Function_Uncurried_runFn2)($go, ($f)($k, ($__global_Data_Function_Uncurried_runFn2)($go, $z__prime__, $l), $v), $r);
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
})());
  $__res = function($m) use ($__global_Data_Function_Uncurried_runFn2, &$go, $z) {
  $__num = func_num_args();
  $__res = ($__global_Data_Function_Uncurried_runFn2)($go, $z, $m);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMapWithIndex" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $mempty = ($dictMonoid)->mempty;
  $append1 = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $__res = function($f) use ($mempty, $append1) {
  $__num = func_num_args();
  $go = function($v) use ($mempty, $append1, &$go, $f) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = $mempty;
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = ($append1)(($go)($l), ($append1)(($f)($k, $v1), ($go)($r)));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Map_Internal_foldableMap = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableMap'));
  $__res = $__global_Data_Map_Internal_foldableMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Map_Internal_keys': $v = ((($GLOBALS['Data_Map_Internal_foldableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableWithIndexMap')))->foldrWithIndex)((function() use (&$__fn) {
  $__fn = function($k, $v = null, $acc = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($acc) use ($k, $v, &$__fn) { return $__fn($k, $v, $acc); };
    if ($__num === 1) return function($v, $acc = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $acc);
      if ($__num2 === 1) return function($acc) use ($k, $v, &$__fn) { return $__fn($k, $v, $acc); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Cons", $k, $acc);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))); break;
      case 'Data_Map_Internal_traversableMap': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = ($dictApplicative)->pure;
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map1 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $__res = function($f) use ($pure, $apply, $map1) {
  $__num = func_num_args();
  $go = function($v) use ($pure, $apply, $map1, &$go, $f) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($pure)(($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
goto __end;;
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = ($apply)(($apply)(($map1)((function() use ($h, $s, $k, &$__fn) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use ($h, $s, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($r__prime__) use ($l__prime__, $v__prime__, &$__fn) { return $__fn($l__prime__, $v__prime__, $r__prime__); };
    if ($__num === 1) return function($v__prime__, $r__prime__ = null) use ($l__prime__, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l__prime__, $v__prime__, $r__prime__);
      if ($__num2 === 1) return function($r__prime__) use ($l__prime__, $v__prime__, &$__fn) { return $__fn($l__prime__, $v__prime__, $r__prime__); };
      return phpurs_curry_fallback($__fn, [$l__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data6("Node", $h, $s, $k, $v__prime__, $l__prime__, $r__prime__);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($go)($l)), ($f)($v1)), ($go)($r));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_Map_Internal_traversableMap = ($GLOBALS['Data_Map_Internal_traversableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableMap'));
  $__global_Data_Map_Internal_identity = ($GLOBALS['Data_Map_Internal_identity'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_identity'));
  $__res = (($__global_Data_Map_Internal_traversableMap)->traverse)($dictApplicative, $__global_Data_Map_Internal_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
  $__res = $__global_Data_Map_Internal_functorMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Map_Internal_foldableMap = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableMap'));
  $__res = $__global_Data_Map_Internal_foldableMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Map_Internal_traversableWithIndexMap': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = ($dictApplicative)->pure;
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map1 = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $__res = function($f) use ($pure, $apply, $map1) {
  $__num = func_num_args();
  $go = function($v) use ($pure, $apply, $map1, &$go, $f) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($pure)(($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
goto __end;;
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = ($apply)(($apply)(($map1)((function() use ($h, $s, $k, &$__fn) {
  $__fn = function($l__prime__, $v__prime__ = null, $r__prime__ = null) use ($h, $s, $k, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($r__prime__) use ($l__prime__, $v__prime__, &$__fn) { return $__fn($l__prime__, $v__prime__, $r__prime__); };
    if ($__num === 1) return function($v__prime__, $r__prime__ = null) use ($l__prime__, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l__prime__, $v__prime__, $r__prime__);
      if ($__num2 === 1) return function($r__prime__) use ($l__prime__, $v__prime__, &$__fn) { return $__fn($l__prime__, $v__prime__, $r__prime__); };
      return phpurs_curry_fallback($__fn, [$l__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data6("Node", $h, $s, $k, $v__prime__, $l__prime__, $r__prime__);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($go)($l)), ($f)($k, $v1)), ($go)($r));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Map_Internal_functorWithIndexMap = ($GLOBALS['Data_Map_Internal_functorWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorWithIndexMap'));
  $__res = $__global_Data_Map_Internal_functorWithIndexMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Map_Internal_foldableWithIndexMap = ($GLOBALS['Data_Map_Internal_foldableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableWithIndexMap'));
  $__res = $__global_Data_Map_Internal_foldableWithIndexMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Map_Internal_traversableMap = ($GLOBALS['Data_Map_Internal_traversableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableMap'));
  $__res = $__global_Data_Map_Internal_traversableMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Map_Internal_values': $v = ((($GLOBALS['Data_Map_Internal_foldableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableMap')))->foldr)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))); break;
      case 'Data_Map_Internal_empty': $v = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };

















// Data_Map_Internal_Node
function Data_Map_Internal_Node($value0, $value1 = null, $value2 = null, $value3 = null, $value4 = null, $value5 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_Node';
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, func_get_args(), 6);
  }
  $__res = new Phpurs_Data6("Node", $value0, $value1, $value2, $value3, $value4, $value5);
  goto __end;;
  __end:
  return 6 < $__num ? $__res(...array_slice(func_get_args(), 6)) : $__res;
}
$GLOBALS['Data_Map_Internal_Node'] = __NAMESPACE__ . '\\Data_Map_Internal_Node';


// Data_Map_Internal_IterEmit
function Data_Map_Internal_IterEmit($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_IterEmit';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterEmit", $value0, $value1, $value2);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_IterEmit'] = __NAMESPACE__ . '\\Data_Map_Internal_IterEmit';

// Data_Map_Internal_IterNode
function Data_Map_Internal_IterNode($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_IterNode';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("IterNode", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_IterNode'] = __NAMESPACE__ . '\\Data_Map_Internal_IterNode';


// Data_Map_Internal_IterNext
function Data_Map_Internal_IterNext($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_IterNext';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("IterNext", $value0, $value1, $value2);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_IterNext'] = __NAMESPACE__ . '\\Data_Map_Internal_IterNext';

// Data_Map_Internal_Split
function Data_Map_Internal_Split($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_Split';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("Split", $value0, $value1, $value2);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_Split'] = __NAMESPACE__ . '\\Data_Map_Internal_Split';

// Data_Map_Internal_SplitLast
function Data_Map_Internal_SplitLast($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_SplitLast';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("SplitLast", $value0, $value1, $value2);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_SplitLast'] = __NAMESPACE__ . '\\Data_Map_Internal_SplitLast';



// Data_Map_Internal_stepWith
function Data_Map_Internal_stepWith($f, $next = null, $done = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_stepWith';
  if ($__num < 3) {
    if ($__num === 2) return function($done) use ($f, $next, $__fn) { return $__fn($f, $next, $done); };
    if ($__num === 1) return function($next, $done = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $next, $done);
      if ($__num2 === 1) return function($done) use ($f, $next, $__fn) { return $__fn($f, $next, $done); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
  $go = function($v) use ($done, $__global_Data_Unit_unit, $__global_Data_Function_Uncurried_runFn3, $next, &$go, $f) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterLeaf":
$__res = ($done)($__global_Data_Unit_unit);
goto __end;;
break;
case "IterEmit":
$k = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$iter = ($__case_0)->v2;
$__res = ($__global_Data_Function_Uncurried_runFn3)($next, $k, $v1, $iter);
goto __end;;
break;
case "IterNode":
$m = ($__case_0)->v0;
$iter = ($__case_0)->v1;
$__tco_tmp_0 = ($f)($iter, $m);
$v = $__tco_tmp_0;
continue 2;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Map_Internal_stepWith'] = __NAMESPACE__ . '\\Data_Map_Internal_stepWith';

// Data_Map_Internal_size
function Data_Map_Internal_size($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_size';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = 0;
goto __end;;
break;
case "Node":
$s = ($__case_0)->v1;
$__res = $s;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_size'] = __NAMESPACE__ . '\\Data_Map_Internal_size';

// Data_Map_Internal_singleton
function Data_Map_Internal_singleton($k, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_singleton';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, $__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data6("Node", 1, 1, $k, $v, ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_singleton'] = __NAMESPACE__ . '\\Data_Map_Internal_singleton';








// Data_Map_Internal_unionWith
function Data_Map_Internal_unionWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_unionWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeUnionWith = ($GLOBALS['Data_Map_Internal_unsafeUnionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeUnionWith'));
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeUnionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeUnionWith, $compare, $app, $m1, $m2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_unionWith'] = __NAMESPACE__ . '\\Data_Map_Internal_unionWith';

// Data_Map_Internal_union
function Data_Map_Internal_union($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_unionWith = ($GLOBALS['Data_Map_Internal_unionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unionWith'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__res = ($__global_Data_Map_Internal_unionWith)($dictOrd, $__global_Data_Function_const);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_union'] = __NAMESPACE__ . '\\Data_Map_Internal_union';

// Data_Map_Internal_update
function Data_Map_Internal_update($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_update';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__fn = function($f, $k = null) use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($k) use ($f, &$__fn) { return $__fn($f, $k); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = function($v) use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $f, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
goto __end;;
break;
case "GT":
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
goto __end;;
break;
case "EQ":
$v2 = ($f)($mv);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
$__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $ml, $mr);
goto __end;;
break;
case "Just":
$mv__prime__ = ($__case_0)->v0;
$__res = new Phpurs_Data6("Node", $mh, $ms, $mk, $mv__prime__, $ml, $mr);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_update'] = __NAMESPACE__ . '\\Data_Map_Internal_update';

// Data_Map_Internal_showTree
function Data_Map_Internal_showTree($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_showTree';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Show_showIntImpl = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl'));
  $show1 = ($dictShow)->show;
  $__res = function($dictShow1) use ($__global_Data_Show_showIntImpl, $show1) {
  $__num = func_num_args();
  $show2 = ($dictShow1)->show;
  $go = (function() use ($__global_Data_Show_showIntImpl, $show1, $show2, &$go, &$__fn) {
  $__fn = function($ind, $v = null) use ($__global_Data_Show_showIntImpl, $show1, $show2, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($ind, &$__fn) { return $__fn($ind, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($ind . "Leaf");
goto __end;;
break;
case "Node":
$h = ($__case_0)->v0;
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = (($ind . ("[" . (($__global_Data_Show_showIntImpl)($h) . ("] " . (($show1)($k) . (" => " . (($show2)($v1) . "
"))))))) . ((($go)(($ind . "    "), $l) . "
") . ($go)(($ind . "    "), $r)));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($go)("");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_showTree'] = __NAMESPACE__ . '\\Data_Map_Internal_showTree';

// Data_Map_Internal_semigroupMap
function Data_Map_Internal_semigroupMap($__dollar____unused, $dictOrd = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_semigroupMap';
  if ($__num < 2) {
    if ($__num === 1) return function($dictOrd) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictOrd); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Map_Internal_unionWith = ($GLOBALS['Data_Map_Internal_unionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unionWith'));
  $unionWith1 = ($__global_Data_Map_Internal_unionWith)($dictOrd);
  $__res = function($dictSemigroup) use ($unionWith1) {
  $__num = func_num_args();
  $__res = (object)["append" => ($unionWith1)(($dictSemigroup)->append)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_semigroupMap'] = __NAMESPACE__ . '\\Data_Map_Internal_semigroupMap';


// Data_Map_Internal_pop
function Data_Map_Internal_pop($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_pop';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
  $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
  $__global_Data_Map_Internal_map = ($GLOBALS['Data_Map_Internal_map'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_map'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Map_Internal_map, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__fn = function($k, $m = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Map_Internal_map, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($k, &$__fn) { return $__fn($k, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $compare, $k, $m);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Split":
$x = ($__case_0)->v0;
$l = ($__case_0)->v1;
$r = ($__case_0)->v2;
$__res = ($__global_Data_Map_Internal_map)(function($a) use ($__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $l, $r) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", $a, ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $l, $r));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $x);
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
$GLOBALS['Data_Map_Internal_pop'] = __NAMESPACE__ . '\\Data_Map_Internal_pop';

// Data_Map_Internal_member
function Data_Map_Internal_member($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_member';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $compare = ($dictOrd)->compare;
  $__res = function($k) use ($compare) {
  $__num = func_num_args();
  $go = function($v) use ($compare, $k, &$go) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = false;
goto __end;;
break;
case "Node":
$mk = ($__case_0)->v2;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
$__res = true;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_member'] = __NAMESPACE__ . '\\Data_Map_Internal_member';

// Data_Map_Internal_mapMaybeWithKey
function Data_Map_Internal_mapMaybeWithKey($dictOrd, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_mapMaybeWithKey';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($dictOrd, $__fn) { return $__fn($dictOrd, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
  $go = function($v) use ($f, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$v2 = ($f)($k, $v1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Just":
$v__prime__ = ($__case_0)->v0;
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, ($go)($l), ($go)($r));
goto __end;;
break;
case "Nothing":
$__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, ($go)($l), ($go)($r));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_mapMaybeWithKey'] = __NAMESPACE__ . '\\Data_Map_Internal_mapMaybeWithKey';

// Data_Map_Internal_mapMaybe
function Data_Map_Internal_mapMaybe($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
  $__global_Data_Map_Internal_mapMaybeWithKey = ($GLOBALS['Data_Map_Internal_mapMaybeWithKey'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_mapMaybeWithKey'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__res = ($__global_Data_Map_Internal_compose)(($__global_Data_Map_Internal_mapMaybeWithKey)($dictOrd), $__global_Data_Function_const);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_mapMaybe'] = __NAMESPACE__ . '\\Data_Map_Internal_mapMaybe';

// Data_Map_Internal_lookupLE
function Data_Map_Internal_lookupLE($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookupLE';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $compare = ($dictOrd)->compare;
  $__res = function($k) use ($compare) {
  $__num = func_num_args();
  $go = function($v) use ($compare, $k, &$go) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$v2 = ($go)($mr);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
$__res = new Phpurs_Data1("Just", (object)["key" => $mk, "value" => $mv]);
goto __end;;
break;
default:
$other = $__case_0;
$__res = $other;
goto __end;;
break;
};
break;
case "EQ":
$__res = new Phpurs_Data1("Just", (object)["key" => $mk, "value" => $mv]);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookupLE'] = __NAMESPACE__ . '\\Data_Map_Internal_lookupLE';

// Data_Map_Internal_lookupGE
function Data_Map_Internal_lookupGE($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookupGE';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $compare = ($dictOrd)->compare;
  $__res = function($k) use ($compare) {
  $__num = func_num_args();
  $go = function($v) use ($compare, $k, &$go) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$v2 = ($go)($ml);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
$__res = new Phpurs_Data1("Just", (object)["key" => $mk, "value" => $mv]);
goto __end;;
break;
default:
$other = $__case_0;
$__res = $other;
goto __end;;
break;
};
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
$__res = new Phpurs_Data1("Just", (object)["key" => $mk, "value" => $mv]);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookupGE'] = __NAMESPACE__ . '\\Data_Map_Internal_lookupGE';

// Data_Map_Internal_lookup
function Data_Map_Internal_lookup($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookup';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $compare = ($dictOrd)->compare;
  $__res = function($k) use ($compare) {
  $__num = func_num_args();
  $go = function($v) use ($compare, $k, &$go) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
$__res = new Phpurs_Data1("Just", $mv);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookup'] = __NAMESPACE__ . '\\Data_Map_Internal_lookup';

// Data_Map_Internal_iterMapU
function Data_Map_Internal_iterMapU($iter, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_iterMapU';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($iter, $__fn) { return $__fn($iter, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = $iter;
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__case_0 = $l;
switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__res = new Phpurs_Data3("IterEmit", $k, $v1, $iter);
goto __end;;
break;
default:
$__res = new Phpurs_Data3("IterEmit", $k, $v1, new Phpurs_Data2("IterNode", $r, $iter));
goto __end;;
break;
};
break;
default:
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__res = new Phpurs_Data3("IterEmit", $k, $v1, new Phpurs_Data2("IterNode", $l, $iter));
goto __end;;
break;
default:
$__res = new Phpurs_Data3("IterEmit", $k, $v1, new Phpurs_Data2("IterNode", $l, new Phpurs_Data2("IterNode", $r, $iter)));
goto __end;;
break;
};
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_iterMapU'] = __NAMESPACE__ . '\\Data_Map_Internal_iterMapU';



// Data_Map_Internal_toUnfoldableUnordered
function Data_Map_Internal_toUnfoldableUnordered($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_toUnfoldableUnordered';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
  $__global_Data_Map_Internal_stepUnfoldrUnordered = ($GLOBALS['Data_Map_Internal_stepUnfoldrUnordered'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnfoldrUnordered'));
  $__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
  $__res = ($__global_Data_Map_Internal_compose)((($dictUnfoldable)->unfoldr)($__global_Data_Map_Internal_stepUnfoldrUnordered), $__global_Data_Map_Internal_toMapIter);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_toUnfoldableUnordered'] = __NAMESPACE__ . '\\Data_Map_Internal_toUnfoldableUnordered';








// Data_Map_Internal_eqMapIter
function Data_Map_Internal_eqMapIter($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_eqMapIter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
  $eq1 = ($dictEq)->eq;
  $__res = function($dictEq1) use ($__global_Data_Map_Internal_stepAsc) {
  $__num = func_num_args();
  $eq2 = ($dictEq1)->eq;
  $go = (function() use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "IterNext":
$k1 = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$v2 = ($__global_Data_Map_Internal_stepAsc)($b);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "IterNext":
$k2 = ($__case_0)->v0;
$v21 = ($__case_0)->v1;
$b__prime__ = ($__case_0)->v2;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$__res = false;
goto __end;;
break;
};
break;
case "IterDone":
$__res = true;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = (object)["eq" => $go];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_eqMapIter'] = __NAMESPACE__ . '\\Data_Map_Internal_eqMapIter';

// Data_Map_Internal_ordMapIter
function Data_Map_Internal_ordMapIter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_ordMapIter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_eqMapIter = ($GLOBALS['Data_Map_Internal_eqMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eqMapIter'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Map_Internal_stepAsc = ($GLOBALS['Data_Map_Internal_stepAsc'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAsc'));
  $compare = ($dictOrd)->compare;
  $eqMapIter1 = ($__global_Data_Map_Internal_eqMapIter)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = function($dictOrd1) use ($eqMapIter1, $__global_Prim_undefined, $__global_Data_Map_Internal_stepAsc, $compare) {
  $__num = func_num_args();
  $compare1 = ($dictOrd1)->compare;
  $eqMapIter2 = ($eqMapIter1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
  $go = (function() use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Map_Internal_stepAsc, $compare, $compare1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$v = ($__global_Data_Map_Internal_stepAsc)($b);
$v1 = ($__global_Data_Map_Internal_stepAsc)($a);
$__case_0 = $v1;
$__case_1 = $v;
if (((($__case_0)->tag === "IterNext") && (($__case_1)->tag === "IterNext"))) {
$k1 = ($__case_0)->v0;
$v11 = ($__case_0)->v1;
$a__prime__ = ($__case_0)->v2;
$k2 = ($__case_1)->v0;
$v2 = ($__case_1)->v1;
$b__prime__ = ($__case_1)->v2;
$v3 = ($compare)($k1, $k2);
$__case_0 = $v3;
switch (($__case_0)->tag) {
case "EQ":
$v4 = ($compare1)($v11, $v2);
$__case_0 = $v4;
switch (($__case_0)->tag) {
case "EQ":
$__tco_tmp_0 = $a__prime__;
$__tco_tmp_1 = $b__prime__;
$a = $__tco_tmp_0;
$b = $__tco_tmp_1;
continue 3;
break;
default:
$other = $__case_0;
$__res = $other;
goto __end;;
break;
};
break;
default:
$other = $__case_0;
$__res = $other;
goto __end;;
break;
};
} else {
if ((($__case_0)->tag === "IterDone")) {
$b__prime__ = $__case_1;
$__case_0 = $b__prime__;
switch (($__case_0)->tag) {
case "IterDone":
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
};
} else {
switch (($__case_1)->tag) {
case "IterDone":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = (object)["compare" => $go, "Eq0" => function($__dollar____unused) use ($eqMapIter2) {
  $__num = func_num_args();
  $__res = $eqMapIter2;
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
$GLOBALS['Data_Map_Internal_ordMapIter'] = __NAMESPACE__ . '\\Data_Map_Internal_ordMapIter';


// Data_Map_Internal_toUnfoldable
function Data_Map_Internal_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
  $__global_Data_Map_Internal_stepUnfoldr = ($GLOBALS['Data_Map_Internal_stepUnfoldr'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepUnfoldr'));
  $__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
  $__res = ($__global_Data_Map_Internal_compose)((($dictUnfoldable)->unfoldr)($__global_Data_Map_Internal_stepUnfoldr), $__global_Data_Map_Internal_toMapIter);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_toUnfoldable'] = __NAMESPACE__ . '\\Data_Map_Internal_toUnfoldable';


// Data_Map_Internal_showMap
function Data_Map_Internal_showMap($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_showMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Tuple_showTuple = ($GLOBALS['Data_Tuple_showTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_showTuple'));
  $__global_Data_Show_showArray = ($GLOBALS['Data_Show_showArray'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showArray'));
  $__global_Data_Map_Internal_toUnfoldable1 = ($GLOBALS['Data_Map_Internal_toUnfoldable1'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toUnfoldable1'));
  $showTuple = ($__global_Data_Tuple_showTuple)($dictShow);
  $__res = function($dictShow1) use ($__global_Data_Show_showArray, $showTuple, $__global_Data_Map_Internal_toUnfoldable1) {
  $__num = func_num_args();
  $show1 = (($__global_Data_Show_showArray)(($showTuple)($dictShow1)))->show;
  $__res = (object)["show" => function($as) use ($show1, $__global_Data_Map_Internal_toUnfoldable1) {
  $__num = func_num_args();
  $__res = ("(fromFoldable " . (($show1)(($__global_Data_Map_Internal_toUnfoldable1)($as)) . ")"));
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
$GLOBALS['Data_Map_Internal_showMap'] = __NAMESPACE__ . '\\Data_Map_Internal_showMap';

// Data_Map_Internal_isSubmap
function Data_Map_Internal_isSubmap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_isSubmap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_lookup = ($GLOBALS['Data_Map_Internal_lookup'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_lookup'));
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $lookup1 = ($__global_Data_Map_Internal_lookup)($dictOrd);
  $__res = function($dictEq) use ($lookup1, $__global_Data_HeytingAlgebra_boolConj) {
  $__num = func_num_args();
  $eq1 = ($dictEq)->eq;
  $go = (function() use ($lookup1, $__global_Data_HeytingAlgebra_boolConj, $eq1, &$go, &$__fn) {
  $__fn = function($m1, $m2 = null) use ($lookup1, $__global_Data_HeytingAlgebra_boolConj, $eq1, &$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $m1;
switch (($__case_0)->tag) {
case "Leaf":
$__res = true;
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$v1 = ($lookup1)($k, $m2);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
$__res = false;
goto __end;;
break;
case "Just":
$v__prime__ = ($__case_0)->v0;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($eq1)($v, $v__prime__), ($__global_Data_HeytingAlgebra_boolConj)(($go)($l, $m2), ($go)($r, $m2)));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_isSubmap'] = __NAMESPACE__ . '\\Data_Map_Internal_isSubmap';

// Data_Map_Internal_isEmpty
function Data_Map_Internal_isEmpty($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_isEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Leaf":
$__res = true;
goto __end;;
break;
default:
$__res = false;
goto __end;;
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_isEmpty'] = __NAMESPACE__ . '\\Data_Map_Internal_isEmpty';

// Data_Map_Internal_intersectionWith
function Data_Map_Internal_intersectionWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_intersectionWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeIntersectionWith = ($GLOBALS['Data_Map_Internal_unsafeIntersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeIntersectionWith'));
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare, &$__fn) {
  $__fn = function($app, $m1 = null, $m2 = null) use ($__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeIntersectionWith, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
    if ($__num === 1) return function($m1, $m2 = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $m1, $m2);
      if ($__num2 === 1) return function($m2) use ($app, $m1, &$__fn) { return $__fn($app, $m1, $m2); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeIntersectionWith, $compare, $app, $m1, $m2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_intersectionWith'] = __NAMESPACE__ . '\\Data_Map_Internal_intersectionWith';

// Data_Map_Internal_intersection
function Data_Map_Internal_intersection($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_intersection';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_intersectionWith = ($GLOBALS['Data_Map_Internal_intersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_intersectionWith'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__res = ($__global_Data_Map_Internal_intersectionWith)($dictOrd, $__global_Data_Function_const);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_intersection'] = __NAMESPACE__ . '\\Data_Map_Internal_intersection';

// Data_Map_Internal_insertWith
function Data_Map_Internal_insertWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_insertWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__fn = function($app, $k = null, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($app, $k, &$__fn) { return $__fn($app, $k, $v); };
    if ($__num === 1) return function($k, $v = null) use ($app, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($app, $k, $v);
      if ($__num2 === 1) return function($v) use ($app, $k, &$__fn) { return $__fn($app, $k, $v); };
      return phpurs_curry_fallback($__fn, [$app], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $go = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $app) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($__global_Data_Map_Internal_singleton)($k, $v);
goto __end;;
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
goto __end;;
break;
case "GT":
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
goto __end;;
break;
case "EQ":
$__res = new Phpurs_Data6("Node", $mh, $ms, $k, ($app)($mv, $v), $ml, $mr);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_insertWith'] = __NAMESPACE__ . '\\Data_Map_Internal_insertWith';

// Data_Map_Internal_insert
function Data_Map_Internal_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__fn = function($k, $v = null) use ($__global_Data_Map_Internal_singleton, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($k, &$__fn) { return $__fn($k, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = function($v1) use ($__global_Data_Map_Internal_singleton, $k, $v, $compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($__global_Data_Map_Internal_singleton)($k, $v);
goto __end;;
break;
case "Node":
$mh = ($__case_0)->v0;
$ms = ($__case_0)->v1;
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v2 = ($compare)($k, $mk);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "LT":
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
goto __end;;
break;
case "GT":
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
goto __end;;
break;
case "EQ":
$__res = new Phpurs_Data6("Node", $mh, $ms, $k, $v, $ml, $mr);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_insert'] = __NAMESPACE__ . '\\Data_Map_Internal_insert';









// Data_Map_Internal_foldSubmapBy
function Data_Map_Internal_foldSubmapBy($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_foldSubmapBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Ord_lessThan = ($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan'));
  $__global_Data_Ord_greaterThan = ($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan'));
  $__global_Data_Ord_lessThanOrEq = ($GLOBALS['Data_Ord_lessThanOrEq'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThanOrEq'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $lessThan1 = ($__global_Data_Ord_lessThan)($dictOrd);
  $greaterThan1 = ($__global_Data_Ord_greaterThan)($dictOrd);
  $lessThanOrEq1 = ($__global_Data_Ord_lessThanOrEq)($dictOrd);
  $__res = (function() use ($lessThan1, $__global_Data_Function_const, $greaterThan1, $__global_Data_HeytingAlgebra_boolConj, $lessThanOrEq1, &$__fn) {
  $__fn = function($appendFn, $memptyValue = null, $kmin = null, $kmax = null, $f = null) use ($lessThan1, $__global_Data_Function_const, $greaterThan1, $__global_Data_HeytingAlgebra_boolConj, $lessThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__case_0 = $kmin;
  $__case_res_0 = null;
  switch (($__case_0)->tag) {
case "Just":
$kmin__prime__ = ($__case_0)->v0;
$__case_res_0 = function($k) use ($lessThan1, $kmin__prime__) {
  $__num = func_num_args();
  $__res = ($lessThan1)($k, $kmin__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
break;
case "Nothing":
$__case_res_0 = ($__global_Data_Function_const)(false);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  $tooSmall = $__case_res_0;
  $__case_0 = $kmax;
  $__case_res_1 = null;
  switch (($__case_0)->tag) {
case "Just":
$kmax__prime__ = ($__case_0)->v0;
$__case_res_1 = function($k) use ($greaterThan1, $kmax__prime__) {
  $__num = func_num_args();
  $__res = ($greaterThan1)($k, $kmax__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
break;
case "Nothing":
$__case_res_1 = ($__global_Data_Function_const)(false);
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  $tooLarge = $__case_res_1;
  $__case_0 = $kmin;
  $__case_1 = $kmax;
  $__case_res_2 = null;
  if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Just"))) {
$kmin__prime__ = ($__case_0)->v0;
$kmax__prime__ = ($__case_1)->v0;
$__case_res_2 = function($k) use ($__global_Data_HeytingAlgebra_boolConj, $lessThanOrEq1, $kmin__prime__, $kmax__prime__) {
  $__num = func_num_args();
  $__res = ($__global_Data_HeytingAlgebra_boolConj)(($lessThanOrEq1)($kmin__prime__, $k), ($lessThanOrEq1)($k, $kmax__prime__));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
} else {
if (((($__case_0)->tag === "Just") && (($__case_1)->tag === "Nothing"))) {
$kmin__prime__ = ($__case_0)->v0;
$__case_res_2 = function($k) use ($lessThanOrEq1, $kmin__prime__) {
  $__num = func_num_args();
  $__res = ($lessThanOrEq1)($kmin__prime__, $k);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Just"))) {
$kmax__prime__ = ($__case_1)->v0;
$__case_res_2 = function($k) use ($lessThanOrEq1, $kmax__prime__) {
  $__num = func_num_args();
  $__res = ($lessThanOrEq1)($k, $kmax__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
} else {
if (((($__case_0)->tag === "Nothing") && (($__case_1)->tag === "Nothing"))) {
$__case_res_2 = ($__global_Data_Function_const)(true);
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  $inBounds = $__case_res_2;
  $go = function($v) use ($memptyValue, $appendFn, $tooSmall, &$go, $inBounds, $f, $tooLarge) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = $memptyValue;
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$left = ($__case_0)->v4;
$right = ($__case_0)->v5;
$__case_0 = ($tooSmall)($k);
$__case_res_3 = null;
switch ($__case_0) {
case true:
$__case_res_3 = $memptyValue;
break;
default:
$__case_res_3 = ($go)($left);
break;
};
$__case_0 = ($inBounds)($k);
$__case_res_4 = null;
switch ($__case_0) {
case true:
$__case_res_4 = ($f)($k, $v1);
break;
default:
$__case_res_4 = $memptyValue;
break;
};
$__case_0 = ($tooLarge)($k);
$__case_res_5 = null;
switch ($__case_0) {
case true:
$__case_res_5 = $memptyValue;
break;
default:
$__case_res_5 = ($go)($right);
break;
};
$__res = ($appendFn)(($appendFn)($__case_res_3, $__case_res_4), $__case_res_5);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_foldSubmapBy'] = __NAMESPACE__ . '\\Data_Map_Internal_foldSubmapBy';

// Data_Map_Internal_foldSubmap
function Data_Map_Internal_foldSubmap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_foldSubmap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_foldSubmapBy = ($GLOBALS['Data_Map_Internal_foldSubmapBy'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldSubmapBy'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldSubmapBy1 = ($__global_Data_Map_Internal_foldSubmapBy)($dictOrd);
  $__res = function($dictMonoid) use ($foldSubmapBy1, $__global_Prim_undefined) {
  $__num = func_num_args();
  $__res = ($foldSubmapBy1)(((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append, ($dictMonoid)->mempty);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_foldSubmap'] = __NAMESPACE__ . '\\Data_Map_Internal_foldSubmap';

// Data_Map_Internal_findMin
function Data_Map_Internal_findMin($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_findMin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$__case_0 = $l;
switch (($__case_0)->tag) {
case "Leaf":
$__res = new Phpurs_Data1("Just", (object)["key" => $k, "value" => $v1]);
goto __end;;
break;
default:
$__tco_tmp_0 = $l;
$v = $__tco_tmp_0;
continue 3;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_findMin'] = __NAMESPACE__ . '\\Data_Map_Internal_findMin';

// Data_Map_Internal_lookupGT
function Data_Map_Internal_lookupGT($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookupGT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_findMin = ($GLOBALS['Data_Map_Internal_findMin'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMin'));
  $compare = ($dictOrd)->compare;
  $__res = function($k) use ($compare, $__global_Data_Map_Internal_findMin) {
  $__num = func_num_args();
  $go = function($v) use ($compare, $k, &$go, $__global_Data_Map_Internal_findMin) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$v2 = ($go)($ml);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
$__res = new Phpurs_Data1("Just", (object)["key" => $mk, "value" => $mv]);
goto __end;;
break;
default:
$other = $__case_0;
$__res = $other;
goto __end;;
break;
};
break;
case "GT":
$__tco_tmp_0 = $mr;
$v = $__tco_tmp_0;
continue 3;
break;
case "EQ":
$__res = ($__global_Data_Map_Internal_findMin)($mr);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookupGT'] = __NAMESPACE__ . '\\Data_Map_Internal_lookupGT';

// Data_Map_Internal_findMax
function Data_Map_Internal_findMax($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_findMax';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$r = ($__case_0)->v5;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__res = new Phpurs_Data1("Just", (object)["key" => $k, "value" => $v1]);
goto __end;;
break;
default:
$__tco_tmp_0 = $r;
$v = $__tco_tmp_0;
continue 3;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_findMax'] = __NAMESPACE__ . '\\Data_Map_Internal_findMax';

// Data_Map_Internal_lookupLT
function Data_Map_Internal_lookupLT($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_lookupLT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_findMax = ($GLOBALS['Data_Map_Internal_findMax'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMax'));
  $compare = ($dictOrd)->compare;
  $__res = function($k) use ($compare, $__global_Data_Map_Internal_findMax) {
  $__num = func_num_args();
  $go = function($v) use ($compare, $k, &$go, $__global_Data_Map_Internal_findMax) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__tco_tmp_0 = $ml;
$v = $__tco_tmp_0;
continue 3;
break;
case "GT":
$v2 = ($go)($mr);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
$__res = new Phpurs_Data1("Just", (object)["key" => $mk, "value" => $mv]);
goto __end;;
break;
default:
$other = $__case_0;
$__res = $other;
goto __end;;
break;
};
break;
case "EQ":
$__res = ($__global_Data_Map_Internal_findMax)($ml);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_lookupLT'] = __NAMESPACE__ . '\\Data_Map_Internal_lookupLT';

// Data_Map_Internal_filterWithKey
function Data_Map_Internal_filterWithKey($dictOrd, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_filterWithKey';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($dictOrd, $__fn) { return $__fn($dictOrd, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = function($v) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_filterWithKey'] = __NAMESPACE__ . '\\Data_Map_Internal_filterWithKey';

// Data_Map_Internal_filterKeys
function Data_Map_Internal_filterKeys($dictOrd, $f = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_filterKeys';
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($dictOrd, $__fn) { return $__fn($dictOrd, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = function($v) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
break;
case "Node":
$k = ($__case_0)->v2;
$v1 = ($__case_0)->v3;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_filterKeys'] = __NAMESPACE__ . '\\Data_Map_Internal_filterKeys';

// Data_Map_Internal_filter
function Data_Map_Internal_filter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
  $__global_Data_Map_Internal_filterWithKey = ($GLOBALS['Data_Map_Internal_filterWithKey'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_filterWithKey'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__res = ($__global_Data_Map_Internal_compose)(($__global_Data_Map_Internal_filterWithKey)($dictOrd), $__global_Data_Function_const);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_filter'] = __NAMESPACE__ . '\\Data_Map_Internal_filter';

// Data_Map_Internal_eqMap
function Data_Map_Internal_eqMap($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_eqMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_eqMapIter = ($GLOBALS['Data_Map_Internal_eqMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eqMapIter'));
  $eqMapIter1 = ($__global_Data_Map_Internal_eqMapIter)($dictEq);
  $__res = function($dictEq1) use ($eqMapIter1) {
  $__num = func_num_args();
  $eq1 = (($eqMapIter1)($dictEq1))->eq;
  $__res = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($xs, $ys = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $xs;
  switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
$__res = true;
goto __end;;
break;
default:
$__res = false;
goto __end;;
break;
};
break;
case "Node":
$s1 = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Node":
$s2 = ($__case_0)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$__res = false;
goto __end;;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
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
$GLOBALS['Data_Map_Internal_eqMap'] = __NAMESPACE__ . '\\Data_Map_Internal_eqMap';

// Data_Map_Internal_ordMap
function Data_Map_Internal_ordMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_ordMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_ordMapIter = ($GLOBALS['Data_Map_Internal_ordMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_ordMapIter'));
  $__global_Data_Map_Internal_eqMap = ($GLOBALS['Data_Map_Internal_eqMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eqMap'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
  $ordMapIter1 = ($__global_Data_Map_Internal_ordMapIter)($dictOrd);
  $eqMap1 = ($__global_Data_Map_Internal_eqMap)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = function($dictOrd1) use ($ordMapIter1, $eqMap1, $__global_Prim_undefined, $__global_Data_Map_Internal_toMapIter) {
  $__num = func_num_args();
  $compare = (($ordMapIter1)($dictOrd1))->compare;
  $eqMap2 = ($eqMap1)((($dictOrd1)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare, $__global_Data_Map_Internal_toMapIter, &$__fn) {
  $__fn = function($xs, $ys = null) use ($compare, $__global_Data_Map_Internal_toMapIter, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($xs, &$__fn) { return $__fn($xs, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $xs;
  switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
};
break;
default:
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
$__res = ($compare)(($__global_Data_Map_Internal_toMapIter)($xs), ($__global_Data_Map_Internal_toMapIter)($ys));
goto __end;;
break;
};
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) use ($eqMap2) {
  $__num = func_num_args();
  $__res = $eqMap2;
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
$GLOBALS['Data_Map_Internal_ordMap'] = __NAMESPACE__ . '\\Data_Map_Internal_ordMap';

// Data_Map_Internal_eq1Map
function Data_Map_Internal_eq1Map($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_eq1Map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_eqMap = ($GLOBALS['Data_Map_Internal_eqMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eqMap'));
  $eqMap1 = ($__global_Data_Map_Internal_eqMap)($dictEq);
  $__res = (object)["eq1" => function($dictEq1) use ($eqMap1) {
  $__num = func_num_args();
  $__res = (($eqMap1)($dictEq1))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_eq1Map'] = __NAMESPACE__ . '\\Data_Map_Internal_eq1Map';

// Data_Map_Internal_ord1Map
function Data_Map_Internal_ord1Map($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_ord1Map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_ordMap = ($GLOBALS['Data_Map_Internal_ordMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_ordMap'));
  $__global_Data_Map_Internal_eq1Map = ($GLOBALS['Data_Map_Internal_eq1Map'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eq1Map'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ordMap1 = ($__global_Data_Map_Internal_ordMap)($dictOrd);
  $eq1Map1 = ($__global_Data_Map_Internal_eq1Map)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare1" => function($dictOrd1) use ($ordMap1) {
  $__num = func_num_args();
  $__res = (($ordMap1)($dictOrd1))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Eq10" => function($__dollar____unused) use ($eq1Map1) {
  $__num = func_num_args();
  $__res = $eq1Map1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_ord1Map'] = __NAMESPACE__ . '\\Data_Map_Internal_ord1Map';


// Data_Map_Internal_fromFoldable
function Data_Map_Internal_fromFoldable($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_insert = ($GLOBALS['Data_Map_Internal_insert'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_insert'));
  $insert1 = ($__global_Data_Map_Internal_insert)($dictOrd);
  $__res = function($dictFoldable) use ($insert1) {
  $__num = func_num_args();
  $__res = (($dictFoldable)->foldl)((function() use ($insert1, &$__fn) {
  $__fn = function($m, $v = null) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($m, &$__fn) { return $__fn($m, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$k = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$__res = ($insert1)($k, $v1, $m);
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
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_fromFoldable'] = __NAMESPACE__ . '\\Data_Map_Internal_fromFoldable';

// Data_Map_Internal_fromFoldableWith
function Data_Map_Internal_fromFoldableWith($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_fromFoldableWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_insertWith = ($GLOBALS['Data_Map_Internal_insertWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_insertWith'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $insertWith1 = ($__global_Data_Map_Internal_insertWith)($dictOrd);
  $__res = function($dictFoldable) use ($insertWith1, $__global_Data_Function_flip) {
  $__num = func_num_args();
  $foldl = ($dictFoldable)->foldl;
  $__res = function($f) use ($insertWith1, $__global_Data_Function_flip, $foldl) {
  $__num = func_num_args();
  $f__prime__ = ($insertWith1)(($__global_Data_Function_flip)($f));
  $__res = ($foldl)((function() use ($f__prime__, &$__fn) {
  $__fn = function($m, $v = null) use ($f__prime__, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($m, &$__fn) { return $__fn($m, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$k = ($__case_0)->v0;
$v1 = ($__case_0)->v1;
$__res = ($f__prime__)($k, $v1, $m);
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
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_fromFoldableWith'] = __NAMESPACE__ . '\\Data_Map_Internal_fromFoldableWith';

// Data_Map_Internal_fromFoldableWithIndex
function Data_Map_Internal_fromFoldableWithIndex($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_fromFoldableWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_insert = ($GLOBALS['Data_Map_Internal_insert'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_insert'));
  $insert1 = ($__global_Data_Map_Internal_insert)($dictOrd);
  $__res = function($dictFoldableWithIndex) use ($insert1) {
  $__num = func_num_args();
  $__res = (($dictFoldableWithIndex)->foldlWithIndex)((function() use ($insert1, &$__fn) {
  $__fn = function($k, $m = null, $v = null) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($k, $m, &$__fn) { return $__fn($k, $m, $v); };
    if ($__num === 1) return function($m, $v = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $m, $v);
      if ($__num2 === 1) return function($v) use ($k, $m, &$__fn) { return $__fn($k, $m, $v); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($insert1)($k, $v, $m);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_fromFoldableWithIndex'] = __NAMESPACE__ . '\\Data_Map_Internal_fromFoldableWithIndex';

// Data_Map_Internal_monoidSemigroupMap
function Data_Map_Internal_monoidSemigroupMap($__dollar____unused, $dictOrd = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_monoidSemigroupMap';
  if ($__num < 2) {
    if ($__num === 1) return function($dictOrd) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictOrd); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Map_Internal_semigroupMap1 = ($GLOBALS['Data_Map_Internal_semigroupMap1'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_semigroupMap1'));
  $semigroupMap2 = ($__global_Data_Map_Internal_semigroupMap1)($dictOrd);
  $__res = function($dictSemigroup) use ($semigroupMap2) {
  $__num = func_num_args();
  $semigroupMap3 = ($semigroupMap2)($dictSemigroup);
  $__res = (object)["mempty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Semigroup0" => function($__dollar____unused) use ($semigroupMap3) {
  $__num = func_num_args();
  $__res = $semigroupMap3;
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
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Map_Internal_monoidSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_Internal_monoidSemigroupMap';

// Data_Map_Internal_submap
function Data_Map_Internal_submap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_submap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_foldSubmapBy = ($GLOBALS['Data_Map_Internal_foldSubmapBy'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldSubmapBy'));
  $__global_Data_Map_Internal_union = ($GLOBALS['Data_Map_Internal_union'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_union'));
  $__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
  $foldSubmapBy1 = ($__global_Data_Map_Internal_foldSubmapBy)($dictOrd);
  $union1 = ($__global_Data_Map_Internal_union)($dictOrd);
  $__res = (function() use ($foldSubmapBy1, $union1, $__global_Data_Map_Internal_singleton, &$__fn) {
  $__fn = function($kmin, $kmax = null) use ($foldSubmapBy1, $union1, $__global_Data_Map_Internal_singleton, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($kmax) use ($kmin, &$__fn) { return $__fn($kmin, $kmax); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($foldSubmapBy1)($union1, ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), $kmin, $kmax, $__global_Data_Map_Internal_singleton);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_submap'] = __NAMESPACE__ . '\\Data_Map_Internal_submap';

// Data_Map_Internal_unions
function Data_Map_Internal_unions($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_unions';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_union = ($GLOBALS['Data_Map_Internal_union'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_union'));
  $union1 = ($__global_Data_Map_Internal_union)($dictOrd);
  $__res = function($dictFoldable) use ($union1) {
  $__num = func_num_args();
  $__res = (($dictFoldable)->foldl)($union1, ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_unions'] = __NAMESPACE__ . '\\Data_Map_Internal_unions';

// Data_Map_Internal_difference
function Data_Map_Internal_difference($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
  $__global_Data_Map_Internal_unsafeDifference = ($GLOBALS['Data_Map_Internal_unsafeDifference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeDifference'));
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__fn = function($m1, $m2 = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeDifference, $compare, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m2) use ($m1, &$__fn) { return $__fn($m1, $m2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeDifference, $compare, $m1, $m2);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_difference'] = __NAMESPACE__ . '\\Data_Map_Internal_difference';

// Data_Map_Internal_delete
function Data_Map_Internal_delete($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
  $compare = ($dictOrd)->compare;
  $__res = function($k) use ($compare, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__num = func_num_args();
  $go = function($v) use ($compare, $k, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$go, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf"));
goto __end;;
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$v1 = ($compare)($k, $mk);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, ($go)($ml), $mr);
goto __end;;
break;
case "GT":
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $mk, $mv, $ml, ($go)($mr));
goto __end;;
break;
case "EQ":
$__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $ml, $mr);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_delete'] = __NAMESPACE__ . '\\Data_Map_Internal_delete';

// Data_Map_Internal_checkValid
function Data_Map_Internal_checkValid($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_checkValid';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Ord_greaterThan = ($GLOBALS['Data_Ord_greaterThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_greaterThan'));
  $__global_Data_Ord_lessThan = ($GLOBALS['Data_Ord_lessThan'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_lessThan'));
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__global_Data_Map_Internal_greaterThan = ($GLOBALS['Data_Map_Internal_greaterThan'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_greaterThan'));
  $__global_Data_Map_Internal_lessThan = ($GLOBALS['Data_Map_Internal_lessThan'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_lessThan'));
  $__global_Data_Map_Internal_abs = ($GLOBALS['Data_Map_Internal_abs'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_abs'));
  $greaterThan1 = ($__global_Data_Ord_greaterThan)($dictOrd);
  $lessThan1 = ($__global_Data_Ord_lessThan)($dictOrd);
  $go = function($v) use ($__global_Data_HeytingAlgebra_boolConj, $__global_Data_Map_Internal_greaterThan, $greaterThan1, &$go, $lessThan1, $__global_Data_Map_Internal_lessThan, $__global_Data_Map_Internal_abs) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = true;
goto __end;;
break;
case "Node":
$h = ($__case_0)->v0;
$s = ($__case_0)->v1;
$k = ($__case_0)->v2;
$l = ($__case_0)->v4;
$r = ($__case_0)->v5;
$__case_0 = $l;
switch (($__case_0)->tag) {
case "Leaf":
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__res = true;
goto __end;;
break;
case "Node":
$rh = ($__case_0)->v0;
$rs = ($__case_0)->v1;
$rk = ($__case_0)->v2;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($h === 2), ($__global_Data_HeytingAlgebra_boolConj)(($rh === 1), ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Map_Internal_greaterThan)($s, $rs), ($__global_Data_HeytingAlgebra_boolConj)(($greaterThan1)($rk, $k), ($go)($r)))));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "Node":
$lh = ($__case_0)->v0;
$ls = ($__case_0)->v1;
$lk = ($__case_0)->v2;
$__case_0 = $r;
switch (($__case_0)->tag) {
case "Leaf":
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($h === 2), ($__global_Data_HeytingAlgebra_boolConj)(($lh === 1), ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Map_Internal_greaterThan)($s, $ls), ($__global_Data_HeytingAlgebra_boolConj)(($lessThan1)($lk, $k), ($go)($l)))));
goto __end;;
break;
case "Node":
$rh = ($__case_0)->v0;
$rs = ($__case_0)->v1;
$rk = ($__case_0)->v2;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Map_Internal_greaterThan)($h, $rh), ($__global_Data_HeytingAlgebra_boolConj)(($greaterThan1)($rk, $k), ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Map_Internal_greaterThan)($h, $lh), ($__global_Data_HeytingAlgebra_boolConj)(($lessThan1)($lk, $k), ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Map_Internal_lessThan)(($__global_Data_Map_Internal_abs)(($rh - $lh)), 2), ($__global_Data_HeytingAlgebra_boolConj)(((($rs + $ls) + 1) === $s), ($__global_Data_HeytingAlgebra_boolConj)(($go)($l), ($go)($r))))))));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_checkValid'] = __NAMESPACE__ . '\\Data_Map_Internal_checkValid';

// Data_Map_Internal_catMaybes
function Data_Map_Internal_catMaybes($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_catMaybes';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_mapMaybe = ($GLOBALS['Data_Map_Internal_mapMaybe'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_mapMaybe'));
  $__global_Data_Map_Internal_identity = ($GLOBALS['Data_Map_Internal_identity'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_identity'));
  $__res = ($__global_Data_Map_Internal_mapMaybe)($dictOrd, $__global_Data_Map_Internal_identity);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_catMaybes'] = __NAMESPACE__ . '\\Data_Map_Internal_catMaybes';

// Data_Map_Internal_applyMap
function Data_Map_Internal_applyMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_applyMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_intersectionWith = ($GLOBALS['Data_Map_Internal_intersectionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_intersectionWith'));
  $__global_Data_Map_Internal_identity = ($GLOBALS['Data_Map_Internal_identity'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_identity'));
  $__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
  $__res = (object)["apply" => ($__global_Data_Map_Internal_intersectionWith)($dictOrd, $__global_Data_Map_Internal_identity), "Functor0" => function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap) {
  $__num = func_num_args();
  $__res = $__global_Data_Map_Internal_functorMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_applyMap'] = __NAMESPACE__ . '\\Data_Map_Internal_applyMap';

// Data_Map_Internal_bindMap
function Data_Map_Internal_bindMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_bindMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_mapMaybeWithKey = ($GLOBALS['Data_Map_Internal_mapMaybeWithKey'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_mapMaybeWithKey'));
  $__global_Data_Map_Internal_lookup = ($GLOBALS['Data_Map_Internal_lookup'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_lookup'));
  $__global_Data_Map_Internal_applyMap = ($GLOBALS['Data_Map_Internal_applyMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_applyMap'));
  $__global_Data_Map_Internal_compose = ($GLOBALS['Data_Map_Internal_compose'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_compose'));
  $mapMaybeWithKey1 = ($__global_Data_Map_Internal_mapMaybeWithKey)($dictOrd);
  $lookup1 = ($__global_Data_Map_Internal_lookup)($dictOrd);
  $applyMap1 = ($__global_Data_Map_Internal_applyMap)($dictOrd);
  $__res = (object)["bind" => (function() use ($mapMaybeWithKey1, $__global_Data_Map_Internal_compose, $lookup1, &$__fn) {
  $__fn = function($m, $f = null) use ($mapMaybeWithKey1, $__global_Data_Map_Internal_compose, $lookup1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($m, &$__fn) { return $__fn($m, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($mapMaybeWithKey1)(function($k) use ($__global_Data_Map_Internal_compose, $lookup1, $f) {
  $__num = func_num_args();
  $__res = ($__global_Data_Map_Internal_compose)(($lookup1)($k), $f);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $m);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) use ($applyMap1) {
  $__num = func_num_args();
  $__res = $applyMap1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_bindMap'] = __NAMESPACE__ . '\\Data_Map_Internal_bindMap';

// Data_Map_Internal_anyWithKey
function Data_Map_Internal_anyWithKey($predicate) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_anyWithKey';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_HeytingAlgebra_boolDisj = ($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolDisj'));
  $go = function($v) use ($__global_Data_HeytingAlgebra_boolDisj, $predicate, &$go) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = false;
goto __end;;
break;
case "Node":
$mk = ($__case_0)->v2;
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$__res = ($__global_Data_HeytingAlgebra_boolDisj)(($predicate)($mk, $mv), ($__global_Data_HeytingAlgebra_boolDisj)(($go)($ml), ($go)($mr)));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_anyWithKey'] = __NAMESPACE__ . '\\Data_Map_Internal_anyWithKey';

// Data_Map_Internal_any
function Data_Map_Internal_any($predicate) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_any';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_HeytingAlgebra_boolDisj = ($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolDisj'));
  $go = function($v) use ($__global_Data_HeytingAlgebra_boolDisj, $predicate, &$go) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $v;
switch (($__case_0)->tag) {
case "Leaf":
$__res = false;
goto __end;;
break;
case "Node":
$mv = ($__case_0)->v3;
$ml = ($__case_0)->v4;
$mr = ($__case_0)->v5;
$__res = ($__global_Data_HeytingAlgebra_boolDisj)(($predicate)($mv), ($__global_Data_HeytingAlgebra_boolDisj)(($go)($ml), ($go)($mr)));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_any'] = __NAMESPACE__ . '\\Data_Map_Internal_any';

// Data_Map_Internal_alter
function Data_Map_Internal_alter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_alter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
  $__global_Data_Map_Internal_unsafeSplit = ($GLOBALS['Data_Map_Internal_unsafeSplit'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeSplit'));
  $__global_Data_Function_Uncurried_runFn2 = ($GLOBALS['Data_Function_Uncurried_runFn2'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn2'));
  $__global_Data_Map_Internal_unsafeJoinNodes = ($GLOBALS['Data_Map_Internal_unsafeJoinNodes'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeJoinNodes'));
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Map_Internal_unsafeBalancedNode = ($GLOBALS['Data_Map_Internal_unsafeBalancedNode'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unsafeBalancedNode'));
  $compare = ($dictOrd)->compare;
  $__res = (function() use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__fn = function($f, $k = null, $m = null) use ($__global_Data_Function_Uncurried_runFn3, $__global_Data_Map_Internal_unsafeSplit, $compare, $__global_Data_Function_Uncurried_runFn2, $__global_Data_Map_Internal_unsafeJoinNodes, $__global_Data_Function_Uncurried_runFn4, $__global_Data_Map_Internal_unsafeBalancedNode, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($m) use ($f, $k, &$__fn) { return $__fn($f, $k, $m); };
    if ($__num === 1) return function($k, $m = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $k, $m);
      if ($__num2 === 1) return function($m) use ($f, $k, &$__fn) { return $__fn($f, $k, $m); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $v = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Map_Internal_unsafeSplit, $compare, $k, $m);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Split":
$v1 = ($__case_0)->v0;
$l = ($__case_0)->v1;
$r = ($__case_0)->v2;
$v2 = ($f)($v1);
$__case_0 = $v2;
switch (($__case_0)->tag) {
case "Nothing":
$__res = ($__global_Data_Function_Uncurried_runFn2)($__global_Data_Map_Internal_unsafeJoinNodes, $l, $r);
goto __end;;
break;
case "Just":
$v__prime__ = ($__case_0)->v0;
$__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Map_Internal_unsafeBalancedNode, $k, $v__prime__, $l, $r);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
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
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_alter'] = __NAMESPACE__ . '\\Data_Map_Internal_alter';

// Data_Map_Internal_altMap
function Data_Map_Internal_altMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_altMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_union = ($GLOBALS['Data_Map_Internal_union'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_union'));
  $__global_Data_Map_Internal_functorMap = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap'));
  $__res = (object)["alt" => ($__global_Data_Map_Internal_union)($dictOrd), "Functor0" => function($__dollar____unused) use ($__global_Data_Map_Internal_functorMap) {
  $__num = func_num_args();
  $__res = $__global_Data_Map_Internal_functorMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_altMap'] = __NAMESPACE__ . '\\Data_Map_Internal_altMap';

// Data_Map_Internal_plusMap
function Data_Map_Internal_plusMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_Internal_plusMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_altMap = ($GLOBALS['Data_Map_Internal_altMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_altMap'));
  $altMap1 = ($__global_Data_Map_Internal_altMap)($dictOrd);
  $__res = (object)["empty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Alt0" => function($__dollar____unused) use ($altMap1) {
  $__num = func_num_args();
  $__res = $altMap1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_Internal_plusMap'] = __NAMESPACE__ . '\\Data_Map_Internal_plusMap';

