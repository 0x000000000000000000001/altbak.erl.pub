<?php

namespace Control\Parallel;

// ALL IMPORTS: Control.Alternative, Control.Apply, Control.Category, Control.Parallel, Control.Parallel.Class, Control.Semigroupoid, Data.Foldable, Data.Traversable, Prelude, Prim
// TO REQUIRE: Control.Alternative, Control.Apply, Control.Category, Control.Parallel, Control.Parallel.Class, Control.Semigroupoid, Data.Foldable, Data.Traversable, Prelude
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
  class Phpurs_Data1 { public $tag; public $value0; public function __construct($t, $value0) { $this->tag = $t; $this->value0 = $value0; } }
  class Phpurs_Data2 { public $tag; public $value0, $value1; public function __construct($t, $value0, $value1) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; } }
  class Phpurs_Data3 { public $tag; public $value0, $value1, $value2; public function __construct($t, $value0, $value1, $value2) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; } }
  class Phpurs_Data4 { public $tag; public $value0, $value1, $value2, $value3; public function __construct($t, $value0, $value1, $value2, $value3) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; } }
  class Phpurs_Data5 { public $tag; public $value0, $value1, $value2, $value3, $value4; public function __construct($t, $value0, $value1, $value2, $value3, $value4) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; $this->value4 = $value4; } }
  class Phpurs_Data6 { public $tag; public $value0, $value1, $value2, $value3, $value4, $value5; public function __construct($t, $value0, $value1, $value2, $value3, $value4, $value5) { $this->tag = $t; $this->value0 = $value0; $this->value1 = $value1; $this->value2 = $value2; $this->value3 = $value3; $this->value4 = $value4; $this->value5 = $value5; } }
}
if (!\function_exists(__NAMESPACE__ . '\\phpurs_curry_fallback')) {
  function phpurs_curry_fallback($fn, $args, $expected) {
    $missing = $expected - \count($args);
    if ($missing === 1) {
      return function($a) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num > 1) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a;
        return $fn(...$args);
      };
    }
    if ($missing === 2) {
      return function($a, $b = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 2) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b;
        return $fn(...$args);
      };
    }
    if ($missing === 3) {
      return function($a, $b = null, $c = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 3) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c;
        return $fn(...$args);
      };
    }
    if ($missing === 4) {
      return function($a, $b = null, $c = null, $d = null) use ($fn, $args, $expected) {
        $num = \func_num_args();
        if ($num === 1) { $args[] = $a; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 2) { $args[] = $a; $args[] = $b; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num === 3) { $args[] = $a; $args[] = $b; $args[] = $c; return phpurs_curry_fallback($fn, $args, $expected); }
        if ($num > 4) {
          $merged = \array_merge($args, \func_get_args());
          $res = $fn(...\array_slice($merged, 0, $expected));
          return $res(...\array_slice($merged, $expected));
        }
        $args[] = $a; $args[] = $b; $args[] = $c; $args[] = $d;
        return $fn(...$args);
      };
    }
    return function(...$more) use ($fn, $args, $expected) {
      $merged = \array_merge($args, $more);
      if (\count($merged) >= $expected) {
        $res = $fn(...\array_slice($merged, 0, $expected));
        if (\count($merged) > $expected) {
          return $res(...\array_slice($merged, $expected));
        }
        return $res;
      }
      return phpurs_curry_fallback($fn, $merged, $expected);
    };
  }
}
\PhpursThunks::$thunks['Control_Parallel_parTraverse_'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $sequential_0 = ($dictParallel)->sequential;
  $parallel_1 = ($dictParallel)->parallel;
  $__res = function($dictApplicative) use (&$parallel_1, &$sequential_0) {
  $__num = \func_num_args();
  $traverse__2 = (($GLOBALS['Data_Foldable_traverse_'] ?? \PhpursThunks::eval('Data_Foldable_traverse_')))($dictApplicative);
  $__res = function($dictFoldable) use (&$parallel_1, &$sequential_0, &$traverse__2) {
  $__num = \func_num_args();
  $traverse_1_3 = ($traverse__2)($dictFoldable);
  $__res = function($f) use (&$parallel_1, &$sequential_0, &$traverse_1_3) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($sequential_0))(($traverse_1_3)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($parallel_1))($f)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_parTraverse'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $sequential_0 = ($dictParallel)->sequential;
  $parallel_1 = ($dictParallel)->parallel;
  $__res = (function() use (&$parallel_1, &$sequential_0) {
  $__fn = function($dictApplicative, $dictTraversable = null) use (&$parallel_1, &$sequential_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $traverse_2 = (($dictTraversable)->traverse)($dictApplicative);
  $__res = function($f) use (&$parallel_1, &$sequential_0, &$traverse_2) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($sequential_0))(($traverse_2)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($parallel_1))($f)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_parSequence_'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $parTraverse_1_0 = (($GLOBALS['Control_Parallel_parTraverse_'] ?? \PhpursThunks::eval('Control_Parallel_parTraverse_')))($dictParallel);
  $__res = function($dictApplicative) use (&$parTraverse_1_0) {
  $__num = \func_num_args();
  $parTraverse_2_1 = ($parTraverse_1_0)($dictApplicative);
  $__res = function($dictFoldable) use (&$parTraverse_2_1) {
  $__num = \func_num_args();
  $__res = (($parTraverse_2_1)($dictFoldable))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_parSequence'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $parTraverse1_0 = (($GLOBALS['Control_Parallel_parTraverse'] ?? \PhpursThunks::eval('Control_Parallel_parTraverse')))($dictParallel);
  $__res = function($dictApplicative) use (&$parTraverse1_0) {
  $__num = \func_num_args();
  $parTraverse2_1 = ($parTraverse1_0)($dictApplicative);
  $__res = function($dictTraversable) use (&$parTraverse2_1) {
  $__num = \func_num_args();
  $__res = (($parTraverse2_1)($dictTraversable))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_parOneOfMap'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $sequential_0 = ($dictParallel)->sequential;
  $parallel_1 = ($dictParallel)->parallel;
  $__res = function($dictAlternative) use (&$parallel_1, &$sequential_0) {
  $__num = \func_num_args();
  $Plus1_2 = (($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictFoldable) use (&$Plus1_2, &$parallel_1, &$sequential_0) {
  $__num = \func_num_args();
  $oneOfMap_3 = ((($GLOBALS['Data_Foldable_oneOfMap'] ?? \PhpursThunks::eval('Data_Foldable_oneOfMap')))($dictFoldable))($Plus1_2);
  $__res = (function() use (&$oneOfMap_3, &$parallel_1, &$sequential_0) {
  $__fn = function($dictFunctor, $f = null) use (&$oneOfMap_3, &$parallel_1, &$sequential_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($sequential_0))(($oneOfMap_3)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($parallel_1))($f)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_parOneOf'] = function() { $v = function($dictParallel) {
  $__num = \func_num_args();
  $sequential_0 = ($dictParallel)->sequential;
  $parallel_1 = ($dictParallel)->parallel;
  $__res = function($dictAlternative) use (&$parallel_1, &$sequential_0) {
  $__num = \func_num_args();
  $Plus1_2 = (($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictFoldable) use (&$Plus1_2, &$parallel_1, &$sequential_0) {
  $__num = \func_num_args();
  $oneOfMap_3 = ((($GLOBALS['Data_Foldable_oneOfMap'] ?? \PhpursThunks::eval('Data_Foldable_oneOfMap')))($dictFoldable))($Plus1_2);
  $__res = function($dictFunctor) use (&$oneOfMap_3, &$parallel_1, &$sequential_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($sequential_0))(($oneOfMap_3)($parallel_1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Control_Parallel_parApply'] = function() { $v = (function() {
  $__fn = function($dictParallel, $mf = null, $ma = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($dictParallel)->sequential)(((((($dictParallel)->Apply1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->apply)((($dictParallel)->parallel)($mf)))((($dictParallel)->parallel)($ma)));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };









