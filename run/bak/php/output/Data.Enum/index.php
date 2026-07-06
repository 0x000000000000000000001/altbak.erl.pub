<?php

namespace Data\Enum;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';

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
      case 'Data_Enum_lessThan': $v = \Data\Ord\Data_Ord_lessThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Enum_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Enum_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Enum_bottom1': $v = ($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar')); break;
      case 'Data_Enum_top1': $v = ($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar')); break;
      case 'Data_Enum_enumChar': $v = (object)["succ" => \Data\Enum\Data_Enum_defaultSucc("\\Data\\Enum\\Data_Enum_charToEnum", ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode'))), "pred" => \Data\Enum\Data_Enum_defaultPred("\\Data\\Enum\\Data_Enum_charToEnum", ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode'))), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordChar = ($GLOBALS['Data_Ord_ordChar'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordChar'));
  $__res = $__global_Data_Ord_ordChar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Enum_boundedEnumChar': $v = (object)["cardinality" => ((($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')))(($GLOBALS['Data_Bounded_topChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_topChar'))) - (($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')))(($GLOBALS['Data_Bounded_bottomChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_bottomChar')))), "toEnum" => "\\Data\\Enum\\Data_Enum_charToEnum", "fromEnum" => ($GLOBALS['Data_Enum_toCharCode'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_toCharCode')), "Bounded0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Bounded_boundedChar = ($GLOBALS['Data_Bounded_boundedChar'] ?? \Data\Bounded\phpurs_eval_thunk('Data_Bounded_boundedChar'));
  $__res = $__global_Data_Bounded_boundedChar;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Enum1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Enum_enumChar = ($GLOBALS['Data_Enum_enumChar'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_enumChar'));
  $__res = $__global_Data_Enum_enumChar;
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







// Data_Enum_Enum$Dict
function Data_Enum_Enum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Enum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Enum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_Enum__dollar__Dict';

// Data_Enum_Cardinality
function Data_Enum_Cardinality($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Cardinality';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Cardinality'] = __NAMESPACE__ . '\\Data_Enum_Cardinality';

// Data_Enum_BoundedEnum$Dict
function Data_Enum_BoundedEnum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_BoundedEnum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_BoundedEnum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_BoundedEnum__dollar__Dict';

// Data_Enum_toEnum
function Data_Enum_toEnum($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_toEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->toEnum;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_toEnum'] = __NAMESPACE__ . '\\Data_Enum_toEnum';

// Data_Enum_fromEnum
function Data_Enum_fromEnum($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_fromEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->fromEnum;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_fromEnum'] = __NAMESPACE__ . '\\Data_Enum_fromEnum';

// Data_Enum_toEnumWithDefaults
function Data_Enum_toEnumWithDefaults($dictBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_toEnumWithDefaults';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Enum_lessThan = ($GLOBALS['Data_Enum_lessThan'] ?? \Data\Enum\phpurs_eval_thunk('Data_Enum_lessThan'));
  $toEnum1 = ($dictBoundedEnum)->toEnum;
  $fromEnum1 = ($dictBoundedEnum)->fromEnum;
  $bottom2 = ((($dictBoundedEnum)->Bounded0)($__global_Prim_undefined))->bottom;
  $__res = (function() use ($toEnum1, $__global_Data_Enum_lessThan, $fromEnum1, $bottom2, &$__fn) {
  $__fn = function($low, $high = null, $x = null) use ($toEnum1, $__global_Data_Enum_lessThan, $fromEnum1, $bottom2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($x) use ($low, $high, &$__fn) { return $__fn($low, $high, $x); };
    if ($__num === 1) return function($high, $x = null) use ($low, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($low, $high, $x);
      if ($__num2 === 1) return function($x) use ($low, $high, &$__fn) { return $__fn($low, $high, $x); };
      return phpurs_curry_fallback($__fn, [$low], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $v = ($toEnum1)($x);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Just":
$enum = ($__case_0)->v0;
$__res = $enum;
goto __end;;
break;
case "Nothing":
$__case_0 = ($__global_Data_Enum_lessThan)($x, ($fromEnum1)($bottom2));
switch ($__case_0) {
case true:
$__res = $low;
goto __end;;
break;
default:
$__res = $high;
goto __end;;
break;
};
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
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_toEnumWithDefaults'] = __NAMESPACE__ . '\\Data_Enum_toEnumWithDefaults';

// Data_Enum_defaultSucc
function Data_Enum_defaultSucc($toEnum__prime__, $fromEnum__prime__ = null, $a = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultSucc';
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
    if ($__num === 1) return function($fromEnum__prime__, $a = null) use ($toEnum__prime__, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($toEnum__prime__, $fromEnum__prime__, $a);
      if ($__num2 === 1) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
      return phpurs_curry_fallback($__fn, [$toEnum__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($toEnum__prime__)((($fromEnum__prime__)($a) + 1));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Enum_defaultSucc'] = __NAMESPACE__ . '\\Data_Enum_defaultSucc';

// Data_Enum_defaultPred
function Data_Enum_defaultPred($toEnum__prime__, $fromEnum__prime__ = null, $a = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_defaultPred';
  if ($__num < 3) {
    if ($__num === 2) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
    if ($__num === 1) return function($fromEnum__prime__, $a = null) use ($toEnum__prime__, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($toEnum__prime__, $fromEnum__prime__, $a);
      if ($__num2 === 1) return function($a) use ($toEnum__prime__, $fromEnum__prime__, $__fn) { return $__fn($toEnum__prime__, $fromEnum__prime__, $a); };
      return phpurs_curry_fallback($__fn, [$toEnum__prime__], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($toEnum__prime__)((($fromEnum__prime__)($a) - 1));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Enum_defaultPred'] = __NAMESPACE__ . '\\Data_Enum_defaultPred';

// Data_Enum_charToEnum
function Data_Enum_charToEnum($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_charToEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$n = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
if (true) {
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_charToEnum'] = __NAMESPACE__ . '\\Data_Enum_charToEnum';



