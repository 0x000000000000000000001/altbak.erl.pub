<?php

namespace Data\Bifoldable;

// ALL IMPORTS: Control.Applicative, Control.Apply, Control.Category, Control.Semigroupoid, Data.Bifoldable, Data.Const, Data.Either, Data.Foldable, Data.Function, Data.Functor.Clown, Data.Functor.Flip, Data.Functor.Joker, Data.Functor.Product2, Data.Monoid, Data.Monoid.Conj, Data.Monoid.Disj, Data.Monoid.Dual, Data.Monoid.Endo, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Prelude, Prim
// TO REQUIRE: Control.Applicative, Control.Apply, Control.Category, Control.Semigroupoid, Data.Bifoldable, Data.Const, Data.Either, Data.Foldable, Data.Function, Data.Functor.Clown, Data.Functor.Flip, Data.Functor.Joker, Data.Functor.Product2, Data.Monoid, Data.Monoid.Conj, Data.Monoid.Disj, Data.Monoid.Dual, Data.Monoid.Endo, Data.Newtype, Data.Semigroup, Data.Tuple, Data.Unit, Prelude
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Endo/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
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
\PhpursThunks::$thunks['Data_Bifoldable_monoidEndo'] = function() { $v = (($GLOBALS['Data_Monoid_Endo_monoidEndo'] ?? \PhpursThunks::eval('Data_Monoid_Endo_monoidEndo')))(($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn'))); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_monoidDual'] = function() { $v = (($GLOBALS['Data_Monoid_Dual_monoidDual'] ?? \PhpursThunks::eval('Data_Monoid_Dual_monoidDual')))(($GLOBALS['Data_Bifoldable_monoidEndo'] ?? \PhpursThunks::eval('Data_Bifoldable_monoidEndo'))); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldr'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->bifoldr;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bitraverse_'] = function() { $v = (function() {
  $__fn = function($dictBifoldable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $applySecond_0 = (($GLOBALS['Control_Apply_applySecond'] ?? \PhpursThunks::eval('Control_Apply_applySecond')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (function() use (&$applySecond_0, &$dictApplicative, &$dictBifoldable) {
  $__fn = function($f, $g = null) use (&$applySecond_0, &$dictApplicative, &$dictBifoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictBifoldable)->bifoldr)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($applySecond_0))($f)))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($applySecond_0))($g)))((($dictApplicative)->pure)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifor_'] = function() { $v = (function() {
  $__fn = function($dictBifoldable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $bitraverse_2_0 = ((($GLOBALS['Data_Bifoldable_bitraverse_'] ?? \PhpursThunks::eval('Data_Bifoldable_bitraverse_')))($dictBifoldable))($dictApplicative);
  $__res = (function() use (&$bitraverse_2_0) {
  $__fn = function($t, $f = null, $g = null) use (&$bitraverse_2_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($bitraverse_2_0)($f))($g))($t);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bisequence_'] = function() { $v = (function() {
  $__fn = function($dictBifoldable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Data_Bifoldable_bitraverse_'] ?? \PhpursThunks::eval('Data_Bifoldable_bitraverse_')))($dictBifoldable))($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldl'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->bifoldl;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldableTuple'] = function() { $v = (object)["bifoldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $g = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)(($f)(($v)->value0)))(($g)(($v)->value1));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldr" => (function() {
  $__fn = function($f, $g = null, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (($f)(($v)->value0))((($g)(($v)->value1))($z));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__fn = function($f, $g = null, $z = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (($g)((($f)($z))(($v)->value0)))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldableJoker'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = (object)["bifoldr" => (function() use (&$dictFoldable) {
  $__fn = function($v, $r = null, $u = null, $v1 = null) use (&$dictFoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((($dictFoldable)->foldr)($r))($u))($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use (&$dictFoldable) {
  $__fn = function($v, $r = null, $u = null, $v1 = null) use (&$dictFoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((($dictFoldable)->foldl)($r))($u))($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use (&$dictFoldable) {
  $__num = \func_num_args();
  $foldMap1_0 = (($dictFoldable)->foldMap)($dictMonoid);
  $__res = (function() use (&$foldMap1_0) {
  $__fn = function($v, $r = null, $v1 = null) use (&$foldMap1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($foldMap1_0)($r))($v1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldableEither'] = function() { $v = (object)["bifoldr" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($v3) && (($v3)->tag === "Left"))) {
$__t0 = (($v)(($v3)->value0))($v2);
} else {
if ((is_object($v3) && (($v3)->tag === "Right"))) {
$__t0 = (($v1)(($v3)->value0))($v2);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($v3) && (($v3)->tag === "Left"))) {
$__t1 = (($v)($v2))(($v3)->value0);
} else {
if ((is_object($v3) && (($v3)->tag === "Right"))) {
$__t1 = (($v1)($v2))(($v3)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__fn = function($dictMonoid, $v = null, $v1 = null, $v2 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t2 = ($v)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t2 = ($v1)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t2 = null;
};
};
  $__res = $__t2;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldableConst'] = function() { $v = (object)["bifoldr" => (function() {
  $__fn = function($f, $v = null, $z = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (($f)($v1))($z);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() {
  $__fn = function($f, $v = null, $z = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (($f)($z))($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => (function() {
  $__fn = function($dictMonoid, $f = null, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ($f)($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()]; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldableClown'] = function() { $v = function($dictFoldable) {
  $__num = \func_num_args();
  $__res = (object)["bifoldr" => (function() use (&$dictFoldable) {
  $__fn = function($l, $v = null, $u = null, $v1 = null) use (&$dictFoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((($dictFoldable)->foldr)($l))($u))($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use (&$dictFoldable) {
  $__fn = function($l, $v = null, $u = null, $v1 = null) use (&$dictFoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((($dictFoldable)->foldl)($l))($u))($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use (&$dictFoldable) {
  $__num = \func_num_args();
  $foldMap1_0 = (($dictFoldable)->foldMap)($dictMonoid);
  $__res = (function() use (&$foldMap1_0) {
  $__fn = function($l, $v = null, $v1 = null) use (&$foldMap1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($foldMap1_0)($l))($v1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldMapDefaultR'] = function() { $v = (function() {
  $__fn = function($dictBifoldable, $dictMonoid = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $append_0 = ((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append;
  $mempty_1 = ($dictMonoid)->mempty;
  $__res = (function() use (&$append_0, &$dictBifoldable, &$mempty_1) {
  $__fn = function($f, $g = null) use (&$append_0, &$dictBifoldable, &$mempty_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictBifoldable)->bifoldr)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($append_0))($f)))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($append_0))($g)))($mempty_1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldMapDefaultL'] = function() { $v = (function() {
  $__fn = function($dictBifoldable, $dictMonoid = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $mempty_1 = ($dictMonoid)->mempty;
  $__res = (function() use (&$__local_var_0, &$dictBifoldable, &$mempty_1) {
  $__fn = function($f, $g = null) use (&$__local_var_0, &$dictBifoldable, &$mempty_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictBifoldable)->bifoldl)((function() use (&$__local_var_0, &$f) {
  $__fn = function($m, $a = null) use (&$__local_var_0, &$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->append)($m))(($f)($a));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))((function() use (&$__local_var_0, &$g) {
  $__fn = function($m, $b = null) use (&$__local_var_0, &$g, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->append)($m))(($g)($b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))($mempty_1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldMap'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->bifoldMap;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldableFlip'] = function() { $v = function($dictBifoldable) {
  $__num = \func_num_args();
  $__res = (object)["bifoldr" => (function() use (&$dictBifoldable) {
  $__fn = function($r, $l = null, $u = null, $v = null) use (&$dictBifoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((($dictBifoldable)->bifoldr)($l))($r))($u))($v);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use (&$dictBifoldable) {
  $__fn = function($r, $l = null, $u = null, $v = null) use (&$dictBifoldable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((($dictBifoldable)->bifoldl)($l))($r))($u))($v);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use (&$dictBifoldable) {
  $__num = \func_num_args();
  $bifoldMap2_0 = (($dictBifoldable)->bifoldMap)($dictMonoid);
  $__res = (function() use (&$bifoldMap2_0) {
  $__fn = function($r, $l = null, $v = null) use (&$bifoldMap2_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($bifoldMap2_0)($l))($r))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldlDefault'] = function() { $v = function($dictBifoldable) {
  $__num = \func_num_args();
  $bifoldMap1_0 = (($dictBifoldable)->bifoldMap)(($GLOBALS['Data_Bifoldable_monoidDual'] ?? \PhpursThunks::eval('Data_Bifoldable_monoidDual')));
  $__res = (function() use (&$bifoldMap1_0) {
  $__fn = function($f, $g = null, $z = null, $p = null) use (&$bifoldMap1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(((($bifoldMap1_0)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Dual_Dual'] ?? \PhpursThunks::eval('Data_Monoid_Dual_Dual'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Endo_Endo'] ?? \PhpursThunks::eval('Data_Monoid_Endo_Endo'))))((function() use (&$f) {
  $__fn = function($b, $a = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($f)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Dual_Dual'] ?? \PhpursThunks::eval('Data_Monoid_Dual_Dual'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Endo_Endo'] ?? \PhpursThunks::eval('Data_Monoid_Endo_Endo'))))((function() use (&$g) {
  $__fn = function($b, $a = null) use (&$g, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($g)($a))($b);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()))))($p))))($z);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldrDefault'] = function() { $v = function($dictBifoldable) {
  $__num = \func_num_args();
  $bifoldMap1_0 = (($dictBifoldable)->bifoldMap)(($GLOBALS['Data_Bifoldable_monoidEndo'] ?? \PhpursThunks::eval('Data_Bifoldable_monoidEndo')));
  $__res = (function() use (&$bifoldMap1_0) {
  $__fn = function($f, $g = null, $z = null, $p = null) use (&$bifoldMap1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))(((($bifoldMap1_0)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Endo_Endo'] ?? \PhpursThunks::eval('Data_Monoid_Endo_Endo'))))($f)))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Endo_Endo'] ?? \PhpursThunks::eval('Data_Monoid_Endo_Endo'))))($g)))($p)))($z);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifoldableProduct2'] = function() { $v = (function() {
  $__fn = function($dictBifoldable, $dictBifoldable1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["bifoldr" => (function() use (&$dictBifoldable, &$dictBifoldable1) {
  $__fn = function($l, $r = null, $u = null, $m = null) use (&$dictBifoldable, &$dictBifoldable1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((((($GLOBALS['Data_Bifoldable_bifoldrDefault'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldrDefault')))(((($GLOBALS['Data_Bifoldable_bifoldableProduct2'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldableProduct2')))($dictBifoldable))($dictBifoldable1)))($l))($r))($u))($m);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use (&$dictBifoldable, &$dictBifoldable1) {
  $__fn = function($l, $r = null, $u = null, $m = null) use (&$dictBifoldable, &$dictBifoldable1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((((($GLOBALS['Data_Bifoldable_bifoldlDefault'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldlDefault')))(((($GLOBALS['Data_Bifoldable_bifoldableProduct2'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldableProduct2')))($dictBifoldable))($dictBifoldable1)))($l))($r))($u))($m);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use (&$dictBifoldable, &$dictBifoldable1) {
  $__num = \func_num_args();
  $bifoldMap3_0 = (($dictBifoldable)->bifoldMap)($dictMonoid);
  $bifoldMap4_1 = (($dictBifoldable1)->bifoldMap)($dictMonoid);
  $__res = (function() use (&$bifoldMap3_0, &$bifoldMap4_1, &$dictMonoid) {
  $__fn = function($l, $r = null, $v = null) use (&$bifoldMap3_0, &$bifoldMap4_1, &$dictMonoid, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->append)(((($bifoldMap3_0)($l))($r))(($v)->value0)))(((($bifoldMap4_1)($l))($r))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_bifold'] = function() { $v = (function() {
  $__fn = function($dictBifoldable, $dictMonoid = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictBifoldable)->bifoldMap)($dictMonoid))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_biany'] = function() { $v = (function() {
  $__fn = function($dictBifoldable, $dictBooleanAlgebra = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($dictBooleanAlgebra)->HeytingAlgebra0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $semigroupDisj1_1 = (object)["append" => (function() use (&$__local_var_0) {
  $__fn = function($v, $v1 = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->disj)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $bifoldMap2_2 = (($dictBifoldable)->bifoldMap)((object)["mempty" => ($__local_var_0)->ff, "Semigroup0" => function($dollar__unused_0) use (&$semigroupDisj1_1) {
  $__num = \func_num_args();
  $__res = $semigroupDisj1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]);
  $__res = (function() use (&$bifoldMap2_2) {
  $__fn = function($p, $q = null) use (&$bifoldMap2_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))((($bifoldMap2_2)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Disj_Disj'] ?? \PhpursThunks::eval('Data_Monoid_Disj_Disj'))))($p)))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Disj_Disj'] ?? \PhpursThunks::eval('Data_Monoid_Disj_Disj'))))($q)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bifoldable_biall'] = function() { $v = (function() {
  $__fn = function($dictBifoldable, $dictBooleanAlgebra = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($dictBooleanAlgebra)->HeytingAlgebra0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $semigroupConj1_1 = (object)["append" => (function() use (&$__local_var_0) {
  $__fn = function($v, $v1 = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->conj)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $bifoldMap2_2 = (($dictBifoldable)->bifoldMap)((object)["mempty" => ($__local_var_0)->tt, "Semigroup0" => function($dollar__unused_0) use (&$semigroupConj1_1) {
  $__num = \func_num_args();
  $__res = $semigroupConj1_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]);
  $__res = (function() use (&$bifoldMap2_2) {
  $__fn = function($p, $q = null) use (&$bifoldMap2_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce'))))((($bifoldMap2_2)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Conj_Conj'] ?? \PhpursThunks::eval('Data_Monoid_Conj_Conj'))))($p)))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Monoid_Conj_Conj'] ?? \PhpursThunks::eval('Data_Monoid_Conj_Conj'))))($q)));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
























