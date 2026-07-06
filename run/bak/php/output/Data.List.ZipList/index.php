<?php

namespace Data\List\ZipList;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.List.ZipList/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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
      case 'Data_List_ZipList_append': $v = ($GLOBALS['Data_Semigroup_concatString'] ?? \Data\Semigroup\phpurs_eval_thunk('Data_Semigroup_concatString')); break;
      case 'Data_List_ZipList_append1': $v = (($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList')))->append; break;
      case 'Data_List_ZipList_traversableZipList': $v = ($GLOBALS['Data_List_Lazy_Types_traversableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_traversableList')); break;
      case 'Data_List_ZipList_semigroupZipList': $v = ($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList')); break;
      case 'Data_List_ZipList_newtypeZipList': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_ZipList_monoidZipList': $v = ($GLOBALS['Data_List_Lazy_Types_monoidList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_monoidList')); break;
      case 'Data_List_ZipList_functorZipList': $v = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList')); break;
      case 'Data_List_ZipList_foldableZipList': $v = ($GLOBALS['Data_List_Lazy_Types_foldableList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_foldableList')); break;
      case 'Data_List_ZipList_applyZipList': $v = (object)["apply" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_Lazy_zipWith = ($GLOBALS['Data_List_Lazy_zipWith'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_zipWith'));
  $__global_Data_Function_apply = ($GLOBALS['Data_Function_apply'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_apply'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$fs = $__case_0;
$xs = $__case_1;
$__res = ($__global_Data_List_Lazy_zipWith)($__global_Data_Function_apply, $fs, $xs);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorList = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  $__res = $__global_Data_List_Lazy_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_ZipList_applicativeZipList': $v = (object)["pure" => ((($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose)("\\Data\\List\\ZipList\\Data_List_ZipList_ZipList", "\\Data\\List\\Lazy\\Data_List_Lazy_repeat"), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_ZipList_applyZipList = ($GLOBALS['Data_List_ZipList_applyZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_applyZipList'));
  $__res = $__global_Data_List_ZipList_applyZipList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_ZipList_altZipList': $v = (object)["alt" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_List_ZipList_append1 = ($GLOBALS['Data_List_ZipList_append1'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_append1'));
  $__global_Data_List_Lazy_drop = ($GLOBALS['Data_List_Lazy_drop'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_drop'));
  $__global_Data_List_Lazy_length = ($GLOBALS['Data_List_Lazy_length'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_length'));
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$xs = $__case_0;
$ys = $__case_1;
$__res = ($__global_Data_List_ZipList_append1)($xs, ($__global_Data_List_Lazy_drop)(($__global_Data_List_Lazy_length)($xs), $ys));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_Lazy_Types_functorList = ($GLOBALS['Data_List_Lazy_Types_functorList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_functorList'));
  $__res = $__global_Data_List_Lazy_Types_functorList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_ZipList_plusZipList': $v = (object)["empty" => ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil')), "Alt0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_ZipList_altZipList = ($GLOBALS['Data_List_ZipList_altZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_altZipList'));
  $__res = $__global_Data_List_ZipList_altZipList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_List_ZipList_alternativeZipList': $v = (object)["Applicative0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_ZipList_applicativeZipList = ($GLOBALS['Data_List_ZipList_applicativeZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_applicativeZipList'));
  $__res = $__global_Data_List_ZipList_applicativeZipList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Plus1" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_List_ZipList_plusZipList = ($GLOBALS['Data_List_ZipList_plusZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_plusZipList'));
  $__res = $__global_Data_List_ZipList_plusZipList;
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




// Data_List_ZipList_ZipList
function Data_List_ZipList_ZipList($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_ZipList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ZipList_ZipList'] = __NAMESPACE__ . '\\Data_List_ZipList_ZipList';


// Data_List_ZipList_showZipList
function Data_List_ZipList_showZipList($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_showZipList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_showList = ($GLOBALS['Data_List_Lazy_Types_showList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_showList'));
  $show = (($__global_Data_List_Lazy_Types_showList)($dictShow))->show;
  $__res = (object)["show" => function($v) use ($show) {
  $__num = func_num_args();
  $__case_0 = $v;
  if (true) {
$xs = $__case_0;
$__res = ("(ZipList " . (($show)($xs) . ")"));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ZipList_showZipList'] = __NAMESPACE__ . '\\Data_List_ZipList_showZipList';


// Data_List_ZipList_ordZipList
function Data_List_ZipList_ordZipList($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_ordZipList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_ordList = ($GLOBALS['Data_List_Lazy_Types_ordList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_ordList'));
  $__res = ($__global_Data_List_Lazy_Types_ordList)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ZipList_ordZipList'] = __NAMESPACE__ . '\\Data_List_ZipList_ordZipList';





// Data_List_ZipList_eqZipList
function Data_List_ZipList_eqZipList($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_eqZipList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_eqList = ($GLOBALS['Data_List_Lazy_Types_eqList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_eqList'));
  $__res = ($__global_Data_List_Lazy_Types_eqList)($dictEq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ZipList_eqZipList'] = __NAMESPACE__ . '\\Data_List_ZipList_eqZipList';


// Data_List_ZipList_zipListIsNotBind
function Data_List_ZipList_zipListIsNotBind($__dollar____unused) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_ZipList_zipListIsNotBind';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Partial_Unsafe_unsafeCrashWith = ($GLOBALS['Partial_Unsafe_unsafeCrashWith'] ?? \Partial\Unsafe\phpurs_eval_thunk('Partial_Unsafe_unsafeCrashWith'));
  $__global_Data_List_ZipList_applyZipList = ($GLOBALS['Data_List_ZipList_applyZipList'] ?? \Data\List\ZipList\phpurs_eval_thunk('Data_List_ZipList_applyZipList'));
  $__res = (object)["bind" => ($__global_Partial_Unsafe_unsafeCrashWith)("bind: unreachable"), "Apply0" => function($__dollar____unused) use ($__global_Data_List_ZipList_applyZipList) {
  $__num = func_num_args();
  $__res = $__global_Data_List_ZipList_applyZipList;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_ZipList_zipListIsNotBind'] = __NAMESPACE__ . '\\Data_List_ZipList_zipListIsNotBind';





