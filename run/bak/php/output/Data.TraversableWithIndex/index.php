<?php

namespace Data\TraversableWithIndex;

// ALL IMPORTS: Control.Applicative, Control.Apply, Control.Semigroupoid, Data.Const, Data.Either, Data.FoldableWithIndex, Data.Function, Data.Functor, Data.Functor.App, Data.Functor.Compose, Data.Functor.Coproduct, Data.Functor.Product, Data.FunctorWithIndex, Data.Identity, Data.Maybe, Data.Maybe.First, Data.Maybe.Last, Data.Monoid.Additive, Data.Monoid.Conj, Data.Monoid.Disj, Data.Monoid.Dual, Data.Monoid.Multiplicative, Data.Traversable, Data.Traversable.Accum, Data.Traversable.Accum.Internal, Data.TraversableWithIndex, Data.Tuple, Data.Unit, Prelude, Prim
// TO REQUIRE: Control.Applicative, Control.Apply, Control.Semigroupoid, Data.Const, Data.Either, Data.FoldableWithIndex, Data.Function, Data.Functor, Data.Functor.App, Data.Functor.Compose, Data.Functor.Coproduct, Data.Functor.Product, Data.FunctorWithIndex, Data.Identity, Data.Maybe, Data.Maybe.First, Data.Maybe.Last, Data.Monoid.Additive, Data.Monoid.Conj, Data.Monoid.Disj, Data.Monoid.Dual, Data.Monoid.Multiplicative, Data.Traversable, Data.Traversable.Accum, Data.Traversable.Accum.Internal, Data.TraversableWithIndex, Data.Tuple, Data.Unit, Prelude
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Const/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.FoldableWithIndex/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Functor.Coproduct/index.php';
require_once __DIR__ . '/../Data.Functor.Product/index.php';
require_once __DIR__ . '/../Data.FunctorWithIndex/index.php';
require_once __DIR__ . '/../Data.Identity/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Maybe.First/index.php';
require_once __DIR__ . '/../Data.Maybe.Last/index.php';
require_once __DIR__ . '/../Data.Monoid.Additive/index.php';
require_once __DIR__ . '/../Data.Monoid.Conj/index.php';
require_once __DIR__ . '/../Data.Monoid.Disj/index.php';
require_once __DIR__ . '/../Data.Monoid.Dual/index.php';
require_once __DIR__ . '/../Data.Monoid.Multiplicative/index.php';
require_once __DIR__ . '/../Data.Traversable/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
require_once __DIR__ . '/../Data.TraversableWithIndex/index.php';
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
\PhpursThunks::$thunks['Data_TraversableWithIndex_traverseWithIndexDefault'] = function() { $v = (function() {
  $__fn = function($dictTraversableWithIndex, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $sequence1_0 = (((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->sequence)($dictApplicative);
  $__res = function($f) use (&$dictTraversableWithIndex, &$sequence1_0) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($sequence1_0))((((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->mapWithIndex)($f));
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
\PhpursThunks::$thunks['Data_TraversableWithIndex_traverseWithIndex'] = function() { $v = function($dict) {
  $__num = \func_num_args();
  $__res = ($dict)->traverseWithIndex;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traverseDefault'] = function() { $v = (function() {
  $__fn = function($dictTraversableWithIndex, $dictApplicative = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $traverseWithIndex2_0 = (($dictTraversableWithIndex)->traverseWithIndex)($dictApplicative);
  $__res = function($f) use (&$traverseWithIndex2_0) {
  $__num = \func_num_args();
  $__res = ($traverseWithIndex2_0)(function($v) use (&$f) {
  $__num = \func_num_args();
  $__res = $f;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
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
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexTuple'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)((($GLOBALS['Data_Tuple_Tuple'] ?? \PhpursThunks::eval('Data_Tuple_Tuple')))(($v)->value0)))((($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexTuple'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexTuple'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableTuple'] ?? \PhpursThunks::eval('Data_Traversable_traversableTuple'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexProduct'] = function() { $v = function($dictTraversableWithIndex) {
  $__num = \func_num_args();
  $functorWithIndexProduct_0 = (($GLOBALS['Data_FunctorWithIndex_functorWithIndexProduct'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexProduct')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $foldableWithIndexProduct_1 = (($GLOBALS['Data_FoldableWithIndex_foldableWithIndexProduct'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexProduct')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traversableProduct_2 = (($GLOBALS['Data_Traversable_traversableProduct'] ?? \PhpursThunks::eval('Data_Traversable_traversableProduct')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictTraversableWithIndex1) use (&$dictTraversableWithIndex, &$foldableWithIndexProduct_1, &$functorWithIndexProduct_0, &$traversableProduct_2) {
  $__num = \func_num_args();
  $functorWithIndexProduct1_3 = ($functorWithIndexProduct_0)((($dictTraversableWithIndex1)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $foldableWithIndexProduct1_4 = ($foldableWithIndexProduct_1)((($dictTraversableWithIndex1)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traversableProduct1_5 = ($traversableProduct_2)((($dictTraversableWithIndex1)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use (&$dictTraversableWithIndex, &$dictTraversableWithIndex1) {
  $__num = \func_num_args();
  $lift2_6 = (($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traverseWithIndex3_7 = (($dictTraversableWithIndex)->traverseWithIndex)($dictApplicative);
  $traverseWithIndex4_8 = (($dictTraversableWithIndex1)->traverseWithIndex)($dictApplicative);
  $__res = (function() use (&$lift2_6, &$traverseWithIndex3_7, &$traverseWithIndex4_8) {
  $__fn = function($f, $v = null) use (&$lift2_6, &$traverseWithIndex3_7, &$traverseWithIndex4_8, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($lift2_6)(($GLOBALS['Data_Functor_Product_product'] ?? \PhpursThunks::eval('Data_Functor_Product_product'))))((($traverseWithIndex3_7)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')))))(($v)->value0)))((($traverseWithIndex4_8)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')))))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($dollar__unused_0) use (&$functorWithIndexProduct1_3) {
  $__num = \func_num_args();
  $__res = $functorWithIndexProduct1_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) use (&$foldableWithIndexProduct1_4) {
  $__num = \func_num_args();
  $__res = $foldableWithIndexProduct1_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) use (&$traversableProduct1_5) {
  $__num = \func_num_args();
  $__res = $traversableProduct1_5;
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
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexMultiplicative'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Traversable_traversableMultiplicative'] ?? \PhpursThunks::eval('Data_Traversable_traversableMultiplicative')))->traverse)($dictApplicative))(($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexMultiplicative'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexMultiplicative'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexMultiplicative'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexMultiplicative'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableMultiplicative'] ?? \PhpursThunks::eval('Data_Traversable_traversableMultiplicative'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexMaybe'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Traversable_traversableMaybe'] ?? \PhpursThunks::eval('Data_Traversable_traversableMaybe')))->traverse)($dictApplicative))(($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexMaybe'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexMaybe'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableMaybe'] ?? \PhpursThunks::eval('Data_Traversable_traversableMaybe'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexLast'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Traversable_traversableLast'] ?? \PhpursThunks::eval('Data_Traversable_traversableLast')))->traverse)($dictApplicative))(($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexLast'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexLast'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexLast'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexLast'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableLast'] ?? \PhpursThunks::eval('Data_Traversable_traversableLast'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexIdentity'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Identity_Identity'] ?? \PhpursThunks::eval('Data_Identity_Identity'))))((($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))($v));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexIdentity'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexIdentity'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexIdentity'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexIdentity'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableIdentity'] ?? \PhpursThunks::eval('Data_Traversable_traversableIdentity'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexFirst'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Traversable_traversableFirst'] ?? \PhpursThunks::eval('Data_Traversable_traversableFirst')))->traverse)($dictApplicative))(($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexFirst'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexFirst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexFirst'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexFirst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableFirst'] ?? \PhpursThunks::eval('Data_Traversable_traversableFirst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexEither'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  if ((is_object($v1) && (($v1)->tag === "Left"))) {
$__t0 = (($dictApplicative)->pure)(new Phpurs_Data1("Left", ($v1)->value0));
} else {
if ((is_object($v1) && (($v1)->tag === "Right"))) {
$__t0 = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right'))))((($v)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))))(($v1)->value0));
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t0 = null;
};
};
  $__res = $__t0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexEither'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexEither'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexEither'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexEither'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableEither'] ?? \PhpursThunks::eval('Data_Traversable_traversableEither'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexDual'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Traversable_traversableDual'] ?? \PhpursThunks::eval('Data_Traversable_traversableDual')))->traverse)($dictApplicative))(($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexDual'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexDual'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexDual'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexDual'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableDual'] ?? \PhpursThunks::eval('Data_Traversable_traversableDual'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexDisj'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Traversable_traversableDisj'] ?? \PhpursThunks::eval('Data_Traversable_traversableDisj')))->traverse)($dictApplicative))(($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexDisj'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexDisj'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexDisj'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexDisj'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableDisj'] ?? \PhpursThunks::eval('Data_Traversable_traversableDisj'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexCoproduct'] = function() { $v = function($dictTraversableWithIndex) {
  $__num = \func_num_args();
  $functorWithIndexCoproduct_0 = (($GLOBALS['Data_FunctorWithIndex_functorWithIndexCoproduct'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexCoproduct')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $foldableWithIndexCoproduct_1 = (($GLOBALS['Data_FoldableWithIndex_foldableWithIndexCoproduct'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexCoproduct')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traversableCoproduct_2 = (($GLOBALS['Data_Traversable_traversableCoproduct'] ?? \PhpursThunks::eval('Data_Traversable_traversableCoproduct')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictTraversableWithIndex1) use (&$dictTraversableWithIndex, &$foldableWithIndexCoproduct_1, &$functorWithIndexCoproduct_0, &$traversableCoproduct_2) {
  $__num = \func_num_args();
  $functorWithIndexCoproduct1_3 = ($functorWithIndexCoproduct_0)((($dictTraversableWithIndex1)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $foldableWithIndexCoproduct1_4 = ($foldableWithIndexCoproduct_1)((($dictTraversableWithIndex1)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traversableCoproduct1_5 = ($traversableCoproduct_2)((($dictTraversableWithIndex1)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use (&$dictTraversableWithIndex, &$dictTraversableWithIndex1) {
  $__num = \func_num_args();
  $__local_var_6 = (((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $traverseWithIndex3_7 = (($dictTraversableWithIndex)->traverseWithIndex)($dictApplicative);
  $traverseWithIndex4_8 = (($dictTraversableWithIndex1)->traverseWithIndex)($dictApplicative);
  $__res = function($f) use (&$__local_var_6, &$traverseWithIndex3_7, &$traverseWithIndex4_8) {
  $__num = \func_num_args();
  $__local_var_9 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($__local_var_6)->map)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \PhpursThunks::eval('Data_Functor_Coproduct_Coproduct'))))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left'))))))(($traverseWithIndex3_7)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Left'] ?? \PhpursThunks::eval('Data_Either_Left')))));
  $__local_var_10 = ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))((($__local_var_6)->map)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Functor_Coproduct_Coproduct'] ?? \PhpursThunks::eval('Data_Functor_Coproduct_Coproduct'))))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right'))))))(($traverseWithIndex4_8)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($f))(($GLOBALS['Data_Either_Right'] ?? \PhpursThunks::eval('Data_Either_Right')))));
  $__res = function($v2) use (&$__local_var_10, &$__local_var_9) {
  $__num = \func_num_args();
  if ((is_object($v2) && (($v2)->tag === "Left"))) {
$__t11 = ($__local_var_9)(($v2)->value0);
} else {
if ((is_object($v2) && (($v2)->tag === "Right"))) {
$__t11 = ($__local_var_10)(($v2)->value0);
} else {
throw new \Exception("Failed pattern match at " . __FILE__ . ":" . __LINE__);
$__t11 = null;
};
};
  $__res = $__t11;
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
}, "FunctorWithIndex0" => function($dollar__unused_0) use (&$functorWithIndexCoproduct1_3) {
  $__num = \func_num_args();
  $__res = $functorWithIndexCoproduct1_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) use (&$foldableWithIndexCoproduct1_4) {
  $__num = \func_num_args();
  $__res = $foldableWithIndexCoproduct1_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) use (&$traversableCoproduct1_5) {
  $__num = \func_num_args();
  $__res = $traversableCoproduct1_5;
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
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexConst'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $v = null, $v1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (($dictApplicative)->pure)($v1);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexConst'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexConst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexConst'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexConst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableConst'] ?? \PhpursThunks::eval('Data_Traversable_traversableConst'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexConj'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Traversable_traversableConj'] ?? \PhpursThunks::eval('Data_Traversable_traversableConj')))->traverse)($dictApplicative))(($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexConj'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexConj'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexConj'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexConj'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableConj'] ?? \PhpursThunks::eval('Data_Traversable_traversableConj'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexCompose'] = function() { $v = function($dictTraversableWithIndex) {
  $__num = \func_num_args();
  $functorWithIndexCompose_0 = (($GLOBALS['Data_FunctorWithIndex_functorWithIndexCompose'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexCompose')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $foldableWithIndexCompose_1 = (($GLOBALS['Data_FoldableWithIndex_foldableWithIndexCompose'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexCompose')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traversableCompose_2 = (($GLOBALS['Data_Traversable_traversableCompose'] ?? \PhpursThunks::eval('Data_Traversable_traversableCompose')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictTraversableWithIndex1) use (&$dictTraversableWithIndex, &$foldableWithIndexCompose_1, &$functorWithIndexCompose_0, &$traversableCompose_2) {
  $__num = \func_num_args();
  $functorWithIndexCompose1_3 = ($functorWithIndexCompose_0)((($dictTraversableWithIndex1)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $foldableWithIndexCompose1_4 = ($foldableWithIndexCompose_1)((($dictTraversableWithIndex1)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traversableCompose1_5 = ($traversableCompose_2)((($dictTraversableWithIndex1)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use (&$dictTraversableWithIndex, &$dictTraversableWithIndex1) {
  $__num = \func_num_args();
  $traverseWithIndex3_6 = (($dictTraversableWithIndex)->traverseWithIndex)($dictApplicative);
  $traverseWithIndex4_7 = (($dictTraversableWithIndex1)->traverseWithIndex)($dictApplicative);
  $__res = (function() use (&$dictApplicative, &$traverseWithIndex3_6, &$traverseWithIndex4_7) {
  $__fn = function($f, $v = null) use (&$dictApplicative, &$traverseWithIndex3_6, &$traverseWithIndex4_7, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_Compose_Compose'] ?? \PhpursThunks::eval('Data_Functor_Compose_Compose'))))((($traverseWithIndex3_6)(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($traverseWithIndex4_7))((function() use (&$f) {
  $__fn = function($a, $b = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ($f)(new Phpurs_Data2("Tuple", $a, $b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})())))($v));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($dollar__unused_0) use (&$functorWithIndexCompose1_3) {
  $__num = \func_num_args();
  $__res = $functorWithIndexCompose1_3;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) use (&$foldableWithIndexCompose1_4) {
  $__num = \func_num_args();
  $__res = $foldableWithIndexCompose1_4;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) use (&$traversableCompose1_5) {
  $__num = \func_num_args();
  $__res = $traversableCompose1_5;
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
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexArray'] = function() { $v = (object)["traverseWithIndex" => function($dictApplicative) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_TraversableWithIndex_traverseWithIndexDefault'] ?? \PhpursThunks::eval('Data_TraversableWithIndex_traverseWithIndexDefault')))(($GLOBALS['Data_TraversableWithIndex_traversableWithIndexArray'] ?? \PhpursThunks::eval('Data_TraversableWithIndex_traversableWithIndexArray'))))($dictApplicative);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexArray'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexArray'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexArray'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexArray'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableArray'] ?? \PhpursThunks::eval('Data_Traversable_traversableArray'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexApp'] = function() { $v = function($dictTraversableWithIndex) {
  $__num = \func_num_args();
  $functorWithIndexApp_0 = (($GLOBALS['Data_FunctorWithIndex_functorWithIndexApp'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexApp')))((($dictTraversableWithIndex)->FunctorWithIndex0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $foldableWithIndexApp_1 = (($GLOBALS['Data_FoldableWithIndex_foldableWithIndexApp'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexApp')))((($dictTraversableWithIndex)->FoldableWithIndex1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $traversableApp_2 = (($GLOBALS['Data_Traversable_traversableApp'] ?? \PhpursThunks::eval('Data_Traversable_traversableApp')))((($dictTraversableWithIndex)->Traversable2)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["traverseWithIndex" => function($dictApplicative) use (&$dictTraversableWithIndex) {
  $__num = \func_num_args();
  $traverseWithIndex2_3 = (($dictTraversableWithIndex)->traverseWithIndex)($dictApplicative);
  $__res = (function() use (&$dictApplicative, &$traverseWithIndex2_3) {
  $__fn = function($f, $v = null) use (&$dictApplicative, &$traverseWithIndex2_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->map)(($GLOBALS['Data_Functor_App_App'] ?? \PhpursThunks::eval('Data_Functor_App_App'))))((($traverseWithIndex2_3)($f))($v));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FunctorWithIndex0" => function($dollar__unused_0) use (&$functorWithIndexApp_0) {
  $__num = \func_num_args();
  $__res = $functorWithIndexApp_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) use (&$foldableWithIndexApp_1) {
  $__num = \func_num_args();
  $__res = $foldableWithIndexApp_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) use (&$traversableApp_2) {
  $__num = \func_num_args();
  $__res = $traversableApp_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_traversableWithIndexAdditive'] = function() { $v = (object)["traverseWithIndex" => (function() {
  $__fn = function($dictApplicative, $f = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (((($GLOBALS['Data_Traversable_traversableAdditive'] ?? \PhpursThunks::eval('Data_Traversable_traversableAdditive')))->traverse)($dictApplicative))(($f)(($GLOBALS['Data_Unit_unit'] ?? \PhpursThunks::eval('Data_Unit_unit'))));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "FunctorWithIndex0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FunctorWithIndex_functorWithIndexAdditive'] ?? \PhpursThunks::eval('Data_FunctorWithIndex_functorWithIndexAdditive'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "FoldableWithIndex1" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_FoldableWithIndex_foldableWithIndexAdditive'] ?? \PhpursThunks::eval('Data_FoldableWithIndex_foldableWithIndexAdditive'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Traversable2" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Data_Traversable_traversableAdditive'] ?? \PhpursThunks::eval('Data_Traversable_traversableAdditive'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_mapAccumRWithIndex'] = function() { $v = function($dictTraversableWithIndex) {
  $__num = \func_num_args();
  $traverseWithIndex1_0 = (($dictTraversableWithIndex)->traverseWithIndex)(($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateR'] ?? \PhpursThunks::eval('Data_Traversable_Accum_Internal_applicativeStateR')));
  $__res = (function() use (&$traverseWithIndex1_0) {
  $__fn = function($f, $s0 = null, $xs = null) use (&$traverseWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($traverseWithIndex1_0)((function() use (&$f) {
  $__fn = function($i, $a = null, $s = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($f)($i))($s))($a);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))($xs))($s0);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_scanrWithIndex'] = function() { $v = function($dictTraversableWithIndex) {
  $__num = \func_num_args();
  $mapAccumRWithIndex1_0 = (($GLOBALS['Data_TraversableWithIndex_mapAccumRWithIndex'] ?? \PhpursThunks::eval('Data_TraversableWithIndex_mapAccumRWithIndex')))($dictTraversableWithIndex);
  $__res = (function() use (&$mapAccumRWithIndex1_0) {
  $__fn = function($f, $b0 = null, $xs = null) use (&$mapAccumRWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($mapAccumRWithIndex1_0)((function() use (&$f) {
  $__fn = function($i, $b = null, $a = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $b__prime___1 = ((($f)($i))($a))($b);
  $__res = (object)["accum" => $b__prime___1, "value" => $b__prime___1];
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))($b0))($xs))->value;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_mapAccumLWithIndex'] = function() { $v = function($dictTraversableWithIndex) {
  $__num = \func_num_args();
  $traverseWithIndex1_0 = (($dictTraversableWithIndex)->traverseWithIndex)(($GLOBALS['Data_Traversable_Accum_Internal_applicativeStateL'] ?? \PhpursThunks::eval('Data_Traversable_Accum_Internal_applicativeStateL')));
  $__res = (function() use (&$traverseWithIndex1_0) {
  $__fn = function($f, $s0 = null, $xs = null) use (&$traverseWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($traverseWithIndex1_0)((function() use (&$f) {
  $__fn = function($i, $a = null, $s = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((($f)($i))($s))($a);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))($xs))($s0);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_scanlWithIndex'] = function() { $v = function($dictTraversableWithIndex) {
  $__num = \func_num_args();
  $mapAccumLWithIndex1_0 = (($GLOBALS['Data_TraversableWithIndex_mapAccumLWithIndex'] ?? \PhpursThunks::eval('Data_TraversableWithIndex_mapAccumLWithIndex')))($dictTraversableWithIndex);
  $__res = (function() use (&$mapAccumLWithIndex1_0) {
  $__fn = function($f, $b0 = null, $xs = null) use (&$mapAccumLWithIndex1_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = (((($mapAccumLWithIndex1_0)((function() use (&$f) {
  $__fn = function($i, $b = null, $a = null) use (&$f, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $b__prime___1 = ((($f)($i))($b))($a);
  $__res = (object)["accum" => $b__prime___1, "value" => $b__prime___1];
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()))($b0))($xs))->value;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_TraversableWithIndex_forWithIndex'] = function() { $v = (function() {
  $__fn = function($dictApplicative, $dictTraversableWithIndex = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__local_var_0 = (($dictTraversableWithIndex)->traverseWithIndex)($dictApplicative);
  $__res = (function() use (&$__local_var_0) {
  $__fn = function($b, $a = null) use (&$__local_var_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($__local_var_0)($a))($b);
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



























