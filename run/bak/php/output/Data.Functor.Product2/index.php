<?php

namespace Data\Functor\Product2;

// ALL IMPORTS: Control.Biapplicative, Control.Biapply, Data.Bifunctor, Data.Eq, Data.Functor, Data.Functor.Product2, Data.HeytingAlgebra, Data.Ord, Data.Ordering, Data.Profunctor, Data.Semigroup, Data.Show, Prelude, Prim
// TO REQUIRE: Control.Biapplicative, Control.Biapply, Data.Bifunctor, Data.Eq, Data.Functor, Data.Functor.Product2, Data.HeytingAlgebra, Data.Ord, Data.Ordering, Data.Profunctor, Data.Semigroup, Data.Show, Prelude
require_once __DIR__ . '/../Control.Biapplicative/index.php';
require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Product2/index.php';
require_once __DIR__ . '/../Data.HeytingAlgebra/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Show/index.php';
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
\PhpursThunks::$thunks['Data_Functor_Product2_Product2'] = function() { $v = (function() {
  $__fn = function($value0, $value1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product2", $value0, $value1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Product2_showProduct2'] = function() { $v = (function() {
  $__fn = function($dictShow, $dictShow1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["show" => function($v) use (&$dictShow, &$dictShow1) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(Product2 "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)(($v)->value0)))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))(" "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow1)->show)(($v)->value1)))(")"))));
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
\PhpursThunks::$thunks['Data_Functor_Product2_profunctorProduct2'] = function() { $v = (function() {
  $__fn = function($dictProfunctor, $dictProfunctor1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["dimap" => (function() use (&$dictProfunctor, &$dictProfunctor1) {
  $__fn = function($f, $g = null, $v = null) use (&$dictProfunctor, &$dictProfunctor1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Product2", (((($dictProfunctor)->dimap)($f))($g))(($v)->value0), (((($dictProfunctor1)->dimap)($f))($g))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Product2_functorProduct2'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $dictFunctor1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["map" => (function() use (&$dictFunctor, &$dictFunctor1) {
  $__fn = function($f, $v = null) use (&$dictFunctor, &$dictFunctor1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product2", ((($dictFunctor)->map)($f))(($v)->value0), ((($dictFunctor1)->map)($f))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Product2_eqProduct2'] = function() { $v = (function() {
  $__fn = function($dictEq, $dictEq1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["eq" => (function() use (&$dictEq, &$dictEq1) {
  $__fn = function($x, $y = null) use (&$dictEq, &$dictEq1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($GLOBALS['Data_HeytingAlgebra_boolConj'] ?? \PhpursThunks::eval('Data_HeytingAlgebra_boolConj')))(((($dictEq)->eq)(($x)->value0))(($y)->value0)))(((($dictEq1)->eq)(($x)->value1))(($y)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Product2_ordProduct2'] = function() { $v = function($dictOrd) {
  $__num = \func_num_args();
  $eqProduct21_0 = (($GLOBALS['Data_Functor_Product2_eqProduct2'] ?? \PhpursThunks::eval('Data_Functor_Product2_eqProduct2')))((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd1) use (&$dictOrd, &$eqProduct21_0) {
  $__num = \func_num_args();
  $eqProduct22_1 = ($eqProduct21_0)((($dictOrd1)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["compare" => (function() use (&$dictOrd, &$dictOrd1) {
  $__fn = function($x, $y = null) use (&$dictOrd, &$dictOrd1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $v_2 = ((($dictOrd)->compare)(($x)->value0))(($y)->value0);
  if ((is_object($v_2) && (($v_2)->tag === "LT"))) {
$__t3 = new Phpurs_Data0("LT");
} else {
if ((is_object($v_2) && (($v_2)->tag === "GT"))) {
$__t3 = new Phpurs_Data0("GT");
} else {
$__t3 = ((($dictOrd1)->compare)(($x)->value1))(($y)->value1);
};
};
  $__res = $__t3;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqProduct22_1) {
  $__num = \func_num_args();
  $__res = $eqProduct22_1;
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
\PhpursThunks::$thunks['Data_Functor_Product2_bifunctorProduct2'] = function() { $v = (function() {
  $__fn = function($dictBifunctor, $dictBifunctor1 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["bimap" => (function() use (&$dictBifunctor, &$dictBifunctor1) {
  $__fn = function($f, $g = null, $v = null) use (&$dictBifunctor, &$dictBifunctor1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Product2", (((($dictBifunctor)->bimap)($f))($g))(($v)->value0), (((($dictBifunctor1)->bimap)($f))($g))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Product2_biapplyProduct2'] = function() { $v = function($dictBiapply) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictBiapply)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictBiapply1) use (&$__local_var_0, &$dictBiapply) {
  $__num = \func_num_args();
  $__local_var_1 = (($dictBiapply1)->Bifunctor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $bifunctorProduct22_2 = (object)["bimap" => (function() use (&$__local_var_0, &$__local_var_1) {
  $__fn = function($f, $g = null, $v = null) use (&$__local_var_0, &$__local_var_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = new Phpurs_Data2("Product2", (((($__local_var_0)->bimap)($f))($g))(($v)->value0), (((($__local_var_1)->bimap)($f))($g))(($v)->value1));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["biapply" => (function() use (&$dictBiapply, &$dictBiapply1) {
  $__fn = function($v, $v1 = null) use (&$dictBiapply, &$dictBiapply1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product2", ((($dictBiapply)->biapply)(($v)->value0))(($v1)->value0), ((($dictBiapply1)->biapply)(($v)->value1))(($v1)->value1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => function($dollar__unused_0) use (&$bifunctorProduct22_2) {
  $__num = \func_num_args();
  $__res = $bifunctorProduct22_2;
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
\PhpursThunks::$thunks['Data_Functor_Product2_biapplicativeProduct2'] = function() { $v = function($dictBiapplicative) {
  $__num = \func_num_args();
  $biapplyProduct21_0 = (($GLOBALS['Data_Functor_Product2_biapplyProduct2'] ?? \PhpursThunks::eval('Data_Functor_Product2_biapplyProduct2')))((($dictBiapplicative)->Biapply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictBiapplicative1) use (&$biapplyProduct21_0, &$dictBiapplicative) {
  $__num = \func_num_args();
  $biapplyProduct22_1 = ($biapplyProduct21_0)((($dictBiapplicative1)->Biapply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["bipure" => (function() use (&$dictBiapplicative, &$dictBiapplicative1) {
  $__fn = function($a, $b = null) use (&$dictBiapplicative, &$dictBiapplicative1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = new Phpurs_Data2("Product2", ((($dictBiapplicative)->bipure)($a))($b), ((($dictBiapplicative1)->bipure)($a))($b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Biapply0" => function($dollar__unused_0) use (&$biapplyProduct22_1) {
  $__num = \func_num_args();
  $__res = $biapplyProduct22_1;
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
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };











