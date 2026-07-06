<?php

namespace Data\HeytingAlgebra\Generic;

require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra.Generic/index.php';
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
      case 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraNoArguments': $v = (object)["genericFF'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")), "genericTT'" => ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments")), "genericImplies'" => (function() use (&$__fn) {
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
})(), "genericConj'" => (function() use (&$__fn) {
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
})(), "genericDisj'" => (function() use (&$__fn) {
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
})(), "genericNot'" => function($v) {
  $__num = func_num_args();
  $__res = ($GLOBALS['__phpurs_data0_NoArguments'] ??= new Phpurs_Data0("NoArguments"));
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


// Data_HeytingAlgebra_Generic_GenericHeytingAlgebra$Dict
function Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_GenericHeytingAlgebra__dollar__Dict';

// Data_HeytingAlgebra_Generic_genericTT'
function Data_HeytingAlgebra_Generic_genericTT__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericTT__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericTT__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericTT__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericTT__prime__';

// Data_HeytingAlgebra_Generic_genericTT
function Data_HeytingAlgebra_Generic_genericTT($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericTT';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $__res = function($dictGenericHeytingAlgebra) use ($to) {
  $__num = func_num_args();
  $__res = ($to)(($dictGenericHeytingAlgebra)->genericTT__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericTT'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericTT';

// Data_HeytingAlgebra_Generic_genericNot'
function Data_HeytingAlgebra_Generic_genericNot__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericNot__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericNot__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericNot__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericNot__prime__';

// Data_HeytingAlgebra_Generic_genericNot
function Data_HeytingAlgebra_Generic_genericNot($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericNot';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericHeytingAlgebra) use ($to, $from) {
  $__num = func_num_args();
  $genericNot__prime__1 = ($dictGenericHeytingAlgebra)->genericNot__prime__;
  $__res = function($x) use ($to, $genericNot__prime__1, $from) {
  $__num = func_num_args();
  $__res = ($to)(($genericNot__prime__1)(($from)($x)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericNot'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericNot';

// Data_HeytingAlgebra_Generic_genericImplies'
function Data_HeytingAlgebra_Generic_genericImplies__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericImplies__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericImplies__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericImplies__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericImplies__prime__';

// Data_HeytingAlgebra_Generic_genericImplies
function Data_HeytingAlgebra_Generic_genericImplies($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericImplies';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericHeytingAlgebra) use ($to, $from) {
  $__num = func_num_args();
  $genericImplies__prime__1 = ($dictGenericHeytingAlgebra)->genericImplies__prime__;
  $__res = (function() use ($to, $genericImplies__prime__1, $from, &$__fn) {
  $__fn = function($x, $y = null) use ($to, $genericImplies__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($to)(($genericImplies__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericImplies'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericImplies';


// Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument
function Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument($dictHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $implies = ($dictHeytingAlgebra)->implies;
  $conj = ($dictHeytingAlgebra)->conj;
  $disj = ($dictHeytingAlgebra)->disj;
  $not = ($dictHeytingAlgebra)->not;
  $__res = (object)["genericFF'" => ($dictHeytingAlgebra)->ff, "genericTT'" => ($dictHeytingAlgebra)->tt, "genericImplies'" => (function() use ($implies, &$__fn) {
  $__fn = function($v, $v1 = null) use ($implies, &$__fn) {
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
$__res = ($implies)($x, $y);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() use ($conj, &$__fn) {
  $__fn = function($v, $v1 = null) use ($conj, &$__fn) {
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
$__res = ($conj)($x, $y);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() use ($disj, &$__fn) {
  $__fn = function($v, $v1 = null) use ($disj, &$__fn) {
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
$__res = ($disj)($x, $y);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot'" => function($v) use ($not) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$x = $__case_0;
$__res = ($not)($x);
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument';

// Data_HeytingAlgebra_Generic_genericFF'
function Data_HeytingAlgebra_Generic_genericFF__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericFF__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericFF__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericFF__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericFF__prime__';

// Data_HeytingAlgebra_Generic_genericFF
function Data_HeytingAlgebra_Generic_genericFF($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericFF';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $__res = function($dictGenericHeytingAlgebra) use ($to) {
  $__num = func_num_args();
  $__res = ($to)(($dictGenericHeytingAlgebra)->genericFF__prime__);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericFF'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericFF';

// Data_HeytingAlgebra_Generic_genericDisj'
function Data_HeytingAlgebra_Generic_genericDisj__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericDisj__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericDisj__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericDisj__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericDisj__prime__';

// Data_HeytingAlgebra_Generic_genericDisj
function Data_HeytingAlgebra_Generic_genericDisj($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericDisj';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericHeytingAlgebra) use ($to, $from) {
  $__num = func_num_args();
  $genericDisj__prime__1 = ($dictGenericHeytingAlgebra)->genericDisj__prime__;
  $__res = (function() use ($to, $genericDisj__prime__1, $from, &$__fn) {
  $__fn = function($x, $y = null) use ($to, $genericDisj__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($to)(($genericDisj__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericDisj'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericDisj';

// Data_HeytingAlgebra_Generic_genericConj'
function Data_HeytingAlgebra_Generic_genericConj__prime__($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericConj__prime__';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->genericConj__prime__;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_HeytingAlgebra_Generic_genericConj__prime__'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericConj__prime__';

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor
function Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor($dictGenericHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $genericImplies__prime__1 = ($dictGenericHeytingAlgebra)->genericImplies__prime__;
  $genericConj__prime__1 = ($dictGenericHeytingAlgebra)->genericConj__prime__;
  $genericDisj__prime__1 = ($dictGenericHeytingAlgebra)->genericDisj__prime__;
  $genericNot__prime__1 = ($dictGenericHeytingAlgebra)->genericNot__prime__;
  $__res = (object)["genericFF'" => ($dictGenericHeytingAlgebra)->genericFF__prime__, "genericTT'" => ($dictGenericHeytingAlgebra)->genericTT__prime__, "genericImplies'" => (function() use ($genericImplies__prime__1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericImplies__prime__1, &$__fn) {
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
$__res = ($genericImplies__prime__1)($a1, $a2);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() use ($genericConj__prime__1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericConj__prime__1, &$__fn) {
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
$__res = ($genericConj__prime__1)($a1, $a2);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() use ($genericDisj__prime__1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericDisj__prime__1, &$__fn) {
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
$__res = ($genericDisj__prime__1)($a1, $a2);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot'" => function($v) use ($genericNot__prime__1) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = ($genericNot__prime__1)($a);
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor';

// Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct
function Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct($dictGenericHeytingAlgebra) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $genericFF__prime__1 = ($dictGenericHeytingAlgebra)->genericFF__prime__;
  $genericTT__prime__1 = ($dictGenericHeytingAlgebra)->genericTT__prime__;
  $genericImplies__prime__1 = ($dictGenericHeytingAlgebra)->genericImplies__prime__;
  $genericConj__prime__1 = ($dictGenericHeytingAlgebra)->genericConj__prime__;
  $genericDisj__prime__1 = ($dictGenericHeytingAlgebra)->genericDisj__prime__;
  $genericNot__prime__1 = ($dictGenericHeytingAlgebra)->genericNot__prime__;
  $__res = function($dictGenericHeytingAlgebra1) use ($genericFF__prime__1, $genericTT__prime__1, $genericImplies__prime__1, $genericConj__prime__1, $genericDisj__prime__1, $genericNot__prime__1) {
  $__num = func_num_args();
  $genericImplies__prime__2 = ($dictGenericHeytingAlgebra1)->genericImplies__prime__;
  $genericConj__prime__2 = ($dictGenericHeytingAlgebra1)->genericConj__prime__;
  $genericDisj__prime__2 = ($dictGenericHeytingAlgebra1)->genericDisj__prime__;
  $genericNot__prime__2 = ($dictGenericHeytingAlgebra1)->genericNot__prime__;
  $__res = (object)["genericFF'" => new Phpurs_Data2("Product", $genericFF__prime__1, ($dictGenericHeytingAlgebra1)->genericFF__prime__), "genericTT'" => new Phpurs_Data2("Product", $genericTT__prime__1, ($dictGenericHeytingAlgebra1)->genericTT__prime__), "genericImplies'" => (function() use ($genericImplies__prime__1, $genericImplies__prime__2, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericImplies__prime__1, $genericImplies__prime__2, &$__fn) {
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
$__res = new Phpurs_Data2("Product", ($genericImplies__prime__1)($a1, $a2), ($genericImplies__prime__2)($b1, $b2));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj'" => (function() use ($genericConj__prime__1, $genericConj__prime__2, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericConj__prime__1, $genericConj__prime__2, &$__fn) {
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
$__res = new Phpurs_Data2("Product", ($genericConj__prime__1)($a1, $a2), ($genericConj__prime__2)($b1, $b2));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj'" => (function() use ($genericDisj__prime__1, $genericDisj__prime__2, &$__fn) {
  $__fn = function($v, $v1 = null) use ($genericDisj__prime__1, $genericDisj__prime__2, &$__fn) {
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
$__res = new Phpurs_Data2("Product", ($genericDisj__prime__1)($a1, $a2), ($genericDisj__prime__2)($b1, $b2));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot'" => function($v) use ($genericNot__prime__1, $genericNot__prime__2) {
  $__num = func_num_args();
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Product":
$a = ($__case_0)->v0;
$b = ($__case_0)->v1;
$__res = new Phpurs_Data2("Product", ($genericNot__prime__1)($a), ($genericNot__prime__2)($b));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct';

// Data_HeytingAlgebra_Generic_genericConj
function Data_HeytingAlgebra_Generic_genericConj($dictGeneric) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_HeytingAlgebra_Generic_genericConj';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $to = ($dictGeneric)->to;
  $from = ($dictGeneric)->from;
  $__res = function($dictGenericHeytingAlgebra) use ($to, $from) {
  $__num = func_num_args();
  $genericConj__prime__1 = ($dictGenericHeytingAlgebra)->genericConj__prime__;
  $__res = (function() use ($to, $genericConj__prime__1, $from, &$__fn) {
  $__fn = function($x, $y = null) use ($to, $genericConj__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($to)(($genericConj__prime__1)(($from)($x), ($from)($y)));
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
$GLOBALS['Data_HeytingAlgebra_Generic_genericConj'] = __NAMESPACE__ . '\\Data_HeytingAlgebra_Generic_genericConj';

