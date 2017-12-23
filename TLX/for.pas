program perulangan_for;
var
  n,b,i:integer;
  jum:longint;
begin
  readln(n);
  jum:=0;
  for i:=1 to n do
    begin
      read(b);
      jum:=jum+b;
    end;
  writeln(jum);
end.