<?php

namespace Data\Functor\Coproduct\Nested;

require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Prelude/index.php';

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


// Data_Functor_Coproduct_Nested_unwrap
$Data_Functor_Coproduct_Nested_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_Functor_Coproduct_Nested_in9
$Data_Functor_Coproduct_Nested_in9 = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_left'])($v)))))))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in8
$Data_Functor_Coproduct_Nested_in8 = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_left'])($v))))))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in7
$Data_Functor_Coproduct_Nested_in7 = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_left'])($v)))))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in6
$Data_Functor_Coproduct_Nested_in6 = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_left'])($v))))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in5
$Data_Functor_Coproduct_Nested_in5 = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_left'])($v)))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in4
$Data_Functor_Coproduct_Nested_in4 = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_left'])($v))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in3
$Data_Functor_Coproduct_Nested_in3 = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_left'])($v)));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in2
$Data_Functor_Coproduct_Nested_in2 = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_left'])($v));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in10
$Data_Functor_Coproduct_Nested_in10 = (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_right'])(($GLOBALS['Data_Functor_Coproduct_left'])($v))))))))));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_in1
$Data_Functor_Coproduct_Nested_in1 = $GLOBALS['Data_Functor_Coproduct_left'];

// Data_Functor_Coproduct_Nested_coproduct9
$Data_Functor_Coproduct_Nested_coproduct9 = (function() {
  $__body = function($a, $b, $c, $d, $e, $f, $g, $h, $i, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
$__case_0 = $_6;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($g)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_7 = ($__case_0)->values[0];
$__case_0 = $_7;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($h)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_8 = ($__case_0)->values[0];
$__case_0 = $_8;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($i)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_9 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_9));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 10) return phpurs_curry_fallback($__fn, func_get_args(), 10);
    $__res = $__body($a, $b, $c, $d, $e, $f, $g, $h, $i, $y);
  return $__num > 10 ? $__res(...array_slice(func_get_args(), 10)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct8
$Data_Functor_Coproduct_Nested_coproduct8 = (function() {
  $__body = function($a, $b, $c, $d, $e, $f, $g, $h, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
$__case_0 = $_6;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($g)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_7 = ($__case_0)->values[0];
$__case_0 = $_7;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($h)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_8 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_8));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 9) return phpurs_curry_fallback($__fn, func_get_args(), 9);
    $__res = $__body($a, $b, $c, $d, $e, $f, $g, $h, $y);
  return $__num > 9 ? $__res(...array_slice(func_get_args(), 9)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct7
$Data_Functor_Coproduct_Nested_coproduct7 = (function() {
  $__body = function($a, $b, $c, $d, $e, $f, $g, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
$__case_0 = $_6;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($g)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_7 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_7));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 8) return phpurs_curry_fallback($__fn, func_get_args(), 8);
    $__res = $__body($a, $b, $c, $d, $e, $f, $g, $y);
  return $__num > 8 ? $__res(...array_slice(func_get_args(), 8)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct6
$Data_Functor_Coproduct_Nested_coproduct6 = (function() {
  $__body = function($a, $b, $c, $d, $e, $f, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_6));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 7) return phpurs_curry_fallback($__fn, func_get_args(), 7);
    $__res = $__body($a, $b, $c, $d, $e, $f, $y);
  return $__num > 7 ? $__res(...array_slice(func_get_args(), 7)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct5
$Data_Functor_Coproduct_Nested_coproduct5 = (function() {
  $__body = function($a, $b, $c, $d, $e, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_5));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 6) return phpurs_curry_fallback($__fn, func_get_args(), 6);
    $__res = $__body($a, $b, $c, $d, $e, $y);
  return $__num > 6 ? $__res(...array_slice(func_get_args(), 6)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct4
$Data_Functor_Coproduct_Nested_coproduct4 = (function() {
  $__body = function($a, $b, $c, $d, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_4));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) return phpurs_curry_fallback($__fn, func_get_args(), 5);
    $__res = $__body($a, $b, $c, $d, $y);
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct3
$Data_Functor_Coproduct_Nested_coproduct3 = (function() {
  $__body = function($a, $b, $c, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_3));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null, $c = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) return phpurs_curry_fallback($__fn, func_get_args(), 4);
    $__res = $__body($a, $b, $c, $y);
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct2
$Data_Functor_Coproduct_Nested_coproduct2 = (function() {
  $__body = function($a, $b, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_2));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($a, $b, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct10
$Data_Functor_Coproduct_Nested_coproduct10 = (function() {
  $__body = function($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($a)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
$__case_0 = $_1;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($b)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_2 = ($__case_0)->values[0];
$__case_0 = $_2;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($c)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_3 = ($__case_0)->values[0];
$__case_0 = $_3;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($d)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_4 = ($__case_0)->values[0];
$__case_0 = $_4;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($e)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_5 = ($__case_0)->values[0];
$__case_0 = $_5;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_6 = ($__case_0)->values[0];
$__case_0 = $_6;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($g)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_7 = ($__case_0)->values[0];
$__case_0 = $_7;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($h)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_8 = ($__case_0)->values[0];
$__case_0 = $_8;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($i)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_9 = ($__case_0)->values[0];
$__case_0 = $_9;
if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($j)($r);
} else {
if ((($__case_0)->tag === "Right")) {
$_10 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_10));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 11) return phpurs_curry_fallback($__fn, func_get_args(), 11);
    $__res = $__body($a, $b, $c, $d, $e, $f, $g, $h, $i, $j, $y);
  return $__num > 11 ? $__res(...array_slice(func_get_args(), 11)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_coproduct1
$Data_Functor_Coproduct_Nested_coproduct1 = (function() {
  $__body = function($y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return $r;
} else {
if ((($__case_0)->tag === "Right")) {
$_1 = ($__case_0)->values[0];
return ($GLOBALS['Data_Void_absurd'])(($GLOBALS['Data_Functor_Coproduct_Nested_unwrap'])($_1));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($y) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($y);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at9
$Data_Functor_Coproduct_Nested_at9 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left")))))))))) {
$r = ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at8
$Data_Functor_Coproduct_Nested_at8 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left"))))))))) {
$r = (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at7
$Data_Functor_Coproduct_Nested_at7 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left")))))))) {
$r = ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at6
$Data_Functor_Coproduct_Nested_at6 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left"))))))) {
$r = (((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at5
$Data_Functor_Coproduct_Nested_at5 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Left")))))) {
$r = ((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at4
$Data_Functor_Coproduct_Nested_at4 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->values[0])->tag === "Left"))))) {
$r = (((($__case_0)->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at3
$Data_Functor_Coproduct_Nested_at3 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && (((($__case_0)->values[0])->values[0])->tag === "Left")))) {
$r = ((($__case_0)->values[0])->values[0])->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at2
$Data_Functor_Coproduct_Nested_at2 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && ((($__case_0)->values[0])->tag === "Left"))) {
$r = (($__case_0)->values[0])->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at10
$Data_Functor_Coproduct_Nested_at10 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if (((($__case_0)->tag === "Right") && (((($__case_0)->values[0])->tag === "Right") && ((((($__case_0)->values[0])->values[0])->tag === "Right") && (((((($__case_0)->values[0])->values[0])->values[0])->tag === "Right") && ((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && (((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Right") && ((((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->tag === "Left"))))))))))) {
$r = (((((((((($__case_0)->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0])->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Functor_Coproduct_Nested_at1
$Data_Functor_Coproduct_Nested_at1 = (function() {
  $__body = function($b, $f, $y) {
    $__case_0 = $y;
    if ((($__case_0)->tag === "Left")) {
$r = ($__case_0)->values[0];
return ($f)($r);
} else {
if (true) {
return $b;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($b, $f = null, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($b, $f, $y);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

