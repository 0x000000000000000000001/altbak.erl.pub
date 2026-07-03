<?php

namespace Data\Show;

require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Data.Void/index.php';
require_once __DIR__ . '/../Record.Unsafe/index.php';
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
if (!function_exists('phpurs_uncurry2')) {
function phpurs_uncurry2($fn) {
    return function($a, $b = null) use ($fn) {
        if (func_num_args() < 2) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry2($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b);
    };
}
function phpurs_uncurry3($fn) {
    return function($a, $b = null, $c = null) use ($fn) {
        if (func_num_args() < 3) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry3($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c);
    };
}
function phpurs_uncurry4($fn) {
    return function($a, $b = null, $c = null, $d = null) use ($fn) {
        if (func_num_args() < 4) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry4($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d);
    };
}
function phpurs_uncurry5($fn) {
    return function($a, $b = null, $c = null, $d = null, $e = null) use ($fn) {
        if (func_num_args() < 5) {
            $__args = func_get_args();
            return function(...$more) use ($fn, $__args) {
                return phpurs_uncurry5($fn)(...array_merge($__args, $more));
            };
        }
        return $fn($a)($b)($c)($d)($e);
    };
}
}




$Data_Show_showIntImpl = function($i) { return (string)$i; };
$Data_Show_showStringImpl = function($s) { return $s; };
$Data_Show_showNumberImpl = function($n) { return (string)$n; };
$Data_Show_showCharImpl = function($c) { return $c; };
$Data_Show_showArrayImpl = phpurs_uncurry2(function($f) { return function($xs) use(&$f) { return "[" . implode(",", array_map($f, $xs)) . "]"; }; });

// Data_Show_append
$Data_Show_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Show_ShowRecordFields$Dict
$Data_Show_ShowRecordFields__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_Show$Dict
$Data_Show_Show__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_showVoid
$Data_Show_showVoid = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => $GLOBALS['Data_Void_absurd']]);

// Data_Show_showUnit
$Data_Show_showUnit = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = "unit";
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Show_showString
$Data_Show_showString = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => $GLOBALS['Data_Show_showStringImpl']]);

// Data_Show_showRecordFieldsNil
$Data_Show_showRecordFieldsNil = ($GLOBALS['Data_Show_ShowRecordFields__dollar__Dict'])((object)["showRecordFields" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = "";
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Show_showRecordFields
$Data_Show_showRecordFields = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->showRecordFields;
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

// Data_Show_showRecord
$Data_Show_showRecord = (function() {
  $__fn = function($__dollar____unused_, $__dollar____unused = null, $dictShowRecordFields = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$showRecordFields1 = ($GLOBALS['Data_Show_showRecordFields'])($dictShowRecordFields);
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() use ($showRecordFields1) {
  $__fn = function($record) use ($showRecordFields1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Show_append'])("{", ($GLOBALS['Data_Show_append'])(($showRecordFields1)($GLOBALS['Type_Proxy_Proxy'], $record), "}"));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();

// Data_Show_showProxy
$Data_Show_showProxy = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = "Proxy";
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Show_showNumber
$Data_Show_showNumber = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => $GLOBALS['Data_Show_showNumberImpl']]);

// Data_Show_showInt
$Data_Show_showInt = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => $GLOBALS['Data_Show_showIntImpl']]);

// Data_Show_showChar
$Data_Show_showChar = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => $GLOBALS['Data_Show_showCharImpl']]);

// Data_Show_showBoolean
$Data_Show_showBoolean = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (($__case_0 === true)) {
return "true";
} else {
if (($__case_0 === false)) {
return "false";
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Show_show
$Data_Show_show = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->show;
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

// Data_Show_showArray
$Data_Show_showArray = (function() {
  $__fn = function($dictShow) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => ($GLOBALS['Data_Show_showArrayImpl'])(($GLOBALS['Data_Show_show'])($dictShow))]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_showRecordFieldsCons
$Data_Show_showRecordFieldsCons = (function() {
  $__fn = function($dictIsSymbol) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$reflectSymbol = ($GLOBALS['Data_Symbol_reflectSymbol'])($dictIsSymbol);
    $__res = (function() use ($reflectSymbol) {
  $__fn = function($dictShowRecordFields) use ($reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$showRecordFields1 = ($GLOBALS['Data_Show_showRecordFields'])($dictShowRecordFields);
    $__res = (function() use ($showRecordFields1, $reflectSymbol) {
  $__fn = function($dictShow) use ($showRecordFields1, $reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show1 = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = ($GLOBALS['Data_Show_ShowRecordFields__dollar__Dict'])((object)["showRecordFields" => (function() use ($showRecordFields1, $reflectSymbol, $show1) {
  $__fn = function($v, $record = null) use ($showRecordFields1, $reflectSymbol, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$tail = ($showRecordFields1)($GLOBALS['Type_Proxy_Proxy'], $record);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$focus = ($GLOBALS['Record_Unsafe_unsafeGet'])($key, $record);
    $__res = ($GLOBALS['Data_Show_append'])(" ", ($GLOBALS['Data_Show_append'])($key, ($GLOBALS['Data_Show_append'])(": ", ($GLOBALS['Data_Show_append'])(($show1)($focus), ($GLOBALS['Data_Show_append'])(",", $tail)))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Show_showRecordFieldsConsNil
$Data_Show_showRecordFieldsConsNil = (function() {
  $__fn = function($dictIsSymbol) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$reflectSymbol = ($GLOBALS['Data_Symbol_reflectSymbol'])($dictIsSymbol);
    $__res = (function() use ($reflectSymbol) {
  $__fn = function($dictShow) use ($reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$show1 = ($GLOBALS['Data_Show_show'])($dictShow);
    $__res = ($GLOBALS['Data_Show_ShowRecordFields__dollar__Dict'])((object)["showRecordFields" => (function() use ($reflectSymbol, $show1) {
  $__fn = function($v, $record = null) use ($reflectSymbol, $show1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$focus = ($GLOBALS['Record_Unsafe_unsafeGet'])($key, $record);
    $__res = ($GLOBALS['Data_Show_append'])(" ", ($GLOBALS['Data_Show_append'])($key, ($GLOBALS['Data_Show_append'])(": ", ($GLOBALS['Data_Show_append'])(($show1)($focus), " "))));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
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

