<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class Lazy {
  <<__Override, __Memoize>>
  public static function requireModule() : Vector<dynamic> {
    
    $runtime =  (\Rehack\GlobalObject::get() as dynamic)->jsoo_runtime ;
    $caml_obj_tag = $runtime["caml_obj_tag"];
    $Obj =  Obj::requireModule ();
    $CamlinternalLazy =  CamlinternalLazy::requireModule ();
    $Undefined = $CamlinternalLazy[1];
    $force_val = $CamlinternalLazy[5];
    $from_fun = (dynamic $f) ==> {
      $x = $runtime["caml_obj_block"]($Obj[6], 1);
      $x[1] = $f;
      return $x;
    };
    $from_val = (dynamic $v) ==> {
      $t = $caml_obj_tag($v);
      if ($t !== $Obj[10]) {
        if ($t !== $Obj[6]) {if ($t !== $Obj[14]) {return $v;}}
      }
      return $runtime["caml_lazy_make_forward"]($v);
    };
    $is_val = (dynamic $l) ==> {
      return $caml_obj_tag($l) !== $Obj[6] ? 1 : (0);
    };
    $Lazy = Vector{
      0,
      $Undefined,
      $force_val,
      $from_fun,
      $from_val,
      $is_val,
      $from_fun,
      $from_val,
      $is_val
    } as dynamic;
    
     return ($Lazy);

  }
  public static function from_fun(dynamic $f): dynamic {
    return static::callRehackFunction(static::requireModule()[3], varray[$f]);
  }
  public static function from_val(dynamic $v): dynamic {
    return static::callRehackFunction(static::requireModule()[4], varray[$v]);
  }
  public static function is_val(dynamic $l): dynamic {
    return static::callRehackFunction(static::requireModule()[5], varray[$l]);
  }

}
/* Hashing disabled */