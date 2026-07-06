<?php

namespace Data\List\Lazy\NonEmpty;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Semigroupoid/index.php';
require_once __DIR__ . '/../Data.Foldable/index.php';
require_once __DIR__ . '/../Data.Function/index.php';
require_once __DIR__ . '/../Data.Functor/index.php';
require_once __DIR__ . '/../Data.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy/index.php';
require_once __DIR__ . '/../Data.List.Lazy.NonEmpty/index.php';
require_once __DIR__ . '/../Data.List.Lazy.Types/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.NonEmpty/index.php';
require_once __DIR__ . '/../Data.Semigroup/index.php';
require_once __DIR__ . '/../Data.Semiring/index.php';
require_once __DIR__ . '/../Data.Tuple/index.php';
require_once __DIR__ . '/../Data.Unfoldable/index.php';
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
      case 'Data_List_Lazy_NonEmpty_compose': $v = (($GLOBALS['Control_Semigroupoid_semigroupoidFn'] ?? \Control\Semigroupoid\phpurs_eval_thunk('Control_Semigroupoid_semigroupoidFn')))->compose; break;
      case 'Data_List_Lazy_NonEmpty_map': $v = (($GLOBALS['Data_Maybe_functorMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_functorMaybe')))->map; break;
      case 'Data_List_Lazy_NonEmpty_add': $v = ($GLOBALS['Data_Semiring_intAdd'] ?? \Data\Semiring\phpurs_eval_thunk('Data_Semiring_intAdd')); break;
      case 'Data_List_Lazy_NonEmpty_append': $v = (($GLOBALS['Data_List_Lazy_Types_semigroupList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_semigroupList')))->append; break;
      case 'Data_List_Lazy_NonEmpty_singleton': $v = (($GLOBALS['Data_List_Lazy_Types_applicativeNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_applicativeNonEmptyList')))->pure; break;
      case 'Data_List_Lazy_NonEmpty_concatMap': $v = \Data\Function\Data_Function_flip((($GLOBALS['Data_List_Lazy_Types_bindNonEmptyList'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_bindNonEmptyList')))->bind); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };






// Data_List_Lazy_NonEmpty_uncons
function Data_List_Lazy_NonEmpty_uncons($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_uncons';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$v1 = ($__global_Data_Lazy_force)($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = (object)["head" => $x, "tail" => $xs];
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_uncons'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_uncons';

// Data_List_Lazy_NonEmpty_toList
function Data_List_Lazy_NonEmpty_toList($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_toList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$v1 = ($__global_Data_Lazy_force)($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = ($__global_Data_List_Lazy_Types_cons)($x, $xs);
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_toList'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_toList';

// Data_List_Lazy_NonEmpty_toUnfoldable
function Data_List_Lazy_NonEmpty_toUnfoldable($dictUnfoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_toUnfoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_NonEmpty_compose = ($GLOBALS['Data_List_Lazy_NonEmpty_compose'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_compose'));
  $__global_Data_List_Lazy_NonEmpty_map = ($GLOBALS['Data_List_Lazy_NonEmpty_map'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_map'));
  $__global_Data_List_Lazy_uncons = ($GLOBALS['Data_List_Lazy_uncons'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_uncons'));
  $__global_Data_List_Lazy_NonEmpty_toList = ($GLOBALS['Data_List_Lazy_NonEmpty_toList'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_toList'));
  $__res = ($__global_Data_List_Lazy_NonEmpty_compose)((($dictUnfoldable)->unfoldr)(function($xs) use ($__global_Data_List_Lazy_NonEmpty_map, $__global_Data_List_Lazy_uncons) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_NonEmpty_map)(function($rec) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("Tuple", ($rec)->head, ($rec)->tail);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_List_Lazy_uncons)($xs));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}), $__global_Data_List_Lazy_NonEmpty_toList);
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_toUnfoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_toUnfoldable';

// Data_List_Lazy_NonEmpty_tail
function Data_List_Lazy_NonEmpty_tail($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_tail';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$v1 = ($__global_Data_Lazy_force)($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$xs = ($__case_0)->v1;
$__res = $xs;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_tail'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_tail';


// Data_List_Lazy_NonEmpty_repeat
function Data_List_Lazy_NonEmpty_repeat($x) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_repeat';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_repeat = ($GLOBALS['Data_List_Lazy_repeat'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_repeat'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($x, $__global_Data_List_Lazy_repeat) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $x, ($__global_Data_List_Lazy_repeat)($x));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_repeat'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_repeat';

// Data_List_Lazy_NonEmpty_length
function Data_List_Lazy_NonEmpty_length($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_length';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_List_Lazy_length = ($GLOBALS['Data_List_Lazy_length'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_length'));
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$v1 = ($__global_Data_Lazy_force)($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$xs = ($__case_0)->v1;
$__res = (1 + ($__global_Data_List_Lazy_length)($xs));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_length'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_length';

// Data_List_Lazy_NonEmpty_last
function Data_List_Lazy_NonEmpty_last($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_last';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_Maybe_fromMaybe = ($GLOBALS['Data_Maybe_fromMaybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_fromMaybe'));
  $__global_Data_List_Lazy_last = ($GLOBALS['Data_List_Lazy_last'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_last'));
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$v1 = ($__global_Data_Lazy_force)($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = ($__global_Data_Maybe_fromMaybe)($x, ($__global_Data_List_Lazy_last)($xs));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_last'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_last';

// Data_List_Lazy_NonEmpty_iterate
function Data_List_Lazy_NonEmpty_iterate($f, $x = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_iterate';
  if ($__num < 2) {
    if ($__num === 1) return function($x) use ($f, $__fn) { return $__fn($f, $x); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_iterate = ($GLOBALS['Data_List_Lazy_iterate'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_iterate'));
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($x, $__global_Data_List_Lazy_iterate, $f) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $x, ($__global_Data_List_Lazy_iterate)($f, ($f)($x)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
  goto __end;;
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_iterate'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_iterate';

// Data_List_Lazy_NonEmpty_init
function Data_List_Lazy_NonEmpty_init($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_init';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_Maybe_maybe = ($GLOBALS['Data_Maybe_maybe'] ?? \Data\Maybe\phpurs_eval_thunk('Data_Maybe_maybe'));
  $__global_Data_List_Lazy_Types_nil = ($GLOBALS['Data_List_Lazy_Types_nil'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_nil'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__global_Data_List_Lazy_init = ($GLOBALS['Data_List_Lazy_init'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_init'));
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$v1 = ($__global_Data_Lazy_force)($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = ($__global_Data_Maybe_maybe)($__global_Data_List_Lazy_Types_nil, function($v2) use ($__global_Data_List_Lazy_Types_cons, $x) {
  $__num = func_num_args();
  $__res = ($__global_Data_List_Lazy_Types_cons)($x, $v2);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($__global_Data_List_Lazy_init)($xs));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_init'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_init';

// Data_List_Lazy_NonEmpty_head
function Data_List_Lazy_NonEmpty_head($v) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_head';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__case_0 = $v;
  if (true) {
$nel = $__case_0;
$v1 = ($__global_Data_Lazy_force)($nel);
$__case_0 = $v1;
switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$__res = $x;
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_head'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_head';

// Data_List_Lazy_NonEmpty_fromList
function Data_List_Lazy_NonEmpty_fromList($l) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_fromList';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_Types_step = ($GLOBALS['Data_List_Lazy_Types_step'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_step'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $v = ($__global_Data_List_Lazy_Types_step)($l);
  $__case_0 = $v;
  switch (($__case_0)->tag) {
case "Nil":
$__res = ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"));
goto __end;;
break;
case "Cons":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = new Phpurs_Data1("Just", ($__global_Data_Lazy_defer)(function($v1) use ($x, $xs) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", $x, $xs);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_fromList'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_fromList';

// Data_List_Lazy_NonEmpty_fromFoldable
function Data_List_Lazy_NonEmpty_fromFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_fromFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_NonEmpty_compose = ($GLOBALS['Data_List_Lazy_NonEmpty_compose'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_compose'));
  $__global_Data_List_Lazy_NonEmpty_fromList = ($GLOBALS['Data_List_Lazy_NonEmpty_fromList'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_fromList'));
  $__global_Data_List_Lazy_fromFoldable = ($GLOBALS['Data_List_Lazy_fromFoldable'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fromFoldable'));
  $__res = ($__global_Data_List_Lazy_NonEmpty_compose)($__global_Data_List_Lazy_NonEmpty_fromList, ($__global_Data_List_Lazy_fromFoldable)($dictFoldable));
  goto __end;;
  __end:
  return 1 < $__num ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_fromFoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_fromFoldable';

// Data_List_Lazy_NonEmpty_cons
function Data_List_Lazy_NonEmpty_cons($y, $v = null) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_cons';
  if ($__num < 2) {
    if ($__num === 1) return function($v) use ($y, $__fn) { return $__fn($y, $v); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_Lazy_force = ($GLOBALS['Data_Lazy_force'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_force'));
  $__global_Data_List_Lazy_Types_cons = ($GLOBALS['Data_List_Lazy_Types_cons'] ?? \Data\List\Lazy\Types\phpurs_eval_thunk('Data_List_Lazy_Types_cons'));
  $__case_0 = $y;
  $__case_1 = $v;
  if (true) {
$y1 = $__case_0;
$nel = $__case_1;
$__res = ($__global_Data_Lazy_defer)(function($v1) use ($__global_Data_Lazy_force, $nel, $y1, $__global_Data_List_Lazy_Types_cons) {
  $__num = func_num_args();
  $v2 = ($__global_Data_Lazy_force)($nel);
  $__case_0 = $v2;
  switch (($__case_0)->tag) {
case "NonEmpty":
$x = ($__case_0)->v0;
$xs = ($__case_0)->v1;
$__res = new Phpurs_Data2("NonEmpty", $y1, ($__global_Data_List_Lazy_Types_cons)($x, $xs));
goto __end;;
break;
default:
throw new \Exception("Pattern match failure");
break;
};
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
goto __end;;
} else {
throw new \Exception("Pattern match failure");
};
  __end:
  return 2 < $__num ? $__res(...array_slice(func_get_args(), 2)) : $__res;
}
$GLOBALS['Data_List_Lazy_NonEmpty_cons'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_cons';


// Data_List_Lazy_NonEmpty_appendFoldable
function Data_List_Lazy_NonEmpty_appendFoldable($dictFoldable) {
  $__num = func_num_args();
  $__fn = __NAMESPACE__ . '\\' . 'Data_List_Lazy_NonEmpty_appendFoldable';
  if ($__num < 1) {
    return phpurs_curry_fallback($__fn, func_get_args(), 1);
  }
  $__global_Data_List_Lazy_fromFoldable = ($GLOBALS['Data_List_Lazy_fromFoldable'] ?? \Data\List\Lazy\phpurs_eval_thunk('Data_List_Lazy_fromFoldable'));
  $__global_Data_Lazy_defer = ($GLOBALS['Data_Lazy_defer'] ?? \Data\Lazy\phpurs_eval_thunk('Data_Lazy_defer'));
  $__global_Data_List_Lazy_NonEmpty_head = ($GLOBALS['Data_List_Lazy_NonEmpty_head'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_head'));
  $__global_Data_List_Lazy_NonEmpty_append = ($GLOBALS['Data_List_Lazy_NonEmpty_append'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_append'));
  $__global_Data_List_Lazy_NonEmpty_tail = ($GLOBALS['Data_List_Lazy_NonEmpty_tail'] ?? \Data\List\Lazy\NonEmpty\phpurs_eval_thunk('Data_List_Lazy_NonEmpty_tail'));
  $fromFoldable1 = ($__global_Data_List_Lazy_fromFoldable)($dictFoldable);
  $__res = (function() use ($__global_Data_Lazy_defer, $__global_Data_List_Lazy_NonEmpty_head, $__global_Data_List_Lazy_NonEmpty_append, $__global_Data_List_Lazy_NonEmpty_tail, $fromFoldable1, &$__fn) {
  $__fn = function($nel, $ys = null) use ($__global_Data_Lazy_defer, $__global_Data_List_Lazy_NonEmpty_head, $__global_Data_List_Lazy_NonEmpty_append, $__global_Data_List_Lazy_NonEmpty_tail, $fromFoldable1, &$__fn) {
  $__num = func_num_args();
  if ($__num < 2) {
    if ($__num === 1) return function($ys) use ($nel, &$__fn) { return $__fn($nel, $ys); };
    return phpurs_curry_fallback($__fn, func_get_args(), 2);
  }
  $__res = ($__global_Data_Lazy_defer)(function($v) use ($__global_Data_List_Lazy_NonEmpty_head, $nel, $__global_Data_List_Lazy_NonEmpty_append, $__global_Data_List_Lazy_NonEmpty_tail, $fromFoldable1, $ys) {
  $__num = func_num_args();
  $__res = new Phpurs_Data2("NonEmpty", ($__global_Data_List_Lazy_NonEmpty_head)($nel), ($__global_Data_List_Lazy_NonEmpty_append)(($__global_Data_List_Lazy_NonEmpty_tail)($nel), ($fromFoldable1)($ys)));
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
});
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
$GLOBALS['Data_List_Lazy_NonEmpty_appendFoldable'] = __NAMESPACE__ . '\\Data_List_Lazy_NonEmpty_appendFoldable';

