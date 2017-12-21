program if_then_else;
var
  n:longint;
begin
  readln(n);
  if (n>0) then begin
    writeln('positif');
  end else if (n<0) then begin
    writeln('negatif');
  end else begin
    writeln('nol');
  end;
end.