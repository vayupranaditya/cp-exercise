program faktor_bilangan;
var
  i,n:longint;
begin
  readln(n);
  for i:=n downto 1 do
    begin
      if ((n mod i)=0) then
        begin
          writeln(i);
        end;
    end;
end.