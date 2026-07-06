<?php

namespace Data\Foldable;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Data_Foldable_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Foldable_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Foldable_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Foldable_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Foldable_eq1': $v = (($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering')))->eq; break;
      case 'Data_Foldable_unwrap': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Foldable_monoidEndo': $v = \Data\Monoid\Endo\Data_Monoid_Endo_monoidEndo(($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'))); break;
      case 'Data_Foldable_alaF': $v = \Data\Newtype\Data_Newtype_alaF(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Foldable_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Foldable_Empty': $v = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")); break;
      case 'Data_Foldable_semigroupFreeMonoidTree': $v = (object)["append" => (function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Append", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_monoidFreeMonoidTree': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")), "Semigroup0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_semigroupFreeMonoidTree = ($GLOBALS['Data_Foldable_semigroupFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_semigroupFreeMonoidTree'));
  $__res = $__global_Data_Foldable_semigroupFreeMonoidTree;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Foldable_foldableTuple': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
$__res = ($f1)($x, $z1);
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
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$x = ($__case_2)->v1;
$__res = ($f1)($z1, $x);
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
})(), "foldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$x = ($__case_1)->v1;
$__res = ($f1)($x);
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
      case 'Data_Foldable_foldableMultiplicative': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($x, $z1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__res = ($f1)($x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableMaybe': $v = (object)["foldr" => (function() use (&$__fn) {
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
case "Nothing":
$z = $__case_1;
$__res = $z;
goto __end;;
break;
case "Just":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
$__res = ($f)($x, $z);
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
})(), "foldl" => (function() use (&$__fn) {
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
case "Nothing":
$z = $__case_1;
$__res = $z;
goto __end;;
break;
case "Just":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
$__res = ($f)($z, $x);
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
})(), "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $mempty = ($dictMonoid)->mempty;
  $__res = (function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Nothing":
$__res = $mempty;
goto __end;;
break;
case "Just":
$f = $__case_0;
$x = ($__case_1)->v0;
$__res = ($f)($x);
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
}]; break;
      case 'Data_Foldable_foldr1': $v = (($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe')))->foldr; break;
      case 'Data_Foldable_foldl1': $v = (($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe')))->foldl; break;
      case 'Data_Foldable_foldableIdentity': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($x, $z1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__res = ($f1)($x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableEither': $v = (object)["foldr" => (function() use (&$__fn) {
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
case "Left":
$z = $__case_1;
$__res = $z;
goto __end;;
break;
case "Right":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
$__res = ($f)($x, $z);
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
})(), "foldl" => (function() use (&$__fn) {
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
case "Left":
$z = $__case_1;
$__res = $z;
goto __end;;
break;
case "Right":
$f = $__case_0;
$z = $__case_1;
$x = ($__case_2)->v0;
$__res = ($f)($z, $x);
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
})(), "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $mempty = ($dictMonoid)->mempty;
  $__res = (function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Left":
$__res = $mempty;
goto __end;;
break;
case "Right":
$f = $__case_0;
$x = ($__case_1)->v0;
$__res = ($f)($x);
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
}]; break;
      case 'Data_Foldable_foldableDual': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($x, $z1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__res = ($f1)($x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableDisj': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($x, $z1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__res = ($f1)($x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableConst': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
    if ($__num === 1) return function($z, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = $z;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($v, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
    if ($__num === 1) return function($z, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $z, &$__fn) { return $__fn($v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = $z;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $mempty = ($dictMonoid)->mempty;
  $__res = (function() use ($mempty, &$__fn) {
  $__fn = function($v, $v1 = null) use ($mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Foldable_foldableConj': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($x, $z1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__res = ($f1)($x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableAdditive': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($x, $z1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($f1)($z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__res = ($f1)($x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Foldable_foldableArray': $v = (object)["foldr" => ($GLOBALS['Data_Foldable_foldrArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldrArray')), "foldl" => ($GLOBALS['Data_Foldable_foldlArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldlArray')), "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldMapDefaultR = ($GLOBALS['Data_Foldable_foldMapDefaultR'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMapDefaultR'));
  $__global_Data_Foldable_foldableArray = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__res = ($__global_Data_Foldable_foldMapDefaultR)($__global_Data_Foldable_foldableArray, $dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Foldable_foldableFreeMonoidTree': $v = (object)["foldl" => function($fn) {
  $__num = func_num_args();
  $go = (function() use (&$go, $fn, &$__fn) {
  $__fn = function($acc, $lhs = null, $rhs = null) use (&$go, $fn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($rhs) use ($acc, $lhs, &$__fn) { return $__fn($acc, $lhs, $rhs); };
    if ($__num === 1) return function($lhs, $rhs = null) use ($acc, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($acc, $lhs, $rhs);
      if ($__num2 === 1) return function($rhs) use ($acc, $lhs, &$__fn) { return $__fn($acc, $lhs, $rhs); };
      return phpurs_curry_fallback($__fn, [$acc], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  while (true) {
$__case_0 = $lhs;
switch (($__case_0)->tag) {
case "Node":
$a = ($__case_0)->v0;
$__tco_tmp_0 = ($fn)($acc, $a);
$__tco_tmp_1 = $rhs;
$__tco_tmp_2 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue I/*__LVL__*/;
break;
case "Append":
$xs = ($__case_0)->v0;
$ys = ($__case_0)->v1;
$__case_0 = $ys;
switch (($__case_0)->tag) {
case "Empty":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = $rhs;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue II/*__LVL__*/;
break;
default:
$__case_0 = $rhs;
switch (($__case_0)->tag) {
case "Empty":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue III/*__LVL__*/;
break;
default:
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = new Phpurs_Data2("Append", $ys, $rhs);
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue III/*__LVL__*/;
break;
};
break;
};
break;
case "Empty":
$__case_0 = $rhs;
switch (($__case_0)->tag) {
case "Empty":
$__res = $acc;
goto __end;;
break;
default:
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $rhs;
$__tco_tmp_2 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue II/*__LVL__*/;
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = (function() use (&$go, &$__fn) {
  $__fn = function($a, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($go)($a, $b, ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldr" => function($fn) {
  $__num = func_num_args();
  $go = (function() use (&$go, $fn, &$__fn) {
  $__fn = function($acc, $lhs = null, $rhs = null) use (&$go, $fn, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($rhs) use ($acc, $lhs, &$__fn) { return $__fn($acc, $lhs, $rhs); };
    if ($__num === 1) return function($lhs, $rhs = null) use ($acc, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($acc, $lhs, $rhs);
      if ($__num2 === 1) return function($rhs) use ($acc, $lhs, &$__fn) { return $__fn($acc, $lhs, $rhs); };
      return phpurs_curry_fallback($__fn, [$acc], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  while (true) {
$__case_0 = $rhs;
switch (($__case_0)->tag) {
case "Node":
$a = ($__case_0)->v0;
$__tco_tmp_0 = ($fn)($a, $acc);
$__tco_tmp_1 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$__tco_tmp_2 = $lhs;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue I/*__LVL__*/;
break;
case "Append":
$xs = ($__case_0)->v0;
$ys = ($__case_0)->v1;
$__case_0 = $xs;
switch (($__case_0)->tag) {
case "Empty":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $lhs;
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue II/*__LVL__*/;
break;
default:
$__case_0 = $lhs;
switch (($__case_0)->tag) {
case "Empty":
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = $xs;
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue III/*__LVL__*/;
break;
default:
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = new Phpurs_Data2("Append", $lhs, $xs);
$__tco_tmp_2 = $ys;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue III/*__LVL__*/;
break;
};
break;
};
break;
case "Empty":
$__case_0 = $lhs;
switch (($__case_0)->tag) {
case "Empty":
$__res = $acc;
goto __end;;
break;
default:
$__tco_tmp_0 = $acc;
$__tco_tmp_1 = ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty"));
$__tco_tmp_2 = $lhs;
$acc = $__tco_tmp_0;
$lhs = $__tco_tmp_1;
$rhs = $__tco_tmp_2;
continue II/*__LVL__*/;
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = (function() use (&$go, &$__fn) {
  $__fn = function($a, $b = null) use (&$go, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($go)($a, ($GLOBALS['__phpurs_data0_Empty'] ??= new Phpurs_Data0("Empty")), $b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldMapDefaultR = ($GLOBALS['Data_Foldable_foldMapDefaultR'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMapDefaultR'));
  $__global_Data_Foldable_foldableFreeMonoidTree = ($GLOBALS['Data_Foldable_foldableFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFreeMonoidTree'));
  $__res = ($__global_Data_Foldable_foldMapDefaultR)($__global_Data_Foldable_foldableFreeMonoidTree, $dictMonoid);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Foldable_foldl2': $v = (($GLOBALS['Data_Foldable_foldableFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFreeMonoidTree')))->foldl; break;
      case 'Data_Foldable_foldr2': $v = (($GLOBALS['Data_Foldable_foldableFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFreeMonoidTree')))->foldr; break;
      case 'Data_Foldable_foldMap1': $v = (($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe')))->foldMap; break;
      case 'Data_Foldable_foldableFirst': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Foldable_foldr1 = ($GLOBALS['Data_Foldable_foldr1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr1'));
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($__global_Data_Foldable_foldr1)($f1, $z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Foldable_foldl1 = ($GLOBALS['Data_Foldable_foldl1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl1'));
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($__global_Data_Foldable_foldl1)($f1, $z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldMap1 = ($GLOBALS['Data_Foldable_foldMap1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap1'));
  $foldMap2 = ($__global_Data_Foldable_foldMap1)($dictMonoid);
  $__res = (function() use ($foldMap2, &$__fn) {
  $__fn = function($f, $v = null) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__res = ($foldMap2)($f1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Foldable_foldableLast': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Foldable_foldr1 = ($GLOBALS['Data_Foldable_foldr1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr1'));
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($__global_Data_Foldable_foldr1)($f1, $z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Foldable_foldl1 = ($GLOBALS['Data_Foldable_foldl1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl1'));
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_1;
$x = $__case_2;
$__res = ($__global_Data_Foldable_foldl1)($f1, $z1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldMap1 = ($GLOBALS['Data_Foldable_foldMap1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldMap1'));
  $foldMap2 = ($__global_Data_Foldable_foldMap1)($dictMonoid);
  $__res = (function() use ($foldMap2, &$__fn) {
  $__fn = function($f, $v = null) use ($foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__res = ($foldMap2)($f1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
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
$Data_Foldable_foldrArray = function($f, $init = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Foldable_foldrArray;
            return $Data_Foldable_foldrArray(...array_merge($__args, $more));
        };
    }
    $acc = $init; for($i=count($xs)-1; $i>=0; $i--) { $acc = $f($xs[$i])($acc); } return $acc;
};
$Data_Foldable_foldlArray = function($f, $init = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Foldable_foldlArray;
            return $Data_Foldable_foldlArray(...array_merge($__args, $more));
        };
    }
    $acc = $init; foreach($xs as $x) { $acc = $f($acc)($x); } return $acc;
};











// Data_Foldable_Node
function Data_Foldable_Node($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_Node';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("Node", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_Node'] = __NAMESPACE__ . '\\Data_Foldable_Node';

// Data_Foldable_Append
function Data_Foldable_Append($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_Append';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Append", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Foldable_Append'] = __NAMESPACE__ . '\\Data_Foldable_Append';

// Data_Foldable_Foldable$Dict
function Data_Foldable_Foldable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_Foldable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_Foldable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Foldable_Foldable__dollar__Dict';



// Data_Foldable_foldr
function Data_Foldable_foldr($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->foldr;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldr'] = __NAMESPACE__ . '\\Data_Foldable_foldr';

// Data_Foldable_indexr
function Data_Foldable_indexr($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_indexr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
  $foldr3 = ($dictFoldable)->foldr;
  $__res = function($idx) use ($__global_Data_Foldable_compose, $foldr3) {
  $__num = func_num_args();
  $go = (function() use ($idx, &$__fn) {
  $__fn = function($a, $cursor = null) use ($idx, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($cursor) use ($a, &$__fn) { return $__fn($a, $cursor); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = ($cursor)->elem;
  switch (($__case_0)->tag) {
case "Just":
$__res = $cursor;
goto __end;;
break;
default:
$__case_0 = (($cursor)->pos === $idx);
switch ($__case_0) {
case true:
$__res = (object)["elem" => new Phpurs_Data1("Just", $a), "pos" => ($cursor)->pos];
goto __end;;
break;
default:
$__res = (object)["pos" => (($cursor)->pos + 1), "elem" => ($cursor)->elem];
goto __end;;
break;
};
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($__global_Data_Foldable_compose)(function($v) {
  $__num = func_num_args();
  $__res = ($v)->elem;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($foldr3)($go, (object)["elem" => ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), "pos" => 0]));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_indexr'] = __NAMESPACE__ . '\\Data_Foldable_indexr';

// Data_Foldable_null
function Data_Foldable_null($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_null';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = (($dictFoldable)->foldr)((function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = false;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), true);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_null'] = __NAMESPACE__ . '\\Data_Foldable_null';

// Data_Foldable_oneOf
function Data_Foldable_oneOf($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_oneOf';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldr3 = ($dictFoldable)->foldr;
  $__res = function($dictPlus) use ($foldr3, $__global_Prim_undefined) {
  $__num = func_num_args();
  $__res = ($foldr3)(((($dictPlus)->Alt0)($__global_Prim_undefined))->alt, ($dictPlus)->empty);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_oneOf'] = __NAMESPACE__ . '\\Data_Foldable_oneOf';

// Data_Foldable_oneOfMap
function Data_Foldable_oneOfMap($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_oneOfMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
  $foldr3 = ($dictFoldable)->foldr;
  $__res = function($dictPlus) use ($__global_Prim_undefined, $foldr3, $__global_Data_Foldable_compose) {
  $__num = func_num_args();
  $alt = ((($dictPlus)->Alt0)($__global_Prim_undefined))->alt;
  $empty = ($dictPlus)->empty;
  $__res = function($f) use ($foldr3, $__global_Data_Foldable_compose, $alt, $empty) {
  $__num = func_num_args();
  $__res = ($foldr3)(($__global_Data_Foldable_compose)($alt, $f), $empty);
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
$GLOBALS['Data_Foldable_oneOfMap'] = __NAMESPACE__ . '\\Data_Foldable_oneOfMap';

// Data_Foldable_traverse_
function Data_Foldable_traverse_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_traverse_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Apply_applySecond = ($GLOBALS['Control_Apply_applySecond'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applySecond'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $applySecond = ($__global_Control_Apply_applySecond)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $pure = ($dictApplicative)->pure;
  $__res = function($dictFoldable) use ($__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $foldr3 = ($dictFoldable)->foldr;
  $__res = function($f) use ($foldr3, $__global_Data_Foldable_compose, $applySecond, $pure, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($foldr3)(($__global_Data_Foldable_compose)($applySecond, $f), ($pure)($__global_Data_Unit_unit));
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
$GLOBALS['Data_Foldable_traverse_'] = __NAMESPACE__ . '\\Data_Foldable_traverse_';

// Data_Foldable_for_
function Data_Foldable_for_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_for_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_traverse_ = ($GLOBALS['Data_Foldable_traverse_'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_traverse_'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $traverse_1 = ($__global_Data_Foldable_traverse_)($dictApplicative);
  $__res = function($dictFoldable) use ($__global_Data_Function_flip, $traverse_1) {
  $__num = func_num_args();
  $__res = ($__global_Data_Function_flip)(($traverse_1)($dictFoldable));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_for_'] = __NAMESPACE__ . '\\Data_Foldable_for_';

// Data_Foldable_sequence_
function Data_Foldable_sequence_($dictApplicative) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_sequence_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_traverse_ = ($GLOBALS['Data_Foldable_traverse_'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_traverse_'));
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $traverse_1 = ($__global_Data_Foldable_traverse_)($dictApplicative);
  $__res = function($dictFoldable) use ($traverse_1, $__global_Data_Foldable_identity) {
  $__num = func_num_args();
  $__res = ($traverse_1)($dictFoldable, $__global_Data_Foldable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_sequence_'] = __NAMESPACE__ . '\\Data_Foldable_sequence_';

// Data_Foldable_foldl
function Data_Foldable_foldl($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->foldl;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldl'] = __NAMESPACE__ . '\\Data_Foldable_foldl';

// Data_Foldable_indexl
function Data_Foldable_indexl($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_indexl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($idx) use ($__global_Data_Foldable_compose, $foldl3) {
  $__num = func_num_args();
  $go = (function() use ($idx, &$__fn) {
  $__fn = function($cursor, $a = null) use ($idx, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($cursor, &$__fn) { return $__fn($cursor, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = ($cursor)->elem;
  switch (($__case_0)->tag) {
case "Just":
$__res = $cursor;
goto __end;;
break;
default:
$__case_0 = (($cursor)->pos === $idx);
switch ($__case_0) {
case true:
$__res = (object)["elem" => new Phpurs_Data1("Just", $a), "pos" => ($cursor)->pos];
goto __end;;
break;
default:
$__res = (object)["pos" => (($cursor)->pos + 1), "elem" => ($cursor)->elem];
goto __end;;
break;
};
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($__global_Data_Foldable_compose)(function($v) {
  $__num = func_num_args();
  $__res = ($v)->elem;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($foldl3)($go, (object)["elem" => ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), "pos" => 0]));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_indexl'] = __NAMESPACE__ . '\\Data_Foldable_indexl';

// Data_Foldable_intercalate
function Data_Foldable_intercalate($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_intercalate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $foldl3) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = (function() use ($append, $foldl3, $mempty, &$__fn) {
  $__fn = function($sep, $xs = null) use ($append, $foldl3, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($sep, &$__fn) { return $__fn($sep, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = (function() use ($append, $sep, &$__fn) {
  $__fn = function($v, $v1 = null) use ($append, $sep, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if ((is_object($__case_0) && (($__case_0)->init === true))) {
$x = $__case_1;
$__res = (object)["init" => false, "acc" => $x];
goto __end;;
} else {
if (is_object($__case_0)) {
$acc = ($__case_0)->acc;
$x = $__case_1;
$__res = (object)["init" => false, "acc" => ($append)($acc, ($append)($sep, $x))];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = (($foldl3)($go, (object)["init" => true, "acc" => $mempty], $xs))->acc;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_intercalate'] = __NAMESPACE__ . '\\Data_Foldable_intercalate';

// Data_Foldable_length
function Data_Foldable_length($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_length';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($dictSemiring) use ($foldl3) {
  $__num = func_num_args();
  $add1 = ($dictSemiring)->add;
  $one = ($dictSemiring)->one;
  $__res = ($foldl3)((function() use ($add1, $one, &$__fn) {
  $__fn = function($c, $v = null) use ($add1, $one, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($c, &$__fn) { return $__fn($c, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($add1)($one, $c);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($dictSemiring)->zero);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_length'] = __NAMESPACE__ . '\\Data_Foldable_length';

// Data_Foldable_maximumBy
function Data_Foldable_maximumBy($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_maximumBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_eq1 = ($GLOBALS['Data_Foldable_eq1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq1'));
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($cmp) use ($__global_Data_Foldable_eq1, $foldl3) {
  $__num = func_num_args();
  $max__prime__ = (function() use ($__global_Data_Foldable_eq1, $cmp, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_Foldable_eq1, $cmp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
$__res = new Phpurs_Data1("Just", $x);
goto __end;;
break;
case "Just":
$x = ($__case_0)->v0;
$y = $__case_1;
$__case_0 = ($__global_Data_Foldable_eq1)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
$__case_res_0 = null;
switch ($__case_0) {
case true:
$__case_res_0 = $x;
break;
default:
$__case_res_0 = $y;
break;
};
$__res = new Phpurs_Data1("Just", $__case_res_0);
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
  $__res = ($foldl3)($max__prime__, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_maximumBy'] = __NAMESPACE__ . '\\Data_Foldable_maximumBy';

// Data_Foldable_maximum
function Data_Foldable_maximum($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_maximum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_maximumBy = ($GLOBALS['Data_Foldable_maximumBy'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_maximumBy'));
  $compare = ($dictOrd)->compare;
  $__res = function($dictFoldable) use ($__global_Data_Foldable_maximumBy, $compare) {
  $__num = func_num_args();
  $__res = ($__global_Data_Foldable_maximumBy)($dictFoldable, $compare);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_maximum'] = __NAMESPACE__ . '\\Data_Foldable_maximum';

// Data_Foldable_minimumBy
function Data_Foldable_minimumBy($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_minimumBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_eq1 = ($GLOBALS['Data_Foldable_eq1'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_eq1'));
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($cmp) use ($__global_Data_Foldable_eq1, $foldl3) {
  $__num = func_num_args();
  $min__prime__ = (function() use ($__global_Data_Foldable_eq1, $cmp, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_Foldable_eq1, $cmp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
$__res = new Phpurs_Data1("Just", $x);
goto __end;;
break;
case "Just":
$x = ($__case_0)->v0;
$y = $__case_1;
$__case_0 = ($__global_Data_Foldable_eq1)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")));
$__case_res_0 = null;
switch ($__case_0) {
case true:
$__case_res_0 = $x;
break;
default:
$__case_res_0 = $y;
break;
};
$__res = new Phpurs_Data1("Just", $__case_res_0);
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
  $__res = ($foldl3)($min__prime__, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_minimumBy'] = __NAMESPACE__ . '\\Data_Foldable_minimumBy';

// Data_Foldable_minimum
function Data_Foldable_minimum($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_minimum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_minimumBy = ($GLOBALS['Data_Foldable_minimumBy'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_minimumBy'));
  $compare = ($dictOrd)->compare;
  $__res = function($dictFoldable) use ($__global_Data_Foldable_minimumBy, $compare) {
  $__num = func_num_args();
  $__res = ($__global_Data_Foldable_minimumBy)($dictFoldable, $compare);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_minimum'] = __NAMESPACE__ . '\\Data_Foldable_minimum';

// Data_Foldable_product
function Data_Foldable_product($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_product';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($dictSemiring) use ($foldl3) {
  $__num = func_num_args();
  $__res = ($foldl3)(($dictSemiring)->mul, ($dictSemiring)->one);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_product'] = __NAMESPACE__ . '\\Data_Foldable_product';

// Data_Foldable_sum
function Data_Foldable_sum($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_sum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($dictSemiring) use ($foldl3) {
  $__num = func_num_args();
  $__res = ($foldl3)(($dictSemiring)->add, ($dictSemiring)->zero);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_sum'] = __NAMESPACE__ . '\\Data_Foldable_sum';













// Data_Foldable_foldMapDefaultR
function Data_Foldable_foldMapDefaultR($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldMapDefaultR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldr3 = ($dictFoldable)->foldr;
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $foldr3) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = function($f) use ($foldr3, $append, $mempty) {
  $__num = func_num_args();
  $__res = ($foldr3)((function() use ($append, $f, &$__fn) {
  $__fn = function($x, $acc = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($x, &$__fn) { return $__fn($x, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($append)(($f)($x), $acc);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
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
$GLOBALS['Data_Foldable_foldMapDefaultR'] = __NAMESPACE__ . '\\Data_Foldable_foldMapDefaultR';





// Data_Foldable_foldMapDefaultL
function Data_Foldable_foldMapDefaultL($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldMapDefaultL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $foldl3) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = function($f) use ($foldl3, $append, $mempty) {
  $__num = func_num_args();
  $__res = ($foldl3)((function() use ($append, $f, &$__fn) {
  $__fn = function($acc, $x = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($acc, &$__fn) { return $__fn($acc, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($append)($acc, ($f)($x));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
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
$GLOBALS['Data_Foldable_foldMapDefaultL'] = __NAMESPACE__ . '\\Data_Foldable_foldMapDefaultL';

// Data_Foldable_foldMap
function Data_Foldable_foldMap($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->foldMap;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldMap'] = __NAMESPACE__ . '\\Data_Foldable_foldMap';


// Data_Foldable_foldableApp
function Data_Foldable_foldableApp($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldableApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $foldr3 = ($dictFoldable)->foldr;
  $foldl3 = ($dictFoldable)->foldl;
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = (object)["foldr" => (function() use ($foldr3, &$__fn) {
  $__fn = function($f, $i = null, $v = null) use ($foldr3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $i;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
$__res = ($foldr3)($f1, $i1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3, &$__fn) {
  $__fn = function($f, $i = null, $v = null) use ($foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $i;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$x = $__case_2;
$__res = ($foldl3)($f1, $i1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) use ($foldMap2) {
  $__num = func_num_args();
  $foldMap3 = ($foldMap2)($dictMonoid);
  $__res = (function() use ($foldMap3, &$__fn) {
  $__fn = function($f, $v = null) use ($foldMap3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$x = $__case_1;
$__res = ($foldMap3)($f1, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldableApp'] = __NAMESPACE__ . '\\Data_Foldable_foldableApp';

// Data_Foldable_foldableCompose
function Data_Foldable_foldableCompose($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldableCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $foldr3 = ($dictFoldable)->foldr;
  $foldl3 = ($dictFoldable)->foldl;
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = function($dictFoldable1) use ($foldr3, $__global_Data_Function_flip, $foldl3, $foldMap2) {
  $__num = func_num_args();
  $foldr4 = ($dictFoldable1)->foldr;
  $foldl4 = ($dictFoldable1)->foldl;
  $foldMap3 = ($dictFoldable1)->foldMap;
  $__res = (object)["foldr" => (function() use ($foldr3, $__global_Data_Function_flip, $foldr4, &$__fn) {
  $__fn = function($f, $i = null, $v = null) use ($foldr3, $__global_Data_Function_flip, $foldr4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $i;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
$__res = ($foldr3)(($__global_Data_Function_flip)(($foldr4)($f1)), $i1, $fga);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($foldl3, $foldl4, &$__fn) {
  $__fn = function($f, $i = null, $v = null) use ($foldl3, $foldl4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
    if ($__num === 1) return function($i, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $i, $v);
      if ($__num2 === 1) return function($v) use ($f, $i, &$__fn) { return $__fn($f, $i, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $i;
  $__case_2 = $v;
  if (true) {
$f1 = $__case_0;
$i1 = $__case_1;
$fga = $__case_2;
$__res = ($foldl3)(($foldl4)($f1), $i1, $fga);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) use ($foldMap2, $foldMap3) {
  $__num = func_num_args();
  $foldMap4 = ($foldMap2)($dictMonoid);
  $foldMap5 = ($foldMap3)($dictMonoid);
  $__res = (function() use ($foldMap4, $foldMap5, &$__fn) {
  $__fn = function($f, $v = null) use ($foldMap4, $foldMap5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$fga = $__case_1;
$__res = ($foldMap4)(($foldMap5)($f1), $fga);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
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
$GLOBALS['Data_Foldable_foldableCompose'] = __NAMESPACE__ . '\\Data_Foldable_foldableCompose';

// Data_Foldable_foldableCoproduct
function Data_Foldable_foldableCoproduct($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldableCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
  $foldr3 = ($dictFoldable)->foldr;
  $foldl3 = ($dictFoldable)->foldl;
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = function($dictFoldable1) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldl3, $foldMap2) {
  $__num = func_num_args();
  $foldr4 = ($dictFoldable1)->foldr;
  $foldl4 = ($dictFoldable1)->foldl;
  $foldMap3 = ($dictFoldable1)->foldMap;
  $__res = (object)["foldr" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4, &$__fn) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldr3, $foldr4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldr3)($f, $z), ($foldr4)($f, $z));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4, &$__fn) {
  $__fn = function($f, $z = null) use ($__global_Data_Functor_Coproduct_coproduct, $foldl3, $foldl4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($z) use ($f, &$__fn) { return $__fn($f, $z); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldl3)($f, $z), ($foldl4)($f, $z));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap" => function($dictMonoid) use ($foldMap2, $foldMap3, $__global_Data_Functor_Coproduct_coproduct) {
  $__num = func_num_args();
  $foldMap4 = ($foldMap2)($dictMonoid);
  $foldMap5 = ($foldMap3)($dictMonoid);
  $__res = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $foldMap4, $foldMap5) {
  $__num = func_num_args();
  $__res = ($__global_Data_Functor_Coproduct_coproduct)(($foldMap4)($f), ($foldMap5)($f));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
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
$GLOBALS['Data_Foldable_foldableCoproduct'] = __NAMESPACE__ . '\\Data_Foldable_foldableCoproduct';



// Data_Foldable_foldableProduct
function Data_Foldable_foldableProduct($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldableProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $foldr3 = ($dictFoldable)->foldr;
  $foldl3 = ($dictFoldable)->foldl;
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = function($dictFoldable1) use ($foldr3, $foldl3, $__global_Prim_undefined, $foldMap2) {
  $__num = func_num_args();
  $foldr4 = ($dictFoldable1)->foldr;
  $foldl4 = ($dictFoldable1)->foldl;
  $foldMap3 = ($dictFoldable1)->foldMap;
  $__res = (object)["foldr" => (function() use ($foldr3, $foldr4, &$__fn) {
  $__fn = function($f, $z = null, $v = null) use ($foldr3, $foldr4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
$__res = ($foldr3)($f1, ($foldr4)($f1, $z1, $ga), $fa);
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
})(), "foldl" => (function() use ($foldl4, $foldl3, &$__fn) {
  $__fn = function($f, $z = null, $v = null) use ($foldl4, $foldl3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
    if ($__num === 1) return function($z, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $z, &$__fn) { return $__fn($f, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $z;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$z1 = $__case_1;
$fa = ($__case_2)->v0;
$ga = ($__case_2)->v1;
$__res = ($foldl4)($f1, ($foldl3)($f1, $z1, $fa), $ga);
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
})(), "foldMap" => function($dictMonoid) use ($__global_Prim_undefined, $foldMap2, $foldMap3) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $foldMap4 = ($foldMap2)($dictMonoid);
  $foldMap5 = ($foldMap3)($dictMonoid);
  $__res = (function() use ($append, $foldMap4, $foldMap5, &$__fn) {
  $__fn = function($f, $v = null) use ($append, $foldMap4, $foldMap5, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, &$__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Tuple":
$f1 = $__case_0;
$fa = ($__case_1)->v0;
$ga = ($__case_1)->v1;
$__res = ($append)(($foldMap4)($f1, $fa), ($foldMap5)($f1, $ga));
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
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldableProduct'] = __NAMESPACE__ . '\\Data_Foldable_foldableProduct';

// Data_Foldable_foldlDefault
function Data_Foldable_foldlDefault($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldlDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_monoidFreeMonoidTree = ($GLOBALS['Data_Foldable_monoidFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidFreeMonoidTree'));
  $__global_Data_Foldable_foldl2 = ($GLOBALS['Data_Foldable_foldl2'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldl2'));
  $foldMap2 = (($dictFoldable)->foldMap)($__global_Data_Foldable_monoidFreeMonoidTree);
  $__res = (function() use ($__global_Data_Foldable_foldl2, $foldMap2, &$__fn) {
  $__fn = function($c, $u = null, $xs = null) use ($__global_Data_Foldable_foldl2, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
    if ($__num === 1) return function($u, $xs = null) use ($c, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($c, $u, $xs);
      if ($__num2 === 1) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
      return phpurs_curry_fallback($__fn, [$c], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($__global_Data_Foldable_foldl2)($c, $u, ($foldMap2)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Node", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $xs));
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
$GLOBALS['Data_Foldable_foldlDefault'] = __NAMESPACE__ . '\\Data_Foldable_foldlDefault';

// Data_Foldable_foldrDefault
function Data_Foldable_foldrDefault($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldrDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_monoidFreeMonoidTree = ($GLOBALS['Data_Foldable_monoidFreeMonoidTree'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidFreeMonoidTree'));
  $__global_Data_Foldable_foldr2 = ($GLOBALS['Data_Foldable_foldr2'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldr2'));
  $foldMap2 = (($dictFoldable)->foldMap)($__global_Data_Foldable_monoidFreeMonoidTree);
  $__res = (function() use ($__global_Data_Foldable_foldr2, $foldMap2, &$__fn) {
  $__fn = function($c, $u = null, $xs = null) use ($__global_Data_Foldable_foldr2, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
    if ($__num === 1) return function($u, $xs = null) use ($c, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($c, $u, $xs);
      if ($__num2 === 1) return function($xs) use ($c, $u, &$__fn) { return $__fn($c, $u, $xs); };
      return phpurs_curry_fallback($__fn, [$c], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($__global_Data_Foldable_foldr2)($c, $u, ($foldMap2)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Node", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $xs));
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
$GLOBALS['Data_Foldable_foldrDefault'] = __NAMESPACE__ . '\\Data_Foldable_foldrDefault';

// Data_Foldable_lookup
function Data_Foldable_lookup($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_lookup';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Maybe_First_monoidFirst = ($GLOBALS['Data_Maybe_First_monoidFirst'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_monoidFirst'));
  $__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
  $__global_Data_Foldable_unwrap = ($GLOBALS['Data_Foldable_unwrap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_unwrap'));
  $foldMap2 = (($dictFoldable)->foldMap)($__global_Data_Maybe_First_monoidFirst);
  $__res = function($dictEq) use ($__global_Data_Foldable_compose, $__global_Data_Foldable_unwrap, $foldMap2) {
  $__num = func_num_args();
  $eq2 = ($dictEq)->eq;
  $__res = function($a) use ($__global_Data_Foldable_compose, $__global_Data_Foldable_unwrap, $foldMap2, $eq2) {
  $__num = func_num_args();
  $__res = ($__global_Data_Foldable_compose)($__global_Data_Foldable_unwrap, ($foldMap2)(function($v) use ($eq2, $a) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$a__prime__ = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__case_0 = ($eq2)($a, $a__prime__);
switch ($__case_0) {
case true:
$__res = new Phpurs_Data1("Just", $b);
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
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
$GLOBALS['Data_Foldable_lookup'] = __NAMESPACE__ . '\\Data_Foldable_lookup';

// Data_Foldable_surroundMap
function Data_Foldable_surroundMap($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_surroundMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_monoidEndo = ($GLOBALS['Data_Foldable_monoidEndo'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_monoidEndo'));
  $__global_Data_Foldable_unwrap = ($GLOBALS['Data_Foldable_unwrap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_unwrap'));
  $foldMap2 = (($dictFoldable)->foldMap)($__global_Data_Foldable_monoidEndo);
  $__res = function($dictSemigroup) use ($__global_Data_Foldable_unwrap, $foldMap2) {
  $__num = func_num_args();
  $append = ($dictSemigroup)->append;
  $__res = (function() use ($append, $__global_Data_Foldable_unwrap, $foldMap2, &$__fn) {
  $__fn = function($d, $t = null, $f = null) use ($append, $__global_Data_Foldable_unwrap, $foldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($f) use ($d, $t, &$__fn) { return $__fn($d, $t, $f); };
    if ($__num === 1) return function($t, $f = null) use ($d, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($d, $t, $f);
      if ($__num2 === 1) return function($f) use ($d, $t, &$__fn) { return $__fn($d, $t, $f); };
      return phpurs_curry_fallback($__fn, [$d], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $joined = (function() use ($append, $d, $t, &$__fn) {
  $__fn = function($a, $m = null) use ($append, $d, $t, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($a, &$__fn) { return $__fn($a, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($append)($d, ($append)(($t)($a), $m));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($__global_Data_Foldable_unwrap)(($foldMap2)($joined, $f), $d);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_surroundMap'] = __NAMESPACE__ . '\\Data_Foldable_surroundMap';

// Data_Foldable_surround
function Data_Foldable_surround($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_surround';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_surroundMap = ($GLOBALS['Data_Foldable_surroundMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_surroundMap'));
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $surroundMap1 = ($__global_Data_Foldable_surroundMap)($dictFoldable);
  $__res = function($dictSemigroup) use ($surroundMap1, $__global_Data_Foldable_identity) {
  $__num = func_num_args();
  $surroundMap2 = ($surroundMap1)($dictSemigroup);
  $__res = function($d) use ($surroundMap2, $__global_Data_Foldable_identity) {
  $__num = func_num_args();
  $__res = ($surroundMap2)($d, $__global_Data_Foldable_identity);
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
$GLOBALS['Data_Foldable_surround'] = __NAMESPACE__ . '\\Data_Foldable_surround';

// Data_Foldable_foldM
function Data_Foldable_foldM($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_foldM';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($dictMonad) use ($__global_Prim_undefined, $foldl3, $__global_Data_Function_flip) {
  $__num = func_num_args();
  $bind = ((($dictMonad)->Bind1)($__global_Prim_undefined))->bind;
  $pure = ((($dictMonad)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (function() use ($foldl3, $bind, $__global_Data_Function_flip, $pure, &$__fn) {
  $__fn = function($f, $b0 = null) use ($foldl3, $bind, $__global_Data_Function_flip, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b0) use ($f, &$__fn) { return $__fn($f, $b0); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($foldl3)((function() use ($bind, $__global_Data_Function_flip, $f, &$__fn) {
  $__fn = function($b, $a = null) use ($bind, $__global_Data_Function_flip, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($b, &$__fn) { return $__fn($b, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bind)($b, ($__global_Data_Function_flip)($f, $a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($pure)($b0));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_foldM'] = __NAMESPACE__ . '\\Data_Foldable_foldM';

// Data_Foldable_fold
function Data_Foldable_fold($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_fold';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = function($dictMonoid) use ($foldMap2, $__global_Data_Foldable_identity) {
  $__num = func_num_args();
  $__res = ($foldMap2)($dictMonoid, $__global_Data_Foldable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_fold'] = __NAMESPACE__ . '\\Data_Foldable_fold';

// Data_Foldable_findMap
function Data_Foldable_findMap($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_findMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($p) use ($foldl3) {
  $__num = func_num_args();
  $go = (function() use ($p, &$__fn) {
  $__fn = function($v, $v1 = null) use ($p, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
$__res = ($p)($x);
goto __end;;
break;
default:
$r = $__case_0;
$__res = $r;
goto __end;;
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($foldl3)($go, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_findMap'] = __NAMESPACE__ . '\\Data_Foldable_findMap';

// Data_Foldable_find
function Data_Foldable_find($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_find';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $foldl3 = ($dictFoldable)->foldl;
  $__res = function($p) use ($foldl3) {
  $__num = func_num_args();
  $go = (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_0)->tag) {
case "Nothing":
$x = $__case_1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
$r = $__case_0;
$__res = $r;
goto __end;;
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  $__res = ($foldl3)($go, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_find'] = __NAMESPACE__ . '\\Data_Foldable_find';

// Data_Foldable_any
function Data_Foldable_any($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_any';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
  $__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
  $__global_Data_Monoid_Disj_monoidDisj = ($GLOBALS['Data_Monoid_Disj_monoidDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_monoidDisj'));
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = function($dictHeytingAlgebra) use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Disj_Disj, $foldMap2, $__global_Data_Monoid_Disj_monoidDisj) {
  $__num = func_num_args();
  $__res = ($__global_Data_Foldable_alaF)($__global_Data_Monoid_Disj_Disj, ($foldMap2)(($__global_Data_Monoid_Disj_monoidDisj)($dictHeytingAlgebra)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_any'] = __NAMESPACE__ . '\\Data_Foldable_any';

// Data_Foldable_elem
function Data_Foldable_elem($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_elem';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_any = ($GLOBALS['Data_Foldable_any'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_any'));
  $__global_Data_HeytingAlgebra_heytingAlgebraBoolean = ($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'));
  $__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
  $any1 = ($__global_Data_Foldable_any)($dictFoldable, $__global_Data_HeytingAlgebra_heytingAlgebraBoolean);
  $__res = function($dictEq) use ($__global_Data_Foldable_compose, $any1) {
  $__num = func_num_args();
  $__res = ($__global_Data_Foldable_compose)($any1, ($dictEq)->eq);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_elem'] = __NAMESPACE__ . '\\Data_Foldable_elem';

// Data_Foldable_notElem
function Data_Foldable_notElem($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_notElem';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_elem = ($GLOBALS['Data_Foldable_elem'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_elem'));
  $__global_Data_Foldable_compose = ($GLOBALS['Data_Foldable_compose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_compose'));
  $__global_Data_HeytingAlgebra_boolNot = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot'));
  $elem1 = ($__global_Data_Foldable_elem)($dictFoldable);
  $__res = function($dictEq) use ($elem1, $__global_Data_Foldable_compose, $__global_Data_HeytingAlgebra_boolNot) {
  $__num = func_num_args();
  $elem2 = ($elem1)($dictEq);
  $__res = function($x) use ($__global_Data_Foldable_compose, $__global_Data_HeytingAlgebra_boolNot, $elem2) {
  $__num = func_num_args();
  $__res = ($__global_Data_Foldable_compose)($__global_Data_HeytingAlgebra_boolNot, ($elem2)($x));
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
$GLOBALS['Data_Foldable_notElem'] = __NAMESPACE__ . '\\Data_Foldable_notElem';

// Data_Foldable_or
function Data_Foldable_or($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_or';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_any = ($GLOBALS['Data_Foldable_any'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_any'));
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $any1 = ($__global_Data_Foldable_any)($dictFoldable);
  $__res = function($dictHeytingAlgebra) use ($any1, $__global_Data_Foldable_identity) {
  $__num = func_num_args();
  $__res = ($any1)($dictHeytingAlgebra, $__global_Data_Foldable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_or'] = __NAMESPACE__ . '\\Data_Foldable_or';

// Data_Foldable_all
function Data_Foldable_all($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_all';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_alaF = ($GLOBALS['Data_Foldable_alaF'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_alaF'));
  $__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
  $__global_Data_Monoid_Conj_monoidConj = ($GLOBALS['Data_Monoid_Conj_monoidConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_monoidConj'));
  $foldMap2 = ($dictFoldable)->foldMap;
  $__res = function($dictHeytingAlgebra) use ($__global_Data_Foldable_alaF, $__global_Data_Monoid_Conj_Conj, $foldMap2, $__global_Data_Monoid_Conj_monoidConj) {
  $__num = func_num_args();
  $__res = ($__global_Data_Foldable_alaF)($__global_Data_Monoid_Conj_Conj, ($foldMap2)(($__global_Data_Monoid_Conj_monoidConj)($dictHeytingAlgebra)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_all'] = __NAMESPACE__ . '\\Data_Foldable_all';

// Data_Foldable_and
function Data_Foldable_and($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Foldable_and';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_all = ($GLOBALS['Data_Foldable_all'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_all'));
  $__global_Data_Foldable_identity = ($GLOBALS['Data_Foldable_identity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_identity'));
  $all1 = ($__global_Data_Foldable_all)($dictFoldable);
  $__res = function($dictHeytingAlgebra) use ($all1, $__global_Data_Foldable_identity) {
  $__num = func_num_args();
  $__res = ($all1)($dictHeytingAlgebra, $__global_Data_Foldable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Foldable_and'] = __NAMESPACE__ . '\\Data_Foldable_and';

