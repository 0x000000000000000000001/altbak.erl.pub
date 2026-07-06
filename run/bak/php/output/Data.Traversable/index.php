<?php

namespace Data\Traversable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
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
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Data_Traversable_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Traversable_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Traversable_traversableTuple': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, &$__fn) {
  $__fn = function($f, $v = null) use ($map, &$__fn) {
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
})())($x), ($f1)($y));
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
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($map) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$x = ($__case_0)->v0;
$y = ($__case_0)->v1;
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
})())($x), $y);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Tuple_functorTuple = ($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple'));
  $__res = $__global_Data_Tuple_functorTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableTuple = ($GLOBALS['Data_Foldable_foldableTuple'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableTuple'));
  $__res = $__global_Data_Foldable_foldableTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableMultiplicative': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Multiplicative_Multiplicative = ($GLOBALS['Data_Monoid_Multiplicative_Multiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_Multiplicative'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, $__global_Data_Monoid_Multiplicative_Multiplicative, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Multiplicative_Multiplicative, &$__fn) {
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
$__res = ($map)($__global_Data_Monoid_Multiplicative_Multiplicative, ($f1)($x));
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
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Multiplicative_Multiplicative = ($GLOBALS['Data_Monoid_Multiplicative_Multiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_Multiplicative'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($map, $__global_Data_Monoid_Multiplicative_Multiplicative) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($map)($__global_Data_Monoid_Multiplicative_Multiplicative, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Monoid_Multiplicative_functorMultiplicative = ($GLOBALS['Data_Monoid_Multiplicative_functorMultiplicative'] ?? \Data\Monoid\Multiplicative\phpurs_eval_thunk('Data_Monoid_Multiplicative_functorMultiplicative'));
  $__res = $__global_Data_Monoid_Multiplicative_functorMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableMultiplicative = ($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMultiplicative'));
  $__res = $__global_Data_Foldable_foldableMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableMaybe': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = ($dictApplicative)->pure;
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($pure, $map, &$__fn) {
  $__fn = function($v, $v1 = null) use ($pure, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Nothing":
$__res = ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
goto __end;;
break;
case "Just":
$f = $__case_0;
$x = ($__case_1)->v0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($f)($x));
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
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = ($dictApplicative)->pure;
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($pure, $map) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nothing":
$__res = ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
goto __end;;
break;
case "Just":
$x = ($__case_0)->v0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__res = $__global_Data_Maybe_functorMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableMaybe = ($GLOBALS['Data_Foldable_foldableMaybe'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMaybe'));
  $__res = $__global_Data_Foldable_foldableMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traverse1': $v = (($GLOBALS['Data_Traversable_traversableMaybe'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMaybe')))->traverse; break;
      case 'Data_Traversable_traversableIdentity': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, $__global_Data_Identity_Identity, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Identity_Identity, &$__fn) {
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
$__res = ($map)($__global_Data_Identity_Identity, ($f1)($x));
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
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($map, $__global_Data_Identity_Identity) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($map)($__global_Data_Identity_Identity, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Identity_functorIdentity = ($GLOBALS['Data_Identity_functorIdentity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_functorIdentity'));
  $__res = $__global_Data_Identity_functorIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableIdentity = ($GLOBALS['Data_Foldable_foldableIdentity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableIdentity'));
  $__res = $__global_Data_Foldable_foldableIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableEither': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = ($dictApplicative)->pure;
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($pure, $map, &$__fn) {
  $__fn = function($v, $v1 = null) use ($pure, $map, &$__fn) {
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
}, ($f)($x));
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
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $pure = ($dictApplicative)->pure;
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($pure, $map) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Left":
$x = ($__case_0)->v0;
$__res = ($pure)(new Phpurs_Data1("Left", $x));
goto __end;;
break;
case "Right":
$x = ($__case_0)->v0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Either_functorEither = ($GLOBALS['Data_Either_functorEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_functorEither'));
  $__res = $__global_Data_Either_functorEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableEither = ($GLOBALS['Data_Foldable_foldableEither'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableEither'));
  $__res = $__global_Data_Foldable_foldableEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableDual': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, $__global_Data_Monoid_Dual_Dual, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Dual_Dual, &$__fn) {
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
$__res = ($map)($__global_Data_Monoid_Dual_Dual, ($f1)($x));
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
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($map, $__global_Data_Monoid_Dual_Dual) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($map)($__global_Data_Monoid_Dual_Dual, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Monoid_Dual_functorDual = ($GLOBALS['Data_Monoid_Dual_functorDual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_functorDual'));
  $__res = $__global_Data_Monoid_Dual_functorDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableDual = ($GLOBALS['Data_Foldable_foldableDual'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDual'));
  $__res = $__global_Data_Foldable_foldableDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableDisj': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, $__global_Data_Monoid_Disj_Disj, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Disj_Disj, &$__fn) {
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
$__res = ($map)($__global_Data_Monoid_Disj_Disj, ($f1)($x));
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
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Disj_Disj = ($GLOBALS['Data_Monoid_Disj_Disj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_Disj'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($map, $__global_Data_Monoid_Disj_Disj) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($map)($__global_Data_Monoid_Disj_Disj, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Monoid_Disj_functorDisj = ($GLOBALS['Data_Monoid_Disj_functorDisj'] ?? \Data\Monoid\Disj\phpurs_eval_thunk('Data_Monoid_Disj_functorDisj'));
  $__res = $__global_Data_Monoid_Disj_functorDisj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableDisj = ($GLOBALS['Data_Foldable_foldableDisj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDisj'));
  $__res = $__global_Data_Foldable_foldableDisj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableConst': $v = (object)["traverse" => function($dictApplicative) {
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
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $pure = ($dictApplicative)->pure;
  $__res = function($v) use ($pure) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($pure)($x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Const_functorConst = ($GLOBALS['Data_Const_functorConst'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_functorConst'));
  $__res = $__global_Data_Const_functorConst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableConst = ($GLOBALS['Data_Foldable_foldableConst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConst'));
  $__res = $__global_Data_Foldable_foldableConst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableConj': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, $__global_Data_Monoid_Conj_Conj, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Conj_Conj, &$__fn) {
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
$__res = ($map)($__global_Data_Monoid_Conj_Conj, ($f1)($x));
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
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Conj_Conj = ($GLOBALS['Data_Monoid_Conj_Conj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_Conj'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($map, $__global_Data_Monoid_Conj_Conj) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($map)($__global_Data_Monoid_Conj_Conj, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Monoid_Conj_functorConj = ($GLOBALS['Data_Monoid_Conj_functorConj'] ?? \Data\Monoid\Conj\phpurs_eval_thunk('Data_Monoid_Conj_functorConj'));
  $__res = $__global_Data_Monoid_Conj_functorConj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableConj = ($GLOBALS['Data_Foldable_foldableConj'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableConj'));
  $__res = $__global_Data_Foldable_foldableConj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableAdditive': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Additive_Additive = ($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, $__global_Data_Monoid_Additive_Additive, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Monoid_Additive_Additive, &$__fn) {
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
$__res = ($map)($__global_Data_Monoid_Additive_Additive, ($f1)($x));
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
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Monoid_Additive_Additive = ($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($map, $__global_Data_Monoid_Additive_Additive) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($map)($__global_Data_Monoid_Additive_Additive, $x);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Monoid_Additive_functorAdditive = ($GLOBALS['Data_Monoid_Additive_functorAdditive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_functorAdditive'));
  $__res = $__global_Data_Monoid_Additive_functorAdditive;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableAdditive = ($GLOBALS['Data_Foldable_foldableAdditive'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableAdditive'));
  $__res = $__global_Data_Foldable_foldableAdditive;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableArray': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Traversable_traverseArrayImpl = ($GLOBALS['Data_Traversable_traverseArrayImpl'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverseArrayImpl'));
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $__res = ($__global_Data_Traversable_traverseArrayImpl)(($Apply0)->apply, ((($Apply0)->Functor0)($__global_Prim_undefined))->map, ($dictApplicative)->pure);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Data_Traversable_sequenceDefault = ($GLOBALS['Data_Traversable_sequenceDefault'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequenceDefault'));
  $__global_Data_Traversable_traversableArray = ($GLOBALS['Data_Traversable_traversableArray'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableArray'));
  $__res = ($__global_Data_Traversable_sequenceDefault)($__global_Data_Traversable_traversableArray, $dictApplicative);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Functor_functorArray = ($GLOBALS['Data_Functor_functorArray'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_functorArray'));
  $__res = $__global_Data_Functor_functorArray;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableArray = ($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray'));
  $__res = $__global_Data_Foldable_foldableArray;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_sequence1': $v = (($GLOBALS['Data_Traversable_traversableMaybe'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableMaybe')))->sequence; break;
      case 'Data_Traversable_traversableFirst': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Traversable_traverse1 = ($GLOBALS['Data_Traversable_traverse1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse1'));
  $__global_Data_Maybe_First_First = ($GLOBALS['Data_Maybe_First_First'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_First'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverse2 = ($__global_Data_Traversable_traverse1)($dictApplicative);
  $__res = (function() use ($map, $__global_Data_Maybe_First_First, $traverse2, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Maybe_First_First, $traverse2, &$__fn) {
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
$__res = ($map)($__global_Data_Maybe_First_First, ($traverse2)($f1, $x));
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
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Traversable_sequence1 = ($GLOBALS['Data_Traversable_sequence1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence1'));
  $__global_Data_Maybe_First_First = ($GLOBALS['Data_Maybe_First_First'] ?? \Data\Maybe\First\phpurs_eval_thunk('Data_Maybe_First_First'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $sequence2 = ($__global_Data_Traversable_sequence1)($dictApplicative);
  $__res = function($v) use ($map, $__global_Data_Maybe_First_First, $sequence2) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($map)($__global_Data_Maybe_First_First, ($sequence2)($x));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__res = $__global_Data_Maybe_functorMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableFirst = ($GLOBALS['Data_Foldable_foldableFirst'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableFirst'));
  $__res = $__global_Data_Foldable_foldableFirst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_traversableLast': $v = (object)["traverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Traversable_traverse1 = ($GLOBALS['Data_Traversable_traverse1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traverse1'));
  $__global_Data_Maybe_Last_Last = ($GLOBALS['Data_Maybe_Last_Last'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_Last'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverse2 = ($__global_Data_Traversable_traverse1)($dictApplicative);
  $__res = (function() use ($map, $__global_Data_Maybe_Last_Last, $traverse2, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Maybe_Last_Last, $traverse2, &$__fn) {
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
$__res = ($map)($__global_Data_Maybe_Last_Last, ($traverse2)($f1, $x));
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
}, "sequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Traversable_sequence1 = ($GLOBALS['Data_Traversable_sequence1'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_sequence1'));
  $__global_Data_Maybe_Last_Last = ($GLOBALS['Data_Maybe_Last_Last'] ?? \Data\Maybe\Last\phpurs_eval_thunk('Data_Maybe_Last_Last'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $sequence2 = ($__global_Data_Traversable_sequence1)($dictApplicative);
  $__res = function($v) use ($map, $__global_Data_Maybe_Last_Last, $sequence2) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($map)($__global_Data_Maybe_Last_Last, ($sequence2)($x));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Maybe_functorMaybe = ($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe'));
  $__res = $__global_Data_Maybe_functorMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableLast = ($GLOBALS['Data_Foldable_foldableLast'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableLast'));
  $__res = $__global_Data_Foldable_foldableLast;
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




// Data_Traversable_Traversable$Dict
function Data_Traversable_Traversable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_Traversable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_Traversable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Traversable_Traversable__dollar__Dict';

// Data_Traversable_traverse
function Data_Traversable_traverse($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->traverse;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_traverse'] = __NAMESPACE__ . '\\Data_Traversable_traverse';











// Data_Traversable_traversableCompose
function Data_Traversable_traversableCompose($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traversableCompose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Compose_functorCompose = ($GLOBALS['Data_Functor_Compose_functorCompose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_functorCompose'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_foldableCompose = ($GLOBALS['Data_Foldable_foldableCompose'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableCompose'));
  $__global_Data_Functor_Compose_Compose = ($GLOBALS['Data_Functor_Compose_Compose'] ?? \Data\Functor\Compose\phpurs_eval_thunk('Data_Functor_Compose_Compose'));
  $__global_Data_Traversable_identity = ($GLOBALS['Data_Traversable_identity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_identity'));
  while (true) {
$traverse2 = ($dictTraversable)->traverse;
$functorCompose = ($__global_Data_Functor_Compose_functorCompose)((($dictTraversable)->Functor0)($__global_Prim_undefined));
$foldableCompose = ($__global_Data_Foldable_foldableCompose)((($dictTraversable)->Foldable1)($__global_Prim_undefined));
$__res = function($dictTraversable1) use ($functorCompose, $__global_Prim_undefined, $foldableCompose, $traverse2, $__global_Data_Functor_Compose_Compose, $dictTraversable, $__global_Data_Traversable_identity) {
  $__num = func_num_args();
  $__global_Data_Traversable_traversableCompose = ($GLOBALS['Data_Traversable_traversableCompose'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_traversableCompose'));
  $traverse3 = ($dictTraversable1)->traverse;
  $functorCompose1 = ($functorCompose)((($dictTraversable1)->Functor0)($__global_Prim_undefined));
  $foldableCompose1 = ($foldableCompose)((($dictTraversable1)->Foldable1)($__global_Prim_undefined));
  $__res = (object)["traverse" => function($dictApplicative) use ($__global_Prim_undefined, $traverse2, $traverse3, $__global_Data_Functor_Compose_Compose) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverse4 = ($traverse2)($dictApplicative);
  $traverse5 = ($traverse3)($dictApplicative);
  $__res = (function() use ($map, $__global_Data_Functor_Compose_Compose, $traverse4, $traverse5, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_Compose_Compose, $traverse4, $traverse5, &$__fn) {
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
$__res = ($map)($__global_Data_Functor_Compose_Compose, ($traverse4)(($traverse5)($f1), $fga));
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
}, "sequence" => function($dictApplicative) use ($__global_Data_Traversable_traversableCompose, $dictTraversable, $dictTraversable1, $__global_Data_Traversable_identity) {
  $__num = func_num_args();
  $__res = ((($__global_Data_Traversable_traversableCompose)($dictTraversable, $dictTraversable1))->traverse)($dictApplicative, $__global_Data_Traversable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) use ($functorCompose1) {
  $__num = func_num_args();
  $__res = $functorCompose1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) use ($foldableCompose1) {
  $__num = func_num_args();
  $__res = $foldableCompose1;
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
$GLOBALS['Data_Traversable_traversableCompose'] = __NAMESPACE__ . '\\Data_Traversable_traversableCompose';


// Data_Traversable_sequenceDefault
function Data_Traversable_sequenceDefault($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_sequenceDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Traversable_identity = ($GLOBALS['Data_Traversable_identity'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_identity'));
  $traverse2 = ($dictTraversable)->traverse;
  $__res = function($dictApplicative) use ($traverse2, $__global_Data_Traversable_identity) {
  $__num = func_num_args();
  $__res = ($traverse2)($dictApplicative, $__global_Data_Traversable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_sequenceDefault'] = __NAMESPACE__ . '\\Data_Traversable_sequenceDefault';


// Data_Traversable_sequence
function Data_Traversable_sequence($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_sequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->sequence;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_sequence'] = __NAMESPACE__ . '\\Data_Traversable_sequence';


// Data_Traversable_traversableApp
function Data_Traversable_traversableApp($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traversableApp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_foldableApp = ($GLOBALS['Data_Foldable_foldableApp'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableApp'));
  $__global_Data_Functor_App_App = ($GLOBALS['Data_Functor_App_App'] ?? \Data\Functor\App\phpurs_eval_thunk('Data_Functor_App_App'));
  $traverse2 = ($dictTraversable)->traverse;
  $sequence2 = ($dictTraversable)->sequence;
  $functorApp = (($dictTraversable)->Functor0)($__global_Prim_undefined);
  $foldableApp = ($__global_Data_Foldable_foldableApp)((($dictTraversable)->Foldable1)($__global_Prim_undefined));
  $__res = (object)["traverse" => function($dictApplicative) use ($__global_Prim_undefined, $traverse2, $__global_Data_Functor_App_App) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverse3 = ($traverse2)($dictApplicative);
  $__res = (function() use ($map, $__global_Data_Functor_App_App, $traverse3, &$__fn) {
  $__fn = function($f, $v = null) use ($map, $__global_Data_Functor_App_App, $traverse3, &$__fn) {
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
$__res = ($map)($__global_Data_Functor_App_App, ($traverse3)($f1, $x));
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
}, "sequence" => function($dictApplicative) use ($__global_Prim_undefined, $sequence2, $__global_Data_Functor_App_App) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $sequence3 = ($sequence2)($dictApplicative);
  $__res = function($v) use ($map, $__global_Data_Functor_App_App, $sequence3) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($map)($__global_Data_Functor_App_App, ($sequence3)($x));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) use ($functorApp) {
  $__num = func_num_args();
  $__res = $functorApp;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) use ($foldableApp) {
  $__num = func_num_args();
  $__res = $foldableApp;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_traversableApp'] = __NAMESPACE__ . '\\Data_Traversable_traversableApp';

// Data_Traversable_traversableCoproduct
function Data_Traversable_traversableCoproduct($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traversableCoproduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Coproduct_functorCoproduct = ($GLOBALS['Data_Functor_Coproduct_functorCoproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_functorCoproduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_foldableCoproduct = ($GLOBALS['Data_Foldable_foldableCoproduct'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableCoproduct'));
  $__global_Data_Functor_Coproduct_coproduct = ($GLOBALS['Data_Functor_Coproduct_coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_coproduct'));
  $__global_Data_Traversable_compose = ($GLOBALS['Data_Traversable_compose'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_compose'));
  $__global_Data_Functor_Coproduct_Coproduct = ($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \Data\Functor\Coproduct\phpurs_eval_thunk('Data_Functor_Coproduct_Coproduct'));
  $traverse2 = ($dictTraversable)->traverse;
  $sequence2 = ($dictTraversable)->sequence;
  $functorCoproduct = ($__global_Data_Functor_Coproduct_functorCoproduct)((($dictTraversable)->Functor0)($__global_Prim_undefined));
  $foldableCoproduct = ($__global_Data_Foldable_foldableCoproduct)((($dictTraversable)->Foldable1)($__global_Prim_undefined));
  $__res = function($dictTraversable1) use ($functorCoproduct, $__global_Prim_undefined, $foldableCoproduct, $traverse2, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2) {
  $__num = func_num_args();
  $traverse3 = ($dictTraversable1)->traverse;
  $sequence3 = ($dictTraversable1)->sequence;
  $functorCoproduct1 = ($functorCoproduct)((($dictTraversable1)->Functor0)($__global_Prim_undefined));
  $foldableCoproduct1 = ($foldableCoproduct)((($dictTraversable1)->Foldable1)($__global_Prim_undefined));
  $__res = (object)["traverse" => function($dictApplicative) use ($__global_Prim_undefined, $traverse2, $traverse3, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverse4 = ($traverse2)($dictApplicative);
  $traverse5 = ($traverse3)($dictApplicative);
  $__res = function($f) use ($__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $map, $__global_Data_Functor_Coproduct_Coproduct, $traverse4, $traverse5) {
  $__num = func_num_args();
  $__res = ($__global_Data_Functor_Coproduct_coproduct)(($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), ($traverse4)($f)), ($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), ($traverse5)($f)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "sequence" => function($dictApplicative) use ($__global_Prim_undefined, $__global_Data_Functor_Coproduct_coproduct, $__global_Data_Traversable_compose, $__global_Data_Functor_Coproduct_Coproduct, $sequence2, $sequence3) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = ($__global_Data_Functor_Coproduct_coproduct)(($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), ($sequence2)($dictApplicative)), ($__global_Data_Traversable_compose)(($map)(($__global_Data_Traversable_compose)($__global_Data_Functor_Coproduct_Coproduct, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})), ($sequence3)($dictApplicative)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) use ($functorCoproduct1) {
  $__num = func_num_args();
  $__res = $functorCoproduct1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) use ($foldableCoproduct1) {
  $__num = func_num_args();
  $__res = $foldableCoproduct1;
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
$GLOBALS['Data_Traversable_traversableCoproduct'] = __NAMESPACE__ . '\\Data_Traversable_traversableCoproduct';



// Data_Traversable_traversableProduct
function Data_Traversable_traversableProduct($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traversableProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Product_functorProduct = ($GLOBALS['Data_Functor_Product_functorProduct'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_functorProduct'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_foldableProduct = ($GLOBALS['Data_Foldable_foldableProduct'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableProduct'));
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__global_Data_Functor_Product_product = ($GLOBALS['Data_Functor_Product_product'] ?? \Data\Functor\Product\phpurs_eval_thunk('Data_Functor_Product_product'));
  $traverse2 = ($dictTraversable)->traverse;
  $sequence2 = ($dictTraversable)->sequence;
  $functorProduct = ($__global_Data_Functor_Product_functorProduct)((($dictTraversable)->Functor0)($__global_Prim_undefined));
  $foldableProduct = ($__global_Data_Foldable_foldableProduct)((($dictTraversable)->Foldable1)($__global_Prim_undefined));
  $__res = function($dictTraversable1) use ($functorProduct, $__global_Prim_undefined, $foldableProduct, $__global_Control_Apply_lift2, $traverse2, $__global_Data_Functor_Product_product, $sequence2) {
  $__num = func_num_args();
  $traverse3 = ($dictTraversable1)->traverse;
  $sequence3 = ($dictTraversable1)->sequence;
  $functorProduct1 = ($functorProduct)((($dictTraversable1)->Functor0)($__global_Prim_undefined));
  $foldableProduct1 = ($foldableProduct)((($dictTraversable1)->Foldable1)($__global_Prim_undefined));
  $__res = (object)["traverse" => function($dictApplicative) use ($__global_Control_Apply_lift2, $__global_Prim_undefined, $traverse2, $traverse3, $__global_Data_Functor_Product_product) {
  $__num = func_num_args();
  $lift2 = ($__global_Control_Apply_lift2)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $traverse4 = ($traverse2)($dictApplicative);
  $traverse5 = ($traverse3)($dictApplicative);
  $__res = (function() use ($lift2, $__global_Data_Functor_Product_product, $traverse4, $traverse5, &$__fn) {
  $__fn = function($f, $v = null) use ($lift2, $__global_Data_Functor_Product_product, $traverse4, $traverse5, &$__fn) {
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
$__res = ($lift2)($__global_Data_Functor_Product_product, ($traverse4)($f1, $fa), ($traverse5)($f1, $ga));
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
}, "sequence" => function($dictApplicative) use ($__global_Control_Apply_lift2, $__global_Prim_undefined, $sequence2, $sequence3, $__global_Data_Functor_Product_product) {
  $__num = func_num_args();
  $lift2 = ($__global_Control_Apply_lift2)((($dictApplicative)->Apply0)($__global_Prim_undefined));
  $sequence4 = ($sequence2)($dictApplicative);
  $sequence5 = ($sequence3)($dictApplicative);
  $__res = function($v) use ($lift2, $__global_Data_Functor_Product_product, $sequence4, $sequence5) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$fa = ($__case_0)->v0;
$ga = ($__case_0)->v1;
$__res = ($lift2)($__global_Data_Functor_Product_product, ($sequence4)($fa), ($sequence5)($ga));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Functor0" => function($__dollar____unused) use ($functorProduct1) {
  $__num = func_num_args();
  $__res = $functorProduct1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable1" => function($__dollar____unused) use ($foldableProduct1) {
  $__num = func_num_args();
  $__res = $foldableProduct1;
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
$GLOBALS['Data_Traversable_traversableProduct'] = __NAMESPACE__ . '\\Data_Traversable_traversableProduct';

// Data_Traversable_traverseDefault
function Data_Traversable_traverseDefault($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_traverseDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $sequence2 = ($dictTraversable)->sequence;
  $map = ((($dictTraversable)->Functor0)($__global_Prim_undefined))->map;
  $__res = function($dictApplicative) use ($sequence2, $map) {
  $__num = func_num_args();
  $sequence3 = ($sequence2)($dictApplicative);
  $__res = (function() use ($sequence3, $map, &$__fn) {
  $__fn = function($f, $ta = null) use ($sequence3, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ta) use ($f, &$__fn) { return $__fn($f, $ta); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($sequence3)(($map)($f, $ta));
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
$GLOBALS['Data_Traversable_traverseDefault'] = __NAMESPACE__ . '\\Data_Traversable_traverseDefault';

// Data_Traversable_mapAccumR
function Data_Traversable_mapAccumR($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_mapAccumR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Traversable_Accum_Internal_applicativeStateR = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateR'));
  $__global_Data_Traversable_Accum_Internal_stateR = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateR'));
  $traverse2 = (($dictTraversable)->traverse)($__global_Data_Traversable_Accum_Internal_applicativeStateR);
  $__res = (function() use ($__global_Data_Traversable_Accum_Internal_stateR, $traverse2, &$__fn) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateR, $traverse2, &$__fn) {
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
  $__res = ($__global_Data_Traversable_Accum_Internal_stateR)(($traverse2)((function() use ($f, &$__fn) {
  $__fn = function($a, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($a, &$__fn) { return $__fn($a, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($f)($s, $a);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$GLOBALS['Data_Traversable_mapAccumR'] = __NAMESPACE__ . '\\Data_Traversable_mapAccumR';

// Data_Traversable_scanr
function Data_Traversable_scanr($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_scanr';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Traversable_mapAccumR = ($GLOBALS['Data_Traversable_mapAccumR'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_mapAccumR'));
  $mapAccumR1 = ($__global_Data_Traversable_mapAccumR)($dictTraversable);
  $__res = (function() use ($mapAccumR1, &$__fn) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumR1, &$__fn) {
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
  $__res = (($mapAccumR1)((function() use ($f, &$__fn) {
  $__fn = function($b, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($b, &$__fn) { return $__fn($b, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $b__prime__ = ($f)($a, $b);
  $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$GLOBALS['Data_Traversable_scanr'] = __NAMESPACE__ . '\\Data_Traversable_scanr';

// Data_Traversable_mapAccumL
function Data_Traversable_mapAccumL($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_mapAccumL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Traversable_Accum_Internal_applicativeStateL = ($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applicativeStateL'));
  $__global_Data_Traversable_Accum_Internal_stateL = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateL'));
  $traverse2 = (($dictTraversable)->traverse)($__global_Data_Traversable_Accum_Internal_applicativeStateL);
  $__res = (function() use ($__global_Data_Traversable_Accum_Internal_stateL, $traverse2, &$__fn) {
  $__fn = function($f, $s0 = null, $xs = null) use ($__global_Data_Traversable_Accum_Internal_stateL, $traverse2, &$__fn) {
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
  $__res = ($__global_Data_Traversable_Accum_Internal_stateL)(($traverse2)((function() use ($f, &$__fn) {
  $__fn = function($a, $s = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($a, &$__fn) { return $__fn($a, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($f)($s, $a);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$GLOBALS['Data_Traversable_mapAccumL'] = __NAMESPACE__ . '\\Data_Traversable_mapAccumL';

// Data_Traversable_scanl
function Data_Traversable_scanl($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_scanl';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Traversable_mapAccumL = ($GLOBALS['Data_Traversable_mapAccumL'] ?? \Data\Traversable\phpurs_eval_thunk('Data_Traversable_mapAccumL'));
  $mapAccumL1 = ($__global_Data_Traversable_mapAccumL)($dictTraversable);
  $__res = (function() use ($mapAccumL1, &$__fn) {
  $__fn = function($f, $b0 = null, $xs = null) use ($mapAccumL1, &$__fn) {
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
  $__res = (($mapAccumL1)((function() use ($f, &$__fn) {
  $__fn = function($b, $a = null) use ($f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($b, &$__fn) { return $__fn($b, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $b__prime__ = ($f)($b, $a);
  $__res = (object)["accum" => $b__prime__, "value" => $b__prime__];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
$GLOBALS['Data_Traversable_scanl'] = __NAMESPACE__ . '\\Data_Traversable_scanl';

// Data_Traversable_for
function Data_Traversable_for($dictApplicative, $dictTraversable = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_for';
  if ($__num < 2) {
    if ($__num === 1) return function($dictTraversable) use ($dictApplicative, $__fn) { return $__fn($dictApplicative, $dictTraversable); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $traverse2 = (($dictTraversable)->traverse)($dictApplicative);
  $__res = (function() use ($traverse2, &$__fn) {
  $__fn = function($x, $f = null) use ($traverse2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($x, &$__fn) { return $__fn($x, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($traverse2)($f, $x);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Traversable_for'] = __NAMESPACE__ . '\\Data_Traversable_for';

