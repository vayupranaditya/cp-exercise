program a_tambah_b;
var
	a,b:shortint;
begin
	read(a,b);
	if (a>=1) AND (a<=100) AND (b>=1) AND (b<=100) then
		writeln(a+b);
end.