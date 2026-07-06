<?php

namespace Control\Monad\Error\Class;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.Error.Class/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Either/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Unit/index.php';
require_once __DIR__ . '/../Effect/index.php';
require_once __DIR__ . '/../Effect.Exception/index.php';
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
      case 'Control_Monad_Error_Class_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Control_Monad_Error_Class_discard': $v = (($GLOBALS['Control_Bind_discardUnit'] ?? \Control\Bind\phpurs_eval_thunk('Control_Bind_discardUnit')))->discard; break;
      case 'Control_Monad_Error_Class_monadThrowMaybe': $v = (object)["throwError" => \Data\Function\Data_Function_const(($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))), "Monad0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Maybe_monadMaybe = ($GLOBALS['Data_Maybe_monadMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_monadMaybe'));
  $__res = $__global_Data_Maybe_monadMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadThrowEither': $v = (object)["throwError" => function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, "Monad0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Either_monadEither = ($GLOBALS['Data_Either_monadEither'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_monadEither'));
  $__res = $__global_Data_Either_monadEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadThrowEffect': $v = (object)["throwError" => ($GLOBALS['Effect_Exception_throwException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_throwException')), "Monad0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Effect_monadEffect = ($GLOBALS['Effect_monadEffect'] ?? \Effect\phpurs_eval_thunk('Effect_monadEffect'));
  $__res = $__global_Effect_monadEffect;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadErrorMaybe': $v = (object)["catchError" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Unit_unit = ($GLOBALS['Data_Unit_unit'] ?? \Data\Unit\phpurs_eval_thunk('Data_Unit_unit'));
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_0)->tag) {
case "Nothing":
$f = $__case_1;
$__res = ($f)($__global_Data_Unit_unit);
goto __end;;
break;
case "Just":
$a = ($__case_0)->v0;
$__res = new Phpurs_Data1("Just", $a);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Control_Monad_Error_Class_monadThrowMaybe = ($GLOBALS['Control_Monad_Error_Class_monadThrowMaybe'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_monadThrowMaybe'));
  $__res = $__global_Control_Monad_Error_Class_monadThrowMaybe;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadErrorEither': $v = (object)["catchError" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  switch (($__case_0)->tag) {
case "Left":
$e = ($__case_0)->v0;
$h = $__case_1;
$__res = ($h)($e);
goto __end;;
break;
case "Right":
$x = ($__case_0)->v0;
$__res = new Phpurs_Data1("Right", $x);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "MonadThrow0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Control_Monad_Error_Class_monadThrowEither = ($GLOBALS['Control_Monad_Error_Class_monadThrowEither'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_monadThrowEither'));
  $__res = $__global_Control_Monad_Error_Class_monadThrowEither;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Control_Monad_Error_Class_monadErrorEffect': $v = (object)["catchError" => \Data\Function\Data_Function_flip(($GLOBALS['Effect_Exception_catchException'] ?? \Effect\Exception\phpurs_eval_thunk('Effect_Exception_catchException'))), "MonadThrow0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Control_Monad_Error_Class_monadThrowEffect = ($GLOBALS['Control_Monad_Error_Class_monadThrowEffect'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_monadThrowEffect'));
  $__res = $__global_Control_Monad_Error_Class_monadThrowEffect;
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




// Control_Monad_Error_Class_MonadThrow$Dict
function Control_Monad_Error_Class_MonadThrow__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_MonadThrow__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_MonadThrow__dollar__Dict'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_MonadThrow__dollar__Dict';

// Control_Monad_Error_Class_MonadError$Dict
function Control_Monad_Error_Class_MonadError__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_MonadError__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_MonadError__dollar__Dict'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_MonadError__dollar__Dict';

// Control_Monad_Error_Class_throwError
function Control_Monad_Error_Class_throwError($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_throwError';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->throwError;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_throwError'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_throwError';







// Control_Monad_Error_Class_liftMaybe
function Control_Monad_Error_Class_liftMaybe($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_liftMaybe';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $throwError1 = ($dictMonadThrow)->throwError;
  $pure = ((((($dictMonadThrow)->Monad0)($__global_Prim_undefined))->Applicative0)($__global_Prim_undefined))->pure;
  $__res = function($error) use ($__global_Data_Maybe_maybe, $throwError1, $pure) {
  $__num = func_num_args();
  $__res = ($__global_Data_Maybe_maybe)(($throwError1)($error), $pure);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_liftMaybe'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_liftMaybe';

// Control_Monad_Error_Class_liftEither
function Control_Monad_Error_Class_liftEither($dictMonadThrow) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_liftEither';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__res = ($__global_Data_Either_either)(($dictMonadThrow)->throwError, ((((($dictMonadThrow)->Monad0)($__global_Prim_undefined))->Applicative0)($__global_Prim_undefined))->pure);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_liftEither'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_liftEither';

// Control_Monad_Error_Class_catchError
function Control_Monad_Error_Class_catchError($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_catchError';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->catchError;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_catchError'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_catchError';

// Control_Monad_Error_Class_catchJust
function Control_Monad_Error_Class_catchJust($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_catchJust';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $throwError1 = ((($dictMonadError)->MonadThrow0)($__global_Prim_undefined))->throwError;
  $catchError1 = ($dictMonadError)->catchError;
  $__res = (function() use ($throwError1, $catchError1, &$__fn) {
  $__fn = function($p, $act = null, $handler = null) use ($throwError1, $catchError1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($handler) use ($p, $act, &$__fn) { return $__fn($p, $act, $handler); };
    if ($__num === 1) return function($act, $handler = null) use ($p, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($p, $act, $handler);
      if ($__num2 === 1) return function($handler) use ($p, $act, &$__fn) { return $__fn($p, $act, $handler); };
      return phpurs_curry_fallback($__fn, [$p], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $handle = function($e) use ($p, $throwError1, $handler) {
  $__num = func_num_args();
  $v = ($p)($e);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nothing":
$__res = ($throwError1)($e);
goto __end;;
break;
case "Just":
$b = ($__case_0)->v0;
$__res = ($handler)($b);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  $__res = ($catchError1)($act, $handle);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_catchJust'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_catchJust';

// Control_Monad_Error_Class_try
function Control_Monad_Error_Class_try($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_try';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Error_Class_compose = ($GLOBALS['Control_Monad_Error_Class_compose'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_compose'));
  $catchError1 = ($dictMonadError)->catchError;
  $Monad0 = (((($dictMonadError)->MonadThrow0)($__global_Prim_undefined))->Monad0)($__global_Prim_undefined);
  $map = ((((((($Monad0)->Bind1)($__global_Prim_undefined))->Apply0)($__global_Prim_undefined))->Functor0)($__global_Prim_undefined))->map;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = function($a) use ($catchError1, $map, $__global_Control_Monad_Error_Class_compose, $pure) {
  $__num = func_num_args();
  $__res = ($catchError1)(($map)(function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Right", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $a), ($__global_Control_Monad_Error_Class_compose)($pure, function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Left", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
};
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_try'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_try';

// Control_Monad_Error_Class_withResource
function Control_Monad_Error_Class_withResource($dictMonadError) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Monad_Error_Class_withResource';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Monad_Error_Class_try = ($GLOBALS['Control_Monad_Error_Class_try'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_try'));
  $__global_Control_Monad_Error_Class_discard = ($GLOBALS['Control_Monad_Error_Class_discard'] ?? \Control\Monad\Error\Class\phpurs_eval_thunk('Control_Monad_Error_Class_discard'));
  $__global_Data_Either_either = ($GLOBALS['Data_Either_either'] ?? \Data\Either\phpurs_eval_thunk('Data_Either_either'));
  $MonadThrow0 = (($dictMonadError)->MonadThrow0)($__global_Prim_undefined);
  $Monad0 = (($MonadThrow0)->Monad0)($__global_Prim_undefined);
  $Bind1 = (($Monad0)->Bind1)($__global_Prim_undefined);
  $bind = ($Bind1)->bind;
  $try1 = ($__global_Control_Monad_Error_Class_try)($dictMonadError);
  $discard1 = ($__global_Control_Monad_Error_Class_discard)($Bind1);
  $throwError1 = ($MonadThrow0)->throwError;
  $pure = ((($Monad0)->Applicative0)($__global_Prim_undefined))->pure;
  $__res = (function() use ($bind, $try1, $discard1, $__global_Data_Either_either, $throwError1, $pure, &$__fn) {
  $__fn = function($acquire, $release = null, $kleisli = null) use ($bind, $try1, $discard1, $__global_Data_Either_either, $throwError1, $pure, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($kleisli) use ($acquire, $release, &$__fn) { return $__fn($acquire, $release, $kleisli); };
    if ($__num === 1) return function($release, $kleisli = null) use ($acquire, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($acquire, $release, $kleisli);
      if ($__num2 === 1) return function($kleisli) use ($acquire, $release, &$__fn) { return $__fn($acquire, $release, $kleisli); };
      return phpurs_curry_fallback($__fn, [$acquire], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($bind)($acquire, function($resource) use ($bind, $try1, $kleisli, $discard1, $release, $__global_Data_Either_either, $throwError1, $pure) {
  $__num = func_num_args();
  $__res = ($bind)(($try1)(($kleisli)($resource)), function($result) use ($discard1, $release, $resource, $__global_Data_Either_either, $throwError1, $pure) {
  $__num = func_num_args();
  $__res = ($discard1)(($release)($resource), function($__dollar____unused) use ($__global_Data_Either_either, $throwError1, $pure, $result) {
  $__num = func_num_args();
  $__res = ($__global_Data_Either_either)($throwError1, $pure, $result);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Monad_Error_Class_withResource'] = __NAMESPACE__ . '\\Control_Monad_Error_Class_withResource';

