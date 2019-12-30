<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class Int32 {
  <<__Override, __Memoize>>
  public static function requireModule() : Vector<dynamic> {
    
    $runtime =  (\Rehack\GlobalObject::get() as dynamic)->jsoo_runtime ;
    $caml_wrap_thrown_exception_reraise = $runtime[
       "caml_wrap_thrown_exception_reraise"
     ];
    $cst_d = $runtime["caml_new_string"]("%d");
    $Failure =  Failure::requireModule ();
    $zero = 0 as dynamic;
    $one = 1 as dynamic;
    $minus_one = -1 as dynamic;
    $succ = (dynamic $n) ==> {return (int) ($n + 1);};
    $pred = (dynamic $n) ==> {return (int) ($n - 1);};
    $abs = (dynamic $n) ==> {
      return $runtime["caml_greaterequal"]($n, 0) ? $n : ((int) - $n);
    };
    $min_int = -2147483648 as dynamic;
    $max_int = 2147483647 as dynamic;
    $lognot = (dynamic $n) ==> {return $n ^ -1;};
    $to_string = (dynamic $n) ==> {
      return $runtime["caml_format_int"]($cst_d, $n);
    };
    $of_string_opt = (dynamic $s) ==> {
      try {
        $a_ = Vector{0, $runtime["caml_int_of_string"]($s)} as dynamic;
        return $a_;
      }
      catch(\Throwable $b_) {
        $b_ = $runtime["caml_wrap_exception"]($b_);
        if ($b_[1] === $Failure) {return 0;}
        throw $caml_wrap_thrown_exception_reraise($b_) as \Throwable;
      }
    };
    $compare = (dynamic $x, dynamic $y) ==> {
      return $runtime["caml_int_compare"]($x, $y);
    };
    $equal = (dynamic $x, dynamic $y) ==> {
      return 0 === $compare($x, $y) ? 1 : (0);
    };
    $Int32 = Vector{
      0,
      $zero,
      $one,
      $minus_one,
      $succ,
      $pred,
      $abs,
      $max_int,
      $min_int,
      $lognot,
      $of_string_opt,
      $to_string,
      $compare,
      $equal
    } as dynamic;
    
     return ($Int32);

  }
  public static function succ(dynamic $n): dynamic {
    return static::callRehackFunction(static::requireModule()[4], varray[$n]);
  }
  public static function pred(dynamic $n): dynamic {
    return static::callRehackFunction(static::requireModule()[5], varray[$n]);
  }
  public static function abs(dynamic $n): dynamic {
    return static::callRehackFunction(static::requireModule()[6], varray[$n]);
  }
  public static function lognot(dynamic $n): dynamic {
    return static::callRehackFunction(static::requireModule()[9], varray[$n]);
  }
  public static function of_string_opt(dynamic $s): dynamic {
    return static::callRehackFunction(static::requireModule()[10], varray[$s]);
  }
  public static function to_string(dynamic $n): dynamic {
    return static::callRehackFunction(static::requireModule()[11], varray[$n]);
  }
  public static function compare(dynamic $x, dynamic $y): dynamic {
    return static::callRehackFunction(static::requireModule()[12], varray[$x, $y]);
  }
  public static function equal(dynamic $x, dynamic $y): dynamic {
    return static::callRehackFunction(static::requireModule()[13], varray[$x, $y]);
  }

}
/* Hashing disabled */