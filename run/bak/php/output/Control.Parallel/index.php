<?php

namespace Control\Parallel;

require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Parallel/index.php';
require_once __DIR__ . '/../Control.Parallel.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
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
      case 'Control_Parallel_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Parallel_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };




// Control_Parallel_parTraverse_
function Control_Parallel_parTraverse_($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parTraverse_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Foldable_traverse_ = ($GLOBALS['Data_Foldable_traverse_'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_traverse_'));
  $__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
  $sequential = ($dictParallel)->sequential;
  $parallel = ($dictParallel)->parallel;
  $__res = function($dictApplicative) use ($__global_Data_Foldable_traverse_, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__num = func_num_args();
  $traverse_ = ($__global_Data_Foldable_traverse_)($dictApplicative);
  $__res = function($dictFoldable) use ($traverse_, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__num = func_num_args();
  $traverse_1 = ($traverse_)($dictFoldable);
  $__res = function($f) use ($__global_Control_Parallel_compose, $sequential, $traverse_1, $parallel) {
  $__num = func_num_args();
  $__res = ($__global_Control_Parallel_compose)($sequential, ($traverse_1)(($__global_Control_Parallel_compose)($parallel, $f)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_parTraverse_'] = __NAMESPACE__ . '\\Control_Parallel_parTraverse_';

// Control_Parallel_parTraverse
function Control_Parallel_parTraverse($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parTraverse';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
  $sequential = ($dictParallel)->sequential;
  $parallel = ($dictParallel)->parallel;
  $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__fn = function($dictApplicative, $dictTraversable = null) use ($__global_Control_Parallel_compose, $sequential, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($dictTraversable) use ($dictApplicative, &$__fn) { return $__fn($dictApplicative, $dictTraversable); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $traverse = (($dictTraversable)->traverse)($dictApplicative);
  $__res = function($f) use ($__global_Control_Parallel_compose, $sequential, $traverse, $parallel) {
  $__num = func_num_args();
  $__res = ($__global_Control_Parallel_compose)($sequential, ($traverse)(($__global_Control_Parallel_compose)($parallel, $f)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
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
$GLOBALS['Control_Parallel_parTraverse'] = __NAMESPACE__ . '\\Control_Parallel_parTraverse';

// Control_Parallel_parSequence_
function Control_Parallel_parSequence_($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parSequence_';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Parallel_parTraverse_ = ($GLOBALS['Control_Parallel_parTraverse_'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_parTraverse_'));
  $__global_Control_Parallel_identity = ($GLOBALS['Control_Parallel_identity'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_identity'));
  $parTraverse_1 = ($__global_Control_Parallel_parTraverse_)($dictParallel);
  $__res = function($dictApplicative) use ($parTraverse_1, $__global_Control_Parallel_identity) {
  $__num = func_num_args();
  $parTraverse_2 = ($parTraverse_1)($dictApplicative);
  $__res = function($dictFoldable) use ($parTraverse_2, $__global_Control_Parallel_identity) {
  $__num = func_num_args();
  $__res = ($parTraverse_2)($dictFoldable, $__global_Control_Parallel_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_parSequence_'] = __NAMESPACE__ . '\\Control_Parallel_parSequence_';

// Control_Parallel_parSequence
function Control_Parallel_parSequence($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parSequence';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Control_Parallel_parTraverse = ($GLOBALS['Control_Parallel_parTraverse'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_parTraverse'));
  $__global_Control_Parallel_identity = ($GLOBALS['Control_Parallel_identity'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_identity'));
  $parTraverse1 = ($__global_Control_Parallel_parTraverse)($dictParallel);
  $__res = function($dictApplicative) use ($parTraverse1, $__global_Control_Parallel_identity) {
  $__num = func_num_args();
  $parTraverse2 = ($parTraverse1)($dictApplicative);
  $__res = function($dictTraversable) use ($parTraverse2, $__global_Control_Parallel_identity) {
  $__num = func_num_args();
  $__res = ($parTraverse2)($dictTraversable, $__global_Control_Parallel_identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_parSequence'] = __NAMESPACE__ . '\\Control_Parallel_parSequence';

// Control_Parallel_parOneOfMap
function Control_Parallel_parOneOfMap($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parOneOfMap';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_oneOfMap = ($GLOBALS['Data_Foldable_oneOfMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_oneOfMap'));
  $__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
  $sequential = ($dictParallel)->sequential;
  $parallel = ($dictParallel)->parallel;
  $__res = function($dictAlternative) use ($__global_Prim_undefined, $__global_Data_Foldable_oneOfMap, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__num = func_num_args();
  $Plus1 = (($dictAlternative)->Plus1)($__global_Prim_undefined);
  $__res = function($dictFoldable) use ($__global_Data_Foldable_oneOfMap, &$Plus1, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__num = func_num_args();
  $oneOfMap = ($__global_Data_Foldable_oneOfMap)($dictFoldable, $Plus1);
  $__res = (function() use ($__global_Control_Parallel_compose, $sequential, $oneOfMap, $parallel, &$__fn) {
  $__fn = function($dictFunctor, $f = null) use ($__global_Control_Parallel_compose, $sequential, $oneOfMap, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($f) use ($dictFunctor, &$__fn) { return $__fn($dictFunctor, $f); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Control_Parallel_compose)($sequential, ($oneOfMap)(($__global_Control_Parallel_compose)($parallel, $f)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_parOneOfMap'] = __NAMESPACE__ . '\\Control_Parallel_parOneOfMap';

// Control_Parallel_parOneOf
function Control_Parallel_parOneOf($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parOneOf';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Foldable_oneOfMap = ($GLOBALS['Data_Foldable_oneOfMap'] ?? \Data\Foldable\phpurs_eval_thunk('Data_Foldable_oneOfMap'));
  $__global_Control_Parallel_compose = ($GLOBALS['Control_Parallel_compose'] ?? \Control\Parallel\phpurs_eval_thunk('Control_Parallel_compose'));
  $sequential = ($dictParallel)->sequential;
  $parallel = ($dictParallel)->parallel;
  $__res = function($dictAlternative) use ($__global_Prim_undefined, $__global_Data_Foldable_oneOfMap, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__num = func_num_args();
  $Plus1 = (($dictAlternative)->Plus1)($__global_Prim_undefined);
  $__res = function($dictFoldable) use ($__global_Data_Foldable_oneOfMap, &$Plus1, $__global_Control_Parallel_compose, $sequential, $parallel) {
  $__num = func_num_args();
  $oneOfMap = ($__global_Data_Foldable_oneOfMap)($dictFoldable, $Plus1);
  $__res = function($dictFunctor) use ($__global_Control_Parallel_compose, $sequential, $oneOfMap, $parallel) {
  $__num = func_num_args();
  $__res = ($__global_Control_Parallel_compose)($sequential, ($oneOfMap)($parallel));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Parallel_parOneOf'] = __NAMESPACE__ . '\\Control_Parallel_parOneOf';

// Control_Parallel_parApply
function Control_Parallel_parApply($dictParallel) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Parallel_parApply';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $sequential = ($dictParallel)->sequential;
  $apply = ((($dictParallel)->Apply1)($__global_Prim_undefined))->apply;
  $parallel = ($dictParallel)->parallel;
  $__res = (function() use ($sequential, $apply, $parallel, &$__fn) {
  $__fn = function($mf, $ma = null) use ($sequential, $apply, $parallel, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ma) use ($mf, &$__fn) { return $__fn($mf, $ma); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($sequential)(($apply)(($parallel)($mf), ($parallel)($ma)));
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
$GLOBALS['Control_Parallel_parApply'] = __NAMESPACE__ . '\\Control_Parallel_parApply';

