<?php

namespace Data\Map;

require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Map/index.php';
require_once __DIR__ . '/../Data.Map.Internal/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Set/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
      case 'Data_Map_traversableWithIndexSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_traversableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableWithIndexMap')); break;
      case 'Data_Map_traversableSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_traversableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_traversableMap')); break;
      case 'Data_Map_newtypeSemigroupMap': $v = (object)["Coercible0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = $__global_Prim_undefined;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Map_keys': $v = ((($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose)("\\Data\\Set\\Data_Set_Set", \Data\Functor\Data_Functor_void(($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap')))); break;
      case 'Data_Map_functorWithIndexSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_functorWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorWithIndexMap')); break;
      case 'Data_Map_functorSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_functorMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_functorMap')); break;
      case 'Data_Map_foldableWithIndexSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_foldableWithIndexMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableWithIndexMap')); break;
      case 'Data_Map_foldableSemigroupMap': $v = ($GLOBALS['Data_Map_Internal_foldableMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_foldableMap')); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };


// Data_Map_SemigroupMap
function Data_Map_SemigroupMap($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_SemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_SemigroupMap'] = __NAMESPACE__ . '\\Data_Map_SemigroupMap';



// Data_Map_showSemigroupMap
function Data_Map_showSemigroupMap($dictShow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_showSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_showMap = ($GLOBALS['Data_Map_Internal_showMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_showMap'));
  $showMap = ($__global_Data_Map_Internal_showMap)($dictShow);
  $__res = function($dictShow1) use ($showMap) {
  $__num = func_num_args();
  $__res = ($showMap)($dictShow1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_showSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_showSemigroupMap';

// Data_Map_semigroupSemigroupMap
function Data_Map_semigroupSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_semigroupSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_unionWith = ($GLOBALS['Data_Map_Internal_unionWith'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_unionWith'));
  $unionWith = ($__global_Data_Map_Internal_unionWith)($dictOrd);
  $__res = function($dictSemigroup) use ($unionWith) {
  $__num = func_num_args();
  $append = ($dictSemigroup)->append;
  $__res = (object)["append" => (function() use ($unionWith, $append, &$__fn) {
  $__fn = function($v, $v1 = null) use ($unionWith, $append, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (true) {
$l = $__case_0;
$r = $__case_1;
$__res = ($unionWith)($append, $l, $r);
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
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_semigroupSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_semigroupSemigroupMap';

// Data_Map_plusSemigroupMap
function Data_Map_plusSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_plusSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_plusMap = ($GLOBALS['Data_Map_Internal_plusMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_plusMap'));
  $__res = ($__global_Data_Map_Internal_plusMap)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_plusSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_plusSemigroupMap';

// Data_Map_ordSemigroupMap
function Data_Map_ordSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_ordSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_ordMap = ($GLOBALS['Data_Map_Internal_ordMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_ordMap'));
  $ordMap = ($__global_Data_Map_Internal_ordMap)($dictOrd);
  $__res = function($dictOrd1) use ($ordMap) {
  $__num = func_num_args();
  $__res = ($ordMap)($dictOrd1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_ordSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_ordSemigroupMap';

// Data_Map_ord1SemigroupMap
function Data_Map_ord1SemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_ord1SemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_ord1Map = ($GLOBALS['Data_Map_Internal_ord1Map'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_ord1Map'));
  $__res = ($__global_Data_Map_Internal_ord1Map)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_ord1SemigroupMap'] = __NAMESPACE__ . '\\Data_Map_ord1SemigroupMap';


// Data_Map_monoidSemigroupMap
function Data_Map_monoidSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_monoidSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_semigroupSemigroupMap = ($GLOBALS['Data_Map_semigroupSemigroupMap'] ?? \Data\Map\phpurs_eval_thunk('Data_Map_semigroupSemigroupMap'));
  $semigroupSemigroupMap1 = ($__global_Data_Map_semigroupSemigroupMap)($dictOrd);
  $__res = function($dictSemigroup) use ($semigroupSemigroupMap1) {
  $__num = func_num_args();
  $semigroupSemigroupMap2 = ($semigroupSemigroupMap1)($dictSemigroup);
  $__res = (object)["mempty" => ($GLOBALS['__phpurs_data0_Leaf'] ??= new Phpurs_Data0("Leaf")), "Semigroup0" => function($__dollar____unused) use ($semigroupSemigroupMap2) {
  $__num = func_num_args();
  $__res = $semigroupSemigroupMap2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_monoidSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_monoidSemigroupMap';






// Data_Map_eqSemigroupMap
function Data_Map_eqSemigroupMap($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_eqSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_eqMap = ($GLOBALS['Data_Map_Internal_eqMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eqMap'));
  $eqMap = ($__global_Data_Map_Internal_eqMap)($dictEq);
  $__res = function($dictEq1) use ($eqMap) {
  $__num = func_num_args();
  $__res = ($eqMap)($dictEq1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_eqSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_eqSemigroupMap';

// Data_Map_eq1SemigroupMap
function Data_Map_eq1SemigroupMap($dictEq) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_eq1SemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_eq1Map = ($GLOBALS['Data_Map_Internal_eq1Map'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_eq1Map'));
  $__res = ($__global_Data_Map_Internal_eq1Map)($dictEq);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_eq1SemigroupMap'] = __NAMESPACE__ . '\\Data_Map_eq1SemigroupMap';

// Data_Map_bindSemigroupMap
function Data_Map_bindSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_bindSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_bindMap = ($GLOBALS['Data_Map_Internal_bindMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_bindMap'));
  $__res = ($__global_Data_Map_Internal_bindMap)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_bindSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_bindSemigroupMap';

// Data_Map_applySemigroupMap
function Data_Map_applySemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_applySemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_applyMap = ($GLOBALS['Data_Map_Internal_applyMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_applyMap'));
  $__res = ($__global_Data_Map_Internal_applyMap)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_applySemigroupMap'] = __NAMESPACE__ . '\\Data_Map_applySemigroupMap';

// Data_Map_altSemigroupMap
function Data_Map_altSemigroupMap($dictOrd) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Map_altSemigroupMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Map_Internal_altMap = ($GLOBALS['Data_Map_Internal_altMap'] ?? \Data\Map\Internal\phpurs_eval_thunk('Data_Map_Internal_altMap'));
  $__res = ($__global_Data_Map_Internal_altMap)($dictOrd);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Map_altSemigroupMap'] = __NAMESPACE__ . '\\Data_Map_altSemigroupMap';

