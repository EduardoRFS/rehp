type t =
  | Php
  | Js
  | Python

let to_string t = match t with
| Php -> "php"
| Js -> "js"
| Python -> "python"

let from_string s =
  if s = "php" then
    Php
  else
    if s = "js" then Js
    else
      if s = "python" then Python
      else raise (Invalid_argument (s ^ " is not a valid backend"))

let extension = to_string
