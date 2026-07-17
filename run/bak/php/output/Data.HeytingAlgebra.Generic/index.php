<?php

namespace Data\HeytingAlgebra\Generic;

// ALL IMPORTS: Data.Function, Data.Generic.Rep, Data.HeytingAlgebra, Data.HeytingAlgebra.Generic, Prelude, Prim
// TO REQUIRE: Data.Function, Data.Generic.Rep, Data.HeytingAlgebra, Data.HeytingAlgebra.Generic, Prelude
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra.Generic/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $value0; public function __construct($t, $value0) { $this->tag = $t; $this->value0 = $value0; } }
  class Phpurs_Data2 { public $tag; public $value0, $value1; public function __construct($t, $value0, $value1) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; } }
  class Phpurs_Data3 { public $tag; public $value0, $value1, $value2; public function __construct($t, $value0, $value1, $value2) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; } }
  class Phpurs_Data4 { public $tag; public $value0, $value1, $value2, $value3; public function __construct($t, $value0, $value1, $value2, $value3) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; } }
  class Phpurs_Data5 { public $tag; public $value0, $value1, $value2, $value3, $value4; public function __construct($t, $value0, $value1, $value2, $value3, $value4) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; $this->value4 = $value4; } }
  class Phpurs_Data6 { public $tag; public $value0, $value1, $value2, $value3, $value4, $value5; public function __construct($t, $value0, $value1, $value2, $value3, $value4, $value5) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; $this->value4 = $value4; $this->value5 = $value5; } }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - \count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num > 1) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = \array_merge($args, $more);
      if (\count($merged) >= $expected) {
        $res = $fn(...\array_slice($merged, 0, $expected));
        if (\count($merged) > $expected) {
          return $res(...\array_slice($merged, $expected));
        }
        return $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericTT__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericTT__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericTT'] = function() { $v = (function() {
  $__fn = function($dictGeneric, $dictGenericHeytingAlgebra = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictGeneric)->to)(($dictGenericHeytingAlgebra)->genericTT__prime__);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericNot__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericNot__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericNot'] = function() { $v = (function() {
  $__fn = function($dictGeneric, $dictGenericHeytingAlgebra = null, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($dictGeneric)->to)((($dictGenericHeytingAlgebra)->genericNot__prime__)((($dictGeneric)->from)($x)));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericImplies__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericImplies__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericImplies'] = function() { $v = (function() {
  $__fn = function($dictGeneric, $dictGenericHeytingAlgebra = null, $x = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (($dictGeneric)->to)(((($dictGenericHeytingAlgebra)->genericImplies__prime__)((($dictGeneric)->from)($x)))((($dictGeneric)->from)($y)));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericHeytingAlgebraNoArguments'] = function() { $v = (object)["genericFF__prime__" => new Phpurs_Data0("NoArguments"), "genericTT__prime__" => new Phpurs_Data0("NoArguments"), "genericImplies__prime__" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data0("NoArguments");
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj__prime__" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data0("NoArguments");
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj__prime__" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data0("NoArguments");
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot__prime__" => function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("NoArguments");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericHeytingAlgebraArgument'] = function() { $v = function($dictHeytingAlgebra) {
  $__num = \func_num_args();
  $__res = (object)["genericFF__prime__" => ($dictHeytingAlgebra)->ff, "genericTT__prime__" => ($dictHeytingAlgebra)->tt, "genericImplies__prime__" => (function() use (&$dictHeytingAlgebra) {
  $__fn = function($v, $v1 = null) use (&$dictHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictHeytingAlgebra)->implies)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj__prime__" => (function() use (&$dictHeytingAlgebra) {
  $__fn = function($v, $v1 = null) use (&$dictHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictHeytingAlgebra)->conj)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj__prime__" => (function() use (&$dictHeytingAlgebra) {
  $__fn = function($v, $v1 = null) use (&$dictHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictHeytingAlgebra)->disj)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot__prime__" => function($v) use (&$dictHeytingAlgebra) {
  $__num = \func_num_args();
  $__res = (($dictHeytingAlgebra)->not)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericFF__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericFF__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericFF'] = function() { $v = (function() {
  $__fn = function($dictGeneric, $dictGenericHeytingAlgebra = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictGeneric)->to)(($dictGenericHeytingAlgebra)->genericFF__prime__);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericDisj__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericDisj__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericDisj'] = function() { $v = (function() {
  $__fn = function($dictGeneric, $dictGenericHeytingAlgebra = null, $x = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (($dictGeneric)->to)(((($dictGenericHeytingAlgebra)->genericDisj__prime__)((($dictGeneric)->from)($x)))((($dictGeneric)->from)($y)));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericConj__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericConj__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericHeytingAlgebraConstructor'] = function() { $v = function($dictGenericHeytingAlgebra) {
  $__num = \func_num_args();
  $__res = (object)["genericFF__prime__" => ($dictGenericHeytingAlgebra)->genericFF__prime__, "genericTT__prime__" => ($dictGenericHeytingAlgebra)->genericTT__prime__, "genericImplies__prime__" => (function() use (&$dictGenericHeytingAlgebra) {
  $__fn = function($v, $v1 = null) use (&$dictGenericHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictGenericHeytingAlgebra)->genericImplies__prime__)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj__prime__" => (function() use (&$dictGenericHeytingAlgebra) {
  $__fn = function($v, $v1 = null) use (&$dictGenericHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictGenericHeytingAlgebra)->genericConj__prime__)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj__prime__" => (function() use (&$dictGenericHeytingAlgebra) {
  $__fn = function($v, $v1 = null) use (&$dictGenericHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictGenericHeytingAlgebra)->genericDisj__prime__)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot__prime__" => function($v) use (&$dictGenericHeytingAlgebra) {
  $__num = \func_num_args();
  $__res = (($dictGenericHeytingAlgebra)->genericNot__prime__)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericHeytingAlgebraProduct'] = function() { $v = function($dictGenericHeytingAlgebra) {
  $__num = \func_num_args();
  $genericFF__prime__1_0 = ($dictGenericHeytingAlgebra)->genericFF__prime__;
  $genericTT__prime__1_1 = ($dictGenericHeytingAlgebra)->genericTT__prime__;
  $__res = function($dictGenericHeytingAlgebra1) use (&$dictGenericHeytingAlgebra, &$genericFF__prime__1_0, &$genericTT__prime__1_1) {
  $__num = \func_num_args();
  $__res = (object)["genericFF__prime__" => new Phpurs_Data2("Product", $genericFF__prime__1_0, ($dictGenericHeytingAlgebra1)->genericFF__prime__), "genericTT__prime__" => new Phpurs_Data2("Product", $genericTT__prime__1_1, ($dictGenericHeytingAlgebra1)->genericTT__prime__), "genericImplies__prime__" => (function() use (&$dictGenericHeytingAlgebra, &$dictGenericHeytingAlgebra1) {
  $__fn = function($v, $v1 = null) use (&$dictGenericHeytingAlgebra, &$dictGenericHeytingAlgebra1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product", ((($dictGenericHeytingAlgebra)->genericImplies__prime__)(($v)->value0))(($v1)->value0), ((($dictGenericHeytingAlgebra1)->genericImplies__prime__)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericConj__prime__" => (function() use (&$dictGenericHeytingAlgebra, &$dictGenericHeytingAlgebra1) {
  $__fn = function($v, $v1 = null) use (&$dictGenericHeytingAlgebra, &$dictGenericHeytingAlgebra1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product", ((($dictGenericHeytingAlgebra)->genericConj__prime__)(($v)->value0))(($v1)->value0), ((($dictGenericHeytingAlgebra1)->genericConj__prime__)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericDisj__prime__" => (function() use (&$dictGenericHeytingAlgebra, &$dictGenericHeytingAlgebra1) {
  $__fn = function($v, $v1 = null) use (&$dictGenericHeytingAlgebra, &$dictGenericHeytingAlgebra1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product", ((($dictGenericHeytingAlgebra)->genericDisj__prime__)(($v)->value0))(($v1)->value0), ((($dictGenericHeytingAlgebra1)->genericDisj__prime__)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "genericNot__prime__" => function($v) use (&$dictGenericHeytingAlgebra, &$dictGenericHeytingAlgebra1) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Product", (($dictGenericHeytingAlgebra)->genericNot__prime__)(($v)->value0), (($dictGenericHeytingAlgebra1)->genericNot__prime__)(($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_Generic_genericConj'] = function() { $v = (function() {
  $__fn = function($dictGeneric, $dictGenericHeytingAlgebra = null, $x = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (($dictGeneric)->to)(((($dictGenericHeytingAlgebra)->genericConj__prime__)((($dictGeneric)->from)($x)))((($dictGeneric)->from)($y)));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


















