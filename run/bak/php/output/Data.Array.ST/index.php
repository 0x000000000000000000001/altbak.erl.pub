<?php

namespace Data\Array\ST;

require_once __DIR__ . '/../Control.Applicative/index.php';
require_once __DIR__ . '/../Control.Bind/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';
require_once __DIR__ . '/../Control.Monad.ST.Uncurried/index.php';
require_once __DIR__ . '/../Data.Array.ST/index.php';
require_once __DIR__ . '/../Data.Maybe/index.php';
require_once __DIR__ . '/../Data.Ord/index.php';
require_once __DIR__ . '/../Data.Ordering/index.php';
require_once __DIR__ . '/../Data.Ring/index.php';

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
      case 'Data_Array_ST_pushAll': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn2'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn2')))(($GLOBALS['Data_Array_ST_pushAllImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_pushAllImpl'))); break;
      case 'Data_Array_ST_pop': $v = (($GLOBALS['Control_Monad_ST_Uncurried_runSTFn3'] ?? \Control\Monad\ST\Uncurried\phpurs_eval_thunk('Control_Monad_ST_Uncurried_runSTFn3')))(($GLOBALS['Data_Array_ST_popImpl'] ?? \Data\Array\ST\phpurs_eval_thunk('Data_Array_ST_popImpl')), function($value0) {
  $__num = func_num_args();
  $__res = new Phpurs_Data1("Just", $value0);
  goto __end;;
  __end:
  return $__num > 1 ? $__res(...array_slice(func_get_args(), 1)) : $__res;
}, ($GLOBALS['__phpurs_data0_Nothing'] ??= new Phpurs_Data0("Nothing"))); break;
      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };
$Data_Array_ST_new = function() {
    return (object)["value" => []];
};

$Data_Array_ST_peekImpl = function($just, $nothing = null, $i = null, $xs = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_peekImpl;
            return $Data_Array_ST_peekImpl(...array_merge($__args, $more));
        };
    }
    return ($i >= 0 && $i < count($xs->value)) ? $just($xs->value[$i]) : $nothing;
};

$Data_Array_ST_pokeImpl = function($i, $a = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_pokeImpl;
            return $Data_Array_ST_pokeImpl(...array_merge($__args, $more));
        };
    }
    if ($i >= 0 && $i < count($xs->value)) {
        $xs->value[$i] = $a;
        return true;
    }
    return false;
};

$Data_Array_ST_lengthImpl = function($xs) {
    return count($xs->value);
};

$Data_Array_ST_popImpl = function($just, $nothing = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_popImpl;
            return $Data_Array_ST_popImpl(...array_merge($__args, $more));
        };
    }
    return count($xs->value) > 0 ? $just(array_pop($xs->value)) : $nothing;
};

$Data_Array_ST_pushAllImpl = function($as, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_pushAllImpl;
            return $Data_Array_ST_pushAllImpl(...array_merge($__args, $more));
        };
    }
    foreach ($as as $a) {
        $xs->value[] = $a;
    }
    return count($xs->value);
};

$Data_Array_ST_shiftImpl = function($just, $nothing = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_shiftImpl;
            return $Data_Array_ST_shiftImpl(...array_merge($__args, $more));
        };
    }
    return count($xs->value) > 0 ? $just(array_shift($xs->value)) : $nothing;
};

$Data_Array_ST_unshiftAllImpl = function($as, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_unshiftAllImpl;
            return $Data_Array_ST_unshiftAllImpl(...array_merge($__args, $more));
        };
    }
    array_unshift($xs->value, ...$as);
    return count($xs->value);
};

$Data_Array_ST_spliceImpl = function($i, $howMany = null, $bs = null, $xs = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_spliceImpl;
            return $Data_Array_ST_spliceImpl(...array_merge($__args, $more));
        };
    }
    return array_splice($xs->value, $i, $howMany, $bs);
};

$Data_Array_ST_unsafeFreezeImpl = function($xs) {
    return $xs->value;
};

$Data_Array_ST_unsafeThawImpl = function($xs) {
    return (object)["value" => $xs];
};

$Data_Array_ST_freezeImpl = function($xs) {
    return $xs->value;
};

$Data_Array_ST_thawImpl = function($xs) {
    return (object)["value" => $xs];
};

$Data_Array_ST_cloneImpl = function($xs) {
    return (object)["value" => $xs->value];
};

$Data_Array_ST_sortByImpl = function($compare, $fromOrdering = null, $xs = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_sortByImpl;
            return $Data_Array_ST_sortByImpl(...array_merge($__args, $more));
        };
    }
    usort($xs->value, function($a, $b) use ($compare, $fromOrdering) {
        return $fromOrdering($compare($a)($b));
    });
    return $xs;
};

$Data_Array_ST_toAssocArrayImpl = function($xs) {
    $n = count($xs->value);
    $as = [];
    for ($i = 0; $i < $n; $i++) {
        $as[] = (object)["value" => $xs->value[$i], "index" => $i];
    }
    return $as;
};

$Data_Array_ST_pushImpl = function($a, $xs = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Data_Array_ST_pushImpl;
            return $Data_Array_ST_pushImpl(...array_merge($__args, $more));
        };
    }
    $xs->value[] = $a;
    return count($xs->value);
};



