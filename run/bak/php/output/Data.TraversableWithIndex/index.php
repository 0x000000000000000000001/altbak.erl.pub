<?php

namespace Data\TraversableWithIndex;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
      case 'Data_TraversableWithIndex_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_TraversableWithIndex_traverse': $v = (($GLOBALS['Data_Traversable_traversableMultiplicative'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMultiplicative')))->traverse; break;
      case 'Data_TraversableWithIndex_traverse1': $v = (($GLOBALS['Data_Traversable_traversableMaybe'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMaybe')))->traverse; break;
      case 'Data_TraversableWithIndex_traverse2': $v = (($GLOBALS['Data_Traversable_traversableLast'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableLast')))->traverse; break;
      case 'Data_TraversableWithIndex_traverse3': $v = (($GLOBALS['Data_Traversable_traversableFirst'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableFirst')))->traverse; break;
      case 'Data_TraversableWithIndex_traverse4': $v = (($GLOBALS['Data_Traversable_traversableDual'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDual')))->traverse; break;
      case 'Data_TraversableWithIndex_traverse5': $v = (($GLOBALS['Data_Traversable_traversableDisj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDisj')))->traverse; break;
      case 'Data_TraversableWithIndex_traverse6': $v = (($GLOBALS['Data_Traversable_traversableConj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableConj')))->traverse; break;
      case 'Data_TraversableWithIndex_traverse7': $v = (($GLOBALS['Data_Traversable_traversableAdditive'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableAdditive')))->traverse; break;
      case 'Data_TraversableWithIndex_traversableWithIndexTuple': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, $__global_Data_Unit_unit, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Unit_unit, &$__fn) {
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
$x = ($__case_1)->v0;
$y = ($__case_1)->v1;
$__res = ($map)(((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())($x), ($f1)($__global_Data_Unit_unit, $y));
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
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexTuple = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexTuple'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexTuple'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexTuple = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexTuple'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexTuple'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableTuple = ($GLOBALS['Data_Traversable_traversableTuple'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableTuple'));
  $__res = $__global_Data_Traversable_traversableTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexMultiplicative': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_TraversableWithIndex_traverse = ($GLOBALS['Data_TraversableWithIndex_traverse'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $traverse8 = ($__global_Data_TraversableWithIndex_traverse)($dictApplicative);
  $__res = function($f) use ($traverse8, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexMultiplicative = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexMultiplicative'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexMultiplicative'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexMultiplicative = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexMultiplicative'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexMultiplicative'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableMultiplicative = ($GLOBALS['Data_Traversable_traversableMultiplicative'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMultiplicative'));
  $__res = $__global_Data_Traversable_traversableMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexMaybe': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_TraversableWithIndex_traverse1 = ($GLOBALS['Data_TraversableWithIndex_traverse1'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse1'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $traverse8 = ($__global_Data_TraversableWithIndex_traverse1)($dictApplicative);
  $__res = function($f) use ($traverse8, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexMaybe = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexMaybe'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexMaybe'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexMaybe = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexMaybe'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexMaybe'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableMaybe = ($GLOBALS['Data_Traversable_traversableMaybe'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMaybe'));
  $__res = $__global_Data_Traversable_traversableMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexLast': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_TraversableWithIndex_traverse2 = ($GLOBALS['Data_TraversableWithIndex_traverse2'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse2'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $traverse8 = ($__global_Data_TraversableWithIndex_traverse2)($dictApplicative);
  $__res = function($f) use ($traverse8, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexLast = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexLast'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexLast'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexLast;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexLast = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexLast'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexLast'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexLast;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableLast = ($GLOBALS['Data_Traversable_traversableLast'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableLast'));
  $__res = $__global_Data_Traversable_traversableLast;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexIdentity': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, $__global_Data_Identity_Identity, $__global_Data_Unit_unit, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Identity_Identity, $__global_Data_Unit_unit, &$__fn) {
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
$__res = ($map)($__global_Data_Identity_Identity, ($f1)($__global_Data_Unit_unit, $x));
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
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexIdentity = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexIdentity'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexIdentity'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexIdentity = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexIdentity'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexIdentity'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableIdentity = ($GLOBALS['Data_Traversable_traversableIdentity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableIdentity'));
  $__res = $__global_Data_Traversable_traversableIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexFirst': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_TraversableWithIndex_traverse3 = ($GLOBALS['Data_TraversableWithIndex_traverse3'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse3'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $traverse8 = ($__global_Data_TraversableWithIndex_traverse3)($dictApplicative);
  $__res = function($f) use ($traverse8, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexFirst = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexFirst'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexFirst'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexFirst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexFirst = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexFirst'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexFirst'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexFirst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableFirst = ($GLOBALS['Data_Traversable_traversableFirst'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableFirst'));
  $__res = $__global_Data_Traversable_traversableFirst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexEither': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $pure = ($dictApplicative)->pure;
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($pure, $map, $__global_Data_Unit_unit, &$__fn) {
  $__fn = function($v, $v1 = null) use ($pure, $map, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Left":
$x = ($__case_1)->v0;
$__res = ($pure)(new Phpurs_Data1("Left", $x));
goto __end;;
break;
case "Right":
$f = $__case_0;
$x = ($__case_1)->v0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($f)($__global_Data_Unit_unit, $x));
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
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexEither = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexEither'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexEither'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexEither = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexEither'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexEither'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableEither = ($GLOBALS['Data_Traversable_traversableEither'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableEither'));
  $__res = $__global_Data_Traversable_traversableEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexDual': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_TraversableWithIndex_traverse4 = ($GLOBALS['Data_TraversableWithIndex_traverse4'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse4'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $traverse8 = ($__global_Data_TraversableWithIndex_traverse4)($dictApplicative);
  $__res = function($f) use ($traverse8, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexDual = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexDual'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexDual'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexDual = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexDual'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexDual'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableDual = ($GLOBALS['Data_Traversable_traversableDual'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDual'));
  $__res = $__global_Data_Traversable_traversableDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexDisj': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_TraversableWithIndex_traverse5 = ($GLOBALS['Data_TraversableWithIndex_traverse5'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse5'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $traverse8 = ($__global_Data_TraversableWithIndex_traverse5)($dictApplicative);
  $__res = function($f) use ($traverse8, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexDisj = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexDisj'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexDisj'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexDisj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexDisj = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexDisj'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexDisj'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexDisj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableDisj = ($GLOBALS['Data_Traversable_traversableDisj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableDisj'));
  $__res = $__global_Data_Traversable_traversableDisj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexConst': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $pure = ($dictApplicative)->pure;
  $__res = (function() use ($pure, &$__fn) {
  $__fn = function($v, $v1 = null) use ($pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_1;
$__res = ($pure)($x);
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
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexConst = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexConst'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexConst'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexConst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexConst = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexConst'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexConst'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexConst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableConst = ($GLOBALS['Data_Traversable_traversableConst'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableConst'));
  $__res = $__global_Data_Traversable_traversableConst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexConj': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_TraversableWithIndex_traverse6 = ($GLOBALS['Data_TraversableWithIndex_traverse6'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse6'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $traverse8 = ($__global_Data_TraversableWithIndex_traverse6)($dictApplicative);
  $__res = function($f) use ($traverse8, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexConj = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexConj'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexConj'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexConj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexConj = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexConj'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexConj'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexConj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableConj = ($GLOBALS['Data_Traversable_traversableConj'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableConj'));
  $__res = $__global_Data_Traversable_traversableConj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexArray': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_TraversableWithIndex_traverseWithIndexDefault = ($GLOBALS['Data_TraversableWithIndex_traverseWithIndexDefault'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverseWithIndexDefault'));
  $__global_Data_TraversableWithIndex_traversableWithIndexArray = ($GLOBALS['Data_TraversableWithIndex_traversableWithIndexArray'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traversableWithIndexArray'));
  $__res = ($__global_Data_TraversableWithIndex_traverseWithIndexDefault)($__global_Data_TraversableWithIndex_traversableWithIndexArray, $dictApplicative);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexArray = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexArray'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexArray'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexArray;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexArray = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexArray'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexArray;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableArray = ($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray'));
  $__res = $__global_Data_Traversable_traversableArray;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_TraversableWithIndex_traversableWithIndexAdditive': $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_TraversableWithIndex_traverse7 = ($GLOBALS['Data_TraversableWithIndex_traverse7'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_traverse7'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $traverse8 = ($__global_Data_TraversableWithIndex_traverse7)($dictApplicative);
  $__res = function($f) use ($traverse8, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($traverse8)(($f)($__global_Data_Unit_unit));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FunctorWithIndex_functorWithIndexAdditive = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexAdditive'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexAdditive'));
  $__res = $__global_Data_FunctorWithIndex_functorWithIndexAdditive;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_FoldableWithIndex_foldableWithIndexAdditive = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexAdditive'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexAdditive'));
  $__res = $__global_Data_FoldableWithIndex_foldableWithIndexAdditive;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableAdditive = ($GLOBALS['Data_Traversable_traversableAdditive'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableAdditive'));
  $__res = $__global_Data_Traversable_traversableAdditive;
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











// Data_TraversableWithIndex_TraversableWithIndex$Dict
function Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_TraversableWithIndex__dollar__Dict';

// Data_TraversableWithIndex_traverseWithIndexDefault
function Data_TraversableWithIndex_traverseWithIndexDefault($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverseWithIndexDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_TraversableWithIndex_compose = ($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose'));
  $sequence = ((($dictTraversableWithIndex)->Traversable2)($__global_Prim_undefined))->sequence;
  $mapWithIndex = ((($dictTraversableWithIndex)->FunctorWithIndex0)($__global_Prim_undefined))->mapWithIndex;
  $__res = function($dictApplicative) use ($sequence, $__global_Data_TraversableWithIndex_compose, $mapWithIndex) {
  $__num = func_num_args();
  $sequence1 = ($sequence)($dictApplicative);
  $__res = function($f) use ($__global_Data_TraversableWithIndex_compose, $sequence1, $mapWithIndex) {
  $__num = func_num_args();
  $__res = ($__global_Data_TraversableWithIndex_compose)($sequence1, ($mapWithIndex)($f));
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
$GLOBALS['Data_TraversableWithIndex_traverseWithIndexDefault'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverseWithIndexDefault';

// Data_TraversableWithIndex_traverseWithIndex
function Data_TraversableWithIndex_traverseWithIndex($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverseWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->traverseWithIndex;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traverseWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverseWithIndex';

// Data_TraversableWithIndex_traverseDefault
function Data_TraversableWithIndex_traverseDefault($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traverseDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $traverseWithIndex1 = ($dictTraversableWithIndex)->traverseWithIndex;
  $__res = function($dictApplicative) use ($traverseWithIndex1, $__global_Data_Function_const) {
  $__num = func_num_args();
  $traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
  $__res = function($f) use ($traverseWithIndex2, $__global_Data_Function_const) {
  $__num = func_num_args();
  $__res = ($traverseWithIndex2)(($__global_Data_Function_const)($f));
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
$GLOBALS['Data_TraversableWithIndex_traverseDefault'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traverseDefault';


// Data_TraversableWithIndex_traversableWithIndexProduct
function Data_TraversableWithIndex_traversableWithIndexProduct($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traversableWithIndexProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_FunctorWithIndex_functorWithIndexProduct = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexProduct'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexProduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_FoldableWithIndex_foldableWithIndexProduct = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexProduct'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexProduct'));
  $__global_Data_Traversable_traversableProduct = ($GLOBALS['Data_Traversable_traversableProduct'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableProduct'));
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $__global_Data_TraversableWithIndex_compose = ($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose'));
  $traverseWithIndex1 = ($dictTraversableWithIndex)->traverseWithIndex;
  $functorWithIndexProduct = ($__global_Data_FunctorWithIndex_functorWithIndexProduct)((($dictTraversableWithIndex)->FunctorWithIndex0)($__global_Prim_undefined));
  $foldableWithIndexProduct = ($__global_Data_FoldableWithIndex_foldableWithIndexProduct)((($dictTraversableWithIndex)->FoldableWithIndex1)($__global_Prim_undefined));
  $traversableProduct = ($__global_Data_Traversable_traversableProduct)((($dictTraversableWithIndex)->Traversable2)($__global_Prim_undefined));
  $__res = function($dictTraversableWithIndex1) use ($functorWithIndexProduct, $__global_Prim_undefined, $foldableWithIndexProduct, $traversableProduct, $__global_Control_Apply_lift2, $traverseWithIndex1, $__global_Data_Functor_Product_product, $__global_Data_TraversableWithIndex_compose) {
  $__num = func_num_args();
  $traverseWithIndex2 = ($dictTraversableWithIndex1)->traverseWithIndex;
  $functorWithIndexProduct1 = ($functorWithIndexProduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)($__global_Prim_undefined));
  $foldableWithIndexProduct1 = ($foldableWithIndexProduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)($__global_Prim_undefined));
  $traversableProduct1 = ($traversableProduct)((($dictTraversableWithIndex1)->Traversable2)($__global_Prim_undefined));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use ($__global_Control_Apply_lift2, $__global_Prim_undefined, $traverseWithIndex1, $traverseWithIndex2, $__global_Data_Functor_Product_product, $__global_Data_TraversableWithIndex_compose) {
  $__num = func_num_args();
  $lift2 = ($__global_Control_Apply_lift2)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
  $traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
  $__res = (function() use ($lift2, $__global_Data_Functor_Product_product, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4, &$__fn) {
  $__fn = function($f, $v = null) use ($lift2, $__global_Data_Functor_Product_product, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4, &$__fn) {
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
$__res = ($lift2)($__global_Data_Functor_Product_product, ($traverseWithIndex3)(($__global_Data_TraversableWithIndex_compose)($f1, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $fa), ($traverseWithIndex4)(($__global_Data_TraversableWithIndex_compose)($f1, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $ga));
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
}, "FunctorWithIndex0" => function($__dollar____unused) use ($functorWithIndexProduct1) {
  $__num = func_num_args();
  $__res = $functorWithIndexProduct1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) use ($foldableWithIndexProduct1) {
  $__num = func_num_args();
  $__res = $foldableWithIndexProduct1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) use ($traversableProduct1) {
  $__num = func_num_args();
  $__res = $traversableProduct1;
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
$GLOBALS['Data_TraversableWithIndex_traversableWithIndexProduct'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traversableWithIndexProduct';









// Data_TraversableWithIndex_traversableWithIndexCoproduct
function Data_TraversableWithIndex_traversableWithIndexCoproduct($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traversableWithIndexCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_FunctorWithIndex_functorWithIndexCoproduct = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexCoproduct'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexCoproduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_FoldableWithIndex_foldableWithIndexCoproduct = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexCoproduct'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexCoproduct'));
  $__global_Data_Traversable_traversableCoproduct = ($GLOBALS['Data_Traversable_traversableCoproduct'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableCoproduct'));
  $__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
  $__global_Data_TraversableWithIndex_compose = ($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose'));
  $__global_Data_Functor_Coproduct_Coproduct = ($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct'));
  $traverseWithIndex1 = ($dictTraversableWithIndex)->traverseWithIndex;
  $functorWithIndexCoproduct = ($__global_Data_FunctorWithIndex_functorWithIndexCoproduct)((($dictTraversableWithIndex)->FunctorWithIndex0)($__global_Prim_undefined));
  $foldableWithIndexCoproduct = ($__global_Data_FoldableWithIndex_foldableWithIndexCoproduct)((($dictTraversableWithIndex)->FoldableWithIndex1)($__global_Prim_undefined));
  $traversableCoproduct = ($__global_Data_Traversable_traversableCoproduct)((($dictTraversableWithIndex)->Traversable2)($__global_Prim_undefined));
  $__res = function($dictTraversableWithIndex1) use ($functorWithIndexCoproduct, $__global_Prim_undefined, $foldableWithIndexCoproduct, $traversableCoproduct, $traverseWithIndex1, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_TraversableWithIndex_compose, $__global_Data_Functor_Coproduct_Coproduct) {
  $__num = func_num_args();
  $traverseWithIndex2 = ($dictTraversableWithIndex1)->traverseWithIndex;
  $functorWithIndexCoproduct1 = ($functorWithIndexCoproduct)((($dictTraversableWithIndex1)->FunctorWithIndex0)($__global_Prim_undefined));
  $foldableWithIndexCoproduct1 = ($foldableWithIndexCoproduct)((($dictTraversableWithIndex1)->FoldableWithIndex1)($__global_Prim_undefined));
  $traversableCoproduct1 = ($traversableCoproduct)((($dictTraversableWithIndex1)->Traversable2)($__global_Prim_undefined));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use ($__global_Prim_undefined, $traverseWithIndex1, $traverseWithIndex2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_TraversableWithIndex_compose, $__global_Data_Functor_Coproduct_Coproduct) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
  $traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
  $__res = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $__global_Data_TraversableWithIndex_compose, $map, $__global_Data_Functor_Coproduct_Coproduct, $traverseWithIndex3, $traverseWithIndex4) {
  $__num = func_num_args();
  $__res = ($__global_Data_Functor_Coproduct_coproduct)(($__global_Data_TraversableWithIndex_compose)(($map)(($__global_Data_TraversableWithIndex_compose)($__global_Data_Functor_Coproduct_Coproduct, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), ($traverseWithIndex3)(($__global_Data_TraversableWithIndex_compose)($f, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}))), ($__global_Data_TraversableWithIndex_compose)(($map)(($__global_Data_TraversableWithIndex_compose)($__global_Data_Functor_Coproduct_Coproduct, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), ($traverseWithIndex4)(($__global_Data_TraversableWithIndex_compose)($f, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($__dollar____unused) use ($functorWithIndexCoproduct1) {
  $__num = func_num_args();
  $__res = $functorWithIndexCoproduct1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) use ($foldableWithIndexCoproduct1) {
  $__num = func_num_args();
  $__res = $foldableWithIndexCoproduct1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) use ($traversableCoproduct1) {
  $__num = func_num_args();
  $__res = $traversableCoproduct1;
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
$GLOBALS['Data_TraversableWithIndex_traversableWithIndexCoproduct'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traversableWithIndexCoproduct';



// Data_TraversableWithIndex_traversableWithIndexCompose
function Data_TraversableWithIndex_traversableWithIndexCompose($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traversableWithIndexCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_FunctorWithIndex_functorWithIndexCompose = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexCompose'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_FoldableWithIndex_foldableWithIndexCompose = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexCompose'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexCompose'));
  $__global_Data_Traversable_traversableCompose = ($GLOBALS['Data_Traversable_traversableCompose'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableCompose'));
  $__global_Data_Functor_Compose_Compose = ($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose'));
  $__global_Data_TraversableWithIndex_compose = ($GLOBALS['Data_TraversableWithIndex_compose'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_compose'));
  $__global_Data_Tuple_curry = ($GLOBALS['Data_Tuple_curry'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_curry'));
  $traverseWithIndex1 = ($dictTraversableWithIndex)->traverseWithIndex;
  $functorWithIndexCompose = ($__global_Data_FunctorWithIndex_functorWithIndexCompose)((($dictTraversableWithIndex)->FunctorWithIndex0)($__global_Prim_undefined));
  $foldableWithIndexCompose = ($__global_Data_FoldableWithIndex_foldableWithIndexCompose)((($dictTraversableWithIndex)->FoldableWithIndex1)($__global_Prim_undefined));
  $traversableCompose = ($__global_Data_Traversable_traversableCompose)((($dictTraversableWithIndex)->Traversable2)($__global_Prim_undefined));
  $__res = function($dictTraversableWithIndex1) use ($functorWithIndexCompose, $__global_Prim_undefined, $foldableWithIndexCompose, $traversableCompose, $traverseWithIndex1, $__global_Data_Functor_Compose_Compose, $__global_Data_TraversableWithIndex_compose, $__global_Data_Tuple_curry) {
  $__num = func_num_args();
  $traverseWithIndex2 = ($dictTraversableWithIndex1)->traverseWithIndex;
  $functorWithIndexCompose1 = ($functorWithIndexCompose)((($dictTraversableWithIndex1)->FunctorWithIndex0)($__global_Prim_undefined));
  $foldableWithIndexCompose1 = ($foldableWithIndexCompose)((($dictTraversableWithIndex1)->FoldableWithIndex1)($__global_Prim_undefined));
  $traversableCompose1 = ($traversableCompose)((($dictTraversableWithIndex1)->Traversable2)($__global_Prim_undefined));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use ($__global_Prim_undefined, $traverseWithIndex1, $traverseWithIndex2, $__global_Data_Functor_Compose_Compose, $__global_Data_TraversableWithIndex_compose, $__global_Data_Tuple_curry) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverseWithIndex3 = ($traverseWithIndex1)($dictApplicative);
  $traverseWithIndex4 = ($traverseWithIndex2)($dictApplicative);
  $__res = (function() use ($map, $__global_Data_Functor_Compose_Compose, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4, $__global_Data_Tuple_curry, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_Compose_Compose, $traverseWithIndex3, $__global_Data_TraversableWithIndex_compose, $traverseWithIndex4, $__global_Data_Tuple_curry, &$__fn) {
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
$__res = ($map)($__global_Data_Functor_Compose_Compose, ($traverseWithIndex3)(($__global_Data_TraversableWithIndex_compose)($traverseWithIndex4, ($__global_Data_Tuple_curry)($f1)), $fga));
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
}, "FunctorWithIndex0" => function($__dollar____unused) use ($functorWithIndexCompose1) {
  $__num = func_num_args();
  $__res = $functorWithIndexCompose1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) use ($foldableWithIndexCompose1) {
  $__num = func_num_args();
  $__res = $foldableWithIndexCompose1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) use ($traversableCompose1) {
  $__num = func_num_args();
  $__res = $traversableCompose1;
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
$GLOBALS['Data_TraversableWithIndex_traversableWithIndexCompose'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traversableWithIndexCompose';


// Data_TraversableWithIndex_traversableWithIndexApp
function Data_TraversableWithIndex_traversableWithIndexApp($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_traversableWithIndexApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_FunctorWithIndex_functorWithIndexApp = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexApp'] ?? \Data\FunctorWithIndex\phpurs_eval_thunk('Data_FunctorWithIndex_functorWithIndexApp'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_FoldableWithIndex_foldableWithIndexApp = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexApp'] ?? \Data\FoldableWithIndex\phpurs_eval_thunk('Data_FoldableWithIndex_foldableWithIndexApp'));
  $__global_Data_Traversable_traversableApp = ($GLOBALS['Data_Traversable_traversableApp'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableApp'));
  $__global_Data_Functor_App_App = ($GLOBALS['Data_Functor_App_App'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_App'));
  $traverseWithIndex1 = ($dictTraversableWithIndex)->traverseWithIndex;
  $functorWithIndexApp = ($__global_Data_FunctorWithIndex_functorWithIndexApp)((($dictTraversableWithIndex)->FunctorWithIndex0)($__global_Prim_undefined));
  $foldableWithIndexApp = ($__global_Data_FoldableWithIndex_foldableWithIndexApp)((($dictTraversableWithIndex)->FoldableWithIndex1)($__global_Prim_undefined));
  $traversableApp = ($__global_Data_Traversable_traversableApp)((($dictTraversableWithIndex)->Traversable2)($__global_Prim_undefined));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use ($__global_Prim_undefined, $traverseWithIndex1, $__global_Data_Functor_App_App) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverseWithIndex2 = ($traverseWithIndex1)($dictApplicative);
  $__res = (function() use ($map, $__global_Data_Functor_App_App, $traverseWithIndex2, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_App_App, $traverseWithIndex2, &$__fn) {
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
$__res = ($map)($__global_Data_Functor_App_App, ($traverseWithIndex2)($f1, $x));
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
}, "FunctorWithIndex0" => function($__dollar____unused) use ($functorWithIndexApp) {
  $__num = func_num_args();
  $__res = $functorWithIndexApp;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($__dollar____unused) use ($foldableWithIndexApp) {
  $__num = func_num_args();
  $__res = $foldableWithIndexApp;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Traversable2" => function($__dollar____unused) use ($traversableApp) {
  $__num = func_num_args();
  $__res = $traversableApp;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_traversableWithIndexApp'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_traversableWithIndexApp';


// Data_TraversableWithIndex_mapAccumRWithIndex
function Data_TraversableWithIndex_mapAccumRWithIndex($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_mapAccumRWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Traversable_Accum_Internal_applicativeStateR = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateR'));
  $__global_Data_Traversable_Accum_Internal_stateR = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateR'));
  $traverseWithIndex1 = (($dictTraversableWithIndex)->traverseWithIndex)($__global_Data_Traversable_Accum_Internal_applicativeStateR);
  $__res = (function() use ($__global_Data_Traversable_Accum_Internal_stateR, $traverseWithIndex1, &$__fn) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateR, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($__global_Data_Traversable_Accum_Internal_stateR)(($traverseWithIndex1)((function() use ($f, &$__fn) {
  $__fn = function($i, $a = null, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
    if ($__num === 1) return function($a, $s = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $s);
      if ($__num2 === 1) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($f)($i, $s, $a);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
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
$GLOBALS['Data_TraversableWithIndex_mapAccumRWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_mapAccumRWithIndex';

// Data_TraversableWithIndex_scanrWithIndex
function Data_TraversableWithIndex_scanrWithIndex($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_scanrWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_TraversableWithIndex_mapAccumRWithIndex = ($GLOBALS['Data_TraversableWithIndex_mapAccumRWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_mapAccumRWithIndex'));
  $mapAccumRWithIndex1 = ($__global_Data_TraversableWithIndex_mapAccumRWithIndex)($dictTraversableWithIndex);
  $__res = (function() use ($mapAccumRWithIndex1, &$__fn) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumRWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
    if ($__num === 1) return function($b0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = (($mapAccumRWithIndex1)((function() use ($f, &$__fn) {
  $__fn = function($i, $b = null, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($i, $b, &$__fn) { return $__fn($i, $b, $a); };
    if ($__num === 1) return function($b, $a = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $b, $a);
      if ($__num2 === 1) return function($a) use ($i, $b, &$__fn) { return $__fn($i, $b, $a); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $b__prime__ = ($f)($i, $a, $b);
  $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
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
$GLOBALS['Data_TraversableWithIndex_scanrWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_scanrWithIndex';

// Data_TraversableWithIndex_mapAccumLWithIndex
function Data_TraversableWithIndex_mapAccumLWithIndex($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_mapAccumLWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Traversable_Accum_Internal_applicativeStateL = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateL'));
  $__global_Data_Traversable_Accum_Internal_stateL = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateL'));
  $traverseWithIndex1 = (($dictTraversableWithIndex)->traverseWithIndex)($__global_Data_Traversable_Accum_Internal_applicativeStateL);
  $__res = (function() use ($__global_Data_Traversable_Accum_Internal_stateL, $traverseWithIndex1, &$__fn) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateL, $traverseWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
    if ($__num === 1) return function($s0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $s0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $s0, &$__fn) { return $__fn($f, $s0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($__global_Data_Traversable_Accum_Internal_stateL)(($traverseWithIndex1)((function() use ($f, &$__fn) {
  $__fn = function($i, $a = null, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
    if ($__num === 1) return function($a, $s = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $a, $s);
      if ($__num2 === 1) return function($s) use ($i, $a, &$__fn) { return $__fn($i, $a, $s); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($f)($i, $s, $a);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $xs), $s0);
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
$GLOBALS['Data_TraversableWithIndex_mapAccumLWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_mapAccumLWithIndex';

// Data_TraversableWithIndex_scanlWithIndex
function Data_TraversableWithIndex_scanlWithIndex($dictTraversableWithIndex) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_scanlWithIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_TraversableWithIndex_mapAccumLWithIndex = ($GLOBALS['Data_TraversableWithIndex_mapAccumLWithIndex'] ?? \Data\TraversableWithIndex\phpurs_eval_thunk('Data_TraversableWithIndex_mapAccumLWithIndex'));
  $mapAccumLWithIndex1 = ($__global_Data_TraversableWithIndex_mapAccumLWithIndex)($dictTraversableWithIndex);
  $__res = (function() use ($mapAccumLWithIndex1, &$__fn) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumLWithIndex1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
    if ($__num === 1) return function($b0, $xs = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $b0, $xs);
      if ($__num2 === 1) return function($xs) use ($f, $b0, &$__fn) { return $__fn($f, $b0, $xs); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = (($mapAccumLWithIndex1)((function() use ($f, &$__fn) {
  $__fn = function($i, $b = null, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($i, $b, &$__fn) { return $__fn($i, $b, $a); };
    if ($__num === 1) return function($b, $a = null) use ($i, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($i, $b, $a);
      if ($__num2 === 1) return function($a) use ($i, $b, &$__fn) { return $__fn($i, $b, $a); };
      return phpurs_curry_fallback($__fn, [$i], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $b__prime__ = ($f)($i, $b, $a);
  $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $b0, $xs))->value;
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
$GLOBALS['Data_TraversableWithIndex_scanlWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_scanlWithIndex';

// Data_TraversableWithIndex_forWithIndex
function Data_TraversableWithIndex_forWithIndex($dictApplicative, $dictTraversableWithIndex = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_TraversableWithIndex_forWithIndex';
  if ($__num < 2) {
    if ($__num === 1) return function($dictTraversableWithIndex) use ($dictApplicative, $__fn) { return $__fn($dictApplicative, $dictTraversableWithIndex); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__res = ($__global_Data_Function_flip)((($dictTraversableWithIndex)->traverseWithIndex)($dictApplicative));
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_TraversableWithIndex_forWithIndex'] = __NAMESPACE__ . '\\Data_TraversableWithIndex_forWithIndex';

