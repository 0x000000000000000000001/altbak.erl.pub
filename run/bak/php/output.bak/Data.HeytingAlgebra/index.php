<?php

namespace Data\HeytingAlgebra;

// ALL IMPORTS: Data.HeytingAlgebra, Data.Symbol, Data.Unit, Prim, Prim.Row, Prim.RowList, Record.Unsafe, Type.Proxy
// TO REQUIRE: Data.HeytingAlgebra, Data.Symbol, Data.Unit, Record.Unsafe, Type.Proxy
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Record.Unsafe/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

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
\PhpursThunks::$thunks['Data_HeytingAlgebra_ttRecord'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->ttRecord;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_tt'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->tt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_notRecord'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->notRecord;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_not'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->not;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_impliesRecord'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->impliesRecord;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_implies'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->implies;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_heytingAlgebraUnit'] = function() { $v = (object)["ff" => ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')), "tt" => ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')), "implies" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => function($v) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_heytingAlgebraRecordNil'] = function() { $v = (object)["conjRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (object)[];
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "disjRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (object)[];
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "ffRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)[];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "impliesRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (object)[];
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "notRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)[];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ttRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)[];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_heytingAlgebraProxy'] = function() { $v = (object)["conj" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data0("Proxy");
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data0("Proxy");
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "implies" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data0("Proxy");
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ff" => new Phpurs_Data0("Proxy"), "not" => function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data0("Proxy");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "tt" => new Phpurs_Data0("Proxy")]; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_ffRecord'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->ffRecord;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_ff'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->ff;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_disjRecord'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->disjRecord;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_disj'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->disj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_heytingAlgebraBoolean'] = function() { $v = (object)["ff" => false, "tt" => true, "implies" => (function() {
  $__fn = function($a, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_heytingAlgebraBoolean')))->disj)(((($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_heytingAlgebraBoolean')))->not)($a)))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')), "disj" => ($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolDisj')), "not" => ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolNot'))]; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_conjRecord'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->conjRecord;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_heytingAlgebraRecord'] = function() { $v = (function() {
  $__fn = function($dollar__unused_0, $dictHeytingAlgebraRecord = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["ff" => ((($dictHeytingAlgebraRecord)->ffRecord)(new Phpurs_Data0("Proxy")))(new Phpurs_Data0("Proxy")), "tt" => ((($dictHeytingAlgebraRecord)->ttRecord)(new Phpurs_Data0("Proxy")))(new Phpurs_Data0("Proxy")), "conj" => (($dictHeytingAlgebraRecord)->conjRecord)(new Phpurs_Data0("Proxy")), "disj" => (($dictHeytingAlgebraRecord)->disjRecord)(new Phpurs_Data0("Proxy")), "implies" => (($dictHeytingAlgebraRecord)->impliesRecord)(new Phpurs_Data0("Proxy")), "not" => (($dictHeytingAlgebraRecord)->notRecord)(new Phpurs_Data0("Proxy"))];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_conj'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->conj;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_heytingAlgebraFunction'] = function() { $v = function($dictHeytingAlgebra) {
  $__num = \func_num_args();
  $ff1_0 = ($dictHeytingAlgebra)->ff;
  $tt1_1 = ($dictHeytingAlgebra)->tt;
  $__res = (object)["ff" => function($v) use (&$ff1_0) {
  $__num = \func_num_args();
  $__res = $ff1_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "tt" => function($v) use (&$tt1_1) {
  $__num = \func_num_args();
  $__res = $tt1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "implies" => (function() use (&$dictHeytingAlgebra) {
  $__fn = function($f, $g = null, $a = null) use (&$dictHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictHeytingAlgebra)->implies)(($f)($a)))(($g)($a));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use (&$dictHeytingAlgebra) {
  $__fn = function($f, $g = null, $a = null) use (&$dictHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictHeytingAlgebra)->conj)(($f)($a)))(($g)($a));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use (&$dictHeytingAlgebra) {
  $__fn = function($f, $g = null, $a = null) use (&$dictHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictHeytingAlgebra)->disj)(($f)($a)))(($g)($a));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "not" => (function() use (&$dictHeytingAlgebra) {
  $__fn = function($f, $a = null) use (&$dictHeytingAlgebra, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($dictHeytingAlgebra)->not)(($f)($a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_heytingAlgebraRecordCons'] = function() { $v = (function() {
  $__fn = function($dictIsSymbol, $dollar__unused_1 = null, $dictHeytingAlgebraRecord = null, $dictHeytingAlgebra = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $ff1_0 = ($dictHeytingAlgebra)->ff;
  $tt1_1 = ($dictHeytingAlgebra)->tt;
  $__res = (object)["conjRecord" => (function() use (&$dictHeytingAlgebra, &$dictHeytingAlgebraRecord, &$dictIsSymbol) {
  $__fn = function($v, $ra = null, $rb = null) use (&$dictHeytingAlgebra, &$dictHeytingAlgebraRecord, &$dictIsSymbol, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $key_2 = (($dictIsSymbol)->reflectSymbol)(new Phpurs_Data0("Proxy"));
  $get_3 = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeGet')))($key_2);
  $__res = (((($GLOBALS['Record_Unsafe_unsafeSet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeSet')))($key_2))(((($dictHeytingAlgebra)->conj)(($get_3)($ra)))(($get_3)($rb))))((((($dictHeytingAlgebraRecord)->conjRecord)(new Phpurs_Data0("Proxy")))($ra))($rb));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "disjRecord" => (function() use (&$dictHeytingAlgebra, &$dictHeytingAlgebraRecord, &$dictIsSymbol) {
  $__fn = function($v, $ra = null, $rb = null) use (&$dictHeytingAlgebra, &$dictHeytingAlgebraRecord, &$dictIsSymbol, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $key_4 = (($dictIsSymbol)->reflectSymbol)(new Phpurs_Data0("Proxy"));
  $get_5 = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeGet')))($key_4);
  $__res = (((($GLOBALS['Record_Unsafe_unsafeSet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeSet')))($key_4))(((($dictHeytingAlgebra)->disj)(($get_5)($ra)))(($get_5)($rb))))((((($dictHeytingAlgebraRecord)->disjRecord)(new Phpurs_Data0("Proxy")))($ra))($rb));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "impliesRecord" => (function() use (&$dictHeytingAlgebra, &$dictHeytingAlgebraRecord, &$dictIsSymbol) {
  $__fn = function($v, $ra = null, $rb = null) use (&$dictHeytingAlgebra, &$dictHeytingAlgebraRecord, &$dictIsSymbol, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $key_6 = (($dictIsSymbol)->reflectSymbol)(new Phpurs_Data0("Proxy"));
  $get_7 = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeGet')))($key_6);
  $__res = (((($GLOBALS['Record_Unsafe_unsafeSet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeSet')))($key_6))(((($dictHeytingAlgebra)->implies)(($get_7)($ra)))(($get_7)($rb))))((((($dictHeytingAlgebraRecord)->impliesRecord)(new Phpurs_Data0("Proxy")))($ra))($rb));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "ffRecord" => (function() use (&$dictHeytingAlgebraRecord, &$dictIsSymbol, &$ff1_0) {
  $__fn = function($v, $row = null) use (&$dictHeytingAlgebraRecord, &$dictIsSymbol, &$ff1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Record_Unsafe_unsafeSet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeSet')))((($dictIsSymbol)->reflectSymbol)(new Phpurs_Data0("Proxy"))))($ff1_0))(((($dictHeytingAlgebraRecord)->ffRecord)(new Phpurs_Data0("Proxy")))($row));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "notRecord" => (function() use (&$dictHeytingAlgebra, &$dictHeytingAlgebraRecord, &$dictIsSymbol) {
  $__fn = function($v, $row = null) use (&$dictHeytingAlgebra, &$dictHeytingAlgebraRecord, &$dictIsSymbol, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $key_8 = (($dictIsSymbol)->reflectSymbol)(new Phpurs_Data0("Proxy"));
  $__res = (((($GLOBALS['Record_Unsafe_unsafeSet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeSet')))($key_8))((($dictHeytingAlgebra)->not)(((($GLOBALS['Record_Unsafe_unsafeGet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeGet')))($key_8))($row))))(((($dictHeytingAlgebraRecord)->notRecord)(new Phpurs_Data0("Proxy")))($row));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ttRecord" => (function() use (&$dictHeytingAlgebraRecord, &$dictIsSymbol, &$tt1_1) {
  $__fn = function($v, $row = null) use (&$dictHeytingAlgebraRecord, &$dictIsSymbol, &$tt1_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Record_Unsafe_unsafeSet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeSet')))((($dictIsSymbol)->reflectSymbol)(new Phpurs_Data0("Proxy"))))($tt1_1))(((($dictHeytingAlgebraRecord)->ttRecord)(new Phpurs_Data0("Proxy")))($row));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
$ffi_Data_HeytingAlgebra = \call_user_func(function() {
  $exports = [];
$boolConj = function($a, $b = null) use (&$boolConj) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$boolConj) {

            return $boolConj(...\array_merge($__args, $more));
        };
    }
    return $a && $b;
};
$boolDisj = function($a, $b = null) use (&$boolDisj) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$boolDisj) {

            return $boolDisj(...\array_merge($__args, $more));
        };
    }
    return $a || $b;
};
$boolNot = function($a) use (&$boolNot) { return !$a; };

$exports['boolConj'] = $boolConj;
$exports['boolDisj'] = $boolDisj;
$exports['boolNot'] = $boolNot;
return $exports;
  return $exports;
});
\PhpursThunks::$thunks['Data_HeytingAlgebra_boolConj'] = function() use (&$ffi_Data_HeytingAlgebra) { return $ffi_Data_HeytingAlgebra['boolConj']; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_boolDisj'] = function() use (&$ffi_Data_HeytingAlgebra) { return $ffi_Data_HeytingAlgebra['boolDisj']; };
\PhpursThunks::$thunks['Data_HeytingAlgebra_boolNot'] = function() use (&$ffi_Data_HeytingAlgebra) { return $ffi_Data_HeytingAlgebra['boolNot']; };





















