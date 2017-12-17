program transposMatriks;
var
  a,b,c,d,e,f,g,h,i:shortint;

procedure swap(var x,y:shortint);
var
  tmp:shortint;
begin
  tmp:=x;
  x:=y;
  y:=tmp;
end;

begin
  readln(a,b,c);
  readln(d,e,f);
  readln(g,h,i);
  swap(b,d);
  swap(c,g);
  swap(f,h);
  writeln(a,' ',b,' ',c);
  writeln(d,' ',e,' ',f);
  writeln(g,' ',h,' ',i);
end.