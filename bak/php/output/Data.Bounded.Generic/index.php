<?php

namespace Data\Bounded\Generic;

require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Bounded.Generic/index.php';
require_once __DIR__ . '/../Data.Generic.Rep/index.php';

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


// Data_Bounded_Generic_GenericTop$Dict
$Data_Bounded_Generic_GenericTop__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_GenericBottom$Dict
$Data_Bounded_Generic_GenericBottom__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericTopNoArguments
$Data_Bounded_Generic_genericTopNoArguments = ($GLOBALS['Data_Bounded_Generic_GenericTop__dollar__Dict'])((object)["genericTop'" => $GLOBALS['Data_Generic_Rep_NoArguments']]);

// Data_Bounded_Generic_genericTopArgument
$Data_Bounded_Generic_genericTopArgument = (function() {
  $__fn = function($dictBounded) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bounded_Generic_GenericTop__dollar__Dict'])((object)["genericTop'" => ($GLOBALS['Data_Generic_Rep_Argument'])(($GLOBALS['Data_Bounded_top'])($dictBounded))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericTop'
$Data_Bounded_Generic_genericTop__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericTop__prime__;
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

// Data_Bounded_Generic_genericTopConstructor
$Data_Bounded_Generic_genericTopConstructor = (function() {
  $__fn = function($dictGenericTop) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bounded_Generic_GenericTop__dollar__Dict'])((object)["genericTop'" => ($GLOBALS['Data_Generic_Rep_Constructor'])(($GLOBALS['Data_Bounded_Generic_genericTop__prime__'])($dictGenericTop))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericTopProduct
$Data_Bounded_Generic_genericTopProduct = (function() {
  $__fn = function($dictGenericTop) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericTop__prime__1 = ($GLOBALS['Data_Bounded_Generic_genericTop__prime__'])($dictGenericTop);
    $__res = (function() use ($genericTop__prime__1) {
  $__fn = function($dictGenericTop1) use ($genericTop__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bounded_Generic_GenericTop__dollar__Dict'])((object)["genericTop'" => ($GLOBALS['Data_Generic_Rep_Product'])($genericTop__prime__1, ($GLOBALS['Data_Bounded_Generic_genericTop__prime__'])($dictGenericTop1))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericTopSum
$Data_Bounded_Generic_genericTopSum = (function() {
  $__fn = function($dictGenericTop) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bounded_Generic_GenericTop__dollar__Dict'])((object)["genericTop'" => ($GLOBALS['Data_Generic_Rep_Inr'])(($GLOBALS['Data_Bounded_Generic_genericTop__prime__'])($dictGenericTop))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericTop
$Data_Bounded_Generic_genericTop = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericTop) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($to)(($GLOBALS['Data_Bounded_Generic_genericTop__prime__'])($dictGenericTop));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericBottomNoArguments
$Data_Bounded_Generic_genericBottomNoArguments = ($GLOBALS['Data_Bounded_Generic_GenericBottom__dollar__Dict'])((object)["genericBottom'" => $GLOBALS['Data_Generic_Rep_NoArguments']]);

// Data_Bounded_Generic_genericBottomArgument
$Data_Bounded_Generic_genericBottomArgument = (function() {
  $__fn = function($dictBounded) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bounded_Generic_GenericBottom__dollar__Dict'])((object)["genericBottom'" => ($GLOBALS['Data_Generic_Rep_Argument'])(($GLOBALS['Data_Bounded_bottom'])($dictBounded))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericBottom'
$Data_Bounded_Generic_genericBottom__prime__ = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->genericBottom__prime__;
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

// Data_Bounded_Generic_genericBottomConstructor
$Data_Bounded_Generic_genericBottomConstructor = (function() {
  $__fn = function($dictGenericBottom) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bounded_Generic_GenericBottom__dollar__Dict'])((object)["genericBottom'" => ($GLOBALS['Data_Generic_Rep_Constructor'])(($GLOBALS['Data_Bounded_Generic_genericBottom__prime__'])($dictGenericBottom))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericBottomProduct
$Data_Bounded_Generic_genericBottomProduct = (function() {
  $__fn = function($dictGenericBottom) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$genericBottom__prime__1 = ($GLOBALS['Data_Bounded_Generic_genericBottom__prime__'])($dictGenericBottom);
    $__res = (function() use ($genericBottom__prime__1) {
  $__fn = function($dictGenericBottom1) use ($genericBottom__prime__1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bounded_Generic_GenericBottom__dollar__Dict'])((object)["genericBottom'" => ($GLOBALS['Data_Generic_Rep_Product'])($genericBottom__prime__1, ($GLOBALS['Data_Bounded_Generic_genericBottom__prime__'])($dictGenericBottom1))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericBottomSum
$Data_Bounded_Generic_genericBottomSum = (function() {
  $__fn = function($dictGenericBottom) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Bounded_Generic_GenericBottom__dollar__Dict'])((object)["genericBottom'" => ($GLOBALS['Data_Generic_Rep_Inl'])(($GLOBALS['Data_Bounded_Generic_genericBottom__prime__'])($dictGenericBottom))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Bounded_Generic_genericBottom
$Data_Bounded_Generic_genericBottom = (function() {
  $__fn = function($dictGeneric) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$to = ($GLOBALS['Data_Generic_Rep_to'])($dictGeneric);
    $__res = (function() use ($to) {
  $__fn = function($dictGenericBottom) use ($to, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($to)(($GLOBALS['Data_Bounded_Generic_genericBottom__prime__'])($dictGenericBottom));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

