<?php

namespace Data\Semiring\Generic;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Semiring.Generic/index.php';
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
      case 'Data_Semiring_Generic_genericSemiringNoArguments': $v = (object)["genericAdd'" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")), "genericMul'" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"))]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Semiring_Generic_GenericSemiring$Dict
function Data_Semiring_Generic_GenericSemiring__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_GenericSemiring__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_GenericSemiring__dollar__Dict'] = __NAMESPACE__ . '\\Data_Semiring_Generic_GenericSemiring__dollar__Dict';

// Data_Semiring_Generic_genericZero'
function Data_Semiring_Generic_genericZero__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericZero__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericZero__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericZero__prime__'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericZero__prime__';

// Data_Semiring_Generic_genericZero
function Data_Semiring_Generic_genericZero($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericZero';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $__res = function($dictGenericSemiring) use ($to) {
  $__num = func_num_args();
  $__res = ($to)(($dictGenericSemiring)->genericZero__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericZero'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericZero';


// Data_Semiring_Generic_genericSemiringArgument
function Data_Semiring_Generic_genericSemiringArgument($dictSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericSemiringArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $add = ($dictSemiring)->add;
  $mul = ($dictSemiring)->mul;
  $__res = (object)["genericAdd'" => (function() use ($add, &$__fn) {
  $__fn = function($v, $v1 = null) use ($add, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_0;
$y = $__case_1;
$__res = ($add)($x, $y);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => ($dictSemiring)->zero, "genericMul'" => (function() use ($mul, &$__fn) {
  $__fn = function($v, $v1 = null) use ($mul, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$x = $__case_0;
$y = $__case_1;
$__res = ($mul)($x, $y);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => ($dictSemiring)->one];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericSemiringArgument'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericSemiringArgument';

// Data_Semiring_Generic_genericOne'
function Data_Semiring_Generic_genericOne__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericOne__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericOne__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericOne__prime__'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericOne__prime__';

// Data_Semiring_Generic_genericOne
function Data_Semiring_Generic_genericOne($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericOne';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $__res = function($dictGenericSemiring) use ($to) {
  $__num = func_num_args();
  $__res = ($to)(($dictGenericSemiring)->genericOne__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericOne'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericOne';

// Data_Semiring_Generic_genericMul'
function Data_Semiring_Generic_genericMul__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericMul__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericMul__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericMul__prime__'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericMul__prime__';

// Data_Semiring_Generic_genericMul
function Data_Semiring_Generic_genericMul($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericMul';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericSemiring) use ($to, $from) {
  $__num = func_num_args();
  $genericMul__prime__1 = ($dictGenericSemiring)->genericMul__prime__;
  $__res = (function() use ($to, $genericMul__prime__1, $from, &$__fn) {
  $__fn = function($x, $y = null) use ($to, $genericMul__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($to)(($genericMul__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_Semiring_Generic_genericMul'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericMul';

// Data_Semiring_Generic_genericAdd'
function Data_Semiring_Generic_genericAdd__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericAdd__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericAdd__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericAdd__prime__'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericAdd__prime__';

// Data_Semiring_Generic_genericSemiringConstructor
function Data_Semiring_Generic_genericSemiringConstructor($dictGenericSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericSemiringConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $genericAdd__prime__1 = ($dictGenericSemiring)->genericAdd__prime__;
  $genericMul__prime__1 = ($dictGenericSemiring)->genericMul__prime__;
  $__res = (object)["genericAdd'" => (function() use ($genericAdd__prime__1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericAdd__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
$__res = ($genericAdd__prime__1)($a1, $a2);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => ($dictGenericSemiring)->genericZero__prime__, "genericMul'" => (function() use ($genericMul__prime__1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericMul__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$a1 = $__case_0;
$a2 = $__case_1;
$__res = ($genericMul__prime__1)($a1, $a2);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => ($dictGenericSemiring)->genericOne__prime__];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericSemiringConstructor'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericSemiringConstructor';

// Data_Semiring_Generic_genericSemiringProduct
function Data_Semiring_Generic_genericSemiringProduct($dictGenericSemiring) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericSemiringProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $genericAdd__prime__1 = ($dictGenericSemiring)->genericAdd__prime__;
  $genericZero__prime__1 = ($dictGenericSemiring)->genericZero__prime__;
  $genericMul__prime__1 = ($dictGenericSemiring)->genericMul__prime__;
  $genericOne__prime__1 = ($dictGenericSemiring)->genericOne__prime__;
  $__res = function($dictGenericSemiring1) use ($genericAdd__prime__1, $genericZero__prime__1, $genericMul__prime__1, $genericOne__prime__1) {
  $__num = func_num_args();
  $genericAdd__prime__2 = ($dictGenericSemiring1)->genericAdd__prime__;
  $genericMul__prime__2 = ($dictGenericSemiring1)->genericMul__prime__;
  $__res = (object)["genericAdd'" => (function() use ($genericAdd__prime__1, $genericAdd__prime__2, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericAdd__prime__1, $genericAdd__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
$__res = new Phpurs_Data2("Product", ($genericAdd__prime__1)($a1, $a2), ($genericAdd__prime__2)($b1, $b2));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericZero'" => new Phpurs_Data2("Product", $genericZero__prime__1, ($dictGenericSemiring1)->genericZero__prime__), "genericMul'" => (function() use ($genericMul__prime__1, $genericMul__prime__2, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericMul__prime__1, $genericMul__prime__2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (((($__case_0)->tag === "Product") && (($__case_1)->tag === "Product"))) {
$a1 = ($__case_0)->v0;
$b1 = ($__case_0)->v1;
$a2 = ($__case_1)->v0;
$b2 = ($__case_1)->v1;
$__res = new Phpurs_Data2("Product", ($genericMul__prime__1)($a1, $a2), ($genericMul__prime__2)($b1, $b2));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericOne'" => new Phpurs_Data2("Product", $genericOne__prime__1, ($dictGenericSemiring1)->genericOne__prime__)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Semiring_Generic_genericSemiringProduct'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericSemiringProduct';

// Data_Semiring_Generic_genericAdd
function Data_Semiring_Generic_genericAdd($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Semiring_Generic_genericAdd';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericSemiring) use ($to, $from) {
  $__num = func_num_args();
  $genericAdd__prime__1 = ($dictGenericSemiring)->genericAdd__prime__;
  $__res = (function() use ($to, $genericAdd__prime__1, $from, &$__fn) {
  $__fn = function($x, $y = null) use ($to, $genericAdd__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($to)(($genericAdd__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_Semiring_Generic_genericAdd'] = __NAMESPACE__ . '\\Data_Semiring_Generic_genericAdd';

