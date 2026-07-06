<?php

namespace Data\Int;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.CommutativeRing/index.php';
require_once __DIR__ . '/../Data.DivisionRing/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Int.Bits/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
      case 'Data_Int_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Int_greaterThanOrEq': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Int_lessThanOrEq': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Int_notEq': $v = \Data\Eq\Data_Eq_notEq(($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'))); break;
      case 'Data_Int_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Int_greaterThanOrEq1': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Int_top': $v = ($GLOBALS['Data_Bounded_topInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topInt')); break;
      case 'Data_Int_lessThanOrEq1': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Int_bottom': $v = ($GLOBALS['Data_Bounded_bottomInt'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomInt')); break;
      case 'Data_Int_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Int_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Int_Even': $v = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even")); break;
      case 'Data_Int_Odd': $v = ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd")); break;
      case 'Data_Int_showParity': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Even":
$__res = "Even";
goto __end;;
break;
case "Odd":
$__res = "Odd";
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_octal': $v = 8; break;
      case 'Data_Int_hexadecimal': $v = 16; break;
      case 'Data_Int_fromStringAs': $v = (($GLOBALS['Data_Int_fromStringAsImpl'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromStringAsImpl')))(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Int_fromString': $v = (($GLOBALS['Data_Int_fromStringAs'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromStringAs')))(10); break;
      case 'Data_Int_fromNumber': $v = (($GLOBALS['Data_Int_fromNumberImpl'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromNumberImpl')))(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      case 'Data_Int_round': $v = (($GLOBALS['Data_Int_compose'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_compose')))("\\Data\\Int\\Data_Int_unsafeClamp", ($GLOBALS['Data_Number_round'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_round'))); break;
      case 'Data_Int_trunc': $v = (($GLOBALS['Data_Int_compose'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_compose')))("\\Data\\Int\\Data_Int_unsafeClamp", ($GLOBALS['Data_Number_trunc'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_trunc'))); break;
      case 'Data_Int_floor': $v = (($GLOBALS['Data_Int_compose'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_compose')))("\\Data\\Int\\Data_Int_unsafeClamp", ($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor'))); break;
      case 'Data_Int_eqParity': $v = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
$__res = true;
goto __end;;
} else {
if (true) {
$__res = false;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Int_eq1': $v = (($GLOBALS['Data_Int_eqParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eqParity')))->eq; break;
      case 'Data_Int_ordParity': $v = (object)["compare" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "Even") && (($__case_1)->tag === "Even"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "Even")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "Even")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Int_eqParity = ($GLOBALS['Data_Int_eqParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eqParity'));
  $__res = $__global_Data_Int_eqParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_semiringParity': $v = (object)["zero" => ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even")), "add" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Int_eq1 = ($GLOBALS['Data_Int_eq1'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_eq1'));
  $__case_0 = ($__global_Data_Int_eq1)($x, $y);
  switch ($__case_0) {
case true:
$__res = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even"));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd"));
goto __end;;
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd")), "mul" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (((($__case_0)->tag === "Odd") && (($__case_1)->tag === "Odd"))) {
$__res = ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd"));
goto __end;;
} else {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Int_ringParity': $v = (object)["sub" => (($GLOBALS['Data_Int_semiringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_semiringParity')))->add, "Semiring0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Int_semiringParity = ($GLOBALS['Data_Int_semiringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_semiringParity'));
  $__res = $__global_Data_Int_semiringParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_divisionRingParity': $v = (object)["recip" => (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity, "Ring0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Int_ringParity = ($GLOBALS['Data_Int_ringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_ringParity'));
  $__res = $__global_Data_Int_ringParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_decimal': $v = 10; break;
      case 'Data_Int_commutativeRingParity': $v = (object)["Ring0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Int_ringParity = ($GLOBALS['Data_Int_ringParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_ringParity'));
  $__res = $__global_Data_Int_ringParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_euclideanRingParity': $v = (object)["degree" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Even":
$__res = 0;
goto __end;;
break;
case "Odd":
$__res = 1;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "div" => (function() use (&$__fn) {
  $__fn = function($x, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($x, &$__fn) { return $__fn($x, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mod" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "CommutativeRing0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Int_commutativeRingParity = ($GLOBALS['Data_Int_commutativeRingParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_commutativeRingParity'));
  $__res = $__global_Data_Int_commutativeRingParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_ceil': $v = (($GLOBALS['Data_Int_compose'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_compose')))("\\Data\\Int\\Data_Int_unsafeClamp", ($GLOBALS['Data_Number_ceil'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_ceil'))); break;
      case 'Data_Int_boundedParity': $v = (object)["bottom" => ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even")), "top" => ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd")), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Int_ordParity = ($GLOBALS['Data_Int_ordParity'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_ordParity'));
  $__res = $__global_Data_Int_ordParity;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Int_binary': $v = 2; break;
      case 'Data_Int_base36': $v = 36; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };













// Data_Int_Radix
function Data_Int_Radix($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_Radix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_Radix'] = __NAMESPACE__ . '\\Data_Int_Radix';




// Data_Int_radix
function Data_Int_radix($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_radix';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $n;
  if (true) {
$n1 = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_radix'] = __NAMESPACE__ . '\\Data_Int_radix';

// Data_Int_odd
function Data_Int_odd($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_odd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Int_notEq = ($GLOBALS['Data_Int_notEq'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_notEq'));
  $__global_Data_Int_Bits_and = ($GLOBALS['Data_Int_Bits_and'] ?? \Data\Int\Bits\phpurs_eval_thunk('Data_Int_Bits_and'));
  $__res = ($__global_Data_Int_notEq)(($__global_Data_Int_Bits_and)($x, 1), 0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_odd'] = __NAMESPACE__ . '\\Data_Int_odd';






// Data_Int_unsafeClamp
function Data_Int_unsafeClamp($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_unsafeClamp';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $x;
  if (true) {
$x1 = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_unsafeClamp'] = __NAMESPACE__ . '\\Data_Int_unsafeClamp';




// Data_Int_even
function Data_Int_even($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_even';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Int_Bits_and = ($GLOBALS['Data_Int_Bits_and'] ?? \Data\Int\Bits\phpurs_eval_thunk('Data_Int_Bits_and'));
  $__res = (($__global_Data_Int_Bits_and)($x, 1) === 0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_even'] = __NAMESPACE__ . '\\Data_Int_even';

// Data_Int_parity
function Data_Int_parity($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Int_parity';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Int_even = ($GLOBALS['Data_Int_even'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_even'));
  $__case_0 = ($__global_Data_Int_even)($n);
  switch ($__case_0) {
case true:
$__res = ($GLOBALS['__phpurs_data0_Even'] ??= new Phpurs_Data0("Even"));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Odd'] ??= new Phpurs_Data0("Odd"));
goto __end;;
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Int_parity'] = __NAMESPACE__ . '\\Data_Int_parity';














