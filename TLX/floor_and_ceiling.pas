program floor_and_ceiling;
var
  x:real;
begin
  readln(x);
  if ((trunc(x)-x)=0) then
    begin
      writeln(x:0:0,' ',x:0:0);
    end
  else
    begin
      if (x<0) then
        begin
          writeln(trunc(x)-1,' ',trunc(x));
        end
      else
        begin
          writeln(trunc(x),' ',trunc(x)+1);
        end;
    end;
end.