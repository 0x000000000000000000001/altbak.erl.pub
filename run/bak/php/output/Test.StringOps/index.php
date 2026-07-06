<?php

namespace Test\StringOps;

require_once __DIR__ . '/../Data.Array/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.String.CodePoints/index.php';
require_once __DIR__ . '/../Data.String.Common/index.php';
require_once __DIR__ . '/../Data.String.Pattern/index.php';
require_once __DIR__ . '/../Data.String.Regex/index.php';
require_once __DIR__ . '/../Data.String.Regex.Flags/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Console/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Test.StringOps/index.php';

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
      case 'Test_StringOps_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Test_StringOps_show': $v = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl')); break;
      case 'Test_StringOps_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Test_StringOps_sub': $v = ($GLOBALS['Data_Ring_intSub'] ?? \Data\Ring\phpurs_eval_thunk('Data_Ring_intSub')); break;
      case 'Test_StringOps_regexPattern': $v = (($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial')))(function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_String_Regex_regex = ($GLOBALS['Data_String_Regex_regex'] ?? \Data\String\Regex\phpurs_eval_thunk('Data_String_Regex_regex'));
  $__global_Data_String_Regex_Flags_noFlags = ($GLOBALS['Data_String_Regex_Flags_noFlags'] ?? \Data\String\Regex\Flags\phpurs_eval_thunk('Data_String_Regex_Flags_noFlags'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = (function($__dollar____unused) use ($__global_Data_String_Regex_regex, $__global_Data_String_Regex_Flags_noFlags) {
  $__num = func_num_args();
  $v = ($__global_Data_String_Regex_regex)("(hello|world)[0-9]+", $__global_Data_String_Regex_Flags_noFlags);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Right":
$r = ($__case_0)->v0;
$__res = $r;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
})($__global_Prim_undefined);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}); break;
      case 'Test_StringOps_describe': $v = (($GLOBALS['Effect_Console_log'] ?? \Effect\Console\phpurs_eval_thunk('Effect_Console_log')))("String Operations (1k Regex/Split):"); break;
      case 'Test_StringOps_act': $v = \Effect\Console\Effect_Console_logShow(($GLOBALS['Data_Show_showInt'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showInt')), \Test\StringOps\Test_StringOps_runStringOps(1000)); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };







// Test_StringOps_runStringOps
function Test_StringOps_runStringOps($n) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Test_StringOps_runStringOps';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Show_showIntImpl = ($GLOBALS['Data_Show_showIntImpl'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showIntImpl'));
  $__global_Data_String_Regex_replace = ($GLOBALS['Data_String_Regex_replace'] ?? \Data\String\Regex\phpurs_eval_thunk('Data_String_Regex_replace'));
  $__global_Test_StringOps_regexPattern = ($GLOBALS['Test_StringOps_regexPattern'] ?? \Test\StringOps\phpurs_eval_thunk('Test_StringOps_regexPattern'));
  $__global_Data_String_Common_split = ($GLOBALS['Data_String_Common_split'] ?? \Data\String\Common\phpurs_eval_thunk('Data_String_Common_split'));
  $__global_Data_String_CodePoints_take = ($GLOBALS['Data_String_CodePoints_take'] ?? \Data\String\CodePoints\phpurs_eval_thunk('Data_String_CodePoints_take'));
  $__global_Data_Array_length = ($GLOBALS['Data_Array_length'] ?? \Data\Array\phpurs_eval_thunk('Data_Array_length'));
  $loop = (function() use ($__global_Data_Show_showIntImpl, $__global_Data_String_Regex_replace, $__global_Test_StringOps_regexPattern, $__global_Data_String_Common_split, &$loop, $__global_Data_String_CodePoints_take, $__global_Data_Array_length, &$__fn) {
  $__fn = function($v, $v1 = null, $v2 = null) use ($__global_Data_Show_showIntImpl, $__global_Data_String_Regex_replace, $__global_Test_StringOps_regexPattern, $__global_Data_String_Common_split, &$loop, $__global_Data_String_CodePoints_take, $__global_Data_Array_length, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
    if ($__num === 1) return function($v1, $v2 = null) use ($v, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($v, $v1, $v2);
      if ($__num2 === 1) return function($v2) use ($v, $v1, &$__fn) { return $__fn($v, $v1, $v2); };
      return phpurs_curry_fallback($__fn, [$v], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  while (true) {
$__case_0 = $v;
$__case_1 = $v1;
$__case_2 = $v2;
switch ($__case_0) {
case 0:
$acc = $__case_2;
$__res = $acc;
goto __end;;
break;
default:
$i = $__case_0;
$s = $__case_1;
$acc = $__case_2;
$concatted = ($s . (($__global_Data_Show_showIntImpl)($i) . ("world" . ($__global_Data_Show_showIntImpl)(($i + 1)))));
$replaced = ($__global_Data_String_Regex_replace)($__global_Test_StringOps_regexPattern, "matched", $concatted);
$splitted = ($__global_Data_String_Common_split)("e", $replaced);
$__tco_tmp_0 = ($i - 1);
$__tco_tmp_1 = ($__global_Data_String_CodePoints_take)(10, $concatted);
$__tco_tmp_2 = ($acc + ($__global_Data_Array_length)($splitted));
$v = $__tco_tmp_0;
$v1 = $__tco_tmp_1;
$v2 = $__tco_tmp_2;
continue 2;
break;
};
};
  $__res = null;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  $__res = ($loop)($n, "hello", 0);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Test_StringOps_runStringOps'] = __NAMESPACE__ . '\\Test_StringOps_runStringOps';



