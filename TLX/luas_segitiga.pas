program luas_segitiga;
var
	a,t:integer;
	luas:real;
begin
	read(a,t);
	if (a>=1) AND (a<=1000) AND (t>=1) AND (t<=1000) then
	begin
		luas:=a*t/2;
		writeln(luas:0:2);
	end;
end.