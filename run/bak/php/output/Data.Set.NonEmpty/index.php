<?php

namespace Data\Set\NonEmpty;

require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Array.NonEmpty.Internal/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function.Uncurried/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semigroup.Foldable/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Set.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unfoldable1/index.php';
require_once __DIR__ . '/../Partial.Unsafe/index.php';
require_once __DIR__ . '/../Prelude/index.php';
require_once __DIR__ . '/../Safe.Coerce/index.php';

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
      case 'Data_Set_NonEmpty_coerce': $v = \Safe\Coerce\Safe_Coerce_coerce(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Set_NonEmpty_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Set_NonEmpty_map1': $v = (($GLOBALS['Data_Tuple_functorTuple'] ?? \Data\Tuple\phpurs_eval_thunk('Data_Tuple_functorTuple')))->map; break;
      case 'Data_Set_NonEmpty_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Set_NonEmpty_fromJust': $v = \Data\Maybe\Data_Maybe_fromJust(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Set_NonEmpty_foldMap1': $v = (($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList')))->foldMap1; break;
      case 'Data_Set_NonEmpty_foldr1': $v = (($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList')))->foldr1; break;
      case 'Data_Set_NonEmpty_foldl1': $v = (($GLOBALS['Data_List_Types_foldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldable1NonEmptyList')))->foldl1; break;
      case 'Data_Set_NonEmpty_toUnfoldable11': $v = \Data\Set\NonEmpty\Data_Set_NonEmpty_toUnfoldable1(($GLOBALS['Data_Unfoldable1_unfoldable1Array'] ?? \Data\Unfoldable1\phpurs_eval_thunk('Data_Unfoldable1_unfoldable1Array'))); break;
      case 'Data_Set_NonEmpty_toUnfoldable12': $v = \Data\Set\NonEmpty\Data_Set_NonEmpty_toUnfoldable1(($GLOBALS['Data_List_Types_unfoldable1NonEmptyList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_unfoldable1NonEmptyList'))); break;
      case 'Data_Set_NonEmpty_size': $v = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))(($GLOBALS['Data_Set_size'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_size'))); break;
      case 'Data_Set_NonEmpty_singleton': $v = (($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce')))("\\Data\\Set\\Data_Set_singleton"); break;
      case 'Data_Set_NonEmpty_ord1NonEmptySet': $v = ($GLOBALS['Data_Set_ord1Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_ord1Set')); break;
      case 'Data_Set_NonEmpty_foldableNonEmptySet': $v = ($GLOBALS['Data_Set_foldableSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldableSet')); break;
      case 'Data_Set_NonEmpty_foldable1NonEmptySet': $v = (object)["foldMap1" => function($dictSemigroup) {
  $__num = func_num_args();
  $__global_Data_Set_NonEmpty_foldMap1 = ($GLOBALS['Data_Set_NonEmpty_foldMap1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldMap1'));
  $__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
  $__global_Data_Set_NonEmpty_toUnfoldable12 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable12'));
  $foldMap11 = ($__global_Data_Set_NonEmpty_foldMap1)($dictSemigroup);
  $__res = function($f) use ($__global_Data_Set_NonEmpty_compose, $foldMap11, $__global_Data_Set_NonEmpty_toUnfoldable12) {
  $__num = func_num_args();
  $__res = ($__global_Data_Set_NonEmpty_compose)(($foldMap11)($f), $__global_Data_Set_NonEmpty_toUnfoldable12);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldr1" => function($f) {
  $__num = func_num_args();
  $__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
  $__global_Data_Set_NonEmpty_foldr1 = ($GLOBALS['Data_Set_NonEmpty_foldr1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldr1'));
  $__global_Data_Set_NonEmpty_toUnfoldable12 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable12'));
  $__res = ($__global_Data_Set_NonEmpty_compose)(($__global_Data_Set_NonEmpty_foldr1)($f), $__global_Data_Set_NonEmpty_toUnfoldable12);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldl1" => function($f) {
  $__num = func_num_args();
  $__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
  $__global_Data_Set_NonEmpty_foldl1 = ($GLOBALS['Data_Set_NonEmpty_foldl1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_foldl1'));
  $__global_Data_Set_NonEmpty_toUnfoldable12 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable12'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable12'));
  $__res = ($__global_Data_Set_NonEmpty_compose)(($__global_Data_Set_NonEmpty_foldl1)($f), $__global_Data_Set_NonEmpty_toUnfoldable12);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Foldable0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Set_foldableSet = ($GLOBALS['Data_Set_foldableSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldableSet'));
  $__res = $__global_Data_Set_foldableSet;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Set_NonEmpty_eq1NonEmptySet': $v = ($GLOBALS['Data_Set_eq1Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eq1Set')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };










// Data_Set_NonEmpty_NonEmptySet
function Data_Set_NonEmpty_NonEmptySet($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_NonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_NonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_NonEmptySet';

// Data_Set_NonEmpty_unionSet
function Data_Set_NonEmpty_unionSet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_unionSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_semigroupSet = ($GLOBALS['Data_Set_semigroupSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_semigroupSet'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)((($__global_Data_Set_semigroupSet)($dictOrd))->append);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_unionSet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_unionSet';

// Data_Set_NonEmpty_toUnfoldable1
function Data_Set_NonEmpty_toUnfoldable1($dictUnfoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_toUnfoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_stepAscCps = ($GLOBALS['Data_Map_Internal_stepAscCps'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_stepAscCps'));
  $__global_Data_Function_Uncurried_mkFn3 = ($GLOBALS['Data_Function_Uncurried_mkFn3'] ?? \Data\Function\Uncurried\phpurs_eval_thunk('Data_Function_Uncurried_mkFn3'));
  $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
  $__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
  $__global_Data_Set_NonEmpty_map1 = ($GLOBALS['Data_Set_NonEmpty_map1'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_map1'));
  $__global_Data_Map_Internal_toMapIter = ($GLOBALS['Data_Map_Internal_toMapIter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_toMapIter'));
  $__global_Data_Set_toMap = ($GLOBALS['Data_Set_toMap'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toMap'));
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $stepNext = ($__global_Data_Map_Internal_stepAscCps)(($__global_Data_Function_Uncurried_mkFn3)((function() use (&$__fn) {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data1("Just", new Phpurs_Data2("Tuple", $k, $next));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), function($v) {
  $__num = func_num_args();
  $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  $stepHead = ($__global_Data_Map_Internal_stepAscCps)(($__global_Data_Function_Uncurried_mkFn3)((function() use (&$__fn) {
  $__fn = function($k, $v = null, $next = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
    if ($__num === 1) return function($v, $next = null) use ($k, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($k, $v, $next);
      if ($__num2 === 1) return function($next) use ($k, $v, &$__fn) { return $__fn($k, $v, $next); };
      return phpurs_curry_fallback($__fn, [$k], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Tuple", $k, $next);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), function($v) use ($__global_Partial_Unsafe_unsafeCrashWith) {
  $__num = func_num_args();
  $__res = ($__global_Partial_Unsafe_unsafeCrashWith)("toUnfoldable1: impossible");
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  $__res = ($__global_Data_Set_NonEmpty_compose)((($dictUnfoldable1)->unfoldr1)(function($v) use ($__global_Data_Set_NonEmpty_map1, $stepNext) {
  $__num = func_num_args();
  $__res = ($__global_Data_Set_NonEmpty_map1)($stepNext, $v);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), ($__global_Data_Set_NonEmpty_compose)($stepHead, ($__global_Data_Set_NonEmpty_compose)($__global_Data_Map_Internal_toMapIter, ($__global_Data_Set_NonEmpty_compose)($__global_Data_Set_toMap, $__global_Data_Set_NonEmpty_coerce))));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_toUnfoldable1'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_toUnfoldable1';



// Data_Set_NonEmpty_toUnfoldable
function Data_Set_NonEmpty_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_toUnfoldable = ($GLOBALS['Data_Set_toUnfoldable'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toUnfoldable'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_toUnfoldable)($dictUnfoldable));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_toUnfoldable'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_toUnfoldable';

// Data_Set_NonEmpty_toSet
function Data_Set_NonEmpty_toSet($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_toSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = $s;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_toSet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_toSet';

// Data_Set_NonEmpty_subset
function Data_Set_NonEmpty_subset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_subset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_subset = ($GLOBALS['Data_Set_subset'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_subset'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_subset)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_subset'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_subset';



// Data_Set_NonEmpty_showNonEmptySet
function Data_Set_NonEmpty_showNonEmptySet($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_showNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Array_NonEmpty_Internal_showNonEmptyArray = ($GLOBALS['Data_Array_NonEmpty_Internal_showNonEmptyArray'] ?? \Data\Array\NonEmpty\Internal\phpurs_eval_thunk('Data_Array_NonEmpty_Internal_showNonEmptyArray'));
  $__global_Data_Set_NonEmpty_toUnfoldable11 = ($GLOBALS['Data_Set_NonEmpty_toUnfoldable11'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_toUnfoldable11'));
  $show = (($__global_Data_Array_NonEmpty_Internal_showNonEmptyArray)($dictShow))->show;
  $__res = (object)["show" => function($s) use ($show, $__global_Data_Set_NonEmpty_toUnfoldable11) {
  $__num = func_num_args();
  $__res = ("(fromFoldable1 " . (($show)(($__global_Data_Set_NonEmpty_toUnfoldable11)($s)) . ")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_showNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_showNonEmptySet';

// Data_Set_NonEmpty_semigroupNonEmptySet
function Data_Set_NonEmpty_semigroupNonEmptySet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_semigroupNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_semigroupSet = ($GLOBALS['Data_Set_semigroupSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_semigroupSet'));
  $__res = ($__global_Data_Set_semigroupSet)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_semigroupNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_semigroupNonEmptySet';

// Data_Set_NonEmpty_properSubset
function Data_Set_NonEmpty_properSubset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_properSubset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_properSubset = ($GLOBALS['Data_Set_properSubset'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_properSubset'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_properSubset)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_properSubset'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_properSubset';

// Data_Set_NonEmpty_ordNonEmptySet
function Data_Set_NonEmpty_ordNonEmptySet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_ordNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_ordSet = ($GLOBALS['Data_Set_ordSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_ordSet'));
  $__res = ($__global_Data_Set_ordSet)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_ordNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_ordNonEmptySet';


// Data_Set_NonEmpty_min
function Data_Set_NonEmpty_min($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_min';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Data_Set_NonEmpty_fromJust = ($GLOBALS['Data_Set_NonEmpty_fromJust'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromJust'));
  $__global_Data_Set_findMin = ($GLOBALS['Data_Set_findMin'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_findMin'));
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = ($__global_Partial_Unsafe__unsafePartial)(function($__dollar____unused) use ($__global_Data_Set_NonEmpty_fromJust, $__global_Data_Set_findMin, $s) {
  $__num = func_num_args();
  $__res = ($__global_Data_Set_NonEmpty_fromJust)(($__global_Data_Set_findMin)($s));
  goto __end;;
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
$GLOBALS['Data_Set_NonEmpty_min'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_min';

// Data_Set_NonEmpty_member
function Data_Set_NonEmpty_member($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_member';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_member = ($GLOBALS['Data_Set_member'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_member'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_member)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_member'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_member';

// Data_Set_NonEmpty_max
function Data_Set_NonEmpty_max($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_max';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Partial_Unsafe__unsafePartial = ($GLOBALS['Partial_Unsafe__unsafePartial'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe__unsafePartial'));
  $__global_Data_Set_NonEmpty_fromJust = ($GLOBALS['Data_Set_NonEmpty_fromJust'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromJust'));
  $__global_Data_Set_findMax = ($GLOBALS['Data_Set_findMax'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_findMax'));
  $__case_0 = $v;
  if (true) {
$s = $__case_0;
$__res = ($__global_Partial_Unsafe__unsafePartial)(function($__dollar____unused) use ($__global_Data_Set_NonEmpty_fromJust, $__global_Data_Set_findMax, $s) {
  $__num = func_num_args();
  $__res = ($__global_Data_Set_NonEmpty_fromJust)(($__global_Data_Set_findMax)($s));
  goto __end;;
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
$GLOBALS['Data_Set_NonEmpty_max'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_max';

// Data_Set_NonEmpty_mapMaybe
function Data_Set_NonEmpty_mapMaybe($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_mapMaybe = ($GLOBALS['Data_Set_mapMaybe'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_mapMaybe'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_mapMaybe)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_mapMaybe'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_mapMaybe';

// Data_Set_NonEmpty_map
function Data_Set_NonEmpty_map($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_map = ($GLOBALS['Data_Set_map'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_map'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_map)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_map'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_map';

// Data_Set_NonEmpty_insert
function Data_Set_NonEmpty_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_insert = ($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_insert)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_insert'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_insert';

// Data_Set_NonEmpty_fromSet
function Data_Set_NonEmpty_fromSet($s) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_fromSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_isEmpty = ($GLOBALS['Data_Set_isEmpty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_isEmpty'));
  $__case_0 = ($__global_Data_Set_isEmpty)($s);
  switch ($__case_0) {
case true:
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
default:
$__res = new Phpurs_Data1("Just", $s);
goto __end;;
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_fromSet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_fromSet';

// Data_Set_NonEmpty_intersection
function Data_Set_NonEmpty_intersection($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_intersection';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_intersection = ($GLOBALS['Data_Set_intersection'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_intersection'));
  $__global_Data_Set_NonEmpty_fromSet = ($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet'));
  $intersection1 = ($__global_Data_Set_intersection)($dictOrd);
  $__res = (function() use ($__global_Data_Set_NonEmpty_fromSet, $intersection1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_Set_NonEmpty_fromSet, $intersection1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
$__res = ($__global_Data_Set_NonEmpty_fromSet)(($intersection1)($s1, $s2));
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
$GLOBALS['Data_Set_NonEmpty_intersection'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_intersection';

// Data_Set_NonEmpty_fromFoldable1
function Data_Set_NonEmpty_fromFoldable1($dictFoldable1) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_fromFoldable1';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_semigroupNonEmptySet = ($GLOBALS['Data_Set_NonEmpty_semigroupNonEmptySet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_semigroupNonEmptySet'));
  $__global_Data_Set_NonEmpty_singleton = ($GLOBALS['Data_Set_NonEmpty_singleton'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_singleton'));
  $foldMap11 = ($dictFoldable1)->foldMap1;
  $__res = function($dictOrd) use ($foldMap11, $__global_Data_Set_NonEmpty_semigroupNonEmptySet, $__global_Data_Set_NonEmpty_singleton) {
  $__num = func_num_args();
  $__res = ($foldMap11)(($__global_Data_Set_NonEmpty_semigroupNonEmptySet)($dictOrd), $__global_Data_Set_NonEmpty_singleton);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_fromFoldable1'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_fromFoldable1';

// Data_Set_NonEmpty_fromFoldable
function Data_Set_NonEmpty_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_fromFoldable = ($GLOBALS['Data_Set_fromFoldable'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_fromFoldable'));
  $__global_Data_Set_NonEmpty_compose = ($GLOBALS['Data_Set_NonEmpty_compose'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_compose'));
  $__global_Data_Set_NonEmpty_fromSet = ($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet'));
  $fromFoldable2 = ($__global_Data_Set_fromFoldable)($dictFoldable);
  $__res = function($dictOrd) use ($__global_Data_Set_NonEmpty_compose, $__global_Data_Set_NonEmpty_fromSet, $fromFoldable2) {
  $__num = func_num_args();
  $__res = ($__global_Data_Set_NonEmpty_compose)($__global_Data_Set_NonEmpty_fromSet, ($fromFoldable2)($dictOrd));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_fromFoldable'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_fromFoldable';



// Data_Set_NonEmpty_filter
function Data_Set_NonEmpty_filter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_filter = ($GLOBALS['Data_Set_filter'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_filter'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_filter)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_filter'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_filter';

// Data_Set_NonEmpty_eqNonEmptySet
function Data_Set_NonEmpty_eqNonEmptySet($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_eqNonEmptySet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_eqSet = ($GLOBALS['Data_Set_eqSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eqSet'));
  $__res = ($__global_Data_Set_eqSet)($dictEq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_eqNonEmptySet'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_eqNonEmptySet';


// Data_Set_NonEmpty_difference
function Data_Set_NonEmpty_difference($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_difference = ($GLOBALS['Data_Set_difference'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_difference'));
  $__global_Data_Set_NonEmpty_fromSet = ($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet'));
  $difference1 = ($__global_Data_Set_difference)($dictOrd);
  $__res = (function() use ($__global_Data_Set_NonEmpty_fromSet, $difference1, &$__fn) {
  $__fn = function($v, $v1 = null) use ($__global_Data_Set_NonEmpty_fromSet, $difference1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$s1 = $__case_0;
$s2 = $__case_1;
$__res = ($__global_Data_Set_NonEmpty_fromSet)(($difference1)($s1, $s2));
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
$GLOBALS['Data_Set_NonEmpty_difference'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_difference';

// Data_Set_NonEmpty_delete
function Data_Set_NonEmpty_delete($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_delete = ($GLOBALS['Data_Set_delete'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_delete'));
  $__global_Data_Set_NonEmpty_fromSet = ($GLOBALS['Data_Set_NonEmpty_fromSet'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_fromSet'));
  $delete1 = ($__global_Data_Set_delete)($dictOrd);
  $__res = (function() use ($__global_Data_Set_NonEmpty_fromSet, $delete1, &$__fn) {
  $__fn = function($a, $v = null) use ($__global_Data_Set_NonEmpty_fromSet, $delete1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $a;
  $__case_1 = $v;
  if (true) {
$a1 = $__case_0;
$s = $__case_1;
$__res = ($__global_Data_Set_NonEmpty_fromSet)(($delete1)($a1, $s));
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
$GLOBALS['Data_Set_NonEmpty_delete'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_delete';

// Data_Set_NonEmpty_cons
function Data_Set_NonEmpty_cons($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_NonEmpty_cons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_NonEmpty_coerce = ($GLOBALS['Data_Set_NonEmpty_coerce'] ?? \Data\Set\NonEmpty\phpurs_eval_thunk('Data_Set_NonEmpty_coerce'));
  $__global_Data_Set_insert = ($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert'));
  $__res = ($__global_Data_Set_NonEmpty_coerce)(($__global_Data_Set_insert)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_NonEmpty_cons'] = __NAMESPACE__ . '\\Data_Set_NonEmpty_cons';

