program while_pencacah;
var
  n:integer;
  sum:longint;
begin
  sum:=0;
  while (not(eof(input))) do
    begin
      readln(n);
      sum:=sum+n;
    end;
  writeln(sum);
end.