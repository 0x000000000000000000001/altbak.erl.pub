<?php

namespace Data\Decidable;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Comparison/index.php';
require_once __DIR__ . '/../Data.Decidable/index.php';
require_once __DIR__ . '/../Data.Decide/index.php';
require_once __DIR__ . '/../Data.Divisible/index.php';
require_once __DIR__ . '/../Data.Equivalence/index.php';
require_once __DIR__ . '/../Data.Op/index.php';
require_once __DIR__ . '/../Data.Predicate/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
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
      case 'Data_Decidable_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Decidable_decidablePredicate': $v = (object)["lose" => (function() use (&$__fn) {
  $__fn = function($f, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__res = ($__global_Data_Void_absurd)(($f)($a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Decide0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Decide_choosePredicate = ($GLOBALS['Data_Decide_choosePredicate'] ?? \Data\Decide\phpurs_eval_thunk('Data_Decide_choosePredicate'));
  $__res = $__global_Data_Decide_choosePredicate;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Divisible1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Divisible_divisiblePredicate = ($GLOBALS['Data_Divisible_divisiblePredicate'] ?? \Data\Divisible\phpurs_eval_thunk('Data_Divisible_divisiblePredicate'));
  $__res = $__global_Data_Divisible_divisiblePredicate;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Decidable_decidableEquivalence': $v = (object)["lose" => (function() use (&$__fn) {
  $__fn = function($f, $a = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__res = ($__global_Data_Void_absurd)(($f)($a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Decide0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Decide_chooseEquivalence = ($GLOBALS['Data_Decide_chooseEquivalence'] ?? \Data\Decide\phpurs_eval_thunk('Data_Decide_chooseEquivalence'));
  $__res = $__global_Data_Decide_chooseEquivalence;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Divisible1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Divisible_divisibleEquivalence = ($GLOBALS['Data_Divisible_divisibleEquivalence'] ?? \Data\Divisible\phpurs_eval_thunk('Data_Divisible_divisibleEquivalence'));
  $__res = $__global_Data_Divisible_divisibleEquivalence;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Decidable_decidableComparison': $v = (object)["lose" => (function() use (&$__fn) {
  $__fn = function($f, $a = null, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
    if ($__num === 1) return function($a, $v = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $a, $v);
      if ($__num2 === 1) return function($v) use ($f, $a, &$__fn) { return $__fn($f, $a, $v); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $__res = ($__global_Data_Void_absurd)(($f)($a));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Decide0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Decide_chooseComparison = ($GLOBALS['Data_Decide_chooseComparison'] ?? \Data\Decide\phpurs_eval_thunk('Data_Decide_chooseComparison'));
  $__res = $__global_Data_Decide_chooseComparison;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Divisible1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Divisible_divisibleComparison = ($GLOBALS['Data_Divisible_divisibleComparison'] ?? \Data\Divisible\phpurs_eval_thunk('Data_Divisible_divisibleComparison'));
  $__res = $__global_Data_Divisible_divisibleComparison;
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



// Data_Decidable_Decidable$Dict
function Data_Decidable_Decidable__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Decidable_Decidable__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Decidable_Decidable__dollar__Dict'] = __NAMESPACE__ . '\\Data_Decidable_Decidable__dollar__Dict';

// Data_Decidable_lose
function Data_Decidable_lose($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Decidable_lose';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->lose;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Decidable_lose'] = __NAMESPACE__ . '\\Data_Decidable_lose';

// Data_Decidable_lost
function Data_Decidable_lost($dictDecidable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Decidable_lost';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Decidable_identity = ($GLOBALS['Data_Decidable_identity'] ?? \Data\Decidable\phpurs_eval_thunk('Data_Decidable_identity'));
  $__res = (($dictDecidable)->lose)($__global_Data_Decidable_identity);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Decidable_lost'] = __NAMESPACE__ . '\\Data_Decidable_lost';


// Data_Decidable_decidableOp
function Data_Decidable_decidableOp($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Decidable_decidableOp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Decide_chooseOp = ($GLOBALS['Data_Decide_chooseOp'] ?? \Data\Decide\phpurs_eval_thunk('Data_Decide_chooseOp'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Divisible_divisibleOp = ($GLOBALS['Data_Divisible_divisibleOp'] ?? \Data\Divisible\phpurs_eval_thunk('Data_Divisible_divisibleOp'));
  $__global_Data_Void_absurd = ($GLOBALS['Data_Void_absurd'] ?? \Data\Void\phpurs_eval_thunk('Data_Void_absurd'));
  $chooseOp = ($__global_Data_Decide_chooseOp)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $divisibleOp = ($__global_Data_Divisible_divisibleOp)($dictMonoid);
  $__res = (object)["lose" => (function() use ($__global_Data_Void_absurd, &$__fn) {
  $__fn = function($f, $a = null) use ($__global_Data_Void_absurd, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($f, &$__fn) { return $__fn($f, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Void_absurd)(($f)($a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Decide0" => function($__dollar____unused) use ($chooseOp) {
  $__num = func_num_args();
  $__res = $chooseOp;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Divisible1" => function($__dollar____unused) use ($divisibleOp) {
  $__num = func_num_args();
  $__res = $divisibleOp;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Decidable_decidableOp'] = __NAMESPACE__ . '\\Data_Decidable_decidableOp';



