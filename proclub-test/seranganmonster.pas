program seranganmonster;
uses crt;
var
		hp,n:integer;
		action,tipe:string;
begin
	hp:=1000;
	read(action, n);
	if (action='attack') then begin
		readln(tipe);
		if (tipe='critical') then begin
			n:=2*n;
		end else if (tipe='dodge') then begin
			n:=0;
		end;
		hp:=hp-n;
	end;
	writeln(hp);
	readln;
end.