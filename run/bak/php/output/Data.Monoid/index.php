<?php

namespace Data\Monoid;

require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Record.Unsafe/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

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
      case 'Data_Monoid_semigroupRecord': $v = \Data\Semigroup\Data_Semigroup_semigroupRecord(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Monoid_lessThanOrEq': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Monoid_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Monoid_mod': $v = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')); break;
      case 'Data_Monoid_div': $v = ($GLOBALS['Data_EuclideanRing_intDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intDiv')); break;
      case 'Data_Monoid_monoidUnit': $v = (object)["mempty" => ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit')), "Semigroup0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Semigroup_semigroupUnit = ($GLOBALS['Data_Semigroup_semigroupUnit'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupUnit'));
  $__res = $__global_Data_Semigroup_semigroupUnit;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_monoidString': $v = (object)["mempty" => "", "Semigroup0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Semigroup_semigroupString = ($GLOBALS['Data_Semigroup_semigroupString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupString'));
  $__res = $__global_Data_Semigroup_semigroupString;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_monoidRecordNil': $v = (object)["memptyRecord" => function($v) {
  $__num = func_num_args();
  $__res = (object)[];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "SemigroupRecord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Semigroup_semigroupRecordNil = ($GLOBALS['Data_Semigroup_semigroupRecordNil'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupRecordNil'));
  $__res = $__global_Data_Semigroup_semigroupRecordNil;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_monoidOrdering': $v = (object)["mempty" => ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ")), "Semigroup0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ordering_semigroupOrdering = ($GLOBALS['Data_Ordering_semigroupOrdering'] ?? \Data\Ordering\phpurs_eval_thunk('Data_Ordering_semigroupOrdering'));
  $__res = $__global_Data_Ordering_semigroupOrdering;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Monoid_monoidArray': $v = (object)["mempty" => [], "Semigroup0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Semigroup_semigroupArray = ($GLOBALS['Data_Semigroup_semigroupArray'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupArray'));
  $__res = $__global_Data_Semigroup_semigroupArray;
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







// Data_Monoid_MonoidRecord$Dict
function Data_Monoid_MonoidRecord__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_MonoidRecord__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_MonoidRecord__dollar__Dict'] = __NAMESPACE__ . '\\Data_Monoid_MonoidRecord__dollar__Dict';

// Data_Monoid_Monoid$Dict
function Data_Monoid_Monoid__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_Monoid__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_Monoid__dollar__Dict'] = __NAMESPACE__ . '\\Data_Monoid_Monoid__dollar__Dict';






// Data_Monoid_memptyRecord
function Data_Monoid_memptyRecord($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_memptyRecord';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->memptyRecord;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_memptyRecord'] = __NAMESPACE__ . '\\Data_Monoid_memptyRecord';

// Data_Monoid_monoidRecord
function Data_Monoid_monoidRecord($__dollar____unused, $dictMonoidRecord = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_monoidRecord';
  if ($__num < 2) {
    if ($__num === 1) return function($dictMonoidRecord) use ($__dollar____unused, $__fn) { return $__fn($__dollar____unused, $dictMonoidRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Monoid_semigroupRecord = ($GLOBALS['Data_Monoid_semigroupRecord'] ?? \Data\Monoid\phpurs_eval_thunk('Data_Monoid_semigroupRecord'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $semigroupRecord1 = ($__global_Data_Monoid_semigroupRecord)((($dictMonoidRecord)->SemigroupRecord0)($__global_Prim_undefined));
  $__res = (object)["mempty" => (($dictMonoidRecord)->memptyRecord)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy"))), "Semigroup0" => function($__dollar____unused) use ($semigroupRecord1) {
  $__num = func_num_args();
  $__res = $semigroupRecord1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Monoid_monoidRecord'] = __NAMESPACE__ . '\\Data_Monoid_monoidRecord';

// Data_Monoid_mempty
function Data_Monoid_mempty($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_mempty';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->mempty;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_mempty'] = __NAMESPACE__ . '\\Data_Monoid_mempty';

// Data_Monoid_monoidFn
function Data_Monoid_monoidFn($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_monoidFn';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_semigroupFn = ($GLOBALS['Data_Semigroup_semigroupFn'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupFn'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $mempty1 = ($dictMonoid)->mempty;
  $semigroupFn = ($__global_Data_Semigroup_semigroupFn)((($dictMonoid)->Semigroup0)($__global_Prim_undefined));
  $__res = (object)["mempty" => function($v) use ($mempty1) {
  $__num = func_num_args();
  $__res = $mempty1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Semigroup0" => function($__dollar____unused) use ($semigroupFn) {
  $__num = func_num_args();
  $__res = $semigroupFn;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_monoidFn'] = __NAMESPACE__ . '\\Data_Monoid_monoidFn';

// Data_Monoid_monoidRecordCons
function Data_Monoid_monoidRecordCons($dictIsSymbol) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_monoidRecordCons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Semigroup_semigroupRecordCons = ($GLOBALS['Data_Semigroup_semigroupRecordCons'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_semigroupRecordCons'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Record_Unsafe_unsafeSet = ($GLOBALS['Record_Unsafe_unsafeSet'] ?? \Record\Unsafe\phpurs_eval_thunk('Record_Unsafe_unsafeSet'));
  $reflectSymbol = ($dictIsSymbol)->reflectSymbol;
  $semigroupRecordCons = ($__global_Data_Semigroup_semigroupRecordCons)($dictIsSymbol, $__global_Prim_undefined);
  $__res = function($dictMonoid) use ($__global_Prim_undefined, $semigroupRecordCons, $reflectSymbol, $__global_Record_Unsafe_unsafeSet) {
  $__num = func_num_args();
  $mempty1 = ($dictMonoid)->mempty;
  $Semigroup0 = (($dictMonoid)->Semigroup0)($__global_Prim_undefined);
  $__res = (function() use ($semigroupRecordCons, $__global_Prim_undefined, &$Semigroup0, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $mempty1, &$__fn) {
  $__fn = function($__dollar____unused, $dictMonoidRecord = null) use ($semigroupRecordCons, $__global_Prim_undefined, &$Semigroup0, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictMonoidRecord) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $dictMonoidRecord); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $memptyRecord1 = ($dictMonoidRecord)->memptyRecord;
  $semigroupRecordCons1 = ($semigroupRecordCons)((($dictMonoidRecord)->SemigroupRecord0)($__global_Prim_undefined), $Semigroup0);
  $__res = (object)["memptyRecord" => function($v) use ($memptyRecord1, $reflectSymbol, $__global_Record_Unsafe_unsafeSet, $mempty1) {
  $__num = func_num_args();
  $tail = ($memptyRecord1)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
  $key = ($reflectSymbol)(($GLOBALS['__phpurs_data0_Proxy'] ??= new Phpurs_Data0("Proxy")));
  $insert = ($__global_Record_Unsafe_unsafeSet)($key);
  $__res = ($insert)($mempty1, $tail);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "SemigroupRecord0" => function($__dollar____unused) use ($semigroupRecordCons1) {
  $__num = func_num_args();
  $__res = $semigroupRecordCons1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
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
$GLOBALS['Data_Monoid_monoidRecordCons'] = __NAMESPACE__ . '\\Data_Monoid_monoidRecordCons';

// Data_Monoid_power
function Data_Monoid_power($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_power';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $mempty1 = ($dictMonoid)->mempty;
  $append = ((($dictMonoid)->Semigroup0)($__global_Prim_undefined))->append;
  $__res = function($x) {
  $__num = func_num_args();
  $go = function($p) {
  $__num = func_num_args();
  while (true) {
$__case_0 = $p;
if (true) {
$p1 = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = $go;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_power'] = __NAMESPACE__ . '\\Data_Monoid_power';

// Data_Monoid_guard
function Data_Monoid_guard($dictMonoid) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Monoid_guard';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $mempty1 = ($dictMonoid)->mempty;
  $__res = (function() use ($mempty1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($mempty1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch ($__case_0) {
case true:
$a = $__case_1;
$__res = $a;
goto __end;;
break;
case false:
$__res = $mempty1;
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
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Monoid_guard'] = __NAMESPACE__ . '\\Data_Monoid_guard';

