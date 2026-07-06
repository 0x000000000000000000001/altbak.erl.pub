<?php

namespace Control\Monad\ST\Uncurried;

require_once __DIR__ . '/../Control.Monad.ST.Internal/index.php';

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

      default: throw new \Exception("Unknown thunk " . $id);
    }
    $GLOBALS[$id] = $v;
    return $cache[$id] = $v;
  }
}
$Prim_undefined = function() { throw new \Exception("undefined"); };
$Control_Monad_ST_Uncurried_mkSTFn1 = function($fn) {
    return function($x) use ($fn) { return $fn($x)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn2 = function($fn) {
    return function($a, $b) use ($fn) { return $fn($a)($b)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn3 = function($fn) {
    return function($a, $b, $c) use ($fn) { return $fn($a)($b)($c)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn4 = function($fn) {
    return function($a, $b, $c, $d) use ($fn) { return $fn($a)($b)($c)($d)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn5 = function($fn) {
    return function($a, $b, $c, $d, $e) use ($fn) { return $fn($a)($b)($c)($d)($e)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn6 = function($fn) {
    return function($a, $b, $c, $d, $e, $f) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn7 = function($fn) {
    return function($a, $b, $c, $d, $e, $f, $g) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn8 = function($fn) {
    return function($a, $b, $c, $d, $e, $f, $g, $h) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn9 = function($fn) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)($i)(); };
};
$Control_Monad_ST_Uncurried_mkSTFn10 = function($fn) {
    return function($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) use ($fn) { return $fn($a)($b)($c)($d)($e)($f)($g)($h)($i)($j)(); };
};

$Control_Monad_ST_Uncurried_runSTFn1 = function($fn, $a = null) {
    if (func_num_args() < 2) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn1;
            return $Control_Monad_ST_Uncurried_runSTFn1(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a) { return $fn($a); };
};
$Control_Monad_ST_Uncurried_runSTFn2 = function($fn, $a = null, $b = null) {
    if (func_num_args() < 3) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn2;
            return $Control_Monad_ST_Uncurried_runSTFn2(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b) { return $fn($a, $b); };
};
$Control_Monad_ST_Uncurried_runSTFn3 = function($fn, $a = null, $b = null, $c = null) {
    if (func_num_args() < 4) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn3;
            return $Control_Monad_ST_Uncurried_runSTFn3(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c) { return $fn($a, $b, $c); };
};
$Control_Monad_ST_Uncurried_runSTFn4 = function($fn, $a = null, $b = null, $c = null, $d = null) {
    if (func_num_args() < 5) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn4;
            return $Control_Monad_ST_Uncurried_runSTFn4(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d) { return $fn($a, $b, $c, $d); };
};
$Control_Monad_ST_Uncurried_runSTFn5 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null) {
    if (func_num_args() < 6) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn5;
            return $Control_Monad_ST_Uncurried_runSTFn5(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e) { return $fn($a, $b, $c, $d, $e); };
};
$Control_Monad_ST_Uncurried_runSTFn6 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null) {
    if (func_num_args() < 7) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn6;
            return $Control_Monad_ST_Uncurried_runSTFn6(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f) { return $fn($a, $b, $c, $d, $e, $f); };
};
$Control_Monad_ST_Uncurried_runSTFn7 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null) {
    if (func_num_args() < 8) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn7;
            return $Control_Monad_ST_Uncurried_runSTFn7(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g) { return $fn($a, $b, $c, $d, $e, $f, $g); };
};
$Control_Monad_ST_Uncurried_runSTFn8 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null) {
    if (func_num_args() < 9) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn8;
            return $Control_Monad_ST_Uncurried_runSTFn8(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h) { return $fn($a, $b, $c, $d, $e, $f, $g, $h); };
};
$Control_Monad_ST_Uncurried_runSTFn9 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null) {
    if (func_num_args() < 10) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn9;
            return $Control_Monad_ST_Uncurried_runSTFn9(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i); };
};
$Control_Monad_ST_Uncurried_runSTFn10 = function($fn, $a = null, $b = null, $c = null, $d = null, $e = null, $f = null, $g = null, $h = null, $i = null, $j = null) {
    if (func_num_args() < 11) {
        $__args = func_get_args();
        return function(...$more) use ($__args) {
            global $Control_Monad_ST_Uncurried_runSTFn10;
            return $Control_Monad_ST_Uncurried_runSTFn10(...array_merge($__args, $more));
        };
    }
    return function() use ($fn, $a, $b, $c, $d, $e, $f, $g, $h, $i, $j) { return $fn($a, $b, $c, $d, $e, $f, $g, $h, $i, $j); };
};


