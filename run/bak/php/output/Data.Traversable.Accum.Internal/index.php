<?php

namespace Data\Traversable\Accum\Internal;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Apply/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum/index.php';
require_once __DIR__ . '/../Data.Traversable.Accum.Internal/index.php';
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
      case 'Data_Traversable_Accum_Internal_functorStateR': $v = (object)["map" => (function() use (&$__fn) {
  $__fn = function($f, $k = null, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($f, $k, &$__fn) { return $__fn($f, $k, $s); };
    if ($__num === 1) return function($k, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $k, $s);
      if ($__num2 === 1) return function($s) use ($f, $k, &$__fn) { return $__fn($f, $k, $s); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Traversable_Accum_Internal_stateR = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateR'));
  $v = ($__global_Data_Traversable_Accum_Internal_stateR)($k, $s);
  $__case_0 = $v;
  if (is_object($__case_0)) {
$s1 = ($__case_0)->accum;
$a = ($__case_0)->value;
$__res = (object)["accum" => $s1, "value" => ($f)($a)];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_Accum_Internal_functorStateL': $v = (object)["map" => (function() use (&$__fn) {
  $__fn = function($f, $k = null, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($f, $k, &$__fn) { return $__fn($f, $k, $s); };
    if ($__num === 1) return function($k, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $k, $s);
      if ($__num2 === 1) return function($s) use ($f, $k, &$__fn) { return $__fn($f, $k, $s); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Traversable_Accum_Internal_stateL = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateL'));
  $v = ($__global_Data_Traversable_Accum_Internal_stateL)($k, $s);
  $__case_0 = $v;
  if (is_object($__case_0)) {
$s1 = ($__case_0)->accum;
$a = ($__case_0)->value;
$__res = (object)["accum" => $s1, "value" => ($f)($a)];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Traversable_Accum_Internal_applyStateR': $v = (object)["apply" => (function() use (&$__fn) {
  $__fn = function($f, $x = null, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($f, $x, &$__fn) { return $__fn($f, $x, $s); };
    if ($__num === 1) return function($x, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $x, $s);
      if ($__num2 === 1) return function($s) use ($f, $x, &$__fn) { return $__fn($f, $x, $s); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Traversable_Accum_Internal_stateR = ($GLOBALS['Data_Traversable_Accum_Internal_stateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateR'));
  $v = ($__global_Data_Traversable_Accum_Internal_stateR)($x, $s);
  $__case_0 = $v;
  if (is_object($__case_0)) {
$s1 = ($__case_0)->accum;
$x__prime__ = ($__case_0)->value;
$v1 = ($__global_Data_Traversable_Accum_Internal_stateR)($f, $s1);
$__case_0 = $v1;
if (is_object($__case_0)) {
$s2 = ($__case_0)->accum;
$f__prime__ = ($__case_0)->value;
$__res = (object)["accum" => $s2, "value" => ($f__prime__)($x__prime__)];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_Accum_Internal_functorStateR = ($GLOBALS['Data_Traversable_Accum_Internal_functorStateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_functorStateR'));
  $__res = $__global_Data_Traversable_Accum_Internal_functorStateR;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_Accum_Internal_applyStateL': $v = (object)["apply" => (function() use (&$__fn) {
  $__fn = function($f, $x = null, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($s) use ($f, $x, &$__fn) { return $__fn($f, $x, $s); };
    if ($__num === 1) return function($x, $s = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $x, $s);
      if ($__num2 === 1) return function($s) use ($f, $x, &$__fn) { return $__fn($f, $x, $s); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Data_Traversable_Accum_Internal_stateL = ($GLOBALS['Data_Traversable_Accum_Internal_stateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_stateL'));
  $v = ($__global_Data_Traversable_Accum_Internal_stateL)($f, $s);
  $__case_0 = $v;
  if (is_object($__case_0)) {
$s1 = ($__case_0)->accum;
$f__prime__ = ($__case_0)->value;
$v1 = ($__global_Data_Traversable_Accum_Internal_stateL)($x, $s1);
$__case_0 = $v1;
if (is_object($__case_0)) {
$s2 = ($__case_0)->accum;
$x__prime__ = ($__case_0)->value;
$__res = (object)["accum" => $s2, "value" => ($f__prime__)($x__prime__)];
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})(), "Functor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_Accum_Internal_functorStateL = ($GLOBALS['Data_Traversable_Accum_Internal_functorStateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_functorStateL'));
  $__res = $__global_Data_Traversable_Accum_Internal_functorStateL;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_Accum_Internal_applicativeStateR': $v = (object)["pure" => (function() use (&$__fn) {
  $__fn = function($a, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($a, &$__fn) { return $__fn($a, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = (object)["accum" => $s, "value" => $a];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_Accum_Internal_applyStateR = ($GLOBALS['Data_Traversable_Accum_Internal_applyStateR'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applyStateR'));
  $__res = $__global_Data_Traversable_Accum_Internal_applyStateR;
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}]; break;
      case 'Data_Traversable_Accum_Internal_applicativeStateL': $v = (object)["pure" => (function() use (&$__fn) {
  $__fn = function($a, $s = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($s) use ($a, &$__fn) { return $__fn($a, $s); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = (object)["accum" => $s, "value" => $a];
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Apply0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Traversable_Accum_Internal_applyStateL = ($GLOBALS['Data_Traversable_Accum_Internal_applyStateL'] ?? \Data\Traversable\Accum\Internal\phpurs_eval_thunk('Data_Traversable_Accum_Internal_applyStateL'));
  $__res = $__global_Data_Traversable_Accum_Internal_applyStateL;
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


// Data_Traversable_Accum_Internal_StateR
function Data_Traversable_Accum_Internal_StateR($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_Accum_Internal_StateR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_Accum_Internal_StateR'] = __NAMESPACE__ . '\\Data_Traversable_Accum_Internal_StateR';

// Data_Traversable_Accum_Internal_StateL
function Data_Traversable_Accum_Internal_StateL($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_Accum_Internal_StateL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_Accum_Internal_StateL'] = __NAMESPACE__ . '\\Data_Traversable_Accum_Internal_StateL';

// Data_Traversable_Accum_Internal_stateR
function Data_Traversable_Accum_Internal_stateR($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_Accum_Internal_stateR';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$k = $__case_0;
$__res = $k;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_Accum_Internal_stateR'] = __NAMESPACE__ . '\\Data_Traversable_Accum_Internal_stateR';

// Data_Traversable_Accum_Internal_stateL
function Data_Traversable_Accum_Internal_stateL($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Traversable_Accum_Internal_stateL';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $v;
  if (true) {
$k = $__case_0;
$__res = $k;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Traversable_Accum_Internal_stateL'] = __NAMESPACE__ . '\\Data_Traversable_Accum_Internal_stateL';







