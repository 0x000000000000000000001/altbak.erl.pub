<?php

namespace Data\Show\Generic;

require_once __DIR__ . '/../Data.Generic.Rep/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Show.Generic/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Type.Proxy/index.php';

if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...$merged);
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Show_Generic_append
$Data_Show_Generic_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupArray']);

// Data_Show_Generic_append1
$Data_Show_Generic_append1 = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Show_Generic_GenericShowArgs$Dict
$Data_Show_Generic_GenericShowArgs__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_Generic_GenericShow$Dict
$Data_Show_Generic_GenericShow__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_Generic_genericShowArgsNoArguments
$Data_Show_Generic_genericShowArgsNoArguments = ($GLOBALS['Data_Show_Generic_GenericShowArgs__dollar__Dict'])((object)["genericShowArgs" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = [];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Show_Generic_genericShowArgsArgument
$Data_Show_Generic_genericShowArgsArgument = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = ($GLOBALS['Data_Show_Generic_GenericShowArgs__dollar__Dict'])((object)["genericShowArgs" => (function() use ($show) {
  $__body = function($v) use ($show) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return [($show)($a)];
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($show, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_Generic_genericShowArgs
$Data_Show_Generic_genericShowArgs = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericShowArgs;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_Generic_genericShowArgsProduct
$Data_Show_Generic_genericShowArgsProduct = (function() {
  $__fn = function($dictGenericShowArgs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericShowArgs1 = ($GLOBALS['Data_Show_Generic_genericShowArgs'])($dictGenericShowArgs);
    $__res = (function() use ($genericShowArgs1) {
  $__fn = function($dictGenericShowArgs1) use ($genericShowArgs1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericShowArgs2 = ($GLOBALS['Data_Show_Generic_genericShowArgs'])($dictGenericShowArgs1);
    $__res = ($GLOBALS['Data_Show_Generic_GenericShowArgs__dollar__Dict'])((object)["genericShowArgs" => (function() use ($genericShowArgs1, $genericShowArgs2) {
  $__body = function($v) use ($genericShowArgs1, $genericShowArgs2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Product")) {
$a = ($__case_0)->values[0];
$b = ($__case_0)->values[1];
return ($GLOBALS['Data_Show_Generic_append'])(($genericShowArgs1)($a), ($genericShowArgs2)($b));
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($genericShowArgs1, $genericShowArgs2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_Generic_genericShowConstructor
$Data_Show_Generic_genericShowConstructor = (function() {
  $__fn = function($dictGenericShowArgs) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericShowArgs1 = ($GLOBALS['Data_Show_Generic_genericShowArgs'])($dictGenericShowArgs);
    $__res = (function() use ($genericShowArgs1) {
  $__fn = function($dictIsSymbol) use ($genericShowArgs1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$reflectSymbol = ($GLOBALS['Data_Symbol_reflectSymbol'])($dictIsSymbol);
    $__res = ($GLOBALS['Data_Show_Generic_GenericShow__dollar__Dict'])((object)["genericShow'" => (function() use ($reflectSymbol, $genericShowArgs1) {
  $__body = function($v) use ($reflectSymbol, $genericShowArgs1) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
$ctor = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$v1 = ($genericShowArgs1)($a);
$__case_0 = $v1;
if (($__case_0 === /* ArrayLiteral */)) {
return $ctor;
} else {
if (true) {
$args = $__case_0;
return ($GLOBALS['Data_Show_Generic_append1'])("(", ($GLOBALS['Data_Show_Generic_append1'])(($GLOBALS['Data_Show_Generic_intercalate'])(" ", ($GLOBALS['Data_Show_Generic_append'])([$ctor], $args)), ")"));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($reflectSymbol, $genericShowArgs1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_Generic_genericShow'
$Data_Show_Generic_genericShow__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericShow__prime__;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($dict) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($dict);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_Generic_genericShowNoConstructors
$Data_Show_Generic_genericShowNoConstructors = ($GLOBALS['Data_Show_Generic_GenericShow__dollar__Dict'])((object)["genericShow'" => (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Show_Generic_genericShow__prime__'])($GLOBALS['Data_Show_Generic_genericShowNoConstructors'], $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Show_Generic_genericShowSum
$Data_Show_Generic_genericShowSum = (function() {
  $__fn = function($dictGenericShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericShow__prime__1 = ($GLOBALS['Data_Show_Generic_genericShow__prime__'])($dictGenericShow);
    $__res = (function() use ($genericShow__prime__1) {
  $__fn = function($dictGenericShow1) use ($genericShow__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericShow__prime__2 = ($GLOBALS['Data_Show_Generic_genericShow__prime__'])($dictGenericShow1);
    $__res = ($GLOBALS['Data_Show_Generic_GenericShow__dollar__Dict'])((object)["genericShow'" => (function() use ($genericShow__prime__1, $genericShow__prime__2) {
  $__body = function($v) use ($genericShow__prime__1, $genericShow__prime__2) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "Inl")) {
$a = ($__case_0)->values[0];
return ($genericShow__prime__1)($a);
} else {
if ((($__case_0)->tag === "Inr")) {
$b = ($__case_0)->values[0];
return ($genericShow__prime__2)($b);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($genericShow__prime__1, $genericShow__prime__2, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_Generic_genericShow
$Data_Show_Generic_genericShow = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$from = ($GLOBALS['Data_Generic_Rep_from'])($dictGeneric);
    $__res = (function() use ($from) {
  $__fn = function($dictGenericShow) use ($from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericShow__prime__1 = ($GLOBALS['Data_Show_Generic_genericShow__prime__'])($dictGenericShow);
    $__res = (function() use ($genericShow__prime__1, $from) {
  $__fn = function($x) use ($genericShow__prime__1, $from, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($genericShow__prime__1)(($from)($x));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

