<?php

namespace Data\Ring;

// ALL IMPORTS: Data.Ring, Data.Semiring, Data.Symbol, Data.Unit, Prim, Prim.Row, Prim.RowList, Record.Unsafe, Type.Proxy
// TO REQUIRE: Data.Ring, Data.Semiring, Data.Symbol, Data.Unit, Record.Unsafe, Type.Proxy
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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
\PhpursThunks::$thunks['Data_Ring_subRecord'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->subRecord;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Ring_sub'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->sub;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Ring_ringUnit'] = function() { $v = (object)["sub" => (function() {
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
})(), "Semiring0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Semiring_semiringUnit'] ?? \PhpursThunks::eval('Data_Semiring_semiringUnit'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Ring_ringRecordNil'] = function() { $v = (object)["subRecord" => (function() {
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
})(), "SemiringRecord0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Semiring_semiringRecordNil'] ?? \PhpursThunks::eval('Data_Semiring_semiringRecordNil'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Ring_ringRecordCons'] = function() { $v = (function() {
  $__fn = function($dictIsSymbol, $dollar__unused_1 = null, $dictRingRecord = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $semiringRecordCons1_0 = (((($GLOBALS['Data_Semiring_semiringRecordCons'] ?? \PhpursThunks::eval('Data_Semiring_semiringRecordCons')))($dictIsSymbol))(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))((($dictRingRecord)->SemiringRecord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictRing) use (&$dictIsSymbol, &$dictRingRecord, &$semiringRecordCons1_0) {
  $__num = \func_num_args();
  $semiringRecordCons2_1 = ($semiringRecordCons1_0)((($dictRing)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["subRecord" => (function() use (&$dictIsSymbol, &$dictRing, &$dictRingRecord) {
  $__fn = function($v, $ra = null, $rb = null) use (&$dictIsSymbol, &$dictRing, &$dictRingRecord, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $key_2 = (($dictIsSymbol)->reflectSymbol)(new Phpurs_Data0("Proxy"));
  $get_3 = (($GLOBALS['Record_Unsafe_unsafeGet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeGet')))($key_2);
  $__res = (((($GLOBALS['Record_Unsafe_unsafeSet'] ?? \PhpursThunks::eval('Record_Unsafe_unsafeSet')))($key_2))(((($dictRing)->sub)(($get_3)($ra)))(($get_3)($rb))))((((($dictRingRecord)->subRecord)(new Phpurs_Data0("Proxy")))($ra))($rb));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "SemiringRecord0" => function($dollar__unused_0) use (&$semiringRecordCons2_1) {
  $__num = \func_num_args();
  $__res = $semiringRecordCons2_1;
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
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Ring_ringRecord'] = function() { $v = (function() {
  $__fn = function($dollar__unused_0, $dictRingRecord = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($dictRingRecord)->SemiringRecord0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $semiringRecord1_1 = (object)["add" => (($__local_var_0)->addRecord)(new Phpurs_Data0("Proxy")), "mul" => (($__local_var_0)->mulRecord)(new Phpurs_Data0("Proxy")), "one" => ((($__local_var_0)->oneRecord)(new Phpurs_Data0("Proxy")))(new Phpurs_Data0("Proxy")), "zero" => ((($__local_var_0)->zeroRecord)(new Phpurs_Data0("Proxy")))(new Phpurs_Data0("Proxy"))];
  $__res = (object)["sub" => (($dictRingRecord)->subRecord)(new Phpurs_Data0("Proxy")), "Semiring0" => function($dollar__unused_0) use (&$semiringRecord1_1) {
  $__num = \func_num_args();
  $__res = $semiringRecord1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Ring_ringProxy'] = function() { $v = (object)["sub" => (function() {
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
})(), "Semiring0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Semiring_semiringProxy'] ?? \PhpursThunks::eval('Data_Semiring_semiringProxy'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Ring_ringNumber'] = function() { $v = (object)["sub" => ($GLOBALS['Data_Ring_numSub'] ?? \PhpursThunks::eval('Data_Ring_numSub')), "Semiring0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Semiring_semiringNumber'] ?? \PhpursThunks::eval('Data_Semiring_semiringNumber'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Ring_ringInt'] = function() { $v = (object)["sub" => ($GLOBALS['Data_Ring_intSub'] ?? \PhpursThunks::eval('Data_Ring_intSub')), "Semiring0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Semiring_semiringInt'] ?? \PhpursThunks::eval('Data_Semiring_semiringInt'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Ring_ringFn'] = function() { $v = function($dictRing) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictRing)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $zero1_1 = ($__local_var_0)->zero;
  $one1_2 = ($__local_var_0)->one;
  $semiringFn_3 = (object)["add" => (function() use (&$__local_var_0) {
  $__fn = function($f, $g = null, $x = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($__local_var_0)->add)(($f)($x)))(($g)($x));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "zero" => function($v) use (&$zero1_1) {
  $__num = \func_num_args();
  $__res = $zero1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "mul" => (function() use (&$__local_var_0) {
  $__fn = function($f, $g = null, $x = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($__local_var_0)->mul)(($f)($x)))(($g)($x));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "one" => function($v) use (&$one1_2) {
  $__num = \func_num_args();
  $__res = $one1_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  $__res = (object)["sub" => (function() use (&$dictRing) {
  $__fn = function($f, $g = null, $x = null) use (&$dictRing, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($dictRing)->sub)(($f)($x)))(($g)($x));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Semiring0" => function($dollar__unused_0) use (&$semiringFn_3) {
  $__num = \func_num_args();
  $__res = $semiringFn_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Ring_negate'] = function() { $v = function($dictRing) {
  $__num = \func_num_args();
  $zero_0 = ((($dictRing)->Semiring0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->zero;
  $__res = function($a) use (&$dictRing, &$zero_0) {
  $__num = \func_num_args();
  $__res = ((($dictRing)->sub)($zero_0))($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
$ffi_Data_Ring = \call_user_func(function() {
  $exports = [];
$intSub = function($a, $b = null) use (&$intSub) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$intSub) {

            return $intSub(...\array_merge($__args, $more));
        };
    }
    return $a - $b;
};
$numSub = $intSub;

$exports['intSub'] = $intSub;
$exports['numSub'] = $numSub;
return $exports;
  return $exports;
});
\PhpursThunks::$thunks['Data_Ring_intSub'] = function() use (&$ffi_Data_Ring) { return $ffi_Data_Ring['intSub']; };
\PhpursThunks::$thunks['Data_Ring_numSub'] = function() use (&$ffi_Data_Ring) { return $ffi_Data_Ring['numSub']; };













