<?php

namespace Data\Ord;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
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



$Data_Ord_ordIntImpl = phpurs_uncurry5(function($lt) { return function($eq) use ($lt) { return function($gt) use ($lt, $eq) { return function($x) use ($lt, $eq, $gt) { return function($y) use ($lt, $eq, $gt, $x) { return $x < $y ? $lt : ($x === $y ? $eq : $gt); }; }; }; }; });
$Data_Ord_ordStringImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordNumberImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordCharImpl = $Data_Ord_ordIntImpl;
$Data_Ord_ordBooleanImpl = $Data_Ord_ordIntImpl;

// Data_Ord_eqRec
$Data_Ord_eqRec = ($GLOBALS['Data_Eq_eqRec'])($GLOBALS['Prim_undefined']);

// Data_Ord_negate
$Data_Ord_negate = ($GLOBALS['Data_Ring_negate'])($GLOBALS['Data_Ring_ringInt']);

// Data_Ord_notEq
$Data_Ord_notEq = ($GLOBALS['Data_Eq_notEq'])($GLOBALS['Data_Ordering_eqOrdering']);

// Data_Ord_OrdRecord$Dict
$Data_Ord_OrdRecord__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_Ord$Dict
$Data_Ord_Ord__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_Ord1$Dict
$Data_Ord_Ord1__dollar__Dict = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_ordVoid
$Data_Ord_ordVoid = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Ordering_EQ'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eqVoid'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordUnit
$Data_Ord_ordUnit = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Ordering_EQ'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eqUnit'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordString
$Data_Ord_ordString = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($GLOBALS['Data_Ord_ordStringImpl'])($GLOBALS['Data_Ordering_LT'], $GLOBALS['Data_Ordering_EQ'], $GLOBALS['Data_Ordering_GT']), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eqString'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordRecordNil
$Data_Ord_ordRecordNil = ($GLOBALS['Data_Ord_OrdRecord__dollar__Dict'])((object)["compareRecord" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $GLOBALS['Data_Ordering_EQ'];
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "EqRecord0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eqRowNil'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordProxy
$Data_Ord_ordProxy = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $GLOBALS['Data_Ordering_EQ'];
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eqProxy'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordOrdering
$Data_Ord_ordOrdering = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__body = function($v, $v1) {
    $__case_0 = $v;
    $__case_1 = $v1;
    if (((($__case_0)->tag === "LT") && (($__case_1)->tag === "LT"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "EQ"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if (((($__case_0)->tag === "GT") && (($__case_1)->tag === "GT"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "LT")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "LT"))) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "EQ") && (($__case_1)->tag === "GT"))) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_0)->tag === "GT")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
};
};
  };
  $__fn = function($v, $v1 = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($v, $v1);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Ordering_eqOrdering'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordNumber
$Data_Ord_ordNumber = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($GLOBALS['Data_Ord_ordNumberImpl'])($GLOBALS['Data_Ordering_LT'], $GLOBALS['Data_Ordering_EQ'], $GLOBALS['Data_Ordering_GT']), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eqNumber'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordInt
$Data_Ord_ordInt = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($GLOBALS['Data_Ord_ordIntImpl'])($GLOBALS['Data_Ordering_LT'], $GLOBALS['Data_Ordering_EQ'], $GLOBALS['Data_Ordering_GT']), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eqInt'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordChar
$Data_Ord_ordChar = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($GLOBALS['Data_Ord_ordCharImpl'])($GLOBALS['Data_Ordering_LT'], $GLOBALS['Data_Ordering_EQ'], $GLOBALS['Data_Ordering_GT']), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eqChar'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordBoolean
$Data_Ord_ordBoolean = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($GLOBALS['Data_Ord_ordBooleanImpl'])($GLOBALS['Data_Ordering_LT'], $GLOBALS['Data_Ordering_EQ'], $GLOBALS['Data_Ordering_GT']), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eqBoolean'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_compareRecord
$Data_Ord_compareRecord = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compareRecord;
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

// Data_Ord_ordRecord
$Data_Ord_ordRecord = (function() {
  $__fn = function($__dollar____unused, $dictOrdRecord = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$eqRec1 = ($GLOBALS['Data_Ord_eqRec'])((($dictOrdRecord)->EqRecord0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => ($GLOBALS['Data_Ord_compareRecord'])($dictOrdRecord, $GLOBALS['Type_Proxy_Proxy']), "Eq0" => (function() use ($eqRec1) {
  $__fn = function($__dollar____unused) use ($eqRec1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqRec1;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_compare1
$Data_Ord_compare1 = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compare1;
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

// Data_Ord_compare
$Data_Ord_compare = (function() {
  $__body = function($dict) {
    $__case_0 = $dict;
    if (true) {
$v = $__case_0;
return ($v)->compare;
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

// Data_Ord_compare2
$Data_Ord_compare2 = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Ord_ordInt']);

// Data_Ord_comparing
$Data_Ord_comparing = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare3 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare3) {
  $__fn = function($f, $x = null, $y = null) use ($compare3, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($compare3)(($f)($x), ($f)($y));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_greaterThan
$Data_Ord_greaterThan = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare3 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_greaterThanOrEq
$Data_Ord_greaterThanOrEq = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare3 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return false;
} else {
if (true) {
return true;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_lessThan
$Data_Ord_lessThan = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare3 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return true;
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_signum
$Data_Ord_signum = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lessThan1 = ($GLOBALS['Data_Ord_lessThan'])($dictOrd);
$greaterThan1 = ($GLOBALS['Data_Ord_greaterThan'])($dictOrd);
    $__res = (function() use ($lessThan1, $greaterThan1) {
  $__fn = function($dictRing) use ($lessThan1, $greaterThan1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$Semiring0 = (($dictRing)->Semiring0)($GLOBALS['Prim_undefined']);
$zero = ($GLOBALS['Data_Semiring_zero'])($Semiring0);
$negate1 = ($GLOBALS['Data_Ring_negate'])($dictRing);
$one = ($GLOBALS['Data_Semiring_one'])($Semiring0);
    $__res = (function() use ($lessThan1, $zero, $negate1, $one, $greaterThan1) {
  $__body = function($x) use ($lessThan1, $zero, $negate1, $one, $greaterThan1) {
    $__case_0 = ($lessThan1)($x, $zero);
    if (($__case_0 === true)) {
return ($negate1)($one);
} else {
if (true) {
$__case_0 = ($greaterThan1)($x, $zero);
if (($__case_0 === true)) {
return $one;
} else {
if (true) {
return $x;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x) use ($lessThan1, $zero, $negate1, $one, $greaterThan1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($x);
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

// Data_Ord_lessThanOrEq
$Data_Ord_lessThanOrEq = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare3 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($a1, $a2) use ($compare3) {
    $v = ($compare3)($a1, $a2);
    $__case_0 = $v;
    if ((($__case_0)->tag === "GT")) {
return false;
} else {
if (true) {
return true;
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($a1, $a2 = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($a1, $a2);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_max
$Data_Ord_max = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare3 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return $y;
} else {
if ((($__case_0)->tag === "EQ")) {
return $x;
} else {
if ((($__case_0)->tag === "GT")) {
return $x;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_min
$Data_Ord_min = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare3 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
    $__res = (function() use ($compare3) {
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    if ((($__case_0)->tag === "LT")) {
return $x;
} else {
if ((($__case_0)->tag === "EQ")) {
return $x;
} else {
if ((($__case_0)->tag === "GT")) {
return $y;
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_ordArray
$Data_Ord_ordArray = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare3 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
$eqArray = ($GLOBALS['Data_Eq_eqArray'])((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
$toDelta = (function() use ($compare3) {
  $__body = function($x, $y) use ($compare3) {
    $v = ($compare3)($x, $y);
    $__case_0 = $v;
    if ((($__case_0)->tag === "EQ")) {
return 0;
} else {
if ((($__case_0)->tag === "LT")) {
return 1;
} else {
if ((($__case_0)->tag === "GT")) {
return ($GLOBALS['Data_Ord_negate'])(1);
} else {
throw new \Exception("Pattern match failure");
};
};
};
  };
  $__fn = function($x, $y = null) use ($compare3, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
    $__res = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() use ($toDelta) {
  $__fn = function($xs, $ys = null) use ($toDelta, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = ($GLOBALS['Data_Ord_compare2'])(0, ($GLOBALS['Data_Ord_ordArrayImpl'])($toDelta, $xs, $ys));
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() use ($eqArray) {
  $__fn = function($__dollar____unused) use ($eqArray, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqArray;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_ord1Array
$Data_Ord_ord1Array = ($GLOBALS['Data_Ord_Ord1__dollar__Dict'])((object)["compare1" => (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Ord_compare'])(($GLOBALS['Data_Ord_ordArray'])($dictOrd));
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})(), "Eq10" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Eq_eq1Array'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Ord_ordRecordCons
$Data_Ord_ordRecordCons = (function() {
  $__fn = function($dictOrdRecord) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compareRecord1 = ($GLOBALS['Data_Ord_compareRecord'])($dictOrdRecord);
$eqRowCons = ($GLOBALS['Data_Eq_eqRowCons'])((($dictOrdRecord)->EqRecord0)($GLOBALS['Prim_undefined']), $GLOBALS['Prim_undefined']);
    $__res = (function() use ($eqRowCons, $compareRecord1) {
  $__fn = function($__dollar____unused, $dictIsSymbol = null) use ($eqRowCons, $compareRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
$reflectSymbol = ($GLOBALS['Data_Symbol_reflectSymbol'])($dictIsSymbol);
$eqRowCons1 = ($eqRowCons)($dictIsSymbol);
    $__res = (function() use ($eqRowCons1, $reflectSymbol, $compareRecord1) {
  $__fn = function($dictOrd) use ($eqRowCons1, $reflectSymbol, $compareRecord1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$compare3 = ($GLOBALS['Data_Ord_compare'])($dictOrd);
$eqRowCons2 = ($eqRowCons1)((($dictOrd)->Eq0)($GLOBALS['Prim_undefined']));
    $__res = ($GLOBALS['Data_Ord_OrdRecord__dollar__Dict'])((object)["compareRecord" => (function() use ($reflectSymbol, $compare3, $compareRecord1) {
  $__body = function($v, $ra, $rb) use ($reflectSymbol, $compare3, $compareRecord1) {
    $unsafeGet__prime__ = $GLOBALS['Record_Unsafe_unsafeGet'];
    $key = ($reflectSymbol)($GLOBALS['Type_Proxy_Proxy']);
    $left = ($compare3)(($unsafeGet__prime__)($key, $ra), ($unsafeGet__prime__)($key, $rb));
    $__case_0 = ($GLOBALS['Data_Ord_notEq'])($left, $GLOBALS['Data_Ordering_EQ']);
    if (($__case_0 === true)) {
return $left;
} else {
if (true) {
return ($compareRecord1)($GLOBALS['Type_Proxy_Proxy'], $ra, $rb);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($v, $ra = null, $rb = null) use ($reflectSymbol, $compare3, $compareRecord1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($v, $ra, $rb);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "EqRecord0" => (function() use ($eqRowCons2) {
  $__fn = function($__dollar____unused) use ($eqRowCons2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $eqRowCons2;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
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

// Data_Ord_clamp
$Data_Ord_clamp = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$min1 = ($GLOBALS['Data_Ord_min'])($dictOrd);
$max1 = ($GLOBALS['Data_Ord_max'])($dictOrd);
    $__res = (function() use ($min1, $max1) {
  $__fn = function($low, $hi = null, $x = null) use ($min1, $max1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = ($min1)($hi, ($max1)($low, $x));
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_between
$Data_Ord_between = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$lessThan1 = ($GLOBALS['Data_Ord_lessThan'])($dictOrd);
$greaterThan1 = ($GLOBALS['Data_Ord_greaterThan'])($dictOrd);
    $__res = (function() {
  $__body = function($low, $hi, $x) {
    $__case_0 = $low;
    $__case_1 = $hi;
    $__case_2 = $x;
    if (true) {
$low1 = $__case_0;
$hi1 = $__case_1;
$x1 = $__case_2;
return "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($low, $hi = null, $x = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) return phpurs_curry_fallback($__fn, func_get_args(), 3);
    $__res = $__body($low, $hi, $x);
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Ord_abs
$Data_Ord_abs = (function() {
  $__fn = function($dictOrd) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$greaterThanOrEq1 = ($GLOBALS['Data_Ord_greaterThanOrEq'])($dictOrd);
    $__res = (function() use ($greaterThanOrEq1) {
  $__fn = function($dictRing) use ($greaterThanOrEq1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
$zero = ($GLOBALS['Data_Semiring_zero'])((($dictRing)->Semiring0)($GLOBALS['Prim_undefined']));
$negate1 = ($GLOBALS['Data_Ring_negate'])($dictRing);
    $__res = (function() use ($greaterThanOrEq1, $zero, $negate1) {
  $__body = function($x) use ($greaterThanOrEq1, $zero, $negate1) {
    $__case_0 = ($greaterThanOrEq1)($x, $zero);
    if (($__case_0 === true)) {
return $x;
} else {
if (true) {
return ($negate1)($x);
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($x) use ($greaterThanOrEq1, $zero, $negate1, $__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($x);
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

