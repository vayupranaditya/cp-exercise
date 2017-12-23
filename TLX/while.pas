program perulangan_while;
var
  strs:string;
begin
  while (not(eof(input))) do
    begin
      readln(strs);
      writeln(strs);
    end;
end.