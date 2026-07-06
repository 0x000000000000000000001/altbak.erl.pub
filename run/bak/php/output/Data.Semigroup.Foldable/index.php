<?php

namespace Data\Semigroup\Foldable;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord.Max/index.php';
require_once __DIR__ . '/../Data.Ord.Min/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
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
      case 'Data_Semigroup_Foldable_eq': $v = (($GLOBALS['Data_Ordering_eqOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_eqOrdering')))->eq; break;
      case 'Data_Semigroup_Foldable_composeFlipped': $v = \Control\Semigroupoid\Control_Semigroupoid_composeFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Semigroup_Foldable_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Semigroup_Foldable_alaF': $v = \Data\Newtype\Data_Newtype_alaF(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Semigroup_Foldable_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Semigroup_Foldable_ala': $v = \Data\Newtype\Data_Newtype_ala(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Semigroup_Foldable_mkFoldRight1': $v = ((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("FoldRight1", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())("\\Data\\Function\\Data_Function_const"); break;
      case 'Data_Semigroup_Foldable_foldableTuple': $v = (object)["foldMap1" => (function() use (&$__fn) {
  $__fn = function($dictSemigroup, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
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
})(), "foldr1" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Tuple":
$x = ($__case_1)->v1;
$__res = $x;
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
})(), "foldl1" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Tuple":
$x = ($__case_1)->v1;
$__res = $x;
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
})(), "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableTuple = ($GLOBALS['Data_Foldable_foldableTuple'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableTuple'));
  $__res = $__global_Data_Foldable_foldableTuple;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Semigroup_Foldable_foldableMultiplicative': $v = (object)["foldr1" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_1;
$__res = $x;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_1;
$__res = $x;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap1" => (function() use (&$__fn) {
  $__fn = function($dictSemigroup, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
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
})(), "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableMultiplicative = ($GLOBALS['Data_Foldable_foldableMultiplicative'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableMultiplicative'));
  $__res = $__global_Data_Foldable_foldableMultiplicative;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Semigroup_Foldable_foldableIdentity': $v = (object)["foldMap1" => (function() use (&$__fn) {
  $__fn = function($dictSemigroup, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
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
})(), "foldl1" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_1;
$__res = $x;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr1" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_1;
$__res = $x;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableIdentity = ($GLOBALS['Data_Foldable_foldableIdentity'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableIdentity'));
  $__res = $__global_Data_Foldable_foldableIdentity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Semigroup_Foldable_foldableDual': $v = (object)["foldr1" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_1;
$__res = $x;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldl1" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_1;
$__res = $x;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldMap1" => (function() use (&$__fn) {
  $__fn = function($dictSemigroup, $f = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
    if ($__num === 1) return function($f, $v = null) use ($dictSemigroup, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictSemigroup, $f, $v);
      if ($__num2 === 1) return function($v) use ($dictSemigroup, $f, &$__fn) { return $__fn($dictSemigroup, $f, $v); };
      return phpurs_curry_fallback($__fn, [$dictSemigroup], 3);
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
})(), "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Foldable_foldableDual = ($GLOBALS['Data_Foldable_foldableDual'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableDual'));
  $__res = $__global_Data_Foldable_foldableDual;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Semigroup_Foldable_foldRight1Semigroup': $v = (object)["append" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (((($__case_0)->tag === "FoldRight1") && (($__case_1)->tag === "FoldRight1"))) {
$lf = ($__case_0)->v0;
$lr = ($__case_0)->v1;
$rf = ($__case_1)->v0;
$rr = ($__case_1)->v1;
$__res = new Phpurs_Data2("FoldRight1", (function() use ($lf, $lr, $rf, &$__fn) {
  $__fn = function($a, $f = null) use ($lf, $lr, $rf, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($a, &$__fn) { return $__fn($a, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($lf)(($f)($lr, ($rf)($a, $f)), $f);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $rr);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Semigroup_Foldable_semigroupDual': $v = \Data\Monoid\Dual\Data_Monoid_Dual_semigroupDual(($GLOBALS['Data_Semigroup_Foldable_foldRight1Semigroup'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldRight1Semigroup'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };








// Data_Semigroup_Foldable_JoinWith
function Data_Semigroup_Foldable_JoinWith($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_JoinWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_JoinWith'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_JoinWith';

// Data_Semigroup_Foldable_Foldable1$Dict
function Data_Semigroup_Foldable_Foldable1__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_Foldable1__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_Foldable1__dollar__Dict'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_Foldable1__dollar__Dict';

// Data_Semigroup_Foldable_FoldRight1
function Data_Semigroup_Foldable_FoldRight1($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_FoldRight1';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("FoldRight1", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_FoldRight1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_FoldRight1';

// Data_Semigroup_Foldable_Act
function Data_Semigroup_Foldable_Act($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_Act';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_Act'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_Act';

// Data_Semigroup_Foldable_semigroupJoinWith
function Data_Semigroup_Foldable_semigroupJoinWith($dictSemigroup) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_semigroupJoinWith';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $append = ($dictSemigroup)->append;
  $__res = (object)["append" => (function() use ($append, &$__fn) {
  $__fn = function($v, $v1 = null) use ($append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$a = $__case_0;
$b = $__case_1;
$__res = function($j) use ($append, $a, $b) {
  $__num = func_num_args();
  $__res = ($append)(($a)($j), ($append)($j, ($b)($j)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
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
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_semigroupJoinWith'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_semigroupJoinWith';

// Data_Semigroup_Foldable_semigroupAct
function Data_Semigroup_Foldable_semigroupAct($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_semigroupAct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Apply_applySecond = ($GLOBALS['Control_Apply_applySecond'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_applySecond'));
  $applySecond = ($__global_Control_Apply_applySecond)($dictApply);
  $__res = (object)["append" => (function() use ($applySecond, &$__fn) {
  $__fn = function($v, $v1 = null) use ($applySecond, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$a = $__case_0;
$b = $__case_1;
$__res = ($applySecond)($a, $b);
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
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_semigroupAct'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_semigroupAct';

// Data_Semigroup_Foldable_runFoldRight1
function Data_Semigroup_Foldable_runFoldRight1($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_runFoldRight1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "FoldRight1":
$f = ($__case_0)->v0;
$a = ($__case_0)->v1;
$__res = ($f)($a);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_runFoldRight1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_runFoldRight1';


// Data_Semigroup_Foldable_joinee
function Data_Semigroup_Foldable_joinee($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_joinee';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = $x;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_joinee'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_joinee';

// Data_Semigroup_Foldable_getAct
function Data_Semigroup_Foldable_getAct($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_getAct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = $f;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_getAct'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_getAct';

// Data_Semigroup_Foldable_foldr1
function Data_Semigroup_Foldable_foldr1($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldr1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->foldr1;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldr1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldr1';

// Data_Semigroup_Foldable_foldl1
function Data_Semigroup_Foldable_foldl1($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldl1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->foldl1;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldl1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldl1';

// Data_Semigroup_Foldable_maximumBy
function Data_Semigroup_Foldable_maximumBy($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_maximumBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_eq = ($GLOBALS['Data_Semigroup_Foldable_eq'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_eq'));
  $foldl11 = ($dictFoldable1)->foldl1;
  $__res = function($cmp) use ($foldl11, $__global_Data_Semigroup_Foldable_eq) {
  $__num = func_num_args();
  $__res = ($foldl11)((function() use ($__global_Data_Semigroup_Foldable_eq, $cmp, &$__fn) {
  $__fn = function($x, $y = null) use ($__global_Data_Semigroup_Foldable_eq, $cmp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = ($__global_Data_Semigroup_Foldable_eq)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT")));
  switch ($__case_0) {
case true:
$__res = $x;
goto __end;;
break;
default:
$__res = $y;
goto __end;;
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_maximumBy'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_maximumBy';

// Data_Semigroup_Foldable_minimumBy
function Data_Semigroup_Foldable_minimumBy($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_minimumBy';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_eq = ($GLOBALS['Data_Semigroup_Foldable_eq'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_eq'));
  $foldl11 = ($dictFoldable1)->foldl1;
  $__res = function($cmp) use ($foldl11, $__global_Data_Semigroup_Foldable_eq) {
  $__num = func_num_args();
  $__res = ($foldl11)((function() use ($__global_Data_Semigroup_Foldable_eq, $cmp, &$__fn) {
  $__fn = function($x, $y = null) use ($__global_Data_Semigroup_Foldable_eq, $cmp, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = ($__global_Data_Semigroup_Foldable_eq)(($cmp)($x, $y), ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT")));
  switch ($__case_0) {
case true:
$__res = $x;
goto __end;;
break;
default:
$__res = $y;
goto __end;;
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_minimumBy'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_minimumBy';







// Data_Semigroup_Foldable_foldMap1DefaultR
function Data_Semigroup_Foldable_foldMap1DefaultR($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldMap1DefaultR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_composeFlipped = ($GLOBALS['Data_Semigroup_Foldable_composeFlipped'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_composeFlipped'));
  $foldr11 = ($dictFoldable1)->foldr1;
  $__res = function($dictFunctor) use ($__global_Data_Semigroup_Foldable_composeFlipped, $foldr11) {
  $__num = func_num_args();
  $map = ($dictFunctor)->map;
  $__res = function($dictSemigroup) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldr11) {
  $__num = func_num_args();
  $append = ($dictSemigroup)->append;
  $__res = function($f) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldr11, $append) {
  $__num = func_num_args();
  $__res = ($__global_Data_Semigroup_Foldable_composeFlipped)(($map)($f), ($foldr11)($append));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultR'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldMap1DefaultR';

// Data_Semigroup_Foldable_foldMap1DefaultL
function Data_Semigroup_Foldable_foldMap1DefaultL($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldMap1DefaultL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_composeFlipped = ($GLOBALS['Data_Semigroup_Foldable_composeFlipped'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_composeFlipped'));
  $foldl11 = ($dictFoldable1)->foldl1;
  $__res = function($dictFunctor) use ($__global_Data_Semigroup_Foldable_composeFlipped, $foldl11) {
  $__num = func_num_args();
  $map = ($dictFunctor)->map;
  $__res = function($dictSemigroup) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11) {
  $__num = func_num_args();
  $append = ($dictSemigroup)->append;
  $__res = function($f) use ($__global_Data_Semigroup_Foldable_composeFlipped, $map, $foldl11, $append) {
  $__num = func_num_args();
  $__res = ($__global_Data_Semigroup_Foldable_composeFlipped)(($map)($f), ($foldl11)($append));
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldMap1DefaultL'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldMap1DefaultL';

// Data_Semigroup_Foldable_foldMap1
function Data_Semigroup_Foldable_foldMap1($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldMap1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->foldMap1;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldMap1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldMap1';

// Data_Semigroup_Foldable_foldl1Default
function Data_Semigroup_Foldable_foldl1Default($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldl1Default';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_Semigroup_Foldable_runFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_runFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_runFoldRight1'));
  $__global_Data_Semigroup_Foldable_alaF = ($GLOBALS['Data_Semigroup_Foldable_alaF'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_alaF'));
  $__global_Data_Monoid_Dual_Dual = ($GLOBALS['Data_Monoid_Dual_Dual'] ?? \Data\Monoid\Dual\phpurs_eval_thunk('Data_Monoid_Dual_Dual'));
  $__global_Data_Semigroup_Foldable_semigroupDual = ($GLOBALS['Data_Semigroup_Foldable_semigroupDual'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_semigroupDual'));
  $__global_Data_Semigroup_Foldable_mkFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_mkFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_mkFoldRight1'));
  $__res = ($__global_Data_Semigroup_Foldable_compose)(($__global_Data_Function_flip)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_runFoldRight1, ($__global_Data_Semigroup_Foldable_alaF)($__global_Data_Monoid_Dual_Dual, (($dictFoldable1)->foldMap1)($__global_Data_Semigroup_Foldable_semigroupDual), $__global_Data_Semigroup_Foldable_mkFoldRight1))), $__global_Data_Function_flip);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldl1Default'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldl1Default';

// Data_Semigroup_Foldable_foldr1Default
function Data_Semigroup_Foldable_foldr1Default($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_foldr1Default';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
  $__global_Data_Semigroup_Foldable_runFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_runFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_runFoldRight1'));
  $__global_Data_Semigroup_Foldable_foldRight1Semigroup = ($GLOBALS['Data_Semigroup_Foldable_foldRight1Semigroup'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_foldRight1Semigroup'));
  $__global_Data_Semigroup_Foldable_mkFoldRight1 = ($GLOBALS['Data_Semigroup_Foldable_mkFoldRight1'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_mkFoldRight1'));
  $__res = ($__global_Data_Function_flip)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_runFoldRight1, (($dictFoldable1)->foldMap1)($__global_Data_Semigroup_Foldable_foldRight1Semigroup, $__global_Data_Semigroup_Foldable_mkFoldRight1)));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_foldr1Default'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_foldr1Default';

// Data_Semigroup_Foldable_intercalateMap
function Data_Semigroup_Foldable_intercalateMap($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_intercalateMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_semigroupJoinWith = ($GLOBALS['Data_Semigroup_Foldable_semigroupJoinWith'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_semigroupJoinWith'));
  $__global_Data_Semigroup_Foldable_joinee = ($GLOBALS['Data_Semigroup_Foldable_joinee'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_joinee'));
  $__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
  $__global_Data_Semigroup_Foldable_JoinWith = ($GLOBALS['Data_Semigroup_Foldable_JoinWith'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_JoinWith'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $foldMap11 = ($dictFoldable1)->foldMap1;
  $__res = function($dictSemigroup) use ($foldMap11, $__global_Data_Semigroup_Foldable_semigroupJoinWith, $__global_Data_Semigroup_Foldable_joinee, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const) {
  $__num = func_num_args();
  $foldMap12 = ($foldMap11)(($__global_Data_Semigroup_Foldable_semigroupJoinWith)($dictSemigroup));
  $__res = (function() use ($__global_Data_Semigroup_Foldable_joinee, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const, &$__fn) {
  $__fn = function($j, $f = null, $foldable = null) use ($__global_Data_Semigroup_Foldable_joinee, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_JoinWith, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($foldable) use ($j, $f, &$__fn) { return $__fn($j, $f, $foldable); };
    if ($__num === 1) return function($f, $foldable = null) use ($j, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($j, $f, $foldable);
      if ($__num2 === 1) return function($foldable) use ($j, $f, &$__fn) { return $__fn($j, $f, $foldable); };
      return phpurs_curry_fallback($__fn, [$j], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($__global_Data_Semigroup_Foldable_joinee)(($foldMap12)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_JoinWith, ($__global_Data_Semigroup_Foldable_compose)($__global_Data_Function_const, $f)), $foldable), $j);
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
$GLOBALS['Data_Semigroup_Foldable_intercalateMap'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_intercalateMap';

// Data_Semigroup_Foldable_intercalate
function Data_Semigroup_Foldable_intercalate($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_intercalate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_intercalateMap = ($GLOBALS['Data_Semigroup_Foldable_intercalateMap'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_intercalateMap'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
  $intercalateMap1 = ($__global_Data_Semigroup_Foldable_intercalateMap)($dictFoldable1);
  $__res = function($dictSemigroup) use ($__global_Data_Function_flip, $intercalateMap1, $__global_Data_Semigroup_Foldable_identity) {
  $__num = func_num_args();
  $__res = ($__global_Data_Function_flip)(($intercalateMap1)($dictSemigroup), $__global_Data_Semigroup_Foldable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_intercalate'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_intercalate';

// Data_Semigroup_Foldable_maximum
function Data_Semigroup_Foldable_maximum($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_maximum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Ord_Max_semigroupMax = ($GLOBALS['Data_Ord_Max_semigroupMax'] ?? \Data\Ord\Max\phpurs_eval_thunk('Data_Ord_Max_semigroupMax'));
  $__global_Data_Semigroup_Foldable_ala = ($GLOBALS['Data_Semigroup_Foldable_ala'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_ala'));
  $__global_Data_Ord_Max_Max = ($GLOBALS['Data_Ord_Max_Max'] ?? \Data\Ord\Max\phpurs_eval_thunk('Data_Ord_Max_Max'));
  $semigroupMax = ($__global_Data_Ord_Max_semigroupMax)($dictOrd);
  $__res = function($dictFoldable1) use ($__global_Data_Semigroup_Foldable_ala, $__global_Data_Ord_Max_Max, $semigroupMax) {
  $__num = func_num_args();
  $__res = ($__global_Data_Semigroup_Foldable_ala)($__global_Data_Ord_Max_Max, (($dictFoldable1)->foldMap1)($semigroupMax));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_maximum'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_maximum';

// Data_Semigroup_Foldable_minimum
function Data_Semigroup_Foldable_minimum($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_minimum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Ord_Min_semigroupMin = ($GLOBALS['Data_Ord_Min_semigroupMin'] ?? \Data\Ord\Min\phpurs_eval_thunk('Data_Ord_Min_semigroupMin'));
  $__global_Data_Semigroup_Foldable_ala = ($GLOBALS['Data_Semigroup_Foldable_ala'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_ala'));
  $__global_Data_Ord_Min_Min = ($GLOBALS['Data_Ord_Min_Min'] ?? \Data\Ord\Min\phpurs_eval_thunk('Data_Ord_Min_Min'));
  $semigroupMin = ($__global_Data_Ord_Min_semigroupMin)($dictOrd);
  $__res = function($dictFoldable1) use ($__global_Data_Semigroup_Foldable_ala, $__global_Data_Ord_Min_Min, $semigroupMin) {
  $__num = func_num_args();
  $__res = ($__global_Data_Semigroup_Foldable_ala)($__global_Data_Ord_Min_Min, (($dictFoldable1)->foldMap1)($semigroupMin));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_minimum'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_minimum';

// Data_Semigroup_Foldable_traverse1_
function Data_Semigroup_Foldable_traverse1_($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_traverse1_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_voidRight = ($GLOBALS['Data_Functor_voidRight'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_voidRight'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Semigroup_Foldable_semigroupAct = ($GLOBALS['Data_Semigroup_Foldable_semigroupAct'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_semigroupAct'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__global_Data_Semigroup_Foldable_getAct = ($GLOBALS['Data_Semigroup_Foldable_getAct'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_getAct'));
  $__global_Data_Semigroup_Foldable_compose = ($GLOBALS['Data_Semigroup_Foldable_compose'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_compose'));
  $__global_Data_Semigroup_Foldable_Act = ($GLOBALS['Data_Semigroup_Foldable_Act'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_Act'));
  $foldMap11 = ($dictFoldable1)->foldMap1;
  $__res = function($dictApply) use ($__global_Data_Functor_voidRight, $__global_Prim_undefined, $foldMap11, $__global_Data_Semigroup_Foldable_semigroupAct, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act) {
  $__num = func_num_args();
  $voidRight = ($__global_Data_Functor_voidRight)((($dictApply)->Functor0)($__global_Prim_undefined));
  $foldMap12 = ($foldMap11)(($__global_Data_Semigroup_Foldable_semigroupAct)($dictApply));
  $__res = (function() use ($voidRight, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act, &$__fn) {
  $__fn = function($f, $t = null) use ($voidRight, $__global_Data_Unit_unit, $__global_Data_Semigroup_Foldable_getAct, $foldMap12, $__global_Data_Semigroup_Foldable_compose, $__global_Data_Semigroup_Foldable_Act, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($f, &$__fn) { return $__fn($f, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($voidRight)($__global_Data_Unit_unit, ($__global_Data_Semigroup_Foldable_getAct)(($foldMap12)(($__global_Data_Semigroup_Foldable_compose)($__global_Data_Semigroup_Foldable_Act, $f), $t)));
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
$GLOBALS['Data_Semigroup_Foldable_traverse1_'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_traverse1_';

// Data_Semigroup_Foldable_for1_
function Data_Semigroup_Foldable_for1_($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_for1_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_traverse1_ = ($GLOBALS['Data_Semigroup_Foldable_traverse1_'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_traverse1_'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $traverse1_1 = ($__global_Data_Semigroup_Foldable_traverse1_)($dictFoldable1);
  $__res = function($dictApply) use ($__global_Data_Function_flip, $traverse1_1) {
  $__num = func_num_args();
  $__res = ($__global_Data_Function_flip)(($traverse1_1)($dictApply));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_for1_'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_for1_';

// Data_Semigroup_Foldable_sequence1_
function Data_Semigroup_Foldable_sequence1_($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_sequence1_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_traverse1_ = ($GLOBALS['Data_Semigroup_Foldable_traverse1_'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_traverse1_'));
  $__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
  $traverse1_1 = ($__global_Data_Semigroup_Foldable_traverse1_)($dictFoldable1);
  $__res = function($dictApply) use ($traverse1_1, $__global_Data_Semigroup_Foldable_identity) {
  $__num = func_num_args();
  $__res = ($traverse1_1)($dictApply, $__global_Data_Semigroup_Foldable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_sequence1_'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_sequence1_';

// Data_Semigroup_Foldable_fold1
function Data_Semigroup_Foldable_fold1($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semigroup_Foldable_fold1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Foldable_identity = ($GLOBALS['Data_Semigroup_Foldable_identity'] ?? \Data\Semigroup\Foldable\phpurs_eval_thunk('Data_Semigroup_Foldable_identity'));
  $foldMap11 = ($dictFoldable1)->foldMap1;
  $__res = function($dictSemigroup) use ($foldMap11, $__global_Data_Semigroup_Foldable_identity) {
  $__num = func_num_args();
  $__res = ($foldMap11)($dictSemigroup, $__global_Data_Semigroup_Foldable_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semigroup_Foldable_fold1'] = __NAMESPACE__ . '\\Data_Semigroup_Foldable_fold1';

