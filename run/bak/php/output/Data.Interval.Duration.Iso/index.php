<?php

namespace Data\Interval\Duration\Iso;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Interval.Duration/index.php';
require_once __DIR__ . '/../Data.Interval.Duration.Iso/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Number/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
      case 'Data_Interval_Duration_Iso_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Interval_Duration_Iso_show': $v = (($GLOBALS['Data_Interval_Duration_showDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_showDuration')))->show; break;
      case 'Data_Interval_Duration_Iso_show1': $v = (($GLOBALS['Data_Interval_Duration_showDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_showDurationComponent')))->show; break;
      case 'Data_Interval_Duration_Iso_eq': $v = (($GLOBALS['Data_Interval_Duration_eqDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eqDuration')))->eq; break;
      case 'Data_Interval_Duration_Iso_compare': $v = (($GLOBALS['Data_Interval_Duration_ordDuration'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDuration')))->compare; break;
      case 'Data_Interval_Duration_Iso_eq1': $v = (($GLOBALS['Data_Interval_Duration_eqDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_eqDurationComponent')))->eq; break;
      case 'Data_Interval_Duration_Iso_compare1': $v = (($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDurationComponent')))->compare; break;
      case 'Data_Interval_Duration_Iso_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Interval_Duration_Iso_lookup': $v = \Data\Map\Internal\Data_Map_Internal_lookup(($GLOBALS['Data_Interval_Duration_ordDurationComponent'] ?? \Data\Interval\Duration\phpurs_eval_thunk('Data_Interval_Duration_ordDurationComponent'))); break;
      case 'Data_Interval_Duration_Iso_greaterThan': $v = \Data\Ord\Data_Ord_greaterThan(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Interval_Duration_Iso_pure': $v = (($GLOBALS['Data_List_Types_applicativeList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_applicativeList')))->pure; break;
      case 'Data_Interval_Duration_Iso_empty': $v = ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil')); break;
      case 'Data_Interval_Duration_Iso_foldMap': $v = (($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')))->foldMap; break;
      case 'Data_Interval_Duration_Iso_foldMap1': $v = (($GLOBALS['Data_Interval_Duration_Iso_foldMap'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap')))(($GLOBALS['Data_List_Types_monoidList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_monoidList'))); break;
      case 'Data_Interval_Duration_Iso_greaterThanOrEq': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Interval_Duration_Iso_notEq': $v = \Data\Eq\Data_Eq_notEq(($GLOBALS['Data_Eq_eqNumber'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqNumber'))); break;
      case 'Data_Interval_Duration_Iso_greaterThan1': $v = \Data\Ord\Data_Ord_greaterThan(($GLOBALS['Data_Ord_ordNumber'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordNumber'))); break;
      case 'Data_Interval_Duration_Iso_unwrap': $v = \Data\Newtype\Data_Newtype_unwrap(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Interval_Duration_Iso_foldMap2': $v = (($GLOBALS['Data_Interval_Duration_Iso_foldMap'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap')))(\Data\Monoid\Additive\Data_Monoid_Additive_monoidAdditive(($GLOBALS['Data_Semiring_semiringNumber'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_semiringNumber')))); break;
      case 'Data_Interval_Duration_Iso_composeFlipped': $v = \Control\Semigroupoid\Control_Semigroupoid_composeFlipped(($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn'))); break;
      case 'Data_Interval_Duration_Iso_not': $v = (\Data\HeytingAlgebra\Data_HeytingAlgebra_heytingAlgebraFunction(($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_heytingAlgebraBoolean'))))->not; break;
      case 'Data_Interval_Duration_Iso_fold': $v = \Data\Foldable\Data_Foldable_fold(($GLOBALS['Data_Foldable_foldableArray'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_foldableArray')), \Data\Monoid\Data_Monoid_monoidFn(($GLOBALS['Data_List_Types_monoidList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_monoidList')))); break;
      case 'Data_Interval_Duration_Iso_toUnfoldable': $v = \Data\Map\Internal\Data_Map_Internal_toUnfoldable(($GLOBALS['Data_List_Types_unfoldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldableList'))); break;
      case 'Data_Interval_Duration_Iso_IsEmpty': $v = ($GLOBALS['__phpurs_data0_IsEmpty'] ??= new Phpurs_Data0("IsEmpty")); break;
      case 'Data_Interval_Duration_Iso_InvalidWeekComponentUsage': $v = ($GLOBALS['__phpurs_data0_InvalidWeekComponentUsage'] ??= new Phpurs_Data0("InvalidWeekComponentUsage")); break;
      case 'Data_Interval_Duration_Iso_showIsoDuration': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Interval_Duration_Iso_show = ($GLOBALS['Data_Interval_Duration_Iso_show'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show'));
  $__case_0 = $v;
  if (true) {
$d = $__case_0;
$__res = ("(IsoDuration " . (($__global_Data_Interval_Duration_Iso_show)($d) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_Duration_Iso_showError': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Interval_Duration_Iso_show1 = ($GLOBALS['Data_Interval_Duration_Iso_show1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show1'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "IsEmpty":
$__res = "(IsEmpty)";
goto __end;;
break;
case "InvalidWeekComponentUsage":
$__res = "(InvalidWeekComponentUsage)";
goto __end;;
break;
case "ContainsNegativeValue":
$c = ($__case_0)->v0;
$__res = ("(ContainsNegativeValue " . (($__global_Data_Interval_Duration_Iso_show1)($c) . ")"));
goto __end;;
break;
case "InvalidFractionalUse":
$c = ($__case_0)->v0;
$__res = ("(InvalidFractionalUse " . (($__global_Data_Interval_Duration_Iso_show1)($c) . ")"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_Duration_Iso_eqIsoDuration': $v = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Interval_Duration_Iso_eq = ($GLOBALS['Data_Interval_Duration_Iso_eq'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eq'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (true) {
$l = $__case_0;
$r = $__case_1;
$__res = ($__global_Data_Interval_Duration_Iso_eq)($l, $r);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_Iso_ordIsoDuration': $v = (object)["compare" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Interval_Duration_Iso_compare = ($GLOBALS['Data_Interval_Duration_Iso_compare'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_compare'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (true) {
$l = $__case_0;
$r = $__case_1;
$__res = ($__global_Data_Interval_Duration_Iso_compare)($l, $r);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_Duration_Iso_eqIsoDuration = ($GLOBALS['Data_Interval_Duration_Iso_eqIsoDuration'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eqIsoDuration'));
  $__res = $__global_Data_Interval_Duration_Iso_eqIsoDuration;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Interval_Duration_Iso_eqError': $v = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Interval_Duration_Iso_eq1 = ($GLOBALS['Data_Interval_Duration_Iso_eq1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eq1'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
$__res = true;
goto __end;;
} else {
if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
$__res = ($__global_Data_Interval_Duration_Iso_eq1)($l, $r);
goto __end;;
} else {
if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
$__res = ($__global_Data_Interval_Duration_Iso_eq1)($l, $r);
goto __end;;
} else {
if (true) {
$__res = false;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Interval_Duration_Iso_ordError': $v = (object)["compare" => (function() use (&$__fn) {
  $__fn = function($x, $y = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($y) use ($x, &$__fn) { return $__fn($x, $y); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Interval_Duration_Iso_compare1 = ($GLOBALS['Data_Interval_Duration_Iso_compare1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_compare1'));
  $__case_0 = $x;
  $__case_1 = $y;
  if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "IsEmpty")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "IsEmpty")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
$__res = ($GLOBALS['__phpurs_data0_EQ'] ??= new Phpurs_Data0("EQ"));
goto __end;;
} else {
if ((($__case_0)->tag === "InvalidWeekComponentUsage")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "InvalidWeekComponentUsage")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
$__res = ($__global_Data_Interval_Duration_Iso_compare1)($l, $r);
goto __end;;
} else {
if ((($__case_0)->tag === "ContainsNegativeValue")) {
$__res = ($GLOBALS['__phpurs_data0_LT'] ??= new Phpurs_Data0("LT"));
goto __end;;
} else {
if ((($__case_1)->tag === "ContainsNegativeValue")) {
$__res = ($GLOBALS['__phpurs_data0_GT'] ??= new Phpurs_Data0("GT"));
goto __end;;
} else {
if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->v0;
$r = ($__case_1)->v0;
$__res = ($__global_Data_Interval_Duration_Iso_compare1)($l, $r);
goto __end;;
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
};
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Interval_Duration_Iso_eqError = ($GLOBALS['Data_Interval_Duration_Iso_eqError'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_eqError'));
  $__res = $__global_Data_Interval_Duration_Iso_eqError;
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

























// Data_Interval_Duration_Iso_IsoDuration
function Data_Interval_Duration_Iso_IsoDuration($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_IsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_IsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_IsoDuration';



// Data_Interval_Duration_Iso_ContainsNegativeValue
function Data_Interval_Duration_Iso_ContainsNegativeValue($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_ContainsNegativeValue';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("ContainsNegativeValue", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_ContainsNegativeValue'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_ContainsNegativeValue';

// Data_Interval_Duration_Iso_InvalidFractionalUse
function Data_Interval_Duration_Iso_InvalidFractionalUse($value0) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_InvalidFractionalUse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = new Phpurs_Data1("InvalidFractionalUse", $value0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_InvalidFractionalUse'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_InvalidFractionalUse';

// Data_Interval_Duration_Iso_unIsoDuration
function Data_Interval_Duration_Iso_unIsoDuration($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_unIsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$a = $__case_0;
$__res = $a;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_unIsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_unIsoDuration';



// Data_Interval_Duration_Iso_prettyError
function Data_Interval_Duration_Iso_prettyError($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_prettyError';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Interval_Duration_Iso_show1 = ($GLOBALS['Data_Interval_Duration_Iso_show1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_show1'));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "IsEmpty":
$__res = "Duration is empty (has no components)";
goto __end;;
break;
case "InvalidWeekComponentUsage":
$__res = "Week component of Duration is used with other components";
goto __end;;
break;
case "ContainsNegativeValue":
$c = ($__case_0)->v0;
$__res = ("Component `" . (($__global_Data_Interval_Duration_Iso_show1)($c) . "` contains negative value"));
goto __end;;
break;
case "InvalidFractionalUse":
$c = ($__case_0)->v0;
$__res = ("Invalid usage of Fractional value at component `" . (($__global_Data_Interval_Duration_Iso_show1)($c) . "`"));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_prettyError'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_prettyError';





// Data_Interval_Duration_Iso_checkWeekUsage
function Data_Interval_Duration_Iso_checkWeekUsage($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkWeekUsage';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__global_Data_Maybe_isJust = ($GLOBALS['Data_Maybe_isJust'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_isJust'));
  $__global_Data_Interval_Duration_Iso_lookup = ($GLOBALS['Data_Interval_Duration_Iso_lookup'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_lookup'));
  $__global_Data_Interval_Duration_Iso_greaterThan = ($GLOBALS['Data_Interval_Duration_Iso_greaterThan'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_greaterThan'));
  $__global_Data_Map_Internal_size = ($GLOBALS['Data_Map_Internal_size'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_size'));
  $__global_Data_Interval_Duration_Iso_pure = ($GLOBALS['Data_Interval_Duration_Iso_pure'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_pure'));
  $__global_Data_List_Types_Nil = ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
  $__case_0 = $v;
  if (is_object($__case_0)) {
$asMap = ($__case_0)->asMap;
$__case_0 = ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Maybe_isJust)(($__global_Data_Interval_Duration_Iso_lookup)(($GLOBALS['__phpurs_data0_Week'] ??= new Phpurs_Data0("Week")), $asMap)), ($__global_Data_Interval_Duration_Iso_greaterThan)(($__global_Data_Map_Internal_size)($asMap), 1));
switch ($__case_0) {
case true:
$__res = ($__global_Data_Interval_Duration_Iso_pure)(($GLOBALS['__phpurs_data0_InvalidWeekComponentUsage'] ??= new Phpurs_Data0("InvalidWeekComponentUsage")));
goto __end;;
break;
default:
$__res = $__global_Data_List_Types_Nil;
goto __end;;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkWeekUsage'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkWeekUsage';

// Data_Interval_Duration_Iso_checkNegativeValues
function Data_Interval_Duration_Iso_checkNegativeValues($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkNegativeValues';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__global_Data_Interval_Duration_Iso_foldMap1 = ($GLOBALS['Data_Interval_Duration_Iso_foldMap1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap1'));
  $__global_Data_Interval_Duration_Iso_greaterThanOrEq = ($GLOBALS['Data_Interval_Duration_Iso_greaterThanOrEq'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_greaterThanOrEq'));
  $__global_Data_List_Types_Nil = ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
  $__global_Data_Interval_Duration_Iso_pure = ($GLOBALS['Data_Interval_Duration_Iso_pure'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_pure'));
  $__case_0 = $v;
  if (is_object($__case_0)) {
$asList = ($__case_0)->asList;
$__res = ($__global_Data_Function_flip)($__global_Data_Interval_Duration_Iso_foldMap1, $asList, function($v1) use ($__global_Data_Interval_Duration_Iso_greaterThanOrEq, $__global_Data_List_Types_Nil, $__global_Data_Interval_Duration_Iso_pure) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "Tuple":
$c = ($__case_0)->v0;
$num = ($__case_0)->v1;
$__case_0 = ($__global_Data_Interval_Duration_Iso_greaterThanOrEq)($num, 0.0);
switch ($__case_0) {
case true:
$__res = $__global_Data_List_Types_Nil;
goto __end;;
break;
default:
$__res = ($__global_Data_Interval_Duration_Iso_pure)(new Phpurs_Data1("ContainsNegativeValue", $c));
goto __end;;
break;
};
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkNegativeValues'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkNegativeValues';

// Data_Interval_Duration_Iso_checkFractionalUse
function Data_Interval_Duration_Iso_checkFractionalUse($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkFractionalUse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Interval_Duration_Iso_notEq = ($GLOBALS['Data_Interval_Duration_Iso_notEq'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_notEq'));
  $__global_Data_Number_floor = ($GLOBALS['Data_Number_floor'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_floor'));
  $__global_Data_Interval_Duration_Iso_greaterThan1 = ($GLOBALS['Data_Interval_Duration_Iso_greaterThan1'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_greaterThan1'));
  $__global_Data_Interval_Duration_Iso_unwrap = ($GLOBALS['Data_Interval_Duration_Iso_unwrap'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_unwrap'));
  $__global_Data_Interval_Duration_Iso_foldMap2 = ($GLOBALS['Data_Interval_Duration_Iso_foldMap2'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_foldMap2'));
  $__global_Data_Interval_Duration_Iso_composeFlipped = ($GLOBALS['Data_Interval_Duration_Iso_composeFlipped'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_composeFlipped'));
  $__global_Data_Tuple_snd = ($GLOBALS['Data_Tuple_snd'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_snd'));
  $__global_Data_Number_abs = ($GLOBALS['Data_Number_abs'] ?? \Data\Number\phpurs_eval_thunk('Data_Number_abs'));
  $__global_Data_Monoid_Additive_Additive = ($GLOBALS['Data_Monoid_Additive_Additive'] ?? \Data\Monoid\Additive\phpurs_eval_thunk('Data_Monoid_Additive_Additive'));
  $__global_Data_List_span = ($GLOBALS['Data_List_span'] ?? \Data\List\phpurs_eval_thunk('Data_List_span'));
  $__global_Data_Interval_Duration_Iso_not = ($GLOBALS['Data_Interval_Duration_Iso_not'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_not'));
  $__global_Data_List_Types_Nil = ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
  $__case_0 = $v;
  if (is_object($__case_0)) {
$asList = ($__case_0)->asList;
$isFractional = function($a) use ($__global_Data_Interval_Duration_Iso_notEq, $__global_Data_Number_floor) {
  $__num = func_num_args();
  $__res = ($__global_Data_Interval_Duration_Iso_notEq)(($__global_Data_Number_floor)($a), $a);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$checkRest = function($rest) use ($__global_Data_Interval_Duration_Iso_greaterThan1, $__global_Data_Interval_Duration_Iso_unwrap, $__global_Data_Interval_Duration_Iso_foldMap2, $__global_Data_Interval_Duration_Iso_composeFlipped, $__global_Data_Tuple_snd, $__global_Data_Number_abs, $__global_Data_Monoid_Additive_Additive) {
  $__num = func_num_args();
  $__res = ($__global_Data_Interval_Duration_Iso_greaterThan1)(($__global_Data_Interval_Duration_Iso_unwrap)(($__global_Data_Interval_Duration_Iso_foldMap2)(($__global_Data_Interval_Duration_Iso_composeFlipped)($__global_Data_Tuple_snd, ($__global_Data_Interval_Duration_Iso_composeFlipped)($__global_Data_Number_abs, $__global_Data_Monoid_Additive_Additive)), $rest)), 0.0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
$v1 = (function($v2) {
  $__num = func_num_args();
  $__res = ($v2)->rest;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})(($__global_Data_List_span)(($__global_Data_Interval_Duration_Iso_composeFlipped)($__global_Data_Tuple_snd, ($__global_Data_Interval_Duration_Iso_not)($isFractional)), $asList));
$__case_0 = $v1;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->v0)->tag === "Tuple"))) {
$c = (($__case_0)->v0)->v0;
$rest = ($__case_0)->v1;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
if (true) {
$__res = $__global_Data_List_Types_Nil;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkFractionalUse'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkFractionalUse';

// Data_Interval_Duration_Iso_checkEmptiness
function Data_Interval_Duration_Iso_checkEmptiness($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkEmptiness';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_null = ($GLOBALS['Data_List_null'] ?? \Data\List\phpurs_eval_thunk('Data_List_null'));
  $__global_Data_Interval_Duration_Iso_pure = ($GLOBALS['Data_Interval_Duration_Iso_pure'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_pure'));
  $__global_Data_List_Types_Nil = ($GLOBALS['Data_List_Types_Nil'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_Nil'));
  $__case_0 = $v;
  if (is_object($__case_0)) {
$asList = ($__case_0)->asList;
$__case_0 = ($__global_Data_List_null)($asList);
switch ($__case_0) {
case true:
$__res = ($__global_Data_Interval_Duration_Iso_pure)(($GLOBALS['__phpurs_data0_IsEmpty'] ??= new Phpurs_Data0("IsEmpty")));
goto __end;;
break;
default:
$__res = $__global_Data_List_Types_Nil;
goto __end;;
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkEmptiness'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkEmptiness';

// Data_Interval_Duration_Iso_checkValidIsoDuration
function Data_Interval_Duration_Iso_checkValidIsoDuration($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_checkValidIsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Interval_Duration_Iso_fold = ($GLOBALS['Data_Interval_Duration_Iso_fold'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_fold'));
  $__global_Data_Interval_Duration_Iso_checkWeekUsage = ($GLOBALS['Data_Interval_Duration_Iso_checkWeekUsage'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkWeekUsage'));
  $__global_Data_Interval_Duration_Iso_checkEmptiness = ($GLOBALS['Data_Interval_Duration_Iso_checkEmptiness'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkEmptiness'));
  $__global_Data_Interval_Duration_Iso_checkFractionalUse = ($GLOBALS['Data_Interval_Duration_Iso_checkFractionalUse'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkFractionalUse'));
  $__global_Data_Interval_Duration_Iso_checkNegativeValues = ($GLOBALS['Data_Interval_Duration_Iso_checkNegativeValues'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkNegativeValues'));
  $__global_Data_List_reverse = ($GLOBALS['Data_List_reverse'] ?? \Data\List\phpurs_eval_thunk('Data_List_reverse'));
  $__global_Data_Interval_Duration_Iso_toUnfoldable = ($GLOBALS['Data_Interval_Duration_Iso_toUnfoldable'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_toUnfoldable'));
  $__case_0 = $v;
  if (true) {
$asMap = $__case_0;
$check = ($__global_Data_Interval_Duration_Iso_fold)([$__global_Data_Interval_Duration_Iso_checkWeekUsage, $__global_Data_Interval_Duration_Iso_checkEmptiness, $__global_Data_Interval_Duration_Iso_checkFractionalUse, $__global_Data_Interval_Duration_Iso_checkNegativeValues]);
$asList = ($__global_Data_List_reverse)(($__global_Data_Interval_Duration_Iso_toUnfoldable)($asMap));
$__res = ($check)((object)["asList" => $asList, "asMap" => $asMap]);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_checkValidIsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_checkValidIsoDuration';

// Data_Interval_Duration_Iso_mkIsoDuration
function Data_Interval_Duration_Iso_mkIsoDuration($d) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Interval_Duration_Iso_mkIsoDuration';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_NonEmpty_fromList = ($GLOBALS['Data_List_NonEmpty_fromList'] ?? \Data\List\NonEmpty\phpurs_eval_thunk('Data_List_NonEmpty_fromList'));
  $__global_Data_Interval_Duration_Iso_checkValidIsoDuration = ($GLOBALS['Data_Interval_Duration_Iso_checkValidIsoDuration'] ?? \Data\Interval\Duration\Iso\phpurs_eval_thunk('Data_Interval_Duration_Iso_checkValidIsoDuration'));
  $v = ($__global_Data_List_NonEmpty_fromList)(($__global_Data_Interval_Duration_Iso_checkValidIsoDuration)($d));
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Just":
$errs = ($__case_0)->v0;
$__res = new Phpurs_Data1("Left", $errs);
goto __end;;
break;
case "Nothing":
$__res = new Phpurs_Data1("Right", $d);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Interval_Duration_Iso_mkIsoDuration'] = __NAMESPACE__ . '\\Data_Interval_Duration_Iso_mkIsoDuration';

