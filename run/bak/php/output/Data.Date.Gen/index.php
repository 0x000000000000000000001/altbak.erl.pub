<?php

namespace Data\Date\Gen;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Gen/index.php';
require_once __DIR__ . '/../Control.Monad.Gen.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Date/index.php';
require_once __DIR__ . '/../Data.Date.Component/index.php';
require_once __DIR__ . '/../Data.Date.Component.Gen/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Int/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
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
      case 'Data_Date_Gen_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Date_Gen_fromJust': $v = \Data\Maybe\Data_Maybe_fromJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Date_Gen_bind': $v = (($GLOBALS['Data_Maybe_bindMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_bindMaybe')))->bind; break;
      case 'Data_Date_Gen_bottom': $v = ($GLOBALS['Data_Date_Component_January'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_January')); break;
      case 'Data_Date_Gen_bottom1': $v = (($GLOBALS['Data_Date_Component_boundedDay'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_boundedDay')))->bottom; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };







// Data_Date_Gen_genDate
function Data_Date_Gen_genDate($dictMonadGen) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Date_Gen_genDate';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Date_Component_Gen_genYear = ($GLOBALS['Data_Date_Component_Gen_genYear'] ?? \Data\Date\Component\Gen\phpurs_eval_thunk('Data_Date_Component_Gen_genYear'));
  $__global_Data_Date_isLeapYear = ($GLOBALS['Data_Date_isLeapYear'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_isLeapYear'));
  $__global_Data_Date_Gen_compose = ($GLOBALS['Data_Date_Gen_compose'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_compose'));
  $__global_Data_Time_Duration_Days = ($GLOBALS['Data_Time_Duration_Days'] ?? \Data\Time\Duration\phpurs_eval_thunk('Data_Time_Duration_Days'));
  $__global_Data_Int_toNumber = ($GLOBALS['Data_Int_toNumber'] ?? \Data\Int\phpurs_eval_thunk('Data_Int_toNumber'));
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Data_Date_Gen_fromJust = ($GLOBALS['Data_Date_Gen_fromJust'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_fromJust'));
  $__global_Data_Date_Gen_bind = ($GLOBALS['Data_Date_Gen_bind'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_bind'));
  $__global_Data_Date_exactDate = ($GLOBALS['Data_Date_exactDate'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_exactDate'));
  $__global_Data_Date_Component_January = ($GLOBALS['Data_Date_Component_January'] ?? \Data\Date\Component\phpurs_eval_thunk('Data_Date_Component_January'));
  $__global_Data_Date_Gen_bottom1 = ($GLOBALS['Data_Date_Gen_bottom1'] ?? \Data\Date\Gen\phpurs_eval_thunk('Data_Date_Gen_bottom1'));
  $__global_Data_Date_adjust = ($GLOBALS['Data_Date_adjust'] ?? \Data\Date\phpurs_eval_thunk('Data_Date_adjust'));
  $Monad0 = (($dictMonadGen)->Monad0)($__global_Prim_undefined);
  $Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
  $bind1 = ($Bind1)->bind;
  $map = ((((($Bind1)->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $chooseInt = ($dictMonadGen)->chooseInt;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = ($bind1)(($__global_Data_Date_Component_Gen_genYear)($dictMonadGen), function($year) use ($__global_Data_Date_isLeapYear, $bind1, $map, $__global_Data_Date_Gen_compose, $__global_Data_Time_Duration_Days, $__global_Data_Int_toNumber, $chooseInt, $pure, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Date_Gen_fromJust, $__global_Data_Date_Gen_bind, $__global_Data_Date_exactDate, $__global_Data_Date_Component_January, $__global_Data_Date_Gen_bottom1, $__global_Data_Date_adjust) {
  $__num = func_num_args();
  $__case_0 = ($__global_Data_Date_isLeapYear)($year);
  $__case_res_0 = null;
  switch ($__case_0) {
case true:
$__case_res_0 = 365;
break;
default:
$__case_res_0 = 364;
break;
};
  $maxDays = $__case_res_0;
  $__res = ($bind1)(($map)(($__global_Data_Date_Gen_compose)($__global_Data_Time_Duration_Days, $__global_Data_Int_toNumber), ($chooseInt)(0, $maxDays)), function($days) use ($pure, $__global_Partial_Unsafe__unsafePartial, $__global_Data_Date_Gen_fromJust, $__global_Data_Date_Gen_bind, $__global_Data_Date_exactDate, $year, $__global_Data_Date_Component_January, $__global_Data_Date_Gen_bottom1, $__global_Data_Date_adjust) {
  $__num = func_num_args();
  $__res = ($pure)(($__global_Partial_Unsafe__unsafePartial)(function($__dollar____unused) use ($__global_Data_Date_Gen_fromJust, $__global_Data_Date_Gen_bind, $__global_Data_Date_exactDate, $year, $__global_Data_Date_Component_January, $__global_Data_Date_Gen_bottom1, $__global_Data_Date_adjust, $days) {
  $__num = func_num_args();
  $__res = ($__global_Data_Date_Gen_fromJust)(($__global_Data_Date_Gen_bind)(($__global_Data_Date_exactDate)($year, $__global_Data_Date_Component_January, $__global_Data_Date_Gen_bottom1), function($janFirst) use ($__global_Data_Date_adjust, $days) {
  $__num = func_num_args();
  $__res = ($__global_Data_Date_adjust)($days, $janFirst);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Date_Gen_genDate'] = __NAMESPACE__ . '\\Data_Date_Gen_genDate';

