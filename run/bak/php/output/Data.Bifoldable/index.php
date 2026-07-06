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
      case 'Data_Bifoldable_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Bifoldable_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Bifoldable_unwrap': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Bifoldable_monoidEndo': $v = \Data\Monoid\Endo\Data_Monoid_Endo_monoidEndo(($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn'))); break;
      case 'Data_Bifoldable_monoidDual': $v = \Data\Monoid\Dual\Data_Monoid_Dual_monoidDual(($GLOBALS['Data_Bifoldable_monoidEndo'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidEndo'))); break;
      case 'Data_Bifoldable_bifoldableTuple': $v = (object)["bifoldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $__res = (function() use ($append, &$__fn) {
  $__fn = function($f, $g = null, $v = null) use ($append, &$__fn) {
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
  $__case_0 = $f;
  $__case_1 = $g;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$a = ($__case_2)->v0;
$b = ($__case_2)->v1;
$__res = ($append)(($f1)($a), ($g1)($b));
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
}, "bifoldr" => (function() use (&$__fn) {
  $__fn = function($f, $g = null, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
    if ($__num === 2) return function($z, $v = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $v);
      if ($__num2 === 2) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
      if ($__num2 === 1) return function($z, $v = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $v);
        if ($__num3 === 1) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $f;
  $__case_1 = $g;
  $__case_2 = $z;
  $__case_3 = $v;
  switch (($__case_3)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$z1 = $__case_2;
$a = ($__case_3)->v0;
$b = ($__case_3)->v1;
$__res = ($f1)($a, ($g1)($b, $z1));
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
})(), "bifoldl" => (function() use (&$__fn) {
  $__fn = function($f, $g = null, $z = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
    if ($__num === 2) return function($z, $v = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $v);
      if ($__num2 === 1) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $v);
      if ($__num2 === 2) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
      if ($__num2 === 1) return function($z, $v = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $v);
        if ($__num3 === 1) return function($v) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $v); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $f;
  $__case_1 = $g;
  $__case_2 = $z;
  $__case_3 = $v;
  switch (($__case_3)->tag) {
case "Tuple":
$f1 = $__case_0;
$g1 = $__case_1;
$z1 = $__case_2;
$a = ($__case_3)->v0;
$b = ($__case_3)->v1;
$__res = ($g1)(($f1)($z1, $a), $b);
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
})()]; break;
      case 'Data_Bifoldable_bifoldableEither': $v = (object)["bifoldr" => (function() use (&$__fn) {
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
case "Left":
$f = $__case_0;
$z = $__case_2;
$a = ($__case_3)->v0;
$__res = ($f)($a, $z);
goto __end;;
break;
case "Right":
$g = $__case_1;
$z = $__case_2;
$b = ($__case_3)->v0;
$__res = ($g)($b, $z);
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
})(), "bifoldl" => (function() use (&$__fn) {
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
case "Left":
$f = $__case_0;
$z = $__case_2;
$a = ($__case_3)->v0;
$__res = ($f)($z, $a);
goto __end;;
break;
case "Right":
$g = $__case_1;
$z = $__case_2;
$b = ($__case_3)->v0;
$__res = ($g)($z, $b);
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
})(), "bifoldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $v = null, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v2) use ($dictMonoid, $v, $v1, &$__fn) { return $__fn($dictMonoid, $v, $v1, $v2); };
    if ($__num === 2) return function($v1, $v2 = null) use ($dictMonoid, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($dictMonoid, $v, $v1, &$__fn) { return $__fn($dictMonoid, $v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$dictMonoid, $v], 4);
    };
    if ($__num === 1) return function($v, $v1 = null, $v2 = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($dictMonoid, $v, $v1, $v2);
      if ($__num2 === 2) return function($v2) use ($dictMonoid, $v, $v1, &$__fn) { return $__fn($dictMonoid, $v, $v1, $v2); };
      if ($__num2 === 1) return function($v1, $v2 = null) use ($dictMonoid, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($dictMonoid, $v, $v1, $v2);
        if ($__num3 === 1) return function($v2) use ($dictMonoid, $v, $v1, &$__fn) { return $__fn($dictMonoid, $v, $v1, $v2); };
        return phpurs_curry_fallback($__fn, [$dictMonoid, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  $__case_2 = $v2;
  switch (($__case_2)->tag) {
case "Left":
$f = $__case_0;
$a = ($__case_2)->v0;
$__res = ($f)($a);
goto __end;;
break;
case "Right":
$g = $__case_1;
$b = ($__case_2)->v0;
$__res = ($g)($b);
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
})()]; break;
      case 'Data_Bifoldable_bifoldableConst': $v = (object)["bifoldr" => (function() use (&$__fn) {
  $__fn = function($f, $v = null, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
    if ($__num === 2) return function($z, $v1 = null) use ($f, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$f, $v], 4);
    };
    if ($__num === 1) return function($v, $z = null, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $v, $z, $v1);
      if ($__num2 === 2) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
      if ($__num2 === 1) return function($z, $v1 = null) use ($f, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $v, $z, $v1);
        if ($__num3 === 1) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
        return phpurs_curry_fallback($__fn, [$f, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__case_2 = $z;
  $__case_3 = $v1;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_2;
$a = $__case_3;
$__res = ($f1)($a, $z1);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use (&$__fn) {
  $__fn = function($f, $v = null, $z = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
    if ($__num === 2) return function($z, $v1 = null) use ($f, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $z, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
      return phpurs_curry_fallback($__fn, [$f, $v], 4);
    };
    if ($__num === 1) return function($v, $z = null, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $v, $z, $v1);
      if ($__num2 === 2) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
      if ($__num2 === 1) return function($z, $v1 = null) use ($f, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $v, $z, $v1);
        if ($__num3 === 1) return function($v1) use ($f, $v, $z, &$__fn) { return $__fn($f, $v, $z, $v1); };
        return phpurs_curry_fallback($__fn, [$f, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__case_2 = $z;
  $__case_3 = $v1;
  if (true) {
$f1 = $__case_0;
$z1 = $__case_2;
$a = $__case_3;
$__res = ($f1)($z1, $a);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $f = null, $v = null, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($dictMonoid, $f, $v, &$__fn) { return $__fn($dictMonoid, $f, $v, $v1); };
    if ($__num === 2) return function($v, $v1 = null) use ($dictMonoid, $f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($dictMonoid, $f, $v, &$__fn) { return $__fn($dictMonoid, $f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$dictMonoid, $f], 4);
    };
    if ($__num === 1) return function($f, $v = null, $v1 = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($dictMonoid, $f, $v, $v1);
      if ($__num2 === 2) return function($v1) use ($dictMonoid, $f, $v, &$__fn) { return $__fn($dictMonoid, $f, $v, $v1); };
      if ($__num2 === 1) return function($v, $v1 = null) use ($dictMonoid, $f, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($dictMonoid, $f, $v, $v1);
        if ($__num3 === 1) return function($v1) use ($dictMonoid, $f, $v, &$__fn) { return $__fn($dictMonoid, $f, $v, $v1); };
        return phpurs_curry_fallback($__fn, [$dictMonoid, $f], 4);
      };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__case_2 = $v1;
  if (true) {
$f1 = $__case_0;
$a = $__case_2;
$__res = ($f1)($a);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };







// Data_Bifoldable_Bifoldable$Dict
function Data_Bifoldable_Bifoldable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_Bifoldable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_Bifoldable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bifoldable_Bifoldable__dollar__Dict';

// Data_Bifoldable_bifoldr
function Data_Bifoldable_bifoldr($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->bifoldr;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldr'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldr';

// Data_Bifoldable_bitraverse_
function Data_Bifoldable_bitraverse_($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bitraverse_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Apply_applySecond = ($GLOBALS['Control_Apply_applySecond'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applySecond'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $bifoldr1 = ($dictBifoldable)->bifoldr;
  $__res = function($dictApplicative) use ($__global_Control_Apply_applySecond, $__global_Prim_undefined, $bifoldr1, $__global_Data_Bifoldable_compose, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $applySecond = ($__global_Control_Apply_applySecond)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $pure = ($dictApplicative)->pure;
  $__res = (function() use ($bifoldr1, $__global_Data_Bifoldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__fn = function($f, $g = null) use ($bifoldr1, $__global_Data_Bifoldable_compose, $applySecond, $pure, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bifoldr1)(($__global_Data_Bifoldable_compose)($applySecond, $f), ($__global_Data_Bifoldable_compose)($applySecond, $g), ($pure)($__global_Data_Unit_unit));
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
$GLOBALS['Data_Bifoldable_bitraverse_'] = __NAMESPACE__ . '\\Data_Bifoldable_bitraverse_';

// Data_Bifoldable_bifor_
function Data_Bifoldable_bifor_($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifor_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Bifoldable_bitraverse_ = ($GLOBALS['Data_Bifoldable_bitraverse_'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bitraverse_'));
  $bitraverse_1 = ($__global_Data_Bifoldable_bitraverse_)($dictBifoldable);
  $__res = function($dictApplicative) use ($bitraverse_1) {
  $__num = func_num_args();
  $bitraverse_2 = ($bitraverse_1)($dictApplicative);
  $__res = (function() use ($bitraverse_2, &$__fn) {
  $__fn = function($t, $f = null, $g = null) use ($bitraverse_2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($g) use ($t, $f, &$__fn) { return $__fn($t, $f, $g); };
    if ($__num === 1) return function($f, $g = null) use ($t, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($t, $f, $g);
      if ($__num2 === 1) return function($g) use ($t, $f, &$__fn) { return $__fn($t, $f, $g); };
      return phpurs_curry_fallback($__fn, [$t], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($bitraverse_2)($f, $g, $t);
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
$GLOBALS['Data_Bifoldable_bifor_'] = __NAMESPACE__ . '\\Data_Bifoldable_bifor_';

// Data_Bifoldable_bisequence_
function Data_Bifoldable_bisequence_($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bisequence_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Bifoldable_bitraverse_ = ($GLOBALS['Data_Bifoldable_bitraverse_'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bitraverse_'));
  $__global_Data_Bifoldable_identity = ($GLOBALS['Data_Bifoldable_identity'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_identity'));
  $bitraverse_1 = ($__global_Data_Bifoldable_bitraverse_)($dictBifoldable);
  $__res = function($dictApplicative) use ($bitraverse_1, $__global_Data_Bifoldable_identity) {
  $__num = func_num_args();
  $__res = ($bitraverse_1)($dictApplicative, $__global_Data_Bifoldable_identity, $__global_Data_Bifoldable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bisequence_'] = __NAMESPACE__ . '\\Data_Bifoldable_bisequence_';

// Data_Bifoldable_bifoldl
function Data_Bifoldable_bifoldl($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->bifoldl;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldl'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldl';


// Data_Bifoldable_bifoldableJoker
function Data_Bifoldable_bifoldableJoker($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldableJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $foldr = ($dictFoldable)->foldr;
  $foldl = ($dictFoldable)->foldl;
  $foldMap = ($dictFoldable)->foldMap;
  $__res = (object)["bifoldr" => (function() use ($foldr, &$__fn) {
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($v, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$v, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($v, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $r, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$v, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $v;
  $__case_1 = $r;
  $__case_2 = $u;
  $__case_3 = $v1;
  if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
$__res = ($foldr)($r1, $u1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl, &$__fn) {
  $__fn = function($v, $r = null, $u = null, $v1 = null) use ($foldl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($v, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$v, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($v, $r, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($v, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($v, $r, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($v, $r, $u, &$__fn) { return $__fn($v, $r, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$v, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$v], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $v;
  $__case_1 = $r;
  $__case_2 = $u;
  $__case_3 = $v1;
  if (true) {
$r1 = $__case_1;
$u1 = $__case_2;
$f = $__case_3;
$__res = ($foldl)($r1, $u1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use ($foldMap) {
  $__num = func_num_args();
  $foldMap1 = ($foldMap)($dictMonoid);
  $__res = (function() use ($foldMap1, &$__fn) {
  $__fn = function($v, $r = null, $v1 = null) use ($foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
    if ($__num === 1) return function($r, $v1 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $r, $v1);
      if ($__num2 === 1) return function($v1) use ($v, $r, &$__fn) { return $__fn($v, $r, $v1); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $v;
  $__case_1 = $r;
  $__case_2 = $v1;
  if (true) {
$r1 = $__case_1;
$f = $__case_2;
$__res = ($foldMap1)($r1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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
$GLOBALS['Data_Bifoldable_bifoldableJoker'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldableJoker';



// Data_Bifoldable_bifoldableClown
function Data_Bifoldable_bifoldableClown($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldableClown';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $foldr = ($dictFoldable)->foldr;
  $foldl = ($dictFoldable)->foldl;
  $foldMap = ($dictFoldable)->foldMap;
  $__res = (object)["bifoldr" => (function() use ($foldr, &$__fn) {
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($l, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$l, $v], 4);
    };
    if ($__num === 1) return function($v, $u = null, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($l, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $v, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$l, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $l;
  $__case_1 = $v;
  $__case_2 = $u;
  $__case_3 = $v1;
  if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
$__res = ($foldr)($l1, $u1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($foldl, &$__fn) {
  $__fn = function($l, $v = null, $u = null, $v1 = null) use ($foldl, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
    if ($__num === 2) return function($u, $v1 = null) use ($l, $v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      return phpurs_curry_fallback($__fn, [$l, $v], 4);
    };
    if ($__num === 1) return function($v, $u = null, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $v, $u, $v1);
      if ($__num2 === 2) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
      if ($__num2 === 1) return function($u, $v1 = null) use ($l, $v, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $v, $u, $v1);
        if ($__num3 === 1) return function($v1) use ($l, $v, $u, &$__fn) { return $__fn($l, $v, $u, $v1); };
        return phpurs_curry_fallback($__fn, [$l, $v], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $l;
  $__case_1 = $v;
  $__case_2 = $u;
  $__case_3 = $v1;
  if (true) {
$l1 = $__case_0;
$u1 = $__case_2;
$f = $__case_3;
$__res = ($foldl)($l1, $u1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use ($foldMap) {
  $__num = func_num_args();
  $foldMap1 = ($foldMap)($dictMonoid);
  $__res = (function() use ($foldMap1, &$__fn) {
  $__fn = function($l, $v = null, $v1 = null) use ($foldMap1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($l, $v, &$__fn) { return $__fn($l, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $l;
  $__case_1 = $v;
  $__case_2 = $v1;
  if (true) {
$l1 = $__case_0;
$f = $__case_2;
$__res = ($foldMap1)($l1, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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
$GLOBALS['Data_Bifoldable_bifoldableClown'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldableClown';

// Data_Bifoldable_bifoldMapDefaultR
function Data_Bifoldable_bifoldMapDefaultR($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldMapDefaultR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
  $bifoldr1 = ($dictBifoldable)->bifoldr;
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $bifoldr1, $__global_Data_Bifoldable_compose) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = (function() use ($bifoldr1, $__global_Data_Bifoldable_compose, $append, $mempty, &$__fn) {
  $__fn = function($f, $g = null) use ($bifoldr1, $__global_Data_Bifoldable_compose, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bifoldr1)(($__global_Data_Bifoldable_compose)($append, $f), ($__global_Data_Bifoldable_compose)($append, $g), $mempty);
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
$GLOBALS['Data_Bifoldable_bifoldMapDefaultR'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldMapDefaultR';

// Data_Bifoldable_bifoldMapDefaultL
function Data_Bifoldable_bifoldMapDefaultL($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldMapDefaultL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bifoldl1 = ($dictBifoldable)->bifoldl;
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $bifoldl1) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $mempty = ($dictMonoid)->mempty;
  $__res = (function() use ($bifoldl1, $append, $mempty, &$__fn) {
  $__fn = function($f, $g = null) use ($bifoldl1, $append, $mempty, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bifoldl1)((function() use ($append, $f, &$__fn) {
  $__fn = function($m, $a = null) use ($append, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($append)($m, ($f)($a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), (function() use ($append, $g, &$__fn) {
  $__fn = function($m, $b = null) use ($append, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($m, &$__fn) { return $__fn($m, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($append)($m, ($g)($b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $mempty);
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
$GLOBALS['Data_Bifoldable_bifoldMapDefaultL'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldMapDefaultL';

// Data_Bifoldable_bifoldMap
function Data_Bifoldable_bifoldMap($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->bifoldMap;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldMap'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldMap';

// Data_Bifoldable_bifoldableFlip
function Data_Bifoldable_bifoldableFlip($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldableFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $bifoldr1 = ($dictBifoldable)->bifoldr;
  $bifoldl1 = ($dictBifoldable)->bifoldl;
  $bifoldMap1 = ($dictBifoldable)->bifoldMap;
  $__res = (object)["bifoldr" => (function() use ($bifoldr1, &$__fn) {
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldr1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
    if ($__num === 2) return function($u, $v = null) use ($r, $l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $u, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      return phpurs_curry_fallback($__fn, [$r, $l], 4);
    };
    if ($__num === 1) return function($l, $u = null, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($r, $l, $u, $v);
      if ($__num2 === 2) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      if ($__num2 === 1) return function($u, $v = null) use ($r, $l, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($r, $l, $u, $v);
        if ($__num3 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
        return phpurs_curry_fallback($__fn, [$r, $l], 4);
      };
      return phpurs_curry_fallback($__fn, [$r], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $r;
  $__case_1 = $l;
  $__case_2 = $u;
  $__case_3 = $v;
  if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
$__res = ($bifoldr1)($l1, $r1, $u1, $p);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($bifoldl1, &$__fn) {
  $__fn = function($r, $l = null, $u = null, $v = null) use ($bifoldl1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
    if ($__num === 2) return function($u, $v = null) use ($r, $l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $u, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      return phpurs_curry_fallback($__fn, [$r, $l], 4);
    };
    if ($__num === 1) return function($l, $u = null, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($r, $l, $u, $v);
      if ($__num2 === 2) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
      if ($__num2 === 1) return function($u, $v = null) use ($r, $l, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($r, $l, $u, $v);
        if ($__num3 === 1) return function($v) use ($r, $l, $u, &$__fn) { return $__fn($r, $l, $u, $v); };
        return phpurs_curry_fallback($__fn, [$r, $l], 4);
      };
      return phpurs_curry_fallback($__fn, [$r], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__case_0 = $r;
  $__case_1 = $l;
  $__case_2 = $u;
  $__case_3 = $v;
  if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$u1 = $__case_2;
$p = $__case_3;
$__res = ($bifoldl1)($l1, $r1, $u1, $p);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use ($bifoldMap1) {
  $__num = func_num_args();
  $bifoldMap2 = ($bifoldMap1)($dictMonoid);
  $__res = (function() use ($bifoldMap2, &$__fn) {
  $__fn = function($r, $l = null, $v = null) use ($bifoldMap2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
    if ($__num === 1) return function($l, $v = null) use ($r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($r, $l, $v);
      if ($__num2 === 1) return function($v) use ($r, $l, &$__fn) { return $__fn($r, $l, $v); };
      return phpurs_curry_fallback($__fn, [$r], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $r;
  $__case_1 = $l;
  $__case_2 = $v;
  if (true) {
$r1 = $__case_0;
$l1 = $__case_1;
$p = $__case_2;
$__res = ($bifoldMap2)($l1, $r1, $p);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
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
$GLOBALS['Data_Bifoldable_bifoldableFlip'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldableFlip';

// Data_Bifoldable_bifoldlDefault
function Data_Bifoldable_bifoldlDefault($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldlDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Bifoldable_monoidDual = ($GLOBALS['Data_Bifoldable_monoidDual'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidDual'));
  $__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
  $__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
  $__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
  $__global_Data_Monoid_Endo_Endo = ($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $bifoldMap1 = (($dictBifoldable)->bifoldMap)($__global_Data_Bifoldable_monoidDual);
  $__res = (function() use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, &$__fn) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Dual_Dual, $__global_Data_Monoid_Endo_Endo, $__global_Data_Function_flip, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
    if ($__num === 2) return function($z, $p = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $p);
      if ($__num2 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $p = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $p);
      if ($__num2 === 2) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      if ($__num2 === 1) return function($z, $p = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $p);
        if ($__num3 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = ($__global_Data_Bifoldable_unwrap)(($__global_Data_Bifoldable_unwrap)(($bifoldMap1)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Dual_Dual, ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, ($__global_Data_Function_flip)($f))), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Dual_Dual, ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, ($__global_Data_Function_flip)($g))), $p)), $z);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldlDefault'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldlDefault';

// Data_Bifoldable_bifoldrDefault
function Data_Bifoldable_bifoldrDefault($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldrDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Bifoldable_monoidEndo = ($GLOBALS['Data_Bifoldable_monoidEndo'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_monoidEndo'));
  $__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
  $__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
  $__global_Data_Monoid_Endo_Endo = ($GLOBALS['Data_Monoid_Endo_Endo'] ?? \Data\Monoid\Endo\phpurs_eval_thunk('Data_Monoid_Endo_Endo'));
  $bifoldMap1 = (($dictBifoldable)->bifoldMap)($__global_Data_Bifoldable_monoidEndo);
  $__res = (function() use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, &$__fn) {
  $__fn = function($f, $g = null, $z = null, $p = null) use ($__global_Data_Bifoldable_unwrap, $bifoldMap1, $__global_Data_Bifoldable_compose, $__global_Data_Monoid_Endo_Endo, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
    if ($__num === 2) return function($z, $p = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $z, $p);
      if ($__num2 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $z = null, $p = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $z, $p);
      if ($__num2 === 2) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
      if ($__num2 === 1) return function($z, $p = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $z, $p);
        if ($__num3 === 1) return function($p) use ($f, $g, $z, &$__fn) { return $__fn($f, $g, $z, $p); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = ($__global_Data_Bifoldable_unwrap)(($bifoldMap1)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $f), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Endo_Endo, $g), $p), $z);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldrDefault'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldrDefault';

// Data_Bifoldable_bifoldableProduct2
function Data_Bifoldable_bifoldableProduct2($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifoldableProduct2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Bifoldable_bifoldrDefault = ($GLOBALS['Data_Bifoldable_bifoldrDefault'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldrDefault'));
  $__global_Data_Bifoldable_bifoldlDefault = ($GLOBALS['Data_Bifoldable_bifoldlDefault'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldlDefault'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  while (true) {
$bifoldMap1 = ($dictBifoldable)->bifoldMap;
$__res = function($dictBifoldable1) use ($__global_Data_Bifoldable_bifoldrDefault, $dictBifoldable, $__global_Data_Bifoldable_bifoldlDefault, $__global_Prim_undefined, $bifoldMap1) {
  $__num = func_num_args();
  $__global_Data_Bifoldable_bifoldableProduct2 = ($GLOBALS['Data_Bifoldable_bifoldableProduct2'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableProduct2'));
  $bifoldMap2 = ($dictBifoldable1)->bifoldMap;
  $__res = (object)["bifoldr" => (function() use ($__global_Data_Bifoldable_bifoldrDefault, $__global_Data_Bifoldable_bifoldableProduct2, $dictBifoldable, $dictBifoldable1, &$__fn) {
  $__fn = function($l, $r = null, $u = null, $m = null) use ($__global_Data_Bifoldable_bifoldrDefault, $__global_Data_Bifoldable_bifoldableProduct2, $dictBifoldable, $dictBifoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
    if ($__num === 2) return function($u, $m = null) use ($l, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $u, $m);
      if ($__num2 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      return phpurs_curry_fallback($__fn, [$l, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $m = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $r, $u, $m);
      if ($__num2 === 2) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      if ($__num2 === 1) return function($u, $m = null) use ($l, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $r, $u, $m);
        if ($__num3 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
        return phpurs_curry_fallback($__fn, [$l, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = ($__global_Data_Bifoldable_bifoldrDefault)(($__global_Data_Bifoldable_bifoldableProduct2)($dictBifoldable, $dictBifoldable1), $l, $r, $u, $m);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use ($__global_Data_Bifoldable_bifoldlDefault, $__global_Data_Bifoldable_bifoldableProduct2, $dictBifoldable, $dictBifoldable1, &$__fn) {
  $__fn = function($l, $r = null, $u = null, $m = null) use ($__global_Data_Bifoldable_bifoldlDefault, $__global_Data_Bifoldable_bifoldableProduct2, $dictBifoldable, $dictBifoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
    if ($__num === 2) return function($u, $m = null) use ($l, $r, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $u, $m);
      if ($__num2 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      return phpurs_curry_fallback($__fn, [$l, $r], 4);
    };
    if ($__num === 1) return function($r, $u = null, $m = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($l, $r, $u, $m);
      if ($__num2 === 2) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
      if ($__num2 === 1) return function($u, $m = null) use ($l, $r, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($l, $r, $u, $m);
        if ($__num3 === 1) return function($m) use ($l, $r, $u, &$__fn) { return $__fn($l, $r, $u, $m); };
        return phpurs_curry_fallback($__fn, [$l, $r], 4);
      };
      return phpurs_curry_fallback($__fn, [$l], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = ($__global_Data_Bifoldable_bifoldlDefault)(($__global_Data_Bifoldable_bifoldableProduct2)($dictBifoldable, $dictBifoldable1), $l, $r, $u, $m);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use ($__global_Prim_undefined, $bifoldMap1, $bifoldMap2) {
  $__num = func_num_args();
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $bifoldMap3 = ($bifoldMap1)($dictMonoid);
  $bifoldMap4 = ($bifoldMap2)($dictMonoid);
  $__res = (function() use ($append, $bifoldMap3, $bifoldMap4, &$__fn) {
  $__fn = function($l, $r = null, $v = null) use ($append, $bifoldMap3, $bifoldMap4, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
    if ($__num === 1) return function($r, $v = null) use ($l, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($l, $r, $v);
      if ($__num2 === 1) return function($v) use ($l, $r, &$__fn) { return $__fn($l, $r, $v); };
      return phpurs_curry_fallback($__fn, [$l], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $l;
  $__case_1 = $r;
  $__case_2 = $v;
  switch (($__case_2)->tag) {
case "Product2":
$l1 = $__case_0;
$r1 = $__case_1;
$f = ($__case_2)->v0;
$g = ($__case_2)->v1;
$__res = ($append)(($bifoldMap3)($l1, $r1, $f), ($bifoldMap4)($l1, $r1, $g));
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
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
};
  $__res = null;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifoldableProduct2'] = __NAMESPACE__ . '\\Data_Bifoldable_bifoldableProduct2';

// Data_Bifoldable_bifold
function Data_Bifoldable_bifold($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_bifold';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Bifoldable_identity = ($GLOBALS['Data_Bifoldable_identity'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_identity'));
  $bifoldMap1 = ($dictBifoldable)->bifoldMap;
  $__res = function($dictMonoid) use ($bifoldMap1, $__global_Data_Bifoldable_identity) {
  $__num = func_num_args();
  $__res = ($bifoldMap1)($dictMonoid, $__global_Data_Bifoldable_identity, $__global_Data_Bifoldable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bifoldable_bifold'] = __NAMESPACE__ . '\\Data_Bifoldable_bifold';

// Data_Bifoldable_biany
function Data_Bifoldable_biany($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_biany';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Monoid_Disj_monoidDisj = ($GLOBALS['Data_Monoid_Disj_monoidDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_monoidDisj'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
  $__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
  $__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
  $bifoldMap1 = ($dictBifoldable)->bifoldMap;
  $__res = function($dictBooleanAlgebra) use ($bifoldMap1, $__global_Data_Monoid_Disj_monoidDisj, $__global_Prim_undefined, $__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $__global_Data_Monoid_Disj_Disj) {
  $__num = func_num_args();
  $bifoldMap2 = ($bifoldMap1)(($__global_Data_Monoid_Disj_monoidDisj)((($dictBooleanAlgebra)->HeytingAlgebra0)($__global_Prim_undefined)));
  $__res = (function() use ($__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $bifoldMap2, $__global_Data_Monoid_Disj_Disj, &$__fn) {
  $__fn = function($p, $q = null) use ($__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $bifoldMap2, $__global_Data_Monoid_Disj_Disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($q) use ($p, &$__fn) { return $__fn($p, $q); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Bifoldable_compose)($__global_Data_Bifoldable_unwrap, ($bifoldMap2)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Disj_Disj, $p), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Disj_Disj, $q)));
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
$GLOBALS['Data_Bifoldable_biany'] = __NAMESPACE__ . '\\Data_Bifoldable_biany';

// Data_Bifoldable_biall
function Data_Bifoldable_biall($dictBifoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bifoldable_biall';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Monoid_Conj_monoidConj = ($GLOBALS['Data_Monoid_Conj_monoidConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_monoidConj'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Bifoldable_compose = ($GLOBALS['Data_Bifoldable_compose'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_compose'));
  $__global_Data_Bifoldable_unwrap = ($GLOBALS['Data_Bifoldable_unwrap'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_unwrap'));
  $__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
  $bifoldMap1 = ($dictBifoldable)->bifoldMap;
  $__res = function($dictBooleanAlgebra) use ($bifoldMap1, $__global_Data_Monoid_Conj_monoidConj, $__global_Prim_undefined, $__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $__global_Data_Monoid_Conj_Conj) {
  $__num = func_num_args();
  $bifoldMap2 = ($bifoldMap1)(($__global_Data_Monoid_Conj_monoidConj)((($dictBooleanAlgebra)->HeytingAlgebra0)($__global_Prim_undefined)));
  $__res = (function() use ($__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $bifoldMap2, $__global_Data_Monoid_Conj_Conj, &$__fn) {
  $__fn = function($p, $q = null) use ($__global_Data_Bifoldable_compose, $__global_Data_Bifoldable_unwrap, $bifoldMap2, $__global_Data_Monoid_Conj_Conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($q) use ($p, &$__fn) { return $__fn($p, $q); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Bifoldable_compose)($__global_Data_Bifoldable_unwrap, ($bifoldMap2)(($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Conj_Conj, $p), ($__global_Data_Bifoldable_compose)($__global_Data_Monoid_Conj_Conj, $q)));
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
$GLOBALS['Data_Bifoldable_biall'] = __NAMESPACE__ . '\\Data_Bifoldable_biall';

