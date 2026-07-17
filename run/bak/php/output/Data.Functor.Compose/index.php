<?php

namespace Data\Functor\Compose;

// ALL IMPORTS: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Plus, Control.Semigroupoid, Data.Eq, Data.Function, Data.Functor, Data.Functor.App, Data.Functor.Compose, Data.Newtype, Data.Ord, Data.Semigroup, Data.Show, Prelude, Prim
// TO REQUIRE: Control.Alt, Control.Alternative, Control.Applicative, Control.Apply, Control.Plus, Control.Semigroupoid, Data.Eq, Data.Function, Data.Functor, Data.Functor.App, Data.Functor.Compose, Data.Newtype, Data.Ord, Data.Semigroup, Data.Show, Prelude
require_once __DIR__ . '/../Control.Alt/index.php';
require_once __DIR__ . '/../Control.Alternative/index.php';
require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Control.Plus/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Eq/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.App/index.php';
require_once __DIR__ . '/../Data.Functor.Compose/index.php';
require_once __DIR__ . '/../Data.Newtype/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
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
\PhpursThunks::$thunks['Data_Functor_Compose_Compose'] = function() { $v = function($x) {
  $__num = \func_num_args();
  $__res = $x;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Compose_showCompose'] = function() { $v = function($dictShow) {
  $__num = \func_num_args();
  $__res = (object)["show" => function($v) use (&$dictShow) {
  $__num = \func_num_args();
  $__res = ((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))("(Compose "))(((($GLOBALS['Data_Semigroup_concatString'] ?? \PhpursThunks::eval('Data_Semigroup_concatString')))((($dictShow)->show)($v)))(")"));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Compose_newtypeCompose'] = function() { $v = (object)["Coercible0" => function($dollar__unused_0) {
  $__num = \func_num_args();
  $__res = ($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}]; return $v; };
\PhpursThunks::$thunks['Data_Functor_Compose_functorCompose'] = function() { $v = (function() {
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
  $__res = ((($dictFunctor)->map)((($dictFunctor1)->map)($f)))($v);
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
\PhpursThunks::$thunks['Data_Functor_Compose_eqCompose'] = function() { $v = (function() {
  $__fn = function($dictEq1, $dictEq11 = null, $dictEq = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $eq11_0 = (($dictEq11)->eq1)($dictEq);
  $eq11_1 = (($dictEq1)->eq1)((object)["eq" => (function() use (&$eq11_0) {
  $__fn = function($x, $y = null) use (&$eq11_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($eq11_0)($x))($y);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]);
  $__res = (object)["eq" => (function() use (&$eq11_1) {
  $__fn = function($v, $v1 = null) use (&$eq11_1, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($eq11_1)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($v)))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($v1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Compose_ordCompose'] = function() { $v = function($dictOrd1) {
  $__num = \func_num_args();
  $eqCompose1_0 = (($GLOBALS['Data_Functor_Compose_eqCompose'] ?? \PhpursThunks::eval('Data_Functor_Compose_eqCompose')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd11) use (&$dictOrd1, &$eqCompose1_0) {
  $__num = \func_num_args();
  $ordApp_1 = (($GLOBALS['Data_Functor_App_ordApp'] ?? \PhpursThunks::eval('Data_Functor_App_ordApp')))($dictOrd11);
  $eqCompose2_2 = ($eqCompose1_0)((($dictOrd11)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd) use (&$dictOrd1, &$eqCompose2_2, &$ordApp_1) {
  $__num = \func_num_args();
  $compare11_3 = (($dictOrd1)->compare1)(($ordApp_1)($dictOrd));
  $eqCompose3_4 = ($eqCompose2_2)((($dictOrd)->Eq0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["compare" => (function() use (&$compare11_3) {
  $__fn = function($v, $v1 = null) use (&$compare11_3, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($compare11_3)((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($v)))((($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \PhpursThunks::eval('Unsafe_Coerce_unsafeCoerce')))($v1));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Eq0" => function($dollar__unused_0) use (&$eqCompose3_4) {
  $__num = \func_num_args();
  $__res = $eqCompose3_4;
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
};
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Data_Functor_Compose_eq1Compose'] = function() { $v = (function() {
  $__fn = function($dictEq1, $dictEq11 = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (object)["eq1" => function($dictEq) use (&$dictEq1, &$dictEq11) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Data_Functor_Compose_eqCompose'] ?? \PhpursThunks::eval('Data_Functor_Compose_eqCompose')))($dictEq1))($dictEq11))($dictEq))->eq;
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
\PhpursThunks::$thunks['Data_Functor_Compose_ord1Compose'] = function() { $v = function($dictOrd1) {
  $__num = \func_num_args();
  $ordCompose1_0 = (($GLOBALS['Data_Functor_Compose_ordCompose'] ?? \PhpursThunks::eval('Data_Functor_Compose_ordCompose')))($dictOrd1);
  $eq1Compose1_1 = (($GLOBALS['Data_Functor_Compose_eq1Compose'] ?? \PhpursThunks::eval('Data_Functor_Compose_eq1Compose')))((($dictOrd1)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictOrd11) use (&$eq1Compose1_1, &$ordCompose1_0) {
  $__num = \func_num_args();
  $ordCompose2_2 = ($ordCompose1_0)($dictOrd11);
  $eq1Compose2_3 = ($eq1Compose1_1)((($dictOrd11)->Eq10)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["compare1" => function($dictOrd) use (&$ordCompose2_2) {
  $__num = \func_num_args();
  $__res = (($ordCompose2_2)($dictOrd))->compare;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Eq10" => function($dollar__unused_0) use (&$eq1Compose2_3) {
  $__num = \func_num_args();
  $__res = $eq1Compose2_3;
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
\PhpursThunks::$thunks['Data_Functor_Compose_bihoistCompose'] = function() { $v = (function() {
  $__fn = function($dictFunctor, $natF = null, $natG = null, $v = null) use (&$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ($natF)(((($dictFunctor)->map)($natG))($v));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})(); return $v; };
\PhpursThunks::$thunks['Data_Functor_Compose_applyCompose'] = function() { $v = function($dictApply) {
  $__num = \func_num_args();
  $Functor0_0 = (($dictApply)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictApply1) use (&$Functor0_0, &$dictApply) {
  $__num = \func_num_args();
  $apply1_1 = ($dictApply1)->apply;
  $__local_var_2 = (($dictApply1)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $functorCompose2_3 = (object)["map" => (function() use (&$Functor0_0, &$__local_var_2) {
  $__fn = function($f, $v = null) use (&$Functor0_0, &$__local_var_2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($Functor0_0)->map)((($__local_var_2)->map)($f)))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["apply" => (function() use (&$Functor0_0, &$apply1_1, &$dictApply) {
  $__fn = function($v, $v1 = null) use (&$Functor0_0, &$apply1_1, &$dictApply, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictApply)->apply)(((($Functor0_0)->map)($apply1_1))($v)))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorCompose2_3) {
  $__num = \func_num_args();
  $__res = $functorCompose2_3;
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
\PhpursThunks::$thunks['Data_Functor_Compose_applicativeCompose'] = function() { $v = function($dictApplicative) {
  $__num = \func_num_args();
  $pure_0 = ($dictApplicative)->pure;
  $applyCompose1_1 = (($GLOBALS['Data_Functor_Compose_applyCompose'] ?? \PhpursThunks::eval('Data_Functor_Compose_applyCompose')))((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictApplicative1) use (&$applyCompose1_1, &$pure_0) {
  $__num = \func_num_args();
  $applyCompose2_2 = ($applyCompose1_1)((($dictApplicative1)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["pure" => ((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))(($GLOBALS['Data_Functor_Compose_Compose'] ?? \PhpursThunks::eval('Data_Functor_Compose_Compose'))))(((($GLOBALS['Control_Semigroupoid_composeImpl'] ?? \PhpursThunks::eval('Control_Semigroupoid_composeImpl')))($pure_0))(($dictApplicative1)->pure)), "Apply0" => function($dollar__unused_0) use (&$applyCompose2_2) {
  $__num = \func_num_args();
  $__res = $applyCompose2_2;
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
\PhpursThunks::$thunks['Data_Functor_Compose_altCompose'] = function() { $v = function($dictAlt) {
  $__num = \func_num_args();
  $__local_var_0 = (($dictAlt)->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined')));
  $__res = function($dictFunctor) use (&$__local_var_0, &$dictAlt) {
  $__num = \func_num_args();
  $functorCompose2_1 = (object)["map" => (function() use (&$__local_var_0, &$dictFunctor) {
  $__fn = function($f, $v = null) use (&$__local_var_0, &$dictFunctor, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($__local_var_0)->map)((($dictFunctor)->map)($f)))($v);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  $__res = (object)["alt" => (function() use (&$dictAlt) {
  $__fn = function($v, $v1 = null) use (&$dictAlt, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((($dictAlt)->alt)($v))($v1);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($dollar__unused_0) use (&$functorCompose2_1) {
  $__num = \func_num_args();
  $__res = $functorCompose2_1;
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
\PhpursThunks::$thunks['Data_Functor_Compose_plusCompose'] = function() { $v = function($dictPlus) {
  $__num = \func_num_args();
  $empty_0 = ($dictPlus)->empty;
  $altCompose1_1 = (($GLOBALS['Data_Functor_Compose_altCompose'] ?? \PhpursThunks::eval('Data_Functor_Compose_altCompose')))((($dictPlus)->Alt0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictFunctor) use (&$altCompose1_1, &$empty_0) {
  $__num = \func_num_args();
  $altCompose2_2 = ($altCompose1_1)($dictFunctor);
  $__res = (object)["empty" => $empty_0, "Alt0" => function($dollar__unused_0) use (&$altCompose2_2) {
  $__num = \func_num_args();
  $__res = $altCompose2_2;
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
\PhpursThunks::$thunks['Data_Functor_Compose_alternativeCompose'] = function() { $v = function($dictAlternative) {
  $__num = \func_num_args();
  $applicativeCompose1_0 = (($GLOBALS['Data_Functor_Compose_applicativeCompose'] ?? \PhpursThunks::eval('Data_Functor_Compose_applicativeCompose')))((($dictAlternative)->Applicative0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $plusCompose1_1 = (($GLOBALS['Data_Functor_Compose_plusCompose'] ?? \PhpursThunks::eval('Data_Functor_Compose_plusCompose')))((($dictAlternative)->Plus1)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = function($dictApplicative) use (&$applicativeCompose1_0, &$plusCompose1_1) {
  $__num = \func_num_args();
  $applicativeCompose2_2 = ($applicativeCompose1_0)($dictApplicative);
  $plusCompose2_3 = ($plusCompose1_1)((((($dictApplicative)->Apply0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))))->Functor0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["Applicative0" => function($dollar__unused_0) use (&$applicativeCompose2_2) {
  $__num = \func_num_args();
  $__res = $applicativeCompose2_2;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}, "Plus1" => function($dollar__unused_0) use (&$plusCompose2_3) {
  $__num = \func_num_args();
  $__res = $plusCompose2_3;
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
















