<?php

namespace Data\Tuple\Nested;

// ALL IMPORTS: Data.Tuple, Data.Unit, Prelude, Prim
// TO REQUIRE: Data.Tuple, Data.Unit, Prelude
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry9'] = function() { $v = (function() {
  $__fn = function($f__prime__, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((((($f__prime__)(($v)->value0))((($v)->value1)->value0))(((($v)->value1)->value1)->value0))((((($v)->value1)->value1)->value1)->value0))(((((($v)->value1)->value1)->value1)->value1)->value0))((((((($v)->value1)->value1)->value1)->value1)->value1)->value0))(((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value0))((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0))(((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry8'] = function() { $v = (function() {
  $__fn = function($f__prime__, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((((($f__prime__)(($v)->value0))((($v)->value1)->value0))(((($v)->value1)->value1)->value0))((((($v)->value1)->value1)->value1)->value0))(((((($v)->value1)->value1)->value1)->value1)->value0))((((((($v)->value1)->value1)->value1)->value1)->value1)->value0))(((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value0))((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry7'] = function() { $v = (function() {
  $__fn = function($f__prime__, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((($f__prime__)(($v)->value0))((($v)->value1)->value0))(((($v)->value1)->value1)->value0))((((($v)->value1)->value1)->value1)->value0))(((((($v)->value1)->value1)->value1)->value1)->value0))((((((($v)->value1)->value1)->value1)->value1)->value1)->value0))(((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry6'] = function() { $v = (function() {
  $__fn = function($f__prime__, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((($f__prime__)(($v)->value0))((($v)->value1)->value0))(((($v)->value1)->value1)->value0))((((($v)->value1)->value1)->value1)->value0))(((((($v)->value1)->value1)->value1)->value1)->value0))((((((($v)->value1)->value1)->value1)->value1)->value1)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry5'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($f)(($v)->value0))((($v)->value1)->value0))(((($v)->value1)->value1)->value0))((((($v)->value1)->value1)->value1)->value0))(((((($v)->value1)->value1)->value1)->value1)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry4'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($f)(($v)->value0))((($v)->value1)->value0))(((($v)->value1)->value1)->value0))((((($v)->value1)->value1)->value1)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry3'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($f)(($v)->value0))((($v)->value1)->value0))(((($v)->value1)->value1)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry2'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($f)(($v)->value0))((($v)->value1)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry10'] = function() { $v = (function() {
  $__fn = function($f__prime__, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((((((((($f__prime__)(($v)->value0))((($v)->value1)->value0))(((($v)->value1)->value1)->value0))((((($v)->value1)->value1)->value1)->value0))(((((($v)->value1)->value1)->value1)->value1)->value0))((((((($v)->value1)->value1)->value1)->value1)->value1)->value0))(((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value0))((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0))(((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0))((((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_uncurry1'] = function() { $v = (function() {
  $__fn = function($f, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(($v)->value0);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple9'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 9);
  }
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", $i, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')))))))))));
  goto __end;;
  __end:
  return $__num > 9 ? $__res(...\array_slice(\func_get_args(), 9)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple8'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 8);
  }
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))))))));
  goto __end;;
  __end:
  return $__num > 8 ? $__res(...\array_slice(\func_get_args(), 8)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple7'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 7);
  }
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')))))))));
  goto __end;;
  __end:
  return $__num > 7 ? $__res(...\array_slice(\func_get_args(), 7)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple6'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 6);
  }
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))))));
  goto __end;;
  __end:
  return $__num > 6 ? $__res(...\array_slice(\func_get_args(), 6)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple5'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')))))));
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple4'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple3'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')))));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple2'] = function() { $v = (function() {
  $__fn = function($a, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple10'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 10);
  }
  $__res = new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", $i, new Phpurs_Data2("Tuple", $j, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))))))))));
  goto __end;;
  __end:
  return $__num > 10 ? $__res(...\array_slice(\func_get_args(), 10)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_tuple1'] = function() { $v = function($a) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data2("Tuple", $a, ($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit')));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over9'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, new Phpurs_Data2("Tuple", (($v)->value1)->value0, new Phpurs_Data2("Tuple", ((($v)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((($v)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ((((($v)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((((($v)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ($o)(((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0), ((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)))))))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over8'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, new Phpurs_Data2("Tuple", (($v)->value1)->value0, new Phpurs_Data2("Tuple", ((($v)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((($v)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ((((($v)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((((($v)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ($o)((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0), (((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1))))))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over7'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, new Phpurs_Data2("Tuple", (($v)->value1)->value0, new Phpurs_Data2("Tuple", ((($v)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((($v)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ((((($v)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((((($v)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ($o)(((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value0), ((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)))))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over6'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, new Phpurs_Data2("Tuple", (($v)->value1)->value0, new Phpurs_Data2("Tuple", ((($v)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((($v)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ((((($v)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ($o)((((((($v)->value1)->value1)->value1)->value1)->value1)->value0), (((((($v)->value1)->value1)->value1)->value1)->value1)->value1))))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over5'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, new Phpurs_Data2("Tuple", (($v)->value1)->value0, new Phpurs_Data2("Tuple", ((($v)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((($v)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ($o)(((((($v)->value1)->value1)->value1)->value1)->value0), ((((($v)->value1)->value1)->value1)->value1)->value1)))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over4'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, new Phpurs_Data2("Tuple", (($v)->value1)->value0, new Phpurs_Data2("Tuple", ((($v)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ($o)((((($v)->value1)->value1)->value1)->value0), (((($v)->value1)->value1)->value1)->value1))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over3'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, new Phpurs_Data2("Tuple", (($v)->value1)->value0, new Phpurs_Data2("Tuple", ($o)(((($v)->value1)->value1)->value0), ((($v)->value1)->value1)->value1)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over2'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, new Phpurs_Data2("Tuple", ($o)((($v)->value1)->value0), (($v)->value1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over10'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($v)->value0, new Phpurs_Data2("Tuple", (($v)->value1)->value0, new Phpurs_Data2("Tuple", ((($v)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((($v)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ((((($v)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((((($v)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", (((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0, new Phpurs_Data2("Tuple", ($o)((((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0), (((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1))))))))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_over1'] = function() { $v = (function() {
  $__fn = function($o, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Tuple", ($o)(($v)->value0), ($v)->value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get9'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get8'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get7'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get6'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (((((($v)->value1)->value1)->value1)->value1)->value1)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get5'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ((((($v)->value1)->value1)->value1)->value1)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get4'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (((($v)->value1)->value1)->value1)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get3'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ((($v)->value1)->value1)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get2'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (($v)->value1)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get10'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = (((((((((($v)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value1)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_get1'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = ($v)->value0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry9'] = function() { $v = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 11) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 11);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", $i, $z))))))))));
  goto __end;;
  __end:
  return $__num > 11 ? $__res(...\array_slice(\func_get_args(), 11)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry8'] = function() { $v = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 10);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, $z)))))))));
  goto __end;;
  __end:
  return $__num > 10 ? $__res(...\array_slice(\func_get_args(), 10)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry7'] = function() { $v = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 9);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, $z))))))));
  goto __end;;
  __end:
  return $__num > 9 ? $__res(...\array_slice(\func_get_args(), 9)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry6'] = function() { $v = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 8);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, $z)))))));
  goto __end;;
  __end:
  return $__num > 8 ? $__res(...\array_slice(\func_get_args(), 8)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry5'] = function() { $v = (function() {
  $__fn = function($z, $f = null, $a = null, $b = null, $c = null, $d = null, $e = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 7);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, $z))))));
  goto __end;;
  __end:
  return $__num > 7 ? $__res(...\array_slice(\func_get_args(), 7)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry4'] = function() { $v = (function() {
  $__fn = function($z, $f = null, $a = null, $b = null, $c = null, $d = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 6);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, $z)))));
  goto __end;;
  __end:
  return $__num > 6 ? $__res(...\array_slice(\func_get_args(), 6)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry3'] = function() { $v = (function() {
  $__fn = function($z, $f = null, $a = null, $b = null, $c = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, $z))));
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry2'] = function() { $v = (function() {
  $__fn = function($z, $f = null, $a = null, $b = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, $z)));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry10'] = function() { $v = (function() {
  $__fn = function($z, $f__prime__ = null, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 12) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 12);
  }
  $__res = ($f__prime__)(new Phpurs_Data2("Tuple", $a, new Phpurs_Data2("Tuple", $b, new Phpurs_Data2("Tuple", $c, new Phpurs_Data2("Tuple", $d, new Phpurs_Data2("Tuple", $e, new Phpurs_Data2("Tuple", $f, new Phpurs_Data2("Tuple", $g, new Phpurs_Data2("Tuple", $h, new Phpurs_Data2("Tuple", $i, new Phpurs_Data2("Tuple", $j, $z)))))))))));
  goto __end;;
  __end:
  return $__num > 12 ? $__res(...\array_slice(\func_get_args(), 12)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Tuple_Nested_curry1'] = function() { $v = (function() {
  $__fn = function($z, $f = null, $a = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, $z));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };




















































