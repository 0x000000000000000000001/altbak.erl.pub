<?php

namespace Data\Profunctor\Split;

require_once __DIR__ . '/../Control.Category/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Exists/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Functor.Invariant/index.php';
require_once __DIR__ . '/../Data.Profunctor/index.php';
require_once __DIR__ . '/../Data.Profunctor.Split/index.php';
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
      case 'Data_Profunctor_Split_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_Profunctor_Split_identity': $v = (($GLOBALS['Control_Category_categoryFn'] ?? \Control\Category\phpurs_eval_thunk('Control_Category_categoryFn')))->identity; break;
      case 'Data_Profunctor_Split_profunctorSplit': $v = (object)["dimap" => (function() use (&$__fn) {
  $__fn = function($f, $g = null) use (&$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Profunctor_Split_unSplit = ($GLOBALS['Data_Profunctor_Split_unSplit'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_unSplit'));
  $__global_Data_Profunctor_Split_split = ($GLOBALS['Data_Profunctor_Split_split'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_split'));
  $__global_Data_Profunctor_Split_compose = ($GLOBALS['Data_Profunctor_Split_compose'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_compose'));
  $__res = ($__global_Data_Profunctor_Split_unSplit)((function() use ($__global_Data_Profunctor_Split_split, $__global_Data_Profunctor_Split_compose, $f, $g, &$__fn) {
  $__fn = function($h, $i = null) use ($__global_Data_Profunctor_Split_split, $__global_Data_Profunctor_Split_compose, $f, $g, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($i) use ($h, &$__fn) { return $__fn($h, $i); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Profunctor_Split_split)(($__global_Data_Profunctor_Split_compose)($h, $f), ($__global_Data_Profunctor_Split_compose)($g, $i));
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})()]; break;
      case 'Data_Profunctor_Split_liftSplit': $v = \Data\Profunctor\Split\Data_Profunctor_Split_split(($GLOBALS['Data_Profunctor_Split_identity'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_identity')), ($GLOBALS['Data_Profunctor_Split_identity'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_identity'))); break;
      case 'Data_Profunctor_Split_functorSplit': $v = (object)["map" => function($f) {
  $__num = func_num_args();
  $__global_Data_Profunctor_Split_unSplit = ($GLOBALS['Data_Profunctor_Split_unSplit'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_unSplit'));
  $__global_Data_Profunctor_Split_split = ($GLOBALS['Data_Profunctor_Split_split'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_split'));
  $__global_Data_Profunctor_Split_compose = ($GLOBALS['Data_Profunctor_Split_compose'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_compose'));
  $__res = ($__global_Data_Profunctor_Split_unSplit)((function() use ($__global_Data_Profunctor_Split_split, $__global_Data_Profunctor_Split_compose, $f, &$__fn) {
  $__fn = function($g, $h = null, $fx = null) use ($__global_Data_Profunctor_Split_split, $__global_Data_Profunctor_Split_compose, $f, &$__fn) {
  $__num = func_num_args();
  if ($__num < 3) {
    if ($__num === 2) return function($fx) use ($g, $h, &$__fn) { return $__fn($g, $h, $fx); };
    if ($__num === 1) return function($h, $fx = null) use ($g, &$__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($g, $h, $fx);
      if ($__num2 === 1) return function($fx) use ($g, $h, &$__fn) { return $__fn($g, $h, $fx); };
      return phpurs_curry_fallback($__fn, [$g], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = ($__global_Data_Profunctor_Split_split)($g, ($__global_Data_Profunctor_Split_compose)($f, $h), $fx);
  goto __end;;
  __end:
  return $__num > 3 ? $__res(...array_slice(func_get_args(), 3)) : $__res;
  };
  return $__fn;
})());
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




// Data_Profunctor_Split_SplitF
function Data_Profunctor_Split_SplitF($value0, $value1 = null, $value2 = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_SplitF';
  if ($__num < 3) {
    if ($__num === 2) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
    if ($__num === 1) return function($value1, $value2 = null) use ($value0, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($value0, $value1, $value2);
      if ($__num2 === 1) return function($value2) use ($value0, $value1, $__fn) { return $__fn($value0, $value1, $value2); };
      return phpurs_curry_fallback($__fn, [$value0], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__res = new Phpurs_Data3("SplitF", $value0, $value1, $value2);
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_SplitF'] = __NAMESPACE__ . '\\Data_Profunctor_Split_SplitF';

// Data_Profunctor_Split_Split
function Data_Profunctor_Split_Split($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_Split';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__res = $x;
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_Split'] = __NAMESPACE__ . '\\Data_Profunctor_Split_Split';

// Data_Profunctor_Split_unSplit
function Data_Profunctor_Split_unSplit($f, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_unSplit';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($f, $__fn) { return $__fn($f, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $__case_0 = $f;
  $__case_1 = $v;
  if (true) {
$f1 = $__case_0;
$e = $__case_1;
$__res = ($__global_Unsafe_Coerce_unsafeCoerce)(function($v1) use ($f1) {
  $__num = func_num_args();
  $__case_0 = $v1;
  switch (($__case_0)->tag) {
case "SplitF":
$g = ($__case_0)->v0;
$h = ($__case_0)->v1;
$fx = ($__case_0)->v2;
$__res = ($f1)($g, $h, $fx);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, $e);
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_unSplit'] = __NAMESPACE__ . '\\Data_Profunctor_Split_unSplit';

// Data_Profunctor_Split_split
function Data_Profunctor_Split_split($f, $g = null, $fx = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_split';
  if ($__num < 3) {
    if ($__num === 2) return function($fx) use ($f, $g, $__fn) { return $__fn($f, $g, $fx); };
    if ($__num === 1) return function($g, $fx = null) use ($f, $__fn) {
      $__num2 = func_num_args();
      if ($__num2 === 2) return $__fn($f, $g, $fx);
      if ($__num2 === 1) return function($fx) use ($f, $g, $__fn) { return $__fn($f, $g, $fx); };
      return phpurs_curry_fallback($__fn, [$f], 3);
    };
    return phpurs_curry_fallback($__fn, func_get_args(), 3);
  }
  $__global_Unsafe_Coerce_unsafeCoerce = ($GLOBALS['Unsafe_Coerce_unsafeCoerce'] ?? \Unsafe\Coerce\phpurs_eval_thunk('Unsafe_Coerce_unsafeCoerce'));
  $__res = ($__global_Unsafe_Coerce_unsafeCoerce)(new Phpurs_Data3("SplitF", $f, $g, $fx));
  goto __end;;
  __end:
  return 3 < $__num ? $__res(...array_slice(func_get_args(), 3)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_split'] = __NAMESPACE__ . '\\Data_Profunctor_Split_split';


// Data_Profunctor_Split_lowerSplit
function Data_Profunctor_Split_lowerSplit($dictInvariant) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_lowerSplit';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Split_unSplit = ($GLOBALS['Data_Profunctor_Split_unSplit'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_unSplit'));
  $__global_Data_Function_flip = ($GLOBALS['Data_Function_flip'] ?? \Data\Function\phpurs_eval_thunk('Data_Function_flip'));
  $__res = ($__global_Data_Profunctor_Split_unSplit)(($__global_Data_Function_flip)(($dictInvariant)->imap));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_lowerSplit'] = __NAMESPACE__ . '\\Data_Profunctor_Split_lowerSplit';


// Data_Profunctor_Split_hoistSplit
function Data_Profunctor_Split_hoistSplit($nat) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_Profunctor_Split_hoistSplit';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Profunctor_Split_unSplit = ($GLOBALS['Data_Profunctor_Split_unSplit'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_unSplit'));
  $__global_Data_Profunctor_Split_compose = ($GLOBALS['Data_Profunctor_Split_compose'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_compose'));
  $__global_Data_Profunctor_Split_split = ($GLOBALS['Data_Profunctor_Split_split'] ?? \Data\Profunctor\Split\phpurs_eval_thunk('Data_Profunctor_Split_split'));
  $__res = ($__global_Data_Profunctor_Split_unSplit)((function() use ($__global_Data_Profunctor_Split_compose, $__global_Data_Profunctor_Split_split, $nat, &$__fn) {
  $__fn = function($f, $g = null) use ($__global_Data_Profunctor_Split_compose, $__global_Data_Profunctor_Split_split, $nat, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($g) use ($f, &$__fn) { return $__fn($f, $g); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Profunctor_Split_compose)(($__global_Data_Profunctor_Split_split)($f, $g), $nat);
  goto __end;;
  __end:
  return $__num > 2 ? $__res(...array_slice(func_get_args(), 2)) : $__res;
  };
  return $__fn;
})());
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_Profunctor_Split_hoistSplit'] = __NAMESPACE__ . '\\Data_Profunctor_Split_hoistSplit';


