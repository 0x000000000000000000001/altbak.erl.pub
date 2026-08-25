<?php

namespace Data\Functor\Coproduct\Nested;

// ALL IMPORTS: Data.Const, Data.Either, Data.Functor.Coproduct, Data.Newtype, Data.Void, Prelude, Prim
// TO REQUIRE: Data.Const, Data.Either, Data.Functor.Coproduct, Data.Newtype, Data.Void, Prelude
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
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
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in9'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Left", $v)))))))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in8'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Left", $v))))))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in7'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Left", $v)))))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in6'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Left", $v))))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in5'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Left", $v)))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in4'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Left", $v))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in3'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Left", $v)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in2'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", new Phpurs_Data1("Left", $v));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in10'] = function() { $v = function($v) {
  $__num = \func_num_args();
  $__res = new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Right", new Phpurs_Data1("Left", $v))))))))));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_in1'] = function() { $v = ($GLOBALS['Data_Functor_Coproduct_left'] ?? \PhpursThunks::eval('Data_Functor_Coproduct_left')); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct9'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 10);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($a)(($y)->value0);
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Left"))) {
$__t1 = ($b)((($y)->value0)->value0);
} else {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right"))) {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Left"))) {
$__t2 = ($c)(((($y)->value0)->value0)->value0);
} else {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right"))) {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Left"))) {
$__t3 = ($d)((((($y)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t4 = ($e)(((((($y)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t5 = ($f)((((((($y)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t6 = ($g)(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t7 = ($h)((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t8 = ($i)(((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t8 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t8 = null;
};
};
$__t7 = $__t8;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
$__t6 = $__t7;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
$__t5 = $__t6;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
$__t4 = $__t5;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
$__t3 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t2 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 10 ? $__res(...\array_slice(\func_get_args(), 10)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct8'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 9);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($a)(($y)->value0);
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Left"))) {
$__t1 = ($b)((($y)->value0)->value0);
} else {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right"))) {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Left"))) {
$__t2 = ($c)(((($y)->value0)->value0)->value0);
} else {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right"))) {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Left"))) {
$__t3 = ($d)((((($y)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t4 = ($e)(((((($y)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t5 = ($f)((((((($y)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t6 = ($g)(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t7 = ($h)((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t7 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
$__t6 = $__t7;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
$__t5 = $__t6;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
$__t4 = $__t5;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
$__t3 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t2 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 9 ? $__res(...\array_slice(\func_get_args(), 9)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct7'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 8);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($a)(($y)->value0);
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Left"))) {
$__t1 = ($b)((($y)->value0)->value0);
} else {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right"))) {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Left"))) {
$__t2 = ($c)(((($y)->value0)->value0)->value0);
} else {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right"))) {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Left"))) {
$__t3 = ($d)((((($y)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t4 = ($e)(((((($y)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t5 = ($f)((((((($y)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t6 = ($g)(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t6 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
$__t5 = $__t6;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
$__t4 = $__t5;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
$__t3 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t2 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 8 ? $__res(...\array_slice(\func_get_args(), 8)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct6'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 7);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($a)(($y)->value0);
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Left"))) {
$__t1 = ($b)((($y)->value0)->value0);
} else {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right"))) {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Left"))) {
$__t2 = ($c)(((($y)->value0)->value0)->value0);
} else {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right"))) {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Left"))) {
$__t3 = ($d)((((($y)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t4 = ($e)(((((($y)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t5 = ($f)((((((($y)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t5 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((((((($y)->value0)->value0)->value0)->value0)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
$__t4 = $__t5;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
$__t3 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t2 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 7 ? $__res(...\array_slice(\func_get_args(), 7)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct5'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 6);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($a)(($y)->value0);
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Left"))) {
$__t1 = ($b)((($y)->value0)->value0);
} else {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right"))) {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Left"))) {
$__t2 = ($c)(((($y)->value0)->value0)->value0);
} else {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right"))) {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Left"))) {
$__t3 = ($d)((((($y)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t4 = ($e)(((((($y)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t4 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(((((($y)->value0)->value0)->value0)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
$__t3 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t2 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 6 ? $__res(...\array_slice(\func_get_args(), 6)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct4'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($a)(($y)->value0);
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Left"))) {
$__t1 = ($b)((($y)->value0)->value0);
} else {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right"))) {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Left"))) {
$__t2 = ($c)(((($y)->value0)->value0)->value0);
} else {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right"))) {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Left"))) {
$__t3 = ($d)((((($y)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t3 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((((($y)->value0)->value0)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t2 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct3'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($a)(($y)->value0);
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Left"))) {
$__t1 = ($b)((($y)->value0)->value0);
} else {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right"))) {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Left"))) {
$__t2 = ($c)(((($y)->value0)->value0)->value0);
} else {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t2 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(((($y)->value0)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct2'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($a)(($y)->value0);
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Left"))) {
$__t1 = ($b)((($y)->value0)->value0);
} else {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t1 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($y)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct10'] = function() { $v = (function() {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 11) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 11);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($a)(($y)->value0);
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Left"))) {
$__t1 = ($b)((($y)->value0)->value0);
} else {
if ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right"))) {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Left"))) {
$__t2 = ($c)(((($y)->value0)->value0)->value0);
} else {
if ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right"))) {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Left"))) {
$__t3 = ($d)((((($y)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t4 = ($e)(((((($y)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t5 = ($f)((((((($y)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t6 = ($g)(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t7 = ($h)((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t8 = ($i)(((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
if ((is_object(((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))) {
$__t9 = ($j)((((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
if ((is_object(((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t9 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t9 = null;
};
};
$__t8 = $__t9;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t8 = null;
};
};
$__t7 = $__t8;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t7 = null;
};
};
$__t6 = $__t7;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t6 = null;
};
};
$__t5 = $__t6;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t5 = null;
};
};
$__t4 = $__t5;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t4 = null;
};
};
$__t3 = $__t4;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
$__t2 = $__t3;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
$__t1 = $__t2;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
$__t0 = $__t1;
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 11 ? $__res(...\array_slice(\func_get_args(), 11)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_coproduct1'] = function() { $v = function($y) {
  $__num = \func_num_args();
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($y)->value0;
} else {
if ((is_object($y) && (($y)->tag === "Right"))) {
$spin = null;
$spin = function($v) use (&$spin) {
  $__num = \func_num_args();
  $__res = ($spin)($v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
$__t0 = ($spin)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(($y)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at9'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($y) && (($y)->tag === "Right")) && ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right")) && ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right")) && ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right")) && ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && (is_object((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))))))))))) {
$__t0 = ($f)(((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at8'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($y) && (($y)->tag === "Right")) && ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right")) && ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right")) && ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right")) && ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && (is_object(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left")))))))))) {
$__t0 = ($f)((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at7'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($y) && (($y)->tag === "Right")) && ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right")) && ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right")) && ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right")) && ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && (is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left"))))))))) {
$__t0 = ($f)(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at6'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($y) && (($y)->tag === "Right")) && ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right")) && ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right")) && ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right")) && ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right")) && (is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Left")))))))) {
$__t0 = ($f)((((((($y)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at5'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($y) && (($y)->tag === "Right")) && ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right")) && ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right")) && ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right")) && (is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Left"))))))) {
$__t0 = ($f)(((((($y)->value0)->value0)->value0)->value0)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at4'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($y) && (($y)->tag === "Right")) && ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right")) && ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right")) && (is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Left")))))) {
$__t0 = ($f)((((($y)->value0)->value0)->value0)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at3'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($y) && (($y)->tag === "Right")) && ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right")) && (is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Left"))))) {
$__t0 = ($f)(((($y)->value0)->value0)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at2'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($y) && (($y)->tag === "Right")) && (is_object(($y)->value0) && ((($y)->value0)->tag === "Left")))) {
$__t0 = ($f)((($y)->value0)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at10'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if (((is_object($y) && (($y)->tag === "Right")) && ((is_object(($y)->value0) && ((($y)->value0)->tag === "Right")) && ((is_object((($y)->value0)->value0) && (((($y)->value0)->value0)->tag === "Right")) && ((is_object(((($y)->value0)->value0)->value0) && ((((($y)->value0)->value0)->value0)->tag === "Right")) && ((is_object((((($y)->value0)->value0)->value0)->value0) && (((((($y)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object(((((($y)->value0)->value0)->value0)->value0)->value0) && ((((((($y)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object((((((($y)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object(((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && ((is_object((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && (((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Right")) && (is_object(((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0) && ((((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->tag === "Left")))))))))))) {
$__t0 = ($f)((((((((((($y)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Coproduct_Nested_at1'] = function() { $v = (function() {
  $__fn = function($b, $f = null, $y = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($y) && (($y)->tag === "Left"))) {
$__t0 = ($f)(($y)->value0);
} else {
$__t0 = $b;
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
































