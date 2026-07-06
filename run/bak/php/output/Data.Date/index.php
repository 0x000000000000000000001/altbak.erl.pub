<?php

namespace Data\Date;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';

if (!class_exists(__NAMESPACE__ . '\\Phpurs_Data0')) {
  class Phpurs_Data0 { public $tag; public function __construct($t) { $this->tag = $t; } }
  class Phpurs_Data1 { public $tag; public $v0; public function __construct($t, $v0) { $this->tag = $t; $this->v0 = $v0; } }
  class Phpurs_Data2 { public $tag; public $v0, $v1; public function __construct($t, $v0, $v1) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; } }
  class Phpurs_Data3 { public $tag; public $v0, $v1, $v2; public function __construct($t, $v0, $v1, $v2) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; } }
  class Phpurs_Data4 { public $tag; public $v0, $v1, $v2, $v3; public function __construct($t, $v0, $v1, $v2, $v3) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; } }
  class Phpurs_Data5 { public $tag; public $v0, $v1, $v2, $v3, $v4; public function __construct($t, $v0, $v1, $v2, $v3, $v4) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; } }
  class Phpurs_Data6 { public $tag; public $v0, $v1, $v2, $v3, $v4, $v5; public function __construct($t, $v0, $v1, $v2, $v3, $v4, $v5) { $this->tag = $t; $this->v0 = $v0; $this->v1 = $v1; $this->v2 = $v2; $this->v3 = $v3; $this->v4 = $v4; $this->v5 = $v5; } }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num > 1) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = array_merge($args, func_get_args());
          $res = $fn(...array_slice($merged, 0, $expected));
          return $res(...array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = array_merge($args, $more);
      if (count($merged) >= $expected) {
        $res = $fn(...array_slice($merged, 0, $expected));
        return count($merged) > $expected ? $res(...array_slice($merged, $expected)) : $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
if (!function_exists(__NAMESPACE__ . '\\phpurs_eval_thunk')) {
  function phpurs_eval_thunk($id) {
    static $cache = [];
    if (array_key_exists($id, $cache)) return $cache[$id];
    switch ($id) {
      case 'Data_Date_fromEnum': $v = (($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->fromEnum; break;
      case 'Data_Date_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Date_fromJust': $v = \Data\Maybe\Data_Maybe_fromJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Date_toEnum': $v = (($GLOBALS['Data_Date_Component_boundedEnumWeekday'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumWeekday')))->toEnum; break;
      case 'Data_Date_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Date_show': $v = (($GLOBALS['Data_Date_Component_showYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_showYear')))->show; break;
      case 'Data_Date_show1': $v = (($GLOBALS['Data_Date_Component_showMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_showMonth')))->show; break;
      case 'Data_Date_show2': $v = (($GLOBALS['Data_Date_Component_showDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_showDay')))->show; break;
      case 'Data_Date_fromEnum1': $v = (($GLOBALS['Data_Date_Component_boundedEnumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumYear')))->fromEnum; break;
      case 'Data_Date_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Date_mod': $v = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod')); break;
      case 'Data_Date_disj': $v = ($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolDisj')); break;
      case 'Data_Date_not': $v = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot')); break;
      case 'Data_Date_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Date_toEnum1': $v = (($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay')))->toEnum; break;
      case 'Data_Date_eq1': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Date_eq2': $v = (($GLOBALS['Data_Date_Component_eqMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_eqMonth')))->eq; break;
      case 'Data_Date_eq3': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Date_compare': $v = (($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')))->compare; break;
      case 'Data_Date_compare1': $v = (($GLOBALS['Data_Date_Component_ordMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_ordMonth')))->compare; break;
      case 'Data_Date_compare2': $v = (($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')))->compare; break;
      case 'Data_Date_succ': $v = (($GLOBALS['Data_Date_Component_enumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumMonth')))->succ; break;
      case 'Data_Date_succ1': $v = (($GLOBALS['Data_Date_Component_enumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumDay')))->succ; break;
      case 'Data_Date_greaterThan': $v = \Data\Ord\Data_Ord_greaterThan(\Data\Maybe\Data_Maybe_ordMaybe(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')))); break;
      case 'Data_Date_succ2': $v = (($GLOBALS['Data_Date_Component_enumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumYear')))->succ; break;
      case 'Data_Date_apply': $v = (($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe')))->apply; break;
      case 'Data_Date_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_Date_pure': $v = ($GLOBALS['Data_Maybe_Just'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_Just')); break;
      case 'Data_Date_pred': $v = (($GLOBALS['Data_Date_Component_enumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumMonth')))->pred; break;
      case 'Data_Date_pred1': $v = (($GLOBALS['Data_Date_Component_enumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumDay')))->pred; break;
      case 'Data_Date_pred2': $v = (($GLOBALS['Data_Date_Component_enumYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_enumYear')))->pred; break;
      case 'Data_Date_toEnum2': $v = (($GLOBALS['Data_Date_Component_boundedEnumMonth'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumMonth')))->toEnum; break;
      case 'Data_Date_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Date_fromEnum2': $v = (($GLOBALS['Data_Date_Component_boundedEnumDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedEnumDay')))->fromEnum; break;
      case 'Data_Date_lessThan': $v = \Data\Ord\Data_Ord_lessThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Date_greaterThan1': $v = \Data\Ord\Data_Ord_greaterThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Date_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Date_bindFlipped': $v = \Control\Bind\Control_Bind_bindFlipped(($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe'))); break;
      case 'Data_Date_bind': $v = (($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe')))->bind; break;
      case 'Data_Date_weekday': $v = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial')))((function() use (&$__fn) {
  $__fn = function($__dollar____unused, $v = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($__dollar____unused, &$__fn) { return $__fn($__dollar____unused, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Function_Uncurried_runFn3 = ($GLOBALS['Data_Function_Uncurried_runFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn3'));
  $__global_Data_Date_calcWeekday = ($GLOBALS['Data_Date_calcWeekday'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_calcWeekday'));
  $__global_Data_Date_fromEnum = ($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum'));
  $__global_Data_Date_fromJust = ($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust'));
  $__global_Data_Date_toEnum = ($GLOBALS['Data_Date_toEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$n = ($__global_Data_Function_Uncurried_runFn3)($__global_Data_Date_calcWeekday, $y, ($__global_Data_Date_fromEnum)($m), $d);
$__case_0 = ($n === 0);
switch ($__case_0) {
case true:
$__res = ($__global_Data_Date_fromJust)(($__global_Data_Date_toEnum)(7));
goto __end;;
break;
default:
$__res = ($__global_Data_Date_fromJust)(($__global_Data_Date_toEnum)($n));
goto __end;;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()); break;
      case 'Data_Date_showDate': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Date_show = ($GLOBALS['Data_Date_show'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show'));
  $__global_Data_Date_show1 = ($GLOBALS['Data_Date_show1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show1'));
  $__global_Data_Date_show2 = ($GLOBALS['Data_Date_show2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_show2'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$__res = ("(Date " . (($__global_Data_Date_show)($y) . (" " . (($__global_Data_Date_show1)($m) . (" " . (($__global_Data_Date_show2)($d) . ")"))))));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_eqDate': $v = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__global_Data_Date_eq2 = ($GLOBALS['Data_Date_eq2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq2'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_HeytingAlgebra_boolConj)(($l === $r), ($__global_Data_Date_eq2)($l1, $r1)), ($l2 === $r2));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Date_eq4': $v = (($GLOBALS['Data_Date_eqDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eqDate')))->eq; break;
      case 'Data_Date_ordDate': $v = (object)["compare" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Date_compare = ($GLOBALS['Data_Date_compare'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compare'));
  $__global_Data_Date_compare1 = ($GLOBALS['Data_Date_compare1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compare1'));
  $__global_Data_Date_compare2 = ($GLOBALS['Data_Date_compare2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compare2'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
$v = ($__global_Data_Date_compare)($l, $r);
$__case_0 = $v;
switch (($__case_0)->tag) {
case "LT":
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
case "GT":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
$v1 = ($__global_Data_Date_compare1)($l1, $r1);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "LT":
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
break;
case "GT":
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
break;
default:
$__res = ($__global_Data_Date_compare2)($l2, $r2);
goto __end;;
break;
};
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_eqDate = ($GLOBALS['Data_Date_eqDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eqDate'));
  $__res = $__global_Data_Date_eqDate;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_enumDate': $v = (object)["succ" => function($v) {
  $__num = func_num_args();
  $__global_Data_Date_succ = ($GLOBALS['Data_Date_succ'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ'));
  $__global_Data_Date_lastDayOfMonth = ($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth'));
  $__global_Data_Date_succ1 = ($GLOBALS['Data_Date_succ1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ1'));
  $__global_Data_Date_greaterThan = ($GLOBALS['Data_Date_greaterThan'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_greaterThan'));
  $__global_Data_Maybe_isNothing = ($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'));
  $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__global_Data_Date_succ2 = ($GLOBALS['Data_Date_succ2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_succ2'));
  $__global_Data_Date_toEnum1 = ($GLOBALS['Data_Date_toEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum1'));
  $__global_Data_Date_apply = ($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply'));
  $__global_Data_Date_map = ($GLOBALS['Data_Date_map'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_map'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$sm = ($__global_Data_Date_succ)($m);
$l = ($__global_Data_Date_lastDayOfMonth)($y, $m);
$v1 = ($__global_Data_Date_succ1)($d);
$__case_0 = ($__global_Data_Date_greaterThan)($v1, new Phpurs_Data1("Just", $l));
$__case_res_0 = null;
switch ($__case_0) {
case true:
$__case_res_0 = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
break;
default:
$__case_res_0 = $v1;
break;
};
$sd = $__case_res_0;
$__case_0 = ($__global_Data_Maybe_isNothing)($sd);
$__case_res_1 = null;
switch ($__case_0) {
case true:
$__case_res_1 = ($__global_Data_Maybe_fromMaybe)(($GLOBALS['__phpurs_data0_January'] ??= new Phpurs_Data0("January")), $sm);
break;
default:
$__case_res_1 = $m;
break;
};
$m__prime__ = $__case_res_1;
$__case_0 = ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Maybe_isNothing)($sd), ($__global_Data_Maybe_isNothing)($sm));
$__case_res_2 = null;
switch ($__case_0) {
case true:
$__case_res_2 = ($__global_Data_Date_succ2)($y);
break;
default:
$__case_res_2 = new Phpurs_Data1("Just", $y);
break;
};
$y__prime__ = $__case_res_2;
$__case_0 = ($__global_Data_Maybe_isNothing)($sd);
$__case_res_3 = null;
switch ($__case_0) {
case true:
$__case_res_3 = ($__global_Data_Date_toEnum1)(1);
break;
default:
$__case_res_3 = $sd;
break;
};
$d__prime__ = $__case_res_3;
$__res = ($__global_Data_Date_apply)(($__global_Data_Date_apply)(($__global_Data_Date_map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $y__prime__), new Phpurs_Data1("Just", $m__prime__)), $d__prime__);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "pred" => function($v) {
  $__num = func_num_args();
  $__global_Data_Date_pred = ($GLOBALS['Data_Date_pred'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred'));
  $__global_Data_Date_pred1 = ($GLOBALS['Data_Date_pred1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred1'));
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__global_Data_Maybe_isNothing = ($GLOBALS['Data_Maybe_isNothing'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isNothing'));
  $__global_Data_Date_pred2 = ($GLOBALS['Data_Date_pred2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred2'));
  $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
  $__global_Data_Date_lastDayOfMonth = ($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth'));
  $__global_Data_Date_apply = ($GLOBALS['Data_Date_apply'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_apply'));
  $__global_Data_Date_map = ($GLOBALS['Data_Date_map'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_map'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$m = ($__case_0)->v1;
$d = ($__case_0)->v2;
$pm = ($__global_Data_Date_pred)($m);
$pd = ($__global_Data_Date_pred1)($d);
$__case_0 = ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Maybe_isNothing)($pd), ($__global_Data_Maybe_isNothing)($pm));
$__case_res_4 = null;
switch ($__case_0) {
case true:
$__case_res_4 = ($__global_Data_Date_pred2)($y);
break;
default:
$__case_res_4 = new Phpurs_Data1("Just", $y);
break;
};
$y__prime__ = $__case_res_4;
$__case_0 = ($__global_Data_Maybe_isNothing)($pd);
$__case_res_5 = null;
switch ($__case_0) {
case true:
$__case_res_5 = ($__global_Data_Maybe_fromMaybe)(($GLOBALS['__phpurs_data0_December'] ??= new Phpurs_Data0("December")), $pm);
break;
default:
$__case_res_5 = $m;
break;
};
$m__prime__ = $__case_res_5;
$l = ($__global_Data_Date_lastDayOfMonth)($y, $m__prime__);
$__case_0 = ($__global_Data_Maybe_isNothing)($pd);
$__case_res_6 = null;
switch ($__case_0) {
case true:
$__case_res_6 = new Phpurs_Data1("Just", $l);
break;
default:
$__case_res_6 = $pd;
break;
};
$d__prime__ = $__case_res_6;
$__res = ($__global_Data_Date_apply)(($__global_Data_Date_apply)(($__global_Data_Date_map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null, $value2 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, &$__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), $y__prime__), new Phpurs_Data1("Just", $m__prime__)), $d__prime__);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_ordDate = ($GLOBALS['Data_Date_ordDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_ordDate'));
  $__res = $__global_Data_Date_ordDate;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Date_pred3': $v = (($GLOBALS['Data_Date_enumDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_enumDate')))->pred; break;
      case 'Data_Date_succ3': $v = (($GLOBALS['Data_Date_enumDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_enumDate')))->succ; break;
      case 'Data_Date_boundedDate': $v = (object)["bottom" => new Phpurs_Data3("Date", (($GLOBALS['Data_Date_Component_boundedYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedYear')))->bottom, ($GLOBALS['__phpurs_data0_January'] ??= new Phpurs_Data0("January")), (($GLOBALS['Data_Date_Component_boundedDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedDay')))->bottom), "top" => new Phpurs_Data3("Date", (($GLOBALS['Data_Date_Component_boundedYear'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedYear')))->top, ($GLOBALS['__phpurs_data0_December'] ??= new Phpurs_Data0("December")), (($GLOBALS['Data_Date_Component_boundedDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedDay')))->top), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Date_ordDate = ($GLOBALS['Data_Date_ordDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_ordDate'));
  $__res = $__global_Data_Date_ordDate;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };









































// Data_Date_Date
function Data_Date_Date($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Date';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("Date", $value0, $value1, $value2);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_Date'] = __NAMESPACE__ . '\\Data_Date_Date';

// Data_Date_year
function Data_Date_year($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_year';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Date":
$y = ($__case_0)->v0;
$__res = $y;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_year'] = __NAMESPACE__ . '\\Data_Date_year';



// Data_Date_month
function Data_Date_month($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_month';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Date":
$m = ($__case_0)->v1;
$__res = $m;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_month'] = __NAMESPACE__ . '\\Data_Date_month';

// Data_Date_isLeapYear
function Data_Date_isLeapYear($y) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_isLeapYear';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Date_fromEnum1 = ($GLOBALS['Data_Date_fromEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum1'));
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__global_Data_EuclideanRing_intMod = ($GLOBALS['Data_EuclideanRing_intMod'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_intMod'));
  $__global_Data_HeytingAlgebra_boolDisj = ($GLOBALS['Data_HeytingAlgebra_boolDisj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolDisj'));
  $__global_Data_HeytingAlgebra_boolNot = ($GLOBALS['Data_HeytingAlgebra_boolNot'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolNot'));
  $y__prime__ = ($__global_Data_Date_fromEnum1)($y);
  $__res = ($__global_Data_HeytingAlgebra_boolConj)((($__global_Data_EuclideanRing_intMod)($y__prime__, 4) === 0), ($__global_Data_HeytingAlgebra_boolDisj)((($__global_Data_EuclideanRing_intMod)($y__prime__, 400) === 0), ($__global_Data_HeytingAlgebra_boolNot)((($__global_Data_EuclideanRing_intMod)($y__prime__, 100) === 0))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_isLeapYear'] = __NAMESPACE__ . '\\Data_Date_isLeapYear';

// Data_Date_lastDayOfMonth
function Data_Date_lastDayOfMonth($y, $m = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_lastDayOfMonth';
  if ($__num < 2) {
    if ($__num === 1) return function($m) use ($y, $__fn) { return $__fn($y, $m); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Date_compose = ($GLOBALS['Data_Date_compose'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_compose'));
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Data_Date_fromJust = ($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust'));
  $__global_Data_Date_toEnum1 = ($GLOBALS['Data_Date_toEnum1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum1'));
  $unsafeDay = ($__global_Data_Date_compose)(($__global_Partial_Unsafe__unsafePartial)(function($__dollar____unused) use ($__global_Data_Date_fromJust) {
  $__num = func_num_args();
  $__res = $__global_Data_Date_fromJust;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $__global_Data_Date_toEnum1);
  $__case_0 = $m;
  switch (($__case_0)->tag) {
case "January":
$__res = ($unsafeDay)(31);
goto __end;;
break;
case "February":
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
break;
case "March":
$__res = ($unsafeDay)(31);
goto __end;;
break;
case "April":
$__res = ($unsafeDay)(30);
goto __end;;
break;
case "May":
$__res = ($unsafeDay)(31);
goto __end;;
break;
case "June":
$__res = ($unsafeDay)(30);
goto __end;;
break;
case "July":
$__res = ($unsafeDay)(31);
goto __end;;
break;
case "August":
$__res = ($unsafeDay)(31);
goto __end;;
break;
case "September":
$__res = ($unsafeDay)(30);
goto __end;;
break;
case "October":
$__res = ($unsafeDay)(31);
goto __end;;
break;
case "November":
$__res = ($unsafeDay)(30);
goto __end;;
break;
case "December":
$__res = ($unsafeDay)(31);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Date_lastDayOfMonth'] = __NAMESPACE__ . '\\Data_Date_lastDayOfMonth';







// Data_Date_diff
function Data_Date_diff($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_diff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_Uncurried_runFn6 = ($GLOBALS['Data_Function_Uncurried_runFn6'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn6'));
  $__global_Data_Date_calcDiff = ($GLOBALS['Data_Date_calcDiff'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_calcDiff'));
  $__global_Data_Date_fromEnum = ($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum'));
  $toDuration = ($dictDuration)->toDuration;
  $__res = (function() use ($toDuration, $__global_Data_Function_Uncurried_runFn6, $__global_Data_Date_calcDiff, $__global_Data_Date_fromEnum, &$__fn) {
  $__fn = function($v, $v1 = null) use ($toDuration, $__global_Data_Function_Uncurried_runFn6, $__global_Data_Date_calcDiff, $__global_Data_Date_fromEnum, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (((($__case_0)->tag === "Date") && (($__case_1)->tag === "Date"))) {
$y1 = ($__case_0)->v0;
$m1 = ($__case_0)->v1;
$d1 = ($__case_0)->v2;
$y2 = ($__case_1)->v0;
$m2 = ($__case_1)->v1;
$d2 = ($__case_1)->v2;
$__res = ($toDuration)(($__global_Data_Function_Uncurried_runFn6)($__global_Data_Date_calcDiff, $y1, ($__global_Data_Date_fromEnum)($m1), $d1, $y2, ($__global_Data_Date_fromEnum)($m2), $d2));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_diff'] = __NAMESPACE__ . '\\Data_Date_diff';

// Data_Date_day
function Data_Date_day($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_day';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Date":
$d = ($__case_0)->v2;
$__res = $d;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_day'] = __NAMESPACE__ . '\\Data_Date_day';

// Data_Date_canonicalDate
function Data_Date_canonicalDate($y, $m = null, $d = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_canonicalDate';
  if ($__num < 3) {
    if ($__num === 2) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
    if ($__num === 1) return function($m, $d = null) use ($y, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($y, $m, $d);
      if ($__num2 === 1) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
      return phpurs_curry_fallback($__fn, [$y], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Data_Date_fromJust = ($GLOBALS['Data_Date_fromJust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromJust'));
  $__global_Data_Date_toEnum2 = ($GLOBALS['Data_Date_toEnum2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_toEnum2'));
  $__global_Data_Function_Uncurried_runFn4 = ($GLOBALS['Data_Function_Uncurried_runFn4'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_runFn4'));
  $__global_Data_Date_canonicalDateImpl = ($GLOBALS['Data_Date_canonicalDateImpl'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_canonicalDateImpl'));
  $__global_Data_Date_fromEnum = ($GLOBALS['Data_Date_fromEnum'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum'));
  $mkDate = ($__global_Partial_Unsafe__unsafePartial)((function() use ($__global_Data_Date_fromJust, $__global_Data_Date_toEnum2, &$__fn) {
  $__fn = function($__dollar____unused, $y__prime__ = null, $m__prime__ = null, $d__prime__ = null) use ($__global_Data_Date_fromJust, $__global_Data_Date_toEnum2, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
    if ($__num === 2) return function($m__prime__, $d__prime__ = null) use ($__dollar____unused, $y__prime__, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__);
      if ($__num2 === 1) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
      return phpurs_curry_fallback($__fn, [$__dollar____unused, $y__prime__], 4);
    };
    if ($__num === 1) return function($y__prime__, $m__prime__ = null, $d__prime__ = null) use ($__dollar____unused, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__);
      if ($__num2 === 2) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
      if ($__num2 === 1) return function($m__prime__, $d__prime__ = null) use ($__dollar____unused, $y__prime__, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__);
        if ($__num3 === 1) return function($d__prime__) use ($__dollar____unused, $y__prime__, $m__prime__, &$__fn) { return $__fn($__dollar____unused, $y__prime__, $m__prime__, $d__prime__); };
        return phpurs_curry_fallback($__fn, [$__dollar____unused, $y__prime__], 4);
      };
      return phpurs_curry_fallback($__fn, [$__dollar____unused], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = new Phpurs_Data3("Date", $y__prime__, ($__global_Data_Date_fromJust)(($__global_Data_Date_toEnum2)($m__prime__)), $d__prime__);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
  $__res = ($__global_Data_Function_Uncurried_runFn4)($__global_Data_Date_canonicalDateImpl, $mkDate, $y, ($__global_Data_Date_fromEnum)($m), $d);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_canonicalDate'] = __NAMESPACE__ . '\\Data_Date_canonicalDate';

// Data_Date_exactDate
function Data_Date_exactDate($y, $m = null, $d = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_exactDate';
  if ($__num < 3) {
    if ($__num === 2) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
    if ($__num === 1) return function($m, $d = null) use ($y, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($y, $m, $d);
      if ($__num2 === 1) return function($d) use ($y, $m, $__fn) { return $__fn($y, $m, $d); };
      return phpurs_curry_fallback($__fn, [$y], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Date_eq4 = ($GLOBALS['Data_Date_eq4'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_eq4'));
  $__global_Data_Date_canonicalDate = ($GLOBALS['Data_Date_canonicalDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_canonicalDate'));
  $dt = new Phpurs_Data3("Date", $y, $m, $d);
  $__case_0 = ($__global_Data_Date_eq4)(($__global_Data_Date_canonicalDate)($y, $m, $d), $dt);
  switch ($__case_0) {
case true:
$__res = new Phpurs_Data1("Just", $dt);
goto __end;;
break;
default:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
};
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Date_exactDate'] = __NAMESPACE__ . '\\Data_Date_exactDate';


// Data_Date_adjust
function Data_Date_adjust($v, $date = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_adjust';
  if ($__num < 2) {
    if ($__num === 1) return function($date) use ($v, $__fn) { return $__fn($v, $date); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Date_fromEnum2 = ($GLOBALS['Data_Date_fromEnum2'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_fromEnum2'));
  $__global_Data_Date_lessThan = ($GLOBALS['Data_Date_lessThan'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lessThan'));
  $__global_Data_Date_lastDayOfMonth = ($GLOBALS['Data_Date_lastDayOfMonth'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_lastDayOfMonth'));
  $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
  $__global_Data_Date_pred = ($GLOBALS['Data_Date_pred'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_pred'));
  $__global_Data_Date_greaterThan1 = ($GLOBALS['Data_Date_greaterThan1'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_greaterThan1'));
  $__global_Data_Date_bindFlipped = ($GLOBALS['Data_Date_bindFlipped'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_bindFlipped'));
  $__global_Data_Date_bind = ($GLOBALS['Data_Date_bind'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_bind'));
  $__global_Data_Int_fromNumber = ($GLOBALS['Data_Int_fromNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_fromNumber'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__case_0 = $v;
  $__case_1 = $date;
  if (true) {
$n = $__case_0;
$date1 = $__case_1;
$adj = (function() use ($__global_Data_Date_fromEnum2, $__global_Data_Date_lessThan, $__global_Data_Date_lastDayOfMonth, $__global_Data_Maybe_fromMaybe, $__global_Data_Date_pred, $__global_Data_Date_greaterThan1, $__global_Data_Date_bindFlipped, &$adj, &$__fn) {
  $__fn = function($v1, $v2 = null) use ($__global_Data_Date_fromEnum2, $__global_Data_Date_lessThan, $__global_Data_Date_lastDayOfMonth, $__global_Data_Maybe_fromMaybe, $__global_Data_Date_pred, $__global_Data_Date_greaterThan1, $__global_Data_Date_bindFlipped, &$adj, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v2) use ($v1, &$__fn) { return $__fn($v1, $v2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  while (true) {
$__case_0 = $v1;
$__case_1 = $v2;
if (($__case_0 === 0)) {
$dt = $__case_1;
$__res = new Phpurs_Data1("Just", $dt);
goto __end;;
} else {
switch (($__case_1)->tag) {
case "Date":
$i = $__case_0;
$y = ($__case_1)->v0;
$m = ($__case_1)->v1;
$d = ($__case_1)->v2;
$j = ($i + ($__global_Data_Date_fromEnum2)($d));
$low = ($__global_Data_Date_lessThan)($j, 1);
$__case_0 = $low;
$__case_res_0 = null;
switch ($__case_0) {
case true:
$__case_res_0 = ($__global_Data_Maybe_fromMaybe)(($GLOBALS['__phpurs_data0_December'] ??= new Phpurs_Data0("December")), ($__global_Data_Date_pred)($m));
break;
default:
$__case_res_0 = $m;
break;
};
$l = ($__global_Data_Date_lastDayOfMonth)($y, $__case_res_0);
$hi = ($__global_Data_Date_greaterThan1)($j, ($__global_Data_Date_fromEnum2)($l));
$__case_res_1 = null;
if (true) {
$__case_res_1 = "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
$i__prime__ = $__case_res_1;
$__case_res_2 = null;
if (true) {
$__case_res_2 = "/* Unsupported: Guards not supported */";
} else {
throw new \Exception("Pattern match failure");
};
$dt__prime__ = $__case_res_2;
$__res = ($__global_Data_Date_bindFlipped)(($adj)($i__prime__), $dt__prime__);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
$__res = ($__global_Data_Date_bind)(($__global_Data_Int_fromNumber)($n), ($__global_Data_Function_flip)($adj, $date1));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Date_adjust'] = __NAMESPACE__ . '\\Data_Date_adjust';

