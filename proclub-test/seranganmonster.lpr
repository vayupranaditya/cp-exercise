program seranganmonster;
uses crt;
var
		hp,n:integer;
		a,action,tipe:string;
begin
	hp:=1000;
	read(a);
        action=extractword(0,a,' ');
        writeln('==',action,'==');
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