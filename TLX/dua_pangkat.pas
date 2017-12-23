program dua_pangkat;
var
  n,res:longint;
  i,pangkat:integer;
begin
  readln(n);
  pangkat:=1;
  res:=1;
  while (res<n) do
    begin
      res:=1;
      for i:=1 to pangkat do
        begin
          res:=res*2;
        end;
      pangkat:=pangkat+1;
    end;
  if (res=n) then
    writeln('ya')
  else
    writeln('bukan');
end.