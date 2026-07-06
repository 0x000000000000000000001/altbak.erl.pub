<?php

namespace Control\Monad\Gen\Common;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Common/index.php';
require_once __DIR__ . '/../Control.Monad.Rec.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Control_Monad_Gen_Common_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_Gen_Common_max': $v = \Data\Ord\Data_Ord_max(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Control_Monad_Gen_Common_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Control_Monad_Gen_Common_lessThan': $v = \Data\Ord\Data_Ord_lessThan(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






// Control_Monad_Gen_Common_genTuple
function Control_Monad_Gen_Common_genTuple($dictApply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genTuple';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Apply_lift2 = ($GLOBALS['Control_Apply_lift2'] ?? \Control\Apply\phpurs_eval_thunk('Control_Apply_lift2'));
  $__res = ($__global_Control_Apply_lift2)($dictApply, (function() use (&$__fn) {
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
})());
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genTuple'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genTuple';

// Control_Monad_Gen_Common_genNonEmpty
function Control_Monad_Gen_Common_genNonEmpty($dictMonadRec) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genNonEmpty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Gen_unfoldable = ($GLOBALS['Control_Monad_Gen_unfoldable'] ?? \Control\Monad\Gen\phpurs_eval_thunk('Control_Monad_Gen_unfoldable'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Gen_Common_compose = ($GLOBALS['Control_Monad_Gen_Common_compose'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_compose'));
  $__global_Control_Monad_Gen_Common_max = ($GLOBALS['Control_Monad_Gen_Common_max'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_max'));
  $unfoldable = ($__global_Control_Monad_Gen_unfoldable)($dictMonadRec);
  $__res = function($dictMonadGen) use ($__global_Prim_undefined, $unfoldable, $__global_Control_Monad_Gen_Common_compose, $__global_Control_Monad_Gen_Common_max) {
  $__num = func_num_args();
  $Apply0 = (((((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined);
  $apply = ($Apply0)->apply;
  $map = ((($Apply0)->Functor0)($__global_Prim_undefined))->map;
  $resize = ($dictMonadGen)->resize;
  $unfoldable1 = ($unfoldable)($dictMonadGen);
  $__res = function($dictUnfoldable) use ($unfoldable1, $apply, $map, $resize, $__global_Control_Monad_Gen_Common_compose, $__global_Control_Monad_Gen_Common_max) {
  $__num = func_num_args();
  $unfoldable2 = ($unfoldable1)($dictUnfoldable);
  $__res = function($gen) use ($apply, $map, $resize, $__global_Control_Monad_Gen_Common_compose, $__global_Control_Monad_Gen_Common_max, $unfoldable2) {
  $__num = func_num_args();
  $__res = ($apply)(($map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("NonEmpty", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $gen), ($resize)(($__global_Control_Monad_Gen_Common_compose)(($__global_Control_Monad_Gen_Common_max)(0), function($v) {
  $__num = func_num_args();
  $__res = ($v - 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), ($unfoldable2)($gen)));
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
$GLOBALS['Control_Monad_Gen_Common_genNonEmpty'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genNonEmpty';

// Control_Monad_Gen_Common_genMaybe'
function Control_Monad_Gen_Common_genMaybe__prime__($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genMaybe__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Gen_Common_lessThan = ($GLOBALS['Control_Monad_Gen_Common_lessThan'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_lessThan'));
  $Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
  $Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
  $bind = ($Bind1)->bind;
  $chooseFloat = ($dictMonadGen)->chooseFloat;
  $map = ((((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (function() use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, $pure, &$__fn) {
  $__fn = function($bias, $gen = null) use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($gen) use ($bias, &$__fn) { return $__fn($bias, $gen); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($bind)(($chooseFloat)(0.0, 1.0), function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $gen, $pure) {
  $__num = func_num_args();
  $__case_0 = ($__global_Control_Monad_Gen_Common_lessThan)($n, $bias);
  switch ($__case_0) {
case true:
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $gen);
goto __end;;
break;
default:
$__res = ($pure)(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing")));
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
$GLOBALS['Control_Monad_Gen_Common_genMaybe__prime__'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genMaybe__prime__';

// Control_Monad_Gen_Common_genMaybe
function Control_Monad_Gen_Common_genMaybe($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Gen_Common_genMaybe__prime__ = ($GLOBALS['Control_Monad_Gen_Common_genMaybe__prime__'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_genMaybe__prime__'));
  $__res = ($__global_Control_Monad_Gen_Common_genMaybe__prime__)($dictMonadGen, 0.75);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genMaybe'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genMaybe';

// Control_Monad_Gen_Common_genIdentity
function Control_Monad_Gen_Common_genIdentity($dictFunctor) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genIdentity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Identity_Identity = ($GLOBALS['Data_Identity_Identity'] ?? \Data\Identity\phpurs_eval_thunk('Data_Identity_Identity'));
  $__res = (($dictFunctor)->map)($__global_Data_Identity_Identity);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genIdentity'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genIdentity';

// Control_Monad_Gen_Common_genEither'
function Control_Monad_Gen_Common_genEither__prime__($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genEither__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Gen_Common_lessThan = ($GLOBALS['Control_Monad_Gen_Common_lessThan'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_lessThan'));
  $Bind1 = (((($dictMonadGen)->Monad0)($__global_Prim_undefined))->Bind1)($__global_Prim_undefined);
  $bind = ($Bind1)->bind;
  $chooseFloat = ($dictMonadGen)->chooseFloat;
  $map = ((((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $__res = (function() use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, &$__fn) {
  $__fn = function($bias, $genA = null, $genB = null) use ($bind, $chooseFloat, $__global_Control_Monad_Gen_Common_lessThan, $map, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($genB) use ($bias, $genA, &$__fn) { return $__fn($bias, $genA, $genB); };
    if ($__num === 1) return function($genA, $genB = null) use ($bias, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($bias, $genA, $genB);
      if ($__num2 === 1) return function($genB) use ($bias, $genA, &$__fn) { return $__fn($bias, $genA, $genB); };
      return phpurs_curry_fallback($__fn, [$bias], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($bind)(($chooseFloat)(0.0, 1.0), function($n) use ($__global_Control_Monad_Gen_Common_lessThan, $bias, $map, $genA, $genB) {
  $__num = func_num_args();
  $__case_0 = ($__global_Control_Monad_Gen_Common_lessThan)($n, $bias);
  switch ($__case_0) {
case true:
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $genA);
goto __end;;
break;
default:
$__res = ($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $genB);
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
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
$GLOBALS['Control_Monad_Gen_Common_genEither__prime__'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genEither__prime__';

// Control_Monad_Gen_Common_genEither
function Control_Monad_Gen_Common_genEither($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Gen_Common_genEither';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Monad_Gen_Common_genEither__prime__ = ($GLOBALS['Control_Monad_Gen_Common_genEither__prime__'] ?? \Control\Monad\Gen\Common\phpurs_eval_thunk('Control_Monad_Gen_Common_genEither__prime__'));
  $__res = ($__global_Control_Monad_Gen_Common_genEither__prime__)($dictMonadGen, 0.5);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Gen_Common_genEither'] = __NAMESPACE__ . '\\Control_Monad_Gen_Common_genEither';

