<?php

namespace Data\Time\Component;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Boolean/index.php';
require_once __DIR__ . '/../Data.Bounded/index.php';
require_once __DIR__ . '/../Data.Enum/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Time.Component/index.php';
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
      case 'Data_Time_Component_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Time_Component_show': $v = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl')); break;
      case 'Data_Time_Component_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Time_Component_greaterThanOrEq': $v = \Data\Ord\Data_Ord_greaterThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Time_Component_lessThanOrEq': $v = \Data\Ord\Data_Ord_lessThanOrEq(($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'))); break;
      case 'Data_Time_Component_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Time_Component_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_Time_Component_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Data_Time_Component_showSecond': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Show_showIntImpl = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl'));
  $__case_0 = $v;
  if (true) {
$m = $__case_0;
$__res = ("(Second " . (($__global_Data_Show_showIntImpl)($m) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_showMinute': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Show_showIntImpl = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl'));
  $__case_0 = $v;
  if (true) {
$m = $__case_0;
$__res = ("(Minute " . (($__global_Data_Show_showIntImpl)($m) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_showMillisecond': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Show_showIntImpl = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl'));
  $__case_0 = $v;
  if (true) {
$m = $__case_0;
$__res = ("(Millisecond " . (($__global_Data_Show_showIntImpl)($m) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_showHour': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_Show_showIntImpl = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl'));
  $__case_0 = $v;
  if (true) {
$h = $__case_0;
$__res = ("(Hour " . (($__global_Data_Show_showIntImpl)($h) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_ordSecond': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Time_Component_ordMinute': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Time_Component_ordMillisecond': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Time_Component_ordHour': $v = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt')); break;
      case 'Data_Time_Component_eqSecond': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Time_Component_eqMinute': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Time_Component_eqMillisecond': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Time_Component_eqHour': $v = ($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt')); break;
      case 'Data_Time_Component_boundedSecond': $v = (object)["bottom" => 0, "top" => 59, "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_boundedMinute': $v = (object)["bottom" => 0, "top" => 59, "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_boundedMillisecond': $v = (object)["bottom" => 0, "top" => 999, "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_boundedHour': $v = (object)["bottom" => 0, "top" => 23, "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_boundedEnumSecond': $v = (object)["cardinality" => 60, "toEnum" => function($n) {
  $__num = func_num_args();
  $__case_0 = $n;
  if (true) {
$n1 = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$n = $__case_0;
$__res = $n;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bounded0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Time_Component_boundedSecond = ($GLOBALS['Data_Time_Component_boundedSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedSecond'));
  $__res = $__global_Data_Time_Component_boundedSecond;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Enum1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Time_Component_enumSecond = ($GLOBALS['Data_Time_Component_enumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_enumSecond'));
  $__res = $__global_Data_Time_Component_enumSecond;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_enumSecond': $v = (object)["succ" => (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))((($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond')))->toEnum, (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v + 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond')))->fromEnum)), "pred" => (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))((($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond')))->toEnum, (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v - 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Time_Component_boundedEnumSecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumSecond')))->fromEnum)), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_boundedEnumMinute': $v = (object)["cardinality" => 60, "toEnum" => function($n) {
  $__num = func_num_args();
  $__case_0 = $n;
  if (true) {
$n1 = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$n = $__case_0;
$__res = $n;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bounded0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Time_Component_boundedMinute = ($GLOBALS['Data_Time_Component_boundedMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMinute'));
  $__res = $__global_Data_Time_Component_boundedMinute;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Enum1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Time_Component_enumMinute = ($GLOBALS['Data_Time_Component_enumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_enumMinute'));
  $__res = $__global_Data_Time_Component_enumMinute;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_enumMinute': $v = (object)["succ" => (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))((($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute')))->toEnum, (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v + 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute')))->fromEnum)), "pred" => (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))((($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute')))->toEnum, (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v - 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Time_Component_boundedEnumMinute'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMinute')))->fromEnum)), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_boundedEnumMillisecond': $v = (object)["cardinality" => 1000, "toEnum" => function($n) {
  $__num = func_num_args();
  $__case_0 = $n;
  if (true) {
$n1 = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$n = $__case_0;
$__res = $n;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bounded0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Time_Component_boundedMillisecond = ($GLOBALS['Data_Time_Component_boundedMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedMillisecond'));
  $__res = $__global_Data_Time_Component_boundedMillisecond;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Enum1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Time_Component_enumMillisecond = ($GLOBALS['Data_Time_Component_enumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_enumMillisecond'));
  $__res = $__global_Data_Time_Component_enumMillisecond;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_enumMillisecond': $v = (object)["succ" => (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))((($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond')))->toEnum, (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v + 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond')))->fromEnum)), "pred" => (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))((($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond')))->toEnum, (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v - 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Time_Component_boundedEnumMillisecond'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumMillisecond')))->fromEnum)), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_boundedEnumHour': $v = (object)["cardinality" => 24, "toEnum" => function($n) {
  $__num = func_num_args();
  $__case_0 = $n;
  if (true) {
$n1 = $__case_0;
$__res = "/* Unsupported: Guards not supported */";
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "fromEnum" => function($v) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$n = $__case_0;
$__res = $n;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Bounded0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Time_Component_boundedHour = ($GLOBALS['Data_Time_Component_boundedHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedHour'));
  $__res = $__global_Data_Time_Component_boundedHour;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Enum1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Time_Component_enumHour = ($GLOBALS['Data_Time_Component_enumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_enumHour'));
  $__res = $__global_Data_Time_Component_enumHour;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Time_Component_enumHour': $v = (object)["succ" => (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))((($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour')))->toEnum, (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v + 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour')))->fromEnum)), "pred" => (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))((($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour')))->toEnum, (($GLOBALS['Data_Time_Component_compose'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_compose')))(function($v) {
  $__num = func_num_args();
  $__res = ($v - 1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, (($GLOBALS['Data_Time_Component_boundedEnumHour'] ?? \Data\Time\Component\phpurs_eval_thunk('Data_Time_Component_boundedEnumHour')))->fromEnum)), "Ord0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Ord_ordInt = ($GLOBALS['Data_Ord_ordInt'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordInt'));
  $__res = $__global_Data_Ord_ordInt;
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










// Data_Time_Component_Second
function Data_Time_Component_Second($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Component_Second';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Component_Second'] = __NAMESPACE__ . '\\Data_Time_Component_Second';

// Data_Time_Component_Minute
function Data_Time_Component_Minute($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Component_Minute';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Component_Minute'] = __NAMESPACE__ . '\\Data_Time_Component_Minute';

// Data_Time_Component_Millisecond
function Data_Time_Component_Millisecond($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Component_Millisecond';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Component_Millisecond'] = __NAMESPACE__ . '\\Data_Time_Component_Millisecond';

// Data_Time_Component_Hour
function Data_Time_Component_Hour($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Time_Component_Hour';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Time_Component_Hour'] = __NAMESPACE__ . '\\Data_Time_Component_Hour';

























