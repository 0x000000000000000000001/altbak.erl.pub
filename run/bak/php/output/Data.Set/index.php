<?php

namespace Data\Set;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.List/index.php';
require_once __DIR__ . '/../Data.List.Types/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
      case 'Data_Set_coerce': $v = \Safe\Coerce\Safe_Coerce_coerce(($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'))); break;
      case 'Data_Set_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Set_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_Set_foldMap': $v = (($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')))->foldMap; break;
      case 'Data_Set_foldl': $v = (($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')))->foldl; break;
      case 'Data_Set_foldr': $v = (($GLOBALS['Data_List_Types_foldableList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_foldableList')))->foldr; break;
      case 'Data_Set_map1': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_Set_conj': $v = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj')); break;
      case 'Data_Set_notEq': $v = \Data\Eq\Data_Eq_notEq(($GLOBALS['Data_Eq_eqInt'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqInt'))); break;
      case 'Data_Set_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Set_toUnfoldable1': $v = \Data\Set\Data_Set_toUnfoldable(($GLOBALS['Data_Unfoldable_unfoldableArray'] ?? \Data\Unfoldable\phpurs_eval_thunk('Data_Unfoldable_unfoldableArray'))); break;
      case 'Data_Set_size': $v = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))("\\Data\\Map\\Internal\\Data_Map_Internal_size"); break;
      case 'Data_Set_isEmpty': $v = (($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce')))("\\Data\\Map\\Internal\\Data_Map_Internal_isEmpty"); break;
      case 'Data_Set_fromMap': $v = "\\Data\\Set\\Data_Set_Set"; break;
      case 'Data_Set_foldableSet': $v = (object)["foldMap" => function($dictMonoid) {
  $__num = func_num_args();
  $__global_Data_Set_foldMap = ($GLOBALS['Data_Set_foldMap'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldMap'));
  $__global_Data_Set_compose = ($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose'));
  $__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
  $foldMap1 = ($__global_Data_Set_foldMap)($dictMonoid);
  $__res = function($f) use ($__global_Data_Set_compose, $foldMap1, $__global_Data_Set_toList) {
  $__num = func_num_args();
  $__res = ($__global_Data_Set_compose)(($foldMap1)($f), $__global_Data_Set_toList);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "foldl" => (function() use (&$__fn) {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Set_compose = ($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose'));
  $__global_Data_Set_foldl = ($GLOBALS['Data_Set_foldl'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldl'));
  $__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
  $__res = ($__global_Data_Set_compose)(($__global_Data_Set_foldl)($f, $x), $__global_Data_Set_toList);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "foldr" => (function() use (&$__fn) {
  $__fn = function($f, $x = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, &$__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Set_compose = ($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose'));
  $__global_Data_Set_foldr = ($GLOBALS['Data_Set_foldr'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldr'));
  $__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
  $__res = ($__global_Data_Set_compose)(($__global_Data_Set_foldr)($f, $x), $__global_Data_Set_toList);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Set_foldl1': $v = (($GLOBALS['Data_Set_foldableSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldableSet')))->foldl; break;
      case 'Data_Set_foldr1': $v = (($GLOBALS['Data_Set_foldableSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldableSet')))->foldr; break;
      case 'Data_Set_eq1Set': $v = (object)["eq1" => function($dictEq) {
  $__num = func_num_args();
  $__global_Data_Set_eqSet = ($GLOBALS['Data_Set_eqSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eqSet'));
  $__res = (($__global_Data_Set_eqSet)($dictEq))->eq;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Set_ord1Set': $v = (object)["compare1" => function($dictOrd) {
  $__num = func_num_args();
  $__global_Data_Set_ordSet = ($GLOBALS['Data_Set_ordSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_ordSet'));
  $__res = (($__global_Data_Set_ordSet)($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Eq10" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Set_eq1Set = ($GLOBALS['Data_Set_eq1Set'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eq1Set'));
  $__res = $__global_Data_Set_eq1Set;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Set_empty': $v = ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };












// Data_Set_Set
function Data_Set_Set($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_Set';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_Set'] = __NAMESPACE__ . '\\Data_Set_Set';

// Data_Set_union
function Data_Set_union($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_union';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
  $__global_Data_Map_Internal_union = ($GLOBALS['Data_Map_Internal_union'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_union'));
  $__res = ($__global_Data_Set_coerce)(($__global_Data_Map_Internal_union)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_union'] = __NAMESPACE__ . '\\Data_Set_union';

// Data_Set_toggle
function Data_Set_toggle($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_toggle';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_alter = ($GLOBALS['Data_Map_Internal_alter'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_alter'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $alter = ($__global_Data_Map_Internal_alter)($dictOrd);
  $__res = (function() use ($alter, $__global_Data_Maybe_maybe, $__global_Data_Unit_unit, &$__fn) {
  $__fn = function($a, $v = null) use ($alter, $__global_Data_Maybe_maybe, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $a;
  $__case_1 = $v;
  if (true) {
$a1 = $__case_0;
$m = $__case_1;
$__res = ($alter)(($__global_Data_Maybe_maybe)(new Phpurs_Data1("Just", $__global_Data_Unit_unit), function($v1) {
  $__num = func_num_args();
  $__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $a1, $m);
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
$GLOBALS['Data_Set_toggle'] = __NAMESPACE__ . '\\Data_Set_toggle';

// Data_Set_toMap
function Data_Set_toMap($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_toMap';
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
$GLOBALS['Data_Set_toMap'] = __NAMESPACE__ . '\\Data_Set_toMap';

// Data_Set_toList
function Data_Set_toList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_toList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_keys = ($GLOBALS['Data_Map_Internal_keys'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_keys'));
  $__case_0 = $v;
  if (true) {
$m = $__case_0;
$__res = ($__global_Data_Map_Internal_keys)($m);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_toList'] = __NAMESPACE__ . '\\Data_Set_toList';

// Data_Set_toUnfoldable
function Data_Set_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_compose = ($GLOBALS['Data_Set_compose'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_compose'));
  $__global_Data_List_toUnfoldable = ($GLOBALS['Data_List_toUnfoldable'] ?? \Data\List\phpurs_eval_thunk('Data_List_toUnfoldable'));
  $__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
  $__res = ($__global_Data_Set_compose)(($__global_Data_List_toUnfoldable)($dictUnfoldable), $__global_Data_Set_toList);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_toUnfoldable'] = __NAMESPACE__ . '\\Data_Set_toUnfoldable';



// Data_Set_singleton
function Data_Set_singleton($a) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_singleton';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_singleton = ($GLOBALS['Data_Map_Internal_singleton'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_singleton'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__res = ($__global_Data_Map_Internal_singleton)($a, $__global_Data_Unit_unit);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_singleton'] = __NAMESPACE__ . '\\Data_Set_singleton';

// Data_Set_showSet
function Data_Set_showSet($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_showSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Show_showArray = ($GLOBALS['Data_Show_showArray'] ?? \Data\Show\phpurs_eval_thunk('Data_Show_showArray'));
  $__global_Data_Set_toUnfoldable1 = ($GLOBALS['Data_Set_toUnfoldable1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toUnfoldable1'));
  $show = (($__global_Data_Show_showArray)($dictShow))->show;
  $__res = (object)["show" => function($s) use ($show, $__global_Data_Set_toUnfoldable1) {
  $__num = func_num_args();
  $__res = ("(fromFoldable " . (($show)(($__global_Data_Set_toUnfoldable1)($s)) . ")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_showSet'] = __NAMESPACE__ . '\\Data_Set_showSet';

// Data_Set_semigroupSet
function Data_Set_semigroupSet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_semigroupSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_union = ($GLOBALS['Data_Set_union'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_union'));
  $__res = (object)["append" => ($__global_Data_Set_union)($dictOrd)];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_semigroupSet'] = __NAMESPACE__ . '\\Data_Set_semigroupSet';

// Data_Set_member
function Data_Set_member($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_member';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
  $__global_Data_Map_Internal_member = ($GLOBALS['Data_Map_Internal_member'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_member'));
  $__res = ($__global_Data_Set_coerce)(($__global_Data_Map_Internal_member)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_member'] = __NAMESPACE__ . '\\Data_Set_member';


// Data_Set_intersection
function Data_Set_intersection($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_intersection';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
  $__global_Data_Map_Internal_intersection = ($GLOBALS['Data_Map_Internal_intersection'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_intersection'));
  $__res = ($__global_Data_Set_coerce)(($__global_Data_Map_Internal_intersection)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_intersection'] = __NAMESPACE__ . '\\Data_Set_intersection';

// Data_Set_insert
function Data_Set_insert($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_insert';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_insert = ($GLOBALS['Data_Map_Internal_insert'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_insert'));
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $insert1 = ($__global_Data_Map_Internal_insert)($dictOrd);
  $__res = (function() use ($insert1, $__global_Data_Unit_unit, &$__fn) {
  $__fn = function($a, $v = null) use ($insert1, $__global_Data_Unit_unit, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($a, &$__fn) { return $__fn($a, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $a;
  $__case_1 = $v;
  if (true) {
$a1 = $__case_0;
$m = $__case_1;
$__res = ($insert1)($a1, $__global_Data_Unit_unit, $m);
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
$GLOBALS['Data_Set_insert'] = __NAMESPACE__ . '\\Data_Set_insert';





// Data_Set_findMin
function Data_Set_findMin($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_findMin';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_map1 = ($GLOBALS['Data_Set_map1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_map1'));
  $__global_Data_Map_Internal_findMin = ($GLOBALS['Data_Map_Internal_findMin'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMin'));
  $__case_0 = $v;
  if (true) {
$m = $__case_0;
$__res = ($__global_Data_Set_map1)(function($v1) {
  $__num = func_num_args();
  $__res = ($v1)->key;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_Map_Internal_findMin)($m));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_findMin'] = __NAMESPACE__ . '\\Data_Set_findMin';

// Data_Set_findMax
function Data_Set_findMax($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_findMax';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_map1 = ($GLOBALS['Data_Set_map1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_map1'));
  $__global_Data_Map_Internal_findMax = ($GLOBALS['Data_Map_Internal_findMax'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_findMax'));
  $__case_0 = $v;
  if (true) {
$m = $__case_0;
$__res = ($__global_Data_Set_map1)(function($v1) {
  $__num = func_num_args();
  $__res = ($v1)->key;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_Map_Internal_findMax)($m));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_findMax'] = __NAMESPACE__ . '\\Data_Set_findMax';

// Data_Set_filter
function Data_Set_filter($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_filter';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
  $__global_Data_Map_Internal_filterKeys = ($GLOBALS['Data_Map_Internal_filterKeys'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_filterKeys'));
  $__res = ($__global_Data_Set_coerce)(($__global_Data_Map_Internal_filterKeys)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_filter'] = __NAMESPACE__ . '\\Data_Set_filter';

// Data_Set_eqSet
function Data_Set_eqSet($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_eqSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_eqMap = ($GLOBALS['Data_Map_Internal_eqMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eqMap'));
  $__global_Data_Eq_eqUnit = ($GLOBALS['Data_Eq_eqUnit'] ?? \Data\Eq\phpurs_eval_thunk('Data_Eq_eqUnit'));
  $eq = (($__global_Data_Map_Internal_eqMap)($dictEq, $__global_Data_Eq_eqUnit))->eq;
  $__res = (object)["eq" => (function() use ($eq, &$__fn) {
  $__fn = function($v, $v1 = null) use ($eq, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$m1 = $__case_0;
$m2 = $__case_1;
$__res = ($eq)($m1, $m2);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_eqSet'] = __NAMESPACE__ . '\\Data_Set_eqSet';

// Data_Set_ordSet
function Data_Set_ordSet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_ordSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Types_ordList = ($GLOBALS['Data_List_Types_ordList'] ?? \Data\List\Types\phpurs_eval_thunk('Data_List_Types_ordList'));
  $__global_Data_Set_eqSet = ($GLOBALS['Data_Set_eqSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_eqSet'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Set_toList = ($GLOBALS['Data_Set_toList'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_toList'));
  $compare = (($__global_Data_List_Types_ordList)($dictOrd))->compare;
  $eqSet1 = ($__global_Data_Set_eqSet)((($dictOrd)->Eq0)($__global_Prim_undefined));
  $__res = (object)["compare" => (function() use ($compare, $__global_Data_Set_toList, &$__fn) {
  $__fn = function($s1, $s2 = null) use ($compare, $__global_Data_Set_toList, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($compare)(($__global_Data_Set_toList)($s1), ($__global_Data_Set_toList)($s2));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($__dollar____unused) use ($eqSet1) {
  $__num = func_num_args();
  $__res = $eqSet1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_ordSet'] = __NAMESPACE__ . '\\Data_Set_ordSet';




// Data_Set_fromFoldable
function Data_Set_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_insert = ($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert'));
  $foldl2 = ($dictFoldable)->foldl;
  $__res = function($dictOrd) use ($__global_Data_Set_insert, $foldl2) {
  $__num = func_num_args();
  $insert1 = ($__global_Data_Set_insert)($dictOrd);
  $__res = ($foldl2)((function() use ($insert1, &$__fn) {
  $__fn = function($m, $a = null) use ($insert1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($insert1)($a, $m);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_fromFoldable'] = __NAMESPACE__ . '\\Data_Set_fromFoldable';

// Data_Set_map
function Data_Set_map($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_map';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_insert = ($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert'));
  $__global_Data_Set_foldl1 = ($GLOBALS['Data_Set_foldl1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldl1'));
  $insert1 = ($__global_Data_Set_insert)($dictOrd);
  $__res = function($f) use ($__global_Data_Set_foldl1, $insert1) {
  $__num = func_num_args();
  $__res = ($__global_Data_Set_foldl1)((function() use ($insert1, $f, &$__fn) {
  $__fn = function($m, $a = null) use ($insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($a) use ($m, &$__fn) { return $__fn($m, $a); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($insert1)(($f)($a), $m);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_map'] = __NAMESPACE__ . '\\Data_Set_map';

// Data_Set_mapMaybe
function Data_Set_mapMaybe($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_mapMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_insert = ($GLOBALS['Data_Set_insert'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_insert'));
  $__global_Data_Set_foldr1 = ($GLOBALS['Data_Set_foldr1'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_foldr1'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $insert1 = ($__global_Data_Set_insert)($dictOrd);
  $__res = function($f) use ($__global_Data_Set_foldr1, $__global_Data_Maybe_maybe, $insert1) {
  $__num = func_num_args();
  $__res = ($__global_Data_Set_foldr1)((function() use ($__global_Data_Maybe_maybe, $insert1, $f, &$__fn) {
  $__fn = function($a, $acc = null) use ($__global_Data_Maybe_maybe, $insert1, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($acc) use ($a, &$__fn) { return $__fn($a, $acc); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Maybe_maybe)($acc, function($b) use ($insert1, $acc) {
  $__num = func_num_args();
  $__res = ($insert1)($b, $acc);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($f)($a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_mapMaybe'] = __NAMESPACE__ . '\\Data_Set_mapMaybe';

// Data_Set_monoidSet
function Data_Set_monoidSet($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_monoidSet';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_semigroupSet = ($GLOBALS['Data_Set_semigroupSet'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_semigroupSet'));
  $semigroupSet1 = ($__global_Data_Set_semigroupSet)($dictOrd);
  $__res = (object)["mempty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Semigroup0" => function($__dollar____unused) use ($semigroupSet1) {
  $__num = func_num_args();
  $__res = $semigroupSet1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_monoidSet'] = __NAMESPACE__ . '\\Data_Set_monoidSet';

// Data_Set_unions
function Data_Set_unions($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_unions';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_union = ($GLOBALS['Data_Set_union'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_union'));
  $foldl2 = ($dictFoldable)->foldl;
  $__res = function($dictOrd) use ($foldl2, $__global_Data_Set_union) {
  $__num = func_num_args();
  $__res = ($foldl2)(($__global_Data_Set_union)($dictOrd), ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_unions'] = __NAMESPACE__ . '\\Data_Set_unions';

// Data_Set_difference
function Data_Set_difference($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_difference';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
  $__global_Data_Map_Internal_difference = ($GLOBALS['Data_Map_Internal_difference'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_difference'));
  $__res = ($__global_Data_Set_coerce)(($__global_Data_Map_Internal_difference)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_difference'] = __NAMESPACE__ . '\\Data_Set_difference';

// Data_Set_subset
function Data_Set_subset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_subset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_difference = ($GLOBALS['Data_Set_difference'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_difference'));
  $__global_Data_Set_isEmpty = ($GLOBALS['Data_Set_isEmpty'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_isEmpty'));
  $difference1 = ($__global_Data_Set_difference)($dictOrd);
  $__res = (function() use ($__global_Data_Set_isEmpty, $difference1, &$__fn) {
  $__fn = function($s1, $s2 = null) use ($__global_Data_Set_isEmpty, $difference1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Set_isEmpty)(($difference1)($s1, $s2));
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
$GLOBALS['Data_Set_subset'] = __NAMESPACE__ . '\\Data_Set_subset';

// Data_Set_properSubset
function Data_Set_properSubset($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_properSubset';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_subset = ($GLOBALS['Data_Set_subset'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_subset'));
  $__global_Data_HeytingAlgebra_boolConj = ($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \Data\HeytingAlgebra\phpurs_eval_thunk('Data_HeytingAlgebra_boolConj'));
  $__global_Data_Set_notEq = ($GLOBALS['Data_Set_notEq'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_notEq'));
  $__global_Data_Set_size = ($GLOBALS['Data_Set_size'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_size'));
  $subset1 = ($__global_Data_Set_subset)($dictOrd);
  $__res = (function() use ($__global_Data_HeytingAlgebra_boolConj, $__global_Data_Set_notEq, $__global_Data_Set_size, $subset1, &$__fn) {
  $__fn = function($s1, $s2 = null) use ($__global_Data_HeytingAlgebra_boolConj, $__global_Data_Set_notEq, $__global_Data_Set_size, $subset1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s2) use ($s1, &$__fn) { return $__fn($s1, $s2); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_HeytingAlgebra_boolConj)(($__global_Data_Set_notEq)(($__global_Data_Set_size)($s1), ($__global_Data_Set_size)($s2)), ($subset1)($s1, $s2));
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
$GLOBALS['Data_Set_properSubset'] = __NAMESPACE__ . '\\Data_Set_properSubset';

// Data_Set_delete
function Data_Set_delete($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_delete';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
  $__global_Data_Map_Internal_delete = ($GLOBALS['Data_Map_Internal_delete'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_delete'));
  $__res = ($__global_Data_Set_coerce)(($__global_Data_Map_Internal_delete)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_delete'] = __NAMESPACE__ . '\\Data_Set_delete';

// Data_Set_checkValid
function Data_Set_checkValid($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_checkValid';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_coerce = ($GLOBALS['Data_Set_coerce'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_coerce'));
  $__global_Data_Map_Internal_checkValid = ($GLOBALS['Data_Map_Internal_checkValid'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_checkValid'));
  $__res = ($__global_Data_Set_coerce)(($__global_Data_Map_Internal_checkValid)($dictOrd));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_checkValid'] = __NAMESPACE__ . '\\Data_Set_checkValid';

// Data_Set_catMaybes
function Data_Set_catMaybes($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Set_catMaybes';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Set_mapMaybe = ($GLOBALS['Data_Set_mapMaybe'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_mapMaybe'));
  $__global_Data_Set_identity = ($GLOBALS['Data_Set_identity'] ?? \Data\Set\phpurs_eval_thunk('Data_Set_identity'));
  $__res = ($__global_Data_Set_mapMaybe)($dictOrd, $__global_Data_Set_identity);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Set_catMaybes'] = __NAMESPACE__ . '\\Data_Set_catMaybes';

