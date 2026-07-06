<?php

namespace Data\Bitraversable;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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
      case 'Data_Bitraversable_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Bitraversable_bitraversableTuple': $v = (object)["bitraverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($apply, $map, &$__fn) {
  $__fn = function($f, $g = null, $v = null) use ($apply, $map, &$__fn) {
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
$__res = ($apply)(($map)((function() use (&$__fn) {
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
})(), ($f1)($a)), ($g1)($b));
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
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($apply, $map) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__res = ($apply)(($map)((function() use (&$__fn) {
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
})(), $a), $b);
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
}, "Bifunctor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Bifunctor_bifunctorTuple = ($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorTuple'));
  $__res = $__global_Data_Bifunctor_bifunctorTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Bifoldable_bifoldableTuple = ($GLOBALS['Data_Bifoldable_bifoldableTuple'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableTuple'));
  $__res = $__global_Data_Bifoldable_bifoldableTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Bitraversable_bitraversableEither': $v = (object)["bitraverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($map, &$__fn) {
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
$f = $__case_0;
$a = ($__case_2)->v0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($f)($a));
goto __end;;
break;
case "Right":
$g = $__case_1;
$b = ($__case_2)->v0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($g)($b));
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
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($map) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Left":
$a = ($__case_0)->v0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $a);
goto __end;;
break;
case "Right":
$b = ($__case_0)->v0;
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $b);
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
}, "Bifunctor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Bifunctor_bifunctorEither = ($GLOBALS['Data_Bifunctor_bifunctorEither'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorEither'));
  $__res = $__global_Data_Bifunctor_bifunctorEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Bifoldable_bifoldableEither = ($GLOBALS['Data_Bifoldable_bifoldableEither'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableEither'));
  $__res = $__global_Data_Bifoldable_bifoldableEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Bitraversable_bitraversableConst': $v = (object)["bitraverse" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Const_Const = ($GLOBALS['Data_Const_Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_Const'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($map, $__global_Data_Const_Const, &$__fn) {
  $__fn = function($f, $v = null, $v1 = null) use ($map, $__global_Data_Const_Const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
    if ($__num === 1) return function($v, $v1 = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $v, $v1);
      if ($__num2 === 1) return function($v1) use ($f, $v, &$__fn) { return $__fn($f, $v, $v1); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__case_0 = $f;
  $__case_1 = $v;
  $__case_2 = $v1;
  if (true) {
$f1 = $__case_0;
$a = $__case_2;
$__res = ($map)($__global_Data_Const_Const, ($f1)($a));
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
}, "bisequence" => function($dictApplicative) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Const_Const = ($GLOBALS['Data_Const_Const'] ?? \Data\Const\phpurs_eval_thunk('Data_Const_Const'));
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = function($v) use ($map, $__global_Data_Const_Const) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = ($map)($__global_Data_Const_Const, $a);
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
}, "Bifunctor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Bifunctor_bifunctorConst = ($GLOBALS['Data_Bifunctor_bifunctorConst'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorConst'));
  $__res = $__global_Data_Bifunctor_bifunctorConst;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Bifoldable_bifoldableConst = ($GLOBALS['Data_Bifoldable_bifoldableConst'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableConst'));
  $__res = $__global_Data_Bifoldable_bifoldableConst;
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



// Data_Bitraversable_Bitraversable$Dict
function Data_Bitraversable_Bitraversable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_Bitraversable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_Bitraversable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Bitraversable_Bitraversable__dollar__Dict';

// Data_Bitraversable_bitraverse
function Data_Bitraversable_bitraverse($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->bitraverse;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraverse'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraverse';

// Data_Bitraversable_lfor
function Data_Bitraversable_lfor($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_lfor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $bitraverse1 = ($dictBitraversable)->bitraverse;
  $__res = function($dictApplicative) use ($bitraverse1) {
  $__num = func_num_args();
  $bitraverse2 = ($bitraverse1)($dictApplicative);
  $pure = ($dictApplicative)->pure;
  $__res = (function() use ($bitraverse2, $pure, &$__fn) {
  $__fn = function($t, $f = null) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($t, &$__fn) { return $__fn($t, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bitraverse2)($f, $pure, $t);
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
$GLOBALS['Data_Bitraversable_lfor'] = __NAMESPACE__ . '\\Data_Bitraversable_lfor';

// Data_Bitraversable_ltraverse
function Data_Bitraversable_ltraverse($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_ltraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $bitraverse1 = ($dictBitraversable)->bitraverse;
  $__res = function($dictApplicative) use ($bitraverse1) {
  $__num = func_num_args();
  $bitraverse2 = ($bitraverse1)($dictApplicative);
  $pure = ($dictApplicative)->pure;
  $__res = function($f) use ($bitraverse2, $pure) {
  $__num = func_num_args();
  $__res = ($bitraverse2)($f, $pure);
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
$GLOBALS['Data_Bitraversable_ltraverse'] = __NAMESPACE__ . '\\Data_Bitraversable_ltraverse';

// Data_Bitraversable_rfor
function Data_Bitraversable_rfor($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_rfor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $bitraverse1 = ($dictBitraversable)->bitraverse;
  $__res = function($dictApplicative) use ($bitraverse1) {
  $__num = func_num_args();
  $bitraverse2 = ($bitraverse1)($dictApplicative);
  $pure = ($dictApplicative)->pure;
  $__res = (function() use ($bitraverse2, $pure, &$__fn) {
  $__fn = function($t, $f = null) use ($bitraverse2, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($t, &$__fn) { return $__fn($t, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bitraverse2)($pure, $f, $t);
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
$GLOBALS['Data_Bitraversable_rfor'] = __NAMESPACE__ . '\\Data_Bitraversable_rfor';

// Data_Bitraversable_rtraverse
function Data_Bitraversable_rtraverse($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_rtraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $bitraverse1 = ($dictBitraversable)->bitraverse;
  $__res = function($dictApplicative) use ($bitraverse1) {
  $__num = func_num_args();
  $__res = ($bitraverse1)($dictApplicative, ($dictApplicative)->pure);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_rtraverse'] = __NAMESPACE__ . '\\Data_Bitraversable_rtraverse';


// Data_Bitraversable_bitraversableJoker
function Data_Bitraversable_bitraversableJoker($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableJoker';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Joker_bifunctorJoker = ($GLOBALS['Data_Functor_Joker_bifunctorJoker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_bifunctorJoker'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Bifoldable_bifoldableJoker = ($GLOBALS['Data_Bifoldable_bifoldableJoker'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableJoker'));
  $__global_Data_Functor_Joker_Joker = ($GLOBALS['Data_Functor_Joker_Joker'] ?? \Data\Functor\Joker\phpurs_eval_thunk('Data_Functor_Joker_Joker'));
  $traverse = ($dictTraversable)->traverse;
  $sequence = ($dictTraversable)->sequence;
  $bifunctorJoker = ($__global_Data_Functor_Joker_bifunctorJoker)((($dictTraversable)->Functor0)($__global_Prim_undefined));
  $bifoldableJoker = ($__global_Data_Bifoldable_bifoldableJoker)((($dictTraversable)->Foldable1)($__global_Prim_undefined));
  $__res = (object)["bitraverse" => function($dictApplicative) use ($__global_Prim_undefined, $traverse, $__global_Data_Functor_Joker_Joker) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverse1 = ($traverse)($dictApplicative);
  $__res = (function() use ($map, $__global_Data_Functor_Joker_Joker, $traverse1, &$__fn) {
  $__fn = function($v, $r = null, $v1 = null) use ($map, $__global_Data_Functor_Joker_Joker, $traverse1, &$__fn) {
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
$__res = ($map)($__global_Data_Functor_Joker_Joker, ($traverse1)($r1, $f));
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
}, "bisequence" => function($dictApplicative) use ($__global_Prim_undefined, $sequence, $__global_Data_Functor_Joker_Joker) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $sequence1 = ($sequence)($dictApplicative);
  $__res = function($v) use ($map, $__global_Data_Functor_Joker_Joker, $sequence1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($map)($__global_Data_Functor_Joker_Joker, ($sequence1)($f));
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
}, "Bifunctor0" => function($__dollar____unused) use ($bifunctorJoker) {
  $__num = func_num_args();
  $__res = $bifunctorJoker;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($__dollar____unused) use ($bifoldableJoker) {
  $__num = func_num_args();
  $__res = $bifoldableJoker;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraversableJoker'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableJoker';



// Data_Bitraversable_bitraversableClown
function Data_Bitraversable_bitraversableClown($dictTraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableClown';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Clown_bifunctorClown = ($GLOBALS['Data_Functor_Clown_bifunctorClown'] ?? \Data\Functor\Clown\phpurs_eval_thunk('Data_Functor_Clown_bifunctorClown'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Bifoldable_bifoldableClown = ($GLOBALS['Data_Bifoldable_bifoldableClown'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableClown'));
  $__global_Data_Functor_Clown_Clown = ($GLOBALS['Data_Functor_Clown_Clown'] ?? \Data\Functor\Clown\phpurs_eval_thunk('Data_Functor_Clown_Clown'));
  $traverse = ($dictTraversable)->traverse;
  $sequence = ($dictTraversable)->sequence;
  $bifunctorClown = ($__global_Data_Functor_Clown_bifunctorClown)((($dictTraversable)->Functor0)($__global_Prim_undefined));
  $bifoldableClown = ($__global_Data_Bifoldable_bifoldableClown)((($dictTraversable)->Foldable1)($__global_Prim_undefined));
  $__res = (object)["bitraverse" => function($dictApplicative) use ($__global_Prim_undefined, $traverse, $__global_Data_Functor_Clown_Clown) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $traverse1 = ($traverse)($dictApplicative);
  $__res = (function() use ($map, $__global_Data_Functor_Clown_Clown, $traverse1, &$__fn) {
  $__fn = function($l, $v = null, $v1 = null) use ($map, $__global_Data_Functor_Clown_Clown, $traverse1, &$__fn) {
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
$__res = ($map)($__global_Data_Functor_Clown_Clown, ($traverse1)($l1, $f));
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
}, "bisequence" => function($dictApplicative) use ($__global_Prim_undefined, $sequence, $__global_Data_Functor_Clown_Clown) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $sequence1 = ($sequence)($dictApplicative);
  $__res = function($v) use ($map, $__global_Data_Functor_Clown_Clown, $sequence1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($map)($__global_Data_Functor_Clown_Clown, ($sequence1)($f));
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
}, "Bifunctor0" => function($__dollar____unused) use ($bifunctorClown) {
  $__num = func_num_args();
  $__res = $bifunctorClown;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($__dollar____unused) use ($bifoldableClown) {
  $__num = func_num_args();
  $__res = $bifoldableClown;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraversableClown'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableClown';

// Data_Bitraversable_bisequenceDefault
function Data_Bitraversable_bisequenceDefault($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bisequenceDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Bitraversable_identity = ($GLOBALS['Data_Bitraversable_identity'] ?? \Data\Bitraversable\phpurs_eval_thunk('Data_Bitraversable_identity'));
  $bitraverse1 = ($dictBitraversable)->bitraverse;
  $__res = function($dictApplicative) use ($bitraverse1, $__global_Data_Bitraversable_identity) {
  $__num = func_num_args();
  $__res = ($bitraverse1)($dictApplicative, $__global_Data_Bitraversable_identity, $__global_Data_Bitraversable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bisequenceDefault'] = __NAMESPACE__ . '\\Data_Bitraversable_bisequenceDefault';

// Data_Bitraversable_bisequence
function Data_Bitraversable_bisequence($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bisequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->bisequence;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bisequence'] = __NAMESPACE__ . '\\Data_Bitraversable_bisequence';

// Data_Bitraversable_bitraversableFlip
function Data_Bitraversable_bitraversableFlip($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableFlip';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Flip_bifunctorFlip = ($GLOBALS['Data_Functor_Flip_bifunctorFlip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_bifunctorFlip'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Bifoldable_bifoldableFlip = ($GLOBALS['Data_Bifoldable_bifoldableFlip'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableFlip'));
  $__global_Data_Functor_Flip_Flip = ($GLOBALS['Data_Functor_Flip_Flip'] ?? \Data\Functor\Flip\phpurs_eval_thunk('Data_Functor_Flip_Flip'));
  $bitraverse1 = ($dictBitraversable)->bitraverse;
  $bisequence1 = ($dictBitraversable)->bisequence;
  $bifunctorFlip = ($__global_Data_Functor_Flip_bifunctorFlip)((($dictBitraversable)->Bifunctor0)($__global_Prim_undefined));
  $bifoldableFlip = ($__global_Data_Bifoldable_bifoldableFlip)((($dictBitraversable)->Bifoldable1)($__global_Prim_undefined));
  $__res = (object)["bitraverse" => function($dictApplicative) use ($__global_Prim_undefined, $bitraverse1, $__global_Data_Functor_Flip_Flip) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $bitraverse2 = ($bitraverse1)($dictApplicative);
  $__res = (function() use ($map, $__global_Data_Functor_Flip_Flip, $bitraverse2, &$__fn) {
  $__fn = function($r, $l = null, $v = null) use ($map, $__global_Data_Functor_Flip_Flip, $bitraverse2, &$__fn) {
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
$__res = ($map)($__global_Data_Functor_Flip_Flip, ($bitraverse2)($l1, $r1, $p));
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
}, "bisequence" => function($dictApplicative) use ($__global_Prim_undefined, $bisequence1, $__global_Data_Functor_Flip_Flip) {
  $__num = func_num_args();
  $map = ((((($dictApplicative)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $bisequence2 = ($bisequence1)($dictApplicative);
  $__res = function($v) use ($map, $__global_Data_Functor_Flip_Flip, $bisequence2) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$p = $__case_0;
$__res = ($map)($__global_Data_Functor_Flip_Flip, ($bisequence2)($p));
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
}, "Bifunctor0" => function($__dollar____unused) use ($bifunctorFlip) {
  $__num = func_num_args();
  $__res = $bifunctorFlip;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($__dollar____unused) use ($bifoldableFlip) {
  $__num = func_num_args();
  $__res = $bifoldableFlip;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Bitraversable_bitraversableFlip'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableFlip';

// Data_Bitraversable_bitraversableProduct2
function Data_Bitraversable_bitraversableProduct2($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraversableProduct2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_Product2_bifunctorProduct2 = ($GLOBALS['Data_Functor_Product2_bifunctorProduct2'] ?? \Data\Functor\Product2\phpurs_eval_thunk('Data_Functor_Product2_bifunctorProduct2'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Bifoldable_bifoldableProduct2 = ($GLOBALS['Data_Bifoldable_bifoldableProduct2'] ?? \Data\Bifoldable\phpurs_eval_thunk('Data_Bifoldable_bifoldableProduct2'));
  $bitraverse1 = ($dictBitraversable)->bitraverse;
  $bisequence1 = ($dictBitraversable)->bisequence;
  $bifunctorProduct2 = ($__global_Data_Functor_Product2_bifunctorProduct2)((($dictBitraversable)->Bifunctor0)($__global_Prim_undefined));
  $bifoldableProduct2 = ($__global_Data_Bifoldable_bifoldableProduct2)((($dictBitraversable)->Bifoldable1)($__global_Prim_undefined));
  $__res = function($dictBitraversable1) use ($bifunctorProduct2, $__global_Prim_undefined, $bifoldableProduct2, $bitraverse1, $bisequence1) {
  $__num = func_num_args();
  $bitraverse2 = ($dictBitraversable1)->bitraverse;
  $bisequence2 = ($dictBitraversable1)->bisequence;
  $bifunctorProduct21 = ($bifunctorProduct2)((($dictBitraversable1)->Bifunctor0)($__global_Prim_undefined));
  $bifoldableProduct21 = ($bifoldableProduct2)((($dictBitraversable1)->Bifoldable1)($__global_Prim_undefined));
  $__res = (object)["bitraverse" => function($dictApplicative) use ($__global_Prim_undefined, $bitraverse1, $bitraverse2) {
  $__num = func_num_args();
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $bitraverse3 = ($bitraverse1)($dictApplicative);
  $bitraverse4 = ($bitraverse2)($dictApplicative);
  $__res = (function() use ($apply, $map, $bitraverse3, $bitraverse4, &$__fn) {
  $__fn = function($l, $r = null, $v = null) use ($apply, $map, $bitraverse3, $bitraverse4, &$__fn) {
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
$__res = ($apply)(($map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product2", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($bitraverse3)($l1, $r1, $f)), ($bitraverse4)($l1, $r1, $g));
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
}, "bisequence" => function($dictApplicative) use ($__global_Prim_undefined, $bisequence1, $bisequence2) {
  $__num = func_num_args();
  $Apply0 = (($dictApplicative)->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $bisequence3 = ($bisequence1)($dictApplicative);
  $bisequence4 = ($bisequence2)($dictApplicative);
  $__res = function($v) use ($apply, $map, $bisequence3, $bisequence4) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Product2":
$f = ($__case_0)->v0;
$g = ($__case_0)->v1;
$__res = ($apply)(($map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product2", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($bisequence3)($f)), ($bisequence4)($g));
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
}, "Bifunctor0" => function($__dollar____unused) use ($bifunctorProduct21) {
  $__num = func_num_args();
  $__res = $bifunctorProduct21;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($__dollar____unused) use ($bifoldableProduct21) {
  $__num = func_num_args();
  $__res = $bifoldableProduct21;
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
$GLOBALS['Data_Bitraversable_bitraversableProduct2'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraversableProduct2';

// Data_Bitraversable_bitraverseDefault
function Data_Bitraversable_bitraverseDefault($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bitraverseDefault';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bisequence1 = ($dictBitraversable)->bisequence;
  $bimap = ((($dictBitraversable)->Bifunctor0)($__global_Prim_undefined))->bimap;
  $__res = function($dictApplicative) use ($bisequence1, $bimap) {
  $__num = func_num_args();
  $bisequence2 = ($bisequence1)($dictApplicative);
  $__res = (function() use ($bisequence2, $bimap, &$__fn) {
  $__fn = function($f, $g = null, $t = null) use ($bisequence2, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($t) use ($f, $g, &$__fn) { return $__fn($f, $g, $t); };
    if ($__num === 1) return function($g, $t = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $t);
      if ($__num2 === 1) return function($t) use ($f, $g, &$__fn) { return $__fn($f, $g, $t); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($bisequence2)(($bimap)($f, $g, $t));
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
$GLOBALS['Data_Bitraversable_bitraverseDefault'] = __NAMESPACE__ . '\\Data_Bitraversable_bitraverseDefault';

// Data_Bitraversable_bifor
function Data_Bitraversable_bifor($dictBitraversable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Bitraversable_bifor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $bitraverse1 = ($dictBitraversable)->bitraverse;
  $__res = function($dictApplicative) use ($bitraverse1) {
  $__num = func_num_args();
  $bitraverse2 = ($bitraverse1)($dictApplicative);
  $__res = (function() use ($bitraverse2, &$__fn) {
  $__fn = function($t, $f = null, $g = null) use ($bitraverse2, &$__fn) {
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
  $__res = ($bitraverse2)($f, $g, $t);
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
$GLOBALS['Data_Bitraversable_bifor'] = __NAMESPACE__ . '\\Data_Bitraversable_bifor';

