<?php

namespace Control\Monad\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Semigroup.Last/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
      case 'Control_Monad_Gen_lessThanOrEq': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Control_Monad_Gen_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Control_Monad_Gen_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_Gen_un': $v = \Data\Newtype\Data_Newtype_un(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Control_Monad_Gen_greaterThanOrEq': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Control_Monad_Gen_sub1': $v = ($GLOBALS['Data_Ring_numSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_numSub')); break;
      case 'Control_Monad_Gen_alaF': $v = \Data\Newtype\Data_Newtype_alaF(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined')), ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Control_Monad_Gen_monoidAdditive': $v = \Data\Monoid\Additive\Data_Monoid_Additive_monoidAdditive(($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber'))); break;
      case 'Control_Monad_Gen_Nil': $v = ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")); break;
      case 'Control_Monad_Gen_semigroupFreqSemigroup': $v = (object)["append" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$f = $__case_0;
$g = $__case_1;
$__res = function($pos) use ($f, $g) {
  $__num = func_num_args();
  $v2 = ($f)($pos);
  $__case_0 = $v2;
  if (((($__case_0)->tag === "Tuple") && ((($__case_0)->v0)->tag === "Just"))) {
$pos__prime__ = (($__case_0)->v0)->v0;
$__res = ($g)($pos__prime__);
goto __end;;
} else {
if (true) {
$result = $__case_0;
$__res = $result;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
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
})()]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };










// Control_Monad_Gen_Cons
function Control_Monad_Gen_Cons($value0, $value1 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Cons';
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, $__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Cons", $value0, $value1);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Cons'] = __NAMESPACE__ . '\\Control_Monad_Gen_Cons';


// Control_Monad_Gen_FreqSemigroup
function Control_Monad_Gen_FreqSemigroup($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_FreqSemigroup';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_FreqSemigroup'] = __NAMESPACE__ . '\\Control_Monad_Gen_FreqSemigroup';

// Control_Monad_Gen_unfoldable
function Control_Monad_Gen_unfoldable($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_unfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Gen_compose = ($GLOBALS['Control_Monad_Gen_compose'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_compose'));
  $tailRecM = ($dictMonadRec)->tailRecM;
  $__res = function($dictMonadGen) use ($__global_Prim_undefined, $__global_Control_Monad_Gen_compose, $tailRecM) {
  $__num = func_num_args();
  $Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
  $bind = ($Bind1)->bind;
  $map = ((((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $sized = ($dictMonadGen)->sized;
  $__res = function($dictUnfoldable) use ($map, $sized, $__global_Control_Monad_Gen_compose, $tailRecM) {
  $__num = func_num_args();
  $unfoldr = ($dictUnfoldable)->unfoldr;
  $__res = function($gen) use ($map, $unfoldr, $sized, $__global_Control_Monad_Gen_compose, $tailRecM) {
  $__num = func_num_args();
  $unfold = function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", $x, $xs));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $loopGen = function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$acc = ($__case_0)->v0;
$n = ($__case_0)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($map)(($unfoldr)($unfold), ($sized)(($__global_Control_Monad_Gen_compose)(($tailRecM)($loopGen), ((function() use (&$__fn) {
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
})())(($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil"))))));
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
$GLOBALS['Control_Monad_Gen_unfoldable'] = __NAMESPACE__ . '\\Control_Monad_Gen_unfoldable';


// Control_Monad_Gen_getFreqVal
function Control_Monad_Gen_getFreqVal($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_getFreqVal';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Gen_compose = ($GLOBALS['Control_Monad_Gen_compose'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_compose'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $__case_0 = $v;
  if (true) {
$f = $__case_0;
$__res = ($__global_Control_Monad_Gen_compose)($__global_Data_Tuple_snd, $f);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_getFreqVal'] = __NAMESPACE__ . '\\Control_Monad_Gen_getFreqVal';

// Control_Monad_Gen_fromIndex
function Control_Monad_Gen_fromIndex($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_fromIndex';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_Last_semigroupLast = ($GLOBALS['Data_Semigroup_Last_semigroupLast'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_semigroupLast'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Gen_un = ($GLOBALS['Control_Monad_Gen_un'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_un'));
  $__global_Data_Semigroup_Last_Last = ($GLOBALS['Data_Semigroup_Last_Last'] ?? \Data\Semigroup\Last\phpurs_eval_thunk('Data_Semigroup_Last_Last'));
  $foldMap1 = (($dictFoldable1)->foldMap1)($__global_Data_Semigroup_Last_semigroupLast);
  $foldr = ((($dictFoldable1)->Foldable0)($__global_Prim_undefined))->foldr;
  $__res = (function() use ($__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $foldr, &$__fn) {
  $__fn = function($i, $xs = null) use ($__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $foldr, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($xs) use ($i, &$__fn) { return $__fn($i, $xs); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $go = (function() use (&$go, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $xs, &$__fn) {
  $__fn = function($v, $v1 = null) use (&$go, $__global_Control_Monad_Gen_un, $__global_Data_Semigroup_Last_Last, $foldMap1, $xs, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
if (((($__case_1)->tag === "Cons") && ((($__case_1)->v1)->tag === "Nil"))) {
$a = ($__case_1)->v0;
$__res = $a;
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Cons":
$j = $__case_0;
$a = ($__case_1)->v0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
case "Cons":
$j = $__case_0;
$as = ($__case_1)->v1;
$__tco_tmp_0 = ($j - 1);
$__tco_tmp_1 = $as;
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
continue 2;
break;
case "Nil":
$__res = ($__global_Control_Monad_Gen_un)($__global_Data_Semigroup_Last_Last, ($foldMap1)($__global_Data_Semigroup_Last_Last, $xs));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
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
  $__res = ($go)($i, ($foldr)((function() use (&$__fn) {
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
})(), ($GLOBALS['__phpurs_data0_Nil'] ??= new Phpurs_Data0("Nil")), $xs));
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
$GLOBALS['Control_Monad_Gen_fromIndex'] = __NAMESPACE__ . '\\Control_Monad_Gen_fromIndex';

// Control_Monad_Gen_oneOf
function Control_Monad_Gen_oneOf($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_oneOf';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_length = ($GLOBALS['Data_Foldable_length'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_length'));
  $__global_Data_Semiring_semiringInt = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
  $__global_Control_Monad_Gen_fromIndex = ($GLOBALS['Control_Monad_Gen_fromIndex'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_fromIndex'));
  $bind = ((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->bind;
  $chooseInt = ($dictMonadGen)->chooseInt;
  $__res = function($dictFoldable1) use ($__global_Data_Foldable_length, $__global_Prim_undefined, $__global_Data_Semiring_semiringInt, $__global_Control_Monad_Gen_fromIndex, $bind, $chooseInt) {
  $__num = func_num_args();
  $length = ($__global_Data_Foldable_length)((($dictFoldable1)->Foldable0)($__global_Prim_undefined), $__global_Data_Semiring_semiringInt);
  $fromIndex1 = ($__global_Control_Monad_Gen_fromIndex)($dictFoldable1);
  $__res = function($xs) use ($bind, $chooseInt, $length, $fromIndex1) {
  $__num = func_num_args();
  $__res = ($bind)(($chooseInt)(0, (($length)($xs) - 1)), function($n) use ($fromIndex1, $xs) {
  $__num = func_num_args();
  $__res = ($fromIndex1)($n, $xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
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
$GLOBALS['Control_Monad_Gen_oneOf'] = __NAMESPACE__ . '\\Control_Monad_Gen_oneOf';

// Control_Monad_Gen_freqSemigroup
function Control_Monad_Gen_freqSemigroup($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_freqSemigroup';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Gen_greaterThanOrEq = ($GLOBALS['Control_Monad_Gen_greaterThanOrEq'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_greaterThanOrEq'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Tuple":
$weight = ($__case_0)->v0;
$x = ($__case_0)->v1;
$__res = function($pos) use ($__global_Control_Monad_Gen_greaterThanOrEq, $weight, $x) {
  $__num = func_num_args();
  $__case_0 = ($__global_Control_Monad_Gen_greaterThanOrEq)($pos, $weight);
  switch ($__case_0) {
case true:
$__res = new Phpurs_Data2("Tuple", new Phpurs_Data1("Just", ($pos - $weight)), $x);
goto __end;;
break;
default:
$__res = new Phpurs_Data2("Tuple", ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")), $x);
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_freqSemigroup'] = __NAMESPACE__ . '\\Control_Monad_Gen_freqSemigroup';

// Control_Monad_Gen_frequency
function Control_Monad_Gen_frequency($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_frequency';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Gen_monoidAdditive = ($GLOBALS['Control_Monad_Gen_monoidAdditive'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_monoidAdditive'));
  $__global_Control_Monad_Gen_semigroupFreqSemigroup = ($GLOBALS['Control_Monad_Gen_semigroupFreqSemigroup'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_semigroupFreqSemigroup'));
  $__global_Control_Monad_Gen_alaF = ($GLOBALS['Control_Monad_Gen_alaF'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_alaF'));
  $__global_Data_Monoid_Additive_Additive = ($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive'));
  $__global_Data_Tuple_fst = ($GLOBALS['Data_Tuple_fst'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_fst'));
  $__global_Control_Monad_Gen_getFreqVal = ($GLOBALS['Control_Monad_Gen_getFreqVal'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_getFreqVal'));
  $__global_Control_Monad_Gen_freqSemigroup = ($GLOBALS['Control_Monad_Gen_freqSemigroup'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_freqSemigroup'));
  $bind = ((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->bind;
  $chooseFloat = ($dictMonadGen)->chooseFloat;
  $__res = function($dictFoldable1) use ($__global_Prim_undefined, $__global_Control_Monad_Gen_monoidAdditive, $__global_Control_Monad_Gen_semigroupFreqSemigroup, $__global_Control_Monad_Gen_alaF, $__global_Data_Monoid_Additive_Additive, $__global_Data_Tuple_fst, $bind, $chooseFloat, $__global_Control_Monad_Gen_getFreqVal, $__global_Control_Monad_Gen_freqSemigroup) {
  $__num = func_num_args();
  $foldMap = (((($dictFoldable1)->Foldable0)($__global_Prim_undefined))->foldMap)($__global_Control_Monad_Gen_monoidAdditive);
  $foldMap1 = (($dictFoldable1)->foldMap1)($__global_Control_Monad_Gen_semigroupFreqSemigroup);
  $__res = function($xs) use ($__global_Control_Monad_Gen_alaF, $__global_Data_Monoid_Additive_Additive, $foldMap, $__global_Data_Tuple_fst, $bind, $chooseFloat, $__global_Control_Monad_Gen_getFreqVal, $foldMap1, $__global_Control_Monad_Gen_freqSemigroup) {
  $__num = func_num_args();
  $total = ($__global_Control_Monad_Gen_alaF)($__global_Data_Monoid_Additive_Additive, $foldMap, $__global_Data_Tuple_fst, $xs);
  $__res = ($bind)(($chooseFloat)(0.0, $total), ($__global_Control_Monad_Gen_getFreqVal)(($foldMap1)($__global_Control_Monad_Gen_freqSemigroup, $xs)));
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
$GLOBALS['Control_Monad_Gen_frequency'] = __NAMESPACE__ . '\\Control_Monad_Gen_frequency';

// Control_Monad_Gen_filtered
function Control_Monad_Gen_filtered($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_filtered';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $tailRecM = ($dictMonadRec)->tailRecM;
  $__res = function($dictMonadGen) use ($__global_Data_Functor_mapFlipped, $__global_Prim_undefined, $__global_Data_Unit_unit, $tailRecM) {
  $__num = func_num_args();
  $mapFlipped = ($__global_Data_Functor_mapFlipped)((((((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = function($gen) use ($mapFlipped, $__global_Data_Unit_unit, $tailRecM) {
  $__num = func_num_args();
  $go = function($v) use ($mapFlipped, $gen, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($mapFlipped)($gen, function($a) use ($__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__case_0 = $a;
  switch (($__case_0)->tag) {
case "Nothing":
$__res = new Phpurs_Data1("Loop", $__global_Data_Unit_unit);
goto __end;;
break;
case "Just":
$a__prime__ = ($__case_0)->v0;
$__res = new Phpurs_Data1("Done", $a__prime__);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($tailRecM)($go, $__global_Data_Unit_unit);
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
$GLOBALS['Control_Monad_Gen_filtered'] = __NAMESPACE__ . '\\Control_Monad_Gen_filtered';

// Control_Monad_Gen_suchThat
function Control_Monad_Gen_suchThat($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_suchThat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Gen_filtered = ($GLOBALS['Control_Monad_Gen_filtered'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_filtered'));
  $__global_Data_Functor_mapFlipped = ($GLOBALS['Data_Functor_mapFlipped'] ?? \Data\Functor\phpurs_eval_thunk('Data_Functor_mapFlipped'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $filtered1 = ($__global_Control_Monad_Gen_filtered)($dictMonadRec);
  $__res = function($dictMonadGen) use ($filtered1, $__global_Data_Functor_mapFlipped, $__global_Prim_undefined) {
  $__num = func_num_args();
  $filtered2 = ($filtered1)($dictMonadGen);
  $mapFlipped = ($__global_Data_Functor_mapFlipped)((((((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined));
  $__res = (function() use ($filtered2, $mapFlipped, &$__fn) {
  $__fn = function($gen, $pred = null) use ($filtered2, $mapFlipped, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($pred) use ($gen, &$__fn) { return $__fn($gen, $pred); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($filtered2)(($mapFlipped)($gen, function($a) use ($pred) {
  $__num = func_num_args();
  $__case_0 = ($pred)($a);
  switch ($__case_0) {
case true:
$__res = new Phpurs_Data1("Just", $a);
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
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
$GLOBALS['Control_Monad_Gen_suchThat'] = __NAMESPACE__ . '\\Control_Monad_Gen_suchThat';

// Control_Monad_Gen_elements
function Control_Monad_Gen_elements($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_elements';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_length = ($GLOBALS['Data_Foldable_length'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_length'));
  $__global_Data_Semiring_semiringInt = ($GLOBALS['Data_Semiring_semiringInt'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringInt'));
  $__global_Control_Monad_Gen_fromIndex = ($GLOBALS['Control_Monad_Gen_fromIndex'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_fromIndex'));
  $Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
  $bind = ((($Monad0)->Bind1)($__global_Prim_undefined))->bind;
  $chooseInt = ($dictMonadGen)->chooseInt;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = function($dictFoldable1) use ($__global_Data_Foldable_length, $__global_Prim_undefined, $__global_Data_Semiring_semiringInt, $__global_Control_Monad_Gen_fromIndex, $bind, $chooseInt, $pure) {
  $__num = func_num_args();
  $length = ($__global_Data_Foldable_length)((($dictFoldable1)->Foldable0)($__global_Prim_undefined), $__global_Data_Semiring_semiringInt);
  $fromIndex1 = ($__global_Control_Monad_Gen_fromIndex)($dictFoldable1);
  $__res = function($xs) use ($bind, $chooseInt, $length, $pure, $fromIndex1) {
  $__num = func_num_args();
  $__res = ($bind)(($chooseInt)(0, (($length)($xs) - 1)), function($n) use ($pure, $fromIndex1, $xs) {
  $__num = func_num_args();
  $__res = ($pure)(($fromIndex1)($n, $xs));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
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
$GLOBALS['Control_Monad_Gen_elements'] = __NAMESPACE__ . '\\Control_Monad_Gen_elements';

// Control_Monad_Gen_choose
function Control_Monad_Gen_choose($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_choose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $bind = ((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->bind;
  $chooseBool = ($dictMonadGen)->chooseBool;
  $__res = (function() use ($bind, $chooseBool, &$__fn) {
  $__fn = function($genA, $genB = null) use ($bind, $chooseBool, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($genB) use ($genA, &$__fn) { return $__fn($genA, $genB); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bind)($chooseBool, function($v) use ($genA, $genB) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch ($__case_0) {
case true:
$__res = $genA;
goto __end;;
break;
default:
$__res = $genB;
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
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
$GLOBALS['Control_Monad_Gen_choose'] = __NAMESPACE__ . '\\Control_Monad_Gen_choose';

