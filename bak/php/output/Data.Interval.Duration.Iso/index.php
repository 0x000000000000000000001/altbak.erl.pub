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


// Data_Interval_Duration_Iso_append
$Data_Interval_Duration_Iso_append = ($GLOBALS['Data_Semigroup_append'])($GLOBALS['Data_Semigroup_semigroupString']);

// Data_Interval_Duration_Iso_show
$Data_Interval_Duration_Iso_show = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Interval_Duration_showDuration']);

// Data_Interval_Duration_Iso_show1
$Data_Interval_Duration_Iso_show1 = ($GLOBALS['Data_Show_show'])($GLOBALS['Data_Interval_Duration_showDurationComponent']);

// Data_Interval_Duration_Iso_eq
$Data_Interval_Duration_Iso_eq = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Interval_Duration_eqDuration']);

// Data_Interval_Duration_Iso_compare
$Data_Interval_Duration_Iso_compare = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Interval_Duration_ordDuration']);

// Data_Interval_Duration_Iso_eq1
$Data_Interval_Duration_Iso_eq1 = ($GLOBALS['Data_Eq_eq'])($GLOBALS['Data_Interval_Duration_eqDurationComponent']);

// Data_Interval_Duration_Iso_compare1
$Data_Interval_Duration_Iso_compare1 = ($GLOBALS['Data_Ord_compare'])($GLOBALS['Data_Interval_Duration_ordDurationComponent']);

// Data_Interval_Duration_Iso_conj
$Data_Interval_Duration_Iso_conj = ($GLOBALS['Data_HeytingAlgebra_conj'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']);

// Data_Interval_Duration_Iso_lookup
$Data_Interval_Duration_Iso_lookup = ($GLOBALS['Data_Map_Internal_lookup'])($GLOBALS['Data_Interval_Duration_ordDurationComponent']);

// Data_Interval_Duration_Iso_greaterThan
$Data_Interval_Duration_Iso_greaterThan = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordInt']);

// Data_Interval_Duration_Iso_pure
$Data_Interval_Duration_Iso_pure = ($GLOBALS['Control_Applicative_pure'])($GLOBALS['Data_List_Types_applicativeList']);

// Data_Interval_Duration_Iso_empty
$Data_Interval_Duration_Iso_empty = ($GLOBALS['Control_Plus_empty'])($GLOBALS['Data_List_Types_plusList']);

// Data_Interval_Duration_Iso_foldMap
$Data_Interval_Duration_Iso_foldMap = ($GLOBALS['Data_Foldable_foldMap'])($GLOBALS['Data_List_Types_foldableList']);

// Data_Interval_Duration_Iso_foldMap1
$Data_Interval_Duration_Iso_foldMap1 = ($GLOBALS['Data_Interval_Duration_Iso_foldMap'])($GLOBALS['Data_List_Types_monoidList']);

// Data_Interval_Duration_Iso_greaterThanOrEq
$Data_Interval_Duration_Iso_greaterThanOrEq = ($GLOBALS['Data_Ord_greaterThanOrEq'])($GLOBALS['Data_Ord_ordNumber']);

// Data_Interval_Duration_Iso_notEq
$Data_Interval_Duration_Iso_notEq = ($GLOBALS['Data_Eq_notEq'])($GLOBALS['Data_Eq_eqNumber']);

// Data_Interval_Duration_Iso_greaterThan1
$Data_Interval_Duration_Iso_greaterThan1 = ($GLOBALS['Data_Ord_greaterThan'])($GLOBALS['Data_Ord_ordNumber']);

// Data_Interval_Duration_Iso_unwrap
$Data_Interval_Duration_Iso_unwrap = ($GLOBALS['Data_Newtype_unwrap'])($GLOBALS['Prim_undefined']);

// Data_Interval_Duration_Iso_foldMap2
$Data_Interval_Duration_Iso_foldMap2 = ($GLOBALS['Data_Interval_Duration_Iso_foldMap'])(($GLOBALS['Data_Monoid_Additive_monoidAdditive'])($GLOBALS['Data_Semiring_semiringNumber']));

// Data_Interval_Duration_Iso_composeFlipped
$Data_Interval_Duration_Iso_composeFlipped = ($GLOBALS['Control_Semigroupoid_composeFlipped'])($GLOBALS['Control_Semigroupoid_semigroupoidFn']);

// Data_Interval_Duration_Iso_not
$Data_Interval_Duration_Iso_not = ($GLOBALS['Data_HeytingAlgebra_not'])(($GLOBALS['Data_HeytingAlgebra_heytingAlgebraFunction'])($GLOBALS['Data_HeytingAlgebra_heytingAlgebraBoolean']));

// Data_Interval_Duration_Iso_fold
$Data_Interval_Duration_Iso_fold = ($GLOBALS['Data_Foldable_fold'])($GLOBALS['Data_Foldable_foldableArray'], ($GLOBALS['Data_Monoid_monoidFn'])($GLOBALS['Data_List_Types_monoidList']));

// Data_Interval_Duration_Iso_toUnfoldable
$Data_Interval_Duration_Iso_toUnfoldable = ($GLOBALS['Data_Map_Internal_toUnfoldable'])($GLOBALS['Data_List_Types_unfoldableList']);

// Data_Interval_Duration_Iso_IsoDuration
$Data_Interval_Duration_Iso_IsoDuration = (function() {
  $__fn = function($x) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $x;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_IsEmpty
$Data_Interval_Duration_Iso_IsEmpty = (object)["tag" => "IsEmpty", "values" => []];

// Data_Interval_Duration_Iso_InvalidWeekComponentUsage
$Data_Interval_Duration_Iso_InvalidWeekComponentUsage = (object)["tag" => "InvalidWeekComponentUsage", "values" => []];

// Data_Interval_Duration_Iso_ContainsNegativeValue
$Data_Interval_Duration_Iso_ContainsNegativeValue = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "ContainsNegativeValue", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_InvalidFractionalUse
$Data_Interval_Duration_Iso_InvalidFractionalUse = (function() {
  $__fn = function($value0) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = (object)["tag" => "InvalidFractionalUse", "values" => [$value0]];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_unIsoDuration
$Data_Interval_Duration_Iso_unIsoDuration = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$a = $__case_0;
return $a;
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_showIsoDuration
$Data_Interval_Duration_Iso_showIsoDuration = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$d = $__case_0;
return ($GLOBALS['Data_Interval_Duration_Iso_append'])("(IsoDuration ", ($GLOBALS['Data_Interval_Duration_Iso_append'])(($GLOBALS['Data_Interval_Duration_Iso_show'])($d), ")"));
} else {
throw new \Exception("Pattern match failure");
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

// Data_Interval_Duration_Iso_showError
$Data_Interval_Duration_Iso_showError = ($GLOBALS['Data_Show_Show__dollar__Dict'])((object)["show" => (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "IsEmpty")) {
return "(IsEmpty)";
} else {
if ((($__case_0)->tag === "InvalidWeekComponentUsage")) {
return "(InvalidWeekComponentUsage)";
} else {
if ((($__case_0)->tag === "ContainsNegativeValue")) {
$c = ($__case_0)->values[0];
return ($GLOBALS['Data_Interval_Duration_Iso_append'])("(ContainsNegativeValue ", ($GLOBALS['Data_Interval_Duration_Iso_append'])(($GLOBALS['Data_Interval_Duration_Iso_show1'])($c), ")"));
} else {
if ((($__case_0)->tag === "InvalidFractionalUse")) {
$c = ($__case_0)->values[0];
return ($GLOBALS['Data_Interval_Duration_Iso_append'])("(InvalidFractionalUse ", ($GLOBALS['Data_Interval_Duration_Iso_append'])(($GLOBALS['Data_Interval_Duration_Iso_show1'])($c), ")"));
} else {
throw new \Exception("Pattern match failure");
};
};
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

// Data_Interval_Duration_Iso_prettyError
$Data_Interval_Duration_Iso_prettyError = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((($__case_0)->tag === "IsEmpty")) {
return "Duration is empty (has no components)";
} else {
if ((($__case_0)->tag === "InvalidWeekComponentUsage")) {
return "Week component of Duration is used with other components";
} else {
if ((($__case_0)->tag === "ContainsNegativeValue")) {
$c = ($__case_0)->values[0];
return ($GLOBALS['Data_Interval_Duration_Iso_append'])("Component `", ($GLOBALS['Data_Interval_Duration_Iso_append'])(($GLOBALS['Data_Interval_Duration_Iso_show1'])($c), "` contains negative value"));
} else {
if ((($__case_0)->tag === "InvalidFractionalUse")) {
$c = ($__case_0)->values[0];
return ($GLOBALS['Data_Interval_Duration_Iso_append'])("Invalid usage of Fractional value at component `", ($GLOBALS['Data_Interval_Duration_Iso_append'])(($GLOBALS['Data_Interval_Duration_Iso_show1'])($c), "`"));
} else {
throw new \Exception("Pattern match failure");
};
};
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
})();

// Data_Interval_Duration_Iso_eqIsoDuration
$Data_Interval_Duration_Iso_eqIsoDuration = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($GLOBALS['Data_Interval_Duration_Iso_eq'])($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_Iso_ordIsoDuration
$Data_Interval_Duration_Iso_ordIsoDuration = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (true) {
$l = $__case_0;
$r = $__case_1;
return ($GLOBALS['Data_Interval_Duration_Iso_compare'])($l, $r);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_Duration_Iso_eqIsoDuration'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_Iso_eqError
$Data_Interval_Duration_Iso_eqError = ($GLOBALS['Data_Eq_Eq__dollar__Dict'])((object)["eq" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
return true;
} else {
if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
return true;
} else {
if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($GLOBALS['Data_Interval_Duration_Iso_eq1'])($l, $r);
} else {
if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($GLOBALS['Data_Interval_Duration_Iso_eq1'])($l, $r);
} else {
if (true) {
return false;
} else {
throw new \Exception("Pattern match failure");
};
};
};
};
};
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_Iso_ordError
$Data_Interval_Duration_Iso_ordError = ($GLOBALS['Data_Ord_Ord__dollar__Dict'])((object)["compare" => (function() {
  $__body = function($x, $y) {
    $__case_0 = $x;
    $__case_1 = $y;
    if (((($__case_0)->tag === "IsEmpty") && (($__case_1)->tag === "IsEmpty"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "IsEmpty")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "IsEmpty")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "InvalidWeekComponentUsage") && (($__case_1)->tag === "InvalidWeekComponentUsage"))) {
return $GLOBALS['Data_Ordering_EQ'];
} else {
if ((($__case_0)->tag === "InvalidWeekComponentUsage")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "InvalidWeekComponentUsage")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "ContainsNegativeValue") && (($__case_1)->tag === "ContainsNegativeValue"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($GLOBALS['Data_Interval_Duration_Iso_compare1'])($l, $r);
} else {
if ((($__case_0)->tag === "ContainsNegativeValue")) {
return $GLOBALS['Data_Ordering_LT'];
} else {
if ((($__case_1)->tag === "ContainsNegativeValue")) {
return $GLOBALS['Data_Ordering_GT'];
} else {
if (((($__case_0)->tag === "InvalidFractionalUse") && (($__case_1)->tag === "InvalidFractionalUse"))) {
$l = ($__case_0)->values[0];
$r = ($__case_1)->values[0];
return ($GLOBALS['Data_Interval_Duration_Iso_compare1'])($l, $r);
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
  };
  $__fn = function($x, $y = null) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) return phpurs_curry_fallback($__fn, func_get_args(), 2);
    $__res = $__body($x, $y);
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => (function() {
  $__fn = function($__dollar____unused) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $GLOBALS['Data_Interval_Duration_Iso_eqError'];
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})()]);

// Data_Interval_Duration_Iso_checkWeekUsage
$Data_Interval_Duration_Iso_checkWeekUsage = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asMap = ($__case_0)->asMap;
$__case_0 = ($GLOBALS['Data_Interval_Duration_Iso_conj'])(($GLOBALS['Data_Maybe_isJust'])(($GLOBALS['Data_Interval_Duration_Iso_lookup'])($GLOBALS['Data_Interval_Duration_Week'], $asMap)), ($GLOBALS['Data_Interval_Duration_Iso_greaterThan'])(($GLOBALS['Data_Map_Internal_size'])($asMap), 1));
if (($__case_0 === true)) {
return ($GLOBALS['Data_Interval_Duration_Iso_pure'])($GLOBALS['Data_Interval_Duration_Iso_InvalidWeekComponentUsage']);
} else {
if (true) {
return $GLOBALS['Data_Interval_Duration_Iso_empty'];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_checkNegativeValues
$Data_Interval_Duration_Iso_checkNegativeValues = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
return ($GLOBALS['Data_Function_flip'])($GLOBALS['Data_Interval_Duration_Iso_foldMap1'], $asList, (function() {
  $__body = function($v1) {
    $__case_0 = $v1;
    if ((($__case_0)->tag === "Tuple")) {
$c = ($__case_0)->values[0];
$num = ($__case_0)->values[1];
$__case_0 = ($GLOBALS['Data_Interval_Duration_Iso_greaterThanOrEq'])($num, 0.0);
if (($__case_0 === true)) {
return $GLOBALS['Data_Interval_Duration_Iso_empty'];
} else {
if (true) {
return ($GLOBALS['Data_Interval_Duration_Iso_pure'])(($GLOBALS['Data_Interval_Duration_Iso_ContainsNegativeValue'])($c));
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v1) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v1);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})());
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_checkFractionalUse
$Data_Interval_Duration_Iso_checkFractionalUse = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
$isFractional = (function() {
  $__fn = function($a) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Interval_Duration_Iso_notEq'])(($GLOBALS['Data_Number_floor'])($a), $a);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$checkRest = (function() {
  $__fn = function($rest) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($GLOBALS['Data_Interval_Duration_Iso_greaterThan1'])(($GLOBALS['Data_Interval_Duration_Iso_unwrap'])(($GLOBALS['Data_Interval_Duration_Iso_foldMap2'])(($GLOBALS['Data_Interval_Duration_Iso_composeFlipped'])($GLOBALS['Data_Tuple_snd'], ($GLOBALS['Data_Interval_Duration_Iso_composeFlipped'])($GLOBALS['Data_Number_abs'], $GLOBALS['Data_Monoid_Additive_Additive'])), $rest)), 0.0);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();
$v1 = ((function() {
  $__fn = function($v2) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = ($v2)->rest;
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})())(($GLOBALS['Data_List_span'])(($GLOBALS['Data_Interval_Duration_Iso_composeFlipped'])($GLOBALS['Data_Tuple_snd'], ($GLOBALS['Data_Interval_Duration_Iso_not'])($isFractional)), $asList));
$__case_0 = $v1;
if (((($__case_0)->tag === "Cons") && ((($__case_0)->values[0])->tag === "Tuple"))) {
$c = (($__case_0)->values[0])->values[0];
$rest = ($__case_0)->values[1];
return "/* Unsupported: Guards not supported */";
} else {
if (true) {
return $GLOBALS['Data_Interval_Duration_Iso_empty'];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_checkEmptiness
$Data_Interval_Duration_Iso_checkEmptiness = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if ((is_object)($__case_0)) {
$asList = ($__case_0)->asList;
$__case_0 = ($GLOBALS['Data_List_null'])($asList);
if (($__case_0 === true)) {
return ($GLOBALS['Data_Interval_Duration_Iso_pure'])($GLOBALS['Data_Interval_Duration_Iso_IsEmpty']);
} else {
if (true) {
return $GLOBALS['Data_Interval_Duration_Iso_empty'];
} else {
throw new \Exception("Pattern match failure");
};
};
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_checkValidIsoDuration
$Data_Interval_Duration_Iso_checkValidIsoDuration = (function() {
  $__body = function($v) {
    $__case_0 = $v;
    if (true) {
$asMap = $__case_0;
$check = ($GLOBALS['Data_Interval_Duration_Iso_fold'])([$GLOBALS['Data_Interval_Duration_Iso_checkWeekUsage'], $GLOBALS['Data_Interval_Duration_Iso_checkEmptiness'], $GLOBALS['Data_Interval_Duration_Iso_checkFractionalUse'], $GLOBALS['Data_Interval_Duration_Iso_checkNegativeValues']]);
$asList = ($GLOBALS['Data_List_reverse'])(($GLOBALS['Data_Interval_Duration_Iso_toUnfoldable'])($asMap));
return ($check)((object)["asList" => $asList, "asMap" => $asMap]);
} else {
throw new \Exception("Pattern match failure");
};
  };
  $__fn = function($v) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($v);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

// Data_Interval_Duration_Iso_mkIsoDuration
$Data_Interval_Duration_Iso_mkIsoDuration = (function() {
  $__body = function($d) {
    $v = ($GLOBALS['Data_List_NonEmpty_fromList'])(($GLOBALS['Data_Interval_Duration_Iso_checkValidIsoDuration'])($d));
    $__case_0 = $v;
    if ((($__case_0)->tag === "Just")) {
$errs = ($__case_0)->values[0];
return ($GLOBALS['Data_Either_Left'])($errs);
} else {
if ((($__case_0)->tag === "Nothing")) {
return ($GLOBALS['Data_Either_Right'])(($GLOBALS['Data_Interval_Duration_Iso_IsoDuration'])($d));
} else {
throw new \Exception("Pattern match failure");
};
};
  };
  $__fn = function($d) use ($__body, &$__fn) {
  $__num = func_num_args();
  if ($__num < 1) return phpurs_curry_fallback($__fn, func_get_args(), 1);
    $__res = $__body($d);
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
  };
  return $__fn;
})();

