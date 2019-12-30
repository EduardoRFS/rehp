<?hh // strict
// Copyright 2004-present Facebook. All Rights Reserved.

/**
 * @generated
 *
 */
namespace Rehack;

final class Js_of_ocaml__WebSockets {
  <<__Override, __Memoize>>
  public static function requireModule() : Vector<dynamic> {
    
    $runtime =  (\Rehack\GlobalObject::get() as dynamic)->jsoo_runtime ;
    $call1 = $runtime["caml_call1"];
    $Js_of_ocaml_Js =  Js_of_ocaml__Js::requireModule ();
    $a_ = (dynamic $x) ==> {
      return $call1(
        $runtime["caml_get_public_method"]($x, -492394744, 211),
        $x
      );
    };
    $b_ = $Js_of_ocaml_Js[50][1];
    $webSocket = ((dynamic $t0, dynamic $param) ==> {return $t0->WebSocket;})($b_, $a_);
    $is_supported = (dynamic $param) ==> {
      return $call1($Js_of_ocaml_Js[6][5], $webSocket);
    };
    $Js_of_ocaml_WebSockets = Vector{
      0,
      $webSocket,
      $webSocket,
      $webSocket,
      $is_supported
    } as dynamic;
    
     return ($Js_of_ocaml_WebSockets);

  }
  public static function is_supported(dynamic $param): dynamic {
    return static::callRehackFunction(static::requireModule()[4], varray[$param]);
  }

}
/* Hashing disabled */