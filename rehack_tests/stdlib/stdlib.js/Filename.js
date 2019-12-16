/**
 * Filename
 * @providesModule Filename
 */
"use strict";
var Buffer = require('Buffer.js');
var CamlinternalLazy = require('CamlinternalLazy.js');
var Pervasives = require('Pervasives.js');
var Printf = require('Printf.js');
var Random = require('Random.js');
var String_ = require('String_.js');
var Sys = require('Sys.js');
var Not_found = require('Not_found.js');
var Sys_error = require('Sys_error.js');
var runtime = require('runtime.js');

let joo_global_object = global;



var runtime = joo_global_object.jsoo_runtime;
var caml_ml_string_length = runtime["caml_ml_string_length"];
var string = runtime["caml_new_string"];
var caml_string_equal = runtime["caml_string_equal"];
var caml_string_get = runtime["caml_string_get"];
var caml_string_notequal = runtime["caml_string_notequal"];
var caml_sys_getenv = runtime["caml_sys_getenv"];
var caml_trampoline = runtime["caml_trampoline"];
var caml_trampoline_return = runtime["caml_trampoline_return"];
var caml_wrap_thrown_exception_reraise = runtime
 ["caml_wrap_thrown_exception_reraise"];

function call1(f, a0) {
  return f.length === 1 ? f(a0) : runtime["caml_call_gen"](f, [a0]);
}

function call2(f, a0, a1) {
  return f.length === 2 ? f(a0, a1) : runtime["caml_call_gen"](f, [a0,a1]);
}

function call3(f, a0, a1, a2) {
  return f.length === 3 ?
    f(a0, a1, a2) :
    runtime["caml_call_gen"](f, [a0,a1,a2]);
}

function call4(f, a0, a1, a2, a3) {
  return f.length === 4 ?
    f(a0, a1, a2, a3) :
    runtime["caml_call_gen"](f, [a0,a1,a2,a3]);
}

var global_data = runtime["caml_get_global_data"]();
var cst_Filename_chop_extension = string("Filename.chop_extension");
var cst__10 = string("");
var cst_Filename_chop_suffix = string("Filename.chop_suffix");
var cst__9 = string("");
var cst__7 = string("./");
var cst__6 = string(".\\");
var cst__5 = string("../");
var cst__4 = string("..\\");
var cst__2 = string("./");
var cst__1 = string("../");
var cst__0 = string("");
var cst = string("");
var current_dir_name = string(".");
var parent_dir_name = string("..");
var dir_sep = string("/");
var cst_TMPDIR = string("TMPDIR");
var cst_tmp = string("/tmp");
var cst__3 = string("'\\''");
var current_dir_name__0 = string(".");
var parent_dir_name__0 = string("..");
var dir_sep__0 = string("\\");
var cst_TEMP = string("TEMP");
var cst__8 = string(".");
var current_dir_name__1 = string(".");
var parent_dir_name__1 = string("..");
var dir_sep__1 = string("/");
var cst_Cygwin = string("Cygwin");
var cst_Win32 = string("Win32");
var Pervasives = global_data["Pervasives"];
var Sys_error = global_data["Sys_error"];
var CamlinternalLazy = global_data["CamlinternalLazy"];
var Random = global_data["Random"];
var Printf = global_data["Printf"];
var String = global_data["String_"];
var Buffer = global_data["Buffer"];
var Not_found = global_data["Not_found"];
var Sys = global_data["Sys"];
var e_ = [0,7,0];
var d_ = [0,1,[0,3,[0,5,0]]];
var c_ = [0,[2,0,[4,6,[0,2,6],0,[2,0,0]]],string("%s%06x%s")];

function generic_quote(quotequote, s) {
  var l = caml_ml_string_length(s);
  var b = call1(Buffer[1], l + 20 | 0);
  call2(Buffer[10], b, 39);
  var ar_ = l + -1 | 0;
  var aq_ = 0;
  if (! (ar_ < 0)) {
    var i = aq_;
    for (; ; ) {
      if (39 === caml_string_get(s, i)) call2(Buffer[14], b, quotequote);
      else {var at_ = caml_string_get(s, i);call2(Buffer[10], b, at_);}
      var as_ = i + 1 | 0;
      if (ar_ !== i) {var i = as_;continue;}
      break;
    }
  }
  call2(Buffer[10], b, 39);
  return call1(Buffer[2], b);
}

function generic_basename(is_dir_sep, current_dir_name, name) {
  function find_beg(n, p) {
    var n__0 = n;
    for (; ; ) {
      if (0 <= n__0) {
        if (call2(is_dir_sep, name, n__0)) {
          return call3(String[4], name, n__0 + 1 | 0, (p - n__0 | 0) + -1 | 0);
        }
        var n__1 = n__0 + -1 | 0;
        var n__0 = n__1;
        continue;
      }
      return call3(String[4], name, 0, p);
    }
  }
  function find_end(n) {
    var n__0 = n;
    for (; ; ) {
      if (0 <= n__0) {
        if (call2(is_dir_sep, name, n__0)) {
          var n__1 = n__0 + -1 | 0;
          var n__0 = n__1;
          continue;
        }
        return find_beg(n__0, n__0 + 1 | 0);
      }
      return call3(String[4], name, 0, 1);
    }
  }
  return caml_string_equal(name, cst) ?
    current_dir_name :
    find_end(caml_ml_string_length(name) + -1 | 0);
}

function generic_dirname(is_dir_sep, current_dir_name, name) {
  function intermediate_sep(n) {
    var n__0 = n;
    for (; ; ) {
      if (0 <= n__0) {
        if (call2(is_dir_sep, name, n__0)) {
          var n__1 = n__0 + -1 | 0;
          var n__0 = n__1;
          continue;
        }
        return call3(String[4], name, 0, n__0 + 1 | 0);
      }
      return call3(String[4], name, 0, 1);
    }
  }
  function base(n) {
    var n__0 = n;
    for (; ; ) {
      if (0 <= n__0) {
        if (call2(is_dir_sep, name, n__0)) {return intermediate_sep(n__0);}
        var n__1 = n__0 + -1 | 0;
        var n__0 = n__1;
        continue;
      }
      return current_dir_name;
    }
  }
  function trailing_sep(n) {
    var n__0 = n;
    for (; ; ) {
      if (0 <= n__0) {
        if (call2(is_dir_sep, name, n__0)) {
          var n__1 = n__0 + -1 | 0;
          var n__0 = n__1;
          continue;
        }
        return base(n__0);
      }
      return call3(String[4], name, 0, 1);
    }
  }
  return caml_string_equal(name, cst__0) ?
    current_dir_name :
    trailing_sep(caml_ml_string_length(name) + -1 | 0);
}

function is_dir_sep(s, i) {return 47 === caml_string_get(s, i) ? 1 : 0;}

function is_relative(n) {
  var ao_ = caml_ml_string_length(n) < 1 ? 1 : 0;
  var ap_ = ao_ ? ao_ : 47 !== caml_string_get(n, 0) ? 1 : 0;
  return ap_;
}

function is_implicit(n) {
  var aj_ = is_relative(n);
  if (aj_) {
    var ak_ = caml_ml_string_length(n) < 2 ? 1 : 0;
    var al_ = ak_ ?
      ak_ :
      caml_string_notequal(call3(String[4], n, 0, 2), cst__2);
    if (al_) {
      var am_ = caml_ml_string_length(n) < 3 ? 1 : 0;
      var an_ = am_ ?
        am_ :
        caml_string_notequal(call3(String[4], n, 0, 3), cst__1);
    }
    else var an_ = al_;
  }
  else var an_ = aj_;
  return an_;
}

function check_suffix(name, suff) {
  var ah_ = caml_ml_string_length(suff) <= caml_ml_string_length(name) ? 1 : 0;
  var ai_ = ah_ ?
    caml_string_equal(
     call3(
       String[4],
       name,
       caml_ml_string_length(name) - caml_ml_string_length(suff) | 0,
       caml_ml_string_length(suff)
     ),
     suff
   ) :
    ah_;
  return ai_;
}

try {var o_ = caml_sys_getenv(cst_TMPDIR);var temp_dir_name = o_;}
catch(ag_) {
  ag_ = runtime["caml_wrap_exception"](ag_);
  if (ag_ !== Not_found) {throw caml_wrap_thrown_exception_reraise(ag_);}
  var temp_dir_name = cst_tmp;
}

function quote(af_) {return generic_quote(cst__3, af_);}

function basename(ae_) {
  return generic_basename(is_dir_sep, current_dir_name, ae_);
}

function dirname(ad_) {
  return generic_dirname(is_dir_sep, current_dir_name, ad_);
}

function is_dir_sep__0(s, i) {
  var c = caml_string_get(s, i);
  var aa_ = 47 === c ? 1 : 0;
  if (aa_) var ab_ = aa_;
  else {var ac_ = 92 === c ? 1 : 0;var ab_ = ac_ ? ac_ : 58 === c ? 1 : 0;}
  return ab_;
}

function is_relative__0(n) {
  var U_ = caml_ml_string_length(n) < 1 ? 1 : 0;
  var V_ = U_ ? U_ : 47 !== caml_string_get(n, 0) ? 1 : 0;
  if (V_) {
    var W_ = caml_ml_string_length(n) < 1 ? 1 : 0;
    var X_ = W_ ? W_ : 92 !== caml_string_get(n, 0) ? 1 : 0;
    if (X_) {
      var Y_ = caml_ml_string_length(n) < 2 ? 1 : 0;
      var Z_ = Y_ ? Y_ : 58 !== caml_string_get(n, 1) ? 1 : 0;
    }
    else var Z_ = X_;
  }
  else var Z_ = V_;
  return Z_;
}

function is_implicit__0(n) {
  var L_ = is_relative__0(n);
  if (L_) {
    var M_ = caml_ml_string_length(n) < 2 ? 1 : 0;
    var N_ = M_ ? M_ : caml_string_notequal(call3(String[4], n, 0, 2), cst__7);
    if (N_) {
      var O_ = caml_ml_string_length(n) < 2 ? 1 : 0;
      var P_ = O_ ?
        O_ :
        caml_string_notequal(call3(String[4], n, 0, 2), cst__6);
      if (P_) {
        var Q_ = caml_ml_string_length(n) < 3 ? 1 : 0;
        var R_ = Q_ ?
          Q_ :
          caml_string_notequal(call3(String[4], n, 0, 3), cst__5);
        if (R_) {
          var S_ = caml_ml_string_length(n) < 3 ? 1 : 0;
          var T_ = S_ ?
            S_ :
            caml_string_notequal(call3(String[4], n, 0, 3), cst__4);
        }
        else var T_ = R_;
      }
      else var T_ = P_;
    }
    else var T_ = N_;
  }
  else var T_ = L_;
  return T_;
}

function check_suffix__0(name, suff) {
  var I_ = caml_ml_string_length(suff) <= caml_ml_string_length(name) ? 1 : 0;
  if (I_) {
    var s = call3(
      String[4],
      name,
      caml_ml_string_length(name) - caml_ml_string_length(suff) | 0,
      caml_ml_string_length(suff)
    );
    var J_ = call1(String[30], suff);
    var K_ = caml_string_equal(call1(String[30], s), J_);
  }
  else var K_ = I_;
  return K_;
}

try {var n_ = caml_sys_getenv(cst_TEMP);var temp_dir_name__0 = n_;}
catch(H_) {
  H_ = runtime["caml_wrap_exception"](H_);
  if (H_ !== Not_found) {throw caml_wrap_thrown_exception_reraise(H_);}
  var temp_dir_name__0 = cst__8;
}

function quote__0(s) {
  var l = caml_ml_string_length(s);
  var b = call1(Buffer[1], l + 20 | 0);
  call2(Buffer[10], b, 34);
  function add_bs(n) {
    var F_ = 1;
    if (! (n < 1)) {
      var j = F_;
      for (; ; ) {
        call2(Buffer[10], b, 92);
        var G_ = j + 1 | 0;
        if (n !== j) {var j = G_;continue;}
        break;
      }
    }
    return 0;
  }
  function loop__0(counter, i) {
    var i__0 = i;
    for (; ; ) {
      if (i__0 === l) {return call2(Buffer[10], b, 34);}
      var c = caml_string_get(s, i__0);
      if (34 === c) {
        var D_ = 0;
        if (counter < 50) {
          var counter__1 = counter + 1 | 0;
          return loop_bs(counter__1, D_, i__0);
        }
        return caml_trampoline_return(loop_bs, [0,D_,i__0]);
      }
      if (92 === c) {
        var E_ = 0;
        if (counter < 50) {
          var counter__0 = counter + 1 | 0;
          return loop_bs(counter__0, E_, i__0);
        }
        return caml_trampoline_return(loop_bs, [0,E_,i__0]);
      }
      call2(Buffer[10], b, c);
      var i__1 = i__0 + 1 | 0;
      var i__0 = i__1;
      continue;
    }
  }
  function loop_bs(counter, n, i) {
    var n__0 = n;
    var i__0 = i;
    for (; ; ) {
      if (i__0 === l) {call2(Buffer[10], b, 34);return add_bs(n__0);}
      var match = caml_string_get(s, i__0);
      if (34 === match) {
        add_bs((2 * n__0 | 0) + 1 | 0);
        call2(Buffer[10], b, 34);
        var C_ = i__0 + 1 | 0;
        if (counter < 50) {
          var counter__1 = counter + 1 | 0;
          return loop__0(counter__1, C_);
        }
        return caml_trampoline_return(loop__0, [0,C_]);
      }
      if (92 === match) {
        var i__1 = i__0 + 1 | 0;
        var n__1 = n__0 + 1 | 0;
        var n__0 = n__1;
        var i__0 = i__1;
        continue;
      }
      add_bs(n__0);
      if (counter < 50) {
        var counter__0 = counter + 1 | 0;
        return loop__0(counter__0, i__0);
      }
      return caml_trampoline_return(loop__0, [0,i__0]);
    }
  }
  function loop(i) {return caml_trampoline(loop__0(0, i));}
  loop(0);
  return call1(Buffer[2], b);
}

function has_drive(s) {
  function is_letter(param) {
    var switch__0 = 91 <= param ?
      25 < (param + -97 | 0) >>> 0 ? 0 : 1 :
      65 <= param ? 1 : 0;
    return switch__0 ? 1 : 0;
  }
  var z_ = 2 <= caml_ml_string_length(s) ? 1 : 0;
  if (z_) {
    var A_ = is_letter(caml_string_get(s, 0));
    var B_ = A_ ? 58 === caml_string_get(s, 1) ? 1 : 0 : A_;
  }
  else var B_ = z_;
  return B_;
}

function drive_and_path(s) {
  if (has_drive(s)) {
    var y_ = call3(String[4], s, 2, caml_ml_string_length(s) + -2 | 0);
    return [0,call3(String[4], s, 0, 2),y_];
  }
  return [0,cst__9,s];
}

function dirname__0(s) {
  var match = drive_and_path(s);
  var path = match[2];
  var drive = match[1];
  var dir = generic_dirname(is_dir_sep__0, current_dir_name__0, path);
  return call2(Pervasives[16], drive, dir);
}

function basename__0(s) {
  var match = drive_and_path(s);
  var path = match[2];
  return generic_basename(is_dir_sep__0, current_dir_name__0, path);
}

function basename__1(x_) {
  return generic_basename(is_dir_sep__0, current_dir_name__1, x_);
}

function dirname__1(w_) {
  return generic_dirname(is_dir_sep__0, current_dir_name__1, w_);
}

var a_ = Sys[5];

if (caml_string_notequal(a_, cst_Cygwin)) if (caml_string_notequal(a_, cst_Win32)) {
  var current_dir_name__2 = current_dir_name;
  var parent_dir_name__2 = parent_dir_name;
  var dir_sep__2 = dir_sep;
  var is_dir_sep__1 = is_dir_sep;
  var is_relative__1 = is_relative;
  var is_implicit__1 = is_implicit;
  var check_suffix__1 = check_suffix;
  var temp_dir_name__1 = temp_dir_name;
  var quote__1 = quote;
  var basename__2 = basename;
  var dirname__2 = dirname;
  var switch__0 = 1;
}
else {
  var f_ = [
    0,
    current_dir_name__0,
    parent_dir_name__0,
    dir_sep__0,
    is_dir_sep__0,
    is_relative__0,
    is_implicit__0,
    check_suffix__0,
    temp_dir_name__0,
    quote__0,
    basename__0,
    dirname__0
  ];
  var switch__0 = 0;
}
else {
  var f_ = [
    0,
    current_dir_name__1,
    parent_dir_name__1,
    dir_sep__1,
    is_dir_sep__0,
    is_relative__0,
    is_implicit__0,
    check_suffix__0,
    temp_dir_name,
    quote,
    basename__1,
    dirname__1
  ];
  var switch__0 = 0;
}

if (! switch__0) {
  var g_ = f_[11];
  var h_ = f_[10];
  var i_ = f_[9];
  var j_ = f_[8];
  var k_ = f_[3];
  var l_ = f_[2];
  var m_ = f_[1];
  var current_dir_name__2 = m_;
  var parent_dir_name__2 = l_;
  var dir_sep__2 = k_;
  var is_dir_sep__1 = is_dir_sep__0;
  var is_relative__1 = is_relative__0;
  var is_implicit__1 = is_implicit__0;
  var check_suffix__1 = check_suffix__0;
  var temp_dir_name__1 = j_;
  var quote__1 = i_;
  var basename__2 = h_;
  var dirname__2 = g_;
}

function concat(dirname, filename) {
  var l = caml_ml_string_length(dirname);
  if (0 !== l) {
    if (! is_dir_sep__1(dirname, l + -1 | 0)) {
      var v_ = call2(Pervasives[16], dir_sep__2, filename);
      return call2(Pervasives[16], dirname, v_);
    }
  }
  return call2(Pervasives[16], dirname, filename);
}

function chop_suffix(name, suff) {
  var n = caml_ml_string_length(name) - caml_ml_string_length(suff) | 0;
  return 0 <= n ?
    call3(String[4], name, 0, n) :
    call1(Pervasives[1], cst_Filename_chop_suffix);
}

function extension_len(name) {
  function check(i0, i) {
    var i__0 = i;
    for (; ; ) {
      if (0 <= i__0) {
        if (! is_dir_sep__1(name, i__0)) {
          if (46 === caml_string_get(name, i__0)) {
            var i__1 = i__0 + -1 | 0;
            var i__0 = i__1;
            continue;
          }
          return caml_ml_string_length(name) - i0 | 0;
        }
      }
      return 0;
    }
  }
  function search_dot(i) {
    var i__0 = i;
    for (; ; ) {
      if (0 <= i__0) {
        if (! is_dir_sep__1(name, i__0)) {
          if (46 === caml_string_get(name, i__0)) {return check(i__0, i__0 + -1 | 0);}
          var i__1 = i__0 + -1 | 0;
          var i__0 = i__1;
          continue;
        }
      }
      return 0;
    }
  }
  return search_dot(caml_ml_string_length(name) + -1 | 0);
}

function extension(name) {
  var l = extension_len(name);
  return 0 === l ?
    cst__10 :
    call3(String[4], name, caml_ml_string_length(name) - l | 0, l);
}

function chop_extension(name) {
  var l = extension_len(name);
  return 0 === l ?
    call1(Pervasives[1], cst_Filename_chop_extension) :
    call3(String[4], name, 0, caml_ml_string_length(name) - l | 0);
}

function remove_extension(name) {
  var l = extension_len(name);
  return 0 === l ?
    name :
    call3(String[4], name, 0, caml_ml_string_length(name) - l | 0);
}

function b_(u_) {return call1(Random[11][2], 0);}

var prng = [246,b_];

function temp_file_name(temp_dir, prefix, suffix) {
  var s_ = runtime["caml_obj_tag"](prng);
  var t_ = 250 === s_ ?
    b_ :
    246 === s_ ? call1(CamlinternalLazy[2], prng) : prng;
  var rnd = call1(Random[11][4], t_) & 16777215;
  return concat(temp_dir, call4(Printf[4], c_, prefix, rnd, suffix));
}

var current_temp_dir_name = [0,temp_dir_name__1];

function set_temp_dir_name(s) {current_temp_dir_name[1] = s;return 0;}

function get_temp_dir_name(param) {return current_temp_dir_name[1];}

function temp_file(opt, prefix, suffix) {
  if (opt) {
    var sth = opt[1];
    var temp_dir = sth;
  }
  else var temp_dir = current_temp_dir_name[1];
  function try_name(counter) {
    var counter__0 = counter;
    for (; ; ) {
      var name = temp_file_name(temp_dir, prefix, suffix);
      try {
        runtime["caml_sys_close"](runtime["caml_sys_open"](name, d_, 384));
        return name;
      }
      catch(e) {
        e = runtime["caml_wrap_exception"](e);
        if (e[1] === Sys_error) {
          if (1e3 <= counter__0) {
            throw caml_wrap_thrown_exception_reraise(e);
          }
          var counter__1 = counter__0 + 1 | 0;
          var counter__0 = counter__1;
          continue;
        }
        throw caml_wrap_thrown_exception_reraise(e);
      }
    }
  }
  return try_name(0);
}

function open_temp_file(opt, q_, p_, prefix, suffix) {
  if (opt) {
    var sth = opt[1];
    var mode = sth;
  }
  else var mode = e_;
  if (q_) {
    var sth__0 = q_[1];
    var perms = sth__0;
  }
  else var perms = 384;
  if (p_) {
    var sth__1 = p_[1];
    var temp_dir = sth__1;
  }
  else var temp_dir = current_temp_dir_name[1];
  function try_name(counter) {
    var counter__0 = counter;
    for (; ; ) {
      var name = temp_file_name(temp_dir, prefix, suffix);
      try {
        var r_ = [
          0,
          name,
          call3(Pervasives[50], [0,1,[0,3,[0,5,mode]]], perms, name)
        ];
        return r_;
      }
      catch(e) {
        e = runtime["caml_wrap_exception"](e);
        if (e[1] === Sys_error) {
          if (1e3 <= counter__0) {
            throw caml_wrap_thrown_exception_reraise(e);
          }
          var counter__1 = counter__0 + 1 | 0;
          var counter__0 = counter__1;
          continue;
        }
        throw caml_wrap_thrown_exception_reraise(e);
      }
    }
  }
  return try_name(0);
}

var Filename = [
  0,
  current_dir_name__2,
  parent_dir_name__2,
  dir_sep__2,
  concat,
  is_relative__1,
  is_implicit__1,
  check_suffix__1,
  chop_suffix,
  extension,
  remove_extension,
  chop_extension,
  basename__2,
  dirname__2,
  temp_file,
  open_temp_file,
  get_temp_dir_name,
  set_temp_dir_name,
  temp_dir_name__1,
  quote__1
];

runtime["caml_register_global"](40, Filename, "Filename");


module.exports = global.jsoo_runtime.caml_get_global_data().Filename;
/* Hashing disabled */
