<?php

namespace Data\Time;

require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.EuclideanRing/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
require_once __DIR__ . '/../Data.Time.Duration/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Data_Time_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Time_show': $v = (($GLOBALS['Data_Time_Component_showHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_showHour')))->show; break;
      case 'Data_Time_show1': $v = (($GLOBALS['Data_Time_Component_showMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_showMinute')))->show; break;
      case 'Data_Time_show2': $v = (($GLOBALS['Data_Time_Component_showSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_showSecond')))->show; break;
      case 'Data_Time_show3': $v = (($GLOBALS['Data_Time_Component_showMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_showMillisecond')))->show; break;
      case 'Data_Time_div': $v = ($GLOBALS['Data_EuclideanRing_numDiv'] ?? \Data\EuclideanRing\phpurs_eval_thunk('Data_EuclideanRing_numDiv')); break;
      case 'Data_Time_sub': $v = ($GLOBALS['Data_Ring_numSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_numSub')); break;
      case 'Data_Time_mul': $v = ($GLOBALS['Data_Semiring_numMul'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numMul')); break;
      case 'Data_Time_add': $v = ($GLOBALS['Data_Semiring_numAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_numAdd')); break;
      case 'Data_Time_fromJust': $v = \Data\Maybe\Data_Maybe_fromJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Time_apply': $v = (($GLOBALS['Data_Maybe_applyMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_applyMaybe')))->apply; break;
      case 'Data_Time_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_Time_toEnum': $v = (($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour')))->toEnum; break;
      case 'Data_Time_toEnum1': $v = (($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute')))->toEnum; break;
      case 'Data_Time_toEnum2': $v = (($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond')))->toEnum; break;
      case 'Data_Time_toEnum3': $v = (($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond')))->toEnum; break;
      case 'Data_Time_fromEnum': $v = (($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour')))->fromEnum; break;
      case 'Data_Time_fromEnum1': $v = (($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute')))->fromEnum; break;
      case 'Data_Time_fromEnum2': $v = (($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond')))->fromEnum; break;
      case 'Data_Time_fromEnum3': $v = (($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond')))->fromEnum; break;
      case 'Data_Time_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Time_eq': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Time_eq1': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Time_eq2': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Time_eq3': $v = ($GLOBALS['Data_Eq_eqIntImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqIntImpl')); break;
      case 'Data_Time_compare': $v = (($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')))->compare; break;
      case 'Data_Time_compare1': $v = (($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')))->compare; break;
      case 'Data_Time_compare2': $v = (($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')))->compare; break;
      case 'Data_Time_compare3': $v = (($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')))->compare; break;
      case 'Data_Time_append1': $v = (($GLOBALS['Data_Time_Duration_semigroupMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupMilliseconds')))->append; break;
      case 'Data_Time_negateDuration': $v = \Data\Time\Duration\Data_Time_Duration_negateDuration(($GLOBALS['Data_Time_Duration_durationMilliseconds'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_durationMilliseconds'))); break;
      case 'Data_Time_unwrap': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Time_fromDuration': $v = (($GLOBALS['Data_Time_Duration_durationDays'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_durationDays')))->fromDuration; break;
      case 'Data_Time_greaterThan': $v = \Data\Ord\Data_Ord_greaterThan(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Time_lessThan': $v = \Data\Ord\Data_Ord_lessThan(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Time_negate': $v = \Data\Ring\Data_Ring_negate(($GLOBALS['Data_Ring_ringNumber'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_ringNumber'))); break;
      case 'Data_Time_append2': $v = (($GLOBALS['Data_Time_Duration_semigroupDays'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_semigroupDays')))->append; break;
      case 'Data_Time_showTime': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Time_show = ($GLOBALS['Data_Time_show'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show'));
  $__global_Data_Time_show1 = ($GLOBALS['Data_Time_show1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show1'));
  $__global_Data_Time_show2 = ($GLOBALS['Data_Time_show2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show2'));
  $__global_Data_Time_show3 = ($GLOBALS['Data_Time_show3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_show3'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Time":
$h = ($__case_0)->v0;
$m = ($__case_0)->v1;
$s = ($__case_0)->v2;
$ms = ($__case_0)->v3;
$__res = ("(Time " . (($__global_Data_Time_show)($h) . (" " . (($__global_Data_Time_show1)($m) . (" " . (($__global_Data_Time_show2)($s) . (" " . (($__global_Data_Time_show3)($ms) . ")"))))))));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_eqTime': $v = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "Time") && (($__case_1)->tag === "Time"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$l3 = ($__case_0)->v3;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
$r3 = ($__case_1)->v3;
$__res = ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_HeytingAlgebra_boolConj)(($l === $r), ($l1 === $r1)), ($l2 === $r2)), ($l3 === $r3));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Time_ordTime': $v = (object)["compare" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Time_compare = ($GLOBALS['Data_Time_compare'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare'));
  $__global_Data_Time_compare1 = ($GLOBALS['Data_Time_compare1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare1'));
  $__global_Data_Time_compare2 = ($GLOBALS['Data_Time_compare2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare2'));
  $__global_Data_Time_compare3 = ($GLOBALS['Data_Time_compare3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_compare3'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "Time") && (($__case_1)->tag === "Time"))) {
$l = ($__case_0)->v0;
$l1 = ($__case_0)->v1;
$l2 = ($__case_0)->v2;
$l3 = ($__case_0)->v3;
$r = ($__case_1)->v0;
$r1 = ($__case_1)->v1;
$r2 = ($__case_1)->v2;
$r3 = ($__case_1)->v3;
$v = ($__global_Data_Time_compare)($l, $r);
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
$v1 = ($__global_Data_Time_compare1)($l1, $r1);
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
$v2 = ($__global_Data_Time_compare2)($l2, $r2);
$__case_0 = $v2;
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
$__res = ($__global_Data_Time_compare3)($l3, $r3);
goto __end;;
break;
};
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
  $__global_Data_Time_eqTime = ($GLOBALS['Data_Time_eqTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_eqTime'));
  $__res = $__global_Data_Time_eqTime;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_boundedTime': $v = (object)["bottom" => new Phpurs_Data4("Time", (($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour')))->bottom, (($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute')))->bottom, (($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond')))->bottom, (($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond')))->bottom), "top" => new Phpurs_Data4("Time", (($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour')))->top, (($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute')))->top, (($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond')))->top, (($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond')))->top), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Time_ordTime = ($GLOBALS['Data_Time_ordTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_ordTime'));
  $__res = $__global_Data_Time_ordTime;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_maxTime': $v = \Data\Time\Data_Time_timeToMillis((($GLOBALS['Data_Time_boundedTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_boundedTime')))->top); break;
      case 'Data_Time_minTime': $v = \Data\Time\Data_Time_timeToMillis((($GLOBALS['Data_Time_boundedTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_boundedTime')))->bottom); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };







































// Data_Time_Time
function Data_Time_Time($value0, $value1 = null, $value2 = null, $value3 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Time';
  if ($__num < 4) {
    if ($__num === 3) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
    if ($__num === 2) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
    };
    if ($__num === 1) return function($value1, $value2 = null, $value3 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 2) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
      if ($__num2 === 1) return function($value2, $value3 = null) use ($value0, $value1, $__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($value0, $value1, $value2, $value3);
        if ($__num3 === 1) return function($value3) use ($value0, $value1, $value2, $__fn) { return $__fn($value0, $value1, $value2, $value3); };
        return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
      };
      return phpurs_curry_fallback($__fn, [$value0], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = new Phpurs_Data4("Time", $value0, $value1, $value2, $value3);
  goto __end;;
  __end:
  return 4 < $__num ? $__res(...array_slice(func_get_args(), 4)) : $__res;
}
$GLOBALS['Data_Time_Time'] = __NAMESPACE__ . '\\Data_Time_Time';


// Data_Time_setSecond
function Data_Time_setSecond($s, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_setSecond';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($s, $__fn) { return $__fn($s, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $s;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Time":
$s1 = $__case_0;
$h = ($__case_1)->v0;
$m = ($__case_1)->v1;
$ms = ($__case_1)->v3;
$__res = new Phpurs_Data4("Time", $h, $m, $s1, $ms);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_setSecond'] = __NAMESPACE__ . '\\Data_Time_setSecond';

// Data_Time_setMinute
function Data_Time_setMinute($m, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_setMinute';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($m, $__fn) { return $__fn($m, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $m;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Time":
$m1 = $__case_0;
$h = ($__case_1)->v0;
$s = ($__case_1)->v2;
$ms = ($__case_1)->v3;
$__res = new Phpurs_Data4("Time", $h, $m1, $s, $ms);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_setMinute'] = __NAMESPACE__ . '\\Data_Time_setMinute';

// Data_Time_setMillisecond
function Data_Time_setMillisecond($ms, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_setMillisecond';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($ms, $__fn) { return $__fn($ms, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $ms;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Time":
$ms1 = $__case_0;
$h = ($__case_1)->v0;
$m = ($__case_1)->v1;
$s = ($__case_1)->v2;
$__res = new Phpurs_Data4("Time", $h, $m, $s, $ms1);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_setMillisecond'] = __NAMESPACE__ . '\\Data_Time_setMillisecond';

// Data_Time_setHour
function Data_Time_setHour($h, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_setHour';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($h, $__fn) { return $__fn($h, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $h;
  $__case_1 = $v;
  switch (($__case_1)->tag) {
case "Time":
$h1 = $__case_0;
$m = ($__case_1)->v1;
$s = ($__case_1)->v2;
$ms = ($__case_1)->v3;
$__res = new Phpurs_Data4("Time", $h1, $m, $s, $ms);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Time_setHour'] = __NAMESPACE__ . '\\Data_Time_setHour';

// Data_Time_second
function Data_Time_second($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_second';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Time":
$s = ($__case_0)->v2;
$__res = $s;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_second'] = __NAMESPACE__ . '\\Data_Time_second';

// Data_Time_minute
function Data_Time_minute($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_minute';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Time":
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
$GLOBALS['Data_Time_minute'] = __NAMESPACE__ . '\\Data_Time_minute';

// Data_Time_millisecond
function Data_Time_millisecond($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_millisecond';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Time":
$ms = ($__case_0)->v3;
$__res = $ms;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_millisecond'] = __NAMESPACE__ . '\\Data_Time_millisecond';

// Data_Time_millisToTime
function Data_Time_millisToTime($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_millisToTime';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Number_floor = ($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor'));
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Data_Time_fromJust = ($GLOBALS['Data_Time_fromJust'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromJust'));
  $__global_Data_Time_apply = ($GLOBALS['Data_Time_apply'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_apply'));
  $__global_Data_Time_map = ($GLOBALS['Data_Time_map'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_map'));
  $__global_Data_Time_toEnum = ($GLOBALS['Data_Time_toEnum'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum'));
  $__global_Data_Int_floor = ($GLOBALS['Data_Int_floor'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_floor'));
  $__global_Data_Time_toEnum1 = ($GLOBALS['Data_Time_toEnum1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum1'));
  $__global_Data_Time_toEnum2 = ($GLOBALS['Data_Time_toEnum2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum2'));
  $__global_Data_Time_toEnum3 = ($GLOBALS['Data_Time_toEnum3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_toEnum3'));
  $__case_0 = $v;
  if (true) {
$ms__prime__ = $__case_0;
$secondLength = 1000.0;
$minuteLength = 60000.0;
$hourLength = 3600000.0;
$hours = ($__global_Data_Number_floor)(($ms__prime__ / $hourLength));
$minutes = ($__global_Data_Number_floor)((($ms__prime__ - ($hours * $hourLength)) / $minuteLength));
$seconds = ($__global_Data_Number_floor)((($ms__prime__ - (($hours * $hourLength) + ($minutes * $minuteLength))) / $secondLength));
$milliseconds = ($ms__prime__ - ((($hours * $hourLength) + ($minutes * $minuteLength)) + ($seconds * $secondLength)));
$__res = ($__global_Partial_Unsafe__unsafePartial)(function($__dollar____unused) use ($__global_Data_Time_fromJust) {
  $__num = func_num_args();
  $__res = $__global_Data_Time_fromJust;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_Time_apply)(($__global_Data_Time_apply)(($__global_Data_Time_apply)(($__global_Data_Time_map)((function() use (&$__fn) {
  $__fn = function($value0, $value1 = null, $value2 = null, $value3 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
    if ($__num === 2) return function($value2, $value3 = null) use ($value0, $value1, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 1) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
      return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
    };
    if ($__num === 1) return function($value1, $value2 = null, $value3 = null) use ($value0, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($value0, $value1, $value2, $value3);
      if ($__num2 === 2) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
      if ($__num2 === 1) return function($value2, $value3 = null) use ($value0, $value1, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($value0, $value1, $value2, $value3);
        if ($__num3 === 1) return function($value3) use ($value0, $value1, $value2, &$__fn) { return $__fn($value0, $value1, $value2, $value3); };
        return phpurs_curry_fallback($__fn, [$value0, $value1], 4);
      };
      return phpurs_curry_fallback($__fn, [$value0], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = new Phpurs_Data4("Time", $value0, $value1, $value2, $value3);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), ($__global_Data_Time_toEnum)(($__global_Data_Int_floor)($hours))), ($__global_Data_Time_toEnum1)(($__global_Data_Int_floor)($minutes))), ($__global_Data_Time_toEnum2)(($__global_Data_Int_floor)($seconds))), ($__global_Data_Time_toEnum3)(($__global_Data_Int_floor)($milliseconds))));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_millisToTime'] = __NAMESPACE__ . '\\Data_Time_millisToTime';

// Data_Time_hour
function Data_Time_hour($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_hour';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Time":
$h = ($__case_0)->v0;
$__res = $h;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_hour'] = __NAMESPACE__ . '\\Data_Time_hour';

// Data_Time_timeToMillis
function Data_Time_timeToMillis($t) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_timeToMillis';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Int_toNumber = ($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber'));
  $__global_Data_Time_fromEnum = ($GLOBALS['Data_Time_fromEnum'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum'));
  $__global_Data_Time_hour = ($GLOBALS['Data_Time_hour'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_hour'));
  $__global_Data_Time_fromEnum1 = ($GLOBALS['Data_Time_fromEnum1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum1'));
  $__global_Data_Time_minute = ($GLOBALS['Data_Time_minute'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minute'));
  $__global_Data_Time_fromEnum2 = ($GLOBALS['Data_Time_fromEnum2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum2'));
  $__global_Data_Time_second = ($GLOBALS['Data_Time_second'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_second'));
  $__global_Data_Time_fromEnum3 = ($GLOBALS['Data_Time_fromEnum3'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromEnum3'));
  $__global_Data_Time_millisecond = ($GLOBALS['Data_Time_millisecond'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisecond'));
  $__res = ((((3600000.0 * ($__global_Data_Int_toNumber)(($__global_Data_Time_fromEnum)(($__global_Data_Time_hour)($t)))) + (60000.0 * ($__global_Data_Int_toNumber)(($__global_Data_Time_fromEnum1)(($__global_Data_Time_minute)($t))))) + (1000.0 * ($__global_Data_Int_toNumber)(($__global_Data_Time_fromEnum2)(($__global_Data_Time_second)($t))))) + ($__global_Data_Int_toNumber)(($__global_Data_Time_fromEnum3)(($__global_Data_Time_millisecond)($t))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_timeToMillis'] = __NAMESPACE__ . '\\Data_Time_timeToMillis';



// Data_Time_diff
function Data_Time_diff($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_diff';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Time_append1 = ($GLOBALS['Data_Time_append1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append1'));
  $__global_Data_Time_timeToMillis = ($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis'));
  $__global_Data_Time_negateDuration = ($GLOBALS['Data_Time_negateDuration'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negateDuration'));
  $toDuration = ($dictDuration)->toDuration;
  $__res = (function() use ($toDuration, $__global_Data_Time_append1, $__global_Data_Time_timeToMillis, $__global_Data_Time_negateDuration, &$__fn) {
  $__fn = function($t1, $t2 = null) use ($toDuration, $__global_Data_Time_append1, $__global_Data_Time_timeToMillis, $__global_Data_Time_negateDuration, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t2) use ($t1, &$__fn) { return $__fn($t1, $t2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($toDuration)(($__global_Data_Time_append1)(($__global_Data_Time_timeToMillis)($t1), ($__global_Data_Time_negateDuration)(($__global_Data_Time_timeToMillis)($t2))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_diff'] = __NAMESPACE__ . '\\Data_Time_diff';




// Data_Time_adjust
function Data_Time_adjust($dictDuration) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_adjust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Time_timeToMillis = ($GLOBALS['Data_Time_timeToMillis'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_timeToMillis'));
  $__global_Data_Number_floor = ($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor'));
  $__global_Data_Time_unwrap = ($GLOBALS['Data_Time_unwrap'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_unwrap'));
  $__global_Data_Time_append1 = ($GLOBALS['Data_Time_append1'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append1'));
  $__global_Data_Time_negateDuration = ($GLOBALS['Data_Time_negateDuration'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negateDuration'));
  $__global_Data_Time_fromDuration = ($GLOBALS['Data_Time_fromDuration'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_fromDuration'));
  $__global_Data_Time_greaterThan = ($GLOBALS['Data_Time_greaterThan'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_greaterThan'));
  $__global_Data_Time_maxTime = ($GLOBALS['Data_Time_maxTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_maxTime'));
  $__global_Data_Time_lessThan = ($GLOBALS['Data_Time_lessThan'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_lessThan'));
  $__global_Data_Time_minTime = ($GLOBALS['Data_Time_minTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_minTime'));
  $__global_Data_Time_negate = ($GLOBALS['Data_Time_negate'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_negate'));
  $__global_Data_Time_append2 = ($GLOBALS['Data_Time_append2'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_append2'));
  $__global_Data_Time_millisToTime = ($GLOBALS['Data_Time_millisToTime'] ?? \Data\Time\phpurs_eval_thunk('Data_Time_millisToTime'));
  $fromDuration1 = ($dictDuration)->fromDuration;
  $__res = (function() use ($__global_Data_Time_timeToMillis, $fromDuration1, $__global_Data_Number_floor, $__global_Data_Time_unwrap, $__global_Data_Time_append1, $__global_Data_Time_negateDuration, $__global_Data_Time_fromDuration, $__global_Data_Time_greaterThan, $__global_Data_Time_maxTime, $__global_Data_Time_lessThan, $__global_Data_Time_minTime, $__global_Data_Time_negate, $__global_Data_Time_append2, $__global_Data_Time_millisToTime, &$__fn) {
  $__fn = function($d, $t = null) use ($__global_Data_Time_timeToMillis, $fromDuration1, $__global_Data_Number_floor, $__global_Data_Time_unwrap, $__global_Data_Time_append1, $__global_Data_Time_negateDuration, $__global_Data_Time_fromDuration, $__global_Data_Time_greaterThan, $__global_Data_Time_maxTime, $__global_Data_Time_lessThan, $__global_Data_Time_minTime, $__global_Data_Time_negate, $__global_Data_Time_append2, $__global_Data_Time_millisToTime, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($t) use ($d, &$__fn) { return $__fn($d, $t); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $tLength = ($__global_Data_Time_timeToMillis)($t);
  $dayLength = 86400000.0;
  $d__prime__ = ($fromDuration1)($d);
  $wholeDays = ($__global_Data_Number_floor)((($__global_Data_Time_unwrap)($d__prime__) / $dayLength));
  $msAdjust = ($__global_Data_Time_append1)($d__prime__, ($__global_Data_Time_negateDuration)(($__global_Data_Time_fromDuration)($wholeDays)));
  $msAdjusted = ($__global_Data_Time_append1)($tLength, $msAdjust);
  $__case_0 = ($__global_Data_Time_greaterThan)($msAdjusted, $__global_Data_Time_maxTime);
  $__case_res_0 = null;
  switch ($__case_0) {
case true:
$__case_res_0 = 1.0;
break;
default:
$__case_0 = ($__global_Data_Time_lessThan)($msAdjusted, $__global_Data_Time_minTime);
$__case_res_1 = null;
switch ($__case_0) {
case true:
$__case_res_1 = ($__global_Data_Time_negate)(1.0);
break;
default:
$__case_res_1 = 0.0;
break;
};
$__case_res_0 = $__case_res_1;
break;
};
  $wrap = $__case_res_0;
  $__res = new Phpurs_Data2("Tuple", ($__global_Data_Time_append2)($wholeDays, $wrap), ($__global_Data_Time_millisToTime)(($__global_Data_Time_append1)($msAdjusted, ($dayLength * ($__global_Data_Time_negate)($wrap)))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_adjust'] = __NAMESPACE__ . '\\Data_Time_adjust';

