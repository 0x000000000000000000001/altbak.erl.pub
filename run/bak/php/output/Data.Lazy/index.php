<?php

namespace Data\Lazy;

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
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Traversable/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
      case 'Data_Lazy_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Lazy_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Lazy_lazyLazy': $v = (object)["defer" => function($f) {
  $__num = func_num_args();
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($__global_Data_Lazy_force, $f, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($__global_Data_Lazy_force)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_functorLazy': $v = (object)["map" => (function() use (&$__fn) {
  $__fn = function($f, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($f, $__global_Data_Lazy_force, $l) {
  $__num = func_num_args();
  $__res = ($f)(($__global_Data_Lazy_force)($l));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_map': $v = (($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy')))->map; break;
      case 'Data_Lazy_functorWithIndexLazy': $v = (object)["mapWithIndex" => function($f) {
  $__num = func_num_args();
  $__global_Data_Lazy_map = ($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Lazy_map)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_functorLazy = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  $__res = $__global_Data_Lazy_functorLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_invariantLazy': $v = (object)["imap" => \Data\Functor\Invariant\Data_Functor_Invariant_imapF(($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy')))]; break;
      case 'Data_Lazy_foldableLazy': $v = (object)["foldr" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
    if ($__num === 1) return function($z, $l = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $l);
      if ($__num2 === 1) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__res = ($f)(($__global_Data_Lazy_force)($l), $z);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $z = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
    if ($__num === 1) return function($z, $l = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $z, $l);
      if ($__num2 === 1) return function($l) use ($f, $z, &$__fn) { return $__fn($f, $z, $l); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__res = ($f)($z, ($__global_Data_Lazy_force)($l));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldMap" => (function() use (&$__fn) {
  $__fn = function($dictMonoid, $f = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $l); };
    if ($__num === 1) return function($f, $l = null) use ($dictMonoid, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictMonoid, $f, $l);
      if ($__num2 === 1) return function($l) use ($dictMonoid, $f, &$__fn) { return $__fn($dictMonoid, $f, $l); };
      return phpurs_curry_fallback($__fn, [$dictMonoid], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__res = ($f)(($__global_Data_Lazy_force)($l));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Lazy_foldr': $v = (($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy')))->foldr; break;
      case 'Data_Lazy_foldl': $v = (($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy')))->foldl; break;
      case 'Data_Lazy_foldMap': $v = (($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy')))->foldMap; break;
      case 'Data_Lazy_foldableWithIndexLazy': $v = (object)["foldrWithIndex" => function($f) {
  $__num = func_num_args();
  $__global_Data_Lazy_foldr = ($GLOBALS['Data_Lazy_foldr'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldr'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Lazy_foldr)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldlWithIndex" => function($f) {
  $__num = func_num_args();
  $__global_Data_Lazy_foldl = ($GLOBALS['Data_Lazy_foldl'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldl'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Lazy_foldl)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldMapWithIndex" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Lazy_foldMap = ($GLOBALS['Data_Lazy_foldMap'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldMap'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $foldMap1 = ($__global_Data_Lazy_foldMap)($dictMonoid);
  $__res = function($f) use ($foldMap1, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($foldMap1)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_foldableLazy = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
  $__res = $__global_Data_Lazy_foldableLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_traversableLazy': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $map1 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($f, $l = null) use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($map1)(($__global_Data_Lazy_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const), ($f)(($__global_Data_Lazy_force)($l)));
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
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $map1 = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($l) use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force) {
  $__num = func_num_args();
  $__res = ($map1)(($__global_Data_Lazy_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const), ($__global_Data_Lazy_force)($l));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_functorLazy = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  $__res = $__global_Data_Lazy_functorLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_foldableLazy = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
  $__res = $__global_Data_Lazy_foldableLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_traverse': $v = (($GLOBALS['Data_Lazy_traversableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traversableLazy')))->traverse; break;
      case 'Data_Lazy_traversableWithIndexLazy': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_Lazy_traverse = ($GLOBALS['Data_Lazy_traverse'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traverse'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $traverse1 = ($__global_Data_Lazy_traverse)($dictApplicative);
  $__res = function($f) use ($traverse1, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($traverse1)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_functorWithIndexLazy = ($GLOBALS['Data_Lazy_functorWithIndexLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorWithIndexLazy'));
  $__res = $__global_Data_Lazy_functorWithIndexLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_foldableWithIndexLazy = ($GLOBALS['Data_Lazy_foldableWithIndexLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableWithIndexLazy'));
  $__res = $__global_Data_Lazy_foldableWithIndexLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_traversableLazy = ($GLOBALS['Data_Lazy_traversableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traversableLazy'));
  $__res = $__global_Data_Lazy_traversableLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_foldable1Lazy': $v = (object)["foldMap1" => (function() use (&$__fn) {
  $__fn = function($dictSemigroup, $f = null, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($l) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $l); };
    if ($__num === 1) return function($f, $l = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $l);
      if ($__num2 === 1) return function($l) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $l); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__res = ($f)(($__global_Data_Lazy_force)($l));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() use (&$__fn) {
  $__fn = function($v, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($v, &$__fn) { return $__fn($v, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__res = ($__global_Data_Lazy_force)($l);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() use (&$__fn) {
  $__fn = function($v, $l = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($v, &$__fn) { return $__fn($v, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__res = ($__global_Data_Lazy_force)($l);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_foldableLazy = ($GLOBALS['Data_Lazy_foldableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldableLazy'));
  $__res = $__global_Data_Lazy_foldableLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_traversable1Lazy': $v = (object)["traverse1" => function($dictApply) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $map1 = ((($dictApply)->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($f, $l = null) use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($l) use ($f, &$__fn) { return $__fn($f, $l); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($map1)(($__global_Data_Lazy_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const), ($f)(($__global_Data_Lazy_force)($l)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence1" => function($dictApply) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $map1 = ((($dictApply)->Functor0)($__global_Prim_undefined))->map;
  $__res = function($l) use ($map1, $__global_Data_Lazy_compose, $__global_Data_Lazy_defer, $__global_Data_Function_const, $__global_Data_Lazy_force) {
  $__num = func_num_args();
  $__res = ($map1)(($__global_Data_Lazy_compose)($__global_Data_Lazy_defer, $__global_Data_Function_const), ($__global_Data_Lazy_force)($l));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable10" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_foldable1Lazy = ($GLOBALS['Data_Lazy_foldable1Lazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_foldable1Lazy'));
  $__res = $__global_Data_Lazy_foldable1Lazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_traversableLazy = ($GLOBALS['Data_Lazy_traversableLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_traversableLazy'));
  $__res = $__global_Data_Lazy_traversableLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_extendLazy': $v = (object)["extend" => (function() use (&$__fn) {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($f, $x) {
  $__num = func_num_args();
  $__res = ($f)($x);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_functorLazy = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  $__res = $__global_Data_Lazy_functorLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_eq1Lazy': $v = (object)["eq1" => function($dictEq) {
  $__num = func_num_args();
  $__global_Data_Lazy_eqLazy = ($GLOBALS['Data_Lazy_eqLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eqLazy'));
  $__res = (($__global_Data_Lazy_eqLazy)($dictEq))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_ord1Lazy': $v = (object)["compare1" => function($dictOrd) {
  $__num = func_num_args();
  $__global_Data_Lazy_ordLazy = ($GLOBALS['Data_Lazy_ordLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ordLazy'));
  $__res = (($__global_Data_Lazy_ordLazy)($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Eq10" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_eq1Lazy = ($GLOBALS['Data_Lazy_eq1Lazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eq1Lazy'));
  $__res = $__global_Data_Lazy_eq1Lazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_comonadLazy': $v = (object)["extract" => ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force')), "Extend0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_extendLazy = ($GLOBALS['Data_Lazy_extendLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_extendLazy'));
  $__res = $__global_Data_Lazy_extendLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_applyLazy': $v = (object)["apply" => (function() use (&$__fn) {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($__global_Data_Lazy_force, $f, $x) {
  $__num = func_num_args();
  $__res = ($__global_Data_Lazy_force)($f, ($__global_Data_Lazy_force)($x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_functorLazy = ($GLOBALS['Data_Lazy_functorLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_functorLazy'));
  $__res = $__global_Data_Lazy_functorLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_apply': $v = (($GLOBALS['Data_Lazy_applyLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applyLazy')))->apply; break;
      case 'Data_Lazy_bindLazy': $v = (object)["bind" => (function() use (&$__fn) {
  $__fn = function($l, $f = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($l, &$__fn) { return $__fn($l, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($__global_Data_Lazy_force, $f, $l) {
  $__num = func_num_args();
  $__res = ($__global_Data_Lazy_force)(($f)(($__global_Data_Lazy_force)($l)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_applyLazy = ($GLOBALS['Data_Lazy_applyLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applyLazy'));
  $__res = $__global_Data_Lazy_applyLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_applicativeLazy': $v = (object)["pure" => function($a) {
  $__num = func_num_args();
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($a) {
  $__num = func_num_args();
  $__res = $a;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_applyLazy = ($GLOBALS['Data_Lazy_applyLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applyLazy'));
  $__res = $__global_Data_Lazy_applyLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Lazy_monadLazy': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_applicativeLazy = ($GLOBALS['Data_Lazy_applicativeLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_applicativeLazy'));
  $__res = $__global_Data_Lazy_applicativeLazy;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bind1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Lazy_bindLazy = ($GLOBALS['Data_Lazy_bindLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_bindLazy'));
  $__res = $__global_Data_Lazy_bindLazy;
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




// Data_Lazy_showLazy
function Data_Lazy_showLazy($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_showLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $show = ($dictShow)->show;
  $__res = (object)["show" => function($x) use ($show, $__global_Data_Lazy_force) {
  $__num = func_num_args();
  $__res = ("(defer \_ -> " . (($show)(($__global_Data_Lazy_force)($x)) . ")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_showLazy'] = __NAMESPACE__ . '\\Data_Lazy_showLazy';

// Data_Lazy_semiringLazy
function Data_Lazy_semiringLazy($dictSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_semiringLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $add = ($dictSemiring)->add;
  $zero = ($dictSemiring)->zero;
  $mul = ($dictSemiring)->mul;
  $one = ($dictSemiring)->one;
  $__res = (object)["add" => (function() use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $add, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($add, $__global_Data_Lazy_force, $a, $b) {
  $__num = func_num_args();
  $__res = ($add)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => ($__global_Data_Lazy_defer)(function($v) use ($zero) {
  $__num = func_num_args();
  $__res = $zero;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), "mul" => (function() use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $mul, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($mul, $__global_Data_Lazy_force, $a, $b) {
  $__num = func_num_args();
  $__res = ($mul)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => ($__global_Data_Lazy_defer)(function($v) use ($one) {
  $__num = func_num_args();
  $__res = $one;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_semiringLazy'] = __NAMESPACE__ . '\\Data_Lazy_semiringLazy';

// Data_Lazy_semigroupLazy
function Data_Lazy_semigroupLazy($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_semigroupLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $append1 = ($dictSemigroup)->append;
  $__res = (object)["append" => (function() use ($__global_Data_Lazy_defer, $append1, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $append1, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($append1, $__global_Data_Lazy_force, $a, $b) {
  $__num = func_num_args();
  $__res = ($append1)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_semigroupLazy'] = __NAMESPACE__ . '\\Data_Lazy_semigroupLazy';

// Data_Lazy_ringLazy
function Data_Lazy_ringLazy($dictRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_ringLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_semiringLazy = ($GLOBALS['Data_Lazy_semiringLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_semiringLazy'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $sub = ($dictRing)->sub;
  $semiringLazy1 = ($__global_Data_Lazy_semiringLazy)((($dictRing)->Semiring0)($__global_Prim_undefined));
  $__res = (object)["sub" => (function() use ($__global_Data_Lazy_defer, $sub, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $sub, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($sub, $__global_Data_Lazy_force, $a, $b) {
  $__num = func_num_args();
  $__res = ($sub)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => function($__dollar____unused) use ($semiringLazy1) {
  $__num = func_num_args();
  $__res = $semiringLazy1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_ringLazy'] = __NAMESPACE__ . '\\Data_Lazy_ringLazy';

// Data_Lazy_monoidLazy
function Data_Lazy_monoidLazy($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_monoidLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_semigroupLazy = ($GLOBALS['Data_Lazy_semigroupLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_semigroupLazy'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $mempty = ($dictMonoid)->mempty;
  $semigroupLazy1 = ($__global_Data_Lazy_semigroupLazy)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => ($__global_Data_Lazy_defer)(function($v) use ($mempty) {
  $__num = func_num_args();
  $__res = $mempty;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), "Semigroup0" => function($__dollar____unused) use ($semigroupLazy1) {
  $__num = func_num_args();
  $__res = $semigroupLazy1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_monoidLazy'] = __NAMESPACE__ . '\\Data_Lazy_monoidLazy';

















// Data_Lazy_eqLazy
function Data_Lazy_eqLazy($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_eqLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $eq = ($dictEq)->eq;
  $__res = (object)["eq" => (function() use ($eq, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($x, $y = null) use ($eq, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($eq)(($__global_Data_Lazy_force)($x), ($__global_Data_Lazy_force)($y));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_eqLazy'] = __NAMESPACE__ . '\\Data_Lazy_eqLazy';

// Data_Lazy_ordLazy
function Data_Lazy_ordLazy($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_ordLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_eqLazy = ($GLOBALS['Data_Lazy_eqLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_eqLazy'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $compare = ($dictOrd)->compare;
  $eqLazy1 = ($__global_Data_Lazy_eqLazy)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($x, $y = null) use ($compare, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($compare)(($__global_Data_Lazy_force)($x), ($__global_Data_Lazy_force)($y));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) use ($eqLazy1) {
  $__num = func_num_args();
  $__res = $eqLazy1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_ordLazy'] = __NAMESPACE__ . '\\Data_Lazy_ordLazy';




// Data_Lazy_commutativeRingLazy
function Data_Lazy_commutativeRingLazy($dictCommutativeRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_commutativeRingLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_ringLazy = ($GLOBALS['Data_Lazy_ringLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ringLazy'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $ringLazy1 = ($__global_Data_Lazy_ringLazy)((($dictCommutativeRing)->Ring0)($__global_Prim_undefined));
  $__res = (object)["Ring0" => function($__dollar____unused) use ($ringLazy1) {
  $__num = func_num_args();
  $__res = $ringLazy1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_commutativeRingLazy'] = __NAMESPACE__ . '\\Data_Lazy_commutativeRingLazy';

// Data_Lazy_euclideanRingLazy
function Data_Lazy_euclideanRingLazy($dictEuclideanRing) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_euclideanRingLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_commutativeRingLazy = ($GLOBALS['Data_Lazy_commutativeRingLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_commutativeRingLazy'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_compose = ($GLOBALS['Data_Lazy_compose'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_compose'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $div = ($dictEuclideanRing)->div;
  $mod = ($dictEuclideanRing)->mod;
  $commutativeRingLazy1 = ($__global_Data_Lazy_commutativeRingLazy)((($dictEuclideanRing)->CommutativeRing0)($__global_Prim_undefined));
  $__res = (object)["degree" => ($__global_Data_Lazy_compose)(($dictEuclideanRing)->degree, $__global_Data_Lazy_force), "div" => (function() use ($__global_Data_Lazy_defer, $div, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $div, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($div, $__global_Data_Lazy_force, $a, $b) {
  $__num = func_num_args();
  $__res = ($div)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mod" => (function() use ($__global_Data_Lazy_defer, $mod, $__global_Data_Lazy_force, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_defer, $mod, $__global_Data_Lazy_force, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($mod, $__global_Data_Lazy_force, $a, $b) {
  $__num = func_num_args();
  $__res = ($mod)(($__global_Data_Lazy_force)($a), ($__global_Data_Lazy_force)($b));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => function($__dollar____unused) use ($commutativeRingLazy1) {
  $__num = func_num_args();
  $__res = $commutativeRingLazy1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_euclideanRingLazy'] = __NAMESPACE__ . '\\Data_Lazy_euclideanRingLazy';

// Data_Lazy_boundedLazy
function Data_Lazy_boundedLazy($dictBounded) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_boundedLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_ordLazy = ($GLOBALS['Data_Lazy_ordLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_ordLazy'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $top = ($dictBounded)->top;
  $bottom = ($dictBounded)->bottom;
  $ordLazy1 = ($__global_Data_Lazy_ordLazy)((($dictBounded)->Ord0)($__global_Prim_undefined));
  $__res = (object)["top" => ($__global_Data_Lazy_defer)(function($v) use ($top) {
  $__num = func_num_args();
  $__res = $top;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), "bottom" => ($__global_Data_Lazy_defer)(function($v) use ($bottom) {
  $__num = func_num_args();
  $__res = $bottom;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), "Ord0" => function($__dollar____unused) use ($ordLazy1) {
  $__num = func_num_args();
  $__res = $ordLazy1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_boundedLazy'] = __NAMESPACE__ . '\\Data_Lazy_boundedLazy';




// Data_Lazy_heytingAlgebraLazy
function Data_Lazy_heytingAlgebraLazy($dictHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_heytingAlgebraLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_apply = ($GLOBALS['Data_Lazy_apply'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_apply'));
  $__global_Data_Lazy_map = ($GLOBALS['Data_Lazy_map'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_map'));
  $ff = ($dictHeytingAlgebra)->ff;
  $tt = ($dictHeytingAlgebra)->tt;
  $implies = ($dictHeytingAlgebra)->implies;
  $conj = ($dictHeytingAlgebra)->conj;
  $disj = ($dictHeytingAlgebra)->disj;
  $not = ($dictHeytingAlgebra)->not;
  $__res = (object)["ff" => ($__global_Data_Lazy_defer)(function($v) use ($ff) {
  $__num = func_num_args();
  $__res = $ff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), "tt" => ($__global_Data_Lazy_defer)(function($v) use ($tt) {
  $__num = func_num_args();
  $__res = $tt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), "implies" => (function() use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $implies, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $implies, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_apply)(($__global_Data_Lazy_map)($implies, $a), $b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $conj, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $conj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_apply)(($__global_Data_Lazy_map)($conj, $a), $b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $disj, &$__fn) {
  $__fn = function($a, $b = null) use ($__global_Data_Lazy_apply, $__global_Data_Lazy_map, $disj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_apply)(($__global_Data_Lazy_map)($disj, $a), $b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => function($a) use ($__global_Data_Lazy_map, $not) {
  $__num = func_num_args();
  $__res = ($__global_Data_Lazy_map)($not, $a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_heytingAlgebraLazy'] = __NAMESPACE__ . '\\Data_Lazy_heytingAlgebraLazy';

// Data_Lazy_booleanAlgebraLazy
function Data_Lazy_booleanAlgebraLazy($dictBooleanAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Lazy_booleanAlgebraLazy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_heytingAlgebraLazy = ($GLOBALS['Data_Lazy_heytingAlgebraLazy'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_heytingAlgebraLazy'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $heytingAlgebraLazy1 = ($__global_Data_Lazy_heytingAlgebraLazy)((($dictBooleanAlgebra)->HeytingAlgebra0)($__global_Prim_undefined));
  $__res = (object)["HeytingAlgebra0" => function($__dollar____unused) use ($heytingAlgebraLazy1) {
  $__num = func_num_args();
  $__res = $heytingAlgebraLazy1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Lazy_booleanAlgebraLazy'] = __NAMESPACE__ . '\\Data_Lazy_booleanAlgebraLazy';



