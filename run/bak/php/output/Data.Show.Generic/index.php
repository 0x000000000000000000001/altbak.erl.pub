<?php

namespace Data\Show\Generic;

// ALL IMPORTS: Data.Generic.Rep, Data.Semigroup, Data.Show, Data.Show.Generic, Data.Symbol, Prelude, Prim, Type.Proxy
// TO REQUIRE: Data.Generic.Rep, Data.Semigroup, Data.Show, Data.Show.Generic, Data.Symbol, Prelude, Type.Proxy
require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Show.Generic/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Prelude/index.php';
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
\PhpursThunks::$thunks['Data_Show_Generic_genericShowArgsNoArguments'] = function() { $v = (object)["genericShowArgs" => function($v) {
  $__num = \func_num_args();
  $__res = [];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Show_Generic_genericShowArgsArgument'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["genericShowArgs" => function($v) use (&$dictShow) {
  $__num = \func_num_args();
  $__res = [(($dictShow)->show)($v)];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Show_Generic_genericShowArgs'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericShowArgs;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Show_Generic_genericShowArgsProduct'] = function() { $v = (function() {
  $__fn = function($dictGenericShowArgs, $dictGenericShowArgs1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["genericShowArgs" => function($v) use (&$dictGenericShowArgs, &$dictGenericShowArgs1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatArray'] ?? \PhpursThunks::eval('Data_Semigroup_concatArray')))((($dictGenericShowArgs)->genericShowArgs)(($v)->value0)))((($dictGenericShowArgs1)->genericShowArgs)(($v)->value1));
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
\PhpursThunks::$thunks['Data_Show_Generic_genericShowConstructor'] = function() { $v = (function() {
  $__fn = function($dictGenericShowArgs, $dictIsSymbol = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["genericShow__prime__" => function($v) use (&$dictGenericShowArgs, &$dictIsSymbol) {
  $__num = \func_num_args();
  $ctor_0 = (($dictIsSymbol)->reflectSymbol)(new Phpurs_Data0("Proxy"));
  $v1_1 = (($dictGenericShowArgs)->genericShowArgs)($v);
  switch (count($v1_1)) {
case 0:
$__t2 = $ctor_0;
break;
default:
$__t2 = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("("))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(((($GLOBALS['Data_Show_Generic_intercalate'] ?? \PhpursThunks::eval('Data_Show_Generic_intercalate')))(" "))(((($GLOBALS['Data_Semigroup_concatArray'] ?? \PhpursThunks::eval('Data_Semigroup_concatArray')))([$ctor_0]))($v1_1))))(")"));
break;
};
  $__res = $__t2;
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
\PhpursThunks::$thunks['Data_Show_Generic_genericShow__prime__'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->genericShow__prime__;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Show_Generic_genericShowNoConstructors'] = function() { $v = (object)["genericShow__prime__" => function($a) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Show_Generic_genericShowNoConstructors'] ?? \PhpursThunks::eval('Data_Show_Generic_genericShowNoConstructors')))->genericShow__prime__)($a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Show_Generic_genericShowSum'] = function() { $v = (function() {
  $__fn = function($dictGenericShow, $dictGenericShow1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["genericShow__prime__" => function($v) use (&$dictGenericShow, &$dictGenericShow1) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Inl"))) {
$__t0 = (($dictGenericShow)->genericShow__prime__)(($v)->value0);
} else {
if ((is_object($v) && (($v)->tag === "Inr"))) {
$__t0 = (($dictGenericShow1)->genericShow__prime__)(($v)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
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
\PhpursThunks::$thunks['Data_Show_Generic_genericShow'] = function() { $v = (function() {
  $__fn = function($dictGeneric, $dictGenericShow = null, $x = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($dictGenericShow)->genericShow__prime__)((($dictGeneric)->from)($x));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
$ffi_Data_Show_Generic = \call_user_func(function() {
  $exports = [];
$intercalate = function ($separator, $xs = null) use (&$intercalate) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function (...$more) use ($__args, &$intercalate) {
            return $intercalate(...array_merge($__args, $more));
        };
    }
    return implode($separator, $xs);
};

$exports['intercalate'] = $intercalate;
return $exports;
  return $exports;
});
\PhpursThunks::$thunks['Data_Show_Generic_intercalate'] = function() use (&$ffi_Data_Show_Generic) { return $ffi_Data_Show_Generic['intercalate']; };











