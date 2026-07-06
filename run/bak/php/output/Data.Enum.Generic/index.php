<?php

namespace Data\Enum\Generic;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded.Generic/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Enum.Generic/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
      case 'Data_Enum_Generic_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Enum_Generic_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_Enum_Generic_unwrap': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Enum_Generic_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Enum_Generic_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Enum_Generic_greaterThanOrEq': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Enum_Generic_lessThan': $v = \Data\Ord\Data_Ord_lessThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Enum_Generic_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Enum_Generic_mul': $v = ($GLOBALS['Data_Semiring_intMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intMul')); break;
      case 'Data_Enum_Generic_apply': $v = (($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe')))->apply; break;
      case 'Data_Enum_Generic_div': $v = ($GLOBALS['Data_EuclideanRing_intDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intDiv')); break;
      case 'Data_Enum_Generic_mod': $v = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')); break;
      case 'Data_Enum_Generic_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Enum_Generic_genericEnumNoArguments': $v = (object)["genericPred'" => function($v) {
  $__num = func_num_args();
  $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericSucc'" => function($v) {
  $__num = func_num_args();
  $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Enum_Generic_genericBoundedEnumNoArguments': $v = (object)["genericCardinality'" => 1, "genericToEnum'" => function($i) {
  $__num = func_num_args();
  $__case_0 = ($i === 0);
  switch ($__case_0) {
case true:
$__res = new Phpurs_Data1("Just", ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")));
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericFromEnum'" => function($v) {
  $__num = func_num_args();
  $__res = 0;
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















// Data_Enum_Generic_GenericEnum$Dict
function Data_Enum_Generic_GenericEnum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_GenericEnum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_GenericEnum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_Generic_GenericEnum__dollar__Dict';

// Data_Enum_Generic_GenericBoundedEnum$Dict
function Data_Enum_Generic_GenericBoundedEnum__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_GenericBoundedEnum__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_GenericBoundedEnum__dollar__Dict'] = __NAMESPACE__ . '\\Data_Enum_Generic_GenericBoundedEnum__dollar__Dict';

// Data_Enum_Generic_genericToEnum'
function Data_Enum_Generic_genericToEnum__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericToEnum__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericToEnum__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericToEnum__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericToEnum__prime__';

// Data_Enum_Generic_genericToEnum
function Data_Enum_Generic_genericToEnum($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericToEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_compose = ($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose'));
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $to = ($dictGeneric)->to;
  $__res = function($dictGenericBoundedEnum) use ($__global_Data_Enum_Generic_compose, $__global_Data_Enum_Generic_map, $to) {
  $__num = func_num_args();
  $__res = ($__global_Data_Enum_Generic_compose)(($__global_Data_Enum_Generic_map)($to), ($dictGenericBoundedEnum)->genericToEnum__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericToEnum'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericToEnum';

// Data_Enum_Generic_genericSucc'
function Data_Enum_Generic_genericSucc__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericSucc__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericSucc__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericSucc__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericSucc__prime__';

// Data_Enum_Generic_genericSucc
function Data_Enum_Generic_genericSucc($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericSucc';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_compose = ($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose'));
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $to = ($dictGeneric)->to;
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericEnum) use ($__global_Data_Enum_Generic_compose, $__global_Data_Enum_Generic_map, $to, $from) {
  $__num = func_num_args();
  $__res = ($__global_Data_Enum_Generic_compose)(($__global_Data_Enum_Generic_map)($to), ($__global_Data_Enum_Generic_compose)(($dictGenericEnum)->genericSucc__prime__, $from));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericSucc'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericSucc';

// Data_Enum_Generic_genericPred'
function Data_Enum_Generic_genericPred__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericPred__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericPred__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericPred__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericPred__prime__';

// Data_Enum_Generic_genericPred
function Data_Enum_Generic_genericPred($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericPred';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_compose = ($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose'));
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $to = ($dictGeneric)->to;
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericEnum) use ($__global_Data_Enum_Generic_compose, $__global_Data_Enum_Generic_map, $to, $from) {
  $__num = func_num_args();
  $__res = ($__global_Data_Enum_Generic_compose)(($__global_Data_Enum_Generic_map)($to), ($__global_Data_Enum_Generic_compose)(($dictGenericEnum)->genericPred__prime__, $from));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericPred'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericPred';

// Data_Enum_Generic_genericFromEnum'
function Data_Enum_Generic_genericFromEnum__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericFromEnum__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericFromEnum__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericFromEnum__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericFromEnum__prime__';

// Data_Enum_Generic_genericFromEnum
function Data_Enum_Generic_genericFromEnum($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericFromEnum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_compose = ($GLOBALS['Data_Enum_Generic_compose'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_compose'));
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericBoundedEnum) use ($__global_Data_Enum_Generic_compose, $from) {
  $__num = func_num_args();
  $__res = ($__global_Data_Enum_Generic_compose)(($dictGenericBoundedEnum)->genericFromEnum__prime__, $from);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericFromEnum'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericFromEnum';

// Data_Enum_Generic_genericEnumSum
function Data_Enum_Generic_genericEnumSum($dictGenericEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericEnumSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $genericPred__prime__1 = ($dictGenericEnum)->genericPred__prime__;
  $genericSucc__prime__1 = ($dictGenericEnum)->genericSucc__prime__;
  $__res = function($dictGenericTop) use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericSucc__prime__1) {
  $__num = func_num_args();
  $genericTop__prime__ = ($dictGenericTop)->genericTop__prime__;
  $__res = function($dictGenericEnum1) use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericTop__prime__, $genericSucc__prime__1) {
  $__num = func_num_args();
  $genericPred__prime__2 = ($dictGenericEnum1)->genericPred__prime__;
  $genericSucc__prime__2 = ($dictGenericEnum1)->genericSucc__prime__;
  $__res = function($dictGenericBottom) use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__, $genericSucc__prime__1, $genericSucc__prime__2) {
  $__num = func_num_args();
  $genericBottom__prime__ = ($dictGenericBottom)->genericBottom__prime__;
  $__res = (object)["genericPred'" => function($v) use ($__global_Data_Enum_Generic_map, $genericPred__prime__1, $genericPred__prime__2, $genericTop__prime__) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
$__res = ($__global_Data_Enum_Generic_map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Inl", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($genericPred__prime__1)($a));
goto __end;;
break;
case "Inr":
$b = ($__case_0)->v0;
$v1 = ($genericPred__prime__2)($b);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
$__res = new Phpurs_Data1("Just", new Phpurs_Data1("Inl", $genericTop__prime__));
goto __end;;
break;
case "Just":
$b__prime__ = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", new Phpurs_Data1("Inr", $b__prime__));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericSucc'" => function($v) use ($genericSucc__prime__1, $genericBottom__prime__, $__global_Data_Enum_Generic_map, $genericSucc__prime__2) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
$v1 = ($genericSucc__prime__1)($a);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Nothing":
$__res = new Phpurs_Data1("Just", new Phpurs_Data1("Inr", $genericBottom__prime__));
goto __end;;
break;
case "Just":
$a__prime__ = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", new Phpurs_Data1("Inl", $a__prime__));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
case "Inr":
$b = ($__case_0)->v0;
$__res = ($__global_Data_Enum_Generic_map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Inr", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($genericSucc__prime__2)($b));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
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
$GLOBALS['Data_Enum_Generic_genericEnumSum'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericEnumSum';

// Data_Enum_Generic_genericEnumProduct
function Data_Enum_Generic_genericEnumProduct($dictGenericEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericEnumProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $genericPred__prime__1 = ($dictGenericEnum)->genericPred__prime__;
  $genericSucc__prime__1 = ($dictGenericEnum)->genericSucc__prime__;
  $__res = (function() use ($__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__1, &$__fn) {
  $__fn = function($dictGenericTop, $dictGenericBottom = null, $dictGenericEnum1 = null) use ($__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($dictGenericEnum1) use ($dictGenericTop, $dictGenericBottom, &$__fn) { return $__fn($dictGenericTop, $dictGenericBottom, $dictGenericEnum1); };
    if ($__num === 1) return function($dictGenericBottom, $dictGenericEnum1 = null) use ($dictGenericTop, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($dictGenericTop, $dictGenericBottom, $dictGenericEnum1);
      if ($__num2 === 1) return function($dictGenericEnum1) use ($dictGenericTop, $dictGenericBottom, &$__fn) { return $__fn($dictGenericTop, $dictGenericBottom, $dictGenericEnum1); };
      return phpurs_curry_fallback($__fn, [$dictGenericTop], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $genericPred__prime__2 = ($dictGenericEnum1)->genericPred__prime__;
  $genericSucc__prime__2 = ($dictGenericEnum1)->genericSucc__prime__;
  $__res = function($dictGenericTop1) use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__num = func_num_args();
  $genericTop__prime__ = ($dictGenericTop1)->genericTop__prime__;
  $__res = function($dictGenericBottom1) use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericTop__prime__, $genericPred__prime__1, $genericSucc__prime__2, $genericSucc__prime__1) {
  $__num = func_num_args();
  $genericBottom__prime__ = ($dictGenericBottom1)->genericBottom__prime__;
  $__res = (object)["genericPred'" => function($v) use ($genericPred__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericTop__prime__, $genericPred__prime__1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
$v1 = ($genericPred__prime__2)($b);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Just":
$p = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", new Phpurs_Data2("Product", $a, $p));
goto __end;;
break;
case "Nothing":
$__res = ($__global_Data_Enum_Generic_map)(($__global_Data_Function_flip)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $genericTop__prime__), ($genericPred__prime__1)($a));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericSucc'" => function($v) use ($genericSucc__prime__2, $__global_Data_Enum_Generic_map, $__global_Data_Function_flip, $genericBottom__prime__, $genericSucc__prime__1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
$v1 = ($genericSucc__prime__2)($b);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "Just":
$s = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", new Phpurs_Data2("Product", $a, $s));
goto __end;;
break;
case "Nothing":
$__res = ($__global_Data_Enum_Generic_map)(($__global_Data_Function_flip)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), $genericBottom__prime__), ($genericSucc__prime__1)($a));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
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
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericEnumProduct'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericEnumProduct';


// Data_Enum_Generic_genericEnumConstructor
function Data_Enum_Generic_genericEnumConstructor($dictGenericEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericEnumConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $__global_Data_Generic_Rep_Constructor = ($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor'));
  $genericPred__prime__1 = ($dictGenericEnum)->genericPred__prime__;
  $genericSucc__prime__1 = ($dictGenericEnum)->genericSucc__prime__;
  $__res = (object)["genericPred'" => function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericPred__prime__1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Constructor, ($genericPred__prime__1)($a));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericSucc'" => function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericSucc__prime__1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Constructor, ($genericSucc__prime__1)($a));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericEnumConstructor'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericEnumConstructor';

// Data_Enum_Generic_genericEnumArgument
function Data_Enum_Generic_genericEnumArgument($dictEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericEnumArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $__global_Data_Generic_Rep_Argument = ($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument'));
  $pred = ($dictEnum)->pred;
  $succ = ($dictEnum)->succ;
  $__res = (object)["genericPred'" => function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $pred) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Argument, ($pred)($a));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericSucc'" => function($v) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $succ) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Argument, ($succ)($a));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericEnumArgument'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericEnumArgument';

// Data_Enum_Generic_genericCardinality'
function Data_Enum_Generic_genericCardinality__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericCardinality__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericCardinality__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericCardinality__prime__'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericCardinality__prime__';

// Data_Enum_Generic_genericCardinality
function Data_Enum_Generic_genericCardinality($dictGeneric, $dictGenericBoundedEnum = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericCardinality';
  if ($__num < 2) {
    if ($__num === 1) return function($dictGenericBoundedEnum) use ($dictGeneric, $__fn) { return $__fn($dictGeneric, $dictGenericBoundedEnum); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
  $__res = ($__global_Data_Enum_Generic_unwrap)(($dictGenericBoundedEnum)->genericCardinality__prime__);
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericCardinality'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericCardinality';

// Data_Enum_Generic_genericBoundedEnumSum
function Data_Enum_Generic_genericBoundedEnumSum($dictGenericBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericBoundedEnumSum';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
  $genericCardinality__prime__1 = ($dictGenericBoundedEnum)->genericCardinality__prime__;
  $genericToEnum__prime__1 = ($dictGenericBoundedEnum)->genericToEnum__prime__;
  $genericFromEnum__prime__1 = ($dictGenericBoundedEnum)->genericFromEnum__prime__;
  $__res = function($dictGenericBoundedEnum1) use ($__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1, $genericFromEnum__prime__1) {
  $__num = func_num_args();
  $genericToEnum__prime__2 = ($dictGenericBoundedEnum1)->genericToEnum__prime__;
  $genericFromEnum__prime__2 = ($dictGenericBoundedEnum1)->genericFromEnum__prime__;
  $__res = (object)["genericCardinality'" => (($__global_Data_Enum_Generic_unwrap)($genericCardinality__prime__1) + ($__global_Data_Enum_Generic_unwrap)(($dictGenericBoundedEnum1)->genericCardinality__prime__)), "genericToEnum'" => function($n) use ($genericCardinality__prime__1) {
  $__num = func_num_args();
  $to = function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$ca = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($to)($genericCardinality__prime__1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericFromEnum'" => function($v) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, $__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Inl":
$a = ($__case_0)->v0;
$__res = ($genericFromEnum__prime__1)($a);
goto __end;;
break;
case "Inr":
$b = ($__case_0)->v0;
$__res = (($genericFromEnum__prime__2)($b) + ($__global_Data_Enum_Generic_unwrap)($genericCardinality__prime__1));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
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
$GLOBALS['Data_Enum_Generic_genericBoundedEnumSum'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericBoundedEnumSum';

// Data_Enum_Generic_genericBoundedEnumProduct
function Data_Enum_Generic_genericBoundedEnumProduct($dictGenericBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericBoundedEnumProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
  $__global_Data_Enum_Generic_apply = ($GLOBALS['Data_Enum_Generic_apply'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_apply'));
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $__global_Data_EuclideanRing_intMod = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod'));
  $genericCardinality__prime__1 = ($dictGenericBoundedEnum)->genericCardinality__prime__;
  $genericToEnum__prime__1 = ($dictGenericBoundedEnum)->genericToEnum__prime__;
  $genericFromEnum__prime__1 = ($dictGenericBoundedEnum)->genericFromEnum__prime__;
  $__res = function($dictGenericBoundedEnum1) use ($__global_Data_Enum_Generic_unwrap, $genericCardinality__prime__1, $__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $__global_Data_EuclideanRing_intMod, $genericFromEnum__prime__1) {
  $__num = func_num_args();
  $genericCardinality__prime__2 = ($dictGenericBoundedEnum1)->genericCardinality__prime__;
  $genericToEnum__prime__2 = ($dictGenericBoundedEnum1)->genericToEnum__prime__;
  $genericFromEnum__prime__2 = ($dictGenericBoundedEnum1)->genericFromEnum__prime__;
  $from = (function() use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericFromEnum__prime__1, $genericFromEnum__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_1)->tag) {
case "Product":
$cb = $__case_0;
$a = ($__case_1)->v0;
$b = ($__case_1)->v1;
$__res = ((($genericFromEnum__prime__1)($a) * $cb) + ($genericFromEnum__prime__2)($b));
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
  $__res = (object)["genericCardinality'" => (($__global_Data_Enum_Generic_unwrap)($genericCardinality__prime__1) * ($__global_Data_Enum_Generic_unwrap)($genericCardinality__prime__2)), "genericToEnum'" => function($n) use ($__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $genericToEnum__prime__2, $__global_Data_EuclideanRing_intMod, $genericCardinality__prime__2) {
  $__num = func_num_args();
  $to = function($v) use ($__global_Data_Enum_Generic_apply, $__global_Data_Enum_Generic_map, $genericToEnum__prime__1, $n, $genericToEnum__prime__2, $__global_Data_EuclideanRing_intMod) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$cb = $__case_0;
$__res = ($__global_Data_Enum_Generic_apply)(($__global_Data_Enum_Generic_map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($value1) use ($value0, &$__fn) { return $__fn($value0, $value1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($genericToEnum__prime__1)(($n / $cb))), ($genericToEnum__prime__2)(($__global_Data_EuclideanRing_intMod)($n, $cb)));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($to)($genericCardinality__prime__2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericFromEnum'" => ($from)($genericCardinality__prime__2)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericBoundedEnumProduct'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericBoundedEnumProduct';


// Data_Enum_Generic_genericBoundedEnumConstructor
function Data_Enum_Generic_genericBoundedEnumConstructor($dictGenericBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericBoundedEnumConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $__global_Data_Generic_Rep_Constructor = ($GLOBALS['Data_Generic_Rep_Constructor'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Constructor'));
  $genericToEnum__prime__1 = ($dictGenericBoundedEnum)->genericToEnum__prime__;
  $genericFromEnum__prime__1 = ($dictGenericBoundedEnum)->genericFromEnum__prime__;
  $__res = (object)["genericCardinality'" => ($__global_Data_Enum_Generic_unwrap)(($dictGenericBoundedEnum)->genericCardinality__prime__), "genericToEnum'" => function($i) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Constructor, $genericToEnum__prime__1) {
  $__num = func_num_args();
  $__res = ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Constructor, ($genericToEnum__prime__1)($i));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericFromEnum'" => function($v) use ($genericFromEnum__prime__1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = ($genericFromEnum__prime__1)($a);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericBoundedEnumConstructor'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericBoundedEnumConstructor';

// Data_Enum_Generic_genericBoundedEnumArgument
function Data_Enum_Generic_genericBoundedEnumArgument($dictBoundedEnum) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Enum_Generic_genericBoundedEnumArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Enum_Generic_unwrap = ($GLOBALS['Data_Enum_Generic_unwrap'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_unwrap'));
  $__global_Data_Enum_Generic_map = ($GLOBALS['Data_Enum_Generic_map'] ?? \Data\Enum\Generic\phpurs_eval_thunk('Data_Enum_Generic_map'));
  $__global_Data_Generic_Rep_Argument = ($GLOBALS['Data_Generic_Rep_Argument'] ?? \Data\Generic\Rep\phpurs_eval_thunk('Data_Generic_Rep_Argument'));
  $toEnum = ($dictBoundedEnum)->toEnum;
  $fromEnum = ($dictBoundedEnum)->fromEnum;
  $__res = (object)["genericCardinality'" => ($__global_Data_Enum_Generic_unwrap)(($dictBoundedEnum)->cardinality), "genericToEnum'" => function($i) use ($__global_Data_Enum_Generic_map, $__global_Data_Generic_Rep_Argument, $toEnum) {
  $__num = func_num_args();
  $__res = ($__global_Data_Enum_Generic_map)($__global_Data_Generic_Rep_Argument, ($toEnum)($i));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "genericFromEnum'" => function($v) use ($fromEnum) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = ($fromEnum)($a);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Enum_Generic_genericBoundedEnumArgument'] = __NAMESPACE__ . '\\Data_Enum_Generic_genericBoundedEnumArgument';

