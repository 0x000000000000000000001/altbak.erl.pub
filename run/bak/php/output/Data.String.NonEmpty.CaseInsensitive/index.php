<?php

namespace Data\String\NonEmpty\CaseInsensitive;

require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.String.NonEmpty/index.php';
require_once __DIR__ . '/../Data.String.NonEmpty.CaseInsensitive/index.php';
require_once __DIR__ . '/../Data.String.NonEmpty.Internal/index.php';
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
      case 'Data_String_NonEmpty_CaseInsensitive_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_String_NonEmpty_CaseInsensitive_show': $v = (($GLOBALS['Data_String_NonEmpty_Internal_showNonEmptyString'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_showNonEmptyString')))->show; break;
      case 'Data_String_NonEmpty_CaseInsensitive_eq': $v = ($GLOBALS['Data_Eq_eqStringImpl'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqStringImpl')); break;
      case 'Data_String_NonEmpty_CaseInsensitive_compare': $v = (($GLOBALS['Data_Ord_ordString'] ?? \Data\Ord\phpurs_eval_thunk('Data_Ord_ordString')))->compare; break;
      case 'Data_String_NonEmpty_CaseInsensitive_showCaseInsensitiveNonEmptyString': $v = (object)["show" => function($v) {
  $__num = func_num_args();
  $__global_Data_String_NonEmpty_CaseInsensitive_show = ($GLOBALS['Data_String_NonEmpty_CaseInsensitive_show'] ?? \Data\String\NonEmpty\CaseInsensitive\phpurs_eval_thunk('Data_String_NonEmpty_CaseInsensitive_show'));
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = ("(CaseInsensitiveNonEmptyString " . (($__global_Data_String_NonEmpty_CaseInsensitive_show)($s) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_String_NonEmpty_CaseInsensitive_newtypeCaseInsensitiveNonEmptyString': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_String_NonEmpty_CaseInsensitive_eqCaseInsensitiveNonEmptyString': $v = (object)["eq" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_NonEmpty_Internal_toLower = ($GLOBALS['Data_String_NonEmpty_Internal_toLower'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_toLower'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
$__res = (($__global_Data_String_NonEmpty_Internal_toLower)($s1) === ($__global_Data_String_NonEmpty_Internal_toLower)($s2));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_String_NonEmpty_CaseInsensitive_ordCaseInsensitiveNonEmptyString': $v = (object)["compare" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_String_NonEmpty_CaseInsensitive_compare = ($GLOBALS['Data_String_NonEmpty_CaseInsensitive_compare'] ?? \Data\String\NonEmpty\CaseInsensitive\phpurs_eval_thunk('Data_String_NonEmpty_CaseInsensitive_compare'));
  $__global_Data_String_NonEmpty_Internal_toLower = ($GLOBALS['Data_String_NonEmpty_Internal_toLower'] ?? \Data\String\NonEmpty\Internal\phpurs_eval_thunk('Data_String_NonEmpty_Internal_toLower'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
$__res = ($__global_Data_String_NonEmpty_CaseInsensitive_compare)(($__global_Data_String_NonEmpty_Internal_toLower)($s1), ($__global_Data_String_NonEmpty_Internal_toLower)($s2));
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
  $__global_Data_String_NonEmpty_CaseInsensitive_eqCaseInsensitiveNonEmptyString = ($GLOBALS['Data_String_NonEmpty_CaseInsensitive_eqCaseInsensitiveNonEmptyString'] ?? \Data\String\NonEmpty\CaseInsensitive\phpurs_eval_thunk('Data_String_NonEmpty_CaseInsensitive_eqCaseInsensitiveNonEmptyString'));
  $__res = $__global_Data_String_NonEmpty_CaseInsensitive_eqCaseInsensitiveNonEmptyString;
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






// Data_String_NonEmpty_CaseInsensitive_CaseInsensitiveNonEmptyString
function Data_String_NonEmpty_CaseInsensitive_CaseInsensitiveNonEmptyString($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_String_NonEmpty_CaseInsensitive_CaseInsensitiveNonEmptyString';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_String_NonEmpty_CaseInsensitive_CaseInsensitiveNonEmptyString'] = __NAMESPACE__ . '\\Data_String_NonEmpty_CaseInsensitive_CaseInsensitiveNonEmptyString';





