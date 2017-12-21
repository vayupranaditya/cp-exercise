program if_then_multi;
var
  x:longint;
begin
  readln(x);
  if ((x>0) and (x mod 2=0)) then begin
    writeln(x);
  end;
end.