<?php

namespace Data\Bitraversable;

// ALL IMPORTS: Control.Applicative, Control.Apply, Control.Category, Data.Bifoldable, Data.Bifunctor, Data.Bitraversable, Data.Const, Data.Either, Data.Functor, Data.Functor.Clown, Data.Functor.Flip, Data.Functor.Joker, Data.Functor.Product2, Data.Traversable, Data.Tuple, Prelude, Prim
// TO REQUIRE: Control.Applicative, Control.Apply, Control.Category, Data.Bifoldable, Data.Bifunctor, Data.Bitraversable, Data.Const, Data.Either, Data.Functor, Data.Functor.Clown, Data.Functor.Flip, Data.Functor.Joker, Data.Functor.Product2, Data.Traversable, Data.Tuple, Prelude
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifoldable/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Bitraversable/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Clown/index.php';
require_once __DIR__ . '/../Data.Functor.Flip/index.php';
require_once __DIR__ . '/../Data.Functor.Joker/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
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
\PhpursThunks::$thunks['Data_Bitraversable_bitraverse'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->bitraverse;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_lfor'] = function() { $v = (function() {
  $__fn = function($dictBitraversable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $bitraverse2_0 = (($dictBitraversable)->bitraverse)($dictApplicative);
  $pure_1 = ($dictApplicative)->pure;
  $__res = (function() use (&$bitraverse2_0, &$pure_1) {
  $__fn = function($t, $f = null) use (&$bitraverse2_0, &$pure_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($bitraverse2_0)($f))($pure_1))($t);
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
\PhpursThunks::$thunks['Data_Bitraversable_ltraverse'] = function() { $v = (function() {
  $__fn = function($dictBitraversable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $bitraverse2_0 = (($dictBitraversable)->bitraverse)($dictApplicative);
  $pure_1 = ($dictApplicative)->pure;
  $__res = function($f) use (&$bitraverse2_0, &$pure_1) {
  $__num = \func_num_args();
  $__res = (($bitraverse2_0)($f))($pure_1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_rfor'] = function() { $v = (function() {
  $__fn = function($dictBitraversable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $bitraverse2_0 = (($dictBitraversable)->bitraverse)($dictApplicative);
  $pure_1 = ($dictApplicative)->pure;
  $__res = (function() use (&$bitraverse2_0, &$pure_1) {
  $__fn = function($t, $f = null) use (&$bitraverse2_0, &$pure_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($bitraverse2_0)($pure_1))($f))($t);
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
\PhpursThunks::$thunks['Data_Bitraversable_rtraverse'] = function() { $v = (function() {
  $__fn = function($dictBitraversable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictBitraversable)->bitraverse)($dictApplicative))(($dictApplicative)->pure);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bitraversableTuple'] = function() { $v = (object)["bitraverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_0 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$Apply0_0) {
  $__fn = function($f, $g = null, $v = null) use (&$Apply0_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($Apply0_0)->apply)(((((($Apply0_0)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple'))))(($f)(($v)->value0))))(($g)(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) {
  $__num = \func_num_args();
  $Apply0_1 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($v) use (&$Apply0_1) {
  $__num = \func_num_args();
  $__res = ((($Apply0_1)->apply)(((((($Apply0_1)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple'))))(($v)->value0)))(($v)->value1);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \PhpursThunks::eval('Data_Bifunctor_bifunctorTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bifoldable_bifoldableTuple'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldableTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bitraversableJoker'] = function() { $v = function($dictTraversable) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictTraversable)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bifunctorJoker_1 = (object)["bimap" => (function() use (&$__local_var_0) {
  $__fn = function($v, $g = null, $v1 = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($__local_var_0)->map)($g))($v1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  $__local_var_2 = (($dictTraversable)->Foldable1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bifoldableJoker_4 = (object)["bifoldr" => (function() use (&$__local_var_2) {
  $__fn = function($v, $r = null, $u = null, $v1 = null) use (&$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((($__local_var_2)->foldr)($r))($u))($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use (&$__local_var_2) {
  $__fn = function($v, $r = null, $u = null, $v1 = null) use (&$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((($__local_var_2)->foldl)($r))($u))($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use (&$__local_var_2) {
  $__num = \func_num_args();
  $foldMap1_3 = (($__local_var_2)->foldMap)($dictMonoid);
  $__res = (function() use (&$foldMap1_3) {
  $__fn = function($v, $r = null, $v1 = null) use (&$foldMap1_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($foldMap1_3)($r))($v1);
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
  $__res = (object)["bitraverse" => function($dictApplicative) use (&$dictTraversable) {
  $__num = \func_num_args();
  $traverse1_5 = (($dictTraversable)->traverse)($dictApplicative);
  $__res = (function() use (&$dictApplicative, &$traverse1_5) {
  $__fn = function($v, $r = null, $v1 = null) use (&$dictApplicative, &$traverse1_5, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_Joker_Joker'] ?? \PhpursThunks::eval('Data_Functor_Joker_Joker'))))((($traverse1_5)($r))($v1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) use (&$dictTraversable) {
  $__num = \func_num_args();
  $sequence1_6 = (($dictTraversable)->sequence)($dictApplicative);
  $__res = function($v) use (&$dictApplicative, &$sequence1_6) {
  $__num = \func_num_args();
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_Joker_Joker'] ?? \PhpursThunks::eval('Data_Functor_Joker_Joker'))))(($sequence1_6)($v));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($dollar__unused_0) use (&$bifunctorJoker_1) {
  $__num = \func_num_args();
  $__res = $bifunctorJoker_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($dollar__unused_0) use (&$bifoldableJoker_4) {
  $__num = \func_num_args();
  $__res = $bifoldableJoker_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bitraversableEither'] = function() { $v = (object)["bitraverse" => function($dictApplicative) {
  $__num = \func_num_args();
  $__local_var_0 = (((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t1 = ((($__local_var_0)->map)(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left'))))(($v)(($v2)->value0));
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t1 = ((($__local_var_0)->map)(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right'))))(($v1)(($v2)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t1 = null;
};
};
  $__res = $__t1;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) {
  $__num = \func_num_args();
  $__local_var_2 = (((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($v) use (&$__local_var_2) {
  $__num = \func_num_args();
  if ((is_object($v) && (($v)->tag === "Left"))) {
$__t3 = ((($__local_var_2)->map)(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left'))))(($v)->value0);
} else {
if ((is_object($v) && (($v)->tag === "Right"))) {
$__t3 = ((($__local_var_2)->map)(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right'))))(($v)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t3 = null;
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bifunctor_bifunctorEither'] ?? \PhpursThunks::eval('Data_Bifunctor_bifunctorEither'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bifoldable_bifoldableEither'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldableEither'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bitraversableConst'] = function() { $v = (object)["bitraverse" => (function() {
  $__fn = function($dictApplicative, $f = null, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Const_Const'] ?? \PhpursThunks::eval('Data_Const_Const'))))(($f)($v1));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bisequence" => (function() {
  $__fn = function($dictApplicative, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Const_Const'] ?? \PhpursThunks::eval('Data_Const_Const'))))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bifunctor_bifunctorConst'] ?? \PhpursThunks::eval('Data_Bifunctor_bifunctorConst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Bifoldable_bifoldableConst'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldableConst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bitraversableClown'] = function() { $v = function($dictTraversable) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictTraversable)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bifunctorClown_1 = (object)["bimap" => (function() use (&$__local_var_0) {
  $__fn = function($f, $v = null, $v1 = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($__local_var_0)->map)($f))($v1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  $__local_var_2 = (($dictTraversable)->Foldable1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bifoldableClown_4 = (object)["bifoldr" => (function() use (&$__local_var_2) {
  $__fn = function($l, $v = null, $u = null, $v1 = null) use (&$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((($__local_var_2)->foldr)($l))($u))($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use (&$__local_var_2) {
  $__fn = function($l, $v = null, $u = null, $v1 = null) use (&$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = (((($__local_var_2)->foldl)($l))($u))($v1);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use (&$__local_var_2) {
  $__num = \func_num_args();
  $foldMap1_3 = (($__local_var_2)->foldMap)($dictMonoid);
  $__res = (function() use (&$foldMap1_3) {
  $__fn = function($l, $v = null, $v1 = null) use (&$foldMap1_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($foldMap1_3)($l))($v1);
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
  $__res = (object)["bitraverse" => function($dictApplicative) use (&$dictTraversable) {
  $__num = \func_num_args();
  $traverse1_5 = (($dictTraversable)->traverse)($dictApplicative);
  $__res = (function() use (&$dictApplicative, &$traverse1_5) {
  $__fn = function($l, $v = null, $v1 = null) use (&$dictApplicative, &$traverse1_5, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_Clown_Clown'] ?? \PhpursThunks::eval('Data_Functor_Clown_Clown'))))((($traverse1_5)($l))($v1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) use (&$dictTraversable) {
  $__num = \func_num_args();
  $sequence1_6 = (($dictTraversable)->sequence)($dictApplicative);
  $__res = function($v) use (&$dictApplicative, &$sequence1_6) {
  $__num = \func_num_args();
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_Clown_Clown'] ?? \PhpursThunks::eval('Data_Functor_Clown_Clown'))))(($sequence1_6)($v));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($dollar__unused_0) use (&$bifunctorClown_1) {
  $__num = \func_num_args();
  $__res = $bifunctorClown_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($dollar__unused_0) use (&$bifoldableClown_4) {
  $__num = \func_num_args();
  $__res = $bifoldableClown_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bisequenceDefault'] = function() { $v = (function() {
  $__fn = function($dictBitraversable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($dictBitraversable)->bitraverse)($dictApplicative))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity))((($GLOBALS['Control_Category_categoryFn'] ?? \PhpursThunks::eval('Control_Category_categoryFn')))->identity);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bisequence'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->bisequence;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bitraversableFlip'] = function() { $v = function($dictBitraversable) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictBitraversable)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bifunctorFlip_1 = (object)["bimap" => (function() use (&$__local_var_0) {
  $__fn = function($f, $g = null, $v = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($__local_var_0)->bimap)($g))($f))($v);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  $__local_var_2 = (($dictBitraversable)->Bifoldable1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bifoldableFlip_4 = (object)["bifoldr" => (function() use (&$__local_var_2) {
  $__fn = function($r, $l = null, $u = null, $v = null) use (&$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((($__local_var_2)->bifoldr)($l))($r))($u))($v);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldl" => (function() use (&$__local_var_2) {
  $__fn = function($r, $l = null, $u = null, $v = null) use (&$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((($__local_var_2)->bifoldl)($l))($r))($u))($v);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(), "bifoldMap" => function($dictMonoid) use (&$__local_var_2) {
  $__num = \func_num_args();
  $bifoldMap2_3 = (($__local_var_2)->bifoldMap)($dictMonoid);
  $__res = (function() use (&$bifoldMap2_3) {
  $__fn = function($r, $l = null, $v = null) use (&$bifoldMap2_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($bifoldMap2_3)($l))($r))($v);
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
  $__res = (object)["bitraverse" => function($dictApplicative) use (&$dictBitraversable) {
  $__num = \func_num_args();
  $bitraverse2_5 = (($dictBitraversable)->bitraverse)($dictApplicative);
  $__res = (function() use (&$bitraverse2_5, &$dictApplicative) {
  $__fn = function($r, $l = null, $v = null) use (&$bitraverse2_5, &$dictApplicative, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_Flip_Flip'] ?? \PhpursThunks::eval('Data_Functor_Flip_Flip'))))(((($bitraverse2_5)($l))($r))($v));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) use (&$dictBitraversable) {
  $__num = \func_num_args();
  $bisequence2_6 = (($dictBitraversable)->bisequence)($dictApplicative);
  $__res = function($v) use (&$bisequence2_6, &$dictApplicative) {
  $__num = \func_num_args();
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_Flip_Flip'] ?? \PhpursThunks::eval('Data_Functor_Flip_Flip'))))(($bisequence2_6)($v));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($dollar__unused_0) use (&$bifunctorFlip_1) {
  $__num = \func_num_args();
  $__res = $bifunctorFlip_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($dollar__unused_0) use (&$bifoldableFlip_4) {
  $__num = \func_num_args();
  $__res = $bifoldableFlip_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bitraversableProduct2'] = function() { $v = function($dictBitraversable) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictBitraversable)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bifoldableProduct2_1 = (($GLOBALS['Data_Bifoldable_bifoldableProduct2'] ?? \PhpursThunks::eval('Data_Bifoldable_bifoldableProduct2')))((($dictBitraversable)->Bifoldable1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictBitraversable1) use (&$__local_var_0, &$bifoldableProduct2_1, &$dictBitraversable) {
  $__num = \func_num_args();
  $__local_var_2 = (($dictBitraversable1)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bifunctorProduct21_3 = (object)["bimap" => (function() use (&$__local_var_0, &$__local_var_2) {
  $__fn = function($f, $g = null, $v = null) use (&$__local_var_0, &$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Product2", (((($__local_var_0)->bimap)($f))($g))(($v)->value0), (((($__local_var_2)->bimap)($f))($g))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  $bifoldableProduct21_4 = ($bifoldableProduct2_1)((($dictBitraversable1)->Bifoldable1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["bitraverse" => function($dictApplicative) use (&$dictBitraversable, &$dictBitraversable1) {
  $__num = \func_num_args();
  $Apply0_5 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bitraverse3_6 = (($dictBitraversable)->bitraverse)($dictApplicative);
  $bitraverse4_7 = (($dictBitraversable1)->bitraverse)($dictApplicative);
  $__res = (function() use (&$Apply0_5, &$bitraverse3_6, &$bitraverse4_7) {
  $__fn = function($l, $r = null, $v = null) use (&$Apply0_5, &$bitraverse3_6, &$bitraverse4_7, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($Apply0_5)->apply)(((((($Apply0_5)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_Product2_Product2'] ?? \PhpursThunks::eval('Data_Functor_Product2_Product2'))))(((($bitraverse3_6)($l))($r))(($v)->value0))))(((($bitraverse4_7)($l))($r))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "bisequence" => function($dictApplicative) use (&$dictBitraversable, &$dictBitraversable1) {
  $__num = \func_num_args();
  $Apply0_8 = (($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bisequence3_9 = (($dictBitraversable)->bisequence)($dictApplicative);
  $bisequence4_10 = (($dictBitraversable1)->bisequence)($dictApplicative);
  $__res = function($v) use (&$Apply0_8, &$bisequence3_9, &$bisequence4_10) {
  $__num = \func_num_args();
  $__res = ((($Apply0_8)->apply)(((((($Apply0_8)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_Product2_Product2'] ?? \PhpursThunks::eval('Data_Functor_Product2_Product2'))))(($bisequence3_9)(($v)->value0))))(($bisequence4_10)(($v)->value1));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifunctor0" => function($dollar__unused_0) use (&$bifunctorProduct21_3) {
  $__num = \func_num_args();
  $__res = $bifunctorProduct21_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Bifoldable1" => function($dollar__unused_0) use (&$bifoldableProduct21_4) {
  $__num = \func_num_args();
  $__res = $bifoldableProduct21_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Bitraversable_bitraverseDefault'] = function() { $v = (function() {
  $__fn = function($dictBitraversable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $bisequence2_0 = (($dictBitraversable)->bisequence)($dictApplicative);
  $__res = (function() use (&$bisequence2_0, &$dictBitraversable) {
  $__fn = function($f, $g = null, $t = null) use (&$bisequence2_0, &$dictBitraversable, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ($bisequence2_0)((((((($dictBitraversable)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->bimap)($f))($g))($t));
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
\PhpursThunks::$thunks['Data_Bitraversable_bifor'] = function() { $v = (function() {
  $__fn = function($dictBitraversable, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $bitraverse2_0 = (($dictBitraversable)->bitraverse)($dictApplicative);
  $__res = (function() use (&$bitraverse2_0) {
  $__fn = function($t, $f = null, $g = null) use (&$bitraverse2_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($bitraverse2_0)($f))($g))($t);
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
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };


















