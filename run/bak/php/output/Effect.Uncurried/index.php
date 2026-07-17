<?php

namespace Effect\Uncurried;

// ALL IMPORTS: Data.Monoid, Data.Semigroup, Effect, Effect.Uncurried, Prim
// TO REQUIRE: Data.Monoid, Data.Semigroup, Effect, Effect.Uncurried
require_once __DIR__ . '/../Data.Monoid/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Uncurried/index.php';

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
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn9'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn9'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn9')))((function() use (&$dictSemigroup, &$f1, &$f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) use (&$dictSemigroup, &$f1, &$f2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 9);
  }
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))(((((((((((($GLOBALS['Effect_Uncurried_runEffectFn9'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn9')))($f1))($a))($b))($c))($d))($e))($f))($g))($h))($i)))(((((((((((($GLOBALS['Effect_Uncurried_runEffectFn9'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn9')))($f2))($a))($b))($c))($d))($e))($f))($g))($h))($i));
  goto __end;;
  __end:
  return $__num > 9 ? $__res(...\array_slice(\func_get_args(), 9)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn8'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn8'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn8')))((function() use (&$dictSemigroup, &$f1, &$f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) use (&$dictSemigroup, &$f1, &$f2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 8);
  }
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))((((((((((($GLOBALS['Effect_Uncurried_runEffectFn8'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn8')))($f1))($a))($b))($c))($d))($e))($f))($g))($h)))((((((((((($GLOBALS['Effect_Uncurried_runEffectFn8'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn8')))($f2))($a))($b))($c))($d))($e))($f))($g))($h));
  goto __end;;
  __end:
  return $__num > 8 ? $__res(...\array_slice(\func_get_args(), 8)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn7'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn7'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn7')))((function() use (&$dictSemigroup, &$f1, &$f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) use (&$dictSemigroup, &$f1, &$f2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 7);
  }
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))(((((((((($GLOBALS['Effect_Uncurried_runEffectFn7'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn7')))($f1))($a))($b))($c))($d))($e))($f))($g)))(((((((((($GLOBALS['Effect_Uncurried_runEffectFn7'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn7')))($f2))($a))($b))($c))($d))($e))($f))($g));
  goto __end;;
  __end:
  return $__num > 7 ? $__res(...\array_slice(\func_get_args(), 7)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn6'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn6'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn6')))((function() use (&$dictSemigroup, &$f1, &$f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null) use (&$dictSemigroup, &$f1, &$f2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 6);
  }
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))((((((((($GLOBALS['Effect_Uncurried_runEffectFn6'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn6')))($f1))($a))($b))($c))($d))($e))($f)))((((((((($GLOBALS['Effect_Uncurried_runEffectFn6'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn6')))($f2))($a))($b))($c))($d))($e))($f));
  goto __end;;
  __end:
  return $__num > 6 ? $__res(...\array_slice(\func_get_args(), 6)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn5'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn5'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn5')))((function() use (&$dictSemigroup, &$f1, &$f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null) use (&$dictSemigroup, &$f1, &$f2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))(((((((($GLOBALS['Effect_Uncurried_runEffectFn5'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn5')))($f1))($a))($b))($c))($d))($e)))(((((((($GLOBALS['Effect_Uncurried_runEffectFn5'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn5')))($f2))($a))($b))($c))($d))($e));
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn4'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn4'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn4')))((function() use (&$dictSemigroup, &$f1, &$f2) {
  $__fn = function($a, $b = null, $c = null, $d = null) use (&$dictSemigroup, &$f1, &$f2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))((((((($GLOBALS['Effect_Uncurried_runEffectFn4'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn4')))($f1))($a))($b))($c))($d)))((((((($GLOBALS['Effect_Uncurried_runEffectFn4'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn4')))($f2))($a))($b))($c))($d));
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn3'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn3'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn3')))((function() use (&$dictSemigroup, &$f1, &$f2) {
  $__fn = function($a, $b = null, $c = null) use (&$dictSemigroup, &$f1, &$f2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))(((((($GLOBALS['Effect_Uncurried_runEffectFn3'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn3')))($f1))($a))($b))($c)))(((((($GLOBALS['Effect_Uncurried_runEffectFn3'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn3')))($f2))($a))($b))($c));
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn2'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn2'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn2')))((function() use (&$dictSemigroup, &$f1, &$f2) {
  $__fn = function($a, $b = null) use (&$dictSemigroup, &$f1, &$f2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))((((($GLOBALS['Effect_Uncurried_runEffectFn2'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn2')))($f1))($a))($b)))((((($GLOBALS['Effect_Uncurried_runEffectFn2'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn2')))($f2))($a))($b));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn10'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn10'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn10')))((function() use (&$dictSemigroup, &$f1, &$f2) {
  $__fn = function($a, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) use (&$dictSemigroup, &$f1, &$f2, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 10);
  }
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))((((((((((((($GLOBALS['Effect_Uncurried_runEffectFn10'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn10')))($f1))($a))($b))($c))($d))($e))($f))($g))($h))($i))($j)))((((((((((((($GLOBALS['Effect_Uncurried_runEffectFn10'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn10')))($f2))($a))($b))($c))($d))($e))($f))($g))($h))($i))($j));
  goto __end;;
  __end:
  return $__num > 10 ? $__res(...\array_slice(\func_get_args(), 10)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_semigroupEffectFn1'] = function() { $v = function($dictSemigroup) {
  $__num = \func_num_args();
  $__res = (object)["append" => (function() use (&$dictSemigroup) {
  $__fn = function($f1, $f2 = null) use (&$dictSemigroup, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = (($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn1')))(function($a) use (&$dictSemigroup, &$f1, &$f2) {
  $__num = \func_num_args();
  $__res = ((((($GLOBALS['Control_Apply_lift2'] ?? \PhpursThunks::eval('Control_Apply_lift2')))(($GLOBALS['Effect_applyEffect'] ?? \PhpursThunks::eval('Effect_applyEffect'))))(($dictSemigroup)->append))(((($GLOBALS['Effect_Uncurried_runEffectFn1'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn1')))($f1))($a)))(((($GLOBALS['Effect_Uncurried_runEffectFn1'] ?? \PhpursThunks::eval('Effect_Uncurried_runEffectFn1')))($f2))($a));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn9'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn91_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn9'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn9')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn9'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn9')))((function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null, $v8 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 9) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 9);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 9 ? $__res(...\array_slice(\func_get_args(), 9)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn91_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn91_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn8'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn81_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn8'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn8')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn8'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn8')))((function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 8) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 8);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 8 ? $__res(...\array_slice(\func_get_args(), 8)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn81_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn81_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn7'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn71_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn7'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn7')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn7'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn7')))((function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 7) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 7);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 7 ? $__res(...\array_slice(\func_get_args(), 7)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn71_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn71_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn6'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn61_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn6'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn6')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn6'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn6')))((function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 6) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 6);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 6 ? $__res(...\array_slice(\func_get_args(), 6)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn61_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn61_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn5'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn51_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn5'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn5')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn5'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn5')))((function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 5);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...\array_slice(\func_get_args(), 5)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn51_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn51_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn4'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn41_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn4'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn4')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn4'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn4')))((function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 4) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 4);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...\array_slice(\func_get_args(), 4)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn41_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn41_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn3'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn31_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn3'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn3')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn3'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn3')))((function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null, $v2 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 3) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 3);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...\array_slice(\func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn31_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn31_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn2'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn21_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn2'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn2')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn2'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn2')))((function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 2) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 2);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...\array_slice(\func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn21_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn21_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn10'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn101_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn10'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn10')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn10'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn10')))((function() use (&$mempty_0) {
  $__fn = function($v, $v1 = null, $v2 = null, $v3 = null, $v4 = null, $v5 = null, $v6 = null, $v7 = null, $v8 = null, $v9 = null) use (&$mempty_0, &$__fn) {
  $__num = \func_num_args();
  if ($__num < 10) {
    return phpurs_curry_fallback($__fn, \func_get_args(), 10);
  }
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 10 ? $__res(...\array_slice(\func_get_args(), 10)) : $__res;
  };
  return $__fn;
})()), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn101_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn101_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
\PhpursThunks::$thunks['Effect_Uncurried_monoidEffectFn1'] = function() { $v = function($dictMonoid) {
  $__num = \func_num_args();
  $mempty_0 = ((($GLOBALS['Effect_monoidEffect'] ?? \PhpursThunks::eval('Effect_monoidEffect')))($dictMonoid))->mempty;
  $semigroupEffectFn11_1 = (($GLOBALS['Effect_Uncurried_semigroupEffectFn1'] ?? \PhpursThunks::eval('Effect_Uncurried_semigroupEffectFn1')))((($dictMonoid)->Semigroup0)(($GLOBALS['Prim_undefined'] ?? \PhpursThunks::eval('Prim_undefined'))));
  $__res = (object)["mempty" => (($GLOBALS['Effect_Uncurried_mkEffectFn1'] ?? \PhpursThunks::eval('Effect_Uncurried_mkEffectFn1')))(function($v) use (&$mempty_0) {
  $__num = \func_num_args();
  $__res = $mempty_0;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}), "Semigroup0" => function($dollar__unused_0) use (&$semigroupEffectFn11_1) {
  $__num = \func_num_args();
  $__res = $semigroupEffectFn11_1;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}];
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...\array_slice(\func_get_args(), 1)) : $__res;
}; return $v; };
$GLOBALS['Prim_undefined'] = function() { throw new \Exception("undefined"); };
$ffi_Effect_Uncurried = \call_user_func(function() {
  $exports = [];
$exports = [];

for ($i = 1; $i <= 10; $i++) {
    $exports["mkEffectFn$i"] = function($fn) use ($i) {
        return function(...$args) use ($fn) {
            $curr = $fn;
            foreach ($args as $arg) {
                $curr = $curr($arg);
            }
            return $curr();
        };
    };

    $exports["runEffectFn$i"] = function(...$args) use ($i) {
        $expectedArgs = $i + 1; // fn + $i arguments
        
        $curry = function($collectedArgs) use (&$curry, $expectedArgs) {
            if (\count($collectedArgs) >= $expectedArgs) {
                $fn = $collectedArgs[0];
                $actualArgs = \array_slice($collectedArgs, 1, $expectedArgs - 1);
                $res = function() use ($fn, $actualArgs) {
                    return $fn(...$actualArgs);
                };
                if (\count($collectedArgs) > $expectedArgs) {
                    $extra = \array_slice($collectedArgs, $expectedArgs);
                    return $res(...$extra);
                }
                return $res;
            }
            return function(...$more) use (&$curry, $collectedArgs) {
                return $curry(\array_merge($collectedArgs, $more));
            };
        };
        
        return $curry($args);
    };
}

return $exports;
  return $exports;
});
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn1'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn1']; };
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn10'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn10']; };
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn2'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn2']; };
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn3'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn3']; };
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn4'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn4']; };
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn5'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn5']; };
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn6'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn6']; };
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn7'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn7']; };
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn8'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn8']; };
\PhpursThunks::$thunks['Effect_Uncurried_mkEffectFn9'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['mkEffectFn9']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn1'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn1']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn10'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn10']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn2'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn2']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn3'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn3']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn4'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn4']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn5'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn5']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn6'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn6']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn7'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn7']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn8'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn8']; };
\PhpursThunks::$thunks['Effect_Uncurried_runEffectFn9'] = function() use (&$ffi_Effect_Uncurried) { return $ffi_Effect_Uncurried['runEffectFn9']; };






















