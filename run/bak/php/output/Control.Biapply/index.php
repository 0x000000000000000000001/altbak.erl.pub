<?php

namespace Control\Biapply;

require_once __DIR__ . '/../Control.Biapply/index.php';
require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Data.Bifunctor/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';

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
      case 'Control_Biapply_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Control_Biapply_biapplyTuple': $v = (object)["biapply" => (function() use (&$__fn) {
  $__fn = function($v, $v1 = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($v1) use ($v, &$__fn) { return $__fn($v, $v1); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__case_0 = $v;
  $__case_1 = $v1;
  if (((($__case_0)->tag === "Tuple") && (($__case_1)->tag === "Tuple"))) {
$f = ($__case_0)->v0;
$g = ($__case_0)->v1;
$a = ($__case_1)->v0;
$b = ($__case_1)->v1;
$__res = new Phpurs_Data2("Tuple", ($f)($a), ($g)($b));
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})(), "Bifunctor0" => function($__dollar____unused) {
  $__num = func_num_args();
  $__global_Data_Bifunctor_bifunctorTuple = ($GLOBALS['Data_Bifunctor_bifunctorTuple'] ?? \Data\Bifunctor\phpurs_eval_thunk('Data_Bifunctor_bifunctorTuple'));
  $__res = $__global_Data_Bifunctor_bifunctorTuple;
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



// Control_Biapply_Biapply$Dict
function Control_Biapply_Biapply__dollar__Dict($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Biapply_Biapply__dollar__Dict';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Biapply_Biapply__dollar__Dict'] = __NAMESPACE__ . '\\Control_Biapply_Biapply__dollar__Dict';


// Control_Biapply_biapply
function Control_Biapply_biapply($dict) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Biapply_biapply';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__case_0 = $dict;
  if (true) {
$v = $__case_0;
$__res = ($v)->biapply;
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Biapply_biapply'] = __NAMESPACE__ . '\\Control_Biapply_biapply';

// Control_Biapply_biapplyFirst
function Control_Biapply_biapplyFirst($dictBiapply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Biapply_biapplyFirst';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Biapply_identity = ($GLOBALS['Control_Biapply_identity'] ?? \Control\Biapply\phpurs_eval_thunk('Control_Biapply_identity'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $biapply1 = ($dictBiapply)->biapply;
  $bimap = ((($dictBiapply)->Bifunctor0)($__global_Prim_undefined))->bimap;
  $__res = (function() use ($biapply1, $__global_Control_Biapply_identity, $bimap, $__global_Data_Function_const, &$__fn) {
  $__fn = function($a, $b = null) use ($biapply1, $__global_Control_Biapply_identity, $bimap, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($biapply1)(($__global_Control_Biapply_identity)(($bimap)(($__global_Data_Function_const)($__global_Control_Biapply_identity), ($__global_Data_Function_const)($__global_Control_Biapply_identity)), $a), $b);
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
$GLOBALS['Control_Biapply_biapplyFirst'] = __NAMESPACE__ . '\\Control_Biapply_biapplyFirst';

// Control_Biapply_biapplySecond
function Control_Biapply_biapplySecond($dictBiapply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Biapply_biapplySecond';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Biapply_identity = ($GLOBALS['Control_Biapply_identity'] ?? \Control\Biapply\phpurs_eval_thunk('Control_Biapply_identity'));
  $__global_Data_Function_const = ($GLOBALS['Data_Function_const'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_const'));
  $biapply1 = ($dictBiapply)->biapply;
  $bimap = ((($dictBiapply)->Bifunctor0)($__global_Prim_undefined))->bimap;
  $__res = (function() use ($biapply1, $__global_Control_Biapply_identity, $bimap, $__global_Data_Function_const, &$__fn) {
  $__fn = function($a, $b = null) use ($biapply1, $__global_Control_Biapply_identity, $bimap, $__global_Data_Function_const, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($b) use ($a, &$__fn) { return $__fn($a, $b); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($biapply1)(($__global_Control_Biapply_identity)(($bimap)($__global_Data_Function_const, $__global_Data_Function_const), $a), $b);
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
$GLOBALS['Control_Biapply_biapplySecond'] = __NAMESPACE__ . '\\Control_Biapply_biapplySecond';

// Control_Biapply_bilift2
function Control_Biapply_bilift2($dictBiapply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Biapply_bilift2';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Biapply_identity = ($GLOBALS['Control_Biapply_identity'] ?? \Control\Biapply\phpurs_eval_thunk('Control_Biapply_identity'));
  $biapply1 = ($dictBiapply)->biapply;
  $bimap = ((($dictBiapply)->Bifunctor0)($__global_Prim_undefined))->bimap;
  $__res = (function() use ($biapply1, $__global_Control_Biapply_identity, $bimap, &$__fn) {
  $__fn = function($f, $g = null, $a = null, $b = null) use ($biapply1, $__global_Control_Biapply_identity, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 4) {
    if ($__num === 3) return function($b) use ($f, $g, $a, &$__fn) { return $__fn($f, $g, $a, $b); };
    if ($__num === 2) return function($a, $b = null) use ($f, $g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $a, $b);
      if ($__num2 === 1) return function($b) use ($f, $g, $a, &$__fn) { return $__fn($f, $g, $a, $b); };
      return phpurs_curry_fallback($__fn, [$f, $g], 4);
    };
    if ($__num === 1) return function($g, $a = null, $b = null) use ($f, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 3) return $__fn($f, $g, $a, $b);
      if ($__num2 === 2) return function($b) use ($f, $g, $a, &$__fn) { return $__fn($f, $g, $a, $b); };
      if ($__num2 === 1) return function($a, $b = null) use ($f, $g, &$__fn) {
        $__num3 = func_num_args();
        if ($__num3 === 2) return $__fn($f, $g, $a, $b);
        if ($__num3 === 1) return function($b) use ($f, $g, $a, &$__fn) { return $__fn($f, $g, $a, $b); };
        return phpurs_curry_fallback($__fn, [$f, $g], 4);
      };
      return phpurs_curry_fallback($__fn, [$f], 4);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 4);
  }
  $__res = ($biapply1)(($__global_Control_Biapply_identity)(($bimap)($f, $g), $a), $b);
  goto __end;;
  __end:
  return $__num > 4 ? $__res(...array_slice(func_get_args(), 4)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Biapply_bilift2'] = __NAMESPACE__ . '\\Control_Biapply_bilift2';

// Control_Biapply_bilift3
function Control_Biapply_bilift3($dictBiapply) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Control_Biapply_bilift3';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Prim_undefined = ($GLOBALS['Prim_undefined'] ?? \Prim\phpurs_eval_thunk('Prim_undefined'));
  $__global_Control_Biapply_identity = ($GLOBALS['Control_Biapply_identity'] ?? \Control\Biapply\phpurs_eval_thunk('Control_Biapply_identity'));
  $biapply1 = ($dictBiapply)->biapply;
  $bimap = ((($dictBiapply)->Bifunctor0)($__global_Prim_undefined))->bimap;
  $__res = (function() use ($biapply1, $__global_Control_Biapply_identity, $bimap, &$__fn) {
  $__fn = function($f, $g = null, $a = null, $b = null, $c = null) use ($biapply1, $__global_Control_Biapply_identity, $bimap, &$__fn) {
  $__num = func_num_args();
  if ($__num < 5) {
    return phpurs_curry_fallback($__fn, func_get_args(), 5);
  }
  $__res = ($biapply1)(($biapply1)(($__global_Control_Biapply_identity)(($bimap)($f, $g), $a), $b), $c);
  goto __end;;
  __end:
  return $__num > 5 ? $__res(...array_slice(func_get_args(), 5)) : $__res;
  };
  return $__fn;
})();
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Control_Biapply_bilift3'] = __NAMESPACE__ . '\\Control_Biapply_bilift3';

