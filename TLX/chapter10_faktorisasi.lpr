program chapter10_faktorisasi;
var
  n,p,a,turn:integer;
begin
  readln(n);
  p:=2;
  a:=0;
  turn:=0;
  while (n > 1) do begin
       a:=0;
       while (n mod p = 0) do begin
             a:=a+1;
             n:=n div p;
       end;
       if(a>0) then begin
           turn:=turn+1;
           if (turn=1) then begin
               if (a>1) then begin
                    write(p,'^',a);
               end else begin
                    write(p);
               end;
           end else begin
               if (a>1) then begin
                    write(' x ',p,'^',a);
               end else begin
                    write(' x ',p);
               end;
           end;
       end;
       p:=p+1;
  end;
  readln;
end.
