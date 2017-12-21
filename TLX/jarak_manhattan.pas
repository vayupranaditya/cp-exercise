program jarak_manhattan;
var
  x1,x2,y1,y2,x,y:longint;
begin
  readln(x1,y1,x2,y2);
  x:=x1-x2;
  y:=y1-y2;
  if (x<0) then
    x:=-1*x;
  if (y<0) then
    y:=-1*y;
  writeln(x+y);
end.