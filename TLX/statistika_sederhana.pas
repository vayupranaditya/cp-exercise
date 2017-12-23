program statistika_sederhana;
var
  n,i:shortint;
  x,min,max:longint;
begin
  readln(n);
  min:=100000;
  max:=-100000;
  for i:=1 to n do
    begin
      read(x);
      if (min>x) then
        begin
          min:=x;
        end;
      if (max<x) then
        begin
          max:=x;
        end;
    end;
  writeln(max,' ',min);
end.