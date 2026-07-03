<?php

namespace Data\Semiring;

require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Symbol/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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




$Data_Semiring_intAdd = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a + $b; }; });
$Data_Semiring_intMul = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a * $b; }; });
$Data_Semiring_numAdd = $Data_Semiring_intAdd;
$Data_Semiring_numMul = $Data_Semiring_intMul;

// Data_Semiring_SemiringRecord$Dict
$Data_Semiring_SemiringRecord__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_Semiring$Dict
$Data_Semiring_Semiring__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_zeroRecord
$Data_Semiring_zeroRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->zeroRecord;
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

// Data_Semiring_zero
$Data_Semiring_zero = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->zero;
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

// Data_Semiring_semiringUnit
$Data_Semiring_semiringUnit = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'])((object)["add" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Unit_unit'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zero" => $GLOBALS['Data_Unit_unit'], "mul" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Unit_unit'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => $GLOBALS['Data_Unit_unit']]);

// Data_Semiring_semiringRecordNil
$Data_Semiring_semiringRecordNil = ($GLOBALS['Data_Semiring_SemiringRecord__dollar__Dict'])((object)["addRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)[];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "mulRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)[];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "oneRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)[];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zeroRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)[];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Semiring_semiringProxy
$Data_Semiring_semiringProxy = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'])((object)["add" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Type_Proxy_Proxy'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "mul" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Type_Proxy_Proxy'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "one" => $GLOBALS['Type_Proxy_Proxy'], "zero" => $GLOBALS['Type_Proxy_Proxy']]);

// Data_Semiring_semiringNumber
$Data_Semiring_semiringNumber = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'])((object)["add" => $GLOBALS['Data_Semiring_numAdd'], "zero" => 0.0, "mul" => $GLOBALS['Data_Semiring_numMul'], "one" => 1.0]);

// Data_Semiring_semiringInt
$Data_Semiring_semiringInt = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'])((object)["add" => $GLOBALS['Data_Semiring_intAdd'], "zero" => 0, "mul" => $GLOBALS['Data_Semiring_intMul'], "one" => 1]);

// Data_Semiring_oneRecord
$Data_Semiring_oneRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->oneRecord;
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

// Data_Semiring_one
$Data_Semiring_one = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->one;
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

// Data_Semiring_mulRecord
$Data_Semiring_mulRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mulRecord;
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

// Data_Semiring_mul
$Data_Semiring_mul = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->mul;
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

// Data_Semiring_addRecord
$Data_Semiring_addRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->addRecord;
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

// Data_Semiring_semiringRecord
$Data_Semiring_semiringRecord = (function() {
  $__fn = function($__dollar____unused, $dictSemiringRecord = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'])((object)["add" => ($GLOBALS['Data_Semiring_addRecord'])($dictSemiringRecord, $GLOBALS['Type_Proxy_Proxy']), "mul" => ($GLOBALS['Data_Semiring_mulRecord'])($dictSemiringRecord, $GLOBALS['Type_Proxy_Proxy']), "one" => ($GLOBALS['Data_Semiring_oneRecord'])($dictSemiringRecord, $GLOBALS['Type_Proxy_Proxy'], $GLOBALS['Type_Proxy_Proxy']), "zero" => ($GLOBALS['Data_Semiring_zeroRecord'])($dictSemiringRecord, $GLOBALS['Type_Proxy_Proxy'], $GLOBALS['Type_Proxy_Proxy'])]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_add
$Data_Semiring_add = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->add;
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

// Data_Semiring_semiringFn
$Data_Semiring_semiringFn = (function() {
  $__fn = function($dictSemiring) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$add1 = ($GLOBALS['Data_Semiring_add'])($dictSemiring);
$zero1 = ($GLOBALS['Data_Semiring_zero'])($dictSemiring);
$mul1 = ($GLOBALS['Data_Semiring_mul'])($dictSemiring);
$one1 = ($GLOBALS['Data_Semiring_one'])($dictSemiring);
    $__res = ($GLOBALS['Data_Semiring_Semiring__dollar__Dict'])((object)["add" => (function() use ($add1) {
  $__fn = function($f, $g = null, $x = null) use ($add1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($add1)(($f)($x), ($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "zero" => (function() use ($zero1) {
  $__fn = function($v) use ($zero1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $zero1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "mul" => (function() use ($mul1) {
  $__fn = function($f, $g = null, $x = null) use ($mul1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($mul1)(($f)($x), ($g)($x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "one" => (function() use ($one1) {
  $__fn = function($v) use ($one1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $one1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Semiring_semiringRecordCons
$Data_Semiring_semiringRecordCons = (function() {
  $__fn = function($dictIsSymbol) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$reflectSymbol = ($GLOBALS['Data_Symbol_reflectSymbol'])($dictIsSymbol);
    $__res = (function() use ($reflectSymbol) {
  $__fn = function($__dollar____unused, $dictSemiringRecord = null) use ($reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$addRecord1 = ($GLOBALS['Data_Semiring_addRecord'])($dictSemiringRecord);
$mulRecord1 = ($GLOBALS['Data_Semiring_mulRecord'])($dictSemiringRecord);
$oneRecord1 = ($GLOBALS['Data_Semiring_oneRecord'])($dictSemiringRecord);
$zeroRecord1 = ($GLOBALS['Data_Semiring_zeroRecord'])($dictSemiringRecord);
    $__res = (function() use ($addRecord1, $reflectSymbol, $mulRecord1, $oneRecord1, $zeroRecord1) {
  $__fn = function($dictSemiring) use ($addRecord1, $reflectSymbol, $mulRecord1, $oneRecord1, $zeroRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$add1 = ($GLOBALS['Data_Semiring_add'])($dictSemiring);
$mul1 = ($GLOBALS['Data_Semiring_mul'])($dictSemiring);
$one1 = ($GLOBALS['Data_Semiring_one'])($dictSemiring);
$zero1 = ($GLOBALS['Data_Semiring_zero'])($dictSemiring);
    $__res = ($GLOBALS['Data_Semiring_SemiringRecord__dollar__Dict'])((object)["addRecord" => (function() use ($addRecord1, $reflectSymbol, $add1) {
  $__fn = function($v, $ra = null, $rb = null) use ($addRecord1, $reflectSymbol, $add1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$tail = ($addRecord1)($GLOBALS['Type_Proxy_Proxy'], $ra, $rb);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
$get = ($GLOBALS['Record_Unsafe_unsafeGet'])($key);
    $__res = ($insert)(($add1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "mulRecord" => (function() use ($mulRecord1, $reflectSymbol, $mul1) {
  $__fn = function($v, $ra = null, $rb = null) use ($mulRecord1, $reflectSymbol, $mul1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$tail = ($mulRecord1)($GLOBALS['Type_Proxy_Proxy'], $ra, $rb);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
$get = ($GLOBALS['Record_Unsafe_unsafeGet'])($key);
    $__res = ($insert)(($mul1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "oneRecord" => (function() use ($oneRecord1, $reflectSymbol, $one1) {
  $__fn = function($v, $v1 = null) use ($oneRecord1, $reflectSymbol, $one1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$tail = ($oneRecord1)($GLOBALS['Type_Proxy_Proxy'], $GLOBALS['Type_Proxy_Proxy']);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
    $__res = ($insert)($one1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "zeroRecord" => (function() use ($zeroRecord1, $reflectSymbol, $zero1) {
  $__fn = function($v, $v1 = null) use ($zeroRecord1, $reflectSymbol, $zero1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$tail = ($zeroRecord1)($GLOBALS['Type_Proxy_Proxy'], $GLOBALS['Type_Proxy_Proxy']);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
    $__res = ($insert)($zero1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

