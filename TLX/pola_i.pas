program pola_i;
var
  n,k,i:shortint;
begin
  readln(n,k);
  for i:=1 to n-1 do
    begin
      if ((i mod k)=0) then
        begin
          write('* ');
        end
      else
        begin
          write(i,' ');
        end;
    end;
  if ((n mod k)=0) then
    begin
      writeln('*');
    end
  else
    begin
      writeln(n);
    end;
end.