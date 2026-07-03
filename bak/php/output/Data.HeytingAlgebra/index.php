<?php

namespace Data\HeytingAlgebra;

require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
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




$Data_HeytingAlgebra_boolConj = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a && $b; }; });
$Data_HeytingAlgebra_boolDisj = phpurs_uncurry2(function($a) { return function($b) use(&$a) { return $a || $b; }; });
$Data_HeytingAlgebra_boolNot = function($a) { return !$a; };

// Data_HeytingAlgebra_HeytingAlgebraRecord$Dict
$Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_HeytingAlgebra_HeytingAlgebra$Dict
$Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_HeytingAlgebra_ttRecord
$Data_HeytingAlgebra_ttRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ttRecord;
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

// Data_HeytingAlgebra_tt
$Data_HeytingAlgebra_tt = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->tt;
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

// Data_HeytingAlgebra_notRecord
$Data_HeytingAlgebra_notRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->notRecord;
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

// Data_HeytingAlgebra_not
$Data_HeytingAlgebra_not = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->not;
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

// Data_HeytingAlgebra_impliesRecord
$Data_HeytingAlgebra_impliesRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->impliesRecord;
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

// Data_HeytingAlgebra_implies
$Data_HeytingAlgebra_implies = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->implies;
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

// Data_HeytingAlgebra_heytingAlgebraUnit
$Data_HeytingAlgebra_heytingAlgebraUnit = ($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'])((object)["ff" => $GLOBALS['Data_Unit_unit'], "tt" => $GLOBALS['Data_Unit_unit'], "implies" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Unit_unit'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Unit_unit'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Unit_unit'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "not" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Unit_unit'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_HeytingAlgebra_heytingAlgebraRecordNil
$Data_HeytingAlgebra_heytingAlgebraRecordNil = ($GLOBALS['Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict'])((object)["conjRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)[];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "disjRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)[];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "ffRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)[];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "impliesRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = (object)[];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "notRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)[];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ttRecord" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = (object)[];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_HeytingAlgebra_heytingAlgebraProxy
$Data_HeytingAlgebra_heytingAlgebraProxy = ($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'])((object)["conj" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Type_Proxy_Proxy'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Type_Proxy_Proxy'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "implies" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Type_Proxy_Proxy'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ff" => $GLOBALS['Type_Proxy_Proxy'], "not" => (function() {
  $__fn = function($v) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Type_Proxy_Proxy'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "tt" => $GLOBALS['Type_Proxy_Proxy']]);

// Data_HeytingAlgebra_ffRecord
$Data_HeytingAlgebra_ffRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ffRecord;
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

// Data_HeytingAlgebra_ff
$Data_HeytingAlgebra_ff = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->ff;
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

// Data_HeytingAlgebra_disjRecord
$Data_HeytingAlgebra_disjRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->disjRecord;
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

// Data_HeytingAlgebra_disj
$Data_HeytingAlgebra_disj = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->disj;
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

// Data_HeytingAlgebra_heytingAlgebraBoolean
$Data_HeytingAlgebra_heytingAlgebraBoolean = ($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'])((object)["ff" => false, "tt" => true, "implies" => (function() {
  $__fn = function($a, $b = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_HeytingAlgebra_disj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'], ($GLOBALS['Data_HeytingAlgebra_not'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'], $a), $b);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "conj" => $GLOBALS['Data_HeytingAlgebra_boolConj'], "disj" => $GLOBALS['Data_HeytingAlgebra_boolDisj'], "not" => $GLOBALS['Data_HeytingAlgebra_boolNot']]);

// Data_HeytingAlgebra_conjRecord
$Data_HeytingAlgebra_conjRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->conjRecord;
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

// Data_HeytingAlgebra_heytingAlgebraRecord
$Data_HeytingAlgebra_heytingAlgebraRecord = (function() {
  $__fn = function($__dollar____unused, $dictHeytingAlgebraRecord = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'])((object)["ff" => ($GLOBALS['Data_HeytingAlgebra_ffRecord'])($dictHeytingAlgebraRecord, $GLOBALS['Type_Proxy_Proxy'], $GLOBALS['Type_Proxy_Proxy']), "tt" => ($GLOBALS['Data_HeytingAlgebra_ttRecord'])($dictHeytingAlgebraRecord, $GLOBALS['Type_Proxy_Proxy'], $GLOBALS['Type_Proxy_Proxy']), "conj" => ($GLOBALS['Data_HeytingAlgebra_conjRecord'])($dictHeytingAlgebraRecord, $GLOBALS['Type_Proxy_Proxy']), "disj" => ($GLOBALS['Data_HeytingAlgebra_disjRecord'])($dictHeytingAlgebraRecord, $GLOBALS['Type_Proxy_Proxy']), "implies" => ($GLOBALS['Data_HeytingAlgebra_impliesRecord'])($dictHeytingAlgebraRecord, $GLOBALS['Type_Proxy_Proxy']), "not" => ($GLOBALS['Data_HeytingAlgebra_notRecord'])($dictHeytingAlgebraRecord, $GLOBALS['Type_Proxy_Proxy'])]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_HeytingAlgebra_conj
$Data_HeytingAlgebra_conj = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->conj;
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

// Data_HeytingAlgebra_heytingAlgebraFunction
$Data_HeytingAlgebra_heytingAlgebraFunction = (function() {
  $__fn = function($dictHeytingAlgebra) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$ff1 = ($GLOBALS['Data_HeytingAlgebra_ff'])($dictHeytingAlgebra);
$tt1 = ($GLOBALS['Data_HeytingAlgebra_tt'])($dictHeytingAlgebra);
$implies1 = ($GLOBALS['Data_HeytingAlgebra_implies'])($dictHeytingAlgebra);
$conj1 = ($GLOBALS['Data_HeytingAlgebra_conj'])($dictHeytingAlgebra);
$disj1 = ($GLOBALS['Data_HeytingAlgebra_disj'])($dictHeytingAlgebra);
$not1 = ($GLOBALS['Data_HeytingAlgebra_not'])($dictHeytingAlgebra);
    $__res = ($GLOBALS['Data_HeytingAlgebra_HeytingAlgebra__dollar__Dict'])((object)["ff" => (function() use ($ff1) {
  $__fn = function($v) use ($ff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $ff1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "tt" => (function() use ($tt1) {
  $__fn = function($v) use ($tt1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $tt1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "implies" => (function() use ($implies1) {
  $__fn = function($f, $g = null, $a = null) use ($implies1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($implies1)(($f)($a), ($g)($a));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "conj" => (function() use ($conj1) {
  $__fn = function($f, $g = null, $a = null) use ($conj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($conj1)(($f)($a), ($g)($a));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "disj" => (function() use ($disj1) {
  $__fn = function($f, $g = null, $a = null) use ($disj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($disj1)(($f)($a), ($g)($a));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "not" => (function() use ($not1) {
  $__fn = function($f, $a = null) use ($not1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($not1)(($f)($a));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_HeytingAlgebra_heytingAlgebraRecordCons
$Data_HeytingAlgebra_heytingAlgebraRecordCons = (function() {
  $__fn = function($dictIsSymbol) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$reflectSymbol = ($GLOBALS['Data_Symbol_reflectSymbol'])($dictIsSymbol);
    $__res = (function() use ($reflectSymbol) {
  $__fn = function($__dollar____unused, $dictHeytingAlgebraRecord = null) use ($reflectSymbol, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$conjRecord1 = ($GLOBALS['Data_HeytingAlgebra_conjRecord'])($dictHeytingAlgebraRecord);
$disjRecord1 = ($GLOBALS['Data_HeytingAlgebra_disjRecord'])($dictHeytingAlgebraRecord);
$impliesRecord1 = ($GLOBALS['Data_HeytingAlgebra_impliesRecord'])($dictHeytingAlgebraRecord);
$ffRecord1 = ($GLOBALS['Data_HeytingAlgebra_ffRecord'])($dictHeytingAlgebraRecord);
$notRecord1 = ($GLOBALS['Data_HeytingAlgebra_notRecord'])($dictHeytingAlgebraRecord);
$ttRecord1 = ($GLOBALS['Data_HeytingAlgebra_ttRecord'])($dictHeytingAlgebraRecord);
    $__res = (function() use ($conjRecord1, $reflectSymbol, $disjRecord1, $impliesRecord1, $ffRecord1, $notRecord1, $ttRecord1) {
  $__fn = function($dictHeytingAlgebra) use ($conjRecord1, $reflectSymbol, $disjRecord1, $impliesRecord1, $ffRecord1, $notRecord1, $ttRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$conj1 = ($GLOBALS['Data_HeytingAlgebra_conj'])($dictHeytingAlgebra);
$disj1 = ($GLOBALS['Data_HeytingAlgebra_disj'])($dictHeytingAlgebra);
$implies1 = ($GLOBALS['Data_HeytingAlgebra_implies'])($dictHeytingAlgebra);
$ff1 = ($GLOBALS['Data_HeytingAlgebra_ff'])($dictHeytingAlgebra);
$not1 = ($GLOBALS['Data_HeytingAlgebra_not'])($dictHeytingAlgebra);
$tt1 = ($GLOBALS['Data_HeytingAlgebra_tt'])($dictHeytingAlgebra);
    $__res = ($GLOBALS['Data_HeytingAlgebra_HeytingAlgebraRecord__dollar__Dict'])((object)["conjRecord" => (function() use ($conjRecord1, $reflectSymbol, $conj1) {
  $__fn = function($v, $ra = null, $rb = null) use ($conjRecord1, $reflectSymbol, $conj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$tail = ($conjRecord1)($GLOBALS['Type_Proxy_Proxy'], $ra, $rb);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
$get = ($GLOBALS['Record_Unsafe_unsafeGet'])($key);
    $__res = ($insert)(($conj1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "disjRecord" => (function() use ($disjRecord1, $reflectSymbol, $disj1) {
  $__fn = function($v, $ra = null, $rb = null) use ($disjRecord1, $reflectSymbol, $disj1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$tail = ($disjRecord1)($GLOBALS['Type_Proxy_Proxy'], $ra, $rb);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
$get = ($GLOBALS['Record_Unsafe_unsafeGet'])($key);
    $__res = ($insert)(($disj1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "impliesRecord" => (function() use ($impliesRecord1, $reflectSymbol, $implies1) {
  $__fn = function($v, $ra = null, $rb = null) use ($impliesRecord1, $reflectSymbol, $implies1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
$tail = ($impliesRecord1)($GLOBALS['Type_Proxy_Proxy'], $ra, $rb);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
$get = ($GLOBALS['Record_Unsafe_unsafeGet'])($key);
    $__res = ($insert)(($implies1)(($get)($ra), ($get)($rb)), $tail);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "ffRecord" => (function() use ($ffRecord1, $reflectSymbol, $ff1) {
  $__fn = function($v, $row = null) use ($ffRecord1, $reflectSymbol, $ff1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$tail = ($ffRecord1)($GLOBALS['Type_Proxy_Proxy'], $row);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
    $__res = ($insert)($ff1, $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "notRecord" => (function() use ($notRecord1, $reflectSymbol, $not1) {
  $__fn = function($v, $row = null) use ($notRecord1, $reflectSymbol, $not1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$tail = ($notRecord1)($GLOBALS['Type_Proxy_Proxy'], $row);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
$get = ($GLOBALS['Record_Unsafe_unsafeGet'])($key);
    $__res = ($insert)(($not1)(($get)($row)), $tail);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "ttRecord" => (function() use ($ttRecord1, $reflectSymbol, $tt1) {
  $__fn = function($v, $row = null) use ($ttRecord1, $reflectSymbol, $tt1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$tail = ($ttRecord1)($GLOBALS['Type_Proxy_Proxy'], $row);
$key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
$insert = ($GLOBALS['Record_Unsafe_unsafeSet'])($key);
    $__res = ($insert)($tt1, $tail);
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

