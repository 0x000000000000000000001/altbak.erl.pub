<?php

namespace AppExt;

require_once __DIR__ . '/../App/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Test.AffOperations/index.php';
require_once __DIR__ . '/../Test.FileOps/index.php';
require_once __DIR__ . '/../Test.STArray/index.php';
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
      case 'AppExt_discard': $v = ((($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard)(($GLOBALS['Effect_bindEffect'] ?? \Effect\phpurs_eval_thunk('Effect_bindEffect'))); break;
      case 'AppExt_applySecond': $v = \Control\Apply\Control_Apply_applySecond(($GLOBALS['Effect_applyEffect'] ?? \Effect\phpurs_eval_thunk('Effect_applyEffect'))); break;
      case 'AppExt_pure': $v = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE')); break;
      case 'AppExt_main': $v = (($GLOBALS['AppExt_discard'] ?? \AppExt\phpurs_eval_thunk('AppExt_discard')))(($GLOBALS['App_main'] ?? \App\phpurs_eval_thunk('App_main')), function($__dollar____unused) {
  $__num = func_num_args();
  $__global_AppExt_discard = ($GLOBALS['AppExt_discard'] ?? \AppExt\phpurs_eval_thunk('AppExt_discard'));
  $__global_Test_FileOps_describe = ($GLOBALS['Test_FileOps_describe'] ?? \Test\FileOps\phpurs_eval_thunk('Test_FileOps_describe'));
  $__global_Test_FileOps_act = ($GLOBALS['Test_FileOps_act'] ?? \Test\FileOps\phpurs_eval_thunk('Test_FileOps_act'));
  $__global_Test_STArray_describe = ($GLOBALS['Test_STArray_describe'] ?? \Test\STArray\phpurs_eval_thunk('Test_STArray_describe'));
  $__global_Test_STArray_act = ($GLOBALS['Test_STArray_act'] ?? \Test\STArray\phpurs_eval_thunk('Test_STArray_act'));
  $__global_AppExt_applySecond = ($GLOBALS['AppExt_applySecond'] ?? \AppExt\phpurs_eval_thunk('AppExt_applySecond'));
  $__global_Test_StringOps_describe = ($GLOBALS['Test_StringOps_describe'] ?? \Test\StringOps\phpurs_eval_thunk('Test_StringOps_describe'));
  $__global_Test_AffOperations_describe = ($GLOBALS['Test_AffOperations_describe'] ?? \Test\AffOperations\phpurs_eval_thunk('Test_AffOperations_describe'));
  $__global_Test_StringOps_act = ($GLOBALS['Test_StringOps_act'] ?? \Test\StringOps\phpurs_eval_thunk('Test_StringOps_act'));
  $__global_Test_AffOperations_act = ($GLOBALS['Test_AffOperations_act'] ?? \Test\AffOperations\phpurs_eval_thunk('Test_AffOperations_act'));
  $__global_Effect_pureE = ($GLOBALS['Effect_pureE'] ?? \Effect\phpurs_eval_thunk('Effect_pureE'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_AppExt_discard)($__global_Test_FileOps_describe, function($__dollar____unused) use ($__global_AppExt_discard, $__global_Test_FileOps_act, $__global_Test_STArray_describe, $__global_Test_STArray_act, $__global_AppExt_applySecond, $__global_Test_StringOps_describe, $__global_Test_AffOperations_describe, $__global_Test_StringOps_act, $__global_Test_AffOperations_act, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($__global_AppExt_discard)($__global_Test_FileOps_act, function($__dollar____unused) use ($__global_AppExt_discard, $__global_Test_STArray_describe, $__global_Test_STArray_act, $__global_AppExt_applySecond, $__global_Test_StringOps_describe, $__global_Test_AffOperations_describe, $__global_Test_StringOps_act, $__global_Test_AffOperations_act, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($__global_AppExt_discard)($__global_Test_STArray_describe, function($__dollar____unused) use ($__global_AppExt_discard, $__global_Test_STArray_act, $__global_AppExt_applySecond, $__global_Test_StringOps_describe, $__global_Test_AffOperations_describe, $__global_Test_StringOps_act, $__global_Test_AffOperations_act, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($__global_AppExt_discard)($__global_Test_STArray_act, function($__dollar____unused) use ($__global_AppExt_discard, $__global_AppExt_applySecond, $__global_Test_StringOps_describe, $__global_Test_AffOperations_describe, $__global_Test_StringOps_act, $__global_Test_AffOperations_act, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($__global_AppExt_discard)(($__global_AppExt_applySecond)($__global_Test_StringOps_describe, $__global_Test_AffOperations_describe), function($__dollar____unused) use ($__global_AppExt_discard, $__global_AppExt_applySecond, $__global_Test_StringOps_act, $__global_Test_AffOperations_act, $__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($__global_AppExt_discard)(($__global_AppExt_applySecond)($__global_Test_StringOps_act, $__global_Test_AffOperations_act), function($__dollar____unused) use ($__global_Effect_pureE, $__global_Data_Unit_unit) {
  $__num = func_num_args();
  $__res = ($__global_Effect_pureE)($__global_Data_Unit_unit);
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






